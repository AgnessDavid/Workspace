<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des données du formulaire
    $nom = htmlspecialchars(trim($_POST['nom']));
    $email = htmlspecialchars(trim($_POST['email']));
    $sujet = htmlspecialchars(trim($_POST['sujet']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Validation des champs
    if (empty($nom) || empty($email) || empty($sujet) || empty($message)) {
        echo "Tous les champs doivent être remplis.";
        exit;
    }

    // Préparation des en-têtes
    $to = 'contact@bonovapro.com';  // Remplace cette adresse par l'adresse e-mail du destinataire
    $headers = "From:$email\r\n";
    $headers .= "Reply-To: $email\r\n";
}

?>

<!doctype html>
<html lang="en">

<head>
    <title>RESIDENCE EMMANUEL</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon//favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon//favicon-16x16.png">
    <link rel="manifest" href="favicon//site.webmanifest">
    <link rel="mask-icon" href="favicon//safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="css/bootstrap.css">

    <link rel="stylesheet" href="style.css">


</head>

<body>


    <header class="navbar navbar-expand-lg navbar-dark bg-black container-fluid px-3">
        <a href="#" class="navbar-brand damesg">
            <img src="Plan de travail 1.png" alt="photo" width="50px">
        </a>

        <span class="text-light ms-3 damesK">RESIDENCE EMMANUEL</span>

        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar-content">

            <span class="navbar-toggler-icon">


            </span>

        </button>


        <nav class="collapse navbar-collapse" id="navbar-content">

            <ul class="navbar-nav nav-pills ms-auto">
                <li class="nav-item"><a class="nav-link active d-flex align-items-center  justify-content-center dames3" href="index.html">Accueil</a></li>

                <li class="nav-item"><a class="nav-link d-flex align-items-center  justify-content-center dames3" href="index3.html">A propos</a></li>

                <li class="nav-item"><a class="nav-link d-flex align-items-center  justify-content-center dames3" href="index2.php">Contact</a></li>
            </ul>


        </nav>


    </header>




    <center>

        <p class="mt-5" style="color:red">

            <?php

            // Envoi de l'e-mail
            if (mail($to, $sujet, $message, $headers)) {
                echo "Email envoyé avec succès 
                $nom!";
            } else {
                echo "Échec de l'envoi de l'email.";
            }



            ?>

        </p>
    </center>






    <div class="container">
        <footer class="py-5">
            <div class="row">

                <div class="col-12  col-md-5 mb-3">
                    <h3>RESIDENCE EMMANUEL</h3>
                    <ul class="nav flex-column">
                        <li class="nav-item"><a href="index.html" class="nav-link px-2 text-body-secondary dames2 " style="font-size: 20px;">Accueil</a></li>

                        <li class="nav-item"><a href="index3.html" class="nav-link px-2 text-body-secondary dames2 " style="font-size: 20px;">A propos</a></li>

                        <li class="nav-item"><a href="index2.php" class="nav-link px-2 text-body-secondary dames2" style="font-size: 20px;">Contact</a></li>
                    </ul>
                </div>

                <div class="col-md-5 offset-md-1 mb-3">

                    <form action="index4.php" method="post">

                        <h5>Subscribe to our newsletter</h5>

                        <p>Monthly digest of what's new and exciting from us.</p>

                        <div class="d-flex flex-column flex-sm-row w-100 gap-2">

                            <label for="email" class="visually-hidden">Email address</label>

                            <input type="email" id="email" name="email" placeholder="Email address">

                            <button class="btn1" type="submit" value="Envoyer">Subscribe</button>


                        </div>
                    </form>

                </div>
            </div>

            <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
                <p class="text-center text-body-secondary" style="font-size: 15px;">&copy; 2024 RESIDENCE EMMANUEL -
                    Tous droits réservés -
                    Conditions générales -
                    Politique de confidentialité</p>
                <div class="so-icons">
                    <a href="https://www.facebook.com/share/p/XuGsAHYgvQ6zegpx/?mibextid=qi2Omg"><ion-icon name="logo-facebook" style="font-size: 50px;"></ion-icon></a>
                </div>
            </div>
        </footer>
    </div>





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


    <script src="js/bootstrap.js"></script>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js">

    </script>

</body>

</html>