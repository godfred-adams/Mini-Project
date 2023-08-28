-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2023 at 01:04 AM
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
-- Database: `mini_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `chats`
--

CREATE TABLE `chats` (
  `id` int(11) NOT NULL,
  `first_name` varchar(32) NOT NULL,
  `last_name` varchar(32) NOT NULL,
  `post_date` date NOT NULL,
  `title` varchar(999) NOT NULL,
  `post_message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chats`
--

INSERT INTO `chats` (`id`, `first_name`, `last_name`, `post_date`, `title`, `post_message`) VALUES
(15, 'Antwi', 'Ebenezer', '2023-08-26', 'WHICH PROGRAMMING LANGUAGE IS THE BEST TO LEARN?', 'I usually tell most people to start by learning HTML and CSS, then move into learning JavaScript. The reason is that JavaScript is used everywhere: frontend, backend, and even to build mobile apps. It has many use cases, which is why I think it’s smart to learn.\r\n\r\nWhen it comes to deciding which language or technologies to learn, it all comes down to your end goals. I suggest you check out my interview with David Clinton to help you decide.'),
(16, 'Godfred', 'Adams', '2023-08-26', 'IS IT POSSIBLE TO DO BOTH GRAPHIC DESIGN AND CODING?', 'If you have an interest in coding and graphic design, then there’s nothing to say you shouldn’t learn skills in both areas. They often work hand-in-hand, so having knowledge and skills in both areas could be desirable for certain career paths. You could also think about pursuing something in between like UI design, which is a very in-demand career right now!'),
(17, 'Godfred', 'Ofori', '2023-08-26', 'HOW DO I FIGURE OUT WHAT TO LEARN?', 'The most important thing is that you want to learn something that interests you, because once you start learning, you’ll be with this topic for a while. Choosing something just because it’s popular or what others are doing isn’t the way to go because if you don’t have a true interest in it, you’ll lose the motivation to learn! Spend some time seriously looking into the different tech career paths before choosing one to go down.'),
(18, 'Martha', 'Amankwa', '2023-08-26', 'SHOULD I USE FREE OR PAID RESOURCES TO LEARN TO CODE?', 'Free tools are great for dipping your toe into the water to see if you like coding, but generally, I recommend using paid resources. While there are some great free resources out there (see below), oftentimes you get what you pay for. Paid resources are likely to be much easier to use and understand. You’re also likely to have better support if you get stuck, and more features and perks that other (free) resources just can’t offer.\r\n\r\nAlso, I find that when I pay for something, I’m much more motivated to use it than when I get something for free. Think of it like paying for a gym membership – you’re more likely to exercise when you pay to attend, so it’s like an added sense of accountability!'),
(21, 'Hannah', 'Kai', '2023-08-26', 'HOW CAN I LEARN TO BUILD A MOBILE APP?', 'First, understand the different mobile app development platforms and languages, so you can pick the best one of your needs. Then take a look at this article about app development courses. You might also enjoy this podcast episode about what makes an app successful.'),
(22, 'Godfred', 'Adams', '2023-08-26', 'Tips and Tricks to Learn Programming Faster', 'A common mistake beginners do while learning programming is just reading a book or looking at the sample code on their desktop without practicing it. It’s easy to read about the loops, and variables, and get all the things in your head but actual programming doesn’t work in this way. You really need to get your hands dirty in coding and keep practicing it regularly. When you start programming you face a lot of problems, you get stuck there, you will be asked to implement the code practically and find the solution for a specific problem and there you will scratch your head while implementing the code. When you write the code, play with the code, change your code to see different results, optimize the code and try different solutions, your logical thinking ability get improves day by day and you eventually learn a lot of things that make you a better programmer.'),
(25, 'Miriam', 'Asante', '2023-08-27', 'Local server load error', 'I have a problem with my local server, it closes anytime I open it. And give the error \"fatal error from localhost\".\r\nAny help.................?');

-- --------------------------------------------------------

--
-- Table structure for table `users_info`
--

CREATE TABLE `users_info` (
  `id` int(11) NOT NULL,
  `first_name` varchar(32) NOT NULL,
  `last_name` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `username` varchar(32) NOT NULL,
  `pass` varchar(999) NOT NULL,
  `confirm_password` varchar(999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users_info`
--

INSERT INTO `users_info` (`id`, `first_name`, `last_name`, `email`, `username`, `pass`, `confirm_password`) VALUES
(15, 'Godfred', 'Adams', 'adamsgodfred3@gmail.com', 'godfred', '$2y$10$XvdSTZXCrEsNFfZWpxwZKeni4nWV5m8G27DfErJ4eb2KR0O5.yERi', '$2y$10$NLBbUTFkPz46JUav4PZPXuZq4wBwM9GrDGLybjw0bNSgbJjjdngjq'),
(16, 'Godfred', 'Ofori', 'ofori@gmail.com', 'godfredofori', '$2y$10$nu4uH5IGR8YNpTzwhcPUxez.O4HrV9iiy4dyQHdC2nOID3YOWXH.i', '$2y$10$O01h13NRyhCd/XWb51/4V.r/zxwAZi.42w5mJyMclEx0aGTshqcKm'),
(17, 'Antwi', 'Ebenezer', 'antwiebenzer@gmail.com', 'kwadwoambitious', '$2y$10$RYN5uO2Zph5n7uEAuWqrm.PHpe32agmoX1le2PwhXRQu52gFb9LSq', '$2y$10$pqj7lYwdqDwgS2Vp5ewCH.bezwu197VX3lDK9RkbsNRVwzK5UEbHK'),
(18, 'Martha', 'Amankwa', 'marthamankwa211@gmail.com', 'amankwamartha211', '$2y$10$WJQC9hGeSP8VFWeTQBqBTe5sUStYLsunu5WdtWZ66GqQyHChqeTfO', '$2y$10$wZ4n6K94RdqEEM1bI0pese4bUtIXIJLfgDUnSawTgHatY4peQvi5K'),
(19, 'Hannah', 'Kai', 'kai246@gmail.com', 'kaihalo126', '$2y$10$L7k4.bd2Kh6aFa3PCap07.uEXX5Qy3oOV8hmE9Sa4ez4gdppYkWtK', '$2y$10$zbW55.35gdD5NmHRcyO83ei/CN/cCmFR8wMD9RYj5mWlo7F.gdvYa'),
(21, 'Emmanuel', 'OwusuAsante', 'emmanuelowusuasante247@gmail.com', 'emmanuel', '$2y$10$xlwQu8cWhKY3FI65CqsWSupVfcj9I8zjsIT4x/tQnj6RxZkfReuge', '$2y$10$UoB3w6jpcaQXTvocQV.hmedJdpH3NSUjTSwxrHsGQZu.rSAMeQfZW'),
(22, 'Miriam', 'Asante', 'asantemiriam478@gmail.com', 'miriamasante478', '$2y$10$EVYZDRmk0IiCfeNxYwJ0uOw3Gbi2QsyySxJrpGwlhSpe6Nbefckt2', '$2y$10$je.oAZMeA7YQEgNKmmcsgur.0ciVfvt2/cSn.Z9llnBdorRG7IXe6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chats`
--
ALTER TABLE `chats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_info`
--
ALTER TABLE `users_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chats`
--
ALTER TABLE `chats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users_info`
--
ALTER TABLE `users_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
