@extends('layout')

@section('content')
<title>BDE - Boîte à idées</title>
  </head>
  <body>
    @extends('nav')
    <div class="containt">
      <div class="container">
        <div class="wrap">
          <div class="toCenter text-cesiBlue">
            <h2 class="heavy-bottom">Boîte à idées</h2>

          <!--Formulaire Boite à idées-->
          <div class="toCenter">
            <div class="pad shadow selected">
                <form method="post" action="/ideabox" id="contact-form" class="wide center" data-ajax-form="true">
                    <h3 id="ResponseContact-popUp" class="text-cesiBlue heavy-bottom">Proposez-nous vos évènements !</h3>
                    <div class="label cropTop">

                    @csrf

                    <label class="cropTop text-cesiBlue" for="name55">Prénom</label>
                    </div>
                    <input class="stroke wide" id="name55" type="name" name="FirstName" placeholder="Nom" required />
                    <div class="label cropTop">

                    <label class="cropTop text-cesiBlue" for="name55">Nom de Famille</label>
                    </div>
                    <input class="stroke wide" id="name55" type="name" name="Name" placeholder="Prénom" required />
                    <div class="label ">

                      <label class="text-cesiBlue" for="email55">Adresse Email</label>
                    </div>
                    <input class="stroke  wide" id="email55" type="email" name="Email" placeholder="Email" required />
                    <div class="label ">

                      <label class="text-cesiBlue" for="text55">Titre de l'évènement</label>
                    </div>
                    <input class="stroke wide" id="name55" type="text" name="Title" placeholder="Titre" required />
                    <div class="label cropTop">

                      <label class="cropTop text-cesiBlue" for="name55">Localisation</label>
                    </div>
                    <input class="stroke wide" id="name55" type="text" name="Location" placeholder="Localisation de l'évènement"/>
                    <div class="label cropTop">

                      <label class="cropTop text-cesiBlue" for="name55">Tarif</label>
                    </div>
                    <input class="stroke wide" id="name55" type="text" name="Cost" placeholder="Tarif"/>
                    <div class="label">

                      <label class="text-cesiBlue" for="text55">Description</label>
                    </div>
                    <textarea class="left" id="message55" type="text" name="Body" placeholder="Description de l'évènement" required>
                    </textarea>
                    
                    <input class="button cesiBlue round btn margin-top-2 cropBottom" type="submit" name="submit-Contact" value="Envoyer le message" data-success-text="Envoyé !" data-success-class="green" />
                </form>
            </div>
          </div>
          
          <h4 class="heavy-strong">Vous pouvez retrouver ici tous les évènements BDE proposés par les étudiants !</h4>
          </div>
          <div class="grid">
            <div class="col-6-12 toLeft">
              <div class="pad shadow heavy-bottom">
                <a><p class="small text-cesiBlue">Soirée LAN Jeux de Stratégie</p></a>
                <p class="tiny">Une soirée LAN ouvert à tous, mais cette fois-ci concentré sur des jeux de startégie comme AoE/Civilisation/...</p>
              </div>
              <div class="pad shadow heavy-bottom">
                <a><p class="small text-cesiBlue">Sortie Canoë</p></a>
                <p class="tiny">Une sortie le jeudi après-midi à la base nautique de St-Laurent pour ceux qui sont intéressés (Location de matériel requis sur place)</p>
              </div>
              <div class="pad shadow heavy-bottom">
                <a><p class="small text-cesiBlue">Evènement Random</p></a>
                <p class="tiny">Description d'un évènement random écrit par une personne random depuis un support random</p>
              </div>
            </div>
            <div class="col-6-12 toRight">
              <div class="pad shadow heavy-bottom">
                <a><p class="small text-cesiBlue">Initiation Jeux de Cartes Startégiques</p></a>
                <p class="tiny">Une après-midi, un jeudi, pour faire découvrir à tout type de personne les jeux de cartes comme Magic/Yu-Gi-Oh/Dragon Ball</p>
              </div>
              <div class="pad shadow heavy-bottom">
                <a><p class="small text-cesiBlue">Sortie BasketBall</p></a>
                <p class="tiny">Jeudi après-midi, sortie pour les intéressés pour jouer au basket en plein air. </p>
              </div>
              <div class="pad shadow heavy-bottom">
                <a><p class="small text-cesiBlue">Soirée JDR à thème</p></a>
                <p class="tiny">Soirée avec des jeux de rôle et un repas à thème (Médiéval/SF/...)</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
    <script src="js/ideabox.js"></script>
@endsection
