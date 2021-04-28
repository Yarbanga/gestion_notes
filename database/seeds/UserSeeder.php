<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\photo;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        DB::table('users')->truncate();
        $admin=User::create([
            'name'=>'admin', 
            'prenoms'=>'gerant', 
            'matricule'=>'145769E',
            'classe'=>'classe',    
            'email'=>'admin@admin.com',
            'photo'=>'LOCDE-analyse-effets-Covid-19-leducation-2020-09-08-1201112897',
            'sexe'=>'sexe',
            'password'=> Hash::make('password'),
            'role'=>1,
            'status'=>true,
            'matiere'=>'matiere',
            'naissance'=>'naissance',
            'annee'=>'annee',

        ]);   


        $professeur=User::create([
           'name'=>'professeur', 
            'prenoms'=>'prof', 
            'matricule'=>'25874E',
            'classe'=>'5ème,6ème',    
            'email'=>'professeur@gmail.com',
            'photo'=>'LOCDE-analyse-effets-Covid-19-leducation-2020-09-08-1201112897',
            'password'=> Hash::make('password'),
            'matiere'=>'matiere',
            'sexe'=>'sexe',
            'naissance'=>'naissance',
            'role'=>2,
            'status'=>2,
            'annee'=>'annee',

        ]);

        $eleve=User::create([
           'name'=>'eleve', 
            'prenoms'=>'apprenant', 
            'matricule'=>'15872M',
            'classe'=>'A determiner',    
            'email'=>'eleve@gmail.com',
            'photo'=>'LOCDE-analyse-effets-Covid-19-leducation-2020-09-08-1201112897',
            'matiere'=>'matiere',
            'password'=> Hash::make('password'),
            'role'=>3,
            'status'=>3,
            'naissance'=>'naissance',
            'sexe'=>'sexe',
            'annee'=>'annee',

        ]);            
    }
}
