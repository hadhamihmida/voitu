@extends('layouts.master')
@section('content')
    <div class="card-body">

        <section class="col-md-11">
            <div class="card">
                <div class="card-header">
                    <h3> Identifier trajet</h3>
                </div>
             </div>

            <div class="card-body">

           
               
                <form method="post" action=" {{ route('trajet.store') }}" enctype="multipart/form-data">
                    @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                            <label for="inputville">Ville_depart</label>
                            <input type="text"  name="ville_depart"  class="form-control"  placeholder="Entrer Nom de ville-depart">
                            @error('ville_depart')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                    
                      </div>
                        <div class="form-group col-md-6">
                            <label for="inputPrenom">Ville-d'arriver</label>
                              <input type="text"  name="ville_arriver"  class="form-control"  placeholder="entrer ville d'arriver" >
                              @error('ville_arriver')
                             <small class="form-text text-danger">{{$message}}</small>
                               @enderror
                       </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="time">Heure-depart</label>
                        <input type="time" name="heure_depart"    class="form-control"  placeholder="">
                        @error('heure_depart')
                          <small class="form-text text-danger">{{$message}}</small>
                         @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="time">Heure_arriver</label>
                        <input type="time"  name="heure_arriver"       class="form-control"  placeholder="">
                        @error('heure_arriver')
                      <small class="form-text text-danger">{{$message}}</small>
                         @enderror
                    </div>
                     
                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                </form>
            </div>
        
    </div>

@endsection
