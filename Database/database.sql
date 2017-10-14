-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 11, 2016 at 06:41 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `exam_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `pass`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE IF NOT EXISTS `question` (
  `S.No` int(11) NOT NULL AUTO_INCREMENT,
  `ques` varchar(100) NOT NULL,
  `opt1` varchar(30) NOT NULL,
  `opt2` varchar(30) NOT NULL,
  `opt3` varchar(30) NOT NULL,
  `opt4` varchar(30) NOT NULL,
  PRIMARY KEY (`S.No`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`S.No`, `ques`, `opt1`, `opt2`, `opt3`, `opt4`) VALUES
(1, 'HTML stands for:', 'Hyper Text Markup Language', 'HJH', 'sdfsdf', 'gsdg'),
(2, 'CSS stands for:', 'Cascading Style Sheet', 'Cascading Sheet Style', 'CSS', 'CSS'),
(3, 'Who is making the Web standards?', 'Mozilla', 'Microsoft', 'Google', 'The World Wide Web Consortium'),
(4, 'Choose the correct HTML element for the largest heading:', 'heading', 'h1', 'head', 'h6'),
(5, 'What is the correct HTML element for inserting a line break?', 'b', 'br', 'break', 'breakkline'),
(6, 'What is the correct HTML for referring to an external style sheet?', 'link rel="stylesheet" type="t', 'stylesheet mystyle.css style', 'style src="mystyle.css"', 'None of these'),
(7, 'Where in an HTML document is the correct place to refer to an external style sheet?', 'At the end of the document', 'In the body section', 'In the head section', 'None of these'),
(8, 'Which HTML attribute is used to define inline styles?', 'font', 'class', 'style', 'styles'),
(9, 'Which is the correct CSS syntax?', 'body:color=black;', 'body color: black;', ' body:color=black;', 'body;color:black;'),
(10, 'abc', 'aa', 'asas', 'asa', 'ss');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `phn` int(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `fname`, `lname`, `dob`, `phn`, `email`, `username`, `pass`) VALUES
(1, 'Atul', 'Aman', '2009-03-08', 2147483647, 'atulaman6272@gmail.com', 'atul6272', '123456');
