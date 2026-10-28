
@extends('layouts.main')

@section('title', 'Whistle-Blowing System')

@section('content')

<style>
.wbs-page {
    --green: #087a4b;
    --dark: #063d2a;
    --gold: #d5a83a;
    padding: 40px 0 80px;
    background:
        radial-gradient(circle at 5% 10%, rgba(8,122,75,.07), transparent 28%),
        radial-gradient(circle at 95% 30%, rgba(213,168,58,.07), transparent 25%),
        #f5f8f6;
    color: #1d2d26;
}

.wbs-container {
    width: min(1100px, calc(100% - 36px));
    margin: auto;
}

.wbs-hero {
    position: relative;
    overflow: hidden;
    padding: 42px 45px;
    min-height: 245px;
    background: linear-gradient(115deg, #003d2b, #005b3d 48%, #087a4b);
    box-shadow: 0 20px 45px rgba(0,61,43,.16);
}

.wbs-hero::before {
    content: "";
    position: absolute;
    width: 330px;
    height: 330px;
    right: -95px;
    top: -175px;
    border: 1px solid rgba(242,212,124,.28);
    border-radius: 50%;
}

.wbs-hero-content {
    position: relative;
    z-index: 2;
    max-width: 760px;
}

.wbs-label {
    display: flex;
    align-items: center;
    gap: 10px;
    margin-bottom: 18px;
    color: #e8d079;
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 1.5px;
    text-transform: uppercase;
}

.wbs-label::before {
    content: "";
    width: 25px;
    height: 2px;
    background: #e8d079;
}

.wbs-hero h1 {
    margin: 0;
    color: white;
    font-size: clamp(30px, 4vw, 44px);
    line-height: 1.15;
}

.wbs-hero h1 span {
    color: #f1d06c;
}

.wbs-hero p {
    max-width: 700px;
    margin: 15px 0 0;
    color: rgba(255,255,255,.8);
    font-size: 13px;
    line-height: 1.9;
}

.wbs-main {
    display: grid;
    grid-template-columns: minmax(0,1fr) 250px;
    gap: 25px;
    margin-top: 30px;
    align-items: start;
}

.wbs-card,
.wbs-related {
    background: #fff;
    border: 1px solid #e1e8e4;
    box-shadow: 0 12px 35px rgba(0,50,35,.07);
    overflow: hidden;
}

.wbs-card-head {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 15px;
    padding: 23px 25px;
    border-bottom: 1px solid #e8eeeb;
}

.wbs-card-heading {
    display: flex;
    align-items: center;
    gap: 13px;
}

.wbs-card-icon,
.wbs-channel-icon,
.wbs-related-icon {
    display: grid;
    place-items: center;
    flex-shrink: 0;
    background: #edf7f2;
    border: 1px solid #dcece4;
    color: var(--green);
}

.wbs-card-icon {
    width: 44px;
    height: 44px;
    font-size: 17px;
}

.wbs-card-heading h2 {
    margin: 0;
    color: var(--dark);
    font-size: 16px;
}

.wbs-card-heading p {
    margin: 4px 0 0;
    color: #87948c;
    font-size: 10px;
}

.wbs-badge {
    padding: 8px 11px;
    background: #fff8df;
    border: 1px solid #f0d98c;
    color: #927119;
    font-size: 9px;
    font-weight: 800;
    white-space: nowrap;
}

.wbs-intro {
    padding: 26px;
}

.wbs-intro h3 {
    margin: 0 0 13px;
    color: var(--dark);
    font-size: 20px;
}

.wbs-intro p {
    margin: 0 0 12px;
    color: #596861;
    font-size: 12px;
    line-height: 1.9;
    text-align: justify;
}

.wbs-channel-title {
    display: flex;
    align-items: center;
    gap: 9px;
    margin: 28px 0 17px;
    color: var(--dark);
    font-size: 16px;
}

.wbs-channel-title::before {
    content: "";
    width: 4px;
    height: 21px;
    background: var(--gold);
}

.wbs-channel-list {
    display: grid;
    gap: 11px;
}

.wbs-channel {
    display: flex;
    align-items: center;
    gap: 13px;
    min-width: 0;
    padding: 14px;
    border: 1px solid #e4ebe7;
    background: #fbfcfc;
    transition: .2s ease;
}

.wbs-channel:hover {
    background: #f5faf7;
    border-color: #cfe2d8;
}

.wbs-channel-icon {
    width: 42px;
    height: 42px;
    font-size: 16px;
}

.wbs-channel-info {
    flex: 1;
    min-width: 0;
}

.wbs-channel-info strong {
    display: block;
    color: #263a31;
    font-size: 12px;
}

.wbs-channel-info span {
    display: block;
    margin-top: 5px;
    color: #74817b;
    font-size: 10px;
    line-height: 1.7;
    overflow-wrap: anywhere;
}

.wbs-action {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 7px;
    flex-shrink: 0;
    padding: 10px 12px;
    border: 1px solid transparent;
    background: var(--green);
    color: #fff;
    font-family: inherit;
    font-size: 10px;
    font-weight: 700;
    text-decoration: none;
    cursor: pointer;
    transition: .2s;
}

.wbs-action:hover {
    background: var(--dark);
}

.wbs-email {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 12px;
    margin-top: 22px;
    padding: 15px;
    background: #f0f7f3;
    border-left: 3px solid var(--green);
}

.wbs-email-left {
    display: flex;
    align-items: center;
    gap: 9px;
    min-width: 0;
    color: #3f5149;
    font-size: 11px;
    overflow-wrap: anywhere;
}

.wbs-email-left i {
    color: var(--green);
}

.wbs-copy {
    flex-shrink: 0;
    padding: 8px 10px;
    border: 1px solid #d4e4dc;
    background: #fff;
    color: var(--green);
    font-size: 10px;
    cursor: pointer;
}

.wbs-qr-section {
    display: grid;
    grid-template-columns: minmax(0,1fr) 140px;
    gap: 22px;
    align-items: center;
    margin-top: 23px;
    padding: 22px;
    background: linear-gradient(120deg,#f6faf8,#fff);
    border: 1px solid #e3ebe6;
}

.wbs-qr-section h3 {
    margin: 0 0 9px;
    color: var(--dark);
    font-size: 17px;
}

.wbs-qr-section p {
    margin: 0;
    color: #68766f;
    font-size: 11px;
    line-height: 1.8;
}

.wbs-qr-box {
    display: grid;
    place-items: center;
    padding: 8px;
    background: white;
    border: 1px solid #dfe7e3;
    cursor: pointer;
    transition: .2s;
}

.wbs-qr-box:hover {
    transform: scale(1.03);
}

.wbs-qr {
    display: block;
    width: 120px;
    height: 120px;
    object-fit: contain;
}

.wbs-note {
    display: flex;
    gap: 12px;
    margin: 0 26px 26px;
    padding: 15px;
    background: #fffaf0;
    border: 1px solid #f0e0b0;
}

.wbs-note-icon {
    color: #b88a16;
}

.wbs-note strong {
    display: block;
    margin-bottom: 5px;
    color: #66501d;
    font-size: 11px;
}

.wbs-note p {
    margin: 0;
    color: #796c4a;
    font-size: 10px;
    line-height: 1.8;
}

.wbs-sidebar {
    position: sticky;
    top: 100px;
}

.wbs-related-header {
    position: relative;
    overflow: hidden;
    padding: 19px 18px;
    background: linear-gradient(135deg,#00633f,#087a4b);
    color: white;
}

.wbs-related-header::after {
    content: "";
    position: absolute;
    width: 105px;
    height: 105px;
    right: -50px;
    top: -55px;
    border: 1px solid rgba(242,212,124,.25);
    border-radius: 50%;
}

.wbs-related-header h3,
.wbs-related-header p {
    position: relative;
    z-index: 1;
}

.wbs-related-header h3 {
    margin: 0;
    font-size: 14px;
}

.wbs-related-header p {
    margin: 5px 0 0;
    color: rgba(255,255,255,.72);
    font-size: 10px;
}

.wbs-related-item {
    display: flex;
    align-items: center;
    gap: 10px;
    padding: 13px 14px;
    border-bottom: 1px solid #edf1ef;
    color: #4a5a53;
    text-decoration: none;
    font-size: 10px;
    font-weight: 700;
    transition: .2s;
}

.wbs-related-item:hover,
.wbs-related-item.active {
    background: #f5faf7;
    color: var(--green);
}

.wbs-related-item.active {
    border-left: 3px solid var(--gold);
}

.wbs-related-icon {
    width: 30px;
    height: 30px;
    font-size: 11px;
}

.wbs-related-name {
    flex: 1;
    line-height: 1.6;
}

.wbs-sidebar-info {
    margin-top: 16px;
    padding: 19px;
    background: var(--dark);
    color: white;
}

.wbs-sidebar-info > i {
    color: #f2d47c;
    font-size: 20px;
}

.wbs-sidebar-info h4 {
    margin: 11px 0 6px;
    font-size: 12px;
}

.wbs-sidebar-info p {
    margin: 0;
    color: rgba(255,255,255,.7);
    font-size: 10px;
    line-height: 1.8;
}

.wbs-modal {
    position: fixed;
    inset: 0;
    z-index: 99999;
    display: none;
    align-items: center;
    justify-content: center;
    padding: 20px;
    background: rgba(0,25,17,.78);
    backdrop-filter: blur(5px);
}

.wbs-modal.active {
    display: flex;
}

.wbs-modal-box {
    position: relative;
    padding: 20px;
    background: white;
}

.wbs-modal-box img {
    display: block;
    width: min(360px,75vw);
    height: auto;
}

.wbs-modal-close {
    position: absolute;
    top: -12px;
    right: -12px;
    width: 33px;
    height: 33px;
    border: 0;
    background: var(--dark);
    color: white;
    cursor: pointer;
}

.wbs-toast {
    position: fixed;
    right: 22px;
    bottom: 22px;
    z-index: 100000;
    padding: 12px 16px;
    background: var(--dark);
    color: white;
    font-size: 11px;
    opacity: 0;
    transform: translateY(12px);
    pointer-events: none;
    transition: .25s;
}

.wbs-toast.show {
    opacity: 1;
    transform: translateY(0);
}

.wbs-toast i {
    color: #f2d47c;
    margin-right: 6px;
}

@media(max-width:900px) {
    .wbs-main {
        grid-template-columns: minmax(0,1fr);
    }

    .wbs-sidebar {
        position: static;
    }
}

@media(max-width:600px) {
    .wbs-page {
        padding: 24px 0 50px;
    }

    .wbs-container {
        width: calc(100% - 24px);
    }

    .wbs-hero {
        padding: 29px 23px;
    }

    .wbs-hero h1 {
        font-size: 31px;
    }

    .wbs-hero p {
        font-size: 12px;
    }

    .wbs-card-head {
        align-items: flex-start;
        flex-direction: column;
        padding: 19px;
    }

    .wbs-intro {
        padding: 19px;
    }

    .wbs-channel {
        flex-wrap: wrap;
    }

    .wbs-channel-info {
        flex: 1 1 calc(100% - 60px);
    }

    .wbs-action {
        margin-left: 55px;
    }

    .wbs-email {
        align-items: flex-start;
        flex-direction: column;
    }

    .wbs-qr-section {
        grid-template-columns: minmax(0,1fr);
        padding: 19px;
    }

    .wbs-qr-box {
        width: 140px;
    }

    .wbs-note {
        margin: 0 19px 19px;
    }
}
</style>

<div class="wbs-page">
    <div class="wbs-container">

        <section class="wbs-hero">
            <div class="wbs-hero-content">
                <div class="wbs-label">Whistle-Blowing System</div>

                <h1>Whistle-Blowing <span>System</span></h1>

                <p>
                    Sarana penyampaian laporan mengenai dugaan pelanggaran
                    sebagai bagian dari komitmen PT. Jamkrida NTB Syariah
                    dalam menjaga integritas, transparansi, dan tata kelola
                    perusahaan yang baik.
                </p>
            </div>
        </section>

        <div class="wbs-main">
            <main class="wbs-card">

                <div class="wbs-card-head">
                    <div class="wbs-card-heading">
                        <div class="wbs-card-icon">
                            <i class="fas fa-file-shield"></i>
                        </div>
                        <div>
                            <h2>Whistle-Blowing System</h2>
                            <p>PT. Jamkrida NTB Syariah (Perseroda)</p>
                        </div>
                    </div>

                    <div class="wbs-badge">SALURAN PENGADUAN</div>
                </div>

                <div class="wbs-intro">
                    <h3>Tentang Whistle-Blowing System</h3>

                    <p>
                        Whistle-Blowing System (WBS) PT. Jamkrida NTB Syariah
                        merupakan sarana untuk menyampaikan dan menindaklanjuti
                        laporan mengenai dugaan pelanggaran yang diketahui
                        oleh pelapor.
                    </p>

                    <p>
                        Pelapor diharapkan menyampaikan informasi secara jelas,
                        bertanggung jawab, dan berdasarkan fakta yang diketahui.
                        Informasi pendukung dapat disertakan apabila tersedia.
                    </p>

                    <h3 class="wbs-channel-title">Kanal Pelaporan</h3>

                    <div class="wbs-channel-list">

                        <!-- <div class="wbs-channel">
                            <div class="wbs-channel-icon">
                                <i class="fas fa-globe"></i>
                            </div>
                            <div class="wbs-channel-info">
                                <strong>Website Resmi</strong>
                                <span>Akses website PT. Jamkrida NTB Syariah.</span>
                            </div>
                            <a href="https://jamkridantbsyariah.co.id"
                               target="_blank"
                               rel="noopener noreferrer"
                               class="wbs-action">
                                Buka <i class="fas fa-arrow-up-right-from-square"></i>
                            </a>
                        </div> -->

                        <div class="wbs-channel">
                            <div class="wbs-channel-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="wbs-channel-info">
                                <strong>Email WBS</strong>
                                <span>wbsjamkridantbsyariah@gmail.com</span>
                            </div>
                            <a href="mailto:wbsjamkridantbsyariah@gmail.com"
                               class="wbs-action">
                                Kirim <i class="fas fa-paper-plane"></i>
                            </a>
                        </div>

                        <div class="wbs-channel">
                            <div class="wbs-channel-icon">
                                <i class="fas fa-file-pen"></i>
                            </div>
                            <div class="wbs-channel-info">
                                <strong>Formulir Pengaduan Online</strong>
                                <span>Kirim laporan melalui formulir pada website ini.</span>
                            </div>
                            <a href="{{ route('pengaduan.form') }}"
                               class="wbs-action">
                                Isi Formulir <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>

                        <div class="wbs-channel">
                            <div class="wbs-channel-icon">
                                <i class="fas fa-qrcode"></i>
                            </div>
                            <div class="wbs-channel-info">
                                <strong>QR Code WBS</strong>
                                <span>Pindai QR Code untuk mengakses kanal WBS.</span>
                            </div>
                            <button type="button"
                                    class="wbs-action"
                                    id="openWbsQr">
                                Lihat <i class="fas fa-expand"></i>
                            </button>
                        </div>

                    </div>

                    <div class="wbs-email">
                        <div class="wbs-email-left">
                            <i class="fas fa-envelope"></i>
                            <span id="wbsEmail">wbsjamkridantbsyariah@gmail.com</span>
                        </div>
                        <button type="button" class="wbs-copy" id="copyWbsEmail">
                            <i class="fas fa-copy"></i> Salin Email
                        </button>
                    </div>

                    <div class="wbs-qr-section">
                        <div>
                            <h3>Akses Cepat Melalui QR Code</h3>
                            <p>
                                Gunakan kamera smartphone untuk memindai QR Code
                                berikut dan mengakses kanal Whistle-Blowing System.
                            </p>
                        </div>

                        <button type="button"
                                class="wbs-qr-box"
                                id="openWbsQrImage"
                                aria-label="Perbesar QR Code">
                            <img src="{{ asset('images/wbs.png') }}"
                                 alt="QR Code WBS"
                                 class="wbs-qr">
                        </button>
                    </div>
                </div>

                <div class="wbs-note">
                    <div class="wbs-note-icon">
                        <i class="fas fa-circle-info"></i>
                    </div>
                    <div>
                        <strong>Informasi Pelaporan</strong>
                        <p>
                            Sampaikan laporan berdasarkan fakta atau informasi
                            yang diketahui. Sertakan bukti pendukung jika tersedia.
                        </p>
                    </div>
                </div>
            </main>

<!-- sidebar -->

            <aside class="wbs-sidebar">
                <div class="wbs-related">
                    <div class="wbs-related-header">
                        <h3>Link Terkait</h3>
                        <p>Informasi terkait pengaduan</p>
                    </div>

                    <a href="{{ url('/menu/pengaduan/whistle_blowing') }}"
                       class="wbs-related-item active">
                        <span class="wbs-related-icon">
                            <i class="fas fa-shield-halved"></i>
                        </span>
                        <span class="wbs-related-name">Whistle-Blowing System</span>
                        <i class="fas fa-chevron-right"></i>
                    </a>

                    <!-- <a href="{{ route('pengaduan.form') }}"
                       class="wbs-related-item">
                        <span class="wbs-related-icon">
                            <i class="fas fa-file-pen"></i>
                        </span>
                        <span class="wbs-related-name">Formulir Pengaduan</span>
                        <i class="fas fa-chevron-right"></i>
                    </a> -->
                </div>

                <div class="wbs-sidebar-info">
                    <i class="fas fa-shield-heart"></i>
                    <h4>Jaga Integritas</h4>
                    <p>
                        Bersama membangun lingkungan perusahaan yang transparan,
                        berintegritas, dan bertanggung jawab.
                    </p>
                </div>
            </aside>
        </div>
    </div>
</div>

<div class="wbs-modal" id="wbsQrModal" aria-hidden="true">
    <div class="wbs-modal-box" role="dialog" aria-modal="true"
         aria-label="QR Code Whistle-Blowing System">
        <button type="button" class="wbs-modal-close"
                id="closeWbsQr" aria-label="Tutup QR Code">
            <i class="fas fa-times"></i>
        </button>

        <img src="{{ asset('images/wbs.png') }}"
             alt="QR Code Whistle-Blowing System">
    </div>
</div>

<div class="wbs-toast" id="wbsToast" role="status" aria-live="polite">
    <i class="fas fa-circle-check"></i>
    <span id="wbsToastMessage">Email berhasil disalin.</span>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const modal = document.getElementById('wbsQrModal');
    const openButtons = [
        document.getElementById('openWbsQr'),
        document.getElementById('openWbsQrImage')
    ];
    const closeButton = document.getElementById('closeWbsQr');
    const copyButton = document.getElementById('copyWbsEmail');
    const toast = document.getElementById('wbsToast');
    const toastMessage = document.getElementById('wbsToastMessage');

    function openQr() {
        if (!modal) return;
        modal.classList.add('active');
        modal.setAttribute('aria-hidden', 'false');
        document.body.style.overflow = 'hidden';
        closeButton?.focus();
    }

    function closeQr() {
        if (!modal) return;
        modal.classList.remove('active');
        modal.setAttribute('aria-hidden', 'true');
        document.body.style.overflow = '';
    }

    openButtons.forEach(function (button) {
        button?.addEventListener('click', openQr);
    });

    closeButton?.addEventListener('click', closeQr);

    modal?.addEventListener('click', function (event) {
        if (event.target === modal) closeQr();
    });

    document.addEventListener('keydown', function (event) {
        if (event.key === 'Escape') closeQr();
    });

    function showToast(message) {
        if (!toast || !toastMessage) return;
        toastMessage.textContent = message;
        toast.classList.add('show');

        window.setTimeout(function () {
            toast.classList.remove('show');
        }, 2200);
    }

    async function copyEmail() {
        const email = document.getElementById('wbsEmail')?.textContent?.trim();

        if (!email) return;

        try {
            if (navigator.clipboard && window.isSecureContext) {
                await navigator.clipboard.writeText(email);
            } else {
                const textarea = document.createElement('textarea');
                textarea.value = email;
                textarea.style.position = 'fixed';
                textarea.style.opacity = '0';
                document.body.appendChild(textarea);
                textarea.select();

                const copied = document.execCommand('copy');
                textarea.remove();

                if (!copied) throw new Error('Gagal menyalin email');
            }

            showToast('Email berhasil disalin.');
        } catch (error) {
            showToast('Silakan salin email secara manual: ' + email);
        }
    }

    copyButton?.addEventListener('click', copyEmail);
});
</script>

@endsection