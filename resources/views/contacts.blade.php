@extends('master')

@section('content')
    <!-- News-section Start -->
    <section class="contact-section-2 section-padding fix">
        <div class="container">
            <div class="contact-us-wrapper">
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="contact-box-item">
                            <h3>Nos contacts</h3>
                            <div class="contact-info-items wow fadeInUp" data-wow-delay=".3s">
                                <div class="icon">
                                    <i class="fa-solid fa-phone"></i>
                                </div>
                                <div class="content">
                                    <p>Numéro téléphonique</p>
                                    <h4><a href="tel:{{ env('CONTACT_PHONE') }}">{{ env('CONTACT_PHONE') }}</a></h4>
                                </div>
                            </div>
                            <div class="contact-info-items wow fadeInUp" data-wow-delay=".5s">
                                <div class="icon">
                                    <i class="fa-solid fa-square-chevron-down"></i>
                                </div>
                                <div class="content">
                                    <p>Adresse E-mail</p>
                                    <h4><a href="mailto: {{ env('CONTACT_EMAIL') }}" style="text-transform: none;"> {{ env('CONTACT_EMAIL') }}</a></h4>
                                </div>
                            </div>
                            <div class="contact-info-items wow fadeInUp" data-wow-delay=".7s">
                                <div class="icon">
                                    <i class="fa-solid fa-clock"></i>
                                </div>
                                <div class="content">
                                    <p>Adresse géographique</p>
                                    <h4>{{ env('CONTACT_ADDRESS') }}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact-content">
                            <h3 class="wow fadeInUp" data-wow-delay=".3s">Laissez un message</h3>
                            <form id="contact-form" class="contact-form-items">
                                <div class="row g-4">
                                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".5s">
                                        <div class="form-clt">
                                            <input type="text" name="username" class="form-control username" maxlength="50" placeholder="Nom Complet">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                                        <div class="form-clt">
                                            <input type="text" name="email" class="form-control email" maxlength="50" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 wow fadeInUp" data-wow-delay=".7s">
                                        <div class="form-clt">
                                            <input type="text" name="subject" class="form-control subject" maxlength="50" placeholder="Objet">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 wow fadeInUp" data-wow-delay=".9s">
                                        <div class="form-clt">
                                            <textarea name="comment" class="form-control comment" placeholder="Votre message" style="height: 135px;"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 wow fadeInUp" data-wow-delay=".3s">
                                        <button type="submit" class="theme-btn submit-btn">Envoyer message <i class="far fa-paper-plane"></i></button>
                                    </div>
                                    <div class="form-message"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map-section Start -->
    <div class="map-section">
        <div class="map-items">
            <div class="googpemap">
                <iframe src="{{ env('CONTACT_MAP') }}" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
@endsection