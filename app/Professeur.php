<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professeur extends Model
{
     protected $fillable = [
        'name', 'prenoms','sexe','matricule', 'matiere','annee', 'classe','status', 'email', 'password',
    ];
}
