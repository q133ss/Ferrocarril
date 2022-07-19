"use strict";

$(function () {
  $('#mask__phone').mask('+7 (999) 999-99-99');
});
$(function () {
  $('#datepicker').datepicker();
});
$('.home__reportList-decor').on('click', function () {
  $('.home__reportList-input').val('');
});
$('.home__reportHistory-decor').on('click', function () {
  $('.home__reportHistory-input').val('');
});
$('.home__appliList-decor').on('click', function () {
  $('.home__appliList-input').val('');
});
$('.home__appliHistory-decor').on('click', function () {
  $('.home__appliHistory-input').val('');
});