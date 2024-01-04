$(document).ready(function() {
  // Attacher une fonction à l'événement de défilement
  $(window).on("scroll", function() {
      // Si le défilement est supérieur à 100 pixels, ajouter la classe navbar-scroll, sinon la supprimer
      if ($(this).scrollTop() > 100) {
          $(".navbar").addClass("navbar-scroll");
          $(".menu-link").addClass("dark-color"); // Correction de cette ligne
          $(".menu-butto").addClass("dark-color"); // Correction de cette ligne
      } else {
          $(".navbar").removeClass("navbar-scroll");
          $(".menu-link").removeClass("dark-color"); // Correction de cette ligne
          $(".menu-butto").removeClass("dark-color"); // Correction de cette ligne
      }
  });
});


/* ===================================================================

   SCROLL TO TOP BUTTON

   =================================================================== */
  // Fonction pour gérer l'affichage/masquage du bouton de retour en haut en fonction du défilement
  function handleScroll() {
    var backToTop = $('#back-to-top');
    if ($(window).scrollTop() > 0) {
        backToTop.fadeIn('slow');
    } else {
        backToTop.fadeOut('slow');
    }
  }

  // Fonction pour faire défiler la page vers le haut lorsqu'on clique sur le bouton
  function scrollToTop() {
    $("html, body").animate({
        scrollTop: 0
    }, 150);
    return false;
  }

  // Attacher la fonction handleScroll à l'événement de défilement de la fenêtre
  $(window).on("scroll", handleScroll);

  // Attacher la fonction scrollToTop à l'événement de clic sur le bouton
  $("#back-to-top").on("click", scrollToTop);




