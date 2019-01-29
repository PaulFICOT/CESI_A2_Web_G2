@extends('layout')
@section('content')

    <title>BDE - Sign In</title>
  </head>

  <body>
  <div class="containt">
      <div class="container">
        <div class="wrap">
          <div class="toCenter">
            <div class="pad shadow selected">
                <form action="/inscription" method="post" if="contact-form" class="wide center" data-ajax-form="true">
                    {{  csrf_field() }}
                    <h3 id="ResponseContact-popUp" class="text-cesiBlue heavy-bottom">Inscription</h3>
                    <div class="label cropTop"><label class="cropTop text-cesiBlue" for="email">Email </label></div>
                    <p><input class="stroke wide" type="email" name="email" placeholder="Email" value="{{ old('email') }}"></p> 
                        @if($errors->has('email'))
                            <p>{{ $errors->first('email') }}</p>
                        @endif
                            <div class="label cropTop"><label class="cropTop text-cesiBlue" for="FirstName">Prénom</label></div>
                            <p><input class="stroke wide" type="text" name="FirstName" placeholder="Prénom" value="{{ old('FirstName') }}"></p>
                        @if($errors->has('FirstName'))
                            <p>{{ $errors->first('FirstName') }}</p>
                        @endif
                            <div class="label cropTop"><label class="cropTop text-cesiBlue" for="LastName">Nom</label></div>
                            <p><input class="stroke wide" type="text" name="LastName" placeholder="Nom de famille" value="{{ old('LastName') }}"></p>
                        @if($errors->has('LastName'))
                            <p>{{ $errors->first('LastName') }}</p>
                        @endif
                            <div class="label "><label class="text-cesiBlue" for="email55">Mot de passe</label></div>
                            <p><input class="stroke wide" type="password" name="password" placeholder="Mot de Passe"></p>  
                        @if($errors->has('password'))
                            <p>{{ $errors->first('password') }}</p>
                        @endif
                            <div class="label "><label class="text-cesiBlue" for="password55">Mot de passe (Confirmation)</label></div>
                            <p><input class="stroke wide" type="password" name="password_confirmation" placeholder="Confirmation"></p>   
                        @if($errors->has('password_confirmation'))
                            <p>{{ $errors->first('password_confirmation') }}</p>
                        @endif
                            <div class="label "><label class="text-cesiBlue" for="email55">Centre</label></div>
                        <select name="Centre CESI" size="1">
                            <option value="1">Aix-en-Provence</option>
                            <option value="2">Alger</option>
                            <option value="3">Angoulème</option>
                            <option selected value="4"> Arras</option>
                            <option value="5">Bordeaux</option>
                            <option value="6">Brest</option>
                            <option value="7">Caen</option>
                            <option value="8">Châteauroux</option>
                            <option value="9">Dijon</option>
                            <option value="10">Grenoble</option>
                            <option value="11">La Rochelle</option>
                            <option value="12">Le Mans</option>
                            <option value="13">Lille</option>
                            <option value="14">Lyon</option>
                            <option value="15">Montpellier</option>
                            <option value="16">Nancy</option>
                            <option value="17">Nantes</option>
                            <option value="18">Nice</option>
                            <option value="19">Orléans</option>
                            <option value="20">Paris Nanterre</option>
                            <option value="21"> Pau</option>
                            <option value="22">Reims</option>
                            <option value="23">Rouen</option>
                            <option value="24">Saint-Nazaire</option>
                            <option value="25">Strasbourg</option>
                            <option value="26">Toulouse</option>
                        </select>
                        <div>
                        <input type="checkbox" id="CGU" name="CGU">
                        <label for="CGU">J'ai lu et j'accepte les <a class="underline" href="http://127.0.0.1:8000/cgu.html">conditions générales d'utilisation</a></label></div>
                        <a href="http://127.0.0.1:8000/mentions.html">Mentions légales</p>
                            <input class="button cesiBlue round btn margin-top-2 cropBottom" type="submit" value="M'inscrire">  

                </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
                </body>
@endsection