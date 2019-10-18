-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2019 m. Rgp 06 d. 22:06
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pirmas`
--

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `payer`
--

CREATE TABLE `payer` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `note` text NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Sukurta duomenų kopija lentelei `payer`
--

INSERT INTO `payer` (`id`, `name`, `note`, `updated_at`, `created_at`) VALUES
(1, 'Mantas', 'Užrašas', '2019-08-06 19:55:25', '2019-08-06 14:22:25'),
(2, 'Antras', 'Užrašas du', '2019-08-06 19:55:41', '2019-08-06 17:30:38');

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `payer_loyality`
--

CREATE TABLE `payer_loyality` (
  `id` int(11) NOT NULL,
  `payer_id` int(11) NOT NULL,
  `amount` float NOT NULL,
  `moovment` text NOT NULL,
  `note` text NOT NULL,
  `crated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Sukurta duomenų kopija lentelei `payer_loyality`
--

INSERT INTO `payer_loyality` (`id`, `payer_id`, `amount`, `moovment`, `note`, `crated_at`) VALUES
(2, 1, 13, 'pirmas', 'pirmasis', '2019-08-06 18:53:58'),
(3, 2, 15.7, 'antras', 'antrasis', '2019-08-06 19:35:29'),
(4, 2, 11111.1, 'trečias', 'trečiasis', '2019-08-06 19:35:44');

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `payer_work_credit`
--

CREATE TABLE `payer_work_credit` (
  `id` int(11) NOT NULL,
  `payer_id` int(11) NOT NULL,
  `amount` float NOT NULL,
  `spent_on` text NOT NULL,
  `note` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Sukurta duomenų kopija lentelei `payer_work_credit`
--

INSERT INTO `payer_work_credit` (`id`, `payer_id`, `amount`, `spent_on`, `note`, `created_at`) VALUES
(2, 1, 10.1, 'Pirmas', 'Pirmasis', '2019-08-06 19:57:00'),
(3, 1, 0.1, 'Antras', 'Antrasis', '2019-08-06 19:57:12'),
(4, 2, 99.9, 'Trečias', 'Trečiasis', '2019-08-06 19:57:30');

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `pasword` varchar(256) DEFAULT NULL,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Sukurta duomenų kopija lentelei `users`
--

INSERT INTO `users` (`id`, `name`, `pasword`, `update_at`, `created_at`) VALUES
(1, 'pirmas', 'pirmas', '2019-08-06 10:10:43', '2019-08-06 10:10:43'),
(2, 'antras', 'antras', '2019-08-06 10:10:57', '2019-08-06 10:10:57'),
(3, 'demo', 'demo', '2019-08-06 11:08:06', '2019-08-06 11:08:06'),
(4, 'as', 'ass', '2019-08-06 13:48:21', '2019-08-06 13:48:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `payer`
--
ALTER TABLE `payer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payer_loyality`
--
ALTER TABLE `payer_loyality`
  ADD PRIMARY KEY (`id`),
  ADD KEY `who` (`payer_id`);

--
-- Indexes for table `payer_work_credit`
--
ALTER TABLE `payer_work_credit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `credits` (`payer_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `payer`
--
ALTER TABLE `payer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `payer_loyality`
--
ALTER TABLE `payer_loyality`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `payer_work_credit`
--
ALTER TABLE `payer_work_credit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Apribojimai eksportuotom lentelėm
--

--
-- Apribojimai lentelei `payer_loyality`
--
ALTER TABLE `payer_loyality`
  ADD CONSTRAINT `who` FOREIGN KEY (`payer_id`) REFERENCES `payer` (`id`);

--
-- Apribojimai lentelei `payer_work_credit`
--
ALTER TABLE `payer_work_credit`
  ADD CONSTRAINT `credits` FOREIGN KEY (`payer_id`) REFERENCES `payer` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
