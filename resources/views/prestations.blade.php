@extends('master')

@section('content')
    <!-- courses-section Start -->
    <section class="courses-details-section section-padding">
        <div class="container">
            <div class="courses-details-wrapper">
                <div class="row g-4">
                    <div class="col-lg-8 col-12">
                        <div class="courses-content">
                            <h2>
                                {{ $title }}
                            </h2>
                            <div class="details-image">
                                <img src="/assets/img/services/{{ $filename }}" alt="img">
                            </div>
                            <div class="courses-details-content">
                                <div class="tab-content">
                                    {!! $libelle !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="main-sideber sticky-style">
                            <div class="single-sidebar-widget">
                                <div class="wid-title">
                                    <h4>Nos prestations</h4>
                                </div>
                                <div class="news-widget-categories mt-5">
                                    <ul>
                                        <li><a href="/prestations/form"><img src="/assets/img/icon/cheak.svg" alt="img"> Formations certifiantes</a></li>
                                        <li><a href="/prestations/etud"><img src="/assets/img/icon/cheak.svg" alt="img"> Etudes</a></li>
                                        <li><a href="/prestations/cons"><img src="/assets/img/icon/cheak.svg" alt="img"> Conseils et appuis</a></li>
                                        <li><a href="/prestations/real"><img src="/assets/img/icon/cheak.svg" alt="img"> Réalisations</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
