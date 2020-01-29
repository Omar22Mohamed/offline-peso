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

  // Date Range

  $(document).ready(function(){
    $('#input-daterange').datepicker({
      format: "yyyy-mm-dd",
      autoclose: true,
      todayBtn:'linked'
    })
  })

  /* $(document).ready(function(){
    $('.input-daterange').datepicker({
     todayBtn:'linked',
     format: "yyyy-mm-dd",
     autoclose: true
    });
   }); */

});