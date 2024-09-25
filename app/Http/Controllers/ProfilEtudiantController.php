<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiant;
use App\Models\Etablissement;
use App\Models\ProfilEtudiant;
use Illuminate\Support\Facades\Auth;

class ProfilEtudiantController extends Controller
{
    public function show()
    {
        // Récupérer l'étudiant connecté
        $etudiant = Auth::guard('etudiant')->user();

        // Vérifier si le profil existe
        $profil = $etudiant->profil;

        // Si le profil n'existe pas, rediriger vers la création de profil
        if (!$profil) {
            return view('Etudiant.creer_profil');
        }

        // Afficher la vue du profil de l'étudiant
        return view('Etudiant.mon_profil', compact('profil'));
    }

    public function create()
    {
        // Récupérer l'étudiant connecté
        $etudiant = Auth::guard('etudiant')->user();

        // Vérifier si le profil existe déjà
        $profil = $etudiant->profil;

        // Si le profil existe déjà, rediriger vers l'édition du profil
        if ($profil) {
            // return redirect()->route('profil-etudiant.edit');
            return view('Etudiant.modifier_profil');
        }

        // Sinon, afficher le formulaire de création de profil
        return view('Etudiant.creer_profil');
    }

    // Méthode pour sauvegarder le profil de l'étudiant
    public function store(Request $request)
    {
        // Récupérer l'étudiant connecté
        $etudiant = Auth::guard('etudiant')->user();

        // Valider les données du formulaire
        $validatedData = $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'niveau' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        // Récupérer l'id de l'établissement de l'étudiant
        $idEtablissement = $etudiant->id_etablissement;

        // Récupérer le nom de l'établissement en fonction de l'id
        $nomEtablissement = Etablissement::where('id_etablissement', $idEtablissement)->value('nom_etablissement');

        // Créer le profil de l'étudiant
        $profil = new ProfilEtudiant();
        $profil->id_etudiant = $etudiant->id_etudiant;
        $profil->nom = $validatedData['nom'];
        $profil->prenom = $validatedData['prenom'];
        $profil->niveau = $validatedData['niveau'];
        $profil->nom_etablissement = $nomEtablissement;
        $profil->description = $validatedData['description'];

        // Traitement de l'image s'il y en a une
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $destinationPath = 'imageProfil/';
            $profileFile = date('YmdHis') . '.' . $file->getClientOriginalExtension();
            $file->move($destinationPath, $profileFile);
            $profil->image = $profileFile;
        }

        // Sauvegarder le profil
        if ($profil->save()) {
            // Ajouter un message de succès dans la session
            return redirect()->route('profil.etudiant')->with('success', 'Profil créé avec succès !');
        } else {
            // Ajouter un message d'échec dans la session
            return redirect()->route('profil.etudiant')->with('error', 'Échec de la création du profil.');
        }
    }

    public function edit()
    {
        // Récupérer l'étudiant connecté
        $etudiant = Auth::guard('etudiant')->user();

        // Récupérer le profil de l'étudiant
        $profil = $etudiant->profil;

        // Afficher la vue d'édition du profil de l'étudiant
        return view('Etudiant.modifier_profil', compact('profil'));
    }

    public function update(Request $request)
    {
        // Récupérer l'étudiant connecté
        $etudiant = Auth::guard('etudiant')->user();

        // Valider les données du formulaire
        $validatedData = $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'niveau' => 'required|string|max:255',
            'description' => 'nullable|string|min:8|max:250',
        ],[
            "description.max"=>"vous avez depasser les caracter maximal pour la description",
        ]);

        // Récupérer le profil de l'étudiant
        $profil = $etudiant->profil;

        // Mettre à jour les données du profil
        $profil->nom = $validatedData['nom'];
        $profil->prenom = $validatedData['prenom'];
        $profil->niveau = $validatedData['niveau'];
        $profil->description = $validatedData['description'];

        // Traitement de l'image s'il y en a une
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $destinationPath = 'imageProfil/';
            $profileFile = date('YmdHis') . '.' . $file->getClientOriginalExtension();
            $file->move($destinationPath, $profileFile);
            $profil->image = $profileFile;
        }

        // Sauvegarder les modifications du profil
        if ($profil->save()) {
            // Ajouter un message de succès dans la session
            return redirect()->route('profil.etudiant')->with('success', 'Profil mis à jour avec succès !');
        } else {
            // Ajouter un message d'échec dans la session
            return redirect()->route('profil.etudiant')->with('error', 'Échec de la mise à jour du profil.');
        }
    }
}
