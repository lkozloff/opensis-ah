<?php
#**************************************************************************
#  openSIS is a free student information system for public and non-public
#  schools from Open Solutions for Education, Inc. web: www.os4ed.com
#
#  openSIS is  web-based, open source, and comes packed with features that
#  include student demographic info, scheduling, grade book, attendance,
#  report cards, eligibility, transcripts, parent portal,
#  student portal and more.
#
#  Visit the openSIS web site at http://www.opensis.com to learn more.
#  If you have question regarding this system or the license, please send
#  an email to info@os4ed.com.
#
#  This program is released under the terms of the GNU General Public License as
#  published by the Free Software Foundation, version 2 of the License.
#  See license.txt.
#
#  This program is distributed in the hope that it will be useful,
#  but WITHOUT ANY WARRANTY; without even the implied warranty of
#  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
#  GNU General Public License for more details.
#
#  You should have received a copy of the GNU General Public License
#  along with this program.  If not, see <http://www.gnu.org/licenses/>.
#
#***************************************************************************************
$text = "
-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 16, 2012 at 09:58 AM
-- Server version: 5.5.25
-- PHP Version: 5.3.8

SET SQL_MODE='NO_AUTO_VALUE_ON_ZERO';
SET time_zone = '+00:00'';


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `opensis`
--

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`address_id`, `house_no`, `fraction`, `letter`, `direction`, `street`, `apt`, `zipcode`, `plus4`, `city`, `state`, `mail_street`, `mail_city`, `mail_state`, `mail_zipcode`, `address`, `mail_address`, `phone`, `student_id`, `bus_no`, `bus_pickup`, `bus_dropoff`, `prim_student_relation`, `pri_first_name`, `pri_last_name`, `home_phone`, `work_phone`, `mobile_phone`, `email`, `prim_custody`, `prim_address`, `prim_street`, `prim_city`, `prim_state`, `prim_zipcode`, `sec_student_relation`, `sec_first_name`, `sec_last_name`, `sec_home_phone`, `sec_work_phone`, `sec_mobile_phone`, `sec_email`, `sec_custody`, `sec_address`, `sec_street`, `sec_city`, `sec_state`, `sec_zipcode`) VALUES
(1, NULL, NULL, NULL, NULL, 'Unit 56', NULL, '30309', NULL, 'Atlanta', 'GA', 'Unit 56', 'Atlanta', 'GA', '30309', '1050 Peachtree Street', '1050 Peachtree Street', NULL, '1', '14', 'Y', 'Y', 'Father', 'Dennis', 'Williams', '404-555-1212', '678-232-4300 Xt 77', '404-524-3234', 'dennis@email.com', 'Y', '1050 Peachtree Street', 'Unit 56', 'Atlanta', 'GA', '30309', 'Mother', 'Julia', 'Williams', '404-555-1212', NULL, NULL, 'julia@email.com', 'Y', '1050 Peachtree Street', 'Unit 56', 'Atlanta', 'GA', '30309'),
(2, NULL, NULL, NULL, NULL, NULL, NULL, '30306', NULL, 'Atlanta', 'GA', NULL, 'Atlanta', 'GA', '30306', '1190 N Highland Avenue Northeast', '1190 N Highland Avenue Northeast', NULL, '10', '15', 'Y', 'Y', 'Father', 'Stan  ', 'Allen', '678-243-3453', '404-324-6000', NULL, NULL, 'Y', '1190 N Highland Avenue Northeast', NULL, 'Atlanta', 'GA', '30306', 'Mother', 'Emma', 'Allen', NULL, NULL, NULL, NULL, 'Y', '1190 N Highland Avenue Northeast', NULL, 'Atlanta', 'GA', '30306'),
(3, NULL, NULL, NULL, NULL, NULL, NULL, '30306', NULL, 'Atlanta', 'GA', NULL, 'Atlanta', 'GA', '30306', '822 Ralph McGill Boulevard Northeast', '822 Ralph McGill Boulevard Northeast', NULL, '7', '22', 'Y', 'Y', 'Step Father', 'Ian', 'Roy', '404-543-9365', '404-876-4399', NULL, NULL, 'Y', '822 Ralph McGill Boulevard Northeast', NULL, 'Atlanta', 'GA', '30306', 'Mother', 'Emily', 'Atkinson', NULL, NULL, NULL, NULL, 'Y', '822 Ralph McGill Boulevard Northeast', NULL, 'Atlanta', 'GA', '30306'),
(4, NULL, NULL, NULL, NULL, NULL, NULL, '30314', NULL, 'Atlanta', 'GA', NULL, 'Atlanta', 'GA', '30314', '50 Sunset Avenue', '50 Sunset Avenue', NULL, '6', '9', 'Y', 'Y', 'Father', 'Surjit', 'Chawla', '678-28-6398', '678-879-4500 Ext 143', NULL, NULL, NULL, '50 Sunset Avenue', NULL, 'Atlanta', 'GA', '30314', 'Mother', 'Sunita', 'Chawla', '678-28-6398', NULL, NULL, NULL, 'Y', '50 Sunset Avenue', NULL, 'Atlanta', 'GA', '30314'),
(5, NULL, NULL, NULL, NULL, NULL, NULL, '30316', NULL, 'Atlanta', 'GA', NULL, 'Atlanta', 'GA', '30316', '1273 Metropolitan Avenue', '1273 Metropolitan Avenue', NULL, '4', '22', 'Y', 'Y', 'Father', 'Graham', 'Chowksy', NULL, NULL, NULL, NULL, 'Y', '1273 Metropolitan Avenue', NULL, 'Atlanta', 'GA', '30316', 'Mother', 'Sophia', 'Chowksy', NULL, NULL, NULL, NULL, 'Y', '1273 Metropolitan Avenue', NULL, 'Atlanta', 'GA', '30316'),
(6, NULL, NULL, NULL, NULL, NULL, NULL, '30315', NULL, 'Atlanta', 'GA', NULL, 'Atlanta', 'GA', '30315', '1590 Jonesboro Road Southeast', '1590 Jonesboro Road Southeast', NULL, '5', '8', 'Y', 'Y', 'Mother', 'Evilyn', 'Dillard', '404-524-3260', '404-324-6000', '404-524-3290', 'evilyn@email.com', 'Y', '1590 Jonesboro Road Southeast', NULL, 'Atlanta', 'GA', '30315', 'Father', 'Charles William', 'Dillard', '404-524-3260', '404-864-3277', '404-764-3253', 'charles@email.com', 'Y', '1590 Jonesboro Road Southeast', NULL, 'Atlanta', 'GA', '30315'),
(7, NULL, NULL, NULL, NULL, NULL, NULL, '30310', NULL, 'Atlanta', 'GA', NULL, 'Atlanta', 'GA', '30310', '848 Oglethorpe Avenue Southwest', '848 Oglethorpe Avenue Southwest', NULL, '3', '22', 'Y', 'Y', 'Father', 'Walid', 'Elabassi', '404-835-5472', '404-555-6856', '404-777-3467', 'walid@email.com', 'Y', '848 Oglethorpe Avenue Southwest', NULL, 'Atlanta', 'GA', '30310', 'Mother', 'Khaleda', 'Elabassi', '404-835-5472', NULL, NULL, 'khaleda@email.com', 'Y', '848 Oglethorpe Avenue Southwest', NULL, 'Atlanta', 'GA', '30310'),
(8, NULL, NULL, NULL, NULL, NULL, NULL, '30344', NULL, 'East Point', 'GA', NULL, 'East Point', 'GA', '30344', '2905 East Point Street', '2905 East Point Street', NULL, '2', '31', 'Y', 'Y', 'Grandmother', 'Gladys', 'Harper', '404-305-9259', '678-232-4300', '678-834-9734', 'harper22@email.com', 'Y', '2905 East Point Street', NULL, 'East Point', 'GA', '30344', 'Other Family Member', 'Amelia', 'Donlan', '404-555-1212', '404-864-3277', '404-764-3453', 'Amelia@email.com', NULL, '3799 Main Street', 'Unit # 50', 'College PArk', 'GA', '30337'),
(9, NULL, NULL, NULL, NULL, 'Condo 25', NULL, '30303', NULL, 'Atlanta', 'GA', 'Condo 25', 'Atlanta', 'GA', '30303', '400 Pryor Street Southwest', '400 Pryor Street Southwest', NULL, '11', '8', 'Y', 'Y', 'Step Mother', 'Eva', 'Hall', '770-735-9724', NULL, NULL, 'eva34@email.com', 'Y', '400 Pryor Street Southwest', 'Condo 25', 'Atlanta', 'GA', '30303', 'Father', 'Emerson', 'Hall', '770-735-9724', '404-864-3277', '404-764-3253', 'hall@email.com', 'Y', '400 Pryor Street Southwest', 'Condo 25', 'Atlanta', 'GA', '30303'),
(10, NULL, NULL, NULL, NULL, NULL, NULL, '30032', NULL, 'Decatur', 'GA', NULL, 'Decatur', 'GA', '30032', '3651 Memorial Drive', 'P.O. Bob 8755', NULL, '12', '10', 'Y', 'Y', 'Mother', 'Laruen', 'Mellon', '678-124-2142', '678-877-9000', '404-762-9573', 'laureen@email.com', 'Y', '3651 Memorial Drive', NULL, 'Decatur', 'GA', '30032', 'Step Father', 'Benjamin', 'Ellis', '678-124-2142', '404-213-4376', '404-764-3253', 'Benjamin@email.com', NULL, '3651 Memorial Drive', NULL, 'Decatur', 'GA', '30032'),
(11, NULL, NULL, NULL, NULL, 'Apt 12A', NULL, '30030', NULL, 'Decatur', 'GA', 'Apt 12A', 'Decatur', 'GA', '30030', '141 East College Avenue', '141 East College Avenue', NULL, '9', '10', 'Y', 'Y', 'Mother', 'Victoria', 'Milton', '404-471-6349', '678-232-4900', '678-834-9342', 'Victoria@email.com', 'Y', '141 East College Avenue', 'Apt 12A', 'Decatur', 'GA', '30030', 'Father', 'Robert', 'Milton', '404-471-6349', '404-864-4400 XT 5789', '404-123-3253', 'robert@email.com', 'Y', '141 East College Avenue', 'Apt 12A', 'Decatur', 'GA', '30030'),
(12, NULL, NULL, NULL, NULL, 'Apt 77', NULL, '30318', NULL, 'Atlanta', 'GA', 'Apt 77', 'Atlanta', 'GA', '30318', '967 Brady Avenue Northwest', '967 Brady Avenue Northwest', NULL, '8', NULL, NULL, NULL, 'Father', 'Fernando', 'Rodriguez', '678-213-9815', '678-835-7245', '404-916-5522', 'fernando@email.com', 'Y', '967 Brady Avenue Northwest', 'Apt 77', 'Atlanta', 'GA', '30318', 'Mother', 'Araceli', 'Rodriguez', '678-213-9815', NULL, NULL, 'araceli@email.com', 'Y', '967 Brady Avenue Northwest', 'Apt 77', 'Atlanta', 'GA', '30318');

--
-- Dumping data for table `app`
--

INSERT INTO `app` (`name`, `value`) VALUES
('version', '5.0'),
('date', 'June 02, 2012'),
('build', '00202012002'),
('update', '1'),
('last_updated', 'June 02, 2012');

--
-- Dumping data for table `attendance_calendar`
--

