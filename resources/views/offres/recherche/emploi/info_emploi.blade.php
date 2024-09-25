
@extends('layouts.app')

    @section('content')





        <!-- SEARCH BAR -->

            <div class="appointment-form rounded p-5">
                <p class="fs-4 text-uppercase text-primary">Get In Touch</p>
                <h1 class="display-5 mb-4">Trouver votre Avenir</h1>
                <form action="{{ route('search_emploi_request') }}" method="GET">
                    <div class="row gy-3 gx-4">
                        <div class="col-xl-6">
                            <input type="text" name="id_emploi" class="form-control py-3 border-primary bg-transparent text-black" placeholder="Domain">
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



        <!-- end job result -->


    @endsection
