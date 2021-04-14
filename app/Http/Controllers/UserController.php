<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\photo;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function user_store(){
    $data=request()->validate([
        'name' => ['required', 'string', 'max:255'],
        'prenoms' => ['required', 'string', 'max:255'],
        'matricule' => ['required', 'string', 'max:255'],
        'classe' => ['required', 'string', 'max:255'],
        'role' => [ 'string', 'max:255'],
       
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        'password' => ['required', 'string', 'min:6', 'confirmed'],
      ]);
       
         User::create([
        'name' => $data['name'],
        'prenoms' => $data['prenoms'],
        'matricule' => $data['matricule'],
        'classe' => $data['classe'],
        'role' => $data['role'],
       
        'email' => $data['email'],
        'password' => Hash::make($data['password']),
        'statut' => 0,
        'role' => 0,
    ]);
        Session::flash('message', 'vous êtes inscrit(es) avec succes!'); 
        Session::flash('alert-class', 'alert-success text-center'); 
        return redirect()->route('message_flash');
	}

    public function apres_inscription(){
        return view('include.message_flash');
    }
    
    public function dashboard(){
        return view('include.header2');
    }


    // public function rejet_inscrit($id)
    // {
    //     User::where('id', $id)->update(['statut' => 2]);
    //     return redirect()->back();
    // }


}
