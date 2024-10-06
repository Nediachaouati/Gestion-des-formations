<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LigneCommande extends Model
{
    use HasFactory;
    public function commande(){
        return $this->belongsTo(Commande::class , 'commande_id' , 'id');
    }

    public function formation(){
        return $this->belongsTo(Formation::class , 'formation_id' , 'id');
    }
}
