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
    <link rel="shortcut icon" href="{{asset('logo/SB_logo.png')}}" type="image/png">



    {{-- bootstrap select (ajouter par moi meme) --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.14/css/bootstrap-select.min.css">



    <!-- Start CSS -->
    <link href="{{asset('style/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('style/assets/css/icons.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('style/assets/css/style.css')}}" rel="stylesheet" type="text/css">
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
                <!-- Start XP Col -->
                <div class="col-lg-12 ">

                    <!-- Start XP Auth Box -->
                    <div class="xp-auth-box">

                        <div class="card">
                            <div class="card-body">
                                <h3 class="text-center mt-0 m-b-15">
                                    <a href="{{route('home')}}" class="xp-web-logo"><img src="{{ asset('logo/SB_logo.png') }}" height="100" alt="logo"></a>
                                </h3>
                                <div class="p-3">


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


                                    <form action="{{route('handleregisteretudiant')}}" method="POST">
                                        @method('post')
                                        @csrf
                                        <div class="text-center mb-3">
                                            <h4 class="text-black">Creer Un Nouveau Compte Etudiant</h4>
                                            <p class="text-muted">Vous avez deja un compte? <a href="{{route('loginetudiant')}}">Se connecter</a> Ici</p>
                                        </div>
                                        <div class="social-login text-center">
                                            <button type="button" class="btn btn-facebook btn-rounded mb-1"><i class="fa fa-facebook m-r-5"></i> Facebook </button>
                                            <button type="button" class="btn btn-googleplus btn-rounded mb-1"><i class="fa fa-google-plus m-r-5"></i> Google+ </button>
                                        </div>
                                        <div class="login-or">
                                            <h6 class="text-muted">OU</h6>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="user" class="form-control" id="username" placeholder="Nom Utilisteur" value="{{ old('user') }}" required>
                                            @error('user')
                                                <div id="a" class="a">
                                                    {{$message}}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control" id="email" placeholder="Email" value="{{ old('email') }}" required>
                                            @error('email')
                                                <div id="a" class="a">
                                                    {{$message}}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control selectpicker" name="select" title="Etablisssement" data-live-search="true" aria-label="Default select example">
                                                @foreach ($etablissement as $option)
                                                    <option value={{ $option->id_etablissement }}>{{$option->nom_etablissement}}</option>
                                                @endforeach
                                                {{-- <option selected>Etublissement Frequenter</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option> --}}
                                            </select>
                                            @error('select')
                                                <div id="a" class="a">
                                                    {{$message}}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="mot_de_passe" class="form-control" id="password" placeholder="Password" required>
                                            @error('mot_de_passe')
                                                <div id="a" class="a">
                                                    {{$message}}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox">
                                              <input type="checkbox" class="custom-control-input" id="terms">
                                              <label class="custom-control-label" for="terms">J'accepte les Conditions de StageBridge</label>
                                            </div>
                                        </div>
                                      <button type="submit" class="btn btn-primary btn-rounded btn-lg btn-block">Créer le compte</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- End XP Auth Box -->

                </div>
                <!-- End XP Col -->
            </div>
            <!-- End XP Row -->
        </div>
        <!-- End Container -->
    </div>
    <!-- End XP Container -->











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


    {{-- bootstrap select mis par moi --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.14/js/bootstrap-select.min.js"></script>
    <script>
        $(document).ready(function(){
            $(".selectpicker").selectpicker();
        })
    </script>



    <!-- Main JS -->
    <script src="{{asset('style/assets/js/main.js')}}"></script>
    <!-- End JS -->
</body>

<!-- Mirrored from themesbox.in/admin-templates/booster/html/vertical/page-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Jun 2023 10:11:40 GMT -->
</html>
