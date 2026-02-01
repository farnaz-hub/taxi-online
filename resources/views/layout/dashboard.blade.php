<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>TaxiOnline | VIVARA</title>
    <link rel="stylesheet" href="{{asset('assets/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/css/vendor.bundle.base.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/jvectormap/jquery-jvectormap.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/owl-carousel-2/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/owl-carousel-2/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}"/>
    <link rel="icon" href="{{asset('img/taxi.ico')}}" type="image/icon">
</head>
<body>
<div class="container-scroller">
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
            <h4>Management Panel</h4>
        </div>
        <ul class="nav">
            <li class="nav-item profile">
                <div class="profile-desc">
                    <div class="profile-pic">
                        <div class="count-indicator">
                            <img class="img-xs rounded-circle " src="{{asset('img/prof.jpg')}}" alt="">
                            <span class="count bg-success"></span>
                        </div>
                        <div class="profile-name">
                            <h5 class="mb-0 font-weight-normal">VIVARA</h5>
                            <span>TAXI ONLINE</span>
                        </div>
                    </div>
                </div>
            </li>
            <li class="nav-item nav-category">
                <span class="nav-link">Dashboard</span>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" href="{{route('admin.list')}}">
              <span class="menu-icon">
                <i class="mdi mdi-shield-lock"></i>
              </span>
                    <span class="menu-title">Admins</span>
                </a>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" href="{{route('customer.list')}}">
              <span class="menu-icon">
                <i class="mdi mdi-account-group"></i>
              </span>
                    <span class="menu-title">Customers</span>
                </a>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" href="{{route('driver.list')}}">
              <span class="menu-icon">
                <i class="mdi mdi-steering"></i>
              </span>
                    <span class="menu-title">Drivers</span>
                </a>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" href="{{route('trip.list')}}">
              <span class="menu-icon">
                <i class="mdi mdi-compass"></i>
              </span>
                    <span class="menu-title">Trips</span>
                </a>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" href="{{route('car.list')}}">
              <span class="menu-icon">
                <i class="mdi mdi-car"></i>
              </span>
                    <span class="menu-title">Cars</span>
                </a>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" href="{{route('make.list')}}">
              <span class="menu-icon">
                <i class="mdi mdi-factory"></i>
              </span>
                    <span class="menu-title">Makes</span>
                </a>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" href="{{route('model.list')}}">
              <span class="menu-icon">
                <i class="mdi mdi-car-hatchback"></i>
              </span>
                    <span class="menu-title">Models</span>
                </a>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" href="{{asset('pages/samples/error-404.html')}}">
              <span class="menu-icon">
                <i class="mdi mdi-alert-circle-outline"></i>
              </span>
                    <span class="menu-title">Tickets</span>
                </a>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" href="{{asset('pages/samples/error-404.html')}}">
              <span class="menu-icon">
                <i class="mdi mdi-format-list-bulleted-type"></i>
              </span>
                    <span class="menu-title">Types</span>
                </a>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" href="{{asset('pages/samples/error-404.html')}}">
              <span class="menu-icon">
                <i class="mdi mdi-folder-multiple"></i>
              </span>
                    <span class="menu-title">Categories</span>
                </a>
            </li>
        </ul>
    </nav>
    <div class="container-fluid page-body-wrapper">
        <nav class="navbar p-0 fixed-top d-flex flex-row">
            <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
                <a class="navbar-brand brand-logo-mini" href="{{asset('index.html')}}"><img
                        src="{{asset('assets/images/logo-mini.svg')}}" alt="logo"/></a>
            </div>
            <div class="navbar-menu-wrapper grow d-flex align-items-stretch">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="mdi mdi-menu"></span>
                </button>
                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item dropdown">
                        <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                            <div class="navbar-profile">
                                <img class="img-xs rounded-circle" src="{{asset('assets/images/faces/face15.jpg')}}"
                                     alt="">
                                <p class="mb-0 d-none d-sm-block navbar-profile-name">Farnaz</p>
                                <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                             aria-labelledby="profileDropdown">
                            <h6 class="p-3 mb-0">Profile</h6>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item" href="{{route('home')}}">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-dark rounded-circle">
                                        <i class="mdi mdi-home text-success"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <p class="preview-subject mb-1">Home</p>
                                </div>
                            </a>
                            <a class="dropdown-item preview-item" href="{{route('logout')}}">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-dark rounded-circle">
                                        <i class="mdi mdi-logout text-danger"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <p class="preview-subject mb-1">Log out</p>
                                </div>
                            </a>
                        </div>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                        data-toggle="offcanvas">
                    <span class="mdi mdi-format-line-spacing"></span>
                </button>
            </div>
        </nav>
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                <div>
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{asset('assets/vendors/js/vendor.bundle.base.js')}}"></script>
<script src="{{asset('assets/vendors/chart.js/Chart.min.js')}}"></script>
<script src="{{asset('assets/vendors/progressbar.js/progressbar.min.js')}}"></script>
<script src="{{asset('assets/vendors/jvectormap/jquery-jvectormap.min.js')}}"></script>
<script src="{{asset('assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<script src="{{asset('assets/vendors/owl-carousel-2/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/js/off-canvas.js')}}"></script>
<script src="{{asset('assets/js/hoverable-collapse.js')}}"></script>
<script src="{{asset('assets/js/misc.js')}}"></script>
<script src="{{asset('assets/js/settings.js')}}"></script>
<script src="{{asset('assets/js/todolist.js')}}"></script>
<script src="{{asset('assets/js/dashboard.js')}}"></script>
</body>
</html>

