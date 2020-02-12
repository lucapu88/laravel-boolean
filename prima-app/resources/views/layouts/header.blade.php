<header>
  <div class="container">
    <div class="logo">
      <img src="https://www.boolean.careers/images/common/logo.png" alt="">
    </div>
    <div class="hamburgerIcon active1">
      <h1>H</h1>
    </div>
    <div class="hamburgerMenu">
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Corso</a></li>
        <li><a href="#">Dopo il corso</a></li>
        <li><a href="#">Lezione gratuita</a></li>
        <li><a href="#">Candidati ora</a></li>
      </ul>
        <h1 class="close">X</h1>
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
