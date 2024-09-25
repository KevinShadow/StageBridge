<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\Etablissement;
use App\Models\Emploi;
use App\Models\Stage;
use App\Models\Postuler;
use App\Models\Avis;




use Illuminate\Support\Facades\Auth;




class ReturnPage extends Controller
{
    //
    public function return_home_page(){
        $emplois = Emploi::orderByRaw('RAND()')->take(3)->get();
        $stages = Stage::orderByRaw('RAND()')->take(3)->get();
        return view("home", compact("emplois", "stages"));
    }
    public function return_offrespostuler_page(){
        // Récupérer l'identifiant de l'étudiant connecté
        $etudiantId = Auth::guard('etudiant')->user()->id_etudiant;

        // Récupérer toutes les candidatures de l'étudiant avec les détails des stages associés
        $postulations = Postuler::where('id_etudiant', $etudiantId)->with('stage')->get();

        // Retourner la vue avec les données des candidatures
        return view('etudiant.mes_offres_postuler', compact('postulations'));
    }

    public function return_modifiermonoffrespublier_page($id){
        $offre = Stage::findOrFail($id);

        // Vérifier si l'entreprise connectée a bien posté l'offre
        if ($offre->id_entreprise != Auth::guard('entreprise')->user()->id_entreprise) {
            return redirect()->route('mesoffrespublier')->with('error', 'Vous n\'êtes pas autorisé à modifier cette offre.');
        }

        return view('entreprise.modifier_stage', compact('offre'));

    }



    public function return_mesoffrespublier_page()
    {
        // Récupérer l'identifiant de l'entreprise connectée
        $entrepriseId = Auth::guard('entreprise')->user()->id_entreprise;

        // Récupérer toutes les offres publiées par cette entreprise
        $offres = Stage::where('id_entreprise', $entrepriseId)->get();

        // Retourner la vue avec les données des offres
        return view('entreprise.liste_offres', compact('offres'));
    }

    public function nePlusPostuler($id_stage)
    {
        // Récupérer l'ID de l'étudiant connecté
        $etudiantId = Auth::guard('etudiant')->user()->id_etudiant;

        // Rechercher la candidature spécifique à supprimer
        $postulation = Postuler::where('id_etudiant', $etudiantId)
                               ->where('id_stage', $id_stage)
                               ->first();

        // Vérifier si la candidature existe
        if (!$postulation) {
            return back()->with('error', 'La candidature n\'existe pas.');
        }

        // Vérifier que l'étudiant connecté est l'auteur de la candidature
        if ($postulation->id_etudiant !== $etudiantId) {
            abort(403, 'Action non autorisée.');
        }
        // dd($postulation);

        // Supprimer la candidature
        $deleted = Postuler::where('id_etudiant', $etudiantId)
                       ->where('id_stage', $id_stage)
                       ->delete();

        // Rediriger ou retourner une réponse appropriée
        return redirect()->back()->with('success', 'Vous avez retiré votre candidature avec succès.');
    }

    public function return_avisdemanderattente_page(){
        $etablissementId = Auth::guard('etablissement')->user()->id_etablissement; // Récupérez l'ID de l'établissement connecté

        // Récupérez les demandes d'avis en attente pour cet établissement
        $avis = Avis::where('status', 'en attente')
                    ->where('id_etablissement', $etablissementId)
                    ->get();
        return view("Etablissement.avis_attente", compact("avis"));
    }


    public function return_registerEtudiant_page(){
        $etablissement = Etablissement::all();
        return view("auth.register.registerEtudiant", compact("etablissement"));
    }
    public function return_registerEtablissement_page(){
        return view("auth.register.registerEtablissement");
    }
    public function return_registerEntreprise_page(){
        return view("auth.register.registerEntreprise");
    }
    public function return_loginEtudiant_page(){
        return view("auth.login.loginEtudiant");
    }
    public function return_loginEtablisssement_page(){
        return view("auth.login.loginEtablissement");
    }
    public function return_loginEntreprise_page(){
        return view("auth.login.loginEntreprise");
    }
    public function return_EtudiantDashboard_page(){
        // Récupérer l'étudiant connecté
        $etudiant = Auth::guard('etudiant')->user();

        // Vérifier si le profil existe
        $profil = $etudiant->profil;

        $emplois = Emploi::orderByRaw('RAND()')->take(3)->get();
        $stages = Stage::orderByRaw('RAND()')->take(3)->get();
        return view("Etudiant.EtudiantDashboard", compact("emplois", "stages", "profil"));
    }
    public function return_EntrepriseDashboard_page(){
        // $emplois = Emploi::all();$emplois = Emploi::all();
        $emplois = Emploi::orderByRaw('RAND()')->take(3)->get();
        $stages = Stage::orderByRaw('RAND()')->take(3)->get();
        return view("Entreprise.EntrepriseDashboard", compact("emplois", "stages"));
    }
    public function return_EtablissementDashboard_page(){
        $emplois = Emploi::orderByRaw('RAND()')->take(3)->get();
        $stages = Stage::orderByRaw('RAND()')->take(3)->get();
        return view("Etablissement.EtablissementDashboard", compact("emplois", "stages"));
    }
    public function disconnect(){
        Auth::logout();
        Auth::guard('etudiant')->logout();
        Auth::guard('entreprise')->logout();
        Auth::guard('etablissement')->logout();

        return redirect()->route('home');
    }
    public function disconnect_etudiant(){
        Auth::logout();
        Auth::guard('etudiant')->logout();
        return redirect()->route('home');
    }
    public function disconnect_entreprise(){
        Auth::logout();
        Auth::guard('entreprise')->logout();
        return redirect()->route('home');
    }
    public function disconnect_etablissement(){
        Auth::logout();
        Auth::guard('etablissement')->logout();
        return redirect()->route('home');
    }
}
