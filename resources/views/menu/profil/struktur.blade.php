@extends('layouts.main')

@section('title', 'Struktur Organisasi')

@section('content')

<style>

/* =====================================================
   STRUKTUR ORGANISASI
===================================================== */

.struktur-page {
    position: relative;

    padding: 80px 20px 100px;

    background:
        radial-gradient(
            circle at 10% 10%,
            rgba(8, 122, 75, .06),
            transparent 30%
        ),
        radial-gradient(
            circle at 90% 80%,
            rgba(213, 168, 58, .07),
            transparent 30%
        ),
        #f7faf8;

    overflow: hidden;
}

.struktur-container {
    width: min(1200px, 100%);
    margin: auto;
}


/* =====================================================
   HEADER
===================================================== */

.struktur-header {
    display: flex;
    align-items: center;

    gap: 18px;

    margin-bottom: 35px;

    opacity: 0;

    transform: translateY(25px);

    animation:
        strukturFadeUp .8s ease forwards;
}

.struktur-number {
    width: 48px;
    height: 48px;

    display: flex;
    align-items: center;
    justify-content: center;

    border: 1px solid rgba(8, 122, 75, .25);

    color: #087a4b;

    font-size: 13px;
    font-weight: 700;
}

.struktur-label {
    display: block;

    margin-bottom: 6px;

    color: #087a4b;

    font-size: 11px;
    font-weight: 700;

    letter-spacing: 2px;
}

.struktur-header h1 {
    margin: 0;

    color: #16251f;

    font-size: clamp(36px, 5vw, 55px);

    line-height: 1.05;
}


/* =====================================================
   MAIN CARD
===================================================== */

.struktur-card {
    position: relative;

    padding: clamp(25px, 4vw, 45px);

    background: rgba(255, 255, 255, .97);

    border: 1px solid rgba(8, 122, 75, .10);

    box-shadow:
        0 18px 50px rgba(0, 0, 0, .07);

    opacity: 0;

    transform: translateY(30px);

    animation:
        strukturFadeUp .9s ease .15s forwards;
}

.struktur-card::before {
    content: "";

    position: absolute;

    top: 0;
    left: 0;

    width: 100%;
    height: 4px;

    background:
        linear-gradient(
            90deg,
            #087a4b,
            #d5a83a,
            #087a4b
        );
}


/* =====================================================
   CARD HEADER
===================================================== */

.struktur-card-header {
    display: flex;

    align-items: flex-end;

    justify-content: space-between;

    gap: 20px;

    margin-bottom: 25px;

    padding-bottom: 20px;

    border-bottom: 1px solid #e5ebe7;
}

.struktur-card-title span {
    display: block;

    margin-bottom: 7px;

    color: #087a4b;

    font-size: 9px;

    font-weight: 700;

    letter-spacing: 1.8px;
}

.struktur-card-title h2 {
    margin: 0;

    color: #172820;

    font-size: clamp(25px, 4vw, 36px);

    line-height: 1.15;
}

.struktur-card-title h2 em {
    color: #087a4b;

    font-style: normal;
}

.zoom-info {
    display: flex;

    align-items: center;

    gap: 8px;

    color: #7d8882;

    font-size: 10px;

    white-space: nowrap;
}

.zoom-info i {
    color: #d5a83a;
}


/* =====================================================
   IMAGE AREA
===================================================== */

.struktur-image-wrapper {
    position: relative;

    width: 100%;

    overflow: hidden;

    background: #fafcfb;

    border: 1px solid #dfe7e2;
}


/*
 * Area gambar
 */

.struktur-image-scroll {
    width: 100%;

    overflow: auto;

    scrollbar-width: thin;

    scrollbar-color:
        #087a4b
        #edf2ef;
}


/* =====================================================
   IMAGE
===================================================== */

.struktur-image {
    display: block;

    width: 100%;

    height: auto;

    min-width: 900px;

    cursor: zoom-in;

    transition:
        transform .4s ease;

    user-select: none;
}


/* =====================================================
   IMAGE FOOTER
===================================================== */

.struktur-image-footer {
    display: flex;

    align-items: center;

    justify-content: space-between;

    gap: 15px;

    padding: 15px 18px;

    background: #f5f8f6;

    border-top: 1px solid #e0e7e3;
}

.struktur-image-footer p {
    margin: 0;

    color: #737e78;

    font-size: 11px;

    line-height: 1.5;
}

.zoom-button {
    display: inline-flex;

    align-items: center;

    gap: 7px;

    flex-shrink: 0;

    padding: 9px 14px;

    border: 1px solid #d6e1db;

    background: white;

    color: #087a4b;

    font-size: 10px;

    font-weight: 600;

    cursor: pointer;

    transition: .25s ease;
}

