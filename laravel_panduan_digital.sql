-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Jun 2021 pada 05.48
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_panduan_digital`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `civitas_ipbs`
--

CREATE TABLE `civitas_ipbs` (
  `id_civitas_ipb` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nim` varchar(9) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isStaff` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `departemens`
--

CREATE TABLE `departemens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fakultas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_departemen` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_departemen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `departemens`
--

INSERT INTO `departemens` (`id`, `fakultas`, `kode_departemen`, `nama_departemen`) VALUES
(1, 'Pertanian', 'A1', 'MANAJEMEN SUMBERDAYA LAHAN'),
(2, 'Pertanian', 'A2', 'AGRONOMI DAN HORTIKULTURA'),
(3, 'Pertanian', 'A3', 'PROTEKSI TANAMAN'),
(4, 'Pertanian', 'A4', 'ARSITEKTUR LANSKAP'),
(5, 'Kedokteran Hewan', 'B0', 'KEDOKTERAN HEWAN'),
(6, 'Perikanan', 'C1', 'TEKNOLOGI & MANAJEMEN PERIKANAN BUDIDAYA'),
(7, 'Perikanan', 'C2', 'MANAJEMEN SUMBERDAYA PERAIRAN'),
(8, 'Peternakan', 'D1', 'TEKNOLOGI PRODUKSI TERNAK'),
(9, 'Peternakan', 'D2', 'NUTRISI DAN TEKNOLOGI PAKAN'),
(10, 'Matematika dan Ilmu Pengetahuan Alam', 'G1', 'STATISTIKA DAN SAINS DATA'),
(11, 'Matematika dan Ilmu Pengetahuan Alam', 'G6', 'ILMU KOMPUTER');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen_pengajars`
--

