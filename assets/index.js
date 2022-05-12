$("#tuteur").hide();
$("#Radio1").click(function () {
  $("#tuteur").show();
});
$("#Radio2").click(function () {
  $("#tuteur").hide();
});

// dfghjklxcvbnm,.xcbnm,


$(function () {
  var availableTags = [
    "ActionScript",
    "AppleScript",
    "Asp",
    "BASIC",
    "C",
    "C++",
    "Clojure",
    "COBOL",
    "ColdFusion",
    "Erlang",
    "Fortran",
    "Groovy",
    "Haskell",
    "Java",
    "JavaScript",
    "Lisp",
    "Perl",
    "PHP",
    "Python",
    "Ruby",
    "Scala",
    "Scheme",
  ];
  $("#tags").autocomplete({
    source: availableTags,
  });
});



// code accordion pour la liste 

  
        $(function() {
          
            $(".jQuery_accordion").accordion({
              active: false,
              collapsible: true,
            });
        });

// Code pour le tableau de la liste 
$(document).ready(function () {
  $("#mytable").DataTable();
});       
  