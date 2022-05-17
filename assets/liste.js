$(document).ready(function () {
  $("#mytable").DataTable();
});


// accordion
 $(function () {
   $(".jQuery_accordion").accordion({
     active: false,
     collapsible: true,
   });
 });



 $(function () {
   setTimeout(function () {
     $(".coca").hide();
   }, 3000);
 });
