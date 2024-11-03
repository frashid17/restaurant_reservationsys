-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2024 at 04:00 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurantdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `account_id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `register_date` date DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`account_id`, `email`, `register_date`, `phone_number`, `password`) VALUES
(1, 'john.smith@gmail.com', '2024-07-09', '+25471234567', 'johnpassword'),
(2, 'susan.johnson@gmail.com', '2024-07-09', '+254708786001', 'susanpassword'),
(3, 'james.brown@gmail.com', '2024-07-09', '+254722795415', 'jamespassword'),
(4, 'alice.davis@gmail.com', '2024-07-09', '+254728328786', 'alicepassword'),
(5, 'mike.wilson@gmail.com', '2024-07-09', '+254742814319', 'mikepassword'),
(6, 'lisa.martinez@gmail.com', '2024-07-09', '+254796962453', 'lisapassword'),
(7, 'robert.miller@gmail.com', '2024-07-09', '+254709786002', 'robertpassword'),
(8, 'emily.moore@gmail.com', '2024-07-09', '+254715976681', 'emilypassword'),
(9, 'david.taylor@gmail.com', '2024-07-09', '+254729457130', 'davidpassword'),
(10, 'olivia.anderson@gmail.com', '2024-07-09', '+254707785890', 'oliviapassword'),
(11, 'jackson.backer@gmail.com', '2024-07-09', '+254783105892', 'jacksonpassword'),
(12, 'charlotte.garcia@gmail.com', '2024-07-09', '+25487519090', 'charlottepassword'),
(13, 'sophia.rodriguez@gmail.com', '2024-07-09', '+25468493848', 'sophiapassword'),
(14, 'amelia.hall@gmail.com', '2024-07-09', '+25434408995', 'ameliapassword'),
(15, 'mia.young@gmail.com', '2024-07-09', '+254735409766', 'miapassword'),
(16, 'harper.allen@gmail.com', '2024-07-09', '+25476984909', 'harperpassword'),
(17, 'evelyn.sanchez@gmail.com', '2024-07-09', '+25478944330', 'evelynpassword'),
(18, 'abigail.clark@gmail.com', '2024-07-09', '+254798440033', 'abigailpassword'),
(19, 'ella.king@gmail.com', '2024-07-09', '+254798765521', 'ellapassword'),
(20, 'avery.harris@gmail.com', '2024-07-09', '+254708786002', 'averypassword'),
(21, 'scarlett.morris@gmail.com', '2024-07-09', '+254708786003', 'scarlettpassword'),
(22, 'zoey.walker@gmail.com', '2024-07-09', '+254709787000', 'zoeypassword'),
(23, 'hannah.wright@gmail.com', '2024-07-09', '+254709876005', 'hannahpassword'),
(24, 'addison.green@gmail.com', '2024-07-09', '+254708732876', 'addisonpassword'),
(25, 'audrey.adams@gmail.com', '2024-07-09', '+25479876599', 'audreypassword'),
(26, 'aria.hill@gmail.com', '2024-07-09', '+254722795412', 'ariapassword'),
(27, 'chloe.scott@gmail.com', '2024-07-09', '+254701786110', 'chloepassword'),
(28, 'layla.lewis@gmail.com', '2024-07-09', '+2547110786000', 'laylapassword'),
(29, 'sofia.robinson@gmail.com', '2024-07-09', '+25471908722', 'sofiapassword'),
(30, 'lily.walker@gmail.com', '2024-07-09', '+254798298302', 'lilypassword'),
(31, 'frashid274@gmail.com', '2024-09-01', '0708786000', 'fahimwifi'),
(32, 'fr3722@gmail.com', '2024-09-01', '0708786001', '$2y$10$xGdtnkvWCY5bX0JQyjeii.VZXyzCqhUkWGqapHiEv0fZ0pFgSdTva');

-- --------------------------------------------------------

--
-- Table structure for table `bills`
--

CREATE TABLE `bills` (
  `bill_id` int(11) NOT NULL,
  `staff_id` int(11) DEFAULT NULL,
  `member_id` int(11) DEFAULT NULL,
  `reservation_id` int(11) DEFAULT NULL,
  `table_id` int(11) DEFAULT NULL,
  `card_id` int(11) DEFAULT NULL,
  `payment_method` varchar(255) DEFAULT NULL,
  `bill_time` datetime DEFAULT NULL,
  `payment_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bills`
--

INSERT INTO `bills` (`bill_id`, `staff_id`, `member_id`, `reservation_id`, `table_id`, `card_id`, `payment_method`, `bill_time`, `payment_time`) VALUES
(33, 1, 1, 1111111, 1, NULL, 'cash', '2024-07-10 23:09:15', '2024-07-10 23:09:44'),
(34, 1, 4, 1111111, 2, NULL, 'cash', '2024-07-10 23:11:40', '2024-07-10 23:12:39'),
(40, 1, 5, 1111111, 4, NULL, 'cash', '2024-07-10 23:19:37', '2024-07-10 23:20:03'),
(41, 1, 4, 1111111, 5, NULL, 'cash', '2024-07-10 23:21:03', '2024-07-10 23:21:32'),
(42, 10, 1, 1111111, 6, NULL, 'cash', '2024-07-14 18:46:35', '2024-08-20 17:04:53'),
(43, 9, 1, 1111111, 1, NULL, 'cash', '2024-07-14 20:17:06', '2024-07-14 20:17:34'),
(44, 1, 18, 1111111, 1, 11, 'card', '2024-07-14 20:38:23', '2024-07-14 20:40:02'),
(45, 1, 1, 1111111, 7, NULL, 'cash', '2024-07-16 20:33:07', '2024-07-16 20:44:38'),
(46, 1, 1, 1111111, 3, NULL, 'cash', '2024-07-16 20:54:14', '2024-07-16 20:54:34'),
(47, 10, 19, 1820248, 8, NULL, 'cash', '2024-08-20 17:02:43', '2024-08-20 17:04:13'),
(48, NULL, NULL, NULL, 9, NULL, NULL, '2024-08-20 17:04:21', NULL),
(49, NULL, NULL, NULL, 10, NULL, NULL, '2024-08-20 17:04:26', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bill_items`
--

