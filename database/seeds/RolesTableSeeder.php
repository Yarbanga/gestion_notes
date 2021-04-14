<?php

use Illuminate\Database\Seeder;
use App\Role;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\photo;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::truncate();

        Role::create([
           'name'=>'admin', 
            'prenoms'=>'gerant', 
            'matricule'=>'145769E',
            'classe'=>'tous',    
            'email'=>'admin@admin.com',
            'photo'=>'LOCDE-analyse-effets-Covid-19-leducation-2020-09-08-1201112897',
            'password'=> Hash::make('password'),
            'role'=>1,
            'status'=>true,

        ]);

         Role::create([
           'name'=>'professeur', 
            'prenoms'=>'prof', 
            'matricule'=>'25874E',
            'classe'=>'5ème,6ème',    
            'email'=>'professeur@gmail.com',
            'photo'=>'LOCDE-analyse-effets-Covid-19-leducation-2020-09-08-1201112897',
            'password'=> Hash::make('password'),
            'role'=>2,
            'status'=>0,

        ]);

          Role::create([
           'name'=>'Eleve', 
            'prenoms'=>'apprenant', 
            'matricule'=>'15872M',
            'classe'=>'A determiner',    
            'email'=>'Eleve@gmail.com',
            'photo'=>'LOCDE-analyse-effets-Covid-19-leducation-2020-09-08-1201112897',
            'password'=> Hash::make('password'),
            'role'=>3,
            'status'=>3,

        ]);
    }
}
