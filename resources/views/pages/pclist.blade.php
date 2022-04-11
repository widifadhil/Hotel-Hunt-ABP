@extends('layouts.layout')
@section('content')
<body id="mybook">
    @include('includes.nav')
    <div class="container" id="conmybook">
        <div class="d-flex justify-content-center">
        {{-- Kotak kiri --}}
        <div class="col-lg-3 pd-5 mt-5 mt-lg-0" id="hotel-view" style="padding-right: 30px;padding-bottom:20vh;">
          <div class="container" style="background: white; border-radius:10px;height: 694px;">
            <div class="row p-3">
              <div class="circular--landscape">
                <img src="img/dodo.jpeg" alt="dodo">
              </div> 
              <div class="col-md-8" style="padding-top: 15px">
                  <h4 style="font-weight: 500;font-size: 22px;margin-bottom:-2px">Ini Username</h4>
                  <p style="font-weight: 500;font-size: 13px;color: #AFAFAF;">08261971659</p>
              </div>
            </div>
            <div class="d-flex justify-content-center" style="margin-top: -15px"><hr width="900px" style="height:3px"></div>
            <div style="margin-bottom: 30vh">
              <div class="row p-3">
                <div class="col">
                  <i class="b-icon fa-solid fa-gear fa-xl" style="padding-right:10px"></i>
                  <a href="" class="b-a"><span style="font-weight: 500;font-size: 20px;line-height: 20px;">My Account</span> </a>
                </div>
              </div>
              <div class="row p-3">
                <div class="col">
                  <i class="b-icon fa-solid fa-book-open fa-xl" style="padding-right:10px"></i>
                  <a href=""class="b-a"><span style="font-weight: 500;font-size: 20px;line-height: 20px;">My Book</span> </a>
                </div>
              </div>
              <div class="row p-3">
                <div class="col">
                  <i class="b-icon fa-solid fa-file-invoice fa-xl" style="padding-right:10px"></i>
                  <a href=""class="b-a"><span style="font-weight: 500;font-size: 20px;line-height: 20px;">Purchase List</span> </a> 
                </div>
              </div>
            </div>
            <div class="d-grid gap-2">
              <button class="btn btn-primary" type="button" style="background-color: #00AEEF;border:0px"><i class="fa-solid fa-power-off" style="padding-right:5px"></i>Log Out</button>
            </div>
          </div>
            {{-- End Kotak Kiri --}}

            {{-- Kotak Kanan --}}
        </div>
        <div class="col-lg-6 pd-5 mt-5 mt-lg-0" id="hotel-view">
          <h3 style="color: #757575;">Purchase List</h3>
          {{-- list book --}}
            <div class="container" style="padding-top:15px;">
              
              <div class="col" style="padding:10px; background: white; border-radius:10px ;filter: drop-shadow(0px 0px 6px rgba(154, 154, 154, 0.44));border: 1px solid #AFAFAF;">
                <div class="row d-flex justify-content-between">
                    <div class="col-5">
                      <h6 style="color: #9D9D9D; font-weight:600">Booking ID</h6>
                    </div>
                    <div class="col-md-auto">
                      <h6 style="color: black; font-weight:600">Rp 200.000</h6>
                      </h6>
                    </div>
                </div>
                <div class="row" style="padding-top:5px;">
                    <div class="col" style="background: #E8E8E8;margin-left:2px;margin-right:2px"> <h6 style="padding-top: 5px">Hotel Utap Bandung</h6></div>
                </div>
                <div class="row" style="padding-top:10px;margin-bottom:-5px">
                    <div class="col" style="color: white"> <h6 style="background:#00AEEF;padding-left:10px;padding-top:5px;font-weight: 500;font-size: 14px;height: 28px;border-radius:35px;width: 63px;">Lunas</h6></div>
                </div>
              </div>
            </div>
            {{-- End list Book --}}

            {{-- list book --}}
            <div class="container" style="padding-top:15px;">
              
              <div class="col" style="padding:10px; background: white; border-radius:10px ;filter: drop-shadow(0px 0px 6px rgba(154, 154, 154, 0.44));border: 1px solid #AFAFAF;">
                <div class="row d-flex justify-content-between">
                    <div class="col-5">
                      <h6 style="color: #9D9D9D; font-weight:600">Booking ID</h6>
                    </div>
                    <div class="col-md-auto">
                      <h6 style="color: black; font-weight:600">Rp 200.000</h6>
                      </h6>
                    </div>
                </div>
                <div class="row" style="padding-top:5px;">
                    <div class="col" style="background: #E8E8E8;margin-left:2px;margin-right:2px"> <h6 style="padding-top: 5px">Hotel Utap Bandung</h6></div>
                </div>
                <div class="row" style="padding-top:10px;margin-bottom:-5px">
                    <div class="col" style="color: white"> <h6 style="background:#00AEEF;padding-left:10px;padding-top:5px;font-weight: 500;font-size: 14px;height: 28px;border-radius:35px;width: 63px;">Lunas</h6></div>
                </div>
              </div>
            </div>
            {{-- End list Book --}}

            {{-- list book --}}
            <div class="container" style="padding-top:15px;">
              
              <div class="col" style="padding:10px; background: white; border-radius:10px ;filter: drop-shadow(0px 0px 6px rgba(154, 154, 154, 0.44));border: 1px solid #AFAFAF;">
                <div class="row d-flex justify-content-between">
                    <div class="col-5">
                      <h6 style="color: #9D9D9D; font-weight:600">Booking ID</h6>
                    </div>
                    <div class="col-md-auto">
                      <h6 style="color: black; font-weight:600">Rp 200.000</h6>
                      </h6>
                    </div>
                </div>
                <div class="row" style="padding-top:5px;">
                    <div class="col" style="background: #E8E8E8;margin-left:2px;margin-right:2px"> <h6 style="padding-top: 5px">Hotel Utap Bandung</h6></div>
                </div>
                <div class="row" style="padding-top:10px;margin-bottom:-5px">
                    <div class="col" style="color: white"> <h6 style="background:#00AEEF;padding-left:10px;padding-top:5px;font-weight: 500;font-size: 14px;height: 28px;border-radius:35px;width: 63px;">Lunas</h6></div>
                </div>
              </div>
            </div>
            {{-- End list Book --}}
          </div>
        </div>
          
          {{--  --}}
          
            
        </div>
        {{-- End Kotak Kanan --}}
      </div>
    </div>
  @include('includes.footer')  
</body>    
@endsection