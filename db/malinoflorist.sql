-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 15, 2019 at 12:52 PM
-- Server version: 8.0.13-4
-- PHP Version: 7.2.24-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `LOrUqLMvec`
--

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `id` int(11) NOT NULL,
  `name` varchar(10) NOT NULL,
  `image` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`id`, `name`, `image`) VALUES
(4, 'BNI', '4610d3236d76ab5212c85192833c1b81.png'),
(5, 'Mandiri', '868e86fe4fa1d6ec86dbbe3a0588fdbe.png'),
(6, 'BRI', '972dd78cc1b9fcc42984f2e8ff8dcc9c.png');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `slug` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `text` text NOT NULL,
  `image` varchar(80) NOT NULL,
  `created_on` datetime NOT NULL,
  `updated_on` datetime NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `slug`, `text`, `image`, `created_on`, `updated_on`, `user_id`) VALUES
(2, 'Manfaat Bunga Bagi Kesehatan P', 'manfaat-bunga-bagi-kesehatan-psikologis', 'lorem ipsum', 'f19cc3169eaac424d68bcd19fe44c8d0.jpg', '2019-11-06 09:59:13', '0000-00-00 00:00:00', 1),
(3, 'bunga bagus', 'bunga-bagus', 'kasjdaksndkjasnxkjnsajd', '', '2019-11-07 02:58:20', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `slug` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `slug`) VALUES
(1, 'Bunga Papan', 'bunga-papan'),
(2, 'Hand Bouquet', 'hand-bouquet'),
(4, 'Table Flower', 'table-flower');

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE `page` (
  `id` int(11) NOT NULL,
  `title` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `slug` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `content` text NOT NULL,
  `image` varchar(80) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`id`, `title`, `slug`, `content`, `image`, `user_id`) VALUES
(3, 'Cara Belanja', 'cara-belanja', 'Cara Berbelanja yang baik dan benar', 'f97233f3ebe4911f55b8faae298e1dc0.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `slug` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `description` text NOT NULL,
  `price` double NOT NULL,
  `size` varchar(20) NOT NULL,
  `image1` varchar(130) NOT NULL,
  `image2` varchar(130) NOT NULL,
  `image3` varchar(130) NOT NULL,
  `image4` varchar(130) NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `slug`, `description`, `price`, `size`, `image1`, `image2`, `image3`, `image4`, `category_id`, `subcategory_id`) VALUES
