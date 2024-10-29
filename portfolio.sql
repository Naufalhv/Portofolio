-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2024 at 09:44 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jp_portfolio_havi`
--

-- --------------------------------------------------------

--
-- Table structure for table `biodata`
--

CREATE TABLE `biodata` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `universitas` varchar(100) DEFAULT NULL,
  `nomor_handphone` varchar(20) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `kota` varchar(100) DEFAULT NULL,
  `jurusan` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `biodata`
--

INSERT INTO `biodata` (`id`, `nama`, `tanggal_lahir`, `universitas`, `nomor_handphone`, `alamat`, `kota`, `jurusan`, `email`) VALUES
(1, 'Naufal Havizudin', '2004-02-09', 'Universitas Pembangunan Jaya', '+62 857-8197-2841', 'Jl.Raya Puspitek Perumahan Panorama Serpong', 'Tangerang Selatan, Banten 15315', 'Informatika', 'naufalhavizudin@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(150) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(11) NOT NULL,
  `category` enum('software','video','work') NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  `gallery_category` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `category`, `title`, `description`, `image_url`, `gallery_category`) VALUES
(1, 'work', 'Millenials Farm', 'Bekerja sebagai admin keuangan', 'assets/img/masonry-portfolio/portfolio-work-1.jpg', 'portfolio-gallery-work'),
(2, 'software', 'Company Profile', 'Pembuatan website company profil untuk perusahaan design interior', 'assets/img/masonry-portfolio/portfolio-software-1.jpg', 'portfolio-gallery-software'),
(3, 'video', 'Video Tiktok', 'Pembuatan vlog dan diunggah di platform tiktok', 'assets/img/masonry-portfolio/portfolio-video-1.jpg', 'portfolio-gallery-video'),
(4, 'software', 'Aplikasi Kasir', 'Pembuatan aplikasi restoran untuk platform website', 'assets/img/masonry-portfolio/portfolio-software-2.jpg', 'portfolio-gallery-software'),
(5, 'video', 'Editing Video Vlog', 'Pengerjaan editing video travel vlog untuk youtube', 'assets/img/masonry-portfolio/portfolio-video-2.jpg', 'portfolio-gallery-video'),
(6, 'software', 'Aplikasi Todo List', 'Aplikasi todo list untuk pengelolaan tugas, berbasis mobile', 'assets/img/masonry-portfolio/portfolio-software-3.jpg', 'portfolio-gallery-software'),
(7, 'video', 'Video Produk Skincare', 'Pembuatan video produk skincare untuk sosial media', 'assets/img/masonry-portfolio/portfolio-video-3.jpg', 'portfolio-gallery-video');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `color` varchar(50) DEFAULT NULL,
  `icon` varchar(50) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `color`, `icon`, `title`, `description`) VALUES
(1, 'cyan', 'bi-globe', 'Pengembangan Web', 'Membangun website responsif, fungsional, dan user-friendly.'),
(2, 'orange', 'bi-phone', 'Aplikasi Mobile', 'Menciptakan aplikasi mobile yang intuitif untuk iOS dan Android.'),
(3, 'teal', 'bi-palette', 'UI/UX Design', 'Desain antarmuka yang menarik dan pengalaman pengguna optimal.'),
(4, 'red', 'bi-camera-reels', 'Video Editing', 'Editing video profesional untuk berbagai kebutuhan.'),
(5, 'indigo', 'bi-share', 'Pengelolaan Konten Sosmed', 'Mengelola konten kreatif untuk sosial media.'),
(6, 'pink', 'bi-camera', 'Dokumentasi Acara', 'Mengabadikan momen berharga dengan dokumentasi foto dan video berkualitas tinggi untuk setiap acara Anda.');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int(11) NOT NULL,
  `skill_name` varchar(100) NOT NULL,
  `proficiency` int(11) DEFAULT NULL CHECK (`proficiency` between 0 and 100)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `skill_name`, `proficiency`) VALUES
(1, 'HTML + CSS', 100),
(2, 'JavaScript', 75),
(3, 'PHP', 80),
(4, 'UI/UX Design', 90),
(5, 'Adobe Premiere Pro', 90),
(6, 'Photoshop', 75);

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL,
  `testimonial` text NOT NULL,
  `rating` tinyint(1) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `role`, `testimonial`, `rating`, `image_path`, `created_at`) VALUES
(1, 'Andi Pratama', 'CEO & Founder', 'Layanan yang sangat profesional! Website bisnis saya menjadi lebih modern dan responsif, sesuai dengan harapan saya. Sangat direkomendasikan!', 4, 'assets/img/testimonials/1.jpg', '2024-10-29 07:34:09'),
(2, 'Maria Anggraeni', 'Designer', 'Desain UI/UX yang dihasilkan sangat menarik dan mudah digunakan, membuat aplikasi kami terlihat lebih profesional dan menarik bagi pengguna.', 5, 'assets/img/testimonials/2.jpg', '2024-10-29 07:34:09'),
(3, 'Rizky Kurniawan', 'Store Owner', 'Aplikasi mobile yang mereka buat sangat user-friendly dan membantu kami menjangkau lebih banyak pengguna. Terima kasih banyak atas kerjasamanya!', 5, 'assets/img/testimonials/3.jpg', '2024-10-29 07:34:09'),
(4, 'Dewi Rahmawati', 'Entrepreneur', 'Hasil video editing mereka luar biasa! Konten yang dihasilkan sangat berkualitas dan berhasil meningkatkan engagement di sosial media kami.', 5, 'assets/img/testimonials/4.jpg', '2024-10-29 07:34:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biodata`
--
ALTER TABLE `biodata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `biodata`
--
ALTER TABLE `biodata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
