<!DOCTYPE html>
<html lang="fr">

<head>
  <!-- ========== Meta Tags ========== -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="fabiodesign2010@gmail.com">
  <meta name="description" content="CREEPPD  - Centre de Recherche en Economie, Environnement, Projets et paix Durable">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- ======== Page title ============ -->
  <title>CREEPPD - {{ $title }}</title>
  <!--<< Favcion >>-->
  <link rel="shortcut icon" href="/assets/img/icon/favicon.png">
  <!--<< Bootstrap min.css >>-->
  <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
  <!--<< All Min Css >>-->
  <link rel="stylesheet" href="/assets/css/all.min.css">
  <!--<< Animate.css >>-->
  <link rel="stylesheet" href="/assets/css/animate.css">
  <!--<< Magnific Popup.css >>-->
  <link rel="stylesheet" href="/assets/css/magnific-popup.css">
  <!--<< MeanMenu.css >>-->
  <link rel="stylesheet" href="/assets/css/meanmenu.css">
  <!--<< Swiper Bundle.css >>-->
  <link rel="stylesheet" href="/assets/css/swiper-bundle.min.css">
  <!--<< Nice Select.css >>-->
  <link rel="stylesheet" href="/assets/css/nice-select.css">
  <!--<< Color.css >>-->
  <link rel="stylesheet" href="/assets/css/color.css">
  <!--<< flacticon.css >>-->
  <link rel="stylesheet" href="/assets/css/flacticon.css">
  <!--<< SweetAlert2.css >>-->
  <link rel="stylesheet" href="/assets/css/sweetalert2.min.css">
  <!--<< Main.css >>-->
  <link rel="stylesheet" href="/assets/css/main.css">
  <link rel="stylesheet" href="/assets/css/custom.css">
</head>

