-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Jan 2021 pada 04.07
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stikar`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(25) NOT NULL,
  `level` enum('admin','karyawan','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `nama`, `username`, `password`, `level`) VALUES
(2, 'Karyawan', 'karyawan', 'karyawan', 'karyawan'),
(3, 'Bagus Patrio', 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `biaya`
--

CREATE TABLE `biaya` (
  `idBiaya` int(11) NOT NULL,
  `idPosisi` int(11) NOT NULL,
  `biaya` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `biaya`
--

INSERT INTO `biaya` (`idBiaya`, `idPosisi`, `biaya`) VALUES
(1, 1, 'Rp1.000.000'),
(2, 4, 'Rp7.000.000'),
(3, 2, 'Rp2.000.000'),
(4, 3, 'Rp4.000.000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `driver`
--

CREATE TABLE `driver` (
  `idDriver` int(11) NOT NULL,
  `namaDriver` varchar(30) NOT NULL,
  `noTelpon` char(15) NOT NULL,
  `alamat` text NOT NULL,
  `pekerjaan` varchar(30) NOT NULL,
  `fotoSim` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `driver`
--

INSERT INTO `driver` (`idDriver`, `namaDriver`, `noTelpon`, `alamat`, `pekerjaan`, `fotoSim`) VALUES
(13, 'bambang', '89696969', 'jakarta', 'pengusaha', '518e07fc48a31301d213ee826f6fd35a.png'),
(14, 'bambang nugroho', '89696969', 'Jakarta utara', 'PNS', 'f95a6d93e27d0ea5ef0eb584f63291c2.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `iklan`
--

CREATE TABLE `iklan` (
  `idIklan` int(11) NOT NULL,
  `idDriver` int(11) NOT NULL,
  `idPengiklan` int(11) NOT NULL,
  `fotoKendaraan` varchar(255) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `iklan`
--

INSERT INTO `iklan` (`idIklan`, `idDriver`, `idPengiklan`, `fotoKendaraan`, `tanggal`) VALUES
(16, 13, 15, '55c5619e19819c84117aa16c0cc80efe.png', '2021-01-15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kendaraan`
--

