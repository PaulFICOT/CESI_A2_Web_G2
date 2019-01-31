@extends('layout')
@section('content')

<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="css/site.css" rel="stylesheet">
    <script href="public/js/script.js"></script>
    <script href="public/js/jquery.js" ></script>
    <title>BDE - Connexion</title>
  </head>

  <body>
      <div class="containt">
          <div class="container">
              <div class="wrap">
                  <div class="toCenter">
                      <div class="pad shadow selected">
                          <form action="/connexion" id="contact-form" method="post"  class="wide center" data-ajax-form="true">
                          <h3 id="ResponseContact-popUp" class="text-cesiBlue heavy-bottom">Connexion</h3>
                          <div class="label ">
                              {{  csrf_field() }}
                              
                              <label class="text-cesiBlue" for="User_mail">Adresse Email</label>
                            </div>
                            <p><input type="email" name="User_mail" placeholder="Email" value="{{ old('User_mail') }}"></p>
                            @if($errors->has('User_mail'))
                            <p>{{ $errors->first('User_mail') }}</p>
                            @endif
                          
                            <div class="label">
                                <label class="text-cesiBlue" for="password">Mot De Passe</label>
                            </div>
                            <p><input type="password" name="password" placeholder="Mot de Passe"></p>  
                            @if($errors->has('password'))
                            <p>{{ $errors->first('password') }}</p>
                            @endif
                            <p><input class="button cesiBlue round btn margin-top-2 cropBottom" type="submit" value="Se connecter"></p>
                            <p>
                                <p>Vous ne possèdez pas de compte ?</p>
                                <a class ="button cesiBlue round btn margin-top-2 cropBottom" href="http://127.0.0.1:8000/inscription">S'inscrire</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
@endsection