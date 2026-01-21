@extends('master')

@section('content')
    <!-- courses-section Start -->
    <section class="courses-details-section section-padding">
        <div class="container">
            <div class="courses-details-wrapper">
                <div class="row">
                    <div class="col-lg-8 col-12">
                        {!! $libelle !!}
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="main-sideber sticky-style">
                            <div class="single-sidebar-widget">
                                <div class="wid-title">
                                    <h4>Nos prestations</h4>
                                </div>
                                <div class="news-widget-categories mt-5">
                                    <ul>
                                        <li><a href="/prestations/form"><img src="/assets/img/icon/cheak.svg" alt="img"> Nos Formations</a></li>
                                        <li><a href="/prestations/etud"><img src="/assets/img/icon/cheak.svg" alt="img"> Nos Etudes</a></li>
                                        <li><a href="/prestations/cons"><img src="/assets/img/icon/cheak.svg" alt="img"> Nos Conseils</a></li>
                                        <li><a href="/prestations/real"><img src="/assets/img/icon/cheak.svg" alt="img"> Nos Réalisations</a></li>
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
