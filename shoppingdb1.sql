-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2025 at 01:54 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoppingdb1`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(11) NOT NULL,
  `province_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `province_id`, `name`) VALUES
(1, 201, 'Quezon City'),
(2, 202, 'Manila'),
(3, 203, 'Davao City'),
(4, 204, 'Caloocan'),
(5, 205, 'Cebu City'),
(6, 206, 'Zamboanga City'),
(7, 207, 'Taguig'),
(8, 208, 'Antipolo'),
(9, 209, 'Pasig'),
(10, 210, 'Cagayan de Oro'),
(11, 301, 'Tokyo'),
(12, 302, 'Yokohama'),
(13, 303, 'Osaka'),
(14, 304, 'Nagoya'),
(15, 305, 'Sapporo'),
(16, 306, 'Fukuoka'),
(17, 307, 'Kobe'),
(18, 308, 'Kyoto'),
(19, 309, 'Kawasaki'),
(20, 310, 'Saitama'),
(21, 401, 'Shanghai'),
(22, 402, 'Beijing'),
(23, 403, 'Chongqing'),
(24, 404, 'Tianjin'),
(25, 405, 'Guangzhou'),
(26, 406, 'Shenzhen'),
(27, 407, 'Chengdu'),
(28, 408, 'Nanjing'),
(29, 409, 'Wuhan'),
(30, 410, 'Hangzhou'),
(31, 501, 'Moscow'),
(32, 502, 'Saint Petersburg'),
(33, 503, 'Novosibirsk'),
(34, 504, 'Yekaterinburg'),
(35, 505, 'Nizhny Novgorod'),
(36, 506, 'Kazan'),
(37, 507, 'Chelyabinsk'),
(38, 508, 'Omsk'),
(39, 509, 'Samara'),
(40, 510, 'Rostov-on-Don'),
(41, 601, 'Bedok'),
(42, 602, 'Jurong West'),
(43, 603, 'Tampines'),
(44, 604, 'Woodlands'),
(45, 605, 'Serangoon'),
(46, 606, 'Bukit Merah'),
(47, 607, 'Pasir Ris'),
(48, 608, 'Bukit Batok'),
(49, 609, 'Toa Payoh'),
(50, 610, 'Clementi'),
(51, 701, 'Seoul'),
(52, 702, 'Busan'),
(53, 703, 'Incheon'),
(54, 704, 'Daegu'),
(55, 705, 'Daejeon'),
(56, 706, 'Gwangju'),
(57, 707, 'Suwon'),
(58, 708, 'Ulsan'),
(59, 709, 'Changwon'),
(60, 710, 'Goyang'),
(61, 801, 'Bangkok'),
(62, 802, 'Nonthaburi'),
(63, 803, 'Nakhon Ratchasima'),
(64, 804, 'Chiang Mai'),
(65, 805, 'Hat Yai'),
(66, 806, 'Udon Thani'),
(67, 807, 'Pak Kret'),
(68, 808, 'Khon Kaen'),
(69, 809, 'Ubon Ratchathani'),
(70, 810, 'Nakhon Si Thammarat'),
(71, 901, 'Dubai'),
(72, 902, 'Abu Dhabi'),
(73, 903, 'Sharjah'),
(74, 904, 'Al Ain'),
(75, 905, 'Ajman'),
(76, 906, 'Ras Al Khaimah'),
(77, 907, 'Fujairah'),
(78, 908, 'Umm Al Quwain'),
(79, 909, 'Khor Fakkan'),
(80, 910, 'Kalba'),
(81, 1001, 'Ho Chi Minh City'),
(82, 1002, 'Hanoi'),
(83, 1003, 'Hai Phong'),
(84, 1004, 'Can Tho'),
(85, 1005, 'Bien Hoa'),
(86, 1006, 'Da Nang'),
(87, 1007, 'Nha Trang'),
(88, 1008, 'Hue'),
(89, 1009, 'Quy Nhon'),
(90, 1010, 'Vung Tau');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`) VALUES
(1, 'Philippines'),
(2, 'Japan'),
(3, 'China'),
(4, 'Russia'),
(5, 'Singapore'),
(6, 'South Korea'),
(7, 'Thailand'),
(8, 'United Arab Emirates'),
(9, 'Vietnam');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `username`, `password`) VALUES
(28, 'Admin', '$2y$10$PHQKTygxFpknXnbAJnDurOfLJ.psY1rCMBxmRx60hiJzyk2f28dJa'),
(29, 'newAccount1', '$2y$10$GodAoGhazNt9MTd7Z97paepJM/HM/EqA3Bw.ZEg5HcX8/R/OKd5eO'),
(30, 'newAcocunt2', '$2y$10$MLSfQL4M5C75iDtwj0Pf0erIZkb0gXEAzgLKywaChgR7Ao1URAtl.'),
(31, 'newAccount3', '$2y$10$J5VhepMzIPAXd4BHePhAauZCM0mtB86lSwPrPlX/.ev0Un7Vmq7Va');

-- --------------------------------------------------------

--
-- Table structure for table `deliveries`
--

CREATE TABLE `deliveries` (
  `delivery_id` int(11) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(20) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `deliveries`
--

INSERT INTO `deliveries` (`delivery_id`, `customer_name`, `address`, `phone`, `order_date`, `product_id`, `quantity`) VALUES
(1, 'franz mark f de jesus', 'blk 14 15 lot 32 33 florida residence', '09399592684', '2025-03-10 09:01:53', 0, 0),
(2, 'franz mark f de jesus', 'blk 14 15 lot 32 33 florida residence', '09399592684', '2025-03-10 09:02:59', 0, 0),
(3, 'franz mark f de jesus', 'blk 14 15 lot 32 33 florida residence', '09399592684', '2025-03-10 09:03:25', 0, 0),
(4, 'franz mark f de jesus', 'blk 14 15 lot 32 33 florida residence', '09399592684', '2025-03-10 09:09:48', 0, 0),
(5, 'franz mark f de jesus', 'blk 14 15 lot 32 33 florida residence', '09399592684', '2025-03-10 09:24:11', 0, 0),
(6, 'franz mark f de jesus', 'blk 14 15 lot 32 33 florida residence', '09399592684', '2025-03-10 09:25:39', 0, 0),
(7, 'franz mark f de jesus', 'blk 14 15 lot 32 33 florida residence', '09399592684', '2025-03-10 09:36:07', 0, 0),
(8, 'franz mark f de jesus', 'blk 14 15 lot 32 33 florida residence', '09399592684', '2025-03-10 09:36:17', 0, 0),
(9, 'franz mark f de jesus', 'blk 14 15 lot 32 33 florida residence', '09399592684', '2025-03-10 09:36:25', 0, 0),
(10, 'franz mark f de jesus', 'blk 14 15 lot 32 33 florida residence', '09399592684', '2025-03-10 09:37:44', 9, 1),
(11, 'franz mark f de jesus', 'blk 14 15 lot 32 33 florida residence', '09399592684', '2025-03-10 09:38:44', 9, 1),
(12, 'franz mark f de jesus', 'blk 14 15 lot 32 33 florida residence', '09399592684', '2025-03-10 09:40:14', 9, 1),
(13, 'franz mark f de jesus', 'blk 14 15 lot 32 33 florida residence', '09399592684', '2025-03-10 11:00:56', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `customer_name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `product_name` varchar(100) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `category` varchar(10) NOT NULL DEFAULT 'men',
  `latitude` decimal(10,6) NOT NULL DEFAULT 0.000000,
  `longitude` decimal(10,6) NOT NULL DEFAULT 0.000000,
  `phone` varchar(20) NOT NULL,
  `distance` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `payment_method` enum('Card','Cash') NOT NULL,
  `card_number` varchar(16) DEFAULT NULL,
  `card_expiry` date DEFAULT NULL,
  `card_cvv` varchar(4) DEFAULT NULL,
  `payment_status` enum('Pending','Completed','Failed') DEFAULT 'Pending',
  `transaction_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permanent_orders`
