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