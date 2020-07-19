var $ = require("jquery");
var Handlebars = require("handlebars");

$(document).ready(function(){
  $.ajax(
    {
      url:'http://localhost:8888/php-ajax-dischi/dist/database.php',
      method: 'GET',
      success: function(data){

        printCds(data);
      },
      error: function(){
        alert('Errore, L\'Api non funziona ')
      }
    }
  )
});

  function printCds(cdDatabase){

    var source = $("#cd-template").html();
    var template = Handlebars.compile(source);

    for (var i = 0; i < cdDatabase.length; i++) {
      var cdItem = cdDatabase[i];
      console.log(cdItem);


      var html = template(cdItem);
      $('.cds-container').append(html);
    };

  };
