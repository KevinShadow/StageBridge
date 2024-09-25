<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stage;

use App\Models\Postuler;

use Illuminate\Support\Facades\Auth;


class PostulerController extends Controller
{
    //
    public function postuler($stageId)
    {
        $etudiantId = Auth::guard('etudiant')->user()->id_etudiant;

        // Vérifier si l'étudiant a déjà postulé à cette offre de stage
        $existingApplication = Postuler::where('id_etudiant', $etudiantId)
                                       ->where('id_stage', $stageId)
                                       ->first();

        if ($existingApplication) {
            return redirect()->back()->with('error', 'Vous avez déjà postulé à cette offre de stage.');
        }

        $postuler = Postuler::create([
            'id_etudiant' => $etudiantId,
            'id_stage' => $stageId,
            'status' => 'attente',
        ]);

        return redirect()->back()->with('success', 'Votre demande a été envoyée et est en attente d\'approbation.');
    }
}
