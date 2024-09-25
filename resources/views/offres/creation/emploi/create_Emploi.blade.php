<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themesbox.in/admin-templates/booster/html/vertical/page-starter.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Jun 2023 10:11:45 GMT -->
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Booster is a bootstrap & laravel admin dashboard template">
    <meta name="keywords" content="admin, admin dashboard, admin panel, admin template, admin theme, bootstrap 4, laravel, crm, analytics, responsive, sass support, ui kits, web app, clean design, creative">
    <meta name="author" content="Themesbox17">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">

    <title>Booster - Bootstrap + Laravel Admin Dashboard Template</title>

    <!-- Fevicon -->
    <link rel="shortcut icon" href="{{asset('style/assets/images/favicon.ico')}}">

    <!-- Start CSS -->
    <!-- Summernote CSS -->
    <link href="{{asset('style/assets/plugins/summernote/summernote-bs4.css')}}" rel="stylesheet" />


    <link href="{{asset('style/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('style/assets/css/icons.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('style/assets/css/style.css')}}" rel="stylesheet" type="text/css">
    <!-- End CSS -->

</head>

<body class="xp-vertical">

    <!-- Start XP Container -->
    <div id="xp-container ">






            <!-- Start XP Breadcrumbbar -->
            <div class="xp-breadcrumbbar text-center">
                <h4 class="page-title">Creer une offre d'emploi</h4>
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">HOME</a></li>
                    <!-- <li class="breadcrumb-item"><a href="#">Extra Pages</a></li> -->
                    <li class="breadcrumb-item active" aria-current="page">Add Jobs</li>
                  </ol>
            </div>
            <!-- End XP Breadcrumbbar -->

            <!-- Start XP Contentbar -->
            <div class="xp-contentbar">
                <!-- Write page content code here -->

                {{-- <!-- Start XP Row -->
                <div class="row">

                    <!-- Start XP Col -->
                    <div class="col-md-12 col-lg-12 col-xl-12">
                        <div class="text-center mt-3 mb-5">
                            <h4>Page Title</h4>
                        </div>
                    </div>
                    <!-- End XP Col -->

                </div>
                <!-- End XP Row --> --}}



                <div class="col-lg-12">
                        <div class="card m-b-30">

                            <div class="card-header bg-white text-center">
                                <h3 class="text-center mt-0 m-b-15">
                                    <a href="{{route('entreprisedashboard')}}" class="xp-web-logo"><img src="assets/images/logo.svg" height="40" alt="logo"></a>
                                </h3>
                                <h5 class="card-title text-black">creation d'une offre d'emploi</h5>
                                <h6 class="card-subtitle">Veiller entrer correctemrnt tout les champs.</h6>
                            </div>

                            <div class="card-body">

                                @if(Session::get('error'))
                                <div id="a" class="a">
                                    {{Session::get('error')}}
                                </div>
                                @endif
                                @if(Session::get('success'))
                                <div id="a" class="a">
                                    {{Session::get('success')}}
                                </div>
                                @endif

                                @if ($errors->any())
                                    <div id="a">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif


                                <form class="xp-form-validate" action="{{route('postnewemploipost')}}" method="post" novalidate="novalidate" enctype="multipart/form-data">
                                        @method('post')
                                        @csrf
                                    <div class="form-group row is-invalid">
                                        <label class="col-lg-3 col-form-label" for="val-username">Titre de l'Offre <span class="text-danger">*</span></label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="val-username" name="titre" placeholder="Enter a username.." aria-required="true" aria-describedby="val-username-error">
                                        <div id="val-username-error" class="invalid-feedback animated fadeInDown" style="display: block;">Entrer le titre</div>
                                            @error('titre')
                                                <div id="a" class="a">
                                                    {{$message}}
                                                </div>
                                            @enderror</div>
                                    </div>


                                    <div class="form-group row is-invalid">
                                        <label class="col-lg-3 col-form-label" for="val-suggestions">Description de l'Offres <span class="text-danger">*</span></label>
                                        <div class="col-lg-6">
                                            <textarea class="form-control" id="val-suggestions" name="description" rows="5" placeholder="qu'est ce que vous attender des postulants?" aria-required="true" aria-describedby="val-suggestions-error" aria-invalid="true"></textarea>
                                        <div id="val-suggestions-error" class="invalid-feedback animated fadeInDown" style="display: block;">decriver l'ooffres et les mission de l'offre ?</div>
                                            @error('description')
                                                <div id="a" class="a">
                                                    {{$message}}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>



                                    <div class="form-group row is-invalid">
                                        <label class="col-lg-3 col-form-label" for="val-suggestions">Compétence <span class="text-danger">*</span></label>
                                        <div class="col-lg-6">
                                            <textarea class="form-control" id="val-suggestions" name="competence_requis" rows="5" placeholder="-competence 1 " aria-required="true" aria-describedby="val-suggestions-error" aria-invalid="true"></textarea>
                                        <div id="val-suggestions-error" class="invalid-feedback animated fadeInDown" style="display: block;">compétence attendu pour l'offre (sous fore de tiret)</div>
                                            @error('competence_requis')
                                                <div id="a" class="a">
                                                    {{$message}}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>




                                    <div class="form-group row is-invalid">
                                        <label class="col-lg-3 col-form-label" for="val-number">Image de l'Offre <span class="text-danger">*</span></label>
                                        <div class="col-lg-6">
                                            <input type="file" class="form-control"  name="image" id="validatedCustomFile" placeholder="Choose file..." aria-required="true" required="">
                                           @error('image')
                                                <div id="a" class="a">
                                                    {{$message}}
                                                </div>
                                            @enderror
                                        </div>
                                   </div>




                                   <div class="form-group row is-invalid">
                                        <label class="col-lg-3 col-form-label" for="val-username">location<span class="text-danger">*</span></label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="val-username" name="location" placeholder="aadresse..." aria-required="true" aria-describedby="val-username-error">
                                        <div id="val-username-error" class="invalid-feedback animated fadeInDown" style="display: block;">entrer l'adresse pour l'offres</div>
                                            @error('location')
                                                <div id="a" class="a">
                                                    {{$message}}
                                                </div>
                                            @enderror
                                    </div>
                                    </div>
                                    @if(auth('entreprise')->check())
                                    <input type="hidden" name="id_entreprise" value="{{ auth('entreprise')->user()->id_entreprise }}">
                                    @endif

                                    <div class="form-group row">
                                        <label class="col-lg-6 col-form-label" for="val-username"></label>
                                        <div class="col-lg-6">
                                            <button type="submit" class="btn btn-primary col-lg-6">Submit</button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>






            </div>
            <!-- End XP Contentbar -->

            <!-- Start XP Footerbar -->
            <div class="row-primary">

                <footer class="footer text-center">
                    <p class="mb-0 text-center">© 2024  - All Rights Reserved.</p>
                </footer>


            </div>
            <!-- End XP Footerbar -->


    </div>
    <!-- End XP Container -->

    {{-- aficher les erreu pendant 5 secondes --}}
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





    <!-- Start JS -->
    <script src="{{asset('style/assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('style/assets/js/popper.min.js')}}"></script>
    <script src="{{asset('style/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('style/assets/js/modernizr.min.js')}}"></script>
    <script src="{{asset('style/assets/js/detect.js')}}"></script>
    <script src="{{asset('style/assets/js/jquery.slimscroll.js')}}"></script>
    <script src="{{asset('style/assets/js/sidebar-menu.js')}}"></script>

    <!-- Main JS -->
    <script src="{{asset('style/assets/js/main.js')}}"></script>
    <!-- End JS -->

</body>

<!-- Mirrored from themesbox.in/admin-templates/booster/html/vertical/page-starter.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Jun 2023 10:11:45 GMT -->
</html>
