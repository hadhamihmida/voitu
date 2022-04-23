@extends('layouts.master')


@section('content')

<style>
    .container {
      max-width: 450px;
    }
    .push-top {
      margin-top: 50px;
    }
</style>
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Modifier Trajet</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('trajet.index') }}"> Retour</a>
            </div>
        </div>
    </div>

<div class="card push-top">
  

  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('trajet.update', $trajets->id) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="nom">Ville_départ</label>
              <input type="text" class="form-control"  name="ville_depart" value="{{ $trajets->ville_depart }}"/>
            
          </div>
        
          <div class="form-group">
              <label for="nombre">Ville_d'arriver</label>
              <input type="text" class="form-control" name="ville_arriver" value="{{ $trajets->ville_arriver }}"/>
          </div>

          <div class="form-group">
              <label for="time">Heure_départ</label>
              <input type="time" class="form-control" name="heure_depart" value="{{ $trajets->heure_depart }}"/>
          </div>

          <div class="form-group">
              <label for="time">Heure_d'arriver</label>
              <input type="time" class="form-control" name="heure_arriver" value="{{ $trajets->heure_arriver}}"/>
          </div>

          


    </div>

          <button type="submit" class="btn btn-block btn-danger">mettre à jour</button>
      </form>
  </div>
</div>
@endsection

     
  