INSERT INTO `attendance_calendar` (`syear`, `school_id`, `school_date`, `minutes`, `block`, `calendar_id`) VALUES
('2011', '1', '2011-08-08', '999', NULL, '1'),
('2011', '1', '2011-08-09', '999', NULL, '1'),
('2011', '1', '2011-08-10', '999', NULL, '1'),
('2011', '1', '2011-08-11', '999', NULL, '1'),
('2011', '1', '2011-08-12', '999', NULL, '1'),
('2011', '1', '2011-08-15', '999', NULL, '1'),
('2011', '1', '2011-08-16', '999', NULL, '1'),
('2011', '1', '2011-08-17', '999', NULL, '1'),
('2011', '1', '2011-08-18', '999', NULL, '1'),
('2011', '1', '2011-08-19', '999', NULL, '1'),
('2011', '1', '2011-08-22', '999', NULL, '1'),
('2011', '1', '2011-08-23', '999', NULL, '1'),
('2011', '1', '2011-08-24', '999', NULL, '1'),
('2011', '1', '2011-08-25', '999', NULL, '1'),
('2011', '1', '2011-08-26', '999', NULL, '1'),
('2011', '1', '2011-08-29', '999', NULL, '1'),
('2011', '1', '2011-08-30', '999', NULL, '1'),
('2011', '1', '2011-08-31', '999', NULL, '1'),
('2011', '1', '2011-09-01', '999', NULL, '1'),
('2011', '1', '2011-09-02', '999', NULL, '1'),
('2011', '1', '2011-09-05', '999', NULL, '1'),
('2011', '1', '2011-09-06', '999', NULL, '1'),
('2011', '1', '2011-09-07', '999', NULL, '1'),
('2011', '1', '2011-09-08', '999', NULL, '1'),
('2011', '1', '2011-09-09', '999', NULL, '1'),
('2011', '1', '2011-09-12', '999', NULL, '1'),
('2011', '1', '2011-09-13', '999', NULL, '1'),
('2011', '1', '2011-09-14', '999', NULL, '1'),
('2011', '1', '2011-09-15', '999', NULL, '1'),
('2011', '1', '2011-09-16', '999', NULL, '1'),
('2011', '1', '2011-09-19', '999', NULL, '1'),
('2011', '1', '2011-09-20', '999', NULL, '1'),
('2011', '1', '2011-09-21', '999', NULL, '1'),
('2011', '1', '2011-09-22', '999', NULL, '1'),
('2011', '1', '2011-09-23', '999', NULL, '1'),
('2011', '1', '2011-09-26', '999', NULL, '1'),
('2011', '1', '2011-09-27', '999', NULL, '1'),
('2011', '1', '2011-09-28', '999', NULL, '1'),
('2011', '1', '2011-09-29', '999', NULL, '1'),
('2011', '1', '2011-09-30', '999', NULL, '1'),
('2011', '1', '2011-10-03', '999', NULL, '1'),
('2011', '1', '2011-10-04', '999', NULL, '1'),
('2011', '1', '2011-10-05', '999', NULL, '1'),
('2011', '1', '2011-10-06', '999', NULL, '1'),
('2011', '1', '2011-10-07', '999', NULL, '1'),
('2011', '1', '2011-10-10', '999', NULL, '1'),
('2011', '1', '2011-10-11', '999', NULL, '1'),
('2011', '1', '2011-10-12', '999', NULL, '1'),
('2011', '1', '2011-10-13', '999', NULL, '1'),
('2011', '1', '2011-10-14', '999', NULL, '1'),
('2011', '1', '2011-10-17', '999', NULL, '1'),
('2011', '1', '2011-10-18', '999', NULL, '1'),
('2011', '1', '2011-10-19', '999', NULL, '1'),
('2011', '1', '2011-10-20', '999', NULL, '1'),
('2011', '1', '2011-10-21', '999', NULL, '1'),
('2011', '1', '2011-10-24', '999', NULL, '1'),
('2011', '1', '2011-10-25', '999', NULL, '1'),
('2011', '1', '2011-10-26', '999', NULL, '1'),
('2011', '1', '2011-10-27', '999', NULL, '1'),
('2011', '1', '2011-10-28', '999', NULL, '1'),
('2011', '1', '2011-10-31', '999', NULL, '1'),
('2011', '1', '2011-11-01', '999', NULL, '1'),
('2011', '1', '2011-11-02', '999', NULL, '1'),
('2011', '1', '2011-11-03', '999', NULL, '1'),
('2011', '1', '2011-11-04', '999', NULL, '1'),
('2011', '1', '2011-11-07', '999', NULL, '1'),
('2011', '1', '2011-11-08', '999', NULL, '1'),
('2011', '1', '2011-11-09', '999', NULL, '1'),
('2011', '1', '2011-11-10', '999', NULL, '1'),
('2011', '1', '2011-11-11', '999', NULL, '1'),
('2011', '1', '2011-11-14', '999', NULL, '1'),
('2011', '1', '2011-11-15', '999', NULL, '1'),
('2011', '1', '2011-11-16', '999', NULL, '1'),
('2011', '1', '2011-11-17', '999', NULL, '1'),
('2011', '1', '2011-11-18', '999', NULL, '1'),
('2011', '1', '2011-11-21', '999', NULL, '1'),
('2011', '1', '2011-11-22', '999', NULL, '1'),
('2011', '1', '2011-11-23', '999', NULL, '1'),
('2011', '1', '2011-11-24', '999', NULL, '1'),
('2011', '1', '2011-11-25', '999', NULL, '1'),
('2011', '1', '2011-11-28', '999', NULL, '1'),
('2011', '1', '2011-11-29', '999', NULL, '1'),
('2011', '1', '2011-11-30', '999', NULL, '1'),
('2011', '1', '2011-12-01', '999', NULL, '1'),
('2011', '1', '2011-12-02', '999', NULL, '1'),
('2011', '1', '2011-12-05', '999', NULL, '1'),
('2011', '1', '2011-12-06', '999', NULL, '1'),
('2011', '1', '2011-12-07', '999', NULL, '1'),
('2011', '1', '2011-12-08', '999', NULL, '1'),
('2011', '1', '2011-12-09', '999', NULL, '1'),
('2011', '1', '2011-12-12', '999', NULL, '1'),
('2011', '1', '2011-12-13', '999', NULL, '1'),
('2011', '1', '2011-12-14', '999', NULL, '1'),
('2011', '1', '2011-12-15', '999', NULL, '1'),
('2011', '1', '2011-12-16', '999', NULL, '1'),
('2011', '1', '2011-12-19', '999', NULL, '1'),
('2011', '1', '2011-12-20', '999', NULL, '1'),
('2011', '1', '2011-12-21', '999', NULL, '1'),
('2011', '1', '2011-12-22', '999', NULL, '1'),
('2011', '1', '2011-12-23', '999', NULL, '1'),
('2011', '1', '2011-12-26', '999', NULL, '1'),
('2011', '1', '2011-12-27', '999', NULL, '1'),
('2011', '1', '2011-12-28', '999', NULL, '1'),
('2011', '1', '2011-12-29', '999', NULL, '1'),
('2011', '1', '2011-12-30', '999', NULL, '1'),
('2011', '1', '2012-01-02', '999', NULL, '1'),
('2011', '1', '2012-01-03', '999', NULL, '1'),
('2011', '1', '2012-01-04', '999', NULL, '1'),
('2011', '1', '2012-01-05', '999', NULL, '1'),
('2011', '1', '2012-01-06', '999', NULL, '1'),
('2011', '1', '2012-01-09', '999', NULL, '1'),
('2011', '1', '2012-01-10', '999', NULL, '1'),
('2011', '1', '2012-01-11', '999', NULL, '1'),
('2011', '1', '2012-01-12', '999', NULL, '1'),
('2011', '1', '2012-01-13', '999', NULL, '1'),
('2011', '1', '2012-01-16', '999', NULL, '1'),
('2011', '1', '2012-01-17', '999', NULL, '1'),
('2011', '1', '2012-01-18', '999', NULL, '1'),
('2011', '1', '2012-01-19', '999', NULL, '1'),
('2011', '1', '2012-01-20', '999', NULL, '1'),
('2011', '1', '2012-01-23', '999', NULL, '1'),
('2011', '1', '2012-01-24', '999', NULL, '1'),
('2011', '1', '2012-01-25', '999', NULL, '1'),
('2011', '1', '2012-01-26', '999', NULL, '1'),
('2011', '1', '2012-01-27', '999', NULL, '1'),
('2011', '1', '2012-01-30', '999', NULL, '1'),
('2011', '1', '2012-01-31', '999', NULL, '1'),
('2011', '1', '2012-02-01', '999', NULL, '1'),
('2011', '1', '2012-02-02', '999', NULL, '1'),
('2011', '1', '2012-02-03', '999', NULL, '1'),
('2011', '1', '2012-02-06', '999', NULL, '1'),
('2011', '1', '2012-02-07', '999', NULL, '1'),
('2011', '1', '2012-02-08', '999', NULL, '1'),
('2011', '1', '2012-02-09', '999', NULL, '1'),
('2011', '1', '2012-02-10', '999', NULL, '1'),
('2011', '1', '2012-02-13', '999', NULL, '1'),
('2011', '1', '2012-02-14', '999', NULL, '1'),
('2011', '1', '2012-02-15', '999', NULL, '1'),
('2011', '1', '2012-02-16', '999', NULL, '1'),
('2011', '1', '2012-02-17', '999', NULL, '1'),
('2011', '1', '2012-02-20', '999', NULL, '1'),
('2011', '1', '2012-02-21', '999', NULL, '1'),
('2011', '1', '2012-02-22', '999', NULL, '1'),
('2011', '1', '2012-02-23', '999', NULL, '1'),
('2011', '1', '2012-02-24', '999', NULL, '1'),
('2011', '1', '2012-02-27', '999', NULL, '1'),
('2011', '1', '2012-02-28', '999', NULL, '1'),
('2011', '1', '2012-02-29', '999', NULL, '1'),
('2011', '1', '2012-03-01', '999', NULL, '1'),
('2011', '1', '2012-03-02', '999', NULL, '1'),
('2011', '1', '2012-03-05', '999', NULL, '1'),
('2011', '1', '2012-03-06', '999', NULL, '1'),
('2011', '1', '2012-03-07', '999', NULL, '1'),
('2011', '1', '2012-03-08', '999', NULL, '1'),
('2011', '1', '2012-03-09', '999', NULL, '1'),
('2011', '1', '2012-03-12', '999', NULL, '1'),
('2011', '1', '2012-03-13', '999', NULL, '1'),
('2011', '1', '2012-03-14', '999', NULL, '1'),
('2011', '1', '2012-03-15', '999', NULL, '1'),
('2011', '1', '2012-03-16', '999', NULL, '1'),
('2011', '1', '2012-03-19', '999', NULL, '1'),
('2011', '1', '2012-03-20', '999', NULL, '1'),
('2011', '1', '2012-03-21', '999', NULL, '1'),
('2011', '1', '2012-03-22', '999', NULL, '1'),
('2011', '1', '2012-03-23', '999', NULL, '1'),
('2011', '1', '2012-03-26', '999', NULL, '1'),
('2011', '1', '2012-03-27', '999', NULL, '1'),
('2011', '1', '2012-03-28', '999', NULL, '1'),
('2011', '1', '2012-03-29', '999', NULL, '1'),
('2011', '1', '2012-03-30', '999', NULL, '1'),
('2011', '1', '2012-04-02', '999', NULL, '1'),
('2011', '1', '2012-04-03', '999', NULL, '1'),
('2011', '1', '2012-04-04', '999', NULL, '1'),
('2011', '1', '2012-04-05', '999', NULL, '1'),
('2011', '1', '2012-04-06', '999', NULL, '1'),
('2011', '1', '2012-04-09', '999', NULL, '1'),
('2011', '1', '2012-04-10', '999', NULL, '1'),
('2011', '1', '2012-04-11', '999', NULL, '1'),
('2011', '1', '2012-04-12', '999', NULL, '1'),
('2011', '1', '2012-04-13', '999', NULL, '1'),
('2011', '1', '2012-04-16', '999', NULL, '1'),
('2011', '1', '2012-04-17', '999', NULL, '1'),
('2011', '1', '2012-04-18', '999', NULL, '1'),
('2011', '1', '2012-04-19', '999', NULL, '1'),
('2011', '1', '2012-04-20', '999', NULL, '1'),
('2011', '1', '2012-04-23', '999', NULL, '1'),
('2011', '1', '2012-04-24', '999', NULL, '1'),
('2011', '1', '2012-04-25', '999', NULL, '1'),
('2011', '1', '2012-04-26', '999', NULL, '1'),
('2011', '1', '2012-04-27', '999', NULL, '1'),
('2011', '1', '2012-04-30', '999', NULL, '1'),
('2011', '1', '2012-05-01', '999', NULL, '1'),
('2011', '1', '2012-05-02', '999', NULL, '1'),
('2011', '1', '2012-05-03', '999', NULL, '1'),
('2011', '1', '2012-05-04', '999', NULL, '1'),
('2011', '1', '2012-05-07', '999', NULL, '1'),
('2011', '1', '2012-05-08', '999', NULL, '1'),
('2011', '1', '2012-05-09', '999', NULL, '1'),
('2011', '1', '2012-05-10', '999', NULL, '1'),
('2011', '1', '2012-05-11', '999', NULL, '1'),
('2011', '1', '2012-05-14', '999', NULL, '1'),
('2011', '1', '2012-05-15', '999', NULL, '1'),
('2011', '1', '2012-05-16', '999', NULL, '1'),
('2011', '1', '2012-05-17', '999', NULL, '1'),
('2011', '1', '2012-05-18', '999', NULL, '1'),
('2011', '1', '2012-05-21', '999', NULL, '1'),
('2011', '1', '2012-05-22', '999', NULL, '1'),
('2011', '1', '2012-05-23', '999', NULL, '1'),
('2011', '1', '2012-05-24', '999', NULL, '1'),
('2011', '1', '2012-05-25', '999', NULL, '1'),
('2011', '1', '2012-05-28', '999', NULL, '1'),
('2011', '1', '2012-05-29', '999', NULL, '1'),
('2011', '1', '2012-05-30', '999', NULL, '1'),
('2011', '1', '2012-05-31', '999', NULL, '1'),
('2011', '1', '2012-06-01', '999', NULL, '1'),
('2011', '1', '2012-06-04', '999', NULL, '1'),
('2011', '1', '2012-06-05', '999', NULL, '1'),
('2011', '1', '2012-06-06', '999', NULL, '1'),
('2011', '1', '2012-06-07', '999', NULL, '1'),
('2011', '1', '2012-06-08', '999', NULL, '1'),
('2011', '1', '2012-06-11', '999', NULL, '1'),
('2011', '1', '2012-06-12', '999', NULL, '1'),
('2011', '1', '2012-06-13', '999', NULL, '1'),
('2011', '1', '2012-06-14', '999', NULL, '1'),
('2011', '1', '2012-06-15', '999', NULL, '1'),
('2011', '1', '2012-06-18', '999', NULL, '1'),
('2011', '1', '2012-06-19', '999', NULL, '1'),
('2011', '1', '2012-06-20', '999', NULL, '1'),
('2011', '1', '2012-06-21', '999', NULL, '1'),
('2011', '1', '2012-06-22', '999', NULL, '1'),
('2011', '1', '2012-06-25', '999', NULL, '1'),
('2011', '1', '2012-06-26', '999', NULL, '1'),
('2011', '1', '2012-06-27', '999', NULL, '1'),
('2011', '1', '2012-06-28', '999', NULL, '1'),
('2011', '1', '2012-06-29', '999', NULL, '1'),
('2011', '1', '2012-07-02', '999', NULL, '1'),
('2011', '1', '2012-07-03', '999', NULL, '1'),
('2011', '1', '2012-07-04', '999', NULL, '1'),
('2011', '1', '2012-07-05', '999', NULL, '1'),
('2011', '1', '2012-07-06', '999', NULL, '1'),
('2011', '1', '2012-07-09', '999', NULL, '1'),
('2011', '1', '2012-07-10', '999', NULL, '1'),
('2011', '1', '2012-07-11', '999', NULL, '1'),
('2011', '1', '2012-07-12', '999', NULL, '1'),
('2011', '1', '2012-07-13', '999', NULL, '1'),
('2011', '1', '2012-07-16', '999', NULL, '1'),
('2011', '1', '2012-07-17', '999', NULL, '1'),
('2011', '1', '2012-07-18', '999', NULL, '1'),
('2011', '1', '2012-07-19', '999', NULL, '1'),
('2011', '1', '2012-07-20', '999', NULL, '1'),
('2011', '1', '2012-07-23', '999', NULL, '1'),
('2011', '1', '2012-07-24', '999', NULL, '1'),
('2011', '1', '2012-07-25', '999', NULL, '1'),
('2011', '1', '2012-07-26', '999', NULL, '1'),
('2011', '1', '2012-07-27', '999', NULL, '1'),
('2011', '1', '2012-07-30', '999', NULL, '1'),
('2011', '1', '2012-07-31', '999', NULL, '1'),
('2011', '1', '2012-08-01', '999', NULL, '1');

