-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2022 at 04:29 PM
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
-- Table structure for table `badges_learning`
--

CREATE TABLE `badges_learning` (
  `ID` int(11) NOT NULL,
  `LearningBadgeID` text DEFAULT NULL,
  `LearningBadgeTitle` text NOT NULL,
  `LearningBadgeDescription` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `badges_skills`
--

CREATE TABLE `badges_skills` (
  `ID` int(11) NOT NULL,
  `BadgeTitle` text NOT NULL,
  `BadgeCompletionMonth` text DEFAULT NULL,
  `BadgeCompletionYear` int(11) DEFAULT NULL,
  `BadgeIssuingCompanyName` text DEFAULT NULL,
  `BadgeIssuingCompanyLink` longtext NOT NULL,
  `BadgeAuthorizationCompanyName` text DEFAULT NULL,
  `BadgeAuthorizationCompanyLink` longtext NOT NULL,
  `BadgeDescription` longtext DEFAULT NULL,
  `BadgeLink` longtext DEFAULT NULL,
  `BadgeScript` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `badges_skills`
--

INSERT INTO `badges_skills` (`ID`, `BadgeTitle`, `BadgeCompletionMonth`, `BadgeCompletionYear`, `BadgeIssuingCompanyName`, `BadgeIssuingCompanyLink`, `BadgeAuthorizationCompanyName`, `BadgeAuthorizationCompanyLink`, `BadgeDescription`, `BadgeLink`, `BadgeScript`) VALUES
(1, 'Machine Learning with Python - Level 1', 'August', 2022, 'IBM Cognitive Class', 'https://www.credly.com/organizations/ibm/badges', 'IBM', 'https://www.credly.com/organizations/ibm/badges', 'The badge earner demonstrates an understanding of Supervised vs. Unsupervised Learning, applications of different types of machine learning models, and how to build and evaluate machine learning models.', 'https://www.credly.com/badges/9c2625f6-9534-4542-8041-ef8d55ae5c76/public_url', '<div data-iframe-width=\'250\' data-iframe-height=\'270\' data-share-badge-id=\'9c2625f6-9534-4542-8041-ef8d55ae5c76\' data-share-badge-host=\'https://www.credly.com\'></div><script type=\'text/javascript\' async src=\'//cdn.credly.com/assets/utilities/embed.js\'></script>'),
(2, 'Deep Learning Essentials', 'August', 2022, 'IBM Cognitive Class', 'https://www.credly.com/organizations/ibm/badges', 'IBM', 'https://www.credly.com/organizations/ibm/badges', 'This badge earner has acquired core knowledge of how the Deep Learning class of machine learning algorithms can be harnessed for more powerful and insightful data processing and pattern creation used in decision-making processes. This includes how convolutional neural networks are used to enhance the effectiveness of image recognition and classification.', 'https://www.credly.com/badges/0670d6de-3618-4b8b-8376-297d52cfef4d/embedded', '<div data-iframe-width=\'250\' data-iframe-height=\'250\' data-share-badge-id=\'0670d6de-3618-4b8b-8376-297d52cfef4d\' data-share-badge-host=\'https://www.credly.com\'></div><script type=\'text/javascript\' async src=\'//cdn.credly.com/assets/utilities/embed.js\'></script>'),
(3, 'MTA: Introduction to Programming Using Python - Certified 2022', 'Feburary', 2022, 'Microsoft', 'https://www.credly.com/badges/766b3916-88f2-4dfb-8afb-863918f0c29c/public_url', 'Microsoft', 'https://docs.microsoft.com/en-us/learn/certifications/exams/98-381', 'Earners of the MTA: Introduction to Programming Using Python certification have demonstrated the skills and knowledge to recognize and write syntactically correct Python code, recognize data types supported by Python, and the ability to recognize and write Python code that will logically solve a given problem.', 'https://www.credly.com/badges/766b3916-88f2-4dfb-8afb-863918f0c29c/embedded', '<div data-iframe-width=\'250\' data-iframe-height=\'270\' data-share-badge-id=\'766b3916-88f2-4dfb-8afb-863918f0c29c\' data-share-badge-host=\'https://www.credly.com\'></div>'),
(4, 'AWS Academy Graduate - AWS Academy Cloud Foundations', 'July', 2021, 'Amazon Web Services Training and Certification', 'https://www.credly.com/organizations/amazon-web-services/badges', 'AWS Academy', 'https://www.credly.com/organizations/amazon-web-services/badges', 'This is a learners badge and the earners of this badge have taken the AWS Academy Cloud Foundations course offered by the AWS Academy and issued by Amazon Web Services Training and Certification.', 'https://www.credly.com/badges/577946f1-7627-4147-a9da-221e2d35597e/embedded', '<div data-iframe-width=\'250\' data-iframe-height=\'270\' data-share-badge-id=\'577946f1-7627-4147-a9da-221e2d35597e\' data-share-badge-host=\'https://www.credly.com\'></div>'),
(5, 'Machine Learning with Python', 'March', 2021, 'Coursera Inc.', 'https://www.credly.com/organizations/coursera/badges', 'IBM', 'https://www.credly.com/organizations/ibm/badges', 'The badge earner has demonstrated a good understanding and application of machine learning (ML) including when to use different ML techniques such as regression, classification, clustering and recommender systems. The individual has acquired the skills to use different machine learning libraries in Python, mainly Scikit-learn and Scipy, to generate and apply different types of ML algorithms such as decision trees, logistic regression, k-means, KNN, DBSCCAN, SVM and hierarchical clustering.', 'https://www.credly.com/badges/2fc9a971-86bb-4fd0-8e67-66c70c4c767f/embedded', '<div data-iframe-width=\'250\' data-iframe-height=\'250\' data-share-badge-id=\'2fc9a971-86bb-4fd0-8e67-66c70c4c767f\' data-share-badge-host=\'https://www.credly.com\'></div>'),
(6, 'Data Science Orientation', 'May', 2021, 'Coursera Inc.', 'https://www.credly.com/organizations/coursera/badges', 'IBM', 'https://www.credly.com/organizations/ibm/badges', 'This badge earner has a good understanding of why data science, artificial intelligence (AI) and machine learning are revolutionizing the way people do business and research around the world. They have general knowledge on what data science is today.', 'https://www.credly.com/badges/0f5f8c8b-3f71-4ade-bced-547dd8e9307f/embedded', '<div data-iframe-width=\'250\' data-iframe-height=\'250\' data-share-badge-id=\'0f5f8c8b-3f71-4ade-bced-547dd8e9307f\' data-share-badge-host=\'https://www.credly.com\'></div>'),
(7, 'Chatbot Building Essentials', 'June', 2021, 'Coursera Inc.', 'https://www.credly.com/organizations/coursera/badges', 'IBM', 'https://www.credly.com/organizations/ibm/badges', 'The badge earner has demonstrated the ability to design, build, analyze, and improve chatbots. The individual has also proven their end-to-end skills by deploying chatbots on a WordPress site.', 'https://www.credly.com/badges/ffecf16a-69ea-47b1-ae4a-541f0e64fd88/embedded', '<div data-iframe-width=\'250\' data-iframe-height=\'250\' data-share-badge-id=\'ffecf16a-69ea-47b1-ae4a-541f0e64fd88\' data-share-badge-host=\'https://www.credly.com\'></div>');

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
-- Table structure for table `courses_company_list`
--

CREATE TABLE `courses_company_list` (
  `ID` int(11) NOT NULL,
  `CompanyName` text NOT NULL,
  `CompanyImagePath` text NOT NULL,
  `CompanyLink` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses_company_list`
--

INSERT INTO `courses_company_list` (`ID`, `CompanyName`, `CompanyImagePath`, `CompanyLink`) VALUES
(1, 'Great Learning Private Limited', 'images/GL.jpg', 'https://www.mygreatlearning.com/about-us'),
(2, 'Udemy Inc.', 'images/udemy.png', 'https://www.udemy.com/'),
(3, 'Coursera Inc.', 'images/Coursera.jpeg', 'https://www.coursera.org/'),
(4, 'NVIDIA Deep Learning Institute', 'images/NVIDIA.png', 'https://www.nvidia.com/en-us/training/'),
(5, 'Outscal Technologies Private Limited', 'images/outscal.png', 'https://www.outscal.com/');

-- --------------------------------------------------------

--
-- Table structure for table `courses_list`
--

CREATE TABLE `courses_list` (
  `CourseCertificateID` varchar(255) NOT NULL,
  `CourseCompletionMonth` varchar(10) DEFAULT NULL,
  `CourseCompletionYear` int(11) DEFAULT NULL,
  `CourseTitle` varchar(255) DEFAULT NULL,
  `CourseCompanyProvider` varchar(255) DEFAULT NULL,
  `CertificateLink` longtext DEFAULT NULL,
  `CertificateCompanyImageName` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses_list`
--

INSERT INTO `courses_list` (`CourseCertificateID`, `CourseCompletionMonth`, `CourseCompletionYear`, `CourseTitle`, `CourseCompanyProvider`, `CertificateLink`, `CertificateCompanyImageName`) VALUES
('548Z2ATM84Z4', 'Jun', 2022, 'Specialization - AI Foundations for Everyone', 'Coursera Inc.', 'https://www.coursera.org/account/accomplishments/specialization/certificate/548Z2ATM84Z4', 'Certificates/Courses/Coursera/Specialization - AI Foundations for Everyone - 548Z2ATM84Z4_page-0001.jpg'),
('BYLZBVAU', 'Jun', 2022, 'Python Fundamentals for Beginners', 'Great Learning Private Limited', 'https://olympus1.mygreatlearning.com/course_certificate/BYLZBVAU', 'Certificates/Courses/Great Learnng/Python Fundamentals for Beginners.jpg'),
('CVGXJSHI', 'Nov', 2020, 'Introduction to R', 'Great Learning Private Limited', 'https://olympus1.mygreatlearning.com/course_certificate/CVGXJSHI', 'Certificates/Courses/Great Learnng/Introduction to R.jpg'),
('RE-ENTER VALUE 1', 'Nov', 2020, 'Getting Started with AI on Jetson Nano', 'NVIDIA Deep Learning Institute', 'https://www.nvidia.com/en-us/training/', 'images/NVIDIA.png'),
('RE-ENTER VALUE 2', 'Apr', 2020, 'Introduction to C++ Project', 'Outscal Technologies Private Limited', 'https://www.outscal.com/', 'images/outscal.png'),
('UC-683a46bf-3401-46a0-9afd-7d00850643df', 'May', 2020, 'Programming with Python: HandsOn Introduction for Beginners', 'Udemy Inc.', 'https://ude.my/UC-683a46bf-3401-46a0-9afd-7d00850643df', 'Certificates/Courses/Udemy/Programming with Python - HandsOn Introduction for Beginners.jpg'),
('XPMLJPWX', 'Jun', 2022, 'Python for Machine Learning', 'Great Learning Private Limited', 'https://olympus1.mygreatlearning.com/course_certificate/XPMLJPWX', 'Certificates/Courses/Great Learnng/Python for Machine Learning.jpg');

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
  `CertificateImageFileNames` text NOT NULL,
  `ShowThisExperience` varchar(11) NOT NULL DEFAULT 'On'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `experience`
--

INSERT INTO `experience` (`ID`, `StartMonth`, `StartYear`, `EndMonth`, `EndYear`, `Title`, `EmploymentType`, `CompanyName`, `CompanyLink`, `Location`, `DescriptionOfJob`, `NoOfCertificateImages`, `CertificateImageNames`, `CertificateImageLinks`, `CompanyImageName`, `CertificateImageFileNames`, `ShowThisExperience`) VALUES
(1, 'May', 2022, 'Sep', 2022, 'Jr. Developer (Project Lead - ML Division)', 'Internship', 'River Bend Data Solutions', 'https://www.linkedin.com/in/river-bend-data-solutions-3454281b8/?originalSubdomain=in', 'Remote/Online', 'Development of Application to Help Medical Diagnosis.', 1, 'Internship Certificate', 'https://drive.google.com/file/d/1PwdoZc38779VDW_g-_X7GLsdEDDqZIgi/view?usp=share_link', 'RBDS.jpg', 'RBDS/Aashish - RBDS internship certificate _page-0001.jpg', 'On'),
(2, 'Jan', 2022, 'Feb', 2022, 'ML Engineer', 'Training & Internship - Data Science', 'NEO 5.0', 'https://neoeducation.in/', 'Remote/Online', 'This was a five week Training & Internship program offered after clearing the Round 1 of NEO5. The project worked on at the end of this Internship is YouTube Adview Prediction.', 4, 'Participation Certificate,Round 1 Clearance Certificate,Certificate of Training,Certificate of Internship', 'https://drive.google.com/file/d/1JEHBHyv9Y2t6csntfyqLgCayfWbqsDdx/view,https://drive.google.com/file/d/1yWDfJYCbwXuxV5pyvjAquVUZtKlIpX0K/view,https://drive.google.com/file/d/1oUYo5C0e2RGCfb9qhfYwx5wZcTUcdyPz/view,https://drive.google.com/file/d/1mxonIQjN5qvQiwz0CoqLm37HoRnEYkwA/view', 'neo.png', 'NEO5/NEO5 - Participation Certificate.jpg,NEO5/NEO5 - Round 1 Clearance Certificate.jpg,NEO5/Certificate of Training/NEO5 - Certificate of Training.jpg,NEO5/Certificate of Internship/NEO5 - Certificate of Internship.jpg', 'On'),
(3, 'Oct', 2021, 'Feb', 2022, 'ML Engineer', 'Training & Internship - Data Science', 'Verzeo', 'https://learn.verzeo.in/', 'Remote/Online', 'This was a five week Training & Internship program offered after clearing the Round 1 of NEO5. The project worked on at the end of this Internship is YouTube Adview Prediction. ', 3, 'Course Completion Certificate,Internship Completion Certificate,Outstanding Certificate', 'https://drive.google.com/file/d/1oHalK769MFV7EwNVA6pO-bRL6zA-X1yU/view,https://drive.google.com/file/d/1KMLQFEyVzTX1_8GGCxsXDwAIsrPHY5eK/view,https://drive.google.com/file/d/1g7HfsiuVi9nzR8-cQAFKmnp2NTi9-Aea/view', 'verzeo.png', 'Verzeo DS/Course Completion Certificate/Verzeo DS - Course Completion Certificate - 848621739.jpg,Verzeo DS/Internship Completion Certificate/Verzeo DS - Internship Completion Certificate - 873087021.jpg,Verzeo DS/Outstanding Certificate/Verzeo DS - Outstanding Certificate - 1457460912.jpg', 'On'),
(4, 'Sep', 2021, 'Nov', 2021, 'ML Engineer', 'Training & Internship - Data Science', '1stop.ai', 'https://www.1stop.ai/', 'Remote/Online', '', 3, 'Certificate of Participation,Internship Certificate,Project Completion Certificate', 'https://drive.google.com/file/d/1dsmAzyFnFaB9dvim8Oo-M2GzC_NjWO3k/view,https://drive.google.com/file/d/1lemuQhlQRNs2A5FFYZXztMEN5SQTgC62/view,https://drive.google.com/file/d/1w80T8wjJWOaQvr-Y1gLYqXVcPHb-q-Wz/view', '1stop.jpg', '1stop.a1/1stop - Certificate of Participation.jpg,1stop.a1/1stop - Internship Certificate.jpg,1stop.a1/1stop - Project Completion Certificate.jpg', 'On'),
(5, 'Sep', 2021, 'Oct', 2021, 'ML Engineer', 'Training & Internship - Data Science', 'YHills', 'https://yhills.thinkific.com/', 'Remote/Online', '', 2, 'Course Completion Certificate,Internship Completion Certificate', 'https://drive.google.com/file/d/1V6x1FZUbTy1-0-riM3fyrsIcKe8xZD_q/view,https://drive.google.com/file/d/1rOTrE_MF6i6ie2fNum5l70R9eHPf1kLs/view', 'yhills_logo.jpg', 'YHills/YHills - Course Completion Certificate.jpg,YHills/YHills - Internship Completion Certificate.jpg', 'On'),
(6, 'Mar', 2020, 'Jul', 2020, 'Deep Learning Engineer', 'Training & Internship - Applied Machine Learning & Data Science', 'Indian Institute of Technology, Kanpur', 'http://iitk.ac.in/new/data/iitk/', 'Remote/Online', 'This Internship covered the following areas: Python Foundations, Data Wrangling, Storytelling with Data, Foundations of Machine Learning, Deep Learning, Statistics for Data Science, Natural Language Processing, Miscellaneous Applications, Quizzes and assignments after each module, Capstone Project (Twitter-Sentiment Analysis) ', 2, 'Training & Internship Completion Certificate,Project Certificate', 'https://drive.google.com/file/d/1GCMRYOR93DyWBguRaPqALgHSWt3b77c8/view,https://drive.google.com/file/d/1_5YA13uUlWTQJ55385J9yI__79XhZ9FF/view', 'iitk.jpg', 'IITK Applied Machine Learning and Data Science/IIT Kanpur - Training & Internship Completion Certificate - Aashish Bansal_page-0001.jpg,IITK Applied Machine Learning and Data Science/IIT Kanpur - PROJECT CERTIFICATE Aashish Bansal_page-0001.jpg', 'On'),
(7, 'Dec', 2019, 'Jan', 2020, 'ML Engineer', 'Training & Internship - Artificial Intelligence', 'Verzeo', 'https://learn.verzeo.in/', 'Remote/Online', '', 2, 'Course Completion Certificate,Internship certificate', 'https://drive.google.com/file/d/1xQXNHhRxoDS5QCRS5MSmk0XrqiAvw3gy/view,https://drive.google.com/file/d/1zzI9wDlg22RWqZPqy6hfBDQLfMD7RWmw/view', 'verzeo.png', 'Verzeo AI/Verzeo AI - Course Completion Certificate.jpg,Verzeo AI/Verzeo AI - internship certificate.jpg', 'On');

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
-- Table structure for table `industryskillcategories`
--

CREATE TABLE `industryskillcategories` (
  `ID` int(11) NOT NULL,
  `SkillCategoryName` text NOT NULL,
  `SkillCategoryIDName` text NOT NULL,
  `SkillCategoryImageName` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `industryskillcategories`
--

INSERT INTO `industryskillcategories` (`ID`, `SkillCategoryName`, `SkillCategoryIDName`, `SkillCategoryImageName`) VALUES
(1, 'Industry Knowledge', 'Industry_Knowledge', 'Industry_Knowledge'),
(2, 'Tools & Technologies', 'Tools_Technologies', 'Tools_Technologies'),
(3, 'Interpersonal Skills', 'Interpersonal_Skills', 'Interpersonal_Skills'),
(4, 'Other Skills', 'Other_Skills', 'Other_Skills'),
(5, 'Languages', 'Languages', 'Languages'),
(6, 'Frameworks & Libraries', 'Frameworks_Libraries', 'Frameworks_Libraries'),
(7, 'Databases and Cloud Hosting', 'Databases_and_Cloud_Hosting', 'Databases_and_Cloud_Hosting'),
(8, 'Software and Tools', 'Software_and_Tools', 'Software_and_Tools');

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
-- Table structure for table `personal_details`
--

CREATE TABLE `personal_details` (
  `email` text NOT NULL,
  `user_password` text NOT NULL,
  `Name` varchar(50) NOT NULL,
  `contact_mobile` text NOT NULL,
  `BirthYear` int(11) NOT NULL,
  `BirthMonth` varchar(15) NOT NULL,
  `BirthDate` int(11) NOT NULL,
  `address_country` varchar(25) NOT NULL,
  `address_state` varchar(25) NOT NULL,
  `address_district` varchar(25) NOT NULL,
  `address_city` varchar(25) NOT NULL,
  `address_street` text NOT NULL,
  `address_pincode` int(11) NOT NULL,
  `FullAddress` text NOT NULL,
  `Description` text DEFAULT NULL,
  `show_icons` varchar(11) NOT NULL DEFAULT 'On'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `personal_details`
--

INSERT INTO `personal_details` (`email`, `user_password`, `Name`, `contact_mobile`, `BirthYear`, `BirthMonth`, `BirthDate`, `address_country`, `address_state`, `address_district`, `address_city`, `address_street`, `address_pincode`, `FullAddress`, `Description`, `show_icons`) VALUES
('analyst.aashish@gmail.com', '123Aashish456', 'Aashish Bansal', '+91-7829140001', 2000, 'August', 22, 'India', 'Punjab', 'Muktsar', 'Malout', 'Surja Ram Market', 152107, 'Malout, Punjab, India', 'I am a Hardworking, Sincere, and Analytical Professional. My Passion is to learn, code, and do sports. As a natural-born go-getter, my passion has continuously driven me to expand my knowledge, experience, and relationships. With a strong background and diverse skill set, I\'m confident in the creative ideas and successful solutions I bring to the table. I am very interested in Coding and Learning. I\'ve always tried to take up challenges and perform my best to improve my skills and efficiency to the highest level possible. I look forward to working with enthusiasm to have a chance to prove myself.', 'on');

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
(1, 'DS01', 'Nov', 2021, 'Prediction of Marks using Data Science', '1stop.ai', 'Data Science', 'Data Science', 'Training Project', '', 'GitHub Repository', 'https://github.com/aashish22bansal/Prediction-of-Marks-using-Data-Science', 'Google Drive', ''),
(2, 'DS02', 'Nov', 2021, 'Fake News Detection', '1stop.ai', 'Data Science', 'Data Science', 'Training Project', '', 'GitHub Repository', 'https://github.com/aashish22bansal/Fake-News-Detection', 'Google Drive', ''),
(3, 'DS03', 'Nov', 2021, 'Detection of Parkinson\'s Disease', '1stop.ai', 'Data Science', 'Data Science', 'Training Project', '', 'GitHub Repository', 'https://github.com/aashish22bansal/Detection-of-Parkinson-s-Disease', 'Google Drive', ''),
(4, 'DS04', 'Nov', 2021, 'Best Ads Predictor', '1stop.ai', 'Data Science', 'Data Science', 'Internship Project', '', 'GitHub Repository', 'https://github.com/aashish22bansal/Best-Ads-Predictor', 'Google Drive', ''),
(5, 'DS05', 'Nov', 2021, 'Basic ChatBot', '1stop.ai', 'Data Science', 'Data Science', 'Internship Project', '', 'GitHub Repository', 'https://github.com/aashish22bansal/Basic-ChatBot', 'Google Drive', ''),
(6, 'DS06', 'Oct', 2021, 'House Price Prediction', 'YHills', 'Data Science', 'Data Science', 'Internship Project', '', 'GitHub Repository', 'https://github.com/aashish22bansal/House-Price-Prediction', 'Google Drive', ''),
(7, 'DS07', 'Oct', 2021, 'Personal Bank Loan Modeling', 'YHills', 'Data Science', 'Data Science', 'Internship Project', '', 'GitHub Repository', 'https://github.com/aashish22bansal/Personal-Bank-Loan-Modelling', 'Google Drive', ''),
(8, 'ML01', 'Nov', 2021, 'Intrusion Detection System using Machine Learning', 'VIT', 'Information Security Analysis and Audit', 'Machine Learning', 'College Project', '', 'GitHub Repository', 'https://github.com/aashish22bansal/CSE3501-ISAA-Project-Network-Intrusion-Detection-Using-Machine-Learning', 'Google Drive', ''),
(9, 'ML02', 'Nov', 2021, 'Credit Card Fraud Detection System using Machine Learning', 'VIT', 'Big Data Analytics', 'Machine Learning', 'College Project', '', 'GitHub Repository', 'https://github.com/aashish22bansal/ITE2013-Big-Data-Analytics-Credit-Card-Fraud-Detection', 'Google Drive', ''),
(10, 'ML03', 'Feb', 2022, 'YouTube Adview Prediction', 'NEO5.0', 'Machine Learning', 'Machine Learning', 'Internship Project', '', 'GitHub Repository', 'https://github.com/aashish22bansal/YouTube-Adview-Prediction', 'Google Drive', ''),
(11, 'DL01', 'Jul', 2020, 'Twitter Sentiment Analysis', 'IIT Kanpur', 'Deep Learning', 'Deep Learning', 'Internship Project', '', 'GitHub Repository', 'https://github.com/aashish22bansal/Twitter-Sentiment-Analysis-Using-Bi-LSTM', 'Google Drive', ''),
(12, 'DL02', 'Apr', 2020, 'Skin Cancer Detection using Transfer Learning and Ensemble Modeling', 'VIT', 'Soft Computing', 'Deep Learning', 'College Project', '', 'GitHub Repository', 'https://github.com/aashish22bansal/ITE1015-Soft-Computing-Project-Skin-Cancer-Detection', 'Springer', ''),
(13, 'APP01', 'Nov', 2021, 'Scientific Calculator', 'VIT', 'Mobile Application Development', 'Android', 'Learning Project', '', 'GitHub Repository', 'https://github.com/aashish22bansal/Android-Projects/tree/main/ScientificCalculator', 'Google Drive', ''),
(14, 'APP02', 'Nov', 2021, 'Court Score Counter (for Basketball)', 'N/A', 'Mobile Application Development', 'Android', 'Learning Project', '', 'GitHub Repository', 'https://github.com/aashish22bansal/Android-Projects/tree/main/CourtCounter', 'Google Drive', ''),
(15, 'APP03', 'Nov', 2021, 'Currency Converter', 'VIT', 'Mobile Application Development', 'Android', 'College Project', '', 'GitHub Repository', 'https://github.com/aashish22bansal/Android-Projects/tree/main/CurrencyConverter', 'Google Drive', ''),
(16, 'BC01', 'Feb', 2020, 'Decentralised Voting App', 'VIT', 'Blockchain and Cryptocurrency Technologies', 'Blockchain', 'College Project', '', 'GitHub Repository', '', 'Google Drive', ''),
(17, 'WD01', 'Nov', 2020, 'COVID-19 Tracker with Chat Application', 'VIT', 'Web Technologies', 'Web Development', 'College Project', '', 'GitHub Repository', 'https://github.com/aashish22bansal/ITE1002-Web-Technologies-COVID-19-Live-Stats-Responsive-Website-Project', 'Google Drive', ''),
(18, 'WD02', 'Nov', 2020, 'E-Commerce Website', 'VIT', 'Open Source Programming', 'Web Development', 'College Project', '', 'GitHub Repository', 'https://github.com/aashish22bansal/ITE1008-Open-Source-Programming-E-Commerce-Website-Project', 'Google Drive', ''),
(19, 'WD03', 'Nov', 2020, 'Apple Store Management System', 'VIT', 'Database Management System', 'Web Development', 'College Project', '', 'GitHub Repository', 'https://github.com/aashish22bansal/ITE1003-DBMS-Project-Apple-Store-Management-System', 'Google Drive', ''),
(20, 'SD01', 'Feb', 2018, 'Hotel Management System', 'GIIS', 'Computer Science with C++', 'Software Development', 'School Project', '', 'GitHub Repository', '', 'Google Drive', ''),
(21, 'SD02', 'Feb', 2019, 'Tic Tac Toe (Multiplayer & Single Player against Artificial Intelligence System)', 'GIIS', 'Computer Science with C++', 'Software Development', 'School Project', '', 'GitHub Repository', '', 'Google Drive', '');

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
  `Home` varchar(11) DEFAULT NULL,
  `About` varchar(11) DEFAULT NULL,
  `Education` varchar(11) DEFAULT NULL,
  `Experience` varchar(11) DEFAULT NULL,
  `Projects` varchar(11) DEFAULT NULL,
  `Skills_n_Languages` varchar(11) DEFAULT NULL,
  `Badges` varchar(11) DEFAULT NULL,
  `Certificates` varchar(11) DEFAULT NULL,
  `Courses` varchar(11) DEFAULT NULL,
  `Organizations` varchar(11) DEFAULT NULL,
  `Competitions` varchar(11) DEFAULT NULL,
  `Resume_Link` varchar(11) DEFAULT NULL,
  `Contact` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `section_control`
--

INSERT INTO `section_control` (`ID`, `Home`, `About`, `Education`, `Experience`, `Projects`, `Skills_n_Languages`, `Badges`, `Certificates`, `Courses`, `Organizations`, `Competitions`, `Resume_Link`, `Contact`) VALUES
(1, 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on');

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
-- Indexes for table `badges_learning`
--
ALTER TABLE `badges_learning`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `badges_skills`
--
ALTER TABLE `badges_skills`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `certificates`
--
ALTER TABLE `certificates`
  ADD PRIMARY KEY (`CertificateTitle`);

--
-- Indexes for table `courses_company_list`
--
ALTER TABLE `courses_company_list`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `courses_list`
--
ALTER TABLE `courses_list`
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
-- Indexes for table `personal_details`
--
ALTER TABLE `personal_details`
  ADD PRIMARY KEY (`email`(255)),
  ADD UNIQUE KEY `password` (`user_password`(255)),
  ADD UNIQUE KEY `contact_mobile` (`contact_mobile`) USING HASH;

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
-- AUTO_INCREMENT for table `badges_learning`
--
ALTER TABLE `badges_learning`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `badges_skills`
--
ALTER TABLE `badges_skills`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `courses_company_list`
--
ALTER TABLE `courses_company_list`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

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
