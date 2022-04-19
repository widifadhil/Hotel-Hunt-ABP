<?php

if (!isset($_GET['id']) || !isset($_GET['idroom'])) {
    header('Location: find');
    exit();
}

$id = $_GET['id'];
$idroomtype = $_GET['idroom'];

$data = file_get_contents('json/hotel.json');
$datahotel = json_decode($data, true);
$hotel = $datahotel[$id];

?>
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
                                <div class="d-flex justify-content-center pb-3">
                                    <hr width="1000px" style="height:2px">
                                </div>
                                <form action="">
                                    <div class="row d-flex" style="padding-bottom:10px">
                                        <div class="col">
                                            <label for="" style="padding-bottom:5px">Contact Name</label>
                                            <input type="" class="form-control" id="exampleInputEmail1"
                                                aria-describedby="emailHelp">
                                        </div>
                                    </div>
                                    <div class="row d-flex" style="padding-bottom:10px">
                                        <div class="col">
                                            <label for="" style="padding-bottom:5px">Mobile Number</label>
                                            <input type="" class="form-control" id="exampleInputEmail1"
                                                aria-describedby="emailHelp">
                                        </div>
                                        <div class="col">
                                            <label for="" style="padding-bottom:5px">Email Address</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1"
                                                aria-describedby="emailHelp">
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>

                    </div>
                    <div class="row" style="padding-bottom:20px">
                        <div class="col" style="background: white; border-radius:10px;padding-bottom:20px">
                            <div class="col-md rounded " id="main-container" style="margin-top: 25px">
                                <h3 id="main-text-style">
                                    <i class="bi bi-building" style="color: rgb(16,156,220)"></i>
                                    &nbsp; <?= $hotel['namahotel'] ?>
                                </h3>
                                <hr style="height: 2px">
                                <div class="row justify-content-center" style="color: grey; margin-bottom: 20px">
                                    <div class="col-md-6">
                                        <h5 id="main-text-style">Check-In</h5>
                                        <h6 id="booking-content">Mon, 14 Mar 2022, </h6>
                                        <h6 id="booking-content">From 15:00</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h5 id="main-text-style">Check-Out</h5>
                                        <h6 id="booking-content">Tue, 15 Mar 2022, </h6>
                                        <h6 id="booking-content">Before 12:00</h6>
                                    </div>
                                </div>
                                <div class="row justify-content-center" style="color: grey">
                                    <div class="col-md-6">
                                        <h5 id="main-text-style">Room Type</h5>
                                        <h6 id="booking-content"><?= $hotel['roomtype'][$idroomtype]['nama-tipe'] ?></h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h5 id="main-text-style">Guest per Room</h5>
                                        <h6 id="booking-content"><?= $hotel['roomtype'][$idroomtype]['characteristics-2'] ?>
                                        </h6>
                                    </div>
                                </div>
                                <hr style="height: 2px">
                                <div class="price" style="text-align: right">
                                    <h5 style="padding-top: 10px; font-family: Poppins, sans-serif;">Total Price</h5>
                                    <h3 id="teks-harga">Rp <?= $hotel['roomtype'][$idroomtype]['harga'] ?></h3>
                                    <button type="button" class="btn btn-primary" id="booking-btn" data-toggle="modal"
                                        data-target="#booking-modal">Book Now!</button>

                                    <!-- MODAL -->
                                    <div class="modal fade" id="booking-modal" role="dialog"
                                        aria-labelledby="booking-modal-label" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content" style="padding: 30px">
                                                <div class="modal-header justify-content-center">
                                                    <h3 class="modal-title"
                                                        style="font-family: Poppins, sans-serif; color: rgb(16, 156, 220); font-weight: bold">
                                                        <div class="text-center">
                                                            <h1 style="font-size: 140px">
                                                                <i class="fa-solid fa-circle-check"></i>
                                                            </h1>
                                                        </div>
                                                        Booking Success
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END MODAL -->

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
