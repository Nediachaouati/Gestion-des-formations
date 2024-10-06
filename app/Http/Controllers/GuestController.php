<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formation;
class GuestController extends Controller
{
    //
    public function home(){
        $formations=Formation::all();//recupere tout les formation de la bd

        return view('guest.home')->with('formations',$formations);
    }

    public function contact(){
       

        return view('guest.contact');
    }
}
