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

    <title>Stagebridge</title>

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


                    <div class="col-2 col-md-1 col-lg-1 align-self-center">
                        <div class="xp-menubar">
                            <a class="xp-menu-hamburger" href="javascript:void();">
                               <i class="mdi mdi-sort-variant font-24 text-blue"></i>
                             </a>
                         </div>
                    </div>



                </div>
                <!-- End XP Logobar -->

                <!-- Start XP Navigationbar -->
                <div class="xp-navigationbar">
                    <ul class="xp-vertical-menu">
                        <li class="xp-vertical-header">Navigation</li>
                        <li>
                            <a href="javaScript:void();">
                              <i class="mdi mdi-view-dashboard"></i><span>Dashboard</span><span class="badge badge-pill badge-primary pull-right">3</span>
                            </a>
                             <ul class="xp-vertical-submenu">
                                <li><a href="index.html">Dashboard 1</a></li>
                                <li><a href="dashboard-2.html">Dashboard 2</a></li>
                                <li><a href="dashboard-3.html">Dashboard 3</a></li>
                            </ul>
                        </li>
                        <li>
                            {{-- <a href="javaScript:void();">
                              <i class="mdi mdi-layers"></i><span>UI Kits</span><i class="mdi mdi-chevron-right pull-right"></i>
                            </a>
                            <ul class="xp-vertical-submenu">
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
                        <li>
                            {{-- <a href="javaScript:void();">
                                <i class="mdi mdi-package-variant"></i><span>Components</span><i class="mdi mdi-chevron-right pull-right"></i>
                            </a>
                            <ul class="xp-vertical-submenu">
                                <li><a href="components-nestable.html">Nestable</a></li>
                                <li><a href="components-ratings.html">Ratings</a></li>
                                <li><a href="components-range-slider.html">Range Slider</a></li>
                                <li><a href="components-switchery.html">Switchery</a></li>
                                <li><a href="components-treeview.html">Tree View</a></li>
                                <li><a href="components-widgets.html">Widgets</a></li>
                            </ul> --}}
                        </li>
                        <li>
                            {{-- <a href="javaScript:void();">
                                <i class="mdi mdi-album"></i><span>Icons</span><i class="mdi mdi-chevron-right pull-right"></i>
                            </a>
                            <ul class="xp-vertical-submenu">
                                <li><a href="icon-material-design.html">Material Design</a></li>
                                <li><a href="icon-font-awesome.html">Font Awesome</a></li>
                                <li><a href="icon-simple-line.html">Simple Line Icons</a></li>
                                <li><a href="icon-themify.html">Themify Icons</a></li>
                                <li><a href="icon-typicons.html">Typicons</a></li>
                                <li><a href="icon-ionicons.html">Ion Icons</a></li>
                                <li><a href="icon-dripicons.html">Dripicons</a></li>
                            </ul> --}}
                        </li>
                        <li>
                            {{-- <a href="events.html">
                              <i class="mdi mdi-calendar"></i><span>Events</span><span class="badge badge-pill badge-success pull-right">5</span>
                            </a>
                        </li>
                        <li>
                            <a href="javaScript:void();">
                                <i class="mdi mdi-file-document-box"></i><span>Forms</span><i class="mdi mdi-chevron-right pull-right"></i>
                            </a>
                            <ul class="xp-vertical-submenu">
                                <li><a href="form-inputs.html">Form Inputs</a></li>
                                <li><a href="form-groups.html">Form Groups</a></li>
                                <li><a href="form-layouts.html">Form Layouts</a></li>
                                <li><a href="form-validations.html">Form Validations</a></li>
                                <li><a href="form-editors.html">Form Editors</a></li>
                                <li><a href="form-file-uploads.html">Form File Uploads</a></li>
                                <li><a href="form-colorpickers.html">Form Color Pickers</a></li>
                                <li><a href="form-datepickers.html">Form Date Pickers</a></li>
                                <li><a href="form-maxlength.html">Form MaxLength</a></li>
                                <li><a href="form-touchspin.html">Form Touchspin</a></li>
                                <li><a href="form-input-mask.html">Form Input Mask</a></li>
                                <li><a href="form-selects.html">Form Selects</a></li>
                                <li><a href="form-xeditable.html">Form X-editable</a></li>
                                <li><a href="form-wizards.html">Form Wizards</a></li>
                            </ul> --}}
                        </li>
                        <li>
                            {{-- <a href="javaScript:void();">
                                <i class="mdi mdi-email"></i><span>Email</span><i class="mdi mdi-chevron-right pull-right"></i>
                            </a>
                            <ul class="xp-vertical-submenu">
                                <li><a href="email-inbox.html">Email Inbox</a></li>
                                <li><a href="email-open.html">Email Open</a></li>
                                <li><a href="email-compose.html">Email Compose</a></li>
                            </ul> --}}
                        </li>
                        <li>
                            {{-- <a href="javaScript:void();"> --}}
                                {{-- <i class="mdi mdi-chart-areaspline"></i><span>Charts</span><i class="mdi mdi-chevron-right pull-right"></i>
                            </a>
                            <ul class="xp-vertical-submenu">
                                <li><a href="chart-chartistjs.html">Chartist Chart</a></li>
                                <li><a href="chart-chartjs.html">Chartjs Chart</a></li>
                                <li><a href="chart-c3.html">C3 Chart</a></li>
                                <li><a href="chart-flot.html">Flot Chart</a></li>
                                <li><a href="chart-morris.html">Morris Chart</a></li>
                                <li><a href="chart-knob.html">Knob Chart</a></li>
                                <li><a href="chart-piety.html">Piety Chart</a></li>
                                <li><a href="chart-sparkline.html">Sparkline Chart</a></li>
                            </ul> --}}
                        </li>
                        <li>
                            {{-- <a href="javaScript:void();">
                                <i class="mdi mdi-table"></i><span>Tables</span><i class="mdi mdi-chevron-right pull-right"></i>
                            </a>
                            <ul class="xp-vertical-submenu">
                                <li><a href="table-bootstrap.html">Bootstrap Table</a></li>
                                <li><a href="table-datatable.html">Data Table</a></li>
                                <li><a href="table-editable.html">Editable Table</a></li>
                                <li><a href="table-rwdtable.html">RWD Table</a></li>
                            </ul> --}}
                        </li>
                        <li>
                            {{-- <a href="javaScript:void();">
                                <i class="mdi mdi-map"></i><span>Maps</span><span class="badge badge-pill badge-danger pull-right">2</span>
                            </a>
                            <ul class="xp-vertical-submenu">
                                <li><a href="map-google.html">Google Map</a></li>
                                <li><a href="map-vector.html">Vector Map</a></li>
                            </ul> --}}
                        </li>
                        {{-- <li class="xp-vertical-header">Extras</li>
                        <li>
                            <a href="javaScript:void();">
                                <i class="mdi mdi-security"></i><span>Authenication</span><i class="mdi mdi-chevron-right pull-right"></i>
                            </a>
                            <ul class="xp-vertical-submenu">
                                <li><a href="page-login.html">Login</a></li>
                                <li><a href="page-register.html">Register</a></li>
                                <li><a href="page-forgotpsw.html">Forgot Password</a></li>
                                <li><a href="page-lock-screen.html">Lock Screen</a></li>
                                <li><a href="page-comingsoon.html">Coming Soon</a></li>
                                <li><a href="page-maintenance.html">Maintenance</a></li>
                                <li><a href="page-404.html">Error 404</a></li>
                                <li><a href="page-403.html">Error 403</a></li>
                                <li><a href="page-500.html">Error 500</a></li>
                                <li><a href="page-503.html">Error 503</a></li>
                            </ul> --}}
                        </li>
                        <li>
                            {{-- <a href="javaScript:void();">
                                <i class="mdi mdi-book-open-page-variant"></i><span>Extra Pages</span><i class="mdi mdi-chevron-right pull-right"></i>
                            </a>
                            <ul class="xp-vertical-submenu">
                                <li><a href="page-starter.html">Starter Page</a></li>
                                <li><a href="page-timeline.html">Timeline</a></li>
                                <li><a href="page-pricing.html">Pricing</a></li>
                                <li><a href="page-invoice.html">Invoice</a></li>
                                <li><a href="page-faq.html">FAQ</a></li>
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
            <div class="xp-topbar">

                <!-- Start XP Row -->
                {{-- <div class="row">

                    <!-- Start XP Col -->
                    <div class="col-2 col-md-1 col-lg-1 order-2 order-md-1 align-self-center">
                        <div class="xp-menubar">
                            <a class="xp-menu-hamburger" href="javascript:void();">
                               <i class="mdi mdi-sort-variant font-24 text-white"></i>
                             </a>
                         </div>
                    </div>
                    <!-- End XP Col -->

                    <!-- Start XP Col -->
                    <div class="col-md-5 col-lg-3 order-3 order-md-2">
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
                    </div>
                    <!-- End XP Col -->

                    <!-- Start XP Col -->
                    <div class="col-10 col-md-6 col-lg-8 order-1 order-md-3">
                        <div class="xp-profilebar text-right">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <div class="dropdown xp-message mr-3">
                                        <a class="dropdown-toggle user-profile-img text-white" href="#" role="button" id="xp-message" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="mdi mdi-message font-18 v-a-m"></i>
                                            <span class="badge badge-pill badge-success xp-badge-up">8</span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="xp-message">
                                            <ul class="list-unstyled">
                                              <li class="media">
                                                <div class="media-body">
                                                  <h5 class="mt-0 mb-0 my-3 text-dark text-center font-15">8 New Messages</h5>
                                                </div>
                                              </li>
                                              <li class="media xp-msg">
                                                <img class="mr-3 align-self-center rounded-circle" src="assets/images/topbar/user-message-1.jpg" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <a href="#">
                                                        <h5 class="mt-0 mb-1 font-14">Ariel Blue<span class="font-12 f-w-4 float-right">3 min ago</span></h5>
                                                        <p class="mb-0 font-13">Thank you for attending...<span class="badge badge-pill badge-success float-right">2</span></p>
                                                    </a>
                                                </div>
                                              </li>
                                              <li class="media xp-msg">
                                                 <img class="mr-3 align-self-center rounded-circle" src="assets/images/topbar/user-message-2.jpg" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <a href="#">
                                                        <h5 class="mt-0 mb-1 font-14">Jammy Moon<span class="font-12 f-w-4 float-right">5 min ago</span></h5>
                                                        <p class="mb-0 font-13">Hey no worries! Trust me...<span class="badge badge-pill badge-success float-right">3</span></p>
                                                    </a>
                                                </div>
                                              </li>
                                              <li class="media xp-msg">
                                                 <img class="mr-3 align-self-center rounded-circle" src="assets/images/topbar/user-message-3.jpg" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <a href="#">
                                                        <h5 class="mt-0 mb-1 font-14">Lisa Ross<span class="font-12 f-w-4 float-right">5:25 PM</span></h5>
                                                        <p class="mb-0 font-13">Remedies for colic? i don't...<span class="badge badge-pill badge-success float-right">5</span></p>
                                                    </a>
                                                </div>
                                              </li>
                                              <li class="media">
                                                <div class="media-body">
                                                  <h5 class="mt-0 mb-0 my-3 text-black text-center font-15"><a href="#" class="text-primary">View All</a></h5>
                                                </div>
                                              </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-inline-item">
                                    <div class="dropdown xp-notification mr-3">
                                        <a class="dropdown-toggle user-profile-img text-white" href="#" role="button" id="xp-notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="mdi mdi-bell-ring font-18 v-a-m"></i>
                                            <span class="badge badge-pill badge-danger xp-badge-up">3</span>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="xp-notification">
                                            <ul class="list-unstyled">
                                              <li class="media">
                                                <div class="media-body">
                                                  <h5 class="mt-0 mb-0 my-3 text-dark text-center font-15">3 New Notification</h5>
                                                </div>
                                              </li>
                                              <li class="media xp-noti">
                                                <div class="mr-3 xp-noti-icon"><i class="mdi mdi-account-plus"></i></div>
                                                <div class="media-body">
                                                    <a href="#">
                                                        <h5 class="mt-0 mb-1 font-14">New user registered</h5>
                                                        <p class="mb-0 font-12 f-w-4">2 min ago</p>
                                                    </a>
                                                </div>
                                              </li>
                                              <li class="media xp-noti">
                                                <div class="mr-3 xp-noti-icon"><i class="mdi mdi-basket"></i></div>
                                                <div class="media-body">
                                                    <a href="#">
                                                        <h5 class="mt-0 mb-1 font-14">New order placed</h5>
                                                        <p class="mb-0 font-12 f-w-4">8:45 PM</p>
                                                    </a>
                                                </div>
                                              </li>
                                              <li class="media xp-noti">
                                                <div class="mr-3 xp-noti-icon"><i class="mdi mdi-thumb-up"></i></div>
                                                <div class="media-body">
                                                    <a href="#">
                                                        <h5 class="mt-0 mb-1 font-14">John like your photo.</h5>
                                                        <p class="mb-0 font-12 f-w-4">Yesterday</p>
                                                    </a>
                                                </div>
                                              </li>
                                              <li class="media">
                                                <div class="media-body">
                                                  <h5 class="mt-0 mb-0 my-3 text-black text-center font-15"><a href="#" class="text-primary">View All</a></h5>
                                                </div>
                                              </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <!-- End XP Col -->

                </div> --}}
                <!-- End XP Row -->

            </div>
            <!-- End XP Topbar -->

            <!-- Start XP Breadcrumbbar -->
            <div class="xp-breadcrumbbar text-center ">
                <h4 class="page-title">Etablissement Dashboard</h4>
                  <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" >
                    <li class="breadcrumb-item"><a href="{{route('home')}}">HOME</a></li>
                    <!-- <li class="breadcrumb-item"><a href="#">Extra Pages</a></li> -->
                    <li class="breadcrumb-item active" aria-current="page">Etablissement Dashboard</li>
                  </ol>
            </div>
            <!-- End XP Breadcrumbbar -->



















            <!-- Start XP Contentbar -->
            <div class="xp-contentbar">
                <!-- Write page content code here -->

                <!-- Start XP Row -->
                {{-- <div class="row">

                    <!-- Start XP Col -->

                    <div class="col-md-12 col-lg-12 col-xl-12">
                        <div class="text-center mt-3 mb-5">
                            <h4>Page Title</h4>
                        </div>
                    </div>

                    <!-- End XP Col -->

                </div> --}}
                <!-- End XP Row -->



















                <!-- elllem -->



                <div class="container-fluid position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light bg-white px-4 px-lg-5 py-3 py-lg-0">


                    <div class="col-2 col-md-1 col-lg-1 align-self-center">
                        <div class="xp-menubar">
                            <a class="xp-menu-hamburger" href="javascript:void();">
                               <i class="mdi mdi-sort-variant font-24 text-blue"></i>
                             </a>
                         </div>
                    </div>







                <a href="{{route('home')}}" class="navbar-brand p-0">




                    <h1 class="text-primary m-0"><i class="fas me-3"></i><img src="{{asset('logo/SB_logo.png')}}" alt="Logo">StageBridge</h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="index.html" class="nav-item nav-link active">Home</a>




                        <a href="{{ route('disconnect_etablissement') }}" class="nav-item nav-link">Se Deconnecter</a>








                        {{-- <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Se Connecter</a>
                            <div class="dropdown-menu m-0">
                                <a href="{{route('loginetudiant')}}" class="dropdown-item">Etudiant</a>
                                <a href="{{route('loginemployeur')}}" class="dropdown-item">Employeur</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">S'Inscrire</a>
                            <div class="dropdown-menu m-0">
                                <a href="{{route('registeretudiant')}}" class="dropdown-item">Etudiant</a>
                                <a href="{{route('registeremployeur')}}" class="dropdown-item">Employeur</a>
                            </div>
                        </div> --}}





                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu m-0">
                                <a href="#" class="dropdown-item">Etudiant en attente</a>
                                <a href="{{ route('avisdemander') }}" class="dropdown-item">demande d'avis</a>
                                {{-- <a href="blog.html" class="dropdown-item">Our Blog</a>
                                <a href="team.html" class="dropdown-item">Our Team</a>
                                <a href="testimonial.html" class="dropdown-item">Testimonial</a> --}}
                                <a href="404.html" class="dropdown-item">404 Page</a>
                            </div>
                        </div>
                        <a href="contact.html" class="nav-item nav-link">Contact Us</a>

                    </div>











                    <li class="list-inline-item mr-0">
                        <div class="dropdown xp-userprofile">
                            <a class="dropdown-toggle user-profile-img" href="#" role="button" id="xp-userprofile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{asset('style/assets/images/topbar/user.jpg')}}" alt="user-profile" class="rounded-circle img-fluid"><span class="xp-user-live"></span></a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="xp-userprofile">
                                <a class="dropdown-item" href="#">Welcome, </a>
                                {{-- <a class="dropdown-item" href="#"><i class="mdi mdi-account mr-2"></i> Profile</a>
                                <a class="dropdown-item" href="#"><i class="mdi mdi-credit-card mr-2"></i> Billing</a>
                                <a class="dropdown-item" href="#"><i class="mdi mdi-settings mr-2"></i> Setting</a>
                                <a class="dropdown-item" href="#"><i class="mdi mdi-lock mr-2"></i> Lock Screen</a> --}}
                                <a class="dropdown-item" href="#"><i class="mdi mdi-logout mr-2"></i>Se Deconnecter</a>
                            </div>
                        </div>
                    </li>

























                    <!-- <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 flex-wrap flex-sm-shrink-0">Book Appointment</a> -->

                </div>
            </nav>



        </div>






                <!-- end elllem -->
















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
                                            <p class="my-4" style="height: 150px; overflow: auto;">{{ $stage->description }}</p>
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























                </div>


































            </div>
            <!-- End XP Contentbar -->

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
