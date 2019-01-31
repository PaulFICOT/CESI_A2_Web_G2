<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="css/site.css" rel="stylesheet">
    <script href="public/js/script.js" type="text/javascript"></script>
    <script href="public/js/jquery.js" type="text/javascript"></script>
    @include('flash::message')
    @yield('content')
    <title>BDE - Mentions légales</title>
    @section('content')
  </head>
  <body>
    <div class="containt">
      <div class="container">
        <div class="wrap">
          <div class=" grid center">

            <h2 class="text-cesiBlue heavy-bottom">MENTIONS LEGALES</h2>

            <h4 class="text-cesiBlue">Edition du site</h4>
            <p class="small">Ce site a été réalisé par des élèves du CESI école d’ingénieurs dans le cadre d’un projet scolaire de deuxième année.</p>
            <p class="small">Paul FICOT, Axel SAUVAGE, Antoine DESRAMAUT et Nathan LAMBEC</p>
            <p class="small">CESI école d’ingénieurs Campus Arras 62000 Arras</p>
            
            <h4 class="text-cesiBlue">Hébergement du site</h4>
            <p class="small">Site hébergé par Hébergeur</p>
            <p class="small">Adresse postale : Hébergeur Internet SARL 7, Place de la rue BP 12345 67890</p>
            <p class="small">Ville Cedex</p>
            <p class="small">Tel : 0123 456 789 (appel non surtaxé)</p>
            <p class="small">Mail : <a class="link" href="mailto:paul.ficot@viacesi.fr" target="_blank">paul.ficot@viacesi.fr</a></p>
            <p class="small">Site : <a class="link" href="http:/127.0.0.1" target="_blank">BDE CESI</a></p>

            <h4 class="text-cesiBlue heavy-top">DROITS D’AUTEURS</h4>
            <p class="small">L'ensemble de ce site relève de la législation française et internationale sur le droit d'auteur et la propriété intellectuelle.
              Tous les droits de reproduction sont réservés, y compris pour les documents téléchargeables et les représentations iconographiques et photographiques.</p>

              <h4 class="text-cesiBlue heavy-top">MODIFICATION DU SITE</h4>
              <p class="small heavy-bottom">L’équipe éditoriale met en œuvre tous les moyens dont elle dispose, pour assurer une information fiable et une mise à jour fiable de ses sites internet.
              Toutefois, des erreurs ou omissions peuvent survenir. L’internaute devra donc s’assurer de l’exactitude des informations auprès de, et signaler toutes modifications du site qu’il jugerait utile.</p>
              <p class="small">L’équipe éditoriale se réserve le droit de modifier ou de corriger le contenu de ce site et de ces mentions légales à tout moment et ceci sans préavis.</p>

              <h4 class="text-cesiBlue heavy-top">FONCTIONNEMENT</h4>
              <p class="small">En cas de disfonctionnement d’une partie du site, veuillez nous notifier à l’adresse suivante : <a class="link" href="#" target="_blank">paul.ficot@viacesi.fr</a></p>

              <h4 class="text-cesiBlue heavy-top">DONNÉES PERSONNELLES</h4>
              <p class="small heavy-bottom">De manière générale, vous n’êtes pas tenu de nous communiquer vos données personnelles lorsque vous visitez notre site Internet.</p>
              <p class="small">Cependant, ce principe comporte certaines exceptions.
              En effet, pour certains services proposés par notre site, vous pouvez être amenés à nous communiquer certaines données telles que : votre nom, votre nom, votre adresse électronique, ainsi que votre statuts.
              Tel est le cas lorsque vous remplissez le formulaire qui vous est proposé en ligne, dans la rubrique</p><p class="small heavy-bottom text-cesiBlue bold"><a href="http://127.0.0.1:8000/connexion">Connexion</a></p>
              <p class="small heavy-bottom">Dans tous les cas, vous pouvez refuser de fournir vos données personnelles. Dans ce cas, vous ne pourrez pas utiliser les services du site, notamment celui de solliciter des renseignements précis sur notre site.</p>
              <p class="small heavy-bottom">De telles informations sont utilisées exclusivement à des fins de statistiques internes, de manière à améliorer la qualité des services qui vous sont proposés. Les bases de données sont protégées par les dispositions de la loi du 1er juillet 1998 transposant la directive 96/9 du 11 mars 1996 relative à la protection juridique des bases de données.</p>

            </div>
          </div>
        </div>
      </div>
    </body>
</html>
