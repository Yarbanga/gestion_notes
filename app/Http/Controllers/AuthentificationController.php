<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Authentification;

class AuthentificationController extends Controller
{
    public function dashboard(){
    	return view('layouts.yaya');
    }
    public function index(){
    	return view('Appgestion');
    }

    public function espace_prof(){
    	return view('include.Espace_prof');
    }

    public function apprenants(){
        return view('include.Espace_eleve');
    }

    public function annee(){
    	 $authentifications=Authentification::all();
        return view('Listes.liste_annee', compact('authentifications'));
    }

    public function store(Request $request){

    	$data=request()->validate([
            'trimestre'=> ['required','string'],
          ]);

            Authentification::create([
            'trimestre'=>$request->trimestre,
            ]);
            return redirect()->route('list.ann');
    }

}