--

CREATE TABLE `permanent_orders` (
  `permanent_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `total_price` decimal(10,2) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `permanent_orders`
--

INSERT INTO `permanent_orders` (`permanent_id`, `order_id`, `customer_id`, `customer_name`, `email`, `address`, `product_name`, `quantity`, `price`, `total_price`, `order_date`) VALUES
(92, 200, 28, 'satwinder', 'satwinder_jeerh@yahoo.com', 'Blk 7A Lot 13, Camella Homes', 'Dior Sauvage', 1, 120.00, 120.00, '2025-03-28 06:15:59'),
(93, 201, 28, 'satwinder', 'satwinder_jeerh@yahoo.com', 'Blk 7A Lot 13, Camella Homes', 'Dior Sauvage', 1, 120.00, 120.00, '2025-03-28 08:19:21'),
(94, 202, 28, 'satwinder', 'satwinder_jeerh@yahoo.com', 'Blk 7A Lot 13, Camella Homes', 'Stronger With You', 1, 150.00, 150.00, '2025-03-28 08:19:21'),
(95, 203, 28, 'satwinder', 'satwinder_jeerh@yahoo.com', 'Blk 7A Lot 13, Camella Homes', 'Stronger With You', 1, 150.00, 150.00, '2025-03-28 09:11:47'),
(96, 204, 28, 'satwinder', 'satwinder_jeerh@yahoo.com', 'Blk 7A Lot 13, Camella Homes', 'Tiffany & Co', 1, 150.00, 150.00, '2025-03-28 09:11:47');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `price` decimal(10,5) NOT NULL,
  `image` varchar(255) NOT NULL,
  `origin` varchar(255) DEFAULT NULL,
  `quantity_available` int(11) DEFAULT NULL,
  `material_used` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `date_of_creation` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `price`, `image`, `origin`, `quantity_available`, `material_used`, `description`, `date_of_creation`) VALUES
(8, 'Aventus Creed', 100.00000, 'images/creed.png', 'France', 44, 'Glass with silver cap', 'A bold, powerful fragrance with notes of pineapple, blackcurrant, and oakmoss.', '2010'),
(9, 'Dior Sauvage', 120.00000, 'images/sauvage.png', 'France', 55, 'Glass with metallic cap', 'A fresh and spicy scent with notes of bergamot, pepper, and amberwood.', '2015'),
(10, 'Stronger With You', 150.00000, 'images/swyi.png', 'Italy', 20, 'Glass with wooden cap', 'A warm, sensual fragrance with notes of cardamom, vanilla, and chestnut.', '2017'),
(11, 'Bleu De Chanel', 180.00000, 'images/bdc.png', 'France', 33, 'Glass with blue cap', 'A sophisticated, woody fragrance with notes of grapefruit, incense, and cedar.', '2010'),
(12, 'Afnan 9PM', 120.00000, 'images/9pm.png', 'UAE', 25, 'Glass with black matte cap', 'A bold, warm fragrance with a unique blend of vanilla, cinnamon, and amber.', '2019\r\n\r\n'),
(13, 'Orto Parisi Megamare', 100.00000, 'images/megamare.png', 'Italy\r\n\r\n', 15, 'Glass with metallic cap', 'A deeply aquatic and oceanic scent, rich in salty and fresh elements.', '2016'),
(14, 'Initio Side Effect', 150.00000, 'images/initio.png', 'France', 2, 'Glass with golden cap', 'A warm, spicy, and intoxicating fragrance with rum, tobacco, and cinnamon.', '2018'),
(15, 'Versace Eros Flame', 180.00000, 'images/flame.png', 'Italy', 25, 'Glass with red matte cap', 'A fiery, passionate fragrance with a mix of spicy, citrus, and woody notes.', '2018');

-- --------------------------------------------------------

--
-- Table structure for table `products2`
--

CREATE TABLE `products2` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `price` decimal(10,5) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `origin` varchar(255) DEFAULT NULL,
  `date_of_creation` varchar(255) DEFAULT NULL,
  `quantity_available` int(11) DEFAULT NULL,
  `material_used` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products2`
--

INSERT INTO `products2` (`product_id`, `product_name`, `price`, `image`, `description`, `origin`, `date_of_creation`, `quantity_available`, `material_used`) VALUES
(101, 'Miss Dior', 120.00000, 'images/missdior.png', 'A timeless and elegant floral fragrance with notes of rose, jasmine, and patchouli, evoking pure sophistication.', 'France', '1947', 57, ' Glass with silver ribbon cap'),
(102, 'Ariana Grande Cloud', 100.00000, 'images/agcloud.png', 'A dreamy and playful scent with hints of lavender, whipped cream, and coconut, capturing the essence of joy.', 'USA', '2018', 73, 'Glass with cloud-shaped cap'),
(103, 'Chanel No. 5', 200.00000, 'images/chano5.png', 'An iconic and luxurious fragrance with a blend of aldehydes, jasmine, and sandalwood, embodying timeless femininity.', 'France', '1921', 44, 'Glass with crystal-cut cap'),
(104, 'Tiffany & Co', 150.00000, 'images/t&c.png', 'A radiant and fresh floral scent with notes of iris, musk, and mandarin, symbolizing modern elegance.', 'USA', '2017', 50, 'Glass with diamond-inspired cap'),
(105, 'Dolce & Gabbana Light Blue', 150.00000, 'images/d&g.png', 'A breezy and invigorating fragrance featuring Sicilian lemon, apple, and cedarwood, evoking the spirit of the Mediterranean.', 'Italy', '2001', 50, 'Frosted glass with sky-blue cap'),
(106, 'Lanvin Eclat', 250.00000, 'images/eclat.png', 'A delicate and luminous floral fragrance with lilac, peach, and white tea, exuding effortless charm and grace.', 'France', '2002', 30, ' Glass with soft lavender hue'),
(107, 'Coco and Chanel', 170.00000, 'images/cocochanel.png', 'A bold yet elegant scent with spicy, floral, and woody notes, perfect for confident and sophisticated individuals.', 'France', '1984', 36, ' Glass with gold-accented cap'),
(108, 'MFK Baccarat Rouge 540', 180.00000, 'images/br540.png', 'A luxurious and enchanting fragrance with ambergris, saffron, and cedarwood, designed for those who seek exclusivity.', 'France', '2015', 20, 'Crystal-clear glass with gold emblem');

-- --------------------------------------------------------

--
-- Table structure for table `received_orders`
--

CREATE TABLE `received_orders` (
  `received_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `customer_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `total_price` decimal(10,2) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `customer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `received_orders`
--

INSERT INTO `received_orders` (`received_id`, `order_id`, `customer_name`, `email`, `address`, `product_name`, `quantity`, `price`, `total_price`, `order_date`, `customer_id`) VALUES
(128, 200, 'satwinder', 'satwinder_jeerh@yahoo.com', 'Blk 7A Lot 13, Camella Homes', 'Dior Sauvage', 1, 120.00, 120.00, '2025-03-28 06:15:59', 28),
(129, 201, 'satwinder', 'satwinder_jeerh@yahoo.com', 'Blk 7A Lot 13, Camella Homes', 'Dior Sauvage', 1, 120.00, 120.00, '2025-03-28 08:19:21', 28),
(130, 202, 'satwinder', 'satwinder_jeerh@yahoo.com', 'Blk 7A Lot 13, Camella Homes', 'Stronger With You', 1, 150.00, 150.00, '2025-03-28 08:19:21', 28),
(131, 203, 'satwinder', 'satwinder_jeerh@yahoo.com', 'Blk 7A Lot 13, Camella Homes', 'Stronger With You', 1, 150.00, 150.00, '2025-03-28 09:11:47', 28),
(132, 204, 'satwinder', 'satwinder_jeerh@yahoo.com', 'Blk 7A Lot 13, Camella Homes', 'Tiffany & Co', 1, 150.00, 150.00, '2025-03-28 09:11:47', 28);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `permanent_orders`
--
ALTER TABLE `permanent_orders`
  ADD PRIMARY KEY (`permanent_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `products2`
--
ALTER TABLE `products2`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `received_orders`
--
ALTER TABLE `received_orders`
  ADD PRIMARY KEY (`received_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=205;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `permanent_orders`
--
ALTER TABLE `permanent_orders`
  MODIFY `permanent_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `products2`
--
ALTER TABLE `products2`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT for table `received_orders`
--
ALTER TABLE `received_orders`
  MODIFY `received_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`customer_id`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_ID`);

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `payments_ibfk_2` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`customer_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
