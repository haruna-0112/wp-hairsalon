$(function () {

  // 「#top-btn」をクリックしたときに
  $('#top-btn').click(function () {
    // scrollTopメソッドを用いることで、
    // ページ最上部まで移動するようにしてください。
    $('html, body').scrollTop(0);
  });

  // 「header a」要素のclickイベントを作成してください。
  $('.header-nav a').click(function () {
    // 移動先を50px上にずらす
    var adjust = 80;
    var id = $(this).attr('href');
    // 移動先を調整
    var position = $(id).offset().top - adjust;
    
    $('html, body').animate({
      'scrollTop': position
    }, 500);
  });

 




  $('.hamburger').click(function () {
    $(this).toggleClass('active');

    if ($(this).hasClass('active')) {
      $('.globalMenuSp').addClass('active');
    } else {
      $('.globalMenuSp').removeClass('active');
    }
  });
});