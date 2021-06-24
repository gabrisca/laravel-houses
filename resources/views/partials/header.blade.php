<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">CaseBelle</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
               {{-- !!!!!!! IMPORTANTE !!!!!!! class="{{ (request()->is('nome della route')) ? 'active' : '' }} nav-link" ===>> aggiunge la classe active quando ci si trova su quella pagina --}}
            <a class="{{ (request()->is('/')) ? 'active' : '' }} nav-link" aria-current="page" href="{{ route('home') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="{{ (request()->is('houses')) ? 'active' : '' }} nav-link" href="{{ route('houses') }}">Case</a>
          </li>
          <li class="nav-item">
            <a class="{{ (request()->is('contacts')) ? 'active' : '' }} nav-link"href="{{ route('contacts') }}">Contatti</a>
          </li>
        </ul>
        <span class="navbar-text">&copy;</span>
      </div>
    </div>
  </nav>
