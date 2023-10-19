SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cafe`
--
CREATE DATABASE IF NOT EXISTS `cafe` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `cafe`;

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `ser_id` INT NOT NULL AUTO_INCREMENT,
  `ser_name` VARCHAR(50) NOT NULL,
  `ser_desc` VARCHAR(100) NOT NULL,
  `ser_cap` INT NOT NULL,
  `ser_cost` DECIMAL(10, 2) NOT NULL,
  `ser_latecost` DECIMAL(10, 2) NOT NULL,
  `ser_availability` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`ser_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Table structure for table `serviceslot`
--

CREATE TABLE `serviceslot` (
  `idserviceslot` INT NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(45) NOT NULL,
  `service` VARCHAR(45) NOT NULL,
  `checkin` VARCHAR(45) NOT NULL,
  `datetime` DATETIME NOT NULL,
  PRIMARY KEY (`idserviceslot`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `users_id` INT NOT NULL AUTO_INCREMENT,
  `users_uid` TEXT NOT NULL,
  `users_fname` TEXT NOT NULL,
  `users_lname` TEXT NOT NULL,
  `users_phone` VARCHAR(20) NOT NULL,
  `users_email` TEXT NOT NULL,
  `users_pwd` TEXT NOT NULL,
  `users_type` VARCHAR(2) NOT NULL,
  PRIMARY KEY (`users_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


--
-- Dumping data for table `user`
--

INSERT INTO `cafe`.`users` (`users_id`, `users_uid`, `users_fname`, `users_lname`, `users_phone`, `users_email`, `users_pwd`, `users_type`) VALUES ('1', 'cafestaff1', 'cafestaff1', 'cafestaff1', '123', 'cafestaff1@cafestaff1.com', 'cafestaff1', 'CS');
INSERT INTO `cafe`.`users` (`users_id`, `users_uid`, `users_fname`, `users_lname`, `users_phone`, `users_email`, `users_pwd`, `users_type`) VALUES ('2', 'cafestaff2', 'cafestaff2', 'cafestaff2', '123', 'cafestaff2@cafestaff2.com', 'cafestaff2', 'CS');
INSERT INTO `cafe`.`users` (`users_id`, `users_uid`, `users_fname`, `users_lname`, `users_phone`, `users_email`, `users_pwd`, `users_type`) VALUES ('3', 'cafestaff3', 'cafestaff3', 'cafestaff3', '123', 'cafestaff3@cafestaff3.com', 'cafestaff3', 'CS');
INSERT INTO `cafe`.`users` (`users_id`, `users_uid`, `users_fname`, `users_lname`, `users_phone`, `users_email`, `users_pwd`, `users_type`) VALUES ('4', 'cafestaff4', 'cafestaff4', 'cafestaff4', '123', 'cafestaff4@cafestaff4.com', 'cafestaff4', 'CS');
INSERT INTO `cafe`.`users` (`users_id`, `users_uid`, `users_fname`, `users_lname`, `users_phone`, `users_email`, `users_pwd`, `users_type`) VALUES ('5', 'cafestaff5', 'cafestaff5', 'cafestaff5', '123', 'cafestaff5@cafestaff5.com', 'cafestaff5', 'CS');
INSERT INTO `cafe`.`users` (`users_id`, `users_uid`, `users_fname`, `users_lname`, `users_phone`, `users_email`, `users_pwd`, `users_type`) VALUES ('6', 'systemadmin1', 'systemadmin1', 'systemadmin1', '123', 'systemadmin1@systemadmin1.com', 'systemadmin1', 'SA');
INSERT INTO `cafe`.`users` (`users_id`, `users_uid`, `users_fname`, `users_lname`, `users_phone`, `users_email`, `users_pwd`, `users_type`) VALUES ('7', 'systemadmin2', 'systemadmin2', 'systemadmin2', '123', 'systemadmin1@systemadmin2.com', 'systemadmin2', 'SA');
INSERT INTO `cafe`.`users` (`users_id`, `users_uid`, `users_fname`, `users_lname`, `users_phone`, `users_email`, `users_pwd`, `users_type`) VALUES ('8', 'systemadmin3', 'systemadmin3', 'systemadmin3', '123', 'systemadmin1@systemadmin3.com', 'systemadmin3', 'SA');
INSERT INTO `cafe`.`users` (`users_id`, `users_uid`, `users_fname`, `users_lname`, `users_phone`, `users_email`, `users_pwd`, `users_type`) VALUES ('9', 'systemadmin4', 'systemadmin4', 'systemadmin4', '123', 'systemadmin1@systemadmin4.com', 'systemadmin4', 'SA');
INSERT INTO `cafe`.`users` (`users_id`, `users_uid`, `users_fname`, `users_lname`, `users_phone`, `users_email`, `users_pwd`, `users_type`) VALUES ('10', 'systemadmin5', 'systemadmin5', 'systemadmin5', '123', 'systemadmin1@systemadmin5.com', 'systemadmin5', 'SA');

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`ser_id`, `ser_name`, `ser_desc`, `ser_cap`, `ser_cost`, `ser_latecost`, `ser_availability`) VALUES
(1, 'cardio cafe', 'cardio', 100, 10.00, 15.00, 'Available'),
(2, 'functional cafe', 'functional', 60, 10.00, 15.00, 'Available'),
(3, 'tennis', 'tennis', 50, 10.00, 15.00, 'Available'),
(4, 'bsystemadminton', 'bsystemadminton', 70, 10.00, 15.00, 'Available'),
(5, 'yoga cafe', 'flexible', 80, 10.00, 15.00, 'Available');

-- --------------------------------------------------------

-- Other index definitions and AUTO_INCREMENT statements...

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
