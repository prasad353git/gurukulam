-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 23, 2021 at 03:42 AM
-- Server version: 8.0.17
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gurukul`
--

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `id` int(11) NOT NULL DEFAULT '1',
  `home` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `campus` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `trust` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `message` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `vision` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `computer` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `science` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `library` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `auditorium` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `sports` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `extra` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `working` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `admission` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `home`, `campus`, `trust`, `message`, `vision`, `computer`, `science`, `library`, `auditorium`, `sports`, `extra`, `working`, `admission`) VALUES
(1, 'The institution, which is the vision of our beloved chairman and renowned industrialist, philanthropist, Mr.Arya was started in the year 1987 and has completed 33 years of successful and premier service in the field of primary & secondary education in this rural part of Uttar Kannada. The institution has grown leaps and bounds in terms of infrastructure, intake and faculty, since its inception. The institution is affiliated to Department of primary & secondary Education, Govt. of Karnataka and approved by All India Council for primary & secondary Education, New Delhi. The institution offers ten years of courses.', 'Campus The campus is conveniently located in Murudeshwar which is well known tourist spot & and pilgrimage center which is half a kilometer of the stretch of NH -66 that connects coastal town Bhatkal & Honnavar. The campus is just 10km away from Bhatkal & 25 km from Honnavar and well connected by road & raile. Konkan railway connects Murudeshwar with the major cities of Karnataka State & other state like Maharstra, Goa,keral & Tamilnadu. Nearest airports are in Hubli, mangalore & Goa. The institution has well furnished separate hostels for Boys and Girls with all amenities', 'We aim at training the students to grasp and learn most of the advanced technologies in the world. Our motto is to support parents to fulfil their dream about their children. Our technical institute help the students by providing extensive training in modern technologies.<br>\r\n\r\nWe provide training in up-to-date revised syllabus, so that business and industry can employ our students after getting qualified certifications overall personality development of our students.<br>\r\n\r\nWe have well-trained faculty members, lecturers who are dedicated to share their knowledge to our students in various Engineering disciplines such as Automobile, Ceramic, Civil, Computers, Electrical, Electronics & Mechanical Engineering. We hope the bright prospectus future for our great products - the students.', '\r\nWe aim at training the students to grasp and learn most of the advanced technologies in the world. Our motto is to support parents to fulfil their dream about their children. Our technical institute help the students by providing extensive training in modern technologies.\r\nWe provide training in up-to-date revised syllabus.', '<h3>Vision</h3>\r\nTo treat every student as an individual, to recognise his/her potential and to ensure that each recieves the best training to meet ones career ambition and goals.<br>\r\n<h3>Mission</h3>\r\nThe institute emphasises on all round development of students, aim at producing quality professionals and worthy citizens of our country helping in its progress and development.', 'Our Gurukulam has two computer labs, one in the primary section and the other in the high school section to make students computer literate and to enhance their knowledge and understanding in other subjects and other areas of life. The labs are fully equipped with more than 80 computers connected together in a network along with the faculty controller device. It is also supported by Uninterrupted Power supply. The labs can accommodate over 50 students at the same time The computer labs are well equipped with LCD (Liquid Crystal Display), Projector, OHP (Overhead Projector), Computers with multimedia kit, Printers, Scanners and an assortment of excellent education software.', 'Our Gurukulam has one of the best and beautifully designed science laboratories which consists of Physics, Chemistry and Biology labs. They are in turn equipped with all the modern apparatus and instruments.The school has a well-equipped and spacious physics & chemistry laboratory which can comfortably accommodate about 50 students at a time. All the major equipments necessary to conduct the required experiments, which form the part of the curriculum, are found in this lab. The lab consists of all the required physical balances, meters, U-tube apparatus, meter bridges, rheostats, chemicals, glass apparatus, test tubes, burettes, pipettes, volumetric flasks, beakers etc. to facilitate the students in their experiments.', 'Our Gurukulam library is a nucleus around which the whole education system revolves. There are more than 10,000 books which includes journals, magazines, periodicals, fiction, mathematics, arts, science, computers, history, english, value education, language, reference books and much more. The reference section includes almost all the latest encyclopedias of school level, books on general knowledge, various dictionaries, year books, quiz books, arts and craft books and project books. The magazines include Teenager, Down to Earth, Readers Digest, Childrens Digest, Peas, Taranga, Diksoochi, Kasturi, Chandamama etc. It can accommodate approximately 60 students at a time.', 'The auditorium is the heart of the school where all the cultural programmes and activities take place.The school auditorium is spacious enough to accommodate more than two thousand five hundred people. The auditorium is fully equipped with speakers, focus lights, other lighting arrangements, audio system, mike system and all the other modern equipments. There is a massive stage with a fully electronic screen. All the major functions of the school like the Founders Day celebrations, Jubilee celebrations, Teachers Day and Childrens Day celebrations etc are conducted here.', 'Games and sports play a major role in the overall development of a child. Our Gurukulam has well qualified, full-time physical education teachers to supervise and co-ordinate the various sports activities. Experts provide special coaching in their respective disciplines, and students are offered maximum opportunity to participate in the inter-school, district, state and national level competitions. Various sports and games like Basketball, Throw ball, Volleyball, Kho-Kho, Athletics etc. are included in the curriculum. The school also encourages private coaching in Swimming, Tennis, Badminton and Table Tennis etc.', 'Horse riding,\r\nSwimming,\r\nCommunication skills,\r\nLeadership skills,\r\n Life history of Legends\r\nBased on Ramayana, Mahabharata, Purana, History, Recent times.<br>\r\nVeda~Patha: Orientation in all the systems of Vedic wisdom and Vision,\r\nSanskrit,\r\nThe Bhagavad Gita,\r\nVyayamaki: Traditional Indian Exercises,\r\nSwastha~Vritta: Ayurveda for self healthcare,\r\nSadachara : Right Conduct ( Dharmashastra simplified)Yoga.\r\n<br>Vocal Music,\r\nInstrumental Music,\r\nDance,\r\nYakshagana,\r\nDrawing & painting, Cooking,\r\nHome Management,\r\nVrikshayurveda (Science of plant life – Gardening and Agriculture),\r\nMalla Yuddha &\r\nKalari Payattu etc.', '<h3>Pre Primary-</h3>\r\n<p>08:30 a.m. - 12.10 p.m.<br>\r\n12:50 p.m. - 02.50 p.m.</p>\r\n\r\n<h3>Primary & Higher Primary-</h3>\r\n<p>08:30 a.m. - 12.10 p.m.<br>\r\n12:50 p.m. - 03.30 p.m.</p>\r\n\r\n<h3>Principals Office-</h3>\r\n<p>9.30 a.m. - 10.30 a.m. (on working days only)</p>\r\n<p>\r\nParents may meet the Principal between 9.30 a.m. and 10.30 a.m. on any working day and at other times only by prior appointment.<br>\r\nParents and guardians can also meet the teachers as often as possible after or before the class hours or at other times fixed by the school authorities for parent-teacher meetings.\r\n</p>\r\n', 'Admissions are normally made only to the lower kindergarden and the age limit is four years. In case of admission to other classes, every candidate for admission must be introduced in person by her parents, who will be responsible to the Principal for her conduct and progress. Academics (Norms For Promotion) students are expected to have the required attendance as per the Rules and Regulations laid down by Education Department.');

-- --------------------------------------------------------

--
-- Table structure for table `kdetails`
--

CREATE TABLE `kdetails` (
  `id` int(11) NOT NULL DEFAULT '1',
  `home` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `campus` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `trust` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `message` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `vision` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `computer` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `science` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `library` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `auditorium` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `sports` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `extra` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `working` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `admission` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kdetails`
