CREATE DATABASE myportfolio;

CREATE TABLE Education(
	NameOfCollege VARCHAR(255),
    City VARCHAR(255),
    Program VARCHAR(255),
    Department VARCHAR(255),
    StartYear INT,
    EndYear INT,
    Score VARCHAR(30),
    EducationCategory VARCHAR(50)
);
INSERT INTO Education VALUES("Vellore Institute of Technology","Vellore","Bachelor of Technology","Information Technology",2019,2023,"CGPA: 8.58","Bachelor's Degree");
INSERT INTO Education VALUES("GEAR Innovative International School","Bangalore","Science","Science",2017,2019,"Percentage: 86.6%","Pre-University");
INSERT INTO Education VALUES("GEAR Innovative International School","Bangalore","","",2016,2017,"CGOA: 9.4","Matriculation");

CREATE TABLE Subjects_Undergraduate(
	CourseCode VARCHAR(7) PRIMARY KEY,
    CourseTitle VARCHAR(255),
    CourseType VARCHAR(5),
    Semester INT,
    Credits INT,
    CourseDistribution VARCHAR(10)
);
INSERT INTO Subjects_Undergraduate VALUES("CHY1002","Environmental Sciences","TH",1,3,"Non-Credit");
INSERT INTO Subjects_Undergraduate VALUES("CHY1701","Engineering Chemistry","ETL",1,4,"UC");
INSERT INTO Subjects_Undergraduate VALUES("CSE1001","Problem Solving and Programming","LO",1,3,"UC");
INSERT INTO Subjects_Undergraduate VALUES("EEE1001","Basic Electrical and Electronics Engineering","ETL",1,4,"PC");
INSERT INTO Subjects_Undergraduate VALUES("ENG2000","Foundation English - II","LO",1,2,"NC");
INSERT INTO Subjects_Undergraduate VALUES("HUM1021","Ethics and Values","TH",1,2,"UC");
INSERT INTO Subjects_Undergraduate VALUES("MAT1011","Calculus for Engineers","ETL",1,4,"UC");
INSERT INTO Subjects_Undergraduate VALUES("STS1201","Introduction to Problem Solving","SS",1,1,"UC");
INSERT INTO Subjects_Undergraduate VALUES("CSE1006","Blockchain and Cryptocurrency Technologies","TH",2,3,"UE");
INSERT INTO Subjects_Undergraduate VALUES("ENG1901","Technical English - I","LO",2,2,"UC");
INSERT INTO Subjects_Undergraduate VALUES("ITE1004","Data Structures and Algorithms","ETL",2,4,"PC");
INSERT INTO Subjects_Undergraduate VALUES("MAT1014","Discrete Mathematics and Graph Theory","TH",2,4,"PC");
INSERT INTO Subjects_Undergraduate VALUES("MAT2001","Statistics for Engineers","ETL",2,4,"UC");
INSERT INTO Subjects_Undergraduate VALUES("MAT2002","Applications of Differential and Difference Equations","ETL",2,4,"PC");
INSERT INTO Subjects_Undergraduate VALUES("ONL1012","Data Warehousing and Data Mining","OC",2,3,"UE");
INSERT INTO Subjects_Undergraduate VALUES("ONL1021","Essentials of Machine Learning","OC",2,4,"UE");
INSERT INTO Subjects_Undergraduate VALUES("ONL1023","Statistical Data Analytics for Business Research","OC",2,4,"UE");
INSERT INTO Subjects_Undergraduate VALUES("STS1202","Introduction to Quantitative, Logical and Verbal Ability","SS",2,1,"UC");
INSERT INTO Subjects_Undergraduate VALUES("EXC1004","Building Entrepreneurship Competencies and Skills","ECA",3,2,"NC");
INSERT INTO Subjects_Undergraduate VALUES("ITE1001","Digital Logic and Microprocessor","ETL",3,4,"PC");
INSERT INTO Subjects_Undergraduate VALUES("ITE1002","Web Technologies","ETL",2,3,"PC");
INSERT INTO Subjects_Undergraduate VALUES("ITE1003","Database Management Systems","ETLP",3,4,"PC");
INSERT INTO Subjects_Undergraduate VALUES("ITE1005","Software Engineering - Principles and Practices","TH",3,3,"PC");
INSERT INTO Subjects_Undergraduate VALUES("ITE1008","Open Source Programming","ETP",3,4,"PE");
INSERT INTO Subjects_Undergraduate VALUES("ITE1014","Human Computer Interaction","ETP",3,4,"PE");
INSERT INTO Subjects_Undergraduate VALUES("STS2201","Numerical Ability and Cognitive Intelligence","SS",3,1,"UC");
INSERT INTO Subjects_Undergraduate VALUES("ITE1006","Theory of Computation","TH",4,3,"PC");
INSERT INTO Subjects_Undergraduate VALUES("ITE1015","Soft Computing","ETP",4,4,"PE");
INSERT INTO Subjects_Undergraduate VALUES("ITE2001","Computer Architecture and Organization","TH",4,3,"PC");
INSERT INTO Subjects_Undergraduate VALUES("ITE2002","Operating Systems","ETL",4,4,"PC");
INSERT INTO Subjects_Undergraduate VALUES("MAT3004","Applied Linear Algebra","TH",4,4,"PC");
INSERT INTO Subjects_Undergraduate VALUES("PHY1701","Engineering Physics","ETL",4,4,"UC");
INSERT INTO Subjects_Undergraduate VALUES("PHY1901","Introduction to Innovative Projects","TH",4,1,"UC");
INSERT INTO Subjects_Undergraduate VALUES("STS2202","Advanced Aptitude and Reasoning Skills","SS",4,1,"UC");
INSERT INTO Subjects_Undergraduate VALUES("CSE1002","Problem Solving and Object Oriented Programming","LO",5,3,"UC");
INSERT INTO Subjects_Undergraduate VALUES("CSE1007","Java Programming","ETL",5,4,"PC");
INSERT INTO Subjects_Undergraduate VALUES("CSE3501","Information Security Analysis and Audit","ETLP",5,4,"PE");
INSERT INTO Subjects_Undergraduate VALUES("ITE1016","Mobile Application Development","ETP",5,4,"PE");
INSERT INTO Subjects_Undergraduate VALUES("ITE2013","Big Data Analytics","ETP",5,4,"PE");
INSERT INTO Subjects_Undergraduate VALUES("ITE3001","Data Communication and Computer Networks","ETL",5,4,"PC");
INSERT INTO Subjects_Undergraduate VALUES("STS3201","Programming Skills for Employment","SS",5,1,"UC");
INSERT INTO Subjects_Undergraduate VALUES("ITE1902","Industrial Internship","PJT",5,1,"UC");
INSERT INTO Subjects_Undergraduate VALUES("CSE3502","Information Security Management","ETLP",6,4,"PE");
INSERT INTO Subjects_Undergraduate VALUES("FRE1001","Francais Quotidien","TH",6,2,"UC");
INSERT INTO Subjects_Undergraduate VALUES("ITE1901","Technical Answers for Real World Problems (TARP)","ETP",6,4,"UC");
INSERT INTO Subjects_Undergraduate VALUES("ITE2004","Software Testing","ETP",6,4,"PE");
INSERT INTO Subjects_Undergraduate VALUES("ITE2006","Data Mining Techniques","ETP",6,4,"PE");
INSERT INTO Subjects_Undergraduate VALUES("ITE2015","Information System Audit","TH",6,2,"PE");
INSERT INTO Subjects_Undergraduate VALUES("ITE4001","Network and Information Security","ETP",6,4,"PC");
INSERT INTO Subjects_Undergraduate VALUES("ITE4098","Comprehensive Examination","P",6,2,"UE");
INSERT INTO Subjects_Undergraduate VALUES("MGT1022","Lean Start-up Management","ETP",6,2,"UC");
INSERT INTO Subjects_Undergraduate VALUES("STS3204","JAVA Programming and Software Engineering Fundamentals","SS",6,1,"UC");

