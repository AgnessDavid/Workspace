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
  <link rel="stylesheet" href="style2.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="style3.css">

</head>

<body>



  <div class="spinner-wrapper">
    <div class="spinner-grow text-primary" role="status">
      <span class="visually-hidden">Loading...</span>
    </div>

  </div>

  <script>
    const spinnerWrapperEl = document.querySelector('.spinner-wrapper');

    window.addEventListener('load', () => {

      spinnerWrapperEl.style.opacity = '0';
      setTimeout(() => {

        spinnerWrapperEl.style.display = 'none';

      }, 2000);

    });
  </script>



  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      height: 200vh;
      /* Pour avoir de la place à scroller */
      background-color: #f0f0f0;
    }

    .timeline-container {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      z-index: 1000;
    }

    .scroll-line {
      height: 4px;
      width: 0;
      background-color: red;
      transition: width 0.2s ease-out;
    }
  </style>



  <div class="timeline-container">
    <div class="scroll-line"></div>
  </div>

  <script>
    document.addEventListener("scroll", function() {
      const scrollLine = document.querySelector('.scroll-line');
      const documentHeight = document.documentElement.scrollHeight - window.innerHeight;
      const scrollPosition = window.scrollY;
      const scrollPercentage = (scrollPosition / documentHeight) * 100;

      // Met à jour la largeur de la ligne en fonction du pourcentage de défilement
      scrollLine.style.width = scrollPercentage + '%';
    });
  </script>





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




  <!----------------------------------------------------------------------------------------------------------------->

  <div class="container text-center pt-5">
    <h1 class=" border-danger">Lorem ipsum dolor sit </h1>
    <div class="row g-2 pt-5">


      <div class="col-sm-12 col-md-6 col-lg-6 dames6" style="background-color: rgb(255, 0, 0); margin: 5px;  border-radius: 20px;">

        <div class="p-3" style="font-size: 30px;"><ion-icon style=" font-size: 25px;" name="location-outline"></ion-icon>SITUATION GEOGRAPHIQUE</div>
        <u style=" font-size: 20px; color: white;">Angré, Nouveau CHU G4000</u>
        <br>
        92RQ+6X7, Abidjan
      </div>

      <div class="col-12 col-md-6  col-lg-5  dames6" style="background-color: rgb(255, 0, 0); margin: 5px;   border-radius: 20px;">

        <div class="p-3" style="font-size: 32px;"><ion-icon style=" font-size: 25px;" name="call-outline"></ion-icon>CONTACT</div>
        <U style=" font-size: 20px; color: white;">RESIDENCE EMMANUEL</U>
        <p style=" font-size: 18px; color: white;">(+225 0758766868)</p>
        <br>
      </div>
    </div>

    <div class="col-12">

      <div class="p-3" style="font-size: 32px;"><ion-icon style=" font-size: 24px;" name="mail-outline"></ion-icon>EMAIL</div>
      <U style=" font-size: 20px;">laresidenceemmanuel@gmail.com</U>
      <br>

    </div>
  </div>
  </div>





  <center>


    <div class="container pt-5">
      <h1>LOCALISATION</h1>

      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1172.1379607157066!2d-3.96164677637096!3d5.391333523256305!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfc193000a9e94bb%3A0xbaefdb500b05687!2sResidence%20Emmanuel.!5e0!3m2!1sen!2sci!4v1723428934284!5m2!1sen!2sci" width="450" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

    </div>
  </center>

  <!----------------------------------------------------------------------------------------------------------------->


  <hr>
  <center>
    <h1 class="mt-5">Formulaire de Contact</h1>
  </center>

  <form class="mt-5 mb-5" action="envoyer_email.php" method="post">
    <label for="nom">Nom :</label>
    <input type="text" id="nom" name="nom" required placeholder="Entrer votre nom"><br><br>

    <label for="email">E-mail :</label>
    <input type="email" id="email" name="email" required placeholder="Entrer votre email"><br><br>

    <label for="sujet">Sujet :</label>
    <input type="text" id="sujet" name="sujet" required placeholder="Entrer l'objet du message"><br><br>

    <label for="message">Message :</label><br>
    <textarea id="message" name="message" rows="5" cols="40" required placeholder="Entrer votre message"></textarea><br><br>

    <button class="btn1" type="submit" value="Envoyer">Envoyer</button>

  </form>






  <!-----------------------------------------------FOOTER------------------------------------------------------------>

  <hr>

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

              <input type="email" id="email" name="email" placeholder="Email address" required>

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

  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"">

    </script>

  </body>
</html>