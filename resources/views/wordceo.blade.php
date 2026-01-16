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
                    <h2 class="wow fadeInUp" data-wow-delay=".3s">Mot du Directeur Général</h2>
                    <ul class="breadcrumb-list wow fadeInUp" data-wow-delay=".5s">
                        <li>
                            <a href="/">Accueil</a>
                        </li>
                        <li><i class="fa-solid fa-chevron-right"></i></li>
                        <li>Qui sommes-nous ?</li>
                        <li><i class="fa-solid fa-chevron-right"></i></li>
                        <li>Mot du Directeur Général</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Team-section Start -->
    <section class="team-details-section fix section-padding">
        <div class="container">
            <div class="team-details-wrapper">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-4">
                        <div class="thumb">
                            <img src="/assets/img/team/details-1.jpg" alt="img">
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="details-content">
                            <p>
                                Bring to the table win-win survival strategies to ensure proac domination. At the end of the
                                day, going forward, a new normal that has evolve from generation is on the runway heading
                                towards a streamlined clou solution. User generated content in real-time will have multiple.
                            </p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi animi hic nulla! Eligendi ex, eius cum molestias, amet libero optio commodi harum enim assumenda quasi dicta quis eveniet delectus totam.</p>
                            <p>
                                Bring to the table win-win survival strategies to ensure proac domination. At the end of the
                                day, going forward, a new normal that has evolve from generation is on the runway heading
                                towards a streamlined clou solution. User generated content in real-time will have multiple.
                            </p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi animi hic nulla! Eligendi ex, eius cum molestias, amet libero optio commodi harum enim assumenda quasi dicta quis eveniet delectus totam.</p>
                            <p>
                                Bring to the table win-win survival strategies to ensure proac domination. At the end of the
                                day, going forward, a new normal that has evolve from generation is on the runway heading
                                towards a streamlined clou solution. User generated content in real-time will have multiple.
                            </p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi animi hic nulla! Eligendi ex, eius cum molestias, amet libero optio commodi harum enim assumenda quasi dicta quis eveniet delectus totam.</p>
                            <div style="text-align: right;margin-top:15px;">
                                                            <h4>Fabrice OGOU</h4>
                            <span style="font-size: 15px;">Directeur générale</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
