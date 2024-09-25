@extends('layouts.app_entreprise')

@section('content')

@if (session('success'))
    <div class="alert alert-success text-center" id="success-message">
        {{ session('success') }}
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger text-center" id="error-message">
        {{ session('error') }}
    </div>
@endif

<div class="container-fluid blog py-5">
    <div class="container py-5">
        <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="sub-style">
                <h4 class="sub-title px-3 mb-0">Postulants pour l'offre: {{ $offre->titre }}</h4>
            </div>
        </div>

        <h3 class="mb-4 text-center">Postulants en attente</h3>
        @if ($postulantsEnAttente->isEmpty())
            <p class="text-muted">Aucun postulant en attente.</p>
        @else
            <ul class="list-group mb-5">
                @foreach ($postulantsEnAttente as $postulant)
                {{-- {{ dd($postulant->profil) }} --}}
                    <li class="list-group-item">
                        <div class="media">
                            {{-- <img class="mr-3 rounded-circle" src="{{ asset('imageProfil/' . $postulant->profil->image) }}" alt="Image de profil" style="height: 100px; width: 100px; object-fit: cover;"> --}}
                            <img class="mr-3 rounded-circle"
     src="{{ isset($postulant->profil->image) ? asset('imageProfil/' . $postulant->profil->image) : asset('style/assets/images/topbar/user.jpg') }}"
     alt="Image de profil"
     style="height: 100px; width: 100px; object-fit: cover;">
                            <div class="media-body">
                                <h5 class="mt-0">{{ $postulant->profil->nom }} {{ $postulant->profil->prenom }}</h5>
                                <p><strong>Niveau:</strong> {{ $postulant->profil->niveau }}</p>
                                <p><strong>Établissement:</strong> {{ $postulant->profil->nom_etablissement }}</p>
                                <div class="card mt-2" style="max-height: 100px; overflow-y: auto;">
                                    <div class="card-body">
                                        <p><strong>Description:</strong> {{ $postulant->profil->description }}</p>
                                    </div>
                                </div>



                                 <!-- Affichage de l'avis si disponible -->
                                 @if ($postulant->postulers->first()->avis)
                                 @foreach ($postulant->postulers->first()->avis as $avis)
                                     <div class="alert alert-info mt-3">
                                         <p><strong>Avis de l'établissement:</strong> {{ $avis->message }}</p>
                                     </div>
                                 @endforeach
                                @endif



                                <div class="row">
                                    <form action="{{ route('offre.approuverPostulant', ['offre' => $offre->id_stage, 'postulant' => $postulant->id_etudiant]) }}" method="POST" class="col-4">
                                        @csrf
                                        <button type="submit" class="btn btn-primary mt-5 col-12">Recruter</button>
                                    </form>
                                    <form action="{{ route('offre.demanderAvisPostulant', ['offre' => $offre->id_stage, 'postulant' => $postulant->id_etudiant]) }}" method="POST" class="col-4">
                                        @csrf
                                        <button type="submit" class="btn btn-secondary mt-5 col-12">Demander avis</button>
                                    </form>
                                    <form action="{{ route('offre.rejeterPostulant', ['offre' => $offre->id_stage, 'postulant' => $postulant->id_etudiant]) }}" method="POST" class="col-4">
                                        @csrf
                                        <button type="submit" class="btn btn-danger mt-5 col-12">Rejeter</button>
                                    </form>
                                    {{-- <a href="{{ route('offre.demanderAvis', ['offre' => $offre->id_stage, 'postulant' => $postulant->id_etudiant]) }}" class="btn btn-secondary mt-5 col-4">Demander avis</a> --}}
                                    {{-- <a href="{{ route('offre.rejeterPostulant', ['offre' => $offre->id_stage, 'postulant' => $postulant->id_etudiant]) }}" class="btn btn-danger mt-5 col-4">Rejeter</a> --}}
                                    {{-- <a href="" class="btn btn-primary mt-5 col-4">recruter</a> --}}
                                    {{-- <a href="" class="btn btn-secondary mt-5 col-4">demander avis</a> --}}
                                    {{-- <a href="" class="btn btn-danger mt-5 col-4">rejeter</a> --}}
                                </div>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        @endif

        <h3 class="mb-4 text-center">Postulants validés</h3>
        @if ($postulantsValides->isEmpty())
            <p class="text-muted">Aucun postulant validé.</p>
        @else
            <ul class="list-group">
                @foreach ($postulantsValides as $postulant)
                    <li class="list-group-item">
                        <div class="media">
                            {{-- <img class="mr-3 rounded-circle" src="{{ asset('imageProfil/' . $postulant->profil->image) }}" alt="Image de profil" style="height: 100px; width: 100px; object-fit: cover;"> --}}
                            <img class="mr-3 rounded-circle"
     src="{{ isset($postulant->profil->image) ? asset('imageProfil/' . $postulant->profil->image) : asset('style/assets/images/topbar/user.jpg') }}"
     alt="Image de profil"
     style="height: 100px; width: 100px; object-fit: cover;">
                            <div class="media-body">
                                <h5 class="mt-0">{{ $postulant->profil->nom }} {{ $postulant->profil->prenom }}</h5>
                                <p><strong>Niveau:</strong> {{ $postulant->profil->niveau }}</p>
                                <p><strong>Établissement:</strong> {{ $postulant->profil->nom_etablissement }}</p>
                                <div class="card mt-2" style="max-height: 100px; overflow-y: auto;">
                                    <div class="card-body">
                                        <p><strong>Description:</strong> {{ $postulant->profil->description }}</p>
                                    </div>
                                </div>



                                 <!-- Affichage de l'avis si disponible -->
                                 @if ($postulant->postulers->first()->avis)
                                 @foreach ($postulant->postulers->first()->avis as $avis)
                                     <div class="alert alert-info mt-3">
                                         <p><strong>Avis de l'établissement:</strong> {{ $avis->message }}</p>
                                     </div>
                                 @endforeach
                             @endif





                                <div class="row">
                                    <form action="{{ route('offre.rejeterPostulant', ['offre' => $offre->id_stage, 'postulant' => $postulant->id_etudiant]) }}" method="POST" class="col-4">
                                        @csrf
                                        <button type="submit" class="btn btn-danger mt-5 col-4">Rejeter</button>
                                    </form>
                                    {{-- <a href="" class="btn btn-primary mt-5 col-4">recruter</a> --}}
                                    {{-- <a href="" class="btn btn-secondary mt-5 col-4">demander avis</a> --}}
                                    {{-- <a href="" class="btn btn-danger mt-5 col-4">rejeter</a> --}}
                                </div>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        @endif

        <h3 class="mb-4 text-center">Postulants rejetés</h3>
        @if ($postulantsRejeter->isEmpty())
            <p class="text-muted">Aucun postulant rejeté.</p>
        @else
            <ul class="list-group">
                @foreach ($postulantsRejeter as $postulant)
                    <li class="list-group-item">
                        <div class="media">
                            {{-- <img class="mr-3 rounded-circle" src="{{ asset('imageProfil/' . $postulant->profil->image) }}" alt="Image de profil" style="height: 100px; width: 100px; object-fit: cover;"> --}}
                            <img class="mr-3 rounded-circle"
     src="{{ isset($postulant->profil->image) ? asset('imageProfil/' . $postulant->profil->image) : asset('style/assets/images/topbar/user.jpg') }}"
     alt="Image de profil"
     style="height: 100px; width: 100px; object-fit: cover;">
                            <div class="media-body">
                                <h5 class="mt-0">{{ $postulant->profil->nom }} {{ $postulant->profil->prenom }}</h5>
                                <p><strong>Niveau:</strong> {{ $postulant->profil->niveau }}</p>
                                <p><strong>Établissement:</strong> {{ $postulant->profil->nom_etablissement }}</p>
                                <div class="card mt-2" style="max-height: 100px; overflow-y: auto;">
                                    <div class="card-body">
                                        <p><strong>Description:</strong> {{ $postulant->profil->description }}</p>
                                    </div>
                                </div>

                                 <!-- Affichage de l'avis si disponible -->
                                 @if ($postulant->postulers->first()->avis)
                                 @foreach ($postulant->postulers->first()->avis as $avis)
                                     <div class="alert alert-info mt-3">
                                         <p><strong>Avis de l'établissement:</strong> {{ $avis->message }}</p>
                                     </div>
                                 @endforeach
                             @endif


                                <div class="row">
                                    <form action="{{ route('offre.approuverPostulant', ['offre' => $offre->id_stage, 'postulant' => $postulant->id_etudiant]) }}" method="POST" class="col-4">
                                        @csrf
                                        <button type="submit" class="btn btn-primary mt-5 col-4">Recruter</button>
                                    </form>
                                    <form action="{{ route('offre.demanderAvisPostulant', ['offre' => $offre->id_stage, 'postulant' => $postulant->id_etudiant]) }}" method="POST" class="col-4">
                                        @csrf
                                        <button type="submit" class="btn btn-secondary mt-5 col-4">Demander avis</button>
                                    </form>
                                    {{-- <a href="" class="btn btn-primary mt-5 col-4">recruter</a>
                                    <a href="" class="btn btn-secondary mt-5 col-4">demander avis</a> --}}
                                </div>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        @endif

        <a href="{{ route('entreprisedashboard') }}" class="btn btn-primary mt-5">Retour</a>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        setTimeout(function() {
            let successMessage = document.getElementById('success-message');
            let errorMessage = document.getElementById('error-message');
            if (successMessage) {
                successMessage.style.display = 'none';
            }
            if (errorMessage) {
                errorMessage.style.display = 'none';
            }
        }, 10000); // 10000 ms = 10 seconds
    });
</script>

@endsection
