<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Keep n' Eat</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ url('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ url('assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
  <link href="{{ url('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{ url('assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{ url('assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
  <link href="{{ url('assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ url('assets/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Delicious - v2.0.0
  * Template URL: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="{{route('home')}}"><span>Keep n' Eat</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="#hero">Home</a></li>
          <li><a href="#about">Qui som</a></li>
          <li><a href="#why-us">Restaurants</a></li>
          <li><a href="#contact">Contacte</a></li>
  @if (Route::has('login'))
                    @auth
                    
                    

                    <li class="ml-5 nav-item dropdown">
                      <a class="nav-link dropdown-toggle ml-4" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name}} </a>
                      <img  src="/uploads/avatars/{{ Auth::user()->avatar }}" style="width:32px; height:32px; position:absolute; top:5px; border-radius:50%">

                      <div class="dropdown-menu" style="background-color: darkgray" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" id="{{ Auth::user()->name }}" href="{{ route('perfil') }}">Perfil</a>

                        @if (Auth::user()->rol_id != 1)
                          @if(\App\Restaurant::all()->where('user_id',Auth::user()->id)->isEmpty())
                            <a class="dropdown-item" id="{{ Auth::user()->name }}" href="{{ route('creacioRestaurant') }}">Creacio de Restaurant</a>
                          @else
                            @foreach ($idRestaurant as $object)
                              <a class="dropdown-item" id="{{ Auth::user()->name }}" href="{{ route('modificaRestaurant', $object->id) }}">Edita el teu Restaurant</a>
                            @endforeach
                          @endif

                        @endif


                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ url('/logout') }}">Logout</a>
                      </div>
                    </li>
      
                    {{-- <li class="logout text-center"><a href="{{ url('/logout') }}">Logout</a></li> --}}

                    @else
                    <li class="login text-center"><a href="{{ route('login') }}">Login</a></li>

                        @if (Route::has('register'))
                        <li class="register text-center"><a href="{{ route('register') }}">Register</a></li>
                        @endif
                    @endauth
            @endif
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background: url(assets/img/slide/slide-1.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animated fadeInDown"><span>Keep n' Eat</span></h2>
                <p class="animated fadeInUp">Keep n' eat dóna la oportunitat de cercar restaurants per tot el país i veure opinions dels usuaris registrats per tal d'escollir adequadament i facilitar al consumidor una experiència única. A més, pots deixar una crítica constructiva per ajudar als següents consumidors per ajudar als propiearis del restaurant.  </p>
                <div>
                  <a href="#why-us" class="btn-menu animated fadeIn">Els nostres restaurants</a>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          {{-- <div class="carousel-item" style="background: url(assets/img/slide/slide-2.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animated fadeInDown">Reserva</h2>
                <p class="animated fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
                <div>
                  <a href="#menu" class="btn-menu animated fadeIn">Our Menu</a>
                  <a href="#book-a-table" class="btn-book animated fadeIn">Book a Table</a>
                </div>
              </div>
            </div>
          </div> --}}

          <!-- Slide 3 -->
          <div class="carousel-item" style="background: url(assets/img/slide/slide-3.jpg);">
            <div class="carousel-background"><img src="assets/img/slide/slide-3.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animated fadeInDown">Donan's la teva opinió</h2>
                <p class="animated fadeInUp">Quina ha estat la teva experiència? Deixa'ns aquí la teva opinió per ajudar a escollir als consumidors i reforçar els aspectes negatius.</p>
                <div>
                  <a href="#why-us" class="btn-book animated fadeIn">Els nostres restaurants</a>
                </div>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container-fluid">

        <div class="row">

          <div class="col-lg-5 align-items-stretch container d-flex h-100">
          <div class="row justify-content-center align-self-center mt-4 ml-4">
          <img class="rounded-circle mr-5 ml-5" src="{{asset('assets/img/fotos/pere.png')}}" alt="" width="215px" height="215px">
          <img class="rounded-circle ml-4" src="{{asset('assets/img/fotos/gerard.png')}}" alt="" width="215px" height="215px">
        </div>
          </div>

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch">

            <div class="content">
              <h3><strong>Qui som?</strong></h3>
              <p>
                Som 2 estudiants de 2n de DAW (Disseny d'Aplicacions Web) i venim a presentar el nostre projecte de final de grau.
              </p>
              <p class="font-italic">
                Hem decidit dividir l'equip i repartir-nos les tasques.
              </p>
              <ul>
                <li><i class="bx bx-check-double"></i> El Gerard Bonastre s'ha encarregat del Back-end.</li>
                <li><i class="bx bx-check-double"></i> El Pere Garcia s'ha ocupat del Front-end</li>
              </ul>
              <p>
                Tot i així ambdós ens hem complementat i ajudat en les tasques més difícils. És a dir, el Gerard no només ha fet el Back-end ni el Pere el Front-end en la seva totalitat sinó, ens hem ajudat.
              </p>
            </div>

          </div>

        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Whu Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="section-title">
          <h2><span>Restaurants</span></h2>
          <p>Et proposem que li donis una ullada a la nostra selecció de restaurants.</p>
        </div>

        <div class="row">

          @foreach ($restaurants as $restaurant)
          <div class="col-lg-4 mb-4">
            <a href="{{route('restaurant_id',$restaurant->id)}}">

            <div class="box">
            <input name="invisible" type="hidden" value="{{$restaurant->id}}">
              <span>{{$restaurant->nom}}</span>
              <h4>{{$restaurant->descripcio}}</h4>
              <p>Ulamco laboris nisi ut aliquip ex ea commodo consequat. Et consectetur ducimus vero placeat</p>
            </div>
          </a>
          </div>
        
          @endforeach

          {{-- <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box">
              <span>02</span>
              <h4>Repellat Nihil</h4>
              <p>Dolorem est fugiat occaecati voluptate velit esse. Dicta veritatis dolor quod et vel dire leno para dest</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box">
              <span>03</span>
              <h4> Ad ad velit qui</h4>
              <p>Molestiae officiis omnis illo asperiores. Aut doloribus vitae sunt debitis quo vel nam quis</p>
            </div>
          </div> --}}

        </div>
        {{$restaurants->links()}}
      </div>
    </section><!-- End Whu Us Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2><span>Contact</span> Us</h2>
          <p>Vols saber més? A continuació us proporcionem les nostres dades perquè us comuniqueu amb nosaltres.</p>
        </div>
      </div>

      <div class="map">
        <iframe style="border:0; width: 100%; height: 350px;" src="https://maps.google.com/maps?width=100%&amp;height=700&amp;hl=en&amp;coord=41.2311566,1.7285224886456212&amp;q=IES%20Joaquim%20Mir%2C%20school%2C%20Vilanova%20i%20la%20Geltr%C3%BA%2C%20Spain+(Joaquim%20mir)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed" frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="container mt-5">

        <div class="info-wrap">
          <div class="row">
            <div class="col-lg-3 col-md-6 info">
              <i class="icofont-google-map"></i>
              <h4>Location:</h4>
              <p>A108 Adam Street<br>New York, NY 535022</p>
            </div>

            <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
              <i class="icofont-clock-time icofont-rotate-90"></i>
              <h4>Open Hours:</h4>
              <p>Monday-Saturday:<br>11:00 AM - 2300 PM</p>
            </div>

            <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
              <i class="icofont-envelope"></i>
              <h4>Email:</h4>
              <p>info@example.com<br>contact@example.com</p>
            </div>

            <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
              <i class="icofont-phone"></i>
              <h4>Call:</h4>
              <p>+1 5589 55488 51<br>+1 5589 22475 14</p>
            </div>
          </div>
        </div>

        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
          <div class="form-row">
            <div class="col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
              <div class="validate"></div>
            </div>
            <div class="col-md-6 form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
              <div class="validate"></div>
            </div>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
            <div class="validate"></div>
          </div>
          <div class="form-group">
            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
            <div class="validate"></div>
          </div>
          <div class="mb-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Send Message</button></div>
        </form>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>Keep n' Eat</h3>
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>Keep n' Eat</span></strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ url('assets/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ url('assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
  <script src="{{ url('assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ url('assets/vendor/jquery-sticky/jquery.sticky.js') }}"></script>
  <script src="{{ url('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ url('assets/vendor/venobox/venobox.min.js') }}"></script>
  <script src="{{ url('assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ url('assets/js/main.js') }}"></script>

</body>

</html>