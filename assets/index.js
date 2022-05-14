$("#tuteur").hide();
$("#Radio1").click(function () {
  $("#tuteur").show();
});
$("#Radio2").click(function () {
  $("#tuteur").hide();
});

// dfghjklxcvbnm,.xcbnm,

// code accordion pour la liste

$(function () {
  $(".jQuery_accordion").accordion({
    active: false,
    collapsible: true,
  });
});

// Code pour le tableau de la liste
$(document).ready(function () {
  $("#mytable").DataTable();
});

//pour autocomplete

