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
                        <div class="d-flex justify-content-center" style="margin-top: -15px">
                            <hr width="900px" style="height:3px">
                        </div>
                        <div style="margin-bottom: 30vh">
                            <div class="row p-3">
                                <div class="col">
                                    <i class="b-icon fa-solid fa-gear fa-xl" style="padding-right:10px"></i>
                                    <a href="/myaccount" class="b-a"><span
                                            style="font-weight: 500;font-size: 20px;line-height: 20px;">My Account</span>
                                    </a>
                                </div>
                            </div>
                            <div class="row p-3">
                                <div class="col">
                                    <i class="b-icon fa-solid fa-book-open fa-xl" style="padding-right:10px"></i>
                                    <a href="/mybook" class="b-a"><span
                                            style="font-weight: 500;font-size: 20px;line-height: 20px;">My Book</span> </a>
                                </div>
                            </div>
                            <div class="row p-3">
                                <div class="col">
                                    <i class="b-icon fa-solid fa-file-invoice fa-xl" style="padding-right:10px"></i>
                                    <a href="" class="b-a"><span
                                            style="font-weight: 500;font-size: 20px;line-height: 20px;">Purchase List</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <form action="/logout" method="post">
                            @csrf
                            <div class="d-grid gap-2">
                                <button class="btn btn-primary" type="submit"
                                    style="background-color: #00AEEF;border:0px"><i class="fa-solid fa-power-off"
                                        style="padding-right:5px"></i>Log Out</button>
                            </div>
                        </form>

                    </div>
                    {{-- End Kotak Kiri --}}

                    {{-- Kotak Kanan --}}
                </div>
                <div class="col-lg-6 pd-5 mt-5 mt-lg-0" id="hotel-view">
                    <h3 style="color: #757575;">My Account</h3>
                    {{-- list book --}}
                    <div class="container" style="padding-top:15px">
                        <div class="col" style="padding:10px; background: white; border-radius:10px">
                            <h5 style="padding:5px;font-weight: 600;">Personal Data</h5>
                            {{-- hr --}}
                            <div class="d-flex justify-content-between" style="margin-top: -15px">
                                <hr width="900px" style="height:2px">
                            </div>
                            {{-- end hr --}}
                            <form action="">
                                <div class="row d-flex" style="padding-bottom:10px">
                                    <div class="col">
                                        <label for="" style="padding-bottom:5px">Full Name</label>
                                        <input type="" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">
                                    </div>
                                </div>
                                <div class="row d-flex" style="padding-bottom:10px">
                                    <div class="col">
                                        <label for="" style="padding-bottom:5px">Username</label>
                                        <input type="" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">
                                    </div>
                                </div>
                                <div class="row d-flex" style="padding-bottom:10px">
                                    <div class="col">
                                        <label for="" style="padding-bottom:5px">Password</label>
                                        <input type="" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">
                                    </div>
                                </div>
                                <div class="row d-flex" style="padding-bottom:20px">
                                    <div class="col">
                                        <label for="" style="padding-bottom:5px">Email</label>
                                        <input type="" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">
                                    </div>
                                </div>
                            </form>
                            <div class="d-grid gap-2">
                                <button class="btn btn-primary" type="button"
                                    style="background-color: #00AEEF;border:0px">Submit</button>
                            </div>
                        </div>
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
