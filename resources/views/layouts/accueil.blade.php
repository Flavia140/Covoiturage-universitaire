<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Index - Bootslander Bootstrap Template</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="{{asset('img/favicon.png')}}" rel="icon">
  <link href="{{asset('img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{ asset('css/main.css') }}" rel="stylesheet">
  


  <!-- =======================================================
  * Template Name: Bootslander
  * Template URL: https://bootstrapmade.com/bootslander-free-bootstrap-landing-page-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="{{asset('img/logo.png')}}" alt="">
        
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Accueil</a></li>
          <li><a href="#about">A propos</a></li>
          <li><a href="{{ route('register') }}" class="btn-register">S'inscrire</a></li>
          <li><a href="#gallery">Se connecter</a></li>
          <li><a href="{{ route('publish') }}" class="btn-register">Publier trajet</a></li>
          <li><a href="{{ route('search') }}" class="btn-register">Rechercher trajet</a></li>
         
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">
      <img src="assets/img/hero-bg-2.jpg" alt="" class="hero-bg">

      <div class="container">
        <div class="row gy-4 justify-content-between">
          <div class="col-lg-4 order-lg-last hero-img" data-aos="zoom-out" data-aos-delay="100">
            <img src="{{asset('img/hero-img.png')}}" class="img-fluid animated" alt="">
          </div>

          <div class="col-lg-6  d-flex flex-column justify-content-center" data-aos="fade-in">
          <h1>Simplifiez vos trajets avec <span style="color: #ffffff;">UDrive</span></h1>
          <p class="lead">UDrive connecte conducteurs et passagers pour des trajets partagés, économiques et écologiques. 
          Profitez d'une planification facile et d'une communauté de confiance.</p>
          <a href="#about" class="btn btn-light btn-lg">Découvrir nos fonctionnalités</a>
          </div>

        </div>
      </div>

      <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
        <defs>
          <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"></path>
        </defs>
        <g class="wave1">
          <use xlink:href="#wave-path" x="50" y="3"></use>
        </g>
        <g class="wave2">
          <use xlink:href="#wave-path" x="50" y="0"></use>
        </g>
        <g class="wave3">
          <use xlink:href="#wave-path" x="50" y="9"></use>
        </g>
      </svg>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row align-items-xl-center gy-5">

          <div class="col-xl-5 content">
            <h3>A propos</h3>
            <h2>Une plateforme dédiée aux étudiants universitaires</h2>
            <p>UDrive est une plateforme innovante de covoiturage dédiée aux étudiants universitaires. Notre mission est de faciliter les déplacements tout en favorisant la convivialité, l’économie de coûts et la réduction de l’empreinte carbone."</p>
          </div>

          <div class="col-xl-7">
            <div class="row gy-4 icon-boxes">

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="icon-box">
                <i class="bi bi-check-circle"></i>
                  <h3>Fiabilité et sécurité</h3>
                  <p>Profils vérifiés et trajets sécurisés pour garantir votre tranquillité d'esprit.</p>
                </div>
              </div> <!-- End Icon Box -->

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-box">
                <i class="bi bi-layout-text-sidebar-reverse"></i> 
                  <h3>Facilité d'utilisation</h3>
                  <p>Inscription rapide via votre adresse universitaire et recherche intuitive de trajets.</p>
                </div>
              </div> <!-- End Icon Box -->

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="icon-box">
                <i class="bi bi-coin"></i>
                  <h3>Économie et écologie</h3>
                  <p>Réduisez vos dépenses tout en participant à un mode de transport plus durable.</p>
                </div>
              </div> <!-- End Icon Box -->

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
                <div class="icon-box">
                <i class="bi bi-person"></i> 
                  <h3>Communauté dynamique</h3>
                  <p>Rencontrez et interagissez avec d'autres étudiants lors de vos trajets.</p>
                </div>
              </div> <!-- End Icon Box -->

            </div>
          </div>

        </div>
      </div>

    </section><!-- /About Section -->

   
    <!-- Stats Section -->
    <section id="stats" class="stats section light-background">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
            <i class="bi bi-emoji-smile"></i>
            <div class="stats-item">
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
              <p>Etudiants satisfaits</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
          <i class="bi bi-car-front"></i>
            <div class="stats-item">
              <span data-purecounter-start="0" data-purecounter-end="50" data-purecounter-duration="1" class="purecounter"></span>
              <p>Trajets partagés</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
          <i class="bi bi-clock"></i>
            <div class="stats-item">
              <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
              <p>Heures économisées</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
          <i class="bi bi-building"></i>
            <div class="stats-item">
              <span data-purecounter-start="0" data-purecounter-end="3" data-purecounter-duration="1" class="purecounter"></span>
              <p>Universités partenaires</p>
            </div>
          </div><!-- End Stats Item -->

        </div>

      </div>

    </section><!-- /Stats Section -->

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section dark-background">

      <img src="{{asset('img/testimonials-bg.jpg')}}" class="testimonials-bg" alt="">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              }
            }
          </script>
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{asset('img/testimonials/testimonials-1.jpg')}}" class="testimonial-img" alt="">
                <h3>Saul GODSON</h3>
                <h4> Etudiant en informatique</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>UDrive m’a énormément aidé à réduire mes frais de transport. En partageant les trajets avec mes camarades, j’ai découvert une façon conviviale et économique de me déplacer entre mon domicile et l’université</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{asset('img/testimonials/testimonials-2.jpg')}}" class="testimonial-img" alt="">
                <h3>Sara N'DECCA</h3>
                <h4>Etudiante en Statisques</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Grâce à cette application, j’ai rencontré d’autres étudiants de mon campus. C’est une solution pratique et écologique qui simplifie vraiment mes déplacements.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{asset('img/testimonials/testimonials-3.jpg')}}" class="testimonial-img" alt="">
                <h3>Pierre LUMU</h3>
                <h4>Etudiant en Banque et Finances </h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Je recommande vivement UDrive ! La vérification des profils et le système de géolocalisation m’ont donné une grande tranquillité d’esprit. C’est une excellente idée pour les étudiants.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{asset('img/testimonials/testimonials-4.jpg')}}" class="testimonial-img" alt="">
                <h3>Marylise DOVONON</h3>
                <h4>Etudiante en Gestion Logistique</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>C’est plus qu’une application de covoiturage, c’est une vraie communauté universitaire. Je ne pourrais plus m’en passer.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Testimonials Section -->




    <!-- Faq Section -->
    <section id="faq" class="faq section light-background">

      <div class="container-fluid">

        <div class="row gy-4">

          <div class="col-lg-7 d-flex flex-column justify-content-center order-2 order-lg-1">

            <div class="content px-xl-5" data-aos="fade-up" data-aos-delay="100">
              <h3><span>Questions </span><strong>Fréquentes</strong></h3>
            </div>

            <div class="faq-container px-xl-5" data-aos="fade-up" data-aos-delay="200">
            <div class="faq-item">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3>Qui sommes nous ?</h3>
                <div class="faq-content">
                  <p> UDrive est une plateforme de covoiturage destinée aux étudiants universitaires. Elle permet aux conducteurs et passagers de partager leurs trajets pour économiser du temps et de l'argent tout en réduisant l'empreinte carbone.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item faq-active">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3>Comment m'inscrire sur UDrive ?</h3>
                <div class="faq-content">
                  <p>Cliquez sur le bouton "S'inscrire" sur la page d'accueil. Utilisez votre adresse e-mail universitaire pour créer un compte et compléter votre profil.
                  </p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3>Comment puis-je publier ou rechercher un trajet ?</h3>
                <div class="faq-content">
                  <p> Connectez-vous à votre compte, puis accédez à la section "Rechercher un trajet" pour trouver des trajets disponibles ou "Publier un trajet" pour partager votre véhicule ou votre moto.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3>Le covoiturage est-il sécurisé sur UDrive ?</h3>
                <div class="faq-content">
                  <p>Oui. Tous les utilisateurs doivent vérifier leur identité via leur e-mail universitaire. De plus, nous offrons des options de suivi GPS et des évaluations des utilisateurs pour renforcer la sécurité.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

            </div>

          </div>

          <div class="col-lg-5 order-1 order-lg-2">
            <img src="{{asset('img/faq.jpg')}}" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="100">
          </div>
        </div>

      </div>

    </section><!-- /Faq Section -->

  </main>

  <footer id="footer" class="footer dark-background">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            <span class="sitename">UDrive</span>
          </a>
          <div class="footer-contact pt-3">
            <p>A108 Adam Street</p>
            <p>Cotonou, Agbato</p>
            <p class="mt-3"><strong>Phone:</strong> <span>0154880768</span></p>
            <p><strong>Email:</strong> <span>udrivecotonou@gmail.com</span></p>
          </div>
          <div class="social-links d-flex mt-4">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="#">Accueil</a></li>
            <li><a href="#about">A propos</a></li>
            <li><a href="#">Publication de trajet</a></li>
            <li><a href="#">Recherche de trajet</a></li>
            
          </ul>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">UDrive 2024</strong> <span>Tous droits réservés</span></p>
      
  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('vendor/aos/aos.js')}}"></script>
  <script src="{{asset('vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{asset('vendor/swiper/swiper-bundle.min.js')}}"></script>

  <!-- Main JS File -->
  <script src="{{ asset('js/main.js') }}" defer></script>


</body>

</html>