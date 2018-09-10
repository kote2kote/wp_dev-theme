$(function() {

  /*ここにjQueryを記述*/
  $('#htmlcss_flexbox h2').css('color', 'blue');

  $('.font-sizes a').click(function() {
    $('html').css('font-size', $(this).data('size'));
    return false;
  })

});
