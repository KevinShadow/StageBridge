<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ReturnPage;
use App\Http\Controllers\EtablissementController;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\EntrepriseController;
use App\Http\Controllers\EmploiController;
use App\Http\controllers\StageController;
use App\Http\controllers\PostulerController;
use App\Http\controllers\ProfilEtudiantController;






// Route::get('/', function () {
//     return view('welcome');
// });

Route::get("/", [ReturnPage::class,"return_home_page"])->name("home");

Route::get("/home/register/etudiant", [ReturnPage::class,"return_registerEtudiant_page"])->name("registeretudiant");
Route::get("/home/register/entreprise", [ReturnPage::class,"return_registerEntreprise_page"])->name("registerentreprise");
Route::get("/home/register/etablissement", [ReturnPage::class,"return_registerEtablissement_page"])->name("registeretablissement");

Route::get("/home/etudiant/postuller", [ReturnPage::class,"return_offrespostuler_page"])->name("mesoffrespostuler");

Route::delete('/postuler/{id_stage}', [ReturnPage::class, 'nePlusPostuler'])->name('nepluspostuler');


//affiche offre publier par entreprise
Route::get("/home/dashboard/entreprise/offres-publier", [ReturnPage::class, "return_mesoffrespublier_page"])->name("mesoffrespublier");
//suprime une offre publier par entreprise
Route::delete("home/entreprise/offres-publiees/{id}", [StageController::class, 'suprimer_offre'])->name('offres.suprimer');
//afficher formulaire mmodifier offre de stage
Route::get("/home/dashboard/entreprise/modifier-offres-publier/{id}/edit", [ReturnPage::class, "return_modifiermonoffrespublier_page"])->name("modifiermonoffrespublier");
//route pou gerer la modification
Route::put("/home/dashboard/entreprise/modifier-offres-publier/post/{id}", [StageController::class, "modifier_offre"])->name("offre.modifier");
// postulant a une offre
Route::get('/offre/{id}/postulants', [StageController::class, 'showPostulants'])->name('showPostulants');

Route::post('/offre/{offre}/postulant/{postulant}/approuver', [StageController::class, 'approuverPostulant'])->name('offre.approuverPostulant');
Route::post('/offre/{offre}/postulant/{postulant}/demanderAvis', [StageController::class, 'demanderAvisPostulant'])->name('offre.demanderAvisPostulant');
Route::post('/offre/{offre}/postulant/{postulant}/rejeter', [StageController::class, 'rejeterPostulant'])->name('offre.rejeterPostulant');

// lire plus des stages
Route::get('/offres/{id}', [StageController::class, 'show_detail'])->name('offres.show');

// page des demande avis etablissement
Route::get("/home/dashboard/etablissement/demande-avis", [ReturnPage::class, "return_avisdemanderattente_page"])->name("avisdemander");

Route::post("/home/dashboard/etablissement/donner-avis{avis}", [EtablissementController::class, "repondreAvis"])->name("repondreavis");




// profil etudiant

Route::get('/mon-profil', [ProfilEtudiantController::class, 'show'])->name('profil.etudiant');

Route::get('/mon-profil/create', [ProfilEtudiantController::class, 'create'])->name('profil.etudiant.create');


Route::get('/mon-profil/edit', [ProfilEtudiantController::class, 'edit'])->name('profil.etudiant.edit');
Route::put('/mon-profil/update', [ProfilEtudiantController::class, 'update'])->name('profil.etudiant.update');


Route::post('/mon-profil/store', [ProfilEtudiantController::class, 'store'])->name('profil.etudiant.store');



Route::post("/home/register/etudiants", [EtudiantController::class,"handle_registerEtudiant_page"])->name("handleregisteretudiant");
Route::post("/home/register/entreprises", [EntrepriseController::class,"handle_registerEntreprise_page"])->name("handleregisterentreprise");
Route::post("/home/register/etablissements", [EtablissementController::class,"handle_registerEtablissement_page"])->name("handleregisteretablissement");



Route::get("/home/login/etudiant", [ReturnPage::class,"return_loginEtudiant_page"])->name("loginetudiant");
Route::get("/home/login/entreprise", [ReturnPage::class,"return_loginEntreprise_page"])->name("loginentreprise");
Route::get("/home/login/etablissement", [ReturnPage::class,"return_loginEtablisssement_page"])->name("loginetablissement");

Route::post("/home/login/etudiants", [EtudiantController::class,"connect_etudiant"])->name("handleloginetudiant");
Route::post("/home/login/entreprises", [EntrepriseController::class,"connect_entreprise"])->name("handleloginentreprise");
Route::post("/home/login/etablissements", [EtablissementController::class,"connect_etablissement"])->name("handleloginetablissement");


Route::fallback(function () {
    return response()->view('erreur.404', [], 404);
});

Route::middleware('etudiant')->group(function () {
    Route::get("/home/etudiant/dashboard", [ReturnPage::class,"return_EtudiantDashboard_page"])->name("etudiantdashboard");

});

Route::middleware('entreprise')->group(function () {
    Route::get("/home/entreprise/dashboard", [ReturnPage::class,"return_EntrepriseDashboard_page"])->name("entreprisedashboard");
});

Route::middleware('etablissement')->group(function () {
    Route::get("/home/etablissement/dashboard", [ReturnPage::class,"return_EtablissementDashboard_page"])->name("etablissementdashboard");
});





Route::get('/home/entreprise/dashboard/create/emploi', [EmploiController::class, 'create_emploi'])->name('creeremploi');
Route::post('/postnewjobs', [EmploiController::class, 'post_emploi'])->name('postnewemploipost');

Route::get('/home/recherche', [EmploiController::class, 'search_emploi'])->name('search_emploi');

Route::get('/home/search/request', [EmploiController::class, 'search_emploi_request'])->name('search_emploi_request');


Route::get('/home/entreprise/dashboard/create/stage/academique', [StageController::class, 'create_stage'])->name('creerstage');
Route::post('/postnewstage', [StageController::class, 'post_stage'])->name('postnewstagepost');

Route::get('/home/recherche/stage', [StageController::class, 'search_stage'])->name('search_stage');

Route::get('/home/search/request/stage', [StageController::class, 'search_stage_request'])->name('search_stage_request');


Route::post('/postuler/{stage}', [PostulerController::class, 'postuler'])->name('postuler');
// ->middleware('auth')


Route::get('/logout', [ReturnPage::class, 'disconnect'])->name('disconnect');
Route::get('/diconnect/etudiant', [ReturnPage::class, 'disconnect_etudiant'])->name('disconnect_etudiant');
Route::get('/diconnect/entreprise', [ReturnPage::class, 'disconnect_entreprise'])->name('disconnect_entreprise');
Route::get('/diconnect/etablissement', [ReturnPage::class, 'disconnect_etablissement'])->name('disconnect_etablissement');