CREATE TABLE Subjects_Pre_University(
	SubjectCode VARCHAR(3) PRIMARY KEY,
    SubjectName VARCHAR(50)
);
INSERT INTO Subjects_Pre_University VALUES("041","Mathematics");
INSERT INTO Subjects_Pre_University VALUES("042","Physics");
INSERT INTO Subjects_Pre_University VALUES("043","Chemistry");
INSERT INTO Subjects_Pre_University VALUES("083","Computer Science");
INSERT INTO Subjects_Pre_University VALUES("301","English Core");
INSERT INTO Subjects_Pre_University VALUES("500","Work Experience");
INSERT INTO Subjects_Pre_University VALUES("502","Physical and Health Education");
INSERT INTO Subjects_Pre_University VALUES("503","General Studies");

CREATE TABLE Subjects_Matriculation(
	SubjectCode VARCHAR(3) PRIMARY KEY,
    SubjectName VARCHAR(50)
);
INSERT INTO Subjects_Matriculation VALUES("041","Mathematics");
INSERT INTO Subjects_Matriculation VALUES("085","Hindi Course-B");
INSERT INTO Subjects_Matriculation VALUES("086","Science");
INSERT INTO Subjects_Matriculation VALUES("087","Social Studies");
INSERT INTO Subjects_Matriculation VALUES("101","English Communication");

