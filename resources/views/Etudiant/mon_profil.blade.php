@extends('layouts.app_etudiant')

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
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">
                    <h1>Profil de l'étudiant</h1>
                </div>
                <div class="card-body text-center">
                    <!-- Affichage de l'image de profil si elle existe -->
                    @if($profil->image)
                        <div class="mb-4">
                            <img src="{{ asset('imageProfil/' . $profil->image) }}" class="rounded-circle" alt="Image de profil" style="height: 150px; width: 150px; object-fit: cover;">
                        </div>
                    @endif
                    <p><strong>Nom:</strong> {{ $profil->nom }}</p>
                    <p><strong>Prénom:</strong> {{ $profil->prenom }}</p>
                    <p><strong>Niveau:</strong> {{ $profil->niveau }}</p>
                    <p><strong>Établissement:</strong> {{ $profil->nom_etablissement }}</p>

                    <!-- Affichage de la description dans une carte défilable -->
                    <div class="card mt-4" style="max-height: 200px; overflow-y: auto;">
                        <div class="card-body">
                            <p><strong>Description:</strong></p>
                            <p>{{ $profil->description }}</p>
                        </div>
                    </div>

                    <!-- Ajoutez d'autres détails du profil à afficher selon vos besoins -->
                    <a href="{{ route('profil.etudiant.edit') }}" class="btn btn-primary mt-3">Modifier le Profil</a>
                </div>
            </div>
        </div>
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
