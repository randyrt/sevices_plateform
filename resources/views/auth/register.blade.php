@extends('auth.base.index')

@section('inscription')

@section('content')
<div class="container mt-5 bg-info">
    <h1 class="text-center text-uppercase display-5">Inscription</h1>
    <div class="row justify-content-center">
      <div class="col-md-6">
        <form action="{{ route('register') }}" method="POST">
          @csrf

          <x-input label="Nom" id="nom" type="text" name="name"/>
          <x-input label="E-mail"  id="email" type="email" name="email"/>
          <x-input label="Mot de passe" id="passwordInput1" type="password" name="password"/>
          <x-input label="Confirmer le mot de passe" id="passwordInput2" type="password" name="password_confirmation"/>
          <x-checkbox  name="remember" class="form-checkbox" label="montrer/Cacher mot de passe" />
          <button type="submit" class="w-20 btn btn-primary">S'inscrire</button>
          <p class="mt-3">Déjà un compte, <a href="{{ route('login') }}" class="text-primary">Se connecter</a> </p>
        </form>
      </div>
    </div>
  </div>
@endsection

 