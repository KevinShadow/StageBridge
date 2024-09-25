@extends('layouts.app_etudiant')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">
                    <h1>Modifier le Profil</h1>
                </div>
                <div class="card-body">
                    <form action="{{ route('profil.etudiant.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="nom">Nom</label>
                            <input type="text" name="nom" class="form-control" value="{{ $profil->nom }}" required>
                        </div>

                        <div class="form-group">
                            <label for="prenom">Prénom</label>
                            <input type="text" name="prenom" class="form-control" value="{{ $profil->prenom }}" required>
                        </div>

                        <div class="form-group">
                            <label for="niveau">Niveau</label>
                            <input type="text" name="niveau" class="form-control" value="{{ $profil->niveau }}" required>
                        </div>

                        <div class="form-group">
                            <label for="description">Description des compétences et connaissances</label>
                            <textarea name="description" class="form-control" rows="5" required>{{ $profil->description }}</textarea>
                            @error('description')
                                <div id="a" class="a">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="image">Image de profil</label>
                            <input type="file" name="image" class="form-control-file">
                            @if($profil->image)
                                <div class="mt-2">
                                    <img src="{{ asset('imageProfil/' . $profil->image) }}" class="rounded-circle" alt="Image de profil" style="height: 150px; width: 150px; object-fit: cover;">
                                </div>
                            @endif
                        </div>

                        <button type="submit" class="btn btn-primary mt-3">Enregistrer les modifications</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // Attendre que le document soit prêt
    document.addEventListener('DOMContentLoaded', function() {
        // Sélectionner tous les éléments d'erreur par leur ID
        var errorElements = document.querySelectorAll('#a');

        // Pour chaque élément d'erreur
        errorElements.forEach(function(errorElement) {
            // Masquer l'élément après 5 secondes
            setTimeout(function() {
                errorElement.style.display = 'none';
            }, 3000); // 5000 millisecondes = 5 secondes
        });
    });
</script>
@endsection
