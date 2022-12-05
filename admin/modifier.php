
<?php 
  require "../php/server.php";
  require "../php/isconnect.php";
  if(!empty($_GET['id']))
  {
      $id = checkInput($_GET['id']);
  }

  $titreErreur = $vignetteErreur = $descriptionErreur = $butErreur = $resultatErreur = $technosErreur = $galerieImg1Erreur = $galerieDesc1Erreur = $galerieImg2Erreur = $galerieDesc2Erreur = $galerieImg3Erreur = $galerieDesc3Erreur = $zipErreur = "";
  $titre = $vignette = $description = $but = $resultat = $technos = $galerieImg1 = $galerieDesc1 = $galerieImg2 = $galerieDesc2 = $galerieImg3 = $galerieDesc3 = $zip = "";

  if(!empty($_POST)){
    $titre = checkInput($_POST['titre']);
    $but = checkInput($_POST['but']);
    $description = checkInput($_POST['description']);
    $resultat = checkInput($_POST['resultat']);
    $technos = checkInput($_POST['technos']);
    $galerieDesc1 = checkInput($_POST['galerieDesc1']);
    $galerieDesc2 = checkInput($_POST['galerieDesc2']);
    $galerieDesc3 = checkInput($_POST['galerieDesc3']);

    $vignette = checkInput($_FILES['vignette']['name']);
    $imagePath = "../images/" . basename($vignette);
    $imageExtension = pathinfo($imagePath, PATHINFO_EXTENSION);

    $galerieImg1 = checkInput($_FILES['galerieImg1']['name']);
    $imagePath1 = "../projets/projetsImages/" . basename($galerieImg1);
    $imageExtension1 = pathinfo($imagePath1, PATHINFO_EXTENSION);

    $galerieImg2 = checkInput($_FILES['galerieImg2']['name']);
    $imagePath2 = "../projets/projetsImages/" . basename($galerieImg2);
    $imageExtension2 = pathinfo($imagePath2, PATHINFO_EXTENSION);

    $galerieImg3 = checkInput($_FILES['galerieImg3']['name']);
    $imagePath3 = "../projets/projetsImages/" . basename($galerieImg3);
    $imageExtension3 = pathinfo($imagePath3, PATHINFO_EXTENSION);

    $zip = checkInput($_FILES['zip']['name']);
    $zipPath = "../projets/projetsZips/" . basename($zip);
    $zipExtension = pathinfo($zipPath, PATHINFO_EXTENSION);

    $isSuccess = true;
    $isUploadSuccess= false;
  

    if(empty($titre))
    {
      $titreErreur = "Ce champ ne peut pas être vide";
      $isSuccess = false;
    }
    if(empty($description))
    {
      $descriptionErreur = "Ce champ ne peut pas être vide";
      $isSuccess = false;
    }
    if(empty($but))
    {
      $butErreur = "Ce champ ne peut pas être vide";
      $isSuccess = false;
    }
    if(empty($resultat))
    {
      $resultatErreur = "Ce champ ne peut pas être vide";
      $isSuccess = false;
    }
    if(empty($technos))
    {
      $technosErreur = "Ce champ ne peut pas être vide";
      $isSuccess = false;
    }
    if(empty($galerieDesc1))
    {
      $galerieDesc1Erreur = "Ce champ ne peut pas être vide";
      $isSuccess = false;
    }
    if(empty($galerieDesc2))
    {
      $galerieDesc2Erreur = "Ce champ ne peut pas être vide";
      $isSuccess = false;
    }
    if(empty($galerieDesc3))
    {
      $galerieDesc3Erreur = "Ce champ ne peut pas être vide";
      $isSuccess = false;
    }
    if(empty($vignette || $galerieImg1 || $galerieImg2 || $galerieImg3 || $zip)){
     $isImageUpdated = false;
    }
    else{

      $isImageUpdated = true;
      $isUploadSuccess = true;

      if (!empty($vignette)){
        if($imageExtension != "jpg" && $imageExtension != "png" && $imageExtension != "jpeg" && $imageExtension != "gif") {
          $vignetteErreur = "Les fichiers autorises sont: .jpg, .jpeg, .png, .gif";
          $isUploadSuccess = false;
        }
        //if ($imagePath)
        if(file_exists($imagePath)) {
          $vignetteErreur = "Le fichier existe deja";
          $isUploadSuccess = false;
        }
        if($_FILES["vignette"]["size"] > 1000000) {
          $vignetteErreur = "Le fichier ne doit pas depasser les 1000KB";
          $isUploadSuccess = false;
        }
      }
      
      if(!empty($galerieImg1)){
        if($imageExtension1 != "jpg" && $imageExtension1 != "png" && $imageExtension1 != "jpeg" && $imageExtension1 != "gif") {
          $galerieImg1Erreur = "Les fichiers autorises sont: .jpg, .jpeg, .png, .gif";
          $isUploadSuccess = false;
        }
        if(file_exists($imagePath1)) {
          $galerieImg1Erreur = "Le fichier existe deja";
          $isUploadSuccess = false;
        }
        if($_FILES["galerieImg1"]["size"] > 1000000) {
          $galerieImg1Erreur = "Le fichier ne doit pas depasser les 1000KB";
          $isUploadSuccess = false;
        }
      }

      if(!empty($galerieImg2)){
        if($imageExtension2 != "jpg" && $imageExtension2 != "png" && $imageExtension2 != "jpeg" && $imageExtension2 != "gif") {
          $galerieImg2Erreur = "Les fichiers autorises sont: .jpg, .jpeg, .png, .gif";
          $isUploadSuccess = false;
        }
        if(file_exists($imagePath2)) {
          $galerieImg2Erreur = "Le fichier existe deja";
          $isUploadSuccess = false;
        }
        if($_FILES["galerieImg2"]["size"] > 1000000) {
          $galerieImg2Erreur = "Le fichier ne doit pas depasser les 1000KB";
          $isUploadSuccess = false;
        }
      }

      if(!empty($galerieImg3)){
        if($imageExtension3 != "jpg" && $imageExtension3 != "png" && $imageExtension3 != "jpeg" && $imageExtension3 != "gif") {
          $galerieImg3Erreur = "Les fichiers autorises sont: .jpg, .jpeg, .png, .gif";
          $isUploadSuccess = false;
        }
        if(file_exists($imagePath3)) {
          $galerieImg3Erreur = "Le fichier existe deja";
          $isUploadSuccess = false;
        }
        if($_FILES["galerieImg3"]["size"] > 1000000) {
          $galerieImg3Erreur = "Le fichier ne doit pas depasser les 1000KB";
          $isUploadSuccess = false;
        }
      }

      if(!empty($zip)){
        if($zipExtension != "zip") {
        $zipErreur = "Les fichiers autorises sont: .zip";
        $isUploadSuccess = false;
        }
        if(file_exists($zipPath)) {
          $zipErreur = "Le fichier existe deja";
          $isUploadSuccess = false;
        }
        if($_FILES["zip"]["size"] > 5000000) {
          $zipErreur = "Le fichier ne doit pas depasser les 5000KB";
          $isUploadSuccess = false;
        }
      }

      if($isUploadSuccess) {
        if(!empty($vignette)){
          if(!move_uploaded_file($_FILES["vignette"]["tmp_name"], $imagePath)) {
            $vignetteErreur = "Il y a eu une erreur lors de l'upload";
            $isUploadSuccess = false;
          } 
        }
        if(!empty($galerieImg1)){
          if(!move_uploaded_file($_FILES["galerieImg1"]["tmp_name"], $imagePath1)) {
            $galerieImg1Erreur = "Il y a eu une erreur lors de l'upload";
            $isUploadSuccess = false;
          } 
        }
        if(!empty($galerieImg2)){
          if(!move_uploaded_file($_FILES["galerieImg2"]["tmp_name"], $imagePath2)) {
            $galerieImg2Erreur = "Il y a eu une erreur lors de l'upload";
            $isUploadSuccess = false;
          } 
        }
        if(!empty($galerieImg3)){
          if(!move_uploaded_file($_FILES["galerieImg3"]["tmp_name"], $imagePath3)) {
            $galerieImg3Erreur = "Il y a eu une erreur lors de l'upload";
            $isUploadSuccess = false;
          } 
        }
        if(!empty($zip)){
          if(!move_uploaded_file($_FILES["zip"]["tmp_name"], $zipPath)) {
            $zipErreur = "Il y a eu une erreur lors de l'upload";
            $isUploadSuccess = false;
          } 
        }
      }
    }
    if(($isSuccess && $isUploadSuccess && $isImageUpdated) || ($isSuccess && !$isImageUpdated)) {
      $statement = $pdo->prepare("SELECT * from projets WHERE id_projet = ?");
      $statement->execute(array($id));
      $projets = $statement->fetch();
      if(empty($galerieImg1)){
        $galerieImg1 = $projets['projetGalerieImg1'];
      }
      if(empty($galerieImg2)){
        $galerieImg2 = $projets['projetGalerieImg2'];
      }
      if(empty($galerieImg3)){
        $galerieImg3 = $projets['projetGalerieImg3'];
      }
      if(empty($zip)){
        $zip = $projets['projetTelechargement'];
      }
      if(empty($vignette)){
        $vignette = $projets['projetVignette'];
      }
      $statement = $pdo->prepare("UPDATE projets set projetTitre = ?, projetVignette = ?, projetDescription = ?, projetBut = ?, projetResultat = ?, projetTechnos = ?, projetGalerieImg1 = ?, projetGalerieDesc1 = ?, projetGalerieImg2 = ?, projetGalerieDesc2 = ?, projetGalerieImg3 = ?, projetGalerieDesc3 = ?, projetTelechargement =? WHERE id_projet = ?");
      $statement->execute(array($titre, $vignette, $description, $but, $resultat, $technos, $galerieImg1, $galerieDesc1, $galerieImg2, $galerieDesc2, $galerieImg3, $galerieDesc3, $zip, $id ));
      header("Location: dashboard.php");
    }

  }
  else {
    $statement = $pdo->prepare("SELECT * from projets WHERE id_projet = ?");
    $statement->execute(array($id));
    $projets = $statement->fetch();

    $titre = $projets['projetTitre'];
    $but = $projets['projetBut'];
    $description = $projets['projetDescription'];
    $resultat = $projets['projetResultat'];
    $technos = $projets['projetTechnos'];
    $galerieDesc1 = $projets['projetGalerieDesc1'];
    $galerieDesc2 = $projets['projetGalerieDesc2'];
    $galerieDesc3 = $projets['projetGalerieDesc3'];
  }
    
    




  function checkInput($data)
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

