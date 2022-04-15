@extends('layouts.layout')
@section('content')

    <body id="hdetail">
        @include('includes.nav')
        <div class="container" id="content-hdetail">
            <div class="d-flex justify-content-center" style="padding-bottom:20px">

                <div class="col-lg-9 pd-5 mt-5 mt-lg-0" id="hotel-view">
                    <h6>Home / Hotel List / Detail</h6>
                    <div class="container" style="background: white; border-radius:10px;">
                        <div class="col p-3">
                            <h3>Utap Hotel Bandung</h3>
                            <i class="star bi bi-star-fill"></i>
                            <i class="star bi bi-star-fill"></i>
                            <i class="star bi bi-star-fill"></i>
                            <i class="star bi bi-star-fill"></i>
                            <i class="star bi bi-star-fill"></i><br>
                            <i class="fa-solid fa-location-dot p-1"></i>Buah Batu, Bandung, Jawa Barat, Indonesia
                            <div class="d-flex justify-content-center pb-3">
                                <hr width="900px" style="height:2px">
                            </div>
                            {{-- Carousel --}}
                            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel"
                                id="carousel">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                        class="active" aria-current="true" aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                        aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                        aria-label="Slide 3"></button>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="img/bro.png" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="img/jumbotron-01.png" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="img/traveling.jpeg" class="d-block w-100" alt="...">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button"
                                    data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button"
                                    data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                            {{-- carousel --}}
                            <div class="row justify-content-end">
                                <div class="col-5"></div>
                                <div class="col-4 pt-3" style="text-align: right;">
                                    <div class="row" style="margin-bottom: -15px">
                                        <p>Price/room/night starts from</p>
                                    </div>
                                    <div class="row" style="">
                                        <h2>Rp 200.000</h2>
                                    </div>

                                    <button class="btn btn-primary" type="button"
                                        style="width: 223px;height: 41px;background: #0A9CDF;border-radius: 10px;border:0px">Select
                                        Room</button>
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
