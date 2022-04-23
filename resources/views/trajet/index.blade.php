@extends('layouts.master') 

@section('content')

<style>
  .push-top {
    margin-top: 50px;
  }
</style>
<div class="row">
        <div class="col-lg-12 margin-tb">
            
            <div class="pull-right">
                <a class="btn btn-secondary float-right btn-sm" href="{{ route('trajet.create') }}"><i class="fa fa-list"></i> ajoute  Trajet</a>
            </div>
        </div>
    </div>
   
<div class="push-top">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br/>
  @endif
  <table class="table">
    <thead>
        <tr class="table-light">
          <td>id</id>
          <td>Ville_départ</td>
          <td>Ville_d'arriver'</td>
          <td>Heure_départ</td>
          <td>Heure_d'arriver</td>
          

          <td class="text-center">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($trajets as $trajet)
        <tr>
             <td>{{$trajet->id}}</td>
            <td>{{$trajet->ville_depart}}</td>
            <td>{{$trajet->ville_arriver}}</td>
            <td> {{  $trajet->heure_depart}}</td>
            <td> {{  $trajet->heure_arriver}}</td>
            

            <td class="text-center">
                <form action="{{ route('trajet.destroy', $trajet->id)}}" method="post" style="display: inline-block">
              
                <a href="{{ route('trajet.edit', $trajet->id)}}" class="btn btn-primary btn-sm">Modifier</a>

                    @csrf
                    @method('DELETE')
                    <button class="btn btn-warning btn-sm delete" type="submit">Supprimer</button>
                  </form>
            </td>
          
        </tr>
        @endforeach
    </tbody>
  </table>
<div>

@endsection