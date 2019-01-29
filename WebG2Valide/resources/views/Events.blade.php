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
    <title>BDE - Evenements</title>
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
                          
                          <label class="text-cesiBlue" for="email55">Adresse Email</label>
                        </div>
                          <p><input type="email" name="email" placeholder="Email" value="{{ old('email') }}"></p>
                            @if($errors->has('email'))
                            <p>{{ $errors->first('email') }}</p>
                            @endif
                          
                            <div class="label">
                              <label class="text-cesiBlue" for="password55">Mot De Passe</label>
                            </div>
                            <p><input type="password" name="password" placeholder="Mot de Passe"></p>  
                            @if($errors->has('password'))
                            <p>{{ $errors->first('password') }}</p>
                            @endif
                          <p><input type="submit" value="Se connecter"></p>   
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
            @endsection