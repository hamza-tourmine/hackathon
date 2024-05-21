<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'Hackathon' }}</title>


    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/flaticon-set.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/themify-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/magnific-popup.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/owl.carousel.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/owl.theme.default.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/bootsnav.css') }}" rel="stylesheet" />
    <link href="{{ asset('style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet" />

</head>
<body>
<div class="login-area default-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <form class="form-horizontal"method="post" action="{{route('login_into_account')}}" >
                    @csrf
                    {{-- start --}}
                    @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                  @endif

                  @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
                    <div class="login-custom">
                        <div class="heading">
                            <h4><i class="fas fa-sign-in-alt"></i> login Now</h4>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="form-group">
                                    <input class="form-control" placeholder="Email*" type="email">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password*" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <label for="login-remember"><input type="checkbox" id="login-remember">Remember Me</label>
                                <a title="Lost Password" href="#" class="lost-pass-link">Lost your password?</a>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <button type="submit">
                                    Login
                                </button>
                            </div>
                        </div>
                        <p class="link-bottom">Not a member yet? <a href="#">Register now</a></p>
                    </div>
                   
                </form>
            </div>
        </div>
    </div>
</div>
