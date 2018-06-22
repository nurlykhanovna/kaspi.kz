-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 05, 2018 at 03:51 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yii2`
--

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1512805931),
('m130524_201442_init', 1512805937);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'asd', 'idA2lRqKvqIuWLD_UDeY3vnncDO5dsM1', '$2y$13$ZVyQWaU/ATYVXWd8LDG5cuGMBxQY3zYAU4.K62KazLfXRoulsE3uq', NULL, 'asd@mas.c', 10, 1513649219, 1513649219),
(2, 'mnb', 't-RNzRpW-gLkGjc9zdtiS0qNyJ6iIdDu', '$2y$13$G7.EwiKv4Iq563bS0LWzOOD0WbYTPBKQet56lZXLyXuAk135bd.pK', NULL, 'mnb@gmail.com', 10, 1513649502, 1513649502),
(4, 'alima1', '7DXAOPEt7jQMm16-BGaZdvTCY4MglSwu', '$2y$13$jEapX4/0rHT2dXSSQEJbkOjv0AzH/dI9j8kIplgUg/R2d1VnXBGwC', NULL, 'test@mail.com', 10, 1525496388, 1525496388),
(5, 'alima', 'C5MkhqN7yfLsltmdYZSbO_az-EoLAJNZ', '$2y$13$Zy95g5Zw15BFXhnuoaES/.JbOOhCbpKU9ov60kmHgtj3ZLK.HmIkC', NULL, 'toster@mail.com', 10, 1525496469, 1525496469),
(6, 'moderator', 'bpOmuj5pjTuERClA_QDbPny1nze-Ibas', '$2y$13$pHszs/SdiqJ2WF.bTUpUkeDyhEcHMWtKH8TLF4mumUafBzjLvG8Wa', NULL, 'moderator@mail.com', 10, 1525497185, 1525497185),
(7, 'Test user', 'AqucOLDqaTXd6p4qlpTMIlYECj8EBqPO', '$2y$13$u2Fpnj2Hg5Xqlq9ENAp6f.OlQKYLB1yAmdPAjh9KWIY5dn1WmCM5G', NULL, 'testuser@mail.com', 10, 1525505101, 1525505101),
(8, 'Tester', 'bXpTKWZ_z_MCdl8z8A6gO_KQBHoovF_z', '$2y$13$xPuLMlvZPukzbiBSDS1vRODyrqw.epZOJC/HJZ2WCQHsdo2t8r3wa', NULL, 'tester@mail.com', 10, 1525513733, 1525513733);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
