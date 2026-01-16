@extends('master')

@section('content')
    <!-- Search Area Start -->
    <div class="search-wrap">
        <div class="search-inner">
            <i class="fas fa-times search-close" id="search-close"></i>
            <div class="search-cell">
                <form method="get">
                    <div class="search-field-holder">
                        <input type="search" class="main-search-input" placeholder="Search...">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- breadcrumb-wrapper-section Start -->
    <section class="breadcrumb-wrapper fix bg-cover" style="background-image: url(/assets/img/breadcrumb/bg.jpg);">
        <div class="container">
            <div class="row">
                <div class="page-heading">
                    <h2 class="wow fadeInUp" data-wow-delay=".3s">Présentation de CREEPPD</h2>
                    <ul class="breadcrumb-list wow fadeInUp" data-wow-delay=".5s">
                        <li>
                            <a href="/">Accueil</a>
                        </li>
                        <li><i class="fa-solid fa-chevron-right"></i></li>
                        <li>Qui sommes-nous ?</li>
                        <li><i class="fa-solid fa-chevron-right"></i></li>
                        <li>Présentation de CREEPPD</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
  <!-- About-section Start -->
  <section class="about-section-1 section-padding fix">
    <div class="container">
      <div class="about-wrapper">
        <div class="row g-4 align-items-center">
          <div class="col-lg-6">
            <div class="about-image">
              <img src="/assets/img/about/about-1.jpg" alt="img" class="wow img-custom-anim-left"
                data-wow-duration="1.3s" data-wow-delay="0.3s">
            </div>
          </div>
          <div class="col-lg-6">
            <div class="about-content">
              <div class="section-title">
                <h2 class="wow fadeInUp" data-wow-delay=".3s">
                  Le cabinet CREEPPD
                </h2>
                <p class="mt-3 mt-mb-0 wow fadeInUp" data-wow-delay=".5s">
                  Le cabinet CREEPPD est un cabinet de droit privé Ivoirien de formation, d’étude, de d’appui-conseil et
                  de réalisation, spécialisé dans la Gouvernance Economique et Entrepreneuriale, Gouvernance
                  Environnementale et Développement Durable, Gouvernance des Conflits et de recherche de paix Durable.
                  C’est un centre doté d’expertise dans les sciences de l’éducation et de la formation, de l’élaboration
                  de divers documents de projet et de décision d’investissement.

                </p>
              </div>
              <div class="about-list-item wow fadeInUp" data-wow-delay=".7s">
                <ul class="list">
                  <li>
                    <img src="/assets/img/icon/cheak.svg" alt="img">
                    Formations
                  </li>
                  <li>
                    <img src="/assets/img/icon/cheak.svg" alt="img">
                    Etudes
                  </li>
                </ul>
                <ul class="list">
                  <li>
                    <img src="/assets/img/icon/cheak.svg" alt="img">
                    Conseils
                  </li>
                  <li>
                    <img src="/assets/img/icon/cheak.svg" alt="img">
                    Réalisations
                  </li>
                </ul>
              </div>
              <div class="about-button wow fadeInUp" data-wow-delay=".3s">
                <a href="#" class="theme-btn">En savoir plus <i class="fa-solid fa-arrow-right"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- courses-section Start -->
  <section class="courses-Categories-section section-padding fix">
    <div class="container-fluid">
      <div class="section-title-area">
        <div class="section-title">
          <h2 class="wow fadeInUp" data-wow-delay=".3s">
            Nos prestations
          </h2>
        </div>
      </div>
      <div class="row">
        <div class="col-xl-3 col-lg-4 col-md-6 col-md-6 wow fadeInUp" data-wow-delay=".2s">
          <div class="all-courses-item">
            <div class="courses-image">
              <img src="/assets/img/courses/courses-1.png" alt="img">
            </div>
            <div class="courses-content d-block text-center">
              <div class="content">
                <h3>
                  <a href="#">Formations</a>
                </h3>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-md-6 wow fadeInUp" data-wow-delay=".4s">
          <div class="all-courses-item">
            <div class="courses-image">
              <img src="/assets/img/courses/courses-2.png" alt="img">
            </div>
            <div class="courses-content d-block text-center">
              <div class="content">
                <h3>
                  <a href="#">Etudes</a>
                </h3>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-md-6 wow fadeInUp" data-wow-delay=".6s">
          <div class="all-courses-item">
            <div class="courses-image">
              <img src="/assets/img/courses/courses-3.png" alt="img">
            </div>
            <div class="courses-content d-block text-center">
              <div class="content">
                <h3>
                  <a href="#">Conseils</a>
                </h3>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-md-6 wow fadeInUp" data-wow-delay=".8s">
          <div class="all-courses-item">
            <div class="courses-image">
              <img src="/assets/img/courses/courses-4.png" alt="img">
            </div>
            <div class="courses-content d-block text-center">
              <div class="content">
                <h3>
                  <a href="#">Réalisations</a>
                </h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection
