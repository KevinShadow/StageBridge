<?php

namespace App\Http\Controllers;

use App\Models\Etablissement;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Avis;


use Illuminate\Support\Facades\Hash;



use Illuminate\Http\Request;

class EtablissementController extends Controller
{
    //

    public function handle_registerEtablissement_page(Request $request)
    {
        $request->validate([
            "nom_etablissement" => "required",
            'numero_etablissement' => "required|integer|min:9",
            "site_etablissement" => "required",
            "email_etablissement" => "required|unique:etablissements,email_etablissement|email",
            "mot_de_passe" => "required|min:6",
            "nom_responsable" => "required",
            "email_responsable" => "required|email",
        ]);

        try {
            \Log::info('Données à insérer :', $request->all()); // Ajout de log pour les données reçues

            $etablissement = Etablissement::create([
                'nom_etablissement' => $request->nom_etablissement,
                'email_etablissement' => $request->email_etablissement,
                'site_etablissement' => $request->site_etablissement,
                'numero_etablissement' => $request->numero_etablissement,
                'password' => Hash::make($request->mot_de_passe), // Utilisation de bcrypt pour le mot de passe
                'nom_responsable' => $request->nom_responsable,
                'email_responsable' => $request->email_responsable,
            ]);

            \Log::info('Etablissement créé :', $etablissement->toArray()); // Ajout de log pour vérifier l'insertion

            if ($etablissement) {
                Auth::guard('etablissement')->login($etablissement);
                return redirect()->route("etablissementdashboard")->with('success', 'Inscription réussie');
            } else {
                return redirect()->back()->withErrors(['error' => 'Une erreur est survenue lors de l\'inscription. Veuillez réessayer.'])->withInput();
            }
        } catch (\Exception $e) {
            \Log::error('Erreur lors de l\'inscription : ' . $e->getMessage());
            return redirect()->back()->withErrors(['error' => 'Une erreur est survenue lors de l\'inscription. Veuillez réessayer.'])->withInput();
        }
    }



    public function connect_etablissement(Request $request){
        $request->validate([
            'email' => "required|exists:etablissements,email_etablissement|email",
            "mot_de_passe" => "required|min:5",
        ],
        [
            "email.required" => "Entrez une Email",
            "email.exists" => "L'Email n'est pas dans la base de donner",
            "email.email" => "Entrez une Email valide",
            "mot_de_passe.required" => "Entrez le mot de passe",
            "mot_de_passe.min" => "Le mot de passe doit contenir au moins 5 caractères",
        ]);

        if (Auth::guard('etablissement')->attempt(["email_etablissement" => $request->email, "password" => $request->mot_de_passe])) {
            return redirect()->route("etablissementdashboard")->with("status", "Connexion réussie.");
        } else {
            return redirect()->route('loginetablissement')->withErrors(["error" => "Les informations d'identification ne correspondent pas à nos enregistrements."]);
        }
    }





    // Méthode pour répondre à une demande d'avis
    public function repondreAvis(Request $request, $avisId)
    {
        // Récupérer l'avis
        $avis = Avis::findOrFail($avisId);

        // Vérifier si l'avis appartient bien à cet établissement
        if ($avis->id_etablissement != auth()->guard('etablissement')->user()->id_etablissement) {
            abort(403, 'Unauthorized action.');
        }

        // Mettre à jour l'avis avec le statut et le message
        $avis->status = $request->input('avis_status'); // Récupérer le statut favorable ou défavorable
        $avis->message = $request->input('avis_message'); // Récupérer le message de l'établissement
        $avis->save();

        // Rediriger avec un message de succès
        return redirect()->back()->with('success', 'Votre avis a été enregistré avec succès.');
    }






}
