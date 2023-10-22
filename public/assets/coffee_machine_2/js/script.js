$('[href^="#"]').on('click', function(){
  var target = $(this).attr('href');
  $('html, body').animate({scrollTop: $(target).offset().top - 82}, 300);
  return false;
});


let div = document.createElement('div');
div.style.overflowY = 'scroll';
div.style.width = '50px';
div.style.height = '50px';
document.body.append(div);
let scrollWidth = div.offsetWidth - div.clientWidth;
div.remove();


$('.breakdowns__item').on('click', function() {
  $('.breakdowns__item').removeClass('breakdowns__item--active');
  $(this).addClass('breakdowns__item--active');
  $('.breakdowns__amount-price').html($(this).data('price'));
});


let swiper = new Swiper('.reviews__slider', {
  effect: 'fade',
  autoHeight: true,
  watchSlidesProgress: true,
  breakpoints: {
    991: {
      autoHeight: false
    }
  }
});


$('.reviews__slider-pagination-item').on('click', function(e) {
  swiper.slideTo($(this).index())
});


$('.modal').on('show.bs.modal', function () {
  $('body').css({
    'padding-right': scrollWidth,
    'overflow': 'hidden'
  });
  $('.header').css('padding-right', scrollWidth);
});

$('.modal').on('hide.bs.modal', function () {
  $('body').css({
    'padding-right': '0',
    'overflow': 'auto'
  });
  $('.header').css('padding-right', '0');
});


$('.header__menu-item').on('click', function() {
  $('.header__menu').modal('hide');
});


if ($(window).width() < 768) {
  $('.breakdowns__item').on('click', function() {
    $('html, body').animate({scrollTop: $('.breakdowns').offset().top + $('.breakdowns').innerHeight() - $(window).innerHeight() }, 300);
  });

}
