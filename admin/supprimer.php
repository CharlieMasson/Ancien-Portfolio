<?php

    require "../php/server.php";
    require "../php/isconnect.php";
    if(!empty($_GET['id'])){
        $id = checkInput ($_GET['id']);
    }

    if(!empty($_POST)){
        $id= checkInput ($_POST['id']);
        $statement = $pdo->prepare("DELETE FROM projets WHERE id_projet = ?");
        $statement->execute(array($id));
        header("Location: dashboard.php");
    }

    function checkInput($data){
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
    <form class="form" role="form" action="supprimer.php" method="post"> 
      <div class="flexboxSupprimer">
          <input type="hidden" name="id" value="<?php echo $id ?>">
          <p class="supprimer"> Souhaitez-vous vraiment supprimer ce projet? <button type="submit" class="btn btn-danger">Supprimer</button> <a class="btn btn-secondary" href="dashboard.php">Annuler</a> </p>
        </div>  
    </form>
  </body>
</html>
