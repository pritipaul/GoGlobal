-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2023 at 05:00 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `forum`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `catagory_id` int(8) NOT NULL,
  `category_name` varchar(256) NOT NULL,
  `category_short_des` varchar(256) NOT NULL,
  `category_long_des` varchar(5000) NOT NULL,
  `catagory_img` varchar(256) NOT NULL,
  `date` datetime(4) NOT NULL DEFAULT current_timestamp(4)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`catagory_id`, `category_name`, `category_short_des`, `category_long_des`, `catagory_img`, `date`) VALUES
(1, 'Java', 'A Java forum is a online discussion platform where Java developers can ask and answer questions, share knowledge.', 'Java is a widely used object-oriented programming language and software platform that runs on billions of devices. It is a computing platform for application development. Java is fast, secure, and reliable, therefore. It is widely used for developing Java applications in laptops, data centers, game consoles, scientific supercomputers, cell phones, etc.', 'java.jpg', '2023-01-10 11:05:52.0000'),
(2, 'C/C++', 'A C/C++ forum is a online discussion platform where C and C++ developers can ask and answer questions, share knowledge.', 'C and C++ are high-performance programming languages that are widely used for system and application software, drivers, and embedded firmware. C is a procedural language, while C++ is an object-oriented language that is an extension of C.', 'c_cpp_sq.jpg', '2023-01-10 17:36:27.0000'),
(3, 'Python', 'A Python forum is a online discussion platform where Python developers can ask and answer questions, share knowledge.', 'Python is a high-level, general-purpose programming language that is widely used in scientific computing, data analysis, and machine learning. It is known for its simplicity, readability, and flexibility, making it a great language for beginners and experienced programmers alike. Python has a large and active community of users and developers, which has contributed to the development of a wide range of libraries and frameworks that can be leveraged in a variety of applications.', 'Python.webp', '2023-01-08 20:52:10.0000'),
(4, 'App Development', 'An app development forum is a online discussion platform where app developers can ask and answer questions, share knowledge. ', 'App development is the process of creating software applications for mobile devices such as phones, tablets, and watches. Mobile app development can be done using a variety of programming languages and tools, including native code (e.g., Java for Android, Swift for iOS) and cross-platform frameworks (e.g., React Native, Flutter).', 'app.png', '2023-01-09 08:19:43.0000'),
(5, 'Web Development', 'A web development forum is a online discussion platform where web developers can ask and answer questions, share knowledge.', 'Web development refers to the work involved in developing a website for the Internet (World Wide Web) or an intranet (a private network). Web development can range from developing a simple single static page of plain text to complex web-based internet applications (web apps), electronic businesses, and social network services. A web developer is a programmer who specializes in the development of World Wide Web applications.', 'web.jpg', '2023-01-09 08:21:14.0000'),
(6, 'DBMS', 'A DBMS forum is a online discussion platform where individuals interested in DBMSs can ask and answer questions, share knowledge.', 'A database management system (DBMS) is a software program that interacts with end users, applications, and the database itself to capture and analyze the data. A DBMS allows you to define the database structure, and it provides a set of functions and procedures to store, retrieve, and manipulate the data. Some examples of DBMSs include MySQL, Oracle, and Microsoft SQL Server.', 'dbms.png', '2023-01-09 08:22:12.0000'),
(7, 'IOT', 'An IoT forum is a online discussion platform where individuals interested in the IoT can ask and answer questions, share knowledge.', 'The Internet of Things (IoT) refers to the network of physical devices, vehicles, home appliances, and other objects that are equipped with sensors, software, and network connectivity, allowing them to collect and exchange data. The IoT allows these objects to be connected and controlled remotely, enabling a range of applications such as energy management, asset tracking, remote monitoring, and automation.', 'iot.png', '2023-01-09 08:23:37.0000'),
(8, 'Operating System', 'An OS forum is a online discussion platform where individuals interested in operating systems can ask and answer questions, share knowledge.', 'An operating system (OS) manages all other applications and programs in a computer, and it is loaded into the computer by a boot program. It enables applications to interact with a computer’s hardware.', 'Operating-System.jpg', '2023-01-09 08:26:02.0000'),
(9, 'Artificial Intelligence', 'An AI forum is a online discussion platform where individuals interested in AI can ask and answer questions, share knowledge.', 'Artificial Intelligence is the science and engineering of making intelligent machines, especially intelligent computer programs. Artificial Intelligence is related to the similar task of using computers to understand human intelligence.', 'ai.jpg', '2023-01-09 08:27:10.0000'),
(10, 'Computer Network', 'A computer networking forum is a online discussion platform where individuals interested in topic can ask and answer questions, share knowledge.', 'A computer network is a set of computers sharing resources located on or provided by network nodes. Computers use common communication protocols over digital interconnections to communicate with each other.', 'computer-network.jpg', '2023-01-09 08:28:00.0000'),
(11, 'Blockchain', 'A blockchain forum is a online discussion platform where individuals interested in blockchain technology can ask and answer questions, share knowledge.', 'A blockchain is essentially a digital ledger of transactions that is duplicated and distributed across the entire network of computer systems on the blockchain. Each block in the chain contains a number of transactions, and every time a new transaction occurs on the blockchain, a record of that transaction is added to every participant’s ledger.', 'blockchain.webp', '2023-01-09 08:29:00.0000'),
(12, 'Cyber-Security', 'A cybersecurity forum is a online discussion platform where individuals interested in cybersecurity can ask and answer questions, share knowledge.', 'Cybersecurity is the practice of protecting systems, networks, and programs from digital attacks. These cyberattacks are usually aimed at accessing, changing, or destroying sensitive information, extorting money from users, or interrupting normal business processes.', 'cs.webp', '2023-01-09 08:29:48.0000');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(4) NOT NULL,
  `name` text NOT NULL,
  `comment` text NOT NULL,
  `post_id` int(8) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `reply_of` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `comment`, `post_id`, `created_at`, `reply_of`) VALUES