--
-- Dumping data for table `attendance_calendars`
--

INSERT INTO `attendance_calendars` (`school_id`, `title`, `syear`, `calendar_id`, `default_calendar`, `rollover_id`) VALUES
('1', 'Master', '2011', 1, 'Y', NULL);

--
-- Dumping data for table `calendar_events_visibility`
--

INSERT INTO `calendar_events_visibility` (`calendar_id`, `profile_id`, `profile`) VALUES
(1, 0, NULL),
(1, 1, NULL),
(1, 2, NULL),
(1, 3, NULL);

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`syear`, `course_id`, `subject_id`, `school_id`, `grade_level`, `title`, `short_name`, `rollover_id`) VALUES
('2011', 1, '1', '1', NULL, 'English', 'ENG', NULL),
('2011', 2, '1', '1', NULL, 'French', 'FR', NULL),
('2011', 3, '1', '1', NULL, 'Spanish', 'SPA', NULL),
('2011', 4, '2', '1', NULL, 'Music', 'MU', NULL),
('2011', 5, '2', '1', NULL, 'Drawing', 'DRW', NULL),
('2011', 6, '2', '1', NULL, 'Drama', 'DR', NULL),
('2011', 7, '3', '1', NULL, 'Home Room Attendance', 'HR', NULL);

--
-- Dumping data for table `course_periods`
--

INSERT INTO `course_periods` (`syear`, `school_id`, `course_period_id`, `course_id`, `course_weight`, `title`, `short_name`, `period_id`, `mp`, `marking_period_id`, `teacher_id`, `secondary_teacher_id`, `room`, `total_seats`, `filled_seats`, `does_attendance`, `does_honor_roll`, `does_class_rank`, `gender_restriction`, `house_restriction`, `availability`, `parent_id`, `days`, `calendar_id`, `half_day`, `does_breakoff`, `rollover_id`, `grade_scale_id`, `credits`) VALUES
('2011', '1', 1, '6', NULL, 'Period 1 - Sum - MWF - Drama - Parris  Harrison', 'Drama', '1', 'SEM', 14, '3', NULL, 'DR1', '10', '10', NULL, NULL, 'Y', 'N', NULL, NULL, '1', 'MWF', '1', NULL, NULL, NULL, '1', '3.000'),
('2011', '1', 2, '5', NULL, 'Period 1 - Sum - TH - Drawing - Parris  Harrison', 'Drawing', '1', 'SEM', 14, '3', NULL, 'DRW1', '10', '10', NULL, NULL, 'Y', 'N', NULL, NULL, '2', 'TH', '1', NULL, NULL, NULL, '1', '3.000'),
('2011', '1', 3, '4', NULL, 'Period 2 - Sum - MWF - Music - Parris  Harrison', 'Music', '2', 'SEM', 14, '3', NULL, 'MU1', '10', '10', NULL, NULL, NULL, 'N', NULL, NULL, '3', 'MWF', '1', NULL, NULL, NULL, '1', '3.000'),
('2011', '1', 4, '1', NULL, 'Period 2 - Sum - TH - English - Brian  Denver', 'English', '2', 'SEM', 14, '2', NULL, 'ENG1', '10', '10', NULL, NULL, 'Y', 'N', NULL, NULL, '4', 'TH', '1', NULL, NULL, NULL, '1', '3.000'),
('2011', '1', 5, '2', NULL, 'Period 3 - Sum - MWF - French - Brian  Denver', 'French', '3', 'SEM', 14, '2', NULL, 'FR1', '10', '10', NULL, NULL, 'Y', 'N', NULL, NULL, '5', 'MWF', '1', NULL, NULL, NULL, '1', '3.000'),
('2011', '1', 6, '3', NULL, 'Period 3 - Sum - TH - Spanish - Brian  Denver', 'Spanish', '3', 'SEM', 14, '2', NULL, 'SPA1', '10', '10', NULL, NULL, 'Y', 'N', NULL, NULL, '6', 'TH', '1', NULL, NULL, NULL, '1', '3.000'),
('2011', '1', 7, '7', NULL, 'Home Room - Home Room - Parris  Harrison', 'Home Room', '5', 'FY', 1, '3', NULL, 'HR1', '10', '10', NULL, NULL, NULL, 'N', NULL, NULL, '7', 'MTWHF', '1', NULL, NULL, NULL, NULL, NULL);

--
-- Dumping data for table `course_subjects`
--

INSERT INTO `course_subjects` (`syear`, `school_id`, `subject_id`, `title`, `short_name`, `rollover_id`) VALUES
('2011', '1', 1, 'Languages', NULL, NULL),
('2011', '1', 2, 'Arts N Crafts', NULL, NULL),
('2011', '1', 3, 'Home Room Attendance', NULL, NULL);

--
-- Dumping data for table `custom_fields`
--

INSERT INTO `custom_fields` (`id`, `type`, `search`, `title`, `sort_order`, `select_options`, `category_id`, `system_field`, `required`, `default_selection`, `hide`) VALUES
(1, 'text', NULL, 'Ethnicity', '3', NULL, '1', 'Y', NULL, NULL, NULL),
(2, 'text', NULL, 'Common Name', '2', NULL, '1', 'Y', NULL, NULL, NULL),
(3, 'text', NULL, 'Physician', '6', NULL, '2', 'Y', NULL, NULL, NULL),
(4, 'text', NULL, 'Physician Phone', '7', NULL, '2', 'Y', NULL, NULL, NULL),
(5, 'text', NULL, 'Preferred Hospital', '8', NULL, '2', 'Y', NULL, NULL, NULL),
(6, 'text', NULL, 'Gender', '5', NULL, '1', 'Y', NULL, NULL, NULL),
(7, 'text', NULL, 'Email', '6', NULL, '1', 'Y', NULL, NULL, NULL),
(8, 'text', NULL, 'Phone', '9', NULL, '1', 'Y', NULL, NULL, NULL),
(9, 'text', NULL, 'Language', '8', NULL, '1', 'Y', NULL, NULL, NULL);

--
-- Dumping data for table `goal`
--

INSERT INTO `goal` (`goal_id`, `student_id`, `goal_title`, `start_date`, `end_date`, `goal_description`, `school_id`, `syear`) VALUES
(1, '1', 'Learn Notations', '2010-08-23', '2010-09-30', 'Learn how to read notations', '1', '2010');

--
-- Dumping data for table `login_message`
--

INSERT INTO `login_message` (`id`, `message`, `display`) VALUES
(1, 'This is a restricted network. Use of this network, its equipment, and resources is monitored at all times and requires explicit permission from the network administrator. If you do not have this permission in writing, you are violating the regulations of this network and can and will be prosecuted to the fullest extent of law. By continuing into this system, you are acknowledging that you are aware of and agree to these terms.', 'Y');

--
-- Dumping data for table `login_records`
--

INSERT INTO `login_records` (`syear`, `first_name`, `last_name`, `profile`, `user_name`, `login_time`, `faillog_count`, `staff_id`, `id`, `faillog_time`, `ip_address`, `status`, `school_id`) VALUES
('2011', 'John', 'Administrator', 'admin', 'admin', '2012-07-10 01:33:29', NULL, '1', 1, '0000-00-00 00:00:00', '127.0.0.1', 'Success', '1'),
('2011', 'John', 'Administrator', 'admin', 'admin', '2012-07-10 07:54:05', NULL, '1', 2, '0000-00-00 00:00:00', '127.0.0.1', 'Success', '1'),
('2011', 'John', 'Administrator', 'admin', 'admin', '2012-07-10 08:35:29', NULL, '1', 3, '0000-00-00 00:00:00', '127.0.0.1', 'Success', '1'),
('2011', 'John', 'Administrator', 'admin', 'admin', '2012-07-11 02:45:49', NULL, '1', 4, '0000-00-00 00:00:00', '127.0.0.1', 'Success', '1'),
('2011', 'John', 'Administrator', 'admin', 'admin', '2012-07-11 09:31:03', NULL, '1', 5, '0000-00-00 00:00:00', '127.0.0.1', 'Success', '1'),
('2011', 'Brian', 'Denver', 'teacher', 'brian', '2012-07-11 10:01:38', NULL, '2', 6, '0000-00-00 00:00:00', '127.0.0.1', 'Success', '1'),
('2011', 'John', 'Administrator', 'admin', 'admin', '2012-07-12 04:10:00', NULL, '1', 7, '0000-00-00 00:00:00', '127.0.0.1', 'Success', '1'),
(NULL, NULL, NULL, NULL, 'admin', '2012-07-12 07:40:37', NULL, NULL, 8, '2012-07-12 04:10:37', '127.0.0.1', 'Failed', NULL),
('2011', 'John', 'Administrator', 'admin', 'admin', '2012-07-12 04:10:47', NULL, '1', 9, '0000-00-00 00:00:00', '127.0.0.1', 'Success', '1'),
('2011', 'Brian', 'Denver', 'teacher', 'brian', '2012-07-12 04:23:21', NULL, '2', 10, '0000-00-00 00:00:00', '127.0.0.1', 'Success', '1'),
('2011', 'John', 'Administrator', 'admin', 'admin', '2012-07-12 04:24:04', NULL, '1', 11, '0000-00-00 00:00:00', '127.0.0.1', 'Success', '1'),
('2011', 'Brian', 'Denver', 'teacher', 'brian', '2012-07-12 04:24:30', NULL, '2', 12, '0000-00-00 00:00:00', '127.0.0.1', 'Success', '1'),
(NULL, NULL, NULL, NULL, 'admin', '2012-07-13 06:50:17', NULL, NULL, 13, '2012-07-13 03:20:17', '127.0.0.1', 'Failed', NULL),
('2011', 'John', 'Administrator', 'admin', 'admin', '2012-07-13 03:20:25', NULL, '1', 14, '0000-00-00 00:00:00', '127.0.0.1', 'Success', '1'),
(NULL, NULL, NULL, NULL, 'admin', '2012-07-16 09:56:22', NULL, NULL, 15, '2012-07-16 04:26:22', '::1', 'Failed', NULL),
(NULL, NULL, NULL, NULL, 'osed', '2012-07-16 09:56:27', NULL, NULL, 16, '2012-07-16 04:26:27', '::1', 'Failed', NULL),
(NULL, NULL, NULL, NULL, 'admin', '2012-07-16 09:56:32', NULL, NULL, 17, '2012-07-16 04:26:32', '::1', 'Failed', NULL);

