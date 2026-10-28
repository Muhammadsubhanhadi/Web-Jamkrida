
/* =====================================================
   NAVBAR SCROLL
===================================================== */

const navbar = document.getElementById("navbar");

window.addEventListener("scroll", function () {

    if (window.scrollY > 40) {

        navbar.classList.add("scrolled");

    } else {

        navbar.classList.remove("scrolled");

    }

});


/* =====================================================
   MOBILE MENU
===================================================== */

const menuToggle =
    document.getElementById("menuToggle");

const navMenu =
    document.getElementById("navMenu");


menuToggle.addEventListener("click", function () {

    navMenu.classList.toggle("open");

    if (navMenu.classList.contains("open")) {

        menuToggle.innerHTML =
            '<i class="fa-solid fa-xmark"></i>';

    } else {

        menuToggle.innerHTML =
            '<i class="fa-solid fa-bars"></i>';

    }

});

/* =====================================================
   MOBILE DROPDOWN
===================================================== */

const dropdownButtons =
    document.querySelectorAll(".dropdown-button");


dropdownButtons.forEach(function (button) {

    button.addEventListener("click", function () {

        if (window.innerWidth <= 980) {

            const parent =
                button.parentElement;

            parent.classList.toggle("open");

        }

    });

});


/* =====================================================
   CLOSE MOBILE MENU
===================================================== */

const navLinks =
    document.querySelectorAll(".nav-menu a");


navLinks.forEach(function (link) {

    link.addEventListener("click", function () {

        if (window.innerWidth <= 980) {

            navMenu.classList.remove("open");

            menuToggle.innerHTML =
                '<i class="fa-solid fa-bars"></i>';

        }

    });

});


/* =====================================================
   BACK TO TOP
===================================================== */

const backTop =
    document.getElementById("backTop");


window.addEventListener("scroll", function () {

    if (window.scrollY > 500) {

        backTop.classList.add("show");

    } else {

        backTop.classList.remove("show");

    }

});


backTop.addEventListener("click", function () {

    window.scrollTo({

        top: 0,

        behavior: "smooth"

    });

});


/* =====================================================
   SMOOTH SCROLL
===================================================== */

document
    .querySelectorAll('a[href^="#"]')
    .forEach(function (link) {

        link.addEventListener("click", function (event) {

            const targetID =
                link.getAttribute("href");

            if (
                targetID &&
                targetID !== "#"
            ) {

                const target =
                    document.querySelector(targetID);

                if (target) {

                    event.preventDefault();

                    target.scrollIntoView({

                        behavior: "smooth",

                        block: "start"

                    });

                }

            }

        });

    });


/* =====================================================
   COUNTER ANIMATION
===================================================== */

const counters =
    document.querySelectorAll(".counter");


const counterObserver =
    new IntersectionObserver(

        function (entries) {

            entries.forEach(function (entry) {

                if (entry.isIntersecting) {

                    const counter =
                        entry.target;

                    const target =
                        Number(
                            counter.dataset.target
                        );

                    let current = 0;

                    const speed = 30;

                    const updateCounter =
                        setInterval(function () {

                            current +=
                                Math.ceil(
                                    target / 40
                                );

                            if (current >= target) {

                                current =
                                    target;

                                clearInterval(
                                    updateCounter
                                );

                            }

                            counter.textContent =
                                current;

                        }, speed);


                    counterObserver.unobserve(
                        counter
                    );

                }

            });

        },

        {
            threshold: .6
        }

    );


counters.forEach(function (counter) {

    counterObserver.observe(counter);

});


/* =====================================================
   REVEAL ANIMATION
===================================================== */

const revealElements =
    document.querySelectorAll(
        ".hero-text, .hero-visual, .value-card, .product-card, .report-card"
    );


const revealObserver =
    new IntersectionObserver(

        function (entries) {

            entries.forEach(function (entry) {

                if (entry.isIntersecting) {

                    entry.target.style.opacity = "1";

                    entry.target.style.transform =
                        "translateY(0)";

                    revealObserver.unobserve(
                        entry.target
                    );

                }

            });

        },

        {
            threshold: .12
        }

    );


