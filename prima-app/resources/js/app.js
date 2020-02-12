require('./bootstrap');
var $ = require('jquery');
$(document).ready (function(){
  $('.slideLeft').click(function() { //al click cul più nela domanda del riquadro di sinistra
    var scopri = $(this).find('.scopri').text(); //creo una var che mi prende il testo dello span cliccato
    if (scopri == '+') { //se al click nel testo c'è il +
      $(this).find('.scopri').text('-'); //va ad inserire il -
    } else {
      $(this).find('.scopri').text('+'); //altrimenti va ad inserire il +
    }
    $(this).parents('.domandaRispContainer').toggleClass('active'); //risalgo al div contenitore del div cliccato e vado ad inserire/togliere la classe active
    // $('.rispostaLeft').slideToggle(); //compare/scompare la risposta
    // $('.piùLeft').toggleClass('hidden'); //compare/scompare il simbolo +
    // $('.menoLeft').toggleClass('visible'); //compare/scompare il simbolo -
  });
  $('.slideRight').click(function() { //stessa cosa di prima soltanto che funziona per il contenitore di destra
    $('.rispostaRight').slideToggle();
    $('.piùRight').toggleClass('hidden');
    $('.menoRight').toggleClass('visible');
  });
  $('.hamburgerIcon').click(function() { //cliccando sull'icona dell'hamburger faccio apparire il menu
    $('.hamburgerMenu').addClass('active2');
  });
  $('.close').click(function() { //cliccando sull'icona della 'x' faccio scomparire il menu
    $('.hamburgerMenu').removeClass('active2');
  });
});
