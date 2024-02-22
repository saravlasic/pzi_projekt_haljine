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
              <li class="nav-item">
                    <a class="nav-link" href="{{ route('user.aboutus') }}">About Us<span class="sr-only">(current)</span></a>
                </li>

              <li class="nav-item active">
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
    <div class="page-heading contact-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <div class="send-message">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Kontaktirajte nas!</h2>
            </div>
          </div>
          <div class="col-md-8">
            <div class="contact-form">
              <form id="contact" action="" method="post">
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="name" type="text" class="form-control" id="name" placeholder="Full Name" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="email" type="text" class="form-control" id="email" placeholder="E-Mail Address" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="subject" type="text" class="form-control" id="subject" placeholder="Subject" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your Message" required=""></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="filled-button">Pošalji</button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="col-md-4">
            <ul class="accordion">
              <li>
                  <a>Imate haljinu koja Vam stoji doma a ne želite ju baciti?</a>
                  <div class="content">
                      <p> Uvijek smo tu za vas, spremni da vam pomognemo da se riješite haljinica koje više ne nosite, pritom vam pružajući priliku da zaradite nešto dodatno.</p>
                  </div>
              </li>
              <li>
                  <a>Želite pokloniti haljine koje više ne nosite?</a>
                  <div class="content">
                      <p>Ako želite pokloniti haljine koje više ne nosite, slobodno nam se obratite. Radujemo se pružiti tim predivnim haljinama novu priliku, a vama priliku da učinite nekoga sretnim.</p>
                  </div>
              </li>
              
            </ul>
          </div>
        </div>
      </div>
    </div>
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
        .icon-separator {
          display: inline-block;
          width: 20px; /* Prilagodite željeni razmak */
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
