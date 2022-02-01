<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movie App</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

    <livewire:styles />
</head>
<body class="font-sans bg-dark t">
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <div class="container">
    <a class="navbar-brand text-light" href="{{route('movies.index')}}">
        <i class="fas fa-film p-2"></i>Movie App
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-2 ">
        <li class="nav-item active ms-2">
          <a class="nav-link text-light" href="{{route('movies.index')}}">Movies <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item mx-4">
          <a class="nav-link text-light" href="{{route('tv.index')}}">TV shows</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-light " href="{{route('actors.index')}}">Actors</a>
          </li>


          </ul>

    </div>
   <livewire:search-dropdown>
</div><!-- container -->
  </nav>
@yield('content')
<livewire:scripts />
@yield('scripts')
</body>
</html>
