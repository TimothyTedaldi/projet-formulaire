<?php
  session_start();
  define('CSSPATH', 'assets/css/'); //define css path
  $cssStyle = 'style.css';
  $cssReset = 'reset.css';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="Description" content="A Website made by Timothy Tedaldi & Christine Sautelet">

        <link rel="stylesheet" type="text/css" href="<?php echo (CSSPATH . "$cssReset"); ?>">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/Wruczek/Bootstrap-Cookie-Alert@gh-pages/cookiealert.css"> <!-- Need it for cookie alert -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
        <link rel="stylesheet" href="assets\font\bellota\web fonts\bellota_regular_macroman\stylesheet.css">
        <link rel="stylesheet" type="text/css" href="<?php echo (CSSPATH . "$cssStyle"); ?>">

        <title>Hacker Poulette</title>
    </head>
    <body>
        <header>
           <!-- START Bootstrap-Cookie-Alert -->
           <div class="alert text-center cookiealert" role="alert" id="TTcookie-alert">
            <b>Do you like cookies?</b> &#x1F36A; We use cookies to ensure you get the best experience on our website. <a href="https://cookiesandyou.com/" target="_blank">Learn more</a>
            <button type="button" class="btn btn-primary btn-sm acceptcookies" aria-label="Close">
              I agree
            </button>
          </div>
          <!-- END Bootstrap-Cookie-Alert -->  
          <!-- NAVBAR -->
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <img alt="HackerPoulette's logo" class="navbar-brand TTlogo" src="assets/img/hackerpouletteLogo.png" href="#">
                </img>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav mx-auto">
                    <li role="separator" class="dropdown-divider"></li>
                    <li class="nav-item active mr-3">
                      <a class="nav-link TTactive-item" href="#">Home</span></a>
                    </li>
                    <li role="separator" class="dropdown-divider"></li>
                    <li class="nav-item mr-3">
                      <a class="nav-link" href="#TTproduct">Product</a>
                    </li>
                    <li role="separator" class="dropdown-divider"></li>

                    <li class="nav-item mr-3">
                      <a class="nav-link" href="#TTcontact">Contact</a>
                    </li>
                    <li role="separator" class="dropdown-divider"></li>
                    <li class="nav-item mr-3">
                        <a class="nav-link" href="#TTsocial">Social Networks</a>
                    </li>
                  </ul>
                </div>
              </nav>
        </header>

        <div class="jumbotron jumbotron-fluid">
            <div class="container ">
              <h1 class="display-4 ml-5">The Raspberry Pi is deceptively simple.</h1>
              <p class="ml-5">Plug it in, boot it up, and use it as a personal computer, or attach a million gizmos and modules and invent something new and amazing!</p>
              <p class="ml-5">Quite simple isn't it ? Still you'll need the best components to unleash your creativity.</p>
              <p class="ml-5">And what else than Hackers Poulette to find them !</p>
            </div>
        </div>

        
        <h2 class="display-4 TTheading" id="TTproduct">
          Product of the month : Raspberry Pi 4
        </h2>
        <div class="container-fluid my-5 row TTmonth-product">
          <h3 class="col-12 text-center"> Completely upgraded, re-engineered </h3>
          <h3 class="col-12 text-center"> Faster, more powerful </h3>
          <div class="col-0 col-lg-1"></div>
          <img alt="picture of Product of the month" class="col-12 col-lg-5" src="assets/img/raspberry.PNG">
          <div class="col-12 col-lg-5 mt-4 ml-md-3 row">
              <h4 class="font-weight-bold my-auto ml-3 mr-5"> From 35 $ </h4>
              <a class="btn btn-primary TTdetails ml-5 my-auto" href="#" onclick="lightbox_open();">More Details</a>
              <p class="h5 col-12">You'll recognise the price along with the basic shape and size, so you can simply drop your new Raspberry Pi into your old projects for an upgrade;</p>
              <p class="h5 col-12"> And as always, we've kept all our software backwards-compatible, so what you create on a Raspberry Pi 4 will work on any older models you own too.</p>
          </div>
          <div class="col-0 col-lg-1"></div>
        </div>
        <!-- SLIDER-->
        <h2 class="display-4 TTheading">Our Raspberry Pi Boards</h2>
        <div class="container-fluid slider">
          <!--Carousel Wrapper-->
          <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">
      
            <!--Controls-->
            
              <div class="controls-top">
                <a class="btn-floating" href="#multi-item-example" data-slide="prev"></a>
                <a class="btn-floating" href="#multi-item-example" data-slide="next"></a>
              </div>
              <!--Indicators-->
              <ol class="carousel-indicators my-auto">
                <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
                <li data-target="#multi-item-example" data-slide-to="1"></li>
                <li data-target="#multi-item-example" data-slide-to="2"></li>
              </ol>
              <!--/.Indicators-->
            <!--/.Controls-->
           
            <!--Slides-->
            <div class="carousel-inner" role="listbox">
      
              <!--First slide-->
              <div class="carousel-item active">
      
                <div class="row">
                  <div class="col-md-4">
                    <div class="card mb-5 border border-dark" style="height:40rem;">
                      <img  class="card-img-top" id="TTimg1"  src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(34).jpg" alt="Card image cap">
                      <div class="card-body d-flex" style="flex-direction:column">
                        <h4 class="card-title" id="TTtitle1">Card title</h4>
                        <p class="card-text" id="TTdescription1">Some quick example text to build on the card title and make up the bulk of the
                          card's content.</p>
                        <a class="mt-auto btn btn-primary TTdetails"onclick="alert('Thanks for buying')">Buy</a>
                      </div>
                    </div>
                  </div>
      
                  <div class="col-md-4 clearfix d-none d-md-block">
                    <div class="card mb-5 border border-dark" style="height:40rem;">
                      <img  class="card-img-top" id="TTimg2" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(18).jpg" alt="Card image cap">
                      <div class="card-body d-flex" style="flex-direction:column">
                        <h4 class="card-title" id="TTtitle2">Card title</h4>
                        <p class="card-text" id="TTdescription2">Some quick example text to build on the card title and make up the bulk of the
                          card's content.</p>
                        <a class="mt-auto btn btn-primary TTdetails"onclick="alert('Thanks for buying')">Buy</a>
                      </div>
                    </div>
                  </div>
      
                  <div class="col-md-4 clearfix d-none d-md-block">
                    <div class="card mb-5 border border-dark" style="height:40rem;">
                      <img  class="card-img-top" id="TTimg3" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(35).jpg"
                        alt="Card image cap">
                      <div class="card-body d-flex" style="flex-direction:column">
                        <h4 class="card-title" id="TTtitle3">Card title</h4>
                        <p class="card-text" id="TTdescription3">Some quick example text to build on the card title and make up the bulk of the
                          card's content.</p>
                        <a class="mt-auto btn btn-primary TTdetails"onclick="alert('Thanks for buying')">Buy</a>
                      </div>
                    </div>
                  </div>
                </div>
      
              </div>
              <!--/.First slide-->
      
              <!--Second slide-->
              <div class="carousel-item">
      
                <div class="row ">
                  <div class="col-md-4">
                    <div class="card mb-5 border border-dark" style="height:40rem;">
                      <img  class="card-img-top" id="TTimg4" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg"
                        alt="Card image cap">
                      <div class="card-body d-flex" style="flex-direction:column">
                        <h4 class="card-title" id="TTtitle4">Card title</h4>
                        <p class="card-text" id="TTdescription4">Some quick example text to build on the card title and make up the bulk of the
                          card's content.</p>
                        <a class="mt-auto btn btn-primary TTdetails"onclick="alert('Thanks for buying')">Buy</a>
                      </div>
                    </div>
                  </div>
      
                  <div class="col-md-4 clearfix d-none d-md-block">
                    <div class="card mb-5 border border-dark" style="height:40rem;">
                      <img  class="card-img-top" id="TTimg5" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(47).jpg"
                        alt="Card image cap">
                      <div class="card-body d-flex" style="flex-direction:column">
                        <h4 class="card-title" id="TTtitle5">Card title</h4>
                        <p class="card-text" id="TTdescription5">Some quick example text to build on the card title and make up the bulk of the
                          card's content.</p>
                        <a class="mt-auto btn btn-primary TTdetails"onclick="alert('Thanks for buying')">Buy</a>
                      </div>
                    </div>
                  </div>
      
                  <div class="col-md-4 clearfix d-none d-md-block">
                    <div class="card mb-5 border border-dark" style="height:40rem;">
                      <img  class="card-img-top" id="TTimg6" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(48).jpg"
                        alt="Card image cap">
                      <div class="card-body d-flex" style="flex-direction:column">
                        <h4 class="card-title" id="TTtitle6">Card title</h4>
                        <p class="card-text" id="TTdescription6">Some quick example text to build on the card title and make up the bulk of the
                          card's content.</p>
                        <a class="mt-auto btn btn-primary TTdetails"onclick="alert('Thanks for buying')">Buy</a>
                      </div>
                    </div>
                  </div>
                </div>
      
              </div>
              <!--/.Second slide-->
      
              <!--Third slide-->
              <div class="carousel-item">
      
                <div class="row">
                  <div class="col-md-4">
                    <div class="card mb-5 border border-dark" style="height:40rem;">
                      <img  class="card-img-top" id="TTimg7" src="https://mdbootstrap.com/img/Photos/Horizontal/Food/4-col/img%20(53).jpg"
                        alt="Card image cap">
                      <div class="card-body d-flex" style="flex-direction:column">
                        <h4 class="card-title" id="TTtitle7">Card title</h4>
                        <p class="card-text" id="TTdescription7">Some quick example text to build on the card title and make up the bulk of the
                          card's content.</p>
                        <a class="btn btn-primary TTdetails mt-auto" onclick="alert('Thanks for buying')">Buy</a>
                      </div>
                    </div>
                  </div>
      
                  <div class="col-md-4 clearfix d-none d-md-block">
                    <div class="card mb-5 border border-dark" style="height:40rem;">
                      <img  class="card-img-top" id="TTimg8" src="https://mdbootstrap.com/img/Photos/Horizontal/Food/4-col/img%20(45).jpg"
                        alt="Card image cap">
                      <div class="card-body d-flex" style="flex-direction:column">
                        <h4 class="card-title" id="TTtitle8">Card title</h4>
                        <p class="card-text" id="TTdescription8">Some quick example text to build on the card title and make up the bulk of the
                          card's content.</p>
                        <a class="mt-auto btn btn-primary TTdetails"onclick="alert('Thanks for buying')">Buy</a>
                      </div>
                    </div>
                  </div>
      
                  <div class="col-md-4 clearfix d-none d-md-block">
                    <div class="card mb-5 border border-dark" style="height:40rem;">
                      <img  class="card-img-top" id="TTimg9" src="https://mdbootstrap.com/img/Photos/Horizontal/Food/4-col/img%20(51).jpg"
                        alt="Card image cap">
                      <div class="card-body d-flex" style="flex-direction:column">
                        <h4 class="card-title" id="TTtitle9">Card title</h4>
                        <p class="card-text" id="TTdescription9">Some quick example text to build on the card title and make up the bulk of the
                          card's content.</p>
                        <a class="mt-auto btn btn-primary TTdetails"onclick="alert('Thanks for buying')">Buy</a>
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!--/.Third slide-->
            </div>
            <!--/.Slides-->
              
          </div>
          <!--/.Carousel Wrapper-->        
        </div>
        <!-- BACK TO TOP -->
        <button onclick="topFunction()" id="TTbtnUp" title="Go to top"><i class="fas fa-arrow-up"></i></button>

        <!-- Contact Form -->
        <h2 class="display-4 TTheading mt-5" id="TTcontact" <?php echo 'style="background-color = pink !important"' ?> > Contact Us</h2>
        
        <div class="container-fluid">
            <div class="starter-template">
              <?php if(array_key_exists('errors',$_SESSION)):?>
                <div class="alert alert-danger">
                  <?= implode('<br>',$_SESSION['errors']); ?>
                </div>
              <?php endif;?>
              <?php if(array_key_exists('success',$_SESSION)):?>
                <div class="alert alert-success">
                  Your email has been sent
                </div>
              <?php endif;?>
              <form action="post_contact.php" method="POST" id="TTform">
                <!-- START OF HONEYPOT -->
                <input name="name" type="text" class="counterOdille d-none" id="name" autocomplete="off">
                <!-- END OF HONEYPOT-->
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="Gender">Gender :</label>
                      <input type="radio" name="gender" value="mr" class="radio-inline" 
                      <?php if (isset($_SESSION['inputs']['gender'])) {echo $_SESSION['inputs']['gender']=='mr' ? 'checked' : ''; }?> >Mr
                      <input type="radio" name="gender" value="mrs" class="radio-inline"
                      <?php if (isset($_SESSION['inputs']['gender'])) {echo $_SESSION['inputs']['gender']=='mrs' ? 'checked' : ''; }?> >Mrs
                    </div>
                  </div>
                  <div class="col-md-8">
                    <div class="form-group">
                      <select name="countries" id="inputcountries" size="1" class="form-control">
                        <option selected><?= isset($_SESSION['inputs']['countries']) ? $_SESSION['inputs']['countries'] : 'Select a country'; ?></option>
                        <?php
                          $countries=['Afrique du Sud','Afghanistan','Albanie','Algérie','Allemagne','Andorre','Angola','Antigua-et-Barbuda','Arabie Saoudite','Argentine','Arménie','Australie','Autriche','Azerbaïdjan','Bahamas','Bahreïn','Bangladesh','Barbade','Belgique','Belize','Bénin','Bhoutan','Biélorussie','Birmanie','Bolivie','Bosnie-Herzégovine','Botswana','Brésil','Brunei','Bulgarie','Burkina Faso','Burundi','Cambodge','Cameroun','Canada','Cap-Vert','Chili','Chine','Chypre','Colombie','Comores','Corée du Nord','Corée du Sud','Costa Rica','Côte d\'Ivoire','Croatie','Cuba','Danemark','Djibouti','Dominique','Égypte','Émirats arabes unis','Équateur','Érythrée','Espagne','Eswatini','Estonie','États-Unis','Éthiopie','Fidji','Finlande','France','Gabon','Gambie','Géorgie','Ghana','Grèce','Grenade','Guatemala','Guinée','Guinée équatoriale','Guinée-Bissau','Guyana','Haïti','Honduras','Hongrie','Îles Cook','Îles Marshall','Inde','Indonésie','Irak','Iran','Irlande','Islande','Israël','Italie','Jamaïque','Japon','Jordanie','Kazakhstan','Kenya','Kirghizistan','Kiribati','Koweït','Laos','Lesotho','Lettonie','Liban','Liberia','Libye','Liechtenstein','Lituanie','Luxembourg','Macédoine','Madagascar','Malaisie','Malawi','Maldives','Mali','Malte','Maroc','Maurice','Mauritanie','Mexique','Micronésie','Moldavie','Monaco','Mongolie','Monténégro','Mozambique','Namibie','Nauru','Népal','Nicaragua','Niger','Nigeria','Niue','Norvège','Nouvelle-Zélande','Oman','Ouganda','Ouzbékistan','Pakistan','Palaos','Palestine','Panama','Papouasie-Nouvelle-Guinée','Paraguay','Pays-Bas','Pérou','Philippines','Pologne','Portugal','Qatar','République centrafricaine','République démocratique du Congo','République Dominicaine','République du Congo','République tchèque','Roumanie','Royaume-Uni','Russie','Rwanda','Saint-Kitts-et-Nevis','Saint-Vincent-et-les-Grenadines','Sainte-Lucie','Saint-Marin','Salomon','Salvador','Samoa','São Tomé-et-Principe','Sénégal','Serbie','Seychelles','Sierra Leone','Singapour','Slovaquie','Slovénie','Somalie','Soudan','Soudan du Sud','Sri Lanka','Suède','Suisse','Suriname','Syrie','Tadjikistan','Tanzanie','Tchad','Thaïlande','Timor oriental','Togo','Tonga','Trinité-et-Tobago','Tunisie','Turkménistan','Turquie','Tuvalu','Ukraine','Uruguay','Vanuatu','Vatican','Venezuela','Viêt Nam','Yémen','Zambie','Zimbabwe'];
                          foreach ($countries as $country){
                              echo '<option>'.$country.'</option>';
                          }
                        ?>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group" id="TTformfirstname">
                      <label for="inputfirstname">Firstname</label>
                      <input type="text" name="firstname" class="form-control input-field" required id="inputfirstname"  value="<?= isset($_SESSION['inputs']['firstname']) ? $_SESSION['inputs']['firstname'] : ''; ?>"  onkeyup="validate('inputfirstname');">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="inputlastname">Lastname</label>
                      <input type="text" name="lastname" class="form-control" required id="inputlastname" value="<?= isset($_SESSION['inputs']['lastname']) ? $_SESSION['inputs']['lastname'] : ''; ?>"  onkeyup="validate('inputlastname');">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input type="email" name="email" required class="form-control" id="email" value="<?= isset($_SESSION['inputs']['email']) ? $_SESSION['inputs']['email'] : ''; ?>" onkeyup="validate('email');">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <select name="subject" id="inputsubject" size="1" class="form-control">
                        <option selected><?= isset($_SESSION['inputs']['subject']) ? $_SESSION['inputs']['subject'] : 'Select a subject'; ?></option>
                        <?php
                          $subjects=['Information', 'Claim', 'Other'];
                          foreach ($subjects as $subject){
                              echo '<option value='.$subject.'>'.$subject.'</option>';
                          }
                        ?>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="inputmessage">Message</label>
                      <textarea name="message"  id="inputmessage" required class="form-control" onkeyup="validate('inputmessage');"><?= isset($_SESSION['inputs']['message']) ? $_SESSION['inputs']['message'] : ''; ?></textarea>
                    </div>
                    <button type="submit" id="run" class="btn btn-primary TTdetails mb-5">Submit</button>
                  </div>
                </div>
              </form>
            </div>       
        </div>

        <!-- VIDEO BOX-->

        <div id="light">
          <a class="boxclose" id="boxclose" onclick="lightbox_close();"></a>
          <iframe width="900" height="500" src="https://www.youtube.com/embed/sajBySPeYH0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div id="fade" onClick="lightbox_close();"></div>

        <!-- FOOTER -->

        <footer class="container-fluid text-white footer-bg">
          <div class="row justify-content-center d-flex">
             <div class="mt-auto mb-auto col-sm-12 col-md-3 col-sm-12 col-12 h5 mt-sm-5 text-center text-md-left">
                © 2020 Copyright: <a href="#">HackerPoulette.com</a>
             </div>
             <div class="mt-auto mb-auto col-sm-12 col-md-5 col-sm-12 col-12 py-5" id="TTsocial">
                <div class="justify-content-center d-flex">
                <!-- Facebook -->
                   <a class="fb-ic my-font-awesome" href="#">
                      <i class="fab fa-facebook-square fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                   </a>
                <!-- Twitter -->
                   <a class="tw-ic my-font-awesome" href="#">
                      <i class="fab fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                   </a>
                <!-- Google +-->
                   <a class="gplus-ic my-font-awesome" href="#">
                      <i class="fab fa-google-plus fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                   </a>
                <!--Linkedin -->
                   <a class="li-ic my-font-awesome" href="#">
                      <i class="fab fa-linkedin fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                   </a>
                <!--Instagram-->
                   <a class="ins-ic my-font-awesome" href="#">
                      <i class="fab fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                   </a>
                </div>
             </div>
             <div class="mt-auto mb-auto justify-content-center d-flex col-12 col-md-4 col-sm-12 col-12 h5 text-sm-center">
              <p class="my-auto text-center text-md-right">This website has been realised by <a href="https://www.linkedin.com/in/christine-sautelet"> Christine Sautelet  </a>  and  <a href="https://www.linkedin.com/in/timothy-tedaldi-dev/" rel="noopener noreferrer" target="_blank"> Timothy Tedaldi</a></p>
            </div>
          </div>
       </footer>
  

        <!-- SCRIPT HERE -->
        <script src="js/specialsCharacterDenied.js"></script>
        <script src="js/validateForm.js"></script>
        <script src="js/openVideo.js"></script>
        <script src="js/backToTop.js"></script>
        <script src="js/goFetchMyImages.js"></script>
        <script type="text/javascript" src="https://code.jquery.com/jquery-1.8.2.js"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/gh/Wruczek/Bootstrap-Cookie-Alert@gh-pages/cookiealert.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  </body>
</html>

<!-- PHP STARTING HERE -->

<?php
unset($_SESSION['inputs']);
unset($_SESSION['success']);
unset($_SESSION['errors']);
?>
<?php 