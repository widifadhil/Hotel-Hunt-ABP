<?php

if ( !isset($_GET["id"]) ) {
  header("Location: find");
  exit;
}

$id = $_GET["id"];

$data = file_get_contents('json/hotel.json');
$datahotel = json_decode($data, true);
$hotel = $datahotel[$id];

$jumlahfasilitas = $hotel["jumlah-fasilitas"];
$jumlahbintang = $hotel["star"];
?>
@extends('layouts.layout')
@section('content')

    <body id="hdetail">
        @include('includes.nav')
         <!-- DESKRIPSI HOTEL -->
    <div class="container" style="margin-top:100px" id="content-hdetail">
      <div class="row justify-content-center">
        <div class="col-md-9 col-11 rounded  id="main-container">
          <h3 id="judul-container"><?= $hotel["namahotel"] ?></h3>
          <h4 id="bintang">
            <?php for($i=0; $i<$jumlahbintang; $i++): ?>
            <i class="bi bi-star-fill"></i>
            <?php endfor; ?>
          </h4>
          <h5 id="lokasi">
            <i class="bi bi-geo-alt-fill"></i>
            <?= $hotel["lokasi"] ?>
          </h5>
          <hr style="height: 2px">
          <img src="<?= $hotel["image"][0] ?>" alt="imghotel-1" class="img-fluid ratio rounded" style="padding-top: 8px; object-fit: cover; aspect-ratio: 16/9">
          <div class="row" style="padding-right: 6px">
            <div class="col-md-3" id="small-img">
              <img src="<?= $hotel["image"][1] ?>" alt="imghotel-2" class="img-fluid ratio rounded" style="object-fit: cover; aspect-ratio: 16/9">
            </div>
            <div class="col-md-3" id="small-img"">
              <img src="<?= $hotel["image"][2] ?>" alt="imghotel-3" class="img-fluid ratio rounded" style="object-fit: cover; aspect-ratio: 16/9">
            </div>
            <div class="col-md-3" id="small-img"">
              <img src="<?= $hotel["image"][3] ?>" alt="imghotel-4" class="img-fluid ratio rounded" style="object-fit: cover; aspect-ratio: 16/9">
            </div>
            <div class="col-md-3" id="small-img"">
              <img src="<?= $hotel["image"][4] ?>" alt="imghotel-5" class="img-fluid ratio rounded" style="object-fit: cover; aspect-ratio: 16/9">
            </div>
          </div>
          <div class="col-md-12" style="text-align: right">
            <h5 style="padding-top: 25px; font-family: Poppins, sans-serif">Price/Room/Night Starts From</h5>
            <h3 id="teks-harga">Rp <?= $hotel["harga"] ?></h3>
            <a href="#roomtype">
              <button type="button" class="btn btn-primary" id="main-btn">Select Room</button>
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- END DESKRIPSI HOTEL -->

    <!-- FACILITIES HOTEL -->
    <div class="container"">
      <div class="row justify-content-center">
        <div class="col-md-9 col-11 rounded shadow-sm" id="main-container">
          <h3 id="judul-container" style="padding-bottom: 25px">Facilities</h3>
          <div class="row justify-content-around" style="padding-right: 4px">
            <?php for($i=0; $i<$jumlahfasilitas; $i++): ?>
            <div class="col-md-2" style="text-align: center">
              <h1 id="color-logo-fasilitas">
              <i class="<?= $hotel["icon-fasilitas"][$i] ?>"></i>
              </h1>
              <h5 id="teks-fasilitas"><?= $hotel["nama-fasilitas"][$i] ?></h5>
            </div>
            <?php endfor; ?>
          </div>
        </div>
      </div>
    </div>
    <!-- END FACILITIES HOTEL -->

    <!-- LOCATION  HOTEL -->
    <div class="container"">
      <div class="row justify-content-center">
        <div class="col-md-9 col-11 rounded shadow-sm" id="main-container">
          <h3 id="judul-container" style="padding-bottom: 25px">Location Info</h3>
          <h5 id="lokasi">
            <i class="bi bi-geo-alt-fill"></i>
            <?= $hotel["lokasi"] ?>
          </h5>
          <iframe class="embed-responsive-item col-12" src="<?= $hotel["link-lokasi"] ?>" width="930" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </div>
    <!-- END LOCATION HOTEL -->

    <!-- ROOM TYPE HOTEL -->
    <?php $i=1; ?>
    <?php foreach ($hotel["roomtype"] as $row) : ?>
    <div class="container pb-3" id="roomtype">
      <div class="row justify-content-center">
        <div class="col-md-9 col-11 rounded shadow-sm" id="main-container">
          <h3 id="judul-container" style="padding-bottom: 25px">Room Type <?= $i; ?></h3>
          <div class="container">
            <div class="row justify-content-around">
              <div class="col-md-4 rounded">
                <img src="<?= $row["image"] ?>" alt="room-type 1" class="img-fluid ratio rounded" style="object-fit: cover; aspect-ratio: 1/1">
              </div>
              <div class="col-md-8 rounded" id="roomtype-container">
                <h5 style="font-weight: bold; padding-bottom: 7px"><?= $row["nama-tipe"] ?></h5>
                <div class="container">
                  <div class="row justify-content-start">
                    <div class="col-md-6">
                      <h6 id="teks-fasilitas"><?= $row["characteristics-1"] ?></h6>
                    </div>
                    <div class="col-md-6">
                      <h6 id="teks-fasilitas"><?= $row["characteristics-2"] ?></h6>
                    </div>
                  </div>
                </div>
                <hr style="height: 2px">
                <h6>
                <i class="<?= $row["icon-fasilitas-1"] ?>" id="color-logo-fasilitas"></i>
                  &nbsp; <?= $row["fasilitas-1"] ?> 
                </h6>
                <h6>
                <i class="<?= $row["icon-fasilitas-2"] ?>" id="color-logo-fasilitas"></i>
                  &nbsp; <?= $row["fasilitas-2"] ?> 
                </h6>
                <h6 style="font-weight: bold; padding-top: 5px">Description</h6>
                <div class="container">
                  <div class="row justify-content-between no-gutters">
                    <div class="col-md-9">
                      <p>
                      <?= $row["deskripsi"] ?> 
                      </p>
                    </div>
                    <div class="col-md-3" style="text-align: right">
                      <h6 id="teks-harga">Rp <?= $row["harga"] ?></h6>
                      <P>Room/Night</P>
                      <a href="book?id=<?= $id ?>&idroom=<?= $i-1 ?>">
                        <button type="button" class="btn btn-primary" id="roomtype-btn">Book Now!</button>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php $i++; ?>
    <?php endforeach; ?>
    <!-- END ROOM TYPE HOTEL -->
        @include('includes.footer')
    </body>
@endsection
