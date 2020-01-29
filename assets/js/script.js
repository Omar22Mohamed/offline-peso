$(function () {

  // Hide Placeholder on Form Focus

  $('[placeholder]').focus(function () {
    $(this).attr('data-text', $(this).attr('placeholder'));
    $(this).attr('placeholder', '');
  }).blur(function () {
    $(this).attr('placeholder', $(this).attr('data-text'));
  });

  // Toggle Dashboard Sidebar

  $(".toggle-dashboard-sidebar").on("click", function () {
    $(".content-area, .sidebar").toggleClass("no-sidebar");
  });

});