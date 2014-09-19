-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 19, 2014 at 09:59 AM
-- Server version: 5.5.34
-- PHP Version: 5.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `content` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `title`, `content`) VALUES
(1, 'Testing Ganjar', '<p>dscscdsc</p><p>sdcsdc</p><p>sdcsd</p><p>dscsdc</p><p>csdcsdcsdcsdcsdcsdcdsc</p>'),
(4, 'COba in testing', '<pre><i>sdcsdc<br></i><font color="#ff0000" style="background-color: yellow;">dscsdc<br></font>sdcsdc<br><b>sdcsd</b></pre><p>csdcsdcdsc</p><p>dscsd</p><p>dcsdcsdcsdcsdcsdc</p>'),
(5, 'Sains & Teknologi', '<p>Hallo Thank you for visitong <a href="http://teknosains.com" target="_blank">Sains &amp; Teknologi</a>&nbsp;</p><p>Have a nice day</p>'),
(6, 'Hold on kid, this girl is mine', '<p><b><font color="#311873">It is a long</font></b> established fact that a reader will be distracted by <b><font color="#ff0000">the readable content of a page</font></b> when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors <b>now use Lorem Ipsum</b> as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. <b><i>Various versions have</i></b> evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).&nbsp;</p><p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', <i><u>making it look like readable English</u></i>. Many desktop publishing packages and web page editors now use <span style="background-color: rgb(255, 156, 0);">Lorem Ipsum </span>as their default model text, and a <font color="#ff9c00">search for ''lorem ipsum'' </font>will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).&nbsp;</p><p><font color="#ff0000">It is a long established fact that a reader</font> will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use<b> Lorem Ipsum as their default model text, </b>and a search for ''lorem ipsum'' will uncover many web sites still in their <a href="http://teknosains.com" target="_blank">infancy</a>. Various versions have evolved over the years, sometimes by accident, sometimes on purpose <b><font color="#ff00ff">(injected humour and the like).&nbsp;</font></b><br></p>'),
(7, 'Simon Si Peniup Salju', '<h3><span style="line-height: 1.42857143;">Holaaaaaaaaaaaa</span></h3><p><span style="line-height: 1.42857143;">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, <b><font color="#9c00ff">sometimes by accident, sometimes on purpose (injected humour and the like).</font></b></span><br></p>');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