--
-- Dumping data for table `log_maintain`
--

INSERT INTO `log_maintain` (`id`, `value`, `session_id`) VALUES
(13, '27842', 'k1eddaommo71384ldafl187ni5');

--
-- Dumping data for table `marking_period_id_generator`
--

INSERT INTO `marking_period_id_generator` (`id`) VALUES
(12),
(13),
(14);

--
-- Dumping data for table `profile_exceptions`
--

INSERT INTO `profile_exceptions` (`profile_id`, `modname`, `can_use`, `can_edit`) VALUES
('1', 'Students/Student.php&category_id=6', 'Y', 'Y'),
('2', 'Students/Student.php&category_id=6', 'Y', NULL),
('0', 'Students/Student.php&category_id=6', 'Y', NULL),
('3', 'Students/Student.php&category_id=6', 'Y', NULL),
('1', 'Users/User.php&category_id=5', 'Y', 'Y'),
('2', 'Users/User.php&category_id=5', 'Y', NULL),
('0', 'School_Setup/Schools.php', 'Y', NULL),
('0', 'School_Setup/Calendar.php', 'Y', NULL),
('0', 'Students/Student.php', 'Y', NULL),
('0', 'Students/Student.php&category_id=1', 'Y', NULL),
('0', 'Students/Student.php&category_id=3', 'Y', NULL),
('0', 'Students/ChangePassword.php', 'Y', NULL),
('0', 'Scheduling/ViewSchedule.php', 'Y', NULL),
('0', 'Scheduling/PrintSchedules.php', 'Y', NULL),
('0', 'Scheduling/Requests.php', 'Y', 'Y'),
('0', 'Grades/StudentGrades.php', 'Y', NULL),
('0', 'Grades/FinalGrades.php', 'Y', NULL),
('0', 'Grades/ReportCards.php', 'Y', NULL),
('0', 'Grades/Transcripts.php', 'Y', NULL),
('0', 'Grades/GPARankList.php', 'Y', NULL),
('0', 'Attendance/StudentSummary.php', 'Y', NULL),
('0', 'Attendance/DailySummary.php', 'Y', NULL),
('0', 'Eligibility/Student.php', 'Y', NULL),
('0', 'Eligibility/StudentList.php', 'Y', NULL),
('1', 'School_Setup/PortalNotes.php', 'Y', 'Y'),
('1', 'School_Setup/Schools.php', 'Y', 'Y'),
('1', 'School_Setup/Schools.php?new_school=true', 'Y', 'Y'),
('1', 'School_Setup/CopySchool.php', 'Y', 'Y'),
('1', 'School_Setup/MarkingPeriods.php', 'Y', 'Y'),
('1', 'School_Setup/Calendar.php', 'Y', 'Y'),
('1', 'School_Setup/Periods.php', 'Y', 'Y'),
('1', 'School_Setup/GradeLevels.php', 'Y', 'Y'),
('1', 'School_Setup/Rollover.php', 'Y', 'Y'),
('1', 'School_Setup/Courses.php', 'Y', 'Y'),
('1', 'School_Setup/CourseCatalog.php', 'Y', 'Y'),
('1', 'School_Setup/PrintCatalog.php', 'Y', 'Y'),
('1', 'School_Setup/PrintCatalogGradeLevel.php', 'Y', 'Y'),
('1', 'School_Setup/PrintAllCourses.php', 'Y', 'Y'),
('1', 'School_Setup/UploadLogo.php', 'Y', 'Y'),
('1', 'School_Setup/TeacherReassignment.php', 'Y', 'Y'),
('1', 'Students/Student.php', 'Y', 'Y'),
('1', 'Students/Student.php&include=General_Info&student_id=new', 'Y', 'Y'),
('1', 'Students/AssignOtherInfo.php', 'Y', 'Y'),
('1', 'Students/AddUsers.php', 'Y', 'Y'),
('1', 'Students/AdvancedReport.php', 'Y', 'Y'),
('1', 'Students/AddDrop.php', 'Y', 'Y'),
('1', 'Students/Letters.php', 'Y', 'Y'),
('1', 'Students/MailingLabels.php', 'Y', 'Y'),
('1', 'Students/StudentLabels.php', 'Y', 'Y'),
('1', 'Students/PrintStudentInfo.php', 'Y', 'Y'),
('1', 'Students/PrintStudentContactInfo.php', 'Y', 'Y'),
('1', 'Students/GoalReport.php', 'Y', 'Y'),
('1', 'Students/StudentFields.php', 'Y', 'Y'),
('1', 'Students/AddressFields.php', 'Y', 'Y'),
('1', 'Students/PeopleFields.php', 'Y', 'Y'),
('1', 'Students/EnrollmentCodes.php', 'Y', 'Y'),
('1', 'Students/Upload.php?modfunc=edit', 'Y', 'Y'),
('1', 'Students/Upload.php', 'Y', 'Y'),
('1', 'Students/Student.php&category_id=1', 'Y', 'Y'),
('1', 'Students/Student.php&category_id=3', 'Y', 'Y'),
('1', 'Students/Student.php&category_id=2', 'Y', 'Y'),
('1', 'Students/Student.php&category_id=4', 'Y', 'Y'),
('1', 'Users/User.php', 'Y', 'Y'),
('1', 'Users/User.php&category_id=1', 'Y', NULL),
('1', 'Users/User.php&staff_id=new', 'Y', 'Y'),
('1', 'Users/AddStudents.php', 'Y', 'Y'),
('1', 'Users/Preferences.php', 'Y', 'Y'),
('1', 'Users/Profiles.php', 'Y', 'Y'),
('1', 'Users/Exceptions.php', 'Y', 'Y'),
('1', 'Users/UserFields.php', 'Y', 'Y'),
('1', 'Users/TeacherPrograms.php?include=Grades/InputFinalGrades.php', 'Y', 'Y'),
('1', 'Users/TeacherPrograms.php?include=Grades/Grades.php', 'Y', 'Y'),
('1', 'Users/TeacherPrograms.php?include=Attendance/TakeAttendance.php', 'Y', 'Y'),
('1', 'Users/TeacherPrograms.php?include=Attendance/Missing_Attendance.php', 'Y', 'Y'),
('1', 'Users/TeacherPrograms.php?include=Eligibility/EnterEligibility.php', 'Y', 'Y'),
('1', 'Scheduling/Schedule.php', 'Y', 'Y'),
('1', 'Scheduling/Requests.php', 'Y', 'Y'),
('1', 'Scheduling/MassSchedule.php', 'Y', 'Y'),
('1', 'Scheduling/MassRequests.php', 'Y', 'Y'),
('1', 'Scheduling/MassDrops.php', 'Y', 'Y'),
('1', 'Scheduling/ScheduleReport.php', 'Y', 'Y'),
('1', 'Scheduling/RequestsReport.php', 'Y', 'Y'),
('1', 'Scheduling/UnfilledRequests.php', 'Y', 'Y'),
('1', 'Scheduling/IncompleteSchedules.php', 'Y', 'Y'),
('1', 'Scheduling/AddDrop.php', 'Y', 'Y'),
('1', 'Scheduling/PrintSchedules.php', 'Y', 'Y'),
('1', 'Scheduling/PrintRequests.php', 'Y', 'Y'),
('1', 'Scheduling/PrintClassLists.php', 'Y', 'Y'),
('1', 'Scheduling/PrintClassPictures.php', 'Y', 'Y'),
('1', 'Scheduling/Courses.php', 'Y', 'Y'),
('1', 'Scheduling/Scheduler.php', 'Y', 'Y'),
('1', 'Grades/ReportCards.php', 'Y', 'Y'),
('1', 'Grades/CalcGPA.php', 'Y', 'Y'),
('1', 'Grades/Transcripts.php', 'Y', 'Y'),
('1', 'Grades/TeacherCompletion.php', 'Y', 'Y'),
('1', 'Grades/GradeBreakdown.php', 'Y', 'Y'),
('1', 'Grades/FinalGrades.php', 'Y', 'Y'),
('1', 'Grades/GPARankList.php', 'Y', 'Y'),
('1', 'Grades/ReportCardGrades.php', 'Y', 'Y'),
('1', 'Grades/ReportCardComments.php', 'Y', 'Y'),
('1', 'Grades/FixGPA.php', 'Y', 'Y'),
('1', 'Grades/EditReportCardGrades.php', 'Y', 'Y'),
('1', 'Grades/EditHistoryMarkingPeriods.php', 'Y', 'Y'),
('1', 'Attendance/Administration.php', 'Y', 'Y'),
('1', 'Attendance/AddAbsences.php', 'Y', 'Y'),
('1', 'Attendance/AttendanceData.php?list_by_day=true', 'Y', 'Y'),
('1', 'Attendance/Percent.php', 'Y', 'Y'),
('1', 'Attendance/Percent.php?list_by_day=true', 'Y', 'Y'),
('1', 'Attendance/DailySummary.php', 'Y', 'Y'),
('1', 'Attendance/StudentSummary.php', 'Y', 'Y'),
('1', 'Attendance/TeacherCompletion.php', 'Y', 'Y'),
('1', 'Attendance/DuplicateAttendance.php', 'Y', 'Y'),
('1', 'Attendance/AttendanceCodes.php', 'Y', 'Y'),
('1', 'Attendance/FixDailyAttendance.php', 'Y', 'Y'),
('1', 'Eligibility/Student.php', 'Y', 'Y'),
('1', 'Eligibility/AddActivity.php', 'Y', 'Y'),
('1', 'Eligibility/StudentList.php', 'Y', 'Y'),
('1', 'Eligibility/TeacherCompletion.php', 'Y', 'Y'),
('1', 'Eligibility/Activities.php', 'Y', 'Y'),
('1', 'Eligibility/EntryTimes.php', 'Y', 'Y'),
('1', 'Tools/LogDetails.php', 'Y', 'Y'),
('1', 'Tools/DeleteLog.php', 'Y', 'Y'),
('1', 'Tools/Backup.php', 'Y', 'Y'),
('1', 'Tools/Rollover.php', 'Y', 'Y'),
('1', 'Students/Upload.php', 'Y', 'Y'),
('1', 'Students/Upload.php?modfunc=edit', 'Y', 'Y'),
('1', 'Scheduling/ViewSchedule.php', 'Y', NULL),
('2', 'School_Setup/Schools.php', 'Y', NULL),
('2', 'School_Setup/MarkingPeriods.php', 'Y', NULL),
('2', 'School_Setup/Calendar.php', 'Y', NULL),
('2', 'Students/Student.php', 'Y', NULL),
('2', 'Students/AddUsers.php', 'Y', NULL),
('2', 'Students/AdvancedReport.php', 'Y', NULL),
('2', 'Students/Student.php&category_id=1', 'Y', NULL),
('2', 'Students/Student.php&category_id=3', 'Y', NULL),
('2', 'Students/Student.php&category_id=4', 'Y', 'Y'),
('2', 'Users/User.php', 'Y', NULL),
('2', 'Users/User.php&category_id=1', 'Y', NULL),
('2', 'Users/User.php&category_id=2', 'Y', NULL),
('2', 'Users/Preferences.php', 'Y', NULL),
('2', 'Scheduling/Schedule.php', 'Y', NULL),
('2', 'Scheduling/PrintSchedules.php', 'Y', NULL),
('2', 'Scheduling/PrintClassLists.php', 'Y', NULL),
('2', 'Scheduling/PrintClassPictures.php', 'Y', NULL),
('2', 'Grades/InputFinalGrades.php', 'Y', NULL),
('2', 'Grades/ReportCards.php', 'Y', NULL),
('2', 'Grades/Grades.php', 'Y', NULL),
('2', 'Grades/Assignments.php', 'Y', NULL),
('2', 'Grades/AnomalousGrades.php', 'Y', NULL),
('2', 'Grades/Configuration.php', 'Y', NULL),
('2', 'Grades/ProgressReports.php', 'Y', NULL),
('2', 'Grades/StudentGrades.php', 'Y', NULL),
('2', 'Grades/FinalGrades.php', 'Y', NULL),
('2', 'Grades/ReportCardGrades.php', 'Y', NULL),
('2', 'Grades/ReportCardComments.php', 'Y', NULL),
('2', 'Attendance/TakeAttendance.php', 'Y', NULL),
('2', 'Attendance/DailySummary.php', 'Y', NULL),
('2', 'Attendance/StudentSummary.php', 'Y', NULL),
('2', 'Eligibility/EnterEligibility.php', 'Y', NULL),
('2', 'Scheduling/ViewSchedule.php', 'Y', NULL),
('3', 'Attendance/StudentSummary.php', 'Y', NULL),
('3', 'Attendance/DailySummary.php', 'Y', NULL),
('3', 'Eligibility/Student.php', 'Y', NULL),
('3', 'Eligibility/StudentList.php', 'Y', NULL),
('3', 'School_Setup/Schools.php', 'Y', NULL),
('3', 'School_Setup/Calendar.php', 'Y', NULL),
('3', 'Students/Student.php', 'Y', NULL),
('3', 'Students/Student.php&category_id=1', 'Y', NULL),
('3', 'Students/Student.php&category_id=3', 'Y', 'Y'),
('3', 'Users/User.php', 'Y', NULL),
('3', 'Users/User.php&category_id=1', 'Y', 'Y'),
('3', 'Users/Preferences.php', 'Y', NULL),
('3', 'Scheduling/ViewSchedule.php', 'Y', NULL),
('3', 'Scheduling/Requests.php', 'Y', 'Y'),
('3', 'Grades/StudentGrades.php', 'Y', NULL),
('3', 'Grades/FinalGrades.php', 'Y', NULL),
('3', 'Grades/ReportCards.php', 'Y', NULL),
('3', 'Grades/Transcripts.php', 'Y', NULL),
('3', 'Grades/GPARankList.php', 'Y', NULL),
('3', 'Users/User.php&category_id=2', 'Y', NULL),
('3', 'Users/User.php&category_id=3', 'Y', NULL),
('1', 'School_Setup/system_preference.php', 'Y', 'Y'),
('1', 'Students/Student.php&category_id=5', 'Y', 'Y'),
('1', 'Grades/HonorRoll.php', 'Y', 'Y'),
('1', 'Users/TeacherPrograms.php?include=Grades/ProgressReports.php', 'Y', 'Y'),
('1', 'Users/User.php&category_id=2', 'Y', NULL),
('1', 'Grades/HonorRollSetup.php', 'Y', 'Y'),
('2', 'School_Setup/Courses.php', 'Y', NULL),
('2', 'School_Setup/CourseCatalog.php', 'Y', NULL),
('2', 'School_Setup/PrintCatalog.php', 'Y', NULL),
('2', 'School_Setup/PrintAllCourses.php', 'Y', NULL),
('2', 'Students/Student.php&category_id=5', 'Y', 'Y'),
('3', 'Students/ChangePassword.php', 'Y', NULL),
('3', 'Scheduling/StudentScheduleReport.php', 'Y', NULL),
('0', 'Users/User.php', 'Y', NULL),
('0', 'Users/Preferences.php', 'Y', NULL),
('0', 'Users/User.php&category_id=1', 'Y', NULL),
('0', 'Users/User.php&category_id=2', 'Y', NULL),
('0', 'Scheduling/StudentScheduleReport.php', 'Y', NULL),
('1', 'Grades/AdminProgressReports.php', 'Y', 'Y');

