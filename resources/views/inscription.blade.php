@extends('layouts.app')

@section('contenu')

        <div class="jumbotron">
            <h2 class="text-center">INSCRIVEZ-VOUS GRATUITEMENT</h2>

       <form action="/inscription" method="post">
            {{ csrf_field() }}
        <div class="mb-3">
        <label class="form-label">Login</label>
            <div class="control">
        <input  class="form-control"  type="text" name="login" placeholder="Login">
            </div>
        </div>

        <div class="mb-3">
        <label class="form-label">Adresse e-mail</label>
            <div class="control">
        <input  class="form-control"  type="email" name="email" placeholder="Email">
            </div>
        </div>

         <div class="mb-3">
            <label class="form-label">Mot de passe</label>
           <div class="control">
            <input   class="form-control"  type="password" name="password" placeholder="Mot de passe">
            </div>
         </div>
          <div class="mb-3">
            <label class="form-label">Mot de passe de confirmation</label>
           <div class="control">
            <input   class="form-control"  type="password" name="password_confirmation" placeholder="Mot de passe (confirmation)">
            </div>
         </div>
          <br>
         <div class="mb-3">
            <div class="control">
        <button class="btn btn-primary" type="submit">M'inscrire</button>
            </div>
         </div>
    </form>
        </div>

    @endsection