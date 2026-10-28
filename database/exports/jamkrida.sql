-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 28, 2026 at 11:31 AM
-- Server version: 8.4.3
-- PHP Version: 8.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jamkrida`
--

-- --------------------------------------------------------

--
-- Table structure for table `audits`
--

CREATE TABLE `audits` (
  `id` bigint UNSIGNED NOT NULL,
  `nama_auditor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun` year NOT NULL,
  `predikat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `audits`
--

INSERT INTO `audits` (`id`, `nama_auditor`, `tahun`, `predikat`, `created_at`, `updated_at`) VALUES
(4, 'Alamsyah M. Tahir', '2015', 'Wajar (WTP)', '2026-10-11 19:18:21', '2026-10-11 19:18:21'),
(5, 'Drs. I Wayan Dhana', '2016', 'Wajar (WTP)', '2026-10-11 19:18:56', '2026-10-11 19:18:56'),
(6, 'Alamsyah M. Tahir', '2017', 'Wajar (WTP)', '2026-10-11 19:19:38', '2026-10-11 19:19:38'),
(7, 'Drs. I Wayan Dhana', '2018', 'Wajar (WTP)', '2026-10-11 19:19:54', '2026-10-11 19:19:54'),
(8, 'Drs. I Wayan Dhana', '2019', 'Wajar (WTP)', '2026-10-11 19:20:10', '2026-10-11 19:20:10'),
(9, 'Drs. I Wayan Dhana', '2020', 'Wajar (WTP)', '2026-10-11 19:20:27', '2026-10-11 19:20:27'),
(10, 'Agung Dwi Purnomo', '2021', 'Wajar (WTP)', '2026-10-11 19:20:51', '2026-10-11 19:20:51'),
(11, 'Budiandru dan Rekan', '2022', 'Wajar (WTP)', '2026-10-11 19:21:11', '2026-10-11 19:21:11'),
(12, 'Dwi Haryadi Nugraha', '2023', 'Wajar (WTP)', '2026-10-11 19:21:34', '2026-10-11 19:21:34'),
(13, 'Dwi Haryadi Nugraha', '2024', 'Wajar (WTP)', '2026-10-11 19:21:53', '2026-10-11 19:21:53'),
(14, 'Dwi Haryadi Nugraha', '2025', 'Wajar (WTP)', '2026-10-11 19:22:12', '2026-10-11 19:22:12');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` bigint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` bigint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `daftar_agen`
--

