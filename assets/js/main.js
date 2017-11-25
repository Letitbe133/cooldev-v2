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
    
// Egalisation de la hauteur des cartes skills
 var heights = [];

 function getHeights(){

 $('#skills .card-content').each(function(){
   heights.push($(this).outerHeight());
 })
 return heights;
 }

 function getMax(arr){
   var maxHeight = Math.max(...arr);
   return maxHeight;

 }

 getHeights();
 var max = getMax(heights);
 console.log(max);

 if($(window).outerWidth() > 600) {
   $('.card-content').each(function(){
     $(this).css('height', max);
   })
 }

 // Initialisation Particles
 let particlesUrl = "http://localhost/cooldev-v2/assets/js/particles.json";
 particlesJS.load('particles', particlesUrl, function() {
  console.log('particles.js loaded - callback');
});

//Initialisation tooltip
$('.tooltipped').tooltip({delay: 50, html:true});
})
