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
    <div class="container" style="margin-top:10px">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <form action="#" id="login-form" class="white-popup-block">
                    <div class="login-custom">
                        <div class="heading">
                            <h4><i class="fas fa-edit"></i>L'ajouter des intervenants</h4>
                        </div>

                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input class="form-control" placeholder="Nme*" type="text" name="name">
                            </div>
                            <div class="col-md-6 form-group">
                                <input class="form-control" placeholder="Email*" type="email" name="email">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input class="form-control" placeholder="Username*" type="text" name="username">
                            </div>
                            <div class="col-md-6 form-group">
                                <input class="form-control" placeholder="Password*" type="password" name="password">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input class="form-control" placeholder="Repeat Password*" type="password" name="repeat_password">
                            </div>
                            <div class="col-md-6 form-group">
                                <input class="form-control" placeholder="Site" type="text" name="site">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input class="form-control" placeholder="Logo URL" type="text" name="logo">
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="status">Status</label>
                                <select class="form-control" id="status" name="status">
                                    <option value="active">Active</option>
                                    <option value="desactive">Desactive</option>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input class="form-control" placeholder="Representant" type="text" name="representant">
                            </div>
                            <div class="col-md-6 form-group">
                                <input class="form-control" placeholder="Telephone 1" type="text" name="telephone1">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input class="form-control" placeholder="Telephone 2" type="text" name="telephone2">
                            </div>
                            <div class="col-md-6 form-group">
                                <input class="form-control" placeholder="Telephone 3" type="text" name="telephone3">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 form-group">
                                <button type="submit" class="btn">
                                    Ajouter
                                </button>
                            </div>
                        </div>


                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
</body>
</html>
