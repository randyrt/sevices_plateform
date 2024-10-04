@extends('auth.head.auth')

@section('connexion')

@section('content')
  <div class="container mt-5 bg-info">
    <h1 class="text-center text-uppercase display-5">connexion</h1>
    <div class="row justify-content-center">
      <div class="col-md-6">
        <form action="{{ route('login') }}" method="POST">
          @csrf
          
          <x-input label="E-mail"  id="email" type="email" name="email"/>
          <x-input label="Mot de passe" id="passwordInput1" type="password" name="password"/>
          <x-checkbox id="toggleCheckbox" label="montrer/cacher mot de passe" />
          <x-checkbox  name="remember" />
          <button type="submit" class="w-20 btn btn-primary">Se connecter</button>
          <p class="mt-3">Pas encore de compte, <a href="{{ route('register') }}" class="text-primary">S'inscrire</a> </p>
        </form>
      </div>
    </div>
  </div>
@endsection

 