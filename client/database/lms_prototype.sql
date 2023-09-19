-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2023 at 03:24 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lms_prototype`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `userCode` varchar(100) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `suffix` varchar(50) DEFAULT NULL,
  `email` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `role_as` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0 =  admin\r\n1 = teachers\r\n2 = students',
  `status` tinyint(11) NOT NULL DEFAULT 1 COMMENT '1 = Active\r\n2 = Inactive',
  `profile_img` varchar(200) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `userCode`, `fname`, `lname`, `suffix`, `email`, `username`, `password`, `role_as`, `status`, `profile_img`, `created_at`) VALUES
(1, 'admin001', 'Kristine Joy', 'Nacional', NULL, 'kjnacional11@gmail.com', 'kris', 'passwordtest', 0, 1, NULL, '2023-09-16 21:14:12'),
(3, 'T19002_3', 'Anthony', 'Marcus', 'III', 'AnthonyMarcus1@gmail.com', 'anthonyM', 'ZhThwPTndD', 1, 2, NULL, '2023-09-18 15:22:57'),
(4, 'T47646_4', 'Allaine ', 'De La Fuente', '', 'allain_D@gmail.com', 'allain_D', 'RdQA2nH3qd', 1, 1, NULL, '2023-09-18 18:58:24'),
(5, 'T40313_5', 'Anna Mae', 'Reyes', '', 'annaMae@gmail.com', 'anna_mae', 'lrMweSisFD', 2, 1, NULL, '2023-09-18 18:59:10'),
(6, 'T98765_6', 'Raymond', 'Santos', 'Jr.', 'santos_ray@gmail.com', 'santosRay', 'nAaiuKzTJA', 1, 1, NULL, '2023-09-18 18:59:53'),
(7, 'T52813_7', 'Crisanto', 'Sero', 'III', 'sero_cris@gmail.com', 'Crisanto_S', '7JPUJTfih7', 1, 1, NULL, '2023-09-18 19:00:36'),
(8, 'T53165_8', 'Susana Marie', 'Reyes', '', 'susana_marie@gmail.com', 'susana', '30ssnucgO4', 1, 1, NULL, '2023-09-18 19:02:44'),
(9, 'T16922_9', 'Melivic', 'Garcia', '', 'melivic_garcia@gmail.com', 'melcia', 'LZnVXSgMjW', 2, 1, NULL, '2023-09-18 19:03:17'),
(10, 'T4571_10', 'Erica Marie', 'Manalo', '', 'erica_manalo@gmail.com', 'erica_marie', 'pwo2VzPMbk', 1, 1, NULL, '2023-09-18 19:05:06'),
(11, 'T62633_11', 'Samantha', 'Aguilar', '', 'samantha_aguilar@gmail.com', 'sammy_A', 'RQcGiM9f2k', 1, 1, NULL, '2023-09-18 19:10:59'),
(12, 'T15310_12', 'Alexander', 'Cepe', '', 'cepe_alexander@gmail.com', 'alexcepe', 'X0jRa7JlVt', 1, 1, NULL, '2023-09-18 19:25:32'),
(13, 'T23090_13', 'Angel May', 'Garcia', '', 'angel_garcia@gmail.com', 'angel_cia', 'WY9FBg80N9', 1, 1, NULL, '2023-09-18 19:26:01'),
(14, 'T59484_14', 'Samuel', 'Checa', 'Jr.', 'Samuel_Checa@gmail.com', 'samychec', 'Pinw71M7Do', 1, 1, NULL, '2023-09-18 20:25:50'),
(15, 'T57891_15', 'Antoinette', 'Dela Cruz', '', 'AntoinetteDelaCruz@gmail.com', 'tonett', 'kCeBetEiC6', 1, 1, NULL, '2023-09-18 20:32:45'),
(16, 'T3821_16', 'Alexa', 'Anton', '', 'alexa_anton@gmail.com', 'alexa', 'K1Wi2g4mgW', 1, 1, NULL, '2023-09-18 23:50:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
