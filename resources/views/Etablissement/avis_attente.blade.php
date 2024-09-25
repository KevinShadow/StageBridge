@extends('layouts.app_etablissement')

@section('content')

<div class="container py-5">
    <div class="section-title mb-5">
        <h2 class="text-center">Demandes d'avis</h2>
    </div>

    @if ($avis->isEmpty())
        <div class="alert alert-info" role="alert">
            Aucune demande d'avis en attente.
        </div>
    @else
        <div class="row">
            @foreach ($avis as $avisItem)
                <div class="col-md-6">
                    <div class="card mb-4 shadow-sm">
                        <div class="card-body">
                            @if ($avisItem->postuler && $avisItem->postuler->stage)
                                <h5 class="card-title">{{ $avisItem->postuler->stage->titre }}</h5>
                                <p class="card-text"><strong>Domaine :</strong> {{ $avisItem->postuler->stage->domaine }}</p>
                                <p class="card-text"><strong>Description :</strong> {{ $avisItem->postuler->stage->description }}</p>
                                <p class="card-text"><strong>Compétences requises :</strong> {{ $avisItem->postuler->stage->competence_requise }}</p>
                            @else
                                <h5 class="card-title">Demande d'avis</h5>
                            @endif
                            @if ($avisItem->postuler && $avisItem->postuler->etudiant && $avisItem->postuler->etudiant->profil)
                                <div class="d-flex align-items-center mb-3">
                                    <div class="mr-3">
                                        @if ($avisItem->postuler->etudiant->profil->image)
                                            <img src="{{ asset('imageProfil/' . $avisItem->postuler->etudiant->profil->image) }}" class="img-fluid rounded-circle" style="max-width: 80px; height: 50px;" alt="Photo de profil">
                                        @else
                                            <img src="{{ asset('imageProfil/default.jpg') }}" class="img-fluid rounded-circle" style="max-width: 80px;" alt="Photo de profil par défaut">
                                        @endif
                                    </div>
                                    <div>
                                        <p class="mb-1"><strong>Étudiant :</strong> {{ $avisItem->postuler->etudiant->profil->prenom }} {{ $avisItem->postuler->etudiant->profil->nom }}</p>
                                        <p class="mb-0"><strong>Niveau :</strong> {{ $avisItem->postuler->etudiant->profil->niveau }}</p>
                                    </div>
                                </div>
                            @endif
                            <hr>
                            <p class="card-text"><strong>Status :</strong> {{ $avisItem->status }}</p>
                            <p class="card-text"><strong>Message :</strong><br> {{ $avisItem->message ?? 'Aucun message.' }}</p>

                            <form action="{{ route('repondreavis', ['avis' => $avisItem->id_avis]) }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="avis_message">Votre avis :</label>
                                    <textarea class="form-control" id="avis_message" name="avis_message" rows="3" placeholder="Écrivez votre avis ici..."></textarea>
                                </div>
                                <div class="btn-group" role="group" aria-label="Actions">
                                    <input type="hidden" name="avis_status" value="favorable"> <!-- Statut par défaut -->
                                    <button type="submit" class="btn btn-success mr-2" onclick="document.getElementsByName('avis_status')[0].value = 'favorable'">Favorable</button>
                                    <button type="submit" class="btn btn-danger" onclick="document.getElementsByName('avis_status')[0].value = 'défavorable'">Défavorable</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif

    <a href="{{ route('etablissementdashboard') }}" class="btn btn-primary">Retour au dashboard</a>
</div>

@endsection
