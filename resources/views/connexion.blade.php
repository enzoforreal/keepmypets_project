@extends('layouts.app')

@section('contenu')

        <div class="jumbotron">
            <h2 class="text-center" >ESPACE PERSONNEL</h2>

          <form action="/connexion" method="post" class="section">
        {{ csrf_field() }}

        <div class="mb-3">
            <label class="form-label"> E-mail ou Login</label>
            <div class="control">
                <input class="form-control" type="email" name="email" value="{{ old('email') }}">
            </div>
            @if($errors->has('email'))
                <p class="help is-danger">{{ $errors->first('email') }}</p>
            @endif
        </div>

        <div class="mb-3">
            <label class="form-label">Mot de passe</label>
            <div class="control">
                <input class="form-control" type="password" name="password">
            </div>
            @if($errors->has('password'))
                <p class="help is-danger">{{ $errors->first('password') }}</p>
            @endif
        </div>

        <br>

        <div class="mb-3">
            <div class="control">
                <button class="btn btn-primary" type="submit">Se connecter</button>
            </div>
        </div>
    </form>
        </div>

    @endsection
