@extends('layouts.layout')
@section('content')
<section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
            </div>
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10">
                    <div class="wrap d-md-flex">
                        <div class="img"
                            style="background-image: url(https://images.unsplash.com/photo-1563911302283-d2bc129e7570?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80);">
                        </div>
                        <div class="login-wrap p-4 p-md-5">
                            <div class="d-flex justify-content-center">
                                <center>
                                    <div class="header">
                                        <h1 class="text-light"><a href=""><img src="img/logo_biru.png"
                                                    alt="Hotelbiru"></a></h1>
                                        <h6 class="animation a2">Sign Up</h6>
                                        <!-- Uncomment below if you prefer to use an image logo -->
                                        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
                                    </div>
                                </center>
                            </div>

                            <form action="/register" method="post">
                                @if (Session::has('success'))
                                    <div class="alert alert-success" role="alert">{{ Session::get('success') }}</div>
                                @endif
                                @csrf
                                @if (Session::has('fail'))
                                    <div class="alert alert-danger">{{ Session::get('Fail') }}</div>
                                @endif
                                <div class="form-group mb-3">
                                    <label class="label" for="fname">Fullname</label>
                                    <input type="fname" class="form-control " placeholder="Full Name" name="name"
                                        value="{{ old('name') }}">
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="email">Email</label>
                                    <input type="email" class="form-control" placeholder="Email" name="email"
                                        value="{{ old('email') }}">
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="username">Username</label>
                                    <input type="username" class="form-control" placeholder="Username"
                                        name="username">
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="password">Password</label>
                                    <input type="password" class="form-control" placeholder="Password"
                                        name="password">
                                </div>
                                <div class="form-group">
                                    <button type="submit"
                                        class="form-control btn btn-primary rounded submit px-3">REGISTER NOW</button>
                                </div>
                                <p class="text-center">Already have an account? <a href="/login">Sign in</a></p>
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

                        <form action="/register" method="POST" style="width: 23rem;">
                            @csrf
                            <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign Up</h3>

                            <div class="form-outline mb-3">
                                <input type="email" name="email" id="register-email" class="form-control form-control-lg"
                                    placeholder="Email" />
                            </div>

                            <div class="form-outline mb-3">
                                <input type="text" name="name" id="register-fullname" class="form-control form-control-lg"
                                    placeholder="Full Name" />

                            </div>
                            <div class="form-outline mb-3">
                                <input type="text" name="username" id="register-username"
                                    class="form-control form-control-lg" placeholder="Username" />

                            </div>
                            <div class="form-outline mb-3">
                                <input type="password" name="password" id="register-password"
                                    class="form-control form-control-lg" placeholder="Password" />

                            </div>

                            <div class="d-grid gap-2 col-6 mx-auto pb-3">
                                <button class="btn btn-primary" type="submit"
                                    style="background: #0A9CDF;border:0px">Register Now</button>
                            </div>

                            <p class="small mb-5 pb-lg-2"><a class="text-muted" href="#!">Forgot password?</a></p>
                            <p>Already have an account? <a href="/login" class="link-info">Sign In</a></p>

                        </form>

                    </div>

                </div>

            </div>
        </div>
    </section> --}}
@endsection
