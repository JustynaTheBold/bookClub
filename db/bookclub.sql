-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2018 at 06:42 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookclub`
--

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `author_id` int(11) NOT NULL,
  `author_name` varchar(255) DEFAULT NULL,
  `social_num` varchar(255) DEFAULT NULL,
  `bday` varchar(255) DEFAULT NULL,
  `URL` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`author_id`, `author_name`, `social_num`, `bday`, `URL`) VALUES
(1, 'Henryk Sienkiewicz', NULL, '05.05.1846', NULL),
(2, 'Adam Mickiewicz', NULL, '24.12.1798', 'https://pl.wikipedia.org/wiki/Adam_Mickiewicz'),
(3, 'J.K Rowling', '2627269990', '31.07.1965', 'https://en.wikipedia.org/wiki/J._K._Rowling'),
(4, 'Stephan King', '3456890009', '31.07.1965', NULL),
(5, 'JoJo Moyes', NULL, '12.06.83', 'https://www.jojomoyes.com/'),
(6, 'Ernest Hemingway', NULL, '21.05.1899', NULL),
(7, 'Mark Twain', NULL, '30.11.1835', NULL),
(8, 'Francis Scott Fitzgerald', NULL, '24.09.1896', NULL),
(9, 'Charles Dickens', NULL, '07.02.1812', 'https://sv.wikipedia.org/wiki/Charles_Dickens'),
(10, 'Test2', NULL, NULL, NULL),
(11, 'Test', NULL, NULL, NULL),
(12, 'George R.R. Martin', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `book_id` int(11) NOT NULL,
  `ISBN` int(11) DEFAULT NULL,
  `titel` varchar(255) DEFAULT NULL,
  `author_name` varchar(255) DEFAULT NULL,
  `pages` int(11) DEFAULT NULL,
  `edition` int(11) DEFAULT NULL,
  `year` int(11) DEFAULT NULL,
  `publisher` varchar(255) DEFAULT NULL,
  `reserved` tinyint(1) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book_id`, `ISBN`, `titel`, `author_name`, `pages`, `edition`, `year`, `publisher`, `reserved`, `image`) VALUES
(1, 2147483647, 'W pustyni i w puszczy', 'Henryk Sienkiewicz', 246, 17, 1880, 'Polskie Wydawnictwo', 0, 'w_pustyni.jpg'),
(2, 2147483647, 'Quo Vadis', 'Henryk Sienkiewicz', 646, 19, 1889, 'Polskie Wydawnictwo', 0, 'quo_vadis.jpg'),
(3, 2147483647, 'Pan Tadeusz', 'Adam Mickiewicz', 356, 24, 1749, 'Polskie Wydawnictwo', 0, 'pan_tadeusz.jpg'),
(4, 2147483647, 'Old men and the sea', 'Ernest Hemingway', 120, 6, 1928, 'American Ink', 0, 'old_man.jpg'),
(5, 2147483647, 'Harry Potter and the Philosopher\'s Stone', 'J.K Rowling', 560, 12, 1998, 'Royal Publisher Inc', 0, 'harry_potter.jpg'),
(6, 2147483647, 'The Greatest Gatsby', 'Francis Scott Fitzgerald', 467, 24, 1924, 'New York Publishing', 0, 'gatsby.jpg'),
(8, 2147483647, 'IT', 'Stephan King', 569, 8, 1981, 'Simon & CO', 0, 'it.jpg'),
(15, 2147483647, 'Fire and Blood', 'George R.R. Martin', 458, 2, 2008, 'London Books', 0, '../img/220px-Fire_&_Blood_(2018)_hardcover.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `books_in_library`
--

CREATE TABLE `books_in_library` (
  `book` varchar(255) DEFAULT NULL,
  `copys` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books_in_library`
--

INSERT INTO `books_in_library` (`book`, `copys`) VALUES
('W pustyni i w puszczy', 2),
('Quo Vadis', 1),
('Pan Tadeusz', 5),
('Old man and the sea', 5),
('Harry Potter and the Philosopher\'s Stone', 7),
('The Greatest Gatsby', 2),
('The Adventures of Tom Sawyer', 3),
('IT', 2);

-- --------------------------------------------------------

--
-- Table structure for table `book_author`
--

CREATE TABLE `book_author` (
  `author` varchar(255) DEFAULT NULL,
  `book` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_author`
--

INSERT INTO `book_author` (`author`, `book`) VALUES
('Henryk Sienkiewicz', 'W pustyni i w puszzy'),
('Henryk Sienkiewicz', 'Quo Vadis'),
('Adam Mickiewicz', 'Pan Tdeusz'),
('Old man and the sea', 'Ernest Hemingway'),
('Harry Potter and the Philosopher\'s Stone', 'J.K Rowling'),
('The Greatest Gatsby', 'Francis Scott Fitzgerald'),
('IT', 'Stephan King'),
('Mark Twain', 'The Adventures of Tom Sawyer'),
('Test2', 'Test2'),
('Stephan King', 'IT'),
('Test', 'Test'),
('George R.R. Martin', 'Fire and Blood'),
('test', 'testing');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `img_id` int(11) NOT NULL,
  `img_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`img_id`, `img_name`) VALUES
(3, 'uploads/canva-minimalist-teen-fiction-wattpad-book-cover-MAB4A8xTTac.jpg'),
(4, 'uploads/dsfg.jpg'),
(5, 'uploads/x450.jpg'),
(6, 'uploads/Mothergoose.jpg'),
(7, 'uploads/Enchantment-Book-Cover-Best-Seller1.jpg'),
(8, 'uploads/images.jpg'),
(9, 'uploads/creative_bookcover.png'),
(10, 'uploads/large_thumb_9.jpg'),
(11, 'uploads/indeks.jpg'),
(12, 'uploads/9780345803788.jpg'),
(13, 'uploads/1coverhazelwood.jpg'),
(14, 'uploads/bbc-18-infinite-future-min.jpg'),
(15, 'uploads/220px-Fire_&_Blood_(2018)_hardcover.jpg'),
(16, 'uploads/lincoln-web_600.jpg'),
(17, 'uploads/tumblr_mxrk6u3UeB1re0zxno1_1280.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `library`
--

CREATE TABLE `library` (
  `copy_id` int(11) NOT NULL,
  `shelf_id` int(11) NOT NULL,
  `date_` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `user_password`, `status`) VALUES
(23, 'Justyna', '$2y$10$i6HpwwhO120RdOurL6zY8eUQFHT2eej9K9AirZmW107H09BVkuDHC', 'admin'),
(26, 'Sonia', '$2y$10$NjPknb7urM1wYvlV2U.Nye1xqPeO6kazRPyYZ439XememAI4pqXHC', 'moderator'),
(27, 'Karina', '$2y$10$7jadoeP/.ixlkVqAZC20Sua0edQr4PJ3Qg9icimv/We1T8lvZeYVa', 'regular');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`author_id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`img_id`);

--
-- Indexes for table `library`
--
ALTER TABLE `library`
  ADD PRIMARY KEY (`copy_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `author_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `library`
--
ALTER TABLE `library`
  MODIFY `copy_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
