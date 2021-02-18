@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">

        <div class="col-xs">
              <a href="{{ route('taches.create') }}" class=" btn btn-primary m-4" role="button">Ajouter une tâche</a>
        </div>
        @if(Route::currentRoutename() == 'taches.index')
        <div class="col-xs">
              <a href="{{ route('accomplie') }}" class=" btn btn-success m-4" role="button">Voir les tâches terminés</a>
        </div>
        @elseif(Route::currentRoutename() == 'accomplie')
        <div class="col-xs">
              <a href="{{ route('taches.index') }}" class=" btn btn-dark m-4" role="button">Voir toutes les tâches</a>
        </div>
        @endif
    </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Tableau de bord') }}</div>
                 @foreach ($datas as $data)
                 <div class="alert alert-{{ $data->accomplie ? 'success' : 'primary'}}" role="alert">
                    <div class="row">
                       <div class="col-sm">
                         <strong>{{ $data->titre }} @if($data->accomplie)<span class="badge badge-success">accomplie</span>@endif</strong>
                       </div> 
                       <div class="col-sm form-inline justify-content-end">
                         @if($data->accomplie == 0)
                          <form action="{{ route('taches.faireaccomplie', $data->id) }}" method="post">
                             @csrf
                             @method('PUT')
                             <button type="submit" class="btn btn-success mx-1" style="min-width:115px;">accomplie</button>
                          </form>
                          @else
                          <form action="{{ route('taches.fairenonaccomplie',$data->id) }}" method="post">
                             @csrf
                             @method('PUT')
                             <button type="submit" class="btn btn-warning mx-1" style="min-width:115px;">non accomplie</button>
                          </form>
                          @endif
                          <a href=" {{ route('taches.edit',$data->id) }}" class="btn btn-primary mx-1" role="button">modifier</a>
                          <form action="{{ route('taches.destroy',$data->id) }}" method="post">
                             @csrf
                             @method('DELETE')
                             <button type="submit" class="btn btn-danger mx-1">supprimer</button>
                          </form>
                       </div>
                    </div>
                 </div>
                 @endforeach
                 {{ $datas->links()}}
            </div>
        </div>
    </div>
</div>

@include('layout.footer')
@endsection