.zoom-button:hover {
    background: #087a4b;

    color: white;

    border-color: #087a4b;
}


/* =====================================================
   DESCRIPTION
===================================================== */

.struktur-description {
    display: flex;

    gap: 14px;

    margin-top: 25px;

    padding: 18px;

    background: #f8faf9;

    border-left: 3px solid #d5a83a;
}

.struktur-description i {
    margin-top: 2px;

    color: #d5a83a;
}

.struktur-description p {
    margin: 0;

    color: #6e7973;

    font-size: 11px;

    line-height: 1.7;
}


/* =====================================================
   LIGHTBOX
===================================================== */

.struktur-lightbox {
    position: fixed;

    inset: 0;

    z-index: 9999;

    display: flex;

    align-items: center;
    justify-content: center;

    padding: 30px;

    background:
        rgba(3, 40, 29, .92);

    opacity: 0;

    visibility: hidden;

    transition:
        opacity .3s ease,
        visibility .3s ease;
}

.struktur-lightbox.active {
    opacity: 1;

    visibility: visible;
}

.lightbox-content {
    position: relative;

    width: min(1400px, 100%);

    max-height: 92vh;

    display: flex;

    justify-content: center;

    overflow: auto;

    background: white;

    box-shadow:
        0 25px 80px rgba(0, 0, 0, .35);
}

.lightbox-image {
    display: block;

    width: 100%;

    height: auto;

    object-fit: contain;
}

.lightbox-close {
    position: fixed;

    top: 20px;
    right: 25px;

    width: 42px;
    height: 42px;

    display: flex;

    align-items: center;
    justify-content: center;

    border: 1px solid rgba(255,255,255,.3);

    background: rgba(255,255,255,.1);

    color: white;

    font-size: 17px;

    cursor: pointer;

    transition: .25s ease;

    z-index: 10000;
}

.lightbox-close:hover {
    background: #d5a83a;

    border-color: #d5a83a;
}


/* =====================================================
   ANIMATION
===================================================== */

@keyframes strukturFadeUp {

    from {
        opacity: 0;

        transform:
            translateY(30px);
    }

    to {
        opacity: 1;

        transform:
            translateY(0);
    }

}


/* =====================================================
   TABLET
===================================================== */

@media (max-width: 900px) {

    .struktur-page {
        padding-top: 60px;
    }

    .struktur-image {
        min-width: 800px;
    }

}


/* =====================================================
   MOBILE
===================================================== */

@media (max-width: 600px) {

    .struktur-page {
        padding: 45px 15px 70px;
    }

    .struktur-header {
        gap: 12px;

        margin-bottom: 25px;
    }

    .struktur-number {
        width: 40px;
        height: 40px;

        font-size: 11px;
    }

    .struktur-label {
        font-size: 9px;

        letter-spacing: 1.4px;
    }

    .struktur-header h1 {
        font-size: 32px;
    }


    .struktur-card {
        padding: 22px 15px;
    }


    .struktur-card-header {
        align-items: flex-start;

        flex-direction: column;

        gap: 10px;

        margin-bottom: 20px;

        padding-bottom: 17px;
    }

    .struktur-card-title h2 {
        font-size: 25px;
    }

    .zoom-info {
        font-size: 9px;
    }


    /*
     * Pada HP gambar dibuat lebih besar
     * agar tulisan struktur tetap terbaca.
     */

    .struktur-image {
        min-width: 850px;
    }


    .struktur-image-footer {
        align-items: flex-start;

        flex-direction: column;

        padding: 13px;
    }

    .zoom-button {
        width: 100%;

        justify-content: center;
    }


    .struktur-description {
        padding: 15px;
    }

    .struktur-description p {
        font-size: 10px;
    }


    .struktur-lightbox {
        padding: 15px;
    }

    .lightbox-content {
        max-height: 85vh;

        align-items: flex-start;

        overflow: auto;
    }

    .lightbox-close {
        top: 12px;
        right: 12px;
    }

}


/* =====================================================
   SMALL MOBILE
===================================================== */

@media (max-width: 380px) {

    .struktur-page {
        padding-left: 12px;
        padding-right: 12px;
    }

    .struktur-card {
        padding: 20px 12px;
    }

    .struktur-header h1 {
        font-size: 29px;
    }

    .struktur-card-title h2 {
        font-size: 23px;
    }

    .struktur-image {
        min-width: 800px;
    }

}


/* =====================================================
   REDUCE MOTION
===================================================== */

@media (prefers-reduced-motion: reduce) {

    .struktur-header,
    .struktur-card {
        animation: none;

        opacity: 1;

        transform: none;
    }

}

</style>


