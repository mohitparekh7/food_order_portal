-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 31, 2020 at 12:17 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food_order`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `u_id` int(11) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  `pname` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `qty` int(11) DEFAULT NULL,
  `p_path` varchar(255) NOT NULL,
  `rowstate` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`c_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `contact_id` int(11) NOT NULL AUTO_INCREMENT,
  `contact_uid` int(11) NOT NULL,
  `contact_fname` varchar(255) NOT NULL,
  `contact_email` varchar(255) NOT NULL,
  `contact_mobilenumber` varchar(11) NOT NULL,
  `contact_query` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`contact_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `contact_uid`, `contact_fname`, `contact_email`, `contact_mobilenumber`, `contact_query`, `timestamp`) VALUES
(1, 7, 'Mohit', 'mohit@try.com', '7894561230', 'just trying', '2020-10-30 18:51:33');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `order_uid` int(11) NOT NULL,
  `order_pid` int(11) NOT NULL,
  `order_pname` varchar(255) NOT NULL,
  `order_price` int(11) NOT NULL,
  `order_qty` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `order_uid`, `order_pid`, `order_pname`, `order_price`, `order_qty`, `timestamp`) VALUES
(1, 7, 2, 'Triple Chocolate Truffle', 760, 4, '2020-10-30 22:31:36'),
(2, 7, 33, 'Red Velvet Cake', 1620, 6, '2020-10-30 22:31:36'),
(3, 7, 2, 'Triple Chocolate Truffle', 760, 4, '2020-10-30 22:38:49'),
(4, 7, 33, 'Red Velvet Cake', 1620, 6, '2020-10-30 22:38:49'),
(5, 7, 2, 'Triple Chocolate Truffle', 760, 4, '2020-10-30 22:42:12'),
(6, 7, 33, 'Red Velvet Cake', 1620, 6, '2020-10-30 22:42:12');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_price` int(10) NOT NULL,
  `p_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`p_id`, `p_name`, `p_price`, `p_description`, `p_path`, `category`) VALUES
(1, 'Cheese Chicken Salad', 220, 'All white meat, shredded chicken, finely minced celery, mayonnaise, & our secret seasoning', './images/f11.jpg', 'special'),
(2, 'Triple Chocolate Truffle', 190, 'milk chocolate ganache centre coated in dark chocolate and chopped toasted nuts', './images/f21.jpg', 'special'),
(3, 'Oats and Honey Pancakes', 170, 'Oats pancakes drizzled with honey and topped with a dash of cinnamon', './images/f23.jpg', 'special'),
(4, 'Egg Fried Rice', 210, 'Spicy rice along with stir fried vegetables topped with half-done eggs', './images/f41.jpg', 'special'),
(5, 'Oreo Brownies', 170, 'Decadent fudgy chocolate brownies topped with oreo crumble and vanilla ice-cream', './images/f51.jpg', 'special'),
(6, 'Sweet Potato Fries', 170, 'Healthy sweet potato baked fries with a side of special salsa and mayo dip', './images/f61.jpg', 'special'),
(7, 'Eggs Benedict', 210, 'Two halves of English muffins topped with poached eggs and hollandaise sauce', './images/b11.jpg', 'bestseller'),
(8, 'Chicken Ravioli', 230, 'Spicy marinara chicken filling in a thin pasta dough cooked with creamy sauce', './images/b21.jpg', 'bestseller'),
(9, 'Paneer Satay', 200, 'Paneer marianated with tomato based sauce and smoked with charcoal', './images/b31.jpg', 'bestseller'),
(10, 'White Sauce Pasta', 170, 'Pasta cooked in creamy cheddar and mozzarella cheese sauce topped with Italian herbs', './images/b82.jpg', 'bestseller'),
(11, 'Cream of Tomato Soup', 150, 'Creamy thick soup made with smoked tomatoes and garlic topped with fresh cream', './images/b71.jpg', 'bestseller'),
(12, 'Chocolate cupcake creamcheese frosting', 110, 'Dark chocolate cupcake along with vanilla creamcheese frosting', './images/b93.jpg', 'bestseller'),
(13, 'Rava dosa', 200, 'Crispy rava dosa with a side of white and green chutney and our special sambhar', './images/br1.jpg', 'breakfast'),
(14, 'Eggs on Avocado Toast', 210, 'Poached eggs on the top of creamy mashed avocado along with crispy toast', './images/br31.jpg', 'breakfast'),
(15, 'Oats and Honey Pancakes', 170, 'Oats pancakes drizzled with honey and topped with a dash of cinnamon', './images/f31.jpg', 'breakfast'),
(16, 'Idli Chutney and Sambhar', 180, 'Soft idlis along with a side of white and green chutney and our special sambhar', './images/br6.jpg', 'breakfast'),
(17, 'Misal Pav', 160, 'Misal topped with spicy tari along with buttered pav, onion and lemon', './images/br41.jpg', 'breakfast'),
(18, 'Fruit Yoghurt Parafait', 190, 'Greek yoghurt tooped with blueberries, rasberries, granola and various nuts', './images/br51.jpg', 'breakfast'),
(19, 'Spring Rolls', 200, 'Crispy outer covering with spicy vegetable filling with a side of habanero sauce', './images/st0.jpg', 'starter'),
(20, 'Shrimp Tempura', 240, 'Japanese dish consisting of fresh shrimp battered and deep fried with a side of a spicy dip', './images/st2.jpg', 'starter'),
(21, 'Honey Chilly Chicken', 230, 'Tender chicken cooked in sweet and spicy sauce toped with some sesame seeds', './images/st41.jpg', 'starter'),
(22, 'Fish And Chips', 220, 'Classic British dish consisting of fried fish in batter served with chips and spicy dip', './images/st5.jpg', 'starter'),
(23, 'Sweet Potato Fries', 190, 'Healthy sweet potato baked fries with a side of special salsa and mayo dip', './images/f61.jpg', 'starter'),
(24, 'Grilled Herb Tofu', 190, 'Grilled herb infused tofu topped with vegetables and creamy spicy sauce', './images/st6.jpg', 'starter'),
(25, 'Eggs Bendict', 200, 'Two halves of English muffins topped with poached eggs and hollandaise sauce', './images/b11.jpg', 'maincourse'),
(26, 'Chicken Ravioli', 250, 'Spicy marinara chicken filling in a thin pasta dough cooked with creamy sauce', './images/b21.jpg', 'maincourse'),
(27, 'Cheese Cherry Tomato Pizza', 220, 'Thin crust pizza topped with cheese and grilled cherry tomatoes', './images/b61.jpg', 'maincourse'),
(28, 'White Sauce Pasta', 200, 'Pasta cooked in creamy cheddar and mozzarella cheese sauce topped with Italian herbs', './images/b82.jpg', 'maincourse'),
(29, 'Chilly Garlic Spaghetti', 230, 'Spaghetti cooked in our secret chilly and garlic sauce topped with some basil', './images/chef7.jpg', 'maincourse'),
(30, 'Egg Fried Rice', 240, 'Spicy rice along with stir fried vegetables topped with half-done eggs', './images/f41.jpg', 'maincourse'),
(31, 'Triple Chocolate Truffle', 160, 'Milk chocolate ganache center coated in dark chocolate and chopped toasted nuts', './images/f21.jpg', 'desserts'),
(32, 'Chocolate Mousse', 120, 'Light and airy rich chocolate mousse topped with some frozen pomegranate', './images/d2.jpg', 'desserts'),
(33, 'Red Velvet Cake', 270, 'Crimson-colored two layered spongy cake with smooth cream-cheese frosting', './images/b94.jpg', 'desserts'),
(34, 'Chocolate cupcake cream cheese frosting', 110, 'Dark chocolate cupcake along with vanilla cream cheese frosting', './images/b93.jpg', 'desserts'),
(35, 'Dutch Chocolate Pastry', 120, 'Rich Dutch chocolate pastry with milk chocolate frosting and topped with a raspberry reduction', './images/d1.jpg', 'desserts'),
(36, 'Oreo Brownie', 170, 'Decadent fudgy chocolate brownies topped with oreo crumble and vanilla ice-cream', './images/f51.jpg', 'desserts'),
(37, 'Orange Martini', 200, 'Orange flavored gin and vermouth, and garnished with a lemon twist', './images/be11.jpg', 'beverages'),
(38, 'Blue Lagoon', 170, 'Blue Curaçao mixed with vodka and lemonade garnished with a lemon slice', './images/be21.jpg', 'beverages'),
(39, 'Virgin Mojito', 150, 'Refreshing drink consisting of carbonated water along with lemon and mint', './images/be41.jpg', 'beverages'),
(40, 'Passion Fruit Spritz', 190, 'Cocktail consisting of prosecco, Aperol and soda water with a twist of passion fruit', './images/be31.jpg', 'beverages'),
(41, 'Moscow Mule', 200, 'Made with vodka, spicy ginger beer, lime juice, garnished with a slice or wedge of lime and mint', './images/be51.jpg', 'beverages'),
(42, 'Raspberry Mint Limeade', 160, 'Carbonated water clubbed with lime juice, fresh mint and frozen rasberries', './images/be61.jpg', 'beverages');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

DROP TABLE IF EXISTS `user_details`;
CREATE TABLE IF NOT EXISTS `user_details` (
  `user_id` int(10) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(250) NOT NULL,
  `user_address` varchar(250) NOT NULL,
  `user_emailid` varchar(100) NOT NULL,
  `user_mobilenumber` varchar(11) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`user_id`, `user_name`, `user_address`, `user_emailid`, `user_mobilenumber`, `user_password`, `timestamp`) VALUES
(1, 'Mohit', 'Pune', 'xyz@gmail.com', '7738281243', 'hi', '2020-10-23 07:32:09'),
(3, 'samy', 'mum', 's@g.com', '9876543210', 'hi', '2020-10-23 07:33:42'),
(7, 'Arthur Curry', 'Mumbai', 'curryarthur@aquaman.com', '7410258963', 'ocean', '2020-10-29 20:05:50');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
