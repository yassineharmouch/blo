<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Cv;
use Auth;
use App\Http\Requests\cvRequest;
use Illuminate\Http\UploadedFile;

class Cvcontroller extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
   
    
    public function index() {
        
        if(Auth::user()->role_id===5) {
            $listecv = Cv::all();
        }else{
            $listecv = Auth::user()->cvs; 
        }
        //dd($listecv);
        return view('cv.index', ['cvs' => $listecv]);

    }
    public function create() {
        return view('cv.create');
    }

    public function store(cvRequest $request) {
        $cv = new Cv();
        $cv->titre = $request->input('titre');
     
        $cv->user_id = Auth::user()->id;

        if( $request->hasFile('photo') ) {

            $cv->photo=$request->photo->store('image');
        }
        
        $cv->save();
        session()->flash('success' , 'le cv à été bien enregistré !!');
        return redirect('cvs');
     
    }

    public function edit ($id) {
        $cv = Cv::find ($id);
        $this->authorize('update',$cv);
        return view('cv.edit', [ 'cv' => $cv ]);

     
        
    }
    public function update(cvRequest $request , $id) {
        $cv = Cv::find($id);
        $cv->titre = $request->input('titre');
        if( $request->hasFile('photo') ) {
       
            $cv->photo=$request->photo->store('image');
        }
        $cv->save();
        return redirect('cvs');
   
    }

    public function destroy(Request $request ,$id) {
        $cv = Cv::find($id);
        $cv->delete();
        $this->authorize('delete',$cv);
        return redirect ('cvs');
        
    }
    public function show($id) {
        $cv = Cv::find($id);
        return view('cv.show', ['cv' => $cv]);
    }



}