CREATE TABLE `daftar_agen` (
  `id` bigint UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `daftar_agen`
--

INSERT INTO `daftar_agen` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(4, 'Hayana', '2026-10-11 19:34:49', '2026-10-11 19:34:49'),
(5, 'Khaerunnas', '2026-10-11 19:35:03', '2026-10-11 19:35:03'),
(6, 'M. Farun', '2026-10-11 19:35:14', '2026-10-11 19:35:14'),
(7, 'Yudiansyah', '2026-10-11 19:35:29', '2026-10-11 19:35:29'),
(8, 'Wulan Sugiantari', '2026-10-11 19:35:46', '2026-10-11 19:35:46'),
(9, 'Adi Ihlasmana', '2026-10-11 19:36:07', '2026-10-11 19:36:07'),
(10, 'Lalu Suherman Hadi', '2026-10-11 19:36:23', '2026-10-11 19:36:23');

-- --------------------------------------------------------

--
-- Table structure for table `digitalisasis`
--

CREATE TABLE `digitalisasis` (
  `id` bigint UNSIGNED NOT NULL,
  `jenis` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'program',
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `teks_tombol` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_tombol` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tahapan` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tahun` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ikon` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `urutan` int UNSIGNED NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `digitalisasis`
--

INSERT INTO `digitalisasis` (`id`, `jenis`, `judul`, `deskripsi`, `gambar`, `teks_tombol`, `link_tombol`, `tahapan`, `tahun`, `ikon`, `urutan`, `status`, `created_at`, `updated_at`) VALUES
(1, 'jumbotron', 'Rencana Kedepan', 'Di era akselerasi teknologi, PT Jamkrida NTB Syariah berkomitmen menghadirkan layanan yang lebih cepat, transparan, dan akuntabel melalui inisiatif transformasi digital menyeluruh.', 'digitalisasi/XQdwIuxLAyKzdNhI3XVJjvI62JR57lgpkQpmiGBo.png', 'lihat dia', 'ape nee', NULL, NULL, NULL, 0, 0, '2026-10-27 17:55:17', '2026-10-27 18:58:56'),
(2, 'program', 'APLIKASI HOST TO HOST', 'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA', 'digitalisasi/4ykvUUo2t3drsVFUywdHCbjY8GaUYUqe4b9nzqLc.jpg', NULL, NULL, 'Sedang Dalam Proses', '2026', 'fas fa-mobile-screen', 0, 1, '2026-10-27 18:05:14', '2026-10-27 18:05:14'),
(3, 'program', 'Penjaminan Pembiayaan & Surety Bond via Website Layanan Penjaminan via host to host ke system mitra Proses Surat Keluar dan Masuk (Arsip Digital) Proses Operasional Paperless (Arsip Digital) Absensi pegawai Mobile Talenta Sertifikat Digital Signature', 'Penjaminan Pembiayaan & Surety Bond via Website\r\nLayanan Penjaminan via host to host ke system mitra\r\nProses Surat Keluar dan Masuk (Arsip Digital)\r\nProses Operasional Paperless (Arsip Digital)\r\nAbsensi pegawai Mobile Talenta\r\nSertifikat Digital Signature', NULL, NULL, NULL, 'Sudah Berjalan', NULL, 'fas fa-laptop-code', 0, 1, '2026-10-27 18:07:31', '2026-10-27 18:07:31');

-- --------------------------------------------------------

--
-- Table structure for table `e_bulletins`
--

CREATE TABLE `e_bulletins` (
  `id` bigint UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci,
  `cover` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_pdf` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `form_pengaduan`
--

CREATE TABLE `form_pengaduan` (
  `id` bigint UNSIGNED NOT NULL,
  `ticket_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chronology` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `attachment_path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `privacy_consent` tinyint(1) NOT NULL DEFAULT '0',
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Baru Masuk',
  `assigned_to` bigint UNSIGNED DEFAULT NULL,
  `admin_notes` text COLLATE utf8mb4_unicode_ci,
  `resolution` text COLLATE utf8mb4_unicode_ci,
  `resolved_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `form_pengaduan`
--

INSERT INTO `form_pengaduan` (`id`, `ticket_number`, `name`, `contact`, `email`, `category`, `subject`, `chronology`, `attachment_path`, `privacy_consent`, `status`, `assigned_to`, `admin_notes`, `resolution`, `resolved_at`, `created_at`, `updated_at`) VALUES
(7, 'ADU-20261023-HBROWI', 'Muhammad Subhan Hadi UIN Mataram', '087752649576', '230502108.mhs@uinmataram.ac.id', 'Pelanggaran Prosedur', 'Dugaan Penyimpangan Prosedur', 'Pada saat proses pelayanan dan pelaksanaan prosedur di lingkungan perusahaan, saya menemukan adanya dugaan ketidaksesuaian antara tahapan yang dilaksanakan dengan prosedur yang seharusnya berlaku. Kondisi tersebut menimbulkan pertanyaan mengenai kesesuaian pelaksanaan prosedur dan transparansi proses pelayanan.\r\n\r\nSaya menyampaikan pengaduan ini agar dilakukan pemeriksaan dan penelusuran lebih lanjut terhadap proses yang dimaksud. Saya berharap pihak perusahaan dapat melakukan verifikasi berdasarkan dokumen dan bukti yang tersedia, serta mengambil tindakan yang diperlukan apabila ditemukan pelanggaran prosedur.\r\n\r\nDemikian pengaduan ini saya sampaikan agar dapat ditindaklanjuti secara objektif, profesional, dan sesuai dengan ketentuan yang berlaku.', 'pengaduan/TbVhzDPiuUGzMPNdDj1WSerlpHAJUsbJi8Vndogh.jpg', 1, 'Menunggu', NULL, NULL, NULL, NULL, '2026-10-23 15:28:49', '2026-10-23 15:34:29');

-- --------------------------------------------------------

--
-- Table structure for table `gcgs`
--

CREATE TABLE `gcgs` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `karir`
--

CREATE TABLE `karir` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `employment_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vacancy_count` int UNSIGNED NOT NULL DEFAULT '1',
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `responsibilities` longtext COLLATE utf8mb4_unicode_ci,
  `qualifications` longtext COLLATE utf8mb4_unicode_ci,
  `required_documents` longtext COLLATE utf8mb4_unicode_ci,
  `banner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `announcement_pdf` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `application_method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'external',
  `application_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `application_url` text COLLATE utf8mb4_unicode_ci,
  `application_instructions` longtext COLLATE utf8mb4_unicode_ci,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'draft',
  `published_at` date DEFAULT NULL,
  `deadline` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `karir`
--

INSERT INTO `karir` (`id`, `title`, `slug`, `department`, `location`, `employment_type`, `vacancy_count`, `description`, `responsibilities`, `qualifications`, `required_documents`, `banner`, `announcement_pdf`, `application_method`, `application_email`, `application_url`, `application_instructions`, `status`, `published_at`, `deadline`, `created_at`, `updated_at`) VALUES
(6, 'Staf Security', 'staf-security', 'SDI UMUM', 'NTB', 'Full-time', 3, NULL, NULL, NULL, NULL, 'karir/banner/cjYjw19GQeI5bGVRKxq9gQEiIYLDvDxP7K3Q7QcJ.png', 'karir/pengumuman/uaIXqAyli1bHs6cHeYepxQFmTYRrLOCJwy0TJ9k8.pdf', 'external', 'admin@jamkridantbsyariah.co.id', 'https://jamkridantbsyariah.co.id', '**Kualifikasi Umum:**\r\n\r\n1. Warga Negara Indonesia (WNI).\r\n2. Pendidikan minimal SMA/SMK atau sederajat.\r\n3. Usia minimal 18 tahun, dengan batas usia maksimal menyesuaikan kebijakan perusahaan.\r\n4. Sehat jasmani dan rohani.\r\n5. Memiliki SKCK yang masih berlaku.\r\n6. Memiliki Kartu Tanda Anggota (KTA) Satpam yang masih berlaku, sesuai ketentuan yang berlaku.\r\n7. Memiliki sertifikat pelatihan Satpam yang dipersyaratkan.\r\n8. Berkelakuan baik, jujur, disiplin, tegas, dan bertanggung jawab.\r\n9. Memiliki kemampuan komunikasi yang baik serta mampu bekerja sama dalam tim.\r\n10. Berpenampilan rapi, sopan, dan memiliki sikap profesional.\r\n11. Mampu bekerja dengan sistem shift apabila diperlukan.\r\n12. Tidak pernah terlibat dalam tindak kriminal.\r\n\r\n**Persyaratan Administrasi:**\r\n\r\n1. Surat lamaran kerja.\r\n2. Daftar riwayat hidup (CV).\r\n3. Fotokopi KTP.\r\n4. Fotokopi ijazah terakhir.\r\n5. Fotokopi SKCK yang masih berlaku.\r\n6. Fotokopi sertifikat pelatihan Satpam dan KTA Satpam, jika dipersyaratkan.\r\n7. Surat keterangan sehat dari fasilitas pelayanan kesehatan.\r\n8. Pasfoto terbaru.\r\n9. Dokumen pendukung lainnya sesuai ketentuan perusahaan.\r\n\r\n**Tugas dan Tanggung Jawab:**\r\n\r\n1. Menjaga keamanan dan ketertiban lingkungan perusahaan.\r\n2. Melakukan pengawasan terhadap keluar-masuk tamu, karyawan, dan kendaraan.\r\n3. Melaksanakan pemeriksaan sesuai prosedur keamanan perusahaan.\r\n4. Melakukan patroli rutin di area kerja.\r\n5. Mencatat kunjungan tamu dan membuat laporan kejadian.\r\n6. Menangani situasi darurat sesuai prosedur serta berkoordinasi dengan pihak terkait.\r\n7. Menjaga fasilitas, aset, dan inventaris perusahaan.\r\n8. Memberikan pelayanan yang sopan dan profesional kepada tamu serta karyawan.', 'published', '2026-10-25', '2026-10-30', '2026-10-25 17:42:01', '2026-10-25 19:31:53'),
(7, 'Staf Administrasi', 'staf-administrasi', 'PENJAMINAN DAN PEMASARAN', NULL, 'Full-time', 1, NULL, NULL, NULL, NULL, 'karir/banner/fsXAatsjjLLFDqWj7iDWOvn8fmHIBgm7eRhhCsx9.png', 'karir/pengumuman/sJTjtzUahOMjcMU4hmZ3ceAYhUSaA1DSonUhRbVy.pdf', 'external', 'admin@jamkridantbsyariah.co.id', NULL, '### A. PERSYARATAN UMUM\r\n\r\n1. Warga Negara Indonesia (WNI).\r\n2. Pendidikan minimal D3/S1, diutamakan jurusan Administrasi, Manajemen, Akuntansi, Ekonomi, atau bidang terkait.\r\n3. Usia minimal 20 tahun, dengan batas usia maksimal menyesuaikan kebijakan perusahaan.\r\n4. Sehat jasmani dan rohani.\r\n5. Berkelakuan baik, jujur, disiplin, teliti, dan bertanggung jawab.\r\n6. Mampu bekerja secara mandiri maupun dalam tim.\r\n7. Memiliki kemampuan komunikasi dan pengarsipan dokumen yang baik.\r\n8. Menguasai Microsoft Office, terutama Microsoft Word, Excel, dan PowerPoint.\r\n9. Diutamakan memiliki pengalaman di bidang administrasi; lulusan baru dapat dipertimbangkan sesuai kebutuhan perusahaan.\r\n\r\n### B. PERSYARATAN ADMINISTRASI\r\n\r\n1. Surat lamaran kerja.\r\n2. Daftar riwayat hidup (CV).\r\n3. Fotokopi KTP.\r\n4. Fotokopi ijazah terakhir.\r\n5. Fotokopi transkrip nilai.\r\n6. Pasfoto terbaru.\r\n7. Surat keterangan sehat dari fasilitas pelayanan kesehatan.\r\n8. SKCK yang masih berlaku apabila dipersyaratkan.\r\n9. Sertifikat keahlian atau dokumen pendukung lainnya, jika ada.\r\n\r\n### C. TUGAS DAN TANGGUNG JAWAB\r\n\r\n1. Mengelola, menyusun, dan mengarsipkan dokumen administrasi perusahaan.\r\n2. Membantu proses surat-menyurat, pencatatan, dan pengelolaan data.\r\n3. Melakukan input, pembaruan, dan rekapitulasi data menggunakan aplikasi yang digunakan perusahaan.\r\n4. Menyiapkan laporan administrasi secara berkala.\r\n5. Memberikan dukungan administratif kepada unit kerja terkait.\r\n6. Menjaga kerahasiaan data dan dokumen perusahaan.\r\n7. Melaksanakan tugas lainnya sesuai arahan atasan.\r\n\r\n### D. TATA CARA MELAMAR\r\n\r\nBerkas lamaran dikirimkan melalui:\r\n\r\nEmail: [Alamat email resmi rekrutmen]\r\n\r\nSubjek email: **Lamaran Staf Administrasi – Nama Pelamar**\r\n\r\nAlamat kantor: [Alamat penerimaan berkas]\r\n\r\nBatas akhir pengiriman lamaran: **[Tanggal penutupan]**\r\n\r\nInformasi lebih lanjut mengenai tahapan seleksi akan disampaikan melalui kanal resmi perusahaan.\r\n\r\n**PT Jamkrida NTB Syariah (Perseroda)**\r\n\r\n*Profesional • Amanah • Sinergi • Inovatif*', 'archived', '2026-10-26', '2026-10-29', '2026-10-25 19:37:45', '2026-10-25 19:49:32');

-- --------------------------------------------------------

--
-- Table structure for table `keuangan_berkelanjutan`
--

CREATE TABLE `keuangan_berkelanjutan` (
  `id` bigint UNSIGNED NOT NULL,
  `tahun` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `keuangan_berkelanjutan`
--

INSERT INTO `keuangan_berkelanjutan` (`id`, `tahun`, `file`, `created_at`, `updated_at`) VALUES
(1, '2024', 'keuangan_berkelanjutan/pVQb6Yd7DHQGmjmi5vfNe3jqdIXMgDvd1nqo8zpZ.pdf', '2026-09-21 06:07:11', '2026-10-11 19:28:32'),
(2, '2025', 'keuangan_berkelanjutan/43CAFUsrdkLTDt5VdM0CVcqN4YegR8lVJoz4QSTD.pdf', '2026-10-11 19:31:32', '2026-10-11 19:31:32');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2026_09_09_115924_create_reports_table', 1),
(5, '2026_09_20_104629_create_audits_table', 2),
(6, '2026_09_20_105046_create_gcgs_table', 3),
(7, '2026_09_21_125230_create_rencana_bisnis_table', 3),
(8, '2026_09_21_125231_create_keuangan_berkelanjutans_table', 3),
(9, '2026_09_21_125232_create_daftar_agens_table', 3),
(10, '2026_09_21_125231_create_keuangan_berkelanjutan_table', 3),
(11, '2026_09_21_125232_create_daftar_agen_table', 3),
(12, '2026_09_24_123226_create_mitras_table', 4),
(13, '2026_10_12_061013_create_e_bulletins_table', 5),
(14, '2026_10_12_061023_create_pos_pelayanans_table', 5),
(15, '2026_10_13_000610_create_careers_table', 6),
(16, '2026_10_20_060457_create_karir_table', 7),
(17, '2026_10_23_021933_create_form_pengaduans_table', 8),
(18, '2026_10_23_230712_create_notifications_table', 9),
(19, '2026_10_28_011939_create_digitalisasis_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `mitras`
--

CREATE TABLE `mitras` (
  `id` bigint UNSIGNED NOT NULL,
  `nama_mitra` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('aktif','nonaktif') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'aktif',
  `urutan` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mitras`
--

INSERT INTO `mitras` (`id`, `nama_mitra`, `logo`, `status`, `urutan`, `created_at`, `updated_at`) VALUES
(1, 'Logo Bpr', 'mitra/CkNWZOuSU8rxDou4cFZh22atGR8s8dc9oStYlh47.png', 'aktif', 1, '2026-09-24 05:09:36', '2026-09-24 05:22:51'),
(2, 'Bank NTB Syariah', 'mitra/xptJWotbyZESlYgGnlLd1QidDH35lRq8QwVlEqGv.png', 'aktif', 2, '2026-09-24 05:23:29', '2026-10-23 16:00:02'),
(3, 'bank dinar', 'mitra/d9W2hWy5XX4oUW50UeSmipavDQLdnNC19YTZFk9o.png', 'aktif', 3, '2026-09-24 05:24:14', '2026-09-24 05:24:14'),
(4, 'tulen amanah', 'mitra/UUYzfsl2hBPoC0oEfo609HlaYaKnpMWE3lPc4wSF.png', 'aktif', 4, '2026-09-24 05:24:41', '2026-09-24 05:24:41'),
(5, 'bsk', 'mitra/UfESgrUxhfYBXYCkzxsxOpODsIcv86DYrK1tZOtO.png', 'nonaktif', 5, '2026-09-24 05:24:56', '2026-10-21 04:31:55'),
(6, 'patuh', 'mitra/f3B75RsxJ6x19EQqaqy4FwGytkTPceiLc7CdJ2IO.jpg', 'aktif', 6, '2026-09-24 05:25:24', '2026-09-24 05:25:24');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'complaint',
  `complaint_id` bigint UNSIGNED DEFAULT NULL,
  `is_read` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `title`, `message`, `type`, `complaint_id`, `is_read`, `created_at`, `updated_at`) VALUES
(1, 'Pengaduan Baru Masuk', 'Tiket ADU-20261023-HBROWI - Dugaan Penyimpangan Prosedur', 'complaint', 7, 0, '2026-10-23 15:28:49', '2026-10-23 15:28:49');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pos_pelayanans`
--

CREATE TABLE `pos_pelayanans` (
  `id` bigint UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci,
  `file_pdf` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rencana_bisnis`
--

CREATE TABLE `rencana_bisnis` (
  `id` bigint UNSIGNED NOT NULL,
  `tahun` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rencana_bisnis`
--

INSERT INTO `rencana_bisnis` (`id`, `tahun`, `file`, `created_at`, `updated_at`) VALUES
(1, '2021', 'rencana_bisnis/QJODco5zItTOI9IvZyPtbiAR92rbbpJL2pZA1aH7.pdf', '2026-09-21 06:04:40', '2026-10-11 19:23:26'),
(2, '2022', 'rencana_bisnis/pYoH6W8T5h28pHIwKGVLwD1dHMpStkGxA1RW7agV.pdf', '2026-10-11 19:24:15', '2026-10-11 19:24:15'),
(3, '2023', 'rencana_bisnis/7qIctNe9kQPjrSGT5NuNainFjj5GG3mvKqJ3pZJW.pdf', '2026-10-11 19:24:39', '2026-10-11 19:24:39'),
(4, '2024', 'rencana_bisnis/c7y2QO2DoJfDy736jyLyZ91T9MjnKJG7R7d3jOBU.pdf', '2026-10-11 19:25:01', '2026-10-11 19:25:01'),
(5, '2025', 'rencana_bisnis/Va9MVFYqzVkUt08qik1gg7KEae5JEB9stSb00AjT.pdf', '2026-10-11 19:25:36', '2026-10-11 19:25:36'),
(6, '2026', 'rencana_bisnis/Br3YDs3icb6NhIcevY8G6bwikbsLmMSj4CN2AlJF.pdf', '2026-10-11 19:26:11', '2026-10-11 19:26:11');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` bigint UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `auditor_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `predicate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`id`, `type`, `title`, `year`, `file_url`, `auditor_name`, `predicate`, `description`, `created_at`, `updated_at`) VALUES
(12, 'Annual Report', 'Annual Report 2020', '2020', 'reports/bp5tpteNNKjGsiqB3HJuOdKqPa2QxHS1lDztKmQx.pdf', NULL, NULL, 'Laporan Tahunan Annual Report 2020', '2026-10-11 18:40:14', '2026-10-11 18:40:14'),
(13, 'Annual Report', 'Annual Report 2021', '2021', 'reports/runLGM9AThSLXbeZfAAaJr39n4oJnt27FnZVeSSm.pdf', NULL, NULL, 'Laporan Tahunan Annual Report 2021', '2026-10-11 18:42:59', '2026-10-11 18:42:59'),
(14, 'Annual Report', 'Annual Report 2023', '2023', 'reports/9rz9vhdk6ZckRsjr1Wp9aUvfEAiBga1nB2VGj7EQ.pdf', NULL, NULL, 'Laporan Tahunan Annual Report 2023', '2026-10-11 19:00:30', '2026-10-11 19:00:30'),
(15, 'Annual Report', 'Annual Report 2022', '2022', 'reports/R8A1om70bTjJ2aRwft7mzd2uxdm5aTlJzW1jCUgy.pdf', NULL, NULL, 'Laporan Tahunan Annual Report 2022', '2026-10-11 19:01:34', '2026-10-11 19:01:34'),
(16, 'Annual Report', 'Annual Report 2024', '2024', 'reports/H5ogl6Lbc5ZHCYmugjwUmz3KSYgzf7R4x0s4HmBF.pdf', NULL, NULL, 'Laporan Tahunan Annua Report 2024', '2026-10-11 19:02:24', '2026-10-11 19:02:24'),
(17, 'Annual Report', 'Annual Report 2025', '2025', 'reports/XHRyrH7W1ZbyDtg5CwyXqwmFLnirA6dbIQlDm2xJ.pdf', NULL, NULL, 'Laporan Tahunan Annual Report 2025', '2026-10-11 19:05:35', '2026-10-11 19:05:35'),
(18, 'GCG', 'Good Corporate Governance 2023', '2023', 'reports/ITYX9OUxkrk4BKn6eWOQXunOzX7uMGvO54sIp88h.pdf', NULL, NULL, 'Laporan GCG 2023', '2026-10-11 19:14:03', '2026-10-11 19:14:03'),
(19, 'GCG', 'Good Corporate Governance 2024', '2024', 'reports/sf5nzlzbFypHe5poXYKwlCBBIXSuDxxKJUPhbhgh.pdf', NULL, NULL, 'Laporan GCG 2024', '2026-10-11 19:15:05', '2026-10-11 19:15:05'),
(20, 'GCG', 'Good Corporate Governance', '2025', 'reports/2S4I9AmIuTOu1cNQ4jefI1AtVB2AJjIwK8ETXRnp.pdf', NULL, NULL, 'Laporan GCG 2025', '2026-10-11 19:17:06', '2026-10-11 19:17:06');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('mNg65q1WUh0L9zBlq8Uytsb5pqhEDUMPgRXCsSKf', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/156.0.0.0 Safari/537.36', 'eyJfdG9rZW4iOiIzTWwwdXZaN2NxSzg4eVhaZ0dCZkx3YjRKRTZZVFh6SlhJU3JJUDVZIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MDAwXC9hZG1pblwvY29tcGxhaW5zIiwicm91dGUiOiJhZG1pbi5jb21wbGFpbnMuaW5kZXgifSwiX2ZsYXNoIjp7Im9sZCI6W10sIm5ldyI6W119fQ==', 1793173415);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(7, 'Muhammad Subhan hadi', 'muhammadsubhanhadi808@gmail.com', NULL, '$2y$12$7N61kmEhEMrhYpzvap0rV.5mEX5x140YufGYzThD9HnJiltpNg3oG', NULL, '2026-09-18 03:33:57', '2026-09-18 03:33:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `audits`
--
ALTER TABLE `audits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_expiration_index` (`expiration`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_locks_expiration_index` (`expiration`);

--
-- Indexes for table `daftar_agen`
--
ALTER TABLE `daftar_agen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `digitalisasis`
--
ALTER TABLE `digitalisasis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `e_bulletins`
--
ALTER TABLE `e_bulletins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `form_pengaduan`
--
ALTER TABLE `form_pengaduan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `form_pengaduan_ticket_number_unique` (`ticket_number`),
  ADD KEY `form_pengaduan_status_index` (`status`),
  ADD KEY `form_pengaduan_category_index` (`category`),
  ADD KEY `form_pengaduan_created_at_index` (`created_at`);

--
-- Indexes for table `gcgs`
--
ALTER TABLE `gcgs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `karir`
--
ALTER TABLE `karir`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `karir_slug_unique` (`slug`);

--
-- Indexes for table `keuangan_berkelanjutan`
--
ALTER TABLE `keuangan_berkelanjutan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mitras`
--
ALTER TABLE `mitras`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `pos_pelayanans`
--
ALTER TABLE `pos_pelayanans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rencana_bisnis`
--
ALTER TABLE `rencana_bisnis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `audits`
--
ALTER TABLE `audits`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `daftar_agen`
--
ALTER TABLE `daftar_agen`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `digitalisasis`
--
ALTER TABLE `digitalisasis`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `e_bulletins`
--
ALTER TABLE `e_bulletins`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `form_pengaduan`
--
ALTER TABLE `form_pengaduan`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `gcgs`
--
ALTER TABLE `gcgs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `karir`
--
ALTER TABLE `karir`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `keuangan_berkelanjutan`
--
ALTER TABLE `keuangan_berkelanjutan`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `mitras`
--
ALTER TABLE `mitras`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pos_pelayanans`
--
ALTER TABLE `pos_pelayanans`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rencana_bisnis`
--
ALTER TABLE `rencana_bisnis`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
