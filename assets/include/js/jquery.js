(function($) {
  'use strict';

  /*============================================================================*/
  //グロナビの背景色オンオフ
  /*============================================================================*/
  $(function() {
    $(window).on('scroll', function() {
      var navbarOffset = $('.navigation-site').offset().top > 150;
      if(navbarOffset) {
        $('.navigation-site').addClass('navigation-site_on_bg');
      }
      else {
        $('.navigation-site').removeClass('navigation-site_on_bg');
      }
    });
  });

  /*============================================================================*/
  //ハンバーガーメニュー
  /*============================================================================*/
  $(function(){

    var open = false;

    $(window).on('load', function () {
      //$('.navigation .back_to_ui_kit').removeClass('display_n');
    //  $('.navigation .menu__ul').removeClass('display_n');
    });

    $(window).resize(function(){
        var w = $(window).width();
        //var x = 568;
        var bp = {
          sm: 576,
          md: 768,
          lg: 992,
          xl: 1200
        }
        if (w <= bp.sm) {

        } else if (w <= bp.md){

        } else if (w <= bp.lg){
          if ($('.navigation-site .back_to_ui_kit').css('display') == '') {
            $('.navigation-site .back_to_ui_kit').css('display', 'none');
            $('.navigation-site .menu__ul').css('display', 'none');
            console.log("noneにした");
            //open == false;
          }

        //   if ($('.navigation .back_to_ui_kit').css('display') == 'block') {
        //   $('.navigation .back_to_ui_kit').css('display', 'none');
        //   $('.navigation .menu__ul').css('display', 'none');
        // }
          //$('.navigation .hummenu').removeClass('display_n');
          //$('.navigation .back_to_ui_kit').addClass('display_n');
          //$('.navigation .menu__ul').addClass('display_n');
        } else if (w >= bp.lg){
          if ($('.navigation-site .back_to_ui_kit').css('display') == 'none') {
            $('.navigation-site .back_to_ui_kit').css('display', '');
            $('.navigation-site .menu__ul').css('display', '');
            console.log("display空にした");
          }
          else {
            //メニューを開いたままブラウザサイズを広げた場合(display:blockの場合)
            $('.navigation-site .back_to_ui_kit').css('display', '');
            $('.navigation-site .menu__ul').css('display', '');
            console.log("同じくdisplay空にした");
          }

          // if ($('.navigation .back_to_ui_kit').css('display') == 'none') {
          //   $('.navigation .back_to_ui_kit').css('display', 'block');
          //   $('.navigation .menu__ul').css('display', 'block');
          // }
          // $('.navigation .back_to_ui_kit').css('display', 'block');
          // $('.navigation .menu__ul').css('display', 'block');
          //$('.navigation .hummenu').addClass('display_n');
          //$('.navigation .back_to_ui_kit').removeClass('display_n');
          //$('.navigation .menu__ul').removeClass('display_n');
        } else if (w <= bp.xl){

        }
    });

    $('.navigation-site .hummenu').click (function(){
      if (open == false) {
        $('.navigation-site .back_to_ui_kit').css('display', 'block');//ワンカラムなので空ではなくblock
        $('.navigation-site .menu__ul').css('display', 'block');
        open = true;
        console.log('開いた！true');
      } else {
        $('.navigation-site .back_to_ui_kit').css('display', 'none');
        $('.navigation-site .menu__ul').css('display', 'none');
        //$('.navigation .back_to_ui_kit').addClass('display_n');
        //$('.navigation .menu__ul').addClass('display_n');
        open = false;
        console.log('閉じた!false');
      }


    });

  });

  /*============================================================================*/
  //グロナビの背景色オンオフ
  /*============================================================================*/
  $(function(){
    var over_flg;
    $('.header_menu .menu-item-has-children a:first').attr("href", "javascript:void(0);");

    ///　メニューをクリックでサブメニュー開閉
    //-------------------------------------------------------------
    $('.header_menu .menu-item-has-children').click (function(){

      if ($(this).children('ul').hasClass('sub-menu')) {
        $(this).children('ul').removeClass('sub-menu');
        $(this).children('ul').addClass('selected');
        console.log('remove');
      } else {
        $(this).children('ul').addClass('sub-menu');
        console.log('add');
      }

    });
    function openMenu() {
      console.log('メヌーオープン')
    }

    ///マウスカーソルがメニュー上/メニュー外判定
    //-------------------------------------------------------------
   $('.menu-item-has-children, .sub-menu').hover(function(){
     over_flg = true;
     //console.log('true');
   }, function(){
     over_flg = false;
     //console.log('false');
   });

     // メニュー領域外をクリックしたらメニューを閉じる
     //-------------------------------------------------------------
    $('body').click(function() {
      if (over_flg == false) {
        $('.menu-item-has-children ul').addClass('sub-menu');
      }
    });

  });

}(jQuery));
