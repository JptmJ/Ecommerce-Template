-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2023 at 08:51 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(100) NOT NULL,
  `brand_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_title`) VALUES
(1, 'PUMA'),
(2, 'Nike'),
(3, 'Mufti'),
(4, 'Redtape'),
(5, 'Titan'),
(6, 'FireBoltt'),
(7, 'BOAT'),
(8, 'DELL'),
(9, 'Lenovo');

-- --------------------------------------------------------

--
-- Table structure for table `catagories`
--

CREATE TABLE `catagories` (
  `catagory_id` int(100) NOT NULL,
  `catagory_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `catagories`
--

INSERT INTO `catagories` (`catagory_id`, `catagory_title`) VALUES
(1, 'Clothes'),
(2, 'Makeup'),
(3, 'Electronic'),
(4, 'Accessories'),
(5, 'Books'),
(6, 'Watches'),
(7, 'Shoes');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_title` varchar(100) NOT NULL,
  `product_description` varchar(255) NOT NULL,
  `product_keyword` varchar(100) NOT NULL,
  `catagory_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `product_image1` varchar(255) NOT NULL,
  `product_image2` varchar(255) NOT NULL,
  `product_image3` varchar(255) NOT NULL,
  `product_price` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_title`, `product_description`, `product_keyword`, `catagory_id`, `brand_id`, `product_image1`, `product_image2`, `product_image3`, `product_price`, `date`, `status`) VALUES
(1, 'Watch 350 Plus', '1.1.3TFT touch color screen 2.USB plug-in charging design.', 'Watch, 350 plus, black watch, china watch, watch 350 plus, smart watch', 6, 7, 'black-square-led-watch-githa-original-imagf33hzktgsz2g.webp', 'black-square-led-watch-githa-original-imagyyaewjwhpggx.webp', '-original-imagqhvgybexgkmh.webp', '300', '2023-07-01 20:39:53', 'true'),
(2, 'Blushed Nudes Eyeshadow', 'Maybelline introduces The Blushed Nudes eyeshadow palette.', 'Makeup, Makeup Brush, Make up nude shade, maybelline', 2, 2, '9-the-blushed-nudes-maybelline-original-imafjza3snrgep8f.webp', '9-the-blushed-nudes-maybelline-original-imafjza3vgvpdg8v.webp', 'new-york-icon-pro-palette-absolute-original-imag686kgkmsyzz9.webp', '700', '2023-07-01 20:41:07', 'true'),
(3, 'HD Smart Android TV', 'If you are looking for a high-performance, powerful, and smart entertainment solution.', 'TV', 3, 9, 'q-3223sa-qva-original-imagn9xzr53tjg5m.webp', 'q-3223sa-qva-original-imagn9xzhppeazep.webp', 'q-3223sa-qva-original-imagn9xzfcb5huyp.webp', '7000', '2023-07-01 20:41:34', 'true'),
(4, 'PUMA Hybrid Fuego Wns Walking Shoes', 'This is a genuine product of Puma Sports India Pvt Ltd. The product comes with a standard brand warranty of 90 days.', 'PUMA, Shoes, PUMA Shoes, Black Shoes', 7, 1, '-original-imagfh9ug9gvybh6-bb.webp', '3-5-192663-puma-black-blue-glimmer-nrgy-rose-original-imafkkf8rhj4pkdd.webp', '3-5-192663-puma-black-blue-glimmer-nrgy-rose-original-imafkkf9eh9cach9.webp', '2800', '2023-07-02 21:38:05', 'true'),
(5, 'Nike Men Typography Round Neck Cotton Blend Blue T-Shirt', 'Exactly as shown in the picture, loved the Nike print, if we talk about quality.', 'Nike, T-shirt, Nike T-shirt', 1, 2, 'm-dv2316-435-nike-original-imaghgy6jeymwzjv.webp', 'm-dv2316-435-nike-original-imaghgy6czgmzyjg.webp', 'm-dv2316-435-nike-original-imaghgy622yjzdmc.webp', '800', '2023-07-02 22:07:38', 'true'),
(6, 'Mufti Men Slim Mid Rise Blue Jeans', 'Super fitting and best height length not over size ,again very happy with size length and fitting', 'Jeans, Mufti, Mufti Jeans', 1, 3, '32-mft-32151-o-136-tinted-khaki-mufti-original-imagc5wjckcnxhks.webp', '32-mft-32151-o-136-tinted-khaki-mufti-original-imagc5wjuyapzknn.webp', '32-mft-32151-o-136-tinted-khaki-mufti-original-imagc5wjnmnpfjqg.webp', '1300', '2023-07-02 21:43:41', 'true'),
(7, 'Red Tape Jacket Solid Padded Jacket', 'Layers are undeniably the most important part of winter fashion. With them, you can easily pull off all your desired winter looks.', 'Jacket, Redtape, redtape jacket', 1, 4, '61nQv++71-L._UX679_.jpg', '6103vB4xVCL._UX679_.jpg', '61SIGUnvvxL._UX679_.jpg', '2500', '2023-07-02 21:52:33', 'true'),
(8, 'DELL KB 216 Wired USB Desktop Keyboard', 'Type fast and accomplish a number of tasks on your personal computer with the Dell KB 216 Wired USB Desktop Keyboard.', 'Keyboard, Dell ,DELL Keyboard', 4, 8, 'dell-kb-216-original-imaf8qpmu8zmqm9f.webp', 'dell-kb-216-original-imafmktgsjwqrcne.webp', 'kb216-dell-original-imaghj39kmzkznqj.webp', '600', '2023-07-02 21:55:02', 'true'),
(9, 'DELL MS 116-BK Wired Optical Mouse  (USB, Black)', ' Improve your productivity in front of your computer with the Dell MS 116 Wired Optical Mouse.', 'Mouse, DELL, DELL Mouse', 4, 8, 'dell-ms116-wired-optical-mouse-3yrs-warranty-original-imafmktgxyt5ge9k.webp', 'dell-ms116-wired-optical-mouse-3yrs-warranty-original-imafmktgt2hkkjd6.webp', 'flammable-flipkart-must-buy-and-use-good-quality-mouse-for-use-original-imafveuj8jq8xgyd.webp', '300', '2023-07-02 22:10:16', 'true'),
(10, 'Titan Metal Mechanical Analog Watch - For Men 90140TM01', 'The stylish build and durability of Titan watches can make them an ideal addition to your collection.', 'Titan Watch, Watch, Titan, Expensive Watch', 6, 5, '1-90140tm01-titan-men-original-imagkhhcegnfryyz.webp', '1-90140tm01-titan-men-original-imagkhhcezzay85t.webp', '1-90140tm01-titan-men-original-imagkhhcrbrfuaqt.webp', '31000', '2023-07-02 22:00:03', 'true');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `catagories`
--
ALTER TABLE `catagories`
  ADD PRIMARY KEY (`catagory_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `catagories`
--
ALTER TABLE `catagories`
  MODIFY `catagory_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