CREATE TABLE `dosen_pengajars` (
  `id_dosen_pengajar` int(10) UNSIGNED NOT NULL,
  `nama_dosen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nrp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_mata_kuliah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentars`
--

CREATE TABLE `komentars` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nim` varchar(9) COLLATE utf8mb4_unicode_ci NOT NULL,
  `komentar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_mata_kuliah` int(11) NOT NULL,
  `id_civitas_ipb` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `komentars`
--

INSERT INTO `komentars` (`id`, `username`, `nim`, `komentar`, `id_mata_kuliah`, `id_civitas_ipb`, `created_at`, `updated_at`) VALUES
(1, 'Harry', 'H09W4RD01', 'Lebih seru matkul profesor dumbledore', 5191, 102, '2021-06-01 20:38:08', '2021-06-01 20:38:08'),
(2, 'Hermione', 'H09W4RD02', 'its LeviOsa not LeviosAAAAA', 4260, 103, '2021-06-01 20:38:55', '2021-06-01 20:38:55'),
(3, 'Ronald', 'H09W4RD03', 'Bloody HELL!!', 4260, 104, '2021-06-01 20:39:52', '2021-06-01 20:39:52'),
(4, 'Malfoy', 'H09W4RD04', 'POTTAAHH!!', 4268, 105, '2021-06-01 20:40:35', '2021-06-01 20:40:35'),
(5, 'Neville', 'H09W4RD05', 'I.. I\'ll fight you', 4268, 106, '2021-06-01 20:41:15', '2021-06-01 20:41:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mata_kuliahs`
--

CREATE TABLE `mata_kuliahs` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_mata_kuliah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_departemen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_civitas_ipb` int(11) NOT NULL,
  `kode_mk` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `semester` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `mata_kuliahs`
--

INSERT INTO `mata_kuliahs` (`id`, `nama_mata_kuliah`, `nama_departemen`, `deskripsi`, `id_civitas_ipb`, `kode_mk`, `semester`, `jenis`) VALUES
(1, 'Pengolahan Citra Digital', 'Ilmu Komputer', 'mau isi apa ini bingung hehehe apa ya yang penting panjang aja deh', 1, 'KOM324', '6', 'Mayor'),
(2, 'PSBO', 'Ilmu Komputer', 'mau isi apa ini bingung hehehe apa ya yang penting panjang aja deh', 1, 'KOM322', '6', 'Mayor'),
(3, 'Data Mining', 'Ilmu Komputer', 'mau isi apa ini bingung hehehe apa ya yang penting panjang aja deh', 1, 'KOM332', '6', 'Mayor'),
(4, 'KOMDAT', 'Ilmu Komputer', 'mau isi apa ini bingung hehehe apa ya yang penting panjang aja deh', 1, 'KOM312', '6', 'Mayor'),
(5, 'PTG', 'Ilmu Komputer', 'Test Test', 1, 'KOM341', '4/5', 'Elektif'),
(8, 'Metode Statistika', 'Statistika dan Sains Data', 'lorem Ipsumdddd', 1, 'STK211', '2', 'Mayor'),
(9, 'Kimia Tanah', 'MANAJEMEN SUMBERDAYA LAHAN', 'lorem Ipsumdddd', 1, 'TSL220', '4', 'Mayor'),
(10, 'Manajemen dan Teknologi Pupuk', 'MANAJEMEN SUMBERDAYA LAHAN', 'lorem Ipsumdddd', 1, 'TSL321', '6', 'Mayor'),
(11, 'Konservasi Tanah', 'MANAJEMEN SUMBERDAYA LAHAN', 'lorem Ipsumdddd', 1, 'TSL332', '6', 'Elektif'),
(12, 'Desain Penelitian dan Teknik Analisis Data', 'MANAJEMEN SUMBERDAYA LAHAN', 'lorem sadads', 1, 'TSL304', '3', 'Elektif'),
(13, 'Pengantar Sistem Tertanam dan Robotika', 'Ilmu Komputer', 'lorem Ipsumddddaaaaaaaaaaadsaddsadsadsa', 1, 'KOM415', '6', 'Elektif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mata_kuliah_elektifs`
--

CREATE TABLE `mata_kuliah_elektifs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `MataKuliahId` int(11) NOT NULL,
  `Kode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Sks` int(11) NOT NULL,
  `SksKuliah` int(11) NOT NULL,
  `SksPraktikum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `mata_kuliah_elektifs`
--

INSERT INTO `mata_kuliah_elektifs` (`id`, `MataKuliahId`, `Kode`, `Nama`, `Sks`, `SksKuliah`, `SksPraktikum`) VALUES
(1, 5191, 'KOM310', 'Keamanan Informasi', 3, 2, 2),
(2, 4260, 'KOM323', 'Sistem Pakar', 3, 2, 3),
(3, 4268, 'KOM341', 'Pengantar Teknologi Geospasial', 3, 2, 1),
(4, 5196, 'KOM410', 'Pemrosesan Paralel dan Sistem Terdistribusi', 3, 2, 2),
(5, 5197, 'KOM415', 'Pengantar Sistem Tertanam dan Robotika', 3, 2, 2),
(6, 12200, 'KOM431', 'Temu Kembali Informasi', 3, 2, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_05_10_134658_create_civitas_ipbs_table', 1),
(5, '2021_05_10_141611_create_mata_kuliahs_table', 1),
(6, '2021_05_10_153019_create_komentars_table', 2),
(7, '2021_05_10_153251_create_prasyarats_table', 2),
(8, '2021_05_10_153418_create_dosen_pengajars_table', 3),
(9, '2021_06_02_024016_create_departemens_table', 4),
(10, '2021_06_02_034936_create_tertarik_elektifs_table', 5),
(11, '2021_06_08_085600_create_mata_kuliah_elektifs_table', 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `prasyarats`
--

CREATE TABLE `prasyarats` (
  `id_prasyarat` int(10) UNSIGNED NOT NULL,
  `nama_mata_kuliah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_mata_kuliah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tertarik_elektifs`
--

CREATE TABLE `tertarik_elektifs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nim` varchar(9) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_mata_kuliah` int(11) NOT NULL,
  `id_civitas_ipb` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tertarik_elektifs`
--

INSERT INTO `tertarik_elektifs` (`id`, `username`, `nim`, `id_mata_kuliah`, `id_civitas_ipb`) VALUES
(47, 'Pascal Pribadi Akhmad Panatagama', 'G64180022', 4260, 280474),
(50, 'Pascal Pribadi Akhmad Panatagama', 'G64180022', 5196, 280474),
(52, 'Pascal Pribadi Akhmad Panatagama', 'G64180022', 12200, 280474),
(57, 'Pascal Pribadi Akhmad Panatagama', 'G64180022', 5191, 280474);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nim` varchar(9) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `isStaff` enum('Mahasiswa','Dosen') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Mahasiswa'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `nim`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `isStaff`) VALUES
(1, 'Pascal', 'G64180022', 'pascal@ipb.com', NULL, '$2y$10$4G1kXxknzjRuMtnauEjtReIBbEdE2B6dL03qDaVqR2ubAVPvu6mfW', NULL, '2021-06-02 03:08:31', '2021-06-02 03:08:31', 'Mahasiswa'),
(2, 'Zhongli', 'GENSHIN22', 'rexlapis@ipb.com', NULL, '$2y$10$z9.V2OsgBz5v2w73J2jfMuDYy.oZgPRy7nDleAQ2LEX0zjUtuIOW2', NULL, '2021-06-02 03:11:03', '2021-06-02 03:11:03', 'Dosen'),
(3, 'Eula', 'GENSHIN27', 'eula@ipb.com', NULL, '$2y$10$mJXotvvRNWcTOWqRmVzM1eIwsvAjx4AaJAFLGhXusEdCkw2Fbwzda', NULL, '2021-06-02 06:37:28', '2021-06-02 06:37:28', 'Mahasiswa'),
(4, 'irlan', 'G64180004', 'irlan@ipb.com', NULL, '$2y$10$X.Lq68fF11A/cMmjaWbX.ezFoQXU0vwM/IBrmwRKAGtQbRDETQAt6', NULL, '2021-06-03 03:12:41', '2021-06-03 03:12:41', 'Mahasiswa');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `civitas_ipbs`
--
ALTER TABLE `civitas_ipbs`
  ADD PRIMARY KEY (`id_civitas_ipb`);

--
-- Indeks untuk tabel `departemens`
--
ALTER TABLE `departemens`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `dosen_pengajars`
--
ALTER TABLE `dosen_pengajars`
  ADD PRIMARY KEY (`id_dosen_pengajar`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `komentars`
--
ALTER TABLE `komentars`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mata_kuliahs`
--
ALTER TABLE `mata_kuliahs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mata_kuliah_elektifs`
--
ALTER TABLE `mata_kuliah_elektifs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `prasyarats`
--
ALTER TABLE `prasyarats`
  ADD PRIMARY KEY (`id_prasyarat`);

--
-- Indeks untuk tabel `tertarik_elektifs`
--
ALTER TABLE `tertarik_elektifs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `civitas_ipbs`
--
ALTER TABLE `civitas_ipbs`
  MODIFY `id_civitas_ipb` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `departemens`
--
ALTER TABLE `departemens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `dosen_pengajars`
--
ALTER TABLE `dosen_pengajars`
  MODIFY `id_dosen_pengajar` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `komentars`
--
ALTER TABLE `komentars`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `mata_kuliahs`
--
ALTER TABLE `mata_kuliahs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `mata_kuliah_elektifs`
--
ALTER TABLE `mata_kuliah_elektifs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `prasyarats`
--
ALTER TABLE `prasyarats`
  MODIFY `id_prasyarat` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tertarik_elektifs`
--
ALTER TABLE `tertarik_elektifs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
