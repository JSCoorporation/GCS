-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Jul 2019 pada 21.04
-- Versi server: 10.1.39-MariaDB
-- Versi PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simbis`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita_acara_uji_skripsi`
--

CREATE TABLE `berita_acara_uji_skripsi` (
  `id_berita_acara` int(10) NOT NULL,
  `tgl_berita_acara` date DEFAULT NULL,
  `id_judul` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_sidang`
--

CREATE TABLE `daftar_sidang` (
  `id_daftar_sidang` int(10) NOT NULL,
  `tgl_daftar_sidang` date DEFAULT NULL,
  `id_judul` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE `dosen` (
  `id_dosen` int(10) NOT NULL,
  `nama_dosen` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`id_dosen`, `nama_dosen`) VALUES
(2200, 'Ahmad Rifai'),
(2201, 'Henny Indriyawati'),
(2202, 'Prind Triajeng'),
(2203, 'Nurtriana Hidayati');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen_bimbingan`
--

CREATE TABLE `dosen_bimbingan` (
  `id_bim_skripsi` int(10) NOT NULL,
  `tgl_bimbingan` date DEFAULT NULL,
  `id_kategori` int(2) DEFAULT NULL,
  `nim` varchar(15) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `judul` varchar(50) DEFAULT NULL,
  `dosen_pembimbing` varchar(100) DEFAULT NULL,
  `status` enum('Pending','Revisi','Acc') DEFAULT NULL,
  `keterangan` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dosen_bimbingan`
--

INSERT INTO `dosen_bimbingan` (`id_bim_skripsi`, `tgl_bimbingan`, `id_kategori`, `nim`, `nama`, `judul`, `dosen_pembimbing`, `status`, `keterangan`) VALUES
(101, '2019-06-13', 4, 'G.131.17.0012', 'Johan Santoso', 'Antrian Bank Berbasis Desktop', 'Ahmad Rifai', 'Acc', 'Lanjut BAB selanjutnya'),
(102, '2019-06-14', 1, 'G.131.17.0019', 'Ganang Setyo Ajie', 'Sistem Penggajian Otomatis PT Jaya Makmur', 'Henny Indriyawati', 'Revisi', 'Ada kesalahan pada format penulisan tentang Pendahuluan'),
(103, '2019-06-15', 3, 'G.131.17.0019', 'Muhammad Rifai', 'Sistem E-Ticketing', 'Prind Triajeng', 'Revisi', 'Ditunda terlebih dahulu dikarenakan kerkurangan data'),
(104, '2019-06-16', 2, 'G.131.17.0036', 'Fahrul Fuad Zain', 'CCTV Cloud', 'Nurtriana Hidayati', 'Pending', 'Judul kurang spesifik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen_nilai`
--

CREATE TABLE `dosen_nilai` (
  `id_bim_skripsi` int(10) NOT NULL,
  `nim` varchar(15) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `judul` varchar(50) DEFAULT NULL,
  `dosen_pembimbing` varchar(100) DEFAULT NULL,
  `nilai` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dosen_nilai`
--

INSERT INTO `dosen_nilai` (`id_bim_skripsi`, `nim`, `nama`, `judul`, `dosen_pembimbing`, `nilai`) VALUES
(101, 'G.131.17.0012', 'Johan Santoso', 'Antrian Bank Berbasis Desktop', 'Ahmad Rifai', 90),
(102, 'G.131.17.0019', 'Ganang Setyo Ajie', 'Sistem Penggajian Otomatis PT Jaya Makmur', 'Henny Indriyawati', 80),
(103, 'G.131.17.0020', 'Muhammad Rifai', 'Sistem E-Ticketing', 'Prind Triajeng', 80),
(104, 'G.131.17.0036', 'Fahrul Fuad Zain', 'CCTV Cloud', 'Nurtriana Hidayati', 80);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen_penguji`
--

CREATE TABLE `dosen_penguji` (
  `id_bim_skripsi` int(10) NOT NULL,
  `tgl_bimbingan` date DEFAULT NULL,
  `nim` varchar(15) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `judul` varchar(50) DEFAULT NULL,
  `dosen_penguji` varchar(100) DEFAULT NULL,
  `status` enum('Revisi','Acc') DEFAULT NULL,
  `keterangan` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dosen_penguji`
--

INSERT INTO `dosen_penguji` (`id_bim_skripsi`, `tgl_bimbingan`, `nim`, `nama`, `judul`, `dosen_penguji`, `status`, `keterangan`) VALUES
(101, '2019-06-13', 'G.131.17.0019', 'Ganang Setyo Ajie', 'Sistem Penggajian Otomatis PT Jaya Makmur', 'Saiful Hadi', 'Acc', 'Lanjut ke BAB Akhir'),
(102, '2019-06-14', 'G.131.17.0012', 'Johan Santoso', 'Antrian Bank Berbasis Desktop', 'Titis Handayani', 'Acc', 'Lanjut ke BAB Akhir'),
(103, '2019-06-15', 'G.131.17.0020', 'Muhammad Rifai', 'Sistem E-Ticketing', 'Vensy Vydia', 'Acc', 'Lanjut ke BAB Akhir'),
(104, '2019-06-16', 'G.131.17.0036', 'Fahrul Fuad Zain', 'CCTV Cloud', 'Titis Handayani', 'Revisi', 'Revisi Bab III');

-- --------------------------------------------------------

--
-- Struktur dari tabel `fakultas`
--

CREATE TABLE `fakultas` (
  `id_fakultas` int(3) NOT NULL,
  `nama_fakultas` varchar(70) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `fakultas`
--

INSERT INTO `fakultas` (`id_fakultas`, `nama_fakultas`) VALUES
(777, 'FTIK');

-- --------------------------------------------------------

--
-- Struktur dari tabel `judul_bimbingan`
--

CREATE TABLE `judul_bimbingan` (
  `id_judul` int(10) NOT NULL,
  `nim` varchar(15) DEFAULT NULL,
  `judul` varchar(200) DEFAULT NULL,
  `id_semester` int(3) DEFAULT NULL,
  `tgl_pengajuan` datetime DEFAULT NULL,
  `status` enum('Pending','Revisi','Acc','Ditolak') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_bimbingan`
--

CREATE TABLE `kategori_bimbingan` (
  `id_kategori` int(2) NOT NULL,
  `nama_kategori` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori_bimbingan`
--

INSERT INTO `kategori_bimbingan` (`id_kategori`, `nama_kategori`) VALUES
(1, 'BAB I'),
(2, 'BAB II'),
(3, 'BAB III'),
(4, 'BAB IV'),
(5, 'BAB V'),
(6, 'BAB VI');

-- --------------------------------------------------------

--
-- Struktur dari tabel `level`
--

CREATE TABLE `level` (
  `level` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `level`
--

INSERT INTO `level` (`level`) VALUES
('Dosen'),
('Mahasiswa'),
('Prodi'),
('TU');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` varchar(15) NOT NULL,
  `nama_mahasiswa` varchar(100) DEFAULT NULL,
  `id_fakultas` int(3) DEFAULT NULL,
  `id_prodi` int(3) DEFAULT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') DEFAULT NULL,
  `no_hp` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama_mahasiswa`, `id_fakultas`, `id_prodi`, `jenis_kelamin`, `no_hp`) VALUES
('G.131.17.0012', 'Johan Santoso', 777, 888, 'Laki-laki', '081222333444'),
('G.131.17.0019', 'Ganang Setyo Ajie', 777, 888, 'Laki-laki', '081222333444'),
('G.131.17.0020', 'Muhammad Rifai', 777, 888, 'Laki-laki', '081222333444'),
('G.131.17.0036', 'Fahrul Fuad Zain', 777, 888, 'Laki-laki', '081222333444');

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(15) NOT NULL,
  `nama_menu` varchar(50) DEFAULT NULL,
  `posisi` enum('Front','Back') DEFAULT NULL,
  `file` varchar(50) DEFAULT NULL,
  `level` enum('Mahasiswa','Dosen','Prodi','TU') DEFAULT NULL,
  `status` enum('Aktif','Tidak Aktif') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `menu`
--

INSERT INTO `menu` (`id_menu`, `nama_menu`, `posisi`, `file`, `level`, `status`) VALUES
(1, 'Registrasi', 'Front', 'registrasi', '', 'Aktif'),
(2, 'Login', 'Front', 'login', '', 'Aktif'),
(3, 'Pengajuan Judul', 'Back', 'mhs_judul', 'Mahasiswa', 'Aktif'),
(4, 'Bimbingan Skripsi', 'Back', 'mhs_bimbingan', 'Mahasiswa', 'Aktif'),
(5, 'Daftar Sidang', 'Back', 'mhs_daftar_sidang', 'Mahasiswa', 'Aktif'),
(6, 'Bimbingan Sidang', 'Back', 'mhs_sidang_bimbingan', 'Mahasiswa', 'Aktif'),
(7, 'Bimbingan Judul', 'Back', 'prodi_judul', 'Prodi', 'Aktif'),
(8, 'Dosen Pembimbing', 'Back', 'prodi_pembimbing', 'Prodi', 'Aktif'),
(9, 'Bimbingan Skripsi', 'Back', 'prodi_bimbingan', 'Prodi', 'Aktif'),
(10, 'Penguji Skripsi', 'Back', 'prodi_penguji', 'Prodi', 'Aktif'),
(11, 'Surat Dosen Pembimbing', 'Back', 'tu_surat_dosbim', 'TU', 'Aktif'),
(12, 'Berita Acara', 'Back', 'tu_berita_acara', 'TU', 'Aktif'),
(13, 'Dosen - Bimbingan Skripsi', 'Back', 'dosen_bimbingan', 'Dosen', 'Aktif'),
(14, 'Dosen - Nilai Skripsi', 'Back', 'dosen_nilai', 'Dosen', 'Aktif'),
(15, 'Dosen - Penguji Skripsi', 'Back', 'dosen_penguji', 'Dosen', 'Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembimbing`
--

CREATE TABLE `pembimbing` (
  `id_pembimbing` int(10) NOT NULL,
  `id_judul` int(10) DEFAULT NULL,
  `id_dosen` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penguji_skripsi`
--

CREATE TABLE `penguji_skripsi` (
  `id_penguji` int(10) NOT NULL,
  `nama_dosen_penguji` varchar(100) DEFAULT NULL,
  `status` enum('Ketua','Penguji 2','Penguji 3') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penguji_skripsi`
--

INSERT INTO `penguji_skripsi` (`id_penguji`, `nama_dosen_penguji`, `status`) VALUES
(9090, 'Vensy Vydia', 'Penguji 2'),
(9091, 'Titis Handayani', 'Penguji 3'),
(9092, 'Saiful Hadi', 'Ketua');

-- --------------------------------------------------------

--
-- Struktur dari tabel `program_studi`
--

CREATE TABLE `program_studi` (
  `id_prodi` int(3) NOT NULL,
  `nama_prodi` varchar(70) DEFAULT NULL,
  `jenjang` enum('D-3','S-1','S-2') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `program_studi`
--

INSERT INTO `program_studi` (`id_prodi`, `nama_prodi`, `jenjang`) VALUES
(888, 'Sistem Informasi', 'S-1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `semester`
--

CREATE TABLE `semester` (
  `id_semester` int(3) NOT NULL,
  `nama_semester` varchar(70) DEFAULT NULL,
  `status` enum('Aktif','Tidak Aktif') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sidang_bimbingan`
--

CREATE TABLE `sidang_bimbingan` (
  `id_bim_sidang` int(10) NOT NULL,
  `tgl_bimbingan` date DEFAULT NULL,
  `nama_file` varchar(50) DEFAULT NULL,
  `keterangan` varchar(250) DEFAULT NULL,
  `status` enum('Pending','Revisi','Acc') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `skripsi_bimbingan`
--

CREATE TABLE `skripsi_bimbingan` (
  `id_bim_skripsi` int(10) NOT NULL,
  `tgl_bimbingan` date DEFAULT NULL,
  `id_kategori` int(2) DEFAULT NULL,
  `nama_file` varchar(50) DEFAULT NULL,
  `keterangan` varchar(250) DEFAULT NULL,
  `status` enum('Pending','Revisi','Acc') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `skripsi_bimbingan`
--

INSERT INTO `skripsi_bimbingan` (`id_bim_skripsi`, `tgl_bimbingan`, `id_kategori`, `nama_file`, `keterangan`, `status`) VALUES
(101, '2019-06-16', 1, 'Antrian Bank Berbasis Desktop', 'Ada kesalahan pada format penulisan tentang Pendahuluan', 'Revisi'),
(102, '2019-06-14', 3, 'Sistem Penggajian Otomatis PT JAya Makmur', 'Lanjut BAB selanjutnya', 'Acc'),
(103, '2019-06-18', 6, 'Sistem E-Ticketing', 'Ditunda terlebih dahulu dikarenakan kerkurangan data', 'Pending');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_penunjukan_pembimbing`
--

CREATE TABLE `surat_penunjukan_pembimbing` (
  `id_surat_dosbim` int(10) NOT NULL,
  `nomer_surat` varchar(50) DEFAULT NULL,
  `tgl_surat` date DEFAULT NULL,
  `id_judul` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `level` enum('Mahasiswa','Dosen','Prodi','TU') DEFAULT NULL,
  `status` enum('Aktif','Tidak Aktif') DEFAULT NULL,
  `nim` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `password`, `nama`, `level`, `status`, `nim`) VALUES
('admin', 'dosen', 'Ahmad Rifai', 'Dosen', 'Aktif', NULL),
('G.111.18.0001', 'G.111.18.0001', NULL, 'Mahasiswa', 'Aktif', 'G.111.18.0001'),
('user', 'pass', NULL, 'Mahasiswa', 'Aktif', 'G.111.18.0001');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berita_acara_uji_skripsi`
--
ALTER TABLE `berita_acara_uji_skripsi`
  ADD PRIMARY KEY (`id_berita_acara`);

--
-- Indeks untuk tabel `daftar_sidang`
--
ALTER TABLE `daftar_sidang`
  ADD PRIMARY KEY (`id_daftar_sidang`);

--
-- Indeks untuk tabel `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id_dosen`);

--
-- Indeks untuk tabel `dosen_bimbingan`
--
ALTER TABLE `dosen_bimbingan`
  ADD PRIMARY KEY (`id_bim_skripsi`) USING BTREE,
  ADD KEY `id_kategory` (`id_kategori`);

--
-- Indeks untuk tabel `dosen_nilai`
--
ALTER TABLE `dosen_nilai`
  ADD PRIMARY KEY (`id_bim_skripsi`) USING BTREE;

--
-- Indeks untuk tabel `dosen_penguji`
--
ALTER TABLE `dosen_penguji`
  ADD PRIMARY KEY (`id_bim_skripsi`);

--
-- Indeks untuk tabel `fakultas`
--
ALTER TABLE `fakultas`
  ADD PRIMARY KEY (`id_fakultas`);

--
-- Indeks untuk tabel `judul_bimbingan`
--
ALTER TABLE `judul_bimbingan`
  ADD PRIMARY KEY (`id_judul`);

--
-- Indeks untuk tabel `kategori_bimbingan`
--
ALTER TABLE `kategori_bimbingan`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`level`) USING BTREE;

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`),
  ADD KEY `id_fakultas` (`id_fakultas`),
  ADD KEY `id_prodi` (`id_prodi`);

--
-- Indeks untuk tabel `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`) USING BTREE;

--
-- Indeks untuk tabel `pembimbing`
--
ALTER TABLE `pembimbing`
  ADD PRIMARY KEY (`id_pembimbing`);

--
-- Indeks untuk tabel `penguji_skripsi`
--
ALTER TABLE `penguji_skripsi`
  ADD PRIMARY KEY (`id_penguji`);

--
-- Indeks untuk tabel `program_studi`
--
ALTER TABLE `program_studi`
  ADD PRIMARY KEY (`id_prodi`);

--
-- Indeks untuk tabel `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`id_semester`);

--
-- Indeks untuk tabel `sidang_bimbingan`
--
ALTER TABLE `sidang_bimbingan`
  ADD PRIMARY KEY (`id_bim_sidang`);

--
-- Indeks untuk tabel `skripsi_bimbingan`
--
ALTER TABLE `skripsi_bimbingan`
  ADD PRIMARY KEY (`id_bim_skripsi`);

--
-- Indeks untuk tabel `surat_penunjukan_pembimbing`
--
ALTER TABLE `surat_penunjukan_pembimbing`
  ADD PRIMARY KEY (`id_surat_dosbim`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`) USING BTREE;

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `berita_acara_uji_skripsi`
--
ALTER TABLE `berita_acara_uji_skripsi`
  MODIFY `id_berita_acara` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `daftar_sidang`
--
ALTER TABLE `daftar_sidang`
  MODIFY `id_daftar_sidang` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id_dosen` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2204;

--
-- AUTO_INCREMENT untuk tabel `dosen_bimbingan`
--
ALTER TABLE `dosen_bimbingan`
  MODIFY `id_bim_skripsi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT untuk tabel `dosen_nilai`
--
ALTER TABLE `dosen_nilai`
  MODIFY `id_bim_skripsi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT untuk tabel `dosen_penguji`
--
ALTER TABLE `dosen_penguji`
  MODIFY `id_bim_skripsi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT untuk tabel `fakultas`
--
ALTER TABLE `fakultas`
  MODIFY `id_fakultas` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=778;

--
-- AUTO_INCREMENT untuk tabel `judul_bimbingan`
--
ALTER TABLE `judul_bimbingan`
  MODIFY `id_judul` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kategori_bimbingan`
--
ALTER TABLE `kategori_bimbingan`
  MODIFY `id_kategori` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `pembimbing`
--
ALTER TABLE `pembimbing`
  MODIFY `id_pembimbing` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `penguji_skripsi`
--
ALTER TABLE `penguji_skripsi`
  MODIFY `id_penguji` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9093;

--
-- AUTO_INCREMENT untuk tabel `program_studi`
--
ALTER TABLE `program_studi`
  MODIFY `id_prodi` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=889;

--
-- AUTO_INCREMENT untuk tabel `semester`
--
ALTER TABLE `semester`
  MODIFY `id_semester` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `sidang_bimbingan`
--
ALTER TABLE `sidang_bimbingan`
  MODIFY `id_bim_sidang` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `skripsi_bimbingan`
--
ALTER TABLE `skripsi_bimbingan`
  MODIFY `id_bim_skripsi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT untuk tabel `surat_penunjukan_pembimbing`
--
ALTER TABLE `surat_penunjukan_pembimbing`
  MODIFY `id_surat_dosbim` int(10) NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `dosen_bimbingan`
--
ALTER TABLE `dosen_bimbingan`
  ADD CONSTRAINT `dosen_bimbingan_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori_bimbingan` (`id_kategori`);

--
-- Ketidakleluasaan untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `mahasiswa_ibfk_1` FOREIGN KEY (`id_fakultas`) REFERENCES `fakultas` (`id_fakultas`),
  ADD CONSTRAINT `mahasiswa_ibfk_2` FOREIGN KEY (`id_prodi`) REFERENCES `program_studi` (`id_prodi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
