<?php
require "php/server.php";
if (!empty($_POST)){
  $contactNom = checkInput($_POST['nom']);
  $contactPrenom = checkInput($_POST['prenom']);
  $contactAdresse = checkInput($_POST['adresseEmail']);
  $contactMessage = checkInput($_POST['message']);

  $statement = $pdo->prepare("INSERT INTO contact (contactNom, contactPrenom, contactAdresse, contactMessage) VALUES (?,?,?,?)");
  $statement->execute(array($contactNom, $contactPrenom, $contactAdresse, $contactMessage));
}

function checkInput($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <script src="/tarteaucitron/tarteaucitron.js"></script>

        <script type="text/javascript">
        tarteaucitron.init({
    	  "privacyUrl": "", /* Privacy policy url */
          "bodyPosition": "bottom", /* or top to bring it as first element for accessibility */

    	  "hashtag": "#tarteaucitron", /* Open the panel with this hashtag */
    	  "cookieName": "tarteaucitron", /* Cookie name */
    
    	  "orientation": "middle", /* Banner position (top - bottom) */
       
          "groupServices": false, /* Group services by category */
          "serviceDefaultState": "wait", /* Default state (true - wait - false) */
                           
    	  "showAlertSmall": false, /* Show the small banner on bottom right */
    	  "cookieslist": false, /* Show the cookie list */
                           
          "closePopup": false, /* Show a close X on the banner */

          "showIcon": true, /* Show cookie icon to manage cookies */
          //"iconSrc": "", /* Optionnal: URL or base64 encoded image */
          "iconPosition": "BottomRight", /* BottomRight, BottomLeft, TopRight and TopLeft */

    	  "adblocker": false, /* Show a Warning if an adblocker is detected */
                           
          "DenyAllCta" : true, /* Show the deny all button */
          "AcceptAllCta" : true, /* Show the accept all button when highPrivacy on */
          "highPrivacy": true, /* HIGHLY RECOMMANDED Disable auto consent */
                           
    	  "handleBrowserDNTRequest": true, /* If Do Not Track == 1, disallow all */

    	  "removeCredit": false, /* Remove credit link */
    	  "moreInfoLink": true, /* Show more info link */

          "useExternalCss": false, /* If false, the tarteaucitron.css file will be loaded */
          "useExternalJs": false, /* If false, the tarteaucitron.js file will be loaded */

    	  //"cookieDomain": ".my-multisite-domaine.fr", /* Shared cookie for multisite */
                          
          "readmoreLink": "", /* Change the default readmore link */

          "mandatory": true, /* Show a message about mandatory cookies */
          "mandatoryCta": true /* Show the disabled accept button when mandatory on */
        });

        tarteaucitron.user.linkedininsighttag = 'linkedin_partner_id';
        (tarteaucitron.job = tarteaucitron.job || []).push('linkedininsighttag');


    </script>


    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="Content-type" content="text/html"; charset="utf-8" />

    <!-- Bootstrap, fontawesome, Jquerry -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />

    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
    />
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200&display=swap"
      rel="stylesheet"
    />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500&display=swap"
      rel="stylesheet"
    />

    <!-- fichier CSS/JS-->
    <link rel="stylesheet" href="main.css" />
    <script src="JS/animationScroll.js"></script>

    <meta charset="utf-8" />
    <title>Portfolio</title>
  </head>

  <body data-spy="scroll" data-offset="0">

  <?php require "menu_footer/menu.php" ?>
  <script src="JS/menu.js"></script>

    <div class="marginRight">
      <section id="Introduction">
        <div class="container">
          <div class="flexBoxIntro">
            <div class="imageIntro">
              <img src="images/moi.jpg" class="img-fluid rounded-circle" />
            </div>
            <div class="textIntro">
              <h1>Bienvenue dans Mon Portfolio!</h1>
              <div class="greyDivider"></div>
              <p>
                Je suis <span class="importantText">Charlie Masson</span>, pour
                l'instant étudiant au lycée Saint-Vincent de Senlis dans le
                cadre d'un BTS SIO.
              </p>
              <p>
                Ici vous aurez accès à moult informations me concernant tel que
                mes projets ou mon parcours. N'hésitez pas à jeter un œil à tout
                ça! Vous pouvez aussi...
              </p>
            </div>
          </div>
          <div class="flexBoxOtherInfo">
            <a
              class="btn btn-outline-secondary lesserText"
              href="docs/cv.pdf"
              target="_blank"
              >Voir mon CV <i class="fas fa-file"></i
            ></a>
            <a
              class="btn btn-outline-primary lesserText"
              href="https://www.linkedin.com/in/charlie-masson-985b111a2"
              target="_blank"
            >
              Voir mon Compte Linked<i class="fab fa-linkedin-in"></i>
            </a>
            <a
              class="btn btn-outline-danger lesserText"
              href="https://github.com/CharlieMasson"
              target="_blank"
            >
              Voir mon Compte Github <i class="fab fa-github"></i>
            </a>
            <button
              type="button"
              class="btn btn-outline-success lesserText"
              data-toggle="modal"
              data-target="#modalContact"
            >
              Me Contacter <i class="fas fa-envelope"></i>
            </button>
          </div>
        </div>
      </section>

      <section id="Projets">
        <div class="container-fluid">
          <!-- obligé de mettre marginRight ici pour que la couleur de fond de Projets soit aussi présente derrière le menu-->
          <h1>Projets <a class="btn btn-success" href="admin/index.php">se connecter...</a></h1>
          <div class="flexBoxProjets">

          <?php 

            $statement = $pdo->query('SELECT projets.id_projet, projets.projetTitre, projets.projetVignette, projets.projetDescription
            from projets');
            while($projets = $statement->fetch())
            {
              echo '<div class="elementProjet">';
                echo '<div class="imageElementProjet">';
                  echo '<img src="images/'. $projets['projetVignette'] . '"';
                echo '</div>';
                echo '<div class="textElementProjet">';
                  echo '<h3>' . $projets['projetTitre']. '</h3>';
                  echo '<p class="lesserText">' . $projets['projetDescription'] . '</p>';
                echo '</div>';
                echo '<div class="btnElementProjet">';
                  echo '<a class="btn btn-success btn-lg" href="projets/projet.php?id='.$projets["id_projet"]. '"> En Savoir Plus </a>';
                echo '</div>';
              echo '</div>';
              echo '</div>';
            }

            ?>
        </div>
      </section>

      <section id="Parcours">
        <div class="container">
          <h1>Parcours</h1>
          <div class="timeline">
            <div class="box left">
              <div class="date">2016-2019</div>
              <div class="content">
                <div class="imageContent">
                  <img
                    src="images/compiegne.jpg"
                    class="img-fluid rounded mx-auto d-block opacity-25"
                  />
                </div>
                <div class="textContent">
                  <h2>Lycée Charles de Gaulle</h2>
                  <div class="greyDivider"></div>
                  <p class="lesserText">
                    Lycée public où j'ai pu décrocher mon baccalauréat
                    littéraire mention assez bien.
                  </p>
                  <a
                    class="btn btn-success btn-lg"
                    href="https://charles-de-gaulle-compiegne.ac-amiens.fr/"
                    >Site de l'établissement</a
                  >
                </div>
              </div>
            </div>
            <div class="box right">
              <div class="date">2019-2021</div>
              <div class="content">
                <div class="imageContent">
                  <img
                    src="images/lille.jpg"
                    class="img-fluid rounded mx-auto d-block opacity-25"
                  />
                </div>
                <div class="textContent">
                  <h2>Université de Lille</h2>
                  <div class="greyDivider"></div>
                  <p class="lesserText">
                    Établissement public où j'ai d'abord étudié les langues dans
                    le campus pont de bois avant de me réorienter dans
                    l'informatique par le biais d'un DU Tremplin tertiaire dans
                    le campus cité scientifique.
                  </p>
                  <div class="greyDivider"></div>
                  <h2> Compétences Acquises </h2>
                  <p class= "lesserText"> 
                    Introduction aux bases du HTML, de CSS, C++
                    ainsi que Wordpress.
                  </p>
                  <a
                    class="btn btn-success btn-lg"
                    href="https://www.univ-lille.fr/"
                    >Site de l'établissement</a
                  >
                </div>
              </div>
            </div>
            <div class="box left">
              <div class="date">2021-...</div>
              <div class="content">
                <div class="imageContent">
                  <img
                    src="images/senlis.jpg"
                    class="img-fluid rounded mx-auto d-block opacity-25"
                  />
                </div>
                <div class="textContent">
                  <h2>Lycée Saint-Vincent</h2>
                  <div class="greyDivider"></div>
                  <p class="lesserText">
                    Établissement privé dans Senlis où j'étudie actuellement
                    dans le cadre d'un BTS SIO.
                  </p>
                  <div class="greyDivider"></div>
                  <h2> Compétences Acquises </h2>
                  <p class= "lesserText"> 
                    Approfondissement de mes connaissances en HTML et CSS,
                    apprentissage de Bootstrap, PHP, C#, ainsi que de Javascript lors de veilles personnelles.
                  </p>
                  <a
                    class="btn btn-success btn-lg"
                    href="https://www.lycee-stvincent.fr/"
                    >Site de l'établissement</a
                  >
                </div>
              </div>
            </div>
            <div class="box right">
              <div class="date">Juin 2022</div>
              <div class="content">
                <div class="imageContent">
                  <img
                    src="images/walon.jpg"
                    class="img-fluid rounded mx-auto d-block opacity-25"
                  />
                </div>
                <div class="textContent">
                  <h2>Entreprise Walon France</h2>
                  <div class="greyDivider"></div>
                  <p class="lesserText">
                    Entreprise de transport routier situé à Le Meux, j'y ai effectué mon stage de première année.
                  </p>
                  <div class="greyDivider"></div>
                  <h2> Compétences Acquises </h2>
                  <p class= "lesserText"> 
                    Windev, Webdev et Windev Mobile.
                  </p>
                  <a
                    class="btn btn-success btn-lg"
                    href="https://www.linkedin.com/company/walon-france/?originalSubdomain=fr"
                    >Site de l'entreprise</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="Contact">
        <div class="container">
          <div class="flexBoxContact">
            <div class="textContact">
              <p>
                Vous voulez me <span class="importantText"> Contacter </span>?
                Pas de problème! Il vous suffit juste de remplir le formulaire
                suivant accessible en appuyant sur le bouton ci-dessous.
              </p>
              <div class="greyDivider"></div>
              <div class="flexBoxBtnContact">
                <button
                  type="button"
                  class="btn btn-outline-success lesserText"
                  data-toggle="modal"
                  data-target="#modalContact"
                >
                  Me Contacter <i class="fas fa-envelope"></i>
                </button>
              </div>
            </div>
            <div class="imageContact">
              <img src="images/moi.jpg" class="img-fluid rounded-circle" />
            </div>
          </div>
        </div>

        <!--le modal de contact-->
        <div class="modal" id="modalContact" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h2 class="modal-title">Formulaire de Contact</h2>
                <button
                  type="button"
                  class="close"
                  data-dismiss="modal"
                  aria-label="Close"
                >
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form class="form" action="index.php" method="post" enctype="multipart/form-data">
                  <input
                    name="nom"
                    type="text"
                    placeholder="nom"
                    class="formu"
                  />
                  <input
                    name="prenom"
                    type="text"
                    placeholder="prénom"
                    class="formu"
                  />
                  <input
                    name="adresseEmail"
                    type="email"
                    placeholder="adresse électronique"
                    class="formu"
                  />
                  <textarea
                    name="message"
                    cols="45"
                    rows="10"
                    class="formu"
                    placeholder="message..."
                  ></textarea
                  ><br />

                  <button class="btn btn-success" type="submit">Envoyer</button>
                  <button
                    type="button"
                    class="btn btn-secondary"
                    data-dismiss="modal"
                  >
                    Annuler
                  </button>
                </form>
              </div>
              <div class="modal-footer">
                <p class="lesserText">
                  (+33) 06 75 15 42 03 <i class="fas fa-phone"></i><br />
                  <a href="mailto:charlie.mass.cm@gmail.com" class="mailto">
                    charlie.mass.cm@gmail.com <i class="fas fa-envelope"></i
                  ></a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  <?php require "menu_footer/footer.php"?>

  </body>
</html>