--
-- Dumping data for table `program_config`
--

INSERT INTO `program_config` (`syear`, `school_id`, `program`, `title`, `value`) VALUES
(NULL, NULL, 'Currency', 'US Dollar (USD)', '1'),
(NULL, NULL, 'Currency', 'British Pound (GBP)', '2'),
(NULL, NULL, 'Currency', 'Euro (EUR)', '3'),
(NULL, NULL, 'Currency', 'Canadian Dollar (CAD)', '4'),
(NULL, NULL, 'Currency', 'Australian Dollar (AUD)', '5'),
(NULL, NULL, 'Currency', 'Brazilian Real (BRL)', '6'),
(NULL, NULL, 'Currency', 'Chinese Yuan Renminbi (CNY)', '7'),
(NULL, NULL, 'Currency', 'Danish Krone (DKK)', '8'),
(NULL, NULL, 'Currency', 'Japanese Yen (JPY)', '9'),
(NULL, NULL, 'Currency', 'Indian Rupee (INR)', '10'),
(NULL, NULL, 'Currency', 'Indonesian Rupiah (IDR)', '11'),
(NULL, NULL, 'Currency', 'Korean Won  (KRW)', '12'),
(NULL, NULL, 'Currency', 'Malaysian Ringit (MYR)', '13'),
(NULL, NULL, 'Currency', 'Mexican Peso (MXN)', '14'),
(NULL, NULL, 'Currency', 'New Zealand Dollar (NZD)', '15'),
(NULL, NULL, 'Currency', 'Norwegian Krone  (NOK)', '16'),
(NULL, NULL, 'Currency', 'Pakistan Rupee  (PKR)', '17'),
(NULL, NULL, 'Currency', 'Philippino Peso (PHP)', '18'),
(NULL, NULL, 'Currency', 'Saudi Riyal (SAR)', '19'),
(NULL, NULL, 'Currency', 'Singapore Dollar (SGD)', '20'),
(NULL, NULL, 'Currency', 'South African Rand  (ZAR)', '21'),
(NULL, NULL, 'Currency', 'Swedish Krona  (SEK)', '22'),
(NULL, NULL, 'Currency', 'Swiss Franc  (CHF)', '23'),
(NULL, NULL, 'Currency', 'Thai Bhat  (THB)', '24'),
(NULL, NULL, 'Currency', 'Turkish Lira  (TRY)', '25'),
(NULL, NULL, 'Currency', 'United Arab Emirates Dirham (AED)', '26'),
(NULL, NULL, 'MissingAttendance', 'LAST_UPDATE','".date('Y-m-d',  strtotime($_SESSION['user_school_beg_date']))."'),
('2010', '1', 'eligibility', 'START_DAY', '1'),
('2010', '1', 'eligibility', 'START_HOUR', '8'),
('2010', '1', 'eligibility', 'START_MINUTE', '00'),
('2010', '1', 'eligibility', 'START_M', 'AM'),
('2010', '1', 'eligibility', 'END_DAY', '5'),
('2010', '1', 'eligibility', 'END_HOUR', '16'),
('2010', '1', 'eligibility', 'END_MINUTE', '00'),
('2010', '1', 'eligibility', 'END_M', 'PM');

--
-- Dumping data for table `program_user_config`
--

INSERT INTO `program_user_config` (`user_id`, `school_id`, `program`, `title`, `value`) VALUES
('1', NULL, 'Preferences', 'THEME', 'Blue'),
('1', NULL, 'Preferences', 'MONTH', 'M'),
('1', NULL, 'Preferences', 'DAY', 'j'),
('1', NULL, 'Preferences', 'YEAR', 'Y'),
('1', NULL, 'Preferences', 'HIDDEN', 'Y'),
('2', NULL, 'Gradebook', '3-6', ''),
('2', NULL, 'Gradebook', '3-5', ''),
('2', NULL, 'Gradebook', '3-4', ''),
('2', NULL, 'Gradebook', '3-3', ''),
('2', NULL, 'Gradebook', '3-2', ''),
('2', NULL, 'Gradebook', '3-1', ''),
('2', NULL, 'Gradebook', 'COMMENT_A', ''),
('2', NULL, 'Gradebook', 'LATENCY', '0'),
('2', NULL, 'Gradebook', 'ANOMALOUS_MAX', '100'),
('2', NULL, 'Gradebook', 'ELIGIBILITY_CUMULITIVE', 'Y'),
('2', NULL, 'Gradebook', 'DEFAULT_ASSIGNED', 'Y'),
('2', NULL, 'Gradebook', 'ASSIGNMENT_SORTING', 'ASSIGNMENT_ID'),
('2', NULL, 'Gradebook', 'ROUNDING', ''),
('2', NULL, 'Gradebook', '3-7', ''),
('2', NULL, 'Gradebook', '3-8', ''),
('2', NULL, 'Gradebook', '3-9', ''),
('2', NULL, 'Gradebook', '3-10', ''),
('2', NULL, 'Gradebook', '3-11', ''),
('2', NULL, 'Gradebook', '3-12', ''),
('2', NULL, 'Gradebook', '3-14', ''),
('2', NULL, 'Gradebook', '3-13', ''),
('2', NULL, 'Gradebook', '3-15', ''),
('2', NULL, 'Preferences', 'HIGHLIGHT', '#f3bb96'),
('2', NULL, 'Preferences', 'MONTH', 'M'),
('2', NULL, 'Preferences', 'DAY', 'j'),
('2', NULL, 'Preferences', 'YEAR', 'Y'),
('2', NULL, 'Preferences', 'HIDDEN', 'Y'),
('2', NULL, 'Preferences', 'THEME', 'Blue'),
('2', NULL, 'Gradebook', 'WEIGHT', 'Y'),
('1', NULL, 'Preferences', 'CURRENCY', '1'),
('8', NULL, 'Preferences', 'THEME', 'Blue'),
('8', NULL, 'Preferences', 'MONTH', 'M'),
('8', NULL, 'Preferences', 'DAY', 'j'),
('8', NULL, 'Preferences', 'YEAR', 'Y'),
('8', NULL, 'Preferences', 'HIDDEN', 'Y'),
('8', NULL, 'Preferences', 'CURRENCY', '1'),
('9', NULL, 'Preferences', 'HIGHLIGHT', '#f3bb96'),
('9', NULL, 'Preferences', 'MONTH', 'M'),
('9', NULL, 'Preferences', 'DAY', 'j'),
('9', NULL, 'Preferences', 'YEAR', 'Y'),
('9', NULL, 'Preferences', 'HIDDEN', 'Y'),
('9', NULL, 'Preferences', 'THEME', 'Blue'),
('9', NULL, 'Gradebook', 'ASSIGNMENT_SORTING', 'ASSIGNMENT_ID'),
('9', NULL, 'Gradebook', 'ANOMALOUS_MAX', '100'),
('9', NULL, 'Gradebook', 'LATENCY', '0'),
('9', NULL, 'Gradebook', 'COMMENT_A', NULL),
('9', NULL, 'Gradebook', 'SEM-31', '40'),
('9', NULL, 'Gradebook', 'SEM-24', '30'),
('9', NULL, 'Gradebook', 'SEM-25', '30'),
('9', NULL, 'Gradebook', 'SEM-E21', NULL),
('9', NULL, 'Gradebook', 'SEM-26', NULL),
('9', NULL, 'Gradebook', 'SEM-27', NULL),
('9', NULL, 'Gradebook', 'SEM-E22', NULL),
('9', NULL, 'Gradebook', 'SEM-28', NULL),
('9', NULL, 'Gradebook', 'SEM-E23', NULL);

--
-- Dumping data for table `report_card_grades`
--