revealElements.forEach(function (element) {

    element.style.opacity = "0";

    element.style.transform =
        "translateY(25px)";

    element.style.transition =
        "all .7s ease";

    revealObserver.observe(element);

});

// jumbotron


/* =====================================================
   JUMBOTRON SLIDER
   Auto slide + navigasi + tinggi gambar otomatis
===================================================== */

(function () {
    function initJumbotron() {
        const slider = document.querySelector(
            '#jumbotron .jumbotron-slider'
        );

        if (!slider || slider.dataset.initialized === 'true') {
            return;
        }

        const slides = Array.from(
            slider.querySelectorAll('.jumbotron-slide')
        );

        const dots = Array.from(
            slider.querySelectorAll('.jumbotron-dot')
        );

        const currentNumber = slider.querySelector(
            '.jumbotron-current'
        );

        const previousButton = slider.querySelector(
            '.jumbotron-prev'
        );

        const nextButton = slider.querySelector(
            '.jumbotron-next'
        );

        if (!slides.length) return;

        slider.dataset.initialized = 'true';

        let currentIndex = 0;
        let autoplayTimer = null;
        let resizeTimer = null;
        let isHovered = false;
        let isFocused = false;

        const reducedMotion = window.matchMedia(
            '(prefers-reduced-motion: reduce)'
        );

        /*
         * Menghitung tinggi slider dari ukuran asli gambar.
         * Gambar tidak dipotong dan tidak dipaksa ke tinggi tetap.
         */
        function updateSliderHeight(index) {
            const image = slides[index].querySelector('img');

            if (!image) return;

            function applyHeight() {
                if (!image.naturalWidth || !image.naturalHeight) {
                    return;
                }

                const sliderWidth = slider.clientWidth;

                if (!sliderWidth) return;

                const imageRatio =
                    image.naturalHeight / image.naturalWidth;

                const calculatedHeight =
                    sliderWidth * imageRatio;

                slider.style.height = calculatedHeight + 'px';
            }

            if (image.complete && image.naturalWidth > 0) {
                applyHeight();
            } else {
                image.addEventListener(
                    'load',
                    applyHeight,
                    { once: true }
                );
            }
        }

        /*
         * Menampilkan slide terpilih.
         */
        function showSlide(index) {
            currentIndex =
                (index + slides.length) % slides.length;

            slides.forEach(function (slide, i) {
                const active = i === currentIndex;

                slide.classList.toggle('active', active);
                slide.setAttribute(
                    'aria-hidden',
                    active ? 'false' : 'true'
                );
            });

            dots.forEach(function (dot, i) {
                const active = i === currentIndex;

                dot.classList.toggle('active', active);

                if (active) {
                    dot.setAttribute('aria-current', 'true');
                } else {
                    dot.removeAttribute('aria-current');
                }
            });

            if (currentNumber) {
                currentNumber.textContent = String(
                    currentIndex + 1
                ).padStart(2, '0');
            }

            updateSliderHeight(currentIndex);
        }

        /*
         * Menghentikan pergantian otomatis.
         */
        function stopAutoplay() {
            if (autoplayTimer !== null) {
                clearInterval(autoplayTimer);
                autoplayTimer = null;
            }
        }

        /*
         * Pergantian otomatis setiap 5 detik.
         */
        function startAutoplay() {
            stopAutoplay();

            if (
                slides.length < 2 ||
                reducedMotion.matches ||
                document.hidden ||
                isHovered ||
                isFocused
            ) {
                return;
            }

            autoplayTimer = setInterval(function () {
                showSlide(currentIndex + 1);
            }, 5000);
        }

        function goToSlide(index) {
            showSlide(index);
            startAutoplay();
        }

        /*
         * Tombol panah.
         */
        if (previousButton) {
            previousButton.addEventListener('click', function () {
                goToSlide(currentIndex - 1);
            });
        }

        if (nextButton) {
            nextButton.addEventListener('click', function () {
                goToSlide(currentIndex + 1);
            });
        }

        /*
         * Indikator titik.
         */
        dots.forEach(function (dot, index) {
            dot.addEventListener('click', function () {
                goToSlide(index);
            });
        });

        /*
         * Berhenti sementara ketika mouse berada di atas banner.
         */
        slider.addEventListener('mouseenter', function () {
            isHovered = true;
            stopAutoplay();
        });

        slider.addEventListener('mouseleave', function () {
            isHovered = false;
            startAutoplay();
        });

        /*
         * Berhenti ketika kontrol slider sedang difokuskan.
         */
        slider.addEventListener('focusin', function () {
            isFocused = true;
            stopAutoplay();
        });

        slider.addEventListener('focusout', function (event) {
            if (!slider.contains(event.relatedTarget)) {
                isFocused = false;
                startAutoplay();
            }
        });

        /*
         * Menyesuaikan tinggi ketika lebar halaman berubah.
         */
        window.addEventListener('resize', function () {
            clearTimeout(resizeTimer);

            resizeTimer = setTimeout(function () {
                updateSliderHeight(currentIndex);
            }, 100);
        });

        /*
         * Menghentikan autoplay saat tab tidak terlihat.
         */
        document.addEventListener(
            'visibilitychange',
            function () {
                if (document.hidden) {
                    stopAutoplay();
                } else {
                    startAutoplay();
                }
            }
        );

        /*
         * Menangani perubahan preferensi gerakan.
         */
        if (reducedMotion.addEventListener) {
            reducedMotion.addEventListener('change', function () {
                startAutoplay();
            });
        }

        /*
         * Memastikan tinggi slider diperbarui ketika
         * masing-masing gambar selesai dimuat.
         */
        slides.forEach(function (slide, index) {
            const image = slide.querySelector('img');

            if (!image) return;

            image.addEventListener('load', function () {
                if (index === currentIndex) {
                    updateSliderHeight(currentIndex);
                }
            });
        });

        /*
         * Mulai dari gambar pertama.
         */
        showSlide(0);
        startAutoplay();
    }

    if (document.readyState === 'loading') {
        document.addEventListener(
            'DOMContentLoaded',
            initJumbotron,
            { once: true }
        );
    } else {
        initJumbotron();
    }
})();


