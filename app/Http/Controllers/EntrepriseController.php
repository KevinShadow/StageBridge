<?php

namespace App\Http\Controllers;



use App\Models\Entreprise;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Hash;



use Illuminate\Http\Request;

class EntrepriseController extends Controller
{
    //
    public function handle_registerEntreprise_page(Request $request){
        $request->validate([
            "nom_entreprise" => "required",
            'numero_entreprise' => "required|integer|min:9",
            "site_entreprise" => "required",
            "email_entreprise" => "required|unique:entreprises,email_entreprise|email",
            "mot_de_passe" => "required|min:6",
            "nom_responsable" => "required",
            "email_responsable" => "required|email",
            "secteur" => "required|min:3",
        ],
        [
            "nom_entreprise.required" => "Entrez un nom d'entreprise",
            "numero_entreprise.required" => "Entrez un numéro de l'entreprise",
            "numero_entreprise.integer" => "Entrez un numéro valide",
            "numero_entreprise.min" => "Le numéro doit contenir au moins 9 caractères",
            "site_entreprise.required" => "Entrez le site de l'entreprise",
            "email_entreprise.required" => "Entrez l'Email de l'entreprise",
            "email_entreprise.unique" => "Cet Email de l'entreprise est déjà utilisé",
            "email_entreprise.email" => "Entrez une email valide",
            "nom_responsable.required" => "Entrez un nom de responsable",
            "email_responsable.required" => "Entrez l'email du responsable",
            "email_responsable.email" => "Entrez une email valide",
            "mot_de_passe.required" => "Entrez le mot de passe",
            "mot_de_passe.min" => "Le mot de passe doit contenir au moins 6 caractères",
            "secteur.required" => "veuillez entre un secteur d'activité pour l'entreprise",
        ]);

        try {
            $entreprise = Entreprise::create([
                'nom_entreprise' => $request->nom_entreprise,
                'email_entreprise' => $request->email_entreprise,
                'secteur' => $request->secteur,
                'site_entreprise' => $request->site_entreprise,
                'numero_entreprise' => $request->numero_entreprise,
                'password' => Hash::make($request->mot_de_passe),
                'nom_responsable' => $request->nom_responsable,
                'email_responsable' => $request->email_responsable,
            ]);

            // Assurez-vous que l'utilisateur a été créé
            if ($entreprise) {
                Auth::guard('entreprise')->login($entreprise);
                return redirect()->route("entreprisedashboard")->with("success", "Merci pour votre inscription.");
            } else {
                return redirect()->back()->withErrors(['error' => 'Une erreur est survenue lors de l\'inscription. Veuillez réessayer.'])->withInput();
            }
        } catch (\Exception $e) {
            // Log the exception for debugging
            \Log::error('Registration Error: ' . $e->getMessage());
            return redirect()->back()->withErrors(['error' => 'Une erreur est survenue lors de l\'inscription. Veuillez réessayer.'])->withInput();
        }
    }

    public function connect_entreprise(Request $request){
        $request->validate([
            'email' => "required|exists:entreprises,email_entreprise|email",
            "mot_de_passe" => "required|min:5",
        ],
        [
            "email.required" => "Entrez une Email",
            "email.exists" => "L'Email est incorrect",
            "email.email" => "Entrez une Email valide",
            "mot_de_passe.required" => "Entrez le mot de passe",
            "mot_de_passe.min" => "Le mot de passe doit contenir au moins 5 caractères",
        ]);

        if (Auth::guard('entreprise')->attempt(["email_entreprise" => $request->email, "password" => $request->mot_de_passe])) {
            return redirect()->route("entreprisedashboard")->with("success", "Connexion réussie.");
        } else {
            return redirect()->route('loginentreprise')->withErrors(["error" => "Les informations d'identification ne correspondent pas à nos enregistrements."]);
        }
    }

}
