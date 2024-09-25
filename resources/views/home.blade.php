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

    <title>StageBridge</title>

    <!-- Fevicon -->
    <link rel="shortcut icon" href="{{asset('logo/SB_logo.png')}}">

    <!-- Start CSS -->
    <link href="{{asset('style/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('style/assets/css/icons.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('style/assets/css/style.css')}}" rel="stylesheet" type="text/css">
    <!-- End CSS -->


    <!-- icon -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">







    <!--  -->

    <!-- Libraries Stylesheet -->
    <link href="{{asset('style/terapia/lib/animate/animate.min.css')}}" rel="stylesheet">
        <link href="{{asset('style/terapia/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="{{asset('style/terapia/bootstrap.min.css')}}" rel="stylesheet">
    <!--  -->





</head>

<body class="xp-vertical">

    <!-- Start XP Container -->
    <div id="xp-container">

        <!-- Start XP Leftbar -->
        <div class="xp-leftbar">

            <!-- Start XP Sidebar -->
            <div class="xp-sidebar">

                <!-- Start XP Logobar -->
                <div class="xp-logobar text-center">
                    <a href="{{route('home')}}" class="xp-logo text-primary">StageBridge</a>
                </div>
                <!-- End XP Logobar -->

                <!-- Start XP Navigationbar -->
                <div class="xp-navigationbar">
                    <ul class="xp-vertical-menu">
                        <li class="xp-vertical-header">Navigation


                            <div class="col-2 col-md-1 col-lg-1 align-self-center">
                                <div class="xp-menubar">
                                    <a class="xp-menu-hamburger" href="javascript:void();">
                                       <i class="mdi mdi-sort-variant font-24 text-blue"></i>
                                     </a>
                                 </div>
                            </div>




                        </li>
                        <li>
                            <!-- <a href="javaScript:void();">
                              <i class="mdi mdi-view-dashboard"></i><span>Dashboard</span><span class="badge badge-pill badge-primary pull-right">3</span>
                            </a>
                             <ul class="xp-vertical-submenu">
                                <li><a href="index.html">Dashboard 1</a></li>
                                <li><a href="dashboard-2.html">Dashboard 2</a></li>
                                <li><a href="dashboard-3.html">Dashboard 3</a></li>
                            </ul> -->
                            {{-- <a href="blanck">chercher une offres</a> --}}
                        </li>
                        <li>
                            <a href="{{ route('search_stage_request') }}">
                              <i class="mdi mdi-layers"></i><span>offres de stage</span><i class="mdi mdi-chevron-right pull-right"></i>
                            </a>
                            {{-- <ul class="xp-vertical-submenu">
                                <li><a href="ui-kits-alerts.html">Alerts</a></li>
                                <li><a href="ui-kits-badges.html">Badges</a></li>
                                <li><a href="ui-kits-buttons.html">Buttons</a></li>
                                <li><a href="ui-kits-cards.html">Cards</a></li>
                                <li><a href="ui-kits-carousel.html">Carousel</a></li>
                                <li><a href="ui-kits-collapse.html">Collapse</a></li>
                                <li><a href="ui-kits-dropdowns.html">Dropdowns</a></li>
                                <li><a href="ui-kits-grids.html">Grids</a></li>
                                <li><a href="ui-kits-images.html">Images</a></li>
                                <li><a href="ui-kits-media.html">Media</a></li>
                                <li><a href="ui-kits-modals.html">Modals</a></li>
                                <li><a href="ui-kits-paginations.html">Paginations</a></li>
                                <li><a href="ui-kits-popovers.html">Popovers</a></li>
                                <li><a href="ui-kits-progressbars.html">Progress Bars</a></li>
                                <li><a href="ui-kits-tabs.html">Tabs</a></li>
                                <li><a href="ui-kits-tooltips.html">Tooltips</a></li>
                                <li><a href="ui-kits-typography.html">Typography</a></li>
                            </ul> --}}
                        </li>

                    </ul>
                </div>
                <!-- End XP Navigationbar -->

            </div>
            <!-- End XP Sidebar -->

        </div>
        <!-- End XP Leftbar -->

        <!-- Start XP Rightbar -->
        <div class="xp-rightbar">

            <!-- Start XP Topbar -->
            <div class="xp-topbar ">

                <!-- Start XP Row -->
                <div class="row  position-relative">

                    <!-- Start XP Col -->
                    <!-- <div class="col-2 col-md-1 col-lg-1 order-2 order-md-1 align-self-center">
                        <div class="xp-menubar">
                            <a class="xp-menu-hamburger" href="javascript:void();">
                               <i class="mdi mdi-sort-variant font-24 text-white"></i>
                             </a>
                         </div>
                    </div>  -->
                    <!-- End XP Col -->


                    <!-- Start XP Col -->
                    <!-- <div class="col-md-5 col-lg-3 order-3 order-md-2">
                        <div class="xp-searchbar">
                            <form>
                                <div class="input-group">
                                  <input type="search" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
                                  <div class="input-group-append">
                                    <button class="btn" type="submit" id="button-addon2">GO</button>
                                  </div>
                                </div>
                            </form>
                        </div>
                    </div> -->
                    <!-- End XP Col -->



                </div>
                <!-- End XP Row -->

            </div>
            <!-- End XP Topbar -->

            <!-- Start XP Breadcrumbbar -->
            <div class="xp-breadcrumbbar text-center">
                <h4 class="page-title">HOME PAGE</h4>
                  <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown">
                    <!-- <li class="breadcrumb-item"><a href="{{route('home')}}">HOME</a></li> -->
                    <!-- <li class="breadcrumb-item"><a href="#">Extra Pages</a></li> -->
                    <li class="breadcrumb-item active" aria-current="page">Home</li>
                  </ol>
            </div>
            <!-- End XP Breadcrumbbar -->

            <!-- Start XP Contentbar -->
            <div class="xp-contentbar">
                <!-- Write page content code here -->

                <!-- Start XP Row -->

                <!-- <div class="row"> -->

                    <!-- Start XP Col -->

                    <!-- <div class="col-md-12 col-lg-12 col-xl-12">
                        <div class="text-center mt-3 mb-5">
                            <h4>Page Title</h4>
                        </div>
                    </div> -->

                    <!-- End XP Col -->

                <!-- </div> -->

                <!-- End XP Row -->

























                <!-- elllem -->



                <div class="container-fluid position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light bg-white px-4 px-lg-5 py-3 py-lg-0">










                <a href="{{route('home')}}" class="navbar-brand p-0">




                    <h1 class="text-primary m-0"><i class="fas me-3"><img src="{{asset('logo/SB_logo.png')}}" alt="Logo"></i>StageBridge</h1>

                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <!-- <a href="index.html" class="nav-item nav-link active">Home</a> -->

                        @if (!Auth::guard('etudiant')->check() && !Auth::guard('entreprise')->check() && !Auth::guard('etablissement')->check())




                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Se Connecter</a>
                            <div class="dropdown-menu m-0">
                                <a href="{{route('loginentreprise')}}" class="dropdown-item">Entreprise</a>
                                <a href="{{route('loginetablissement')}}" class="dropdown-item">Etablissement</a>
                                <a href="{{route('loginetudiant')}}" class="dropdown-item">Etudiant</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">S'Inscrire</a>
                            <div class="dropdown-menu m-0">
                                <a href="{{route('registerentreprise')}}" class="dropdown-item">Entreprise</a>
                                <a href="{{route('registeretablissement')}}" class="dropdown-item">Etablissement</a>
                                <a href="{{route('registeretudiant')}}" class="dropdown-item">Etudiant</a>
                            </div>
                        </div>


                        @endif



                        @auth('etudiant')
                            <a href="{{ route('disconnect_etudiant') }}" class="nav-item nav-link">Me Déconnecter</a>
                        @endauth

                        @auth('entreprise')
                            <a href="{{ route('disconnect_entreprise') }}" class="nav-item nav-link">Me Déconnecter</a>
                        @endauth

                        @auth('etablissement')
                            <a href="{{ route('disconnect_etablissement') }}" class="nav-item nav-link">Me Déconnecter</a>
                        @endauth

                        {{-- @auth('employeur')
                            <a class="nav-item nav-link" role="button" href="{{route('home')}}">Deconnexion</a>
                        @endauth --}}
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu m-0">
                                {{-- <a href="appointment.html" class="dropdown-item">Appointment</a>
                                <a href="feature.html" class="dropdown-item">Features</a>
                                <a href="blog.html" class="dropdown-item">Our Blog</a>
                                <a href="team.html" class="dropdown-item">Our Team</a>
                                <a href="testimonial.html" class="dropdown-item">Testimonial</a> --}}
                                <a href="404.html" class="dropdown-item">404 Page</a>
                            </div>
                        </div>
                        <a href="{{ route("search_stage_request") }}" class="nav-item nav-link">Trouver plus d'offres</a>
                        <a href="contact.html" class="nav-item nav-link">Contacter nous</a>

                        @auth('etudiant')
                            <a href="{{ route('etudiantdashboard') }}" class="nav-item nav-link">Mon Dashboard</a>
                        @endauth

                        @auth('entreprise')
                            <a href="{{ route('entreprisedashboard') }}" class="nav-item nav-link">Mon Dashboard</a>
                        @endauth

                        @auth('etablissement')
                            <a href="{{ route('etablissementdashboard') }}" class="nav-item nav-link">Mon Dashboard</a>
                        @endauth



                    </div>
                    {{-- <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 flex-wrap flex-sm-shrink-0">Book Appointment</a> --}}



                </div>




                <div class="col-2 col-md-1 col-lg-1 align-self-center">
                    <div class="xp-menubar">
                        <a class="xp-menu-hamburger" href="javascript:void();">
                           <i class="mdi mdi-sort-variant font-24 text-blue"></i>
                         </a>
                     </div>
                </div>







            </nav>



        </div>






                <!-- end elllem -->





















                 <!-- Carousel Start -->





                 {{-- <div class="row">



                    <div class="col-lg-12">
                        <div class="card m-b-30">

                            <div class="card-body">
                                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class=""></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="2" class="active"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="assets/images/ui-carousel/ui-carousel-7.jpg" alt="First slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="assets/images/ui-carousel/ui-carousel-8.jpg" alt="Second slide">
                                        </div>
                                        <div class="carousel-item active">
                                            <img class="d-block w-100" src="assets/images/ui-carousel/ui-carousel-9.jpg" alt="Third slide">
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>




                 </div> --}}






            <!-- Carousel End -->











            {{-- ellem --}}








            <!-- BACKGROUND-IMAGE  START-->
            <div class="row">
                <div style="height: 500px ; width: 100%;">
                    <img src="{{ asset('style/backk.jpg') }}" style="width: 100%; height: 500px;" alt="...">

                    <!-- <img src="tourisme.jpg" style="width: 100%; height: 300px;" alt="..."> -->



                    <div class="header-titre" style="margin-top: -250px; text-align: center; font-size: 60px; font-weight: 500;color: white;">

                        <form action="{{ route('search_stage_request') }}" method="GET">
                            <div class="row gy-3 gx-4">
                                <div class="col-xl-6">
                                    <input type="text" name="titre" class="form-control py-3 border-primary bg-white text-black" placeholder="Domain">
                                </div>
                                <div class="col-xl-6">
                                    <input type="text" name="location" class="form-control py-3 border-primary bg-white text-black" placeholder="Ville">
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








                    {{-- <h1 class="header-titre1" style="margin-top: -190px; text-align: center; font-size: 60px; font-weight: 500;color: white;">
                        EXPLORE CAMEROON
                    </h1>
                    <p class="header-titre1" style="margin-top: -10px; text-align: center; font-size: 25px; font-weight: 500;color: white;">
                        Acceder a notre site et visiter les sites touristiques du cameroun ainsi que la culture des citoyens camerounais

                    </p> --}}
                </div>
            </div>
        <!-- BACKGROUND-IMAGE  end-->



























        <div class="row">
















            <!-- Blog Start -->
            <div class="container-fluid blog py-5">
            <div class="container py-5">
                <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="sub-style">
                        <h4 class="sub-title px-3 mb-0">offres de Stage Academique</h4>
                    </div>
                    <h1 class="display-3 mb-4">Explorez nos opportunités de stage académique</h1>
                    <p class="mb-0"> Découvrez les opportunités passionnantes que nous offrons pour enrichir votre parcours académique et professionnel. Que vous soyez à la recherche d'une expérience pratique dans votre domaine d'études ou que vous souhaitiez acquérir de nouvelles compétences, vous trouverez ici des stages variés pour développer votre carrière.</p>
                </div>
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
                                <p class="my-4">{{ $stage->description }}</p>
                                <a href="{{ route('offres.show', $stage->id_stage) }}" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-1">Lire plus</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    {{-- <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="blog-item rounded">
                            <div class="blog-img">
                                <img src="{{asset('style/terapia/img/blog-2.jpg')}}" class="img-fluid w-100" alt="Image">
                            </div>
                            <div class="blog-centent p-4">
                                <div class="d-flex justify-content-between mb-4">
                                    <p class="mb-0 text-muted"><i class="fa fa-calendar-alt text-primary"></i> 01 Jan 2045</p>
                                    <a href="#" class="text-muted"><span class="fa fa-comments text-primary"></span> 3 Comments</a>
                                </div>
                                <a href="#" class="h4">Benefits of a weekly physiotherapy session</a>
                                <p class="my-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium hic consequatur beatae architecto,</p>
                                <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-1">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="blog-item rounded">
                            <div class="blog-img">
                                <img src="{{asset('style/terapia/img/blog-3.jpg')}}" class="img-fluid w-100" alt="Image">
                            </div>
                            <div class="blog-centent p-4">
                                <div class="d-flex justify-content-between mb-4">
                                    <p class="mb-0 text-muted"><i class="fa fa-calendar-alt text-primary"></i> 01 Jan 2045</p>

                                </div>
                                <a href="#" class="h4">Regular excercise can slow ageing process</a>
                                <p class="my-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium hic consequatur beatae architecto,</p>
                                <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-1">Read More</a>
                            </div>
                        </div>
                    </div> --}}
                    <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-1">trouver plus d'offfres</a>
                </div>
            </div>
        </div>
        <!-- Blog End -->

















        <!-- Blog Start 2 -->
        <div class="container-fluid blog py-5">
            <div class="container py-5">
                <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="sub-style">
                        <h4 class="sub-title px-3 mb-0">offres d'emploi</h4>
                    </div>
                    <h1 class="display-3 mb-4">Découvrez nos opportunités d'emploi</h1>
                    <p class="mb-0"> Explorez les postes disponibles et trouvez l'opportunité qui correspond à votre profil et à vos ambitions professionnelles. trouvez les meilleures opportunités dans différents domaines. Découvrez ci-dessous nos dernières offres :</p>
                </div>
                <div class="row g-4 justify-content-center">
                    @foreach ($emplois as $emploi)
                    <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="blog-item rounded">
                            <div class="blog-img">
                                <img src="{{asset('image/'.$emploi->image)}}" style="width: 100%; height: 250px;" class="img-fluid w-100" style="height: 250px;" alt="Image">
                            </div>
                            <div class="blog-centent p-4">
                                <div class="d-flex justify-content-between mb-4">
                                    <p class="mb-0 text-muted"><i class="fa fa-calendar-alt text-primary"></i>{{ $emploi->created_at->format('d/F/Y') }}</p>
                                    {{-- <a href="#" class="text-muted"><span class="fa fa-comments text-primary"></span> 3 Comments</a> --}}
                                </div>
                                <a href="#" class="h4">{{ $emploi->titre }}</a>
                                <p class="my-4" style="width: 100%; height: 250px;">{{ $emploi->description }}</p>
                                <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-1">Read More</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    {{-- <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="blog-item rounded">
                            <div class="blog-img">
                                <img src="{{asset('style/terapia/img/blog-2.jpg')}}" class="img-fluid w-100" alt="Image">
                            </div>
                            <div class="blog-centent p-4">
                                <div class="d-flex justify-content-between mb-4">
                                    <p class="mb-0 text-muted"><i class="fa fa-calendar-alt text-primary"></i> 01 Jan 2045</p>
                                    <a href="#" class="text-muted"><span class="fa fa-comments text-primary"></span> 3 Comments</a>
                                </div>
                                <a href="#" class="h4">Benefits of a weekly physiotherapy session</a>
                                <p class="my-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium hic consequatur beatae architecto,</p>
                                <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-1">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="blog-item rounded">
                            <div class="blog-img">
                                <img src="{{asset('style/terapia/img/blog-3.jpg')}}" class="img-fluid w-100" alt="Image">
                            </div>
                            <div class="blog-centent p-4">
                                <div class="d-flex justify-content-between mb-4">
                                    <p class="mb-0 text-muted"><i class="fa fa-calendar-alt text-primary"></i> 01 Jan 2045</p>
                                    <a href="#" class="text-muted"><span class="fa fa-comments text-primary"></span> 3 Comments</a>
                                </div>
                                <a href="#" class="h4">Regular excercise can slow ageing process</a>
                                <p class="my-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium hic consequatur beatae architecto,</p>
                                <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-1">Read More</a>
                            </div>
                        </div>
                    </div> --}}
                    <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-1">trouver plus d'offfres</a>
                </div>
            </div>
        </div>
        <!-- Blog End 2 -->





















        </div>







            {{-- end ellem --}}




















































































































































                <!-- Blog Start -->
                {{-- <div class="container-fluid blog py-5">
                    <div class="container py-5">
                        <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="sub-style">
                                <h4 class="sub-title px-3 mb-0">NOS OFFRES</h4>
                            </div>
                            <h1 class="display-3 mb-4">Excellent Facility and High Quality Therapy</h1>
                            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat deleniti amet at atque sequi quibusdam cumque itaque repudiandae temporibus, eius nam mollitia voluptas maxime veniam necessitatibus saepe in ab? Repellat!</p>
                        </div>
                        <div class="row g-4 justify-content-center">

                        @foreach($troisjobs as $job)
                        <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" styel="height: 400px;" data-wow-delay="0.1s">
                                <div class="blog-item rounded">
                                    <div class="blog-img">
                                        <img src="image/{{$job->image}}" style="width:400px; height: 300px;" class="img-fluid w-100" alt="Image">
                                    </div>
                                    <div class="blog-centent p-4">
                                        <div class="d-flex justify-content-between mb-4">
                                            <p class="mb-0 text-muted"><i class="fa fa-calendar-alt text-primary"></i> {{$job->created_at}}</p>
                                            <a href="#" class="text-muted"><span class="fa fa-comments text-primary"></span> 3 Comments</a>
                                        </div>
                                        <a href="#" class="h4">{{$job->title}}</a>
                                        <p class="my-4 overflow-auto" style="max-height: 30px;">{!! nl2br($job->description) !!}</p>
                                        <a href="{{route('infojobs',$job->id)}}" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-1">Read More</a>
                                        <form action="/jobs/{{$job->id}}/delete" method="post">
                                            @method('delete')
                                            @csrf

                                        <button type="submit" class="btn btn-danger rounded-pill text-white py-2 px-4 mb-1">delet</button>
                                        </form>

                                    </div>
                                </div>
                            </div>
                            @endforeach --}}


                            <!-- <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="blog-item rounded">
                                    <div class="blog-img">
                                        <img src="img/blog-1.jpg" class="img-fluid w-100" alt="Image">
                                    </div>
                                    <div class="blog-centent p-4">
                                        <div class="d-flex justify-content-between mb-4">
                                            <p class="mb-0 text-muted"><i class="fa fa-calendar-alt text-primary"></i> 01 Jan 2045</p>
                                            <a href="#" class="text-muted"><span class="fa fa-comments text-primary"></span> 3 Comments</a>
                                        </div>
                                        <a href="#" class="h4">Remove back Pain While Working on o physio</a>
                                        <p class="my-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium hic consequatur beatae architecto,</p>
                                        <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-1">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="blog-item rounded">
                                    <div class="blog-img">
                                        <img src="img/blog-2.jpg" class="img-fluid w-100" alt="Image">
                                    </div>
                                    <div class="blog-centent p-4">
                                        <div class="d-flex justify-content-between mb-4">
                                            <p class="mb-0 text-muted"><i class="fa fa-calendar-alt text-primary"></i> 01 Jan 2045</p>
                                            <a href="#" class="text-muted"><span class="fa fa-comments text-primary"></span> 3 Comments</a>
                                        </div>
                                        <a href="#" class="h4">Benefits of a weekly physiotherapy session</a>
                                        <p class="my-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium hic consequatur beatae architecto,</p>
                                        <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-1">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.5s">
                                <div class="blog-item rounded">
                                    <div class="blog-img">
                                        <img src="img/blog-3.jpg" class="img-fluid w-100" alt="Image">
                                    </div>
                                    <div class="blog-centent p-4">
                                        <div class="d-flex justify-content-between mb-4">
                                            <p class="mb-0 text-muted"><i class="fa fa-calendar-alt text-primary"></i> 01 Jan 2045</p>
                                            <a href="#" class="text-muted"><span class="fa fa-comments text-primary"></span> 3 Comments</a>
                                        </div>
                                        <a href="#" class="h4">Regular excercise can slow ageing process</a>
                                        <p class="my-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium hic consequatur beatae architecto,</p>
                                        <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-1">Read More</a>
                                    </div>
                                </div>
                            </div> -->
                        {{-- </div>
                    </div>

                    <div class="bout text-center">
                        <a href="{{route('chearch_job')}}" class="btn btn-primary rounded-pill text-white py-2 px-4 flex-wrap flex-sm-shrink-0"> voir plus d'offres</a>
                    </div>


                </div> --}}
                <!-- Blog End -->








































































            </div>
            <!-- End XP Contentbar -->











            <!-- Footer Start -->
        <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="text-white mb-4"><i class="fas me-3"></i>StageBridge</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus dolorem impedit eos autem dolores laudantium quia, qui similique
                            </p>
                            <div class="d-flex align-items-center">
                                <i class="fas fa-share fa-2x text-white me-2"></i>
                                <a class="btn-square btn btn-primary text-white rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn-square btn btn-primary text-white rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn-square btn btn-primary text-white rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn-square btn btn-primary text-white rounded-circle mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 text-white">Quick Links</h4>
                            <a href=""><i class="fas fa-angle-right me-2"></i> About Us</a>
                            {{-- <a href=""><i class="fas fa-angle-right me-2"></i> Contact Us</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Privacy Policy</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Terms & Conditions</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Our Blog & News</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Our Team</a> --}}
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 text-white">StageBridge Services</h4>
                            {{-- <a href=""><i class="fas fa-angle-right me-2"></i> All Services</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Physiotherapy</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Diagnostics</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Manual Therapy</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Massage Therapy</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Rehabilitation</a> --}}
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 text-white">Contact Info</h4>
                            <a href=""><i class="fa fa-map-marker-alt me-2"></i>Ngousso, Yaoundé, CAMEROUN</a>
                            <a href=""><i class="fas fa-envelope me-2"></i> info@example.com</a>
                            <a href=""><i class="fas fa-envelope me-2"></i> info@example.com</a>
                            <a href=""><i class="fas fa-phone me-2"></i> +237 694556057</a>
                            <a href="" class="mb-3"><i class="fas fa-print me-2"></i> +237 694556057</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>








        <!-- Footer End -->






























            <!-- Start XP Footerbar -->
            <div class="xp-footerbar">
                <footer class="">
                    <p class="mb-0">© 2024 StageBridge - All Rights Reserved.</p>
                </footer>
            </div>
            <!-- End XP Footerbar -->

        </div>
        <!-- End XP Rightbar -->

    </div>
    <!-- End XP Container -->

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





        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{asset('style/terapia/lib/wow/wow.min.js')}}"></script>
        <script src="{{asset('style/terapia/lib/easing/easing.min.js')}}"></script>
        <script src="{{asset('style/terapia/lib/waypoints/waypoints.min.js')}}"></script>
        <script src="{{asset('style/terapia/lib/owlcarousel/owl.carousel.min.js')}}"></script>


        <!-- Template Javascript -->
        <script src="{{asset('style/terapia/js/main.js')}}"></script>



















</body>

<!-- Mirrored from themesbox.in/admin-templates/booster/html/vertical/page-starter.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Jun 2023 10:11:45 GMT -->
</html>
