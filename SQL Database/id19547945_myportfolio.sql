-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2022 at 05:31 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id19547945_myportfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `badges`
--

CREATE TABLE `badges` (
  `BadgeTitle` varchar(255) NOT NULL,
  `BadgeCompletionMonth` varchar(255) DEFAULT NULL,
  `BadgeCompletionYear` int(11) DEFAULT NULL,
  `BadgeIssuingCompanyName` varchar(255) DEFAULT NULL,
  `BadgeAuthorizationCompanyName` varchar(255) DEFAULT NULL,
  `BadgeDescription` longtext DEFAULT NULL,
  `BadgeLink` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `certificates`
--

CREATE TABLE `certificates` (
  `CertificateTitle` varchar(255) NOT NULL,
  `CertificateIssueDate` int(11) DEFAULT NULL,
  `CertificateIssueMonth` varchar(255) DEFAULT NULL,
  `CertificateIssueYear` int(11) DEFAULT NULL,
  `CertificateIssueCompany` varchar(255) DEFAULT NULL,
  `CertificateImageName` varchar(255) DEFAULT NULL,
  `CertificateRemarks` varchar(255) DEFAULT NULL,
  `CertificateDescription` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `CourseCertificateID` varchar(255) NOT NULL,
  `CourseCompletionMonth` varchar(10) DEFAULT NULL,
  `CourseCompletionYear` int(11) DEFAULT NULL,
  `CourseTitle` varchar(255) DEFAULT NULL,
  `CourseCompanyProvider` varchar(255) DEFAULT NULL,
  `CertificateLink` longtext DEFAULT NULL,
  `CertificateCompanyImageName` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `NameOfCollege` varchar(255) DEFAULT NULL,
  `City` varchar(255) DEFAULT NULL,
  `Program` varchar(255) DEFAULT NULL,
  `Department` varchar(255) DEFAULT NULL,
  `StartYear` int(11) DEFAULT NULL,
  `EndYear` int(11) DEFAULT NULL,
  `Score` varchar(30) DEFAULT NULL,
  `EducationCategory` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`NameOfCollege`, `City`, `Program`, `Department`, `StartYear`, `EndYear`, `Score`, `EducationCategory`) VALUES
('Vellore Institute of Technology', 'Vellore', 'Bachelor of Technology', 'Information Technology', 2019, 2023, 'CGPA: 8.58', 'Bachelor\'s Degree'),
('GEAR Innovative International School', 'Bangalore', 'Science', 'Science', 2017, 2019, 'Percentage: 86.6%', 'Pre-University'),
('GEAR Innovative International School', 'Bangalore', '', '', 2016, 2017, 'CGPA: 9.4', 'Matriculation');

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

CREATE TABLE `experience` (
  `ID` int(11) NOT NULL,
  `StartMonth` varchar(10) DEFAULT NULL,
  `StartYear` int(11) DEFAULT NULL,
  `EndMonth` varchar(10) DEFAULT NULL,
  `EndYear` int(11) DEFAULT NULL,
  `Title` varchar(255) DEFAULT NULL,
  `EmploymentType` varchar(255) DEFAULT NULL,
  `CompanyName` varchar(255) DEFAULT NULL,
  `CompanyLink` longtext DEFAULT NULL,
  `Location` varchar(255) DEFAULT NULL,
  `DescriptionOfJob` longtext DEFAULT NULL,
  `NoOfCertificateImages` int(11) DEFAULT NULL,
  `CertificateImageNames` longtext DEFAULT NULL,
  `CertificateImageLinks` longtext DEFAULT NULL,
  `CompanyImageName` varchar(255) DEFAULT NULL,
  `CertificateImageFileNames` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `experience`
--

INSERT INTO `experience` (`ID`, `StartMonth`, `StartYear`, `EndMonth`, `EndYear`, `Title`, `EmploymentType`, `CompanyName`, `CompanyLink`, `Location`, `DescriptionOfJob`, `NoOfCertificateImages`, `CertificateImageNames`, `CertificateImageLinks`, `CompanyImageName`, `CertificateImageFileNames`) VALUES
(1, 'May', 2022, 'Sep', 2022, 'Jr. Developer (Project Lead - ML Division)', 'Internship', 'River Bend Data Solutions', 'https://www.linkedin.com/in/river-bend-data-solutions-3454281b8/?originalSubdomain=in', 'Remote/Online', 'Development of Application to Help Medical Diagnosis.', 1, 'Internship Certificate', 'https://drive.google.com/file/d/1PwdoZc38779VDW_g-_X7GLsdEDDqZIgi/view?usp=share_link', 'RBDS.jpg', 'RBDS/Aashish - RBDS internship certificate _page-0001.jpg'),
(2, 'Jan', 2022, 'Feb', 2022, 'ML Engineer', 'Training & Internship - Data Science', 'NEO 5.0', 'https://neoeducation.in/', 'Remote/Online', 'This was a five week Training & Internship program offered after clearing the Round 1 of NEO5. The project worked on at the end of this Internship is YouTube Adview Prediction.', 4, 'Participation Certificate,Round 1 Clearance Certificate,Certificate of Training,Certificate of Internship', 'https://drive.google.com/file/d/1JEHBHyv9Y2t6csntfyqLgCayfWbqsDdx/view,https://drive.google.com/file/d/1yWDfJYCbwXuxV5pyvjAquVUZtKlIpX0K/view,https://drive.google.com/file/d/1oUYo5C0e2RGCfb9qhfYwx5wZcTUcdyPz/view,https://drive.google.com/file/d/1mxonIQjN5qvQiwz0CoqLm37HoRnEYkwA/view', 'neo.png', 'NEO5/NEO5 - Participation Certificate.jpg,NEO5/NEO5 - Round 1 Clearance Certificate.jpg,NEO5/Certificate of Training/NEO5 - Certificate of Training.jpg,NEO5/Certificate of Internship/NEO5 - Certificate of Internship.jpg'),
(3, 'Oct', 2021, 'Feb', 2022, 'ML Engineer', 'Training & Internship - Data Science', 'Verzeo', 'https://learn.verzeo.in/', 'Remote/Online', 'This was a five week Training & Internship program offered after clearing the Round 1 of NEO5. The project worked on at the end of this Internship is YouTube Adview Prediction. ', 3, 'Course Completion Certificate,Internship Completion Certificate,Outstanding Certificate', 'https://drive.google.com/file/d/1oHalK769MFV7EwNVA6pO-bRL6zA-X1yU/view,https://drive.google.com/file/d/1KMLQFEyVzTX1_8GGCxsXDwAIsrPHY5eK/view,https://drive.google.com/file/d/1g7HfsiuVi9nzR8-cQAFKmnp2NTi9-Aea/view', 'verzeo.png', 'Verzeo DS/Course Completion Certificate/Verzeo DS - Course Completion Certificate - 848621739.jpg,Verzeo DS/Internship Completion Certificate/Verzeo DS - Internship Completion Certificate - 873087021.jpg,Verzeo DS/Outstanding Certificate/Verzeo DS - Outstanding Certificate - 1457460912.jpg'),
(4, 'Sep', 2021, 'Nov', 2021, 'ML Engineer', 'Training & Internship - Data Science', '1stop.ai', 'https://www.1stop.ai/', 'Remote/Online', '', 3, 'Certificate of Participation,Internship Certificate,Project Completion Certificate', 'https://drive.google.com/file/d/1dsmAzyFnFaB9dvim8Oo-M2GzC_NjWO3k/view,https://drive.google.com/file/d/1lemuQhlQRNs2A5FFYZXztMEN5SQTgC62/view,https://drive.google.com/file/d/1w80T8wjJWOaQvr-Y1gLYqXVcPHb-q-Wz/view', '1stop.jpg', '1stop.a1/1stop - Certificate of Participation.jpg,1stop.a1/1stop - Internship Certificate.jpg,1stop.a1/1stop - Project Completion Certificate.jpg'),
(5, 'Sep', 2021, 'Oct', 2021, 'ML Engineer', 'Training & Internship - Data Science', 'YHills', 'https://yhills.thinkific.com/', 'Remote/Online', '', 2, 'Course Completion Certificate,Internship Completion Certificate', 'https://drive.google.com/file/d/1V6x1FZUbTy1-0-riM3fyrsIcKe8xZD_q/view,https://drive.google.com/file/d/1rOTrE_MF6i6ie2fNum5l70R9eHPf1kLs/view', 'yhills_logo.jpg', 'YHills/YHills - Course Completion Certificate.jpg,YHills/YHills - Internship Completion Certificate.jpg'),
(6, 'Mar', 2020, 'Jul', 2020, 'Deep Learning Engineer', 'Training & Internship - Applied Machine Learning & Data Science', 'Indian Institute of Technology, Kanpur', 'http://iitk.ac.in/new/data/iitk/', 'Remote/Online', 'This Internship covered the following areas: Python Foundations, Data Wrangling, Storytelling with Data, Foundations of Machine Learning, Deep Learning, Statistics for Data Science, Natural Language Processing, Miscellaneous Applications, Quizzes and assignments after each module, Capstone Project (Twitter-Sentiment Analysis) ', 2, 'Training & Internship Completion Certificate,Project Certificate', 'https://drive.google.com/file/d/1GCMRYOR93DyWBguRaPqALgHSWt3b77c8/view,https://drive.google.com/file/d/1_5YA13uUlWTQJ55385J9yI__79XhZ9FF/view', 'iitk.jpg', 'IITK Applied Machine Learning and Data Science/IIT Kanpur - Training & Internship Completion Certificate - Aashish Bansal_page-0001.jpg,IITK Applied Machine Learning and Data Science/IIT Kanpur - PROJECT CERTIFICATE Aashish Bansal_page-0001.jpg'),
(7, 'Dec', 2019, 'Jan', 2020, 'ML Engineer', 'Training & Internship - Artificial Intelligence', 'Verzeo', 'https://learn.verzeo.in/', 'Remote/Online', '', 2, 'Course Completion Certificate,Internship certificate', 'https://drive.google.com/file/d/1xQXNHhRxoDS5QCRS5MSmk0XrqiAvw3gy/view,https://drive.google.com/file/d/1zzI9wDlg22RWqZPqy6hfBDQLfMD7RWmw/view', 'verzeo.png', 'Verzeo AI/Verzeo AI - Course Completion Certificate.jpg,Verzeo AI/Verzeo AI - internship certificate.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `ID` int(11) NOT NULL,
  `Title` varchar(50) DEFAULT NULL,
  `DoB` date DEFAULT NULL,
  `Address` varchar(1000) DEFAULT NULL,
  `ZIP_Code` int(11) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Phone` varchar(10) DEFAULT NULL,
  `Subtitle` varchar(2000) DEFAULT NULL,
  `ShowIcones` int(11) DEFAULT NULL,
  `Link_Resume` varchar(1000) DEFAULT NULL,
  `Link_LinkedIn` varchar(1000) DEFAULT NULL,
  `Link_Facebook` varchar(1000) DEFAULT NULL,
  `Link_Instagram` varchar(1000) DEFAULT NULL,
  `Link_YouTube` varchar(1000) DEFAULT NULL,
  `Link_GitHub` varchar(1000) DEFAULT NULL,
  `Link_HackerRank` varchar(1000) DEFAULT NULL,
  `Link_CodeChef` varchar(1000) DEFAULT NULL,
  `Link_CodeForces` varchar(1000) DEFAULT NULL,
  `Link_LeetCode` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`ID`, `Title`, `DoB`, `Address`, `ZIP_Code`, `Email`, `Phone`, `Subtitle`, `ShowIcones`, `Link_Resume`, `Link_LinkedIn`, `Link_Facebook`, `Link_Instagram`, `Link_YouTube`, `Link_GitHub`, `Link_HackerRank`, `Link_CodeChef`, `Link_CodeForces`, `Link_LeetCode`) VALUES
(1, 'Aashish Bansal', '2000-08-22', 'Malout, Punjab, India', 152107, 'developwithaashish@gmail.com', '7829140001', 'I am a Hardworking, Sincere, and Analytical Professional. My Passion is to learn, code, and do sports. As a natural-born go-getter, my passion has continuously driven me to expand my knowledge, experience, and relationships. With a strong background and diverse skill set, I\'m confident in the creative ideas and successful solutions I bring to the table. I am very interested in Coding and Learning. I\'ve always tried to take up challenges and perform my best to improve my skills and efficiency to the highest level possible. I look forward to working with enthusiasm to have a chance to prove myself.', 1, 'https://drive.google.com/file/d/17RgJwHL4MLDQU41nWMK9GmYeGdRbDkAq/view', 'https://linkedin.com/in/aashish22bansal', 'https://facebook.com/aashish22bansal', 'https://instagram.com/aashish2208bansal', 'https://www.youtube.com/channel/UCA8NfnVLMgMz0Q7iqIz4-UQ', 'https://github.com/aashish22bansal', 'https://www.hackerrank.com/aashish22bansal?hr_r=1', 'https://www.codechef.com/users/aashish_bansal', 'https://codeforces.com/profile/aashish22bansal', 'https://leetcode.com/aashish22bansal/');

-- --------------------------------------------------------

--
-- Table structure for table `industryskills`
--

CREATE TABLE `industryskills` (
  `IndustrySkillName` varchar(255) NOT NULL,
  `IndustrySkillImageName` varchar(255) DEFAULT NULL,
  `IndustrySkillCategory` varchar(255) DEFAULT NULL,
  `IndustrySkillProficiency` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `programmingskills`
--

CREATE TABLE `programmingskills` (
  `ProgrammingLanguageName` varchar(255) NOT NULL,
  `ProgrammingLanguageImageName` varchar(255) DEFAULT NULL,
  `ProgrammingLanguageCategory` varchar(255) DEFAULT NULL,
  `ProgrammingLanguageProficiency` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `ID` int(11) NOT NULL,
  `ProjectCode` text NOT NULL,
  `CompletionMonth` varchar(10) DEFAULT NULL,
  `CompletionYear` int(11) DEFAULT NULL,
  `TitleOfProject` text DEFAULT NULL,
  `Company` text DEFAULT NULL,
  `Subject` text NOT NULL,
  `ProjectCategory` varchar(255) DEFAULT NULL,
  `ProjectType` varchar(255) DEFAULT NULL,
  `ProjectDescription` longtext DEFAULT NULL,
  `ProjectCodeLocation` text NOT NULL,
  `ProjectCodeLink` longtext DEFAULT NULL,
  `ProjectDocumentLocation` text NOT NULL,
  `ProjectDocumentLink` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`ID`, `ProjectCode`, `CompletionMonth`, `CompletionYear`, `TitleOfProject`, `Company`, `Subject`, `ProjectCategory`, `ProjectType`, `ProjectDescription`, `ProjectCodeLocation`, `ProjectCodeLink`, `ProjectDocumentLocation`, `ProjectDocumentLink`) VALUES
(1, 'DL02', 'Dec', 2021, 'Skin Cancer Detection using Transfer Learning and Ensemble Modelling', 'VIT', 'Soft Computing', 'Deep Learning', 'College Project', 'Skin Cancer Detection', 'GitHub Repository', 'https://github.com/aashish22bansal/ITE1015-Soft-Computing-Project-Skin-Cancer-Detection', '', 'https://link.springer.com/chapter/10.1007/978-3-030-96302-6_50');

-- --------------------------------------------------------

--
-- Table structure for table `project_categories`
--

CREATE TABLE `project_categories` (
  `ID` int(11) NOT NULL,
  `ProjectCategoryName` text NOT NULL,
  `ProjectCategoryIDName` text NOT NULL,
  `ProjectCategoryImageName` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project_categories`
--

INSERT INTO `project_categories` (`ID`, `ProjectCategoryName`, `ProjectCategoryIDName`, `ProjectCategoryImageName`) VALUES
(1, 'Data Science', 'Data_Science', 'data-science-icon.png'),
(2, 'Machine Learning', 'Machine_Learning', 'machine-learning-logo.png'),
(3, 'Deep Learning', 'Deep_Learning', 'deep learning.jpg'),
(4, 'Android', 'Android', 'Android-Logo.png'),
(5, 'Blockchain', 'Blockchain', 'blockchain.jpg'),
(6, 'Web Development', 'Web_Development', 'web-development-logo.png'),
(7, 'Software Development', 'Software_Development', 'coding-programming.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `publications`
--

CREATE TABLE `publications` (
  `ID` int(11) NOT NULL,
  `PaperTitle` text NOT NULL,
  `PublicationType` text NOT NULL,
  `PublicationLink` text NOT NULL,
  `PublicationDescription` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `publications`
--

INSERT INTO `publications` (`ID`, `PaperTitle`, `PublicationType`, `PublicationLink`, `PublicationDescription`) VALUES
(1, 'Skin Cancer Detection using Transfer Learning and Ensemble Modelling', 'Research Paper', 'https://link.springer.com/chapter/10.1007/978-3-030-96302-6_50', 'Skin Cancer Detection');

-- --------------------------------------------------------

--
-- Table structure for table `section_control`
--

CREATE TABLE `section_control` (
  `ID` int(11) NOT NULL,
  `Home` int(11) DEFAULT NULL,
  `About` int(11) DEFAULT NULL,
  `Education` int(11) DEFAULT NULL,
  `Experience` int(11) DEFAULT NULL,
  `Projects` int(11) DEFAULT NULL,
  `Skills_n_Languages` int(11) DEFAULT NULL,
  `Badges` int(11) DEFAULT NULL,
  `Certificates` int(11) DEFAULT NULL,
  `Courses` int(11) DEFAULT NULL,
  `Organizations` int(11) DEFAULT NULL,
  `Competitions` int(11) DEFAULT NULL,
  `Resume_Link` int(11) DEFAULT NULL,
  `Contact` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `section_control`
--

INSERT INTO `section_control` (`ID`, `Home`, `About`, `Education`, `Experience`, `Projects`, `Skills_n_Languages`, `Badges`, `Certificates`, `Courses`, `Organizations`, `Competitions`, `Resume_Link`, `Contact`) VALUES
(1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `social_media`
--

CREATE TABLE `social_media` (
  `Link_Resume` varchar(1000) DEFAULT NULL,
  `Link_LinkedIn` varchar(1000) DEFAULT NULL,
  `Link_Facebook` varchar(1000) DEFAULT NULL,
  `Link_Instagram` varchar(1000) DEFAULT NULL,
  `Link_YouTube` varchar(1000) DEFAULT NULL,
  `Link_GitHub` varchar(1000) DEFAULT NULL,
  `Link_HackerRank` varchar(1000) DEFAULT NULL,
  `Link_CodeChef` varchar(1000) DEFAULT NULL,
  `Link_CodeForces` varchar(1000) DEFAULT NULL,
  `Link_LeetCode` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `social_media`
--

INSERT INTO `social_media` (`Link_Resume`, `Link_LinkedIn`, `Link_Facebook`, `Link_Instagram`, `Link_YouTube`, `Link_GitHub`, `Link_HackerRank`, `Link_CodeChef`, `Link_CodeForces`, `Link_LeetCode`) VALUES
('https://drive.google.com/file/d/17RgJwHL4MLDQU41nWMK9GmYeGdRbDkAq/view', 'https://linkedin.com/in/aashish22bansal', 'https://facebook.com/aashish22bansal', 'https://instagram.com/aashish2208bansal', 'https://www.youtube.com/channel/UCA8NfnVLMgMz0Q7iqIz4-UQ', 'https://github.com/aashish22bansal', 'https://www.hackerrank.com/aashish22bansal?hr_r=1', 'https://www.codechef.com/users/aashish_bansal', 'https://codeforces.com/profile/aashish22bansal', 'https://leetcode.com/aashish22bansal/');

-- --------------------------------------------------------

--
-- Table structure for table `subjects_matriculation`
--

CREATE TABLE `subjects_matriculation` (
  `SubjectCode` varchar(3) NOT NULL,
  `SubjectName` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subjects_matriculation`
--

INSERT INTO `subjects_matriculation` (`SubjectCode`, `SubjectName`) VALUES
('041', 'Mathematics'),
('085', 'Hindi Course-B'),
('086', 'Science'),
('087', 'Social Studies'),
('101', 'English Communication');

-- --------------------------------------------------------

--
-- Table structure for table `subjects_pre_university`
--

CREATE TABLE `subjects_pre_university` (
  `SubjectCode` varchar(3) NOT NULL,
  `SubjectName` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subjects_pre_university`
--

INSERT INTO `subjects_pre_university` (`SubjectCode`, `SubjectName`) VALUES
('041', 'Mathematics'),
('042', 'Physics'),
('043', 'Chemistry'),
('083', 'Computer Science'),
('301', 'English Core'),
('500', 'Work Experience'),
('502', 'Physical and Health Education'),
('503', 'General Studies');

-- --------------------------------------------------------

--
-- Table structure for table `subjects_undergraduate`
--

CREATE TABLE `subjects_undergraduate` (
  `CourseCode` varchar(7) NOT NULL,
  `CourseTitle` varchar(255) DEFAULT NULL,
  `CourseType` varchar(5) DEFAULT NULL,
  `Semester` int(11) DEFAULT NULL,
  `Credits` int(11) DEFAULT NULL,
  `CourseDistribution` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subjects_undergraduate`
--

INSERT INTO `subjects_undergraduate` (`CourseCode`, `CourseTitle`, `CourseType`, `Semester`, `Credits`, `CourseDistribution`) VALUES
('CHY1002', 'Environmental Sciences', 'TH', 1, 3, 'Non-Credit'),
('CHY1701', 'Engineering Chemistry', 'ETL', 1, 4, 'UC'),
('CSE1001', 'Problem Solving and Programming', 'LO', 1, 3, 'UC'),
('CSE1002', 'Problem Solving and Object Oriented Programming', 'LO', 5, 3, 'UC'),
('CSE1006', 'Blockchain and Cryptocurrency Technologies', 'TH', 2, 3, 'UE'),
('CSE1007', 'Java Programming', 'ETL', 5, 4, 'PC'),
('CSE3501', 'Information Security Analysis and Audit', 'ETLP', 5, 4, 'PE'),
('CSE3502', 'Information Security Management', 'ETLP', 6, 4, 'PE'),
('EEE1001', 'Basic Electrical and Electronics Engineering', 'ETL', 1, 4, 'PC'),
('ENG1901', 'Technical English - I', 'LO', 2, 2, 'UC'),
('ENG2000', 'Foundation English - II', 'LO', 1, 2, 'NC'),
('EXC1004', 'Building Entrepreneurship Competencies and Skills', 'ECA', 3, 2, 'NC'),
('FRE1001', 'Francais Quotidien', 'TH', 6, 2, 'UC'),
('HUM1021', 'Ethics and Values', 'TH', 1, 2, 'UC'),
('ITE1001', 'Digital Logic and Microprocessor', 'ETL', 3, 4, 'PC'),
('ITE1002', 'Web Technologies', 'ETL', 2, 3, 'PC'),
('ITE1003', 'Database Management Systems', 'ETLP', 3, 4, 'PC'),
('ITE1004', 'Data Structures and Algorithms', 'ETL', 2, 4, 'PC'),
('ITE1005', 'Software Engineering - Principles and Practices', 'TH', 3, 3, 'PC'),
('ITE1006', 'Theory of Computation', 'TH', 4, 3, 'PC'),
('ITE1008', 'Open Source Programming', 'ETP', 3, 4, 'PE'),
('ITE1014', 'Human Computer Interaction', 'ETP', 3, 4, 'PE'),
('ITE1015', 'Soft Computing', 'ETP', 4, 4, 'PE'),
('ITE1016', 'Mobile Application Development', 'ETP', 5, 4, 'PE'),
('ITE1901', 'Technical Answers for Real World Problems (TARP)', 'ETP', 6, 4, 'UC'),
('ITE1902', 'Industrial Internship', 'PJT', 5, 1, 'UC'),
('ITE2001', 'Computer Architecture and Organization', 'TH', 4, 3, 'PC'),
('ITE2002', 'Operating Systems', 'ETL', 4, 4, 'PC'),
('ITE2004', 'Software Testing', 'ETP', 6, 4, 'PE'),
('ITE2006', 'Data Mining Techniques', 'ETP', 6, 4, 'PE'),
('ITE2013', 'Big Data Analytics', 'ETP', 5, 4, 'PE'),
('ITE2015', 'Information System Audit', 'TH', 6, 2, 'PE'),
('ITE3001', 'Data Communication and Computer Networks', 'ETL', 5, 4, 'PC'),
('ITE4001', 'Network and Information Security', 'ETP', 6, 4, 'PC'),
('ITE4098', 'Comprehensive Examination', 'P', 6, 2, 'UE'),
('MAT1011', 'Calculus for Engineers', 'ETL', 1, 4, 'UC'),
('MAT1014', 'Discrete Mathematics and Graph Theory', 'TH', 2, 4, 'PC'),
('MAT2001', 'Statistics for Engineers', 'ETL', 2, 4, 'UC'),
('MAT2002', 'Applications of Differential and Difference Equations', 'ETL', 2, 4, 'PC'),
('MAT3004', 'Applied Linear Algebra', 'TH', 4, 4, 'PC'),
('MGT1022', 'Lean Start-up Management', 'ETP', 6, 2, 'UC'),
('ONL1012', 'Data Warehousing and Data Mining', 'OC', 2, 3, 'UE'),
('ONL1021', 'Essentials of Machine Learning', 'OC', 2, 4, 'UE'),
('ONL1023', 'Statistical Data Analytics for Business Research', 'OC', 2, 4, 'UE'),
('PHY1701', 'Engineering Physics', 'ETL', 4, 4, 'UC'),
('PHY1901', 'Introduction to Innovative Projects', 'TH', 4, 1, 'UC'),
('STS1201', 'Introduction to Problem Solving', 'SS', 1, 1, 'UC'),
('STS1202', 'Introduction to Quantitative, Logical and Verbal Ability', 'SS', 2, 1, 'UC'),
('STS2201', 'Numerical Ability and Cognitive Intelligence', 'SS', 3, 1, 'UC'),
('STS2202', 'Advanced Aptitude and Reasoning Skills', 'SS', 4, 1, 'UC'),
('STS3201', 'Programming Skills for Employment', 'SS', 5, 1, 'UC'),
('STS3204', 'JAVA Programming and Software Engineering Fundamentals', 'SS', 6, 1, 'UC');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `badges`
--
ALTER TABLE `badges`
  ADD PRIMARY KEY (`BadgeTitle`);

--
-- Indexes for table `certificates`
--
ALTER TABLE `certificates`
  ADD PRIMARY KEY (`CertificateTitle`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`CourseCertificateID`);

--
-- Indexes for table `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `industryskills`
--
ALTER TABLE `industryskills`
  ADD PRIMARY KEY (`IndustrySkillName`);

--
-- Indexes for table `programmingskills`
--
ALTER TABLE `programmingskills`
  ADD PRIMARY KEY (`ProgrammingLanguageName`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `project_categories`
--
ALTER TABLE `project_categories`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `publications`
--
ALTER TABLE `publications`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `section_control`
--
ALTER TABLE `section_control`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `subjects_matriculation`
--
ALTER TABLE `subjects_matriculation`
  ADD PRIMARY KEY (`SubjectCode`);

--
-- Indexes for table `subjects_pre_university`
--
ALTER TABLE `subjects_pre_university`
  ADD PRIMARY KEY (`SubjectCode`);

--
-- Indexes for table `subjects_undergraduate`
--
ALTER TABLE `subjects_undergraduate`
  ADD PRIMARY KEY (`CourseCode`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `experience`
--
ALTER TABLE `experience`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `project_categories`
--
ALTER TABLE `project_categories`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `publications`
--
ALTER TABLE `publications`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
