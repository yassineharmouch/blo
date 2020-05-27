@extends('layouts.app')

@section('content')

  
  <div class="container">
      <div class="row">
          <div class="col-md-12">

          <form action="{{ url('etudiants/'.$etudiant->id) }}" method="post" >
          <input type="hidden" name="_method" value="PUT">
         
            

            
         
          {{ csrf_field() }}




          
          <div class="form-group">
              <label > CNE</label>
              <input  name='cne ' class="form-control" value="{{ $etudiant->cne }}" >
              </div>


              <div class="form-group">
              <label for="">Nom Et Prenom </label>
              <input type="text"  name='nom_et_prenom' class="form-control" value="{{ $etudiant->nom_et_prenom }}">
              </div>

            




                <div class="form-group">
              <input type="submit"  class="form-control btn btn-danger " value="Modifier">
              </div>
          </form>
          </div>
      </div>
    </div>


@endsection