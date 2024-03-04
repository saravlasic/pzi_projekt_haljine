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
              <li class="nav-item">
              <a class="nav-link" href="{{ route('user.home') }}">Home</a>

              </li> 
              <li class="nav-item active">
                    <a class="nav-link" href="{{ route('user.aboutus') }}">About Us<span class="sr-only">(current)</span></a>
                </li>

              <li class="nav-item">
                <a class="nav-link" href="{{ route('user.contact') }}">Contact Us</a>
              </li>

              <li class="nav-item">
              @if (Route::has('login'))
                
                    @auth

                    <li class="nav-item">
                      <a class="nav-link" href="{{url('showcart')}}"><i class="fas fa-shopping-cart">Košarica</i></a>
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

    </header>

    <!-- Page Content -->
    <div class="page-heading about-heading header-text">
        <div class="container">
            <div class="row">
            <div class="col-md-12">
                <div class="text-content">
                </div>
            </div>
            </div>
        </div>
    </div>

<div class="best-features about-features">
    <div class="container">
        <div class="row">
        <div class="col-md-12">
            <div class="section-heading">
            <h2>Naša priča</h2>
            </div>
        </div>
        <div class="col-md-6">
            <div class="right-image">
            <img src="assets/images/ourstory.jpg" alt="">
            </div>
        </div>
        <div class="col-md-6">
            <div class="left-content">
            <h4>Dobrodošli u Sparkle Shop!</h4>
            <p>Sparkle Shop je vaša destinacija za blistavu modu i elegantne haljine. Mi smo strastveni zaljubljenici u modu koji veruju da svaka žena zaslužuje blistati. Naša misija je pružiti vam jedinstveno iskustvo kupovine koje će istaći vašu ljepotu.</p>
            <p>Sparkle Shop nije samo online shop, već zajednica ljubitelja mode koja slavi ljepotu u različitim oblicima. Vaše zadovoljstvo nam je prioritet, stoga nas slobodno kontaktirajte sa svakim pitanjem ili povratnom informacijom.</p>
            <ul class="social-icons">
                <li><a href="https://www.instagram.com" target="_blank" ><i class="fab fa-instagram fa-2x"></i></a></li>
                <li><a href="https://www.facebook.com" target="_blank" ><i class="fab fa-facebook fa-2x"></i></a></li>
                <li><a href="https://www.linkedin.com" target="_blank" ><i class="fab fa-linkedin fa-2x"></i></a></li>
            </ul>
            </div>
        </div>
        </div>
    </div>
    </div>


    
    <div class="team-members">
        <div class="container">
            <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                <h2>Naš Tim</h2>
                </div>
            </div>
            <div class="col-md-4">
                <div class="team-member">
                    <div class="thumb-container">
                        <img src="assets/images/team_sara.jpeg" alt="Sara Vlašić" class="team-image">
                    </div>
                    <div class="down-content">
                        <h4>Sara Vlašić</h4>
                        <span>Studentica</span>
                        <p>Studentica treće godine informatike, Sara, u suradnji s Anđelom, zajedno su odradile ovaj projekt za predmet Programiranje za internet. Svoj fokus usmjerava na nadogradnju ove stranice kako bi je iskoristila u potencijalnom poslu s haljinama.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="team-member">
                    <div class="thumb-container">
                        <img src="assets/images/team_andjela.jpg" alt="Anđela Barbarić" class="team-image">
                    </div>
                    <div class="down-content">
                        <h4>Anđela Barbarić</h4>
                        <span>Studentica</span>
                        <p>Studentica treće godine informatike, Anđela, posjeduje snažan interes za dizajn. Doprinijela je ovom projektu stvarajući vizualni identitet koji privlači korisnike. Anđela, kao i Sara, planira dalje nadograditi ovu stranicu nekada u budućnosti zbog potencijalnog posla s haljinama.</p>
                    </div>
                </div>
            </div>

        </div>
        </div>

        <style>
            .team-image {
                width: 100%;
                height: 400px; /* Postavite visinu prema vašim potrebama */
                object-fit: cover; /* Ovaj stil će zadržati omjer slike */
            }

        </style>


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

