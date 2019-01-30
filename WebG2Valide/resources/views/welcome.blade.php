@extends('layout')
@section('content')
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="css/site.css" rel="stylesheet">
    <script href="js/script.js"></script>
    <script href="js/jquery.js"></script>
    <title>BDE - Accueil</title>
  </head>
  <body>

    <nav class="cesiBlue top panel">
      <div class="sections desktop">
        <div class="left">
          <a href="main.html"><img src="/images/logos/logo_cesi_noir.png" alt="logo" class="logo toLeft"></a>
        </div>
        <div class="center">
          <ul class="menu uppercase">
            <li><a href="retro.html"><p.small>Rétrospective</p.small></a></li>
            <li><a href="boite_idees.html"><p.small>Boîte à idées</p.small></a></li>
            <li><a href="boutique.html"><p.small>La Boutique</p.small></a></li>
          </ul>
        </div>
        <div class="right">
            <a href="login.html"><img src="images/icones/power.png" alt="connexion" class="icone"></a>
            <a><img src="images/icones/panier.png" alt="Panier" class="icone"></a>
            <a><img src="images/icones/parametres.png" alt="Paramètres" class="icone"></a>
        </div>
      </div>
    </nav>

    <div class="containt">
      <div class="container">
        <div class="wrap">

            <div class="toCenter">
              <h2 class="text-cesiBlue">Actualités</h2>
              <div id="slider" class="toCenter">
                <figure>
                  <a><img src="images/event1.jpg" alt="évènement 1"></a>
                  <a><img src="images/event2.jpg" alt="évènement 2"></a>
                  <a><img src="images/event3.jpg" alt="évènement 3"></a>
                  <a><img src="images/event4.jpg" alt="évènement 4"></a>
                </figure>
              </div>
            </div>

            <div class="grid toCenter">
              <h2 class="text-cesiBlue heavy">Les Evènements à venir</h2>
              <div class="col-6-12 toLeft">
                <div class="pad shadow heavy-bottom">
                  <a><p class="text-cesiBlue">Titre Evènement</p></a>
                  <img src="images/event1.jpg" class="retro" alt="Image évènement">
                  <p class="small">Date</p>
                  <p class="small">Lieu</p>
                  <p class="tiny">Description de l'évènement</p>
                  </div>
                  <div class="pad shadow heavy-bottom">
                    <a><p class="text-cesiBlue">Titre Evènement</p></a>
                    <img src="images/event1.jpg" class="retro" alt="Image évènement">
                    <p class="small">Date</p>
                    <p class="small">Lieu</p>
                    <p class="tiny">Description de l'évènement</p>
                    </div>
                  <div class="pad shadow heavy-bottom">
                    <a><p class="text-cesiBlue">Titre Evènement</p></a>
                    <img src="images/event1.jpg" class="retro" alt="Image évènement">
                    <p class="small">Date</p>
                    <p class="small">Lieu</p>
                    <p class="tiny">Description de l'évènement</p>
                  </div>
                  <div class="pad shadow heavy-bottom">
                    <a><p class="text-cesiBlue">Titre Evènement</p></a>
                    <img src="images/event1.jpg" class="retro" alt="Image évènement">
                    <p class="small">Date</p>
                    <p class="small">Lieu</p>
                    <p class="tiny">Description de l'évènement</p>
                  </div>
                  <div class="pad shadow heavy-bottom">
                    <a><p class="text-cesiBlue">Titre Evènement</p></a>
                    <img src="images/event1.jpg" class="retro" alt="Image évènement">
                    <p class="small">Date</p>
                    <p class="small">Lieu</p>
                    <p class="tiny">Description de l'évènement</p>
                  </div>
              </div>
              <div class="col-6-12 toRight">
                <div class="pad shadow heavy-bottom">
                  <a><p class="text-cesiBlue">Titre Evènement</p></a>
                  <img src="images/event1.jpg" class="retro" alt="Image évènement">
                  <p class="small">Date</p>
                  <p class="small">Lieu</p>
                  <p class="tiny">Description de l'évènement</p>
                </div>
                <div class="pad shadow heavy-bottom">
                  <a><p class="text-cesiBlue">Titre Evènement</p></a>
                  <img src="images/event1.jpg" class="retro" alt="Image évènement">
                  <p class="small">Date</p>
                  <p class="small">Lieu</p>
                  <p class="tiny">Description de l'évènement</p>
                </div>
                <div class="pad shadow heavy-bottom">
                  <a><p class="text-cesiBlue">Titre Evènement</p></a>
                  <img src="images/event1.jpg" class="retro" alt="Image évènement">
                  <p class="small">Date</p>
                  <p class="small">Lieu</p>
                  <p class="tiny">Description de l'évènement</p>
                </div>
                <div class="pad shadow heavy-bottom">
                  <a><p class="text-cesiBlue">Titre Evènement</p></a>
                  <img src="images/event1.jpg" class="retro" alt="Image évènement">
                  <p class="small">Date</p>
                  <p class="small">Lieu</p>
                  <p class="tiny">Description de l'évènement</p>
                </div>
                <div class="pad shadow heavy-bottom">
                  <a><p class="text-cesiBlue">Titre Evènement</p></a>
                  <img src="images/event1.jpg" class="retro" alt="Image évènement">
                  <p class="small">Date</p>
                  <p class="small">Lieu</p>
                  <p class="tiny">Description de l'évènement</p>
                </div>
              </div>
            </div>

      </div>
    </div>
  </div>
 <footer class="cesiBlue">
    <div class="grid center">
      <div class="col-4-12 toCenter"><a href="mentions.html" target="_blank"><p class="tiny">Mentions Légales</p></a></div>
      <div class="col-4-12 toCenter"><a><p class="tiny">Contactez-nous</p></a></div>
      <div class="col-4-12 toCenter"><a href="conditions_ventes.html" target="_blank"><p class="tiny">Conditions générales de vente</p></a></div>
    </div>
    </footer>
  </body>
</html>
@endsection