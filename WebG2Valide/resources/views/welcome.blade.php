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
          @if(!Auth::Id())
          <a href="http://127.0.0.1:8000/inscription"><img src="images/icones/inscription.png" alt="inscription" class="icone"></a>
          <a href="http://127.0.0.1:8000/connexion"><img src="images/icones/connexion.png" alt="connexion" class="icone"></a>
          @endif
          <a href="http://127.0.0.1:8000/cart"><img src="images/icones/panier.png" alt="Panier" class="icone"></a>
          <a href="http://127.0.0.1:8000/mon-compte"><img src="images/icones/default_user_image.png" alt="mon compte" class="icone"></a>
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
 
  </body>
</html>
@endsection