<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Formation;
use App\Models\Commande;
class ClientController extends Controller
{
    //

    public function dashboard(){
        return view('client.dashboard');
    }

    public function profile(){
        return view('client.profile');
    }

    public function updateProfile(Request $request){

        Auth::user()->name=$request->name;
        Auth::user()->email=$request->email;
        if ($request ->password){
            Auth::user()->password=Hash::make($request->password);
        }
        Auth::user()->update();

        return redirect('/client/profile')->with('success','Client modifié avec succes');
    }


    public function cart(){
       
        $formations=Formation::all();
        $commande =Commande::where('client_id', Auth::user()->id)->where('etat' , 'en cours')->first();
        return view('client.cart')->with('formations' , $formations)->with('commande' , $commande);
    }

    public function checkout(Request $request) {
        
        $commande=Commande::find($request->commande);
        $commande->etat="payee";
        $commande->update();
        return redirect('/client/dashboard')->with('success','Commande payee avec succes..');
    }

    public function mescommandes(){

        return view('client.commandes');
    }
}
