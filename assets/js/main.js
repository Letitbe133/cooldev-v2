$(function(){

  // Initialisation modal
  $('.modal').modal({
    opacity: 0.2,
    inDuration: 300
  });

  $('#modal-trigger').on('click', function(){
    $('#modal').modal('close');
  })

  // Initialisation menu mobile
  $(".button-collapse").sideNav({
    menuWidth: 300,
    closeOnClick: true
  });

  // Initialisation accordéon
  $('.collapsible').collapsible();

  $('.clear').on('click' , function () {
  $('.collapsible').collapsible('close',0);
    })

  // fonction smoothScroll
  $('.scrollTo').on('click', function(){
    var page = $(this).attr('data-target');
    var speed = 750;
    $('html, body').animate( {scrollTop: $(page).offset().top }, speed);
  })

  // display flèche scroll top
    $(window).scroll(function() {
    var winHeight = $(window).outerHeight();
    if ($(this).scrollTop() > winHeight)
     {
        $('#up').fadeIn();
     }
    else
     {
      $('#up').fadeOut();
     }
 });
// Paralax

   $(document).ready(function(){
      $('.parallax').parallax();
    });

// Egalisation des hauteurs de cartes

// function getMaxHeights
// récupère la hauteur max des éléments cible
// prend en paramètre la cible
function getMaxHeights(target) {
  // création d'une variable de type tableau pour stocker les hauteurs
  let heights = [];
  // création d'une variable pour stocker la hauteur max
  let maxHeight;
  // récupère les hauteurs des éléments cible et les ajoute au tableau
  $(target).each(function() {
    heights.push($(this).outerHeight());
  })
  
  getMax(heights);
  // retourne la valeur de maxHeight
  return maxHeight;
}

// function getMax
// détermine la hauteur max dans le tableau des hauteurs
// prend en paramètre le tableau heights
function getMax(arr) {
  // stockage de la hauteur max dans la variable maxHeight
  maxHeight = Math.max(...arr);
  // debug 
  //console.log(maxHeight);
}

// function setHeights
// affecte à chaque élément cible la hauteur max
function setHeight(target) {
  getMaxHeights(target);
  // si la taille de l'écran est > 600px
  if($(window).outerWidth() > 600) {
    $(target).each(function() {
      $(this).css('height', maxHeight);
    })
  }
}

setHeight("#skills .card-content");
setHeight("#skills .card-action");
setHeight("#works .card-content");
setHeight("#cards-testimonial .card-testi");
    
 // Initialisation Particles
 let particlesUrl = "http://mylene.hiezely.space/assets/js/particles.json";
 particlesJS.load('particles', particlesUrl, function() {
  console.log('particles.js loaded - callback');
});

//Initialisation tooltip
$('.tooltipped').tooltip({delay: 50, html:true});
})
