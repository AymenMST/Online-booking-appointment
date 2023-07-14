-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2017 at 06:03 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id1811609_my_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `doc`
--

CREATE TABLE `doc` (
  `user` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `diplome` int(2) NOT NULL,
  `spec` int(2) NOT NULL,
  `email` varchar(40) NOT NULL,
  `tel` varchar(15) NOT NULL,
  `wilaya` int(2) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `adress` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doc`
--

INSERT INTO `doc` (`user`, `pass`, `diplome`, `spec`, `email`, `tel`, `wilaya`, `nom`, `adress`) VALUES
('aymen4', 'hahahahhahaha', 1, 1, 'mst@mst.com', '0559129008', 21, 'hahaha', 'æjsafnsrofjqfko  oasifnjqerfjn'),
('aymen', 'aymenm', 3, 6, 'aymen', '0559129008', 21, 'aymenaymen mst', 'cite zarabata eplf bt=B num 5 skikda 21000'),
('aymen5', 'jajajajajaj', 1, 6, 'aymen@aymen.com', '6874685', 46, 'gkaslnrf', 'æsfdnqeop æwenpøqjr'),
('aymen21', 'hahahahaha', 1, 1, '3546@king.com', '0559129008', 1, 'fojnæsa', 'øasdkfjaøspfj qkeroqeij'),
('karim', 'kakakakakaka', 1, 1, 'aymen@aymen.com', '0559129008', 6, 'ujnwqfoæ', 'kdfjijq qjewf '),
('kaka', 'jajaja', 1, 1, '3546@king.com', '0559129008', 46, 'oweqfn', 'kjfboåwif pwrke jewrij'),
('jajaj', 'jalajmdpc', 1, 1, 'aymen@aymen.com', '0559129008', 21, 'æonqwfeio', 'ædifuwqe opqw ewq'),
('aymen2', 'aymen2', 2, 1, '3546@king.com', '0559129008', 23, 'mst aymenaymen', 'qw f9qwr ww q9rj'),
('haaaakim', 'Ã¦ldfnqwoif', 1, 1, 'fasdfqe@kusgb.com', 'dsfqfw69364', 1, 'admwq', 'sæqo jwer9ij q¨pwer q'),
('-lkf-lkndsf', 'sa\'Ã¥dpfk', 1, 1, '3546@king.com', '6874685', 46, 'wmfed', 'Ã¦flmw,eÃ¥f'),
('poakfs', 'smadfkslfm', 1, 1, '3546@king.com', '0559129008', 44, 'lkmdsf', 'Ã¦flmw,eÃ¥f'),
('f-lnsjlkewmf', 'lknfwekfmlwkf', 2, 1, 'fwefqwe@jnfds.cp', 'fdfsd', 46, 'ljnfs qlkfm', 'dqfrfqergrfrq'),
('aymenm', 'aymen211', 2, 1, 'aymen@aymen.com', '0559129008', 7, 'Dr. aymenaymen mst', 'cite zarabata eplf bt=B num 5 skikda 21000'),
('jajajajaja', 'princo', 1, 1, 'mst.aaymen@yahoo.fr', '05555555', 46, 'aymenaymen aymen', 'cite skikda'),
('akram', 'akramm', 4, 3, 'akram@akram.akram', '0244987987', 46, 'akram sbaghdi ', 'cite ain wden'),
('aymen211', 'aymenm', 3, 3, 'mst.aaymen@yahoo.fr', '05555555', 9, 'mst aymenaymen', 'cite skikda');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `user` int(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `tel` varchar(15) NOT NULL,
  `wilaya` int(2) NOT NULL,
  `nom` text NOT NULL,
  `dateN` date DEFAULT NULL,
  `sex` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`user`, `pass`, `email`, `tel`, `wilaya`, `nom`, `dateN`, `sex`) VALUES
(11111, 'aymenm', 'mst.aymen@mst.fr', '055919008', 36, 'aymenaymen aymen', '2017-05-23', 'male'),
(33333, 'jajajajaja', '3546@king.com', '0559129008', 23, 'fasifj68468', '2017-05-03', 'male'),
(68779685, 'jajajajjaja', '3546@king.com', '6874685', 1, 'mstfhsdoi jf', '2017-05-03', 'female'),
(4354687, 'jajaja', 'asmdno@jajaj.com', '0655950761', 1, 'safgsdg', '2017-05-03', 'female'),
(1846874, 'fdnjodl', 'ldsnfoqonde@ondfs', 'onsdfÃ¦on', 46, 'aojsfpsokf', NULL, 'female'),
(155524, 'kjnads', 'aymen@aymen.com', '0559129008', 6, 'sdagfoæsjfå ', NULL, ''),
(1112255, 'ojojfndaoi', '3546@king.com', '0559129008', 16, 'sdafæ jawå', NULL, ''),
(1114455, 'slkadm', 'ja@ha.cpm', '10654+9856', 25, 'awærofk ', NULL, ''),
(22255447, 'dlaskmd', 'sagfs@fds', '264865', 0, 'laisjf ', NULL, ''),
(354687, 'jajajja', 'odjfmsai@aymen.cpm', '260,342658', 46, 'æoak søfp', NULL, ''),
(1834, 'sdlfjndj', 'sagfs@fds', '264865', 39, 'sadæfjm saeirhn', NULL, ''),
(112222, 'dafdsf', 'aymen@aymen.com', '0559129008', 16, 'lsafj nfi', NULL, ''),
(22222, 'afdsljn', '3546@king.com', '0559129008', 0, 'ljasfn wqrio ', NULL, ''),
(222222, 'jnfddsfsdf', '3546@king.com', '0559129008', 0, 'ljnas flisrn ', NULL, ''),
(123456, 'aymenm', 'mst@mst.com', '0559129008', 46, 'aymen mst', '1998-03-01', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `rapport`
--

CREATE TABLE `rapport` (
  `id` int(11) NOT NULL,
  `puser` int(11) NOT NULL,
  `duser` text NOT NULL,
  `rapp` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rapport`
--

INSERT INTO `rapport` (`id`, `puser`, `duser`, `rapp`) VALUES
(1, 11111, 'aymen', 'bonjour bonjour bonjour bonjour bonjour bonjour bonjour bonjour bonjour bonjour bonjour bonjour bonjour bonjour bonjour bonjour bonjour bonjour bonjour bonjour bonjour bonjour bonjour bonjour bonjour bonjour bonjour bonjour bonjour bonjour bonjour bonjour bonjour bonjour bonjour bonjour bonjour bonjour bonjour bonjour bonjour bonjour bonjour bonjour bonjour bonjour bonjour bonjour bonjour bonjour bonjour bonjour bonjour bonjour bonjour bonjour bonjour bonjour bonjour bonjour bonjour bonjour bonjour bonjour bonjour bonjour bonjour bonjour bonjour bonjour bonjour bonjour bonjour bonjour bonjour bonjour bonjour bonjour bonjour bonjour bonjour bonjour bonjour bonjour bonjour '),
(2, 11111, 'aymen', 'bonsoir bonsoir bonsoir bonsoir bonsoir bonsoir bonsoir bonsoir bonsoir bonsoir bonsoir bonsoir bonsoir bonsoir bonsoir bonsoir bonsoir bonsoir bonsoir bonsoir bonsoir bonsoir bonsoir bonsoir bonsoir bonsoir bonsoir bonsoir bonsoir bonsoir bonsoir bonsoir bonsoir bonsoir bonsoir bonsoir bonsoir bonsoir bonsoir bonsoir bonsoir bonsoir bonsoir bonsoir bonsoir bonsoir bonsoir bonsoir bonsoir bonsoir bonsoir bonsoir bonsoir bonsoir bonsoir bonsoir bonsoir bonsoir bonsoir bonsoir bonsoir bonsoir bonsoir bonsoir bonsoir bonsoir bonsoir bonsoir bonsoir bonsoir bonsoir '),
(3, 11111, 'aymen', 'aymenaymen \r\n'),
(4, 11111, 'aymen', 'aymenaymen '),
(5, 33333, 'aymen', 'hahahahaha'),
(6, 33333, 'aymen', 'hahahahaha'),
(7, 33333, 'aymen', 'hahahahaha'),
(8, 22222, 'aymen', '5/30/2017 \r\nrapport sur malade');

-- --------------------------------------------------------

--
-- Table structure for table `rdv`
--

CREATE TABLE `rdv` (
  `id` int(11) NOT NULL,
  `puser` varchar(20) DEFAULT NULL,
  `duser` varchar(20) DEFAULT NULL,
  `date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rdv`
--

INSERT INTO `rdv` (`id`, `puser`, `duser`, `date`) VALUES
(3, '22222', 'aymen', '2017-03-12 08:15:00'),
(4, '22222', 'aymen', '2017-03-12 09:45:00'),
(5, '33333', 'aymen', '2017-03-12 09:00:00'),
(6, '11111', 'aymen4', '2017-05-10 10:00:00'),
(7, '1834', 'aymen4', '2017-05-10 10:15:00'),
(8, '11111', 'aymen', '2017-04-23 15:45:00'),
(9, '11111', 'aymen', '2017-05-29 15:00:00'),
(10, '11111', 'aymen4', '2017-03-11 15:45:00'),
(11, '11111', 'aymen', '2017-04-12 11:15:00'),
(12, '11111', 'aymen', '2017-05-30 15:00:00'),
(13, '33333', 'aymen', '2017-12-02 15:00:00'),
(14, '11111', 'aymen', '2017-03-12 11:00:00'),
(15, '11111', 'aymen', '2017-12-12 12:30:00'),
(16, '11111', 'aymen4', '2017-02-02 09:15:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doc`
--
ALTER TABLE `doc`
  ADD PRIMARY KEY (`user`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`user`);

--
-- Indexes for table `rapport`
--
ALTER TABLE `rapport`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rdv`
--
ALTER TABLE `rdv`
  ADD PRIMARY KEY (`id`),
  ADD KEY `puser` (`puser`),
  ADD KEY `duser` (`duser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rapport`
--
ALTER TABLE `rapport`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `rdv`
--
ALTER TABLE `rdv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
