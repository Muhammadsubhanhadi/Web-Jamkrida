@extends('layouts.main')

@section('title', 'Standar Pelayanan Publik')

@section('content')

<style>
/* =========================================================
   STANDAR PELAYANAN PUBLIK
   PT. JAMKRIDA NTB SYARIAH
========================================================= */

.ppid-standard-page {
    --ppid-green: #087a4b;
    --ppid-dark: #063d2a;
    --ppid-deep: #03281d;
    --ppid-gold: #d5a83a;
    --ppid-gold-light: #f2d47c;
    --ppid-text: #263a31;
    --ppid-muted: #66746d;
    --ppid-border: #e4ebe7;

    position: relative;
    padding: 70px 0 110px;
    background:
        radial-gradient(circle at 5% 10%, rgba(8,122,75,.07), transparent 28%),
        radial-gradient(circle at 95% 35%, rgba(213,168,58,.08), transparent 25%),
        #f7faf8;
    overflow: hidden;
}

.ppid-standard-page::before,
.ppid-standard-page::after {
    content: "";
    position: absolute;
    border-radius: 50%;
    pointer-events: none;
}

.ppid-standard-page::before {
    width: 390px;
    height: 390px;
    background: rgba(8,122,75,.035);
    top: 100px;
    left: -210px;
}

.ppid-standard-page::after {
    width: 340px;
    height: 340px;
    background: rgba(213,168,58,.035);
    right: -180px;
    bottom: 120px;
}

.ppid-standard-container {
    width: min(1180px, 90%);
    margin: 0 auto;
    position: relative;
    z-index: 2;
}

/* =========================================================
   HERO
========================================================= */