/* =========================================================
   KEGIATAN KAMI
   PT. JAMKRIDA NTB SYARIAH
========================================================= */

document.addEventListener("DOMContentLoaded", function () {

    const activityElements =
        document.querySelectorAll(
            "#kegiatan-kami .activity-reveal"
        );


    if (!activityElements.length) {
        return;
    }


    /* =========================================
       SCROLL REVEAL
    ========================================== */

    const activityObserver =
        new IntersectionObserver(
            function (entries, observer) {

                entries.forEach(function (entry) {

                    if (entry.isIntersecting) {

                        entry.target.classList.add(
                            "activity-visible"
                        );

                        observer.unobserve(
                            entry.target
                        );

                    }

                });

            },
            {
                threshold: 0.12
            }
        );


    activityElements.forEach(function (element) {

        activityObserver.observe(element);

    });


    /* =========================================
       IMAGE PARALLAX HALUS
    ========================================== */

    const activityCards =
        document.querySelectorAll(
            "#kegiatan-kami .activity-card"
        );


    activityCards.forEach(function (card) {

        const image =
            card.querySelector(
                ".activity-image img"
            );


        if (!image) {
            return;
        }


        card.addEventListener(
            "mousemove",
            function (event) {

                const rect =
                    card.getBoundingClientRect();


                const x =
                    event.clientX -
                    rect.left;


                const y =
                    event.clientY -
                    rect.top;


                const centerX =
                    rect.width / 2;


                const centerY =
                    rect.height / 2;


                const rotateX =
                    (y - centerY) /
                    centerY *
                    -1.2;


                const rotateY =
                    (x - centerX) /
                    centerX *
                    1.2;


                card.style.transform =
                    `
                    translateY(-10px)
                    perspective(900px)
                    rotateX(${rotateX}deg)
                    rotateY(${rotateY}deg)
                    `;

            }
        );


        card.addEventListener(
            "mouseleave",
            function () {

                card.style.transform =
                    "";

            }
        );

    });


    /* =========================================
       REDUCE MOTION
    ========================================== */

    const reducedMotion =
        window.matchMedia(
            "(prefers-reduced-motion: reduce)"
        );


    if (reducedMotion.matches) {

        activityElements.forEach(
            function (element) {

                element.classList.add(
                    "activity-visible"
                );

            }
        );

    }

});


