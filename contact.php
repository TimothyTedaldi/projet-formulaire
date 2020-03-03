<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="Description" content="A Website made by Timothy Tedaldi & Christine Sautelet">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/Wruczek/Bootstrap-Cookie-Alert@gh-pages/cookiealert.css"> <!-- Need it for cookie alert -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
        <link rel="stylesheet" type="text/css" href="./assets/css/style.css">

        <title>Hacker Poulette - Contact</title>
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
                <img class="navbar-brand TTlogo" src="assets/img/hackerpouletteLogo.png" href="#">
                </img>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav mx-auto">
                    <li role="separator" class="dropdown-divider"></li>
                    <li class="nav-item mr-3">
                      <a class="nav-link" href="index.html">Home</span></a>
                    </li>
                    <li role="separator" class="dropdown-divider"></li>
                    <li class="nav-item mr-3">
                      <a class="nav-link" href="#">Product</a>
                    </li>
                    <li role="separator" class="dropdown-divider"></li>

                    <li class="nav-item mr-3">
                      <a class="nav-link" href="#">Contact</a>
                    </li>
                    <li role="separator" class="dropdown-divider"></li>
                    <li class="nav-item mr-3">
                        <a class="nav-link" href="#">FAQ</a>
                    </li>
                  </ul>
                </div>
              </nav>
        </header>

        <!-- SLIDER-->

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
              <form action="post_contact.php" method="POST">
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <input type="radio" name="gender" value="woman" class="radio-inline">Woman
                      <input type="radio" name="gender" value="man" class="radio-inline">Man
                    </div>
                  </div>
                  <div class="col-md-8">
                    <div class="form-group">
                      <select name="countries" id="inputcountries" size="1" class="form-control">
                        <option selected>Select a Country</option>
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
                    <div class="form-group">
                      <label for="inputfirstname">Firstname</label>
                      <input type="text" name="firstname" class="form-control" id="inputfirstname" value="<?= isset($_SESSION['inputs']['firstname']) ? $_SESSION['inputs']['firstname'] : ''; ?>">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="inputlastname">Lastname</label>
                      <input type="text" name="lastname" class="form-control" id="inputlastname" value="<?= isset($_SESSION['inputs']['lastname']) ? $_SESSION['inputs']['lastname'] : ''; ?>">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input type="email" name="email" class="form-control" id="email" value="<?= isset($_SESSION['inputs']['email']) ? $_SESSION['inputs']['email'] : ''; ?>">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <select name="choice" id="inputchoice" size="1" class="form-control">
                        <option selected>Select a choice</option>
                        <?php
                          $choices=['Information', 'Claim', 'Other'];
                          $i=0;
                          foreach ($choices as $choice){
                              $i=$i+1;
                              echo '<option value='.$i.'>'.$choice.'</option>';
                          }
                        ?>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="inputmessage">Message</label>
                      <textarea name="message" id="inputmessage" class="form-control"><?= isset($_SESSION['inputs']['message']) ? $_SESSION['inputs']['message'] : ''; ?></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </div>
              </form>
              <h2>Debug :</h2>
              <?= var_dump($_SESSION);?>
            </div>       
        </div>

        <!-- BACK TO TOP -->
        <button onclick="topFunction()" id="TTbtnUp" title="Go to top"><i class="fas fa-arrow-up"></i></button>

        <!-- SCRIPT HERE -->
        <script src="js/backToTop.js"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/gh/Wruczek/Bootstrap-Cookie-Alert@gh-pages/cookiealert.js"></script>
    </body>
</html>
<?php
unset($_SESSION['inputs']);
unset($_SESSION['success']);
unset($_SESSION['errors']);
?>