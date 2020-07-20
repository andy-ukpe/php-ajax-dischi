var $ = require("jquery");
var Handlebars = require("handlebars");

$(document).ready(function(){
  alert('sei nel documento');
  $.ajax(
    {
      url:'http://localhost:8888/php-ajax-dischi/dist/server.php',
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
    console.log(cdDatabase);
    var source = $("#entry-template").html();
    var template = Handlebars.compile(source);
    for (var i = 0; i < cdDatabase.length; i++) {
      var cdItem = cdDatabase[i];



      var html = template(cdItem);
      $('.cds-container').append(html);
    }
  };
