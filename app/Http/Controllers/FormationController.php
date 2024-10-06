<?php

namespace App\Http\Controllers;
use App\Models\Formation;
use Illuminate\Http\Request;

class FormationController extends Controller
{
    //
    //fct qui permet d'afficher la liste des formations
    public function index(){
        $formations=Formation::all();
        return view('admin.formations.index')->with('formations',$formations);
    }

    //function qui permet d'ajouter une formation dans la bd
    public function store (Request $request){

        $request->validate([
            'categorie'=>'required',
            'prix'=>'required',
            'duree'=>'required',
            'dateSession'=>'required',
            'capacite'=>'required',
            'description'=>'required',
            'photo'=>'required'
        ]);

        $formation =new Formation();
        $formation->categorie=$request->categorie;
        $formation->prix=$request->prix;
        $formation->duree=$request->duree;
        $formation->dateSession=$request->dateSession;
        $formation->capacite=$request->capacite;
        $formation->description=$request->description;
        
        //upload image
        $newname=uniqid();
        $image=$request->file('photo');
        $newname.= "." . $image->getClientOriginalExtension();
        $destinationPath='uploads';
        $image->move($destinationPath ,$newname);
        
        $formation->photo=$newname;
        
        
        if($formation->save()){
            return redirect()->back();
        }else{
            echo"error";
        }
    }

    //fct qui permet de supprimer une formation
    public function destroy($id){

        $formation=Formation::find($id);

        $file_path= public_path().'/uploads/'.$formation->photo;
        unlink($file_path);
        if ($formation->delete()){
            return redirect()->back();
        }else{
            echo"error";
        }

    }

    //fct qui permet de modifier une formation
    public function update(Request $request){
        
       

       
        $formation=Formation::find($request->idformation);
        $formation->categorie=$request->categorie;
        $formation->prix=$request->prix;
        $formation->duree=$request->duree;
        $formation->dateSession=$request->dateSession;
        $formation->capacite=$request->capacite;
        $formation->description=$request->description;
        


         if ($request->file('photo')){
            //supprimer ancienne photo
            $file_path= public_path().'/uploads/'.$formation->photo;
            unlink($file_path);

            //upload new photo
            $newname=uniqid();
            $image= $request->file('photo');
            $newname.= "." . $image->getClientOriginalExtension();
            $destinationPath='uploads';
            $image->move($destinationPath ,$newname);

            $formation->photo= $newname;
         }


        if($formation->update()){
            return redirect()->back();
        }else{
            echo"error";
        }
        
    }

    public function showFormation(){
        $formations=Formation::all();
        return view('client.dashboard')->with('formations',$formations);
    }

    public function details($id){

        $formations=Formation::find($id);
       
        return view('client.details')->with('formations',$formations);
    }

    public function searchFormation(Request $request){

        $formations=Formation::where('categorie','LIKE','%'.$request->formation_name .'%')->get();
        

        return view('admin.formations.index')->with('formations', $formations);
    }
}
