@extends('layouts.app')

@section('content')
<div class="container">
      <div class="row">
          <div class="col-md-12">

          
          @if(session()->has('success'))
                  <div class="alert alert-success">
                 {{ session()->get('success') }}

                  </div>
                 @endif
 
          <h1> Les Etudiants </h1>
          
          <div class="pull-right">
          <a href="{{ url('etudiants/create') }}" class="btn btn-success">Ajouter un  étudiant  </a>
          </div>

            <table class="table">
             <head>
              <tr>
              <th>CNE</th>
                  <th>Nom Et Prénom</th>
                  
                  

              </tr>
            </head>
              <body>
              @foreach($etudiants as $etudiant)
              <tr>
              <td>{{ $etudiant->cne }}</td>
                  <td>{{ $etudiant->nom_et_prenom }}</td>
                  
                  <td>
                  <form action=  "{{ url('etudiants/'.$etudiant->id) }}" method="post">
                
                {{ csrf_field() }}
                {{ method_field('DELETE') }}

                         
                  <a href="" class ="btn btn-primary">Details</a>
                  <a href="{{ url('etudiants/'.$etudiant->id.'/edit') }}" class ="btn btn-default">Editer</a>
 
                  <button  type='submit' class ="btn btn-danger">Supprimer</button>
                  
                </form>
                  
                  </td>
              </tr>
                @endforeach
              </body>
          </table>
        </div>
    </div>
</div>          
@endsection