<!-- resources/views/layouts/app.blade.php -->

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

    <!-- icon -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Start CSS -->
    <!-- <link href="{{asset('style/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"> -->
    <link href="{{asset('style/assets/css/icons.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('style/assets/css/style.css')}}" rel="stylesheet" type="text/css">
    <!-- End CSS -->





        <!-- Libraries Stylesheet -->
        <link href="{{asset('style/terapia/lib/animate/animate.min.css')}}" rel="stylesheet">
        <link href="{{asset('style/terapia/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="{{asset('style/terapia/bootstrap.min.css')}}" rel="stylesheet">








</head>
<body>

































































    <body class="xp-vertical">

    <!-- Start XP Container -->
    <div id="xp-container">

        <!-- Start XP Leftbar -->
        <div class="xp-leftbar">

            <!-- Start XP Sidebar -->
            <div class="xp-sidebar">

                <!-- Start XP Logobar -->
                <div class="xp-logobar text-center">
                    <a href="{{ route('home') }}" class="xp-logo text-primary">StageBridge</a>
                </div>
                <!-- End XP Logobar -->

                <!-- Start XP Navigationbar -->
                <div class="xp-navigationbar">
                    <ul class="xp-vertical-menu">
                        <li class="xp-vertical-header">Navigation</li>
                        <li>
                            {{-- <a href="{{ route('etudiantdashboard') }}">
                              <i class="mdi mdi-view-dashboard"></i><span>Dashboard</span><span class="badge badge-pill badge-primary pull-right">3</span>
                            </a> --}}
                             {{-- <ul class="xp-vertical-submenu">
                                <li><a href="index.html">Dashboard 1</a></li>
                                <li><a href="dashboard-2.html">Dashboard 2</a></li>
                                <li><a href="dashboard-3.html">Dashboard 3</a></li>
                            </ul>
                        </li> --}}
                        <li>
                            {{-- <a href="javaScript:void();">
                              <i class="mdi mdi-layers"></i><span>UI Kits</span><i class="mdi mdi-chevron-right pull-right"></i>
                            </a> --}}
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
                <h4 class="page-title">Description de l'offre</h4>
                  <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown">
                    {{-- <!-- <li class="breadcrumb-item"><a href="{{route('navbar')}}">HOME</a></li> -->
                    <!-- <li class="breadcrumb-item"><a href="#">Extra Pages</a></li> --> --}}
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




                    <h1 class="text-primary m-0"><i class="fas me-3"></i><img src="{{asset('logo/SB_logo.png')}}" alt="Logo">StageBridge</h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="contact.html" class="nav-item nav-link">Nous Contacter</a>

                        {{-- <a href="contact.html" class="nav-item nav-link">Contact Us</a> --}}

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












                <!-- contient recherche -->


                <div class="row">




                    @yield('content')




                </div>

                <!-- end contien recherche -->










































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
                        <a href=""><i class="fas fa-angle-right me-2"></i> Contact Us</a>
                        <a href=""><i class="fas fa-angle-right me-2"></i> Privacy Policy</a>
                        <a href=""><i class="fas fa-angle-right me-2"></i> Terms & Conditions</a>
                        <a href=""><i class="fas fa-angle-right me-2"></i> Our Blog & News</a>
                        <a href=""><i class="fas fa-angle-right me-2"></i> Our Team</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item d-flex flex-column">
                        <h4 class="mb-4 text-white">StageBridge Services</h4>
                        <a href=""><i class="fas fa-angle-right me-2"></i> All Services</a>
                        <a href=""><i class="fas fa-angle-right me-2"></i> Physiotherapy</a>
                        <a href=""><i class="fas fa-angle-right me-2"></i> Diagnostics</a>
                        <a href=""><i class="fas fa-angle-right me-2"></i> Manual Therapy</a>
                        <a href=""><i class="fas fa-angle-right me-2"></i> Massage Therapy</a>
                        <a href=""><i class="fas fa-angle-right me-2"></i> Rehabilitation</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item d-flex flex-column">
                        <h4 class="mb-4 text-white">Contact Info</h4>
                        <a href=""><i class="fa fa-map-marker-alt me-2"></i> Ngousso, Yaoudé, CAMEROUN</a>
                        <a href=""><i class="fas fa-envelope me-2"></i> info@example.com</a>
                        <a href=""><i class="fas fa-envelope me-2"></i> info@example.com</a>
                        <a href=""><i class="fas fa-phone me-2"></i> +237 6 94 55 60 57</a>
                        <a href="" class="mb-3"><i class="fas fa-print me-2"></i> +237 6 94 55 60 57</a>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!-- Footer End -->



            <!-- Start XP Footerbar -->
            <div class="xp-footerbar">
                <footer class="">
                    <p class="mb-0">© 2020 Booster - All Rights Reserved.</p>
                </footer>
            </div>
            <!-- End XP Footerbar -->








































































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
</html>
