/**
 * File faq.js.
 */
jQuery(function($) {
  $(document).ready(function() {
    $('.content').hide();

    $('.more').click(function() {
      $(this).parent().parent().next('.content').slideToggle();
      $(this).toggleClass('active');
    });
  });
});
