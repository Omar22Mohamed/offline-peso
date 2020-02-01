-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2020 at 11:24 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `offline_peso`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `UserID` int(11) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `FullName` varchar(255) NOT NULL,
  `GroupID` int(11) NOT NULL DEFAULT 0,
  `Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`UserID`, `Username`, `Password`, `FullName`, `GroupID`, `Date`) VALUES
(1, 'Omar', '2cfe534aa66900e81f6f20b02826b6132d2df8de', 'Omar Mohamed', 1, '2019-11-16 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `applicant_nsrp`
--

CREATE TABLE `applicant_nsrp` (
  `App_ID` int(11) NOT NULL,
  `SurName` varchar(255) CHARACTER SET utf8 NOT NULL,
  `FirstName` varchar(255) CHARACTER SET utf8 NOT NULL,
  `MidName` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Suffix` varchar(255) CHARACTER SET utf8 NOT NULL,
  `DOB` varchar(255) CHARACTER SET utf8 NOT NULL,
  `POB` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Sex` varchar(255) CHARACTER SET utf8 NOT NULL,
  `CivilStatus` varchar(255) CHARACTER SET utf8 NOT NULL,
  `TIN` varchar(255) CHARACTER SET utf8 NOT NULL,
  `GSIS_SSS_ID` varchar(255) CHARACTER SET utf8 NOT NULL,
  `PagIbigNo` varchar(255) CHARACTER SET utf8 NOT NULL,
  `PhilHealthNo` varchar(255) CHARACTER SET utf8 NOT NULL,
  `HouseNo` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Barangay` varchar(255) CHARACTER SET utf8 NOT NULL,
  `MunicipalityCity` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Province` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Height` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Email` varchar(255) CHARACTER SET utf8 NOT NULL,
  `LandlineNumber` varchar(255) CHARACTER SET utf8 NOT NULL,
  `CellphoneNumber` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Disability` varchar(255) CHARACTER SET utf8 NOT NULL,
  `OtherDisability` varchar(255) CHARACTER SET utf8 NOT NULL,
  `EmploymentStatus` varchar(255) CHARACTER SET utf8 NOT NULL,
  `EmploymentType` varchar(255) CHARACTER SET utf8 NOT NULL,
  `EmploymentTypeCountry` varchar(255) CHARACTER SET utf8 NOT NULL,
  `EmploymentTypeOther` varchar(255) CHARACTER SET utf8 NOT NULL,
  `AYALFW` varchar(255) CHARACTER SET utf8 NOT NULL,
  `HLHYBLFW` varchar(255) CHARACTER SET utf8 NOT NULL,
  `WTWI` varchar(255) CHARACTER SET utf8 NOT NULL,
  `INW` varchar(255) CHARACTER SET utf8 NOT NULL,
  `AYAB` varchar(255) CHARACTER SET utf8 NOT NULL,
  `IYHIDNO` varchar(255) CHARACTER SET utf8 NOT NULL,
  `PrefOccu1` varchar(255) CHARACTER SET utf8 NOT NULL,
  `PrefOccu2` varchar(255) CHARACTER SET utf8 NOT NULL,
  `PrefOccu3` varchar(255) CHARACTER SET utf8 NOT NULL,
  `PrefOccu4` varchar(255) CHARACTER SET utf8 NOT NULL,
  `PrefWorkLoc` varchar(255) CHARACTER SET utf8 NOT NULL,
  `PrefWorkLoc1` varchar(255) CHARACTER SET utf8 NOT NULL,
  `PrefWorkLoc2` varchar(255) CHARACTER SET utf8 NOT NULL,
  `PrefWorkLoc3` varchar(255) CHARACTER SET utf8 NOT NULL,
  `ExpSalary` varchar(255) CHARACTER SET utf8 NOT NULL,
  `PassportNo` varchar(255) CHARACTER SET utf8 NOT NULL,
  `ExpiryDate` varchar(255) CHARACTER SET utf8 NOT NULL,
  `EnglishLang` varchar(255) CHARACTER SET utf8 NOT NULL,
  `FilipinoLang` varchar(255) CHARACTER SET utf8 NOT NULL,
  `OtherLang` varchar(255) CHARACTER SET utf8 NOT NULL,
  `OtherLangCheck` varchar(255) CHARACTER SET utf8 NOT NULL,
  `EleSchool` varchar(255) CHARACTER SET utf8 NOT NULL,
  `SecSchool` varchar(255) CHARACTER SET utf8 NOT NULL,
  `TertSchool` varchar(255) CHARACTER SET utf8 NOT NULL,
  `GradSchool` varchar(255) CHARACTER SET utf8 NOT NULL,
  `EleCourse` varchar(255) CHARACTER SET utf8 NOT NULL,
  `SecCourse` varchar(255) CHARACTER SET utf8 NOT NULL,
  `TertCourse` varchar(255) CHARACTER SET utf8 NOT NULL,
  `GradCourse` varchar(255) CHARACTER SET utf8 NOT NULL,
  `EleYearGrad` varchar(255) CHARACTER SET utf8 NOT NULL,
  `SecYearGrad` varchar(255) CHARACTER SET utf8 NOT NULL,
  `TertYearGrad` varchar(255) CHARACTER SET utf8 NOT NULL,
  `GradYearGrad` varchar(255) CHARACTER SET utf8 NOT NULL,
  `EleWhatLevel` varchar(255) CHARACTER SET utf8 NOT NULL,
  `SecWhatLevel` varchar(255) CHARACTER SET utf8 NOT NULL,
  `TertWhatLevel` varchar(255) CHARACTER SET utf8 NOT NULL,
  `GradWhatLevel` varchar(255) CHARACTER SET utf8 NOT NULL,
  `EleLast` varchar(255) CHARACTER SET utf8 NOT NULL,
  `SecLast` varchar(255) CHARACTER SET utf8 NOT NULL,
  `TertLast` varchar(255) CHARACTER SET utf8 NOT NULL,
  `GradLast` varchar(255) CHARACTER SET utf8 NOT NULL,
  `EleAward` varchar(255) CHARACTER SET utf8 NOT NULL,
  `SecAward` varchar(255) CHARACTER SET utf8 NOT NULL,
  `TertAward` varchar(255) CHARACTER SET utf8 NOT NULL,
  `GradAward` varchar(255) CHARACTER SET utf8 NOT NULL,
  `TraiVocCourse1` varchar(255) CHARACTER SET utf8 NOT NULL,
  `TraiVocCourse2` varchar(255) CHARACTER SET utf8 NOT NULL,
  `TraiVocCourse3` varchar(255) CHARACTER SET utf8 NOT NULL,
  `TraiVocDuration1` varchar(255) CHARACTER SET utf8 NOT NULL,
  `TraiVocDuration2` varchar(255) CHARACTER SET utf8 NOT NULL,
  `TraiVocDuration3` varchar(255) CHARACTER SET utf8 NOT NULL,
  `TraiInstitution1` varchar(255) CHARACTER SET utf8 NOT NULL,
  `TraiInstitution2` varchar(255) CHARACTER SET utf8 NOT NULL,
  `TraiInstitution3` varchar(255) CHARACTER SET utf8 NOT NULL,
  `CertReceived1` varchar(255) CHARACTER SET utf8 NOT NULL,
  `CertReceived2` varchar(255) CHARACTER SET utf8 NOT NULL,
  `CertReceived3` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `applicant_nsrp2`
