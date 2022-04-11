-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 09, 2022 at 02:07 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `travel_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking_tb`
--

CREATE TABLE IF NOT EXISTS `booking_tb` (
  `book_id` int(10) NOT NULL,
  `book_date` date NOT NULL,
  `travel_date` date NOT NULL,
  `tour_name` varchar(20) NOT NULL,
  `loginid` varchar(20) NOT NULL,
  `no_adult` int(10) NOT NULL,
  `no_child` int(10) NOT NULL,
  `source` varchar(50) NOT NULL,
  PRIMARY KEY (`book_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking_tb`
--

INSERT INTO `booking_tb` (`book_id`, `book_date`, `travel_date`, `tour_name`, `loginid`, `no_adult`, `no_child`, `source`) VALUES
(101, '2019-04-27', '2019-04-30', 'Taj Mahal Tour', 'dev', 2, 1, 'Durg'),
(102, '2019-05-24', '2019-05-30', 'Manali', 'Aanu', 4, 2, 'bhilai'),
(103, '2019-06-23', '2019-06-28', 'Lonawale', 'Raja', 5, 3, 'Raipur'),
(104, '2019-03-26', '2019-03-23', 'italy', 'ravi', 4, 2, 'raipur'),
(105, '0000-00-00', '0000-00-00', 'Rajasthan Tour', 'dev', 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `contact_tb`
--

CREATE TABLE IF NOT EXISTS `contact_tb` (
  `uname` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `message` varchar(500) NOT NULL,
  PRIMARY KEY (`uname`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `contact_tb`
--

INSERT INTO `contact_tb` (`uname`, `email`, `subject`, `message`) VALUES
('himanshi', 'hi09@gmail.com', 'nature tour booking', 'hii'),
('neha', 'ne02@gmail', 'advanture tour booki', 'hello'),
('raj', 'raj01@gmail.com', 'tour booking', 'helllo'),
('Susmita', 's022@gmail.com', 'trip booking', 'hiii'),
('vishal', 'vishal2@gmail.com', 'advanture trip booki', 'hello ');

-- --------------------------------------------------------

--
-- Table structure for table `feedback_tb`
--

CREATE TABLE IF NOT EXISTS `feedback_tb` (
  `fid` int(10) NOT NULL,
  `loginid` varchar(20) NOT NULL,
  `fdate` varchar(20) NOT NULL,
  `feedback` varchar(500) NOT NULL,
  PRIMARY KEY (`fid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback_tb`
--

INSERT INTO `feedback_tb` (`fid`, `loginid`, `fdate`, `feedback`) VALUES
(101, 'dev', '2019-04-27', 'Nice Service'),
(102, 'lisha', '2019-06-30', 'good service'),
(103, 'Aarti', '2018-04-23', 'Best travel trip inquiry side'),
(104, 'vivek', '2018-05-18', 'this side give us best adventure trip');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `loginid` varchar(20) NOT NULL,
  `pwd` varchar(20) NOT NULL,
  `role` varchar(20) NOT NULL,
  PRIMARY KEY (`loginid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`loginid`, `pwd`, `role`) VALUES
('01', '123', 'user'),
('07', '777', 'user'),
('10', '123', 'user'),
('103', '222', 'user'),
('109', 'user', 'user'),
('3', '123', 'user'),
('admin', 'admine', 'admin'),
('dev', '11', 'user'),
('manoj', 'manoj', 'user'),
('swati', '333', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `loginid` varchar(20) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  PRIMARY KEY (`loginid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`loginid`, `uname`, `phone`, `email`) VALUES
('01', 'dipti', '8976543456', 'd02@gmail.com'),
('07', 'chandra', '7865432987', 'c04@gmail.com'),
('10', 'susmita', '2356476896', 's@gmail.com'),
('109', 'rahul', '0987654345', 'r09@gmail.com'),
('dev', 'Dev Kumar', '9876543210', 'dev@gmail.com'),
('manoj', 'mahesh', '1234567456', 'ma09@gmail.com'),
('Raaj', 'Raaj sahu', '2345678876', 'raaj01@gmail.com'),
('Swati', 'Swati dubey', '9997684532', 'swati011@gmail.com'),
('Vikash', 'Vikash sharma', '7778654396', 'v03@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tour_tb`
--

CREATE TABLE IF NOT EXISTS `tour_tb` (
  `tour_id` int(10) NOT NULL,
  `tour_name` varchar(30) NOT NULL,
  `duration` varchar(100) NOT NULL,
  `fare` int(10) NOT NULL,
  `category` varchar(20) NOT NULL,
  `descrip` varchar(1000) NOT NULL,
  PRIMARY KEY (`tour_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tour_tb`
--

INSERT INTO `tour_tb` (`tour_id`, `tour_name`, `duration`, `fare`, `category`, `descrip`) VALUES
(1201, 'Taj Mahal Tour', '2 Days 1 Night', 18400, 'Historical', 'This historical city is 200 km from the capital city of India - Delhi. Agra houses three UNESCO World Heritage sites named as the Taj Mahal, the Agra Fort . As the city was once the capital of Mughal Empire, one can find many other glorious buildings and tombs from the past.\r\n\r\nThese wondrous monuments and sites should be visited once in a lifetime. It is one of the Seven Wonders of the World and has been enlisted as a UNESCO World Heritage site built by Mughal Emperor Shah Jahan in the memory of his wife Arjumand Bano Begum, popularly known as Mumtaz Mahal. This white mausoleum was built in Mughal architectural style.\r\n\r\nOld Fort: It is popularly known as the Agra Fort which was built on the banks of River Yamuna covering an area of almost 2.5 km this fort was built using red sandstone, housing several buildings inside. It has 2 major gates namely the Delhi Gate and the Amar Singh Gate.'),
(1202, 'Khajuraho Tour', '1 Days 1 Night', 12300, 'Historical', 'Khajuraho is popular for its temples and world heritage sites. Visit these popular ancient Eastern and Western Temples. We have designed 2 Days Khajuraho Tour to explore the world heritage sites which has amazing sculptures and architecture that will mesmerize you and will give a wonderful feeling.'),
(1203, 'Ladakh Trip', '5 Days 4 Night', 28800, 'Hill Station', 'Take a 5 Days trip to Ladakh to experience and admire the beauty of nature in abundance. Leh-Ladakh is blessed with beautiful lakes and high passes with mesmerizing landscape that can take away the breath of the spectators. The exquisite monasteries, stupas and palaces will captivate your attention.Adventure enthusiasts can visit this region as it provides wide scope for trekking, biking, hiking and many more activities. This trip covers destinations such as Delhi, Leh, Hemis, Pangong, Khardongla and Sham. The major attractions included in this trip are local markets of Leh, Leh Palace, Shanti Stupa, Shey Palace, Stok Palace Museum, Hemis Monastery, Thiksey, Sindhu Ghat, Pangong Lake, Gurudwara Pather Sahib, the confluence of Zanskar & Indus River and Magnetic Hill. Therefore, it will be a memorable Ladakh tour in its beautiful valleys.'),
(1204, 'Kerala Tour', '6 Days 5 Night', 25700, 'Natural Place', 'The â€œMarvel or Lustrousâ€ called Kerala is a destination of a lifetime overwhelmed with multi tudinous attractions that wins the heart of every tourist. Nature lovers destination kerala - Be it a honeymoon couple, adventure enthusiast, leisure wayfarers, pilgrim devotees or tourists wanting to experience exotic holidays. Travelogy India designed Kerala Houseboat Tour Packages has something to suffice all. This package offers the timeless beauty of the palm fringed beaches and monumental heritage of Cochin to the majesty of the undulating hills of Munnar and from the enchanting woods and forests of Thekkady to the serenity of the pristine backwaters of Kumarakom and much more. so plan a Kerala Tour Packages and enjoy the best of what Travelogy India has to offer.'),
(1205, 'Goa Beaches Tour', '3 Days 2 Night', 14300, 'Beach', 'Vacation is refreshment, a way to rejuvenate your senses. Goa is a must visit destination for this purpose. This Indian state is a platform of utmost fun and an exciting vacation. Goa beaches are known for awesome scenic beauty and safe night life. The luxurious villas at the beaches offer soothing Ayurveda massages, which have always been known for their extensive health benefits. The Portuguese influence can still be found in the life style of the locals. Some of the oldest churches of the country can be seen here, which are known for their invaluable inscriptions and unique architecture. A land of spices and sea food, you can satisfy your taste buds with spicy prawn fries, quality wine and more. Hence, plan 4 Days Goa Beaches Tour with us to make this vacation memorable.'),
(1206, 'Golden Triangle Tour', '4 Days 3 Night', 29200, 'Historical', 'Discover the Golden Triangle of India along with fascinating hidden secrets on the way. Adding bustle metro cities to laid-back Mughal destinations, this tour gives an opulence experience to every type of traveler. Traveling through the land of highlight diverse factors, this tour gives a contrasting heritage look to every day of your vacation.'),
(1207, 'Rajasthan Tour', '8 Days 7 Night', 32700, 'Historical', 'Magical and Vibrant Rajasthan\r\nRajasthan resounds with the chivalry and valor of the mighty Rajasthani kings of the bygone era. The pink city of Jaipur and the golden city of Jaisalmer are a touristâ€™s paradise which includes royal palaces, havelis and forts which will enchant you completely. The sand dunes of Jaisalmer are invigorating and enlivening. In addition to this, the tour encompasses a visit to the capital city, Delhi as well. The archaic monuments and the modern edifices of this eternal city will truly charm you. Come, explore and get intoxicated in the sceneries and magnificence of these historic places.'),
(1208, 'Manali Tours', '3 Days 2 Night', 21400, 'Hill Station', 'Manali is one of the famous hill stations in India.If you love to be amidst coolest places in India then manali is best place.it gives you access to lakes. Surrounded by beautiful gardens, the place is simply awesome from beauty point of view. There are ample of parks and other avenues, which give you loads of access to a wide variety of touring options. ');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
