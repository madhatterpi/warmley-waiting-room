export default {
  init() {
    // JavaScript to be fired on all pages
    // CUSTOM HAMBURGER
    $('.navbar-toggler').on('click', function () {
      $('.nav-primary').toggleClass('visible');
      $('.animated-icon2').toggleClass('open');
      $('.nav-primary').toggleClass('nav-visible');
    });

//     $(window).resize(function()  
// {  
    // var ratio = 1/1; // height / width  
    // $('.insta-block__inner').height( $('.insta-block__inner').width() * ratio );  

//     var ratio = 4/4.7; // height / width  
//     $('.h-block').height( $('.h-block').width() * ratio ); 
// });  
  
// When the page loads, trigger a window resize event  
// so our element gets resized by default. Saves having   
// to duplicate the same code on load too.  
// $(window).load(function()  
// {  
//     $(window).trigger('resize');  
// }); 

  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
