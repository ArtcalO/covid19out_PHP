<?php include("config.php"); ?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>Remedic - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    
 <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.php"><i class="flaticon-pharmacy"></i><span>COVID-19-</span>OUT</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a href="index.php" class="nav-link">Accueil</a></li>
          <li class="nav-item"><a href="diagnostic.php" class="nav-link">Diagnostic</a></li>
          <li class="nav-item"><a href="apropos.php" class="nav-link">A propos</a></li>
          <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>

          <li class="nav-item dropdown">
                <?php  if (isset($_SESSION['username'])) : ?>
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?php echo $_SESSION['username']; ?>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                  <a class="dropdown-item" href="logout.php"> Se deconnecter</a>
                </div>
              <?php endif ?>
              <?php  if (!isset($_SESSION['username'])) : ?>
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Anonyme
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                <a class="dropdown-item" href="connect.php">Se connecter</a>
                <a class="dropdown-item" href="inscription.php">S'enregistrer</a>
                </div>
              <?php endif ?>
          </li>
        </ul>
      </div>
    </div>
</nav>

<section class="ftco-section form-section" >
    <div class="container bg-info">
      <div class="row justify-content-center mb-5 pb-3">
        <div class="col-md-7 heading-section ftco-animate text-center">
            
          <div class="card-body m-auto">
              <h5 class="card-title text-center pt-5" >Si vous n'avez pas de compte, veuillez vous enregistrer pour passer au diagnostic.</h5>
              <a class="btn btn-outline-primary btn-block btn-login font-weight-bold mb-2 text-white " href="inscription.php" >Enregistrez-vous !</a>
              <h5 class="card-title text-center pt-5" >Connectez-vous pour passer au diagnostic.</h5>
              
              <form method="post" action="connect.php">

                <?php include "errors.php" ; ?>

                <div class="form-group">
                    <input type="text" class="form-control" id="username" name="username" placeholder="nom d'utilisateur">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="password" name="password" placeholder="mot de passe">
                </div>
                <input type="submit" name="login_user" value="Connexion" class="btn btn-outline-primary btn-block btn-login font-weight-bold mb-2 text-white" >
                
              </form>
            </div>

        </div>
      </div>
    </div>
</section>

<footer class="ftco-footer ftco-bg-dark ftco-section img" style="background-image: url('images/bg_5.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">COVID-19-OUT</h2>
              <p>Une <strong>plate-forme</strong> qui a été créée dans le but de <strong>lutter contre la propagation du coronavirus ‘COVID-19’  en facilitant un diagnostic en ligne rapide et efficace.</strong></p>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Contacts-Us</h2>
              <div class="block-23 mb-3">
                <ul>
                  <li><a href="mailto:niyca14@gmail.com"><span class="icon icon-envelope"></span><span class="text">niyca14@gmail.com</span></a></li>
                  <li><a href="jehdailegrand12@gmail.com"><span class="icon icon-envelope"></span><span class="text">jehdailegrand12@gmail.com</span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> : Jehdai & Artcal'O  All rights reserved | Template credit : <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>

