@extends('layouts.layout')
@section('content')
<body id="findpage">
  
    @include('includes.nav')
    <section class="fun-fact" id="hero" style="background:#00AEEF;" >
    <div class="container">  
      <div class="d-flex justify-content-md-center" style="padding-top: 11vh"> 
        <div class="ini-fun col-lg-6" style="color: white">
          <img src="img/hotelhunt_putih.png" alt="" style="width:114px; height:18px;"> <br>
          <h2 style="padding-top: 5px">Fun Fact</h2>
          <p style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
         <div class="col-md-auto">
            <img src="img/bro.png" alt="hotel" class="fun-fact-image">
        </div> 
    </div> 
  </div>
  </section>
  <!-- Search Forms -->
  <div class="row d-flex justify-content-center">
          <div class="col-lg-7 pb-5 pt-5 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="100">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form" id="search-find">
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
                  <input type="date" name="name" class="form-control-row" id="name" placeholder="" required>
                  </div>
                </div>
                <div class="col-md-3 form-group">
                  <label for="">Check-Out</label>
                  <div class="input-group">
                    <input type="date" name="name" class="form-control-row" id="name" placeholder="Your Name" required>
                  </div>
                </div>
                <div class="col-md-3 form-group">
                  <label for="">Check-Out</label>
                  <div class="input-group">
                    <input type="number" name="name" class="form-control-row-number" id="name" placeholder="Your Name" required>
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
  {{-- hr --}}
       <div class="d-flex justify-content-center pb-3"><hr width="880px" style="height:2px"></div>
    {{-- end HR --}}

    {{-- content --}}
     <div class="container d-flex justify-content-center pb-3">
       <div class="col-lg-3" style="margin-left: -30px">
         <div class="row pb-3">
           <div class="square"></div>
           </div>
          <div class="row pb-3">
           <div class="sortby">
              <div class="card-header" style="background: white; border-bottom: 1px solid #AFAFAF">
                Sort By
              </div>
              <div class="card-body">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                      <label class="form-check-label" for="flexRadioDefault1" style="font-weight:400">
                        Lowest Price
                      </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                      <label class="form-check-label" for="flexRadioDefault2" style="font-weight:400">
                        Highest Price
                      </label>
                  </div>
              </div>
            </div>
           </div>
           <div class="row pb-3">
           <div class="sortby">
              <div class="card-header" style="background: white; border-bottom: 1px solid #AFAFAF">
                Filter By
              </div>
              <div class="card-body">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="flexRadioDefault1">
                      <label class="form-check-label" for="flexRadioDefault1" style="font-weight:400">
                        <i class="star bi bi-star-fill"></i>
                      </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="flexRadioDefault2" checked>
                      <label class="form-check-label" for="flexRadioDefault2" style="font-weight:400">
                        <i class="star bi bi-star-fill"></i>
                        <i class="star bi bi-star-fill"></i>
                      </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="flexRadioDefault1">
                      <label class="form-check-label" for="flexRadioDefault1" style="font-weight:400">
                        <i class="star bi bi-star-fill"></i>
                        <i class="star bi bi-star-fill"></i>
                        <i class="star bi bi-star-fill"></i>
                      </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="flexRadioDefault2" checked>
                      <label class="form-check-label" for="flexRadioDefault2" style="font-weight:400">
                        <i class="star bi bi-star-fill"></i>
                        <i class="star bi bi-star-fill"></i>
                        <i class="star bi bi-star-fill"></i>
                        <i class="star bi bi-star-fill"></i>
                      </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="flexRadioDefault1">
                      <label class="form-check-label" for="flexRadioDefault1" style="font-weight:400">
                        <i class="star bi bi-star-fill"></i>
                        <i class="star bi bi-star-fill"></i>
                        <i class="star bi bi-star-fill"></i>
                        <i class="star bi bi-star-fill"></i>
                        <i class="star bi bi-star-fill"></i>
                      </label>
                  </div>
              </div>
            </div>
           </div>  
        </div>
        <div class="col-lg-5" style="margin-left: -30px">
         <div class="row pb-3">
           {{-- Card --}}
            <a href="#" class="card-found">
                <div class="card mb-3" style="width: 580px;">
                  <div class="row g-0" style=>
                    <div class="col-md-4">
                      <img src="img/card-found.png" class="card-img-top" alt="..." style="">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="card-title">Utap Hotel Bandung</h5>
                        <i class="star bi bi-star-fill"></i>
                        <i class="star bi bi-star-fill"></i>
                        <i class="star bi bi-star-fill"></i>
                        <i class="star bi bi-star-fill"></i>
                        <br>
                        <i class="loc bi bi-geo-alt-fill">Buah Batu, Bandung</i>
                        <div class="pt-4">
                          <div class="price d-flex justify-content-end" style="color: black">Rp 200.000 / 1 night</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </a>
            <a href="#" class="card-found">
                <div class="card mb-3" style="width: 580px;">
                  <div class="row g-0" style=>
                    <div class="col-md-4">
                      <img src="img/card-found.png" class="card-img-top" alt="..." style="">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="card-title">Utap Hotel Bandung</h5>
                        <i class="star bi bi-star-fill"></i>
                        <i class="star bi bi-star-fill"></i>
                        <i class="star bi bi-star-fill"></i>
                        <i class="star bi bi-star-fill"></i>
                        <br>
                        <i class="loc bi bi-geo-alt-fill">Buah Batu, Bandung</i>
                        <div class="pt-4">
                          <div class="price d-flex justify-content-end" style="color: black">Rp 200.000 / 1 night</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </a>
            <a href="#" class="card-found">
                <div class="card mb-3" style="width: 580px;">
                  <div class="row g-0" style=>
                    <div class="col-md-4">
                      <img src="img/card-found.png" class="card-img-top" alt="..." style="">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="card-title">Utap Hotel Bandung</h5>
                        <i class="star bi bi-star-fill"></i>
                        <i class="star bi bi-star-fill"></i>
                        <i class="star bi bi-star-fill"></i>
                        <i class="star bi bi-star-fill"></i>
                        <br>
                        <i class="loc bi bi-geo-alt-fill">Buah Batu, Bandung</i>
                        <div class="pt-4">
                          <div class="price d-flex justify-content-end" style="color: black">Rp 200.000 / 1 night</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </a>
            <a href="#" class="card-found">
                <div class="card mb-3" style="width: 580px;">
                  <div class="row g-0" style=>
                    <div class="col-md-4">
                      <img src="img/card-found.png" class="card-img-top" alt="..." style="">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="card-title">Utap Hotel Bandung</h5>
                        <i class="star bi bi-star-fill"></i>
                        <i class="star bi bi-star-fill"></i>
                        <i class="star bi bi-star-fill"></i>
                        <i class="star bi bi-star-fill"></i>
                        <br>
                        <i class="loc bi bi-geo-alt-fill">Buah Batu, Bandung</i>
                        <div class="pt-4">
                          <div class="price d-flex justify-content-end" style="color: black">Rp 200.000 / 1 night</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </a>
            <a href="#" class="card-found">
                <div class="card mb-3" style="width: 580px;">
                  <div class="row g-0" style=>
                    <div class="col-md-4">
                      <img src="img/card-found.png" class="card-img-top" alt="..." style="">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="card-title">Utap Hotel Bandung</h5>
                        <i class="star bi bi-star-fill"></i>
                        <i class="star bi bi-star-fill"></i>
                        <i class="star bi bi-star-fill"></i>
                        <i class="star bi bi-star-fill"></i>
                        <br>
                        <i class="loc bi bi-geo-alt-fill">Buah Batu, Bandung</i>
                        <div class="pt-4">
                          <div class="price d-flex justify-content-end" style="color: black">Rp 200.000 / 1 night</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </a>
            {{-- End Card --}}
           </div>
        </div>
     </div>
  @include('includes.footer')  
</body>    
@endsection