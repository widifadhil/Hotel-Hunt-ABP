@extends('layouts.layout')
@section('content')
<body id="hdetail">
  @include('includes.nav')
    <div class="container" id="content-hdetail">
      <div class="d-flex justify-content-center" style="padding-bottom:20px">
        
        <div class="col-lg-9 pd-5 mt-5 mt-lg-0" id="hotel-view">
          <div style="padding-bottom: 20px">
            <h4>Summary</h4>
          <h6 style="color: #707070;">Fill in contact details below</h6>
          </div>
          <div class="row" style="padding-bottom:20px">
              <div class="col" style="background: white; border-radius:10px;padding-bottom:20px">
                <div class="col p-3">
                  <h5 style="font-weight: 600;">Your Information</h5>
                  <div class="d-flex justify-content-center pb-3"><hr width="1000px" style="height:2px"></div>
                    <form action="">
                    <div class="row d-flex" style="padding-bottom:10px">
                      <div class="col">
                          <label for="" style="padding-bottom:5px">Contact Name</label>
                          <input type="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                      </div>
                    </div>
                    <div class="row d-flex" style="padding-bottom:10px">
                      <div class="col">
                          <label for="" style="padding-bottom:5px">Mobile Number</label>
                          <input type="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                      </div>
                      <div class="col">
                          <label for="" style="padding-bottom:5px">Email Address</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                      </div>
                    </div>
                  </form>

                </div>
              </div>
              
          </div>
          <div class="row" style="padding-bottom:20px">
              <div class="col" style="background: white; border-radius:10px;padding-bottom:20px">
                <div class="col" style="padding:10px; background: white; border-radius:10px">
              <h5 style="padding:5px;font-weight: 600;">Utap Hotel Bandung</h5>
              {{-- hr --}}
              <div class="d-flex justify-content-between" style="margin-top: -15px"><hr width="1000px" style="height:2px"></div>
              {{-- end hr --}}

              <div class="row d-flex justify-content-center" style="padding-bottom:10px">
                  <div class="col-5">
                    <h6 style="color: #9D9D9D; font-weight:600">Check-in</h6>
                    <h6 style="color: #9D9D9D; font-weight:400">Mon, 14 Mar 2022 <span><br>From 15.00</span></h6>
                  </div>
                  <div class="col-4">
                    <h6 style="color: #9D9D9D; font-weight:600">Check-in</h6>
                    <h6 style="color: #9D9D9D; font-weight:400">Mon, 14 Mar 2022 <span><br>From 15.00</span>
                    </h6>
                  </div>
              </div>

              <div class="row d-flex justify-content-center">
                  <div class="col-5">
                    <h6 style="color: #9D9D9D; font-weight:600">Room Type</h6>
                    <h6 style="color: #9D9D9D; font-weight:400">Twin Bed
                    </h6>
                  </div>
                  <div class="col-4">
                    <h6 style="color: #9D9D9D; font-weight:600">Guest Per Room</h6>
                    <h6 style="color: #9D9D9D; font-weight:400">1
                    </h6>
                  </div>
              </div>
              <div class="row justify-content-end">
                  <div class="col-5"></div>
                  <div class="col-4 pt-3" style="text-align: right;">
                    <div class="row" style="margin-bottom: -15px">
                      <p>Total Price</p>
                    </div>
                    <div class="row" style="">
                      <h2>Rp 200.000</h2>
                    </div>
                    
                    <button class="btn btn-primary" type="button" style="width: 223px;height: 41px;background: #0A9CDF;border-radius: 10px;border:0px">Continue</button>
                  </div>
                </div>
            </div>
              </div>
              
          </div>

          
          

          
            
        </div>
      </div>
      
    </div>
  @include('includes.footer')  
</body>    
@endsection