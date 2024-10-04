<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('style/dashbord.css')}}">
    <title>@yield('title |')  </title>
 </head>

  <body>
     <nav class="navbar navbar-expand-lg bg-info">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Admin</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
       <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="mb-2 navbar-nav me-auto mb-lg-0">
             <li class="nav-item">
              <a class="nav-link {{ Route::is('admin.dashbord') ? 'active' : '' }}" href="{{ route('admin.dashbord') }}">Accueil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#">Espace admin</a>
            </li>
          </ul>
         <form class="d-flex" id="logout-form" action="{{ route('logout') }}" method="POST">
            @csrf
         </form>
         <button class="btn btn-outline-success" type="submit">
            <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
               Se deconneter
            </a>
          </button>
          
      </div>
    </nav>
      @yield('content')
  </body>


</html>