INSERT INTO `report_card_grades` (`id`, `syear`, `school_id`, `title`, `sort_order`, `gpa_value`, `break_off`, `comment`, `grade_scale_id`, `unweighted_gp`) VALUES
(1, '2011', '1', 'A', '1', '0.00', '95', '', '1', '4.00'),
(2, '2011', '1', 'B', '2', '0.00', '85', '', '1', '3.00'),
(3, '2011', '1', 'C', '3', '0.00', '75', '', '1', '2.00'),
(4, '2011', '1', 'D', '4', '0.00', '50', '', '1', '1.00'),
(5, '2011', '1', 'F', '5', '0.00', '0', '', '1', '0.00');

--
-- Dumping data for table `report_card_grade_scales`
--

INSERT INTO `report_card_grade_scales` (`id`, `syear`, `school_id`, `title`, `comment`, `sort_order`, `rollover_id`, `gp_scale`) VALUES
(1, '2011', '1', 'Main', NULL, '1', NULL, '4.000');

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`syear`, `school_id`, `student_id`, `start_date`, `end_date`, `modified_date`, `modified_by`, `course_id`, `course_weight`, `course_period_id`, `mp`, `marking_period_id`, `scheduler_lock`, `dropped`, `id`) VALUES
('2011', '1', '6', '2012-06-04', NULL, '2012-07-10', '1', '6', NULL, '1', 'SEM', 14, NULL, 'N', 1),
('2011', '1', '4', '2012-06-04', NULL, '2012-07-10', '1', '6', NULL, '1', 'SEM', 14, NULL, 'N', 2),
('2011', '1', '5', '2012-06-04', NULL, '2012-07-10', '1', '6', NULL, '1', 'SEM', 14, NULL, 'N', 3),
('2011', '1', '3', '2012-06-04', NULL, '2012-07-10', '1', '6', NULL, '1', 'SEM', 14, NULL, 'N', 4),
('2011', '1', '2', '2012-06-04', NULL, '2012-07-10', '1', '6', NULL, '1', 'SEM', 14, NULL, 'N', 5),
('2011', '1', '11', '2012-06-04', NULL, '2012-07-10', '1', '6', NULL, '1', 'SEM', 14, NULL, 'N', 6),
('2011', '1', '12', '2012-06-04', NULL, '2012-07-10', '1', '6', NULL, '1', 'SEM', 14, NULL, 'N', 7),
('2011', '1', '9', '2012-06-04', NULL, '2012-07-10', '1', '6', NULL, '1', 'SEM', 14, NULL, 'N', 8),
('2011', '1', '8', '2012-06-04', NULL, '2012-07-10', '1', '6', NULL, '1', 'SEM', 14, NULL, 'N', 9),
('2011', '1', '1', '2012-06-04', NULL, '2012-07-10', '1', '6', NULL, '1', 'SEM', 14, NULL, 'N', 10),
('2011', '1', '6', '2012-06-04', NULL, '2012-07-10', '1', '5', NULL, '2', 'SEM', 14, NULL, 'N', 11),
('2011', '1', '4', '2012-06-04', NULL, '2012-07-10', '1', '5', NULL, '2', 'SEM', 14, NULL, 'N', 12),
('2011', '1', '5', '2012-06-04', NULL, '2012-07-10', '1', '5', NULL, '2', 'SEM', 14, NULL, 'N', 13),
('2011', '1', '3', '2012-06-04', NULL, '2012-07-10', '1', '5', NULL, '2', 'SEM', 14, NULL, 'N', 14),
('2011', '1', '2', '2012-06-04', NULL, '2012-07-10', '1', '5', NULL, '2', 'SEM', 14, NULL, 'N', 15),
('2011', '1', '11', '2012-06-04', NULL, '2012-07-10', '1', '5', NULL, '2', 'SEM', 14, NULL, 'N', 16),
('2011', '1', '12', '2012-06-04', NULL, '2012-07-10', '1', '5', NULL, '2', 'SEM', 14, NULL, 'N', 17),
('2011', '1', '9', '2012-06-04', NULL, '2012-07-10', '1', '5', NULL, '2', 'SEM', 14, NULL, 'N', 18),
('2011', '1', '8', '2012-06-04', NULL, '2012-07-10', '1', '5', NULL, '2', 'SEM', 14, NULL, 'N', 19),
('2011', '1', '1', '2012-06-04', NULL, '2012-07-10', '1', '5', NULL, '2', 'SEM', 14, NULL, 'N', 20),
('2011', '1', '6', '2012-06-04', NULL, '2012-07-10', '1', '4', NULL, '3', 'SEM', 14, NULL, 'N', 21),
('2011', '1', '4', '2012-06-04', NULL, '2012-07-10', '1', '4', NULL, '3', 'SEM', 14, NULL, 'N', 22),
('2011', '1', '5', '2012-06-04', NULL, '2012-07-10', '1', '4', NULL, '3', 'SEM', 14, NULL, 'N', 23),
('2011', '1', '3', '2012-06-04', NULL, '2012-07-10', '1', '4', NULL, '3', 'SEM', 14, NULL, 'N', 24),
('2011', '1', '2', '2012-06-04', NULL, '2012-07-10', '1', '4', NULL, '3', 'SEM', 14, NULL, 'N', 25),
('2011', '1', '11', '2012-06-04', NULL, '2012-07-10', '1', '4', NULL, '3', 'SEM', 14, NULL, 'N', 26),
('2011', '1', '12', '2012-06-04', NULL, '2012-07-10', '1', '4', NULL, '3', 'SEM', 14, NULL, 'N', 27),
('2011', '1', '9', '2012-06-04', NULL, '2012-07-10', '1', '4', NULL, '3', 'SEM', 14, NULL, 'N', 28),
('2011', '1', '8', '2012-06-04', NULL, '2012-07-10', '1', '4', NULL, '3', 'SEM', 14, NULL, 'N', 29),
('2011', '1', '1', '2012-06-04', NULL, '2012-07-10', '1', '4', NULL, '3', 'SEM', 14, NULL, 'N', 30),
('2011', '1', '6', '2012-06-04', NULL, '2012-07-10', '1', '1', NULL, '4', 'SEM', 14, NULL, 'N', 31),
('2011', '1', '4', '2012-06-04', NULL, '2012-07-10', '1', '1', NULL, '4', 'SEM', 14, NULL, 'N', 32),
('2011', '1', '5', '2012-06-04', NULL, '2012-07-10', '1', '1', NULL, '4', 'SEM', 14, NULL, 'N', 33),
('2011', '1', '3', '2012-06-04', NULL, '2012-07-10', '1', '1', NULL, '4', 'SEM', 14, NULL, 'N', 34),
('2011', '1', '2', '2012-06-04', NULL, '2012-07-10', '1', '1', NULL, '4', 'SEM', 14, NULL, 'N', 35),
('2011', '1', '11', '2012-06-04', NULL, '2012-07-10', '1', '1', NULL, '4', 'SEM', 14, NULL, 'N', 36),
('2011', '1', '12', '2012-06-04', NULL, '2012-07-10', '1', '1', NULL, '4', 'SEM', 14, NULL, 'N', 37),
('2011', '1', '9', '2012-06-04', NULL, '2012-07-10', '1', '1', NULL, '4', 'SEM', 14, NULL, 'N', 38),
('2011', '1', '8', '2012-06-04', NULL, '2012-07-10', '1', '1', NULL, '4', 'SEM', 14, NULL, 'N', 39),
('2011', '1', '1', '2012-06-04', NULL, '2012-07-10', '1', '1', NULL, '4', 'SEM', 14, NULL, 'N', 40),
('2011', '1', '6', '2012-06-04', NULL, '2012-07-10', '1', '2', NULL, '5', 'SEM', 14, NULL, 'N', 41),
('2011', '1', '4', '2012-06-04', NULL, '2012-07-10', '1', '2', NULL, '5', 'SEM', 14, NULL, 'N', 42),
('2011', '1', '5', '2012-06-04', NULL, '2012-07-10', '1', '2', NULL, '5', 'SEM', 14, NULL, 'N', 43),
('2011', '1', '3', '2012-06-04', NULL, '2012-07-10', '1', '2', NULL, '5', 'SEM', 14, NULL, 'N', 44),
('2011', '1', '2', '2012-06-04', NULL, '2012-07-10', '1', '2', NULL, '5', 'SEM', 14, NULL, 'N', 45),
('2011', '1', '11', '2012-06-04', NULL, '2012-07-10', '1', '2', NULL, '5', 'SEM', 14, NULL, 'N', 46),
('2011', '1', '12', '2012-06-04', NULL, '2012-07-10', '1', '2', NULL, '5', 'SEM', 14, NULL, 'N', 47),
('2011', '1', '9', '2012-06-04', NULL, '2012-07-10', '1', '2', NULL, '5', 'SEM', 14, NULL, 'N', 48),
('2011', '1', '8', '2012-06-04', NULL, '2012-07-10', '1', '2', NULL, '5', 'SEM', 14, NULL, 'N', 49),
('2011', '1', '1', '2012-06-04', NULL, '2012-07-10', '1', '2', NULL, '5', 'SEM', 14, NULL, 'N', 50),
('2011', '1', '6', '2012-06-04', NULL, '2012-07-10', '1', '3', NULL, '6', 'SEM', 14, NULL, 'N', 51),
('2011', '1', '4', '2012-06-04', NULL, '2012-07-10', '1', '3', NULL, '6', 'SEM', 14, NULL, 'N', 52),
('2011', '1', '5', '2012-06-04', NULL, '2012-07-10', '1', '3', NULL, '6', 'SEM', 14, NULL, 'N', 53),
('2011', '1', '3', '2012-06-04', NULL, '2012-07-10', '1', '3', NULL, '6', 'SEM', 14, NULL, 'N', 54),
('2011', '1', '2', '2012-06-04', NULL, '2012-07-10', '1', '3', NULL, '6', 'SEM', 14, NULL, 'N', 55),
('2011', '1', '11', '2012-06-04', NULL, '2012-07-10', '1', '3', NULL, '6', 'SEM', 14, NULL, 'N', 56),
('2011', '1', '12', '2012-06-04', NULL, '2012-07-10', '1', '3', NULL, '6', 'SEM', 14, NULL, 'N', 57),
('2011', '1', '9', '2012-06-04', NULL, '2012-07-10', '1', '3', NULL, '6', 'SEM', 14, NULL, 'N', 58),
('2011', '1', '8', '2012-06-04', NULL, '2012-07-10', '1', '3', NULL, '6', 'SEM', 14, NULL, 'N', 59),
('2011', '1', '1', '2012-06-04', NULL, '2012-07-10', '1', '3', NULL, '6', 'SEM', 14, NULL, 'N', 60),
('2011', '1', '6', '2011-08-08', NULL, '2012-07-12', '1', '7', NULL, '7', 'FY', 1, NULL, 'N', 61),
('2011', '1', '4', '2011-08-08', NULL, '2012-07-12', '1', '7', NULL, '7', 'FY', 1, NULL, 'N', 62),
('2011', '1', '5', '2011-08-08', NULL, '2012-07-12', '1', '7', NULL, '7', 'FY', 1, NULL, 'N', 63),
('2011', '1', '3', '2011-08-08', NULL, '2012-07-12', '1', '7', NULL, '7', 'FY', 1, NULL, 'N', 64),
('2011', '1', '2', '2011-08-08', NULL, '2012-07-12', '1', '7', NULL, '7', 'FY', 1, NULL, 'N', 65),
('2011', '1', '11', '2011-08-08', NULL, '2012-07-12', '1', '7', NULL, '7', 'FY', 1, NULL, 'N', 66),
('2011', '1', '12', '2011-08-08', NULL, '2012-07-12', '1', '7', NULL, '7', 'FY', 1, NULL, 'N', 67),
('2011', '1', '9', '2011-08-08', NULL, '2012-07-12', '1', '7', NULL, '7', 'FY', 1, NULL, 'N', 68),
('2011', '1', '8', '2011-08-08', NULL, '2012-07-12', '1', '7', NULL, '7', 'FY', 1, NULL, 'N', 69),
('2011', '1', '1', '2011-08-08', NULL, '2012-07-12', '1', '7', NULL, '7', 'FY', 1, NULL, 'N', 70);

--
-- Dumping data for table `schools`
--

INSERT INTO `schools` (`id`, `syear`, `title`, `address`, `city`, `state`, `zipcode`, `area_code`, `phone`, `principal`, `www_address`, `e_mail`, `ceeb`, `reporting_gp_scale`) VALUES
(1, '2011', 'Sample High School', '123 High Street', 'Atlanta', 'GA', '3131066', NULL, '454545', 'Dr. Sandra Wilcox', 'www.bohs.com', 'info@bohs.com', NULL, '4.000');