CREATE TABLE Experience(
	StartMonth VARCHAR(10),
    StartYear INT,
    EndMonth VARCHAR(10),
    EndYear INT,
	Title VARCHAR(255),
    EmploymentType VARCHAR(255),
    CompanyName VARCHAR(255),
    CompanyLink LONGTEXT,
    Location VARCHAR(255),
    DescriptionOfJob LONGTEXT,
    NoOfCertificateImages INT,
    CertificateImageNames LONGTEXT,
    CertificateImageLinks LONGTEXT,
    CompanyImageName VARCHAR(255)
);
INSERT INTO Experience VALUES("May",2022,"Sep",2022,"Jr. Developer",			"Internship",														"River Bend Data Solutions",				"https://www.linkedin.com/in/river-bend-data-solutions-3454281b8/?originalSubdomain=in","Remote","Development of Application to Help Medical Diagnosis.",0,"","","RBDS.jpg");
INSERT INTO Experience VALUES("Jan",2022,"Feb",2022,"ML Engineer",				"Training & Internship - Data Science",								"NEO 5.0",									"https://neoeducation.in/",																"Remote","This was a five week Training & Internship program offered after clearing the Round 1 of NEO5. The project worked on at the end of this Internship is YouTube Adview Prediction.",4,"NEO5 - Participation Certificate.jpg,NEO5 - Round 1 Clearance Certificate.jpg,NEO5 - Certificate of Training.jpg,NEO5 - Certificate of Internship.jpg","https://drive.google.com/file/d/1JEHBHyv9Y2t6csntfyqLgCayfWbqsDdx/view,https://drive.google.com/file/d/1yWDfJYCbwXuxV5pyvjAquVUZtKlIpX0K/view,https://drive.google.com/file/d/1oUYo5C0e2RGCfb9qhfYwx5wZcTUcdyPz/view,https://drive.google.com/file/d/1mxonIQjN5qvQiwz0CoqLm37HoRnEYkwA/view","neo.png");
INSERT INTO Experience VALUES("Oct",2021,"Feb",2022,"ML Engineer",				"Training & Internship - Data Science",								"Verzeo",									"https://learn.verzeo.in/",																"Remote","",3,"Verzeo DS - Course Completion Certificate - 848621739.jpg,Verzeo DS - Internship Completion Certificate - 873087021.jpg,Verzeo DS - Outstanding Certificate - 1457460912.jpg","https://drive.google.com/file/d/1oHalK769MFV7EwNVA6pO-bRL6zA-X1yU/view,https://drive.google.com/file/d/1KMLQFEyVzTX1_8GGCxsXDwAIsrPHY5eK/view,https://drive.google.com/file/d/1g7HfsiuVi9nzR8-cQAFKmnp2NTi9-Aea/view","verzeo.png");
INSERT INTO Experience VALUES("Sep",2021,"Nov",2021,"ML Engineer",				"Training & Internship - Data Science",								"1stop.ai",									"https://www.1stop.ai/",																"Remote","",3,"1stop - Certificate of Participation.jpg,1stop - Internship Certificate.jpg,1stop - Project Completion Certificate.jpg","https://drive.google.com/file/d/1dsmAzyFnFaB9dvim8Oo-M2GzC_NjWO3k/view,https://drive.google.com/file/d/1lemuQhlQRNs2A5FFYZXztMEN5SQTgC62/view,https://drive.google.com/file/d/1w80T8wjJWOaQvr-Y1gLYqXVcPHb-q-Wz/view","1stop.jpg");
INSERT INTO Experience VALUES("Sep",2021,"Oct",2021,"ML Engineer",				"Training & Internship - Data Science",								"YHills",									"https://yhills.thinkific.com/",														"Remote","",2,"YHills - Course Completion Certificate.jpg,YHills - Internship Completion Certificate.jpg","https://drive.google.com/file/d/1V6x1FZUbTy1-0-riM3fyrsIcKe8xZD_q/view,https://drive.google.com/file/d/1rOTrE_MF6i6ie2fNum5l70R9eHPf1kLs/view","yhills_logo.jpg");
INSERT INTO Experience VALUES("Mar",2020,"Jul",2020,"Deep Learning Engineer",	"Training & Internship - Applied Machine Learning & Data Science",	"Indian Institute of Technology, Kanpur",	"http://iitk.ac.in/new/data/iitk/","Remote","",2,"IIT Kanpur - Training & Internship Completion Certificate - Aashish Bansal_page-0001.jpg,IIT Kanpur - PROJECT CERTIFICATE Aashish Bansal_page-0001.jpg","https://drive.google.com/file/d/1GCMRYOR93DyWBguRaPqALgHSWt3b77c8/view,https://drive.google.com/file/d/1_5YA13uUlWTQJ55385J9yI__79XhZ9FF/view","iitk.jpg");
INSERT INTO Experience VALUES("Dec",2019,"Jan",2020,"ML Engineer",				"Training & Internship - Artificial Intelligence",					"Verzeo",									"https://learn.verzeo.in/","Remote","",2,"Verzeo AI - Course Completion Certificate.jpg,Verzeo AI - internship certificate.jpg","https://drive.google.com/file/d/1xQXNHhRxoDS5QCRS5MSmk0XrqiAvw3gy/view,https://drive.google.com/file/d/1zzI9wDlg22RWqZPqy6hfBDQLfMD7RWmw/view","verzeo.png");

