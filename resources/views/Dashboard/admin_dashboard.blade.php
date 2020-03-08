<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('dashboard')}}/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="{{asset('dashboard')}}/assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('dashboard')}}/assets/libs/css/style.css">
    <link rel="stylesheet" href="{{asset('dashboard')}}/assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="{{asset('dashboard')}}/assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="{{asset('dashboard')}}/assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="{{asset('dashboard')}}/assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="{{asset('dashboard')}}/assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="{{asset('dashboard')}}/assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
    <title>Admin Dashboard</title>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="{{route('home')}}">PMS</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">

                      <!-- search bar -->
                        <!-- <li class="nav-item">
                            <div id="custom-search" class="top-search-bar">
                                <input class="form-control" type="text" placeholder="Search..">
                            </div>
                        </li>
                      -->

                      <!-- Notification -->

                        <li class="nav-item dropdown notification">
                            <a class="nav-link nav-icons" href="#" id="navbarDropdownMenuLink1"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-fw fa-bell"></i>
                            <span class="indicator"></span>
                          </a>
                            <ul class="dropdown-menu dropdown-menu-right notification-dropdown">
                                <li>
                                    <div class="notification-title"> Notification</div>

                                </li>
                                <li>
                                    <div class="list-footer"> <a href="#">View all notifications</a></div>
                                </li>
                            </ul>
                        </li>

                        <!-- Logout -->
                        <ul class="navbar-nav ml-auto ml-md-100">

                          <li class="nav-item dropdown">
                              <a id="navbarDropdown" class="nav-link dropdown-toggle"
                              href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                              aria-expanded="false" v-pre>
                                 <span class="create"></span>
                              </a>

                              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                  <a class="dropdown-item" href="{{ route('logout') }}"
                                     onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                                      {{ __('Logout') }}
                                  </a>

                                  <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                  style="display: none;">
                                      @csrf
                                  </form>
                              </div>
                          </li>

                        </ul>

                      </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
@include('dashboard.sidebar.admin_sidebar')
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">Pharmacy Management System</h2>

                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">

@yield('content')

                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->


            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <div class="footer">
              <footer class="sticky-footer">
                <div class="container my-auto">

                    <span>Copyright © 2020 Jerin Id#15203055. All rights reserved.</span>
                  </div>
                </div>
              </footer>
            </div>
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->

    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->
    <script src="{{asset('dashboard')}}/assets/vendor/jquery/jquery-3.3.1.min.js"></script>
  <!-- bootstap bundle js -->
  <script src="{{asset('dashboard')}}/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
  <!-- slimscroll js -->
  <script src="{{asset('dashboard')}}/assets/vendor/slimscroll/jquery.slimscroll.js"></script>
  <!-- main js -->
  <script src="{{asset('dashboard')}}/assets/libs/js/main-js.js"></script>
  <!-- chart chartist js -->
  <script src="{{asset('dashboard')}}/assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
  <!-- sparkline js -->
  <script src="{{asset('dashboard')}}/assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
  <!-- morris js -->
  <script src="{{asset('dashboard')}}/assets/vendor/charts/morris-bundle/raphael.min.js"></script>
  <script src="{{asset('dashboard')}}/assets/vendor/charts/morris-bundle/morris.js"></script>
    <!-- chart c3 js -->
    <script src="{{asset('dashboard')}}/assets/vendor/charts/c3charts/c3.min.js"></script>
    <script src="{{asset('dashboard')}}/assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
    <script src="{{asset('dashboard')}}/assets/vendor/charts/c3charts/C3chartjs.js"></script>
    <script src="{{asset('dashboard')}}/assets/libs/js/dashboard-ecommerce.js"></script>
</body>

</html>
