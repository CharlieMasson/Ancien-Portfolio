<link rel="stylesheet" href="../main.css" />

<div id="sidenav">
      <ul class="nav">
        <!--bouton pour agrandir le menu-->
        <li class="navArrow">
          <button class="openbtn" onclick="openNav()">
            <i class="fas fa-arrow-left"></i>
          </button>
        </li>
        <!--bouton pour rétrécir le menu-->
        <li class="navArrowClose">
          <button class="closebtn" onclick="closeNav()">
            <i class="fas fa-arrow-right"></i>
          </button>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#Introduction"> Présentation</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#Projets"> Projets </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#Parcours"> Parcours </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#Contact"> Contact </a>
        </li>
      </ul>
    </div>

    <!--script qui s'occupe de l'agrandissement et du rétrécissement du menu-->
    <script src="../js/menu.js"></script>