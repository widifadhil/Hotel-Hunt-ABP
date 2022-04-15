@extends('layouts.layout')
@section('content')
    <section class="ftco-section" id="login-section">
        <div class="container">
            <div class="row justify-content-center">
            </div>
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10">
                    <div class="wrap d-md-flex">
                        <div class="img"
                            style="background-image: url(https://images.unsplash.com/photo-1563911302283-d2bc129e7570?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80);linear-gradient(45deg, #6868681a, transparent)">
                        </div>
                        <div class="login-wrap p-4 p-md-5">
                            <div class="d-flex justify-content-center">
                                <center>
                                    <div class="header">
                                        <h1 class="text-light"><a href=""><img src="img/logo_biru.png"
                                                    alt="Hotelbiru"></a></h1>
                                        <h6 class="animation a2">Hello there, haven't we seen you before?</h6>
                                        <!-- Uncomment below if you prefer to use an image logo -->
                                        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
                                    </div>
                                </center>
                            </div>

                            <form action="/login" method="post">
                                @csrf
                                <div class="form-group mb-3">
                                    <label class="label" for="username">Username</label>
                                    <input type="username" class="form-control" placeholder="Username" name="username"
                                        value="" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="password">Password</label>
                                    <input type="password" class="form-control" placeholder="Password" name="password"
                                        value="" required>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="form-control btn btn-primary rounded submit px-3">Sign
                                        In</button>
                                </div>                                
    
                                <p class="text-center">Not a member? <a href="/register">Sign Up</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    {{-- <section class="vh-80">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 px-0 d-none d-sm-block">
                    <img src="img/traveling.jpeg" alt="Login image" class="bg-image-vertical w-100 vh-100"
                        style="object-fit: cover; object-position: left;">
                </div>
                <div class="col-sm-6 text-black">

                    <div class="px-5 ms-xl-4">
                        <img class="me-3 pt-5 mt-xl-4" src="img/logo_biru.png" alt="">
                    </div>

                    <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">

                        <form action="/login" method="POST" style="width: 23rem;">
                            @csrf
                            <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Log in</h3>

                            <div class="form-outline mb-3">
                                <input type="email" name="email" id="email" class="form-control form-control-lg"
                                    placeholder="Email" required />
                            </div>

                            <div class="form-outline mb-3">
                                <input type="password" name="password" id="password" class="form-control form-control-lg"
                                    placeholder="Password" required />

                            </div>

                            <div class="d-grid gap-2 col-6 mx-auto pb-3">
                                <button class="btn btn-primary" type="submit" style="background: #0A9CDF;border:0px">LOGIN
                                    NOW</button>
                            </div>

                            <p class="small mb-5 pb-lg-2"><a class="text-muted" href="#!">Forgot password?</a></p>
                            <p>Don't have an account? <a href="/register" class="link-info">Register here</a></p>

                        </form>

                    </div>

                </div>

            </div>
        </div>
    </section> --}}
@endsection
