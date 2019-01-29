@extends('layout')

@section('content')
    <form action="/inscription" method="post">
        {{  csrf_field() }}

    <p><input type="email" name="email" placeholder="Email" value="{{ old('email') }}"></p>
    
    @if($errors->has('email'))
        <p>{{ $errors->first('email') }}</p>
    @endif
    <p><input type="text" name="FirstName" placeholder="Prénom" value="{{ old('FirstName') }}"></p>
    @if($errors->has('FirstName'))
        <p>{{ $errors->first('FirstName') }}</p>
    @endif
    <p><input type="text" name="LastName" placeholder="Nom de famille" value="{{ old('LastName') }}"></p>
    @if($errors->has('LastName'))
        <p>{{ $errors->first('LastName') }}</p>
    @endif
    <p><input type="password" name="password" placeholder="Mot de Passe"></p>  
    @if($errors->has('password'))
        <p>{{ $errors->first('password') }}</p>
    @endif
    <p><input type="password" name="password_confirmation" placeholder="Confirmation"></p>   
    @if($errors->has('password_confirmation'))
        <p>{{ $errors->first('password_confirmation') }}</p>
    @endif
    <p><input type="submit" value="M'inscrire"></p>   

    </form>
@endsection