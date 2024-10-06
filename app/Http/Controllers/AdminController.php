<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Commande;
class AdminController extends Controller
{
   
    //fct qui permet d'afficher dash admin
    public function dashboard(){
        return view('admin.dashboard');
    }

    //fct qui permet d'afficher le profil admin
    public function profile(){
        return view('admin.profile');
    }

    //profile update
    public function updateProfile(Request $request){

        Auth::user()->name=$request->name;
        Auth::user()->email=$request->email;
        if ($request ->password){
            Auth::user()->password=Hash::make($request->password);
        }
        Auth::user()->update();

        return redirect('/admin/profile')->with('success','Admin modifié avec succes');
    }


    public function clients(){

        $clients= User::where('role','user')->get();
        return view('admin.clients.index')->with('clients', $clients);
    }

    public function commandes(){
        $commandes=Commande::all();
        return view('admin.commandes.index')->with('commandes', $commandes);
    }

}
