<?php
session_start();

try {
    // Connexion à la base de données avec PDO et gestion des erreurs
    $clspit = new PDO("mysql:host=localhost;dbname=wh100255_users;charset=utf8", 'wh100255_users', 'JnBWzvKMydIy');
    $clspit->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Utilisation de requêtes préparées pour éviter les injections SQL
    $name = $_POST['name'];
    $email = $_POST['email'];
    $check_in = $_POST['check_in'];
    $check_out = $_POST['check_out'];

    // Vérification de la disponibilité de la maison
    $checkAvailability = "SELECT * FROM reservations 
                          WHERE (:check_in BETWEEN check_in AND check_out 
                          OR :check_out BETWEEN check_in AND check_out)";

    $stmt = $clspit->prepare($checkAvailability);
    $stmt->execute([
        ':check_in' => $check_in,
        ':check_out' => $check_out
    ]);

    if ($stmt->rowCount() > 0) {
        echo "Désolé, la maison n'est pas disponible pour les dates sélectionnées.";
    } else {
        // Insertion de la réservation dans la base de données
        $sql = "INSERT INTO reservations (name, email, check_in, check_out)
                VALUES (:name, :email, :check_in, :check_out)";

        $stmt = $clspit->prepare($sql);
        $stmt->execute([
            ':name' => $name,
            ':email' => $email,
            ':check_in' => $check_in,
            ':check_out' => $check_out
        ]);

        echo "Réservation effectuée avec succès !";
    }
}
