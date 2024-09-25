<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\Etudiant;
use App\Models\User;
use Illuminate\Support\Facades\Auth;



class EtudiantController extends Controller
{
    //

    public function handle_registerEtudiant_page(Request $request){
        $request->validate([
            "user"=>"required",
            'email'=>"required|unique:etudiants,email",
            "mot_de_passe"=> "required|min:5",
            "select"=>"required"
        ],
        [
            "user.required"=>"entrer un nom",
            "email.required"=>"Entrer une Email",
            "mot_de_passe.required"=>"entrez le mot de passe",
            "mot_de_passe.min"=>"le mot de passe doit contenir au moins 5 caractere",
            "select.required"=>"veuiller selectionner un etablissement",
        ]);
        // dd($request);
        try{
            Etudiant::create(
                [
                    "nom"=> $request->user,
                    "email"=> $request->email,
                    "password"=> $request->mot_de_passe,
                    'id_etablissement'=>$request->select,
                ]
            );
            $user = Etudiant::where('email', $request->email)->first();
            Auth::guard("etudiant")->login($user);
            return redirect()->route("etudiantdashboard")->with("success","merci");
        }catch(\Exception $e){}

    }



    public function connect_etudiant(Request $request){
        $request->validate([
            'email'=>"required|exists:etudiants,email",
            "mot_de_passe"=> "required|min:5",
        ],
        [
            "email.required"=>"Entrer une Email",
            "email.exists"=>"Entrer une Email valide",
            "mot_de_passe.required"=>"entrez le mot de passe",
            "mot_de_passd.min"=>"le mot de passe doit contenir au moins 5 caractere",
        ]);
        $credentials = $request->only('email', 'password');
        if(Auth::guard('etudiant')->attempt(["email"=> $request->email, "password"=>$request->mot_de_passe])){
            $user = Etudiant::where('email', $request->email)->first();
            Auth::guard("etudiant")->login($user);
          return redirect()->route("etudiantdashboard")->with("status","reussite");
        }else{
            return redirect()->route('loginetudiant')->with("error","existe pas");
        }
    }
}
