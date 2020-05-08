<?php 
  include("config.php");
  header('Content-type: text/html; charset=UTF-8');

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: connect.php');
  }

  if (isset($_GET['Se connecter'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: index.html");
  }

  if(isset($_GET['page'])){

    $page = $_GET['page'];
  }
  else{

    $page = 1;
  }

  $num_per_page = 1;
  $start_from = ($page-1)*1;


  $quest_query = "SELECT question, facteur FROM questions limit $start_from, $num_per_page";
  $result_quest = mysqli_query($db, $quest_query);
 
// Afficahage de la pagination page X sur Y
  $pages_query = "SELECT * FROM questions";
  $pages_result = mysqli_query($db, $pages_query);
  $total_items = mysqli_num_rows($pages_result);
  $total_pages = ceil($total_items/$num_per_page);

 

?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>Remedic - Free Bootstrap 4 Template by Colorlib</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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

    <?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
        <h3>
          <?php 
            echo $_SESSION['success']; 
            unset($_SESSION['success']);
          ?>
        </h3>
      </div>
    <?php endif ?>

  <section class="ftco-section form-section" >
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
              
            <div class="card-body m-auto">
                <h3 class="card-title text-center mb-3">Cochez Oui ou Non</h3>
                 <form action="<?php if($page > $total_pages){ header("location: results.php"); } else { echo "?page=".($page + 1); } ?>" method="POST">
                  <div class="form-group" >
                    <?php 
                      while ($row=mysqli_fetch_assoc($result_quest))

                      {

                      ?>

                        <h4 class=" font- font-weight-bold"><?php echo $row['question']; ?></h4><br>
                        <?php 

                           if(isset($_POST['submitted'])){
                                $answer = $_POST['answer'];
                                // $insert_diagnostic_query
                                if(empty($answer)){
                                  array_push($errors,"Cochez au moin une case");
                                }

                                if(count($errors) == 0){

                                  $username = $_SESSION['username'];

                                  //Get current_user_id
                                  $user_query = mysqli_query($db, "SELECT id FROM users WHERE username='$username'");
                                  $result_user = mysqli_fetch_assoc($user_query);
                                  $id_user = $result_user['id'];
                                  $quest_id = $row['question'];
                                  $fact_quest = $row['facteur'];



                                  //Verifiying if the current_user diagnostic already exist
                                  $query_verif_query = "SELECT * FROM diagnostics WHERE id_user='$id_user' AND question='$quest_id'";

                                  $query_verif = mysqli_query($db,$query_verif_query);

                                  if(mysqli_num_rows($query_verif) == 1){
                                      //Getting Questions
                                     mysqli_query($db,"UPDATE diagnostics SET responce = '$answer' WHERE id_user='$id_user' AND question='$quest_id'");
                                  }
                                  else {
                                      mysqli_query($db,"INSERT INTO diagnostics (id_user, question, responce, facteur) VALUES ('$id_user','$quest_id','$answer', '$fact_quest')");
                                      
                                    }

                                }

                              }

                         ?>
                      <?php

                        }

                      ?>

                  <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" class="custom-control-input" id="customRadio" name="answer" value="oui">
                    <label class="custom-control-label" for="customRadio">Oui</label>
                  </div>
                  <br>
                  <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" class="custom-control-input" id="customRadio2" name="answer" value="non">
                    <label class="custom-control-label" for="customRadio2">Non</label>
                  </div>
                  <div class="form-group">
                     <input name="submitted" class="btn btn-outline-primary" type="submit" value="Suivant">
                  </div>
                  <div class="row justify-content-end">
                    <span class="btn btn-outline-primary current mb-4">
                        <?php if($page < $total_pages){ echo $page; } ?> Question of <?php echo $total_pages ?>
                    </span>
                    
                  </div>
                  <?php include "errors.php" ?>
                </div>
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