CREATE TABLE `kendaraan` (
  `idKendaraan` int(11) NOT NULL,
  `idDriver` int(11) NOT NULL,
  `idMerk` int(30) NOT NULL,
  `idType` int(30) NOT NULL,
  `nopol` varchar(25) NOT NULL,
  `tahunKendaraan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kendaraan`
--

INSERT INTO `kendaraan` (`idKendaraan`, `idDriver`, `idMerk`, `idType`, `nopol`, `tahunKendaraan`) VALUES
(8, 13, 1, 1, 'JK 3456 DE', '1998');

-- --------------------------------------------------------

--
-- Struktur dari tabel `merk`
--

CREATE TABLE `merk` (
  `idMerk` int(11) NOT NULL,
  `namaMerk` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `merk`
--

INSERT INTO `merk` (`idMerk`, `namaMerk`) VALUES
(1, 'TOYOTA'),
(2, 'DAIHATSU'),
(3, 'MITSUBISHI'),
(4, 'HYUNDAI'),
(5, 'HONDA'),
(6, 'SUZUKI'),
(7, 'NISSAN'),
(8, 'DATSUN'),
(9, 'WULING'),
(10, 'ISUZU');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengiklan`
--

CREATE TABLE `pengiklan` (
  `idPengiklan` int(11) NOT NULL,
  `namaPengiklan` varchar(30) NOT NULL,
  `namaProduk` varchar(30) NOT NULL,
  `emailPengiklan` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `noTelponpengiklan` varchar(15) NOT NULL,
  `fotoProduk` varchar(255) NOT NULL,
  `biaya` int(11) NOT NULL,
  `posisiIklan` int(30) NOT NULL,
  `status` enum('1','2','','') NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengiklan`
--

INSERT INTO `pengiklan` (`idPengiklan`, `namaPengiklan`, `namaProduk`, `emailPengiklan`, `alamat`, `noTelponpengiklan`, `fotoProduk`, `biaya`, `posisiIklan`, `status`, `username`, `password`) VALUES
(15, 'geprek', 'geprek', 'baguspatrio27@gmail.com', 'geprek', '08125258678', 'a0f5e27031dca05f594fe9e448f32df1.png', 1, 1, '2', 'geprek', 'geprek'),
(16, 'udang', 'udang', 'baguspatrio27@gmail.com', 'udang', '08125258678', '766fc3acfb97b764d1fb8d950471c71e.png', 1, 1, '1', 'udang', 'udang'),
(17, 'bensu', 'bensu', 'bensu@mail.com', 'bensu', '08125258678', '892bd8bb810b9e446ad0bd3f7a5274ea.png', 1, 1, '1', 'bensu', 'bensu'),
(18, 'harga[\'0\']->', 'harga[\'0\']->', 'baguspatrio27@gmail.com', 'harga[\'0\']->', '08125258678', '651164f54c424c1290333c2916f8824f.png', 1, 1, '1', 'harga[\'0\']->', 'harga[\'0\']->'),
(19, 'www', 'www', 'www@gmail.com', 'www', '08125258678', 'a2b6adbbdd10e5a923f1f25337a42388.png', 1, 1, '1', 'www', 'www'),
(20, 'www', 'www', 'www@gmail.com', 'www', '08125258678', '6a6c99156aecc3eea640a887c422f832.png', 1, 1, '1', 'www', 'www'),
(21, 'dddd', 'dddd', 'baguspatrio27@gmail.com', 'dddd', '08125258678', 'cdbbe4e835cbe983f21a22c3ac75543b.png', 1, 1, '1', 'dddd', 'dddd'),
(22, 'hhhh', 'hhhh', 'baguspatrio27@gmail.com', 'hhhh', '08125258678', '38df7d141f5effa6a98fb9d7d6d6e760.png', 3, 2, '1', 'hhhh', 'hhhh'),
(23, 'hhhh', 'hhhh', 'baguspatrio27@gmail.com', 'hhhh', '08125258678', '00f8cb13fc2992855c8676ebef32cc84.png', 1, 1, '1', 'hhhh', 'hhhh'),
(24, 'dddd', 'ddddd', 'baguspatrio27@gmail.com', 'ddddd', '08125258678', '6ed0010b9bbd5eb477aba5af3417e339.png', 1, 1, '1', 'ddddd', 'ddddd'),
(25, 'dddd', 'ddddd', 'baguspatrio27@gmail.com', 'ddddd', '08125258678', '27733e3d77880f1fa83240d4fa882837.png', 1, 1, '1', 'ddddd', 'ddddd'),
(26, 'aaaa', 'aaaa', 'baguspatrio27@gmail.com', 'aaaa', '08125258678', 'b812e885bf8929bae5e778b5af0374fd.png', 1, 1, '1', 'aaaa', 'aaaa'),
(27, 'zzzzzzzzz', 'zzzzzzzzz', 'baguspatrio27@gmail.com', 'zzzzzzzzz', '08125258678', '97b3e3deda54e5da6810cc3dc22a11c5.png', 1, 1, '1', 'zzzzzzzzz', 'zzzzzzzzz'),
(28, 'zzzzzzzzz', 'zzzzzzzzz', 'baguspatrio27@gmail.com', 'zzzzzzzzz', '08125258678', '2aa4e5aa9f49c3df5829949cd8ee2e80.png', 1, 1, '1', 'zzzzzzzzz', 'zzzzzzzzz'),
(29, ' $data[\'harga\']=$this->M_pengi', ' $data[\'harga\']=$this->M_pengi', 'baguspatrio27@gmail.com', ' $data[\'harga\']=$this->M_pengiklan->cekharga($namaPengiklan)->row();', '08125258678', '2705cfb7c2c9ce465d80d74993df1e98.png', 3, 2, '1', ' $data[\'harga\']=$this->M_pengi', ' $data[\'harga\']=$this->M_pengiklan->cekharga($namaPengiklan)->row();'),
(30, 'dddddd', 'dddddd', 'baguspatrio27@gmail.com', 'dddddd', '08125258678', 'a4967af29671f2bd1b0bd110661fc81f.png', 3, 2, '1', 'dddddd', 'dddddd'),
(32, 'aaaa', 'aaaa', 'baguspatrio27@gmail.com', 'aaaa', '08125258678', 'b8622b8c8e37b09ed661d4316714519e.jpg', 1, 1, '1', 'aaaa', 'aaaa'),
(33, 'Traveloka', 'Traveloka', 'Traveloka@gmail.com', 'Traveloka', '08125258678', '3e5508a6fc66451b11c26e0719c90f43.jpg', 3, 2, '1', 'Traveloka', 'Traveloka'),
(34, 'Traveloka', 'Traveloka', 'Traveloka@gmail.com', 'Traveloka', '08125258678', '0ec2d409960966cf210d85476e18ba27.jpg', 3, 2, '1', 'Traveloka', 'Traveloka'),
(35, 'Traveloka', 'Traveloka', 'Traveloka@gmail.com', 'Traveloka', '08125258678', 'bb91cdf93ac392c583bb1cf2caefd04d.jpg', 3, 2, '1', 'Traveloka', 'Traveloka'),
(36, 'Traveloka', 'Traveloka', 'Traveloka@gmail.com', 'Traveloka', '08125258678', '64173d2f9da2adf4c4b4d1143c36cec2.jpg', 3, 2, '1', 'Traveloka', 'Traveloka'),
(37, 'Traveloka', 'Traveloka2', 'Traveloka@gmail.com', 'Traveloka3', '08125258678', 'd84ce108f0888dd5cb56f785044ad174.jpg', 1, 1, '1', 'Traveloka1', 'Traveloka'),
(38, 'Carmudi', 'Carmudi', 'Carmudi@gmail.com', 'Carmudi', '08125258678', '16e6751e2a44f1cfdec324923a9bfd17.jpg', 3, 2, '1', 'Carmudi', 'Carmudi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `posisi`
--

CREATE TABLE `posisi` (
  `idPosisi` int(11) NOT NULL,
  `posisi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `posisi`
--

INSERT INTO `posisi` (`idPosisi`, `posisi`) VALUES
(1, 'Rear Window'),
(2, 'Full Back'),
(3, 'Full Beside'),
(4, 'Full Wrap');

-- --------------------------------------------------------

--
-- Struktur dari tabel `type`
--

CREATE TABLE `type` (
  `idType` int(11) NOT NULL,
  `idMerk` int(11) NOT NULL,
  `namaType` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `type`
--

INSERT INTO `type` (`idType`, `idMerk`, `namaType`) VALUES
(1, 1, 'Avanza'),
(2, 1, 'Kijang Innova'),
(3, 1, 'New Venturer'),
(4, 1, 'Fortuner'),
(5, 1, 'Yaris'),
(6, 1, 'Agya'),
(7, 1, 'Vios'),
(8, 2, 'Ayla'),
(9, 2, 'Sigra.'),
(10, 2, 'Xenia'),
(11, 2, 'Terios'),
(12, 2, 'Luxio'),
(13, 2, 'Granmax MB'),
(14, 3, 'Outlander Sport'),
(15, 3, 'Pajero Sport'),
(16, 6, 'APV Arena'),
(17, 6, 'Ertiga'),
(18, 5, 'Honda HR-V'),
(19, 7, 'Livina'),
(20, 7, 'Serena'),
(23, 8, 'Datsun Go'),
(24, 9, 'Confero'),
(25, 9, 'Cortez'),
(26, 5, 'Kona'),
(27, 4, 'I10'),
(28, 10, 'mu-X'),
(29, 10, 'Panther');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `biaya`
--
ALTER TABLE `biaya`
  ADD PRIMARY KEY (`idBiaya`),
  ADD KEY `idPosisi` (`idPosisi`);

--
-- Indeks untuk tabel `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`idDriver`);

--
-- Indeks untuk tabel `iklan`
--
ALTER TABLE `iklan`
  ADD PRIMARY KEY (`idIklan`),
  ADD KEY `iklan_ibfk_2` (`idDriver`),
  ADD KEY `iklan_ibfk_3` (`idPengiklan`);

--
-- Indeks untuk tabel `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD PRIMARY KEY (`idKendaraan`),
  ADD KEY `idDriver` (`idDriver`),
  ADD KEY `idMerk` (`idMerk`),
  ADD KEY `idType` (`idType`);

--
-- Indeks untuk tabel `merk`
--
ALTER TABLE `merk`
  ADD PRIMARY KEY (`idMerk`);

--
-- Indeks untuk tabel `pengiklan`
--
ALTER TABLE `pengiklan`
  ADD PRIMARY KEY (`idPengiklan`),
  ADD KEY `posisiIklan` (`posisiIklan`),
  ADD KEY `biaya` (`biaya`);

--
-- Indeks untuk tabel `posisi`
--
ALTER TABLE `posisi`
  ADD PRIMARY KEY (`idPosisi`);

--
-- Indeks untuk tabel `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`idType`),
  ADD KEY `idMerk` (`idMerk`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `biaya`
--
ALTER TABLE `biaya`
  MODIFY `idBiaya` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `driver`
--
ALTER TABLE `driver`
  MODIFY `idDriver` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `iklan`
--
ALTER TABLE `iklan`
  MODIFY `idIklan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `kendaraan`
--
ALTER TABLE `kendaraan`
  MODIFY `idKendaraan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `merk`
--
ALTER TABLE `merk`
  MODIFY `idMerk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `pengiklan`
--
ALTER TABLE `pengiklan`
  MODIFY `idPengiklan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT untuk tabel `posisi`
--
ALTER TABLE `posisi`
  MODIFY `idPosisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `type`
--
ALTER TABLE `type`
  MODIFY `idType` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `biaya`
--
ALTER TABLE `biaya`
  ADD CONSTRAINT `biaya_ibfk_1` FOREIGN KEY (`idPosisi`) REFERENCES `posisi` (`idPosisi`);

--
-- Ketidakleluasaan untuk tabel `iklan`
--
ALTER TABLE `iklan`
  ADD CONSTRAINT `iklan_ibfk_2` FOREIGN KEY (`idDriver`) REFERENCES `driver` (`idDriver`) ON DELETE NO ACTION,
  ADD CONSTRAINT `iklan_ibfk_3` FOREIGN KEY (`idPengiklan`) REFERENCES `pengiklan` (`idPengiklan`) ON DELETE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD CONSTRAINT `kendaraan_ibfk_1` FOREIGN KEY (`idDriver`) REFERENCES `driver` (`idDriver`) ON DELETE CASCADE,
  ADD CONSTRAINT `kendaraan_ibfk_2` FOREIGN KEY (`idMerk`) REFERENCES `merk` (`idMerk`),
  ADD CONSTRAINT `kendaraan_ibfk_3` FOREIGN KEY (`idType`) REFERENCES `type` (`idType`);

--
-- Ketidakleluasaan untuk tabel `pengiklan`
--
ALTER TABLE `pengiklan`
  ADD CONSTRAINT `pengiklan_ibfk_1` FOREIGN KEY (`posisiIklan`) REFERENCES `posisi` (`idPosisi`),
  ADD CONSTRAINT `pengiklan_ibfk_2` FOREIGN KEY (`biaya`) REFERENCES `biaya` (`idBiaya`);

--
-- Ketidakleluasaan untuk tabel `type`
--
ALTER TABLE `type`
  ADD CONSTRAINT `type_ibfk_1` FOREIGN KEY (`idMerk`) REFERENCES `merk` (`idMerk`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
