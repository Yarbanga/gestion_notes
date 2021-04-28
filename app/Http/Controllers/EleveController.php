<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Eleve;
use Illuminate\Support\Facades\Hash;

class EleveController extends Controller
{

    public function eleve(){
        $eleves=Eleve::all();
        return view('Listes.liste_eleve', compact('eleves'));
    }
       public function eleve_store(Request $request)
    {
           $data=request()->validate([
            'name'=> ['required','string'],
            'prenoms'=> ['required','string'],
            'sexe'=> ['required','string'],
            'matricule'=> ['required','string'],
            'naissance'=> ['required','string'],
            'annee'=> ['required','string'],
            'classe'=> ['required','string'],
            'status'=> ['required','string'],
            'email'=> ['required','string'],
            'password'=> ['required','string'],
          ]);

            Eleve::create([
            'name'=>$request->name,
            'prenoms'=>$request->prenoms,
            'sexe'=>$request->sexe,
            'matricule'=>$request->matricule,
            'naissance'=>$request->naissance,
            'annee'=>$request->annee,
            'classe'=>$request->classe,
            'status'=>$request->status,
            'email'=>$request->email,
            'password' => Hash::make($data['password']),
            ]);
            return redirect()->route('list.eleve');
    }

     public function index(){

        $Eleves=Eleve::all();

        return view('include.Espace_prof', compact('eleves'));
    }
}
