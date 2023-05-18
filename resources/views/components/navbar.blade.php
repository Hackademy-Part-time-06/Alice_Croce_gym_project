<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link  @if (Route::currentRouteName()== 'homepage') active @endif" aria-current="page"  href="{{ route('homepage') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  @if (Route::currentRouteName()== 'contatti') active @endif" href="{{ route('contatti') }}">Contatti</a>
          </li>
          <li class="nav-item">
            <a class="nav-link @if (Route::currentRouteName()== 'corsi-disponibili') active @endif" href="{{ route('corsi-disponibili') }}">Corsi</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
