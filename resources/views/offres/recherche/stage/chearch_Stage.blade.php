
@extends('layouts.app')

                @section('content')





                <!-- SEARCH BAR -->

                <div class="appointment-form rounded p-5">
                            <p class="fs-4 text-uppercase text-primary">Get In Touch</p>
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
                            <h1 class="display-5 mb-4">Trouver votre Avenir</h1>
                            <form action="{{ route('search_stage_request') }}" method="GET">
                                <div class="row gy-3 gx-4">
                                    <div class="col-xl-6">
                                        <input type="text" name="titre" class="form-control py-3 border-primary bg-transparent text-black" placeholder="Domain">
                                    </div>
                                    <div class="col-xl-6">
                                        <input type="text" name="location" class="form-control py-3 border-primary bg-transparent text-black" placeholder="Ville">
                                    </div>
                                    <!-- <div class="col-xl-6">
                                        <input type="phone" class="form-control py-3 border-primary bg-transparent" placeholder="Phone">
                                    </div>
                                    <div class="col-xl-6">
                                        <select class="form-select py-3 border-primary bg-transparent" aria-label="Default select example">
                                            <option selected="">Your Gender</option>
                                            <option value="1">Male</option>
                                            <option value="2">FeMale</option>
                                            <option value="3">Others</option>
                                        </select>
                                    </div>
                                    <div class="col-xl-6">
                                        <input type="date" class="form-control py-3 border-primary bg-transparent">
                                    </div>
                                    <div class="col-xl-6">
                                        <select class="form-select py-3 border-primary bg-transparent" aria-label="Default select example">
                                            <option selected="">Department</option>
                                            <option value="1">Physiotherapy</option>
                                            <option value="2">Physical Helth</option>
                                            <option value="2">Treatments</option>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <textarea class="form-control border-primary bg-transparent text-white" name="text" id="area-text" cols="30" rows="5" placeholder="Write Comments"></textarea>
                                    </div> -->
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary text-white w-100 py-3 px-5">RECHERCHER</button>
                                    </div>
                                </div>
                            </form>
                        </div>



                <!-- END SEARCH BAR -->








                <!-- offres -->






                <!-- Blog Start -->
            <div class="container-fluid blog py-5">
                <div class="container py-5">
                    <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="sub-style">
                            <h4 class="sub-title px-3 mb-0">Resultat de recherche</h4>
                        </div>
                    </div>
                    @if ($stages->isEmpty())
                        <h1 class="text-danger">Aucun resultat</h1>
                    @else
                    <div class="row g-4 justify-content-center">
                        @foreach ($stages as $stage)
                        <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="blog-item rounded">
                                <div class="blog-img">
                                    <img src="{{asset('image/'.$stage->image)}}" style="width: 100%; height: 250px;" class="img-fluid w-100" alt="Image">
                                </div>
                                <div class="blog-centent p-4">
                                    <div class="d-flex justify-content-between mb-4">
                                        <p class="mb-0 text-muted"><i class="fa fa-calendar-alt text-primary"></i>{{ $stage->created_at->format('d/F/Y') }}</p>
                                        {{-- <a href="#" class="text-muted"><span class="fa fa-comments text-primary"></span> 3 Comments</a> --}}
                                    </div>
                                    <a href="#" class="h4">{{ $stage->titre }}</a>
                                    <p class="my-4" style="height: 200px; overflow: auto;">{{ $stage->description }}</p>
                                    <a href="{{ route('offres.show', $stage->id_stage) }}" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-1">Lire Plus</a>
                                    @auth('etudiant')
                                    <form class="py-2 px-4 mb-1" action="{{ route('postuler', $stage->id_stage) }}" method="POST">
                                        @csrf
                                        <button class="btn btn-primary rounded-pill text-white py-2 px-4 mb-1" type="submit">Postuler</button>
                                    </form>
                                    @endauth
                                    @auth('etablissement')
                                    <form class="py-2 px-4 mb-1" action="" method="POST">
                                        @csrf
                                        <button class="btn btn-primary rounded-pill text-white py-2 px-4 mb-1" type="submit">Proposer a un etudiant</button>
                                    </form>
                                    @endauth
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                    @endif
                </div>
            </div>
            <!-- Blog End -->



            <!-- Blog Start -->
            <div class="container-fluid blog py-5">
                <div class="container py-5">
                    <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="sub-style">
                            <h4 class="sub-title px-3 mb-0">quelques Suggestion</h4>
                        </div>
                    </div>
                    @if ($suggestions->isEmpty())
                        <h1 class="text-danger">Aucun resultat</h1>
                    @else
                    <div class="row g-4 justify-content-center">
                        @foreach ($suggestions as $suggestion)
                        <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="blog-item rounded">
                                <div class="blog-img">
                                    <img src="{{asset('image/'.$suggestion->image)}}" style="width: 100%; height: 250px;" class="img-fluid w-100" alt="Image">
                                </div>
                                <div class="blog-centent p-4">
                                    <div class="d-flex justify-content-between mb-4">
                                        <p class="mb-0 text-muted"><i class="fa fa-calendar-alt text-primary"></i>{{ $suggestion->created_at->format('d/F/Y') }}</p>
                                        {{-- <a href="#" class="text-muted"><span class="fa fa-comments text-primary"></span> 3 Comments</a> --}}
                                    </div>
                                    <a href="#" class="h4">{{ $suggestion->titre }}</a>
                                    <p class="my-4" style="height: 200px; overflow: auto;">{{ $suggestion->description }}</p>
                                    <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-1">Read More</a>
                                    @auth('etudiant')
                                    <form class="py-2 px-4 mb-1" action="{{ route('postuler', $suggestion->id_stage) }}" method="POST">
                                        @csrf
                                        <button class="btn btn-primary rounded-pill text-white py-2 px-4 mb-1" type="submit">Postuler</button>
                                    </form>
                                    @endauth
                                    @auth('etablissement')
                                    <form class="py-2 px-4 mb-1" action="" method="POST">
                                        @csrf
                                        <button class="btn btn-primary rounded-pill text-white py-2 px-4 mb-1" type="submit">Proposer a un etudiant</button>
                                    </form>
                                    @endauth
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                    @endif
                </div>
            </div>
            <!-- Blog End -->










                <!-- end offre -->











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


