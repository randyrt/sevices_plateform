<!DOCTYPE html>
<html lang="en">

  <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="{{asset('style/index.css')}}">
   <title>layout</title>

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

    <!--SECTION 1-->
    <section class="section-un">
      <div class="container-fluid ">
        <div class="row align-items-center justify-content-center commandes">
          <div class="col-lg-6">
            <img class="img-fluid" src="./Images/container.png" alt="">
          </div>
          <div class="ml-auto col-lg-6 align-items-center">
            <h1>Commander vos articles </h1>
            <h1>en provenance de Chine</h1>
            <h1>en toute simplicité.</h1>
            <div class="little-section">
              <p>
                Bienvenue chez <strong>Colinaka</strong>, votre partenaire de
                confiance pour</p> des services de transit de
              classe
              mondiale de la Chine à Madagascar.
              </p>
              <p>Notre mission est de <strong>simplifier vos expéditions en offrant des solutions</strong>,</p>
              <p>
                de design de transit efficaces et novatrices, adaptées à vos besoins
                spécifiques.
              </p>

              </p>
              <div class="">
                <button class="my-3 btn btn-danger">
                  <i class="ml-2 bi bi-cash-coin"></i>
                  Demander un devis
                </button>
                <button class="btn btn-primary">
                  <i class="ml-2 bi bi-bag-dash"></i>
                  Commander un article
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--SECTION 2-->
    <section class="mt-3 mb-10 section-deux">
      <div class="p-3 container-fluid">
        <div class="mt-3 row align-items-center">
          <div class="mt-3 col-md-3">
            <div class="px-3">
              <img class="img-fluid" src="./images/art.png" alt="">
            </div>
          </div>
          <div class="col-md-8">
            <h2 class="text-white fw-bold">
              Commandez vos articles en provenance de Chine en toute simplicité et boostez le rendement de votre
              commerce en
              travaillant avec des professionnels.
            </h2>
            <p class="text-light sectionDeuxPara">
              Bienvenue chez Colinaka, votre partenaire de confiance pour des services de transit de classe mondiale de
              la
              Chine à Madagascar. Notre mission est de simplifier vos expéditions, en offrant des solutions de design de
              transit efficaces et novatrices, adaptées à vos besoins spécifiques.
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="section-trois">
      <div class="container">
        <div class="row justify-content-center">
          <div class="mx-auto text-center col-lg-6 col-md-8 col-sm-12">
            <h5 class="text-uppercase text-primary">Soyez le premier à profiter de notre service</h5>
            <h2 class="my-3">Restez connecté pour notre lancement.</h2>
            <p class="mb-4">Inscrivez-vous dès maintenant pour ne pas manquer le lancement de nos services.</p>

            <form class="d-flex justify-content-center">
              <input type="email" class="form-control me-2 email-input" placeholder="Entrez votre adresse email"
                required>
              <button type="submit" class="btn">Envoyer</button>
            </form>
            <p class="mt-3 text-small">Vous pouvez vous désinscrire sur cette <a href="#">page</a></p>
          </div>
        </div>
      </div>
    </section>


    <section class="section-quatre">
      <div class="text-white container-fluid bg-primary">
        <div class="row align-items-center">
          <div class="p-0 col-md-6 order-md-2 d-flex justify-content-center align-items-center">
            <img class="img-fluid" src="./images/port.png" alt="Image descriptive">
          </div>
          <div class="ml-2 p-lg-5 col-md-6 d-flex flex-column justify-content-between align-items-start text-start">
            <h1 class="display-8 grandTitre">Confiez l'achat de vos produits à des
              <span class="text-warning">professionnels.</span>
            </h1>
            <p class="text-astuces lead">Bienvenue chez Colinaka, votre partenaire de confiance pour des services de
              transit de
              classe mondiale de la Chine à Madagascar. Notre mission est de simplifier vos expéditions, en offrant
              des solutions
              de design de transit efficaces et novatrices, adaptées à vos besoins spécifiques.</p>
            <button class="btn">
              commander maintenant
            </button>
          </div>
        </div>
      </div>
    </section>

    <section class="py-3 bg-dark section-cinq d-flex">
      <div class="container p-3 bg-white shadow">
        <div class="row">
          <div class="text-center col-12">
            <h2>Bénéficiez d'un support de qualité</h2>
            <p class="text-secondary text-decoration-none">Notre support vous accompagne 24h/24</p>
          </div>
        </div>
        <div class="row-all row">
          <div class="col-md-4">
            <div class="card">
              <div class="text-center card-body">
                <i class="bi bi-headset display-4"></i>
                <h5 class="card-title">Support complet</h5>
                <p class="text-gray-200 card-text">Notre support complet assure une assistance de qualité à chaque
                  étape de votre
                  expédition. Avec une équipe dévouée prête à répondre à toutes vos questions et à résoudre vos
                  problèmes,
                  vous pouvez avoir l'esprit tranquille.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <div class="text-center card-body">
                <i class="bi bi-bar-chart-line display-4"></i>
                <h5 class="card-title">Analyse</h5>
                <p class="text-gray-200 card-text">Notre analyse approfondie vous offre des informations précieuses
                  pour optimiser
                  vos
                  expéditions. Grâce à notre expertise et à nos outils avancés, vous pouvez prendre des décisions
                  éclairées
                  qui améliorent l'efficacité de votre logistique.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <div class="text-center card-body">
                <i class="bi bi-speedometer2 display-4"></i>
                <h5 class="card-title">Dashboard</h5>
                <p class="text-gray-200 card-text">Notre dashboard intuitif vous donne une vue d'ensemble claire de
                  toutes vos
                  expéditions. Suivez facilement le statut de vos envois, accédez à des rapports détaillés et prenez
                  des
                  décisions éclairées, le tout depuis une seule plateforme conviviale.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="mt-4 row">
          <div class="col-md-4">
            <div class="card">
              <div class="text-center card-body">
                <i class="bi bi-filter-square display-4"></i>
                <h5 class="card-title">Suivi</h5>
                <p class="text-gray-200 card-text">Notre système de suivi en temps réel vous permet de garder un
                  oeil
                  sur vos envois
                  à
                  tout moment. Recevez des mises à jour instantanées sur l'emplacement et le statut de cargaisons,
                  assurant
                  ainsi une livraison sûre et ponctuelle.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <div class="text-center card-body">
                <i class="bi bi-wallet-fill display-4"></i>
                <h5 class="card-title">Assistance rapide</h5>
                <p class="text-gray-200 card-text">Notre analyse approfondie vous offre des informations précieuses
                  pour optimiser
                  vos
                  expéditions. Grâce à notre expertise et à nos outils avancés, vous pouvez prendre des décisions
                  éclairées
                  qui améliorent l'efficacité de votre logistique.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <div class="text-center card-body">
                <i class="bi bi-graph-down display-4"></i>
                <h5 class="card-title">Suivi en temps réel</h5>
                <p class="text-gray-200 card-text">Notre dashboard intuitif vous donne une vue d'ensemble claire de
                  toutes vos
                  expéditions. Suivez facilement le statut de vos envois, accédez à des rapports détaillés et prenez
                  des
                  décisions éclairées, le tout depuis une seule plateforme conviviale.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--FOOTER-->
    <footer>
      <div class="container mb-6">
        <div class="row">
          <div class="col-12">
            <div class="text-left">
              <p class="h1 help">Besoin d'aide ? Contactez-nous pour une assistance rapide.</p>
              <hr>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="mt-3 me-2">
          <div class="row">
            <div class="py-5 mt-5 me-2 col-5">
              <h5 class="py-3 fw-bolder">À propos de Colinaka</h5>
              <p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam dictum aliquet accumsan
                porta lectus
                ridiculus in mattis. Netus sodales in volutpat ullamcorper amet adipiscing fermentum.</p>
              <ul class="py-5 mt-5 list-inline">
                <li class="list-inline-item"><a href="#"><i class="bi bi-twitter text-dark last-li"></i></a></li>
                <li class="list-inline-item"><a href="#"><i class="bi bi-facebook text-dark last-li"></i></a></li>
                <li class="list-inline-item"><a href="#"><i class="bi bi-instagram text-dark last-li"></i></a></li>
                <li class="list-inline-item"><a href="#"><i class="bi bi-github text-dark last-li"></i></a></li>
              </ul>
            </div>
            <div class="py-5 mt-5 col-2">
              <h5>Company</h5>
              <ul class="list-unstyled">
                <li><a href="#" class="text-secondary text-decoration-none">About</a></li>
                <li><a href="#" class="text-secondary text-decoration-none">Features</a></li>
                <li><a href="#" class="text-secondary text-decoration-none">work</a></li>
                <li><a href="#" class="text-secondary text-decoration-none">Career</a></li>
              </ul>
            </div>
            <div class="py-5 mt-5 col-2">
              <h5>Help</h5>
              <ul class="list-unstyled">
                <li><a href="#" class="text-secondary text-decoration-none">Customer Support</a></li>
                <li><a href="#" class="text-secondary text-decoration-none">Delivery Details</a></li>
                <li><a href="#" class="text-secondary text-decoration-none">Terms & Conditions</a></li>
                <li><a href="#" class="text-secondary text-decoration-none">Privacy Policy</a></li>
              </ul>
            </div>
            <div class="py-5 mt-5 col-2">
              <h5>Resources</h5>
              <ul class="list-unstyled">
                <li><a href="#" class="text-secondary text-decoration-none">Feedbacks</a></li>
                <li><a href="#" class="text-secondary text-decoration-none">Development Tutorial</a></li>
                <li><a href="#" class="text-secondary text-decoration-none">How to-Blog</a></li>
                <li><a href="#" class="text-secondary text-decoration-none">Youtube playlist</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>  
  </body>

</html>