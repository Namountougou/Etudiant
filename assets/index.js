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

// faire un setTimeout pour la class coca
$(function () {
  setTimeout(function () {
    $(".coca").hide();
  }, 3000);
});
//pour autocomplete
