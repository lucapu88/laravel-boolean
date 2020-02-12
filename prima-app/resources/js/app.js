require('./bootstrap');
var $ = require('jquery');
$(document).ready (function(){
  $('.piùLeft').click(function() {
    $('.rispostaLeft').slideToggle();
  });
  $('.piùRight').click(function() {
    $('.rispostaRight').slideToggle();
  });
});
