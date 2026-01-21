@extends('master')

@section('content')
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
                  CREEPPD est un centre de droit privé Ivoirien. C’est un cadre de réflexion, de recherche et d'action pour un avenir plus durable et plus équitable. Nous intervenons dans la formation, l’étude, l’appui-conseil et les réalisations. Nous sommes spécialisés dans la Gouvernance Economique et Entrepreneuriale, La Gouvernance Environnementale et Développement Durable, la Gouvernance des Conflits et de recherche de paix Durable.
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
              <img src="/assets/img/services/form.png" alt="img">
            </div>
            <div class="courses-content d-block text-center">
              <div class="content">
                <h3>
                  <a href="/prestations/form">Nos Formations</a>
                </h3>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-md-6 wow fadeInUp" data-wow-delay=".4s">
          <div class="all-courses-item">
            <div class="courses-image">
              <img src="/assets/img/services/etud.png" alt="img">
            </div>
            <div class="courses-content d-block text-center">
              <div class="content">
                <h3>
                  <a href="/prestations/etud">Nos Etudes</a>
                </h3>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-md-6 wow fadeInUp" data-wow-delay=".6s">
          <div class="all-courses-item">
            <div class="courses-image">
              <img src="/assets/img/services/cons.png" alt="img">
            </div>
            <div class="courses-content d-block text-center">
              <div class="content">
                <h3>
                  <a href="/prestations/cons">Nos Conseils</a>
                </h3>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-md-6 wow fadeInUp" data-wow-delay=".8s">
          <div class="all-courses-item">
            <div class="courses-image">
              <img src="/assets/img/services/real.png" alt="img">
            </div>
            <div class="courses-content d-block text-center">
              <div class="content">
                <h3>
                  <a href="/prestations/real">Nos Réalisations</a>
                </h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Choose-us-section Start -->
  <section class="choose-us-section pb-0 section-bg fix bg-cover"
    style="background-image: url(assets/img/choose-us/bg-1.png);">
    <div class="container">
      <div class="choose-us-wrapper">
        <div class="row g-4 align-items-center">
          <div class="col-lg-6">
            <div class="choose-us-content">
              <div class="section-title">
                <h2 class="wow fadeInUp" data-wow-delay=".3s">
                  Notre public cible
                </h2>
                <p class="mt-3 mt-mb-0 wow fadeInUp" data-wow-delay=".5s">
                  CREEPPD intervient auprès des particuliers, des investisseurs locaux et étrangers, les collec-tivités
                  territoriales nationales et internationales, il s’agit de :
                </p>
              </div>
              <div class="choose-us-item">
                <ul class="list-item">
                  <li>
                    <i class="fas fa-check-circle"></i>
                    Entreprises ou opérateurs économiques ;
                  </li>
                  <li>
                    <i class="fas fa-check-circle"></i>
                    Particuliers (professionnels de l’environnement) ;
                  </li>
                  <li>
                    <i class="fas fa-check-circle"></i>
                    Programmes et/ou projets de développement ;
                  </li>
                  <li>
                    <i class="fas fa-check-circle"></i>
                    Organisation Non gouvernementale (ONG) ;
                  </li>
                  <li>
                    <i class="fas fa-check-circle"></i>
                    Organismes publics ou parapublics ;
                  </li>
                  <li>
                    <i class="fas fa-check-circle"></i>
                    Partenaires au développement ;
                  </li>
                  <li>
                    <i class="fas fa-check-circle"></i>
                    Organismes internationaux
                  </li>
                </ul>

              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="choose-us-image">
              <img src="/assets/img/choose-us/choose-us-1.png" alt="img" class="wow img-custom-anim-left"
                data-wow-duration="1.3s" data-wow-delay="0.3s">
              <div class="circle-shape">
                <img src="/assets/img/choose-us/circle-shape.png" alt="img" class="wow img-custom-anim-top"
                  data-wow-duration="1.3s" data-wow-delay="0.3s">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection