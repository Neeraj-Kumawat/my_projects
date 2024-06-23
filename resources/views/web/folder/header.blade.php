<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from themes.potenzaglobalsolutions.com/html/fitness/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Nov 2023 08:55:35 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Fitness - Gym Trainer & Yoga HTML5 Template" />
    <meta name="author" content="potenzaglobalsolutions.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{settingsContentByKey('site_title') }}</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('public/settinges/' . settingsContentByKey('favicon')) }}" />

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&amp;family=Teko:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">

    <!-- CSS Global Compulsory (Do not remove)-->
    <link rel="stylesheet" href="{{ url('assets/assets/css/font-awesome/all.min.css') }}" />
    <link rel="stylesheet" href="{{ url('assets/assets/css/flaticon/flaticon.css') }}" />
    <link rel="stylesheet" href="{{ url('assets/assets/css/bootstrap/bootstrap.min.css') }}" />

    <!-- Page CSS Implementing Plugins (Remove the plugin CSS here if site does not use that feature)-->
    <link rel="stylesheet" href="{{ url('assets/assets/css/owl-carousel/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ url('assets/assets/css/swiper/swiper.min.css') }}" />
    <link rel="stylesheet" href="{{ url('assets/assets/css/animate/animate.min.css') }}"/>
    <link rel="stylesheet" href="{{ url('assets/assets/css/owl-carousel/owl.carousel.min.css') }}"/>
    <link rel="stylesheet" href="{{ url('assets/assets/css/slick/slick-theme.css') }}"/>
    <link rel="stylesheet" href="{{ url('assets/assets/css/range-slider/ion.rangeSlider.min.css') }}"/>
    <link rel="stylesheet" href="{{ url('assets/assets/css/select2/select2.css') }}"/>
    <link rel="stylesheet" href="{{ url('assets/assets/css/magnific-popup/magnific-popup.css') }}"/>
    

    <!-- Template Style --> 
    <link rel="stylesheet" href="{{ url('assets/assets/css/style.css') }}" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
<script>
    // Initialize Toastr
    toastr.options = {
        "positionClass": "toast-top-right",
        "progressBar": true,
        "timeOut": "3000"
    };


 
</script>






  </head>

<body>

<!--=================================
header -->
<header class="header header-transparent default">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <nav class="navbar navbar-static-top navbar-expand-lg header-sticky">
            <a class="navbar-brand" href="{{ url('/') }}">
              <img class="img-fluid logo" src="{{ asset('public/settinges/' . settingsContentByKey('logo')) }} " alt="logo">
            </a>
                 <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarmenu" aria-controls="navbarmenu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-align-left"></i>
              </button>
              <div class="navbar-collapse collapse justify-content-center" id="navbarmenu">
                <ul class="nav navbar-nav">
                  <li class="nav-item dropdown {{ Request::is('/') ? 'active' : '' }}">
                      <a class="nav-link {{ Request::is('/') ? 'text-danger' : '' }}" href="{{ url('/') }}" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">Home</a>
                  </li>
                  <li class="dropdown nav-item {{ Request::is('about-us') ? 'active' : '' }}">
                      <a class="nav-link {{ Request::is('about-us') ? 'text-danger' : '' }}" href="{{ url('about-us') }}" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">About Us</a>
                  </li>
                  <ul class="nav navbar-nav">
                    <li class="nav-item dropdown {{ Request::is('gallery') ? 'active' : '' }}">
                      <a class="nav-link {{ Request::is('gallery') ? 'text-danger' : '' }}" href="{{ url('gallery') }}" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">Gallery</a>
                  </li>
                    <li class="nav-item dropdown {{ Request::is('blog') ? 'active' : '' }}">
                        <a class="nav-link {{ Request::is('blog') ? 'text-danger' : '' }}" href="{{ url('blog') }}" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
                    </li>
                    <li class="dropdown nav-item {{ Request::is('faqs') ? 'active' : '' }}">
                        <a class="nav-link {{ Request::is('faqs') ? 'text-danger' : '' }}" href="{{ url('faqs') }}" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">Faqs</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav">
                  <li class="nav-item dropdown {{ Request::is('contact-us') ? 'active' : '' }}">
                      <a class="nav-link {{ Request::is('contact-us') ? 'text-danger' : '' }}" href="{{ url('contact-us') }}" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">Contact-Us</a>
                  </li>
                 
              </ul>
      
              </ul>
              {{-- <li class="nav-item dropdown btn btn-primary btn-skew btn-md shape-svg">
                <a class="nav-link dropdown-toggle text-white" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Login <i class="fas fa-chevron-down fa-xs"></i>
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="{{url('admin/my-profile')}}">My Profile</a></li>
                  <li><a class="dropdown-item" href="{{url('web-login')}}">Login</a></li>
                  <li><a class="dropdown-item" href="{{url('web-logout')}}">Logout</a></li>
                  
                </ul>
              </li> --}}
              
              
        </div>
      <div class="add-listing d-none d-sm-block">       
    <ul>
        @guest
            <li>
                <a class="btn btn-primary btn-skew btn-md shape-svg" href="{{ url('web-login') }}">
                    <span>Login</span>
                </a>
            </li>
        @else 
            <li>
                <form action="{{ url('web-logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-primary btn-skew btn-md shape-svg">
                        <span>Log=-=-=-=-out</span>
                    </button>
                </form>
            </li>
        @endguest
    </ul>
</div>

          <div class="add-listing d-none d-sm-block">       
          <ul>
            <li><a class="btn btn-primary btn-skew btn-md shape-svg" href="{{ url('pricing-plans') }}">
              <span>Membership</span>
            </a>
            </li>
          </ul>
        </div>
      </nav>
   </div>
  </div>
</div>
</header>
<!--=================================
 header -->