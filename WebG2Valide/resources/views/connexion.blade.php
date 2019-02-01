@extends('layout')
@section('content')
<title>BDE - Connexion</title>
</head>
 
    <body>
        <div class="containt">
            <div class="container">
                <div class="wrap">
                    <div class="toCenter">
                        <div class="pad shadow selected">
                            <form action="/connexion" id="contact-form" method="post" class="wide center" data-ajax-form="true">
                            <h3 id="ResponseContact-popUp" class="text-cesiBlue heavy-bottom">Connexion</h3>
                            <div class="label ">
                            <!-- Nécessaire pour combler les failles de sécurité -->
                                {{ csrf_field() }}
                            
                                <label class="text-cesiBlue" for="User_mail">Adresse Email</label>
                            </div>
                            <p><input type="email" name="User_mail" placeholder="Email" value="{{ old('User_mail') }}"></p>
                            <!-- Si l'erreur provient du mail alors le spécifie -->
                            @if($errors->has('User_mail'))
                            <p>{{ $errors->first('User_mail') }}</p>
                            @endif
                            
                            <div class="label">
                                <label class="text-cesiBlue" for="password">Mot De Passe</label>
                            </div>
                            <p><input type="password" name="password" placeholder="Mot de Passe"></p>
                            <!-- Si l'erreur provient du mot de passe alors le spécifie -->
                            @if($errors->has('password'))
                                <p>{{ $errors->first('password') }}</p>
                            @endif
                            <p><input class="button cesiBlue round btn margin-top-2 cropBottom" type="submit" value="Se connecter"></p>
                            <p>
                                <p>Vous ne possédez pas de compte ?</p>
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