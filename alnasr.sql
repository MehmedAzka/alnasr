-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 06, 2023 at 02:01 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alnasr`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int NOT NULL,
  `user_id` int NOT NULL,
  `product_id` int DEFAULT NULL,
  `quantity` int DEFAULT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `catalog`
--

CREATE TABLE `catalog` (
  `product_id` int NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `description` text,
  `price` int NOT NULL,
  `class` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `catalog`
--

INSERT INTO `catalog` (`product_id`, `product_name`, `image_url`, `description`, `price`, `class`) VALUES
(1, 'Al Nasr Special Umrah 9 Days', 'img/paket1.jpg', 'Al Nasr Special Umrah 9 Days is a religious travel package specifically designed to meet the needs of pilgrims who wish to undertake the Umrah pilgrimage for nine days. This package offers an in-depth spiritual experience in the Holy Lands of Mecca and Medina, with various facilities that have been prepared for the comfort and success of your trip.\n\nKey features of Al Nasr Special Umrah 9 Days:\n\n1. Deep Worship: This package is designed to give pilgrims the opportunity to undergo the Umrah pilgrimage solemnly and solemnly. You will be given sufficient time to pray, do dhikr and reflect at the Grand Mosque in Mecca and the Nabawi Mosque in Medina.\n\n2. Quality Accommodation: You will stay in quality hotels close to the Grand Mosque and the Nabawi Mosque, so you can easily access these holy places for worship.\n\n3. Comfortable Transportation: This package includes comfortable and safe inter-city transportation during the trip from Mecca to Medina and vice versa. You will have a comfortable vehicle and an experienced driver.\n\n4. Spiritual Guide: You will be accompanied by an experienced guide who will guide you through every step of the Umrah pilgrimage and provide insight into the history and meaning of the holy places.\n\n5. Halal Food: The food served during the trip is halal food and is carefully prepared to meet the nutritional needs of the pilgrims.\n\n6. Safe Travel: The safety and comfort of pilgrims is the top priority. Al Nasr Special Umrah 9 Days will provide services that prioritize safety in every aspect of the trip.\n\nThe Al Nasr Special 9 Days Umrah Package is an opportunity to gain deep spiritual benefits and feel God\'s presence in the holy land. This is a trip that will leave a deep impression and lasting memories.', 2000, 'Bronze'),
(2, 'Al Nasr Special Umrah 17 Days', 'img/paket2.jpg', 'Al Nasr Special Umrah 17 Days is a religious travel package meticulously crafted to cater to the spiritual aspirations of pilgrims embarking on a 12-day journey to undertake the Umrah pilgrimage. This extended package offers an immersive and profound spiritual experience in the sacred cities of Mecca and Medina, providing a range of amenities to ensure your pilgrimage is comfortable and spiritually enriching.\r\n\r\nKey features of Al Nasr Special Umrah 17 Days:\r\n\r\n1. Profound Spiritual Journey: This package is thoughtfully designed to allow pilgrims ample time for devout prayers, dhikr (remembrance of Allah), and deep reflection at the Grand Mosque in Mecca and the Nabawi Mosque in Medina.\r\n\r\n2. Premium Accommodation: Your stay will be in high-quality hotels in close proximity to the Grand Mosque and the Nabawi Mosque, ensuring convenient access for your religious practices.\r\n\r\n3. Comfortable and Safe Transportation: Included in this package is comfortable inter-city transportation between Mecca and Medina and vice versa. You will travel in comfort with a skilled and experienced driver.\r\n\r\n4. Knowledgeable Spiritual Guide: An experienced guide will accompany you throughout your Umrah pilgrimage, providing guidance at every step and sharing insights into the historical and spiritual significance of the holy sites.\r\n\r\n5. Halal Culinary Delights: The food served during your journey is prepared in adherence to halal standards and carefully crafted to meet the nutritional requirements of pilgrims.\r\n\r\n6. Safety First: The safety and well-being of the pilgrims are our top priorities. Al Nasr Special Umrah 17 Days offers services that prioritize safety in every aspect of your journey.\r\n\r\nThe Al Nasr Special 12 Days Umrah Package is a unique opportunity to achieve profound spiritual enlightenment and a heightened sense of the divine in the sacred land. This extended pilgrimage is designed to leave an enduring impression and cherished memories on your heart and soul.', 4000, 'Silver\r\n'),
(3, 'Al Nasr Special Umrah 25 Days', 'img/paket3.jpg', 'Al Nasr Special Umrah 25 Days is a comprehensive and spiritually enriching travel package meticulously tailored for pilgrims embarking on an extensive 25-day journey to undertake the Umrah pilgrimage. This extended package offers a profound and immersive spiritual experience in the holy cities of Mecca and Medina, complemented by an array of amenities to ensure your pilgrimage is comfortable and deeply spiritually rewarding.\r\n\r\nKey features of Al Nasr Special Umrah 25 Days:\r\n\r\n1. Profound Spiritual Sojourn: This package is thoughtfully designed to allow pilgrims ample time for deep prayer, dhikr (remembrance of Allah), and profound reflection at the Grand Mosque in Mecca and the Nabawi Mosque in Medina.\r\n\r\n2. Premium Accommodation: Your stay will be in top-tier hotels located in close proximity to the Grand Mosque and the Nabawi Mosque, ensuring convenient access for your religious practices.\r\n\r\n3. Comfortable and Safe Transportation: Included in this package is comfortable inter-city transportation between Mecca and Medina and vice versa. You will travel in comfort with a skilled and experienced driver.\r\n\r\n4. Knowledgeable Spiritual Guide: Throughout your Umrah pilgrimage, an experienced guide will accompany you, providing guidance at every step and sharing insights into the historical and spiritual significance of the holy sites.\r\n\r\n5. Halal Culinary Delights: The food served during your journey adheres to halal standards and is thoughtfully prepared to meet the nutritional requirements of pilgrims.\r\n\r\n6. Safety and Well-Being: The safety and well-being of pilgrims are of paramount importance. Al Nasr Special Umrah 25 Days offers services that prioritize safety in every aspect of your extended pilgrimage.\r\n\r\nThe Al Nasr Special 25 Days Umrah Package offers a unique opportunity to achieve a profound and sustained spiritual connection and a heightened sense of the divine in the sacred land. This extended pilgrimage is designed to create indelible impressions and cherished memories that will remain with you for a lifetime.', 8000, 'Gold'),
(4, 'Al Nasr Special Hajj 30 Days', 'img/paket2.jpg', 'Al Nasr Special Hajj 30 Days is an all-encompassing and deeply spiritual travel package meticulously curated for pilgrims embarking on a 30-day journey to undertake the sacred Hajj pilgrimage. This extensive package offers a profound and immersive spiritual experience in the holy cities of Mecca and Medina, complemented by an array of amenities to ensure your pilgrimage is comfortable, spiritually rewarding, and spiritually transformative.\r\n\r\nKey features of Al Nasr Special Hajj 30 Days:\r\n\r\n1. Profound Spiritual Sojourn: This package is thoughtfully designed to provide pilgrims with ample time for deep prayer, dhikr (remembrance of Allah), and profound reflection at the holiest sites, including the Grand Mosque in Mecca and the Nabawi Mosque in Medina.\r\n\r\n2. Premium Accommodation: Your stay will be in top-tier hotels situated in close proximity to the Grand Mosque and the Nabawi Mosque, ensuring convenient access for your religious practices.\r\n\r\n3. Comfortable and Safe Transportation: Included in this package is comfortable and secure inter-city transportation between Mecca and Medina and vice versa. You will travel in comfort with an experienced driver, ensuring a worry-free journey.\r\n\r\n4. Knowledgeable Spiritual Guide: Throughout your Hajj pilgrimage, an experienced and knowledgeable guide will accompany you, providing guidance at every step and sharing insights into the historical and spiritual significance of the sacred locations.\r\n\r\n5. Nourishing Halal Cuisine: The food served during your journey is prepared in accordance with halal standards and is thoughtfully crafted to meet the nutritional requirements of pilgrims.\r\n\r\n6. Safety and Well-Being: The safety and well-being of pilgrims are paramount. Al Nasr Special Hajj 30 Days prioritizes safety in every aspect of your extended pilgrimage, ensuring you have a secure and spiritually transformative experience.\r\n\r\nThe Al Nasr Special 30 Days Hajj Package offers a unique opportunity to undergo a profound and sustained spiritual transformation, strengthening your connection with the divine in the sacred land. This extended pilgrimage is designed to create indelible impressions and cherished memories that will remain with you for a lifetime.', 20000, 'Diamond'),
(5, 'Al Nasr Special Hajj 30 Days', 'img/paket5.jpg', 'Al Nasr Special Hajj 30 Days is an all-encompassing and deeply spiritual travel package meticulously crafted for pilgrims embarking on a 30-day journey to undertake the sacred Hajj pilgrimage. This extensive package offers a profound and immersive spiritual experience in the holy cities of Mecca and Medina, complemented by an array of amenities to ensure your pilgrimage is comfortable, spiritually rewarding, and transformative.\r\n\r\nKey features of Al Nasr Special Hajj 30 Days:\r\n\r\n1. Profound Spiritual Sojourn: This package is thoughtfully designed to provide pilgrims with ample time for deep prayer, dhikr (remembrance of Allah), and profound reflection at the holiest sites, including the Grand Mosque in Mecca and the Nabawi Mosque in Medina.\r\n\r\n2. Premium Accommodation: Your stay will be in top-tier hotels situated in close proximity to the Grand Mosque and the Nabawi Mosque, ensuring convenient access for your religious practices.\r\n\r\n3. Comfortable and Safe Transportation: Included in this package is comfortable and secure inter-city transportation between Mecca and Medina and vice versa. You will travel in comfort with an experienced driver, ensuring a worry-free journey.\r\n\r\n4. Knowledgeable Spiritual Guide: Throughout your Hajj pilgrimage, an experienced and knowledgeable guide will accompany you, providing guidance at every step and sharing insights into the historical and spiritual significance of the sacred locations.\r\n\r\n5. Nourishing Halal Cuisine: The food served during your journey is prepared in accordance with halal standards and is thoughtfully crafted to meet the nutritional requirements of pilgrims.\r\n\r\n6. Safety and Well-Being: The safety and well-being of pilgrims are paramount. Al Nasr Special Hajj 30 Days prioritizes safety in every aspect of your extended pilgrimage, ensuring you have a secure and spiritually transformative experience.\r\n\r\nThe Al Nasr Special 30 Days Hajj Package offers a unique opportunity to undergo a profound and sustained spiritual transformation, strengthening your connection with the divine in the sacred land. This extended pilgrimage is designed to create indelible impressions and cherished memories that will remain with you for a lifetime.', 25000, 'Platinum'),
(6, 'Al Nasr Special Hajj 30+traveling to dubai 5 Days', 'img/paket6.jpg', 'Al Nasr Special Hajj 30+Traveling to Dubai 5 Days is an exceptional and comprehensive travel package meticulously curated for pilgrims embarking on a transformative 30-day Hajj pilgrimage followed by an enriching 5-day journey to Dubai. This unique package offers a profound spiritual experience in the holy cities of Mecca and Medina, followed by the opportunity to explore the vibrant city of Dubai, ensuring a balance between religious devotion and leisure.\r\n\r\nKey features of Al Nasr Special Hajj 30+Traveling to Dubai 5 Days:\r\n\r\n1. Profound Spiritual Sojourn: The package begins with a thoughtfully designed 30-day Hajj pilgrimage, allowing ample time for deep prayer, dhikr (remembrance of Allah), and profound reflection at the holiest sites, including the Grand Mosque in Mecca and the Nabawi Mosque in Medina.\r\n\r\n2. Premium Accommodation: Your stay during the Hajj pilgrimage will be in top-tier hotels situated in close proximity to the Grand Mosque and the Nabawi Mosque, ensuring convenient access for your religious practices.\r\n\r\n3. Comfortable and Safe Transportation: Included in this package is comfortable and secure inter-city transportation between Mecca and Medina, as well as the journey to Dubai. You will travel in comfort with experienced drivers, ensuring a worry-free journey.\r\n\r\n4. Knowledgeable Spiritual Guide: Throughout your Hajj pilgrimage, an experienced and knowledgeable guide will accompany you, providing guidance at every step and sharing insights into the historical and spiritual significance of the sacred locations.\r\n\r\n5. Nourishing Halal Cuisine: The food served during your journey adheres to halal standards and is thoughtfully crafted to meet the nutritional requirements of pilgrims.\r\n\r\n6. Dubai Exploration: After the Hajj pilgrimage, you will embark on a 5-day journey to Dubai, where you can explore the city\'s rich culture, stunning architecture, and vibrant lifestyle.\r\n\r\n7. Safety and Well-Being: The safety and well-being of pilgrims are paramount. Al Nasr Special Hajj 30+Traveling to Dubai 5 Days prioritizes safety in every aspect of your extended pilgrimage and Dubai exploration, ensuring you have a secure and spiritually transformative experience.\r\n\r\nThis unique package offers a comprehensive and balanced experience, allowing you to undergo a profound and sustained spiritual transformation during the Hajj pilgrimage and explore the wonders of Dubai. It is designed to create indelible impressions and cherished memories that will remain with you for a lifetime.', 30000, 'Platinum+');

-- --------------------------------------------------------

--
-- Table structure for table `discount`
--

CREATE TABLE `discount` (
  `id` int NOT NULL,
  `discount_code` varchar(50) NOT NULL,
  `discount_amount` int NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `discount`
--

INSERT INTO `discount` (`id`, `discount_code`, `discount_amount`, `start_date`, `end_date`, `status`) VALUES
(1, '732737', 1000, '2023-11-06', '2023-11-07', 'used'),
(2, '521592', 3000, '2023-11-06', '2023-11-07', 'used');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`) VALUES
(72, '', 'albannarsy@gmail.com', '961b6dd3ede3cb8ecbaacbd68de040cd78eb2ed5889130cceb4c49268ea4d506', 'user'),
(75, '', 'jawir@gamial.com', 'f30093ec5fac6458080e7f9e2df64d637decbfc48693fff6e9297d7952793def', 'user'),
(78, '', 'info@example.com', '961b6dd3ede3cb8ecbaacbd68de040cd78eb2ed5889130cceb4c49268ea4d506', 'user'),
(79, '', 'azam@gmail.com', '961b6dd3ede3cb8ecbaacbd68de040cd78eb2ed5889130cceb4c49268ea4d506', 'user'),
(80, 'azka', 'azka@gmail.com', '541a414b115e2324e6719187f254f41a4b8a31644a11e608aa7954385716ae49', 'user'),
(84, 'kakak', 'kakak@gmail.com', '73618c805df1192ca31ced332dfb30311a2038293138793f5199f33579b1388e', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `cart_ibfk_1` (`user_id`),
  ADD KEY `user_id` (`user_id`) USING BTREE,
  ADD KEY `cart_ibfk_2` (`product_id`) USING BTREE;

--
-- Indexes for table `catalog`
--
ALTER TABLE `catalog`
  ADD PRIMARY KEY (`product_id`),
  ADD UNIQUE KEY `price` (`price`);

--
-- Indexes for table `discount`
--
ALTER TABLE `discount`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=160;

--
-- AUTO_INCREMENT for table `catalog`
--
ALTER TABLE `catalog`
  MODIFY `product_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `discount`
--
ALTER TABLE `discount`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `catalog` (`product_id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  ADD CONSTRAINT `cart_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
