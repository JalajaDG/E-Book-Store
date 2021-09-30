-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2021 at 06:17 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ebook_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `Id` int(20) NOT NULL,
  `Category` varchar(20) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Author` varchar(20) NOT NULL,
  `Language` varchar(20) NOT NULL,
  `Description` varchar(10000) NOT NULL,
  `Price` float NOT NULL,
  `Image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`Id`, `Category`, `Name`, `Author`, `Language`, `Description`, `Price`, `Image`) VALUES
(1, 'Horror', 'Imaginary Darkness', 'Dean Henryson', 'English', 'Fourteen-year-old Ashley Arroyo is afraid to fall asleep. Every night, shadows become bolder at tormenting her. She believes they are real because she\'s not the only one who sees them. Her therapist, Jeff Holloway and his girlfriend try to help but the girl vanishes. Jeff\'s girlfriend knows something she won\'t tell him. Escape into the powerful twists and turns of imaginary darkness with them. Dean Henryson is the author of the award-winning horror book, Fierce Peace, and his popular novel, A Love in Darkness. He was born and raised in California. He provides counselling to families and children in Los Angeles County. He also worked as a foster care social worker for many years, becoming inspired to write of the struggles of good and evil.', 50, '../img/horror2.jpg'),
(2, 'Horror', ' A love in darkness', 'Dean Henryson', 'English', 'He can bend people\'s minds to face the truth, and yet he barely seems to notice or care about Sharon. She wants Laif to be more interested.But he\'s more focused on saving an eight-year-old girl, Cindy, on Sharon\'s caseload of foster children. This girlis destined to save millions of people if her soul is not corrupted. But he can\'t use his powers to help Cindy. Instead, he and Sharon are told to look inside themselves to save her. What could be inside that is so important? Unless they find out, Cindy will be lost to evil forever.', 50, '../img/horror1.jpg'),
(3, 'Horror', 'Atruptatmagala Aakrandana', 'Prerana Kulkarni', 'Kannada', 'In this the horror book  there is a mystery in the painting, \"the story is about the darkest of souls, its cruelty as well as its agony and humanity.\" Seeing someone sleeping hungry is like going to another body, baking for them, and seeing them sleeping and being satisfied.\r\n\r\n', 50, '../img/horror3.jfif'),
(4, 'Horror', 'Brahmrakshas Ka Nai', 'Rajesh Joshi|', 'Hindi', 'Book describes story of brahmarakshas', 60, '../img/horror4.jpeg'),
(5, 'Horror', 'Lover? Ghost?', 'murali geetam', 'Telugu', 'Raghu is a software employee. He is very happy to get a job in a great company. But he later realized that it was only a matter of time. At that he meets a girl,who later becomes too close to him.After sometime he realises that the girl is ghost.', 55, '../img/horror5.jpg'),
(6, 'Poetry', 'Under A Starry Sky', 'Theodora Oniceanu', 'English', 'Collection of poems with the theme of the Sun and the Moon, creation of the world, love and fantasy,poetry and arts described in a set of poems dedicated to the historical creation of the world. ', 55, '../img/poetry2.jpg'),
(7, 'Poetry', 'The Golden Road', 'Lucy Moud Montgomery', 'English', 'When the fun-loving and imaginative Sara of Montgomery spends the winter with the king\'s family in the old-fashioned town of Carlisle, she comes up with a great idea to entertain the children.And when Sara returns home, she has introduced still more people to the magic in her heart. ', 60, '../img/poetry1.jpg'),
(8, 'Poetry', 'Malegalali Madumagalu', 'Kuvempu', 'Kannada', 'Malegalalli Madumagalu or Malegalalli Mudumagalu is a 1967 Kannada novel by popular author and poet, Kuvempu.The title Malegalalli Madumagalu translates to \'the bride in the mountains.\'The novel was adapted into the television series of same name.The author discusses social and economic conditions that prevailed in late 19th-century Malenadu. \r\nThe story revolves around characters of the then-prevailing feudal system—Heggades/Gowdas (the landlords) and their serfs belonging to different castes at multiple locations with interlinking characters and their stories.', 50, '../img/poetry3.jpg'),
(9, 'Poetry', 'Idi Mi Katha Kadu', 'Savi Sharma', 'Telugu', 'Sometimes, you do not write your story, it writes you. You don\'t choose your story, it chooses you.But would you believe it if someone told you, ‘This is Not Your Story’? Would you have the courage to rewrite it?Shaurya, a CA student. This is his story of following his dreams.Miraya, an interior designer. This is her story of believing in love.Anubhav, an aspiring entrepreneur. This is his story of giving life another chance.', 50, '../img/poetry4.jpg'),
(10, 'Poetry', 'Chidambara', 'Sri Sumitranandan Pa', 'Hindi', '\'Chidambara\' is a collection of poems for which Sumitranandan Pant was awarded the Jnanpith in 1968 .This collection of his poetic consciousness II Prichayika regeneration, it \' Yugwani\' from \' Atima\' to the harvesting of compositions, including \" Yugwani , \' Gramya\' , \' Golden Ray\' , \' Swarndhuli\' ,\' Yugpth\' The final composition of \' Vani\' is \' Atmika\' with selected works of \' Yugantar\' , \' Uttara\' , \' Ratshikhar\' , \' Shilpi\' , \' Sauvarna \' and \' Atima\' .is also included.In \' Pallavini\' , from 18 to \'36 , his nineteen years are preserved and in \' Chidambara\' , from 37 to 57, is an extension of the development series of almost twenty years.\r\n Sumitranandan Pant himself has written about this collection - \"By seeing the works inspired by my physical, social, mental, spiritual transmissions gathered in one place in Chidambaram\'s Prithu-shakti, readers will be more able to understand the sources of unity within them. ', 45, '../img/poetry5.jpg'),
(11, 'Drama', 'The Runaway', 'J.M. Hurley', 'English', 'Summer and her friends have escaped to Italy in hope that they can finally find peace. \r\nBut now, they are faced with their worst nightmares and it all starts when Summer closes her eyes.Confronted with ghosts, killers, and the average person, their journey is bound to be anything but normal.They will be pushed to their limits and beyond, testing their love, courage, trust, and willpower.They’ve never had to face something so fierce, but they’re not backing down.“Being a runaway is great for awhile, but what happens when you can’t run anymore?” ', 60, '../img/drama1.png'),
(12, 'Drama', 'The Happiness Project', 'M K(Midknight)', 'English', 'My project is simple, I must find my happiness in myself.I can do that, but only if I realize my problems.I am going to write about it all and you can listen if you would like.Maybe you can start a happiness project of your own? Maybe you will learn about yourself and help me along the way.I don\'t care if you read this or not, my story still continues on and I need to save my sanity before it disappears.', 55, '../img/drama2.png'),
(13, 'Drama', 'Ek Sapna', 'Rangeya Raghav', 'Hindi', 'A dream (A Mid Summer Nights Dream) is one of Shakespeare’s most famous lyrical drama drama.It comes under its creation in the era of creation. In this era, he had written dramas like ‘The Lobs Levels Lost’, ‘Two Gentlemen of Verona’, ‘Comedy of Errors’ and more. ', 50, '../img/drama3.png'),
(14, 'Drama', 'The Smell Of Clay', 'Dinakar Reddy', 'Telugu', 'The life of the king is like a pond in the village. He loves to play near the pond with his friends.', 50, '../img/drama4.png'),
(15, 'Drama', 'Chidambara Rahasya', 'PoornachandraTejaswi', 'Kannada', 'Chidambara Rahasya is a novel written by Poornachandra Tejaswi.This novel depicts the state of a small Indian village in humorous manner.This book has murder investigation, caste system, communal riots, blind beliefs,love story, cardamom plants, friendship, youth rebels, land lords, untouchables, politics of the village.', 55, '../img/drama5.jpg'),
(16, 'Health', 'Love Yourself! Lifestyle To Love And Be Yourself!', 'Zartaj Shaikh', 'English', 'This book is all you need if you wanna lose weight, look great and stay healthy.!No need to follow any fat diets to be what you want to be!All you need is a proper guidance to a great lifestyle for a healthy you!I have done a 5 years of research in it and did it on myself and from the results I got I know that this works and that to on everyone! so let\'s get started :)', 70, '../img/health1.png'),
(17, 'Health', 'WHAT IS HEALTH?', 'DR.Ramamoorthy S', 'English', 'Read about in this book our digestive system longest history then properly.You understand about our digestive system  then you takecare properly about your food.It will be make so much helpful about in your health very good.So read the book understand make your body so health and fit about live long', 60, '../img/health2.png'),
(18, 'Health', 'Mee Aarogyam Mee Chetullo', 'Devendra Vora', 'Telugu', 'World renowned Acupressurist Dr.Devendra Vora has analysed that the pressure applied on certain points located in the palms and soles helps to stimulate all organs of the body, prevents diseases and assists in maintaining good health.Acupressure also enables one to diagnose and cure disease like Common Cold, Diabetes, High Blood Pressure, Migraine, Paralysis and even Cancer.Dr. Devendra Vora has proved that all dreaded diseases like Allergy, Cancer, Thalassaemia and HIV/AIDS are only Paper Dragons which can be easily defeated.The learned author has shown how all these dreaded diseases can be prevented and cured. And all that without any cost or side effects.', 50, '../img/health3.jpg'),
(19, 'Science fiction', 'A Voyage to the Moon', 'Cyrano de Bergerac', 'English', 'This is an edition by Professor Curtis Page of the Lovell translation of a seminal work of science fiction by Cyrano de Bergerac.Arguably a whimsical forerunner to the adventure stories of Jules Verne, and the French sci-fi tradition generally, it is a utopian novel of space travel complete with rocket powered flight and extra-terrestrial beings.\r\n', 80, '../img/sf1.jpg'),
(20, 'Science fiction', 'New Atlantis', 'Francis Bacon', 'English', 'New Atlantis is an incomplete utopian novel by Sir Francis Bacon, published posthumously in 1626.\r\nIt appeared unheralded and tucked into the back of a longer work of natural history, Sylva sylvarum (forest of materials). In New Atlantis, Bacon portrayed a vision of the future of human discovery and knowledge, expressing his aspirations and ideals for humankind. The novel depicts the creation of a utopian land where \"generosity and enlightenment, dignity and splendour, piety and public spirit\" are the commonly held qualities of the inhabitants of the mythical Bensalem.\r\n', 75, '../img/sf2.jpg'),
(21, 'Science fiction', 'Bita Hua Bhavishya ', 'Bal Phondke', 'Hindi', 'This anthology of 19 select stories presents the trends in indian science fiction where the basic theme, be it any language, is primarily anthropocentric, dealing with the interplay between scientific developments and human emotions or societal foundations.\r\n', 60, '../img/sf3.jpg'),
(22, 'Mystery and thriller', 'Crime and Punishment', 'Fyodor Dostoevsky ', 'English', 'Crime and Punishment focuses on the mental anguish and moral dilemmas of Rodion Raskolnikov, an impoverished ex-student in Saint Petersburg who formulates a plan to kill an unscrupulous pawnbroker for her money. Before the killing, Raskolnikov believes that with the money he could liberate himself from poverty and go on to perform great deeds. However, once it is done he finds himself racked with confusion, paranoia, and disgust for his actions. His justifications disintegrate completely as he struggles with guilt and horror and confronts the real-world consequences of his deed.\r\n', 75, '../img/m&t1.png'),
(23, 'Mystery and thriller', ' The Secret Adversary ', 'Agatha Christrie', 'English', 'The Great War is over, and jobs are scarce. Childhood friends Tommy Beresford and Prudence \"Tuppence\" Cowley meet and agree to start their own business as The Young Adventurers. They are hired for a job that leads them both to many dangerous situations, meeting allies as well, including an American millionaire in search of his cousin.\r\n', 70, '../img/m&t2.jfif'),
(24, 'Mystery and thriller', 'Sabse Badi Murder Mystery', 'Ved Prakash Sharma', 'Hindi', 'This Seems to be a very interesting murder story where the Parents of the dead were the prime suspect. Even The court also gave them punishment but when the real truth came out the whole world was shocked.\r\n', 55, '../img/m&t3.jpg'),
(25, 'Mystery and thriller', 'Haadse ki Raat', 'Amit Khan', 'Hindi', 'It was the night of Budhwar — the night when this very sensational and interesting story began. He was a minor auto rickshaw driver. Name - Kulbhushan! From the tarashi, boot lagras and chain craze to someone\'s tax, then the tax was done for that, someone has hacked the fly sitting on the ear. Kulbhushan was alone in this world. Then he was also a bit timid. In particular, Kundbhushan\'s air was very dry by looking at those goons of Kishanpura - who, at the slightest, would throw a knife and disperse human terror. He lifted the bottle from the table and put the bottle of liquor in his mouth - towards the face of the face - then took down the turmeric and frost-colored liquor from the gatagat circle. When her bottle slammed back on the table with a loud sound, she was completely empty. In the contract, the empire of the four Taraf Gunday-Mawalis was in existence - they were laughing and joking and were drinking liquor while cheating and eating roasted gram of spices. Some, the waiters were roaming around. \"Come here.\" Kulbhushan sounded like a waiter in a drunken wave. \"What is it?', 55, '../img/m&t4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `Order_id` int(20) NOT NULL,
  `Book_name` text NOT NULL,
  `Image` varchar(100) NOT NULL,
  `Price` int(50) NOT NULL,
  `Quantity` int(50) NOT NULL,
  `Name` text NOT NULL,
  `Phone_number` bigint(10) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Payment_mode` text NOT NULL,
  `Status` varchar(50) NOT NULL DEFAULT 'Ordered!'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`Order_id`, `Book_name`, `Image`, `Price`, `Quantity`, `Name`, `Phone_number`, `Address`, `Payment_mode`, `Status`) VALUES
(1, 'Crime and Punishment', '../img/m&t3.jpg', 75, 1, 'Jalaja', 3, 'Bhatkal', 'COD', 'Ordered!'),
(2, 'Sabse Badi Murder Mystery', '../img/m&t3.jpg', 55, 1, 'Jalaja', 3, 'Bangalore', 'COD', 'Ordered!'),
(8, 'The Runaway', '../img/health1.png', 60, 1, 'Nandini', 9040123456, 'koppala', 'COD', 'Ordered!'),
(9, 'Love Yourself! Lifestyle To Love And Be Yourself!', '../img/health1.png', 70, 1, 'Nandini', 9040123456, 'koppala', 'COD', 'Ordered!');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `Name` varchar(20) NOT NULL,
  `Phone_number` varchar(10) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`Name`, `Phone_number`, `Gender`, `Email`, `Password`, `Date`) VALUES
('Jalaja', '6362189359', 'Female', 'jalajagond@gmail.com', 'Jalaja123', '2021-09-19 13:09:57'),
('Nandini', '7640904011', 'Female', 'nandinm9040@gmail.com', 'nandu28', '2021-09-30 08:48:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`Order_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `Id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `Order_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