INSERT INTO `schools` (`syear`, `title`, `address`, `city`, `state`, `zipcode`, `area_code`, `phone`, `principal`, `www_address`, `e_mail`, `ceeb`, `reporting_gp_scale`) VALUES
(".$_SESSION['syear'].", '".$_SESSION['sname']."', '', '', '', '', NULL, NULL, '', '', NULL, NULL, NULL);
--
-- Dumping data for table `school_gradelevels`
--

INSERT INTO `school_gradelevels` (`id`, `school_id`, `short_name`, `title`, `next_grade_id`, `sort_order`) VALUES
(1, '1', 'FR', 'Freshman', '2', '1'),
(2, '1', 'SO', 'Sophomore', '3', '2'),
(3, '1', 'JR', 'Junior', '4', '3'),
(4, '1', 'SR', 'Senior', NULL, '4');

--
-- Dumping data for table `school_periods`
--

INSERT INTO `school_periods` (`period_id`, `syear`, `school_id`, `sort_order`, `title`, `short_name`, `length`, `block`, `ignore_scheduling`, `attendance`, `rollover_id`, `start_time`, `end_time`) VALUES
(1, '2011', '1', '2', 'Period 1', 'P1', '45', NULL, NULL, NULL, NULL, '7:00 AM', '7:45 AM'),
(2, '2011', '1', '3', 'Period 2', 'P2', '45', NULL, NULL, NULL, NULL, '8:00 AM', '8:45 AM'),
(3, '2011', '1', '4', 'Period 3', 'P3', '45', NULL, NULL, NULL, NULL, '9:00 AM', '9:45 AM'),
(4, '2011', '1', '5', 'Period 4', 'P4', '45', NULL, NULL, NULL, NULL, '10:00 AM', '10:45 AM'),
(5, '2011', '1', '1', 'Home Room', 'HR', '15', NULL, 'Y', 'Y', NULL, '6:30 AM', '6:45 AM');

--
-- Dumping data for table `school_semesters`
--

INSERT INTO `school_semesters` (`marking_period_id`, `syear`, `school_id`, `year_id`, `title`, `short_name`, `sort_order`, `start_date`, `end_date`, `post_start_date`, `post_end_date`, `does_grades`, `does_exam`, `does_comments`, `rollover_id`) VALUES
(12, '2011', '1', '1', 'Semester 1', 'Sem1', '100', '2011-08-08', '2012-01-13', '2012-01-09', '2012-01-20', 'Y', NULL, NULL, NULL),
(13, '2011', '1', '1', 'Semester 2', 'Sem2', '200', '2012-01-16', '2012-05-25', '2012-05-21', '2012-05-31', 'Y', NULL, NULL, NULL),
(14, '2011', '1', '1', 'Summer Semester', 'Sum', '300', '2012-06-04', '2012-08-01', '2012-07-25', '2012-08-03', 'Y', NULL, NULL, NULL);

--
-- Dumping data for table `school_years`
--

INSERT INTO `school_years` (`marking_period_id`, `syear`, `school_id`, `title`, `short_name`, `sort_order`, `start_date`, `end_date`, `post_start_date`, `post_end_date`, `does_grades`, `does_exam`, `does_comments`, `rollover_id`) VALUES
(1, '2011', '1', 'Full Year', 'FY', '1', '2011-08-08', '2012-08-01', NULL, NULL, NULL, NULL, NULL, NULL);

INSERT INTO `school_years` (`marking_period_id`, `syear`, `school_id`, `title`, `short_name`, `sort_order`, `start_date`, `end_date`, `post_start_date`, `post_end_date`, `does_grades`, `does_exam`, `does_comments`, `rollover_id`) VALUES
('15', '".$_SESSION['syear']."', '2', 'Full Year', 'FY', '1', '".$_SESSION['user_school_beg_date']."', '".$_SESSION['user_school_end_date']."', NULL, NULL, NULL, NULL, NULL, NULL);
--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `syear`, `current_school_id`, `title`, `first_name`, `last_name`, `middle_name`, `username`, `password`, `phone`, `email`, `profile`, `homeroom`, `schools`, `last_login`, `failed_login`, `profile_id`, `rollover_id`, `is_disable`) VALUES
(1, '2011', '1', NULL, 'John', 'Administrator', '', 'admin', '4bde164d3174f2e3f4e1e05193173349', NULL, NULL, 'admin', NULL, ',1,', '2012-07-13', NULL, '1', NULL, NULL),
(2, '2011', '1', 'Mr.', 'Brian', 'Denver', NULL, 'brian', '1d70166035e035a89be194de0f78843c', NULL, NULL, 'teacher', NULL, ',1,', '2012-07-12', NULL, '2', NULL, NULL),
(3, '2011', '1', 'Mrs.', 'Paris', 'Harrison', NULL, 'parris', '0eb9e505a38a871751e34a23b194cd96', NULL, NULL, 'teacher', NULL, ',1,', NULL, NULL, '2', NULL, NULL);

".
 ($_SESSION['syear']>'2011'?
     "INSERT INTO `staff` (`syear`, `current_school_id`, `title`, `first_name`, `last_name`, `middle_name`, `username`, `password`, `phone`, `email`, `profile`, `homeroom`, `schools`, `last_login`, `failed_login`, `profile_id`, `rollover_id`, `is_disable`) VALUES
('".$_SESSION['syear']."', '2', 'Mr.', 'John', 'Administrator', 'A', 'admin', '21232f297a57a5a743894a0e4a801fc3', NULL, NULL, 'admin', NULL, ',1,2,', '2012-05-28', NULL, '1', '1', NULL);":'')
 ."
     
--
-- Dumping data for table `staff_exceptions`
--

INSERT INTO `staff_exceptions` (`user_id`, `modname`, `can_use`, `can_edit`) VALUES
('1', 'School_Setup/PortalNotes.php', 'Y', 'Y'),
('1', 'School_Setup/Schools.php', 'Y', 'Y'),
('1', 'School_Setup/Schools.php?new_school=true', 'Y', 'Y'),
('1', 'School_Setup/CopySchool.php', 'Y', 'Y'),
('1', 'School_Setup/MarkingPeriods.php', 'Y', 'Y'),
('1', 'School_Setup/Calendar.php', 'Y', 'Y'),
('1', 'School_Setup/Periods.php', 'Y', 'Y'),
('1', 'School_Setup/GradeLevels.php', 'Y', 'Y'),
('1', 'School_Setup/Rollover.php', 'Y', 'Y'),
('1', 'Students/Student.php', 'Y', 'Y'),
('1', 'Students/Student.php&include=General_Info&student_id=new', 'Y', 'Y'),
('1', 'Students/AssignOtherInfo.php', 'Y', 'Y'),
('1', 'Students/AddUsers.php', 'Y', 'Y'),
('1', 'Students/AdvancedReport.php', 'Y', 'Y'),
('1', 'Students/AddDrop.php', 'Y', 'Y'),
('1', 'Students/Letters.php', 'Y', 'Y'),
('1', 'Students/MailingLabels.php', 'Y', 'Y'),
('1', 'Students/StudentLabels.php', 'Y', 'Y'),
('1', 'Students/PrintStudentInfo.php', 'Y', 'Y'),
('1', 'Students/StudentFields.php', 'Y', 'Y'),
('1', 'Students/AddressFields.php', 'Y', 'Y'),
('1', 'Students/PeopleFields.php', 'Y', 'Y'),
('1', 'Students/EnrollmentCodes.php', 'Y', 'Y'),
('1', 'Students/Student.php&category_id=1', 'Y', 'Y'),
('1', 'Students/Student.php&category_id=3', 'Y', 'Y'),
('1', 'Students/Student.php&category_id=2', 'Y', 'Y'),
('1', 'Users/User.php', 'Y', 'Y'),
('1', 'Users/User.php&category_id=1', 'Y', 'Y'),
('1', 'Users/User.php&staff_id=new', 'Y', 'Y'),
('1', 'Users/AddStudents.php', 'Y', 'Y'),
('1', 'Users/Preferences.php', 'Y', 'Y'),
('1', 'Users/Profiles.php', 'Y', 'Y'),
('1', 'Users/Exceptions.php', 'Y', 'Y'),
('1', 'Users/UserFields.php', 'Y', 'Y'),
('1', 'Users/TeacherPrograms.php?include=Grades/InputFinalGrades.php', 'Y', 'Y'),
('1', 'Users/TeacherPrograms.php?include=Grades/Grades.php', 'Y', 'Y'),
('1', 'Users/TeacherPrograms.php?include=Attendance/TakeAttendance.php', 'Y', 'Y'),
('1', 'Users/TeacherPrograms.php?include=Eligibility/EnterEligibility.php', 'Y', 'Y'),
('1', 'Scheduling/Schedule.php', 'Y', 'Y'),
('1', 'Scheduling/Requests.php', 'Y', 'Y'),
('1', 'Scheduling/MassSchedule.php', 'Y', 'Y'),
('1', 'Scheduling/MassRequests.php', 'Y', 'Y'),
('1', 'Scheduling/MassDrops.php', 'Y', 'Y'),
('1', 'Scheduling/ScheduleReport.php', 'Y', 'Y'),
('1', 'Scheduling/RequestsReport.php', 'Y', 'Y'),
('1', 'Scheduling/UnfilledRequests.php', 'Y', 'Y'),
('1', 'Scheduling/IncompleteSchedules.php', 'Y', 'Y'),
('1', 'Scheduling/AddDrop.php', 'Y', 'Y'),
('1', 'Scheduling/PrintSchedules.php', 'Y', 'Y'),
('1', 'Scheduling/PrintRequests.php', 'Y', 'Y'),
('1', 'Scheduling/PrintClassLists.php', 'Y', 'Y'),
('1', 'Scheduling/PrintClassPictures.php', 'Y', 'Y'),
('1', 'Scheduling/Courses.php', 'Y', 'Y'),
('1', 'Scheduling/Scheduler.php', 'Y', 'Y'),
('1', 'Grades/ReportCards.php', 'Y', 'Y'),
('1', 'Grades/CalcGPA.php', 'Y', 'Y'),
('1', 'Grades/Transcripts.php', 'Y', 'Y'),
('1', 'Grades/TeacherCompletion.php', 'Y', 'Y'),
('1', 'Grades/GradeBreakdown.php', 'Y', 'Y'),
('1', 'Grades/FinalGrades.php', 'Y', 'Y'),
('1', 'Grades/GPARankList.php', 'Y', 'Y'),
('1', 'Grades/FixGPA.php', 'Y', 'Y'),
('1', 'Attendance/Administration.php', 'Y', 'Y'),
('1', 'Attendance/AddAbsences.php', 'Y', 'Y'),
('1', 'Attendance/Percent.php', 'Y', 'Y'),
('1', 'Attendance/Percent.php?list_by_day=true', 'Y', 'Y'),
('1', 'Attendance/DailySummary.php', 'Y', 'Y'),
('1', 'Attendance/StudentSummary.php', 'Y', 'Y'),
('1', 'Attendance/TeacherCompletion.php', 'Y', 'Y'),
('1', 'Attendance/DuplicateAttendance.php', 'Y', 'Y'),
('1', 'Attendance/AttendanceCodes.php', 'Y', 'Y'),
('1', 'Attendance/FixDailyAttendance.php', 'Y', 'Y'),
('1', 'Eligibility/Student.php', 'Y', 'Y'),
('1', 'Eligibility/AddActivity.php', 'Y', 'Y'),
('1', 'Eligibility/StudentList.php', 'Y', 'Y'),
('1', 'Eligibility/TeacherCompletion.php', 'Y', 'Y'),
('1', 'Eligibility/Activities.php', 'Y', 'Y'),
('1', 'Eligibility/EntryTimes.php', 'Y', 'Y'),
('1', 'Grades/ReportCardComments.php', 'Y', 'Y'),
('1', 'Grades/ReportCardGrades.php', 'Y', 'Y'),
('1', 'Grades/EditReportCardGrades.php', 'Y', 'Y'),
('1', 'Grades/EditHistoryMarkingPeriods.php', 'Y', 'Y'),
('1', 'Grades/EditReportCardGrades.php', 'Y', 'Y'),
('1', 'Grades/EditHistoryMarkingPeriods.php', 'Y', 'Y'),
('1', 'Tools/Update.php', 'Y', 'Y'),
('1', 'Tools/InstallModule.php', 'Y', 'Y'),
('1', 'Tools/Backup.php', 'Y', 'Y'),
('1', 'Tools/Restore.php', 'Y', 'Y'),
('1', 'Tools/LogDetails.php', 'Y', 'Y'),
('1', 'Tools/DeleteLog.php', 'Y', 'Y');

--
-- Dumping data for table `staff_field_categories`
--

INSERT INTO `staff_field_categories` (`id`, `title`, `sort_order`, `include`, `admin`, `teacher`, `parent`, `none`) VALUES
(1, 'General Info', '1', NULL, 'Y', 'Y', 'Y', 'Y'),
(2, 'Schedule', '2', NULL, NULL, 'Y', NULL, NULL);

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `last_name`, `first_name`, `middle_name`, `name_suffix`, `username`, `password`, `last_login`, `failed_login`, `gender`, `ethnicity`, `common_name`, `social_security`, `birthdate`, `language`, `physician`, `physician_phone`, `preferred_hospital`, `estimated_grad_date`, `alt_id`, `email`, `phone`, `is_disable`) VALUES
(1, 'Williams', 'Robert', 'Alexander', NULL, 'student', 'cd73502828457d15655bbd7a63fb0bc8', '2011-07-18', NULL, 'Male', 'White, Non-Hispanic', 'Bob', NULL, '1995-12-04', 'English', 'Dr. Catherine Dragstead', '404-555-1212', 'Kaiser Permanante Gwinnett', '2014-06-04', 'GA1', 'robert@school.edu', '678-555-1212', NULL),
(2, 'Griffin', 'Grace', 'Elizabeth', NULL, 'grace', '15e5c87b18c1289d45bb4a72961b58e8', NULL, NULL, 'Female', 'White, Non-Hispanic', 'Gracy', NULL, '1995-05-27', 'English', NULL, NULL, NULL, '2014-06-04', 'GA2', 'grace@school.edu', '404-555-1212', NULL),
(3, 'Elabassi', 'Kareem', NULL, NULL, 'kareem', 'f3dfcc5c5ba4f2df56175d9fe896f18d', NULL, NULL, 'Male', 'Middle Eastern', 'Kareem', NULL, '1994-03-04', 'Arabic', NULL, NULL, NULL, '2013-06-04', 'GA3', 'kareem@school.edu', '404-555-1212', NULL),
(4, 'Chowksy', 'Monica', 'Daniella', NULL, 'monica', 'ff0d813dd5d2f64dd372c6c4b6aed086', NULL, NULL, 'Female', 'White, Non-Hispanic', 'Monica', NULL, '1993-02-26', 'English', NULL, NULL, NULL, '2012-06-03', 'GA4', 'monica@school.edu', '678-555-1212', NULL),
(5, 'Dillard', 'Ryan', 'Jacob', NULL, 'ryan', '10c7ccc7a4f0aff03c915c485565b9da', NULL, NULL, 'Male', 'Black, Non-Hispanic', 'Ryan', NULL, '1995-06-10', 'English', NULL, NULL, NULL, '2014-06-03', 'GA5', 'Ryan@school.edu', '770-555-1212', NULL),
(6, 'Chawla', 'Mitali', NULL, NULL, 'mitali', '9180cf095734d9749ff5d8f41c89e248', NULL, NULL, 'Female', 'Indian', 'Mita', NULL, '1995-08-05', 'Hindi', NULL, NULL, NULL, '2014-06-03', 'GA6', 'mitali@school.edu', '770-555-1212', NULL),
(7, 'Atkinson', 'Chase', 'William', NULL, 'chase', 'cd8e7918010a87cc619849e00265c9a6', NULL, NULL, 'Male', 'White, Non-Hispanic', 'Chase', NULL, '1992-02-16', 'English', NULL, NULL, NULL, '2011-06-04', 'GA7', 'chase@school.edu', '404-555-1212', NULL),
(8, 'Rodriguez', 'Maria', 'Isabella', NULL, 'maria', '263bce650e68ab4e23f28263760b9fa5', NULL, NULL, 'Female', 'Hispanic', 'Maria', NULL, '1992-04-15', 'Spanish', NULL, NULL, NULL, '2012-06-03', 'GA8', 'maria@school.edu', '678-555-1212', NULL),
(9, 'Milton', 'Lindy', 'E.', NULL, 'lindy', '3616c19bdb82c77557370cb94b40036f', NULL, NULL, 'Female', 'White, Non-Hispanic', 'Lindy', NULL, '1994-04-02', 'English', NULL, NULL, NULL, '2013-06-03', 'GA9', 'lindy@school.edu', '404-555-1212', NULL),
(10, 'Allen', 'Rebecca', 'Josephine', NULL, 'becky', '2a63cc4aef5193e84c0b1c7d8d2abef5', NULL, NULL, 'Female', 'White, Non-Hispanic', 'Becky', NULL, '1993-05-28', 'English', 'Dr Hipkins', '404-555-1212', 'Kaiser Permanante', '2011-06-04', 'GA10', 'becky@school.edu', '770-555-1212', NULL),
(11, 'Hall', 'Joshu', NULL, 'Jr.', 'joshua', 'd1133275ee2118be63a577af759fc052', NULL, NULL, 'Male', 'Black, Non-Hispanic', 'Josh', NULL, '1994-03-24', 'English', NULL, NULL, NULL, '2013-06-03', 'GA11', 'josh@school.edu', '404-555-1212', NULL),
(12, 'Mellon', 'Jeffery', 'Christopher', NULL, 'jeffery', '913013028698f70c12b568ec173f5f86', NULL, NULL, 'Male', 'Black, Non-Hispanic', 'Jeff', NULL, '1993-06-19', 'English', NULL, NULL, NULL, '2012-06-03', 'GA12', 'jeff@school.edu', '404-555-1212', NULL);

