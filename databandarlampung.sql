-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Jul 2023 pada 06.31
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `databandarlampung`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bkd_golongan_jenis_kelamin`
--

CREATE TABLE `bkd_golongan_jenis_kelamin` (
  `id_golongan_jenis_kelamin` varchar(20) NOT NULL,
  `golongan` varchar(50) NOT NULL,
  `pria` int(11) NOT NULL,
  `wanita` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `id_opd` varchar(50) DEFAULT NULL,
  `id_tahun` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `bkd_golongan_jenis_kelamin`
--

INSERT INTO `bkd_golongan_jenis_kelamin` (`id_golongan_jenis_kelamin`, `golongan`, `pria`, `wanita`, `jumlah`, `id_opd`, `id_tahun`) VALUES
('64c137a63b850', 'I/a -GRADE I', 1, 0, 1, 'BKD', 2023),
('64c137a63cc97', 'I/b - GRADE II', 5, 0, 5, 'BKD', 2023),
('64c137a63dae2', 'I/c - GRADE III', 10, 0, 10, 'BKD', 2023),
('64c137a6414bc', 'I/d -  GRADE IV', 46, 2, 48, 'BKD', 2023),
('64c137a642881', 'II/a - GRADE V', 34, 3, 37, 'BKD', 2023),
('64c137a643611', 'II/b - GRADE VI', 91, 18, 109, 'BKD', 2023),
('64c137a644ab1', 'II/c - GRADE VII', 133, 76, 209, 'BKD', 2023),
('64c137a645ef5', 'II/d - GRADE VIII', 232, 165, 397, 'BKD', 2023),
('64c137a647094', 'III/a - GRADE IX', 410, 1826, 2236, 'BKD', 2023),
('64c137a647e4d', 'III/b - GRADE X', 299, 685, 984, 'BKD', 2023),
('64c137a648bcb', 'III/c - GRADE XI', 356, 643, 999, 'BKD', 2023),
('64c137a649c4a', 'III/d - GRADE XII', 525, 1156, 1681, 'BKD', 2023),
('64c137a64ae65', 'IV/a - GRADE XIII', 250, 763, 1013, 'BKD', 2023),
('64c137a64bc04', 'IV/b - GRADE XIV', 150, 814, 964, 'BKD', 2023),
('64c137a64ca30', 'IV/c - GRADE XV', 31, 81, 112, 'BKD', 2023),
('64c137a64d6c4', 'IV/d - GRADE XVI', 1, 2, 3, 'BKD', 2023);

-- --------------------------------------------------------

--
-- Struktur dari tabel `bkd_golongan_umur`
--

CREATE TABLE `bkd_golongan_umur` (
  `id_golongan` varchar(50) NOT NULL,
  `golongan` varchar(50) NOT NULL,
  `umur1` int(11) NOT NULL,
  `umur2` int(11) NOT NULL,
  `umur3` int(11) NOT NULL,
  `umur4` int(11) NOT NULL,
  `umur5` int(11) NOT NULL,
  `umur6` int(11) NOT NULL,
  `umur7` int(11) NOT NULL,
  `umur8` int(11) NOT NULL,
  `umur9` int(11) NOT NULL,
  `umur10` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `id_opd` varchar(50) DEFAULT NULL,
  `id_tahun` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `bkd_golongan_umur`
--

INSERT INTO `bkd_golongan_umur` (`id_golongan`, `golongan`, `umur1`, `umur2`, `umur3`, `umur4`, `umur5`, `umur6`, `umur7`, `umur8`, `umur9`, `umur10`, `jumlah`, `id_opd`, `id_tahun`) VALUES
('64c137940cba3', 'I/a -GRADE I', 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 'BKD', 2023),
('64c137940e565', 'I/b - GRADE II', 0, 0, 0, 0, 0, 1, 0, 0, 3, 1, 5, 'BKD', 2023),
('64c1379410241', 'I/c - GRADE III', 0, 0, 0, 0, 2, 1, 2, 2, 2, 1, 10, 'BKD', 2023),
('64c1379412b03', 'I/d -  GRADE IV', 0, 0, 0, 0, 2, 10, 12, 14, 5, 5, 48, 'BKD', 2023),
('64c13794138e9', 'II/a - GRADE V', 0, 0, 0, 0, 3, 5, 13, 7, 5, 4, 37, 'BKD', 2023),
('64c13794157f1', 'II/b - GRADE VI', 0, 0, 0, 0, 22, 27, 21, 19, 12, 8, 109, 'BKD', 2023),
('64c13794166e1', 'II/c - GRADE VII', 0, 2, 8, 8, 30, 44, 54, 43, 11, 9, 209, 'BKD', 2023),
('64c13794174cc', 'II/d - GRADE VIII', 0, 0, 0, 9, 92, 81, 99, 76, 26, 14, 397, 'BKD', 2023),
('64c137941829f', 'III/a - GRADE IX', 0, 33, 525, 555, 488, 274, 165, 133, 38, 25, 2236, 'BKD', 2023),
('64c13794198cb', 'III/b - GRADE X', 0, 0, 93, 118, 226, 194, 137, 112, 55, 49, 984, 'BKD', 2023),
('64c137941af72', 'III/c - GRADE XI', 0, 0, 1, 56, 251, 249, 202, 146, 52, 42, 999, 'BKD', 2023),
('64c137941c339', 'III/d - GRADE XII', 0, 0, 0, 11, 254, 409, 386, 381, 142, 98, 1681, 'BKD', 2023),
('64c137941d134', 'IV/a - GRADE XIII', 0, 0, 0, 0, 58, 133, 205, 313, 104, 200, 1013, 'BKD', 2023),
('64c137941def5', 'IV/b - GRADE XIV', 0, 0, 0, 0, 2, 16, 54, 204, 204, 484, 964, 'BKD', 2023),
('64c137941edea', 'IV/c - GRADE XV', 0, 0, 0, 0, 0, 0, 3, 15, 18, 76, 112, 'BKD', 2023),
('64c137941fba0', 'IV/d - GRADE XVI', 1, 0, 0, 0, 0, 0, 0, 0, 1, 1, 3, 'BKD', 2023);

-- --------------------------------------------------------

--
-- Struktur dari tabel `bkd_pendidikan`
--

CREATE TABLE `bkd_pendidikan` (
  `id_pendidikan` varchar(50) NOT NULL,
  `pendidikan` varchar(50) NOT NULL,
  `pria` int(11) NOT NULL,
  `wanita` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `id_opd` varchar(50) DEFAULT NULL,
  `id_tahun` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `bkd_pendidikan`
--

INSERT INTO `bkd_pendidikan` (`id_pendidikan`, `pendidikan`, `pria`, `wanita`, `jumlah`, `id_opd`, `id_tahun`) VALUES
('64bb2042b26d3', '12', 12, 12, 12, 'BKD', 2024),
('64c206b41fac3', 'fd', 23, 32, 23, 'BKD', 2023),
('64c207169202a', 'SD', 56, 4, 60, 'BKD', 2023),
('64c2071693527', 'SLTA', 554, 458, 1012, 'BKD', 2023),
('64c207169770e', 'SLTP', 57, 3, 60, 'BKD', 2023),
('64c2071698784', 'D.I', 4, 11, 15, 'BKD', 2023),
('64c207169cb4f', 'D.II', 19, 31, 50, 'BKD', 2023),
('64c20716a01a1', 'D.III', 93, 511, 604, 'BKD', 2023),
('64c20716a10d9', 'D.IV', 24, 171, 195, 'BKD', 2023),
('64c20716a238b', 'S.1', 1324, 4340, 5664, 'BKD', 2023),
('64c20716a381d', 'S.2', 434, 698, 1132, 'BKD', 2023),
('64c20716a4562', 'S.3', 1, 1, 2, 'BKD', 2023),
('64c20716a5876', 'SPESIALIS', 8, 6, 14, 'BKD', 2023);

-- --------------------------------------------------------

--
-- Struktur dari tabel `bkd_umur`
--

CREATE TABLE `bkd_umur` (
  `id_umur` varchar(50) NOT NULL,
  `umur` varchar(50) NOT NULL,
  `pria` int(11) NOT NULL,
  `wanita` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `id_opd` varchar(50) DEFAULT NULL,
  `id_tahun` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `bkd_umur`
--

INSERT INTO `bkd_umur` (`id_umur`, `umur`, `pria`, `wanita`, `jumlah`, `id_opd`, `id_tahun`) VALUES
('64c1376abe2f3', '26 - 30', 108, 519, 627, 'BKD', 2023),
('64c1376ac278e', '31 - 35', 140, 617, 757, 'BKD', 2023),
('64c1376ac5e33', '36 - 40', 343, 1087, 1430, 'BKD', 2023),
('64c1376ac72c6', '41 - 45', 475, 969, 1444, 'BKD', 2023),
('64c1376ac8288', '46 - 50', 512, 841, 1353, 'BKD', 2023),
('64c1376ac92a1', '51 - 55', 542, 923, 1465, 'BKD', 2023),
('64c1376aca2b4', '56 - 58', 227, 451, 678, 'BKD', 2023),
('64c1376acb35e', '58 - 60', 223, 795, 1018, 'BKD', 2023),
('64c1376acc7c3', '60 >', 0, 1, 1, 'BKD', 2023);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dinsos`
--

