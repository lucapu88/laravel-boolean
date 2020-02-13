@extends('layouts.main')
@section('title', 'FAQ - Boolean Careers')
@section('content')
  <div class="faqContainer">
    <div class="domandeFrequenti">
      <h1>Domande frequenti</h1>
      <p>Le nostre risposte a tutte le tue domande. Non trovi la risposta che stai cercando? Contattaci e saremo felici di darti una mano.</p>
    </div>
    <div class="faqSquare">
      <div class="prima">
        <h2>Prima del corso</h2>
      @foreach ($faq as $faqTesto)
        <div class="domandaRispContainer">
          <div class="domandaLeft">
            {!! $faqTesto['domanda'] !!}
            <div class="slideLeft">
              <span class="scopri">+</span>
            </div>
          </div>
          <div class="rispostaLeft">
            {!! $faqTesto['risposta'] !!}
          </div>
        </div>
      @endforeach
      </div>
      <div class="dopo">
        <h2>Dopo il corso</h2>
        <div class="domandaRight">
          <h3>Ho la certezza di essere assunto?</h3>
          <div class="slideRight">
            <span class="piùRight"> + </span><span class="menoRight"> - </span>
          </div>
        </div>
        <div class="rispostaRight">
          <p>Dipende tutto da te! Come dimostrano numerosi studi di settore, lo sviluppatore web è uno dei mestieri più ricercati in Italia e Boolean fornisce tutte le competenze richieste dalle aziende per iniziare a fare questo lavoro. Oltre a fornirti conoscenze di programmazione, ti presentiamo alle nostre aziende partner che assumono in tutta Italia e ti aiutiamo a prepararti al meglio per i colloqui!</p>
        </div>
        <div class="domandaRight">
          <h3>Quanti dei vostri ex allievi hanno ricevuto offerte di lavoro?</h3>
          <div class="slideRight">
            <span class="piùRight"> + </span><span class="menoRight"> - </span>
          </div>
        </div>
        <div class="rispostaRight">
          <p>Il 100%. Tutti gli studenti che hanno terminato il corso hanno ricevuto una o più offerte di lavoro. Il nostro corso fornisce solide basi di programmazione ed essendo il mestiere del developer molto ricercato, le aziende sono sempre ben disposte ad assumere persone competenti e volenterose.</p>
        </div>
      </div>
    </div>
  </div>
@endsection
