 jQuery(document).ready(function($) {
 
    $(".scroll a#reservas,a#cartasa, a#home,a#equipo,a#logo .navbar-brand, .gototop,.explore").click(function(event){
    event.preventDefault();
    $('html,body').animate({scrollTop:$(this.hash).offset().top}, 600,'swing');
    $(".scroll li").removeClass('active');
    $(this).parents('li').toggleClass('active');

        
    });
     $(document).ready(function(){
         $('#my-table').dynatable();
     });

     $('#reservar').guardian();
     $('#date').pickadate();
     //$('#time').pickatime();
     window.slider = $('#slide');
     window.slider.simpleSlide({
         'auto':true,
         'autoTime':9000,
         'transitionTime':1500,
         'bullets':true,
         'slideSelector':'img',
         'onInitiate':function(){
             window.slider.find('a.arrow.prev').addClass('fa fa-hand-o-left');
             window.slider.find('a.arrow.next').addClass('fa fa-hand-o-right');
         }
     });



      $('#time').clockpicker({
         placement: 'top',
         align: 'left',
         autoclose: true,
         'default': 'now',
          donetext: 'Hecho'
     });

// Manually toggle to the minutes view


     var map = new GMaps({
         el: '#map',
         lat: -12.043333,
         lng: -77.028333
     });



 });








var wow = new WOW(
  {
    boxClass:     'wowload',      // animated element CSS class (default is wow)
    animateClass: 'animated', // animation CSS class (default is animated)
    offset:       0,          // distance to the element when triggering the animation (default is 0)
    mobile:       true,       // trigger animations on mobile devices (default is true)
    live:         true        // act on asynchronously loaded content (default is true)
  }
);
wow.init();
