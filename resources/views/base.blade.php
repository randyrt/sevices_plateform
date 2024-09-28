<!DOCTYPE html>
<html lang="en">

  <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="{{asset('style/index.css')}}">
   <title>app</title>

  </head>

  <body>
    <!--NAVBAR-->
   <nav class="navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand" href="#">Colinaka.</a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="mb-2 ml-6 navbar-nav mb-lg-0">
            <li class="ml-3 nav-item">
              <a class="nav-link" aria-current="page" href="#">Accueil</a>
            </li>
            <li class="ml-3 nav-item">
              <a class="nav-link" aria-current="page" href="#about">Suivi</a>
            </li>
            <li class="ml-3 nav-item">
              <a class="nav-link" aria-current="page" href="#service">Commandes</a>
            </li>
            <li class="ml-3 nav-item">
              <a class="nav-link" aria-current="page" href="#project">A propos</a>
            </li>
          </ul>
          <ul class="navbar-nav ms-auto">
            <li class="nav-link information">
              <svg xmlns="http://www.w3.org/2000/svg" fill="#000" width="24" height="24" viewBox="0 0 24 24">
                <path d="M20 4H4c-1.103 0-2 .897-2 2v12c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V6c0-1.103-.897-2-2-2zm0 
                2v.511l-8 6.223-8-6.222V6h16zM4 18V9.044l7.386 5.745a.994.994 0 0 0 1.228 0L20 9.044 20.002 18H4z" />
              </svg>
              colinaka@contact.com
            </li>
            <li class="nav-link information">
              <svg xmlns="http://www.w3.org/2000/svg" fill="#OOO" width="24" height="24" viewBox="0 0 24 24">
                <path
                  d="M17.707 12.293a.999.999 0 0 0-1.414 0l-1.594 1.594c-.739-.22-2.118-.72-2.992-1.594s-1.374-2.253-1.594-2.992l1.594-1.594a.999.999 0 0 0 0-1.414l-4-4a.999.999 0 0 0-1.414 0L3.581 5.005c-.38.38-.594.902-.586 1.435.023 1.424.4 6.37 4.298 10.268s8.844 4.274 10.269 4.298h.028c.528 0 1.027-.208 1.405-.586l2.712-2.712a.999.999 0 0 0 0-1.414l-4-4.001zm-.127 6.712c-1.248-.021-5.518-.356-8.873-3.712-3.366-3.366-3.692-7.651-3.712-8.874L7 4.414 9.586 7 8.293 8.293a1 1 0 0 0-.272.912c.024.115.611 2.842 2.271 4.502s4.387 2.247 4.502 2.271a.991.991 0 0 0 .912-.271L17 14.414 19.586 17l-2.006 2.005z" />
              </svg>
              +26133457858
            </li>
          </ul>
          <button type="button" class="w-30 ms-auto btn btn-dangerous" data-bs-toggle="modal"
            data-bs-target="#exampleModal">
            <i class="bi bi-geo-alt"></i>
            Suivre un colis
          </button>
        </div>
      </div>
    </nav>
  </body>
  @yield('content')

  @extends('footer')
  </body>

</html>