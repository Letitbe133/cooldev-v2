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
 
 // ScrollFire
 var options = [
 	 {selector: '#staggered2', offset: 100, callback: function(el) { Materialize.fadeInImage($(el)); }},
 	 {selector: '#staggered1', offset: 100, callback: function(el) { Materialize.fadeInImage($(el)); }},
 	 {selector: '#staggered3', offset: 100, callback: function(el) { Materialize.fadeInImage($(el)); }},
    {selector: '#brain', offset: 200, callback: function(el) { Materialize.showStaggeredList($(el)); } },
    {selector: '#unicorn', offset: 200, callback: function(el) { Materialize.showStaggeredList($(el)); } },
      ];
  Materialize.scrollFire(options);
  
// Initialisation Parala5
      $('.parallax').parallax();

//Initialisation tooltip
$('.tooltipped').tooltip({delay: 50, html:true});
})
