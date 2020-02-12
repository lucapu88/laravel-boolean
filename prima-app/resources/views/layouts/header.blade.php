<header>
  <div class="container">
    <div class="logo">
      <img src="https://www.boolean.careers/images/common/logo.png" alt="">
    </div>
    <nav>
      <a class="nav {{Route::currentRouteName() === 'home' ? 'active' : ''}}" href="{{route('home')}}">Home</a>
      <a class="nav" href="#">Corso</a>
      <a class="nav" href="#">Dopo il corso</a>
      <a class="nav" href="#">Lezione gratuita</a>
      <button class="button" type="button">Candidati ora</button>
    </nav>
  </div>
</header>