CREATE TABLE `dinsos` (
  `id_kecamatan` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `jumlah_individu` int(11) DEFAULT NULL,
  `jumlah_keluarga` int(11) DEFAULT NULL,
  `id_opd` varchar(50) DEFAULT NULL,
  `id_tahun` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `dinsos`
--

INSERT INTO `dinsos` (`id_kecamatan`, `kecamatan`, `jumlah_individu`, `jumlah_keluarga`, `id_opd`, `id_tahun`) VALUES
('64bd42d5d3a9e', 'SUKARAME', 19, 6, 'Dinas Sosial', 2022),
('64bd42d5d48f2', 'TANJUNGKARANG BARAT', 29, 9, 'Dinas Sosial', 2022),
('64bd42d5d569a', 'PANJANG', 43, 14, 'Dinas Sosial', 2022),
('64bd42d5d64a2', 'TANJUNGKARANG TIMUR', 21, 7, 'Dinas Sosial', 2022),
('64bd42d5d72be', 'TANJUNGKARANG PUSAT', 27, 9, 'Dinas Sosial', 2022),
('64bd42d5d806b', 'TELUKBETUNG SELATAN', 28, 10, 'Dinas Sosial', 2022),
('64bd42d5d8e1c', 'TELUKBETUNG BARAT', 27, 839, 'Dinas Sosial', 2022),
('64bd42d5da175', 'TELUKBETUNG UTARA', 24, 8, 'Dinas Sosial', 2022),
('64bd42d5db0b5', 'RAJABASA', 19, 6, 'Dinas Sosial', 2022),
('64bd42d5dbeaa', 'TANJUNG SENANG', 17, 6, 'Dinas Sosial', 2022),
('64bd42d5dcc60', 'SUKABUMI', 29, 10, 'Dinas Sosial', 2022),
('64bd42d5ddbe2', 'KEMILING', 28, 9, 'Dinas Sosial', 2022),
('64bd42d5dea07', 'LABUHAN RATU', 15, 5, 'Dinas Sosial', 2022),
('64bd42d5e1143', 'WAY HALIM', 25, 8, 'Dinas Sosial', 2022),
('64bd42d5e1e90', 'LANGKAPURA', 13, 4, 'Dinas Sosial', 2022),
('64bd42d5e2b72', 'ENGGAL', 9, 3, 'Dinas Sosial', 2022),
('64bd42d5e37a7', 'KEDAMAIAN', 17, 6, 'Dinas Sosial', 2022),
('64bd42d5e4563', 'TELUKBETUNG TIMUR', 33, 10, 'Dinas Sosial', 2022),
('64bd42d5e526d', 'BUMI WARAS', 36, 11, 'Dinas Sosial', 2022),
('64c13dbae8d21', 'KEDATON', 23, 8, 'Dinas Sosial', 2023),
('64c13dbaea40c', 'SUKARAME', 19, 6, 'Dinas Sosial', 2023),
('64c13dbaeb5e4', 'TANJUNGKARANG BARAT', 29, 9, 'Dinas Sosial', 2023),
('64c13dbaec42d', 'PANJANG', 43, 14, 'Dinas Sosial', 2023),
('64c13dbaed69d', 'TANJUNGKARANG TIMUR', 21, 7, 'Dinas Sosial', 2023),
('64c13dbaeffd6', 'TANJUNGKARANG PUSAT', 27, 9, 'Dinas Sosial', 2023),
('64c13dbaf0c8b', 'TELUKBETUNG SELATAN', 28, 10, 'Dinas Sosial', 2023),
('64c13dbaf19ca', 'TELUKBETUNG BARAT', 27, 839, 'Dinas Sosial', 2023),
('64c13dbaf259d', 'TELUKBETUNG UTARA', 24, 8, 'Dinas Sosial', 2023),
('64c13dbaf3578', 'RAJABASA', 19, 6, 'Dinas Sosial', 2023),
('64c13dbb005ab', 'TANJUNG SENANG', 17, 6, 'Dinas Sosial', 2023),
('64c13dbb01243', 'SUKABUMI', 29, 10, 'Dinas Sosial', 2023),
('64c13dbb01ebf', 'KEMILING', 28, 9, 'Dinas Sosial', 2023),
('64c13dbb02b9b', 'LABUHAN RATU', 15, 5, 'Dinas Sosial', 2023),
('64c13dbb0374e', 'WAY HALIM', 25, 8, 'Dinas Sosial', 2023),
('64c13dbb04458', 'LANGKAPURA', 13, 4, 'Dinas Sosial', 2023),
('64c13dbb05685', 'ENGGAL', 9, 3, 'Dinas Sosial', 2023),
('64c13dbb06314', 'KEDAMAIAN', 17, 6, 'Dinas Sosial', 2023),
('64c13dbb06f42', 'TELUKBETUNG TIMUR', 33, 10, 'Dinas Sosial', 2023),
('64c13dbb07be6', 'BUMI WARAS', 36, 11, 'Dinas Sosial', 2023);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dishub`
--

CREATE TABLE `dishub` (
  `id_bulan` varchar(50) NOT NULL,
  `bulan` varchar(50) NOT NULL,
  `truck_pick_up` int(11) DEFAULT NULL,
  `bus` int(11) DEFAULT NULL,
  `oplet` int(11) DEFAULT NULL,
  `id_opd` varchar(50) DEFAULT NULL,
  `id_tahun` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `dishub`
--

INSERT INTO `dishub` (`id_bulan`, `bulan`, `truck_pick_up`, `bus`, `oplet`, `id_opd`, `id_tahun`) VALUES
('64c13a714d483', 'JANUARI', 1315, 101, 4, 'Dinas Perhubungan', 2023),
('64c13a714e8f0', 'FEBRUARI', 1121, 33, 16, 'Dinas Perhubungan', 2023),
('64c13a7150597', 'MARET', 1458, 70, 31, 'Dinas Perhubungan', 2023),
('64c13a7152e37', 'APRIL', 1069, 106, 25, 'Dinas Perhubungan', 2023),
('64c13a7153b28', 'MEI', 1105, 54, 15, 'Dinas Perhubungan', 2023),
('64c13a71552a2', 'JUNI', 1519, 74, 27, 'Dinas Perhubungan', 2023),
('64c13a7155eec', 'JULI', 1185, 90, 25, 'Dinas Perhubungan', 2023),
('64c13a7156aba', 'AGUSTUS', 1454, 54, 14, 'Dinas Perhubungan', 2023),
('64c13a71576a4', 'SEPTEMBER', 1398, 59, 21, 'Dinas Perhubungan', 2023),
('64c13a7158398', 'OKTOBER', 1191, 73, 24, 'Dinas Perhubungan', 2023),
('64c13a7159014', 'NOVEMBER', 1123, 62, 19, 'Dinas Perhubungan', 2023),
('64c13a7159cc9', 'DESEMBER', 1079, 72, 26, 'Dinas Perhubungan', 2023);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dishub_wajib_biaya`
--

CREATE TABLE `dishub_wajib_biaya` (
  `id_bulan` varchar(50) NOT NULL,
  `bulan` varchar(50) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `biaya` decimal(15,2) NOT NULL,
  `id_opd` varchar(50) DEFAULT NULL,
  `id_tahun` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `dishub_wajib_biaya`
--

INSERT INTO `dishub_wajib_biaya` (`id_bulan`, `bulan`, `jumlah`, `biaya`, `id_opd`, `id_tahun`) VALUES
('64c13ab2ab392', 'JANUARI ', 1420, 115978200.00, 'Dinas Perhubungan', 2023),
('64c13ab2ac813', 'FEBRUARI', 1170, 98500200.00, 'Dinas Perhubungan', 2023),
('64c13ab2ad6ce', 'MARET', 1559, 217395750.00, 'Dinas Perhubungan', 2023),
('64c13ab2afcda', 'APRIL', 1200, 169393750.00, 'Dinas Perhubungan', 2023),
('64c13ab2b0fe2', 'MEI', 1174, 162001250.00, 'Dinas Perhubungan', 2023),
('64c13ab2b1d30', 'JUNI', 1620, 224695000.00, 'Dinas Perhubungan', 2023),
('64c13ab2b2aaf', 'JULI', 1300, 170105000.00, 'Dinas Perhubungan', 2023),
('64c13ab2b38d5', 'AGUSTUS', 1522, 202245000.00, 'Dinas Perhubungan', 2023),
('64c13ab2b4684', 'SEPTEMBER', 1478, 187928750.00, 'Dinas Perhubungan', 2023),
('64c13ab2b5393', 'OKTOBER', 1288, 171363750.00, 'Dinas Perhubungan', 2023),
('64c13ab2b6550', 'NOVEMBER', 1204, 169685000.00, 'Dinas Perhubungan', 2023),
('64c13ab2b7165', 'DESEMBER', 1177, 157357500.00, 'Dinas Perhubungan', 2023);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dishub_wajib_noumum`
--

CREATE TABLE `dishub_wajib_noumum` (
  `id_kendaraan` varchar(50) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `id_opd` varchar(50) DEFAULT NULL,
  `id_tahun` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `dishub_wajib_noumum`
--

INSERT INTO `dishub_wajib_noumum` (`id_kendaraan`, `jenis`, `jumlah`, `id_opd`, `id_tahun`) VALUES
('64c13c8e6f231', 'MOBIL BARANG TRUK', 3125, 'Dinas Perhubungan', 2023),
('64c13c8e70676', 'MOBIL BARANG PICK-UP', 3356, 'Dinas Perhubungan', 2023),
('64c13c8e715a0', 'MOBIL TANKI', 1538, 'Dinas Perhubungan', 2023),
('64c13c8e73648', 'MOBIL BUS', 28, 'Dinas Perhubungan', 2023),
('64c13c8e74f7b', 'MIKRO BUS', 157, 'Dinas Perhubungan', 2023),
('64c13c8e75fb4', 'MOBIL PENUMPANG', 0, 'Dinas Perhubungan', 2023);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dishub_wajib_umum`
--

CREATE TABLE `dishub_wajib_umum` (
  `id_kendaraan` varchar(50) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `id_opd` varchar(50) DEFAULT NULL,
  `id_tahun` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `dishub_wajib_umum`
--

INSERT INTO `dishub_wajib_umum` (`id_kendaraan`, `jenis`, `jumlah`, `id_opd`, `id_tahun`) VALUES
('64c13a8254d97', 'MOBIL BARANG TRUK', 6643, 'Dinas Perhubungan', 2023),
('64c13a8255fb7', 'MOBIL BARANG PICK-UP', 0, 'Dinas Perhubungan', 2023),
('64c13a8257467', 'MOBIL BUS', 820, 'Dinas Perhubungan', 2023),
('64c13a8259b84', 'MIKRO BUS', 75, 'Dinas Perhubungan', 2023),
('64c13a825a8d2', 'MOBIL PENUMPANG', 15, 'Dinas Perhubungan', 2023),
('64c13a825b888', 'MOBIL TAXI', 0, 'Dinas Perhubungan', 2023),
('64c13a825ce45', 'GANDENGAN/TEMPELAN', 355, 'Dinas Perhubungan', 2023);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dispan`
--

CREATE TABLE `dispan` (
  `id_komoditas` varchar(50) NOT NULL,
  `komoditas` varchar(50) NOT NULL,
  `total` int(11) DEFAULT NULL,
  `kebutuhan` int(11) DEFAULT NULL,
  `stok_akhir` int(11) DEFAULT NULL,
  `id_opd` varchar(50) DEFAULT NULL,
  `id_tahun` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `dispan`
--

INSERT INTO `dispan` (`id_komoditas`, `komoditas`, `total`, `kebutuhan`, `stok_akhir`, `id_opd`, `id_tahun`) VALUES
('64c13a2664647', 'Beras', 10800, 9622, 1178, 'Dinas Pangan', 2023),
('64c13a2665fa2', 'Daging  Ayam Ras', 775, 705, 70, 'Dinas Pangan', 2023),
('64c13a26672a0', 'Telur Ayam', 1218, 1117, 101, 'Dinas Pangan', 2023),
('64c13a266811a', 'Bawang Merah', 377, 343, 34, 'Dinas Pangan', 2023),
('64c13a2668e2f', 'Cabe Merah', 229, 209, 20, 'Dinas Pangan', 2023),
('64c13a2669b2f', 'Minyak Goreng', 1700, 1540, 160, 'Dinas Pangan', 2023),
('64c13a266afc6', 'Bawang putih', 280, 257, 23, 'Dinas Pangan', 2023),
('64c13a266bdb3', 'Daging Sapi', 289, 265, 24, 'Dinas Pangan', 2023),
('64c13a266cbae', 'Jagung', 128, 119, 9, 'Dinas Pangan', 2023),
('64c13a266d9b4', 'Cabe Rawit', 386, 359, 27, 'Dinas Pangan', 2023),
('64c13a266e7c2', 'Gula Pasir', 795, 721, 74, 'Dinas Pangan', 2023),
('64c13a266f993', 'Tempe ', 0, 0, 0, 'Dinas Pangan', 2023);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dispentani`
--

CREATE TABLE `dispentani` (
  `id_tanaman` varchar(50) NOT NULL,
  `nama_tanaman` varchar(50) NOT NULL,
  `luas_tanaman` float DEFAULT NULL,
  `luas_rusak` float DEFAULT NULL,
  `luas_penanaman` float DEFAULT NULL,
  `id_opd` varchar(50) DEFAULT NULL,
  `id_tahun` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `dispentani`
--

INSERT INTO `dispentani` (`id_tanaman`, `nama_tanaman`, `luas_tanaman`, `luas_rusak`, `luas_penanaman`, `id_opd`, `id_tahun`) VALUES
('64bbbc61bf296', 'BAWANG DAUN', 0, 0, 0, 'Dinas Pertanian', 2022),
('64bbbc61c07ad', 'BAWANG MERAH', 0.25, 0, 0, 'Dinas Pertanian', 2022),
('64bbbc61c1674', 'BAWANG PUTIH', 0, 0, 0, 'Dinas Pertanian', 2022),
('64bbbc61c3d41', 'KEMBANG KOL', 0, 0, 0, 'Dinas Pertanian', 2022),
('64bbbc61c4bda', 'KENTANG', 0, 0, 0, 'Dinas Pertanian', 2022),
('64bbbc61c60f4', 'KUBIS', 0, 0, 0, 'Dinas Pertanian', 2022),
('64bbbc61c7941', 'SAWI', 8, 0, 9.75, 'Dinas Pertanian', 2022),
('64bbbc61c8695', 'WORTEL', 0, 0, 0, 'Dinas Pertanian', 2022),
('64bbbc61c947c', 'BAYAM', 5.75, 0.05, 5, 'Dinas Pertanian', 2022),
('64bbbc61ca35a', 'BUNCIS', 3, 0, 0, 'Dinas Pertanian', 2022),
('64bbbc61cb8b4', 'CABAI BESAR', 3.25, 0, 0, 'Dinas Pertanian', 2022),
('64bbbc61cc680', 'CABAI KERITING', 1.25, 0, 0, 'Dinas Pertanian', 2022),
('64bbbc61cd4ad', 'CABAI RAWIT', 7.5, 0, 0, 'Dinas Pertanian', 2022),
('64bbbc61ce263', 'JAMUR TIRAM', 500, 0, 0, 'Dinas Pertanian', 2022),
('64bbbc61cef6f', 'JAMUR MERANG', 0, 0, 0, 'Dinas Pertanian', 2022),
('64bbbc61cfc7a', 'JAMUR LAINNYA', 0, 0, 0, 'Dinas Pertanian', 2022),
('64bbbc61d1001', 'KACANG PANJANG', 2, 0, 1, 'Dinas Pertanian', 2022),
('64bbbc61d1da1', 'KANGKUNG', 7.75, 0, 6.5, 'Dinas Pertanian', 2022),
('64bbbc61d2a86', 'MENTIMUN', 2, 0, 0, 'Dinas Pertanian', 2022),
('64bbbc61d36a6', 'LABU SIAM', 0, 0, 0, 'Dinas Pertanian', 2022),
('64bbbc61d42e9', 'PAPRIKA', 0, 0, 0, 'Dinas Pertanian', 2022),
('64bbbc61d4f33', 'TERUNG', 3, 0, 0, 'Dinas Pertanian', 2022),
('64bbbc61d631b', 'TOMAT', 1, 0, 0, 'Dinas Pertanian', 2022),
('64bbbc61d6fa1', 'MELON', 0, 0, 0, 'Dinas Pertanian', 2022),
('64bbbc61d7c61', 'SEMANGKA', 0, 0, 0, 'Dinas Pertanian', 2022),
('64bbbc61d8a9d', 'STROBERI', 0, 0, 0, 'Dinas Pertanian', 2022),
('64c13d81627bb', 'BAWANG DAUN', 0, 0, 0, 'Dinas Pertanian', 2023),
('64c13d81647e2', 'BAWANG MERAH', 0.25, 0, 0, 'Dinas Pertanian', 2023),
('64c13d8165b2c', 'BAWANG PUTIH', 0, 0, 0, 'Dinas Pertanian', 2023),
('64c13d8166f4d', 'KEMBANG KOL', 0, 0, 0, 'Dinas Pertanian', 2023),
('64c13d8167c4a', 'KENTANG', 0, 0, 0, 'Dinas Pertanian', 2023),
('64c13d8168b03', 'KUBIS', 0, 0, 0, 'Dinas Pertanian', 2023),
('64c13d816c2ed', 'SAWI', 8, 0, 9.75, 'Dinas Pertanian', 2023),
('64c13d816d00c', 'WORTEL', 0, 0, 0, 'Dinas Pertanian', 2023),
('64c13d816de47', 'BAYAM', 5.75, 0.05, 5, 'Dinas Pertanian', 2023),
('64c13d816efd7', 'BUNCIS', 3, 0, 0, 'Dinas Pertanian', 2023),
('64c13d816fd99', 'CABAI BESAR', 3.25, 0, 0, 'Dinas Pertanian', 2023),
('64c13d8171222', 'CABAI KERITING', 1.25, 0, 0, 'Dinas Pertanian', 2023),
('64c13d81724e0', 'CABAI RAWIT', 7.5, 0, 0, 'Dinas Pertanian', 2023),
('64c13d8173062', 'JAMUR TIRAM', 500, 0, 0, 'Dinas Pertanian', 2023),
('64c13d8173d9b', 'JAMUR MERANG', 0, 0, 0, 'Dinas Pertanian', 2023),
('64c13d8174ade', 'JAMUR LAINNYA', 0, 0, 0, 'Dinas Pertanian', 2023),
('64c13d81757ba', 'KACANG PANJANG', 2, 0, 1, 'Dinas Pertanian', 2023),
('64c13d81765ed', 'KANGKUNG', 7.75, 0, 6.5, 'Dinas Pertanian', 2023),
('64c13d8177575', 'MENTIMUN', 2, 0, 0, 'Dinas Pertanian', 2023),
('64c13d8178fc4', 'LABU SIAM', 0, 0, 0, 'Dinas Pertanian', 2023),
('64c13d817bb73', 'PAPRIKA', 0, 0, 0, 'Dinas Pertanian', 2023),
('64c13d817ceb6', 'TERUNG', 3, 0, 0, 'Dinas Pertanian', 2023),
('64c13d817df8e', 'TOMAT', 1, 0, 0, 'Dinas Pertanian', 2023),
('64c13d817f1b6', 'MELON', 0, 0, 0, 'Dinas Pertanian', 2023),
('64c13d817ff89', 'SEMANGKA', 0, 0, 0, 'Dinas Pertanian', 2023),
('64c13d8180c0f', 'STROBERI', 0, 0, 0, 'Dinas Pertanian', 2023);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dispu_flyover_underpass`
--

CREATE TABLE `dispu_flyover_underpass` (
  `id_flyover` varchar(50) NOT NULL,
  `nama_flyover` varchar(255) NOT NULL,
  `ukuran_flyover` varchar(50) DEFAULT NULL,
  `kondisi_flyover` varchar(50) DEFAULT NULL,
  `tahun_pembuatan` int(11) DEFAULT NULL,
  `id_opd` varchar(50) DEFAULT NULL,
  `id_tahun` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `dispu_flyover_underpass`
--

INSERT INTO `dispu_flyover_underpass` (`id_flyover`, `nama_flyover`, `ukuran_flyover`, `kondisi_flyover`, `tahun_pembuatan`, `id_opd`, `id_tahun`) VALUES
('64bde4749fccf', 'Fly Over Jalan Sultan Agung – Jalan Ryacudu', '325 x 14', 'Baik', 2013, 'Dinas Pekerjaan Umum', 2022),
('64bde474a0aec', 'Fly Over Jalan Pangeran Antasari – Jalan Tirtayasa', '450 x 14', 'Baik', 2013, 'Dinas Pekerjaan Umum', 2022),
('64bde474a1fe8', 'Fly Over Jalan Kimaja – Ratu dibalau', '278,85 x 10', 'Baik', 2015, 'Dinas Pekerjaan Umum', 2022),
('64bde474a2dce', 'Fly Over Jalan Gajah Mada- Jalan Pangeran Antasari', '307 x 10', 'Baik', 2016, 'Dinas Pekerjaan Umum', 2022),
('64bde474a3c58', 'Fly Over Jalan ZA Pagar Alam – Jalan Teuku Umar', '600 x 10', 'Baik', 2018, 'Dinas Pekerjaan Umum', 2022),
('64bde474a49f6', 'Fly Over / Underpass Jalan ZA Pagar Alam – Jalan Prof. Dr. Sumantri Brojonegoro', '400 x 10', 'Baik', 2018, 'Dinas Pekerjaan Umum', 2022),
('64bde474a5877', 'Fly Over/ Underpass Jalan Pramuka – Jalan ZA. Pagar Alam', '155 x 7', 'Baik', 2018, 'Dinas Pekerjaan Umum', 2022),
('64bde474a74a0', 'Fly Over Jalan Imam Bonjol – Jalan Pramuka – Jalan Cik Ditiro', '425 x 9', 'Baik', 2018, 'Dinas Pekerjaan Umum', 2022),
('64bde474aadbe', 'Fly Over Jalan Untung Surapati - Ra Basyid   ', '550 x 11', 'Baik', 2019, 'Dinas Pekerjaan Umum', 2022),
('64bde474ac485', 'Fly Over Jalan Abdul Haq - Komarudin', '500 x 11', 'Baik', 2019, 'Dinas Pekerjaan Umum', 2022),
('64bde474adc84', 'Fly Over Jalan Sultan agung ', '200 x 10', 'Baik', 2020, 'Dinas Pekerjaan Umum', 2022),
('64c13da67e072', 'Fly Over Jalan Gajah Mada', '650 x 12', 'Baik', 2013, 'Dinas Pekerjaan Umum', 2023),
('64c13da67f540', 'Fly Over Jalan Sultan Agung – Jalan Ryacudu', '325 x 14', 'Baik', 2013, 'Dinas Pekerjaan Umum', 2023),
('64c13da68062d', 'Fly Over Jalan Pangeran Antasari – Jalan Tirtayasa', '450 x 14', 'Baik', 2013, 'Dinas Pekerjaan Umum', 2023),
('64c13da681760', 'Fly Over Jalan Kimaja – Ratu dibalau', '278,85 x 10', 'Baik', 2015, 'Dinas Pekerjaan Umum', 2023),
('64c13da684315', 'Fly Over Jalan Gajah Mada- Jalan Pangeran Antasari', '307 x 10', 'Baik', 2016, 'Dinas Pekerjaan Umum', 2023),
('64c13da6850fe', 'Fly Over Jalan ZA Pagar Alam – Jalan Teuku Umar', '600 x 10', 'Baik', 2018, 'Dinas Pekerjaan Umum', 2023),
('64c13da685fd9', 'Fly Over / Underpass Jalan ZA Pagar Alam – Jalan Prof. Dr. Sumantri Brojonegoro', '400 x 10', 'Baik', 2018, 'Dinas Pekerjaan Umum', 2023),
('64c13da686edb', 'Fly Over/ Underpass Jalan Pramuka – Jalan ZA. Pagar Alam', '155 x 7', 'Baik', 2018, 'Dinas Pekerjaan Umum', 2023),
('64c13da687f9c', 'Fly Over Jalan Imam Bonjol – Jalan Pramuka – Jalan Cik Ditiro', '425 x 9', 'Baik', 2018, 'Dinas Pekerjaan Umum', 2023),
('64c13da689355', 'Fly Over Jalan Untung Surapati - Ra Basyid   ', '550 x 11', 'Baik', 2019, 'Dinas Pekerjaan Umum', 2023),
('64c13da68b42a', 'Fly Over Jalan Abdul Haq - Komarudin', '500 x 11', 'Baik', 2019, 'Dinas Pekerjaan Umum', 2023),
('64c13da68c3c9', 'Fly Over Jalan Sultan agung ', '200 x 10', 'Baik', 2020, 'Dinas Pekerjaan Umum', 2023);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dispu_jenis_permukaan_jalan`
--

CREATE TABLE `dispu_jenis_permukaan_jalan` (
  `tahun` int(11) NOT NULL,
  `jenis_permukaan_jalan` varchar(50) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `id_opd` varchar(50) DEFAULT NULL,
  `id_tahun` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `dispu_panjang_jalan`
--

CREATE TABLE `dispu_panjang_jalan` (
  `tahun` int(11) NOT NULL,
  `kondisi` varchar(50) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `id_opd` varchar(50) DEFAULT NULL,
  `id_tahun` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `documents`
--

CREATE TABLE `documents` (
  `id_dok` varchar(50) NOT NULL,
  `nama_dokumen` varchar(255) NOT NULL,
  `download_link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `documents`
--

INSERT INTO `documents` (`id_dok`, `nama_dokumen`, `download_link`) VALUES
('64c1ea7a52e25', 'STATISTIK SEKTORAL KOTA BANDAR LAMPUNG TAHUN 2022', '../path/uploads/documents/954-STATISTIK SEKTORAL KOTA BANDAR LAMPUNG TAHUN 2022.pdf'),
('64c337c3c3d0f', 'BUKU STATISTIK SEKTORAL KOTA BANDAR LAMPUNG 2020', '../path/uploads/documents/199-Buku Statistik Sektoral Kota Bandar Lampung 2020.pdf'),
('64c3381557ee8', 'STATISTIK SEKTORAL KOTA BANDAR LAMPUNG TAHUN 2021', '../path/uploads/documents/780-statistik sektoral kota bandar lampung TAHUN 2021.pdf'),
('64c338755f5e7', 'BKD 2023', '../path/uploads/documents/630-BKD 2023.xlsx'),
('64c33890a2264', 'DINAS PERHUBUNGAN', '../path/uploads/documents/96-DINAS PERHUBUNGAN.xlsx'),
('64c3393412b22', 'DINAS SOSIAL 2023', '../path/uploads/documents/321-DINAS SOSIAL 2023.xlsx'),
('64c3394d82e28', 'DINAS PERINDUSTRIAN 2023', '../path/uploads/documents/514-DINAS PERINDUSTRIAN 2023.xlsx'),
('64c33969976d6', 'DINAS PU 2023', '../path/uploads/documents/788-DINAS PU 2023.xlsx'),
('64c33a017787e', 'STATISTIK SEKTORAL PEMERINTAH KOTA BANDAR LAMPUNG', '../path/uploads/documents/283-STATISTIK SEKTORAL PEMERINTAH KOTA BANDAR LAMPUNG.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ducapil_umur`
--

CREATE TABLE `ducapil_umur` (
  `id_kecamatan` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `umur1` int(11) NOT NULL,
  `umur2` int(11) NOT NULL,
  `umur3` int(11) NOT NULL,
  `umur4` int(11) NOT NULL,
  `umur5` int(11) NOT NULL,
  `umur6` int(11) NOT NULL,
  `umur7` int(11) NOT NULL,
  `umur8` int(11) NOT NULL,
  `id_opd` varchar(50) DEFAULT NULL,
  `id_tahun` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `ducapil_umur`
--

INSERT INTO `ducapil_umur` (`id_kecamatan`, `kecamatan`, `umur1`, `umur2`, `umur3`, `umur4`, `umur5`, `umur6`, `umur7`, `umur8`, `id_opd`, `id_tahun`) VALUES
('64c12b7f91420', 'KEDATON', 7766, 8664, 8756, 8848, 7519, 5743, 3507, 2053, '0', 2023),
('64c12b7f92609', 'SUKARAME', 10897, 11132, 11511, 11682, 8927, 7048, 3898, 1362, '0', 2023),
('64c12b7f9342e', 'TANJUNG KARANG BARAT', 10101, 11067, 10092, 10468, 8833, 6211, 3765, 1925, '0', 2023),
('64c12b7f941fc', 'PANJANG', 12062, 13481, 13010, 12486, 10336, 7260, 4269, 2142, '0', 2023),
('64c12b7f94faa', 'TANJUNG KARANG TIMUR', 5591, 6555, 6250, 6529, 5605, 4137, 2575, 1707, '0', 2023),
('64c12b7f95d21', 'TANJUNG KARANG PUSAT', 7374, 8938, 8462, 8406, 7140, 5388, 3312, 2069, '0', 2023),
('64c12b7f9701e', 'TELUK BETUNG SELATAN', 5818, 6616, 6519, 6323, 5463, 4302, 2694, 1656, '0', 2023),
('64c12b7f9817d', 'TELUK BETUNG BARAT', 6810, 6815, 6419, 6472, 5114, 3384, 1743, 1036, '0', 2023),
('64c12b7f98ee6', 'TELUK BETUNG UTARA', 7631, 8609, 8131, 8219, 7320, 5414, 3469, 1863, '0', 2023),
('64c12b7f99c5a', 'RAJABASA', 8929, 9599, 9972, 9816, 7258, 5345, 2655, 1177, '0', 2023),
('64c12b7f9ab8f', 'TANJUNG SENANG', 9683, 10267, 11094, 10863, 7981, 6651, 3261, 1106, '0', 2023),
('64c12b7f9bae9', 'SUKABUMI', 12167, 12843, 12434, 12825, 10019, 6941, 3220, 1276, '0', 2023),
('64c12b7f9c8d3', 'KEMILING', 14200, 14885, 14207, 14513, 12290, 8314, 4110, 1871, '0', 2023),
('64c12b7f9d81a', 'LABUHAN RATU', 7609, 7954, 8082, 8757, 6381, 4688, 3154, 785, '0', 2023),
('64c12b7f9eb14', 'WAY HALIM', 10452, 10873, 11419, 12102, 9129, 7009, 5087, 2225, '0', 2023),
('64c12b7f9f8b3', 'LANGKAPURA', 7011, 7496, 7097, 7262, 5889, 4207, 2269, 892, '0', 2023),
('64c12b7fa0621', 'ENGGAL', 3532, 4571, 4108, 4067, 3738, 2936, 1900, 1337, '0', 2023),
('64c12b7fa1e60', 'KEDAMAIAN', 8136, 9203, 8885, 9226, 7373, 5614, 3303, 1577, '0', 2023),
('64c12b7fa2ec7', 'TELUK BETUNG TIMUR', 8400, 9039, 8718, 8678, 6376, 4537, 2540, 1266, '0', 2023),
('64c12b7fa3d40', 'BUMI WARAS', 9399, 10251, 9998, 9725, 8208, 5690, 3522, 1718, '0', 2023);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dukcapil_agama`
--

CREATE TABLE `dukcapil_agama` (
  `id_kecamatan` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `islam` int(11) DEFAULT NULL,
  `kristen` int(11) DEFAULT NULL,
  `katolik` int(11) DEFAULT NULL,
  `hindu` int(11) DEFAULT NULL,
  `budha` int(11) DEFAULT NULL,
  `konghucu` int(11) DEFAULT NULL,
  `kepercayaan` int(11) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `id_opd` varchar(50) DEFAULT NULL,
  `id_tahun` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `dukcapil_agama`
--

INSERT INTO `dukcapil_agama` (`id_kecamatan`, `kecamatan`, `islam`, `kristen`, `katolik`, `hindu`, `budha`, `konghucu`, `kepercayaan`, `jumlah`, `id_opd`, `id_tahun`) VALUES
('64c1381ca3b6b', 'KEDATON', 49842, 1638, 1204, 41, 131, 0, 0, 52856, '0', 2023),
('64c1381ca50e5', 'SUKARAME', 62544, 2506, 990, 212, 203, 1, 1, 66457, '0', 2023),
('64c1381ca64c0', 'TANJUNG KARANG BARAT', 60844, 926, 352, 51, 289, 0, 0, 62462, '0', 2023),
('64c1381ca9b18', 'PANJANG', 71417, 2524, 604, 65, 436, 0, 0, 75046, '0', 2023),
('64c1381cadf6e', 'TANJUNG KARANG TIMUR', 36867, 893, 454, 57, 678, 0, 0, 38949, '0', 2023),
('64c1381caf0e7', 'TANJUNG KARANG PUSAT', 48411, 1068, 689, 69, 852, 0, 0, 51089, '0', 2023),
('64c1381caff06', 'TELUK BETUNG SELATAN', 35502, 1408, 892, 25, 1563, 1, 0, 39391, '0', 2023),
('64c1381cb0db6', 'TELUK BETUNG BARAT', 35908, 941, 478, 6, 460, 0, 0, 37793, '0', 2023),
('64c1381cb1b65', 'TELUK BETUNG UTARA', 47021, 1738, 960, 71, 859, 7, 0, 50656, '0', 2023),
('64c1381cb2d85', 'RAJABASA', 52631, 1110, 584, 407, 19, 0, 0, 54751, '0', 2023),
('64c1381cb3be0', 'TANJUNG SENANG', 54437, 3741, 1853, 688, 187, 0, 0, 60906, '0', 2023),
('64c1381cb49bd', 'SUKABUMI', 67374, 2450, 1051, 382, 463, 4, 1, 71725, '0', 2023),
('64c1381cb577b', 'KEMILING', 81594, 1954, 557, 127, 152, 5, 1, 84390, '0', 2023),
('64c1381cb672c', 'LABUHAN RATU', 45433, 1758, 584, 172, 91, 3, 4, 48045, '0', 2023),
('64c1381cb769e', 'WAY HALIM', 59995, 4053, 2281, 118, 1845, 4, 0, 68296, '0', 2023),
('64c1381cb89d5', 'LANGKAPURA', 41096, 581, 302, 106, 38, 0, 0, 42123, '0', 2023),
('64c1381cb981c', 'ENGGAL', 23899, 888, 622, 55, 725, 0, 0, 26189, '0', 2023),
('64c1381cba671', 'KEDAMAIAN', 47112, 2910, 1663, 81, 1547, 2, 2, 53317, '0', 2023),
('64c1381cbb570', 'TELUK BETUNG TIMUR', 46689, 1346, 592, 22, 905, 0, 0, 49554, '0', 2023),
('64c1381cbc17d', 'BUMI WARAS', 52814, 2133, 946, 292, 2326, 0, 0, 58511, '0', 2023);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dukcapil_jenis_kelamin`
--

CREATE TABLE `dukcapil_jenis_kelamin` (
  `id_kecamatan` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `pria` int(11) DEFAULT NULL,
  `wanita` int(11) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `id_opd` varchar(50) DEFAULT NULL,
  `id_tahun` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `dukcapil_jenis_kelamin`
--

INSERT INTO `dukcapil_jenis_kelamin` (`id_kecamatan`, `kecamatan`, `pria`, `wanita`, `jumlah`, `id_opd`, `id_tahun`) VALUES
('64c13956b2271', 'KEDATON', 26646, 26210, 52856, 'Dinas Dukcapil', 2023),
('64c13956b35a0', 'SUKARAME', 33710, 32747, 66457, 'Dinas Dukcapil', 2023),
('64c13956b4499', 'TANJUNG KARANG BARAT', 31662, 30800, 62462, 'Dinas Dukcapil', 2023),
('64c13956b571a', 'PANJANG', 38381, 36665, 75046, 'Dinas Dukcapil', 2023),
('64c13956b65d4', 'TANJUNG KARANG TIMUR', 19680, 19269, 38949, 'Dinas Dukcapil', 2023),
('64c13956b7e4e', 'TANJUNG KARANG PUSAT', 25980, 25109, 51089, 'Dinas Dukcapil', 2023),
('64c13956b965b', 'TELUK BETUNG SELATAN', 20009, 19382, 39391, 'Dinas Dukcapil', 2023),
('64c13956baca2', 'TELUK BETUNG BARAT', 19464, 18329, 37793, 'Dinas Dukcapil', 2023),
('64c13956bbec9', 'TELUK BETUNG UTARA', 25610, 25046, 50656, 'Dinas Dukcapil', 2023),
('64c13956bcdf6', 'RAJABASA', 27896, 26855, 54751, 'Dinas Dukcapil', 2023),
('64c13956bdc06', 'TANJUNG SENANG', 30665, 30241, 60906, 'Dinas Dukcapil', 2023),
('64c13956bef57', 'SUKABUMI', 36615, 35110, 71725, 'Dinas Dukcapil', 2023),
('64c13956bfd4d', 'KEMILING', 42747, 41643, 84390, 'Dinas Dukcapil', 2023),
('64c13956c10a7', 'LABUHAN RATU', 24224, 23821, 48045, 'Dinas Dukcapil', 2023),
('64c13956c1d58', 'WAY HALIM', 34426, 33870, 68296, 'Dinas Dukcapil', 2023),
('64c13956c2ad9', 'LANGKAPURA', 21298, 20825, 42123, 'Dinas Dukcapil', 2023),
('64c13956c37af', 'ENGGAL', 12991, 13198, 26189, 'Dinas Dukcapil', 2023),
('64c13956c43f8', 'KEDAMAIAN', 26980, 26337, 53317, 'Dinas Dukcapil', 2023),
('64c13956c5914', 'TELUK BETUNG TIMUR', 25514, 24040, 49554, 'Dinas Dukcapil', 2023),
('64c13956c6571', 'BUMI WARAS', 30140, 28371, 58511, 'Dinas Dukcapil', 2023);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dukcapil_pendidikan`
--

CREATE TABLE `dukcapil_pendidikan` (
  `id_kecamatan` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `tidak_sekolah` int(11) DEFAULT NULL,
  `belum_sd` int(11) DEFAULT NULL,
  `tamat_sd` int(11) DEFAULT NULL,
  `sltp` int(11) DEFAULT NULL,
  `slta` int(11) DEFAULT NULL,
  `d1_2` int(11) DEFAULT NULL,
  `d3` int(11) DEFAULT NULL,
  `d4_s1` int(11) DEFAULT NULL,
  `s2` int(11) DEFAULT NULL,
  `s3` int(11) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `id_opd` varchar(50) DEFAULT NULL,
  `id_tahun` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `dukcapil_pendidikan`
--

INSERT INTO `dukcapil_pendidikan` (`id_kecamatan`, `kecamatan`, `tidak_sekolah`, `belum_sd`, `tamat_sd`, `sltp`, `slta`, `d1_2`, `d3`, `d4_s1`, `s2`, `s3`, `jumlah`, `id_opd`, `id_tahun`) VALUES
('64c138434ef6c', 'KEDATON', 10753, 4869, 4880, 6199, 18736, 467, 1623, 4790, 507, 32, 52856, 'Dinas Dukcapil', 2023),
('64c1384350462', 'SUKARAME', 14780, 6474, 5524, 6813, 19508, 743, 2441, 8835, 1241, 98, 66457, 'Dinas Dukcapil', 2023),
('64c1384351395', 'TANJUNG KARANG BARAT', 15129, 6418, 6588, 8352, 18603, 586, 1578, 4635, 546, 27, 62462, 'Dinas Dukcapil', 2023),
('64c1384352c59', 'PANJANG', 18370, 7411, 12619, 14122, 20169, 302, 623, 1378, 49, 3, 75046, 'Dinas Dukcapil', 2023),
('64c13843549c0', 'TANJUNG KARANG TIMUR', 8975, 3864, 3949, 5040, 12899, 321, 814, 2817, 254, 16, 38949, 'Dinas Dukcapil', 2023),
('64c1384359337', 'TANJUNG KARANG PUSAT', 11677, 5417, 6708, 7361, 14992, 452, 1028, 3114, 327, 13, 51089, 'Dinas Dukcapil', 2023),
('64c138435a32f', 'TELUK BETUNG SELATAN', 8871, 3976, 5747, 6614, 11815, 250, 541, 1456, 116, 5, 39391, 'Dinas Dukcapil', 2023),
('64c138435b131', 'TELUK BETUNG BARAT', 10210, 3645, 7827, 5712, 8609, 132, 372, 1187, 97, 2, 37793, 'Dinas Dukcapil', 2023),
('64c138435bf95', 'TELUK BETUNG UTARA', 11969, 4734, 6416, 6797, 15674, 322, 1062, 3366, 302, 14, 50656, 'Dinas Dukcapil', 2023),
('64c138435cdd0', 'RAJABASA', 11974, 5601, 5190, 5911, 15926, 459, 1812, 6621, 1155, 102, 54751, 'Dinas Dukcapil', 2023),
('64c138435df0e', 'TANJUNG SENANG', 13994, 5734, 5103, 6601, 18942, 637, 2219, 6876, 758, 42, 60906, 'Dinas Dukcapil', 2023),
('64c138435f774', 'SUKABUMI', 16184, 7374, 9576, 10321, 20781, 489, 1578, 4957, 444, 21, 71725, 'Dinas Dukcapil', 2023),
('64c1384360eef', 'KEMILING', 18667, 8583, 9211, 9074, 25245, 814, 2881, 8923, 946, 46, 84390, 'Dinas Dukcapil', 2023),
('64c1384361ca3', 'LABUHAN RATU', 9866, 4533, 3916, 5336, 15082, 367, 1693, 6339, 854, 59, 48045, 'Dinas Dukcapil', 2023),
('64c1384362fd7', 'WAY HALIM', 13964, 6594, 6335, 8089, 22136, 575, 2065, 7627, 866, 45, 68296, 'Dinas Dukcapil', 2023),
('64c1384363d34', 'LANGKAPURA', 8898, 4380, 4017, 4716, 12776, 382, 1408, 4765, 721, 60, 42123, 'Dinas Dukcapil', 2023),
('64c138436526a', 'ENGGAL', 5243, 2547, 2267, 3161, 8616, 263, 780, 2869, 416, 27, 26189, 'Dinas Dukcapil', 2023),
('64c1384366597', 'KEDAMAIAN', 12089, 5278, 6067, 6851, 16091, 380, 1287, 4797, 460, 17, 53317, 'Dinas Dukcapil', 2023),
('64c13843678fb', 'TELUK BETUNG TIMUR', 12683, 5163, 11236, 8001, 10871, 138, 437, 987, 38, 0, 49554, 'Dinas Dukcapil', 2023),
('64c13843685be', 'BUMI WARAS', 13154, 6604, 11032, 10797, 14768, 215, 528, 1328, 78, 7, 58511, 'Dinas Dukcapil', 2023);

-- --------------------------------------------------------

--
-- Struktur dari tabel `industri_jumlah`
--

CREATE TABLE `industri_jumlah` (
  `id_industri` varchar(50) NOT NULL,
  `industri` varchar(50) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `ikahh` int(11) DEFAULT NULL,
  `ilmea` int(11) DEFAULT NULL,
  `id_opd` varchar(50) DEFAULT NULL,
  `id_tahun` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `industri_jumlah`
--

INSERT INTO `industri_jumlah` (`id_industri`, `industri`, `jumlah`, `ikahh`, `ilmea`, `id_opd`, `id_tahun`) VALUES
('64c12eeb4c1e2', 'Industri Menengah', 197, 154, 43, 'Dinas Prindustrian', 2023),
('64c12eeb4d53a', 'Industri Kecil', 4268, 2534, 1734, 'Dinas Prindustrian', 2023),
('64c12eeb4e4cc', 'Industri Rumah Tangga', 8464, 4737, 3727, 'Dinas Prindustrian', 2023);

-- --------------------------------------------------------

--
-- Struktur dari tabel `posyandu`
--

CREATE TABLE `posyandu` (
  `id_posyandu` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `puskesmas` varchar(255) NOT NULL,
  `pratama` int(11) DEFAULT NULL,
  `madya` int(11) DEFAULT NULL,
  `purnama` int(11) DEFAULT NULL,
  `mandiri` int(11) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `aktif` int(11) DEFAULT NULL,
  `puskeskel` int(11) DEFAULT NULL,
  `id_opd` varchar(50) DEFAULT NULL,
  `id_tahun` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `posyandu`
--

INSERT INTO `posyandu` (`id_posyandu`, `kecamatan`, `puskesmas`, `pratama`, `madya`, `purnama`, `mandiri`, `jumlah`, `aktif`, `puskeskel`, `id_opd`, `id_tahun`) VALUES
('64c139fe76ae2', 'Telukbetung Barat', 'Bakung', 0, 0, 0, 26, 26, 26, 26, NULL, 2023),
('64c139fe77dd9', 'Telukbetung Barat', 'Kotakarang', 0, 0, 0, 18, 18, 18, 18, NULL, 2023),
('64c139fe7967e', 'Telukbetung Timur', 'Sukamaju', 0, 0, 0, 12, 12, 12, 12, NULL, 2023),
('64c139fe7abf0', 'Telukbetung Selatan', 'Pasar Ambon', 0, 0, 0, 36, 36, 36, 36, NULL, 2023),
('64c139fe7c778', 'Bumi Waras', 'Sukaraja', 0, 0, 0, 42, 42, 42, 42, NULL, 2023),
('64c139fe7d4db', 'Panjang', 'Panjang', 0, 0, 0, 51, 51, 51, 51, NULL, 2023),
('64c139fe7e228', 'Tanjungkarang Timur', 'Kampung Sawah', 0, 0, 0, 31, 31, 31, 31, NULL, 2023),
('64c139fe7eec2', 'Kedamaian', 'Satelit', 0, 0, 0, 31, 31, 31, 31, NULL, 2023),
('64c139fe7fb89', 'Telukbetung Utara', 'Kupang Kota', 0, 0, 0, 27, 27, 27, 27, NULL, 2023),
('64c139fe82c30', 'Telukbetung Utara', 'Sumur Batu', 0, 0, 0, 19, 19, 19, 19, NULL, 2023),
('64c139fe83aa3', 'Tanjungkarang Pusat', 'Simpur', 0, 0, 0, 14, 14, 14, 14, NULL, 2023),
('64c139fe87c03', 'Tanjungkarang Pusat', 'Palapa', 0, 0, 0, 20, 20, 20, 20, NULL, 2023),
('64c139fe88add', 'Enggal', 'Kebon Jahe ', 0, 0, 0, 23, 23, 23, 23, NULL, 2023),
('64c139fe899d1', 'Tanjungkarang Barat', 'Gedong Air', 0, 0, 0, 22, 22, 22, 22, NULL, 2023),
('64c139fe8a729', 'Tanjungkarang Barat', 'Susunan Baru', 0, 0, 0, 12, 12, 12, 12, NULL, 2023),
('64c139fe8b8d9', 'Kemiling', 'Kemiling', 0, 0, 0, 28, 28, 28, 28, NULL, 2023),
('64c139fe8c715', 'Kemiling', ' Beringin Raya', 0, 0, 0, 10, 10, 10, 10, NULL, 2023),
('64c139fe8d45c', 'Kemiling', 'Pinang Jaya', 0, 0, 0, 8, 8, 8, 8, NULL, 2023),
('64c139fe8e141', 'Langkapura', 'Segalamider', 0, 0, 0, 26, 26, 26, 26, NULL, 2023),
('64c139fe8edff', 'Kedaton', 'Kedaton', 0, 0, 0, 31, 31, 31, 31, NULL, 2023),
('64c139fe8f8f8', 'Rajabasa', 'Rajabasa Indah', 0, 0, 0, 38, 38, 38, 38, NULL, 2023),
('64c139fe90ac6', 'Tanjung Senang', 'Way Kandis', 0, 0, 0, 29, 29, 29, 29, NULL, 2023),
('64c139fe9186b', 'Labuhan Ratu', 'Labuhan Ratu ', 0, 0, 0, 29, 29, 29, 29, NULL, 2023),
('64c139fe925ae', 'Sukarame', 'Sukarame', 0, 0, 0, 15, 15, 15, 15, NULL, 2023),
('64c139fe93288', 'Sukarame', 'Permata Sukarame', 0, 0, 0, 12, 12, 12, 12, NULL, 2023),
('64c139fe9401e', 'Sukarame', 'Korpri', 0, 0, 0, 8, 8, 8, 8, NULL, 2023),
('64c139fe94e12', 'Sukabumi', 'Sukabumi', 0, 0, 0, 21, 21, 21, 21, NULL, 2023),
('64c139fe96033', 'Sukabumi', 'Campang Raya', 0, 0, 0, 13, 13, 13, 13, NULL, 2023),
('64c139fe96f30', 'Sukabumi', 'Way Laga', 0, 0, 0, 15, 15, 15, 15, NULL, 2023),
('64c139fe9800d', 'Way Halim', 'Way Halim', 0, 0, 0, 20, 20, 20, 20, NULL, 2023),
('64c139fe98d0a', 'Way Halim', 'Way Halim II', 0, 0, 0, 18, 18, 18, 18, NULL, 2023);

-- --------------------------------------------------------

--
-- Struktur dari tabel `puskesmas`
--

CREATE TABLE `puskesmas` (
  `id_sarana` varchar(50) NOT NULL,
  `sarana` varchar(50) NOT NULL,
  `rawat_inap` varchar(50) DEFAULT NULL,
  `non_rawat_inap` varchar(50) DEFAULT NULL,
  `id_opd` varchar(50) DEFAULT NULL,
  `id_tahun` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `puskesmas`
--

INSERT INTO `puskesmas` (`id_sarana`, `sarana`, `rawat_inap`, `non_rawat_inap`, `id_opd`, `id_tahun`) VALUES
('64c1399fe44d3', 'Bakung', '-', 'Non Rawat Inap', 'Dinas Kesehatan', 2023),
('64c1399fe5d01', 'Kotakarang', 'Rawat Inap', '-', 'Dinas Kesehatan', 2023),
('64c1399fe6c4d', 'Sukamaju', 'Rawat Inap', '-', 'Dinas Kesehatan', 2023),
('64c1399fe9b7a', 'Pasar Ambon', '-', 'Non Rawat Inap', 'Dinas Kesehatan', 2023),
('64c1399fea8d4', 'Sukaraja', 'Rawat Inap', '-', 'Dinas Kesehatan', 2023),
('64c1399feb83c', 'Panjang', 'Rawat Inap', '-', 'Dinas Kesehatan', 2023),
('64c1399fecd52', 'Kampung Sawah', 'Rawat Inap', '-', 'Dinas Kesehatan', 2023),
('64c1399fee2a8', 'Satelit', 'Rawat Inap', '-', 'Dinas Kesehatan', 2023),
('64c1399fef2a6', 'Kupang Kota', '-', 'Non Rawat Inap', 'Dinas Kesehatan', 2023),
('64c1399ff0073', 'Sumur Batu', '-', 'Non Rawat Inap', 'Dinas Kesehatan', 2023),
('64c1399ff0e78', 'Simpur', 'Rawat Inap', '-', 'Dinas Kesehatan', 2023),
('64c1399ff1c33', 'Palapa', '-', 'Non Rawat Inap', 'Dinas Kesehatan', 2023),
('64c1399ff28c5', 'Kebon Jahe ', '-', 'Non Rawat Inap', 'Dinas Kesehatan', 2023),
('64c1399ff3934', 'Gedong Air', 'Rawat Inap', '-', 'Dinas Kesehatan', 2023),
('64c139a000373', 'Susunan Baru', '-', 'Non Rawat Inap', 'Dinas Kesehatan', 2023),
('64c139a0010ad', 'Kemiling', 'Rawat Inap', '-', 'Dinas Kesehatan', 2023),
('64c139a001d31', 'Beringin Raya', '-', 'Non Rawat Inap', 'Dinas Kesehatan', 2023),
('64c139a002d44', 'Pinang Jaya', '-', 'Non Rawat Inap', 'Dinas Kesehatan', 2023),
('64c139a003a95', 'Segalamider', '-', 'Non Rawat Inap', 'Dinas Kesehatan', 2023),
('64c139a004e67', 'Kedaton', 'Rawat Inap', '-', 'Dinas Kesehatan', 2023),
('64c139a005ba2', 'Rajabasa Indah', '-', 'Non Rawat Inap', 'Dinas Kesehatan', 2023),
('64c139a006b8d', 'Way Kandis', 'Rawat Inap', '-', 'Dinas Kesehatan', 2023),
('64c139a00799c', 'Labuhan Ratu ', '-', 'Non Rawat Inap', 'Dinas Kesehatan', 2023),
('64c139a008702', 'Sukarame', '-', 'Non Rawat Inap', 'Dinas Kesehatan', 2023),
('64c139a009483', 'Permata Sukarame', 'Rawat Inap', '-', 'Dinas Kesehatan', 2023),
('64c139a00a13c', 'Korpri', '-', 'Non Rawat Inap', 'Dinas Kesehatan', 2023),
('64c139a00ad25', 'Sukabumi', 'Rawat Inap', '-', 'Dinas Kesehatan', 2023),
('64c139a00b909', 'Campang Raya', '-', 'Non Rawat Inap', 'Dinas Kesehatan', 2023),
('64c139a00c674', 'Way Laga', 'Rawat Inap', '-', 'Dinas Kesehatan', 2023),
('64c139a00d44f', 'Way Halim', '-', 'Non Rawat Inap', 'Dinas Kesehatan', 2023),
('64c139a00e6a7', 'Way Halim II', 'Rawat Inap', '-', 'Dinas Kesehatan', 2023);

-- --------------------------------------------------------

--
-- Struktur dari tabel `rumah_sakit`
--

CREATE TABLE `rumah_sakit` (
  `id_rs` varchar(50) NOT NULL,
  `nama_rs` varchar(50) NOT NULL,
  `rs_umum` varchar(50) DEFAULT NULL,
  `rs_kusus` varchar(50) DEFAULT NULL,
  `id_opd` varchar(50) DEFAULT NULL,
  `id_tahun` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `rumah_sakit`
--

INSERT INTO `rumah_sakit` (`id_rs`, `nama_rs`, `rs_umum`, `rs_kusus`, `id_opd`, `id_tahun`) VALUES
('64c139b81ec18', 'RSUD Abdoel Moeloek', 'Umum', '-', 'Dinas Kesehatan', 2023),
('64c139b820068', 'RSUD A. dadi Tjokrodipo', 'Umum', '-', 'Dinas Kesehatan', 2023),
('64c139b82108d', 'RS Advent', 'Umum', '-', 'Dinas Kesehatan', 2023),
('64c139b82381e', 'RS Tk IV 02.07.04', 'Umum', '-', 'Dinas Kesehatan', 2023),
('64c139b82497f', 'RS Bhayangkara', 'Umum', '-', 'Dinas Kesehatan', 2023),
('64c139b825731', 'RS Urip Sumohardjo', 'Umum', '-', 'Dinas Kesehatan', 2023),
('64c139b826412', 'RS Budi Medika', 'Umum', '-', 'Dinas Kesehatan', 2023),
('64c139b826fa3', 'RS Hermina', 'Umum', '-', 'Dinas Kesehatan', 2023),
('64c139b828bc4', 'RS Imanuel', 'Umum', '-', 'Dinas Kesehatan', 2023),
('64c139b82ae03', 'RS Bumi Waras', 'Umum', '-', 'Dinas Kesehatan', 2023),
('64c139b82c914', 'RS Pertamina Bintang Amin', 'Umum', '-', 'Dinas Kesehatan', 2023),
('64c139b82ddd1', 'RS Graha Husada', 'Umum', '-', 'Dinas Kesehatan', 2023),
('64c139b82f1aa', 'RS Belleza Kedaton', 'Umum', '-', 'Dinas Kesehatan', 2023),
('64c139b82fe8a', 'RSIA Puri Betik Hati', '-', 'Khusus', 'Dinas Kesehatan', 2023),
('64c139b830ff7', 'RSIA Bunda Asyifa', '-', 'Khusus', 'Dinas Kesehatan', 2023),
('64c139b831c03', 'RSIA Restu Bunda', '-', 'Khusus', 'Dinas Kesehatan', 2023),
('64c139b832918', 'RSIA Mutiara Putri', '-', 'Khusus', 'Dinas Kesehatan', 2023),
('64c139b8335c3', 'RSIA Santa Ana', '-', 'Khusus', 'Dinas Kesehatan', 2023),
('64c139b83426c', 'RS Mata LEC', '-', 'Khusus', 'Dinas Kesehatan', 2023),
('64c139b834ec4', 'RS Mata Permana Sari', '-', 'Khusus', 'Dinas Kesehatan', 2023);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_opd`
--

CREATE TABLE `tabel_opd` (
  `id_opd` varchar(50) NOT NULL,
  `id_tahun` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tabel_opd`
--

INSERT INTO `tabel_opd` (`id_opd`, `id_tahun`) VALUES
('BKD', 2022),
('Dinas Dukcapil', 2022),
('Dinas Kesehatan', 2022),
('Dinas Pangan', 2022),
('Dinas Pekerjaan Umum', 2022),
('Dinas Perhubungan', 2022),
('Dinas Pertanian', 2022),
('Dinas Sosial', 2022);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_tahun`
--

CREATE TABLE `tabel_tahun` (
  `id_tahun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tabel_tahun`
--

INSERT INTO `tabel_tahun` (`id_tahun`) VALUES
(2022),
(2023),
(2024),
(2025),
(2026),
(2027),
(2028),
(2029),
(2030),
(2031),
(2032),
(2033),
(2034),
(2035),
(2036),
(2037),
(2038),
(2039),
(2040),
(2041),
(2042),
(2043),
(2044),
(2045),
(2046),
(2047),
(2048),
(2049),
(2050),
(2051),
(2052),
(2053),
(2054),
(2055),
(2056),
(2057),
(2058),
(2059),
(2060),
(2061),
(2062),
(2063),
(2064),
(2065),
(2066),
(2067),
(2068),
(2069),
(2070),
(2071),
(2072),
(2073),
(2074),
(2075),
(2076),
(2077),
(2078),
(2079),
(2080),
(2081),
(2082),
(2083),
(2084),
(2085),
(2086),
(2087),
(2088),
(2089),
(2090),
(2091),
(2092),
(2093),
(2094),
(2095),
(2096),
(2097),
(2098),
(2099),
(2100),
(2101),
(2102),
(2103),
(2104),
(2105),
(2106),
(2107),
(2108),
(2109),
(2110),
(2111),
(2112),
(2113),
(2114),
(2115),
(2116),
(2117),
(2118),
(2119),
(2120),
(2121),
(2122),
(2123),
(2124),
(2125),
(2126),
(2127),
(2128),
(2129),
(2130),
(2131),
(2132),
(2133),
(2134),
(2135),
(2136),
(2137),
(2138),
(2139),
(2140),
(2141),
(2142),
(2143),
(2144),
(2145),
(2146),
(2147),
(2148),
(2149),
(2150),
(2151),
(2152),
(2153),
(2154),
(2155),
(2156),
(2157),
(2158),
(2159),
(2160),
(2161),
(2162),
(2163),
(2164),
(2165),
(2166),
(2167),
(2168),
(2169),
(2170),
(2171),
(2172),
(2173),
(2174),
(2175),
(2176),
(2177),
(2178),
(2179),
(2180),
(2181),
(2182),
(2183),
(2184),
(2185),
(2186),
(2187),
(2188),
(2189),
(2190),
(2191),
(2192),
(2193),
(2194),
(2195),
(2196),
(2197),
(2198),
(2199),
(2200),
(2201),
(2202),
(2203),
(2204),
(2205),
(2206),
(2207),
(2208),
(2209),
(2210),
(2211),
(2212),
(2213),
(2214),
(2215),
(2216),
(2217),
(2218),
(2219),
(2220),
(2221),
(2222),
(2223),
(2224),
(2225),
(2226),
(2227),
(2228),
(2229),
(2230),
(2231),
(2232),
(2233),
(2234);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tenaga_kerja`
--

CREATE TABLE `tenaga_kerja` (
  `id_tenaga` varchar(50) NOT NULL,
  `tenaga_kerja` varchar(50) NOT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `id_opd` varchar(50) DEFAULT NULL,
  `id_tahun` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tenaga_kerja`
--

INSERT INTO `tenaga_kerja` (`id_tenaga`, `tenaga_kerja`, `jumlah`, `id_opd`, `id_tahun`) VALUES
('64c139e115a0e', 'dr Spesialis', 508, 'Dinas Kesehatan', 2023),
('64c139e116d18', 'dr Umum', 541, 'Dinas Kesehatan', 2023),
('64c139e117c45', 'dr Gigi', 85, 'Dinas Kesehatan', 2023),
('64c139e11a795', 'Perawat', 2973, 'Dinas Kesehatan', 2023),
('64c139e11b82c', 'Bidan', 987, 'Dinas Kesehatan', 2023),
('64c139e11c5e5', 'Kesehatan Masyarakat', 127, 'Dinas Kesehatan', 2023),
('64c139e11d3d3', 'Kesehatan Lingkungan', 69, 'Dinas Kesehatan', 2023),
('64c139e11e2b8', 'Gizi', 83, 'Dinas Kesehatan', 2023),
('64c139e11f084', 'ATLM', 219, 'Dinas Kesehatan', 2023),
('64c139e1203cf', 'Teknik Biomedika', 113, 'Dinas Kesehatan', 2023),
('64c139e12109f', 'Keterapian Fisik', 46, 'Dinas Kesehatan', 2023),
('64c139e121d97', 'Keterapian Medik', 123, 'Dinas Kesehatan', 2023),
('64c139e122ee1', 'Apoteker', 161, 'Dinas Kesehatan', 2023),
('64c139e124c9f', 'Tenaga Teknis Kefarmasian', 102, 'Dinas Kesehatan', 2023),
('64c139e1270ad', 'SDM Penunjang', 2423, 'Dinas Kesehatan', 2023);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'lociq', 'lociq@mail.com', '0139a3c5cf42394be982e766c93f5ed0'),
(2, 'root', 'rootan@mail.com', '421aa90e079fa326b6494f812ad13e79'),
(4, 'admin', 'admin@mail.com', '21232f297a57a5a743894a0e4a801fc3'),
(5, 'kavizaahza', 'kavizaahza@mail.com', '421aa90e079fa326b6494f812ad13e79');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bkd_golongan_jenis_kelamin`
--
ALTER TABLE `bkd_golongan_jenis_kelamin`
  ADD PRIMARY KEY (`id_golongan_jenis_kelamin`),
  ADD KEY `id_tahun` (`id_tahun`),
  ADD KEY `id_opd` (`id_opd`);

--
-- Indeks untuk tabel `bkd_golongan_umur`
--
ALTER TABLE `bkd_golongan_umur`
  ADD PRIMARY KEY (`id_golongan`),
  ADD KEY `id_tahun` (`id_tahun`),
  ADD KEY `id_opd` (`id_opd`);

--
-- Indeks untuk tabel `bkd_pendidikan`
--
ALTER TABLE `bkd_pendidikan`
  ADD PRIMARY KEY (`id_pendidikan`),
  ADD KEY `id_tahun` (`id_tahun`),
  ADD KEY `id_opd` (`id_opd`);

--
-- Indeks untuk tabel `bkd_umur`
--
ALTER TABLE `bkd_umur`
  ADD PRIMARY KEY (`id_umur`),
  ADD KEY `id_tahun` (`id_tahun`),
  ADD KEY `id_opd` (`id_opd`);

--
-- Indeks untuk tabel `dinsos`
--
ALTER TABLE `dinsos`
  ADD PRIMARY KEY (`id_kecamatan`),
  ADD KEY `id_tahun` (`id_tahun`),
  ADD KEY `id_opd` (`id_opd`);

--
-- Indeks untuk tabel `dishub`
--
ALTER TABLE `dishub`
  ADD PRIMARY KEY (`id_bulan`),
  ADD KEY `id_tahun` (`id_tahun`),
  ADD KEY `id_opd` (`id_opd`);

--
-- Indeks untuk tabel `dishub_wajib_noumum`
--
ALTER TABLE `dishub_wajib_noumum`
  ADD PRIMARY KEY (`id_kendaraan`),
  ADD KEY `id_tahun` (`id_tahun`),
  ADD KEY `id_opd` (`id_opd`);

--
-- Indeks untuk tabel `dishub_wajib_umum`
--
ALTER TABLE `dishub_wajib_umum`
  ADD PRIMARY KEY (`id_kendaraan`),
  ADD KEY `id_tahun` (`id_tahun`),
  ADD KEY `id_opd` (`id_opd`);

--
-- Indeks untuk tabel `dispan`
--
ALTER TABLE `dispan`
  ADD PRIMARY KEY (`id_komoditas`),
  ADD KEY `id_tahun` (`id_tahun`),
  ADD KEY `id_opd` (`id_opd`);

--
-- Indeks untuk tabel `dispentani`
--
ALTER TABLE `dispentani`
  ADD PRIMARY KEY (`id_tanaman`),
  ADD KEY `id_tahun` (`id_tahun`),
  ADD KEY `id_opd` (`id_opd`);

--
-- Indeks untuk tabel `dispu_flyover_underpass`
--
ALTER TABLE `dispu_flyover_underpass`
  ADD PRIMARY KEY (`id_flyover`),
  ADD KEY `id_tahun` (`id_tahun`),
  ADD KEY `id_opd` (`id_opd`);

--
-- Indeks untuk tabel `dispu_jenis_permukaan_jalan`
--
ALTER TABLE `dispu_jenis_permukaan_jalan`
  ADD PRIMARY KEY (`tahun`),
  ADD KEY `id_tahun` (`id_tahun`),
  ADD KEY `id_opd` (`id_opd`);

--
-- Indeks untuk tabel `dispu_panjang_jalan`
--
ALTER TABLE `dispu_panjang_jalan`
  ADD PRIMARY KEY (`tahun`),
  ADD KEY `id_tahun` (`id_tahun`),
  ADD KEY `id_opd` (`id_opd`);

--
-- Indeks untuk tabel `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id_dok`);

--
-- Indeks untuk tabel `ducapil_umur`
--
ALTER TABLE `ducapil_umur`
  ADD PRIMARY KEY (`id_kecamatan`),
  ADD KEY `id_tahun` (`id_tahun`),
  ADD KEY `id_opd` (`id_opd`);

--
-- Indeks untuk tabel `dukcapil_agama`
--
ALTER TABLE `dukcapil_agama`
  ADD PRIMARY KEY (`id_kecamatan`),
  ADD KEY `id_tahun` (`id_tahun`),
  ADD KEY `id_opd` (`id_opd`);

--
-- Indeks untuk tabel `dukcapil_jenis_kelamin`
--
ALTER TABLE `dukcapil_jenis_kelamin`
  ADD PRIMARY KEY (`id_kecamatan`),
  ADD KEY `id_tahun` (`id_tahun`),
  ADD KEY `id_opd` (`id_opd`);

--
-- Indeks untuk tabel `dukcapil_pendidikan`
--
ALTER TABLE `dukcapil_pendidikan`
  ADD PRIMARY KEY (`id_kecamatan`),
  ADD KEY `id_tahun` (`id_tahun`),
  ADD KEY `id_opd` (`id_opd`);

--
-- Indeks untuk tabel `industri_jumlah`
--
ALTER TABLE `industri_jumlah`
  ADD PRIMARY KEY (`id_industri`),
  ADD KEY `id_tahun` (`id_tahun`),
  ADD KEY `id_opd` (`id_opd`);

--
-- Indeks untuk tabel `posyandu`
--
ALTER TABLE `posyandu`
  ADD PRIMARY KEY (`id_posyandu`),
  ADD KEY `id_tahun` (`id_tahun`),
  ADD KEY `id_opd` (`id_opd`);

--
-- Indeks untuk tabel `puskesmas`
--
ALTER TABLE `puskesmas`
  ADD PRIMARY KEY (`id_sarana`),
  ADD KEY `id_tahun` (`id_tahun`),
  ADD KEY `id_opd` (`id_opd`);

--
-- Indeks untuk tabel `tabel_opd`
--
ALTER TABLE `tabel_opd`
  ADD PRIMARY KEY (`id_opd`),
  ADD KEY `tabel_opd_ibfk_1` (`id_tahun`);

--
-- Indeks untuk tabel `tabel_tahun`
--
ALTER TABLE `tabel_tahun`
  ADD PRIMARY KEY (`id_tahun`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `bkd_golongan_jenis_kelamin`
--
ALTER TABLE `bkd_golongan_jenis_kelamin`
  ADD CONSTRAINT `bkd_golongan_jenis_kelamin_ibfk_1` FOREIGN KEY (`id_tahun`) REFERENCES `tabel_tahun` (`id_tahun`),
  ADD CONSTRAINT `bkd_golongan_jenis_kelamin_ibfk_2` FOREIGN KEY (`id_opd`) REFERENCES `tabel_opd` (`id_opd`);

--
-- Ketidakleluasaan untuk tabel `bkd_golongan_umur`
--
ALTER TABLE `bkd_golongan_umur`
  ADD CONSTRAINT `bkd_golongan_umur_ibfk_1` FOREIGN KEY (`id_tahun`) REFERENCES `tabel_tahun` (`id_tahun`),
  ADD CONSTRAINT `bkd_golongan_umur_ibfk_2` FOREIGN KEY (`id_opd`) REFERENCES `tabel_opd` (`id_opd`);

--
-- Ketidakleluasaan untuk tabel `bkd_pendidikan`
--
ALTER TABLE `bkd_pendidikan`
  ADD CONSTRAINT `bkd_pendidikan_ibfk_1` FOREIGN KEY (`id_tahun`) REFERENCES `tabel_tahun` (`id_tahun`),
  ADD CONSTRAINT `bkd_pendidikan_ibfk_2` FOREIGN KEY (`id_opd`) REFERENCES `tabel_opd` (`id_opd`);

--
-- Ketidakleluasaan untuk tabel `bkd_umur`
--
ALTER TABLE `bkd_umur`
  ADD CONSTRAINT `bkd_umur_ibfk_1` FOREIGN KEY (`id_tahun`) REFERENCES `tabel_tahun` (`id_tahun`),
  ADD CONSTRAINT `bkd_umur_ibfk_2` FOREIGN KEY (`id_opd`) REFERENCES `tabel_opd` (`id_opd`);

--
-- Ketidakleluasaan untuk tabel `dinsos`
--
ALTER TABLE `dinsos`
  ADD CONSTRAINT `dinsos_ibfk_1` FOREIGN KEY (`id_tahun`) REFERENCES `tabel_tahun` (`id_tahun`),
  ADD CONSTRAINT `dinsos_ibfk_2` FOREIGN KEY (`id_opd`) REFERENCES `tabel_opd` (`id_opd`);

--
-- Ketidakleluasaan untuk tabel `dishub`
--
ALTER TABLE `dishub`
  ADD CONSTRAINT `dishub_ibfk_1` FOREIGN KEY (`id_tahun`) REFERENCES `tabel_tahun` (`id_tahun`),
  ADD CONSTRAINT `dishub_ibfk_2` FOREIGN KEY (`id_opd`) REFERENCES `tabel_opd` (`id_opd`);

--
-- Ketidakleluasaan untuk tabel `dishub_wajib_umum`
--
ALTER TABLE `dishub_wajib_umum`
  ADD CONSTRAINT `dishub_wajib_umum_ibfk_1` FOREIGN KEY (`id_tahun`) REFERENCES `tabel_tahun` (`id_tahun`),
  ADD CONSTRAINT `dishub_wajib_umum_ibfk_2` FOREIGN KEY (`id_opd`) REFERENCES `tabel_opd` (`id_opd`);

--
-- Ketidakleluasaan untuk tabel `dispan`
--
ALTER TABLE `dispan`
  ADD CONSTRAINT `dispan_ibfk_1` FOREIGN KEY (`id_tahun`) REFERENCES `tabel_tahun` (`id_tahun`),
  ADD CONSTRAINT `dispan_ibfk_2` FOREIGN KEY (`id_opd`) REFERENCES `tabel_opd` (`id_opd`);

--
-- Ketidakleluasaan untuk tabel `dispentani`
--
ALTER TABLE `dispentani`
  ADD CONSTRAINT `dispentani_ibfk_1` FOREIGN KEY (`id_tahun`) REFERENCES `tabel_tahun` (`id_tahun`),
  ADD CONSTRAINT `dispentani_ibfk_2` FOREIGN KEY (`id_opd`) REFERENCES `tabel_opd` (`id_opd`);

--
-- Ketidakleluasaan untuk tabel `dispu_flyover_underpass`
--
ALTER TABLE `dispu_flyover_underpass`
  ADD CONSTRAINT `dispu_flyover_underpass_ibfk_1` FOREIGN KEY (`id_tahun`) REFERENCES `tabel_tahun` (`id_tahun`),
  ADD CONSTRAINT `dispu_flyover_underpass_ibfk_2` FOREIGN KEY (`id_opd`) REFERENCES `tabel_opd` (`id_opd`);

--
-- Ketidakleluasaan untuk tabel `dispu_jenis_permukaan_jalan`
--
ALTER TABLE `dispu_jenis_permukaan_jalan`
  ADD CONSTRAINT `dispu_jenis_permukaan_jalan_ibfk_1` FOREIGN KEY (`id_tahun`) REFERENCES `tabel_tahun` (`id_tahun`),
  ADD CONSTRAINT `dispu_jenis_permukaan_jalan_ibfk_2` FOREIGN KEY (`id_opd`) REFERENCES `tabel_opd` (`id_opd`);

--
-- Ketidakleluasaan untuk tabel `dispu_panjang_jalan`
--
ALTER TABLE `dispu_panjang_jalan`
  ADD CONSTRAINT `dispu_panjang_jalan_ibfk_1` FOREIGN KEY (`id_tahun`) REFERENCES `tabel_tahun` (`id_tahun`),
  ADD CONSTRAINT `dispu_panjang_jalan_ibfk_2` FOREIGN KEY (`id_opd`) REFERENCES `tabel_opd` (`id_opd`);

--
-- Ketidakleluasaan untuk tabel `puskesmas`
--
ALTER TABLE `puskesmas`
  ADD CONSTRAINT `diskes_ibfk_1` FOREIGN KEY (`id_tahun`) REFERENCES `tabel_tahun` (`id_tahun`),
  ADD CONSTRAINT `diskes_ibfk_2` FOREIGN KEY (`id_opd`) REFERENCES `tabel_opd` (`id_opd`);

--
-- Ketidakleluasaan untuk tabel `tabel_opd`
--
ALTER TABLE `tabel_opd`
  ADD CONSTRAINT `tabel_opd_ibfk_1` FOREIGN KEY (`id_tahun`) REFERENCES `tabel_tahun` (`id_tahun`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
