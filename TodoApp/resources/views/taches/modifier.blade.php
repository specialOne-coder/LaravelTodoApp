@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
  <div class="card">
    <div class="card-header">
       <h4 class="card-title"> Modification de la tâche <span class="badge badge-primary">#{{ $tachemodify->id }}</span> </h4>
    </div>

    <div class="card-body">
        <form action="{{ route('taches.update',$tachemodify->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
              <label for="titre">Titre</label>
              <input type="text" name="titre" class="form-control" id="titre" aria-describedby="name-help" value="{{ old('titre',$tachemodify->titre)}}" required>
              <small id="name-help" class="form-text text-muted">Modifier le titre de votre tâche</small>
            </div>
            <div class="form-group">
              <label for="date">Date d'expiration</label>
              <input type="date" name="date" class="form-control" id="date" aria-describedby="date-help"   value="{{ old('titre',$tachemodify->expiration)}}" required>
              <small id="date-help" class="form-text text-muted">Modifier la date d'expiration de votre tâche</small>
            </div>
            <div class="form-group">
              <label for="description">Description</label>
              <input type="text" name="description" class="form-control" id="description" aria-describedby="description-help" value ="{{ old('titre',$tachemodify->description)}}" required>
              <small id="description-help" class="form-text text-muted">Modifier la description de votre tâche</small>
            </div>
            <div class="form-group form-check">
               <input type="checkbox" id="accomplie" class="form-check-input" name="acp" {{ $tachemodify->accomplie ? '' : ''}} value=1>
               <label for="accomplie">Accomplie?</label>  
            </div>

            <button class="btn btn-primary">Modifier</button> <a href="/taches" class="btn btn-dark" role="button">Retour</a>
        </form>
    </div>

  </div>
  </div>
</div>
 
</div>

@endsection