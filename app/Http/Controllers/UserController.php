<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\Eleve;
use App\Professeur;
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


     public function professeur(){
        $users=User::where('status',2)->get();
        return view('Listes.liste_prof',compact('users') 
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

            User::create([
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

        $users=User::all();

        return view('Espace_prof', compact('users'));
    }

     public function eleve(){
        $users=User::where('status',3)->get();
        return view('Listes.liste_eleve', compact('users'));
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

            User::create([
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

    //  public function index(){

    //     $users=User::all();

    //     return view('include.Espace_prof', compact('users'));
    // }


}
