<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réservation de Maison</title>
</head>

<body>
    <h2>Réserver la Maison</h2>
    <form action="reservation.php" method="POST">
        <label for="name">Nom :</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email :</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="check_in">Date d'arrivée :</label>
        <input type="date" id="check_in" name="check_in" required><br><br>

        <label for="check_out">Date de départ :</label>
        <input type="date" id="check_out" name="check_out" required><br><br>

        <input type="submit" value="Réserver">
    </form>
</body>

</html>