.ppid-standard-hero {
    position: relative;
    overflow: hidden;
    min-height: 285px;
    padding: 55px;
    margin-bottom: 38px;
    background: linear-gradient(120deg, #03281d, #063d2a 55%, #087a4b);
    border-radius: 18px;
    border: 1px solid rgba(255,255,255,.08);
    box-shadow: 0 22px 48px rgba(3,40,29,.17);
}

.ppid-standard-hero::before,
.ppid-standard-hero::after {
    content: "";
    position: absolute;
    border-radius: 50%;
    border: 1px solid rgba(242,212,124,.14);
    pointer-events: none;
}

.ppid-standard-hero::before {
    width: 360px;
    height: 360px;
    right: -140px;
    top: -170px;
}

.ppid-standard-hero::after {
    width: 210px;
    height: 210px;
    right: 80px;
    bottom: -145px;
    border-color: rgba(242,212,124,.10);
}

.ppid-standard-hero-content {
    position: relative;
    z-index: 2;
    max-width: 780px;
}

.ppid-standard-badge {
    display: inline-flex;
    align-items: center;
    gap: 9px;
    padding: 8px 15px;
    margin-bottom: 18px;
    color: #f2d47c;
    background: rgba(213,168,58,.12);
    border: 1px solid rgba(242,212,124,.23);
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 1.3px;
    text-transform: uppercase;
}

.ppid-standard-badge i {
    font-size: 13px;
}

.ppid-standard-hero h1 {
    margin: 0 0 14px;
    color: #fff;
    font-size: clamp(31px, 4vw, 48px);
    line-height: 1.12;
    font-weight: 700;
    letter-spacing: -.8px;
}

.ppid-standard-hero h1 span {
    color: #f2d47c;
}

.ppid-standard-hero p {
    margin: 0;
    max-width: 710px;
    color: rgba(255,255,255,.76);
    font-size: 14px;
    line-height: 1.85;
}

/* =========================================================
   MAIN GRID
========================================================= */

.ppid-standard-grid {
    display: grid;
    grid-template-columns: minmax(0, 1fr) 295px;
    gap: 30px;
    align-items: start;
}

.ppid-standard-main {
    min-width: 0;
}

.ppid-standard-card {
    padding: 32px;
    background: #fff;
    border: 1px solid rgba(3,40,29,.08);
    box-shadow: 0 12px 35px rgba(3,40,29,.07);
}

/* =========================================================
   INTRO
========================================================= */

.ppid-standard-intro {
    display: flex;
    align-items: flex-start;
    gap: 16px;
    padding: 20px;
    margin-bottom: 32px;
    background: linear-gradient(135deg, rgba(8,122,75,.055), rgba(213,168,58,.055));
    border-left: 4px solid #d5a83a;
}

.ppid-standard-intro-icon {
    flex: 0 0 42px;
    width: 42px;
    height: 42px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #063d2a;
    color: #f2d47c;
    font-size: 15px;
}

.ppid-standard-intro p {
    margin: 0;
    color: #56645d;
    font-size: 13px;
    line-height: 1.8;
}

/* =========================================================
   SECTION
========================================================= */

.ppid-standard-section {
    margin-top: 42px;
}

.ppid-standard-section:first-of-type {
    margin-top: 0;
}

.ppid-standard-section-title {
    display: flex;
    align-items: center;
    gap: 13px;
    padding-bottom: 14px;
    margin-bottom: 22px;
    border-bottom: 1px solid #e7ece9;
}

.ppid-standard-section-icon {
    flex: 0 0 42px;
    width: 42px;
    height: 42px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(135deg, #087a4b, #063d2a);
    color: #f2d47c;
    font-size: 16px;
    box-shadow: 0 7px 18px rgba(8,122,75,.14);
}

.ppid-standard-section-title h2 {
    margin: 0;
    color: #10251c;
    font-size: 23px;
    line-height: 1.25;
}

.ppid-standard-section-title span {
    display: block;
    margin-top: 3px;
    color: #83908a;
    font-size: 11px;
}

/* =========================================================
   REQUIREMENT CARDS
========================================================= */

.ppid-requirement-grid {
    display: grid;
    grid-template-columns: repeat(2, minmax(0, 1fr));
    gap: 18px;
}

.ppid-requirement-card {
    position: relative;
    padding: 22px;
    background: #f9fbfa;
    border: 1px solid #e4ebe7;
    transition: transform .3s ease, box-shadow .3s ease, border-color .3s ease;
}

.ppid-requirement-card:hover {
    transform: translateY(-4px);
    border-color: rgba(8,122,75,.22);
    box-shadow: 0 12px 28px rgba(3,40,29,.08);
}

.ppid-requirement-top {
    display: flex;
    align-items: center;
    gap: 12px;
    margin-bottom: 14px;
}

.ppid-requirement-icon {
    flex: 0 0 40px;
    width: 40px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #087a4b;
    background: rgba(8,122,75,.09);
    font-size: 15px;
}

.ppid-requirement-card h3 {
    margin: 0;
    color: #173126;
    font-size: 15px;
}

.ppid-requirement-card p {
    margin: 0;
    color: #66746d;
    font-size: 12.5px;
    line-height: 1.75;
}

.ppid-requirement-card strong {
    color: #087a4b;
}

/* =========================================================
   NUMBERED LIST
========================================================= */

.ppid-standard-list {
    display: flex;
    flex-direction: column;
    gap: 13px;
    margin: 0;
    padding: 0;
    list-style: none;
}

.ppid-standard-list li {
    display: flex;
    align-items: flex-start;
    gap: 13px;
    color: #52615a;
    font-size: 13px;
    line-height: 1.75;
}

.ppid-list-number {
    flex: 0 0 27px;
    width: 27px;
    height: 27px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-top: 1px;
    background: #063d2a;
    color: #f2d47c;
    font-size: 10px;
    font-weight: 700;
}

.ppid-standard-list li strong {
    color: #24382f;
}

/* =========================================================
   HOURS TABLE
========================================================= */

.ppid-hours-wrapper {
    overflow-x: auto;
    border: 1px solid #e1e8e4;
    background: #fff;
}

.ppid-hours-table {
    width: 100%;
    min-width: 520px;
    border-collapse: collapse;
}

.ppid-hours-table th {
    padding: 14px 16px;
    text-align: left;
    background: #063d2a;
    color: #fff;
    font-size: 12px;
    font-weight: 650;
}

.ppid-hours-table th:first-child {
    width: 48%;
}

.ppid-hours-table td {
    padding: 15px 16px;
    border-bottom: 1px solid #e9eeeb;
    color: #56645d;
    font-size: 12.5px;
}

.ppid-hours-table tr:last-child td {
    border-bottom: 0;
}

.ppid-hours-table tbody tr:hover {
    background: #f8fbf9;
}

.ppid-hours-table td:first-child {
    color: #20372c;
    font-weight: 600;
}

.ppid-time {
    display: inline-flex;
    align-items: center;
    gap: 7px;
    color: #087a4b;
    font-weight: 650;
}

.ppid-time i {
    color: #d5a83a;
    font-size: 11px;
}

/* =========================================================
   PROCEDURE STEPS
========================================================= */

.ppid-procedure {
    position: relative;
    display: flex;
    flex-direction: column;
    gap: 0;
}

.ppid-procedure::before {
    content: "";
    position: absolute;
    left: 19px;
    top: 22px;
    bottom: 22px;
    width: 1px;
    background: linear-gradient(to bottom, #087a4b, rgba(8,122,75,.12));
}

.ppid-step {
    position: relative;
    display: grid;
    grid-template-columns: 40px 1fr;
    gap: 16px;
    padding-bottom: 23px;
}

.ppid-step:last-child {
    padding-bottom: 0;
}

.ppid-step-number {
    position: relative;
    z-index: 2;
    width: 40px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #fff;
    border: 2px solid #087a4b;
    color: #087a4b;
    font-size: 12px;
    font-weight: 700;
    box-shadow: 0 4px 12px rgba(8,122,75,.10);
}

.ppid-step:last-child .ppid-step-number {
    border-color: #d5a83a;
    color: #9b7414;
}

.ppid-step-content {
    padding: 2px 0 4px;
}

.ppid-step-content h3 {
    margin: 0 0 5px;
    color: #183328;
    font-size: 14px;
}

.ppid-step-content p {
    margin: 0;
    color: #64716b;
    font-size: 12.5px;
    line-height: 1.75;
}

/* =========================================================
   DEADLINE HIGHLIGHT
========================================================= */

.ppid-deadline {
    display: grid;
    grid-template-columns: repeat(2, minmax(0, 1fr));
    gap: 15px;
    margin-bottom: 18px;
}

.ppid-deadline-card {
    position: relative;
    overflow: hidden;
    padding: 22px;
    background: linear-gradient(135deg, #063d2a, #087a4b);
    color: #fff;
}

.ppid-deadline-card.secondary {
    background: linear-gradient(135deg, #a47d1d, #d5a83a);
}

.ppid-deadline-card::after {
    content: "";
    position: absolute;
    width: 100px;
    height: 100px;
    border-radius: 50%;
    border: 1px solid rgba(255,255,255,.15);
    right: -35px;
    top: -45px;
}

.ppid-deadline-value {
    position: relative;
    z-index: 2;
    font-size: 34px;
    font-weight: 750;
    line-height: 1;
    margin-bottom: 8px;
}

.ppid-deadline-label {
    position: relative;
    z-index: 2;
    color: rgba(255,255,255,.76);
    font-size: 11px;
    line-height: 1.5;
}

.ppid-deadline-description {
    margin: 0;
    color: #66746d;
    font-size: 12.5px;
    line-height: 1.8;
}

/* =========================================================
   INFO BOX
========================================================= */

.ppid-info-box {
    display: flex;
    align-items: flex-start;
    gap: 15px;
    padding: 20px;
    border: 1px solid #e2e9e5;
    background: #f9fbfa;
    margin-top: 18px;
}

.ppid-info-box-icon {
    flex: 0 0 40px;
    width: 40px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #063d2a;
    color: #f2d47c;
}

.ppid-info-box h3 {
    margin: 0 0 5px;
    color: #183328;
    font-size: 14px;
}

.ppid-info-box p {
    margin: 0;
    color: #68756f;
    font-size: 12.5px;
    line-height: 1.75;
}

/* =========================================================
   GUARANTEE
========================================================= */

.ppid-guarantee-grid {
    display: grid;
    grid-template-columns: repeat(2, minmax(0, 1fr));
    gap: 16px;
}

.ppid-guarantee-card {
    display: flex;
    align-items: flex-start;
    gap: 13px;
    padding: 20px;
    background: #f9fbfa;
    border: 1px solid #e4ebe7;
    transition: transform .3s ease, border-color .3s ease, box-shadow .3s ease;
}

.ppid-guarantee-card:hover {
    transform: translateY(-3px);
    border-color: rgba(8,122,75,.2);
    box-shadow: 0 10px 24px rgba(3,40,29,.07);
}

.ppid-guarantee-icon {
    flex: 0 0 38px;
    width: 38px;
    height: 38px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: rgba(8,122,75,.09);
    color: #087a4b;
    font-size: 14px;
}

.ppid-guarantee-card p {
    margin: 0;
    color: #596760;
    font-size: 12.5px;
    line-height: 1.7;
}

/* =========================================================
   CONTACT BOX
========================================================= */

.ppid-contact-box {
    position: relative;
    overflow: hidden;
    margin-top: 35px;
    padding: 23px;
    background: linear-gradient(135deg, #03281d, #063d2a);
    color: #fff;
}

.ppid-contact-box::after {
    content: "";
    position: absolute;
    width: 170px;
    height: 170px;
    border: 1px solid rgba(242,212,124,.12);
    border-radius: 50%;
    right: -75px;
    top: -80px;
}

.ppid-contact-box h3 {
    position: relative;
    z-index: 2;
    margin: 0 0 7px;
    color: #f2d47c;
    font-size: 16px;
}

.ppid-contact-box p {
    position: relative;
    z-index: 2;
    margin: 0;
    color: rgba(255,255,255,.72);
    font-size: 12px;
    line-height: 1.75;
}

/* =========================================================
   SIDEBAR LINK TERKAIT
   DESAIN DISAMAKAN DENGAN KELENGKAPAN PPID
========================================================= */

.ppid-standard-related {
    position: sticky;
    top: 100px;
    min-width: 0;
    overflow: hidden;
    isolation: isolate;
    background: #ffffff;
    border: 1px solid #e1e9e4;
    border-radius: 10px;
    box-shadow: 0 8px 24px rgba(3,40,29,.07);
}

.ppid-standard-related-header {
    position: relative;
    isolation: isolate;
    overflow: hidden;
    padding: 22px 20px 19px;
    color: #ffffff;
    background: linear-gradient(125deg,#03281d 0%,#063d2a 55%,#087a4b 100%);
    border-bottom: 3px solid var(--ppid-gold);
}

.ppid-standard-related-header::before,
.ppid-standard-related-header::after {
    content: "";
    position: absolute;
    z-index: -1;
    border: 1px solid rgba(242,212,124,.15);
    border-radius: 50%;
    pointer-events: none;
}

.ppid-standard-related-header::before {
    width: 125px;
    height: 125px;
    top: -70px;
    right: -35px;
}

.ppid-standard-related-header::after {
    width: 75px;
    height: 75px;
    top: -35px;
    right: 20px;
    border-color: rgba(255,255,255,.12);
}

.ppid-standard-related-heading {
    position: relative;
    z-index: 1;
    display: block;
}

.ppid-standard-related-heading-icon {
    display: none;
}

.ppid-standard-related-header h3 {
    position: relative;
    z-index: 1;
    display: flex;
    align-items: center;
    gap: 10px;
    margin: 0 0 7px;
    color: #fff;
    font-size: 17px;
    font-weight: 700;
    letter-spacing: 0;
}

.ppid-standard-related-header h3::before {
    content: "\f0c1";
    font-family: "Font Awesome 6 Free";
    font-weight: 900;
    flex: 0 0 32px;
    width: 32px;
    height: 32px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    color: var(--ppid-gold-light);
    background: rgba(213,168,58,.13);
    border: 1px solid rgba(242,212,124,.3);
    font-size: 13px;
}

.ppid-standard-related-header p {
    position: relative;
    z-index: 1;
    margin: 0;
    padding-left: 42px;
    color: rgba(255,255,255,.78);
    font-size: 11px;
    line-height: 1.65;
}

.ppid-standard-related-list {
    padding: 8px;
}

.ppid-standard-related-link {
    position: relative;
    display: flex;
    align-items: center;
    gap: 11px;
    min-width: 0;
    min-height: 55px;
    padding: 9px 10px;
    margin-bottom: 3px;
    color: #35483d;
    text-decoration: none;
    background: transparent;
    border: 1px solid transparent;
    border-radius: 5px;
    transition: background .22s ease, border-color .22s ease, color .22s ease;
}

.ppid-standard-related-link:last-child {
    margin-bottom: 0;
}

.ppid-standard-related-link:hover {
    color: var(--ppid-green);
    background: #f5f9f6;
    border-color: #e5eee8;
}

.ppid-standard-related-link.active {
    color: var(--ppid-dark);
    background: #f0f7f2;
    border-color: #dcebe1;
}

.ppid-standard-related-link.active::before {
    content: "";
    position: absolute;
    top: 9px;
    bottom: 9px;
    left: -1px;
    width: 3px;
    background: var(--ppid-gold);
}

.ppid-standard-related-icon {
    flex: 0 0 34px;
    width: 34px;
    height: 34px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    color: var(--ppid-green);
    background: #f0f6f2;
    border: 1px solid #e3ece6;
    border-radius: 5px;
    font-size: 13px;
    transition: color .22s ease, background .22s ease, border-color .22s ease;
}

.ppid-standard-related-link:hover .ppid-standard-related-icon {
    color: #fff;
    background: var(--ppid-green);
    border-color: var(--ppid-green);
}

.ppid-standard-related-link.active .ppid-standard-related-icon {
    color: #946d12;
    background: #fff7df;
    border-color: #f0dfac;
}

.ppid-standard-related-text {
    flex: 1;
    min-width: 0;
    font-size: 12px;
    font-weight: 600;
    line-height: 1.5;
}

.ppid-standard-related-arrow {
    flex: 0 0 auto;
    color: #a6b4aa;
    font-size: 10px;
    transition: color .22s ease;
}

.ppid-standard-related-link:hover .ppid-standard-related-arrow {
    color: var(--ppid-green);
}

.ppid-standard-related-link.active .ppid-standard-related-arrow {
    color: #b58a25;
}

.ppid-standard-related-note {
    display: flex;
    align-items: flex-start;
    gap: 10px;
    margin: 0 12px 13px;
    padding: 13px;
    background: #f8faf8;
    border: 1px solid #e8eee9;
}

.ppid-standard-related-note i {
    margin-top: 2px;
    color: #b58a23;
    font-size: 13px;
}

.ppid-standard-related-note p {
    margin: 0;
    color: #718078;
    font-size: 10.5px;
    line-height: 1.7;
}

/* =========================================================
   REVEAL
========================================================= */

.ppid-standard-reveal {
    opacity: 0;
    transform: translateY(20px);
    transition: opacity .65s ease, transform .65s ease;
}

.ppid-standard-reveal.show {
    opacity: 1;
    transform: translateY(0);
}

/* =========================================================
   TABLET
========================================================= */

@media (max-width: 1050px) {
    .ppid-standard-container {
        width: 92%;
    }

    .ppid-standard-grid {
        grid-template-columns: minmax(0, 1fr) 270px;
        gap: 22px;
    }

    .ppid-standard-hero {
        padding: 45px 40px;
    }

    .ppid-standard-card {
        padding: 27px;
    }
}

/* =========================================================
   TABLET PORTRAIT
========================================================= */

@media (max-width: 850px) {
    .ppid-standard-page {
        padding: 50px 0 80px;
    }

    .ppid-standard-grid {
        grid-template-columns: minmax(0, 1fr);
        gap: 25px;
    }

    .ppid-standard-main {
        order: 1;
    }

    .ppid-standard-related {
        position: relative;
        top: auto;
        order: 2;
    }

    .ppid-standard-related-list {
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 4px;
    }

    .ppid-standard-related-link {
        min-width: 0;
        margin-bottom: 0;
    }

    .ppid-standard-related-note {
        margin-top: 5px;
    }
}

/* =========================================================
   MOBILE
========================================================= */

@media (max-width: 650px) {
    .ppid-standard-page {
        padding: 35px 0 65px;
    }

    .ppid-standard-container {
        width: 92%;
    }

    .ppid-standard-hero {
        min-height: auto;
        padding: 34px 25px;
        margin-bottom: 25px;
        border-radius: 14px;
    }

    .ppid-standard-badge {
        font-size: 9.5px;
        letter-spacing: .8px;
    }

    .ppid-standard-hero h1 {
        font-size: 30px;
    }

    .ppid-standard-hero p {
        font-size: 13px;
        line-height: 1.75;
    }

    .ppid-standard-card {
        padding: 21px;
    }

    .ppid-standard-section {
        margin-top: 35px;
    }

    .ppid-standard-section-title h2 {
        font-size: 20px;
    }

    .ppid-standard-section-title span {
        font-size: 10px;
    }

    .ppid-standard-intro {
        padding: 16px;
    }

    .ppid-standard-intro p {
        font-size: 12.5px;
    }

    .ppid-requirement-grid,
    .ppid-deadline,
    .ppid-guarantee-grid {
        grid-template-columns: minmax(0, 1fr);
    }

    .ppid-standard-related-list {
        display: block;
    }

    .ppid-standard-related-link {
        min-height: 53px;
        margin-bottom: 3px;
    }

    .ppid-standard-related-header {
        padding: 19px 17px;
    }

    .ppid-procedure::before {
        left: 17px;
    }

    .ppid-step {
        grid-template-columns: 36px 1fr;
        gap: 13px;
    }

    .ppid-step-number {
        width: 36px;
        height: 36px;
    }
}

/* =========================================================
   SMALL MOBILE
========================================================= */

@media (max-width: 420px) {
    .ppid-standard-container {
        width: 94%;
    }

    .ppid-standard-hero {
        padding: 28px 20px;
    }

    .ppid-standard-hero h1 {
        font-size: 27px;
    }

    .ppid-standard-card {
        padding: 17px;
    }

    .ppid-standard-section-title {
        gap: 10px;
    }

    .ppid-standard-section-icon {
        flex-basis: 38px;
        width: 38px;
        height: 38px;
    }

    .ppid-standard-section-title h2 {
        font-size: 19px;
    }

    .ppid-requirement-card {
        padding: 18px;
    }

    .ppid-deadline-card {
        padding: 19px;
    }

    .ppid-deadline-value {
        font-size: 30px;
    }
}

/* =========================================================
   REDUCED MOTION
========================================================= */

@media (prefers-reduced-motion: reduce) {
    .ppid-standard-reveal,
    .ppid-standard-related-link,
    .ppid-standard-related-icon,
    .ppid-standard-related-arrow,
    .ppid-requirement-card,
    .ppid-guarantee-card {
        transition: none !important;
        transform: none !important;
    }

    .ppid-standard-reveal {
        opacity: 1;
    }
}
</style>

<div class="ppid-standard-page">
    <div class="ppid-standard-container">

        {{-- HERO --}}
        <section class="ppid-standard-hero ppid-standard-reveal">
            <div class="ppid-standard-hero-content">
                <div class="ppid-standard-badge">
                    <i class="fa-solid fa-clipboard-check"></i>
                    Pelayanan Informasi Publik
                </div>

                <h1>
                    Standar Pelayanan <span>Publik</span>
                </h1>

                <p>
                    Pedoman pelayanan informasi publik bagi pemohon untuk
                    memperoleh informasi maupun menyampaikan pengaduan melalui
                    layanan PPID PT. Jamkrida NTB Syariah.
                </p>
            </div>
        </section>

        {{-- MAIN GRID --}}
        <div class="ppid-standard-grid">

            {{-- MAIN CONTENT --}}
            <main class="ppid-standard-main">
                <div class="ppid-standard-card ppid-standard-reveal">

                    {{-- INTRO --}}
                    <div class="ppid-standard-intro">
                        <div class="ppid-standard-intro-icon">
                            <i class="fa-solid fa-circle-info"></i>
                        </div>

                        <p>
                            Untuk memenuhi dan melayani permintaan dan kebutuhan
                            dari pemohon, Pejabat Pengelola Informasi dan
                            Dokumentasi melakukan layanan langsung dan layanan
                            melalui media lainnya melalui telepon/fax.
                            Email:
                            <strong>info@jamkridantb.com</strong>
                            atau melalui website
                            <strong>jamkridantbsyariah.co.id</strong>.
                        </p>
                    </div>

                    {{-- PERSYARATAN --}}
                    <section class="ppid-standard-section ppid-standard-reveal">
                        <div class="ppid-standard-section-title">
                            <div class="ppid-standard-section-icon">
                                <i class="fa-solid fa-id-card"></i>
                            </div>
                            <div>
                                <h2>Persyaratan Pemohon</h2>
                                <span>Identitas dan formulir permohonan informasi</span>
                            </div>
                        </div>

                        <div class="ppid-requirement-grid">
                            <div class="ppid-requirement-card">
                                <div class="ppid-requirement-top">
                                    <div class="ppid-requirement-icon">
                                        <i class="fa-solid fa-user"></i>
                                    </div>
                                    <h3>Pemohon Perorangan</h3>
                                </div>
                                <p>
                                    Perorangan wajib menunjukkan identitas resmi
                                    berupa <strong>KTP, SIM, atau Paspor</strong>.
                                </p>
                            </div>

                            <div class="ppid-requirement-card">
                                <div class="ppid-requirement-top">
                                    <div class="ppid-requirement-icon">
                                        <i class="fa-solid fa-building"></i>
                                    </div>
                                    <h3>Badan Hukum / Publik</h3>
                                </div>
                                <p>
                                    Badan Hukum dan/atau Badan Publik wajib
                                    menunjukkan <strong>Akta Notaris</strong> dan dokumen
                                    pengesahan badan hukum dan/atau badan publik.
                                </p>
                            </div>
                        </div>

                        <div class="ppid-info-box">
                            <div class="ppid-info-box-icon">
                                <i class="fa-solid fa-file-pen"></i>
                            </div>
                            <div>
                                <h3>Formulir Permohonan Informasi</h3>
                                <p>
                                    Pemohon wajib mengisi formulir permohonan
                                    informasi. Formulir dapat diperoleh melalui
                                    halaman website atau dapat dikirimkan melalui
                                    pos ke alamat sekretariat:
                                    <strong>
                                        Jamkrida NTB, Jln. Catur Warga No.05,
                                        Mataram, Nusa Tenggara Barat.
                                    </strong>
                                </p>
                            </div>
                        </div>
                    </section>

                    {{-- WAKTU PELAYANAN --}}
                    <section class="ppid-standard-section ppid-standard-reveal">
                        <div class="ppid-standard-section-title">
                            <div class="ppid-standard-section-icon">
                                <i class="fa-solid fa-clock"></i>
                            </div>
                            <div>
                                <h2>Waktu Pelayanan</h2>
                                <span>Jadwal layanan informasi publik</span>
                            </div>
                        </div>

                        <div class="ppid-hours-wrapper">
                            <table class="ppid-hours-table">
                                <thead>
                                    <tr>
                                        <th>Hari / Keterangan</th>
                                        <th>Waktu</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Senin s/d Kamis</td>
                                        <td>
                                            <span class="ppid-time">
                                                <i class="fa-regular fa-clock"></i>
                                                09.00 - 15.00 WITA
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Istirahat</td>
                                        <td>
                                            <span class="ppid-time">
                                                <i class="fa-regular fa-clock"></i>
                                                12.00 - 13.30 WITA
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Jumat</td>
                                        <td>
                                            <span class="ppid-time">
                                                <i class="fa-regular fa-clock"></i>
                                                09.00 - 15.00 WITA
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Sholat / Istirahat</td>
                                        <td>
                                            <span class="ppid-time">
                                                <i class="fa-regular fa-clock"></i>
                                                11.30 - 13.30 WITA
                                            </span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </section>

                    {{-- PROSEDUR --}}
                    <section class="ppid-standard-section ppid-standard-reveal">
                        <div class="ppid-standard-section-title">
                            <div class="ppid-standard-section-icon">
                                <i class="fa-solid fa-list-check"></i>
                            </div>
                            <div>
                                <h2>Prosedur Pelayanan Informasi</h2>
                                <span>Tahapan permohonan informasi dan pengaduan</span>
                            </div>
                        </div>

                        <div class="ppid-procedure">
                            <div class="ppid-step">
                                <div class="ppid-step-number">01</div>
                                <div class="ppid-step-content">
                                    <h3>Mengajukan Permohonan</h3>
                                    <p>
                                        Pemohon mengajukan permintaan informasi
                                        atau menyampaikan pengaduan dengan cara
                                        datang langsung, melalui telepon,
                                        faksimile, halaman website, atau surat
                                        resmi.
                                    </p>
                                </div>
                            </div>

                            <div class="ppid-step">
                                <div class="ppid-step-number">02</div>
                                <div class="ppid-step-content">
                                    <h3>Mengisi Formulir</h3>
                                    <p>
                                        Pemohon yang datang langsung dan melalui
                                        laman mengisi Formulir Permintaan
                                        Informasi atau Formulir Pengaduan.
                                        Khusus pemohon melalui telepon, data diri
                                        dapat diisi oleh Petugas Pelayanan
                                        Informasi Publik.
                                    </p>
                                </div>
                            </div>

                            <div class="ppid-step">
                                <div class="ppid-step-number">03</div>
                                <div class="ppid-step-content">
                                    <h3>Bukti Permintaan Informasi</h3>
                                    <p>
                                        Petugas memberikan tanda bukti
                                        permintaan informasi publik kepada
                                        pemohon.
                                    </p>
                                </div>
                            </div>

                            <div class="ppid-step">
                                <div class="ppid-step-number">04</div>
                                <div class="ppid-step-content">
                                    <h3>Penyampaian Informasi</h3>
                                    <p>
                                        Tim Sekretariat menyampaikan informasi
                                        atau jawaban/tanggapan kepada pemohon.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </section>

                    {{-- JANGKA WAKTU --}}
                    <section class="ppid-standard-section ppid-standard-reveal">
                        <div class="ppid-standard-section-title">
                            <div class="ppid-standard-section-icon">
                                <i class="fa-solid fa-calendar-check"></i>
                            </div>
                            <div>
                                <h2>Jangka Waktu Penyelesaian</h2>
                                <span>Ketentuan waktu pelayanan informasi</span>
                            </div>
                        </div>

                        <div class="ppid-deadline">
                            <div class="ppid-deadline-card">
                                <div class="ppid-deadline-value">10</div>
                                <div class="ppid-deadline-label">
                                    Hari kerja sejak diterimanya permintaan
                                </div>
                            </div>

                            <div class="ppid-deadline-card secondary">
                                <div class="ppid-deadline-value">+7</div>
                                <div class="ppid-deadline-label">
                                    Hari kerja apabila diperlukan perpanjangan
                                </div>
                            </div>
                        </div>

                        <p class="ppid-deadline-description">
                            Waktu penyelesaian dilaksanakan paling lambat
                            <strong>10 (sepuluh) hari kerja</strong> sejak
                            diterimanya permintaan. PPID akan menyampaikan
                            pemberitahuan yang berisikan informasi yang diminta
                            berada di bawah penguasaannya atau tidak, dan dapat
                            diperpanjang paling lambat
                            <strong>7 (tujuh) hari kerja</strong> sesuai dengan
                            UU No. 14 Tahun 2008 tentang Keterbukaan Informasi
                            Publik.
                        </p>
                    </section>

                    {{-- BIAYA --}}
                    <section class="ppid-standard-section ppid-standard-reveal">
                        <div class="ppid-standard-section-title">
                            <div class="ppid-standard-section-icon">
                                <i class="fa-solid fa-wallet"></i>
                            </div>
                            <div>
                                <h2>Biaya</h2>
                                <span>Ketentuan biaya pelayanan informasi</span>
                            </div>
                        </div>

                        <div class="ppid-info-box">
                            <div class="ppid-info-box-icon">
                                <i class="fa-solid fa-gift"></i>
                            </div>
                            <div>
                                <h3>Informasi Publik Gratis</h3>
                                <p>
                                    PPID menyediakan informasi publik secara
                                    <strong>gratis atau tidak dipungut biaya</strong>.
                                    Namun, apabila terdapat kegiatan penggandaan
                                    informasi, biaya yang timbul dibebankan
                                    kepada pemohon informasi.
                                </p>
                            </div>
                        </div>
                    </section>

                    {{-- JAMINAN --}}
                    <section class="ppid-standard-section ppid-standard-reveal">
                        <div class="ppid-standard-section-title">
                            <div class="ppid-standard-section-icon">
                                <i class="fa-solid fa-shield-halved"></i>
                            </div>
                            <div>
                                <h2>Jaminan Pelayanan &amp; Keamanan</h2>
                                <span>Komitmen dalam penyampaian informasi</span>
                            </div>
                        </div>

                        <div class="ppid-guarantee-grid">
                            <div class="ppid-guarantee-card">
                                <div class="ppid-guarantee-icon">
                                    <i class="fa-solid fa-circle-check"></i>
                                </div>
                                <p>
                                    Informasi yang diberikan dijamin
                                    keabsahannya dan dapat
                                    dipertanggungjawabkan.
                                </p>
                            </div>

                            <div class="ppid-guarantee-card">
                                <div class="ppid-guarantee-icon">
                                    <i class="fa-solid fa-user-shield"></i>
                                </div>
                                <p>
                                    Petugas yang memberikan informasi telah
                                    mendapatkan penugasan dari atasan langsung.
                                </p>
                            </div>
                        </div>
                    </section>

                    {{-- CONTACT --}}
                    <div class="ppid-contact-box ppid-standard-reveal">
                        <h3>
                            <i class="fa-solid fa-headset"></i>
                            Layanan Informasi Publik
                        </h3>
                        <p>
                            Pemohon dapat menggunakan saluran pelayanan yang
                            tersedia untuk memperoleh informasi atau
                            menyampaikan pengaduan sesuai dengan ketentuan
                            pelayanan informasi publik.
                        </p>
                    </div>

                </div>
            </main>

            {{-- SIDEBAR LINK TERKAIT --}}
            <aside class="ppid-standard-related ppid-standard-reveal"
                   aria-label="Navigasi halaman PPID">

                <div class="ppid-standard-related-header">
                    <div class="ppid-standard-related-heading">
                        <div class="ppid-standard-related-heading-icon">
                            <i class="fa-solid fa-link"></i>
                        </div>
                        <div>
                            <h3>Link Terkait</h3>
                            <p>Jelajahi informasi PPID lainnya</p>
                        </div>
                    </div>
                </div>

                <nav class="ppid-standard-related-list">

                    <a href="{{ url('/menu/ppid/tentang_ppid') }}"
                       class="ppid-standard-related-link">
                        <span class="ppid-standard-related-icon">
                            <i class="fa-solid fa-circle-info"></i>
                        </span>
                        <span class="ppid-standard-related-text">Tentang PPID</span>
                        <span class="ppid-standard-related-arrow">
                            <i class="fa-solid fa-chevron-right"></i>
                        </span>
                    </a>

                    <a href="{{ url('/menu/ppid/kelengkapan_ppid') }}"
                       class="ppid-standard-related-link">
                        <span class="ppid-standard-related-icon">
                            <i class="fa-solid fa-building"></i>
                        </span>
                        <span class="ppid-standard-related-text">Kelengkapan PPID</span>
                        <span class="ppid-standard-related-arrow">
                            <i class="fa-solid fa-chevron-right"></i>
                        </span>
                    </a>

                    <a href="{{ url('/menu/ppid/standar_pelayanan') }}"
                       class="ppid-standard-related-link active"
                       aria-current="page">
                        <span class="ppid-standard-related-icon">
                            <i class="fa-solid fa-clipboard-check"></i>
                        </span>
                        <span class="ppid-standard-related-text">Standar Pelayanan</span>
                        <span class="ppid-standard-related-arrow">
                            <i class="fa-solid fa-chevron-right"></i>
                        </span>
                    </a>

                    <a href="{{ url('/menu/ppid/ebulletin') }}"
                       class="ppid-standard-related-link">
                        <span class="ppid-standard-related-icon">
                            <i class="fa-solid fa-newspaper"></i>
                        </span>
                        <span class="ppid-standard-related-text">eBulletin</span>
                        <span class="ppid-standard-related-arrow">
                            <i class="fa-solid fa-chevron-right"></i>
                        </span>
                    </a>

                    <a href="{{ url('/menu/ppid/layanan') }}"
                       class="ppid-standard-related-link">
                        <span class="ppid-standard-related-icon">
                            <i class="fa-solid fa-headset"></i>
                        </span>
                        <span class="ppid-standard-related-text">Layanan Pusat Informasi</span>
                        <span class="ppid-standard-related-arrow">
                            <i class="fa-solid fa-chevron-right"></i>
                        </span>
                    </a>

                    <a href="{{ url('/menu/ppid/rancangan_peraturan') }}"
                       class="ppid-standard-related-link">
                        <span class="ppid-standard-related-icon">
                            <i class="fa-solid fa-file-contract"></i>
                        </span>
                        <span class="ppid-standard-related-text">Rancangan Peraturan</span>
                        <span class="ppid-standard-related-arrow">
                            <i class="fa-solid fa-chevron-right"></i>
                        </span>
                    </a>

                    <a href="{{ url('/menu/ppid/pos_pelayanan') }}"
                       class="ppid-standard-related-link">
                        <span class="ppid-standard-related-icon">
                            <i class="fa-solid fa-location-dot"></i>
                        </span>
                        <span class="ppid-standard-related-text">Pos Pelayanan Informasi Publik</span>
                        <span class="ppid-standard-related-arrow">
                            <i class="fa-solid fa-chevron-right"></i>
                        </span>
                    </a>

                </nav>

                <div class="ppid-standard-related-note">
                    <i class="fa-solid fa-shield-halved"></i>
                    <p>
                        Informasi PPID disediakan untuk mendukung keterbukaan
                        informasi dan kemudahan akses bagi masyarakat.
                    </p>
                </div>
            </aside>

        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const elements = document.querySelectorAll('.ppid-standard-reveal');

    if (!('IntersectionObserver' in window)) {
        elements.forEach(function (element) {
            element.classList.add('show');
        });
        return;
    }

    const observer = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
            if (entry.isIntersecting) {
                entry.target.classList.add('show');
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.08
    });

    elements.forEach(function (element) {
        observer.observe(element);
    });
});
</script>

@endsection