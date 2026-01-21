

(function($) {
    "use strict";

    $(document).ready( function() {
        //X-CSRF-TOKEN
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        // Set up an event listener for the contact form.
        $(".submit-btn").on("click", function (e) {
            // Stop the browser from submitting the form.
            e.preventDefault();
            // Get the form.
            var form = $('#contact-form');
            var hasError = false;
            // Get the messages div.
            var formbtn = $('.submit-btn');
            var formMessages = $('.form-message');
            $(formMessages).removeClass('error');
            $('.fieldError').removeClass('fieldError');
            $('#contact-form .form-control').each(function() {
                if (jQuery.trim($(this).val()) === '') {
                    $(formMessages).addClass('error').html("Veuillez renseigner tous les champs !");
                    $(this).addClass('fieldError');
                    hasError = true;
                }
            });
            if (!hasError) {
                $('#contact-form .email').each(function() {
                    var value = jQuery.trim($(this).val());
                    var regex = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                    if (!regex.test(value)) {
                        $(formMessages).addClass('error').html("Adresse e-mail non valide.");
                        $(this).addClass('fieldError');
                        hasError = true;
                    }
                });
            }
            if (!hasError) {
                // Submit the form using AJAX.
                $.ajax({
                    type: 'POST',
                    url: '/sendmail',
                    data: $(form).serialize(),
                    beforeSend: function() {
                        $(formbtn).addClass('not-active').html('<i class="fa fa-spinner fa-pulse"></i> Patienter...');
                    },
                    success:function(response) {
                        var splitter = response.split('|');
                        if (splitter[0] != 0) {
                            if (splitter[0] == 1) {
                                var hasError = 'success';
                                var hasTitle = 'Félicitation !';
                            } else {
                                var hasError = 'error';
                                var hasTitle = 'Echec !';
                            }
                            swal.fire({
                                title: hasTitle,
                                text: splitter[1],
                                icon: hasError,
                                buttonsStyling: false,
                                confirmButtonText: 'Fermer',
                                customClass: {
                                    confirmButton: "theme-btn btn-sm"
                                }
                            }).then(function() {
                                location.reload();
                            });
                        } else {
                            $(splitter[2]).addClass('fieldError');
                            $(formMessages).addClass('error').html(splitter[1]);
                            $(formbtn).removeClass('not-active').html('Envoyer message <i class="far fa-paper-plane"></i>');
                        }
                    }
                });
            }
        });
        //>> Mobile Menu Js Start <<//
        $('#mobile-menu').meanmenu({
            meanMenuContainer: '.mobile-menu',
            meanScreenWidth: "1199",
            meanExpand: ['<i class="far fa-plus"></i>'],
        });

        //>> Sidebar Toggle Js Start <<//
        $(".offcanvas__close,.offcanvas__overlay").on("click", function() {
            $(".offcanvas__info").removeClass("info-open");
            $(".offcanvas__overlay").removeClass("overlay-open");
        });
        $(".sidebar__toggle").on("click", function() {
            $(".offcanvas__info").addClass("info-open");
            $(".offcanvas__overlay").addClass("overlay-open");
        });

        //>> Body Overlay Js Start <<//
        $(".body-overlay").on("click", function() {
            $(".offcanvas__area").removeClass("offcanvas-opened");
            $(".df-search-area").removeClass("opened");;
            $(".body-overlay").removeClass("opened");
        });

        //>> Sticky Header Js Start <<//

        $(window).scroll(function() {
            if ($(this).scrollTop() > 250) {
                $("#header-sticky").addClass("sticky");
            } else {
                $("#header-sticky").removeClass("sticky");
            }
        });

        //>> Video Popup Start <<//
        $(".img-popup").magnificPopup({
            type: "image",
            gallery: {
                enabled: true,
            },
        });

        $('.video-popup').magnificPopup({
            type: 'iframe',
            callbacks: {
            }
        });
        
        //>> Counterup Start <<//
        $(".count").counterUp({
            delay: 15,
            time: 4000,
        });

        //>> Wow Animation Start <<//
        new WOW().init();

        //>> Nice Select Start <<//
        $('select').niceSelect();
   
        //>> courses Slider Start <<//
        if($('.courses-slider').length > 0) {
            const coursesSlider = new Swiper(".courses-slider", {
                spaceBetween: 30,
                speed: 1300,
                loop: true,
                autoplay: {
                    delay: 2000,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: ".dot",
                    clickable: true,
                },
                breakpoints: {
                    1199: {
                        slidesPerView: 3,
                    },
                    991: {
                        slidesPerView: 2,
                    },
                    767: {
                        slidesPerView: 2,
                    },
                    575: {
                        slidesPerView: 2,
                    },
                    0: {
                        slidesPerView: 1,
                    },
                },
            });
        }

        //>> team Slider Start <<//
        if($('.team-slider').length > 0) {
            const teamSlider = new Swiper(".team-slider", {
                spaceBetween: 30,
                speed: 1300,
                loop: true,
                autoplay: {
                    delay: 2000,
                    disableOnInteraction: false,
                },
                navigation: {
                    nextEl: ".array-prev",
                    prevEl: ".array-next",
                },
                breakpoints: {
                    1199: {
                        slidesPerView: 4,
                    },
                    991: {
                        slidesPerView: 3,
                    },
                    767: {
                        slidesPerView: 2,
                    },
                    575: {
                        slidesPerView: 2,
                    },
                    0: {
                        slidesPerView: 1,
                    },
                },
            });
        }

         //>> Testimonial Slider Start <<//
         if($('.testimonial-slider').length > 0) {
            const testimonialSlider = new Swiper(".testimonial-slider", {
                spaceBetween: 30,
                speed: 1300,
                loop: true,
                autoplay: {
                    delay: 2000,
                    disableOnInteraction: false,
                },
                navigation: {
                    nextEl: ".array-prev",
                    prevEl: ".array-next",
                },
                breakpoints: {
                    1199: {
                        slidesPerView: 1,
                    },
                    991: {
                        slidesPerView: 1,
                    },
                    767: {
                        slidesPerView: 1,
                    },
                    575: {
                        slidesPerView: 1,
                    },
                    0: {
                        slidesPerView: 1,
                    },
                },
            });
        }

        //>> Testimonial Slider2 Start <<//
        if($('.testimonial-slider-2').length > 0) {
            const testimonialSlider2 = new Swiper(".testimonial-slider-2", {
                spaceBetween: 30,
                speed: 1300,
                loop: true,
                autoplay: {
                    delay: 2000,
                    disableOnInteraction: false,
                },
                navigation: {
                    nextEl: ".array-prev",
                    prevEl: ".array-next",
                },
                breakpoints: {
                    1199: {
                        slidesPerView: 1,
                    },
                    991: {
                        slidesPerView: 1,
                    },
                    767: {
                        slidesPerView: 1,
                    },
                    575: {
                        slidesPerView: 1,
                    },
                    0: {
                        slidesPerView: 1,
                    },
                },
            });
        }

        //>> Brand Slider Start <<//
        const brandSlider = new Swiper(".brand-slider", {
            spaceBetween: 30,
            speed: 1300,
            loop: true,
            centeredSlides: true,
            autoplay: {
                delay: 2000,
                disableOnInteraction: false,
            },

            breakpoints: {
                1199: {
                    slidesPerView: 6,
                },
                991: {
                    slidesPerView: 4,
                },
                767: {
                    slidesPerView: 3,
                },
                575: {
                    slidesPerView: 2,
                },
                0: {
                    slidesPerView: 1,
                },
            },
        });

         //>> Instagram Slider Start <<//
         const instagramBannerSlider = new Swiper(".instagram-banner-slider", {
            spaceBetween: 30,
            speed: 1500,
            loop: true,
            autoplay: {
                delay: 1000,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: ".array-prev",
                prevEl: ".array-next",
            },
            breakpoints: {
                1399: {
                    slidesPerView: 8,
                },
                1199: {
                    slidesPerView: 5,
                },
                991: {
                    slidesPerView: 4,
                },
                767: {
                    slidesPerView: 3,
                },
                650: {
                    slidesPerView: 2,
                },
                575: {
                    slidesPerView: 1,
                },
                0: {
                    slidesPerView: 1,
                },
            },
        });

         //>> CountDown Start <<//
         let targetDate = new Date("2025-12-12 00:00:00").getTime();
         const countdownInterval = setInterval(function () {
             let currentDate = new Date().getTime();
             let remainingTime = targetDate - currentDate;
 
             if (remainingTime <= 0) {
                 clearInterval(countdownInterval);
                 // Display a message or perform any action when the countdown timer reaches zero
                 $("#countdown-container").text("Countdown has ended!");
             } else {
                 let days = Math.floor(remainingTime / (1000 * 60 * 60 * 24));
                 let hours = Math.floor(
                     (remainingTime % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
                 );
                 let minutes = Math.floor(
                     (remainingTime % (1000 * 60 * 60)) / (1000 * 60)
                 );
                 let seconds = Math.floor((remainingTime % (1000 * 60)) / 1000);
 
                 // Pad single-digit values with leading zeros
                 $("#day").text(days.toString().padStart(2, "0"));
                 $("#hour").text(hours.toString().padStart(2, "0"));
                 $("#min").text(minutes.toString().padStart(2, "0"));
                 $("#sec").text(seconds.toString().padStart(2, "0"));
             }
         }, 1000);

        //>> Search Popup Start <<//
        const $searchWrap = $(".search-wrap");
        const $navSearch = $(".nav-search");
        const $searchClose = $("#search-close");

        $(".search-trigger").on("click", function (e) {
            e.preventDefault();
            $searchWrap.animate({ opacity: "toggle" }, 500);
            $navSearch.add($searchClose).addClass("open");
        });

        $(".search-close").on("click", function (e) {
            e.preventDefault();
            $searchWrap.animate({ opacity: "toggle" }, 500);
            $navSearch.add($searchClose).removeClass("open");
        });

        function closeSearch() {
            $searchWrap.fadeOut(200);
            $navSearch.add($searchClose).removeClass("open");
        }

        $(document.body).on("click", function (e) {
            closeSearch();
        });

        $(".search-trigger, .main-search-input").on("click", function (e) {
            e.stopPropagation();
        });

         //>> Mouse Cursor Start <<//
         function mousecursor() {
            if ($("body")) {
                const e = document.querySelector(".cursor-inner"),
                    t = document.querySelector(".cursor-outer");
                let n,
                    i = 0,
                    o = !1;
                (window.onmousemove = function(s) {
                    o ||
                        (t.style.transform =
                            "translate(" + s.clientX + "px, " + s.clientY + "px)"),
                        (e.style.transform =
                            "translate(" + s.clientX + "px, " + s.clientY + "px)"),
                        (n = s.clientY),
                        (i = s.clientX);
                }),
                $("body").on("mouseenter", "a, .cursor-pointer", function() {
                        e.classList.add("cursor-hover"), t.classList.add("cursor-hover");
                    }),
                    $("body").on("mouseleave", "a, .cursor-pointer", function() {
                        ($(this).is("a") && $(this).closest(".cursor-pointer").length) ||
                        (e.classList.remove("cursor-hover"),
                            t.classList.remove("cursor-hover"));
                    }),
                    (e.style.visibility = "visible"),
                    (t.style.visibility = "visible");
            }
        }
        $(function() {
            mousecursor();
        });
        
         //>> Back To Top Slider Start <<//
         $(window).on('scroll', function() {
            if ($(this).scrollTop() > 20) {
                $("#back-top").addClass("show");
            } else {
                $("#back-top").removeClass("show");
            }
        });
        
        $(document).on('click', '#back-top', function() {
            $('html, body').animate({ scrollTop: 0 }, 800);
            return false;
        });
        
    }); // End Document Ready Function

    function loader() {
        $(window).on('load', function() {
            // Animate loader off screen
            $(".preloader").addClass('loaded');                    
            $(".preloader").delay(600).fadeOut();                       
        });
    }

    loader();

})(jQuery); // End jQuery