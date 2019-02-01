@extends('layout')
@section('content')
<title>BDE - Boutique</title>
  </head>
  <body>

  <nav class="cesiBlue top panel">
      <div class="sections desktop">
        <div class="left">
            <a href="http://127.0.0.1:8000/"><img src="images/logos/logo_cesi_noir.png" alt="logo" class="logo toLeft"></a>
        </div>
        <div class="center">
          <ul class="menu uppercase">
          <li><a href="http://127.0.0.1:8000/evenements"><p.small>Rétrospective</p.small></a></li>
            <li><a href="http://127.0.0.1:8000/ideabox"><p.small>Boîte à idées</p.small></a></li>
            <li><a href="http://127.0.0.1:8000/boutique"><p.small>La Boutique</p.small></a></li>
          </ul>
        </div>
        <div class="right">
          <a href="http://127.0.0.1:8000/inscription"><img src="images/icones/inscription.png" alt="inscription" class="icone"></a>
          <a href="http://127.0.0.1:8000/connexion"><img src="images/icones/connexion.png" alt="connexion" class="icone"></a>
          <a href="http://127.0.0.1:8000/boutique"><img src="images/icones/panier.png" alt="Panier" class="icone"></a>
          <a href="http://127.0.0.1:8000/mon-compte"><img src="images/icones/default_user_image.png" alt="mon compte" class="icone"></a>
        </div>
      </div>
    </nav>

    <div class="containt">
      <div class="container">
        <div class="wrap">
          <div class="toCenter">
            <h2 class="text-cesiBlue">La Boutique BDE</h2>
            <h4 class="text-cesiBlue heavy">Les Articles</h4>
          </div>
          <div class="grid">
            <div class="filtre">
              <p class="small text-cesiBlue toCenter">Filtres : </p>
              <a onclick=""><p class="tiny text-cesiBlue">A - Z</p></a>
              <a onclick=""><p class="tiny text-cesiBlue">Z - A</p></a>
              <a onclick=""><p class="tiny text-cesiBlue">1 - 50€</p></a>
              <a onclick=""><p class="tiny text-cesiBlue">50 - 1€</p></a>
            </div>
            <div class="col-4-12 toLeft">
              <img src="images/produits/pull.jpg" alt="pull BDE" class="produit">
              <p class="text-cesiBlue">Pull BDE</p>
              <p class="price text-cesiBlue">40.00 €</p>
              <img src="images/produits/tasse.jpg" alt="tasse BDE" class="produit">
              <p class="text-cesiBlue">Tasse CESI</p>
              <p class="price text-cesiBlue">7.50 €</p>
            </div>
            <div class="col-4-12 toCenter">
              <img src="images/produits/veste.jpg" alt="veste BDE" class="produit">
              <p class="text-cesiBlue">Veste BDE</p>
              <p class="price text-cesiBlue">50.00 €</p>
              <img src="images/produits/casquette.jpg" alt="casquette CESI" class="produit">
              <p class="text-cesiBlue">Casquette CESI</p>
              <p class="price text-cesiBlue">15.00 €</p>
            </div>
            <div class="col-4-12 toRight">
              <img src="images/produits/voiture.jpg" alt="voiture CESI" class="produit">
              <p class="text-cesiBlue">CESIMOBIL</p>
              <p class="price text-cesiBlue">25.00 €</p>
              <img src="images/produits/lunettes.jpg" alt="lunettes CESI" class="produit">
              <p class="text-cesiBlue">Lunettes CESI</p>
              <p class="price text-cesiBlue">5.50 €</p>
            </div>
          </div>

          <div class="toCenter">
            <h4 class="text-cesiBlue heavy">Les Articles Recommandés</h4>
          </div>
          <div class="grid">
            <div class="col-4-12 toLeft">
              <img src="images/produits/pull.jpg" alt="pull BDE" class="produit">
              <p class="text-cesiBlue">Le Pull BDE</p>
              <p class="price text-cesiBlue">40.00 €</p>
            </div>
            <div class="col-4-12 toCenter">
              <img src="images/produits/tasse.jpg" alt="tasse CESI" class="produit">
              <p class="text-cesiBlue">La Tasse CESI</p>
              <p class="price text-cesiBlue">7.50 €</p>
            </div>
            <div class="col-4-12 toRight">
              <img src="images/produits/veste.jpg" alt="veste BDE" class="produit">
              <p class="text-cesiBlue">La Veste BDE</p>
              <p class="price text-cesiBlue">50.00 €</p>
            </div>
          </div>

        </div>
      </div>
    </div>
  </body>
@endsection
