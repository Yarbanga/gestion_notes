<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Eleve extends Model
{
    protected $fillable = [
        'name', 'prenoms','sexe','matricule', 'naissance','annee', 'classe','status', 'email', 'password',
    ];
}