/* =====================================================
   ACTIVE NAV
===================================================== */

const sections =
    document.querySelectorAll("section[id]");


const mainNavLinks =
    document.querySelectorAll(
        '.nav-menu > a[href^="#"]'
    );


window.addEventListener("scroll", function () {

    let current = "";

    sections.forEach(function (section) {

        const sectionTop =
            section.offsetTop - 150;

        if (
            window.scrollY >= sectionTop
        ) {

            current =
                section.getAttribute("id");

        }

    });


    mainNavLinks.forEach(function (link) {

        link.classList.remove("active");

        if (
            link.getAttribute("href") ===
            "#" + current
        ) {

            link.classList.add("active");

        }

    });

});

/* =========================================================
   MITRA KAMI 
========================================================= */

/* =========================================================
   MITRA KAMI
   TRUE SEAMLESS INFINITE MARQUEE
========================================================= */

document.addEventListener('DOMContentLoaded', function () {

    const track =
        document.querySelector('.partner-track');

    const marquee =
        document.querySelector('.partner-marquee');


    if (!track || !marquee) return;


    /* =====================================================
       AMBIL MITRA ASLI
    ===================================================== */

    const originalItems =
        Array.from(
            track.querySelectorAll('.partner-item')
        );


    if (originalItems.length === 0) return;


    /* =====================================================
       DUPLIKAT OTOMATIS
    ===================================================== */

    originalItems.forEach(function (item) {

        const clone =
            item.cloneNode(true);

        clone.setAttribute(
            'aria-hidden',
            'true'
        );

        track.appendChild(clone);

    });


    /* =====================================================
       HITUNG JARAK 1 PUTARAN
    ===================================================== */

    function calculatePartnerDistance() {

        const items =
            track.querySelectorAll('.partner-item');


        const total =
            originalItems.length;


        if (items.length < total * 2) return;


        let distance = 0;


        /* ---------------------------------------------
           Hitung lebar 6 logo pertama
        --------------------------------------------- */

        for (let i = 0; i < total; i++) {

            distance +=
                items[i].getBoundingClientRect().width;

        }


        /* ---------------------------------------------
           Hitung GAP hanya di antara logo pertama
        --------------------------------------------- */

        const trackStyle =
            window.getComputedStyle(track);


        const gap =
            parseFloat(
                trackStyle.columnGap ||
                trackStyle.gap ||
                0
            );


        distance +=
            gap * (total - 1);


        /* ---------------------------------------------
           Simpan ke CSS
        --------------------------------------------- */

        track.style.setProperty(
            '--partner-distance',
            distance + 'px'
        );

    }


    /* =====================================================
       TUNGGU GAMBAR SELESAI DIMUAT
    ===================================================== */

    const images =
        track.querySelectorAll('img');


    let loadedImages = 0;


    function imageLoaded() {

        loadedImages++;


        if (
            loadedImages >= images.length
        ) {

            calculatePartnerDistance();

        }

    }


    if (images.length === 0) {

        calculatePartnerDistance();

    } else {

        images.forEach(function (img) {

            if (img.complete) {

                imageLoaded();

            } else {

                img.addEventListener(
                    'load',
                    imageLoaded,
                    {
                        once: true
                    }
                );

                img.addEventListener(
                    'error',
                    imageLoaded,
                    {
                        once: true
                    }
                );

            }

        });

    }


    /* =====================================================
       HITUNG ULANG KETIKA UKURAN LAYAR BERUBAH
    ===================================================== */

    let resizeTimer;


    window.addEventListener(
        'resize',
        function () {

            clearTimeout(resizeTimer);


            resizeTimer =
                setTimeout(
                    function () {

                        calculatePartnerDistance();

                    },
                    250
                );

        }
    );


    /* =====================================================
       PAUSE SAAT MOUSE MASUK
    ===================================================== */

    marquee.addEventListener(
        'mouseenter',
        function () {

            track.style.animationPlayState =
                'paused';

        }
    );


    /* =====================================================
       JALAN LAGI SAAT MOUSE KELUAR
    ===================================================== */

    marquee.addEventListener(
        'mouseleave',
        function () {

            track.style.animationPlayState =
                'running';

        }
    );


    /* =====================================================
       TOUCH HP
    ===================================================== */

    marquee.addEventListener(
        'touchstart',
        function () {

            track.style.animationPlayState =
                'paused';

        },
        {
            passive: true
        }
    );


    marquee.addEventListener(
        'touchend',
        function () {

            setTimeout(
                function () {

                    track.style.animationPlayState =
                        'running';

                },
                600
            );

        },
        {
            passive: true
        }
    );

});


