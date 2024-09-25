
@extends('layouts.app')
                
                @section('content')

 



                <!-- SEARCH BAR -->
             
                <div class="appointment-form rounded p-5">
                            <p class="fs-4 text-uppercase text-primary">Get In Touch</p>
                            <h1 class="display-5 mb-4">Trouver votre Avenir</h1>
                            <form action="{{ route('cher_job') }}" method="GET">
                                <div class="row gy-3 gx-4">
                                    <div class="col-xl-6">
                                        <input type="text" name="id" class="form-control py-3 border-primary bg-transparent text-black" placeholder="Domain">
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


                <!-- job result -->

                <div class="row">  
                    @if(isset($jobs))
                        <h2>
                            Resultat de la recherche
                        </h2>
                        <ul>
                            @forelse($jobs as $job)
                                <li>
                                    {{$job->title}} - {{$job->location}}- {{$job->created_at}}
                                </li>
                            @empty
                                <li>
                                    Aucun Resultat trouver.
                                </li>
                            @endforelse
                        </ul>


                        @if($suggesionjobs->isNotEmpty())
                            <h2 text-cennter>sugession</h2>
                                Autres Jobs Qui pourais vous interesser
                            </h2>
                            <ul>
                                @foreach($suggesionjobs as $suggestion)
                                    <li>
                                        {{$suggestion->title}} - {{$suggestion->location}}
                                        {{$suggestion->created_at}}
                                    </li>
                                @endforeach
                            </ul>
                        @endif

























                        <!-- contient suggestion -->

                            <!-- @if($autre->isNotEmpty()) -->
                            <div class="row">


                                <h2 text-cennter>autres offres</h2>
                                @foreach($offres as $job)
                                <div class="card text-center">
                                    <div class="card-header">
                                        Featured {{$job->title}}
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">{{$job->title}}</h5>

                                        <div class="row">

                                            <div class="col-3">
                                                    <img src="{{ asset('image/' .$job->image) }}" style="width:400px; height: 200px;" class="img-fluid w-100" alt="Image">
                                            </div>
                                            <div class="col-9 text-center">
                                                {!! nl2br($job->description) !!}
                                            </div>

                                        </div>


                                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                        <a href="{{route('infojobs',$job->id)}}" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-1">Read More</a>
                                        <form action="/jobs/{{$job->id}}/delete" method="post">
                                            @method('delete')
                                            @csrf

                                        <button type="submit" class="btn btn-danger rounded-pill text-white py-2 px-4 mb-1">delet</button>
                                        </form>

                                        @if(auth('etudiant')->check())
                                            <form action="{{ route('job.apply', $job->id) }}" method="POST">
                                                @csrf
                                                <button type="submit" class="btn btn-primary">Postuler</button>
                                            </form>
                                        @else
                                            <a href="{{ route('loginetudiant') }}" class="btn btn-primary">Connectez-vous pour postuler</a>
                                        @endif




























                                    </div>
                                </div>
                                @endforeach







                            </div>
                            <!-- @endif -->

                        <!-- end contien suggestion -->



                    @endif
                </div>










                 
                @endsection


                <!-- end job result -->
