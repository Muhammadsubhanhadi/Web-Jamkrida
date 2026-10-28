@extends('layouts.main')

@section('title', 'Latar Belakang')

@section('content')

<style>
/* =====================================================
   LATAR BELAKANG - PT. JAMKRIDA NTB SYARIAH
===================================================== */

.latar-page {
    position: relative;
    padding: 80px 20px 100px;
    background:
        radial-gradient(circle at 10% 10%, rgba(8, 122, 75, .06), transparent 30%),
        radial-gradient(circle at 90% 80%, rgba(213, 168, 58, .07), transparent 30%),
        #f7faf8;
    overflow: hidden;
}

.latar-container {
    width: min(1050px, 100%);
    margin: auto;
}


/* =====================================================
   HEADER
===================================================== */

.latar-header {
    display: flex;
    align-items: center;
    gap: 18px;
    margin-bottom: 35px;

    opacity: 0;
    transform: translateY(25px);
    animation: latarFadeUp .8s ease forwards;
}

.latar-number {
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

.latar-label {
    display: block;
    margin-bottom: 6px;

    color: #087a4b;

    font-size: 11px;
    font-weight: 700;

    letter-spacing: 2px;
}

.latar-header h1 {
    margin: 0;

    color: #16251f;

    font-size: clamp(36px, 5vw, 55px);
    line-height: 1.05;
    font-weight: 700;
}


/* =====================================================
   MAIN CARD
===================================================== */

.latar-card {
    position: relative;

    padding: clamp(30px, 5vw, 55px);

    background: rgba(255, 255, 255, .95);

    border: 1px solid rgba(8, 122, 75, .10);

    box-shadow:
        0 18px 50px rgba(0, 0, 0, .07);

    overflow: hidden;

    opacity: 0;
    transform: translateY(30px);

    animation:
        latarFadeUp .9s ease .15s forwards;
}

.latar-card::before {
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
   TOP AREA
===================================================== */

.latar-top {
    display: grid;

    grid-template-columns: 170px 1fr;

    gap: 45px;

    align-items: center;

    padding-bottom: 38px;

    border-bottom: 1px solid #e8eee9;
}

.latar-year {
    min-height: 135px;

    display: flex;
    flex-direction: column;
    justify-content: center;

    padding-left: 22px;

    border-left: 3px solid #d5a83a;
}

.latar-year span {
    color: #087a4b;

    font-size: 10px;
    font-weight: 700;

    letter-spacing: 2px;
}

.latar-year strong {
    margin: 5px 0;

    color: #17352a;

    font-size: 50px;
    line-height: 1;

    font-weight: 700;
}

.latar-year small {
    color: #777;

    font-size: 9px;

    letter-spacing: 1.8px;
}


.latar-intro > span {
    color: #087a4b;

    font-size: 10px;
    font-weight: 700;

    letter-spacing: 1.5px;
}

.latar-intro h2 {
    margin: 12px 0 0;

    color: #172820;

    font-size: clamp(28px, 4vw, 43px);

    line-height: 1.15;
}

.latar-intro h2 em {
    color: #087a4b;

    font-style: normal;
}


/* =====================================================
   TEXT
===================================================== */

.latar-text {
    max-width: 900px;

    padding: 38px 0 20px;
}

.latar-text p {
    margin: 0 0 19px;

    color: #4d5954;

    font-size: 15px;

    line-height: 1.9;

    text-align: justify;
}

.latar-text p:last-child {
    margin-bottom: 0;
}

.latar-text strong {
    color: #087a4b;

    font-weight: 600;
}


/* =====================================================
   LEGAL INFO
===================================================== */

.legal-wrapper {
    display: grid;

    grid-template-columns: repeat(3, 1fr);

    margin-top: 28px;

    border-top: 1px solid #e8eee9;
    border-bottom: 1px solid #e8eee9;
}

.legal-item {
    display: flex;

    align-items: center;

    gap: 14px;

    padding: 23px 18px;

    border-right: 1px solid #e8eee9;
}

.legal-item:last-child {
    border-right: none;
}

.legal-icon {
    width: 40px;
    height: 40px;

    flex-shrink: 0;

    display: flex;
    align-items: center;
    justify-content: center;

    background: rgba(8, 122, 75, .08);

    color: #087a4b;

    font-size: 15px;
}

.legal-item span {
    display: block;

    margin-bottom: 5px;

    color: #8a938e;

    font-size: 8px;

    font-weight: 700;

    letter-spacing: 1px;
}

.legal-item strong {
    display: block;

    color: #26362f;

    font-size: 12px;

    line-height: 1.4;
}


/* =====================================================
   DOCUMENT
===================================================== */

.document-box {
    display: flex;

    align-items: center;

    justify-content: space-between;

    gap: 20px;

    margin-top: 24px;

    padding: 18px 20px;

    background: #f4f8f5;

    border-left: 3px solid #087a4b;
}

.document-info {
    display: flex;

    align-items: center;

    gap: 14px;
}

.document-icon {
    width: 43px;
    height: 43px;

    flex-shrink: 0;

    display: flex;
    align-items: center;
    justify-content: center;

    background: #087a4b;

    color: white;

    font-size: 17px;
}

.document-info span {
    display: block;

    margin-bottom: 4px;

    color: #8a938e;

    font-size: 8px;

    font-weight: 700;

    letter-spacing: 1px;
}

.document-info strong {
    color: #26362f;

    font-size: 13px;
}


/* =====================================================
   BUTTON
===================================================== */

.download-btn {
    display: inline-flex;

    align-items: center;

    justify-content: center;

    gap: 8px;

    padding: 10px 17px;

    background: #087a4b;

    color: white;

    text-decoration: none;

    font-size: 11px;

    font-weight: 600;

    transition: all .3s ease;
}

.download-btn:hover {
    background: #063d2a;

    transform: translateY(-2px);

    box-shadow:
        0 8px 18px rgba(8, 122, 75, .18);
}


/* =====================================================
   ANIMATION
===================================================== */

@keyframes latarFadeUp {

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
   RESPONSIVE TABLET
===================================================== */

@media (max-width: 900px) {

    .latar-page {
        padding-top: 60px;
    }

    .latar-top {
        grid-template-columns: 140px 1fr;

        gap: 30px;
    }

    .latar-year strong {
        font-size: 42px;
    }

    .legal-wrapper {
        grid-template-columns: 1fr;
    }

    .legal-item {
        border-right: none;

        border-bottom: 1px solid #e8eee9;
    }

    .legal-item:last-child {
        border-bottom: none;
    }

}


/* =====================================================
   RESPONSIVE MOBILE
===================================================== */

@media (max-width: 600px) {

    .latar-page {
        padding: 45px 15px 70px;
    }

    .latar-header {
        gap: 12px;

        margin-bottom: 25px;
    }

    .latar-number {
        width: 40px;
        height: 40px;

        font-size: 11px;
    }

    .latar-label {
        font-size: 9px;

        letter-spacing: 1.4px;
    }

    .latar-header h1 {
        font-size: 33px;
    }

    .latar-card {
        padding: 27px 20px;
    }


    /* TOP */

    .latar-top {
        grid-template-columns: 1fr;

        gap: 25px;

        padding-bottom: 30px;
    }

    .latar-year {
        min-height: auto;

        padding-left: 15px;
    }

    .latar-year strong {
        font-size: 40px;
    }

    .latar-intro h2 {
        font-size: 28px;
    }


    /* TEXT */

    .latar-text {
        padding-top: 30px;
    }

    .latar-text p {
        font-size: 14px;

        line-height: 1.8;

        text-align: left;
    }


    /* LEGAL */

    .legal-item {
        padding: 18px 10px;
    }

    .legal-item strong {
        font-size: 11px;
    }


    /* DOCUMENT */

    .document-box {
        align-items: flex-start;

        flex-direction: column;
    }

    .download-btn {
        width: 100%;
    }

}


/* =====================================================
   SMALL MOBILE
===================================================== */

@media (max-width: 380px) {

    .latar-page {
        padding-left: 12px;
        padding-right: 12px;
    }

    .latar-card {
        padding: 22px 16px;
    }

    .latar-header h1 {
        font-size: 30px;
    }

    .latar-intro h2 {
        font-size: 25px;
    }

    .latar-text p {
        font-size: 13px;
    }

}


/* =====================================================
   REDUCE MOTION
===================================================== */

@media (prefers-reduced-motion: reduce) {

    .latar-header,
    .latar-card {
        animation: none;

        opacity: 1;

        transform: none;
    }

}
</style>


<!-- =====================================================
     LATAR BELAKANG
===================================================== -->

<section class="latar-page">

    <div class="latar-container">


        <!-- HEADER -->
        <div class="latar-header">

            <div class="latar-number">
                01
            </div>

            <div>

                <span class="latar-label">
                    PROFIL PERUSAHAAN
                </span>

                <h1>
                    Latar Belakang
                </h1>

            </div>

        </div>


        <!-- MAIN CONTENT -->
        <div class="latar-card">


            <!-- TOP -->
            <div class="latar-top">


                <!-- YEAR -->
                <div class="latar-year">

                    <span>
                        EST.
                    </span>

                    <strong>
                        2012
                    </strong>

                    <small>
                        NTB SYARIAH
                    </small>

                </div>


                <!-- INTRO -->
                <div class="latar-intro">

                    <span>
                        PT. JAMKRIDA NTB SYARIAH (PERSERODA)
                    </span>

                    <h2>
                        Tumbuh Bersama
                        <br>
                        <em>Ekonomi NTB</em>
                    </h2>

                </div>


            </div>


            <!-- TEXT -->
            <div class="latar-text">

                <p>
                    PT. Jamkrida NTB Syariah merupakan Badan Usaha Milik
                    Daerah (BUMD) yang bergerak dalam bidang usaha Pembiayaan
                    Syariah, didirikan berdasarkan Peraturan Daerah Provinsi
                    Nusa Tenggara Barat Nomor 2 Tahun 2012 tentang
                    <strong>“Pembentukan Lembaga Penjaminan Kredit Daerah”</strong>
                    pada tanggal 15 Oktober 2012.
                </p>


                <p>
                    Pendirian perusahaan dituangkan dalam Akta Notaris
                    Abdullah, SH di Mataram Nomor 24 tanggal 15 Oktober 2012
                    yang telah mendapatkan pengesahan oleh Departemen Hukum
                    dan Hak Asasi Manusia Republik Indonesia Nomor
                    AHU-12807.AH.01.02 Tahun 2012 tanggal 01 November 2012.
                </p>


                <p>
                    PT. Jamkrida NTB Syariah didirikan dengan maksud untuk
                    melakukan Pembiayaan bagi Koperasi dan Usaha Mikro,
                    Kecil dan Menengah (UMKM) guna mempercepat pertumbuhan
                    perekonomian di daerah Nusa Tenggara Barat pada khususnya
                    dan di Indonesia pada umumnya.
                </p>


                <p>
                    Dalam menjalankan kegiatan usahanya, PT. Jamkrida NTB
                    Syariah telah memperoleh izin operasional dari Menteri
                    Keuangan Republik Indonesia Nomor
                    <strong>KEP-652/KM.10/2012</strong>
                    tanggal 06 Desember 2012.
                </p>

            </div>


            <!-- LEGAL INFORMATION -->
            <div class="legal-wrapper">


                <div class="legal-item">

                    <div class="legal-icon">
                        <i class="fa-solid fa-building-columns"></i>
                    </div>

                    <div>

                        <span>
                            PERATURAN DAERAH
                        </span>

                        <strong>
                            Nomor 2 Tahun 2012
                        </strong>

                    </div>

                </div>


                <div class="legal-item">

                    <div class="legal-icon">
                        <i class="fa-solid fa-file-signature"></i>
                    </div>

                    <div>

                        <span>
                            AKTA NOTARIS
                        </span>

                        <strong>
                            Nomor 24 — 15 Oktober 2012
                        </strong>

                    </div>

                </div>


                <div class="legal-item">

                    <div class="legal-icon">
                        <i class="fa-solid fa-certificate"></i>
                    </div>

                    <div>

                        <span>
                            IZIN OPERASIONAL
                        </span>

                        <strong>
                            KEP-652/KM.10/2012
                        </strong>

                    </div>

                </div>


            </div>


            <!-- DOCUMENT -->
            <div class="document-box">

                <div class="document-info">

                    <div class="document-icon">
                        <i class="fa-solid fa-file-pdf"></i>
                    </div>

                    <div>

                        <span>
                            DOKUMEN PERUSAHAAN
                        </span>

                        <strong>
                            Lampiran Berkas Izin Usaha
                        </strong>

                    </div>

                </div>


                <a href="#" class="download-btn">

                    <i class="fa-solid fa-download"></i>

                    Download

                </a>

            </div>


        </div>

    </div>

</section>


<!-- =====================================================
     JAVASCRIPT
===================================================== -->

<script>

document.addEventListener('DOMContentLoaded', function () {

    const card = document.querySelector('.latar-card');

    if (!card) return;


    /*
     * Efek sedikit bergerak ketika mouse
     * berada di atas card pada desktop.
     */

    card.addEventListener('mousemove', function (e) {

        if (window.innerWidth <= 900) return;

        const rect = card.getBoundingClientRect();

        const x = e.clientX - rect.left;
        const y = e.clientY - rect.top;

        const centerX = rect.width / 2;
        const centerY = rect.height / 2;

        const rotateX = ((y - centerY) / centerY) * -0.4;
        const rotateY = ((x - centerX) / centerX) * 0.4;

        card.style.transform =
            `perspective(1200px)
             rotateX(${rotateX}deg)
             rotateY(${rotateY}deg)`;
    });


    card.addEventListener('mouseleave', function () {

        card.style.transform =
            'perspective(1200px) rotateX(0deg) rotateY(0deg)';

    });

});

</script>

@endsection