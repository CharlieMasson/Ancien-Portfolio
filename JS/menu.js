/*declaration des valeurs*/
var navLink1 = document.getElementsByClassName("nav-link")[0];
var navLink2 = document.getElementsByClassName("nav-link")[1];
var navLink3 = document.getElementsByClassName("nav-link")[2];
var navLink4 = document.getElementsByClassName("nav-link")[3];
var sidenav = document.getElementById("sidenav");
var navArrow = document.getElementsByClassName("navArrow")[0];
var navArrowClose = document.getElementsByClassName("navArrowClose")[0];
var mediaQuerry1 = window.matchMedia("(max-height: 680px)");
var mediaQuerry2 = window.matchMedia("(max-width: 425px)");

/*declaration de la fonction opennav*/
function openNav() {
  sidenav.style.width = "250px";
  /*changement de la taille du menu*/
  navArrow.style.display = "none";
  /*cache la fleche pour appeler opennav*/
  navArrowClose.style.display = "contents";
  /*rend la fleche pour appeler closenav visible*/

  navLink1.style.visibility = "visible";
  navLink2.style.visibility = "visible";
  navLink3.style.visibility = "visible";
  navLink4.style.visibility = "visible";
  /*assure que les éléments du menu sont visible pour si la taille de la fenêtre est réduite */

  navLink1.style.transform = "rotate(0deg)";
  navLink2.style.transform = "rotate(0deg)";
  navLink3.style.transform = "rotate(0deg)";
  navLink4.style.transform = "rotate(0deg)";
  /*remet les éléments du menu à l'endroit */

  navLink1.style.paddingLeft = "30px";
  navLink2.style.paddingLeft = "30px";
  navLink3.style.paddingLeft = "30px";
  navLink4.style.paddingLeft = "30px";
  /*décalle les éléments du menu à gauche */
}

/*déclaration de la fonction closenav*/
function closeNav() {
  navArrow.style.display = "contents";
  /*rend la fleche pour appeler opennav de nouveau visible*/
  navArrowClose.style.display = "none";
  /*rend la fleche pour appeler opennav de nouveau invisible*/

  if (mediaQuerry1.matches || mediaQuerry2.matches) {
    sidenav.style.width = "30px";
    navLink1.style.visibility = "hidden";
    navLink2.style.visibility = "hidden";
    navLink3.style.visibility = "hidden";
    navLink4.style.visibility = "hidden";
  } else {
    sidenav.style.width = "70px";
  }
  /*si la taille de l'écran est inférieur à mediaQuerry1 ou 2 le menu est plus petit et ses éléments deviennent invisible, sinon le menu prend 70px de largeur*/

  navLink1.style.transform = "rotate(90deg)";
  navLink2.style.transform = "rotate(90deg)";
  navLink3.style.transform = "rotate(90deg)";
  navLink4.style.transform = "rotate(90deg)";
  /*retourne de nouveau les éléments du menu*/

  navLink1.style.paddingLeft = "0px";
  navLink2.style.paddingLeft = "0px";
  navLink3.style.paddingLeft = "0px";
  navLink4.style.paddingLeft = "0px";
  /*enlève le décalage à gauche des éléments du menu*/
}

/*petite fonction pour s'assurer que le menu reste responsive après que la taille de la page soit modifié alors qu'il est ouvert,
la propriété onresize permet d'appeler la fonction quand sa taille est modifié*/
window.onresize = function () {
  if (mediaQuerry1.matches || mediaQuerry2.matches) {
    sidenav.style.width = "30px";
    navLink1.style.visibility = "hidden";
    navLink2.style.visibility = "hidden";
    navLink3.style.visibility = "hidden";
    navLink4.style.visibility = "hidden";
    closeNav();
    /*si la taille de l'écran est inférieur à mediaQuerry1 ou 2 le menu est plus petit, ses éléments deviennent invisibles et closenav est appelé*/
  } else {
    sidenav.style.width = "70px";
    navLink1.style.visibility = "visible";
    navLink2.style.visibility = "visible";
    navLink3.style.visibility = "visible";
    navLink4.style.visibility = "visible";
    closeNav();
    /*si la taille de l'écran est supérieur à mediaQuerry le menu prends 70px de largeur, ses éléments deviennent visibles et closenav est appelé*/
  }
};

/*code pour imiter le scrollspy de bootstrap car celui-ci ne fonctionne pas avec le menu de la page, fonctionne de façon similaire au scrollspy de bootstrap 
mais utilise la classe .active sur l'élément ciblé*/
$(window).bind("scroll", function () {
  var currentTop = $(window).scrollTop();
  var elems = $(".scrollspy");
  elems.each(function (index) {
    var elemTop = $(this).offset().top;
    var elemBottom = elemTop + $(this).height();
    if (currentTop >= elemTop && currentTop <= elemBottom) {
      var id = $(this).attr("id");
      var navElem = $('a[href="#' + id + '"]');
      navElem.parent().addClass("active").siblings().removeClass("active");
    }
  });
});