--

INSERT INTO `kdetails` (`id`, `home`, `campus`, `trust`, `message`, `vision`, `computer`, `science`, `library`, `auditorium`, `sports`, `extra`, `working`, `admission`) VALUES
(1, 'ಉತ್ತರ ಕನ್ನಡದ ಈ ಗ್ರಾಮೀಣ ಭಾಗದಲ್ಲಿ ನಮ್ಮ ಪ್ರೀತಿಯ ಅಧ್ಯಕ್ಷ ಮತ್ತು ಖ್ಯಾತ ಕೈಗಾರಿಕೋದ್ಯಮಿ ಶ್ರೀ ಆರ್ಯ ಅವರು ಪ್ರಾಥಮಿಕ ಮತ್ತು ಪ್ರೌಢ\r\n ಶಿಕ್ಷಣ ಕ್ಷೇತ್ರದಲ್ಲಿ ಯಶಸ್ವಿ ಮತ್ತು ಪ್ರಧಾನ ಸೇವೆಯನ್ನು ನೀಡಲು ಈ ಸಂಸ್ಥೆಯನ್ನು ಪ್ರಾರಂಭಿಸಿದ್ದಾರೆ. ಸಂಸ್ಥೆಯು ಮೂಲಸೌಕರ್ಯ, \r\n ಸೇವನೆ ಮತ್ತು ಅಧ್ಯಾಪಕರ ವಿಷಯದಲ್ಲಿ ಚಿಮ್ಮಿ ಬೆಳೆದಿದೆ. ಈ ಸಂಸ್ಥೆಯು ಪ್ರಾಥಮಿಕ ಮತ್ತು ಪ್ರೌಢ ಶಿಕ್ಷಣ ಇಲಾಖೆಗೆ ಸಂಬಂಧಿಸಿದೆ. \r\n ಕರ್ನಾಟಕದ ಮತ್ತು ನವದೆಹಲಿಯ ಪ್ರಾಥಮಿಕ ಮತ್ತು ಪ್ರೌಢ ಶಿಕ್ಷಣಕ್ಕಾಗಿ ಆಲ್ ಇಂಡಿಯಾ ಕೌನ್ಸಿಲ್ ಅನುಮೋದಿಸಿದೆ. ಸಂಸ್ಥೆಯು ಹತ್ತು ವರ್ಷಗಳ\r\n ಪಠ್ಯಕ್ರಮಗಳನ್ನು ನೀಡುತ್ತದೆ.', 'ಶಾಲೆಯ ಆವರಣ ಅನುಕೂಲಕರವಾಗಿ ಮುರುಡೇಶ್ವರದಲ್ಲಿದೆ, ಇದು ಪ್ರಸಿದ್ಧ ಪ್ರವಾಸಿ ತಾಣ ಮತ್ತು ತೀರ್ಥಯಾತ್ರೆಯ ಕೇಂದ್ರವಾಗಿದ್ದು,\r\n ಇದು ಕರಾವಳಿ ಪಟ್ಟಣವಾದ ಭಟ್ಕಳ ಮತ್ತು ಹೊನ್ನಾವರಕ್ಕೆ ಸಂಪರ್ಕ ಕಲ್ಪಿಸುವ ಎನ್ಎಚ್ -66 ವಿಸ್ತಾರದಿಂದ ಅರ್ಧ ಕಿಲೋಮೀಟರ್ ದೂರದಲ್ಲಿದೆ.\r\n ಕ್ಯಾಂಪಸ್ ಭಟ್ಕಳ ನಿಂದ ಕೇವಲ 10 ಕಿ.ಮೀ ದೂರದಲ್ಲಿದೆ ಮತ್ತು ಹೊನ್ನಾವರದಿಂದ 25 ಕಿ.ಮೀ ದೂರದಲ್ಲಿದೆ ಮತ್ತು ರಸ್ತೆ ಮತ್ತು ರೈಲು ಮೂಲಕ \r\n ಉತ್ತಮ ಸಂಪರ್ಕ ಹೊಂದಿದೆ. ಕೊಂಕಣ ರೈಲ್ವೆ ಮುರುಡೇಶ್ವರವನ್ನು ಕರ್ನಾಟಕ ರಾಜ್ಯ ಮತ್ತು ಮಹಾರಾಷ್ಟ್ರ, ಗೋವಾ, ಕೇರಳ ಮತ್ತು ತಮಿಳುನಾಡಿನಂತಹ\r\n ಪ್ರಮುಖ ನಗರಗಳೊಂದಿಗೆ ಸಂಪರ್ಕಿಸುತ್ತದೆ. ಇತ್ತೀಚಿನ ವಿಮಾನ ನಿಲ್ದಾಣಗಳು ಹುಬ್ಬಳ್ಳಿ, ಮಂಗಳೂರು ಮತ್ತು ಗೋವಾದಲ್ಲಿವೆ. ಸಂಸ್ಥೆಯು ಎಲ್ಲಾ ಸೌಲಭ್ಯಗಳೊಂದಿಗೆ\r\n ಬಾಲಕ ಮತ್ತು ಬಾಲಕಿಯರಿಗಾಗಿ ಪ್ರತ್ಯೇಕ ವಸತಿ ನಿಲಯಗಳನ್ನು ಒದಗಿಸಿದೆ.', '', 'ವಿಶ್ವದ ಹೆಚ್ಚಿನ ಸುಧಾರಿತ ತಂತ್ರಜ್ಞಾನಗಳನ್ನು ಗ್ರಹಿಸಲು ಮತ್ತು ಕಲಿಯಲು ವಿದ್ಯಾರ್ಥಿಗಳಿಗೆ ತರಬೇತಿ ನೀಡುವ ಗುರಿ ಹೊಂದಿದ್ದೇವೆ. ಮಕ್ಕಳ ಬಗ್ಗೆ ಅವರ ಕನಸನ್ನು \r\nಈಡೇರಿಸಲು ಪೋಷಕರನ್ನು ಬೆಂಬಲಿಸುವುದು ನಮ್ಮ ಧ್ಯೇಯ. ನಮ್ಮ ತಾಂತ್ರಿಕ ಸಂಸ್ಥೆ ಆಧುನಿಕ ತಂತ್ರಜ್ಞಾನಗಳಲ್ಲಿ ವ್ಯಾಪಕ ತರಬೇತಿ ನೀಡುವ ಮೂಲಕ ವಿದ್ಯಾರ್ಥಿಗಳಿಗೆ \r\nಸಹಾಯ ಮಾಡುತ್ತದೆ.\r\nನಾವು ನವೀಕೃತ ಪರಿಷ್ಕೃತ ಪಠ್ಯಕ್ರಮದಲ್ಲಿ ತರಬೇತಿ ನೀಡುತ್ತೇವೆ.', '<h4>ದೃಷ್ಟಿ</h4>\r\n <p>ಸಂಸ್ಥೆಯು ಪ್ರತಿಯೊಬ್ಬ ವಿದ್ಯಾರ್ಥಿಯನ್ನು ಒಬ್ಬ ವ್ಯಕ್ತಿಯಂತೆ ಪರಿಗಣಿಸಲು, ಅವನ / ಅವಳ ಸಾಮರ್ಥ್ಯವನ್ನು ಗುರುತಿಸಲು ಮತ್ತು ಪ್ರತಿಯೊಬ್ಬರೂ ವೃತ್ತಿಜೀವನದ ಮಹತ್ವಾಕಾಂಕ್ಷೆ\r\n ಮತ್ತು ಗುರಿಗಳನ್ನು ಪೂರೈಸಲು ಅತ್ಯುತ್ತಮ ತರಬೇತಿಯನ್ನು ಪಡೆಯುತ್ತಾರೆ ಎಂದು ಖಚಿತಪಡಿಸಿಕೊಳ್ಳುವುದು.</p>\r\n<h4>ಗುರಿ</h4>\r\n <p>ಸಂಸ್ಥೆಯು ಶಾಲೆಯ ವಿದ್ಯಾರ್ಥಿಗಳ ಎಲ್ಲಾ ಸುತ್ತಿನ ಅಭಿವೃದ್ಧಿಗೆ ಒತ್ತು ನೀಡುತ್ತದೆ, ಗುಣಮಟ್ಟದ ವೃತ್ತಿಪರರನ್ನು ಮತ್ತು ನಮ್ಮ ದೇಶದ ಯೋಗ್ಯ ನಾಗರಿಕರನ್ನು\r\n ಉತ್ಪಾದಿಸುವ ಗುರಿಯನ್ನು ಹೊಂದಿದೆ ಮತ್ತು ಅದರ ಪ್ರಗತಿ ಮತ್ತು ಅಭಿವೃದ್ಧಿಗೆ ಸಹಾಯ ಮಾಡುತ್ತದೆ.</p>', 'ನಮ್ಮ ಗುರುಕುಲದಲ್ಲಿ ಎರಡು ಕಂಪ್ಯೂಟರ್ ಲ್ಯಾಬ್‌ಗಳಿವೆ, ಒಂದು ಪ್ರಾಥಮಿಕ ವಿಭಾಗದಲ್ಲಿ ಮತ್ತು ಇನ್ನೊಂದು ಪ್ರೌಢ ಶಾಲಾ ವಿಭಾಗದಲ್ಲಿ ವಿದ್ಯಾರ್ಥಿಗಳನ್ನು\r\n ಕಂಪ್ಯೂಟರ್ ಸಾಕ್ಷರರನ್ನಾಗಿ ಮಾಡಲು ಮತ್ತು ಇತರ ವಿಷಯಗಳು ಮತ್ತು ಜೀವನದ ಇತರ ಕ್ಷೇತ್ರಗಳಲ್ಲಿ ಅವರ ಜ್ಞಾನ ಮತ್ತು ತಿಳುವಳಿಕೆಯನ್ನು ಹೆಚ್ಚಿಸಲು. ಅಧ್ಯಾಪಕ\r\n ನಿಯಂತ್ರಕ ಸಾಧನದೊಂದಿಗೆ ನೆಟ್‌ವರ್ಕ್‌ನಲ್ಲಿ ಒಟ್ಟಿಗೆ ಸಂಪರ್ಕಗೊಂಡಿರುವ 80 ಕ್ಕೂ ಹೆಚ್ಚು ಕಂಪ್ಯೂಟರ್‌ಗಳನ್ನು ಲ್ಯಾಬ್‌ಗಳು ಸಂಪೂರ್ಣವಾಗಿ ಹೊಂದಿವೆ.\r\n ಇದು ನಿರಂತರ ವಿದ್ಯುತ್ ಸರಬರಾಜಿನಿಂದ ಸಹ ಬೆಂಬಲಿತವಾಗಿದೆ. ಲ್ಯಾಬ್‌ಗಳು ಒಂದೇ ಸಮಯದಲ್ಲಿ 50 ಕ್ಕೂ ಹೆಚ್ಚು ವಿದ್ಯಾರ್ಥಿಗಳಿಗೆ ಸ್ಥಳಾವಕಾಶ ಕಲ್ಪಿಸಬಲ್ಲವು.\r\n ಕಂಪ್ಯೂಟರ್ ಲ್ಯಾಬ್‌ಗಳಲ್ಲಿ ಎಲ್‌ಸಿಡಿ (ಲಿಕ್ವಿಡ್ ಕ್ರಿಸ್ಟಲ್ ಡಿಸ್ಪ್ಲೇ), ಪ್ರೊಜೆಕ್ಟರ್, ಒಎಚ್‌ಪಿ (ಓವರ್‌ಹೆಡ್ ಪ್ರೊಜೆಕ್ಟರ್), ಮಲ್ಟಿಮೀಡಿಯಾ ಕಿಟ್ ಹೊಂದಿರುವ\r\n ಕಂಪ್ಯೂಟರ್‌ಗಳು, ಮುದ್ರಕಗಳು, ಸ್ಕ್ಯಾನರ್‌ಗಳು ಮತ್ತು ಅತ್ಯುತ್ತಮ ಶಿಕ್ಷಣ ಸಾಫ್ಟ್‌ವೇರ್ ಸಂಗ್ರಹವಿದೆ.', '<p>ನಮ್ಮ ಗುರುಕುಲವು ಭೌತಶಾಸ್ತ್ರ, ರಸಾಯನಶಾಸ್ತ್ರ ಮತ್ತು ಜೀವಶಾಸ್ತ್ರ ಪ್ರಯೋಗಾಲಯಗಳನ್ನು ಒಳಗೊಂಡಿರುವ ಅತ್ಯುತ್ತಮ ಮತ್ತು ಸುಂದರವಾಗಿ ವಿನ್ಯಾಸಗೊಳಿಸಲಾದ \r\nವಿಜ್ಞಾನ ಪ್ರಯೋಗಾಲಯಗಳನ್ನು ಹೊಂದಿದೆ. ಅವು ಎಲ್ಲಾ ಆಧುನಿಕ ಉಪಕರಣಗಳು ಮತ್ತು ಉಪಕರಣಗಳನ್ನು ಹೊಂದಿವೆ. ಶಾಲೆಯು ಸುಸಜ್ಜಿತ ಮತ್ತು ವಿಶಾಲವಾದ\r\nಭೌತಶಾಸ್ತ್ರ ಮತ್ತು ರಸಾಯನಶಾಸ್ತ್ರ ಪ್ರಯೋಗಾಲಯವನ್ನು ಹೊಂದಿದೆ, ಇದು ಒಂದು ಸಮಯದಲ್ಲಿ ಸುಮಾರು 50 ವಿದ್ಯಾರ್ಥಿಗಳಿಗೆ ಆರಾಮವಾಗಿ ಸ್ಥಳಾವಕಾಶ ನೀಡುತ್ತದೆ.\r\n ಪ್ರಯೋಗಾಲಯವು ವಿದ್ಯಾರ್ಥಿಗಳಿಗೆ ಅಗತ್ಯವಿರುವ ಎಲ್ಲಾ ಭೌತಿಕ ಸಮತೋಲನಗಳು, ಮೀಟರ್‌ಗಳು, ಯು-ಟ್ಯೂಬ್ ಉಪಕರಣಗಳು, ಮೀಟರ್ ಸೇತುವೆಗಳು, \r\n ರಿಯೋಸ್ಟಾಟ್‌ಗಳು, ರಾಸಾಯನಿಕಗಳು, ಗಾಜಿನ ಉಪಕರಣಗಳು, ಪರೀಕ್ಷಾ ಟ್ಯೂಬ್‌ಗಳು, ಬ್ಯುರೆಟ್‌ಗಳು, ಪೈಪೆಟ್‌ಗಳು, ವಾಲ್ಯೂಮೆಟ್ರಿಕ್ ಫ್ಲಾಸ್ಕ್ಗಳು, ಬೀಕರ್‌ಗಳು \r\n ಇತ್ಯಾದಿ ಪಠ್ಯಕ್ರಮದ ಭಾಗವಾಗಿರುವ ಅಗತ್ಯವಾದ ಎಲ್ಲಾ ಪ್ರಮುಖ ಉಪಕರಣಗಳನ್ನು ಒಳಗೊಂಡಿದೆ.</p>', 'ನಮ್ಮ ಗುರುಕುಲದ ಗ್ರಂಥಾಲಯವು ಒಂದು ಕೇಂದ್ರವಾಗಿದ್ದು, ಅದರ ಸುತ್ತ ಇಡೀ ಶಿಕ್ಷಣ ವ್ಯವಸ್ಥೆಯು ಸುತ್ತುತ್ತದೆ. ಜರ್ನಲ್‌ಗಳು, ನಿಯತಕಾಲಿಕೆಗಳು, \r\nನಿಯತಕಾಲಿಕಗಳು, ಕಾದಂಬರಿ, ಗಣಿತ, ಕಲೆ, ವಿಜ್ಞಾನ, ಕಂಪ್ಯೂಟರ್, ಇತಿಹಾಸ, ಇಂಗ್ಲಿಷ್, ಮೌಲ್ಯ ಶಿಕ್ಷಣ, ಭಾಷೆ, ಉಲ್ಲೇಖ ಪುಸ್ತಕಗಳು ಮತ್ತು ಇನ್ನೂ \r\nಹೆಚ್ಚಿನದನ್ನು ಒಳಗೊಂಡಿರುವ 10,000 ಕ್ಕೂ ಹೆಚ್ಚು ಪುಸ್ತಕಗಳಿವೆ. ಉಲ್ಲೇಖ ವಿಭಾಗವು ಶಾಲಾ ಹಂತದ ಎಲ್ಲಾ ಇತ್ತೀಚಿನ ವಿಶ್ವಕೋಶಗಳು, ಸಾಮಾನ್ಯ ಜ್ಞಾನದ\r\nಪುಸ್ತಕಗಳು, ವಿವಿಧ ನಿಘಂಟುಗಳು, ವರ್ಷದ ಪುಸ್ತಕಗಳು, ರಸಪ್ರಶ್ನೆ ಪುಸ್ತಕಗಳು, ಕಲೆ ಮತ್ತು ಕರಕುಶಲ ಪುಸ್ತಕಗಳು ಮತ್ತು ಪ್ರಾಜೆಕ್ಟ್ ಪುಸ್ತಕಗಳನ್ನು ಒಳಗೊಂಡಿದೆ.\r\nನಿಯತಕಾಲಿಕೆಗಳಲ್ಲಿ ಟೀನೇಜರ್, ಡೌನ್ ಟು ಅರ್ಥ್, ರೀಡರ್ಸ್ ಡೈಜೆಸ್ಟ್, ಚಿಲ್ಡ್ರನ್ಸ್ ಡೈಜೆಸ್ಟ್, ಬಟಾಣಿ, ತರಂಗಾ, ಡಿಕ್ಸೂಚಿ, ಕಸ್ತೂರಿ, ಚಂದಮಾಮಾ ಇತ್ಯಾದಿ ಸೇರಿವೆ.\r\nಇದು ಒಂದು ಸಮಯದಲ್ಲಿ ಸುಮಾರು 60 ವಿದ್ಯಾರ್ಥಿಗಳಿಗೆ ಅವಕಾಶ ಕಲ್ಪಿಸುತ್ತದೆ.', 'ಎಲ್ಲಾ ಸಾಂಸ್ಕೃತಿಕ ಕಾರ್ಯಕ್ರಮಗಳು ಮತ್ತು ಚಟುವಟಿಕೆಗಳು ನಡೆಯುವ ಶಾಲೆಯ ಹೃದಯಭಾಗವು ಸಭಾಂಗಣವಾಗಿದೆ. ಶಾಲಾ ಸಭಾಂಗಣವು ಎರಡು ಸಾವಿರದ ಐನೂರಕ್ಕೂ\r\n ಹೆಚ್ಚು ಜನರಿಗೆ ಅವಕಾಶ ಕಲ್ಪಿಸುವಷ್ಟು ವಿಶಾಲವಾಗಿದೆ. ಸಭಾಂಗಣವು ಸ್ಪೀಕರ್‌ಗಳು, ಫೋಕಸ್ ಲೈಟ್ ಗಳು, ಇತರ ಬೆಳಕಿನ ವ್ಯವಸ್ಥೆಗಳು, ಆಡಿಯೊ ಸಿಸ್ಟಮ್, \r\n ಮೈಕ್ ಸಿಸ್ಟಮ್ ಮತ್ತು ಇತರ ಎಲ್ಲಾ ಆಧುನಿಕ ಉಪಕರಣಗಳನ್ನು ಹೊಂದಿದೆ. ಸಂಪೂರ್ಣ ಎಲೆಕ್ಟ್ರಾನಿಕ್ ಪರದೆಯೊಂದಿಗೆ ಬೃಹತ್ ಹಂತವಿದೆ. ಸಂಸ್ಥಾಪಕರ ದಿನಾಚರಣೆ,\r\n ಜುಬಿಲಿ ಆಚರಣೆ, ಶಿಕ್ಷಕರ ದಿನ ಮತ್ತು ಮಕ್ಕಳ ದಿನಾಚರಣೆ ಮುಂತಾದ ಶಾಲೆಯ ಎಲ್ಲಾ ಪ್ರಮುಖ ಕಾರ್ಯಗಳನ್ನು ಇಲ್ಲಿ ನಡೆಸಲಾಗುತ್ತದೆ.', 'ಮಗುವಿನ ಒಟ್ಟಾರೆ ಬೆಳವಣಿಗೆಯಲ್ಲಿ ಆಟಗಳು ಮತ್ತು ಕ್ರೀಡೆಗಳು ಪ್ರಮುಖ ಪಾತ್ರವಹಿಸುತ್ತವೆ. ನಮ್ಮ ಗುರುಕುಲವು ವಿವಿಧ ಕ್ರೀಡಾ ಚಟುವಟಿಕೆಗಳನ್ನು ಮೇಲ್ವಿಚಾರಣೆ\r\nಮಾಡಲು ಮತ್ತು ಸಂಯೋಜಿಸಲು ಉತ್ತಮ ಅರ್ಹ, ಪೂರ್ಣ ಸಮಯದ ದೈಹಿಕ ಶಿಕ್ಷಣ ಶಿಕ್ಷಕರನ್ನು ಹೊಂದಿದೆ. ತಜ್ಞರು ಆಯಾ ವಿಭಾಗಗಳಲ್ಲಿ ವಿಶೇಷ ತರಬೇತಿಯನ್ನು\r\nನೀಡುತ್ತಾರೆ, ಮತ್ತು ವಿದ್ಯಾರ್ಥಿಗಳಿಗೆ ಅಂತರ ಶಾಲೆ, ಜಿಲ್ಲೆ, ರಾಜ್ಯ ಮತ್ತು ರಾಷ್ಟ್ರಮಟ್ಟದ ಸ್ಪರ್ಧೆಗಳಲ್ಲಿ ಭಾಗವಹಿಸಲು ಗರಿಷ್ಠ ಅವಕಾಶವನ್ನು ನೀಡಲಾಗುತ್ತದೆ.\r\nಬಾಸ್ಕೆಟ್‌ಬಾಲ್, ಥ್ರೋ ಬಾಲ್, ವಾಲಿಬಾಲ್, ಖೋ-ಖೋ, ಅಥ್ಲೆಟಿಕ್ಸ್ ಮುಂತಾದ ವಿವಿಧ ಕ್ರೀಡೆಗಳು ಮತ್ತು ಆಟಗಳನ್ನು ಪಠ್ಯಕ್ರಮದಲ್ಲಿ ಸೇರಿಸಲಾಗಿದೆ.\r\nಶಾಲೆಯು ಈಜು, ಟೆನಿಸ್, ಬ್ಯಾಡ್ಮಿಂಟನ್ ಮತ್ತು ಟೇಬಲ್ ಟೆನಿಸ್ ಇತ್ಯಾದಿಗಳಲ್ಲಿ ಖಾಸಗಿ ತರಬೇತಿಯನ್ನು ಪ್ರೋತ್ಸಾಹಿಸುತ್ತದೆ.', 'ಕುದುರೆ ಸವಾರಿ, ಈಜು, ಸಂವಹನ ಕೌಶಲ್ಯ, ನಾಯಕತ್ವ ಕೌಶಲ್ಯ, ರಾಮಾಯಣ, ಮಹಾಭಾರತ, ಪುರಾಣ, ಇತಿಹಾಸ, ಇತ್ತೀಚಿನ ಸಮಯಗಳನ್ನು ಆಧರಿಸಿದ\r\nದಂತಕಥೆಗಳ ಜೀವನ ಇತಿಹಾಸ.<br>\r\nವೇದ ~ ಪಾಠ: ವೈದಿಕ ಬುದ್ಧಿವಂತಿಕೆ ಮತ್ತು ದೃಷ್ಟಿ, ಸಂಸ್ಕೃತ, ಭಗವದ್ಗೀತೆ, ವ್ಯಯಮಕಿ: ಸಾಂಪ್ರದಾಯಿಕ ಭಾರತೀಯ ವ್ಯಾಯಾಮಗಳು,<br> \r\nಸ್ವಸ್ಥ ~ ವೃತ್ತ: ಸ್ವಯಂ ಆರೋಗ್ಯಕ್ಕಾಗಿ ಆಯುರ್ವೇದ, ಸದಾಚಾರ: ಸರಿಯಾದ ನಡವಳಿಕೆ (ಧರ್ಮಶಾಸ್ತ್ರ ಸರಳೀಕೃತ) ಯೋಗದ ಎಲ್ಲಾ ವ್ಯವಸ್ಥೆಗಳಲ್ಲಿ ದೃಷ್ಟಿಕೋನ.<br>\r\nಗಾಯನ ಸಂಗೀತ, ವಾದ್ಯ ಸಂಗೀತ, ನೃತ್ಯ, ಯಕ್ಷಗಾನ, ಚಿತ್ರಕಲೆ ಮತ್ತು ವರ್ಣಚಿತ್ರಕಲೆ, ಅಡುಗೆ, ಮನೆ ನಿರ್ವಹಣೆ, \r\nವೃಕ್ಷಾಯುರ್ವೇದ (ಸಸ್ಯ ಜೀವನದ ವಿಜ್ಞಾನ - ತೋಟಗಾರಿಕೆ ಮತ್ತು ಕೃಷಿ), ಮಲ್ಲಾ ಯುದ್ದ ಮತ್ತು ಕಲಾರಿ ಪಯಟ್ಟು ಇತ್ಯಾದಿ.', '<h4>ಪೂರ್ವ ಪ್ರಾಥಮಿಕ-</h4>\r\n<p>ಬೆಳಿಗ್ಗೆ 08:30 - ಮಧ್ಯಾಹ್ನ 12.10.<br>\r\nಮಧ್ಯಾಹ್ನ 12:50 - 02.50 p.m.</p>\r\n\r\n<h4>ಪ್ರಾಥಮಿಕ ಮತ್ತು  ಪ್ರೌಢ-</h4>\r\n<p>ಬೆಳಿಗ್ಗೆ 08:30 - ಮಧ್ಯಾಹ್ನ 12.10.<br>\r\nಮಧ್ಯಾಹ್ನ 12:50 - ಮಧ್ಯಾಹ್ನ 03.30.</p>\r\n\r\n<h4>ಪ್ರಾಂಶುಪಾಲರ ಕಛೇರಿ-</h4>\r\n<p>ಬೆಳಿಗ್ಗೆ 9.30 - ಬೆಳಿಗ್ಗೆ 10.30 (ಕೆಲಸದ ದಿನಗಳಲ್ಲಿ ಮಾತ್ರ)</p>\r\n<p>\r\nಪೋಷಕರು ಯಾವುದೇ ಕೆಲಸದ ದಿನದಂದು ಬೆಳಿಗ್ಗೆ 9.30 ರಿಂದ ಬೆಳಿಗ್ಗೆ 10.30 ರ ನಡುವೆ ಪ್ರಾಂಶುಪಾಲರನ್ನು ಭೇಟಿಯಾಗಬಹುದು ಮತ್ತು ಇತರ ಸಮಯಗಳಲ್ಲಿ ಪೂರ್ವ \r\nನೇಮಕಾತಿಯ ಮೂಲಕ ಮಾತ್ರ.<br>\r\nಪೋಷಕರು ಮತ್ತು ಪಾಲಕರು ಶಿಕ್ಷಕರನ್ನು ತರಗತಿಯ ಸಮಯದ ನಂತರ ಅಥವಾ ಮೊದಲು  ಮತ್ತು ಶಾಲಾ ಅಧಿಕಾರಿಗಳಿಂದ ಪೋಷಕರು-ಶಿಕ್ಷಕರ ಸಭೆಗಳಿಗೆ \r\nನಿಗದಿಪಡಿಸಿದ ಇತರ ಸಮಯಗಳಲ್ಲಿ ಭೇಟಿಯಾಗಬಹುದು.</p>', '');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `message`) VALUES
(2, 'Sumukh', 'example@gmail.com', 'Hello world !!');

