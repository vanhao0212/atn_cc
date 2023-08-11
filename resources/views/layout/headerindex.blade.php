<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
  
    <title>Arsha Bootstrap Template - Index</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
  
    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  
    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  
    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
  
    <!-- =======================================================
    * Template Name: Arsha
    * Updated: Jul 27 2023 with Bootstrap v5.3.1
    * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
  </head>
  
  <body>
  
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
      <div class="container d-flex align-items-center">
  
        <h1 class="logo me-auto"><a href="/">FPT Shop</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
  
        <nav id="navbar" class="navbar">
          <ul>
            <li class="nav-item"><a class="nav-link" href="{{ route('index')}}">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="">Product</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('dashboard')}}">Management</a></li>
            <li>
              <form action="{{ route('products.search') }}" method="GET">
                <input type="text" name="search" placeholder="Search">
                <button type="submit">Search</button>
              </form>
            </li>

            <li class="nav-item">
                @if ($user)
                <div class="avatar">
                    <!-- <img src="{{ $user->avatar_url }}" alt="AVATAR" class="avatar-img" onclick="toggleAccountInfo()"> -->
                    <img src="https://png.pngtree.com/element_our/20190529/ourlarge/pngtree-avatar-pattern-flat-cartoon-user-image_1200105.jpg" alt="AVATAR" class="avatar-img" onclick="toggleAccountInfo()" style="margin-left: 100px"><a style="margin-left: 5px; ">{{ $user->display_name }}</a> 
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                                
                        <button type="submit" class="logout-btn" style="font-size:20px">Logout</button>
                    </form>
                </div>
                
                @else
                <ul>
                  <li class="nav-items"><a href="{{ route('login')}}">Login</a></li>
                  <li class="nav-items"><a href="{{ route('register')}}">Register</a></li>
                </ul>  
                
                @endif
            </li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
  
      </div>
    </header><!-- End Header -->