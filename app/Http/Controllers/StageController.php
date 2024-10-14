<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



use App\Models\Stage;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Log;

use Illuminate\Support\Facades\Hash;
use App\Models\Postuler;
use App\Models\Avis;



class StageController extends Controller
{
    //
    public function create_stage(){
        return view("offres.creation.stage.create_Stage");
    }
    public function search_stage(){
        return view("offres.recherche.stage.chearch_Stage");
    }
    public function search_stage_request(Request $request){
        $titre = $request->input('titre');
        $location = $request->input('location');

        // Effectuer la recherche dans la table stages
        $stages = Stage::query()
            ->when($titre, function ($query, $titre) {
                return $query->where('titre', 'like', '%' . $titre . '%');
            })
            ->when($location, function ($query, $location) {
                return $query->where('location', 'like', '%' . $location . '%');
            })
            ->get();

        // Récupérer les IDs des stages trouvés
        $stagesIds = $stages->pluck('id_stage')->toArray();

        // Rechercher des suggestions de stages, en excluant ceux déjà trouvés
        $suggestions = Stage::whereNotIn('id_stage', $stagesIds)
            ->limit(5) // Limiter le nombre de suggestions (optionnel)
            ->get();

        // Retourner la vue avec les résultats de recherche et les suggestions
        return view('offres.recherche.stage.chearch_Stage', [
            'stages' => $stages,
            'suggestions' => $suggestions,
        ]);

    }

    public function suprimer_offre($id){
        try {
            $offre = Stage::findOrFail($id);
            $entrepriseId = Auth::guard('entreprise')->user()->id_entreprise;

            if ($offre->id_entreprise != $entrepriseId) {
                return redirect()->route('mesoffrespublier')->with('error', 'Vous n\'êtes pas autorisé à supprimer cette offre.');
            }

            $offre->delete();

            return redirect()->route('mesoffrespublier')->with('success', 'Offre supprimée avec succès.');
        } catch (\Exception $e) {
            return redirect()->route('mesoffrespublier')->with('error', 'Erreur lors de la suppression de l\'offre.');
        }
    }


    public function post_stage(Request $request){
         // Validation des données du formulaire
         $idEntreprise = $request->input('id_entreprise');
        $validatedata=$request->validate([
            "titre"=> "required|min:3",
            "description"=> "required|min:3",
            "location"=> "required",
            "image"=> "required|image|mimes:jpg,jpeg,png,gif,svg",
            'competence_requis' => 'required|string',
            "fichier"=> "required|mimes:pdf,docx,txt",
            "domaine" => "required"

        ],[
            "titre.required"=> "veuiller entrer un titre",
            "titre.min"=> "doit contenir au moins 3 caracter",
            "description.required"=> "veuiller entrer une descrition",
            "description.min"=> "doit contenir au moins 3 caracter",
            "location.required"=> "entrer la location",
            "image.required"=> "selectionne une images",
            "image.mimes"=> "un foarmat image correct",
            "competence_requis.required"=>"entrer les competances requis",
            "fichier.required"=> "selectionne une fichier",
            "fichier.mimes"=> "un format fichier correct",
            "domaine.required"=>"veuillez entrez le domaine du stage"
        ]);
        $image=$request->file("image");
        $destinationPath='image/';
        $profileimage=date('YmdHis').".".$image->getClientOriginalExtension();
        $image->move($destinationPath, $profileimage);
        $validatedata['image']=$profileimage;


        $file = $request->file('fichier');
        $destinationPath = 'fichier/';
        $profileFile = date('YmdHis') . '.' . $file->getClientOriginalExtension();
        $file->move($destinationPath, $profileFile);
        $validatedata['fichier'] = $profileFile;



        $validatedata['id_entreprise']=$idEntreprise;

        $validatedata['durer']="cdi";


        // dd($validatedata);

        try{
            $newjob=Stage::create($validatedata);
            return redirect()->route("entreprisedashboard")->with("success","offre cree avec succes");
        }catch(\Exception $e){
            Log::error('Erreur lors de la création de l\'offre: ' . $e->getMessage());
            return redirect()->back()->with("error","erreur lors de la creation veiller reessaiyer");
        }
    }






