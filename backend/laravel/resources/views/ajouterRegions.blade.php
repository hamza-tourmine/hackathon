<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'Hackathon' }}</title>

    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}" type="image/x-icon">
    <!-- ========== Début Feuilles de style ========== -->
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


                    <Form class="white-popup-block" method="post" action="{{route('insertRegion')}}" >
                        @csrf
                    <div class="login-custom">
                        <div class="heading">
                            <h4><i class="fas fa-edit"></i>Ajouter des regions</h4>
                        </div>


                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input class="form-control" placeholder="Nom de region" type="text" name="name">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input class="form-control" placeholder="gurd name" type="text" name="gurdnom">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <button type="submit">
                                        ajouter region
                                    </button>
                                </div>
                            </div>
                    </div>
                </form>

                <h4>Tout les regions :</h4>
                <table>
                    <thead>
                        <tr>
                            <th>Region Nom</th>
                            <th>Region Nom</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($Regions)
                        @foreach ($Regions as $item)
                        <tr>
                            <td>{{$item->name }}</td>
                            <td>{{$item->guard_name }}</td>
                            <td>
                                <button type="submit">
                                   Modify
                                </button>
                                <button type="submit">
                                  suprimmer
                                </button>
                            </td>
                        </tr>
                       @endforeach
                        @endif

                    </tbody>
                </table>

            </div>
        </div>
    </div>

    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
</body>
</html>
