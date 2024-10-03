@extends('base');


@section('content')
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

    <section class="p-3 section-trois" id="message-alert">
      <div class="container" id="#error-message">
        <div class="row justify-content-center">
          <div class="mx-auto text-center col-lg-6 col-md-8 col-sm-12">
            <h5 class="text-uppercase text-primary">Soyez le premier à profiter de notre service</h5>
            <h2 class="my-3">Restez connecté pour notre lancement.</h2>
            <p class="mb-4">Inscrivez-vous dès maintenant pour ne pas manquer le lancement de nos services.</p>

            <form action="{{ route('home') }}" class="d-flex justify-content-center" method="POST">
              @csrf
              @method('POST')

              <div class="input-group">
                <input type="email" class="form-control me-2 email-input @error('email') is-invalid @enderror" name="email"
                placeholder="Entrez votre adresse email" required>
                <button type="submit" class="btn">Envoyer</button>
              </div>
            </form>

            <!-- Affichage du message d'erreur lié à l'email -->
            @error('email')
              <div class="w-100">
                <small class="mb-3 text-danger text-start d-block">{{ $message }}</small>
              </div>
            @enderror

            <!-- Affichage du message de succès -->
            @if(session('success'))
              <div class="mt-3 alert alert-success">
                {{ session('success') }}
              </div>
            @endif

            <p class="mb-3 text-small">Vous pouvez vous désinscrire sur cette <a href="#">page</a></p>
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
@endsection
