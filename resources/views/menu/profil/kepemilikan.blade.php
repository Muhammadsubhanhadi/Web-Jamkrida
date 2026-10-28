@extends('layouts.main')

@section('title', 'Kepemilikan')

@section('content')

<style>

/* =====================================================
   KEPEMILIKAN
===================================================== */

.kepemilikan-page {
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

.kepemilikan-container {
    width: min(1050px, 100%);
    margin: auto;
}


/* =====================================================
   HEADER
===================================================== */

.kepemilikan-header {
    display: flex;
    align-items: center;
    gap: 18px;

    margin-bottom: 35px;

    opacity: 0;
    transform: translateY(25px);

    animation: kepFadeUp .8s ease forwards;
}

.kepemilikan-number {
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

.kepemilikan-label {
    display: block;

    margin-bottom: 6px;

    color: #087a4b;

    font-size: 11px;
    font-weight: 700;

    letter-spacing: 2px;
}

.kepemilikan-header h1 {
    margin: 0;

    color: #16251f;

    font-size: clamp(36px, 5vw, 55px);

    line-height: 1.05;
}


/* =====================================================
   MAIN CARD
===================================================== */

.kepemilikan-card {
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
        kepFadeUp .9s ease .15s forwards;
}

.kepemilikan-card::before {
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
   TITLE
===================================================== */

.kepemilikan-title {
    padding-bottom: 25px;

    border-bottom: 1px solid #e7ece9;
}

.kepemilikan-title span {
    color: #087a4b;

    font-size: 10px;
    font-weight: 700;

    letter-spacing: 1.8px;
}

.kepemilikan-title h2 {
    margin: 10px 0 0;

    color: #16251f;

    font-size: clamp(28px, 4vw, 42px);

    line-height: 1.15;
}

.kepemilikan-title h2 em {
    color: #087a4b;

    font-style: normal;
}


/* =====================================================
   INTRODUCTION
===================================================== */

.kepemilikan-intro {
    padding: 30px 0 20px;
}

.kepemilikan-intro p {
    margin: 0 0 18px;

    color: #4e5954;

    font-size: 15px;

    line-height: 1.9;

    text-align: justify;
}

.kepemilikan-intro strong {
    color: #087a4b;

    font-weight: 600;
}


/* =====================================================
   MODAL HIGHLIGHT
===================================================== */

.modal-highlight {
    display: grid;

    grid-template-columns: 1fr 1fr;

    gap: 18px;

    margin: 10px 0 35px;
}

.modal-box {
    position: relative;

    padding: 25px;

    background: #f5f8f6;

    border-left: 3px solid #087a4b;
}

.modal-box.gold {
    border-left-color: #d5a83a;

    background: #fcfaf3;
}

.modal-box span {
    display: block;

    margin-bottom: 8px;

    color: #7d8882;

    font-size: 9px;
    font-weight: 700;

    letter-spacing: 1.4px;
}

.modal-box strong {
    display: block;

    color: #17352a;

    font-size: clamp(22px, 3vw, 30px);
}

.modal-box small {
    display: block;

    margin-top: 5px;

    color: #8a938e;

    font-size: 11px;
}


/* =====================================================
   SECTION TABLE
===================================================== */

.table-heading {
    display: flex;

    align-items: center;
    justify-content: space-between;

    gap: 20px;

    margin-bottom: 15px;
}

.table-heading h3 {
    margin: 0;

    color: #26362f;

    font-size: 18px;
}

.table-heading span {
    color: #087a4b;

    font-size: 11px;

    font-weight: 600;
}


/* =====================================================
   TABLE
===================================================== */

.kep-table-wrapper {
    width: 100%;

    overflow-x: auto;

    border: 1px solid #dfe6e2;
}

.kep-table {
    width: 100%;

    border-collapse: collapse;

    min-width: 650px;
}

.kep-table th {
    padding: 15px 14px;

    background: #087a4b;

    color: white;

    font-size: 12px;

    font-weight: 600;

    text-align: left;
}

.kep-table th:first-child {
    width: 65px;

    text-align: center;
}

.kep-table th:last-child {
    width: 220px;
}

.kep-table td {
    padding: 15px 14px;

    color: #3f4c46;

    font-size: 13px;

    border-bottom: 1px solid #e1e7e3;

    background: white;
}

.kep-table tbody tr {
    transition: .25s ease;
}

.kep-table tbody tr:hover td {
    background: #f7fbf8;
}

.kep-table td:first-child {
    color: #087a4b;

    font-weight: 600;

    text-align: center;
}

.kep-table td:last-child {
    font-weight: 600;

    color: #26362f;
}

.kep-table tfoot td {
    padding: 17px 14px;

    background: #f1f6f3;

    color: #17352a;

    font-weight: 700;

    border-top: 2px solid #087a4b;

    border-bottom: none;
}

.kep-table tfoot td:last-child {
    color: #087a4b;
}


/* =====================================================
   OWNERSHIP VISUAL
===================================================== */

.ownership-section {
    margin-top: 35px;

    padding-top: 30px;

    border-top: 1px solid #e7ece9;
}

.ownership-section h3 {
    margin: 0 0 7px;

    color: #26362f;

    font-size: 18px;
}

.ownership-section > p {
    margin: 0 0 22px;

    color: #7a847f;

    font-size: 12px;
}


/* =====================================================
   BAR
===================================================== */

.ownership-bar {
    display: flex;

    width: 100%;
    height: 18px;

    overflow: hidden;

    background: #edf1ef;
}

.owner-provinsi {
    width: 90%;

    background: #087a4b;

    transition: width 1.3s ease;
}

.owner-daerah {
    width: 10%;

    background: #d5a83a;

    transition: width 1.3s ease;
}


/* =====================================================
   LEGEND
===================================================== */

.ownership-legend {
    display: flex;

    flex-wrap: wrap;

    gap: 25px;

    margin-top: 15px;
}

.legend-item {
    display: flex;

    align-items: center;

    gap: 8px;

    color: #59655f;

    font-size: 11px;
}

.legend-dot {
    width: 10px;
    height: 10px;
}

.legend-green {
    background: #087a4b;
}

.legend-gold {
    background: #d5a83a;
}


/* =====================================================
   FOOT NOTE
===================================================== */

.kep-note {
    display: flex;

    gap: 12px;

    margin-top: 28px;
    padding: 17px;

    background: #f8faf9;

    border-left: 3px solid #d5a83a;
}

.kep-note i {
    color: #d5a83a;

    margin-top: 2px;
}

.kep-note p {
    margin: 0;

    color: #707b75;

    font-size: 11px;

    line-height: 1.7;
}


/* =====================================================
   ANIMATION
===================================================== */

@keyframes kepFadeUp {

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

    .kepemilikan-page {
        padding-top: 60px;
    }

    .modal-highlight {
        grid-template-columns: 1fr;
    }

}


/* =====================================================
   MOBILE
===================================================== */

@media (max-width: 600px) {

    .kepemilikan-page {
        padding: 45px 15px 70px;
    }

    .kepemilikan-header {
        gap: 12px;

        margin-bottom: 25px;
    }

    .kepemilikan-number {
        width: 40px;
        height: 40px;

        font-size: 11px;
    }

    .kepemilikan-label {
        font-size: 9px;

        letter-spacing: 1.4px;
    }

    .kepemilikan-header h1 {
        font-size: 33px;
    }


    .kepemilikan-card {
        padding: 27px 20px;
    }


    .kepemilikan-title h2 {
        font-size: 27px;
    }


    .kepemilikan-intro {
        padding-top: 27px;
    }

    .kepemilikan-intro p {
        font-size: 14px;

        line-height: 1.8;

        text-align: left;
    }


    .modal-box {
        padding: 20px;
    }

    .modal-box strong {
        font-size: 23px;
    }


    .table-heading {
        align-items: flex-start;

        flex-direction: column;

        gap: 5px;
    }


    .kep-table th,
    .kep-table td {
        padding: 13px 11px;

        font-size: 12px;
    }


    .ownership-section {
        margin-top: 28px;
    }


    .ownership-legend {
        gap: 15px;
    }

}


/* =====================================================
   SMALL MOBILE
===================================================== */

@media (max-width: 380px) {

    .kepemilikan-page {
        padding-left: 12px;
        padding-right: 12px;
    }

    .kepemilikan-card {
        padding: 22px 16px;
    }

    .kepemilikan-header h1 {
        font-size: 29px;
    }

    .kepemilikan-title h2 {
        font-size: 24px;
    }

    .kepemilikan-intro p {
        font-size: 13px;
    }

}


/* =====================================================
   REDUCE MOTION
===================================================== */

@media (prefers-reduced-motion: reduce) {

    .kepemilikan-header,
    .kepemilikan-card {
        animation: none;

        opacity: 1;

        transform: none;
    }

}

</style>


<!-- =====================================================
     KEPEMILIKAN
===================================================== -->

<section class="kepemilikan-page">

    <div class="kepemilikan-container">


        <!-- HEADER -->
        <div class="kepemilikan-header">

            <div class="kepemilikan-number">
                02
            </div>

            <div>

                <span class="kepemilikan-label">
                    PROFIL PERUSAHAAN
                </span>

                <h1>
                    Kepemilikan
                </h1>

            </div>

        </div>


        <!-- MAIN CARD -->
        <div class="kepemilikan-card">


            <!-- TITLE -->
            <div class="kepemilikan-title">

                <span>
                    STRUKTUR PERMODALAN
                </span>

                <h2>
                    Permodalan
                    <br>
                    <em>PT. Jamkrida NTB Syariah</em>
                </h2>

            </div>


            <!-- INTRO -->
            <div class="kepemilikan-intro">

                <p>
                    Sesuai Akta Pendirian Nomor 24 tanggal 15 Oktober 2012,
                    Modal Dasar Perseroan ditetapkan sebesar
                    <strong>Rp75.000.000.000,-</strong>
                    (Tujuh Puluh Lima Miliar Rupiah) yang terdiri dari
                    75.000 lembar saham dengan nilai masing-masing lembar
                    saham sebesar Rp1.000.000,- (Satu Juta Rupiah).
                </p>

                <p>
                    Dari modal dasar Perseroan tersebut sampai dengan
                    <strong>30 November 2025</strong> telah disetor oleh
                    Pemegang Saham sebesar
                    <strong>Rp50.136.200.000,-</strong>
                    (Lima Puluh Miliar Seratus Tiga Puluh Enam Juta Dua Ratus
                    Ribu Rupiah) dengan rincian sebagai berikut:
                </p>

            </div>


            <!-- MODAL HIGHLIGHT -->
            <div class="modal-highlight">

                <div class="modal-box">

                    <span>
                        MODAL DASAR
                    </span>

                    <strong>
                        Rp75 Miliar
                    </strong>

                    <small>
                        75.000 lembar saham
                    </small>

                </div>


                <div class="modal-box gold">

                    <span>
                        MODAL DISETOR
                    </span>

                    <strong>
                        Rp50,1362 Miliar
                    </strong>

                    <small>
                        Sampai dengan 30 November 2025
                    </small>

                </div>

            </div>


            <!-- TABLE HEADING -->
            <div class="table-heading">

                <h3>
                    Komposisi Kepemilikan Modal
                </h3>

                <span>
                    PEMEGANG SAHAM
                </span>

            </div>


            <!-- TABLE -->
            <div class="kep-table-wrapper">

                <table class="kep-table">

                    <thead>

                        <tr>

                            <th>
                                No
                            </th>

                            <th>
                                Kepemilikan
                            </th>

                            <th>
                                Jumlah (Rp)
                            </th>

                        </tr>

                    </thead>


                    <tbody>

                        <tr>
                            <td>1</td>
                            <td>Pemerintah Provinsi NTB</td>
                            <td>44.336.200.000,-</td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>Pemerintah Kota Mataram</td>
                            <td>1.000.000.000,-</td>
                        </tr>

                        <tr>
                            <td>3</td>
                            <td>Pemerintah Lombok Barat</td>
                            <td>1.000.000.000,-</td>
                        </tr>

                        <tr>
                            <td>4</td>
                            <td>Pemerintah Lombok Tengah</td>
                            <td>1.000.000.000,-</td>
                        </tr>

                        <tr>
                            <td>5</td>
                            <td>Pemerintah Kabupaten Bima</td>
                            <td>1.800.000.000,-</td>
                        </tr>

                        <tr>
                            <td>6</td>
                            <td>Pemerintah Kota Bima</td>
                            <td>1.000.000.000,-</td>
                        </tr>

                    </tbody>


                    <tfoot>

                        <tr>

                            <td colspan="2">
                                Total Keseluruhan
                            </td>

                            <td>
                                50.136.200.000,-
                            </td>

                        </tr>

                    </tfoot>

                </table>

            </div>


            <!-- OWNERSHIP VISUAL -->
            <div class="ownership-section">

                <h3>
                    Gambaran Kepemilikan
                </h3>

                <p>
                    Komposisi modal berdasarkan jumlah penyertaan masing-masing
                    pemegang saham.
                </p>


                <div class="ownership-bar">

                    <div
                        class="owner-provinsi"
                        title="Pemerintah Provinsi NTB"
                    ></div>

                    <div
                        class="owner-daerah"
                        title="Pemerintah Kabupaten/Kota"
                    ></div>

                </div>


                <div class="ownership-legend">

                    <div class="legend-item">

                        <span class="legend-dot legend-green"></span>

                        Pemerintah Provinsi NTB

                    </div>


                    <div class="legend-item">

                        <span class="legend-dot legend-gold"></span>

                        Pemerintah Kabupaten/Kota

                    </div>

                </div>

            </div>


            <!-- NOTE -->
            <div class="kep-note">

                <i class="fa-solid fa-circle-info"></i>

                <p>
                    Data permodalan dan kepemilikan ditampilkan berdasarkan
                    informasi yang tercantum pada dokumen perusahaan.
                    Nilai kepemilikan dapat diperbarui sesuai dengan data
                    perusahaan terbaru.
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

    const card = document.querySelector('.kepemilikan-card');

    const bar = document.querySelector('.ownership-bar');

    if (!card) return;


    /*
     * Efek tilt ringan pada desktop.
     */

    card.addEventListener('mousemove', function (e) {

        if (window.innerWidth <= 900) return;

        const rect = card.getBoundingClientRect();

        const x = e.clientX - rect.left;
        const y = e.clientY - rect.top;

        const centerX = rect.width / 2;
        const centerY = rect.height / 2;

        const rotateX =
            ((y - centerY) / centerY) * -0.25;

        const rotateY =
            ((x - centerX) / centerX) * 0.25;

        card.style.transform =
            `perspective(1200px)
             rotateX(${rotateX}deg)
             rotateY(${rotateY}deg)`;
    });


    card.addEventListener('mouseleave', function () {

        card.style.transform =
            'perspective(1200px) rotateX(0deg) rotateY(0deg)';

    });


    /*
     * Animasi bar ketika masuk viewport.
     */

    if (bar) {

        const observer = new IntersectionObserver(
            function (entries) {

                entries.forEach(function (entry) {

                    if (entry.isIntersecting) {

                        const green =
                            document.querySelector('.owner-provinsi');

                        const gold =
                            document.querySelector('.owner-daerah');

                        if (green) {
                            green.style.width = '90%';
                        }

                        if (gold) {
                            gold.style.width = '10%';
                        }

                        observer.unobserve(entry.target);
                    }

                });

            },
            {
                threshold: 0.3
            }
        );

        observer.observe(bar);
    }

});

</script>

@endsection