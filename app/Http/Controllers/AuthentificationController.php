<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function eleve(){
    	return view('Listes.liste_eleve');
    }
     public function professeur(){
    	return view('Listes.liste_prof');
    }
}