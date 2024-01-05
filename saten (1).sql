-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2023 at 05:42 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `saten`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `info` text NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `title`, `image`, `price`, `info`, `date`) VALUES
(1, 'iPhone SE', 'ise.jpg', 259900, 'Օպերատիվ հիշողություն 4GB, Հիշողություն 128GB', '2023-04-20'),
(2, 'iPhone 8', 'i8.jpg', 199900, 'Օպերատիվ հիշողություն 2GB, Հիշողություն 256GB', '2023-04-20'),
(3, 'iPhone 14 Pro Max', 'i14.jpg', 529900, 'Օպերատիվ հիշողություն 6GB, Հիշողություն 128GB', '2023-04-20'),
(4, 'iPhone 13 Mini', 'i13.jpg', 349900, 'Օպերատիվ հիշողություն 4GB, Հիշողություն 128GB', '2023-04-20'),
(5, 'iPhone 7', 'i7.jpg', 239900, 'Օպերատիվ հիշողություն 3GB, Հիշողություն 256GB', '2023-04-20'),
(6, 'iPhone 13 Pro', 'i13p.jpg', 349900, 'Օպերատիվ հիշողություն 4GB, Հիշողություն 128GB', '2023-04-20'),
(7, 'iPhone 14 Plus', 'i14+.jpg', 469900, 'Օպերատիվ հիշողություն 6GB, Հիշողություն 128GB', '2023-04-20'),
(8, 'iPhone 11', 'i11.jpg', 229900, 'Օպերատիվ հիշողություն 4GB, Հիշողություն 64GB', '2023-04-20'),
(9, 'iPhone 12', 'i12.jpg', 299900, 'Օպերատիվ հիշողություն 4GB, Հիշողություն 64GB', '2023-04-20'),
(10, 'iPhone 12 Mini', 'i12m.jpg', 329900, 'Օպերատիվ հիշողություն 4GB, Հիշողություն 256GB', '2023-04-20'),
(11, 'iPhone 14 Pro', 'i14p.jpg', 529900, 'Օպերատիվ հիշողություն 6GB, Հիշողություն 128GB', '2023-04-20'),
(12, 'iPhone 12 Pro Max', 'i12p.jpg', 579900, 'Օպերատիվ հիշողություն 6GB, Հիշողություն 128GB', '2023-04-20');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `info` longtext NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `info`, `image`, `price`) VALUES
(1, '', '', '', 0),
(2, '', '', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
