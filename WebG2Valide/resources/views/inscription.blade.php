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
                    <p><input class="stroke wide" type="email" name="User_mail" placeholder="Email" value="{{ old('email') }}"></p> 
                        @if($errors->has('User_mail'))
                            <p>{{ $errors->first('User_mail') }}</p>
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
                            <div class="label "><label class="text-cesiBlue" for="password">Mot de passe</label></div>
                            <p><input class="stroke wide" type="password" name="User_password" placeholder="Mot de Passe"></p>  
                        @if($errors->has('User_password'))
                            <p>{{ $errors->first('User_password') }}</p>
                        @endif
                            <div class="label "><label class="text-cesiBlue" for="password_confirmation">Mot de passe (Confirmation)</label></div>
                            <p><input class="stroke wide" type="password" name="password_confirmation" placeholder="Confirmation"></p>   
                        @if($errors->has('password_confirmation'))
                            <p>{{ $errors->first('password_confirmation') }}</p>
                        @endif
                            <div class="label "><label class="text-cesiBlue" for="Location">Centre</label></div>
                        <select name="Location" size="1">
                            <option name="Location" value="1">Aix-en-Provence</option>
                            <option name="Location" value="2">Alger</option>
                            <option name="Location" value="3">Angoulème</option>
                            <option name="Location" selected value="4"> Arras</option>
                            <option name="Location" value="5">Bordeaux</option>
                            <option name="Location" value="6">Brest</option>
                            <option name="Location" value="7">Caen</option>
                            <option name="Location" value="8">Châteauroux</option>
                            <option name="Location" value="9">Dijon</option>
                            <option name="Location" value="10">Grenoble</option>
                            <option name="Location" value="11">La Rochelle</option>
                            <option name="Location" value="12">Le Mans</option>
                            <option name="Location" value="13">Lille</option>
                            <option name="Location" value="14">Lyon</option>
                            <option name="Location" value="15">Montpellier</option>
                            <option name="Location" value="16">Nancy</option>
                            <option name="Location" value="17">Nantes</option>
                            <option name="Location" value="18">Nice</option>
                            <option name="Location" value="19">Orléans</option>
                            <option name="Location" value="20">Paris Nanterre</option>
                            <option name="Location" value="21"> Pau</option>
                            <option name="Location" value="22">Reims</option>
                            <option name="Location" value="23">Rouen</option>
                            <option name="Location" value="24">Saint-Nazaire</option>
                            <option name="Location" value="25">Strasbourg</option>
                            <option name="Location" value="26">Toulouse</option>
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