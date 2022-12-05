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

  <?php require "../php/isconnect.php";
  require "menuadmin.php";
  ?>
    

    <div class="container-fluid">
      <section id="tableau">
        <h3> Liste Des Projets </h3>
        <table class="table table-striped table-bordered">
          <thead class="table-secondary">
            <tr>
              <th>Titre</th>
              <th>Vignette</th>
              <th>Description</th>
              <th>But</th>
              <th>Resultat</th>
              <th>Technos</th>
              <th>GalerieImg1</th>
              <th>GalerieDesc1</th>
              <th>GalerieImg2</th>
              <th>GalerieDesc2</th>
              <th>GalerieImg3</th>
              <th>GalerieDesc3</th>
              <th>zip</th>
              <th> actions </th>
            </tr>
          </thead>
          <tbody>
            <?php 
            require '../php/server.php';

            $statement = $pdo->query('SELECT * from projets');
            while($projets = $statement->fetch())
            {
              echo '<tr>';
              echo '<td>' . $projets['projetTitre'] . '</td>';
              echo '<td>' . $projets['projetVignette'] . '</td>';
              echo '<td>' . $projets['projetDescription'] . '</td>';
              echo '<td>' . $projets['projetBut'] . '</td>';
              echo '<td>' . $projets['projetResultat'] . '</td>';
              echo '<td>' . $projets['projetTechnos'] . '</td>';
              echo '<td>' . $projets['projetGalerieImg1'] . '</td>';
              echo '<td>' . $projets['projetGalerieDesc1'] . '</td>';
              echo '<td>' . $projets['projetGalerieImg2'] . '</td>';
              echo '<td>' . $projets['projetGalerieDesc2'] . '</td>';
              echo '<td>' . $projets['projetGalerieImg3'] . '</td>';
              echo '<td>' . $projets['projetGalerieDesc3'] . '</td>';
              echo '<td>' . $projets['projetTelechargement'] . '</td>';
              echo '<td width=300>';
              echo '
                <a class="btn btn-warning" target="_blank" href="../projets/projet.php?id=' . $projets['id_projet'] . '">Voir</a>
                <a class="btn btn-primary" href="modifier.php?id=' . $projets['id_projet'] . '">Modifier</a>
                <a class="btn btn-danger" href="supprimer.php?id=' . $projets['id_projet'] . '">Supprimer</a>';
              echo '</td>';
              echo '</tr>';
            }

            ?>
          </tbody>
        </table>
      </section>
    </div> 
  </body>
</html>
