$(function() {

//---------------------------tabs form-----------------------
  $('.tabs__wrap').hide();
  $('.tabs__wrap:first').show();
  $('.tabs ul a:first').addClass('registration__step_active');

  // $('.tabs ul a').click(function(event){
  //   event.preventDefault();
  //   $('.tabs ul a').removeClass('registration__step_active');
  //   $(this).addClass('registration__step_active');
  //   $('.tabs__wrap').hide();
  //    var selectTab = $(this).attr('href');
  //   $(selectTab).fadeIn();
  // });
 
  $('.registration__form_btn a').click(function(event){
    event.preventDefault();
    $('.tabs__wrap').hide();
     var selectTab = $(this).attr('href');
    $(selectTab).fadeIn();
  });


//-------------------------скорость якоря btn---------------------------------------
  $(".click").on("click","a", function (event) {
      event.preventDefault();
      var id  = $(this).attr('href'),
          top = $(id).offset().top;
      $('body,html').animate({scrollTop: top - 60}, 'slow', 'swing');
  });

//------------------------------------form-------------------------------------------
  $('input[type="tel"]').mask('+0 (000) 000-00-00');


//------------------------------acardeon---------------------------
  $(".faq__block_content").slideUp("slow");
  $(".faq__block").first().addClass('faq__block--active');
  $(".faq__block--active .faq__block_content").slideDown("slow");

  $(".faq__block_header").on("click", function(){
    if ($(this).parent().hasClass('faq__block--active')) {
      $(this).parent().removeClass('faq__block--active');
      $(".faq__block_content").slideUp("slow");
    }
    else {
      $(".faq__block--active .faq__block_content").slideUp("slow");
      $(".faq__block--active").removeClass('faq__block--active');
      $(this).parent().addClass('faq__block--active');
      $(".faq__block--active .faq__block_content").slideDown("slow");
    }
  });

//----------------------------------------fixed-header---------------------------------
  $(window).scroll(function(){
      if($(this).scrollTop()>20){
          $('.header').addClass('header--active');
      }
      else if ($(this).scrollTop()<20){
          $('.header').removeClass('header--active');
      }
  });

  if ($(this).scrollTop()>20){
    $('.header').addClass('header--active');
  }


//-------------------------reviews slider---------------------------------------
    var swiper = new Swiper('.reviews__slider', {
      spaceBetween: 25,
      pagination: {
        el: '.reviews__pagination',
        clickable: true,
      },
      autoplay: {
        delay: 5000,
        disableOnInteraction: false,
      },
    });

//-------------------------partners slider---------------------------------------
    var swiper = new Swiper('.partners__slider', {
      slidesPerView: 5,
      spaceBetween: 25,
      pagination: {
        el: '.partners__pagination',
        clickable: true,
      },
      breakpoints: {
        1200: {
          slidesPerView: 4,
        },
        992: {
          slidesPerView: 3,
        },
        768: {
          slidesPerView: 2,
        },
        576: {
          slidesPerView: 1,
        }
      },
      autoplay: {
        delay: 4000,
        disableOnInteraction: false,
      },
    });

});

