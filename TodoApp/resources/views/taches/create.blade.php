@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 m-4">
  <div class="card">
    <div class="card-header">
        Création d'une nouvelle tâche
    </div>

    <div class="card-body">
        <form action="{{ route('taches.store') }}" method="post">
            @csrf
            <div class="form-group">
              <label for="titre">Titre</label>
              <input type="text" name="titre" class="form-control" id="titre" aria-describedby="name-help" required>
              <small id="name-help" class="form-text text-muted">Entrer le titre de votre tâche</small>
            </div>
            <div class="form-group">
              <label for="date">Date d'expiration</label>
              <input type="date" name="date" class="form-control" id="date" aria-describedby="date-help" required>
              <small id="date-help" class="form-text text-muted">Donner la date d'expiration de votre tâche</small>
            </div>
            <div class="form-group">
              <label for="description">Description</label>
              <input type="text" name="description" class="form-control" id="description" aria-describedby="description-help" required>
              <small id="description-help" class="form-text text-muted">Entrer la description de votre tâche</small>
            </div>
            <button class="btn btn-primary">Ajouter</button>     <a href="/taches" class="btn btn-dark" role="button">Retour</a>
        </form>
    </div>

  </div>
  </div>
</div>
 
</div>
@include('layout.footer')
@endsection