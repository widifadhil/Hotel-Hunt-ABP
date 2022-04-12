<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="/home"><img src="img/logo_biru.png" alt=""></a>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href=index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          
          @guest
              <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
              <li><a class="nav-link scrollto active" href="#about">About</a></li>
              <li><a class="login" href="/login">Login</a></li>
          @endguest
          @auth
            <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
            <li><a class="nav-link scrollto active" href="#about">About</a></li>
            <li><a class="nav-link   active" href="/myaccount"><i class="fa-regular fa-circle-user fa-xs" style="padding-right: 5px"></i> {{auth()->user()->name}}</a></li>
            
          @endauth
          
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->