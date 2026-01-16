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
                    <h2 class="wow fadeInUp" data-wow-delay=".3s">Formations</h2>
                    <ul class="breadcrumb-list wow fadeInUp" data-wow-delay=".5s">
                        <li>
                            <a href="/">Accueil</a>
                        </li>
                        <li><i class="fa-solid fa-chevron-right"></i></li>
                        <li>Nos prestations</li>
                        <li><i class="fa-solid fa-chevron-right"></i></li>
                        <li>Formations</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- courses-section Start -->
    <section class="courses-details-section section-padding">
        <div class="container">
            <div class="courses-details-wrapper">
                <div class="row g-4">
                    <div class="col-lg-8 col-12">
                        <div class="courses-content">
                            <h2>
                                Formation
                            </h2>
                            <div class="details-image">
                                <img src="assets/img/courses/details-1.jpg" alt="img">
                            </div>
                            <div class="courses-details-content">
                                <ul class="nav">
                                    <li class="nav-item wow fadeInUp" data-wow-delay=".3s">
                                        <a href="#Course" data-bs-toggle="tab" class="nav-link active">
                                            Informations
                                        </a>
                                    </li>
                                    <li class="nav-item wow fadeInUp" data-wow-delay=".5s">
                                        <a href="#Curriculum" data-bs-toggle="tab" class="nav-link">
                                            Contenu
                                        </a>
                                    </li>
                                    <li class="nav-item wow fadeInUp" data-wow-delay=".5s">
                                        <a href="#Instructors" data-bs-toggle="tab" class="nav-link">
                                            Formateurs
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div id="Course" class="tab-pane fade show active">
                                        <div class="description-content">
                                            <h3>Description</h3>
                                            <p class="mb-3">
                                                UX/UI design focuses on creating user-friendly and visually appealing
                                                digital experiences, ensuring
                                                that products such as websites and apps are both intuitive and enjoyable UX
                                                (User Experience) Design involves understanding the needs, behaviors, and
                                                pain points of users to create a seamless, effective experience process
                                                includes conducting user research, mapping user journeys.
                                            </p>
                                            <p>
                                                UI (User Interface) Design is the process of creating the visual elements of
                                                a product, including layout, color schemes, typography, and interactive
                                                features like buttons and icons.
                                            </p>
                                            <h3 class="mt-5">What you'll learn in this course?</h3>
                                            <p class="mb-4">
                                                Together, UX and UI design ensure that digital products are not only
                                                functional and accessible but also engaging and visually coherent, enhancing
                                                both usability and overall user satisfaction.
                                            </p>
                                            <div class="row g-4 mb-5">
                                                <div class="col-lg-6">
                                                    <ul class="list-item">
                                                        <li>
                                                            <i class="fas fa-check-circle"></i>
                                                            Introduction to UX/UI Design
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-check-circle"></i>
                                                            Design Thinking & User Research
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-check-circle"></i>
                                                            Wireframing & Prototyping
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-check-circle"></i>
                                                            Visual Design Principles
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-check-circle"></i>
                                                            Interaction Design & Usability
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6">
                                                    <ul class="list-item">
                                                        <li>
                                                            <i class="fas fa-check-circle"></i>
                                                            UX Writing & Content Strategy
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-check-circle"></i>
                                                            Usability Testing & Iteration
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-check-circle"></i>
                                                            UI Design Tools
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-check-circle"></i>
                                                            Mobile & Responsive Design
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-check-circle"></i>
                                                            Capstone Project
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <h3>How to Benefits in this Courses</h3>
                                            <p>
                                                UI (User Interface) Design is the process of creating the visual elements of
                                                product, including layout
                                                olor schemes, typography, and interactive features like buttons and icons
                                                design focuses aesthetics, consistency, and ensuring that the user can
                                                easily navigate and interact with the product.
                                            </p>
                                        </div>
                                    </div>
                                    <div id="Curriculum" class="tab-pane fade">
                                        <div class="course-curriculum-items">
                                            <h3>Course Content</h3>
                                            <div class="courses-faq-items">
                                                <div class="accordion" id="accordionExample">
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header" id="headingOne">
                                                            <button class="accordion-button" type="button"
                                                                data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                                aria-expanded="true" aria-controls="collapseOne">
                                                                Getting Started
                                                            </button>
                                                        </h2>
                                                        <div id="collapseOne" class="accordion-collapse collapse show"
                                                            aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                            <div class="accordion-body">
                                                                <ul>
                                                                    <li>
                                                                        <span>
                                                                            <i class="fa-brands fa-youtube"></i>
                                                                            Intro to Webflow Tutorial training course
                                                                        </span>
                                                                        <span class="text">
                                                                            00.00 <i class="fa-regular fa-eye"></i>
                                                                        </span>
                                                                    </li>
                                                                    <li>
                                                                        <span>
                                                                            <i class="fa-brands fa-youtube"></i>
                                                                            Getting started with Webflow tutorial
                                                                        </span>
                                                                        <span class="text">
                                                                            00.00 <i class="fa-regular fa-eye"></i>
                                                                        </span>
                                                                    </li>
                                                                    <li>
                                                                        <span>
                                                                            <i class="fa-brands fa-youtube"></i>
                                                                            What is Webflow
                                                                        </span>
                                                                        <span class="text">
                                                                            00.00 <i class="fa-regular fa-eye"></i>
                                                                        </span>
                                                                    </li>
                                                                    <li>
                                                                        <span>
                                                                            <i class="fa-brands fa-youtube"></i>
                                                                            Webflow FAQs - How much is webflow
                                                                        </span>
                                                                        <span class="text">
                                                                            00.00 <i class="fa-regular fa-eye"></i>
                                                                        </span>
                                                                    </li>
                                                                    <li>
                                                                        <span>
                                                                            <i class="fa-brands fa-youtube"></i>
                                                                            How to build your first website in webflow
                                                                        </span>
                                                                        <span class="text">
                                                                            00.00 <i class="fa-regular fa-eye"></i>
                                                                        </span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header" id="headingTwo">
                                                            <button class="accordion-button collapsed" type="button"
                                                                data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                                aria-expanded="false" aria-controls="collapseTwo">
                                                                The Brief
                                                            </button>
                                                        </h2>
                                                        <div id="collapseTwo" class="accordion-collapse collapse"
                                                            aria-labelledby="headingTwo"
                                                            data-bs-parent="#accordionExample">
                                                            <div class="accordion-body">
                                                                <ul>
                                                                    <li>
                                                                        <span>
                                                                            <i class="fa-brands fa-youtube"></i>
                                                                            Intro to Webflow Tutorial training course
                                                                        </span>
                                                                        <span class="text">
                                                                            00.00 <i class="fa-regular fa-eye"></i>
                                                                        </span>
                                                                    </li>
                                                                    <li>
                                                                        <span>
                                                                            <i class="fa-brands fa-youtube"></i>
                                                                            Getting started with Webflow tutorial
                                                                        </span>
                                                                        <span class="text">
                                                                            00.00 <i class="fa-regular fa-eye"></i>
                                                                        </span>
                                                                    </li>
                                                                    <li>
                                                                        <span>
                                                                            <i class="fa-brands fa-youtube"></i>
                                                                            What is Webflow
                                                                        </span>
                                                                        <span class="text">
                                                                            00.00 <i class="fa-regular fa-eye"></i>
                                                                        </span>
                                                                    </li>
                                                                    <li>
                                                                        <span>
                                                                            <i class="fa-brands fa-youtube"></i>
                                                                            Webflow FAQs - How much is webflow
                                                                        </span>
                                                                        <span class="text">
                                                                            00.00 <i class="fa-regular fa-eye"></i>
                                                                        </span>
                                                                    </li>
                                                                    <li>
                                                                        <span>
                                                                            <i class="fa-brands fa-youtube"></i>
                                                                            How to build your first website in webflow
                                                                        </span>
                                                                        <span class="text">
                                                                            00.00 <i class="fa-regular fa-eye"></i>
                                                                        </span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header" id="headingthree">
                                                            <button class="accordion-button collapsed" type="button"
                                                                data-bs-toggle="collapse" data-bs-target="#collapsethree"
                                                                aria-expanded="false" aria-controls="collapsethree">
                                                                Buttons & Navigation - Level 1
                                                            </button>
                                                        </h2>
                                                        <div id="collapsethree" class="accordion-collapse collapse"
                                                            aria-labelledby="headingthree"
                                                            data-bs-parent="#accordionExample">
                                                            <div class="accordion-body">
                                                                <ul>
                                                                    <li>
                                                                        <span>
                                                                            <i class="fa-brands fa-youtube"></i>
                                                                            Intro to Webflow Tutorial training course
                                                                        </span>
                                                                        <span class="text">
                                                                            00.00 <i class="fa-regular fa-eye"></i>
                                                                        </span>
                                                                    </li>
                                                                    <li>
                                                                        <span>
                                                                            <i class="fa-brands fa-youtube"></i>
                                                                            Getting started with Webflow tutorial
                                                                        </span>
                                                                        <span class="text">
                                                                            00.00 <i class="fa-regular fa-eye"></i>
                                                                        </span>
                                                                    </li>
                                                                    <li>
                                                                        <span>
                                                                            <i class="fa-brands fa-youtube"></i>
                                                                            What is Webflow
                                                                        </span>
                                                                        <span class="text">
                                                                            00.00 <i class="fa-regular fa-eye"></i>
                                                                        </span>
                                                                    </li>
                                                                    <li>
                                                                        <span>
                                                                            <i class="fa-brands fa-youtube"></i>
                                                                            Webflow FAQs - How much is webflow
                                                                        </span>
                                                                        <span class="text">
                                                                            00.00 <i class="fa-regular fa-eye"></i>
                                                                        </span>
                                                                    </li>
                                                                    <li>
                                                                        <span>
                                                                            <i class="fa-brands fa-youtube"></i>
                                                                            How to build your first website in webflow
                                                                        </span>
                                                                        <span class="text">
                                                                            00.00 <i class="fa-regular fa-eye"></i>
                                                                        </span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item mb-0">
                                                        <h2 class="accordion-header" id="headingfour">
                                                            <button class="accordion-button collapsed" type="button"
                                                                data-bs-toggle="collapse" data-bs-target="#collapsefour"
                                                                aria-expanded="false" aria-controls="collapsefour">
                                                                Responsive Design
                                                            </button>
                                                        </h2>
                                                        <div id="collapsefour" class="accordion-collapse collapse"
                                                            aria-labelledby="headingfour"
                                                            data-bs-parent="#accordionExample">
                                                            <div class="accordion-body">
                                                                <ul>
                                                                    <li>
                                                                        <span>
                                                                            <i class="fa-brands fa-youtube"></i>
                                                                            Intro to Webflow Tutorial training course
                                                                        </span>
                                                                        <span class="text">
                                                                            00.00 <i class="fa-regular fa-eye"></i>
                                                                        </span>
                                                                    </li>
                                                                    <li>
                                                                        <span>
                                                                            <i class="fa-brands fa-youtube"></i>
                                                                            Getting started with Webflow tutorial
                                                                        </span>
                                                                        <span class="text">
                                                                            00.00 <i class="fa-regular fa-eye"></i>
                                                                        </span>
                                                                    </li>
                                                                    <li>
                                                                        <span>
                                                                            <i class="fa-brands fa-youtube"></i>
                                                                            What is Webflow
                                                                        </span>
                                                                        <span class="text">
                                                                            00.00 <i class="fa-regular fa-eye"></i>
                                                                        </span>
                                                                    </li>
                                                                    <li>
                                                                        <span>
                                                                            <i class="fa-brands fa-youtube"></i>
                                                                            Webflow FAQs - How much is webflow
                                                                        </span>
                                                                        <span class="text">
                                                                            00.00 <i class="fa-regular fa-eye"></i>
                                                                        </span>
                                                                    </li>
                                                                    <li>
                                                                        <span>
                                                                            <i class="fa-brands fa-youtube"></i>
                                                                            How to build your first website in webflow
                                                                        </span>
                                                                        <span class="text">
                                                                            00.00 <i class="fa-regular fa-eye"></i>
                                                                        </span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="Instructors" class="tab-pane fade">
                                        <div class="instructors-items">
                                            <h3>Instructors</h3>
                                            <div class="instructors-box-items">
                                                <div class="thumb">
                                                    <img src="assets/img/courses/instructors-1.png" alt="img">
                                                </div>
                                                <div class="content">
                                                    <h4>Ronald Richards</h4>
                                                    <span>Lead UX/UI Designer</span>
                                                    <p>
                                                        UX/UI design courses offer a comprehensive introduction to the world
                                                        of user experience and user interface design
                                                    </p>
                                                    <div class="social-icon">
                                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                        <a href="#" class="bg-2"><i
                                                                class="fab fa-twitter"></i></a>
                                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                                        <a href="#"><i class="fa-brands fa-vimeo-v"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="instructors-box-items style-2">
                                                <div class="thumb">
                                                    <img src="assets/img/courses/instructors-2.png" alt="img">
                                                </div>
                                                <div class="content">
                                                    <h4>Leslie Alexander</h4>
                                                    <span>Product Designer</span>
                                                    <p>
                                                        UX/UI design courses offer a comprehensive introduction to the world
                                                        of user experience and user interface design
                                                    </p>
                                                    <div class="social-icon">
                                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                        <a href="#" class="bg-2"><i
                                                                class="fab fa-twitter"></i></a>
                                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                                        <a href="#"><i class="fa-brands fa-vimeo-v"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
                                <div class="news-widget-categories">
                                    <ul>
                                        <li><a href="/prestations">Formations</a></li>
                                        <li><a href="/prestations">Etudes </a></li>
                                        <li><a href="/prestations">Conseils</a></li>
                                        <li><a href="/prestations">Réalisations</a></li>
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
