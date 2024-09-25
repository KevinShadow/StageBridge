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

    <!-- Blog Start -->
<div class="container-fluid blog py-5">
    <div class="container py-5">
        <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="sub-style">
                <h4 class="sub-title px-3 mb-0">Vos offres publier</h4>
            </div>
        </div>
        @if ($offres->isEmpty())
            <h1 class="text-danger">Vous n'avez publier aucune offre pour le moment.</h1>
        @else
        <div class="row g-4 justify-content-center">
            @foreach ($offres as $offre)
            <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="blog-item rounded">
                    <div class="blog-img">
                        <img src="{{ asset('image/' . $offre->image) }}" style="width: 100%; height: 250px;" class="img-fluid w-100" alt="Image">
                    </div>
                    <div class="blog-centent p-4">
                        <div class="d-flex justify-content-between mb-4">
                            <p class="mb-0 text-muted"><i class="fa fa-calendar-alt text-primary"></i>{{ $offre->created_at->format('d/F/Y') }}</p>
                        </div>
                        <a href="#" class="h4">{{ $offre->titre }}</a>
                        <p class="h4"> domaine: {{ $offre->domaine }}</p>
                        <p class="my-4" style="height: 200px; overflow: auto;">{{ $offre->description }}</p>
                        <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-1">Voir Plus</a>

                        <!-- Formulaire de suppression -->
                        <form action="{{ route('offres.suprimer', $offre->id_stage) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger rounded-pill text-white py-2 px-4 mb-1" onclick="return confirm('Voulez-vous vraiment supprimer cette offre ?');">Supprimer</button>
                        </form>

                        {{-- bouton modifier --}}
                        <a href="{{ route('modifiermonoffrespublier', $offre->id_stage) }}" class="btn btn-warning">Modifier</a>

                        {{-- bouton liste des postullant --}}
                        <a href="{{ route('showPostulants', $offre->id_stage) }}" class="btn btn-secondary rounded-pill text-white py-2 px-4 mb-1">Voir Postulants</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @endif
    </div>
</div>
<!-- Blog End -->

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
