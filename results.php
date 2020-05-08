<?php include('config.php');

if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: connect.php');
  }

  if (isset($_GET['Se connecter'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: index.html");
  }




$max_range = (2*25);
$current_username = $_SESSION['username'];


$query2="SELECT SUM(IF(responce='oui', facteur*2,0)) as sum
		FROM diagnostics
		JOIN users ON diagnostics.id_user=users.id
		WHERE users.username='$current_username'";

$result2 = $db->query($query2);

$row2 = $result2->fetch_assoc();

$final_result = $row2['sum'];

$max_high = (100*$max_range)/100;

$min_high = (80*$max_range)/100;

$max_medium = (79.5*$max_range)/100;

$min_medium = (50*$max_range)/100;

$max_low = (49.5*$max_range)/100;


 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>COVID-19-OUT : Results</title>
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
    <div class="container bg-light border-primary rounded mb-1">
      <div class="row justify-content-center mb-5 pb-3">
      <h1 class="display-4">Vos  résultats !</h1>
	
			<?php if ($final_result <= $max_high AND $final_result >= $min_high): ?> 

				<div class="container m-3 bg-faded">
					<h5 class="mb-4">Le resultat du diagnostic montre que vous êtes <strong>gravement malade et susceptible d’être extrêmement vulnérable au COVID-19 ou une autre maladie grave qui pourrait s’avérer  être mortelle si elle n’est pas bien soignée .</strong></h5>
				<div class="bg-info p-5 rounded-3">
					<h5>Ne paniquez pas ! Nous vous suggérons de bien vouloir <strong>rester à la maison </strong>pour ne pas entrer en contact avec d’autres personnes, appeler urgemment un  médecin généraliste pour qu’il puisse  vous faire des tests plus avancés afin de confirmer si vous êtes bel et bien atteints du COVID-19.</h5>
					<h5><em>En attendant nous vous proposons de respecter les consignes suivant : </em></h5>
					<h5>1.<strong>Ne prenez pas  d’anti-inflammatoires  car ils peuvent vous rendre vulnérables. Ainsi les médicaments comme l’ibuprofène, l’aspirine sont interdits car ils peuvent aggraver l’infection.Il est indispensable de prendre un médicament recommandé par votre médecin. </strong> </h5> 
					<h5> <marq>S’il vous plaît, ne prenez aucun médicament sans avoir consulté un médecin afin de ne pas aggraver davantage votre cas !</marq> </h5> 
					<h5>2.<strong>Abstenez-vous de toute sortie, ne participez à aucun regroupement, qu’il soit de nature professionnelle, sociale ou familiale</strong></h5> 
					<h5>3.<strong>Evitez tout contact avec des personnes vulnérables comme les femmes enceintes, les personnes âgées  ou les personnes aux maladies chroniques.</strong></h5> 
					<h5>4.<strong>Le port d’un masque chirurgical est recommandé afin d’éviter de diffuser la maladie par voie aérienne.</strong></h5>  
					<h5>5.<strong>S’il s’avère que vous êtes testés et confirmés positifs au COVID-19, dites-le à votre entourage pour qu’ils soient prévenus de votre état de santé, et surtout suivre à la lettre les prescriptions et recommandations du médecin</strong></h5> 
					<h5>Bref, nous vous prions vivement de bien vouloir respecter les consignes que nous venons de vous proposer afin d’éviter le pire car le COVID-19 est mortel en cas de mauvais traitement et négligence des recommandations ! Surtout, contactez au plus vite un médecin !</h5>
				</div>
				</div>
			<?php endif ?>

			<?php if ($final_result <= $max_medium AND $final_result >= $min_medium) : ?>

				<div class="container m-3 bg-faded">
					<h5 class="mb-4"><em>Vous présentez des symptômes qui jusque là ne sont pas encore graves, mais qui nécessitent aussi un suivie car ils peuvent être dangereux.Vous n’êtes pas probablement atteints du COVID-19 mais un traitement s’avère nécessaire</em></h5>
				<div class="bg-info p-5 rounded-3">
					<h4>Pour votre cas, <strong>il est important de commencer à prendre des médicaments qui vous seront prescrits par votre docteur ! </strong> </h4>
					<h5>Ne négligez pas ces symptômes car ils sont mortels s’il n’y a pas de traitement adéquat. Ils présentent plusieurs conséquences, nous vous en proposons certaines .
					Par exemple, les troubles respiratoires non soignés peuvent causer des infections pulmonaires comme l’asthme, la bronchite et bien d’autres maladies dangereuses. 
					Une toux mal soignée peut causer des maladies pulmonaires qui peuvent être graves et parfois    mortelles !
					Les autres symptômes comme les courbatures peuvent vous épuiser et causer la carence en   énergie 
					Les maux de tête, si elles ne sont pas bien soignées, peuvent être à la base des déficits dans le système nerveux ! </h5>
					<h5>Dans tous les cas nous vous suggérons de ne pas laisser deux ou trois jours passés sans pour autant vous renseigner au près de votre médecin sur votre état de santé !</h5>
					<h5>Néanmoins, ne pas prendre des médicaments sans pour autant avoir l’avis de votre médecin car prendre des médicaments non appropriés et non compatibles à certaines caractéristiques de votre organisme peut causer des allergies et autres problèmes de santé ! </h5>
				</div>
				</div>

			<?php endif ?>

			<?php if ($final_result <= $max_low AND $final_result >=0 ): ?>

				<div class="container m-3 bg-faded">
					<h5><em>Vous ne présentez pas de symptômes du COVID-19, vous êtes hors du danger !</em></h5>
					<h5 class="mb-4"><em>Néanmoins vous devez respectez <strong>les règles d’hygiène</strong> pour pouvoir garder votre état de santé <strong>sain.</strong></em></h5>
				<div class="bg-info p-5 rounded-3">
					<h3>Nous vous proposons quelques règles à respecter : </h3>
					<h5>1.Lavez-vous très régulièrement les mains et cela avec du savon ou du désinfectant !</h5>
					<h5>2.Toussez ou éternuez dans votre coude !</h5>
					<h5>3.Utilisez des mouchoirs à usage unique et jetez-le !</h5>
					<h5>4.Evitez de vous toucher le visage ! </h5>
					<h5>5.Evitez le contact avec les gens malades</h5>  
					<h5>6.En cette période de crise sanitaire, tenez-vous toujours à un mètre de toute personne malade ou pas !</h5>
					<h5>7.Pour les personnels de santé en contact étroit avec les malades, il est indispensable de portes des équipements de protection spécifiques et appropriés </h5>
					<h5>8.Ne pas consommer des aliments crus (salades, fruits, crudités) si on ne peut s’assurer qu’ils aient été au préalable lavés avec de l’eau décontaminée.</h5>
					<h5>9.Ne pas entrer en contact avec les animaux effectivement malades, ni moins les abattre dans le but de consommer leur viandes.</h5>
					<h5>10.Pour le bien de tous, <strong><em>respectez les règles fixées par votre gouvernement pendant toute cette période de crise liée au COVID-19. Si le Pays décrète une période de confinement, alors respectez-là car le COVID-19 est une maladie à coronavirus qui se propage très rapidement !</em></strong> </h5>
				</div>
				</div>

			<?php endif ?>

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
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> : Jehdai & Artcal'O  All rights reserved
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