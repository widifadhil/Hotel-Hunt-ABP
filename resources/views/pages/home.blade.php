@extends('layouts.layout')
@section('content')
  <body>
  @include('includes.nav')
  
  <!-- Hero -->
  <section class="blue-bg" id="hero">
    <div class="container ">  
      <div class="d-flex justify-content-center"> 
        <h1>FIND YOUR BELOVE HOTEL</h1>
        </div> 
    </div> 
  </div>
  </section>
  <!-- Search Forms -->
  <div class="row d-flex justify-content-center">
          <div class="col-lg-6 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="100">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <!-- Destination -->
              <label for="">Destination</label>
                  '<div class= square-form>
                    <div class="input-group">
                    <span class="input-group-text border-0"><i class="fas fa-map-marker-alt fa-lg"></i></span>
                    <input type="text" class="form-control-dest" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping"> 
                    </div>
                  </div>

               <!-- Check in Checkout rooms -->
              <div class="row" style="margin-top: 20px; ">
                <div class="col-md-3 form-group">
                  <label for="">Check-in</label>
                  <div class="input-group">
                  <input type="date" name="name" class="form-control-row" id="Checkin" placeholder="" required>
                  </div>
                </div>
                <div class="col-md-3 form-group">
                  <label for="">Check-Out</label>
                  <div class="input-group">
                    <input type="date" name="name" class="form-control-row" id="Checkout" placeholder="Your Name" required>
                  </div>
                </div>
                <div class="col-md-3 form-group">
                  <label for="">Rooms</label>
                  <div class="input-group">
                    <input type="number" name="number" class="form-control-row-number" id="Room" placeholder="Your Name" required>
                  </div>
                </div>
                <div class="col-md-3 form-group">
                  <div class="button-search"><button type="submit" class="btn-search"><i class="bi bi-search" style="padding-right: 5px"></i>Search</button></div>
                </div>
              </div>
            </form>
          </div>
        </div>
  <!-- End Search Forms -->

  
  {{-- Rekomendasi Hotel --}}
  <div class="container" style="padding-bottom: 15vh">
    <div class="container pt-5 mt-5 d-flex justify-content-start">
      <div class="section-title">
        <h2 class="" style="color: black">Recommendation Hotels</h2>
      </div>
    </div>
  <!-- Card Rekomendasi Hotel -->
      {{-- > --}}
    <section class="product"> 
        <button class="pre-btn"><img src="img/arrow.png" alt=""></button>
        <button class="nxt-btn"><img src="img/arrow.png" alt=""></button>
        <div class="container d-flex justify-content-start">  
          <div class="product-container">
            <div class="col-sm-3" id="rec-hotel">
              <a href="#" class="card">
                <h6 class="card-city">Buah Batu</h6>
                  <img class="card-img-top" src="img/traveling.jpeg" alt="Card image cap">
                  
                  <div class="card-body">
                    <h5 class="card-title">Hotel Utap Bandung</h5>
                    <p class="card-text">Rp 200.000</p>
                </div>  
              </a>
            </div>
            <div class="col-sm-3" id="rec-hotel">
              <a href="#" class="card">
                <h6 class="card-city">Buah Batu</h6>
                  <img class="card-img-top" src="img/traveling.jpeg" alt="Card image cap">
                  
                  <div class="card-body">
                    <h5 class="card-title">Hotel Utap Bandung</h5>
                    <p class="card-text">Rp 200.000</p>
                </div>  
              </a>
            </div>
            <div class="col-sm-3" id="rec-hotel">
              <a href="#" class="card">
                <h6 class="card-city">Buah Batu</h6>
                  <img class="card-img-top" src="img/traveling.jpeg" alt="Card image cap">
                  
                  <div class="card-body">
                    <h5 class="card-title">Hotel Utap Bandung</h5>
                    <p class="card-text">Rp 200.000</p>
                </div>  
              </a>
            </div>
            <div class="col-sm-3" id="rec-hotel">
              <a href="#" class="card">
                <h6 class="card-city">Buah Batu</h6>
                  <img class="card-img-top" src="img/traveling.jpeg" alt="Card image cap">
                  
                  <div class="card-body">
                    <h5 class="card-title">Hotel Utap Bandung</h5>
                    <p class="card-text">Rp 200.000</p>
                </div>  
              </a>
            </div>
            <div class="col-sm-3" id="rec-hotel">
              <a href="#" class="card">
                <h6 class="card-city">Buah Batu</h6>
                  <img class="card-img-top" src="img/traveling.jpeg" alt="Card image cap">
                  
                  <div class="card-body">
                    <h5 class="card-title">Hotel Utap Bandung</h5>
                    <p class="card-text">Rp 200.000</p>
                </div>  
              </a>
            </div>
            <div class="col-sm-3" id="rec-hotel">
              <a href="#" class="card">
                <h6 class="card-city">Buah Batu</h6>
                  <img class="card-img-top" src="img/traveling.jpeg" alt="Card image cap">
                  
                  <div class="card-body">
                    <h5 class="card-title">Hotel Utap Bandung</h5>
                    <p class="card-text">Rp 200.000</p>
                </div>  
              </a>
            </div>
          </div>
      </div>
    </section>
</div>
  <!-- End Card Rekomendasi Hotel -->

  <!-- About Section -->
  <section id="about" class="about" style="padding-bottom: 30vh">
      <div class="container pt-5">
        <div class="row justify-content-between">
          <div class="col-lg-5 d-flex align-items-center justify-content-center about-img">
            <img src="img/Group_95.png" class="img-fluid" alt="" data-aos="zoom-in">
          </div>
          <div class="col-lg-6 pt-5 pt-lg-0">
            <h2>Welcome To HotelHunt</h2>
            <h1 data-aos="fade-up">Find Your Best Hotel</h1>
            <p data-aos="fade-up" data-aos-delay="100">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean auctor at sed fermentum nec. Varius blandit sed feugiat adipiscing ante imperdiet posuere diam. Sagittis tortor, vitae, nibh diam viverra suspendisse turpis. Nunc gravida arcu, aliquam auctor elementum tempus risus mi. Orci, et laoreet tempor vulputate nulla. Eros in consequat, massa, dignissim pharetra praesent. Vitae etiam dolor, porttitor in. Nec odio mauris proin purus feugiat. Scelerisque in ipsum quis ut in sem tempor. Urna vulputate aliquam tristique nulla ornare sit aliquam. Donec volutpat netus a tellus id arcu tellus amet sapien. Vitae, at fermentum, sed commodo, semper dictum amet sit.
              Scelerisque quam condimentum velit justo massa. In purus senectus diam dictumst sagittis vel. Turpis urna, ipsum cursus mauris viverra et, turpis. Aenean magna sapien cursus volutpat tristique quis cras netus. Ac tristique sed faucibus porta. Pharetra lorem nec ullamcorper aliquet ac felis. Aliquam morbi aliquet eleifend tempor in nisi.            </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End About Section -->
    @include('includes.footer')
    <script src="js/script.js"></script>
  </body>
@endsection