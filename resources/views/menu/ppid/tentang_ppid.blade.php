
@extends('layouts.main')

@section('title', 'Tentang PPID')

@section('content')

<style>
/* =========================================================
   TENTANG PPID — CORPORATE PREMIUM
========================================================= */
.ppid-page {
    --green: #087a4b;
    --green-dark: #064a32;
    --green-deep: #03281d;
    --gold: #d5a83a;
    --gold-light: #f2d47c;
    --text: #24362e;
    min-height: 100vh;
    padding: 45px 0 100px;
    background:
        radial-gradient(circle at 5% 8%, rgba(8,122,75,.07), transparent 27%),
        radial-gradient(circle at 95% 20%, rgba(213,168,58,.07), transparent 25%),
        #f5f8f6;
    color: var(--text);
}

.ppid-page *,
.ppid-page *::before,
.ppid-page *::after {
    box-sizing: border-box;
}

.ppid-container {
    width: min(1250px, 85%);
    margin: auto;
}

/* HERO */
.ppid-hero {
    position: relative;
    min-height: 260px;
    padding: 48px;
    overflow: hidden;
    background: linear-gradient(115deg, #03281d, #063d2a 52%, #087a4b);
    border-radius: 18px;
    box-shadow: 0 20px 45px rgba(0,61,43,.16);
}

.ppid-hero::before,
.ppid-hero::after {
    content: "";
    position: absolute;
    border: 1px solid rgba(242,212,124,.23);
    border-radius: 50%;
    pointer-events: none;
}

.ppid-hero::before {
    width: 390px;
    height: 390px;
    right: -150px;
    top: -220px;
}

.ppid-hero::after {
    width: 250px;
    height: 250px;
    right: 90px;
    bottom: -190px;
    border-color: rgba(255,255,255,.09);
}

.ppid-hero-content {
    position: relative;
    z-index: 2;
    max-width: 760px;
}

.ppid-label {
    display: flex;
    align-items: center;
    gap: 10px;
    margin-bottom: 17px;
    color: var(--gold-light);
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 1.6px;
    text-transform: uppercase;
}

.ppid-label::before {
    content: "";
    width: 27px;
    height: 2px;
    flex-shrink: 0;
    background: var(--gold);
}

.ppid-hero h1 {
    margin: 0;
    color: #fff;
    font-size: clamp(32px, 4vw, 46px);
    line-height: 1.15;
    font-weight: 700;
}

.ppid-hero h1 span {
    color: var(--gold-light);
}

.ppid-hero p {
    max-width: 700px;
    margin: 16px 0 0;
    color: rgba(255,255,255,.80);
    font-size: 13px;
    line-height: 1.8;
}

.ppid-hero-icon {
    position: absolute;
    z-index: 2;
    right: 62px;
    top: 50%;
    transform: translateY(-50%);
    width: 95px;
    height: 95px;
    display: grid;
    place-items: center;
    color: var(--gold-light);
    background: rgba(255,255,255,.055);
    border: 1px solid rgba(242,212,124,.35);
    font-size: 38px;
}

.ppid-hero-icon::after {
    content: "";
    position: absolute;
    inset: 8px;
    border: 1px solid rgba(255,255,255,.10);
}

/* MAIN LAYOUT */
.ppid-main {
    display: grid;
    grid-template-columns: minmax(0, 1fr) 285px;
    gap: 28px;
    margin-top: 34px;
    align-items: start;
}

.ppid-content {
    display: flex;
    flex-direction: column;
    gap: 22px;
    min-width: 0;
}

/* CONTENT CARDS */
.ppid-card {
    min-width: 0;
    background: #fff;
    border: 1px solid #dce9e2;
    border-radius: 12px;
    box-shadow: 0 10px 30px rgba(0,50,35,.055);
    overflow: hidden;
    opacity: 0;
    transform: translateY(18px);
    transition: opacity .55s ease, transform .55s ease;
}

.ppid-card.visible {
    opacity: 1;
    transform: translateY(0);
}

.ppid-card-head {
    display: flex;
    align-items: center;
    gap: 13px;
    padding: 22px 25px;
    border-bottom: 1px solid #e8eeeb;
}

.ppid-card-icon {
    width: 43px;
    height: 43px;
    flex: 0 0 43px;
    display: grid;
    place-items: center;
    background: #edf7f2;
    border: 1px solid #dcece4;
    color: var(--green);
    font-size: 17px;
}

.ppid-card-head h2 {
    margin: 0;
    color: #153b2d;
    font-size: 17px;
    font-weight: 700;
    line-height: 1.5;
}

.ppid-card-head p {
    margin: 4px 0 0;
    color: #8b9690;
    font-size: 10px;
    line-height: 1.6;
}

.ppid-card-body {
    padding: 25px;
}

/* VISI */
.ppid-visi-box {
    position: relative;
    padding: 24px;
    background: linear-gradient(135deg, #f1f8f4, #fbfdfc);
    border-left: 4px solid var(--green);
}

.ppid-mini-label {
    margin-bottom: 9px;
    color: var(--green);
    font-size: 10px;
    font-weight: 700;
    letter-spacing: 1px;
    text-transform: uppercase;
}

.ppid-visi-box h3 {
    margin: 0 0 9px;
    color: #173b2d;
    font-size: 20px;
}

.ppid-visi-box p {
    margin: 0;
    color: #596a62;
    font-size: 13px;
    line-height: 1.8;
}

/* MISI */
.ppid-misi {
    margin-top: 22px;
}

.ppid-misi h3 {
    display: flex;
    align-items: center;
    gap: 9px;
    margin: 0 0 15px;
    color: #173b2d;
    font-size: 16px;
}

.ppid-misi h3::before {
    content: "";
    width: 4px;
    height: 20px;
    background: var(--gold);
}

.ppid-misi-list {
    display: grid;
    gap: 9px;
}

.ppid-misi-item {
    display: flex;
    align-items: flex-start;
    gap: 12px;
    padding: 13px 14px;
    background: #fafcfb;
    border: 1px solid #e7edea;
    transition: .25s ease;
}

.ppid-misi-item:hover {
    background: #f3f9f5;
    border-color: #d0e2d7;
    transform: translateX(3px);
}

.ppid-misi-number {
    width: 25px;
    height: 25px;
    flex: 0 0 25px;
    display: grid;
    place-items: center;
    background: var(--green);
    color: #fff;
    font-size: 10px;
    font-weight: 700;
}

.ppid-misi-item span {
    padding-top: 4px;
    color: #56665e;
    font-size: 12px;
    line-height: 1.7;
}

/* BODY TEXT */
.ppid-text p {
    margin: 0 0 13px;
    color: #596861;
    font-size: 12.5px;
    line-height: 1.9;
    text-align: justify;
}

.ppid-text p:last-child {
    margin-bottom: 0;
}

/* MAKLUMAT */
.ppid-maklumat {
    display: grid;
    gap: 10px;
}

.ppid-maklumat-item {
    display: flex;
    align-items: flex-start;
    gap: 12px;
    padding: 13px 14px;
    background: #fffdf6;
    border: 1px solid #eee3bd;
    transition: .25s ease;
}

.ppid-maklumat-item:hover {
    transform: translateX(3px);
    background: #fffaf0;
}

.ppid-maklumat-icon {
    width: 29px;
    height: 29px;
    flex: 0 0 29px;
    display: grid;
    place-items: center;
    background: #f6edcf;
    color: #a47c17;
    font-size: 11px;
}

.ppid-maklumat-item span {
    padding-top: 4px;
    color: #665f4a;
    font-size: 11.5px;
    line-height: 1.7;
}

/* STRUKTUR ORGANISASI */
.ppid-structure {
    text-align: center;
    padding: 10px 0 4px;
}

.ppid-structure-placeholder {
    min-height: 280px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    gap: 13px;
    padding: 25px;
    background: linear-gradient(135deg, #f7faf8, #fff);
    border: 1px dashed #cbdad2;
}

.ppid-structure-placeholder i {
    color: var(--green);
    font-size: 38px;
}

.ppid-structure-placeholder strong {
    color: #334b40;
    font-size: 13px;
}

.ppid-structure-placeholder span {
    max-width: 400px;
    color: #87938d;
    font-size: 10px;
    line-height: 1.8;
}

.ppid-structure-image {
    display: block;
    width: 100%;
    max-height: 650px;
    object-fit: contain;
    border: 1px solid #e1e9e4;
    background: #fff;
    cursor: zoom-in;
    transition: .3s ease;
}

.ppid-structure-image:hover {
    box-shadow: 0 10px 30px rgba(0,0,0,.08);
}

/* TUGAS PPID */
.ppid-task-grid {
    display: grid;
    grid-template-columns: repeat(2, minmax(0,1fr));
    gap: 14px;
}

.ppid-task {
    min-width: 0;
    padding: 19px;
    background: #fbfcfc;
    border: 1px solid #e3eae6;
    transition: .25s ease;
}

.ppid-task:hover {
    border-color: #cbded3;
    box-shadow: 0 8px 22px rgba(0,60,40,.06);
    transform: translateY(-2px);
}

.ppid-task-top {
    display: flex;
    align-items: flex-start;
    gap: 11px;
    margin-bottom: 13px;
}

.ppid-task-icon {
    width: 37px;
    height: 37px;
    flex: 0 0 37px;
    display: grid;
    place-items: center;
    background: #eaf6f0;
    color: var(--green);
    font-size: 14px;
}

.ppid-task h3 {
    margin: 2px 0 0;
    color: #234238;
    font-size: 13px;
    line-height: 1.55;
}

.ppid-task ol {
    margin: 0;
    padding-left: 22px;
}

.ppid-task li {
    margin-bottom: 8px;
    padding-left: 3px;
    color: #68766f;
    font-size: 10.5px;
    line-height: 1.75;
}

.ppid-task li:last-child {
    margin-bottom: 0;
}

/* =========================================================
   SIDEBAR LINK TERKAIT — EMERALD GOLD STANDARD
========================================================= */
.ppid-sidebar {
    position: sticky;
    top: 100px;
    min-width: 0;
}

.ppid-related {
    overflow: hidden;
    background: #fff;
    border: 1px solid #dce9e2;
    border-radius: 10px;
    box-shadow: 0 10px 30px rgba(18,53,39,.07);
}

.ppid-related-head {
    position: relative;
    overflow: hidden;
    padding: 20px 17px 18px;
    background: linear-gradient(120deg, #03281d 0%, #064a32 55%, #087a4b 100%);
    border-bottom: 3px solid var(--gold);
    color: #fff;
}

.ppid-related-head::before,
.ppid-related-head::after {
    content: "";
    position: absolute;
    border: 1px solid rgba(242,212,124,.22);
    border-radius: 50%;
    pointer-events: none;
}

.ppid-related-head::before {
    width: 140px;
    height: 140px;
    right: -52px;
    top: -82px;
}

.ppid-related-head::after {
    width: 90px;
    height: 90px;
    right: -27px;
    top: -56px;
}

.ppid-related-heading {
    position: relative;
    z-index: 1;
    display: flex;
    align-items: center;
    gap: 11px;
}

.ppid-related-heading-icon {
    width: 38px;
    height: 38px;
    flex: 0 0 38px;
    display: grid;
    place-items: center;
    color: var(--gold-light);
    background: rgba(255,255,255,.08);
    border: 1px solid rgba(242,212,124,.4);
    border-radius: 7px;
    font-size: 14px;
}

.ppid-related-head h3 {
    margin: 0;
    color: #fff;
    font-size: 14px;
    font-weight: 700;
}

.ppid-related-head p {
    margin: 5px 0 0;
    color: #c4e4d4;
    font-size: 10px;
    line-height: 1.5;
}

/* Link list */
.ppid-related-list {
    display: flex;
    flex-direction: column;
    gap: 4px;
    padding: 9px;
}

.ppid-related-item {
    position: relative;
    display: flex;
    align-items: center;
    gap: 9px;
    min-height: 55px;
    padding: 10px 9px;
    color: #34433c;
    text-decoration: none;
    border: 1px solid transparent;
    border-radius: 7px;
    transition: background .22s ease, color .22s ease,
                border-color .22s ease, transform .22s ease;
}

.ppid-related-item:hover {
    background: #f2f8f4;
    border-color: #e1eee6;
    color: var(--green);
    transform: translateX(2px);
}

.ppid-related-icon {
    width: 34px;
    height: 34px;
    flex: 0 0 34px;
    display: grid;
    place-items: center;
    color: var(--green);
    background: #edf7f1;
    border: 1px solid #e0eee5;
    border-radius: 6px;
    font-size: 12px;
    transition: background .22s ease, color .22s ease;
}

.ppid-related-name {
    flex: 1;
    min-width: 0;
    font-size: 11px;
    font-weight: 600;
    line-height: 1.55;
}

.ppid-related-item > i {
    flex: 0 0 auto;
    color: #aeb9b3;
    font-size: 9px;
    transition: transform .22s ease, color .22s ease;
}

.ppid-related-item:hover > i {
    color: var(--green);
    transform: translateX(2px);
}

/* Active page: Tentang PPID */
.ppid-related-item.active {
    color: #075d3a;
    background: linear-gradient(110deg, #eaf6ee, #f5faf6);
    border-color: #d5e9dc;
    box-shadow: inset 3px 0 0 var(--gold);
}

.ppid-related-item.active .ppid-related-icon {
    color: #fff;
    background: linear-gradient(135deg, #087a4b, #064a32);
    border-color: var(--green);
}

.ppid-related-item.active > i {
    color: var(--green);
}

/* Sidebar information */
.ppid-sidebar-info {
    position: relative;
    overflow: hidden;
    margin-top: 15px;
    padding: 20px 18px;
    background: linear-gradient(135deg, #03281d, #064a32);
    border: 1px solid rgba(213,168,58,.3);
    border-radius: 10px;
    color: #fff;
}

.ppid-sidebar-info::after {
    content: "";
    position: absolute;
    width: 105px;
    height: 105px;
    right: -48px;
    bottom: -58px;
    border: 1px solid rgba(242,212,124,.2);
    border-radius: 50%;
    pointer-events: none;
}

.ppid-sidebar-info > i {
    color: var(--gold-light);
    font-size: 18px;
}

.ppid-sidebar-info h4 {
    margin: 11px 0 6px;
    font-size: 12px;
}

.ppid-sidebar-info p {
    position: relative;
    z-index: 1;
    margin: 0;
    color: rgba(255,255,255,.76);
    font-size: 10px;
    line-height: 1.8;
}

/* IMAGE MODAL */
.ppid-image-modal {
    position: fixed;
    inset: 0;
    z-index: 99999;
    display: none;
    align-items: center;
    justify-content: center;
    padding: 25px;
    background: rgba(0,25,17,.82);
    backdrop-filter: blur(5px);
}

.ppid-image-modal.active {
    display: flex;
}

.ppid-image-modal-content {
    position: relative;
    max-width: 1000px;
    max-height: 90vh;
    padding: 10px;
    background: #fff;
    box-shadow: 0 25px 80px rgba(0,0,0,.35);
}

.ppid-image-modal-content img {
    display: block;
    max-width: 100%;
    max-height: 85vh;
    object-fit: contain;
}

.ppid-image-close {
    position: absolute;
    top: -14px;
    right: -14px;
    width: 35px;
    height: 35px;
    display: grid;
    place-items: center;
    border: 2px solid #fff;
    border-radius: 50%;
    background: #063d2a;
    color: #fff;
    cursor: pointer;
    transition: background .2s ease, transform .2s ease;
}

.ppid-image-close:hover {
    background: var(--green);
    transform: rotate(90deg);
}

/* RESPONSIVE */
@media (max-width: 1000px) {
    .ppid-container {
        width: 90%;
    }

    .ppid-main {
        grid-template-columns: minmax(0, 1fr) 260px;
        gap: 20px;
    }

    .ppid-hero-icon {
        right: 35px;
    }
}

@media (max-width: 850px) {
    .ppid-main {
        grid-template-columns: 1fr;
    }

    .ppid-sidebar {
        position: static;
    }

    .ppid-related-list {
        display: grid;
        grid-template-columns: repeat(2, minmax(0,1fr));
        gap: 5px;
    }

    .ppid-related-item {
        margin: 0;
    }

    .ppid-sidebar-info {
        margin-top: 14px;
    }
}

@media (max-width: 700px) {
    .ppid-container {
        width: 92%;
    }

    .ppid-page {
        padding: 28px 0 75px;
    }

    .ppid-hero {
        min-height: auto;
        padding: 32px 25px;
        border-radius: 14px;
    }

    .ppid-hero h1 {
        font-size: 31px;
    }

    .ppid-hero p {
        font-size: 11.5px;
        line-height: 1.8;
    }

    .ppid-hero-icon {
        display: none;
    }

    .ppid-card-head {
        padding: 19px 20px;
    }

    .ppid-card-body {
        padding: 20px;
    }

    .ppid-task-grid {
        grid-template-columns: 1fr;
    }

    .ppid-visi-box {
        padding: 19px;
    }
}

@media (max-width: 480px) {
    .ppid-hero {
        padding: 28px 20px;
    }

    .ppid-hero h1 {
        font-size: 27px;
    }

    .ppid-label {
        font-size: 9px;
        letter-spacing: 1px;
        line-height: 1.7;
    }

    .ppid-card-head {
        gap: 11px;
        padding: 17px;
    }

    .ppid-card-icon {
        width: 38px;
        height: 38px;
        flex-basis: 38px;
        font-size: 15px;
    }

    .ppid-card-head h2 {
        font-size: 14px;
    }

    .ppid-card-body {
        padding: 17px;
    }

    .ppid-text p {
        font-size: 11.5px;
    }

    .ppid-misi-item span {
        font-size: 11px;
    }

    .ppid-related-list {
        grid-template-columns: 1fr;
    }

    .ppid-related-item {
        padding: 10px;
    }

    .ppid-image-modal {
        padding: 15px;
    }

    .ppid-image-close {
        top: -12px;
        right: -8px;
    }
}

@media (prefers-reduced-motion: reduce) {
    .ppid-card,
    .ppid-misi-item,
    .ppid-maklumat-item,
    .ppid-task,
    .ppid-related-item,
    .ppid-structure-image,
    .ppid-image-close {
        transition: none;
    }

    .ppid-card {
        opacity: 1;
        transform: none;
    }
}
</style>

<div class="ppid-page">
    <div class="ppid-container">

        {{-- HERO --}}
        <section class="ppid-hero">
            <div class="ppid-hero-content">
                <div class="ppid-label">
                    Pejabat Pengelola Informasi dan Dokumentasi
                </div>

                <h1>Tentang <span>PPID</span></h1>

                <p>
                    Informasi mengenai Pejabat Pengelola Informasi dan
                    Dokumentasi (PPID) PT. Jamkrida NTB Syariah sebagai
                    bagian dari komitmen perusahaan dalam mewujudkan
                    keterbukaan dan pelayanan informasi publik.
                </p>
            </div>

            <div class="ppid-hero-icon">
                <i class="fas fa-building-columns"></i>
            </div>
        </section>

        {{-- MAIN --}}
        <div class="ppid-main">

            {{-- CONTENT --}}
            <main class="ppid-content">

                {{-- VISI MISI --}}
                <section class="ppid-card reveal">
                    <div class="ppid-card-head">
                        <div class="ppid-card-icon">
                            <i class="fas fa-bullseye"></i>
                        </div>
                        <div>
                            <h2>Visi dan Misi</h2>
                            <p>Arah dan komitmen pelayanan informasi publik</p>
                        </div>
                    </div>

                    <div class="ppid-card-body">
                        <div class="ppid-visi-box">
                            <div class="ppid-mini-label">Visi</div>
                            <h3>Transparan dan Informatif</h3>
                            <p>
                                Mengedepankan Fakta dan Realita dalam
                                penyajian Informasi dan Dokumentasi.
                            </p>
                        </div>

                        <div class="ppid-misi">
                            <h3>Misi</h3>

                            <div class="ppid-misi-list">
                                <div class="ppid-misi-item">
                                    <div class="ppid-misi-number">01</div>
                                    <span>
                                        Meningkatkan Kualitas Pelayanan
                                        Informasi Publik.
                                    </span>
                                </div>

                                <div class="ppid-misi-item">
                                    <div class="ppid-misi-number">02</div>
                                    <span>
                                        Berinovasi dalam pengembangan sistem
                                        pelayanan informasi publik.
                                    </span>
                                </div>

                                <div class="ppid-misi-item">
                                    <div class="ppid-misi-number">03</div>
                                    <span>
                                        Meningkatkan sinergi dengan setiap
                                        stakeholder.
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                {{-- SEPUTAR PPID --}}
                <section class="ppid-card reveal">
                    <div class="ppid-card-head">
                        <div class="ppid-card-icon">
                            <i class="fas fa-circle-info"></i>
                        </div>
                        <div>
                            <h2>Seputar PPID PT. Jamkrida NTB Syariah</h2>
                            <p>Keterbukaan informasi publik</p>
                        </div>
                    </div>

                    <div class="ppid-card-body ppid-text">
                        <p>
                            Diberlakukannya Undang-Undang Nomor 14 Tahun
                            2008 tentang Keterbukaan Informasi Publik
                            mendorong bangsa Indonesia untuk lebih maju,
                            menjadi bangsa yang transparan dan akuntabel
                            dalam mengelola sumber daya publik.
                        </p>

                        <p>
                            Keterbukaan informasi merupakan landasan penting
                            yang akan mendorong tercapainya budaya transparansi.
                            Terlebih di era saat ini, keinginan masyarakat
                            untuk memperoleh informasi semakin tinggi.
                        </p>

                        <p>
                            Diberlakukannya UU Keterbukaan Informasi Publik
                            merupakan perubahan yang mendasar dalam kehidupan
                            bermasyarakat, berbangsa dan bernegara.
                        </p>

                        <p>
                            Untuk mewujudkan hal di atas, pada tanggal
                            01 Oktober 2021 Direksi PT. Jamkrida NTB Bersaing
                            mengeluarkan Surat Keputusan Direksi Nomor:
                            <strong>tentang Penetapan Pejabat Pengelola
                            Informasi dan Dokumentasi (PPID)
                            PT. Jamkrida NTB Syariah.</strong>
                        </p>
                    </div>
                </section>

                {{-- MAKLUMAT PPID --}}
                <section class="ppid-card reveal">
                    <div class="ppid-card-head">
                        <div class="ppid-card-icon">
                            <i class="fas fa-handshake"></i>
                        </div>
                        <div>
                            <h2>Maklumat PPID</h2>
                            <p>Komitmen pelayanan informasi publik</p>
                        </div>
                    </div>

                    <div class="ppid-card-body">
                        <div class="ppid-maklumat">

                            <div class="ppid-maklumat-item">
                                <div class="ppid-maklumat-icon">
                                    <i class="fas fa-unlock"></i>
                                </div>
                                <span>
                                    Memberikan kemudahan mengakses
                                    informasi publik.
                                </span>
                            </div>

                            <div class="ppid-maklumat-item">
                                <div class="ppid-maklumat-icon">
                                    <i class="fas fa-bolt"></i>
                                </div>
                                <span>
                                    Memberikan informasi yang cepat,
                                    akurat dan berkualitas.
                                </span>
                            </div>

                            <div class="ppid-maklumat-item">
                                <div class="ppid-maklumat-icon">
                                    <i class="fas fa-check-double"></i>
                                </div>
                                <span>
                                    Memberikan informasi publik berdasarkan
                                    fakta yang ada.
                                </span>
                            </div>

                            <div class="ppid-maklumat-item">
                                <div class="ppid-maklumat-icon">
                                    <i class="fas fa-building"></i>
                                </div>
                                <span>
                                    Menyediakan fasilitas pelayanan informasi
                                    publik yang nyaman.
                                </span>
                            </div>

                            <div class="ppid-maklumat-item">
                                <div class="ppid-maklumat-icon">
                                    <i class="fas fa-scale-balanced"></i>
                                </div>
                                <span>
                                    Menjamin seluruh pelayanan terkait
                                    penyediaan informasi sesuai dengan
                                    ketentuan yang berlaku.
                                </span>
                            </div>

                            <div class="ppid-maklumat-item">
                                <div class="ppid-maklumat-icon">
                                    <i class="fas fa-arrows-rotate"></i>
                                </div>
                                <span>
                                    Mengevaluasi dan melakukan perbaikan
                                    yang berkesinambungan.
                                </span>
                            </div>

                        </div>
                    </div>
                </section>

                {{-- STRUKTUR ORGANISASI --}}
                <section class="ppid-card reveal">
                    <div class="ppid-card-head">
                        <div class="ppid-card-icon">
                            <i class="fas fa-sitemap"></i>
                        </div>
                        <div>
                            <h2>Struktur Organisasi PPID</h2>
                            <p>Struktur organisasi PPID PT. Jamkrida NTB Syariah</p>
                        </div>
                    </div>

                    <div class="ppid-card-body">
                        <div class="ppid-structure">

                            {{--
                                Jika gambar struktur organisasi tersedia,
                                hapus placeholder dan gunakan gambar berikut:

                                <img
                                    src="{{ asset('images/struktur-ppid.png') }}"
                                    alt="Struktur Organisasi PPID"
                                    class="ppid-structure-image"
                                    onclick="openPpidImage(this.src)"
                                >
                            --}}

                            <div class="ppid-structure-placeholder">
                                <i class="fas fa-sitemap"></i>
                                <strong>Struktur Organisasi PPID</strong>
                                <span>
                                    Terlampir struktur Organisasi PPID
                                    PT. Jamkrida NTB Syariah (PERSERODA).
                                    Area ini dapat digunakan untuk menampilkan
                                    gambar struktur organisasi resmi.
                                </span>
                            </div>

                        </div>
                    </div>
                </section>

                {{-- TUGAS PEJABAT PPID --}}
                <section class="ppid-card reveal">
                    <div class="ppid-card-head">
                        <div class="ppid-card-icon">
                            <i class="fas fa-user-tie"></i>
                        </div>
                        <div>
                            <h2>Tugas Pejabat PPID</h2>
                            <p>Tugas dan tanggung jawab dalam pelayanan informasi</p>
                        </div>
                    </div>

                    <div class="ppid-card-body">
                        <div class="ppid-task-grid">

                            {{-- ATASAN PPID --}}
                            <div class="ppid-task">
                                <div class="ppid-task-top">
                                    <div class="ppid-task-icon">
                                        <i class="fas fa-user-shield"></i>
                                    </div>
                                    <h3>
                                        Atasan Pejabat Pengelola
                                        Informasi dan Dokumentasi
                                    </h3>
                                </div>
                                <ol>
                                    <li>
                                        Memutuskan dan mengevaluasi kebijakan
                                        pelayanan Informasi Publik.
                                    </li>
                                    <li>
                                        Menyelesaikan masalah yang muncul
                                        terkait manajemen pengelolaan dan
                                        pelayanan informasi publik.
                                    </li>
                                    <li>
                                        Mengevaluasi kinerja struktur
                                        pelayanan Informasi Publik.
                                    </li>
                                    <li>
                                        Memastikan manajemen pengelolaan dan
                                        pelayanan Informasi Publik telah sesuai
                                        dengan peraturan perundangan yang berlaku.
                                    </li>
                                </ol>
                            </div>

                            {{-- KOORDINATOR --}}
                            <div class="ppid-task">
                                <div class="ppid-task-top">
                                    <div class="ppid-task-icon">
                                        <i class="fas fa-people-arrows"></i>
                                    </div>
                                    <h3>
                                        Koordinator Pejabat Pengelola
                                        Informasi dan Dokumentasi
                                    </h3>
                                </div>
                                <ol>
                                    <li>
                                        Mengkoordinasikan seluruh kegiatan
                                        Pengelolaan Informasi Publik.
                                    </li>
                                    <li>
                                        Melakukan pemantauan dan memberikan
                                        pelayanan terhadap permohonan.
                                    </li>
                                    <li>
                                        Mengembangkan penyediaan dan pelayanan
                                        Informasi Publik.
                                    </li>
                                    <li>
                                        Melaporkan semua kegiatan Informasi
                                        Publik kepada Atasan Pejabat Pengelola
                                        Informasi dan Dokumentasi.
                                    </li>
                                </ol>
                            </div>

                            {{-- PENGELOLA INFORMASI --}}
                            <div class="ppid-task">
                                <div class="ppid-task-top">
                                    <div class="ppid-task-icon">
                                        <i class="fas fa-folder-open"></i>
                                    </div>
                                    <h3>
                                        Bidang Pengelola Informasi
                                        dan Dokumentasi
                                    </h3>
                                </div>
                                <ol>
                                    <li>
                                        Mengoordinasikan dan mengkonsolidasikan
                                        pengumpulan bahan informasi dan
                                        dokumentasi dari tiap divisi.
                                    </li>
                                    <li>
                                        Menyimpan, mendokumentasikan,
                                        menyediakan dan memberi pelayanan
                                        informasi kepada publik.
                                    </li>
                                    <li>Melakukan verifikasi bahan informasi publik.</li>
                                    <li>Melakukan pemutakhiran informasi dan dokumentasi.</li>
                                    <li>Membuat laporan pelayanan informasi.</li>
                                </ol>
                            </div>

                            {{-- PENGADUAN --}}
                            <div class="ppid-task">
                                <div class="ppid-task-top">
                                    <div class="ppid-task-icon">
                                        <i class="fas fa-comments"></i>
                                    </div>
                                    <h3>
                                        Bidang Pengaduan dan
                                        Pelayanan Sengketa
                                    </h3>
                                </div>
                                <ol>
                                    <li>Memberikan pelayanan terhadap pemohon informasi.</li>
                                    <li>
                                        Melakukan pemantauan dan memberikan
                                        pelayanan terhadap permohonan informasi
                                        baik melalui email, website dan media
                                        sosial lainnya.
                                    </li>
                                    <li>
                                        Melakukan komunikasi, klarifikasi
                                        dan memberikan penjelasan terhadap
                                        pemohon informasi.
                                    </li>
                                    <li>Membuat laporan pelayanan informasi.</li>
                                </ol>
                            </div>

                            {{-- TEKNIS ADMIN --}}
                            <div class="ppid-task">
                                <div class="ppid-task-top">
                                    <div class="ppid-task-icon">
                                        <i class="fas fa-clipboard-list"></i>
                                    </div>
                                    <h3>Pelaksana Teknis dan Administrasi</h3>
                                </div>
                                <ol>
                                    <li>
                                        Melakukan tugas-tugas administrasi
                                        terkait pelayanan Informasi Publik.
                                    </li>
                                    <li>
                                        Membantu Bidang Pengelola Informasi
                                        dan Dokumentasi serta Bidang Pengaduan
                                        dan Pelayanan Sengketa.
                                    </li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </section>

            </main>

            {{-- SIDEBAR LINK TERKAIT --}}
            <aside class="ppid-sidebar">

                <div class="ppid-related">
                    <div class="ppid-related-head">
                        <div class="ppid-related-heading">
                            <div class="ppid-related-heading-icon">
                                <i class="fas fa-link"></i>
                            </div>
                            <div>
                                <h3>Link Terkait</h3>
                                <p>Navigasi informasi dan layanan PPID</p>
                            </div>
                        </div>
                    </div>

                    <nav class="ppid-related-list" aria-label="Navigasi PPID">

                        {{-- TENTANG PPID: HALAMAN AKTIF --}}
                        <a
                            href="{{ url('/menu/ppid/tentang_ppid') }}"
                            class="ppid-related-item active"
                            aria-current="page"
                        >
                            <span class="ppid-related-icon">
                                <i class="fas fa-circle-info"></i>
                            </span>
                            <span class="ppid-related-name">Tentang PPID</span>
                            <i class="fas fa-chevron-right"></i>
                        </a>

                        <a
                            href="{{ url('/menu/ppid/kelengkapan_ppid') }}"
                            class="ppid-related-item"
                        >
                            <span class="ppid-related-icon">
                                <i class="fas fa-folder-open"></i>
                            </span>
                            <span class="ppid-related-name">Kelengkapan PPID</span>
                            <i class="fas fa-chevron-right"></i>
                        </a>

                        <a
                            href="{{ url('/menu/ppid/standar_pelayanan') }}"
                            class="ppid-related-item"
                        >
                            <span class="ppid-related-icon">
                                <i class="fas fa-list-check"></i>
                            </span>
                            <span class="ppid-related-name">Standar Pelayanan</span>
                            <i class="fas fa-chevron-right"></i>
                        </a>

                        <a
                            href="{{ url('/menu/ppid/ebulletin') }}"
                            class="ppid-related-item"
                        >
                            <span class="ppid-related-icon">
                                <i class="fas fa-newspaper"></i>
                            </span>
                            <span class="ppid-related-name">eBulletin</span>
                            <i class="fas fa-chevron-right"></i>
                        </a>

                        <a
                            href="{{ url('/menu/ppid/layanan') }}"
                            class="ppid-related-item"
                        >
                            <span class="ppid-related-icon">
                                <i class="fas fa-headset"></i>
                            </span>
                            <span class="ppid-related-name">Layanan Pusat Informasi</span>
                            <i class="fas fa-chevron-right"></i>
                        </a>

                        <a
                            href="{{ url('/menu/ppid/rancangan_peraturan') }}"
                            class="ppid-related-item"
                        >
                            <span class="ppid-related-icon">
                                <i class="fas fa-scale-balanced"></i>
                            </span>
                            <span class="ppid-related-name">Rancangan Peraturan</span>
                            <i class="fas fa-chevron-right"></i>
                        </a>

                        <a
                            href="{{ url('/menu/ppid/pos_pelayanan') }}"
                            class="ppid-related-item"
                        >
                            <span class="ppid-related-icon">
                                <i class="fas fa-location-dot"></i>
                            </span>
                            <span class="ppid-related-name">
                                Pos Pelayanan Informasi Publik
                            </span>
                            <i class="fas fa-chevron-right"></i>
                        </a>

                    </nav>
                </div>

                <div class="ppid-sidebar-info">
                    <i class="fas fa-circle-info"></i>
                    <h4>Keterbukaan Informasi</h4>
                    <p>
                        PPID hadir untuk memberikan pelayanan informasi
                        publik yang transparan, akurat dan sesuai dengan
                        ketentuan yang berlaku.
                    </p>
                </div>

            </aside>

        </div>
    </div>
</div>

{{-- IMAGE MODAL --}}
<div
    class="ppid-image-modal"
    id="ppidImageModal"
    onclick="closePpidImageOutside(event)"
>
    <div class="ppid-image-modal-content">

        <button
            type="button"
            class="ppid-image-close"
            aria-label="Tutup gambar"
            onclick="closePpidImage()"
        >
            <i class="fas fa-times"></i>
        </button>

        <img
            src=""
            alt="Struktur Organisasi PPID"
            id="ppidModalImage"
        >
    </div>
</div>

<script>
/* =========================================================
   SCROLL REVEAL
========================================================= */
document.addEventListener('DOMContentLoaded', function () {
    const cards = document.querySelectorAll('.ppid-card.reveal');

    if (!('IntersectionObserver' in window)) {
        cards.forEach(function (card) {
            card.classList.add('visible');
        });
        return;
    }

    const observer = new IntersectionObserver(
        function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    observer.unobserve(entry.target);
                }
            });
        },
        { threshold: 0.08 }
    );

    cards.forEach(function (card) {
        observer.observe(card);
    });
});

/* =========================================================
   IMAGE MODAL
========================================================= */
function openPpidImage(src) {
    const modal = document.getElementById('ppidImageModal');
    const image = document.getElementById('ppidModalImage');

    if (!modal || !image) return;

    image.src = src;
    modal.classList.add('active');
    document.body.style.overflow = 'hidden';
}

function closePpidImage() {
    const modal = document.getElementById('ppidImageModal');
    const image = document.getElementById('ppidModalImage');

    if (!modal) return;

    modal.classList.remove('active');
    document.body.style.overflow = '';

    if (image) {
        image.src = '';
    }
}

function closePpidImageOutside(event) {
    if (event.target.id === 'ppidImageModal') {
        closePpidImage();
    }
}

/* =========================================================
   ESC KEY
========================================================= */
document.addEventListener('keydown', function (event) {
    if (event.key === 'Escape') {
        closePpidImage();
    }
});
</script>

@endsection