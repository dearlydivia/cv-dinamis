$(function () {
    // jquery
    /*=============== CHANGE BACKGROUND HEADER ===============*/
    $(window).scroll(async () => {
        if (window.scrollY >= 50) $("#header").addClass("scroll-header");
        else $("#header").removeClass("scroll-header");
    }); // scrollheader

    /*=============== CERTIFICATION MODAL ===============*/
    $(".certification__button").click(function (event) {
        $(event.target)
            .closest(".certification__card")
            .find(".certification__modal")
            .addClass("active-modal");
    });

    $(".certification__modal-close").click(function () {
        $(".certification__modal").removeClass("active-modal");
    });

    /*=============== MIXITUP FILTER PORTFOLIO ===============*/
    let mixerPortfolio = mixitup(".work__container", {
        selectors: {
            target: ".work__card",
        },
        animation: {
            duration: 300,
        },
    });

    /* Link active work */
    $(".work__item").click(async (event) => {
        $(".work__item").removeClass("active-work");
        $(event.target).addClass("active-work");
    });

    /*=============== SWIPER TESTIMONIAL ===============*/
    let swiperTestimonial = new Swiper(".testimonial__container", {
        spaceBetween: 24,
        loop: true,
        grabCursor: true,

        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },

        breakpoints: {
            576: {
                slidesPerView: 2,
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 48,
            },
        },
    });

    /*=============== SCROLL SECTIONS ACTIVE LINK ===============*/
    $(window).scroll(async () => {
        const scrollY = $(window).scrollTop();

        $("section").each(async (idx) => {
            let current = $("section")[idx];
            const sectionHeight = current.offsetHeight,
                sectionTop = current.offsetTop - 58,
                sectionId = current.attributes.id.nodeValue;

            if (scrollY > sectionTop && scrollY <= sectionTop + sectionHeight) {
                $(".nav__menu a[href*=" + sectionId + "]").addClass(
                    "active-link"
                );
                return false;
            } else {
                $(".nav__menu a[href*=" + sectionId + "]").removeClass(
                    "active-link"
                );
            }
        });
    });

    /*=============== LIGHT DARK THEME ===============*/
    const toggleTheme = async () => {
        let currentTheme = $("body").hasClass("light-theme") ? "light" : "dark"; // determine current theme

        // enable light-theme
        if (currentTheme === "dark") {
            // Add the light / icon theme
            $("body").addClass("light-theme");
            $("#theme-button").addClass("bxs-sun");
        } else {
            // Remove the light / icon theme
            $("body").removeClass("light-theme");
            $("#theme-button").removeClass("bxs-sun");
        }
    };

    // when the theme change button is pressed
    $("#theme-button").click(async () => {
        let currentTheme = $("body").hasClass("light-theme") ? "light" : "dark"; // determine current theme

        // enable light-theme
        if (currentTheme === "dark") {
            // Add the light / icon theme
            $("body").addClass("light-theme");
            $("#theme-button").addClass("bxs-sun");
        } else {
            // disable light theme
            // Remove the light / icon theme
            $("body").removeClass("light-theme");
            $("#theme-button").removeClass("bxs-sun");
        }
    }); // toggle theme when theme button pressed

    /*=============== SCROLL REVEAL ANIMATION ===============*/
    const sr = ScrollReveal({
        origin: "top",
        distance: "60px",
        duration: 2500,
        delay: 400,
        //reset: true,
    });

    sr.reveal(`.home__data`);
    sr.reveal(`.home__handle`, { delay: 700 });
    sr.reveal(`.home__social, .home__scroll`, { delay: 900, origin: "bottom" });
}); //jquery