CREATE TABLE `bill_items` (
  `bill_item_id` int(11) NOT NULL,
  `bill_id` int(11) DEFAULT NULL,
  `item_id` varchar(6) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bill_items`
--

INSERT INTO `bill_items` (`bill_item_id`, `bill_id`, `item_id`, `quantity`) VALUES
(1, 40, 'C4', 2),
(2, 41, 'SK1', 2),
(3, 42, 'C1', 2),
(4, 42, 'C2', 2),
(5, 43, 'CP2', 2),
(6, 44, 'MD14', 1),
(7, 45, 'C1', 5),
(8, 46, 'C1', 5),
(9, 47, 'C1', 1),
(10, 47, 'C2', 2);

-- --------------------------------------------------------

--
-- Table structure for table `card_payments`
--

CREATE TABLE `card_payments` (
  `card_id` int(11) NOT NULL,
  `account_holder_name` varchar(255) NOT NULL,
  `card_number` varchar(16) NOT NULL,
  `expiry_date` varchar(7) NOT NULL,
  `security_code` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `card_payments`
--

INSERT INTO `card_payments` (`card_id`, `account_holder_name`, `card_number`, `expiry_date`, `security_code`) VALUES
(1, 'John Smith', '1234567890123456', '10/28', '123'),
(2, 'Susan Johnson', '2345678901234567', '10/28', '456'),
(3, 'James Brown', '3456789012345678', '09/30', '789'),
(4, 'Alice Davis', '4567890123456789', '09/28', '321'),
(5, 'Mike Wilson', '5678901234567890', '09/29', '654'),
(6, 'Robert Miller', '7890123456789012', '10/29', '123'),
(7, 'Abbel TuTuTu', '1234123412341234', '10/25', '654'),
(8, 'Abignail Downey', '2345234523452345', '10/27', '987'),
(9, 'Jamie Mustafa', '3456345634563456', '09/26', '123'),
(10, 'Luke Gun Slinger', '4567456745674567', '09/29', '456'),
(11, 'Layla Lewis', '453177000852116', '02/2025', '121');

-- --------------------------------------------------------

--
-- Table structure for table `kitchen`
--

CREATE TABLE `kitchen` (
  `kitchen_id` int(11) NOT NULL,
  `table_id` int(11) DEFAULT NULL,
  `item_id` varchar(6) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `time_submitted` datetime DEFAULT NULL,
  `time_ended` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kitchen`
--

INSERT INTO `kitchen` (`kitchen_id`, `table_id`, `item_id`, `quantity`, `time_submitted`, `time_ended`) VALUES
(25, 1, 'L2', 1, '2024-07-10 18:34:34', '2024-07-10 23:22:59'),
(27, 1, 'C1', 5, '2024-07-10 23:09:24', '2024-07-10 23:23:01'),
(28, 2, 'CP1', 3, '2024-07-10 23:11:52', '2024-07-10 23:23:14'),
(29, 2, 'C6', 4, '2024-07-10 23:11:59', '2024-07-10 23:23:15'),
(30, 2, 'HD2', 5, '2024-07-10 23:12:07', NULL),
(31, 4, 'C4', 2, '2024-07-10 23:19:46', NULL),
(32, 5, 'SK1', 2, '2024-07-10 23:21:18', NULL),
(33, 6, 'C1', 2, '2024-07-14 18:46:46', NULL),
(34, 6, 'C2', 2, '2024-07-14 18:46:52', NULL),
(35, 1, 'CP2', 2, '2024-07-14 20:17:16', NULL),
(36, 1, 'MD14', 1, '2024-07-14 20:38:39', NULL),
(37, 7, 'C1', 5, '2024-07-16 20:33:14', NULL),
(38, 3, 'C1', 5, '2024-07-16 20:54:20', NULL),
(39, 8, 'C1', 1, '2024-08-20 17:03:10', NULL),
(40, 8, 'C2', 2, '2024-08-20 17:03:16', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `memberships`
--

CREATE TABLE `memberships` (
  `member_id` int(11) NOT NULL,
  `member_name` varchar(255) DEFAULT NULL,
  `points` int(11) DEFAULT NULL,
  `account_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `memberships`
--

INSERT INTO `memberships` (`member_id`, `member_name`, `points`, `account_id`) VALUES
(1, 'Jackson Backer', 6828, 11),
(2, 'Charlotte Garcia ', 100, 12),
(3, 'Sophia Rodriguez', 100, 13),
(4, 'Amelia Hall', 100, 14),
(5, 'Mia Young', 100, 15),
(6, 'Harper Allen', 100, 16),
(7, 'Evelyn Sanchez', 100, 17),
(8, 'Abigail Clark', 100, 18),
(9, 'Ella King', 100, 19),
(10, 'Avery Harris', 100, 20),
(11, 'Scarlett Morris', 100, 21),
(12, 'Zoey Walker', 100, 22),
(13, 'Hannah Wright', 100, 23),
(14, 'Addison Green', 100, 24),
(15, 'Audrey Adams', 100, 25),
(16, 'Aria Hill', 100, 26),
(17, 'Chloe Scott', 100, 27),
(18, 'Layla Lewis', 1640, 28),
(19, 'Sofia Robinson', 1724, 29),
(20, 'Lily Walker', 100, 30),
(21, 'Fahim Rashid', 0, 31),
(22, 'ali', 0, 32);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `item_id` varchar(6) NOT NULL,
  `item_name` varchar(255) DEFAULT NULL,
  `item_type` varchar(255) DEFAULT NULL,
  `item_category` varchar(255) DEFAULT NULL,
  `item_price` decimal(10,2) DEFAULT NULL,
  `item_description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`item_id`, `item_name`, `item_type`, `item_category`, `item_price`, `item_description`) VALUES
('C1', 'Kamikaze', 'Classic Cocktails', 'Drinks', 400.00, 'cocktails'),
('C2', 'Singapore Sling', 'Classic Cocktails', 'Drinks', 500.00, 'cocktails'),
('C3', 'Long Island Iced Tea', 'Classic Cocktails', 'Drinks', 1000.00, 'cocktails'),
('C4', 'Lady on the Beach', 'Classic Cocktails', 'Drinks', 400.00, 'cocktails'),
('C5', 'Margarita', 'Classic Cocktails', 'Drinks', 800.00, 'cocktails'),
('C6', 'Pina Colada', 'Classic Cocktails', 'Drinks', 900.00, 'cocktails'),
('C7', 'Mojito', 'Classic Cocktails', 'Drinks', 600.00, 'cocktails'),
('CP1', 'Green Apple', 'Cold Pressed Juice', 'Drinks', 250.00, 'fresh pressed juice'),
('CP2', 'Orange', 'Cold Pressed Juice', 'Drinks', 250.00, 'fresh pressed juice'),
('CP3', 'Carrot', 'Cold Pressed Juice', 'Drinks', 200.00, 'fresh pressed juice'),
('CP4', 'Watermelon', 'Cold Pressed Juice', 'Drinks', 300.00, 'fresh pressed juice'),
('CP5', 'Pineapple', 'Cold Pressed Juice', 'Drinks', 250.00, 'fresh pressed juice'),
('CP6', 'Lime', 'Cold Pressed Juice', 'Drinks', 200.00, 'fresh pressed juice'),
('HC1', 'Shoney Iced Tea', 'House Cocktails', 'Drinks', 500.00, 'Gin, Rum'),
('HC2', 'Blue Lady', 'House Cocktails', 'Drinks', 450.00, 'Vodka'),
('HC3', 'Black Mambaa', 'House Cocktails', 'Drinks', 800.00, 'Vodka'),
('HC4', 'Lycheetini', 'House Cocktails', 'Drinks', 300.00, 'Vodka'),
('HC5', 'Chichi', 'House Cocktails', 'Drinks', 400.00, 'Vodka'),
('HD1', 'Brownies', 'House Dessert', 'Side Snacks', 200.00, 'delicious brownies'),
('HD2', 'American Cheese Cake', 'House Dessert', 'Side Snacks', 200.00, 'delicious cheese cake'),
('HD3', 'Divine Icecream', 'House Dessert', 'Side Snacks', 200.00, 'delicious served with vanilla ice cream'),
('HD4', 'Coated Ice Cream', 'House Dessert', 'Side Snacks', 250.00, 'delicious ice cream'),
('HD5', 'Messy Sundae', 'House Dessert', 'Side Snacks', 220.00, 'delicious brownies'),
('L1', 'Blended Scotch (Black Label)', 'Liquor', 'Drinks', 6000.00, 'Johnny Walker Black Label Sherry 700ml'),
('L2', 'Blended Scotch (Gold Label)', 'Liquor', 'Drinks', 8000.00, 'Johnny Walker Gold Label 750ml'),
('L3', 'American Whisky (Jack Daniel)', 'Liquor', 'Drinks', 6000.00, '700ml'),
('L4', 'American Whisky (Jim Beam)', 'Liquor', 'Drinks', 6000.00, '750ml'),
('L5', 'Single Malt', 'Liquor', 'Drinks', 12000.00, 'Singleton Signature 700ml'),
('L6', 'Cognac', 'Liquor', 'Drinks', 18000.00, 'Hennessy VSOP 700ml'),
('L7', 'Vodka', 'Liquor', 'Drinks', 4000.00, 'Smirnoff Red 700ml'),
('L8', 'Tequila', 'Liquor', 'Drinks', 6000.00, 'Jose Cuervo 750ml'),
('L9', 'Gin', 'Liquor', 'Drinks', 4500.00, 'Gordon 700ml'),
('M1', 'Cool & Refreshing', 'Mocktails', 'Drinks', 300.00, 'Cucumber,peppermint,lemon'),
('M2', 'Virgin Apple Mojito', 'Mocktails', 'Drinks', 350.00, 'Green apple, mint leaf'),
('M3', 'Shirley Temple', 'Mocktails', 'Drinks', 400.00, 'Lemonade, grenadine'),
('M4', 'Purple Rain', 'Mocktails', 'Drinks', 400.00, 'Blackcurrant, strawberry'),
('M5', 'Silly Rose', 'Mocktails', 'Drinks', 400.00, 'Green Tea, lychee, rose'),
('M6', 'Incredible Green', 'Mocktails', 'Drinks', 400.00, 'Green apple, lemon, lime, soda'),
('MD1', 'Prime Rib Steak', 'Steak & Ribs', 'Main Dishes', 2000.00, '300g'),
('MD10', 'Braised Lamb Shank', 'Lamb', 'Main Dishes', 1800.00, 'delicious braised lamb shank'),
('MD11', 'Catch of the day', 'Seafood', 'Main Dishes', 2000.00, 'fresh seafood'),
('MD12', 'Grilled Salmon', 'Seafood', 'Main Dishes', 1200.00, 'fresh salmon'),
('MD13', 'Jambalaya', 'Seafood', 'Main Dishes', 1800.00, 'delicious jambalaya'),
('MD14', 'Fish & Chips', 'Seafood', 'Main Dishes', 1400.00, 'delicious fish & chips'),
('MD15', 'Classic Cheese Burger', 'Burgers & Sandwiches', 'Main Dishes', 400.00, 'delicious burger'),
('MD16', 'Los Pollos Hermanos', 'Burgers & Sandwiches', 'Main Dishes', 600.00, 'delicious burger'),
('MD17', 'Fried Chicken Burger', 'Burgers & Sandwiches', 'Main Dishes', 500.00, 'delicious burger'),
('MD18', 'Grilled Chicken Burger', 'Burgers & Sandwiches', 'Main Dishes', 500.00, 'delicious burger'),
('MD19', 'Chili Dog', 'Burgers & Sandwiches', 'Main Dishes', 550.00, 'delicious sandwich'),
('MD2', 'Sirloin Steak', 'Steak & Ribs', 'Main Dishes', 2300.00, '230g'),
('MD20', 'Meatballs Sandwich', 'Burgers & Sandwiches', 'Main Dishes', 550.00, 'delicious sandwich'),
('MD21', 'Street Car', 'Burgers & Sandwiches', 'Main Dishes', 500.00, 'delicious sandwich'),
('MD22', 'Shrimp Po Boy', 'Burgers & Sandwiches', 'Main Dishes', 900.00, 'delicious sandwich'),
('MD23', 'Chicken Po Boy', 'Burgers & Sandwiches', 'Main Dishes', 600.00, 'delicious sandwich'),
('MD24', 'Chicken Tortilla', 'Burgers & Sandwiches', 'Main Dishes', 400.00, 'delicious sandwich'),
('MD25', 'Bolognese', 'Pasta', 'Main Dishes', 450.00, 'Spaghetti'),
('MD26', 'Meat Balls', 'Pasta', 'Main Dishes', 400.00, 'Spaghetti'),
('MD27', 'Carbonara', 'Pasta', 'Main Dishes', 500.00, 'Penne'),
('MD28', 'Chicken & Mushroom Aglio Olio', 'Pasta', 'Main Dishes', 500.00, 'Penne'),
('MD29', 'Chicken Arabiatta', 'Pasta', 'Main Dishes', 450.00, 'Spaghetti'),
('MD3', 'Ribeye Steak', 'Steak & Ribs', 'Main Dishes', 4000.00, '230g'),
('MD30', 'Seafood Aglio Olio', 'Pasta', 'Main Dishes', 2000.00, 'Spaghetti'),
('MD31', 'Shrimp', 'Pasta', 'Main Dishes', 1800.00, 'Penne'),
('MD32', 'Italian Chicken', 'Pasta', 'Main Dishes', 1800.00, 'Chef\'s Signature Pasta'),
('MD33', 'Braised Lamb Cutlet', 'Pasta', 'Main Dishes', 2100.00, 'Chef\'s Signature Pasta'),
('MD34', 'Fries', 'Side Dishes', 'Side Snacks', 250.00, 'delicious'),
('MD35', 'Potato Wedges', 'Side Dishes', 'Side Snacks', 250.00, 'delicious'),
('MD36', 'Garden Salad', 'Side Dishes', 'Side Snacks', 250.00, 'delicious'),
('MD37', 'V.O.D', 'Side Dishes', 'Side Snacks', 250.00, 'delicious vegetables'),
('MD38', 'Wan Tan', 'Side Dishes', 'Side Snacks', 250.00, 'delicious'),
('MD39', 'Buttered Corn', 'Side Dishes', 'Side Snacks', 250.00, 'delicious'),
('MD4', 'BBQ Ribs', 'Steak & Ribs', 'Main Dishes', 2200.00, '400g'),
('MD40', 'Coleslaw', 'Side Dishes', 'Side Snacks', 250.00, 'delicious'),
('MD41', 'Garlic Bread', 'Side Dishes', 'Side Snacks', 250.00, 'delicious'),
('MD42', 'Dirty Rice', 'Side Dishes', 'Side Snacks', 250.00, 'delicious'),
('MD5', 'Grilled Chicken ½ Bird', 'Chicken', 'Main Dishes', 700.00, '½ Bird'),
('MD6', 'Southern Fried Chicken ½ Bird', 'Chicken', 'Main Dishes', 700.00, '½ Bird'),
('MD7', 'Pan Seared Chicken', 'Chicken', 'Main Dishes', 600.00, '300g'),
('MD8', 'Chicken Chop', 'Chicken', 'Main Dishes', 550.00, '300g'),
('MD9', 'Grilled Lamb Chops', 'Lamb', 'Main Dishes', 1200.00, 'delicious grilled lamb chop'),
('S1', 'Buffalo Wings', 'Bar Bites', 'Side Snacks', 600.00, 'delicious buffalo wings'),
('S10', 'Shoney Salad', 'Salad', 'Side Snacks', 400.00, 'delicious salad'),
('S2', 'Fried Calamari', 'Bar Bites', 'Side Snacks', 500.00, 'delicious fried calamari'),
('S3', 'Cheesy Baked Mussels ½ Dozen', 'Bar Bites', 'Side Snacks', 400.00, '½ Dozen'),
('S4', 'Cheesy Baked Mussels 1 Dozen', 'Bar Bites', 'Side Snacks', 700.00, '1 Dozen'),
('S5', 'Chopped Lamb Chops', 'Bar Bites', 'Side Snacks', 1000.00, 'Delicious lamb chop'),
('S6', 'Nachos', 'Bar Bites', 'Side Snacks', 450.00, 'delicious nachos'),
('S7', 'Cheesy Fries', 'Bar Bites', 'Side Snacks', 300.00, 'delicious cheesy fries'),
('S8', 'Cheesy Meat Fries', 'Bar Bites', 'Side Snacks', 350.00, 'delicious cheesy meat fries'),
('S9', 'Grilled Chicken Caesar Salad', 'Salad', 'Side Snacks', 350.00, 'delicious salad'),
('SK1', 'Chicken Tenders', 'Shoney Kid', 'Side Snacks', 300.00, 'delicious chicken tenders'),
('SK2', 'Chicken Wings', 'Shoney Kid', 'Side Snacks', 300.00, 'delicious chicken wings'),
('SK3', 'Fish Fingers', 'Shoney Kid', 'Side Snacks', 350.00, 'served with fries & corn'),
('SK4', 'Cheesy Pasta', 'Shoney Kid', 'Side Snacks', 350.00, 'delicious cheesy pasta'),
('SK5', 'Meat Sauce Pasta', 'Shoney Kid', 'Side Snacks', 400.00, 'delicious pasta'),
('SK6', 'Milo', 'Shoney Kid', 'Side Snacks', 200.00, '200ml pack'),
('SK7', 'Ribena', 'Shoney Kid', 'Side Snacks', 250.00, '330ml pack'),
('SK8', 'Fruity Yogurt Smoothies', 'Shoney Kid', 'Side Snacks', 200.00, 'watermelon or pineapple'),
('SK9', 'Ice Cream MilkShakes', 'Shoney Kid', 'Side Snacks', 220.00, 'vanilla or chocolate');

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `reservation_id` int(11) NOT NULL,
  `customer_name` varchar(255) DEFAULT NULL,
  `table_id` int(11) DEFAULT NULL,
  `reservation_time` time DEFAULT NULL,
  `reservation_date` date DEFAULT NULL,
  `head_count` int(11) DEFAULT NULL,
  `special_request` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`reservation_id`, `customer_name`, `table_id`, `reservation_time`, `reservation_date`, `head_count`, `special_request`) VALUES
(1111111, 'Default', 9, '19:15:00', '2024-07-08', 2, 'Description'),
(1120241, 'Patrick', 1, '11:00:00', '2024-07-08', 4, ' '),
(1220243, 'ALI', 3, '12:00:00', '2024-07-17', 4, ' '),
(1320241, 'fatma', 1, '13:00:00', '2024-07-27', 4, ' '),
(1820237, 'Jean Ng', 7, '18:30:00', '2024-07-07', 2, 'Allergies: peanuts'),
(1820248, 'sofia', 8, '18:00:00', '2024-08-20', 8, ' '),
(1920233, 'Jamie Mustafa', 3, '19:30:00', '2024-07-08', 2, 'Vegan options needed'),
(1920235, 'Johny Rings', 5, '19:45:00', '2024-07-07', 2, 'Quiet corner, please'),
(1920239, 'Taylor Swift', 9, '19:15:00', '2024-07-07', 2, 'Surprise dessert for anniversary'),
(1920248, 'Lily Walker', 8, '19:00:00', '2024-08-20', 8, ' '),
(1920249, 'Patrick', 9, '19:00:00', '2024-08-20', 8, ''),
(2020234, 'Luke Gun Slinger', 4, '20:00:00', '2024-07-07', 3, 'Birthday celebration'),
(2220231, 'Abbel Tu Far Behind', 1, '22:00:34', '2024-07-07', 1, 'Prepare Panadol for me'),
(2220232, 'Abignaile Lin Downney Jr', 2, '22:00:34', '2024-07-07', 1, 'Default Special Request'),
(14202310, 'Bruce Lee', 10, '14:45:00', '2024-07-08', 3, 'Window seat, if available');

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE `restaurant` (
  `restaraunt_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`restaraunt_id`, `name`) VALUES
(786, 'Bistro Breeze Bar and Restaurant');

-- --------------------------------------------------------

--
-- Table structure for table `restaurant_tables`
--

CREATE TABLE `restaurant_tables` (
  `table_id` int(11) NOT NULL,
  `capacity` int(11) DEFAULT NULL,
  `is_available` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `restaurant_tables`
--

INSERT INTO `restaurant_tables` (`table_id`, `capacity`, `is_available`) VALUES
(1, 4, 1),
(2, 4, 1),
(3, 4, 1),
(4, 6, 1),
(5, 6, 1),
(6, 6, 1),
(7, 6, 1),
(8, 8, 1),
(9, 8, 1),
(10, 8, 1);

-- --------------------------------------------------------

--
-- Table structure for table `staffs`
--

CREATE TABLE `staffs` (
  `staff_id` int(11) NOT NULL,
  `staff_name` varchar(255) DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL,
  `account_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staffs`
--

INSERT INTO `staffs` (`staff_id`, `staff_name`, `role`, `account_id`) VALUES
(1, 'John Smith', 'Waiter', 1),
(2, 'Susan Johnson', 'Waiter', 2),
(3, 'James Brown', 'Waiter', 3),
(4, 'Alice Davis', 'Waiter', 4),
(5, 'Mike Wilson', 'Waiter', 5),
(6, 'Lisa Martinez', 'Chef', 6),
(7, 'Robert Miller', 'Manager', 7),
(8, 'Emily Moore', 'Manager', 8),
(9, 'David Taylor', 'Chef', 9),
(10, 'Olivia Anderson', 'Chef', 10);

-- --------------------------------------------------------

--
-- Table structure for table `table_availability`
--

CREATE TABLE `table_availability` (
  `availability_id` int(11) NOT NULL,
  `table_id` int(11) DEFAULT NULL,
  `reservation_date` date DEFAULT NULL,
  `reservation_time` time DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `table_availability`
--

INSERT INTO `table_availability` (`availability_id`, `table_id`, `reservation_date`, `reservation_time`, `status`) VALUES
(1020241, 1, '2024-07-09', '10:00:00', 'no'),
(1020242, 2, '2024-07-23', '10:00:00', 'no'),
(1120241, 1, '2024-07-08', '11:00:00', 'no'),
(1220243, 3, '2024-07-17', '12:00:00', 'no'),
(1320241, 1, '2024-07-27', '13:00:00', 'no'),
(1820248, 8, '2024-08-20', '18:00:00', 'no'),
(1920248, 8, '2024-08-20', '19:00:00', 'no'),
(1920249, 9, '2024-08-20', '19:00:00', 'no');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`account_id`);

--
-- Indexes for table `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`bill_id`),
  ADD KEY `staff_id` (`staff_id`),
  ADD KEY `member_id` (`member_id`),
  ADD KEY `reservation_id` (`reservation_id`),
  ADD KEY `table_id` (`table_id`),
  ADD KEY `card_id` (`card_id`);

--
-- Indexes for table `bill_items`
--
ALTER TABLE `bill_items`
  ADD PRIMARY KEY (`bill_item_id`),
  ADD KEY `bill_id` (`bill_id`),
  ADD KEY `item_id` (`item_id`);

--
-- Indexes for table `card_payments`
--
ALTER TABLE `card_payments`
  ADD PRIMARY KEY (`card_id`);

--
-- Indexes for table `kitchen`
--
ALTER TABLE `kitchen`
  ADD PRIMARY KEY (`kitchen_id`),
  ADD KEY `table_id` (`table_id`),
  ADD KEY `item_id` (`item_id`);

--
-- Indexes for table `memberships`
--
ALTER TABLE `memberships`
  ADD PRIMARY KEY (`member_id`),
  ADD KEY `account_id` (`account_id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`reservation_id`),
  ADD KEY `table_id` (`table_id`);

--
-- Indexes for table `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`restaraunt_id`);

--
-- Indexes for table `restaurant_tables`
--
ALTER TABLE `restaurant_tables`
  ADD PRIMARY KEY (`table_id`);

--
-- Indexes for table `staffs`
--
ALTER TABLE `staffs`
  ADD PRIMARY KEY (`staff_id`),
  ADD KEY `account_id` (`account_id`);

--
-- Indexes for table `table_availability`
--
ALTER TABLE `table_availability`
  ADD PRIMARY KEY (`availability_id`),
  ADD KEY `table_id` (`table_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `account_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `bills`
--
ALTER TABLE `bills`
  MODIFY `bill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `bill_items`
--
ALTER TABLE `bill_items`
  MODIFY `bill_item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `card_payments`
--
ALTER TABLE `card_payments`
  MODIFY `card_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `kitchen`
--
ALTER TABLE `kitchen`
  MODIFY `kitchen_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `memberships`
--
ALTER TABLE `memberships`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `reservation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14202311;

--
-- AUTO_INCREMENT for table `restaurant_tables`
--
ALTER TABLE `restaurant_tables`
  MODIFY `table_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `staffs`
--
ALTER TABLE `staffs`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `table_availability`
--
ALTER TABLE `table_availability`
  MODIFY `availability_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1920250;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bills`
--
ALTER TABLE `bills`
  ADD CONSTRAINT `bills_ibfk_1` FOREIGN KEY (`staff_id`) REFERENCES `staffs` (`staff_id`),
  ADD CONSTRAINT `bills_ibfk_2` FOREIGN KEY (`member_id`) REFERENCES `memberships` (`member_id`),
  ADD CONSTRAINT `bills_ibfk_3` FOREIGN KEY (`reservation_id`) REFERENCES `reservations` (`reservation_id`),
  ADD CONSTRAINT `bills_ibfk_4` FOREIGN KEY (`table_id`) REFERENCES `restaurant_tables` (`table_id`),
  ADD CONSTRAINT `bills_ibfk_5` FOREIGN KEY (`card_id`) REFERENCES `card_payments` (`card_id`);

--
-- Constraints for table `bill_items`
--
ALTER TABLE `bill_items`
  ADD CONSTRAINT `bill_items_ibfk_1` FOREIGN KEY (`bill_id`) REFERENCES `bills` (`bill_id`),
  ADD CONSTRAINT `bill_items_ibfk_2` FOREIGN KEY (`item_id`) REFERENCES `menu` (`item_id`);

--
-- Constraints for table `kitchen`
--
ALTER TABLE `kitchen`
  ADD CONSTRAINT `kitchen_ibfk_1` FOREIGN KEY (`table_id`) REFERENCES `restaurant_tables` (`table_id`),
  ADD CONSTRAINT `kitchen_ibfk_2` FOREIGN KEY (`item_id`) REFERENCES `menu` (`item_id`);

--
-- Constraints for table `memberships`
--
ALTER TABLE `memberships`
  ADD CONSTRAINT `memberships_ibfk_1` FOREIGN KEY (`account_id`) REFERENCES `accounts` (`account_id`);

--
-- Constraints for table `reservations`
--
ALTER TABLE `reservations`
  ADD CONSTRAINT `reservations_ibfk_1` FOREIGN KEY (`table_id`) REFERENCES `restaurant_tables` (`table_id`);

--
-- Constraints for table `staffs`
--
ALTER TABLE `staffs`
  ADD CONSTRAINT `staffs_ibfk_1` FOREIGN KEY (`account_id`) REFERENCES `accounts` (`account_id`);

--
-- Constraints for table `table_availability`
--
ALTER TABLE `table_availability`
  ADD CONSTRAINT `table_availability_ibfk_1` FOREIGN KEY (`table_id`) REFERENCES `restaurant_tables` (`table_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
