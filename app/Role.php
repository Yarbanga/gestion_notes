<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
     protected $fillable = [
        'name', 'prenoms', 'matricule', 'classe','role', 'email', 'password',
    ];

    public function users(){
        return $this->belongsToMany('App\User');
    }
}