<body>

  <!-- Preloader Start -->
  <div id="preloader" class="preloader">
    <div class="animation-preloader">
      <div class="spinner">
      </div>
      <div class="txt-loading">
        <span data-text-preloader="C" class="letters-loading">
          C
        </span>
        <span data-text-preloader="R" class="letters-loading">
          R
        </span>
        <span data-text-preloader="E" class="letters-loading">
          E
        </span>
        <span data-text-preloader="E" class="letters-loading">
          E
        </span>
        <span data-text-preloader="P" class="letters-loading">
          P
        </span>
        <span data-text-preloader="P" class="letters-loading">
          P
        </span>
        <span data-text-preloader="D" class="letters-loading">
          D
        </span>
      </div>
      <p class="text-center">Loading</p>
    </div>
    <div class="loader">
      <div class="row">
        <div class="col-3 loader-section section-left">
          <div class="bg"></div>
        </div>
        <div class="col-3 loader-section section-left">
          <div class="bg"></div>
        </div>
        <div class="col-3 loader-section section-right">
          <div class="bg"></div>
        </div>
        <div class="col-3 loader-section section-right">
          <div class="bg"></div>
        </div>
      </div>
    </div>
  </div>

  <!-- Back To Top Start -->
  <button id="back-top" class="back-to-top">
    <i class="fa-regular fa-arrow-up"></i>
  </button>

  <!--<< Mouse Cursor Start >>-->
  <div class="mouse-cursor cursor-outer"></div>
  <div class="mouse-cursor cursor-inner"></div>

  <!-- Offcanvas Area Start -->
  <div class="fix-area">
    <div class="offcanvas__info">
      <div class="offcanvas__wrapper">
        <div class="offcanvas__content">
          <div class="offcanvas__top mb-5 d-flex justify-content-between align-items-center">
            <div class="offcanvas__logo">
              <a href="/">
                <img src="/assets/img/logo/black-logo.svg" alt="logo-img">
              </a>
            </div>
            <div class="offcanvas__close">
              <button>
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <div class="mobile-menu fix mb-3"></div>
          <div class="offcanvas__contact">
            <h4>Contacts</h4>
            <ul>
              <li class="d-flex align-items-center">
                <div class="offcanvas__contact-icon">
                  <i class="fal fa-map-marker-alt"></i>
                </div>
                <div class="offcanvas__contact-text">
                  <a href="#">{{ env('CONTACT_ADDRESS') }}</a>
                </div>
              </li>
              <li class="d-flex align-items-center">
                <div class="offcanvas__contact-icon mr-15">
                  <i class="fal fa-envelope"></i>
                </div>
                <div class="offcanvas__contact-text">
                  <a href="mailto:{{ env('CONTACT_ADDRESS') }}">{{ env('CONTACT_ADDRESS') }}</a>
                </div>
              </li>
              <li class="d-flex align-items-center">
                <div class="offcanvas__contact-icon mr-15">
                  <i class="fal fa-clock"></i>
                </div>
              </li>
              <li class="d-flex align-items-center">
                <div class="offcanvas__contact-icon mr-15">
                  <i class="far fa-phone"></i>
                </div>
                <div class="offcanvas__contact-text">
                  <a href="tel:{{ env('CONTACT_PHONE') }}">{{ env('CONTACT_PHONE') }}</a>
                </div>
              </li>
            </ul>
            <div class="header-button mt-4">
              <a href="contact.html" class="theme-btn text-center">
                <span>Nous contacter<i class="fa-solid fa-arrow-right-long"></i></span>
              </a>
            </div>
            <div class="social-icon d-flex align-items-center">
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-youtube"></i></a>
              <a href="#"><i class="fab fa-linkedin-in"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="offcanvas__overlay"></div>

  <!-- Header Top Section Start -->
  <div class="header-top-section">
    <div class="container-fluid">
      <div class="header-top-wrapper">
        <ul class="contact-list">
          <li>
            <i class="fal fa-map-marker-alt"></i>
            {{ env('CONTACT_ADDRESS') }}
          </li>
          <li>
            <i class="far fa-envelope"></i>
            <a href="mailto:{{ env('CONTACT_EMAIL') }}" class="link">{{ env('CONTACT_EMAIL') }}</a>
          </li>
        </ul>
        <div class="social-icon d-flex align-items-center">
          <span>Nous suivre:</span>
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
          <a href="#"><i class="fa-brands fa-youtube"></i></a>
        </div>
      </div>
      <div class="marquee-rtl">
        <div class="fl-infos">{{ env('SLOGAN') }}</div>
      </div>
    </div>
  </div>

  <!-- Header Section Start -->
  <header id="header-sticky" class="header-1">
    <div class="container-fluid">
      <div class="mega-menu-wrapper">
        <div class="header-main">
          <div class="header-left">
            <div class="logo">
              <a href="/" class="header-logo">
                <img src="/assets/img/logo.jpg" style="height: 80px;" alt="logo-img">
              </a>
            </div>
          </div>
          <div class="mean__menu-wrapper">
            <div class="main-menu">
              <nav id="mobile-menu">
                <ul>
                  <li class="@php echo $currentMenu == 'home' ? 'active':'' @endphp menu-thumb">
                    <a href="/">
                      Accueil
                    </a>
                  </li>
                  <li class="@php echo $currentMenu == 'who_are_we' ? 'active':'' @endphp has-dropdown">
                    <a href="#">
                      Qui sommes-nous ?
                      <i class="fas fa-angle-down"></i>
                    </a>
                    <ul class="submenu">
                      <li><a href="/wordceo">Mot du Directeur Général</a></li>
                      <li><a href="/presentation">Présentation de CREEPPD</a></li>
                      <li><a href="/strategic">Axes stratégiques</a></li>
                      <li><a href="/organigramme">Organigramme</a></li>
                    </ul>
                  </li>
                  <li class="@php echo $currentMenu == 'services' ? 'active':'' @endphp has-dropdown">
                    <a href="#">
                      Pourquoi nous choisir ?
                      <i class="fas fa-angle-down"></i>
                    </a>
                    <ul class="submenu">
                      <li><a href="/services/caphum">Le capital humain</a></li>
                      <li><a href="/services/formprat">La formation pratique</a></li>
                      <li><a href="/services/suiveval">Le suivi-évaluation</a></li>
                    </ul>
                  </li>
                  <li class="@php echo $currentMenu == 'prestations' ? 'active':'' @endphp">
                    <a href="#">
                      Nos prestations
                      <i class="fas fa-angle-down"></i>
                    </a>
                    <ul class="submenu">
                      <li><a href="/prestations/form">Nos Formations</a></li>
                      <li><a href="/prestations/etud">Nos Etudes</a></li>
                      <li><a href="/prestations/cons">Nos Conseils</a></li>
                      <li><a href="/prestations/real">Nos Réalisations</a></li>
                    </ul>
                  </li>
                  <li class="@php echo $currentMenu == 'contact' ? 'active':'' @endphp">
                    <a href="/contact">Nous contacter</a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  @if($currentMenu != 'home')
  <!-- breadcrumb-wrapper-section Start -->
  <section class="breadcrumb-wrapper fix bg-cover" style="background-image: url(/assets/img/breadcrumb/bg.jpg);">
      <div class="container">
          <div class="row">
              <div class="page-heading">
                  <h2 class="wow fadeInUp" data-wow-delay=".3s">{{ $title }}</h2>
                  <ul class="breadcrumb-list wow fadeInUp" data-wow-delay=".5s">
                      <li><a href="/">Accueil</a></li>
                      @if($menu != '')
                      <li><i class="fa-solid fa-chevron-right"></i></li>
                      <li><a href="#">{{ $menu }}</a></li>
                      @endif
                      <li><i class="fa-solid fa-chevron-right"></i></li>
                      <li>{{ $title }}</li>
                  </ul>
              </div>
          </div>
      </div>
  </section>
  @endif
  
