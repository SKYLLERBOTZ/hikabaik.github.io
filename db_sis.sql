-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Okt 2024 pada 12.10
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sis`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_eskul`
--

CREATE TABLE `tb_eskul` (
  `id_eskul` int(3) NOT NULL,
  `nama_eskul` varchar(30) NOT NULL,
  `nama_Pelatih` varchar(30) NOT NULL,
  `dokumentasi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_eskul`
--

INSERT INTO `tb_eskul` (`id_eskul`, `nama_eskul`, `nama_Pelatih`, `dokumentasi`) VALUES
(2, 'futsal', '-', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_guru`
--

CREATE TABLE `tb_guru` (
  `id_guru` int(3) NOT NULL,
  `nama_guru` varchar(35) NOT NULL,
  `jabatan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_guru`
--

INSERT INTO `tb_guru` (`id_guru`, `nama_guru`, `jabatan`) VALUES
(2, 'maya rismayanti, S.S', 'kepala sekolah'),
(16, 'Hoirudin, S.Kom', 'kepala program tjkt');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jurusan`
--

CREATE TABLE `tb_jurusan` (
  `id_jurusan` int(11) NOT NULL,
  `nama_jurusan` varchar(30) NOT NULL,
  `nama_kaprog` varchar(30) NOT NULL,
  `dokumentasi_jurusan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_jurusan`
--

INSERT INTO `tb_jurusan` (`id_jurusan`, `nama_jurusan`, `nama_kaprog`, `dokumentasi_jurusan`) VALUES
(1, 'tjkt', 'Hoirudin, S,Kom', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `nis` int(12) NOT NULL,
  `nama_siswa` varchar(30) NOT NULL,
  `Jenis_kelamin` varchar(20) NOT NULL,
  `jurusan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_siswa`
--

INSERT INTO `tb_siswa` (`nis`, `nama_siswa`, `Jenis_kelamin`, `jurusan`) VALUES
(112737271, 'pras setiawan', 'ganda', 'tjkt');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_eskul`
--
ALTER TABLE `tb_eskul`
  ADD PRIMARY KEY (`id_eskul`);

--
-- Indeks untuk tabel `tb_guru`
--
ALTER TABLE `tb_guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indeks untuk tabel `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`nis`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
