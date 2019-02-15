@extends('layout')
@section('content')
<title>BDE - Boutique</title>
  </head>
  <body>

@extends('nav')
    <div class="containt">
      <div class="container">
        <div class="wrap">
          <div class="toCenter">
            <h2 class="text-cesiBlue">La Boutique BDE</h2>
            <h4 class="text-cesiBlue heavy">Les Articles</h4>
          </div>
          <div class="grid">
            <div class="col-4-12 toLeft">
              <img src="images/produits/pull.jpg" alt="pull BDE" class="produit">
              <p class="text-cesiBlue">Le Pull BDE</p>
              <p class="price text-cesiBlue">40.00 €</p>
              <img src="images/produits/voiture.jpg" alt="cesimobil" class="heavy-top produit">
              <p class="text-cesiBlue">CESIMOBIL</p>
              <p class="price text-cesiBlue">25.00€</p>
            </div>
            <div class="col-4-12 toCenter">
              <img src="images/produits/tasse.jpg" alt="veste CESI" class="produit">
              <p class="text-cesiBlue">La Tasse CESI</p>
              <p class="price text-cesiBlue">7.50 €</p>
              <img src="images/produits/lunettes.jpg" alt="lunettes cesi" class="heavy-top produit">
              <p class="text-cesiBlue">Les Lunettes CESI</p>
              <p class="price text-cesiBlue">6.00€</p>
            </div>
            <div class="col-4-12 toRight">
              <img src="images/produits/veste.jpg" alt="veste BDE" class="produit">
              <p class="text-cesiBlue">La Veste BDE</p>
              <p class="price text-cesiBlue">50.00 €</p>
              <img src="images/produits/casquette.jpg" alt="casquette cesi" class="heavy-top produit">
              <p class="text-cesiBlue">La Casquette CESI</p>
              <p class="price text-cesiBlue">10.00€</p>
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
    <script src="public/js/ajaxboutique.js"></script>
  </body>
@endsection
²