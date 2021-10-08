-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2021 at 08:22 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `animal`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `animal` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  `life` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `visitor_counter` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `animal`, `image`, `description`, `life`, `date`, `visitor_counter`) VALUES
(1, 'Hippos', 'Herbivores', 'image/ hippos.jpg', 'The hippopotamus is the third largest land mammal behind elephants and rhinoceros. There are five su', '[10+ Year]', '2021-10-08 14:16:29', 50),
(3, 'Giant Pandas', 'Herbivores', 'image/ giant pandas.jpg', 'Panda bears are native to south central china, and today only exist in a few mountain ranges due to ', '[5-10 Year]', '2021-10-08 14:25:02', 50),
(4, 'Koalas', 'Herbivores', 'image/ Koalas.jpg', 'Koala’s are native to Australia, and live only in eucalyptus forests. They are able to digest the le', '[1-5 Year]', '2021-10-08 14:26:25', 50),
(5, 'Elephant', 'Herbivores', 'image/ elephant.jpg', 'Elephants win the title of largest land animal. There are currently three subspecies, two from Afric', '[10+ Year]', '2021-10-08 14:28:50', 50),
(6, 'Rabbits', 'Herbivores', 'image/ rabbit.jpg', 'Rabbits can be found all across the world, and are perhaps best known for their long ears and abilit', '[0-1 Year]', '2021-10-08 14:31:43', 50),
(7, 'Groundhog', 'Omnivores', 'image/ groundhog.jpg', 'Groundhogs, also known as a whistle pig, woodchuck, or land beavers are omnivores. While they mostly', '[1-5 Year]', '2021-10-08 14:35:18', 50),
(8, 'Fennec Fox', 'Omnivores', 'image/ fennec_fox_0.jpg', 'They are the world’s smallest fox. Fennec foxes live in desert environments and live 10-14 years on ', '[5-10 Year]', '2021-10-08 14:37:37', 50),
(9, 'Black Backed Jackal', 'Omnivores', 'image/ Black-backed_jackal.jpg', 'They are the world’s smallest fox. Fennec foxes live in desert environments and live 10-14 years on ', '[10+ Year]', '2021-10-08 14:43:32', 50),
(10, 'American Black Bear', 'Omnivores', 'image/ american black bear.jpg', 'American Black bears are omnivores, with up to 85% percent of their diet consisting of vegetation. T', '[10+ Year]', '2021-10-08 14:45:14', 50),
(11, 'Grizzly Bear', 'Omnivores', 'image/ Grizzly Bear.jpg', 'Grizzly bears, also known as the North American brown bear, are mighty animals. They have sharp claw', '[5-10 Year]', '2021-10-08 14:46:39', 50),
(12, 'Arctic Wolves', 'Carnivores', 'image/ arctic-wolves c.jpg', 'Arctic wolves, a sub-species of the gray wolf, are pack animals. They live in the Arctic regions of ', '[5-10 Year]', '2021-10-08 14:48:20', 50),
(13, 'Brown Hyena', 'Carnivores', 'image/ Brown-Hyena.jpg', 'Brown hyenas are mostly scavengers. They feed on already dead animals rather than hunting, finishing', '[1-5 Year]', '2021-10-08 14:51:15', 50),
(14, 'Aardwolf', 'Carnivores', 'image/ aardwolfc.jpg', 'Aardwolf’s live in parts of Africa on dry open plains. Aardwolf are part of the same family as hyena', '[0-1 Year]', '2021-10-08 14:52:27', 50),
(15, 'Honey Badger', 'Carnivores', 'image/ Honey-badger-c.jpg', 'Honey Badgers are part of the weasel family, making them closely related to skunks and ferrets. Hone', '[0-1 Year]', '2021-10-08 14:53:41', 50),
(16, 'Great White Shark', 'Carnivores', 'image/ shark.jpg', 'The Great White shark is considered one of the most dangerous sharks in the world. It’s no surprise ', '[10+ Year]', '2021-10-08 14:55:49', 50),
(17, 'Aardwolf', 'Carnivores', 'image/ aardwolfc.jpg', 'Aardwolf’s live in parts of Africa on dry open plains. Aardwolf are part of the same family as hyena', '[1-5 Year]', '2021-10-08 16:22:14', 50),
(18, '', '', '', '', '', '2021-10-08 16:50:11', 50);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