CREATE TABLE Projects(
	CompletionMonth VARCHAR(10),
    CompletionYear INT,
    TitleOfProject VARCHAR(255),
    Company VARCHAR(255),
    ProjectCategory VARCHAR(255),
    ProjectType VARCHAR(255),
    ProjectDescription LONGTEXT,
    ProjectGitHubLink LONGTEXT,
    ProjectDocumentLink LONGTEXT
);

CREATE TABLE IndustrySkills(
	IndustrySkillName VARCHAR(255) PRIMARY KEY,
    IndustrySkillImageName VARCHAR(255),
	IndustrySkillCategory VARCHAR(255),
    IndustrySkillProficiency INT
);

CREATE TABLE ProgrammingSkills(
	ProgrammingLanguageName VARCHAR(255) PRIMARY KEY,
    ProgrammingLanguageImageName VARCHAR(255),
    ProgrammingLanguageCategory VARCHAR(255),
    ProgrammingLanguageProficiency INT
);

CREATE TABLE BADGES(
	BadgeTitle VARCHAR(255) PRIMARY KEY,
	BadgeCompletionMonth VARCHAR(255),
    BadgeCompletionYear INT,
    BadgeIssuingCompanyName VARCHAR(255),
    BadgeAuthorizationCompanyName VARCHAR(255),
    BadgeDescription LONGTEXT,
    BadgeLink LONGTEXT
);

CREATE TABLE Certificates(
	CertificateTitle VARCHAR(255) PRIMARY KEY,
	CertificateIssueDate INT,
    CertificateIssueMonth VARCHAR(255),
    CertificateIssueYear INT,
    CertificateIssueCompany VARCHAR(255),
    CertificateImageName VARCHAR(255),
    CertificateRemarks VARCHAR(255),
    CertificateDescription LONGTEXT
);

CREATE TABLE Courses(
	CourseCertificateID VARCHAR(255) PRIMARY KEY,
	CourseCompletionMonth VARCHAR(10),
    CourseCompletionYear INT,
    CourseTitle VARCHAR(255),
    CourseCompanyProvider VARCHAR(255),
    CertificateLink LONGTEXT,
    CertificateCompanyImageName VARCHAR(255)
);

