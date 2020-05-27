<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Accueil Génie informatique</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">
  <!--le lien de laravel mix-->

  <!-- Favicons -->
  <link href="{{ asset('home1/assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('home1/assets/img/apple-touch-icon.png') }}')" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('home1/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('home1/assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
  <link href="{{ asset('home1/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('home1/assets/vendor/venobox/venobox.css') }}" rel="stylesheet">
  <link href="{{ asset('home1/assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
  <link href="{{ asset('home1/assets/vendor/aos/aos.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('home1/assets/css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Squadfree - v2.0.1
  * Template URL: https://bootstrapmade.com/squadfree-free-bootstrap-template-creative/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="/"><span>GFIL</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu " style="background-color: skyblue;">
        <ul>
          <li class="active"><a href="#header">Home</a></li>
          <li><a href="#about">About Us</a></li>

          
        <!--<li class="drop-down"><a href="/admin"> Admin</a>
                   <ul>
                    <li ><a href="#">Gestion Users</a></li>
                    <li><a href="#">Gestion Roles</a></li>
                    <li><a href="#">gestion produits</a> </li>
                    </ul>-->
          </li>
          <li class="drop-down"><a href="">Espace Etudiant</a>
            <ul>
              <li ><a href="#annonces">Annonces</a></li>
              <li><a href="/emplois">Emploi du temps </a></li>
              <li class="drop-down"><a href="#"> Cours</a>
                <ul >
                      <li><a href="#">S5</a></li>
                      <li><a href="#">S6</a></li>
                </ul>
             </li>
             <li><a href="/cvs">Cvs</a></li>
              <li><a href="/notes">Notes</a></li>
              <li><a href="#">Offres</a></li>
              <li><a href="#">Envoyer message</a></li>
              <li><a href="#">Documentation</a></li>
            </ul>
          </li>
          <li class="drop-down"><a href="">Espace Enseignant</a>
            <ul>
              <li><a href="/notes">Notes</a></li>
              <li><a href="#">Cours </a></li>
              <li><a href="/emplois">Emploi du temps</a></li>
              <li><a href="#">Envoyer message</a></li>
              <li><a href="#">Offres</a></li>
              <li><a href="#">Envoyer message</a></li>
              <li><a href="#">Documentation</a></li>
            </ul>
          </li>
          
          <li class="drop-down"><a href="#">Espace Entreprise</a>
              <ul>
                <li><a href="#">Annonces</a></li>
                <li><a href="/cvs">Cvs</a></li>
                <li><a href="#">Offres</a></li>
              </ul>
          </li>
          
          <li><a href="#contact">Contact Us</a></li>
          @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('connecter') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('enregistrer') }}</a>
                            </li>
                        @endif
                    @else
                        <li >
                            

                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Quitter') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                         
                        </li>
                    @endguest

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="heromaster">
    <div class="hero-container" data-aos="fade-up">
      <a href="#about" class="btn-get-started scrollto"><i class="bx bx-chevrons-down"></i></a>
    </div>
  </section><!-- End Hero -->

  <section id="testimonials" class="testimonials section-bg">
    <div class="container">
  
  <main >
    @yield('content')
</main>


    </div>
  </section>

<!-- ======= Footer ======= -->
<footer id="footer">
  <div class="footer-top">
    <div class="container">
      <div class="row">

        <div class="col-lg-4 col-md-6">
          <div class="footer-info" data-aos="fade-up" data-aos-delay="50">
            <h3>Génie informatique</h3>
            <p class="pb-3"><em>la lisence Génie informatique est une filière qui perment d'informer des etudiants dans le domaine informatique</em></p>
            <p>
              Route Boukhalef  <br>
              Tanger, Maroc<br><br>
              <strong>Phone:</strong> +212 642449646<br>
              <strong>Email:</strong> abdellatifettag@gmail.com<br>
            </p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="https://web.facebook.com/?_rdc=1&_rdr" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-2 col-md-6 footer-links" data-aos="fade-up" data-aos-delay="150">
          <h4>LIENS UTILES</h4>
          <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Accueil</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">a propos de nous </a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">informations</a></li>
           
          </ul>
        </div>

        <div class="col-lg-2 col-md-6 footer-links" data-aos="fade-up" data-aos-delay="250">
          <h4>Our Services</h4>
          <ul class="sub">
            <li><a class="" href="/">Page Accueil</a></li>
            <li><a class="" href="http://www.fstt.ac.ma/Portail/index.php"><span>FSTT.ac.ma</span></a></li>
            <li><a class="" href="http://www.fst.ac.ma/Portail/index.php"><span>FSTT.ac.ma</span></a></li>
            <li><a class="" href="#">facebook FSTT</a></li>
            <li><a class="" href="#">Admin Email </a></li>
          </ul>
        </div>
     
        <div class="col-lg-4 col-md-6 footer-newsletter" data-aos="fade-up" data-aos-delay="350">
          <h4>Our Newsletter</h4>
          <p>Inscrivez-vous à la newsletter</p>
          <form action="" method="post">
            <input type="email" name="email"><input type="submit" value="Subscribe">
          </form>

        </div>

      </div>
    </div>
  </div>

  <div class="container">
    <div class="copyright">
      &copy; Copyright <strong><span>FST DE TANGER</span></strong>. All Rights Reserved
    </div>
  </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

<!-- Vendor JS Files -->
<script src="{{ asset('/home1/assets/vendor/jquery/jquery.min.js') }} "></script>
<script src="{{ asset('/home1/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('home1/assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
<script src="{{ asset('home1/assets/vendor/php-email-form/validate.js') }}"></script>
<script src="{{ asset('home1/assets/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('home1/assets/vendor/counterup/counterup.min.js') }}"></script>
<script src="{{ asset('home1/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('home1/assets/vendor/venobox/venobox.min.js') }}"></script>
<script src="{{ asset('home1/assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('home1/assets/vendor/aos/aos.js') }}"></script>

<!-- Template Main JS File -->
<script src="{{ asset('home1/assets/js/main.js') }}"></script>

</body>

</html>