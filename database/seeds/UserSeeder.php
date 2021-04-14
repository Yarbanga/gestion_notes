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
            'classe'=>'tous',    
            'email'=>'admin@admin.com',
            'photo'=>'LOCDE-analyse-effets-Covid-19-leducation-2020-09-08-1201112897',
            'password'=> Hash::make('password'),
            'role'=>1,
            'status'=>true,
        ]);   


        $professeur=User::create([
           'name'=>'professeur', 
            'prenoms'=>'prof', 
            'matricule'=>'25874E',
            'classe'=>'5ème,6ème',    
            'email'=>'professeur@gmail.com',
            'photo'=>'LOCDE-analyse-effets-Covid-19-leducation-2020-09-08-1201112897',
            'password'=> Hash::make('password'),
            'role'=>2,
            'status'=>2,

        ]);

        $eleve=User::create([
           'name'=>'eleve', 
            'prenoms'=>'apprenant', 
            'matricule'=>'15872M',
            'classe'=>'A determiner',    
            'email'=>'eleve@gmail.com',
            'photo'=>'LOCDE-analyse-effets-Covid-19-leducation-2020-09-08-1201112897',
            'password'=> Hash::make('password'),
            'role'=>3,
            'status'=>3,

        ]);  

            $adminRole=User::where('name','admin')->first(); 
            $professeurRole=User::where('name','professeur')->first();    
            $eleveRole=User::where('name','eleve')->first(); 


            $admin->users()->attach($adminRole);
            $professeur->Users()->attach($professeurRole);
            $eleve->users()->attach($eleveRole);       
    }
}
