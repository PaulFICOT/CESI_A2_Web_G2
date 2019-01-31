@extends('layout')

@section('content')
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="css/site.css" rel="stylesheet">
    <script href="public/js/script.js"></script>
    <script href="public/js/jquery.js" ></script>
    <script href="public/js/ajaxevents.js" ></script>
    <title>BDE - Évènements</title>
  </head>

  <body>
    <nav class="cesiBlue top panel">
      <div class="sections desktop">
        <div class="left">
            <a href="main.html"><img src="ressources/images/logos/logo_cesi_noir.png" alt="logo" class="logo toLeft"></a>
        </div>
        <div class="center">
          <ul class="menu uppercase">
            <li><a href="retro.html"><p.small>Rétrospective</p.small></a></li>
            <li><a href="boite_idees.html"><p.small>Boîte à idées</p.small></a></li>
            <li><a href="boutique.html"><p.small>La Boutique</p.small></a></li>
          </ul>
        </div>
        <div class="right">
            <a href="login.html"><img src="ressources/images/icones/power.png" alt="connexion" class="icone"></a>
            <a><img src="ressources/images/icones/panier.png" alt="Panier" class="icone"></a>
            <a><img src="ressources/images/icones/parametres.png" alt="Paramètres" class="icone"></a>
        </div>
      </div>
    </nav>

    <div class="containt">
      <div class="container">
        <div class="wrap">
          <h2 class="toCenter text-cesiBlue heavy-bottom">La Rétrospective des évènements du BDE</h2>
          <div class="toCenter">

          </div>
        </div>
      </div>
  </div>
  <footer class="cesiBlue center">
     <div class="grid">
       <div class="col-4-12 toCenter"><a href="mentions.html" target="_blank"><p class="tiny">Mentions Légales</p></a></div>
       <div class="col-4-12 toCenter"><a><p class="tiny">Contactez-nous</p></a></div>
       <div class="col-4-12 toCenter"><a href="conditions_ventes.html" target="_blank"><p class="tiny">Conditions générales de vente</p></a></div>
     </div>
  </footer>
</body>
</html>
            @endsection
