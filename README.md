# Website PT Jamkrida NTB Syariah

Website company profile dan sistem administrasi PT Jamkrida NTB Syariah (Perseroda), dibangun menggunakan Laravel.

## Fitur Proyek

- Website company profile perusahaan.
- Halaman profil, produk, manajemen, dan laporan.
- Sistem administrasi melalui dashboard.
- Pengelolaan informasi dan konten website.
- Modul karir dan lowongan pekerjaan.
- Sistem pengaduan dan pengelolaan laporan pengaduan.
- Pengelolaan mitra dan informasi perusahaan.

*Catatan: daftar fitur perlu disesuaikan dengan modul yang sudah tersedia dan berfungsi pada versi proyek saat ini.*

## Teknologi

- Laravel dan PHP
- MySQL / MariaDB
- HTML, CSS, dan JavaScript
- Composer
- Node.js dan NPM

## Persyaratan Instalasi

Pastikan komputer sudah memiliki:
- PHP dengan versi yang sesuai dengan proyek.
- Composer.
- MySQL atau MariaDB.
- Node.js dan NPM.

## Cara Menjalankan Proyek

### 1. Clone repositori

```bash
git clone https://github.com/Muhammadsabhanhadi/Web-Jamkrida.git
cd Web-Jamkrida
```

### 2. Instal dependensi Laravel

```bash
composer install
```

### 3. Buat file konfigurasi

Salin `.env.example` menjadi `.env`, lalu sesuaikan konfigurasi database.

Contoh konfigurasi:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=jamkrida
DB_USERNAME=root
DB_PASSWORD=
```

Sesuaikan username dan password dengan konfigurasi MySQL lokal.

### 4. Buat application key

```bash
php artisan key:generate
```

### 5. Siapkan database

Buat database bernama `jamkrida` melalui phpMyAdmin.

Periksa file SQL yang tersedia di `database/exports/`. Impor struktur database jika diperlukan. Pastikan file SQL yang digunakan memang sesuai dengan skema proyek.

### 6. Instal dependensi frontend

```bash
npm install
npm run build
```

### 7. Jalankan website

```bash
php artisan serve
```

Buka alamat berikut di browser:

http://127.0.0.1:8000

## Catatan Keamanan

- Jangan mengunggah file `.env` ke repositori publik.
- Jangan mengunggah kata sandi, token, atau kredensial rahasia.
- Jangan memasukkan data pribadi nasabah dan pengaduan ke repositori.
- Periksa migrasi, konfigurasi, dan file SQL sebelum menjalankan proyek pada lingkungan baru.

## Repositori

GitHub: https://github.com/Muhammadsabhanhadi/Web-Jamkrida.git
