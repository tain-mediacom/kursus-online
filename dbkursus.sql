-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2025 at 05:06 AM
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
-- Database: `dbkursus`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `bidang` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `terdaftar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `email`, `password`, `role`, `bidang`, `foto`, `status`, `terdaftar`) VALUES
(11, 'Admin', 'admin@gmail.com', '$2y$10$rB.M/BGkfsPtQFVlicugDeA2r8tLTgHWZBJgVlcufrgCbdbIMwrQG', 'Admin', 'Admin', 'user.jpg', 'Aktif', 'Thursday, 2025-11-20 19:05:37'),
(12, 'TA\'IN SIDDIK, S.Kom', 'tainsiddik11@gmail.com', '$2y$10$OzTxKEM4kych4ZNlXOVMTuuBm/0dl9q0lIdsISwB/dqeRcMjoEjTe', 'Instruktur', 'Programming', 'user.jpg', 'Aktif', 'Thursday, 2025-11-20 19:08:18'),
(13, 'Udin Kayu', 'callmeudin@gmail.com', '$2y$10$qSHYt2XZF.BsdQ1BSaafw.APB9C9ViNwVd2PhOAhyKfnGKQcx/zEi', 'Instruktur', 'Programming', 'user.jpg', 'Nonaktif', 'Friday, 2025-11-21 03:20:21'),
(14, 'luv', 'luv123@gmail.com', '$2y$10$90q1EWdgApJiChGTOmmabeoW5hbHOkFMmiH/95yjU2sBp8bG1taeK', 'Instruktur', 'Hardware', 'user.jpg', 'Nonaktif', 'Friday, 2025-11-21 03:22:30'),
(16, 'Jhon', 'jhon@gmail.com', '$2y$10$MUUPXBMIB0xK6LacRcw9bOdjzpfvtqhfeYt0sXu.wyAc1CCHOMyGG', 'Instruktur', 'Hardware', 'user.jpg', 'Nonaktif', 'Friday, 2025-11-21 04:02:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