@yield('content')

  <!-- Team-section Start -->
  {{--
  <section class="team-section section-bg section-padding fix">
    <div class="container">
      <div class="section-title-area">
        <div class="section-title">
          <h2 class="wow fadeInUp" data-wow-delay=".3s">
            Nos partenaires
          </h2>
        </div>
        <div class="array-buttons wow fadeInUp" data-wow-delay=".5s">
          <button class="array-prev style-2"><i class="fas fa-arrow-left"></i></button>
          <button class="array-next"><i class="fas fa-arrow-right"></i></button>
        </div>
      </div>
      <div class="swiper brand-slider">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
              <div class="brand-image">
                  <img src="/assets/img/partner/kecholding.jpg" style="height: 110px; width: 155px;" alt="KEC Holding">
              </div>
          </div>
          <div class="swiper-slide">
              <div class="brand-image">
                  <img src="/assets/img/partner/creedd.jpg" style="height: 110px; width: 155px;" alt="KEC Holding">
              </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  --}}
  <section class="team-section section-bg section-padding fix">
    <div class="container">
      <div class="section-title-area">
        <div class="section-title">
          <h2 class="wow fadeInUp" data-wow-delay=".3s">
            Nos partenaires
          </h2>
        </div>
      </div>
      <div class="brand-image">
        <img src="/assets/img/partner/kecholding.jpg" style="height: 110px; width: 155px;" alt="KEC Holding">
      </div>
    </div>
  </section>

  <!-- footer-section Start -->
  <footer class="footer-section-2 footer-bg fix">
    <div class="container">
      <div class="footer-widget-wrapper">
        <div class="footer-list-wrapper">
          <div class="footer-logo wow fadeInUp" data-wow-delay=".3s">
          </div>
          <ul class="footer-list wow fadeInUp" data-wow-delay=".5s">
            <li>
              <a href="/">Accueil</a>
            </li>
            <li>
              <a href="#">Qui sommes-nous ?</a>
            </li>
            <li>
              <a href="#">Pourquoi nous choisir ?</a>
            </li>
            <li>
              <a href="#">Nos prestations</a>
            </li>
            <li>
              <a href="#">Nous Contacter</a>
            </li>
          </ul>
        </div>
        <div class="fotter-wrapper">
          <div class="footer-content">
            <p class="wow fadeInUp" data-wow-delay=".3s">
              CREEPPD est un centre de droit privé Ivoirien. C’est un cadre de réflexion, de recherche et d'action pour un avenir plus durable et plus équitable. Nous intervenons dans la formation, l’étude, l’appui-conseil et les réalisations. Nous sommes spécialisés dans la Gouvernance Economique et Entrepreneuriale, La Gouvernance Environnementale et Développement Durable, la Gouvernance des Conflits et de recherche de paix Durable.
            </p>
            <div class="social-icon d-flex align-items-center wow fadeInUp" data-wow-delay=".5s">
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-linkedin-in"></i></a>
              <a href="#"><i class="fab fa-youtube"></i></a>
            </div>
          </div>
          <div class="footer-contact wow fadeInUp" data-wow-delay=".3s">
            <div class="contact-info-items">
              <div class="icon">
                <i class="fa-solid fa-phone"></i>
              </div>
              <div class="content">
                <h4>
                  <a href="tel:{{ env('CONTACT_PHONE') }}">{{ env('CONTACT_PHONE') }}</a>
                </h4>
              </div>
            </div>
            <div class="contact-info-items">
              <div class="icon">
                <i class="fa-solid fa-square-chevron-down"></i>
              </div>
              <div class="content">
                <h4>
                  <a href="mailto: {{ env('CONTACT_EMAIL') }}" style="text-transform: none;"> {{ env('CONTACT_EMAIL') }}</a>
                </h4>
              </div>
            </div>
            <div class="contact-info-items">
              <div class="icon">
                <i class="fa-solid fa-clock"></i>
              </div>
              <div class="content">
                <h4>{{ env('CONTACT_ADDRESS') }}</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-bottom">
        <div class="footer-wrapper">
          <p class="wow fadeInUp" data-wow-delay=".3s">
            Copyright © CREEPPD. All Rights Reserved.
          </p>
        </div>
      </div>
    </div>
  </footer>

  <!--<< All JS Plugins >>-->
  <script src="/assets/js/jquery-3.7.1.min.js"></script>
  <!--<< Viewport Js >>-->
  <script src="/assets/js/viewport.jquery.js"></script>
  <!--<< Bootstrap Js >>-->
  <script src="/assets/js/bootstrap.bundle.min.js"></script>
  <!--<< nice-select Js >>-->
  <script src="/assets/js/jquery.nice-select.min.js"></script>
  <!--<< Waypoints Js >>-->
  <script src="/assets/js/jquery.waypoints.js"></script>
  <!--<< Counterup Js >>-->
  <script src="/assets/js/jquery.counterup.min.js"></script>
  <!--<< Swiper Slider Js >>-->
  <script src="/assets/js/swiper-bundle.min.js"></script>
  <!--<< MeanMenu Js >>-->
  <script src="/assets/js/jquery.meanmenu.min.js"></script>
  <!--<< Magnific Popup Js >>-->
  <script src="/assets/js/jquery.magnific-popup.min.js"></script>
  <!--<< SweetAlert2 Js >>-->  
  <script src="/assets/js/sweetalert2.all.min.js"></script>
  <!--<< Wow Animation Js >>-->
  <script src="/assets/js/wow.min.js"></script>
  <!--<< Main.js >>-->
  <script src="/assets/js/main.js"></script>
</body>

</html>