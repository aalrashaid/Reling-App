<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
          <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
            <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                <use xlink:href="#bootstrap"/>
            </svg>
          </a>
    
          <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li><a href="#" class="nav-link px-2 link-dark">Home</a></li>
            <li><a href="#" class="nav-link px-2 link-dark">Movies</a></li>
            <li><a href="#" class="nav-link px-2 link-dark">TV Series</a></li>
            <li><a href="#" class="nav-link px-2 link-dark">Anime</a></li>
          </ul>
          @if (Route::has('login'))
            <div class="col-md-3 text-end">
              @auth
                <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
              @else
                <a href="{{ route('login') }}" class="text-dark" >Login</a>
                |
                @if (Route::has('register')) 
                  <a href="{{ route('register') }}"  class="text-dark">Sign-up</a>
                @endif
              @endauth
            </div>
          @endif
        </header>
      </div>
      <div class="container"> 
          <div class="row mb-2">
            <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                  <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-primary">Movies</strong>
                    <h3 class="mb-0">Apex (2021)</h3>
                    <div class="mb-1 text-muted">11/25/2021</div>
                    <p class="card-text mb-auto">
                        Ex-cop Thomas Malone is serving a life sentence for a crime he didn’t commit. He is offered a chance at freedom if he can survive a deadly game of Apex, in which six hunters pay for the pleasure of hunting another human on a remote island. He accepts, and once he arrives, all hell breaks loose.
                    </p>
                    <a href="#" class="stretched-link">Continue reading</a>
                  </div>
                  <div class="col-auto d-none d-lg-block">
                      <img src="https://www.themoviedb.org/t/p/w220_and_h330_face/chTkFGToW5bsyw3hgLAe4S5Gt3.jpg" alt="">
                  </div>
                </div>
              </div>
        
              <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                  <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-primary">Movies</strong>
                    <h3 class="mb-0">Spider-Man: Homecoming </h3>
                    <div class="mb-1 text-muted">07/07/2017</div>
                    <p class="mb-auto">Following the events of Captain America: Civil War, Peter Parker, with the help of his mentor Tony Stark, tries to balance his life as an ordinary high school student in Queens, New York City, with fighting crime as his superhero alter ego Spider-Man as a new threat, the Vulture, emerges.</p>
                    <a href="#" class="stretched-link">Continue reading</a>
                  </div>
                  <div class="col-auto d-none d-lg-block">
                      <img src="https://www.themoviedb.org/t/p/w220_and_h330_face/c24sv2weTHPsmDa7jEMN0m2P3RT.jpg" alt="">
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                  <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-success">TV Series</strong>
                    <h3 class="mb-0">Spider-Man: Homecoming </h3>
                    <div class="mb-1 text-muted">07/07/2017</div>
                    <p class="mb-auto">Following the events of Captain America: Civil War, Peter Parker, with the help of his mentor Tony Stark, tries to balance his life as an ordinary high school student in Queens, New York City, with fighting crime as his superhero alter ego Spider-Man as a new threat, the Vulture, emerges.</p>
                    <a href="#" class="stretched-link">Continue reading</a>
                  </div>
                  <div class="col-auto d-none d-lg-block">
                      <img src="https://www.themoviedb.org/t/p/w220_and_h330_face/c24sv2weTHPsmDa7jEMN0m2P3RT.jpg" alt="">
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                  <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-info">Anime</strong>
                    <h3 class="mb-0">Spider-Man: Homecoming </h3>
                    <div class="mb-1 text-muted">07/07/2017</div>
                    <p class="mb-auto">Following the events of Captain America: Civil War, Peter Parker, with the help of his mentor Tony Stark, tries to balance his life as an ordinary high school student in Queens, New York City, with fighting crime as his superhero alter ego Spider-Man as a new threat, the Vulture, emerges.</p>
                    <a href="#" class="stretched-link">Continue reading</a>
                  </div>
                  <div class="col-auto d-none d-lg-block">
                      <img src="https://www.themoviedb.org/t/p/w220_and_h330_face/c24sv2weTHPsmDa7jEMN0m2P3RT.jpg" alt="">
                  </div>
                </div>
              </div>
          </div>
      </div>
      

      <div class="container">
        <footer class="py-3 my-4">
          <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Sponsor</a></li>
          </ul>
          <p class="text-center text-muted">© 2021 Company, Inc</p>
        </footer>
      </div>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>