?>

<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap, fontawesome, Jquerry -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>

    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
    />
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

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
    <link rel="stylesheet" href="styles.css" />
  </head>
  <body>
    <?php require 'menuadmin.php' ?>

    <div class="container-fluid">
      <section id="creationProjet">
        <h2>Modifier un Projet</h2>
        <form class="form" action="modifier.php?id=<?php echo $id ?>"  method="post" enctype="multipart/form-data">
          <div class="flexboxFormu">
            <div class="formucol1">
              <ul>
                <li>
                  <label for="titre"> Titre du Projet : </label>
                </li>
                <li>
                  <input type="text" id="titre" name="titre" maxlength="50" placeholder="Titre" value="<?php echo $titre ?>"/>
                </li>
                <li> <span class="aide"> <?php echo $titreErreur ?> </span> </li>
                <li>
                  <label for="description"> Description du Projet : </label>
                </li>
                <li>
                  <textarea id="description" name="description"  rows="5" cols="30" placeholder="Description"><?php echo $description ?></textarea>
                </li>
                <li> <span class="aide"> <?php echo $descriptionErreur ?> </span> </li>
                <li>
                  <label for="but"> But du Projet : </label>
                </li>
                <li>
                  <textarea id="but" name="but" rows="5" cols="30" placeholder="But" ><?php echo $but ?></textarea>
                </li>
                <li> <span class="aide"> <?php echo $butErreur ?> </span> </li>
                <li>
                  <label for="description"> Resultat du Projet : </label>
                </li>
                <li>
                  <textarea id="resultat" name="resultat" rows="5" cols="30"  placeholder="Resultat"><?php echo $resultat ?></textarea>
                </li>
                <li> <span class="aide"> <?php echo $resultatErreur ?> </span> </li>
                <li>
                  <label for="technos"> Technologies Utilisés : </label>
                </li>
                <li>
                  <textarea id="technos" name="technos" rows="5" cols="30"  placeholder="Technologies"><?php echo $technos ?></textarea>
                </li>
                <li> <span class="aide"> <?php echo $technosErreur ?> </span> </li>
              </ul>
            </div>

            <div class="formucol2">

              <ul>
                <li>
                  <label for="galerieImg1"> Première Image de la Galerie : </label>
                </li>
                <li>
                  <input type="file" id="galerieImg1" name="galerieImg1">
                </li>
                <li> <span class="aide"> <?php echo $galerieImg1Erreur ?> </span> </li>
                <li>
                  <label for="galerieDesc1"> Description de la première Image : </label>
                </li>
                <li>
                  <input type="text" id="galerieDesc1" name="galerieDesc1" maxlength="150" placeholder="Description" value="<?php echo $galerieDesc1 ?>"/>
                </li>
                <li> <span class="aide"> <?php echo $galerieDesc1Erreur ?> </span> </li>
                <li>
                  <label for="galerieImg2"> Deuxième Image de la Galerie : </label>
                </li>
                <li>
                  <input type="file" id="galerieImg2" name="galerieImg2">
                </li>
                <li> <span class="aide"> <?php echo $galerieImg2Erreur ?> </span> </li>
                <li>
                  <label for="galerieDesc2"> Description de la deuxième Image : </label>
                </li>
                <li>
                  <input type="text" id="galerieDesc2" name="galerieDesc2" maxlength="150" placeholder="Description" value="<?php echo $galerieDesc2 ?>"/>
                </li>
                <li> <span class="aide"> <?php echo $galerieDesc2Erreur ?> </span> </li>
                <li>
                  <label for="galerieImg3"> Troisième Image de la Galerie : </label>
                </li>
                <li>
                  <input type="file" id="galerieImg3" name="galerieImg3" rows="5" cols="30">
                </li>
                <li> <span class="aide"> <?php echo $galerieImg1Erreur ?> </span> </li>
                <li>
                  <label for="galerieDesc3"> Description de la troisième Image : </label>
                </li>
                <li>
                  <input type="text" id="galerieDesc3" name="galerieDesc3" maxlength="150" placeholder="Description" value="<?php echo $galerieDesc1 ?>"/>
                </li>
                <li>  <span class="aide"> <?php echo $galerieDesc3Erreur ?> </span> </li>
                <li>
                  <label for="vignette"> Vignette : </label>
                </li>
                <li>
                  <input type="file" id="vignette" name="vignette">
                </li>
                <li> <span class="aide"> <?php echo $vignetteErreur ?> </span> </li>
                <li>
                  <label for="vignette"> Fichier ZIP : </label>
                </li>
                <li>
                  <input type="file" id="zip" name="zip">
                </li>
                <li> <span class="aide"> <?php echo $zipErreur ?> </span> </li>
              </ul>
            </div>
          </div>
          <div class="flexboxButton">
            <input
              type="submit"
              label="Modifier"
              class="btn btn-danger creation"
              name="submit"
            />
          </div>
        </form>
      </section>
    </div>
  </body>
</html>
