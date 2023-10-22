"use strict";

$(document).scroll(function () {
  svg4everybody();
});

$(document).scroll(function () {
  var scroll_status = $(document).scrollTop();

  if (scroll_status > $('.header').height()) {
    $('.header').addClass('header--float');
  } else {
    $('.header').removeClass('header--float');
  }
});
$('.menu').on('click', function (e) {
  e.preventDefault();
  $('.menu__default, .menu__active').toggleClass('is-hidden');
  $('.navigation').toggleClass('is-visible');
});
$('.navigation__link').on('click', function (e) {
  e.preventDefault();
  $('.menu__default, .menu__active').toggleClass('is-hidden');
  $('.navigation').toggleClass('is-visible');
});
$('.header__item--phone').on('click', function () {
  $('.phone-content').toggleClass('is-hidden');
  $('.dropdown').addClass('is-hidden');
});
$('.header__item--dropdown').on('click', function () {
  $('.dropdown').toggleClass('is-hidden');
  $('.phone-content').addClass('is-hidden');
});
$('.dropdown__link').on('click', function (e) {
  $(e.currentTarget).addClass('dropdown__link--active').siblings().removeClass('dropdown__link--active');
});
$('#tab1').on('click', function () {
  $('#tab1-content').removeClass('is-hidden');
  $('#tab2-content, #tab3-content').addClass('is-hidden');
  $('#tab1').addClass('is-active');
  $('#tab2, #tab3').removeClass('is-active');
  $('.price__head .price__desc').html('Прайс на ремонт ноутбуков');
});
$('#tab2').on('click', function () {
  $('#tab2-content').removeClass('is-hidden');
  $('#tab1-content, #tab3-content').addClass('is-hidden');
  $('#tab2').addClass('is-active');
  $('#tab1, #tab3').removeClass('is-active');
  $('.price__head .price__desc').html('Прайс на ремонт моноблоков');
});
$('#tab3').on('click', function () {
  $('#tab3-content').removeClass('is-hidden');
  $('#tab2-content, #tab1-content').addClass('is-hidden');
  $('#tab3').addClass('is-active');
  $('#tab2, #tab1').removeClass('is-active');
  $('.price__head .price__desc').html('Прайс на ремонт компьютеров');
});
