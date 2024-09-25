@extends('layouts.app_etudiant')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header text-center bg-primary text-white">
                    <h1>Créer le Profil</h1>
                </div>
                <div class="card-body">
                    <form action="{{ route('profil.etudiant.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group mb-3">
                            <label for="nom" class="form-label">Nom</label>
                            <input type="text" name="nom" class="form-control" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="prenom" class="form-label">Prénom</label>
                            <input type="text" name="prenom" class="form-control" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="niveau" class="form-label">Niveau</label>
                            <input type="text" name="niveau" class="form-control" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="description" class="form-label">Description des compétences et connaissances</label>
                            <textarea name="description" class="form-control" rows="5" required></textarea>
                        </div>

                        <div class="form-group mb-3">
                            <label for="image" class="form-label">Image de profil</label>
                            <input type="file" name="image" class="form-control-file">
                        </div>

                        <button type="submit" class="btn btn-primary mt-3">Créer le Profil</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
