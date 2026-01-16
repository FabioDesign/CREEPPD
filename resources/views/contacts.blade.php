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
                <h2 class="wow fadeInUp" data-wow-delay=".3s">Nous contacter</h2>
                <ul class="breadcrumb-list wow fadeInUp" data-wow-delay=".5s">
                    <li>
                        <a href="/">Accueil</a>
                    </li>
                    <li><i class="fa-solid fa-chevron-right"></i></li>
                    <li>Nous contacter</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- News-section Start -->
<section class="contact-section-2 section-padding fix">
    <div class="container">
        <div class="contact-us-wrapper">
            <div class="row g-4">
                <div class="col-lg-5">
                    <div class="contact-box-item">
                        <h3>Nos contacts</h3>
                        <p>
                            Fully recapitalize 24/7 communities using standards- <br>compliant metrics as a basis.
                        </p>
                        <div class="contact-info-items wow fadeInUp" data-wow-delay=".3s">
                            <div class="icon">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div class="content">
                                <p>Call anytime</p>
                                <h4>
                                    <a href="tel:5185643200">518 564 3200</a>
                                </h4>
                            </div>
                        </div>
                        <div class="contact-info-items wow fadeInUp" data-wow-delay=".5s">
                            <div class="icon">
                                <i class="fa-solid fa-square-chevron-down"></i>
                            </div>
                            <div class="content">
                                <p>Email address</p>
                                <h4>
                                    <a href="mailto:eduvate@example.com">eduvate@example.com</a>
                                </h4>
                            </div>
                        </div>
                        <div class="contact-info-items wow fadeInUp" data-wow-delay=".7s">
                            <div class="icon">
                                <i class="fa-solid fa-clock"></i>
                            </div>
                            <div class="content">
                                <p>Mon – Sat</p>
                                <h4>
                                    8:00 AM – 10:00 PM
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="contact-content">
                        <h3 class="wow fadeInUp" data-wow-delay=".3s">Laissez un message</h3>
                        <p>
                        <p class="wow fadeInUp" data-wow-delay=".5s">
                            Fill-up The Form and Message us of your amazing question
                        </p>
                        <form action="#" id="contact-form1" method="POST"
                            class="contact-form-items">
                            <div class="row g-4">
                                <div class="col-lg-6 wow fadeInUp" data-wow-delay=".5s">
                                    <div class="form-clt">
                                        <input type="text" name="name" id="name331" placeholder="Your name">
                                    </div>
                                </div>
                                <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                                    <div class="form-clt">
                                        <input type="text" name="name" id="email11" placeholder="Your email">
                                    </div>
                                </div>
                                <div class="col-lg-6 wow fadeInUp" data-wow-delay=".7s">
                                    <div class="form-clt">
                                        <input type="text" name="name" id="name22" placeholder="Phone Number">
                                    </div>
                                </div>
                                <div class="col-lg-6 wow fadeInUp" data-wow-delay=".7s">
                                    <div class="form-clt">
                                        <input type="text" name="name" id="name24" placeholder="Subjects">
                                    </div>
                                </div>
                                <div class="col-lg-12 wow fadeInUp" data-wow-delay=".9s">
                                    <div class="form-clt">
                                        <textarea name="message" id="message1" placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12 wow fadeInUp" data-wow-delay=".3s">
                                    <button type="submit" class="theme-btn">
                                        Send Message
                                    </button>
                                </div>
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
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6678.7619084840835!2d144.9618311901502!3d-37.81450084255415!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642b4758afc1d%3A0x3119cc820fdfc62e!2sEnvato!5e0!3m2!1sen!2sbd!4v1641984054261!5m2!1sen!2sbd"
                style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
</div>

@endsection