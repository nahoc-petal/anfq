/**
 * File faq.js.
 */
jQuery(function ($) {
  $(document).ready(function () {

    $(".navbar-burger").click(function () {
      $(".navbar-burger").toggleClass("is-active");
      $(".navbar-menu").toggleClass("is-active");
    });

    if($('body').hasClass('page-template-neurofibromatosis')) {
      $('.content').hide();

      $('.more').click(function () {
        $(this).parent().parent().next('.content').slideToggle();
        $(this).toggleClass('active');
      });
    }
    
  });
});