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
    @extends('nav')
    <div class="containt">
      <div class="container">
        <div class="wrap">

            <div class="toCenter">
              <h2 class="text-cesiBlue">Actualités</h2>
              <div id="slider" class="toCenter">
                <figure>
                  <a><img src="images/evenements/event1.jpg" alt="évènement 1"></a>
                  <a><img src="images/evenements/event2.jpg" alt="évènement 2"></a>
                  <a><img src="images/evenements/event3.jpg" alt="évènement 3"></a>
                  <a><img src="images/evenements/event4.jpg" alt="évènement 4"></a>
                </figure>
              </div>
            </div>

            <div class="grid toCenter">
              <h2 class="text-cesiBlue heavy">Les Evènements à venir</h2>
              <div class="col-6-12 toLeft">
                <div class="pad shadow heavy-bottom">
                  <a><p class="text-cesiBlue">Titre Evènement</p></a>
                  <img src="images/evenements/event1.jpg" class="retro" alt="Image évènement">
                  <p class="small">Date</p>
                  <p class="small">Lieu</p>
                  <p class="tiny">Description de l'évènement</p>
                  </div>
                  <div class="pad shadow heavy-bottom">
                    <a><p class="text-cesiBlue">Titre Evènement</p></a>
                    <img src="images/evenements/event1.jpg" class="retro" alt="Image évènement">
                    <p class="small">Date</p>
                    <p class="small">Lieu</p>
                    <p class="tiny">Description de l'évènement</p>
                    </div>
                  <div class="pad shadow heavy-bottom">
                    <a><p class="text-cesiBlue">Titre Evènement</p></a>
                    <img src="images/evenements/event1.jpg" class="retro" alt="Image évènement">
                    <p class="small">Date</p>
                    <p class="small">Lieu</p>
                    <p class="tiny">Description de l'évènement</p>
                  </div>
                  <div class="pad shadow heavy-bottom">
                    <a><p class="text-cesiBlue">Titre Evènement</p></a>
                    <img src="images/evenements/event1.jpg" class="retro" alt="Image évènement">
                    <p class="small">Date</p>
                    <p class="small">Lieu</p>
                    <p class="tiny">Description de l'évènement</p>
                  </div>
                  <div class="pad shadow heavy-bottom">
                    <a><p class="text-cesiBlue">Titre Evènement</p></a>
                    <img src="images/evenements/event1.jpg" class="retro" alt="Image évènement">
                    <p class="small">Date</p>
                    <p class="small">Lieu</p>
                    <p class="tiny">Description de l'évènement</p>
                  </div>
              </div>
              <div class="col-6-12 toRight">
                <div class="pad shadow heavy-bottom">
                  <a><p class="text-cesiBlue">Titre Evènement</p></a>
                  <img src="images/evenements/event1.jpg" class="retro" alt="Image évènement">
                  <p class="small">Date</p>
                  <p class="small">Lieu</p>
                  <p class="tiny">Description de l'évènement</p>
                </div>
                <div class="pad shadow heavy-bottom">
                  <a><p class="text-cesiBlue">Titre Evènement</p></a>
                  <img src="images/evenements/event1.jpg" class="retro" alt="Image évènement">
                  <p class="small">Date</p>
                  <p class="small">Lieu</p>
                  <p class="tiny">Description de l'évènement</p>
                </div>
                <div class="pad shadow heavy-bottom">
                  <a><p class="text-cesiBlue">Titre Evènement</p></a>
                  <img src="images/evenements/event1.jpg" class="retro" alt="Image évènement">
                  <p class="small">Date</p>
                  <p class="small">Lieu</p>
                  <p class="tiny">Description de l'évènement</p>
                </div>
                <div class="pad shadow heavy-bottom">
                  <a><p class="text-cesiBlue">Titre Evènement</p></a>
                  <img src="images/evenements/event1.jpg" class="retro" alt="Image évènement">
                  <p class="small">Date</p>
                  <p class="small">Lieu</p>
                  <p class="tiny">Description de l'évènement</p>
                </div>
                <div class="pad shadow heavy-bottom">
                  <a><p class="text-cesiBlue">Titre Evènement</p></a>
                  <img src="images/evenements/event1.jpg" class="retro" alt="Image évènement">
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