    public function modifier_offre(Request $request, $id)
    {
        $offre = Stage::findOrFail($id);

        // Vérifier si l'entreprise connectée a bien posté l'offre
        if ($offre->id_entreprise != Auth::guard('entreprise')->user()->id_entreprise) {
            return redirect()->route('offres.publiees')->with('error', 'Vous n\'êtes pas autorisé à modifier cette offre.');
        }

        // Validation des données du formulaire
        $validatedata = $request->validate([
            "titre" => "required|min:3",
            "description" => "required|min:3",
            "location" => "required",
            "image" => "nullable|image|mimes:jpg,jpeg,png,gif,svg",
            'competence_requis' => 'required|string',
            "fichier" => "nullable|mimes:pdf,docx,txt",
        ], [
            "titre.required" => "veuiller entrer un titre",
            "titre.min" => "doit contenir au moins 3 caracteres",
            "description.required" => "veuiller entrer une description",
            "description.min" => "doit contenir au moins 3 caracteres",
            "location.required" => "entrer la location",
            "image.mimes" => "un format image correct",
            "competence_requis.required" => "entrer les competences requises",
            "fichier.mimes" => "un format fichier correct",
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file("image");
            $destinationPath = 'image/';
            $profileimage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileimage);
            $validatedata['image'] = $profileimage;
        }

        if ($request->hasFile('fichier')) {
            $file = $request->file('fichier');
            $destinationPath = 'fichier/';
            $profileFile = date('YmdHis') . '.' . $file->getClientOriginalExtension();
            $file->move($destinationPath, $profileFile);
            $validatedata['fichier'] = $profileFile;
        }

        $validatedata['durer'] = $offre->durer;
        $offre->update($validatedata);

        return redirect()->route('mesoffrespublier')->with('success', 'Offre mise à jour avec succès.');

    }




    public function showPostulants($id)
    {
    //     $offre = Stage::findOrFail($id);

    // // Charger les postulants avec leurs avis via la relation postuler
    // $postulantsEnAttente = $offre->postulants()
    //     ->wherePivot('status', 'attente')
    //     ->with(['postulers.avis']) // Charger les avis des établissements via postulers
    //     ->get();

    // $postulantsValides = $offre->postulants()
    //     ->wherePivot('status', 'approuver')
    //     ->with(['postulers.avis']) // Charger les avis des établissements via postulers
    //     ->get();

    // $postulantsRejeter = $offre->postulants()
    //     ->wherePivot('status', 'rejeter')
    //     ->with(['postulers.avis']) // Charger les avis des établissements via postulers
    //     ->get();

    // return view('Entreprise.liste_etudiant_offres', compact('offre', 'postulantsEnAttente', 'postulantsValides', 'postulantsRejeter'));





    $offre = Stage::findOrFail($id);

    // Charger les postulants avec leurs avis spécifiques à cette postulation
    $postulantsEnAttente = $offre->postulants()
        ->wherePivot('status', 'attente')
        ->with(['postulers' => function ($query) use ($id) {
            $query->where('id_stage', $id)->with('avis');
        }])
        ->get();

    $postulantsValides = $offre->postulants()
        ->wherePivot('status', 'approuver')
        ->with(['postulers' => function ($query) use ($id) {
            $query->where('id_stage', $id)->with('avis');
        }])
        ->get();

    $postulantsRejeter = $offre->postulants()
        ->wherePivot('status', 'rejeter')
        ->with(['postulers' => function ($query) use ($id) {
            $query->where('id_stage', $id)->with('avis');
        }])
        ->get();

    return view('Entreprise.liste_etudiant_offres', compact('offre', 'postulantsEnAttente', 'postulantsValides', 'postulantsRejeter'));



    }

    public function approuverPostulant($offreId, $postulantId)
    {
        $offre = Stage::findOrFail($offreId);
        $offre->postulants()->updateExistingPivot($postulantId, ['status' => 'approuver']);
        return redirect()->back()->with('success', 'Le postulant a été approuvé.');
    }

    public function show_detail($id){
        $stage = Stage::findOrFail($id);
        return view("offres.detaille.detaille_offre", compact("stage"));
    }

    public function demanderAvisPostulant($offreId, $postulantId)
    {
        try {
            // Trouver le postuler correspondant à l'offre et à l'étudiant
            $postuler = Postuler::where('id_stage', $offreId)
                                ->where('id_etudiant', $postulantId)
                                ->firstOrFail();

            // Récupérer l'id_etablissement de l'étudiant associé
            $idEtablissement = $postuler->etudiant->id_etablissement;

            // Vérifier si une demande d'avis existe déjà pour cet étudiant et cette offre
            $avisExiste = Avis::where('id_postuler', $postuler->id_postuler)
                              ->where('id_etablissement', $idEtablissement)
                              ->exists();

            if ($avisExiste) {
                return redirect()->back()->with('error', 'Une demande d\'avis existe déjà pour cet étudiant sur cette offre.');
            }

            // Créer une nouvelle demande d'avis
            $avis = new Avis();
            $avis->id_postuler = $postuler->id_postuler;
            $avis->id_etablissement = $idEtablissement;
            $avis->status = 'en attente';
            $avis->save();

            return redirect()->back()->with('success', 'Demande d\'avis envoyée avec succès.');

        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Une erreur est survenue : ' . $e->getMessage());
        }
    }

    public function rejeterPostulant($offreId, $postulantId)
    {
        $offre = Stage::findOrFail($offreId);
        $offre->postulants()->updateExistingPivot($postulantId, ['status' => 'rejeter']);
        return redirect()->back()->with('success', 'Le postulant a été rejeté.');
    }








}
