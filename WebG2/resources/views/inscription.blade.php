@extends('layout')

@section('contenu')
    <form action="/inscription" method="post">
        {{  csrf_field() }}

    <input type="email" name="email" placeholder="Email">   
    <input type="text" name="FirstName" placeholder="Prénom">   
    <input type="text" name="LastName" placeholder="Nom de famille">   
    <input type="password" name="password" placeholder="Mot de Passe">   
    <input type="password" name="password_confirmation" placeholder="Confirmation">   
    <input type="text" name="Centre" placeholder="Centre">
    <input type="submit" value="M'inscrire">   

    </form>
@endsection