-- --------------------------------------------------------

--
-- Table structure for table `ntfac`
--

CREATE TABLE `ntfac` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `desg` varchar(255) NOT NULL,
  `images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ntfac`
--

INSERT INTO `ntfac` (`id`, `name`, `desg`, `images`) VALUES
(1, 'samp1', 'computer operator', 'ntfac/staff.jpg'),
(2, 'Ranjani', 'Clerk', 'ntfac/student.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id` int(11) NOT NULL,
  `rno` int(11) NOT NULL,
  `s1` int(11) NOT NULL,
  `s2` int(11) NOT NULL,
  `s3` int(11) NOT NULL,
  `s4` int(11) NOT NULL,
  `s5` int(11) NOT NULL,
  `s6` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `class` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `rno`, `s1`, `s2`, `s3`, `s4`, `s5`, `s6`, `total`, `class`) VALUES
(1, 1234, 85, 85, 85, 85, 85, 85, 510, 5);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `fname` char(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `lname` char(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `dob` date NOT NULL,
  `gender` bit(1) NOT NULL,
  `phno` char(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `adrs` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `padrs` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `ano` char(12) NOT NULL,
  `qual` char(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pwd` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `desg` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `fname`, `lname`, `dob`, `gender`, `phno`, `email`, `adrs`, `padrs`, `ano`, `qual`, `pwd`, `desg`) VALUES
(1, 'principal', NULL, '1990-01-01', b'1', '0123456789', 'principal@gmail.com', 'Bangalore', 'Bangalore', '012345678901', 'teacher', '12345678', 1),
(2, 'Bheema', 'S', '1989-03-03', b'1', '0192837465', 'qwerty@gmail.com', 'Bangalore', 'Bangalore', '1029384756', 'Btech', '0987654321', 3),
(3, 'Ranjani', 'S', '1995-06-12', b'1', '0192837465', 'rnjn@gmail.com', 'Bangalore', 'Bangalore', '123456', 'Engineering', '0987654321', 2);

-- --------------------------------------------------------

--
-- Table structure for table `staffbckup`
--

CREATE TABLE `staffbckup` (
  `id` int(11) NOT NULL,
  `fname` char(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `lname` char(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `dob` date NOT NULL,
  `gender` bit(1) NOT NULL,
  `phno` char(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `adrs` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `padrs` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `ano` char(12) NOT NULL,
  `qual` char(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pwd` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `desg` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staffbckup`
--

INSERT INTO `staffbckup` (`id`, `fname`, `lname`, `dob`, `gender`, `phno`, `email`, `adrs`, `padrs`, `ano`, `qual`, `pwd`, `desg`) VALUES
(1, 'principal', NULL, '1990-01-01', b'1', '0123456789', 'principal@gmail.com', 'Bangalore', 'Bangalore', '012345678901', 'teacher', '12345678', 1),
(2, 'Bheema', 'S', '1989-03-03', b'1', '0192837465', 'qwerty@gmail.com', 'Bangalore', 'Bangalore', '1029384756', 'Btech', '0987654321', 3),
(3, 'Ranjani', 'S', '1995-06-12', b'1', '0192837465', 'rnjn@gmail.com', 'Bangalore', 'Bangalore', '123456', 'Engineering', '0987654321', 2);

-- --------------------------------------------------------

--
-- Table structure for table `stubckup`
--

CREATE TABLE `stubckup` (
  `id` int(11) NOT NULL,
  `rno` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fname` char(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `lname` char(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `gender` bit(1) NOT NULL,
  `dob` date NOT NULL,
  `father` char(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `mother` char(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pno` char(15) NOT NULL,
  `sno` char(15) NOT NULL,
  `adrs` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `padrs` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `fdes` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `mdes` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `ano` char(12) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `religion` char(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `caste` char(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `scaste` char(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tc` bit(1) DEFAULT NULL,
  `ccer` bit(1) NOT NULL,
  `icer` bit(1) NOT NULL,
  `pwd` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `per` int(11) NOT NULL,
  `class` int(11) NOT NULL,
  `desg` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stubckup`
--

INSERT INTO `stubckup` (`id`, `rno`, `fname`, `lname`, `gender`, `dob`, `father`, `mother`, `pno`, `sno`, `adrs`, `padrs`, `fdes`, `mdes`, `ano`, `email`, `religion`, `caste`, `scaste`, `tc`, `ccer`, `icer`, `pwd`, `per`, `class`, `desg`) VALUES
(1, '123', 'Abhishek', 'A', b'0', '1998-12-12', 'Shiva', 'Parvathi', '0987654321', '0987654321', 'Mysore', 'Mysore', 'ASE', 'ASE', '0192837465', 'ab@gmail.com', 'Hindu', 'Brahmin', 'Smartha', b'1', b'0', b'0', '1234', 93, 5, 0);

-- --------------------------------------------------------

--
-- Table structure for table `stureg`
--

CREATE TABLE `stureg` (
  `sid` int(11) NOT NULL,
  `rno` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fname` char(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `lname` char(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `gender` bit(1) NOT NULL,
  `dob` date NOT NULL,
  `father` char(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `mother` char(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pno` char(15) NOT NULL,
  `sno` char(15) NOT NULL,
  `adrs` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `padrs` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `fdes` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `mdes` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `ano` char(12) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `religion` char(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `caste` char(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `scaste` char(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tc` bit(1) DEFAULT NULL,
  `ccer` bit(1) NOT NULL,
  `icer` bit(1) NOT NULL,
  `pwd` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `per` int(11) NOT NULL,
  `class` int(11) NOT NULL,
  `desg` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stureg`
--

INSERT INTO `stureg` (`sid`, `rno`, `fname`, `lname`, `gender`, `dob`, `father`, `mother`, `pno`, `sno`, `adrs`, `padrs`, `fdes`, `mdes`, `ano`, `email`, `religion`, `caste`, `scaste`, `tc`, `ccer`, `icer`, `pwd`, `per`, `class`, `desg`) VALUES
(1, '123', 'Abhishek', 'A', b'0', '1998-12-12', 'Shiva', 'Parvathi', '0987654321', '0987654321', 'Mysore', 'Mysore', 'ASE', 'ASE', '0192837465', 'ab@gmail.com', 'Hindu', 'Brahmin', 'Smartha', b'1', b'0', b'0', '1234', 93, 5, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tfac`
--

CREATE TABLE `tfac` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `desg` varchar(255) NOT NULL,
  `sdesg` varchar(255) NOT NULL,
  `images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tfac`
--

INSERT INTO `tfac` (`id`, `name`, `desg`, `sdesg`, `images`) VALUES
(1, 'Bheema S', 'teacher', 'Mathematics', 'tfac/staff.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `desg` int(11) NOT NULL,
  `class` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `pwd`, `desg`, `class`) VALUES
(1, 'principal@gmail.com', '12345678', 1, ''),
(2, 'qwerty@gmail.com', '0987654321', 3, ''),
(3, 'rnjn@gmail.com', '0987654321', 2, ''),
(4, 'ab@gmail.com', '1234', 4, '5'),
(5, 'inspection@gmail.com', '1234', 852, '');

-- --------------------------------------------------------

--
-- Table structure for table `wof`
--

CREATE TABLE `wof` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `year` int(11) NOT NULL,
  `achv` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wof`
--

INSERT INTO `wof` (`id`, `name`, `year`, `achv`, `class`, `image`) VALUES
(1, 'student1', 2021, 'Best student', '1st standard', 'wof/student.jpg'),
(2, 'student2', 2021, 'Best student', '2nd standard', 'wof/student.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kdetails`
--
ALTER TABLE `kdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ntfac`
--
ALTER TABLE `ntfac`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staffbckup`
--
ALTER TABLE `staffbckup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stubckup`
--
ALTER TABLE `stubckup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stureg`
--
ALTER TABLE `stureg`
  ADD PRIMARY KEY (`sid`),
  ADD UNIQUE KEY `id` (`sid`);

--
-- Indexes for table `tfac`
--
ALTER TABLE `tfac`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wof`
--
ALTER TABLE `wof`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ntfac`
--
ALTER TABLE `ntfac`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `staffbckup`
--
ALTER TABLE `staffbckup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `stubckup`
--
ALTER TABLE `stubckup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `stureg`
--
ALTER TABLE `stureg`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tfac`
--
ALTER TABLE `tfac`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `wof`
--
ALTER TABLE `wof`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
