<div class="container my-3">
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <img class="logo" src="{{Vite::asset('public\images\dc-logo.png')}}" alt="">
            <ul class="navbar-nav">
              <li class="nav-item me-4">
                <a class="fw-bold nav-link active" aria-current="page" {{Route::currentRouteName()== 'home' ? 'active' : ''}} href="{{route('home')}}">Characters</a>
              </li>
              <li class="nav-item me-4">
                <a class="fw-bold nav-link" href="#">Comics</a>
              </li>
              <li class="nav-item me-4">
                <a class="fw-bold nav-link" href="#">Movies</a>
              </li>
              <li class="nav-item me-4">
                <a class="fw-bold nav-link" href="#">TV</a>
              </li>
              <li class="nav-item me-4">
                <a class="fw-bold nav-link" href="#">Games</a>
              </li>
              <li class="nav-item me-4">
                <a class="fw-bold nav-link" href="#">Video</a>
              </li>
              <li class="nav-item me-4">
                <a class="fw-bold nav-link" href="#">Fans</a>
              </li>
              <li class="nav-item me-4">
                <a class="fw-bold nav-link" href="#">News</a>
              </li>
              <li class="nav-item">
                <a class="fw-bold nav-link" href="#">Shop</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>
</div>