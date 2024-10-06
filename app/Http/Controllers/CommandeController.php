<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use App\Models\LigneCommande;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommandeController extends Controller
{
    
    public function store(Request $request){


    //verifier si une commande est en cours pour ce client
    $commande =Commande::where('client_id', Auth::user()->id)->where('etat' , 'en cours')->first();
    
    //creation commande 
    if ($commande){
        $lc =new LigneCommande();
       
        $lc->formation_id = $request-> idformation;
        $lc->commande_id = $commande-> id;
        $lc->save();
        echo "formation commandée";
        return redirect('/client/cart')->with('success' , 'Formation commandée');
    }else{

        $commande = new Commande();
        $commande->client_id = Auth::user()->id;
        
        if ( $commande->save()){
    //creation ligne de commande
        $lc =new LigneCommande();
       
        $lc->formation_id = $request-> idformation;
        $lc->commande_id = $commande-> id;
        $lc->save();
        
        }
        else{
            return redirect('/client/cart')->with('error' , 'impossible');
        }
    }

       
  }

  public function ligneCommandeDestroy($idlc) {

    $lc= LigneCommande::find($idlc);
    $lc->delete();
    return redirect()->back()->with('success' , 'Ligne supprimer');
    
  }

 
    

    
}
