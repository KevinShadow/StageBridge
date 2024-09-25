@extends('layouts.app_entreprise')

@section('content')
<div class="container py-5">
    <div class="card shadow-lg">
        <div class="card-header bg-primary text-white text-center">
            <h1 class="mb-0">{{ $stage->titre }}</h1>
        </div>
        <div class="card-body">

            <div class="row mb-3">
                <div class="blog-img col-5">
                    <img src="{{asset('image/'.$stage->image)}}" style="width: 100%; height: 250px;" class="img-fluid w-100 h-12" alt="Image">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <p><strong>Domaine:</strong> {{ $stage->domaine }}</p>
                </div>
                <div class="col-md-6">
                    <p><strong>Localisation:</strong> {{ $stage->location }}</p>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <p><strong>Durée:</strong> {{ $stage->durer }}</p>
                </div>
                <div class="col-md-6">
                    <p><strong>Compétences requises:</strong> {{ $stage->competence_requis }}</p>
                </div>
            </div>
            <p><strong>Description:</strong></p>
            <p>{{ $stage->description }}</p>
        </div>
        @auth('etudiant')
            <div class="card-footer text-center">
                <form action="{{ route('postuler', $stage->id_stage) }}" method="POST">
                    @csrf
                    <button class="btn btn-primary rounded-pill text-white py-2 px-4" type="submit">Postuler</button>
                </form>
            </div>
        @endauth
    </div>
</div>
@endsection
