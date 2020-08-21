@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
          <div class="panel-heading">
            Bienvenue
            @if (auth()->check())
              <strong>
                {{ auth()->user()->name }}
              </strong>
            @endif
          </div>

          <div class="panel-body">
            @if (auth()->guest())
              Pour accéder aux <a href="{{ route('page.index') }}">Activités</a>,
              vous devez 
              <a href="/register">créer</a> un nouveau compte.
              Vous serez automatiquement connecté après votre inscription.
            @else
              Maintenant, vous pouvez accèder à la 
              <a href="{{ route('page.index') }}">Page</a> menu
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