(1, 'priti', 'hi i am priti', 1, '2023-01-13 19:47:43', 0),
(2, 'tina', 'hi hello', 1, '2023-01-13 19:48:28', 1),
(3, 'tii', 'the the the', 2, '2023-01-13 19:54:46', 0),
(4, 'tp', 'this the that', 2, '2023-01-13 19:57:49', 3),
(5, 'rina', 'i am rina', 2, '2023-01-13 19:58:49', 0),
(6, 'gt', 'fgdfgdffdg', 2, '2023-01-13 20:00:04', 5),
(7, 'rf', '', 2, '2023-01-13 20:00:42', 0),
(8, 'Tamali', 'dfdfdfdsfdsfdsfdsfsdf', 2, '2023-01-13 20:07:31', 3),
(9, 'Ranjit Paul', 'this is mar', 2, '2023-01-13 20:26:13', 3),
(10, 'tina Roy', '@tp this is ', 2, '2023-01-13 20:48:00', 3),
(11, 'priti paul', 'right page is this?', 2, '2023-01-13 21:21:12', 0),
(12, 'priti paul', 'this is the ropo', 2, '2023-01-13 21:41:33', 0),
(13, 'priti paul', 'yoyoyoyooy', 2, '2023-01-13 21:44:18', 12),
(14, 'priti paul', 'this is new comment', 2, '2023-01-13 21:52:37', 0),
(15, 'priti paul', 'A rose is either a woody perennial flowering plant of the genus Rosa, in the family Rosaceae, or the flower it bears. There are over three hundred species and tens of thousands of cultivars.', 2, '2023-01-14 08:49:22', 11),
(16, 'priti paul', 'pic', 2, '2023-01-14 09:50:10', 7),
(17, 'priti paul', 'yu', 2, '2023-01-14 09:55:04', 7),
(18, 'priti paul', 'yu', 2, '2023-01-14 09:56:50', 7),
(19, 'priti paul', 'op', 2, '2023-01-14 09:57:38', 14),
(20, 'priti paul', 'klkjlkjlj', 2, '2023-01-14 10:04:05', 14),
(21, 'priti paul', '@priti paul hello', 2, '2023-01-14 10:06:43', 14),
(22, 'priti paul', '@priti paul hello', 2, '2023-01-14 10:07:37', 14),
(23, 'priti paul', 'this is new comment v', 2, '2023-01-14 10:13:01', 0),
(24, 'priti paul', 'kol', 2, '2023-01-14 10:34:32', 23),
(25, 'priti paul', 'hb', 2, '2023-01-14 10:36:53', 23),
(26, 'priti paul', '@priti paulvbvbv', 2, '2023-01-14 10:39:45', 23),
(27, 'priti paul', '@priti paul dfdf', 2, '2023-01-14 10:40:38', 23),
(28, 'priti paul', '', 2, '2023-01-14 10:51:03', 0),
(29, 'priti paul', '', 2, '2023-01-14 11:38:49', 3),
(30, 'priti paul', '', 2, '2023-01-14 11:40:21', 3),
(31, 'priti paul', 'this is the page comment', 13, '2023-01-14 11:45:39', 0),
(32, 'priti paul', 'hi', 13, '2023-01-14 11:46:00', 31),
(33, 'priti paul', '@priti pauljkjkjhkjhk', 13, '2023-01-14 11:48:04', 31),
(34, 'priti paul', ' gh', 13, '2023-01-14 11:56:21', 0),
(35, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:24', 0),
(36, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:24', 0),
(37, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:24', 0),
(38, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:24', 0),
(39, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:24', 0),
(40, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:24', 0),
(41, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:24', 0),
(42, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:24', 0),
(43, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:24', 0),
(44, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:24', 0),
(45, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:24', 0),
(46, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:24', 0),
(47, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:24', 0),
(48, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:24', 0),
(49, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:24', 0),
(50, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:24', 0),
(51, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:24', 0),
(52, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:24', 0),
(53, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:24', 0),
(54, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:24', 0),
(55, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:24', 0),
(56, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:24', 0),
(57, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:24', 0),
(58, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:24', 0),
(59, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:24', 0),
(60, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:24', 0),
(61, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:24', 0),
(62, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:24', 0),
(63, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:24', 0),
(64, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:24', 0),
(65, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:24', 0),
(66, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:25', 0),
(67, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:25', 0),
(68, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:25', 0),
(69, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:25', 0),
(70, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:25', 0),
(71, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:25', 0),
(72, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:25', 0),
(73, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:25', 0),
(74, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:25', 0),
(75, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:25', 0),
(76, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:25', 0),
(77, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:25', 0),
(78, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:25', 0),
(79, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:25', 0),
(80, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:25', 0),
(81, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:25', 0),
(82, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:25', 0),
(83, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:25', 0),
(84, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:25', 0),
(85, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:25', 0),
(86, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:25', 0),
(87, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:25', 0),
(88, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:25', 0),
(89, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:25', 0),
(90, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:25', 0),
(91, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:25', 0),
(92, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:25', 0),
(93, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:25', 0),
(94, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:26', 0),
(95, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:26', 0),
(96, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:26', 0),
(97, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:26', 0),
(98, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:26', 0),
(99, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:26', 0),
(100, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:26', 0),
(101, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:26', 0),
(102, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:26', 0),
(103, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:26', 0),
(104, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:26', 0),
(105, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:26', 0),
(106, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:26', 0),
(107, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:26', 0),
(108, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:26', 0),
(109, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:26', 0),
(110, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:27', 0),
(111, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:27', 0),
(112, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:27', 0),
(113, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:27', 0),
(114, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:27', 0),
(115, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:27', 0),
(116, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:27', 0),
(117, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:27', 0),
(118, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:27', 0),
(119, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:27', 0),
(120, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:27', 0),
(121, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:27', 0),
(122, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:27', 0),
(123, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:27', 0),
(124, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:27', 0),
(125, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:27', 0),
(126, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:28', 0),
(127, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:28', 0),
(128, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:28', 0),
(129, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:28', 0),
(130, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:28', 0),
(131, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:28', 0),
(132, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:28', 0),
(133, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:28', 0),
(134, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:28', 0),
(135, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:28', 0),
(136, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:28', 0),
(137, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:28', 0),
(138, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:28', 0),
(139, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:28', 0),
(140, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:28', 0),
(141, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:29', 0),
(142, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:29', 0),
(143, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:29', 0),
(144, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:29', 0),
(145, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:29', 0),
(146, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:29', 0),
(147, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:30', 0),
(148, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:30', 0),
(149, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:30', 0),
(150, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:30', 0),
(151, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:30', 0),
(152, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:30', 0),
(153, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:30', 0),
(154, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:30', 0),
(155, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:30', 0),
(156, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:30', 0),
(157, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:30', 0),
(158, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:30', 0),
(159, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:31', 0),
(160, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:31', 0),
(161, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:31', 0),
(162, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:31', 0),
(163, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:31', 0),
(164, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:31', 0),
(165, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:31', 0),
(166, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:31', 0),
(167, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:31', 0),
(168, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:31', 0),
(169, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:32', 0),
(170, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:32', 0),
(171, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:32', 0),
(172, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:32', 0),
(173, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:32', 0),
(174, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:32', 0),
(175, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:33', 0),
(176, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:33', 0),
(177, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:33', 0),
(178, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:33', 0),
(179, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:33', 0),
(180, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:33', 0),
(181, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:33', 0),
(182, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:33', 0),
(183, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:33', 0),
(184, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:33', 0),
(185, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:33', 0),
(186, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:33', 0),
(187, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:33', 0),
(188, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:34', 0),
(189, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:34', 0),
(190, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:34', 0),
(191, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:34', 0),
(192, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:34', 0),
(193, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:35', 0),
(194, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:35', 0),
(195, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:35', 0),
(196, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:35', 0),
(197, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:36', 0),
(198, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:36', 0),
(199, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:36', 0),
(200, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:36', 0),
(201, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:36', 0),
(202, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:36', 0),
(203, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:36', 0),
(204, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:36', 0),
(205, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:37', 0),
(206, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:37', 0),
(207, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:37', 0),
(208, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:37', 0),
(209, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:37', 0),
(210, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:37', 0),
(211, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:37', 0),
(212, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:37', 0),
(213, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:37', 0),
(214, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:37', 0),
(215, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:38', 0),
(216, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:38', 0),
(217, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:38', 0),
(218, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:38', 0),
(219, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:38', 0),
(220, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:38', 0),
(221, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:39', 0),
(222, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:39', 0),
(223, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:39', 0),
(224, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:39', 0),
(225, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:39', 0),
(226, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:39', 0),
(227, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:40', 0),
(228, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:40', 0),
(229, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:40', 0),
(230, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:40', 0),
(231, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:41', 0),
(232, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:41', 0),
(233, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:41', 0),
(234, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:41', 0),
(235, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:42', 0),
(236, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:42', 0),
(237, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:42', 0),
(238, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:43', 0),
(239, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:43', 0),
(240, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:43', 0),
(241, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:43', 0),
(242, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:44', 0),
(243, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:44', 0),
(244, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:44', 0),
(245, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:46', 0),
(246, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:46', 0),
(247, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:46', 0),
(248, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:46', 0),
(249, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:46', 0),
(250, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:46', 0),
(251, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:46', 0),
(252, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:46', 0),
(253, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:46', 0),
(254, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:46', 0),
(255, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:49', 0),
(256, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:49', 0),
(257, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:49', 0),
(258, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:49', 0),
(259, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:49', 0),
(260, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:49', 0),
(261, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:50', 0),
(262, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:50', 0),
(263, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:50', 0),
(264, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:50', 0),
(265, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:51', 0),
(266, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:51', 0),
(267, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:51', 0),
(268, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:51', 0),
(269, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:52', 0),
(270, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:56', 0),
(271, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:58:56', 0),
(272, 'priti paul', 'kjljkljkl', 13, '2023-01-14 11:59:22', 0),
(273, 'priti paul', 'this is new comment jhhj', 7, '2023-01-14 12:00:32', 0),
(274, 'priti paul', 'this is new comment jhhj ', 7, '2023-01-14 12:01:33', 0),
(275, 'priti paul', 'klkjljkljkljkl', 7, '2023-01-14 12:02:53', 273);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int(4) NOT NULL,
  `fname` text NOT NULL,
  `lname` varchar(256) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_id`, `fname`, `lname`, `message`, `datetime`) VALUES
(1, 'priti paul', 'priti@gmail.com', 'this is the comments', '2023-01-10 17:19:47'),
(2, 'payal paul', 'payal@gmail.com', 'the page', '2023-01-10 17:20:34'),
(3, 'gublu', 'paulpriti877@gmail.com', 'this is the webpage', '2023-01-10 17:26:02'),
(5, 'gfgh', 'g@gmail.com', 'dfsdfsdf', '2023-01-10 17:29:28'),
(6, 'Soubhik Achraya', 'soubhik@gmail.com', 'this is the froum webpage', '2023-01-10 18:12:14');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `question_id` int(4) NOT NULL,
  `queston_title` varchar(256) NOT NULL,
  `question_des` varchar(500) NOT NULL,
  `question_cat_id` int(8) NOT NULL,
  `question_user` int(8) NOT NULL,
  `datetime` datetime(4) NOT NULL DEFAULT current_timestamp(4)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`question_id`, `queston_title`, `question_des`, `question_cat_id`, `question_user`, `datetime`) VALUES
(1, 'java title', 'this is the java description', 1, 1, '2023-01-08 16:58:53.0000'),
(2, 'java app development', 'App creation is no longer just for professional developers. Now everyone can build mobile apps without programming using a free version of an award-winning low-code app development platform. Alpha Anywhere Community Edition is a free app development software that creates Android apps and iPhone apps with ease', 1, 2, '2023-01-08 17:07:49.0000'),
(3, 'this is the thread ', 'this sihihiushgf', 2, 1, '2023-01-08 19:11:37.4010'),
(4, 'java web page ', 'Java Web Application is used to create dynamic websites. Java provides support for web application through Servlets and JSPs. We can create a website with static HTML pages but when we want information to be dynamic, we need web application.', 1, 1, '2023-01-08 19:14:48.9601'),
(7, 'I want java playllist ', 'please send and help me', 1, 6, '2023-01-09 21:14:25.8697'),
(11, 'dfdsfsdf ', 'dfsdfsdfsdfsdfsdfsd', 1, 1, '2023-01-09 21:30:58.5136'),
(13, 'gfdgfdgfdgdg ', 'dfgdgdfgdfgdfgdfgdfg', 1, 8, '2023-01-09 21:40:26.7980'),
(15, 'fgfdgdgfdgdgd ', 'asasasasasasasklklk', 1, 8, '2023-01-09 21:44:06.5779'),
(20, 'my name is priti ', 'my name is priti paul', 1, 8, '2023-01-10 08:59:42.9455'),
(26, 'abcdefg ', 'abcdefg', 1, 8, '2023-01-10 09:33:43.5505'),
(28, 'my forum is this ', 'hi hi hi', 2, 10, '2023-01-10 10:22:04.6801');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(8) NOT NULL,
  `user_name` text NOT NULL,
  `user_email` varchar(256) NOT NULL,
  `user_password` varchar(256) NOT NULL,
  `datetime` datetime(4) NOT NULL DEFAULT current_timestamp(4)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_email`, `user_password`, `datetime`) VALUES
(1, 'priti paul', 'priti@gmail.com', 'pritipaul', '2023-01-09 16:49:27.0000'),
(2, 'superAdmin', 'paulpriti877@gmail.com', 'secretgfdgfdgfdg', '2023-01-09 17:04:33.5959'),
(4, 'superAdmin', 'p@gmail.com', 'secreterer', '2023-01-09 17:08:20.3193'),
(5, 'superAdmin', 'r@gmail.com', 'secretwergbnhj', '2023-01-09 17:09:28.1182'),
(6, 'superAdminfghfgh', 'rot@gmail.com', '$2y$10$DlTRM9zMXeGYnwW3ALhWgOcqkR9B3oJgkeFqs4pSdYFO3T898XbmK', '2023-01-09 17:49:45.1167'),
(7, 's', 's@gmail.com', '$2y$10$DccQ1s.S9tftENVVrgnW4uhpIbA.s.nddL1Vu3Wg0ij9.WD3iyqP.', '2023-01-09 18:45:49.3637'),
(8, 'priti paul', 'pritipaul135@gmail.com', '$2y$10$6CnvGyUwai8h1PzNIUZD4u7HjeBSaMt0SJRiZHDzuoEd/9GC/e89q', '2023-01-09 20:15:23.8441'),
(9, 'gublu', 'gublu123@gmail.com', '$2y$10$6Sux9nl046frAvh6BIrubue5Dx9Snc/AwyeG6hMABhuMAyHz9tWfG', '2023-01-10 09:31:21.1971'),
(10, 'payal', 'payal@gmail.com', '$2y$10$2Gq2iiGegbTwW2rMhtzrjODdWS5fKJpEzFW0EHzn8zJNJKOJYWgzK', '2023-01-10 10:20:35.7765'),
(11, 'Priti Paul', 'pritipaul789@gmail.com', '$2y$10$j64PYbtmRS0yeexLyr/.6ub2yRIQ0Chr7OZR6UI1AHL/ffcXTTNEi', '2023-01-12 09:09:55.8480');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`catagory_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`),
  ADD UNIQUE KEY `lname` (`lname`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`question_id`),
  ADD UNIQUE KEY `queston_title` (`queston_title`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_email` (`user_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `catagory_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=276;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `question_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
