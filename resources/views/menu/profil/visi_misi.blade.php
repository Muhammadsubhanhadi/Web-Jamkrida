@extends('layouts.main')

@section('title', 'Visi dan Misi')

@section('content')

<style>

/* =====================================================
   VISI & MISI
===================================================== */

.visi-misi-page {
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

.visi-misi-container {
    width: min(1050px, 100%);
    margin: auto;
}


/* =====================================================
   HEADER
===================================================== */

.vm-header {
    display: flex;
    align-items: center;
    gap: 18px;

    margin-bottom: 35px;

    opacity: 0;
    transform: translateY(25px);

    animation: vmFadeUp .8s ease forwards;
}

.vm-number {
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

.vm-label {
    display: block;

    margin-bottom: 6px;

    color: #087a4b;

    font-size: 11px;
    font-weight: 700;

    letter-spacing: 2px;
}

.vm-header h1 {
    margin: 0;

    color: #16251f;

    font-size: clamp(36px, 5vw, 55px);

    line-height: 1.05;
}


/* =====================================================
   MAIN CARD
===================================================== */

.vm-card {
    position: relative;

    padding: clamp(30px, 5vw, 55px);

    background: rgba(255, 255, 255, .96);

    border: 1px solid rgba(8, 122, 75, .10);

    box-shadow:
        0 18px 50px rgba(0, 0, 0, .07);

    overflow: hidden;

    opacity: 0;
    transform: translateY(30px);

    animation:
        vmFadeUp .9s ease .15s forwards;
}

.vm-card::before {
    content: "";

    position: absolute;

    top: 0;
    left: 0;

    width: 100%;
    height: 4px;

    background: linear-gradient(
        90deg,
        #087a4b,
        #d5a83a,
        #087a4b
    );
}


/* =====================================================
   COMPANY
===================================================== */

.vm-company {
    margin-bottom: 35px;

    color: #087a4b;

    font-size: 10px;
    font-weight: 700;

    letter-spacing: 1.8px;
}


/* =====================================================
   VISI
===================================================== */

.visi-box {
    position: relative;

    padding: 32px 35px;

    background:
        linear-gradient(
            135deg,
            #063d2a 0%,
            #087a4b 100%
        );

    color: white;

    overflow: hidden;

    margin-bottom: 45px;
}

.visi-box::after {
    content: "";

    position: absolute;

    width: 180px;
    height: 180px;

    right: -70px;
    top: -80px;

    border: 1px solid rgba(255, 255, 255, .12);

    border-radius: 50%;
}

.visi-box::before {
    content: "";

    position: absolute;

    width: 110px;
    height: 110px;

    right: 20px;
    bottom: -65px;

    border: 1px solid rgba(213, 168, 58, .25);

    border-radius: 50%;
}

.visi-title {
    display: flex;

    align-items: center;

    gap: 12px;

    margin-bottom: 18px;
}

.visi-icon {
    width: 38px;
    height: 38px;

    display: flex;

    align-items: center;
    justify-content: center;

    background: rgba(213, 168, 58, .18);

    color: #f2d47c;

    font-size: 15px;
}

.visi-title span {
    font-size: 10px;

    font-weight: 700;

    letter-spacing: 2px;
}

.visi-box h2 {
    position: relative;

    z-index: 2;

    margin: 0;

    max-width: 850px;

    font-size: clamp(22px, 3vw, 31px);

    line-height: 1.55;

    font-weight: 500;
}

.visi-box h2::before {
    content: "“";

    color: #d5a83a;

    font-size: 45px;

    line-height: 0;

    vertical-align: -15px;

    margin-right: 7px;
}

.visi-box h2::after {
    content: "”";

    color: #d5a83a;

    font-size: 45px;

    line-height: 0;

    vertical-align: -15px;

    margin-left: 7px;
}


/* =====================================================
   SECTION TITLE MISI
===================================================== */

.misi-heading {
    display: flex;

    align-items: flex-end;
    justify-content: space-between;

    gap: 20px;

    margin-bottom: 25px;

    padding-bottom: 18px;

    border-bottom: 1px solid #e5ebe7;
}

.misi-heading-left span {
    display: block;

    margin-bottom: 6px;

    color: #087a4b;

    font-size: 9px;

    font-weight: 700;

    letter-spacing: 1.8px;
}

.misi-heading-left h2 {
    margin: 0;

    color: #172820;

    font-size: 28px;
}

.misi-heading-right {
    color: #929b96;

    font-size: 10px;

    letter-spacing: 1px;
}


/* =====================================================
   MISI LIST
===================================================== */

.misi-list {
    display: grid;

    grid-template-columns: 1fr 1fr;

    gap: 15px;
}

.misi-item {
    position: relative;

    display: flex;

    gap: 17px;

    padding: 25px 22px;

    background: #f6f9f7;

    border: 1px solid #e7eee9;

    transition:
        transform .3s ease,
        box-shadow .3s ease,
        border-color .3s ease;
}

.misi-item:hover {
    transform: translateY(-4px);

    border-color: rgba(8, 122, 75, .22);

    box-shadow:
        0 12px 30px rgba(0, 0, 0, .06);
}

.misi-number {
    width: 38px;
    height: 38px;

    flex-shrink: 0;

    display: flex;

    align-items: center;
    justify-content: center;

    background: #087a4b;

    color: white;

    font-size: 13px;

    font-weight: 700;
}

.misi-item:nth-child(2) .misi-number,
.misi-item:nth-child(4) .misi-number {
    background: #d5a83a;
}

.misi-item p {
    margin: 0;

    color: #4d5954;

    font-size: 14px;

    line-height: 1.75;
}

.misi-item p strong {
    color: #087a4b;

    font-weight: 600;
}


/* =====================================================
   FOOTER STATEMENT
===================================================== */

.vm-bottom {
    display: flex;

    align-items: center;

    gap: 15px;

    margin-top: 35px;
    padding-top: 25px;

    border-top: 1px solid #e7ece9;
}

.vm-bottom-line {
    width: 45px;
    height: 2px;

    flex-shrink: 0;

    background: #d5a83a;
}

.vm-bottom p {
    margin: 0;

    color: #7a847f;

    font-size: 11px;

    line-height: 1.6;
}


/* =====================================================
   ANIMATION
===================================================== */

@keyframes vmFadeUp {

    from {
        opacity: 0;
        transform: translateY(30px);
    }

    to {
        opacity: 1;
        transform: translateY(0);
    }

}


/* =====================================================
   TABLET
===================================================== */

@media (max-width: 900px) {

    .visi-misi-page {
        padding-top: 60px;
    }

    .misi-list {
        grid-template-columns: 1fr;
    }

}


/* =====================================================
   MOBILE
===================================================== */

@media (max-width: 600px) {

    .visi-misi-page {
        padding: 45px 15px 70px;
    }

    .vm-header {
        gap: 12px;

        margin-bottom: 25px;
    }

    .vm-number {
        width: 40px;
        height: 40px;

        font-size: 11px;
    }

    .vm-label {
        font-size: 9px;

        letter-spacing: 1.4px;
    }

    .vm-header h1 {
        font-size: 33px;
    }


    .vm-card {
        padding: 25px 20px;
    }


    .vm-company {
        margin-bottom: 25px;

        font-size: 9px;
    }


    /* VISI */

    .visi-box {
        padding: 25px 20px;

        margin-bottom: 35px;
    }

    .visi-title {
        margin-bottom: 15px;
    }

    .visi-box h2 {
        font-size: 19px;

        line-height: 1.65;
    }

    .visi-box h2::before,
    .visi-box h2::after {
        font-size: 32px;
    }


    /* MISI */

    .misi-heading {
        align-items: flex-start;

        flex-direction: column;

        gap: 7px;
    }

    .misi-heading-left h2 {
        font-size: 25px;
    }

    .misi-heading-right {
        font-size: 9px;
    }


    .misi-item {
        padding: 20px 17px;

        gap: 13px;
    }

    .misi-number {
        width: 34px;
        height: 34px;

        font-size: 11px;
    }

    .misi-item p {
        font-size: 13px;

        line-height: 1.75;
    }


    .vm-bottom {
        align-items: flex-start;
    }

}


/* =====================================================
   SMALL MOBILE
===================================================== */

@media (max-width: 380px) {

    .visi-misi-page {
        padding-left: 12px;
        padding-right: 12px;
    }

    .vm-card {
        padding: 22px 16px;
    }

    .vm-header h1 {
        font-size: 29px;
    }

    .visi-box {
        padding: 22px 17px;
    }

    .visi-box h2 {
        font-size: 17px;
    }

    .misi-heading-left h2 {
        font-size: 23px;
    }

    .misi-item p {
        font-size: 12px;
    }

}


/* =====================================================
   REDUCE MOTION
===================================================== */

@media (prefers-reduced-motion: reduce) {

    .vm-header,
    .vm-card {
        animation: none;

        opacity: 1;

        transform: none;
    }

    .misi-item {
        transition: none;
    }

}

</style>


<!-- =====================================================
     VISI & MISI
===================================================== -->

<section class="visi-misi-page">

    <div class="visi-misi-container">


        <!-- HEADER -->
        <div class="vm-header">

            <div class="vm-number">
                03
            </div>

            <div>

                <span class="vm-label">
                    PROFIL PERUSAHAAN
                </span>

                <h1>
                    Visi & Misi
                </h1>

            </div>

        </div>


        <!-- MAIN CARD -->
        <div class="vm-card">


            <!-- COMPANY -->
            <div class="vm-company">

                PT. JAMKRIDA NTB SYARIAH (PERSERODA)

            </div>


            <!-- =========================
                 VISI
            ========================== -->

            <div class="visi-box">

                <div class="visi-title">

                    <div class="visi-icon">
                        <i class="fa-solid fa-eye"></i>
                    </div>

                    <span>
                        VISI PERUSAHAAN
                    </span>

                </div>


                <h2>
                    Terwujudnya perusahaan penjaminan syariah
                    yang sehat, berdaya saing dan mampu mendorong
                    pertumbuhan ekonomi daerah
                </h2>

            </div>


            <!-- =========================
                 MISI
            ========================== -->

            <div class="misi-heading">

                <div class="misi-heading-left">

                    <span>
                        ARAH STRATEGIS
                    </span>

                    <h2>
                        Misi Perusahaan
                    </h2>

                </div>

                <div class="misi-heading-right">
                    4 MISI UTAMA
                </div>

            </div>


            <div class="misi-list">


                <!-- MISI 01 -->
                <div class="misi-item">

                    <div class="misi-number">
                        01
                    </div>

                    <p>
                        Mengembangkan bisnis perusahaan sehingga mampu
                        menguasai sebagian besar pasar bisnis penjaminan
                        pembiayaan dan terutama bisnis penjaminan
                        pembiayaan usaha produktif
                        (pembiayaan mikro, kecil, menengah dan koperasi)
                        dan pembiayaan non-produktif lain
                        (seperti KSG dan KPR) yang berada pada berbagai
                        bank terutama bank milik pemerintah provinsi,
                        pemerintah kabupaten dan pemerintah kota.
                    </p>

                </div>


                <!-- MISI 02 -->
                <div class="misi-item">

                    <div class="misi-number">
                        02
                    </div>

                    <p>
                        Mengembangkan bisnis penjaminan untuk proyek
                        pengadaan barang dan jasa yang dibiayai APBN,
                        APBD I dan APBD II se-NTB dan di Indonesia Timur.
                    </p>

                </div>


                <!-- MISI 03 -->
                <div class="misi-item">

                    <div class="misi-number">
                        03
                    </div>

                    <p>
                        Mewujudkan BUMD yang mampu memberikan kontribusi
                        positif pada peningkatan ekonomi di NTB maupun
                        pada masing-masing kabupaten/kota.
                    </p>

                </div>


                <!-- MISI 04 -->
                <div class="misi-item">

                    <div class="misi-number">
                        04
                    </div>

                    <p>
                        Memberikan proteksi terhadap kemungkinan terjadinya
                        pembiayaan macet pada pembiayaan mikro, kecil
                        dan koperasi.
                    </p>

                </div>


            </div>


            <!-- BOTTOM -->
            <div class="vm-bottom">

                <div class="vm-bottom-line"></div>

                <p>
                    Visi dan misi menjadi landasan PT. Jamkrida NTB Syariah
                    dalam menjalankan kegiatan usaha serta memberikan
                    kontribusi terhadap pertumbuhan ekonomi daerah.
                </p>

            </div>


        </div>

    </div>

</section>


<!-- =====================================================
     JAVASCRIPT
===================================================== -->

<script>

document.addEventListener('DOMContentLoaded', function () {

    const items = document.querySelectorAll('.misi-item');

    /*
     * Animasi sederhana ketika
     * elemen masuk ke layar.
     */

    const observer = new IntersectionObserver(
        function (entries) {

            entries.forEach(function (entry) {

                if (entry.isIntersecting) {

                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';

                    observer.unobserve(entry.target);

                }

            });

        },
        {
            threshold: 0.12
        }
    );


    items.forEach(function (item, index) {

        item.style.opacity = '0';
        item.style.transform = 'translateY(20px)';

        item.style.transition =
            `opacity .6s ease ${index * 0.12}s,
             transform .6s ease ${index * 0.12}s,
             box-shadow .3s ease,
             border-color .3s ease`;

        observer.observe(item);

    });


    /*
     * Efek tilt ringan pada card utama
     * hanya untuk desktop.
     */

    const card = document.querySelector('.vm-card');

    if (card) {

        card.addEventListener('mousemove', function (e) {

            if (window.innerWidth <= 900) return;

            const rect = card.getBoundingClientRect();

            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;

            const centerX = rect.width / 2;
            const centerY = rect.height / 2;

            const rotateX =
                ((y - centerY) / centerY) * -0.2;

            const rotateY =
                ((x - centerX) / centerX) * 0.2;

            card.style.transform =
                `perspective(1200px)
                 rotateX(${rotateX}deg)
                 rotateY(${rotateY}deg)`;
        });


        card.addEventListener('mouseleave', function () {

            card.style.transform =
                'perspective(1200px) rotateX(0deg) rotateY(0deg)';

        });

    }

});

</script>

@endsection