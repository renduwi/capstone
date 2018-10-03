 <!DOCTYPE html>
 <html lang="en">
 
   <head>
 
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <meta name="description" content="">
     <meta name="author" content="">
 
     <!-- Bootstrap core CSS -->
     <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
 
     <!-- Custom fonts for this template -->
     <link href="{{ secure_asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
     <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
     <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
 
     <!-- Plugin CSS -->
     <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">
 
     <!-- Custom styles for this template -->
     <link href="{{secure_asset('css/creative.min.css') }}" rel="stylesheet">
 
   </head>

   <body id="page-top">
        <nav class="navbar navbar-expand-lg navbar-default fixed-top" id="mainNav">
                <div class="container">
                  <a class="navbar-brand js-scroll-trigger" href="/">VEEM</a>
                  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon" style="color:black;"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                      <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#about">About</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#services">Services</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>
          
              <header class="masthead text-center text-white d-flex">
                <div class="container my-auto">
                  <div class="row">
                    <div class="col-lg-10 mx-auto">
                      <h1 class="text-uppercase">
                        <strong>VeEm : Vehicle Emergency Zamboanga</strong>
                      </h1>
                      <hr>
                    </div>
                    <div class="col-lg-8 mx-auto">
                      <p class="text-faded mb-5">In Veem, we help you find the nearest mechanic to help you with your vehicle breakdown needs.</p>
                      <a class="btn btn-primary btn-xl js-scroll-trigger" href="{{ secure_asset( 'url ('login')') }}">{{ __('Login') }}</a>
                      <a class="btn btn-primary btn-xl js-scroll-trigger" href="{{ url ('register') }}">{{ __('Register') }}</a>
                    </div>
                  </div>
                </div>
              </header>
          
              <section class="bg-primary" id="about">
                <div class="container">
                  <div class="row">
                    <div class="col-lg-8 mx-auto text-center">
                      <h2 class="section-heading text-white">We've got what you need!</h2>
                      <hr class="light my-4">
                      <p class="text-faded mb-4"> Lorem ipsum dolor sit amet consectetur 
                          dipisicing elit. Vero excepturi dolor cum voluptas autem at suscipit 
                          odio ullam dignissimos quia, sint veritatis animi minima earum deleniti nostrum exercitationem ex eius!</p>
                      <!--<a class="btn btn-light btn-xl js-scroll-trigger" href="#services">Get Started!</a>-->
                    </div>
                  </div>
                </div>
              </section>
          
              <section id="services">
                <div class="container">
                  <div class="row">
                    <div class="col-lg-12 text-center">
                      <h2 class="section-heading">At Your Service</h2>
                      <hr class="my-4">
                    </div>
                  </div>
                </div>
                <div class="container">
                  <div class="row">
                    <div class="col-lg-3 col-md-6 text-center">
                      <div class="service-box mt-5 mx-auto">
                        <i class="fas fa-4x fa-car text-primary mb-3 sr-icon-1"></i>
                        <h3 class="mb-3">Vehicle breakdown</h3>
                        <p class="text-muted mb-0">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                      <div class="service-box mt-5 mx-auto">
                        <i class="fas fa-4x fa-motorcycle text-primary mb-3 sr-icon-2"></i>
                        <h3 class="mb-3">Motorcycle breakdown</h3>
                        <p class="text-muted mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                      <div class="service-box mt-5 mx-auto">
                        <i class="fas fa-4x fa-map-marked-alt text-primary mb-3 sr-icon-3"></i>
                        <h3 class="mb-3">Geolocation</h3>
                        <p class="text-muted mb-0">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                      <div class="service-box mt-5 mx-auto">
                        <i class="fas fa-4x fa-toolbox text-primary mb-3 sr-icon-4"></i>
                        <h3 class="mb-3">Mechanic</h3>
                        <p class="text-muted mb-0">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
          
            
             <!--- <section class="bg-dark text-white">
                <div class="container text-center">
                  <h2 class="mb-4">Free Download at Start Bootstrap!</h2>
                  <a class="btn btn-light btn-xl sr-button" href="http://startbootstrap.com/template-overviews/creative/">Download Now!</a>
                </div>
              </section> --->
          
              <section id="contact">
                <div class="container">
                  <div class="row">
                    <div class="col-lg-8 mx-auto text-center">
                      <h2 class="section-heading">Contact us</h2>
                      <hr class="my-4">
                      <p class="mb-5"></p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-4 ml-auto text-center">
                      <i class="fas fa-phone fa-3x mb-3 sr-contact-1"></i>
                      <p>0905-1254-820</p>
                    </div>
                    <div class="col-lg-4 mr-auto text-center">
                      <i class="fas fa-at fa-3x mb-3 sr-contact-2"></i>
                      <p>
                        <a href="mailto:veemapp@gmail.com">veemapp@gmail.com</a>
                      </p>
                    </div>
                  </div>
                </div>
              </section>
          
              <!-- Bootstrap core JavaScript -->
              {{-- <script src="{{ secure_asset('vendor/jquery/jquery.min.js') }}"></script>
              <script src="{{ secure_asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script> --}}
          
              <!-- Plugin JavaScript -->
              {{-- <script src="{{ secure_asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script> --}}
              {{-- <script src="{{ secure_asset('vendor/scrollreveal/scrollreveal.min.js') }}"></script>
              <script src="{{ secure_asset('vendor/magnific-popup/jquery.magnific-popup.min.js') }}"></script> --}}
          
              <!-- Custom scripts for this template -->
              <script src="{{secure_asset('js/creative.min.js')}}"></script>
          
            </body>
          



</html>
