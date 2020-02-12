require('./bootstrap');
var $ = require('jquery');
$(document).ready (function(){
  $('.slideLeft').click(function() { //al click cul più nela domanda del riquadro di sinistra
    $('.rispostaLeft').slideToggle(); //compare/scompare la risposta
    $('.piùLeft').toggleClass('hidden'); //compare/scompare il simbolo +
    $('.menoLeft').toggleClass('visible'); //compare/scompare il simbolo -
  });
  $('.slideRight').click(function() { //stessa cosa di prima soltanto che funziona per il contenitore di destra
    $('.rispostaRight').slideToggle();
    $('.piùRight').toggleClass('hidden');
    $('.menoRight').toggleClass('visible');
  });
});
