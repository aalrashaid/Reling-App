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
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
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
                  <a href="{{ route('register') }}"  class="text-dark">Register</a>
                @endif
              @endauth
            </div>
          @endif
        </header>
      </div>
      <div class="container"> 
          <div class="row mb-2">
              
                
               @foreach ($popularMovies as $popularMovie)
                <div class="col-md-6">
                  <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                      <strong class="d-inline-block mb-2 text-primary">Movies</strong>
                      <h3 class="mb-0">{{ $popularMovie['title'] }}</h3>
                      <div class="mb-1 text-muted">{{ \Carbon\Carbon::parse($popularMovie['release_date'] )->format('M d, Y') }}</div>
                      <div class="mb-1 text-muted">{{ $popularMovie['vote_average'] * 10 . '%'}}</div>
                      <p class="card-text mb-auto">
                         {{ $popularMovie['overview'] }}
                      </p>
                      <a href="#" class="stretched-link">Continue reading</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img src="{{ 'https://image.tmdb.org/t/p/w185/'.$popularMovie['poster_path'] }}" alt="">
                    </div>
                  </div>
              </div>
               @endforeach 
        
              
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