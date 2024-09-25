<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="StageBridge">
    <meta name="keywords" content="admin, admin dashboard, admin panel, admin template, admin theme, bootstrap 4, laravel, crm, analytics, responsive, sass support, ui kits, web app, clean design, creative">
    <meta name="author" content="Themesbox17">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>StageBridge</title>
    <!-- Fevicon -->
    <link rel="shortcut icon" href="{{asset('logo/SB_logo.png')}}">
    <!-- Start CSS -->
    <link href="{{asset('style/assets/plugins/summernote/summernote-bs4.css')}}" rel="stylesheet" />
    <link href="{{asset('style/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('style/assets/css/icons.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('style/assets/css/style.css')}}" rel="stylesheet" type="text/css">
    <!-- End CSS -->
</head>
<body class="xp-vertical">
    <div id="xp-container">
        <!-- Start XP Breadcrumbbar -->
        <div class="xp-breadcrumbbar text-center">
            <h4 class="page-title">Créer une offre de stage</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}">HOME</a></li>
                <li class="breadcrumb-item active" aria-current="page">Stage Académique</li>
            </ol>
        </div>
        <!-- End XP Breadcrumbbar -->

        <!-- Start XP Contentbar -->
        <div class="xp-contentbar">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card shadow-sm">
                        <div class="card-header bg-primary text-white text-center">
                            <h3 class="text-center mt-0 m-b-15">
                                <a href="{{route('entreprisedashboard')}}" class="xp-web-logo"><img class="col-2" src="{{asset('logo/SB_logo.png')}}" height="40" alt="logo"></a>
                            </h3>
                            <h3>Création de Stage Académique</h3>
                            <h6>Veuillez entrer correctement tous les champs (tous les champs sont obligatoires).</h6>
                        </div>
                        <div class="card-body">
                            @if(Session::get('error'))
                                <div class="alert alert-danger">
                                    {{Session::get('error')}}
                                </div>
                            @endif
                            @if(Session::get('success'))
                                <div class="alert alert-success">
                                    {{Session::get('success')}}
                                </div>
                            @endif
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form action="{{route('postnewstagepost')}}" method="post" enctype="multipart/form-data">
                                @method('post')
                                @csrf
                                <div class="form-group">
                                    <label for="titre">Titre de l'Offre <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="titre" name="titre" placeholder="Entrer le titre" value="{{ old('titre') }}" required>
                                    @error('titre')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="domaine">Domaine de l'Offre <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="domaine" name="domaine" placeholder="Entrer le domaine" value="{{ old('domaine') }}" required>
                                    @error('domaine')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="description">Description de l'Offre <span class="text-danger">*</span></label>
                                    <textarea class="form-control" id="description" name="description" rows="5" placeholder="Qu'est-ce que vous attendez des postulants ?" required>{{ old('description') }}</textarea>
                                    @error('description')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="competence_requis">Compétences <span class="text-danger">*</span></label>
                                    <textarea class="form-control" id="competence_requis" name="competence_requis" rows="5" placeholder="Compétences attendues (sous forme de tirets)" required>{{ old('competence_requis') }}</textarea>
                                    @error('competence_requis')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="image">Image de l'Offre <span class="text-danger">*</span></label>
                                    <input type="file" class="form-control-file" id="image" name="image" required>
                                    @error('image')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="fichier">Objet de Stage <span class="text-danger">*</span></label>
                                    <input type="file" class="form-control-file" id="fichier" name="fichier" required>
                                    @error('fichier')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="location">Location <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="location" name="location" placeholder="Adresse" value="{{ old('location') }}" required>
                                    @error('location')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                @if(auth('entreprise')->check())
                                    <input type="hidden" name="id_entreprise" value="{{ auth('entreprise')->user()->id_entreprise }}">
                                @endif
                                <div class="form-group text-center">
                                    <button type="submit" class="btn btn-primary">Soumettre</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Contentbar -->
        <!-- Start XP Footerbar -->
        <footer class="footer text-center mt-4">
            <p class="mb-0">© 2024 - All Rights Reserved.</p>
        </footer>
        <!-- End XP Footerbar -->
    </div>
    <!-- End XP Container -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var errorElements = document.querySelectorAll('.alert');
            errorElements.forEach(function(errorElement) {
                setTimeout(function() {
                    errorElement.style.display = 'none';
                }, 3000);
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
</html>
