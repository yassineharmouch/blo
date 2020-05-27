@extends('layouts.app')

@section('content')


  <div class="container">
      <div class="row">
          <div class="col-md-12">

          <form action="{{ url('etudiants') }}" method="Post" >

          {{ csrf_field() }}





          <div class="form-group  @if($errors->get('cne')) has-error @endif">
              <label for="">CNE</label>
              <input type="text" name='cne' class="form-control" value="{{ old ('cne') }}">
              @if($errors->get('cne'))
                    @foreach($errors->get('cne') as $message)
                    <li>{{ $message }}</li>
              
              
                    @endforeach
                @endif   
                </div> 
              

              <div class="form-group  @if($errors->get('nom_et_prenom')) has-error @endif" >
              <label for=""> Nom Et Prénom </label>
              <input type="text"  name='nom_et_prenom' class="form-control" value="{{ old ('nom_et_prenom') }}" >
              @if($errors->get('nom_et_prenom'))
                    @foreach($errors->get('nom_et_prenom') as $message)
                    <li>{{ $message }}</li>
              
              
                    @endforeach
                @endif    
              </div>

             

              
              
                  

              <div class="form-group">
             
              <input type="submit"  class="form-control btn btn-primary " value="Enregistrer">
              </div>
          </form>
          </div>
      </div>
  </div>



@endsection