<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Professeur;
use Illuminate\Support\Facades\Hash;


class ProfesseurController extends Controller
{

     public function professeur(){
        $professeurs=Professeur::all();
        return view('Listes.liste_prof',compact('professeurs') 
    );

    }
   	    public function store(Request $request)
    {
       $data=request()->validate([
        
            'name'=> ['required','string'],
            'prenoms'=> ['required','string'],
            'sexe'=> ['required','string'],
            'matricule'=> ['required','string'],
            'matiere'=> ['required','string'],
            'annee'=> ['required','string'],
            'classe'=> ['required','string'],
            'status'=> ['required','string'],
            'email'=> ['required','string'],
            'password'=> ['required','string'],
          ]);

            Professeur::create([
            'name'=>$request->name,
            'prenoms'=>$request->prenoms,
            'sexe'=>$request->sexe,
            'matricule'=>$request->matricule,
            'matiere'=>$request->matiere,
            'annee'=>$request->annee,
            'classe'=>$request->classe,
            'status'=>$request->status,
            'email'=>$request->email,
            'password' => Hash::make($data['password']),
            ]);
            return redirect()->route('list.prof');
    }

     public function index(){

        $professeurs=Professeur::all();

        return view('Espace_prof', compact('professeurs'));
    }
    
}