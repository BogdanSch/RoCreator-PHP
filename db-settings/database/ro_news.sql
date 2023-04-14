-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2023 at 04:17 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ro_news`
--

-- --------------------------------------------------------

--
-- Table structure for table `games_table`
--

CREATE TABLE `games_table` (
  `id` int(11) NOT NULL,
  `game_title` varchar(100) DEFAULT NULL,
  `game_content` text DEFAULT NULL,
  `game_type` varchar(100) DEFAULT NULL,
  `game_image` varchar(100) DEFAULT NULL,
  `publish_date` datetime DEFAULT NULL,
  `game_link` varchar(200) NOT NULL,
  `game_available` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `games_table`
--

INSERT INTO `games_table` (`id`, `game_title`, `game_content`, `game_type`, `game_image`, `publish_date`, `game_link`, `game_available`) VALUES
(1, 'Forest Story', 'Forest is the place where you can explore and spend you time. You with the group of tourists set off to the sea but something got wrong and you need to stay in the forest.', 'Roblox', 'image3-1.png', '2023-01-29 17:04:25', 'https://www.roblox.com/games/6394812786/Forest-Story', 1),
(2, 'Forest Story 2', 'Welcome back to the sequel to the famous Forest Story game. In this game you will return to a new camping lager called Racky forest but when night came, something went wrong.', 'Roblox', 'image4.png', '2023-01-29 17:09:00', 'https://www.roblox.com/games/7327362362/Forest-Story-2', 1),
(3, 'Super Parkour 3', 'New interesting adventures came. Explore the game to find something useful and spend your time with smile on your fase. Good luck everyone!', 'Roblox', 'image5-1.png', '2023-01-29 17:13:46', 'https://www.roblox.com/games/4680524694/Super-Parkour-3', 1),
(4, 'Island of Mystery', 'Welcome to a new super adventure game. You need survive until round ends and explore the island. Only one can get out of island.', 'Roblox', 'image5-1.png', '2023-01-29 17:13:46', 'https://www.roblox.com/games/6534765863/Island-of-Mystery', 1),
(5, 'WarBot', 'WarBot is a game where you need to survive the each round against evil monsters. You can collect money by winning games and buy new upgrades in the shop. Do you think you can do that?', 'Android', 'image4.png', '2023-01-29 17:13:46', 'https://example.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `soft_table`
--

CREATE TABLE `soft_table` (
  `id` int(11) NOT NULL,
  `soft_title` varchar(100) DEFAULT NULL,
  `soft_content` text DEFAULT NULL,
  `soft_type` varchar(100) DEFAULT NULL,
  `soft_image` varchar(100) DEFAULT NULL,
  `publish_date` datetime DEFAULT NULL,
  `soft_link` varchar(250) NOT NULL,
  `soft_available` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `soft_table`
--

INSERT INTO `soft_table` (`id`, `soft_title`, `soft_content`, `soft_type`, `soft_image`, `publish_date`, `soft_link`, `soft_available`) VALUES
(1, 'Calculator for pc', 'This is an important thing ever. This calculator has a nice design and can do all operations what you need. Made for windows devices. It doesn\'t	 have any virus!', 'PC', 'image3-1.png', '2023-01-29 17:21:18', '', 0),
(2, 'Calculator for android', 'This is an important thing ever. This calculator has a nice design and can do all operations what you need. Made for android devices. It doesn\'t have any virus!', 'Android', 'image4.png', '2023-01-29 17:23:12', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `log` varchar(255) DEFAULT NULL,
  `pas` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `log`, `pas`) VALUES
(1, 'pit', '123'),
(2, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `games_table`
--
ALTER TABLE `games_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `soft_table`
--
ALTER TABLE `soft_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `games_table`
--
ALTER TABLE `games_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `soft_table`
--
ALTER TABLE `soft_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
