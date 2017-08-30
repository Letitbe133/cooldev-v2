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

// // Egalisation de la hauteur des cartes
//  var heights = [];
//
//  function getHeights(){
//
//  $('.offer-content').each(function(){
//    heights.push($(this).outerHeight());
//  })
//  return heights;
//  }
//
//  function getMax(arr){
//    var maxHeight = Math.max(...arr);
//    return maxHeight;
//
//  }
//
//  getHeights();
//  var max = getMax(heights);
//  console.log(max);
//
//  if($(window).outerWidth() > 360) {
//    $('.offer-content').each(function(){
//      $(this).css('height', max);
//    })
//  }

})


// égalisation des hauteurs de cartes

let max;
let selector;

function getMaxHeight(target){
  const heights = [];
  selector.forEach(function(item){
    heights.push(item.offsetHeight);
  })
  max = Math.max(...heights);
  //console.log(max);
}

function setHeight(target) {
  selector = document.querySelectorAll(target);
  getMaxHeight(target);
  selector.forEach(function(item) {
    item.style.height = max + "px";
  })
}

// Partie à modifier : taper le sélecteur css entre les guillemets
// ex : #one .card sélectionne toutes les cartes de la section d'id one
setHeight('.works .card');
