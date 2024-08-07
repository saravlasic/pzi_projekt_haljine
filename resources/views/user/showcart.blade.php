<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Sparkle Shop</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <style>
        body {
            background-image: url('assets/images/background.jpg');
            background-size: 100% 100%;
            background-repeat: no-repeat;
            background-position: center center;
            background-attachment: fixed;
            margin: 0;
        }

        table {
            width: 70%;
            border-collapse: collapse;
            margin-top: 20px auto;
        }

        th, td {
            padding: 15px;
            text-align: center;
            border-bottom: 1px solid #dee2e6;
            font: 1em sans-serif;
        }

        th {
            background-color: #007bff;
            color: white;
        }

        tr:nth-child(odd) {
            background-color: #f8f9fa;
        }

        tr:nth-child(even) {
            background-color: #e9ecef;
        }

        td {
            border-right: 1px solid #dee2e6;
        }

        .btn-success {
            margin-top: 20px;
        }

        /* Fix the link styles */
        .navbar-nav .nav-link {
            font-style: normal;
        }
    </style>

</head>

<body>

    <!-- Header -->
    <header class="">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <h2>Sparkle <em>Shop</em></h2>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('user.home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('user.aboutus') }}">About Us<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('user.contact') }}">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            @if (Route::has('login'))
                                @auth
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{url('showcart')}}"><i class="fas fa-shopping-cart"></i>[{{ isset($count) ? $count : 0 }}]<span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log Out</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </li>
                                @else
                                    <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Log in</a></li>
                                    @if (Route::has('register'))
                                        <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                                    @endif
                                @endauth
                            @endif
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        @if(session()->has('message'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">x</button>
                {{session()->get('message')}}
            </div>
        @endif

    </header>

    <div style="padding:100px;" align="center">
        <table>
            <tr style="background-color: #007bff; color: white;">
                <th style="padding:10px; font-size:20px;">Naziv proizvoda</th>
                <th style="padding:10px; font-size:20px;">Cijena proizvoda</th>
                <th style="padding:10px; font-size:20px;">Ukloni proizvod</th>
            </tr>
            <form action="{{url('order')}}" method="POST">
                @csrf
                @foreach($cart as $carts)
                    <tr style="color:black;">
                        <td style="padding:10px;">
                            <input type="text" name="productname[]" value="{{$carts->product_title}}" hidden="">
                            {{$carts->product_title}}
                        </td>
                        <td style="padding:10px;">
                            <input type="text" name="price[]" value="{{$carts->price}}" hidden="">
                            {{$carts->price}}
                        </td>
                        <td style="padding:10px;"><a class="btn btn-danger" href="{{url('delete',$carts->id)}}">Ukloni</a></td>
                    </tr>
                @endforeach
        </table>
        <button class="btn btn-success">Završi narudžbu</button>
        </form>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/accordions.js"></script>

</body>

</html>
