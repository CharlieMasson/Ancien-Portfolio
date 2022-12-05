<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />

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

    <!-- fichier CSS-->
    <link rel="stylesheet" href="styles.css" />

    <meta charset="utf-8" />
    <title>Portfolio</title>
  </head>

    <body>
        <section id="connexion" class="container">
            <div class="connexionTitre">
                <h1> Espace Administrateur </h1>
            </div>
            <?php include_once "../php/scriptLogin.php" ?>
            <form action="" method="post">
                <div class="flexboxForm">
                    <div class="formconnec">
                        <ul>
                            <li><h3> connexion </h3></li>
                            <li><?php if(isset($erreur)){echo $erreur;} ?></li>
                            <li><input class="identifiant" type="text" name="identifiant" placeholder="identifiant"></li>
                            <li><input class="mdp" type="password" name="mdp" placeholder="Mot de Passe"></li>
                            <li class="boutons"><input type="submit" label="connexion" class="btn btn-success connex" name="submit">
                            <a class="btn btn-secondary" href="../index.php"> Retour </a></li>
                        </ul>
                    </div>
                </div>
            </form>
        </section>
</html>