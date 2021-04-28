<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Matiere_classe;

class MatiereClasseController extends Controller
{
     public function matiere(){
        $matiere_classes=Matiere_classe::all();
        return view('Listes.liste_choix_mat', compact('matiere_classes'));
    }
       public function choix_store(Request $request)
    {
           $data=request()->validate([
            'matiere'=> ['required','string'],
            'classe'=> ['required','string'],
          ]);

            Matiere_classe::create([
            'matiere'=>$request->matiere,
            'classe'=>$request->classe,
            ]);
            return redirect()->route('list.matiere');
    }

     public function index(){

        $Matier_classes=Matiere_classe::all();

        return view('include.Espace_prof', compact('matiere_classes'));
    }
}
