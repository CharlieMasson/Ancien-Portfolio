<?php 

    require "../php/server.php";

    $id = $_GET['id'];

    $statement = $pdo->prepare("SELECT * from projets WHERE id_projet = ?");
    $statement->execute(array($id));
    $projet = $statement->fetch();

    $projetTitre = $projet['projetTitre']; 
    $projetBut = $projet['projetBut']; 
    $projetResultat = $projet['projetResultat']; 
    $projetTechnos = $projet['projetTechnos']; 
    $projetGalerieImg1 = $projet['projetGalerieImg1']; 
    $projetGalerieDesc1 = $projet['projetGalerieDesc1']; 
    $projetGalerieImg2 = $projet['projetGalerieImg2']; 
    $projetGalerieDesc2 = $projet['projetGalerieDesc2']; 
    $projetGalerieImg3 = $projet['projetGalerieImg3']; 
    $projetGalerieDesc3 = $projet['projetGalerieDesc3']; 
    $projetTelechargement = $projet['projetTelechargement'];

?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap, fontawesome, Jquerry -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
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

    <!-- fichier CSS-->
    <link rel="stylesheet" href="projets.css" />

    <meta charset="utf-8" />
    <title>Portfolio</title>
  </head>
  <body>
    <div class="container">
      <?php echo '<h1>' . $projetTitre . '</h1>' ?>
      <?php echo '<p> <span class="importantText">But : </span>' .  $projetBut . '</p>' ?>
      <?php echo '<p><span class="importantText">R??sultat : </span>' . $projetResultat . '</p>' ?>
      <?php echo '<p><span class="importantText">Technologies utilis??es : </span>' . $projetTechnos . '</p>' ?>
      <h2>Galerie</h2>

      <div id="galerieCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicateurs -->
        <ul class="carousel-indicators">
          <li
            data-target="#galerieCarousel"
            data-slide-to="0"
            class="active"
          ></li>
          <li data-target="#galerieCarousel" data-slide-to="1"></li>
          <li data-target="#galerieCarousel" data-slide-to="2"></li>
        </ul>

        <!-- les images -->
        <div class="carousel-inner">
          <div class="carousel-item active">
            <?php echo '<img src="projetsImages/' . $projetGalerieImg1 . '" alt="image" class="auto">' ?>
            <div class="carousel-caption">
              <h4><?php echo $projetGalerieDesc1 ?></h4>
            </div>
          </div>

          <div class="carousel-item">
            <?php echo '<img src="projetsImages/' . $projetGalerieImg2 . '" alt="image" class="auto">' ?>
            <div class="carousel-caption">
              <h4><?php echo $projetGalerieDesc2 ?></h4>
            </div>
          </div>

          <div class="carousel-item">
            <?php echo '<img src="projetsImages/' . $projetGalerieImg3 . '" alt="image" class="auto">' ?>
            <div class="carousel-caption">
              <h4 class="altH4"><?php echo $projetGalerieDesc3 ?></h4>
            </div>
          </div>
        </div>

        <a
          class="carousel-control-prev"
          href="#galerieCarousel"
          data-slide="prev"
        >
          <span class="carousel-control-prev-icon"> </span>
        </a>
        <a
          class="carousel-control-next"
          href="#galerieCarousel"
          data-slide="next"
        >
          <span class="carousel-control-next-icon"> </span>
        </a>
      </div>

      <div class="flexboxBtnTelechargement">
          <?php echo '<a href="projetsZips/' . $projetTelechargement . '" download="' . $projetTelechargement .'" class="btn-success btn-lg btn">T??l??charger</a>'?>

        <a href="../index.php" class="btn-secondary btn-lg btn">Retour</a>
      </div>
    </div>
  </body>
</html>