--

CREATE TABLE `applicant_nsrp2` (
  `Eligibility1` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Eligibility2` varchar(255) CHARACTER SET utf8 NOT NULL,
  `EligRating1` varchar(255) CHARACTER SET utf8 NOT NULL,
  `EligRating2` varchar(255) CHARACTER SET utf8 NOT NULL,
  `EligDateOE1` varchar(255) CHARACTER SET utf8 NOT NULL,
  `EligDateOE2` varchar(255) CHARACTER SET utf8 NOT NULL,
  `ProLicense1` varchar(255) CHARACTER SET utf8 NOT NULL,
  `ProLicense2` varchar(255) CHARACTER SET utf8 NOT NULL,
  `ProLicenseValUnt1` varchar(255) CHARACTER SET utf8 NOT NULL,
  `ProLicenseValUnt2` varchar(255) CHARACTER SET utf8 NOT NULL,
  `CompanyName1` varchar(255) CHARACTER SET utf8 NOT NULL,
  `CompanyName2` varchar(255) CHARACTER SET utf8 NOT NULL,
  `CompanyName3` varchar(255) CHARACTER SET utf8 NOT NULL,
  `CompanyName4` varchar(255) CHARACTER SET utf8 NOT NULL,
  `CompanyName5` varchar(255) CHARACTER SET utf8 NOT NULL,
  `CompanyAddress1` varchar(255) CHARACTER SET utf8 NOT NULL,
  `CompanyAddress2` varchar(255) CHARACTER SET utf8 NOT NULL,
  `CompanyAddress3` varchar(255) CHARACTER SET utf8 NOT NULL,
  `CompanyAddress4` varchar(255) CHARACTER SET utf8 NOT NULL,
  `CompanyAddress5` varchar(255) CHARACTER SET utf8 NOT NULL,
  `WorkPosition1` varchar(255) CHARACTER SET utf8 NOT NULL,
  `WorkPosition2` varchar(255) CHARACTER SET utf8 NOT NULL,
  `WorkPosition3` varchar(255) CHARACTER SET utf8 NOT NULL,
  `WorkPosition4` varchar(255) CHARACTER SET utf8 NOT NULL,
  `WorkPosition5` varchar(255) CHARACTER SET utf8 NOT NULL,
  `WorkInclusiveDates1` varchar(255) CHARACTER SET utf8 NOT NULL,
  `WorkInclusiveDates2` varchar(255) CHARACTER SET utf8 NOT NULL,
  `WorkInclusiveDates3` varchar(255) CHARACTER SET utf8 NOT NULL,
  `WorkInclusiveDates4` varchar(255) CHARACTER SET utf8 NOT NULL,
  `WorkInclusiveDates5` varchar(255) CHARACTER SET utf8 NOT NULL,
  `WorkStatus1` varchar(255) CHARACTER SET utf8 NOT NULL,
  `WorkStatus2` varchar(255) CHARACTER SET utf8 NOT NULL,
  `WorkStatus3` varchar(255) CHARACTER SET utf8 NOT NULL,
  `WorkStatus4` varchar(255) CHARACTER SET utf8 NOT NULL,
  `WorkStatus5` varchar(255) CHARACTER SET utf8 NOT NULL,
  `AutoMechanic` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Beautician` varchar(255) CHARACTER SET utf8 NOT NULL,
  `CarpentryWork` varchar(255) CHARACTER SET utf8 NOT NULL,
  `ComputerLiterate` varchar(255) CHARACTER SET utf8 NOT NULL,
  `DomesticChores` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Driver` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Electrician` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Embroidery` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Gardening` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Masonry` varchar(255) CHARACTER SET utf8 NOT NULL,
  `PainterArtist` varchar(255) CHARACTER SET utf8 NOT NULL,
  `PaintingJobs` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Photography` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Plumbing` varchar(255) CHARACTER SET utf8 NOT NULL,
  `SewingDresses` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Stenography` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Tailoring` varchar(255) CHARACTER SET utf8 NOT NULL,
  `OtherSkill` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `employer_nsrp`
--

CREATE TABLE `employer_nsrp` (
  `Emp_ID` int(11) NOT NULL,
  `Estab_Name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Acron_Abbrev` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Tax_ID` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Emp_Type` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Total_Work` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Line_Business` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Address` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Barangay` varchar(255) CHARACTER SET utf8 NOT NULL,
  `City_Muni` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Province` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Contact_Per` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Position` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Tel_No` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Mob_No` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Fax_No` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Email` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employer_nsrp`
--

INSERT INTO `employer_nsrp` (`Emp_ID`, `Estab_Name`, `Acron_Abbrev`, `Tax_ID`, `Emp_Type`, `Total_Work`, `Line_Business`, `Address`, `Barangay`, `City_Muni`, `Province`, `Title`, `Contact_Per`, `Position`, `Tel_No`, `Mob_No`, `Fax_No`, `Email`, `Date`) VALUES
(2, 'Super Market', 'SM', '101010', 'Private', 'Large (200 and up)', '202020', 'Street 1', '77', 'Legazpi City', 'Albay', 'Mr', 'A M O', 'HR', '', '09186455311', '656565545459898987878', 'mine@gmail.com', '2019-11-15'),
(3, 'Super Market', 'SM', '101010', 'Private', 'Large (200 and up)', '202020', 'Street 1', '77', 'Legazpi City', 'Albay', 'Mr', 'A M O', 'HR', '', '09186455311', '656565545459898987878', 'mine@gmail.com', '2019-12-25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`UserID`),
  ADD UNIQUE KEY `Username` (`Username`),
  ADD KEY `Username_2` (`Username`);

--
-- Indexes for table `applicant_nsrp`
--
ALTER TABLE `applicant_nsrp`
  ADD PRIMARY KEY (`App_ID`);

--
-- Indexes for table `employer_nsrp`
--
ALTER TABLE `employer_nsrp`
  ADD PRIMARY KEY (`Emp_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `applicant_nsrp`
--
ALTER TABLE `applicant_nsrp`
  MODIFY `App_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employer_nsrp`
--
ALTER TABLE `employer_nsrp`
  MODIFY `Emp_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
