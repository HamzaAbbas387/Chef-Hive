-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2025 at 05:40 PM
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
-- Database: `chefhive`
--

-- --------------------------------------------------------

--
-- Table structure for table `cuisines_carousel`
--

CREATE TABLE `cuisines_carousel` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `image_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cuisines_carousel`
--

INSERT INTO `cuisines_carousel` (`id`, `title`, `description`, `image_url`) VALUES
(1, 'Pakistani Cuisine', 'Rich spices, traditional flavors, and hearty meals.', './images/pakistani-cuisine-img.jpg'),
(2, 'Chinese Cuisine', 'Experience the flavors of noodles, rice, and sauces.', './images/chinese-cuisine-img.jpg'),
(3, 'French Cuisine', 'Elegant dishes and desserts with rich taste.', './images/french-cuisine-img.jpg'),
(4, 'Japanese Cuisine', 'Minimalistic and fresh dishes like sushi and ramen.', './images/japanese-cuisine-img.jpg'),
(5, 'Italian Cuisine', 'Enjoy pasta, pizza and vibrant tomato-based flavors.', './images/italian-cuisine-img.jpg'),
(6, 'Thai Cuisine', 'Sweet, sour, and spicy flavors in one dish.', './images/thai-cuisine-img.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `popular_recipes`
--

CREATE TABLE `popular_recipes` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `popular_recipes`
--

INSERT INTO `popular_recipes` (`id`, `title`, `description`, `image`) VALUES
(4, 'Spicy Grilled Chicken', 'Succulent chicken grilled with aromatic spices and herbs.', './images/dish-1.jpg'),
(5, 'Classic Italian Pasta', 'Authentic pasta tossed in rich tomato basil sauce.', './images/dish-2.jpg'),
(6, 'Cheesy Garlic Bread', 'Crispy bread topped with gooey cheese and rich garlic butter.', './images/dish-3.jpg'),
(7, 'Strawberry Custard', 'A smooth and creamy custard layered with fresh strawberries.', './images/dish-4.jpg'),
(8, 'Beef Steak with Herbs', 'Juicy grilled steak served with a mix of aromatic herbs.', './images/dish-5.jpg'),
(9, 'Veggie Stir Fry', 'Fresh vegetables stir-fried in a savory soy garlic sauce.', './images/dish-6.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cuisines_carousel`
--
ALTER TABLE `cuisines_carousel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `popular_recipes`
--
ALTER TABLE `popular_recipes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cuisines_carousel`
--
ALTER TABLE `cuisines_carousel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `popular_recipes`
--
ALTER TABLE `popular_recipes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
