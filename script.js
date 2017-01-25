//                   PLEASE  NOTE 
// 
//to edit this file, you must run Gulp. Because it will compresses the code into new file in compressed folder called script.js. And this file (compressed/script.js) is linked the site. If unable to use gulp or anyother task runner. You can do it manually from online "script minified tools".
// 
//
$(document).ready(function(){

  // ++++++++++++++++++++
  // Banner
  // ++++++++++++++++++++ 
  var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        paginationClickable: true,
        spaceBetween: 30,
        // autoplay: 2400,
        loop: true,
    });


  // ++++++++++++++++++++ 
  // Video
  // ++++++++++++++++++++ 
  $('.video-play').click(function(){
    $('.video-to-play').addClass('show');
      $("iframe#video-to-play").attr("src", $("iframe#video-to-play").attr("src").replace("autoplay=0", "autoplay=1"));
    // $(this).siblings('.news-content-hover').addClass('hide');
    // $(this).parent('.news-video').addClass('shadow');
  });
});//End of Document ready