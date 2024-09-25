<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\Emploi;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Hash;



class EmploiController extends Controller
{
    //
    public function create_emploi(){
        return view("offres.creation.emploi.create_Emploi");
    }
    public function search_emploi(){
        return view("offres.recherche.emploi.search_emploi");
    }
    public function search_emploi_request(Request $request){
        $query = Emploi::query();
        if($request->filled("id_emploi")){
            $query->where('titre', 'like', '%'.$request->id_emploi.'%');
        }
        if($request->filled("location")){
            $query->where('location', 'like', '%'.$request->location.'%');
        }
        $jobs = $query->get();
        $suggesionjobs = Emploi::whereNotIn('id_emploi', $jobs->pluck('id_emploi'))->inRandomOrder()->take(5)->get();
        $autre = Emploi::inRandomOrder()->take(10)->get();

        $offres = Emploi::whereNotIn('id_emploi', function ($query) {
            $query->select('id_emploi')->from('emplois');
            // ->where('etudiant_id', auth('etudiant')->id())
        })->get();

        return view('offres.recherche.emploi.search_emploi', compact('jobs', 'suggesionjobs', 'autre', 'offres'));
    }
    public function post_emploi(Request $request){
         // Validation des données du formulaire
         $idEntreprise = $request->input('id_entreprise');
        $validatedata=$request->validate([
            "titre"=> "required|min:3",
            "description"=> "required|min:3",
            "location"=> "required",
            "image"=> "required|image|mimes:jpg,jpeg,png,gif,svg",
            'competence_requis' => 'required|string',
        ],[
            "title.required"=> "veuiller entrer un titre",
            "title.min"=> "doit contenir au moins 3 caracter",
            "description.required"=> "veuiller entrer une descrition",
            "description.min"=> "doit contenir au moins 3 caracter",
            "location.required"=> "entrer la location",
            "image.required"=> "selectionne une images",
            "image.mimes"=> "un foarmat image correct",
            "competence_requis.required"=>"entrer les competances requis",
        ]);
        $image=$request->file("image");
        $destinationPath='image/';
        $profileimage=date('YmdHis').".".$image->getClientOriginalExtension();
        $image->move($destinationPath, $profileimage);
        $validatedata['image']=$profileimage;

        $validatedata['id_entreprise']=$idEntreprise;

        $validatedata['durer']="cdi";


        // dd($validatedata);

        try{
            $newjob=Emploi::create($validatedata);
            return redirect()->route("entreprisedashboard")->with("succes","offre cree");
        }catch(\Exception $e){
            return redirect()->back()->with("error","erreur l'ors de la creation veiller reessaiyer");
        }


    }

}