<!-- =====================================================
     STRUKTUR ORGANISASI
===================================================== -->

<section class="struktur-page">

    <div class="struktur-container">


        <!-- HEADER -->
        <div class="struktur-header">

            <div class="struktur-number">
                04
            </div>

            <div>

                <span class="struktur-label">
                    PROFIL PERUSAHAAN
                </span>

                <h1>
                    Struktur Organisasi
                </h1>

            </div>

        </div>


        <!-- MAIN CARD -->
        <div class="struktur-card">


            <!-- CARD HEADER -->
            <div class="struktur-card-header">

                <div class="struktur-card-title">

                    <span>
                        STRUKTUR ORGANISASI
                    </span>

                    <h2>
                        PT. Jamkrida NTB
                        <em>Syariah</em>
                    </h2>

                </div>


                <div class="zoom-info">

                    <i class="fa-solid fa-magnifying-glass"></i>

                    Klik gambar untuk melihat lebih besar

                </div>

            </div>


            <!-- IMAGE -->
            <div class="struktur-image-wrapper">

                <div class="struktur-image-scroll">

                    <img
                        src="{{ asset('images/struktur.jpg') }}"
                        alt="Struktur Organisasi PT. Jamkrida NTB Syariah"
                        class="struktur-image"
                        id="strukturImage"
                    >

                </div>


                <!-- IMAGE FOOTER -->
                <div class="struktur-image-footer">

                    <p>
                        Struktur organisasi PT. Jamkrida NTB Syariah
                    </p>

                    <button
                        type="button"
                        class="zoom-button"
                        id="openStruktur"
                    >

                        <i class="fa-solid fa-expand"></i>

                        Perbesar Struktur

                    </button>

                </div>

            </div>


            <!-- DESCRIPTION -->
            <div class="struktur-description">

                <i class="fa-solid fa-circle-info"></i>

                <p>
                    Struktur organisasi menggambarkan susunan,
                    pembagian tugas, tanggung jawab, serta hubungan
                    koordinasi antarbagian dalam PT. Jamkrida NTB Syariah.
                    Pada perangkat dengan layar kecil, geser gambar
                    secara horizontal untuk melihat bagian struktur
                    secara lengkap.
                </p>

            </div>


        </div>

    </div>

</section>


<!-- =====================================================
     LIGHTBOX
===================================================== -->

<div
    class="struktur-lightbox"
    id="strukturLightbox"
>

    <button
        type="button"
        class="lightbox-close"
        id="closeStruktur"
        aria-label="Tutup"
    >

        <i class="fa-solid fa-xmark"></i>

    </button>


    <div class="lightbox-content">

        <img
            src="{{ asset('images/struktur.jpg') }}"
            alt="Struktur Organisasi PT. Jamkrida NTB Syariah"
            class="lightbox-image"
        >

    </div>

</div>


<!-- =====================================================
     JAVASCRIPT
===================================================== -->

<script>

document.addEventListener('DOMContentLoaded', function () {

    const openButton =
        document.getElementById('openStruktur');

    const image =
        document.getElementById('strukturImage');

    const lightbox =
        document.getElementById('strukturLightbox');

    const closeButton =
        document.getElementById('closeStruktur');


    /*
     * Buka gambar fullscreen
     */

    function openLightbox() {

        if (!lightbox) return;

        lightbox.classList.add('active');

        document.body.style.overflow = 'hidden';

    }


    /*
     * Tutup gambar fullscreen
     */

    function closeLightbox() {

        if (!lightbox) return;

        lightbox.classList.remove('active');

        document.body.style.overflow = '';

    }


    /*
     * Tombol perbesar
     */

    if (openButton) {

        openButton.addEventListener(
            'click',
            openLightbox
        );

    }


    /*
     * Klik gambar
     */

    if (image) {

        image.addEventListener(
            'click',
            openLightbox
        );

    }


    /*
     * Tombol close
     */

    if (closeButton) {

        closeButton.addEventListener(
            'click',
            closeLightbox
        );

    }


    /*
     * Klik area luar gambar
     */

    if (lightbox) {

        lightbox.addEventListener(
            'click',
            function (event) {

                if (
                    event.target === lightbox
                ) {

                    closeLightbox();

                }

            }
        );

    }


    /*
     * Tombol ESC
     */

    document.addEventListener(
        'keydown',
        function (event) {

            if (
                event.key === 'Escape' &&
                lightbox &&
                lightbox.classList.contains('active')
            ) {

                closeLightbox();

            }

        }
    );


    /*
     * Double click gambar untuk fullscreen
     */

    if (image) {

        image.addEventListener(
            'dblclick',
            function () {

                openLightbox();

            }
        );

    }

});

</script>

@endsection