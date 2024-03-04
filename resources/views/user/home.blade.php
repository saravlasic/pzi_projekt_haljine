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


  </head>

  <body>
    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand"><h2>Sparkle <em>Shop</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>           
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
              <a class="nav-link" href="{{ route('user.home') }}">Home<span class="sr-only"></span></a>
              </li> 
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('user.aboutus') }}">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('user.contact') }}">Contact Us</a>
              </li>

              <li class="nav-item">
              @if (Route::has('login'))
                
                    @auth
                    

                    <li class="nav-item">
                      <a class="nav-link" href="{{url('showcart')}}"><i class="fas fa-shopping-cart">Košarica[{{$count}}]</i></a>
                    </li>
                       
                        
                    @else
                        <li><a class="nav-link" href="{{ route('login') }}" >Log in</a></li>

                        @if (Route::has('register'))
                            <li><a class="nav-link" href="{{ route('register') }}" >Register</a></li>
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

          <button type ="button" class="close" data-dismiss="alert">x</button>

            {{session()->get('message')}}

        </div>

      @endif

    </header>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner header-text">
      <div class="owl-banner owl-carousel">
        <div class="banner-item-01">
          <div class="text-content">
            <h4>Welcome to our page!</h4>
            <h2>Sparkle Shop</h2>
          </div>
        </div>
    </div>
    <!-- Banner Ends Here -->

    @include('user.product')

    
    
    <footer>
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <div class="inner-content">
                      <!-- Dodajte ikonice za Instagram i Facebook -->
                      <div class="social-icons">
                          <a href="https://www.instagram.com" target="_blank" class="icon-link">
                              <i class="fab fa-instagram fa-2x"></i>
                          </a>
                          <span class="icon-separator"></span> <!-- Razmak između ikonica -->
                          <a href="https://www.facebook.com" target="_blank" class="icon-link">
                              <i class="fab fa-facebook fa-2x"></i>
                          </a>
                          <span class="icon-separator"></span> <!-- Razmak između ikonica -->
                          <a href="https://www.linkedin.com" target="_blank" class="icon-link">
                              <i class="fab fa-linkedin fa-2x"></i>
                          </a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </footer>

    <style>
      .social-icons {
          text-align: center;
          margin-top: 20px;
      }

      .icon-link {
          color: #808080; /* Siva boja */
          transition: color 0.3s ease-in-out;
      }

      .icon-link:hover {
          color: #007bff; /* Plava boja na hoveru */
      }

      .icon-separator {
          display: inline-block;
          width: 20px; /* Prilagodite željeni razmak */
      }
    </style>



    
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/accordions.js"></script>




  </body>

</html>