/* =========================================================
   LOKASI KANTOR
   GOOGLE MAPS + ANIMASI
========================================================= */

document.addEventListener('DOMContentLoaded', function () {


    /* =====================================================
       URL GOOGLE MAPS
       
       GANTI URL INI DENGAN LINK GOOGLE MAPS KANTOR
       PT. JAMKRIDA NTB SYARIAH
    ===================================================== */

    const googleMapsURL =
        'https://maps.app.goo.gl/qc7pywmo1KZ43Jia6';


    /* =====================================================
       BUKA GOOGLE MAPS
    ===================================================== */

    window.openGoogleMaps = function () {

        window.open(
            googleMapsURL,
            '_blank',
            'noopener,noreferrer'
        );

    };


    /* =====================================================
       KLIK MAP DENGAN KEYBOARD
    ===================================================== */

    const mapCard =
        document.querySelector('.location-map-card');


    if (mapCard) {

        mapCard.addEventListener(
            'keydown',
            function (event) {

                if (
                    event.key === 'Enter' ||
                    event.key === ' '
                ) {

                    event.preventDefault();

                    openGoogleMaps();

                }

            }
        );

    }


    /* =====================================================
       SCROLL REVEAL
    ===================================================== */

    const revealElements =
        document.querySelectorAll(
            '.office-visual, .office-info, .location-map-card, .location-values-inner'
        );


    const revealObserver =
        new IntersectionObserver(
            function (entries) {

                entries.forEach(function (entry) {

                    if (entry.isIntersecting) {

                        entry.target.classList.add(
                            'location-reveal-show'
                        );

                        revealObserver.unobserve(
                            entry.target
                        );

                    }

                });

            },
            {
                threshold: 0.12
            }
        );


    revealElements.forEach(function (element) {

        element.classList.add(
            'location-reveal'
        );

        revealObserver.observe(element);

    });

});


/* =========================================================
   ISLAMIC LUXURY LOADER
   ========================================================= */

// document.addEventListener("DOMContentLoaded", function () {

//     const loader = document.getElementById("islamic-loader");
//     const progressBar = document.getElementById("loader-progress-bar");
//     const percent = document.getElementById("loader-percent");

//     if (!loader || !progressBar || !percent) {
//         return;
//     }

//     let progress = 0;

//     const loading = setInterval(function () {

//         /*
//          * Kecepatan loading dibuat tidak terlalu cepat
//          * supaya animasi Bismillah sempat terlihat.
//          */

//         let increase = Math.floor(Math.random() * 3) + 2;

//         progress += increase;

//         if (progress >= 100) {

//             progress = 100;

//             clearInterval(loading);

//             progressBar.style.width = "100%";
//             percent.textContent = "100%";

//             /*
//              * Setelah mencapai 100%,
//              * tunggu sebentar lalu hilangkan loader.
//              */

//             setTimeout(function () {

//                 loader.classList.add("loader-hidden");

//             }, 200);
//         }

//         progressBar.style.width = progress + "%";
//         percent.textContent = progress + "%";

//     }, 30);

// });