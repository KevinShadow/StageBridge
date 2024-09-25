<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themesbox.in/admin-templates/booster/html/vertical/page-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Jun 2023 10:11:40 GMT -->
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Booster is a bootstrap & laravel admin dashboard template">
    <meta name="keywords" content="admin, admin dashboard, admin panel, admin template, admin theme, bootstrap 4, laravel, crm, analytics, responsive, sass support, ui kits, web app, clean design, creative">
    <meta name="author" content="Themesbox17">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">

    <title>StageBridge</title>

    <!-- Fevicon -->
    <link rel="shortcut icon" href="{{asset('logo/SB_logo.png')}}">

    <!-- Start CSS -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/icons.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css">
    <!-- End CSS -->


    <link rel="stylesheet" href="{{asset('style/err_style.css')}}">

</head>

<body class="xp-vertical">

    <div class="xp-authenticate-bg"></div>
    <!-- Start XP Container -->
    <div id="xp-container" class="xp-container">

        <!-- Start Container -->
        <div class="container">


                       <!-- Start XP Row -->
                <div class="row vh-120 align-items-center">

                    <!-- End XP Col -->
                    <div class="col-lg-12">
                        <div class="card m-b-30">
                            <div class="card-header bg-white">

                                <h3 class="text-center mt-0 m-b-15">
                                    <a href="{{route('home')}}" class="xp-web-logo"><img src="{{ asset('logo/SB_logo.png') }}" height="100" alt="logo"></a>
                                </h3>

                                <div class="text-center mb-3">
                                    <h4 class="text-black">Crée Un Compte Etablissement !</h4>

                                    <p class="text-muted">Vous avez deja un compte? <a href="{{route('loginetablissement')}}">Seconnecter</a> Ici</p>
                                </div>
                                <div class="social-login text-center">
                                    <button type="button" class="btn btn-facebook btn-rounded mb-1"><i class="fa fa-facebook m-r-5"></i> Facebook </button>
                                    <button type="button" class="btn btn-googleplus btn-rounded mb-1"><i class="fa fa-google-plus m-r-5"></i> Google+ </button>
                                </div>
                                <div class="login-or text-center">
                                    <h6 class="text-muted">OU</h6>
                                </div>

                                @if(Session::get('error'))
                                <div id="a" class="a">
                                    {{Session::get('error')}}
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









                            </div>
                            <div class="card-body">
                                <form  id="xp-vertical-form-wizard" action="{{route('handleregisteretablissement')}}" method="POST">
                                    @method('post')
                                    @csrf
                                    <div>
                                        <h3>Information Etablissement</h3>
                                        <section>
                                            <h4 class="mb-3">etablissement</h4>
                                            <div class="form-group">
                                                <label for="verticalusername">Nom de l'etablissement</label>
                                                <input type="text" name="nom_etablissement" class="form-control" value="{{ old('nom_etablissement') }}" id="verticalpassword">
                                                @error('nom_etablissement')
                                                <div id="a" class="a">
                                                    {{$message}}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="verticalusername">numero de l'etablissement</label>
                                                <input type="text" name="numero_etablissement" class="form-control" value="{{ old('numero_etablissement') }}" id="verticalpassword">
                                                @error('numero_etablissement')
                                                <div id="a" class="a">
                                                    {{$message}}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="verticalconfirmPassword">site de l'etablissement</label>
                                                <input type="text" name="site_etablissement" class="form-control" id="verticalconfirmPassword" value="{{ old('site_etablissement') }}">
                                                @error('site_etablissement')
                                                <div id="a" class="a">
                                                    {{$message}}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="verticalusername">email de l'etablissement</label>
                                                <input type="email" name="email_etablissement" class="form-control" id="verticalpassword" value="{{ old('email_etablissement') }}">
                                                @error('email_etablissement')
                                                <div id="a" class="a">
                                                    {{$message}}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="verticalpassword">Password</label>
                                                <input type="password" name="mot_de_passe" class="form-control" id="verticalpassword">
                                                @error('mot_de_passe')
                                                <div id="a" class="a">
                                                    {{$message}}
                                                </div>
                                                @enderror
                                            </div>

                                        </section>
                                        <h3>Gerant Etablissement</h3>
                                        <section>
                                            <h4 class="mb-3">Responsable</h4>
                                            <div class="form-group">
                                                <label for="verticalfirstname">Nom du responsable</label>
                                                <input type="text" name="nom_responsable" class="form-control" value="{{ old('nom_responsable') }}" id="verticalfirstname">
                                                @error('nom_responsable')
                                                <div id="a" class="a">
                                                    {{$message}}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="verticallastname">email du responsable</label>
                                                <input type="email" name="email_responsable" class="form-control" value="{{ old('email_responsable') }}" id="verticallastname">
                                                @error('email_responsable')
                                                <div id="a" class="a">
                                                    {{$message}}
                                                </div>
                                                @enderror
                                            </div>
                                        </section>
                                        {{-- <h3>Hints</h3>
                                        <section>
                                            <h4 class="mb-3">Hints</h4>
                                            <ul>
                                                <li><strong>First Name :</strong> <span id=diplayname></span></li>
                                                <li><strong>Last Name :</strong> <span id=diplayName></span></li>
                                                <li><strong>Email ID :</strong> <span id=diplayEmail></span></li>
                                                <li><strong>Address :</strong> <span id=diplayAdd></span> </li>
                                            </ul>
                                        </section> --}}
                                        <h3>Finition</h3>
                                        <section>
                                            <h4 class="mb-3">Finition</h4>
                                            <div class="custom-control custom-checkbox">
                                              <input type="checkbox" class="custom-control-input" id="verticalacceptTerms">
                                              <label class="custom-control-label" for="verticalacceptTerms">j'accepte les condition de StageBridge.</label>
                                            </div>
                                        </section>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- End XP Col -->

                </div>
                <!-- End XP Row -->

        <!-- End Container -->
    </div>
    <!-- End XP Container -->











    <script>
        function updateDisplay(){
            var name = document.getElementById("name").value;
            document.getElementById("displayname").innertext = name;
        }
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
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/modernizr.min.js')}}"></script>
    <script src="{{asset('assets/js/detect.js')}}"></script>
    <script src="{{asset('assets/js/jquery.slimscroll.js')}}"></script>
    <script src="{{asset('assets/js/sidebar-menu.js')}}"></script>

     <!-- Form Step JS -->
     <script src="{{asset('assets/plugins/jquery-step/jquery.steps.min.js')}}"></script>
     <script src="{{asset('assets/js/init/form-step-init.js')}}"></script>

    <!-- Main JS -->
    <script src="{{asset('assets/js/main.js')}}"></script>
    <!-- End JS -->
</body>

<!-- Mirrored from themesbox.in/admin-templates/booster/html/vertical/page-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Jun 2023 10:11:40 GMT -->
</html>