(23, 'Happy Weddy Fun Flower', 'happy-weddy-fun-flower', 'Bagus', 350000, '8x8', '4e44fe6bda5de46cf723eec593cdbefa.jpg', '', '', '', 1, 1),
(24, 'Happy Wedding Pink Flowers', 'happy-wedding-pink-flowers', 'Bagus Banget', 350000, '8x8', 'c444de89a59e6befe88af54fce30bd47.jpg', '', '', '', 1, 1),
(25, 'Bunga Papan Congratulation Exclusive', 'bunga-papan-congratulation-exclusive', 'Bagus Banget', 350000, '8x8', '091f3e6b36ae5e5e9768af84e61adb39.jpg', '', '', '', 1, 2),
(26, 'Bunga Papan Duka Cita Polos', 'bunga-papan-duka-cita-polos', 'Bagus', 450000, '8x8', '139abf42078bcf366b33e2f772779581.jpg', '', '', '', 1, 3),
(27, 'Hand Bouquet Artypicial Red', 'hand-bouquet-artypicial-red', 'Bagus', 100000, '8x8', '48efa2a5fe88fe8b6bf7911940bc81f6.jpg', '', '', '', 2, NULL),
(28, 'Hand Bouquet Flanel Lili Lala', 'hand-bouquet-flanel-lili-lala', 'Bagus', 100000, '8x8', '566732f4add5e721c579db2cee72687a.jpg', '', '', '', 2, NULL),
(29, 'Hand Bouquet Flanel Mawar Imut', 'hand-bouquet-flanel-mawar-imut', 'Bagus', 100000, '8x8', '21ae77e36c5097d07bcb296dc42b3bda.jpg', '', '', '', 2, NULL),
(30, 'Hand Bouquet Flanel Rainbow', 'hand-bouquet-flanel-rainbow', 'Bagus', 100000, '8x8', 'b5ea8ef1c85955654335ea6e2e6362ce.jpg', '', '', '', 2, NULL),
(31, 'Table Flowers Bunga Segar', 'table-flowers-bunga-segar', 'Bagus', 1350000, '8x8', 'beecb772663dca8635d91af4369090b2.jpg', '', '', '', 4, NULL),
(32, 'Table Flowers Pinky Teratai Imut', 'table-flowers-pinky-teratai-imut', 'bagus', 1350000, '7x7', 'f48e9c09b94b763941b72a4ca42aeff2.jpg', '', '', '', 4, NULL),
(33, 'Table Flowers Purple Krisan Megah', 'table-flowers-purple-krisan-megah', 'Bagus', 1350000, '7x7', '93b5cb8eb1af38dcaca8c9145104b99c.jpg', '', '', '', 4, NULL),
(34, 'Table Flowers Red White Lavender', 'table-flowers-red-white-lavender', 'Bagus', 1350000, '8x8', 'c666dffce43b070af7c907d5a584767a.jpg', '', '', '', 4, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` int(11) NOT NULL,
  `phone` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `whatsapp` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `fb_title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `fb_link` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ig_title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ig_link` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `quote` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `phone`, `whatsapp`, `fb_title`, `fb_link`, `ig_title`, `ig_link`, `address`, `email`, `quote`) VALUES
(1, '089237737', '01238912389', 'PlazaBunga', 'www.facebook.com/plazabunga', 'PlazaBunga', 'www.instagram.com/plazabunga', 'Jl Makassar 01', 'plazabunga@email.com', 'Quality Is Our Traditions');

-- --------------------------------------------------------

--
-- Table structure for table `shipping`
--

CREATE TABLE `shipping` (
  `id` int(11) NOT NULL,
  `name` varchar(80) NOT NULL,
  `image` varchar(80) NOT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shipping`
--

INSERT INTO `shipping` (`id`, `name`, `image`, `user_id`) VALUES
(3, 'JNE', '4dce230f58c8fd670d1dcb2a500e6cb4.jpg', 1),
(5, 'J&T', 'b1eea515a8bfd58e38a7d2f49286c493.jpg', 1),
(6, 'TIKI', '1d22a4117cb0f1f1ad93fb0adefc5e88.png', 1),
(7, 'Pos Indonesia', 'd3baa22c3d771cf3b19bdd555af16de5.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `id` int(11) NOT NULL,
  `name` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `slug` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `category_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`id`, `name`, `slug`, `category_id`) VALUES
(1, 'Happy Wedding', 'happy-wedding', 1),
(2, 'Congratulations', 'congratulations', 1),
(3, 'Turut Berduka Cita', 'turut-berduka-cita', 1),
(4, 'Bunga Indoor', 'bunga-indoor', 4);

-- --------------------------------------------------------

--
-- Table structure for table `testimoni`
--

CREATE TABLE `testimoni` (
  `id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `name` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `title` varchar(80) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `description` text NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `no_invoice` varchar(20) NOT NULL,
  `transaction_date` datetime NOT NULL,
  `id_product` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(80) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `username` varchar(80) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `password` varchar(120) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `password`, `email`, `phone`) VALUES
(1, 'admin', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'admin@admin.com', '089635625');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`user_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`user_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `subcategory_id` (`subcategory_id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shipping`
--
ALTER TABLE `shipping`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`user_id`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_product` (`id_product`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bank`
--
ALTER TABLE `bank`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `shipping`
--
ALTER TABLE `shipping`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `testimoni`
--
ALTER TABLE `testimoni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blog`
--
ALTER TABLE `blog`
  ADD CONSTRAINT `blog_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `page`
--
ALTER TABLE `page`
  ADD CONSTRAINT `page_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`),
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`subcategory_id`) REFERENCES `sub_category` (`id`);

--
-- Constraints for table `shipping`
--
ALTER TABLE `shipping`
  ADD CONSTRAINT `shipping_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD CONSTRAINT `sub_category_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `product` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
