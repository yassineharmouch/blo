<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Etudiant;
use App\Http\Requests\etudiantRequest;

class EtudiantController extends Controller
{
    public function index() {
        $listeetudiant = Etudiant::all();
        return view('etud.index', ['etudiants' => $listeetudiant]);
        
  
        

    }
    public function create() {
        return view('etud.create');
    }

    public function store(etudiantRequest $request) {
        $etudiant = new Etudiant();
        $etudiant->cne = $request->input('cne');
      
        $etudiant->nom_et_prenom = $request->input('nom_et_prenom');
        
        $etudiant->save();
        session()->flash('success' , 'Bien ajouteé !!');

        return redirect('etudiants');
    }
     
    public function edit ($id) {
        $etudiant = Etudiant::find ($id);
        return view('etud.edit', [ 'etudiant' => $etudiant ]);

        
    }
    public function update(etudiantRequest $request , $id) {
        $etudiant = Etudiant::find($id);
        $etudiant->cne = $request->input('cne');
        $etudiant->nom_et_prenom = $request->input('nom_et_prenom');
       
        $note->save();
        return redirect('etudiants');
    }

    public function destroy(Request $request ,$id) {
        $etudiant = Etudiant::find($id);
        $etudiant->delete();
        return redirect ('etudiants');
       
       
    }
}
