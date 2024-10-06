<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    use HasFactory;

    public function ligneCommande(){
        return $this->hasMany(LigneCommande::class , 'formation_id' , 'id');
    }
}
