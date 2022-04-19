<?php
$data = file_get_contents('json/hotel.json');
$hotel = json_decode($data, true);

?>
@extends('layouts.layout')
@section('content')

    <body id="findpage">

        @include('includes.nav')
        <section class="fun-fact" id="hero" style="background:#00AEEF;">
            <div class="container">
                <div class="d-flex justify-content-md-center" style="padding-top: 11vh">
                    <div class="ini-fun col-lg-6" style="color: white">
                        <img src="img/hotelhunt_putih.png" alt="" style="width:114px; height:18px;"> <br>
                        <h2 style="padding-top: 5px">Fun Fact</h2>
                        <p style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                            nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
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
                    '<div class=square-form>
                        <div class="input-group">
                            <span class="input-group-text border-0"><i class="fas fa-map-marker-alt fa-lg"></i></span>
                            <input type="text" class="form-control-dest" placeholder="Username" aria-label="Username"
                                aria-describedby="addon-wrapping">
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
                                <input type="date" name="name" class="form-control-row" id="name" placeholder="Your Name"
                                    required>
                            </div>
                        </div>
                        <div class="col-md-3 form-group">
                            <label for="">Check-Out</label>
                            <div class="input-group">
                                <input type="number" name="name" class="form-control-row-number" id="name"
                                    placeholder="Your Name" required>
                            </div>
                        </div>
                        <div class="col-md-3 form-group">
                            <div class="button-search"><button type="submit" class="btn-search"><i
                                        class="bi bi-search" style="padding-right: 5px"></i>Search</button></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- End Search Forms -->
        {{-- hr --}}
        <div class="d-flex justify-content-center pb-3">
            <hr width="880px" style="height:2px">
        </div>
        {{-- end HR --}}

        {{-- content --}}
        <div class="container d-flex justify-content-center pb-3">
            <div class="col-lg-3" style="margin-left: -30px">
                <div class="row pb-3">
                    <div class="container" style="margin-bottom: 30px">
                        <div class="row justify-content-center">
                            <div class="col-md-12 col-12 g-0 shadow-sm">
                                <iframe class="embed-responsive-item col-12"
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126748.56347863129!2d107.57311687144541!3d-6.903444341655675!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6398252477f%3A0x146a1f93d3e815b2!2sBandung%2C%20Kota%20Bandung%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1650214402152!5m2!1sid!2sid"
                                    width="900" height="250" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row pb-3">
                    <div class="sortby">
                        <div class="card-header" style="background: white; border-bottom: 1px solid #AFAFAF">
                            Sort By
                        </div>
                        <div class="card-body">
                            <div class="sort-form">
                                <input type="radio" class="form-check-input mt-1" name="sort-by-price" id="lowest-price">
                                <label for="lowest-price"
                                    style="font-family: Poppins, sans-serif; padding-left: 10px; padding-bottom: 10px">Lowest
                                    Price</label>
                                <br>
                                <input type="radio" class="form-check-input mt-1" name="sort-by-price" id="highest-price">
                                <label for="highest-price"
                                    style="font-family: Poppins, sans-serif; padding-left: 10px; padding-bottom: 10px">Highest
                                    Price</label>
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
                            <div class="sort-form">
                                <input type="checkbox" class="form-check-input mt-1" id="satu-bintang">
                                <label for="satu-bintang" style="color: gold; padding-left: 10px; padding-bottom: 10px">
                                    <i class="bi bi-star-fill"></i>
                                </label>
                                <br>
                                <input type="checkbox" class="form-check-input mt-1" id="dua-bintang">
                                <label for="dua-bintang" style="color: gold; padding-left: 10px; padding-bottom: 10px">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </label>
                                <br>
                                <input type="checkbox" class="form-check-input mt-1" id="tiga-bintang">
                                <label for="tiga-bintang" style="color: gold; padding-left: 10px; padding-bottom: 10px">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </label>
                                <br>
                                <input type="checkbox" class="form-check-input mt-1" id="empat-bintang">
                                <label for="empat-bintang" style="color: gold; padding-left: 10px; padding-bottom: 10px">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </label>
                                <br>
                                <input type="checkbox" class="form-check-input mt-1" id="lima-bintang">
                                <label for="lima-bintang" style="color: gold; padding-left: 10px; padding-bottom: 10px">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </label>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-5" id="list-card-hotel" style="margin-left: 30px">
                <?php foreach ($hotel as $row) : ?>
                <!-- CARD HOTEL -->
                <div class="container" id="card-hotel" style="margin-bottom: 20px">
                    <a href="hdetail?id=<?= $row['id'] ?>">
                        <div class="row justify-content-end">
                            <div class="col-md-3 col-12 g-0 shadow-sm">
                                <img class="img-fluid" src="<?= $row['image'][0] ?>" alt="hotel-img"
                                    style="object-fit: cover; aspect-ratio: 1/1">
                            </div>
                            <div class="col-md-9 col-12 g-0 shadow-sm"
                                style="background-color: white; padding: 10px; padding-left: 15px">
                                <h5 id="main-text-style" style="color: black"><?= $row['namahotel'] ?></h5>
                                <h6 style="color: gold">
                                    <?php for($i=0; $i<$row["star"]; $i++): ?>
                                    <i class="bi bi-star-fill"></i>
                                    <?php endfor; ?>
                                </h6>
                                <h6 style="color: grey; margin-top:10px">
                                    <i class="bi bi-geo-alt-fill"></i>
                                    <?= $row['lokasi'] ?>
                                </h6>
                                <h6 id="main-text-style"
                                    style="text-align: right; margin-top: 10px; color: rgb(16, 156, 220)">Rp
                                    <?= $row['harga'] ?>/night</h6>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- END CARD HOTEL -->
                <?php endforeach; ?>
            </div>
            <!-- END BAGIAN KANAN CONTENT -->
        </div>
        @include('includes.footer')
    </body>
@endsection
