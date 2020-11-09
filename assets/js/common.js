$(function () {
  var pagetop = $('.pagetop');
  // ボタン非表示
  pagetop.hide();
  // 500px スクロールしたらボタン表示
  $(window).scroll(function () {
    if ($(this).scrollTop() > 500) {
      pagetop.fadeIn();
    } else {
      pagetop.fadeOut();
    }
  });
  pagetop.click(function () {
    $('body, html').animate({ scrollTop: 0 }, 500);
    return false;
  });
});