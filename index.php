<?php include('config.php'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>COVID-19-OUT : Home</title>
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
          <li class="nav-item"><a href="https://covid19info.live/" class="nav-link">Live Info</a></li>
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
    <!-- END nav -->
    <div class="hero-wrap" style="background-image: url('images/bg_1.jpg'); background-attachment:fixed;">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-8 ftco-animate text-center">
            <h1 class="mb-4">COVID-19: Self Diagnostic</h1>
            <p>Diagnostiquez vous tout en étant à la maison</p>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-services">
      <div class="container">
        <div class="row no-gutters">
          <div class="col-md-4 ftco-animate py-5 nav-link-wrap">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
              <a class="nav-link px-4 active" id="v-pills-master-tab" data-toggle="pill" href="#v-pills-master" role="tab" aria-controls="v-pills-master" aria-selected="true"><span class="mr-3 "></span> A propos du COVID-19</a>

              <a class="nav-link px-4" id="v-pills-buffet-tab" data-toggle="pill" href="#v-pills-buffet" role="tab" aria-controls="v-pills-buffet" aria-selected="false"><span class="mr-3"></span> Zones à risques</a>

              <a class="nav-link px-4" id="v-pills-fitness-tab" data-toggle="pill" href="#v-pills-fitness" role="tab" aria-controls="v-pills-fitness" aria-selected="false"><span class="mr-3 "></span> Symptomes</a>

              <a class="nav-link px-4" id="v-pills-reception-tab" data-toggle="pill" href="#v-pills-reception" role="tab" aria-controls="v-pills-reception" aria-selected="false"><span class="mr-3 "></span> Voies de transmissions</a>

              <a class="nav-link px-4" id="v-pills-incubation-tab" data-toggle="pill" href="#v-pills-incubation" role="tab" aria-controls="v-pills-incubation" aria-selected="false"><span class="mr-3 "></span> Durée d'incubation</a>

              <a class="nav-link px-4" id="v-pills-treatment-tab" data-toggle="pill" href="#v-pills-treatment" role="tab" aria-controls="v-pills-treatment" aria-selected="false"><span class="mr-3"></span> Traitement provisoire</a>

              <a class="nav-link px-4" id="v-pills-prevent-tab" data-toggle="pill" href="#v-pills-prevent" role="tab" aria-controls="v-pills-prevent" aria-selected="false"><span class="mr-3 "></span> Prévention</a>

              <a class="nav-link px-4" id="v-pills-vimage-tab" data-toggle="pill" href="#v-pills-vimage" role="tab" aria-controls="v-pills-vimage" aria-selected="false"><span class="mr-3 "></span> COVID-19 : Tout en Images</a>

            </div>
          </div>
          <div class="col-md-8 ftco-animate p-4 p-md-5 d-flex align-items-center">
            
            <div class="tab-content pl-md-5" id="v-pills-tabContent">

              <div class="tab-pane fade show active py-5" id="v-pills-master" role="tabpanel" aria-labelledby="v-pills-master-tab">
                <span class="icon mb-3 d-block"></span>
                <h2 class="mb-4">A propos du COVID-19</h2>
                <p> Le COVID-19 est un virus  de la famille des coronavirus.</p>
                <p> Les coronavirus sont des virus qui peuvent aller d’un simple rhume à des pathologies respiratoires graves.</p> 
                <p>Le COVID-19 est un nouveau coronavirus à l’origine d’infections pulmonaires qui a été détecté en Chine  en fin décembre 2019.</p>
                <p>Selon plusieurs sources, le COVID-19 est dû au SARS-COV-2 qui est un coronavirus,qui trouve son origine dans la chauve-souris et dans le pangolin.</p>
                <p><a href="https://www.who.int/fr/emergencies/diseases/novel-coronavirus-2019" class="btn btn-primary">Savoir Plus</a></p>
              </div>

              <div class="tab-pane fade py-5" id="v-pills-buffet" role="tabpanel" aria-labelledby="v-pills-buffet-tab">
                <span class="icon mb-3 d-block"></span>
                <h2 class="mb-4">Zones à risques</h2>
                <p>Les premiers cas ont été détectés dans la province de Hubei en Chine.</p>
                <p>La Situation est évolutive, ainsi il est préférable de bien se renseigner avant tout voyage.</p>
                <p><a href="https://gouv.nc/info-coronavirus-covid-19/la-zone-risque-coronavirus-covid-19" class="btn btn-primary">Savoir Plus</a></p>
              </div>

              <div class="tab-pane fade py-5" id="v-pills-fitness" role="tabpanel" aria-labelledby="v-pills-fitness-tab">
                <span class="icon mb-3 d-block"></span>
                <h2 class="mb-4">Les symptômes</h2>
                <p>Les symptômes du COVID-19 sont, la fièvre, la toux, des troubles respiratoires, voire même des courbatures et  des maux de tête. Ces symptômes évoquent une infection respiratoire aigüe ou des anomalies pulmonaires. </p>
                <p><a href="https://www.who.int/fr/emergencies/diseases/novel-coronavirus-2019" class="btn btn-primary">Savoir Plus</a></p>
              </div>

              <div class="tab-pane fade py-5" id="v-pills-reception" role="tabpanel" aria-labelledby="v-pills-reception-tab">
                <span class="icon mb-3 d-block"></span>
                <h2 class="mb-4">Voies de transmission</h2>
                <p>Le COVID-19 peut se transmettre par deux voies différentes qui sont la voie environnementale et  la voie interhumaine.</p>
                <p>Par voie environnementale, on peut contracter le virus si l’on fréquente des aires ou des endroits infectés.</p>
                <p>Par voie interhumaine, on peut contracter le virus par des postillons (gouttelettes de salive) projetés en toussant ou en éternuant.</p>
                <p>
                  Le nouveau coronavirus 2019 se propage essentiellement par contact avec une personne infectée, lorsqu'elle tousse ou éternue, ou par l'intermédiaire des gouttelettes de salive ou de sécrétions nasales.
                </p>
                <p><a href="https://www.who.int/fr/emergencies/diseases/novel-coronavirus-2019" class="btn btn-primary">Savoir Plus</a></p>
              </div>
              <div class="tab-pane fade py-5" id="v-pills-incubation" role="tabpanel" aria-labelledby="v-pills-incubation-tab">
                <span class="icon mb-3 d-block"></span>
                <h2 class="mb-4">Durée d'incubation</h2>
                <p>Le COVID-19 peut se transmettre par deux voies différentes qui sont la voie environnementale et  la voie interhumaine.</p>
                <p>Par voie environnementale, on peut contracter le virus si l’on fréquente des aires ou des endroits infectés.</p>
                <p>Par voie interhumaine, on peut contracter le virus par des postillons (gouttelettes de salive) projetés en toussant ou en éternuant.</p>
                <p><a href="#" class="btn btn-primary">Savoir Plus</a></p>
              </div>
              <div class="tab-pane fade py-5" id="v-pills-treatment" role="tabpanel" aria-labelledby="v-pills-treatment-tab">
                <span class="icon mb-3 d-block"></span>
                <h2 class="mb-4">Traitement provisoire</h2>
                <p> Si vous êtes atteints du COVID-19, ne prenez pas  d’anti-inflammatoires  car ils peuvent vous rendre vulnérables. Ainsi les médicaments comme l’ibuprofène, l’aspirine sont interdits car ils peuvent aggraver l’infection. Il est indispensable de prendre un médicament recommandé par votre médecin.</p>
                <p>Le meilleur traitement est de pouvoir contacter au plus vite un médecin pour qu’il fasse votre suivie et vous propose un traitement adéquat. </p>
                <p><a href="https://www.who.int/fr/emergencies/diseases/novel-coronavirus-2019" class="btn btn-primary">Savoir Plus</a></p>
              </div>
              <div class="tab-pane fade py-5" id="v-pills-prevent" role="tabpanel" aria-labelledby="v-pills-prevent-tab">
                <span class="icon mb-3 d-block "></span>
                <h2 class="mb-4">Prévention</h2>
                <p>Pour prévenir le COVID-19, certaines règles d’hygiène sont nécessaires. Nous vous en proposons quelques-unes.</p>
                <p>1.Lavez-vous très régulièrement les mains et cela avec du savon ou du désinfectant !</p>
                <p>2.Toussez ou éternuez dans votre coude !</p>
                <p>3.Utilisez des mouchoirs à usage unique et jetez-le !</p>
                <p>4.Evitez de vous toucher le visage ! </p>
                <p>5.Evitez le contact avec les gens malades</p> 
                <p>6.En cette période de crise sanitaire, tenez-vous toujours à un mètre de toute personne malade ou pas !</p>
                <p>7.Pour les personnels de santé en contact étroit avec les malades, il est indispensable de portes des équipements de protection spécifiques et appropriés </p>
                <p>8.Ne pas consommer des aliments crus (salades, fruits, crudités) si on ne peut s’assurer qu’ils aient été au préalable lavés avec de l’eau décontaminée.</p>
                <p>9.Pour le bien de tous, respectez les règles fixées par votre gouvernement pendant toute cette période de crise liée au COVID-19. Si le Pays décrète une période de confinement, alors respectez-là car le COVID-19 est une maladie à coronavirus qui se propage très rapidement ! </p>
                <p><a href="https://www.youtube.com/watch?v=yK4OXj-kt-Q&feature=youtu.be" class="btn btn-primary">En vidéo</a></p>
              </div>
              <div class="tab-pane fade py-5" id="v-pills-vimage" role="tabpanel" aria-labelledby="v-pills-vimage-tab">
                <span class="icon mb-3 d-block "></span>
                <h2 class="mb-4">COVID-19 : Tout en Images</h2>
                <p>Besoin de voir les images sur le COVID-19? : Cliquez sur le bouton en Bas vous serez redirigé sur un site contenant ces images !</p>
                <a href="https://www.gettyimages.fr/photos/covid-19" class="btn btn-outline-primary" >COVID-19 : Images</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="jumbotron text-center mb-0">
      <h1 class="display-5" >DIAGNOSTIQUEZ-VOUS MAINTENANT</h1>
      <h3><a href="diagnostic.php">En cliquant ici</a></3>
  </div>

 <section class="ftco-section-2 img" style="background-image: url('images/bg_3.jpg');">
      <div class="container">
        <div class="row d-md-flex justify-content-end">
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-12">
                <a href="https://www.who.int/fr/emergencies/diseases/novel-coronavirus-2019/advice-for-public" class="services-wrap ftco-animate">
                  <div class="icon d-flex justify-content-center align-items-center">
                    <span class="ion-ios-arrow-back"></span>
                    <span class="ion-ios-arrow-forward"></span>
                  </div>
                  <h2>Se laver fréquemment les mains</h2>
                  <p>Se nettoyez fréquemment les mains avec un produit hydroalcoolique ou à l'eau et au savon</p>
                </a>
                <a href="https://www.who.int/fr/emergencies/diseases/novel-coronavirus-2019/advice-for-public" class="services-wrap ftco-animate">
                  <div class="icon d-flex justify-content-center align-items-center">
                    <span class="ion-ios-arrow-back"></span>
                    <span class="ion-ios-arrow-forward"></span>
                  </div>
                  <h2>Éviter les contacts proches</h2>
                  <p>Maintenir une distance d’au moins 1 mètre avec les autres personnes, en particulier si elles toussent, éternuent ou ont de la fièvre</p>
                </a>
                <a href="https://www.who.int/fr/emergencies/diseases/novel-coronavirus-2019/advice-for-public" class="services-wrap ftco-animate">
                  <div class="icon d-flex justify-content-center align-items-center">
                    <span class="ion-ios-arrow-back"></span>
                    <span class="ion-ios-arrow-forward"></span>
                  </div>
                  <h2>Respecter les règles d’hygiène respiratoire</h2>
                  <p>Se couvrir la bouche et le nez avec le pli du coude ou avec un mouchoir en cas de toux ou d’éternuement – jeter le mouchoir immédiatement après dans une poubelle fermée et se laver les mains avec une solution hydroalcoolique ou à l’eau et au savon.</p>
                </a>
                <a href="https://www.who.int/fr/emergencies/diseases/novel-coronavirus-2019/advice-for-public" class="services-wrap ftco-animate">
                  <div class="icon d-flex justify-content-center align-items-center">
                    <span class="ion-ios-arrow-back"></span>
                    <span class="ion-ios-arrow-forward"></span>
                  </div>
                  <h2>Pour plus d'infos : WHO(OMS)</h2>
                  
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    

  <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url('images/bg_4.jpg');">

      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
            <h2 class="mb-4">COVID-19 : En Chiffres</h2>
            <span class="subheading">Aperçu de la progression du coronavirus dans le monde entier</span>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-10">
            <div class="row">
              <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 text-center">
                  <div class="text">
                    <strong class="number" data-number="180">0</strong>
                    <span><strong>Pays Atteints</strong></span>
                  </div>
                </div>
              </div>
              <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 text-center">
                  <div class="text">
                    <strong class="number" data-number="2281983">0</strong>
                    <span><strong>Personnes Infectées</strong></span>
                  </div>
                </div>
              </div>
              <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 text-center">
                  <div class="text">
                    <strong class="number" data-number="270372">0</strong>
                    <span><strong>Morts</strong></span>
                  </div>
                </div>
              </div>
              <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 text-center">
                  <div class="text">
                    <strong class="number" data-number="1361776">0</strong>
                    <span><strong>Guéris</strong></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>

    <section class="ftco-section-parallax">
      <div class="parallax-img d-flex align-items-center">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
              <h2>Suggestions</h2>
              <p>Glissez nous quelques suggestions pour l'amélioration de cette plate-forme</p>
              <div class="row d-flex justify-content-center mt-5">
                <div class="col-md-8">
                  <form action="#" class="subscribe-form">
                    <div class="form-group d-flex">
                      <input type="text" class="form-control" placeholder="Entrer votre adresse mail">
                      <input type="submit" value="Envoyer" class="submit px-3">
                    </div>
                  </form>
                </div>
              </div>
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