--
-- Dumping data for table `students_join_address`
--

INSERT INTO `students_join_address` (`id`, `student_id`, `address_id`, `contact_seq`, `gets_mail`, `primary_residence`, `legal_residence`, `am_bus`, `pm_bus`, `mailing`, `residence`, `bus`, `bus_pickup`, `bus_dropoff`, `bus_no`) VALUES
(1, '1', '1', NULL, NULL, NULL, NULL, NULL, NULL, 'Y', NULL, NULL, NULL, NULL, NULL),
(2, '10', '2', NULL, NULL, NULL, NULL, NULL, NULL, 'Y', NULL, NULL, NULL, NULL, NULL),
(3, '7', '3', NULL, NULL, NULL, NULL, NULL, NULL, 'Y', NULL, NULL, NULL, NULL, NULL),
(4, '6', '4', NULL, NULL, NULL, NULL, NULL, NULL, 'Y', NULL, NULL, NULL, NULL, NULL),
(5, '4', '5', NULL, NULL, NULL, NULL, NULL, NULL, 'Y', NULL, NULL, NULL, NULL, NULL),
(6, '5', '6', NULL, NULL, NULL, NULL, NULL, NULL, 'Y', NULL, NULL, NULL, NULL, NULL),
(7, '3', '7', NULL, NULL, NULL, NULL, NULL, NULL, 'Y', NULL, NULL, NULL, NULL, NULL),
(8, '2', '8', NULL, NULL, NULL, NULL, NULL, NULL, 'Y', NULL, NULL, NULL, NULL, NULL),
(9, '11', '9', NULL, NULL, NULL, NULL, NULL, NULL, 'Y', NULL, NULL, NULL, NULL, NULL),
(10, '12', '10', NULL, NULL, NULL, NULL, NULL, NULL, 'Y', NULL, NULL, NULL, NULL, NULL),
(11, '9', '11', NULL, NULL, NULL, NULL, NULL, NULL, 'Y', NULL, NULL, NULL, NULL, NULL),
(12, '8', '12', NULL, NULL, NULL, NULL, NULL, NULL, 'Y', NULL, NULL, NULL, NULL, NULL);

--
-- Dumping data for table `student_enrollment`
--

INSERT INTO `student_enrollment` (`id`, `syear`, `school_id`, `student_id`, `grade_id`, `start_date`, `end_date`, `enrollment_code`, `drop_code`, `next_school`, `calendar_id`, `last_school`) VALUES
(13, '2011', '1', '1', '2', '2011-08-08', NULL, '2', NULL, '1', '1', '1'),
(14, '2011', '1', '2', '2', '2011-08-08', NULL, '2', NULL, '1', '1', '1'),
(15, '2011', '1', '3', '3', '2011-08-08', NULL, '2', NULL, '1', '1', '1'),
(16, '2011', '1', '4', '4', '2011-08-08', NULL, '2', NULL, '-1', '1', '1'),
(17, '2011', '1', '5', '2', '2011-08-08', NULL, '2', NULL, '1', '1', '1'),
(18, '2011', '1', '6', '2', '2011-08-08', NULL, '2', NULL, '1', '1', '1'),
(19, '2011', '1', '8', '4', '2011-08-08', NULL, '2', NULL, '-1', '1', '1'),
(20, '2011', '1', '9', '3', '2011-08-08', NULL, '2', NULL, '1', '1', '1'),
(21, '2011', '1', '11', '3', '2011-08-08', NULL, '2', NULL, '1', '1', '1'),
(22, '2011', '1', '12', '4', '2011-08-08', NULL, '2', NULL, '-1', '1', '1');

--
-- Dumping data for table `student_enrollment_codes`
--

INSERT INTO `student_enrollment_codes` (`id`, `syear`, `title`, `short_name`, `type`) VALUES
(1, '2011', 'Transferred out', 'TRAN', 'TrnD'),
(2, '2011', 'Transferred in', 'TRAN', 'TrnE'),
(3, '2011', 'Rolled over', 'ROLL', 'Roll');

".
 ($_SESSION['syear']>'2011'?
     "INSERT INTO `student_enrollment_codes` (`syear`, `title`, `short_name`, `type`) VALUES
($_SESSION[syear], 'Transferred out', 'TRAN', 'TrnD'),
($_SESSION[syear], 'Transferred in', 'TRAN', 'TrnE'),
($_SESSION[syear], 'Rolled over', 'ROLL', 'Roll');":'')
 ."

--
-- Dumping data for table `student_field_categories`
--

INSERT INTO `student_field_categories` (`id`, `title`, `sort_order`, `include`) VALUES
(1, 'General Info', '1', NULL),
(2, 'Medical', '3', NULL),
(3, 'Addresses & Contacts', '2', NULL),
(4, 'Comments', '4', NULL),
(5, 'Goals', '6', NULL);

--
-- Dumping data for table `student_medical`
--

INSERT INTO `student_medical` (`id`, `student_id`, `type`, `medical_date`, `comments`) VALUES
(1, '1', 'Immunization', '2010-04-15', 'H1N1'),
(2, '1', 'Immunization', '2010-07-24', 'Flue shot');

--
-- Dumping data for table `student_medical_alerts`
--

INSERT INTO `student_medical_alerts` (`id`, `student_id`, `title`, `alert_date`) VALUES
(1, '1', 'Allergic to MSG', '2010-08-09');

--
-- Dumping data for table `student_medical_notes`
--

INSERT INTO `student_medical_notes` (`id`, `student_id`, `doctors_note_date`, `doctors_note_comments`) VALUES
(1, '1', '2010-08-09', 'Has slight fever due to common cold, taking antibiotics');

--
-- Dumping data for table `system_preference`
--

INSERT INTO `system_preference` (`id`, `school_id`, `full_day_minute`, `half_day_minute`) VALUES
(1, 1, 300, 150);

--
-- Dumping data for table `user_profiles`
--

INSERT INTO `user_profiles` (`profile`, `title`) VALUES
('student', 'Student');
UPDATE  `user_profiles` SET  `id` =  '0' ;
ALTER TABLE  `user_profiles` AUTO_INCREMENT=1;

INSERT INTO `user_profiles` (`profile`, `title`) VALUES
('admin', 'Administrator'),
('teacher', 'Teacher'),
('parent', 'Parent');

";

	$sqllines = split("\n",$text);
	$cmd = '';
	foreach($sqllines as $l)
	{
		if(preg_match('/^\s*--/',$l) == 0)
		{
			$cmd .= ' ' . $l . "\n";
			if(preg_match('/.+;/',$l) != 0)
			{
				$result = mysql_query($cmd);
				$cmd = '';
			}
		}
	}

?>

