-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2023 at 06:28 AM
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
-- Database: `pos`
--

-- --------------------------------------------------------

--
-- Table structure for table `learner`
--

CREATE TABLE `learner` (
  `Lid` int(3) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email_id` varchar(50) NOT NULL,
  `Phno` bigint(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `user_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `learner`
--

INSERT INTO `learner` (`Lid`, `Name`, `Email_id`, `Phno`, `password`, `user_type`) VALUES
(1, 'meghs', 'meghs@gmail.com', 9986147309, '123', 'Admin'),
(4, 'ananya', 'anu@gmail.com', 7676131457, '123', 'Learner'),
(8, 'Aryan', 'aryan@gmail.com', 998761611, 'aryan@123', 'Learner');

-- --------------------------------------------------------

--
-- Table structure for table `parts_of_speech`
--

CREATE TABLE `parts_of_speech` (
  `id` int(11) NOT NULL,
  `sentence` varchar(100) NOT NULL,
  `pos` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `parts_of_speech`
--

INSERT INTO `parts_of_speech` (`id`, `sentence`, `pos`) VALUES
(75, 'We watched a movie', '[(\'We\', \'Pronoun\'), (\'watched\', \'Verb\'), (\'a\', \'Determiner\'), (\'movie\', \'Noun\')]'),
(76, 'An apple is in the tree', '[(\'An\', \'Determiner\'), (\'apple\', \'Noun\'), (\'is\', \'Verb\'), (\'in\', \'Preposition\'), (\'the\', \'Determiner'),
(77, 'How are you?', '[(\'How\', \'Adverb\'), (\'are\', \'Verb\'), (\'you\', \'Pronoun\'), (\'?\', \'PUNCT\')]'),
(78, 'She ate an apple', '[(\'She\', \'Pronoun\'), (\'ate\', \'Verb\'), (\'an\', \'Determiner\'), (\'apple\', \'Noun\')]'),
(79, 'He drank the water', '[(\'He\', \'Pronoun\'), (\'drank\', \'Verb\'), (\'the\', \'Determiner\'), (\'water\', \'Noun\')]'),
(80, 'They read a book', '[(\'They\', \'Pronoun\'), (\'read\', \'Verb\'), (\'a\', \'Determiner\'), (\'book\', \'Noun\')]'),
(81, 'We watched a movie.', '[(\'We\', \'Pronoun\'), (\'watched\', \'Verb\'), (\'a\', \'Determiner\'), (\'movie\', \'Noun\'), (\'.\', \'PUNCT\')]'),
(82, 'You wrote a letter.', '[(\'You\', \'Pronoun\'), (\'wrote\', \'Verb\'), (\'a\', \'Determiner\'), (\'letter\', \'Noun\'), (\'.\', \'PUNCT\')]'),
(83, 'I bought a new car', '[(\'I\', \'Pronoun\'), (\'bought\', \'Verb\'), (\'a\', \'Determiner\'), (\'new\', \'Adjective\'), (\'car\', \'Noun\')]'),
(84, 'She listened to the music', '[(\'She\', \'Pronoun\'), (\'listened\', \'Verb\'), (\'to\', \'Preposition\'), (\'the\', \'Determiner\'), (\'music\', \''),
(85, 'He played the guitar', '[(\'He\', \'Pronoun\'), (\'played\', \'Verb\'), (\'the\', \'Determiner\'), (\'guitar\', \'Noun\')]'),
(86, 'They cooked dinner', '[(\'They\', \'Pronoun\'), (\'cooked\', \'Verb\'), (\'dinner\', \'Noun\')]'),
(87, 'We visited the museum.', '[(\'We\', \'Pronoun\'), (\'visited\', \'Verb\'), (\'the\', \'Determiner\'), (\'museum\', \'Noun\'), (\'.\', \'PUNCT\')]'),
(88, 'She ate a juicy apple', '[(\'She\', \'Pronoun\'), (\'ate\', \'Verb\'), (\'a\', \'Determiner\'), (\'juicy\', \'Noun\'), (\'apple\', \'Noun\')]'),
(89, 'He drank the cold water', '[(\'He\', \'Pronoun\'), (\'drank\', \'Verb\'), (\'the\', \'Determiner\'), (\'cold\', \'Adjective\'), (\'water\', \'Noun');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `learner`
--
ALTER TABLE `learner`
  ADD PRIMARY KEY (`Lid`);

--
-- Indexes for table `parts_of_speech`
--
ALTER TABLE `parts_of_speech`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `learner`
--
ALTER TABLE `learner`
  MODIFY `Lid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `parts_of_speech`
--
ALTER TABLE `parts_of_speech`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
