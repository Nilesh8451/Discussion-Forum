-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2019 at 04:44 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quest`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `qid` int(11) NOT NULL,
  `aid` int(11) NOT NULL,
  `answer` text NOT NULL,
  `upvotes` int(11) DEFAULT '0',
  `downvotes` int(11) DEFAULT '0',
  `writer` varchar(250) DEFAULT NULL,
  `atime` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`qid`, `aid`, `answer`, `upvotes`, `downvotes`, `writer`, `atime`) VALUES
(1, 1, 'Debugging is the process of finding and removing errors in a program. In this process, the program is thoroughly checked for errors. Then errors are pointed out and debugged.', 29, 0, 'adithya', '0000-00-00 00:00:00'),
(2, 2, 'The moon does not produce its own light. We can only see the moon when light coming from the sun is reflected off of its surface. This means that whenever the moon reflects the sun\'s rays we can see it?even in the day time.The visibility of the moon during the daytime also depends on its angle and its distance from Earth. When the moon and sun are on the same side of Earth, the moon is visible during the day; when the moon and sun are on opposite sides of the Earth, the moon is not visible during the day, as the Earth is blocking sunlight from reaching the moon\'s surface.The reason we can see the moon and not stars during the day is because the sunlight reflected off of the the moon makes it 100,000 times brighter than the brightest star in the sky.', 0, 0, 'adithya', '0000-00-00 00:00:00'),
(3, 3, 'The sky looks blue but really it is made up of all the colours of the rainbow. Each of these colours has a different wavelength. Some of these are smoother while others are choppy. Blue light waves travel in short, choppy waves. Like each of the other colours, blue light waves are scattered and reflected as they enter Earth\'s atmosphere and collide with gases and other particles. Because the colour blue has the shortest wavelength, it collides with nearly everything in its path and is scattered about the sky. This is why the sky appears blue', 0, 0, 'adithya', '0000-00-00 00:00:00'),
(4, 4, 'The Earth has a surface area of 197 million square miles. Multiply that by four billion, and you have the Earth\'s surface area in square inches. With atmospheric pressure being an average 14.7 lbs (6.6kg) per square inch, the sky weighs roughly 5.2 million billion metric tons. Another way of looking at it, according to the United Kingdom\'s Science and Technology Facilities Council, is in its equivalent to Indian elephants. By that measure, the sky weighs equal 570,000,000,000,000 adult Indian elephants.', 0, 0, 'adithya', '0000-00-00 00:00:00'),
(5, 5, 'Planes stay in the air because of the shape of their wings. Air moving over the wing gets forced downwards, which pushes the wing up. This push is stronger than gravity, and so makes the plane fly.', 0, 0, 'adithya', '0000-00-00 00:00:00'),
(6, 6, 'To be electrocuted you must be part of a complete circuit. This means you must touch both a positive wire, and a negative or neutral wire (or \"ground\"). If a bird was touching the ground while touching the wire, the ground would act as a neutral wire and the current would flow through the bird, electrocuting it. If the bird sat on a wire and touched the metal of the pylon or another wire, it would also complete a circuit and get electrocuted. Because the bird\'s only sits on one wire, it is safe.', 0, 0, 'adithya', '0000-00-00 00:00:00'),
(7, 7, 'The ocean is not blue because the sky is blue, but it is blue for the same reason the sky is blue: The ocean is blue because the wavelength of blue light is easily captured, whereas the wavelengths of colours like red and orange are absorbed by the water and allowed to pass through it. In the words of the science magazine Scientific American:\"The ocean looks blue because red, orange and yellow (long wavelength light) are absorbed more strongly by water than is blue (short wavelength light). So when white light from the sun enters the ocean, it is mostly the blue that gets returned. Same reason the sky is blue.\"', 0, 0, 'adithya', '0000-00-00 00:00:00'),
(8, 8, '1)Portability?? Platform independent language.2)Modularity?? Possibility to break down large programs into small modules.3)Flexibility?? The possibility to a programmer to control the language.4)Speed?? C comes with support for system programming and hence it is compiling and executes with high speed when comparing with other high-level languages.5)Extensibility?? Possibility to add new features by the programmer.', 17, 0, 'adithya', '0000-00-00 00:00:00'),
(9, 9, 'The mistakes when creating a program called syntax errors. Misspelled commands or incorrect case commands, an incorrect number of parameters when called a method /function, data type mismatches can identify as common examples for syntax errors.', 13, 0, 'adithya', '0000-00-00 00:00:00'),
(10, 10, 'Both functions are to retrieve absolute value. abs() is for integer values and fabs() is for floating type numbers. Prototype for abs() is under the library file < stdlib.h > and fabs() is under < math.h >.', 5, 0, 'adithya', '0000-00-00 00:00:00'),
(11, 11, 'Some of the data types in C have special characteristic nature when a developer assign value beyond the range of the data type. There will be no any compiler error and the value change according to a cyclic order. This is called as cyclic nature and Char, int, long int data types have this property. Further float, double and long double data types do not have this property.This is called as cyclic nature and Char, int, long int data types have this property. Further float, double and long double data types do not have this property.', 4, 0, 'adithya', '0000-00-00 00:00:00'),
(12, 12, 'This concept called as commenting out and is the way to isolate some part of the code which scans possible reason for the error. Also, this concept helps to save time because if the code is not the reason for the issue it can simply uncomment.', 2, 0, 'adithya', '0000-00-00 00:00:00'),
(13, 13, 'Data is stored in Stack data structure type using?First in Last out (FILO)?mechanism. Only top of the stack is accessible at a given instance. Storing mechanism is referred as a PUSH and retrieve is referred as a POP.', 1, 0, 'adithya', '0000-00-00 00:00:00'),
(14, 14, '???????? Shantaram?? by Gregory David Roberts.Siddhartha?? by Herman Hesse.Kim by Rudyard Kipling.The Fountainhead by Ayn Rand.Catch-22 by Joseph Heller.Howl by? Allen Ginsberg', 0, 0, 'ayushi', '0000-00-00 00:00:00'),
(15, 15, '?He hath disgraced me and hindered me half a million, laughed at my losses, mocked at my gains, scorned my nation, thwarted my bargains, cooled my friends, heated mine enemies?and what?s his reason? I am a Jew. Hath not a Jew eyes? Hath not a Jew hands, organs, dimensions, senses, affections, passions? Fed with the same food, hurt with the same weapons, subject to the same diseases, healed by the same means, warmed and cooled by the same winter and summer as a Christian is??If you prick us, do we not bleed? If you tickle us, do we not laugh? If you poison us, do we not die?? - Shylock, Merchant of Venice', 0, 0, 'ayushi', '0000-00-00 00:00:00'),
(16, 16, 'India\'s recent GDP growth has danced between 5-10%. For a developed nation, that would be remarkable. For a highly populated developing country, that is far from great. To add perspective, China has grown by 7-14% over a far longer period of time. Nigeria has done better too, growing at a consistent 7% in spite of rampant political corruption, ceaseless violence, a continuing AIDs epidemic, an adverse climate, and a literacy rate of 61%.', 0, 0, 'john', '0000-00-00 00:00:00'),
(17, 17, 'There are two ways to invest in Mutual Funds. One is investing a lump sum when the market has fallen and the other is through Systematic Investment Plan aka SIP.What happens when you invest a lump sum? Let us assume the markets have crashed quite a bit and that you invest a lump sum in a Mutual Fund when the NAV is down to Rs. 50 from Rs. 60. If there is a bull run subsequently and the NAV of the Mutual Fund goes up, you feel you have made a wise investment. But suppose the markets continue to crash? Your NAV will take a plunge along with your dreams of a fat return.This is where an SIP will help you. If you invest in Mutual Funds through an SIP, you are choosing to invest irrespective of the market conditions. So, you needn?t worry if your NAV slides or rises. Over the long-term the volatility in the NAV will average out, giving you great returns.', 0, 0, 'john', '0000-00-00 00:00:00'),
(18, 18, 'UNITY', 0, 0, 'john', '0000-00-00 00:00:00'),
(19, 19, 'Tertiary.Primary is natural resources like agriculture and mining.Secondary is manufacturing.Tertiary is services like bank, lawyer, marketing, accountants', 0, 0, 'john', '0000-00-00 00:00:00'),
(20, 20, 'I\'m going to make him an offer he can\'t refuse.??GODFATHER, THE 1972(Classic!!).There\'s no place like home. ?WIZARD OF OZ, THE 1939Go ahead, make my day.??SUDDEN IMPACT 1983', 0, 0, 'piyush', '0000-00-00 00:00:00'),
(21, 21, 'Definitely ?The Lord of the Rings? by JRR Tolkien.Stephen King?s?The Dark Tower', 0, 0, 'piyush', '0000-00-00 00:00:00'),
(22, 22, 'First,?Julian Cope?with??World Shut Your Mouth? and ?My Nation Underground??We?ll do the title tracks.', 0, 0, 'hesha', '0000-00-00 00:00:00'),
(23, 23, '?Rihanna?- R&B / Pop?Miley Cyrus?- Pop / Hip Hop?Skrillex?- Dubstep?One Direction?- Pop', 0, 0, 'hesha', '0000-00-00 00:00:00'),
(24, 24, 'Becoming a full stack developer requires you to cover a lot of skills, if you?re a beginner it is always a good choice to choose the right learning path to gain quick results. Now the term full stack refers to developers who can work with both front-end and back-end technologies. To be more precise, it simply means that developers can work with databases, back-end language (Python, JavaScript, Ruby on Rails) and frameworks (Express.js, Django etc.) to be able to communicate with databases. The developer should also be able to work with HTML, CSS and at least few front-end frameworks such as Angular or React.js.', 5, 0, 'piyush', '0000-00-00 00:00:00'),
(25, 25, 'C/C++ have a tie in my opinion.', 1, 0, 'pooja', '0000-00-00 00:00:00'),
(26, 26, 'HTML and CSS is basic language to build a structure and make it look good but after that you can start make website interactive Use JavaScript, JQuery and JSON and then move backend PHP , mySql , phyton , Nodejs', 6, 0, 'nidhi', '0000-00-00 00:00:00'),
(27, 27, 'Learning Python is always a good option. The benefit of Python can be proven by the list of companies which have it in their tech stack.\n\nYouTube, DropBox, Google, Quora and even Netflix use Python. Also it is the second most used language in the world according to Github. There are many other reasons that I can give you on why should you learn Python.', 6, 0, 'Nilesh8451', '0000-00-00 00:00:00'),
(28, 28, '1) Spidy cam 2) Hot Spot 3) Snick-o-Meter 4) LED stumps and bails 5) Slow motion camera in cricket 6) Super sopper 7) Technology to measure ball speed  8) Hawkeye 9) Ball Spin RPM  ', 10, 0, 'Nilesh8451', '0000-00-00 00:00:00'),
(29, 29, 'Software Engineer, Cloud Architects, Data Scientist, Security engineer ,Web Developer VR developer', 12, 0, 'adithya', '0000-00-00 00:00:00'),
(30, 30, 'Node.js is a server-side programming framework, built on Chrome\'s JavaScript engine, which provides event-driven and non-blocking I/O. The coding is done in Javascript.', 11, 0, 'moksh', '0000-00-00 00:00:00'),
(31, 31, 'Information Technology (IT) industry is said to be India?s great export, the measure of India?s superpower status, the means through which India will eradicate poverty and bring ?development? to all. Every year lakhs of young engineers from colleges all over India and all branches of engineering enter this industry. I was told that the jobs here are supposed to be among the best paying jobs in India. An IT job is considered a passport to a good and wealthy marital partner or a good life in the here where software jobs fetch higher incomes.', 1, 12, 'john', '0000-00-00 00:00:00'),
(32, 32, 'Kinzhal Hypersonic Missile , RS-28 Sarmat aka Satan-2, S-500 aka Prometheus, Iron Dome, Brahmos aka PJ10, MQ-9 Reaper Drones.', 20, 1, 'piyush', '0000-00-00 00:00:00'),
(33, 33, 'You may have heard villages having great temples but this is a temple having it?s own village inside,Bandra-Worli Sealink (Mumbai),Millay Viaduct (Millau, France),Palm Islands (Dubai).', 12, 2, 'keval', '0000-00-00 00:00:00'),
(34, 34, 'I would go with the XM25\nHas a muzzle velocity of 210m/s\nEffective range 600?700m/1000m max firing range\n5 round mag\nSemi automatic AIRBURST grenade launcher\nBuilt in thermal sights', 23, 2, 'nilesh ', '0000-00-00 00:00:00'),
(35, 35, 'For this you will have to understand the Snickometer and Hawk-eye how they works because Ultra Edge is a improved version of Snicko by Hawk-eye.\nThe Snickometer technology(Snicko) invented by British Scientist Allan Plaskett in 1990 combines sound and visual evidence to help the umpires determine whether a batsman has actually nicked the ball ? especially in the case of caught behind, bat-pad and lbw appeals.\nThe stump microphone picks up the live sound, filters it and relays it to an oscilloscope attached to it, which then traces the relevant sound waves. In the meantime, cameras record the visual and replay it in slow motion.\nIf the ball is suspected to have hit the bat, the Snicko sound graph is checked for impact - a single, sharp spike on the graph will confirm the ball touching the bat. On the other hand, if it touches the pad or glove, a flatter impact is observed on it. The sound is then correlated by the third umpire with the slow motion replays of the ball passing the bat to make his final decision.', 30, 1, 'Nilesh8451', '0000-00-00 00:00:00'),
(36, 36, 'The Impossible Trinity states that you can have two of the following three:\n1. A fixed exchange rate\n2. No capital controls\n3. Independent monetary policy\nYou cannot have all three. We\'ll break down the constituent aspects before looking at the combination.', 5, 0, 'ayushi', '0000-00-00 00:00:00'),
(37, 37, 'There is no specific benchmark as such which can tell you that how much an average stock market trader earns in a month. But yes trading involves a lot of risk where your 1 crore in any given month can come upto 10 lakh or even less.', 9, 0, 'nidhi', '0000-00-00 00:00:00'),
(38, 38, ' 1) INDIAN STOCK MARKET\n2)MUTUAL FUNDS ( you must be thinking why i mentioned mutual funds also, wait , you will know why I did it)', 17, 2, 'piyush', '0000-00-00 00:00:00'),
(39, 39, 'The interest rate and the price of bonds (By \'price\', I mean \'market value\', not \'face value\') are inversely related. Think of them like two ends of a see-saw. ', 12, 24, 'nidhi', '0000-00-00 00:00:00'),
(40, 40, 'Now if any government tries to print more money, this will hinders the equilibrium of demand and supply and they will face consequences. For an instance, if onions are produced more in a particular season, people will not buy it and its price will fall down. It is known as inflation.Similarily, if a govt. prints double the amount of money compared to previous year,it will cause infaltion as it is injected forcefully and free flow of economy will be in trouble.\nIf everyone will have 1lakh in their account, there will be more expectations by them, so price of a good which was 10 Rs earlier will increase to manifold. Same case with injecting money\nShare markets will plunge down due to sudden disbalance in the equilibrium.', 30, 4, 'arjun', '0000-00-00 00:00:00'),
(41, 41, 'There are many like HDFC bank,ICICI bank,State Bank of India, Axis Bank,Punjab National Bank.', 22, 2, 'mahesh', '0000-00-00 00:00:00'),
(42, 42, 'For those would be businessman who donot have any business background need to change the way they think. I will tell why and how.\nIn India most of the businesses are seasonal in nature. Businesses directly or indirectly related to clothes, footwear, cosmetics, travel,toys , vehicles, transportation etc record good sales from Feb- May and Aug- Oct. Rest of months record dull sales. Businesses related to infrastructure like cement, steel, bricks, paints etc record good sales after monsoon.Likewise, other businesses in India face seasonality in one way or other.', 1, 3, 'hesha', '0000-00-00 00:00:00'),
(43, 43, 'The various types of Foreign Direct Investment includes 1) Horizontal FDI 2)Vertical FDI 3) Forward Vertical FDI 4)Backward Vertical FDI 5)Conglomerate FDI 6)Greenfield Entry 7)Foreign Takeover.', 17, 2, 'arjun', '0000-00-00 00:00:00'),
(44, 44, 'INR hit a new low closing at 69.10 against the USD. A lot has been said and talked about this particular news from market today. I won?t add the biased opinion to feed the agenda of media but I genuinely want to pull the attention towards Asian Currency Crisis.\nThe people who are criticising the respective governments for this fall are not really aware of the current trends in the Asian market.', 12, 4, 'john', '0000-00-00 00:00:00'),
(45, 45, 'We The People? was written by the famous jurist Nani Palkhivala', 8, 2, 'pooja', '0000-00-00 00:00:00'),
(46, 46, 'George Orwell is the writer ', 3, 0, 'nidhi', '0000-00-00 00:00:00'),
(47, 47, 'John Keats is the writer ', 6, 0, 'mahesh', '0000-00-00 00:00:00'),
(48, 48, 'Which is the worst movie scene in a bollywood movie you have ever watched?', 9, 3, 'nidhi', '0000-00-00 00:00:00'),
(50, 50, 'Yeh Jawani Hai Deewani.', 15, 4, 'ayushi', '0000-00-00 00:00:00'),
(51, 51, 'Amjad Khan and his brother studied in National college Bandra and were known to be notorious .He became a huge icon after this movie was released.\nHis dialog: ?Tera Kya Hoga Kaliya? was a favorite dialog among north Indian policemen. Even Amitabh wanted to play Gabbar, he kind of realized his dream in a terrible remake of the same movie called RGV ki Aag.\nThe ravines in the movie are basically shot in a town called Ramanagaram near Bangalore.The number of spoofs made on Sholay is probably the highest.\nAmjad Khan wanted his own name to be published as his screen name as due to some reasons some actors changed their name. ex: Sanjay Khan was Sanjay. Amjad Khan?s father was Jayant, Mumtaz Jehan Begum Dehlavi was Madhubala etc.', 11, 8, 'Nilesh8451', '0000-00-00 00:00:00'),
(52, 52, 'I m not going to take any references , I\'m going to write down only about those scenes which will be with you after so many years u watch, and I will try to tell some hidden message we get from it.\n1 - Bhagwan ko mante ho?\nBhagwan ko l@$d fark Ni padta!\nIt\'s not just a athiest kind of thing. Nawazuddin was son of a brahmin he knows how much his father was devoted to God but in return what did he get? A cheap life,a cheater wife.\n? God doesn\'t give you anything for free you have to do karma!?\n2-. Scene where little nawazuddin?s mom was sleeping with her affair and gaitondes brahmin father was sent to jail\n?Rage can make anyone do anything?\n3- Ma r@nd! Baap ch?t!#@\nSaid Ali Khan said these words just to ignite gaitondes.\n4-?? s??a?bse bada dhandha politics.\nWell defined hindu Muslim Harmony in India.\n5- when it was revealed that gaitonde himself killed his mother and to save gaitonde his father took all blaim on himself.', 22, 6, 'adithya', '0000-00-00 00:00:00'),
(53, 53, 'Jab We Met : The person is guard at railway station will be the same receptionist in Hotel Decent .     When Katrina borrows her friend\'s bike to meet Hrithik, she\'s wearing a pink top. She was in hurry so she would never think to change cloths but see what later she wore.  Rohit has been in Singapore for the past 2 years. His wife who has been in India all this while gets pregnant. How did that happen? Maybe the picture tells you how.', 33, 5, 'adithya', '0000-00-00 00:00:00'),
(55, 55, 'Scent of a woman  :---- what\'s the matter with you?   -with me ?   -Yeah Car feels heavy.You know why?    You got the fuckin weight of the world on your shoulders.', 14, 4, 'nilesh', '0000-00-00 00:00:00'),
(56, 56, 'Remember the scene when Amarendra Bahubali and Kattappa were visiting the countries. Bahubali stops near river for drinking water and suddenly he finds the dead bodies rising up on surface of water.\nKattappa mentions the attack as characteristic killing pattern of ?Pindaris?. Pindaris loot the village and kill every person which come across them and prepare their water mausoleum.', 17, 6, 'Nilesh8451', '0000-00-00 00:00:00'),
(57, 57, 'Those who have keenly read the books, they are very well aware about the traits of Voldemort\'s personality and his behavior:\nHe always operated alone; he never trusted anyone. Never shared all his secrets to one person.\nHe was an inventor with some deadly magical innovations under his sleeves and reached to exceptional mark of gaining dark magic knowledge at a very young age. (He made few of his Horcruxes even before leaving the Hogwarts as student)\nHe designed and executed his plans without any fear of future consequences.', 8, 1, 'adithya', '0000-00-00 00:00:00'),
(58, 58, 'Pakistan is the biggest market in terms of footfalls for bollywood movies.\nOther than Pakistan,bollywood movies are watched in Bangladesh,Nepal,Myanmar mostly through pirated DVDs.\nOutside the subcontinent,UAE and few other gulf countries are a big market.\nMost medium to big films release here in theatres.\nApart from Gulf,USA,UK,Canada,Australia and New Zealand are the places where bollywood movies find theatrical releases.\nSome big movies also release in Malaysia.For ex:Films of superstars like SRK,Akshay,Salman,Aamir,Hrithik these find a theatrical release in malaysia.', 2, 1, 'piyush', '0000-00-00 00:00:00'),
(60, 60, 'I believe both the actors were great in their craft and career, however Amitabh was smarter vs Rajesh and managed to stay afloat (salable )longer simply due to his attitude and professional approach.', 8, 3, 'pooja', '0000-00-00 00:00:00'),
(61, 61, 'BTS? discography is very unique and beautiful in my opinion. Here are a few songs which make me cry: 1)Born Singer 2)Spring Day 3)Young Forever 4)No More Dreams', 40, 5, 'nidhi', '0000-00-00 00:00:00'),
(62, 62, 'One day, I was riding with my parents in their van. My mom was singing along to a song from the 70\'s (I think) called ?Hitchin? a Ride? by Vanity Fare. She was singing quietly to herself in the passenger seat, Dad was driving, I was in the back, could barely hear her over the radio.\nMy Dad turns the volume down and looks at her, asking ?What did you just sing??\nShe answers ?I was just singing the song, why??\n?No, what words did you just sing?? he asked.\n?Ride, ride, ride, chinchin a ride?? as she realized her embarrassment and we all started laughing.', 19, 3, 'ayushi', '0000-00-00 00:00:00'),
(64, 64, 'Udurajamukhi?Udu..means star and uduraja means moon?you have a face like moon?\nMrigarajakadi?Mrigaraja?Lion?kadi means waist.. Waist like the lion? which comparatively is thin.', 40, 8, 'nilesh', '0000-00-00 00:00:00'),
(65, 65, 'The best way to remember songs is to play them. No really, play them and play them a lot!! As a guitar player and professional guitar teacher I have learned hundreds of songs and learning more every day and I can honestly tell you, it is not easy to remember them all.\nI?ve heard interviews with professional chart-topping bands who?ve mentioned this as well. Remembering all the songs they\'ve written over the years. Look at the Rolling Stones! How many songs have they written in 50 years of existence?\nHow could they possibly remember them all? They can?t, but I?m sure they do pretty well by playing them.\nRemember, music is knowledge and knowledge is based on the ?use it or lose it? theory so if you want to remember the songs you learn to play on guitar,?..\nPlay them. And play them as much as you can. Then you?ll be able to remember them.', 50, 12, 'Nilesh8451', '0000-00-00 00:00:00'),
(66, 66, 'The greatest number of nice music pieces by a currently living composer is written by Leo Brouwer (born 1939).\nBut the most mind blowing music piece of our time is, probably, ?Concertino for piano, strings and percussion? by Adam ?ukawski (born 1997).', 44, 9, 'adithya', '0000-00-00 00:00:00'),
(67, 67, 'Maybe one of the most beautiful song lyrics ? from my opinion.\nby CARLY SIMON, ANDREAS VOLLENWEIDER\nLet me be before the world\nWhat I am when I\'m alone\nAnd when my vision falls below\nLet there be forgiveness\nLet me answer when I\'m called\nLet me know the voice is right\nAnd when it\'s deep inside my soul\nI\'ll know it by it\'s light\nAnd when it\'s deep inside my soul\nI\'ll know it by it\'s light\nHelp me to make the loving choice\nLet me answer when I\'m called\nBy the mighty and the small\nIn the service of my soul\nLet there always be forgiveness', 33, 9, 'ayushi', '0000-00-00 00:00:00'),
(68, 68, 'Playing a progression of those 3 chords with perfection is gonna be difficult. And with that, you need to learn and practice the strumming pattern too simultaneously. Learning a guitar is simple but mastering it isn\'t and that\'s where you should not learn guitar by yourself as a beginner.', 22, 10, 'arjun', '0000-00-00 00:00:00'),
(69, 69, 'Deewani Mastani (Bajirao Mastani)\nNachde ne saare (Bar Bar Dekho)\nPallo Latke (Shaadi Mai Zaroor Aana)\nSweety tera drama (Bareily Ki Barfi)\nAmbarsariya (Fukre)\nGulaabo (Shaandar)\nNagare sang (Ram Leela)\nDilbar (Satyamev Jayate)\nGhagra (Yeh Jawaani Hai Deewani)\nSasural Genda Phool (Dilli 6)\nDin Shagnaa da (Phillauri)\nMohe rang do laal (Bajirao Mastani)\nGhoomar (Padmavat)\nHeer (Jab tak Hai Jaan)\nPinga (Bajirao Mastani)', 50, 1, 'nidhi', '0000-00-00 00:00:00'),
(70, 70, 'You can perform anyone from these songs.. they are just beautiful!!\n\nLag Ja Gale - Woh Kaun Thi?\nChura Liya Hai Tumne Jo Dil Ko - Yaadon Ki Baaraat\nAbhi Na Jao Chhod Kar - Hum Dono\nAaj Jaane Ki Zid Na Karo\nTune O Rangile Kaise Jadu Kia - Kudrat\nPyar Hua Chupke Se - 1942 A Love Story', 29, 8, 'ayushi', '0000-00-00 00:00:00'),
(71, 71, 'When you change instruments in a band situation, it changes the feel, the sound and pretty much everything. This enables a band to become a ?different? band. So, if someone sounds better on drums on a particular tune, that?s what they play. The same can go for all the instruments, where someone plays a given song on bass, say, then that?s what they play.\nOn stage, you can?t change instruments every song. It slows down the flow and pacing of the set. But an individual can change instruments, such as going from guitar to fiddle, especially if there is another guitar player. Or your keyboard player switching to guitar for a song that requires two guitars.\nVersatility in a band is always, always desirable. Not just because it gives you a different sound, changing up instruments, but because it keeps things fun and helps keep players from getting too settled.', 10, 0, 'adithya', '0000-00-00 00:00:00'),
(72, 72, 'India which once produced a great wicket keeper batsman named Farokh Engineer was struggling with a name called Nayan Mongia.Nayan Mongia, a name we all can easily recall but for all not so good reasons. One who had a blazing start to his career with a 152 runs against a great Australian pace attack, then struggled to score runs after that brilliant innings to remember.He had a great start to his career. He averaged 35.94 from 1994 to 1996, scoring 647 runs from just 20 innings and team India thought we got an answer to the question of who is going to be the bottleneck of tail end wickets, that just fell like bicycles in stand.But after that innings, Mongia went all heads low. Scoring just at a poor average of 18.92, with a highest score of just 78 against India tour of West Indies at Kingston', 8, 1, 'Nilesh8451', '0000-00-00 00:00:00'),
(73, 73, 'A lot has changed with the advancement of game over the years. Here are a few of those.   1) Bat size. 2) Introduction of DRS  3)  Quality of bowling 4) Role of fitness ', 20, 1, 'Nilesh8451', '0000-00-00 00:00:00'),
(74, 74, 'The real reason is that they do not want the ball to hit their hands because they will be fouled and/or carded for it. They don?t keep their hands at the side because they jump and turn during the kick and it can hit their hand then. They keep it over their groin, abdomen or shoulders. Also, unlike cricket and few other sports, football players don?t wear cups\nThese however may be some of the pun reasons\nGetting hit in the nuts is painful. You don?t agree? Try and experience it. I?d be happy to oblige.\n', 22, 1, 'adithya', '0000-00-00 00:00:00'),
(75, 75, 'I think it was the David Ferrer   he ultimate nice guy in tennis, David Ferrer, could be the most consistent player ever to not win a Grand Slam. He could probably win a Slam on all surfaces except Wimbledon, where his best result is a couple of QFs, if not for the Big Four. On his best surface i.e. clay he has to deal with the fact that the greatest ever player on clay plays in his generation. Mentally a zen master but physical inadequacies have limited his challenge.\nHighest Career Ranking: 3\n1 time finalist (French Open ?13) - Lost to Rafael Nadal\n5 time semi-finalist (Australian Open ?11, ?13; French Open ?12; US Open ?07, ?12)\n11 times quarter-finalist\n27 ATP Titles\nDavis Cup Winner\nOverall Grand Slam Win % - 71', 32, 1, 'pooja', '0000-00-00 00:00:00'),
(76, 76, 'Monica Seles:----\nShe was born in 1973 and before turning 20, Seles had racked up 8 Grand Slam Singles titles and 3 year-end final titles. Also keep in mind that:\nthis achievement took place during the Steffi Graf era - a player currently considered as one of the greatest, if not the greatest tennis player of all time.\nNo other player (male or female) has ever been able to win more than 5 Gland Slam titles before the age of 20.', 22, 6, 'nilesh', '0000-00-00 00:00:00'),
(77, 77, 'In 150 years of cricket history, Chris Gayle is the only person to hit a six of the first ball of the test match.\nSourav ganguly is the only indian player to score century in the knockout stages of the world cup. Recently Rohit Sharma also achieved this feat\nSaeed ajmal has never won a single MAN OF THE MATCH award in ODI.    AB Devilliers is the only player to maintain 90+ strikerate and 50+ avg continously for 6 years. The only law of Cricket that has not had any changes or modifications,is the length of the pitch.', 55, 0, 'Nilesh8451', '0000-00-00 00:00:00'),
(78, 78, '1)Cricket is named as the gentlemen?s game . Sanga took it to another level. There are lots of incidents where he went off the crease before Umpire gives out. Some times, when even the Umpire say not out , he would walk way if he knows he is out.  ', 31, 14, 'adithya', '0000-00-00 00:00:00'),
(79, 79, '1) Inzamam-Ul-Haq one of the best cricketers Pakistan has ever produced. 2) Virendra Sehwag: Again one of the finest batsmen to ever represented India.  3)Shane Warne: one of the best leg spinner and an all time saviour of Australian team.4)Dwayne Leverock.5)', 22, 1, 'arjun', '0000-00-00 00:00:00'),
(80, 80, 'The size of the court is 13m x 8m if you don\'t include the 1m of lobby on each side. If you include the lobby length, then it becomes 13m x 10m. The length remains 13 metres in both cases.', 40, 0, 'nilesh', '0000-00-00 00:00:00'),
(81, 81, 'It?s not always easy. Many people will talk about ?3D? shoulders and traps, but that really only shows you the people who have been using steroids for some time.\nSteroids don?t make you big overnight. It takes several cycles and lots of eating and training to complement the cycle before you ever get to the point of ?looking? like you?re on a cycle.', 12, 4, 'pooja', '0000-00-00 00:00:00'),
(82, 82, 'These are the two instances.\n\n1)West Indies vs England at Trinidad in 1967?68\nWest Indies: 527/7d and 92/2d\nEngland: 404 and 215/3\n\n2. South Africa vs Australia at Sydney in 2005?06\nSouth Africa: 451/9d and 194/6d\nAustralia: 359 and 288/2\nHowever, there are other cases which could be considered.', 31, 1, 'Nilesh8451', '0000-00-00 00:00:00'),
(83, 83, 'Chinese Olympic medalists can make millions and millions of dollars no matter which sports, the commercial sponsorship alone will make those athletes incredibly rich and famous. That?s also the motivation why lots of families are willing to sacrifice, despite the hardship during training. India seems only focused on cricket and they they don?t seem to be interested in any other sports.', 21, 13, 'adithya', '0000-00-00 00:00:00'),
(85, 85, 'Statistics show Judo is the safest contact sport for kids in the US.\nTo directly compare this to ?wrestling? I would need to know what form of wrestling you are referring to.\nAll sports have risks of injuries. I will not claim people don?t get hurt in Judo, but Judo has a focus on safety and injury prevention not seen in other sports.\nFYI: I competed in high school wrestling, where I had both shoulders ripped apart. Nine shoulder surgeries later both shoulders work pretty well.', 11, 12, 'pooja', '0000-00-00 00:00:00'),
(86, 86, 'I think it is cricket ,football ', 2, 1, 'arjun', '0000-00-00 00:00:00'),
(87, 87, 'When a ball is hitting the pads, umpires judge the height and angle of the ball to make the LBW decision. The decision they make is called the ?umpires call?.\nThen, if batsman or the opposition team feel that the decision is not fair, they can challenge it (if there are reviews left). Here comes the technology. They use the pixel data and extrapolate the line and length of the ball. The main thing to understand here is, this is just an approximation (nevertheless, a good one). This doesn?t take into consideration the pitch behavior.\nTherefore, umpires decision is valued more and unless there is huge difference, it won?t be overturned.', 19, 0, 'Nilesh8451', '0000-00-00 00:00:00'),
(88, 88, ' 1.For his fans, he might be the greatest chess player in the world, but he rates the late Bobby Fischer as the best of all time.2. Every time he loses a game, h actually works out super hard at the gym so that his mind can sleep at peace, without worrying about the loss.3. His mother taught him the game of chess when he was just six years old.4. At the age of 15, Anand became the youngest Indian to win the title of International Master.5. He has won the World Chess Championship five times and was World No.1 from 2007 to 2013.\n\n', 17, 0, 'adithya', '0000-00-00 00:00:00'),
(89, 89, 'many sports like hockey ,judo,wrestling etc.', 22, 15, 'piyush', '0000-00-00 00:00:00'),
(90, 90, 'A major reason why Indian or the Subcontinent people are unable to compete with other countries in sports like football, hockey, athletics or tennis is that we are not gifted with significant physical strength, good height and substantial match fitness. The obvious reason behind this is the genetics which ultimately makes a big difference in these sports which are physically gruelling. For instance, in football on an average a player has to run ~10km in a 90 minute match and I have not seen any such data for cricket where a player ran this much in a cricket match which goes on for much longer time than football.\nCricket doesn\'t demand too much physical fitness, a person with normal physique and fitness can compete at the highest level.', 12, 33, 'hesha', '0000-00-00 00:00:00'),
(91, 91, 'e have heard it all before. ?They are addictive and take the fun away from a game because all you do is play for Achievements.? Yes this is true, but only for a select few people and it does not reflect on everyone who enjoys achievements in games. You heard right, some people really do play games for nothing. For me, as a gamer, achievements suck all the fun out of a game and totally kill the experience, but that in itself does not mean achievements serve no purpose. When it comes down to it, every gamer has an opinion on achievements, and maybe in this article we can find some middle ground. There are glorious moments when you get an achievement, accomplishing your goal, making it feel like a real achievement.', 44, 3, 'keval', '0000-00-00 00:00:00'),
(92, 92, '1)You snooze you lose\n2)Ciada 2018\n3)Online treasure frenzy\n4)Hunt-mania\n5)Smarty quest 1.0', 22, 4, 'mahesh', '0000-00-00 00:00:00'),
(93, 93, 'There are tons of misconceptions about guns in gaming.\nFirst off, let?s talk about camouflage.Camouflage\nIn videogames, camouflage is seen as something that is only there for status.They offer no real benefit to the player at all.\nHowever, that?s a different case in real life.', 43, 22, 'moksh', '0000-00-00 00:00:00'),
(94, 94, 'In my opinion, the community has definitely tainted its image. The game itself is pretty fun (I?m not a young kid anymore and I still enjoy it), but the community can be very cringy and toxic sometimes. This gives the game a bad image and makes outsiders think it isn?t worth their time.', 22, 2, 'john', '0000-00-00 00:00:00'),
(95, 95, 'I would say Warframe. It isn?t my favourite game, but it sure is the one I feel everyone should play. It has a fantastic story, good grind scales, excellent combat and movement and last but not least, meme approving devs.', 27, 12, 'nidhi', '0000-00-00 00:00:00'),
(96, 96, 'Okay! Follow this tree steps and you will be in last 10 player circle everytime.\n\n1)Don\'t start the game with a mindset of getting more kills, but start the game with the mindset of surviving.\n2)First get ready with guns and all at first. So, jump at some place with less popularity so that at first you can gather all the things you need then start killing.\n3)Don\'t hesitate to engage. If you are always afraid of getting killed then you are done for the game. Don\'t be afraid to engage. Create a strategy and start shooting.', 23, 1, 'nilesh', '0000-00-00 00:00:00'),
(97, 97, 'The Predator Bow', 11, 7, 'adithya', '0000-00-00 00:00:00'),
(98, 98, 'Yes.  In 1982, Peter Bukowski, an 18 year old, was playing Bezerk, an arcade game, before dying due to a heart attack (compromised cardiovascular system).', 32, 1, 'nidhi', '0000-00-00 00:00:00'),
(99, 99, 'ython and Pygame is a good language and framework for rapid game prototyping or for beginners learning how to make simple games. Ultimately the performance of Python isn\'t good enough for the performance intensive parts of the game engine for higher end games. Your export options may be limited to devices with a python interpreter however, which basically excludes mobile.\nPython is also good for building tools for game designers which simplify tasks like level design or dialog tree creation and having those tools export that work into a format the main game engine can use.\nSome game engines might use Python as a scripting language. For instance I know all the AI behaviors in The Sims games are scripted in Python.', 55, 12, 'john', '0000-00-00 00:00:00'),
(100, 100, 'You can\'t play any wrestling game on jio phone.\nBut,\nYou can play other games on jio phone in its games application. Many games are available in the games app.', 22, 12, 'arjun', '0000-00-00 00:00:00'),
(102, 102, 'So, so many things?\nentering people?s houses without invitation\nlooting their stuff (some games punish you for that, but most do not)\nkilling villagers or blowing up their houses or putting them all in a hole so they can?t run away when you try trading with them - ?It?s for your own protection! There are zombies outside!? (Minecraft)\nWear weird costumes while running around with weapons (Fortnite, Overwatch, Team Fortress 2?).Carrying weapons openly and everywhere', 33, 19, 'Nilesh8451', '0000-00-00 00:00:00'),
(103, 103, 'I can?t choose only one. There are some of my favorite missions in video games in random order\nAll ghilled up - Call of Duty MW', 12, 1, 'pooja', '0000-00-00 00:00:00'),
(104, 104, 'Yes, i?ll explain the secret way of getting unlimited Diamonds in Free Fire Battleground game quickly and safely.\nGet many of the unlimited Diamonds by using the Free Fire Battleground online tool. The Free Fire Battleground online tool operating well on all Android and iOS devices without any problems.', 19, 21, 'adithya', '0000-00-00 00:00:00'),
(105, 105, 'Laura from The Evil Within', 32, 17, 'nilesh', '0000-00-00 00:00:00'),
(106, 106, 'For me personally, I play only single-player mode and I do so for several reasons 1)Enjoyment 2)Freedom of Choice 3)Scenery/music 4)Creativity/Imagination 5)Story, Characters, Total Immersion 6)Gaining Life Lessons 7)Forging Myself', 59, 0, 'Nilesh8451', '0000-00-00 00:00:00'),
(108, 108, '1)Ragi Sangati.(Rice and Finger Millet Ball).    2)Natu Kodi Pulusu(Country Chicken Curry)  3)Rayalaseema Mutton Head curry.                                  4)Kadapa Karam Dosa. Etc.', 33, 0, 'nidhi', '0000-00-00 00:00:00'),
(109, 109, 'Cooking is a skill and every skill can be well mastered with time and experience. There are several culinary tips and hacks that I?ve discovered and learnt over the years.\nI?m sharing some of my favourite cooking life hacks that save me a great time and make cooking easier for me.\n1)Grate butter to soften faster                                           2)Add salt and turmeric while saut?ing                         3)Keep apple fresh etc', 12, 1, 'ayushi', '0000-00-00 00:00:00'),
(112, 112, 'I think it is depending upon the situation ,  if you are the boy and the customer is lady its more chance to invite her in your house and if we talk about any guy then its not a chance to call him to your home not the case if you know him.', 64, 12, 'moksh', '0000-00-00 00:00:00'),
(113, 113, 'The flavour enhancer E635 is a combination of E627 (disodium guanylate) and E631 (disodium inosinate) and is in Fantastic Noodles (Chicken). For Example, Maggi assure you that the Flavour Enhancer (635) used in MAGGI Noodles are made from a vegetarian source i.e. from beetroot and yeast extract.', 33, 11, 'Nilesh8451', '0000-00-00 00:00:00'),
(114, 114, 'Each state of India, has its own delicious dessert for special occasions. However, here is the list few desserts that are enjoyed and served across India. Hope you enjoy my dessert list:\n1.  Rasgulla:\nSoft, spongy balls of cottage cheese soaked in chilled sugar syrup, melts in your mouth! This Bengali dessert (from eastern India) leaves you wanting more..always!                                                       2.  Aam Shrikhand:                                                                    3.  Malpua:   4.  Kulfi:  5.  Mysore Pak:  6.  Gulab Jamun:  7.   Jalebi:  8.  Malai Ghewar:  9.  Gajar Ka Halwa:  10.  Kaju ki Barfi:   11.  Payasam:   12.  Puran Poli:    13.  Basundi:    etc.', 55, 0, 'Nilesh8451', '0000-00-00 00:00:00'),
(115, 115, 'They generally eat freeze-dried or dehydrated meals.\n\nThe reason astronaut food is prepared this way, is that it takes up less space, and is more weight efficient. It also makes the process of food preparation and consumption easier. You don?t want food or liquids to get loose and float around a spacecraft. Not only is it messy in microgravity, but it also can present a danger to the spacecraft systems. No one wants to abort a mission because a glob of juice, or some crumbs got behind a panel and shorted out life support.\n\nIt also has the added benefit for life scientists, that it makes it easy to track what each astronaut eats, should they need that information for experimental purposes.', 32, 1, 'adithya', '0000-00-00 00:00:00'),
(116, 116, 'Below is the diet routine which I had followed to shed few kgs.\n1. Breakfast:  a. Wheat bread with peanut butter  b. Sprout salad   c. Oats   d. Last but not the least - FRUITS                                                                                           2.Lunch     a. Have phulka or chapathi with any veg side dish.    b. If you are planning to take rice, try brown rice instead of White rice   c. Most importantly, should add vegetables in lunch meal.   d. We can also try vegetable salad alone.                      3. Evening snack:\na. Try green tea in the evening.                                         4.Dinner                                                                                       a. And the most important thing is to have the dinner at least 3 hours before you sleep or before 8PM.\n   ', 56, 12, 'nidhi', '0000-00-00 00:00:00'),
(117, 117, 'Common bananas are genetically identical, they come from trees that have been cloned for decades. The common bread ingredient L-Cysteine is derived from human hair.\nChicken McNuggets contain an industrial chemical.\nThere were no tomatoes in Italian food, peanuts in Thai food or chilli, peppers in Indian food before 1450.\nRed grapes are famous for resveratrol, but they only produce it in response to fungal infection during their growth. So, organic grapes have more resveratrol because they are not sprayed with anti-fungals.Canola oil used to be called RAPESEED oil but the name was changed for marketing reasons.', 12, 1, 'nilesh', '0000-00-00 00:00:00'),
(118, 118, 'There are 3 foods that all of my Indian friends have declared to be disgusting.\n\n1)Peanut Butter and the beautiful Peanut Butter and Jelly Sandwich.                                                    2)Cheerios, how dare they call it bland.                      3)Fruit Snacks. They said that they didn?t deserve to be called fruit. What audacity.', 32, 0, 'pooja', '0000-00-00 00:00:00'),
(120, 120, 'White rice are simple carbs i.e they release large amount of energy in a very short span of time.Our body doesn\'t need that much energy and body convert it into fat.\n\nExcessive fat is not good as it makes you look fat plus it welcomes many diseases.', 13, 1, 'nilesh', '0000-00-00 00:00:00'),
(121, 121, 'Almost never. Last time we went to a fast food joint was a year or so ago and I got them chicken fingers and fries. I still wonder how much actual chicken they ate that day. Probably not much?\n\nHowever what I like to do is make them a McDonald?s like breakfast on Sundays when I have more time to prepare breakfast. Usually it is whole wheat bread with cheddar cheese, egg omelette, turkey breast and sliced tomatoes.', 32, 22, 'adithya', '0000-00-00 00:00:00'),
(122, 122, 'Onion Pakora.\nShakarkandi ki Chaat( Sweet potato)\nAloo Chat- Potato is boiled and then fried on tawa. Served with green chutney.\nIdli- Vada- The most common street food of south india. Generally served with sambhar and coconut chutney.\nMirchi Vada.\nCholae Bhatura.\nPani Puri.\nTikki Chat.                                                                                    Roll.', 43, 12, 'moksh', '0000-00-00 00:00:00'),
(123, 123, 'Poor FDR had to eat?at least when the press and/or guests were around?denture-friendly fare such as ?deviled eggs served in a tomato sauce with a side of mashed potatoes? with ?prune whip? (pudding) for dessert.', 11, 6, 'pooja', '0000-00-00 00:00:00'),
(38, 124, 'i dont know', 0, 0, 'Nilesh8451', '2019-02-17 16:26:54');

-- --------------------------------------------------------

--
-- Table structure for table `a_o_s`
--

CREATE TABLE `a_o_s` (
  `id` int(20) NOT NULL,
  `programming` int(11) NOT NULL,
  `science` int(11) NOT NULL,
  `books` int(11) NOT NULL,
  `economics` int(11) NOT NULL,
  `movies` int(11) NOT NULL,
  `music` int(11) NOT NULL,
  `sports` int(11) NOT NULL,
  `gaming` int(11) NOT NULL,
  `food` int(11) NOT NULL,
  `travelling` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `a_o_s`
--

INSERT INTO `a_o_s` (`id`, `programming`, `science`, `books`, `economics`, `movies`, `music`, `sports`, `gaming`, `food`, `travelling`) VALUES
(1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, 0, 0, 1, 0, 0, 1, 1, 1, 1, 1),
(3, 0, 1, 0, 1, 0, 1, 1, 0, 0, 1),
(4, 1, 1, 0, 1, 0, 1, 0, 1, 1, 0),
(5, 0, 0, 0, 1, 1, 0, 0, 0, 1, 1),
(6, 1, 1, 0, 1, 0, 0, 0, 1, 1, 1),
(7, 0, 0, 1, 1, 1, 0, 0, 0, 1, 1),
(8, 0, 0, 0, 1, 1, 1, 0, 0, 1, 0),
(9, 0, 0, 0, 0, 1, 1, 1, 0, 0, 0),
(10, 0, 0, 1, 0, 0, 0, 1, 1, 1, 1),
(11, 0, 1, 1, 0, 0, 0, 1, 1, 0, 0),
(12, 0, 0, 0, 0, 0, 1, 1, 1, 0, 0),
(13, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0),
(14, 0, 0, 1, 0, 0, 0, 1, 0, 0, 0),
(15, 0, 1, 1, 1, 0, 0, 1, 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `c_d`
--

CREATE TABLE `c_d` (
  `id` int(20) NOT NULL,
  `resident` varchar(20) NOT NULL,
  `college_name` varchar(20) NOT NULL,
  `course` varchar(20) NOT NULL,
  `year` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `c_d`
--

INSERT INTO `c_d` (`id`, `resident`, `college_name`, `course`, `year`) VALUES
(1, '', '', '', ''),
(2, 'bhayander', 'vcet', 'engineering', '3'),
(3, 'bhayander', 'vcet', 'engineering', '3'),
(4, 'vasai', 'vcet', 'engineering', '3'),
(5, 'virar', 'wilson ', 'mba', '1'),
(6, 'bandra', 'wilson', 'bmm', '3'),
(7, 'andheri', 'hinduja', 'bcom', '3'),
(8, 'bhayander', 'hinduja', 'bcom', '2'),
(9, 'malad', 'wilson', 'bms', '3'),
(10, 'bhayander', 'hinduja', 'bms', '3'),
(11, 'bhayander', 'djsec', 'engineering', '3'),
(12, 'gtfv', 'dtrhfytfjh', 'tftyff', '2'),
(13, 'sderfbh', 'vcet', 'comps', '2018'),
(14, '', '', '', ''),
(15, 'Bhayander', 'vcet', 'engineering', 'third');

-- --------------------------------------------------------

--
-- Table structure for table `descri`
--

CREATE TABLE `descri` (
  `uid` int(11) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `descri`
--

INSERT INTO `descri` (`uid`, `description`) VALUES
(2, 'fytsfajgfdcbdabk');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `uid` int(11) NOT NULL,
  `school` varchar(50) NOT NULL,
  `concentration` varchar(50) NOT NULL,
  `degreetype` varchar(50) NOT NULL,
  `graduationyear` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `empinfo`
--

CREATE TABLE `empinfo` (
  `uid` int(11) NOT NULL,
  `position` varchar(50) NOT NULL,
  `company` varchar(50) NOT NULL,
  `startyear` int(11) NOT NULL,
  `endyear` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `interest`
--

CREATE TABLE `interest` (
  `id` int(20) NOT NULL,
  `programming` int(11) NOT NULL,
  `science` int(11) NOT NULL,
  `books` int(11) NOT NULL,
  `economics` int(11) NOT NULL,
  `movies` int(11) NOT NULL,
  `music` int(11) NOT NULL,
  `sports` int(11) NOT NULL,
  `gaming` int(11) NOT NULL,
  `food` int(11) NOT NULL,
  `travelling` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `interest`
--

INSERT INTO `interest` (`id`, `programming`, `science`, `books`, `economics`, `movies`, `music`, `sports`, `gaming`, `food`, `travelling`) VALUES
(1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0),
(3, 1, 0, 1, 0, 1, 0, 0, 1, 1, 0),
(4, 1, 1, 1, 0, 0, 1, 1, 0, 0, 0),
(5, 0, 0, 1, 0, 0, 0, 0, 0, 1, 1),
(6, 0, 0, 0, 1, 0, 0, 1, 1, 0, 0),
(7, 0, 1, 0, 1, 1, 1, 0, 0, 1, 1),
(8, 0, 0, 0, 1, 1, 1, 1, 0, 1, 1),
(9, 0, 0, 0, 0, 1, 1, 1, 0, 1, 0),
(10, 0, 1, 0, 0, 0, 0, 1, 0, 1, 0),
(11, 0, 1, 1, 1, 1, 0, 1, 1, 0, 1),
(12, 1, 0, 1, 1, 0, 0, 0, 0, 1, 0),
(13, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0),
(14, 1, 1, 0, 0, 0, 0, 1, 0, 1, 0),
(15, 1, 1, 0, 0, 0, 0, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `uid` int(11) NOT NULL,
  `location` varchar(50) NOT NULL,
  `startyear` int(11) NOT NULL,
  `endyear` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int(11) NOT NULL,
  `qid` int(11) NOT NULL,
  `writer` varchar(20) NOT NULL,
  `aid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `qid`, `writer`, `aid`) VALUES
(1, 38, 'Moksh ', 0),
(2, 36, 'Moksh ', 0),
(3, 36, 'Moksh ', 0),
(4, 38, 'Nilesh8451', 0);

-- --------------------------------------------------------

--
-- Table structure for table `profileinfo`
--

CREATE TABLE `profileinfo` (
  `uid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profileinfo`
--

INSERT INTO `profileinfo` (`uid`, `name`, `image`) VALUES
(2, 'books.jpg', 0x2f396a2f34414151536b5a4a5267414241514541594142674141442f34514375525868705a674141545530414b67414141416741415964704141514141414142414141414767414141414141414141414141414141414236414141414c41414141414256546b6c4454305246414142444146494152514242414651415477425341446f414941426e414751414c514271414841415a51426e4143414164674178414334414d414167414367416451427a41476b416267426e414341415351424b414563414941424b41464141525142484143414164674134414441414b51417341434141635142314147454162414270414851416551416741443041494141354144414143762f6241454d4141774943416749434177494341674d4441774d454267514542415145434159474251594a43416f4b4351674a43516f4d4477774b4377344c43516b4e4551304f447841514552414b44424954456841544478415145502f6241454d4241774d4442414d45434151454342414c435173514542415145424151454241514542415145424151454241514542415145424151454241514542415145424151454241514542415145424151454241514542415145502f41414245494145674163774d4249674143455145444551482f784141634141414341674d424151414141414141414141414141414742774146416751494351502f784142484541414241774d434177514842415548445141414141414241674d454251595241424948495445494530465246434a68635947526f52556a6770497963714b7830516b6b4e494f6a776349574679557a4e554a53596e5379733950772f3851414767454141674d42415141414141414141414141414141414241554241775943422f2f4541446b52414145444167494743414d484251454141414141414145434178454142415568456a4642635a47684578516955574742736345794d39454746534e5359734c77516e4b436b714c692f396f4144414d4241414952417845415077443045724d6f4b5356446c67344f686c2b7349572f684b67516e6c6e57766646536b706a4f4b62634b4570567941386443464d6d76756f42367150676575764772322f50544641315636546865465462394b716a6756524949365a384e623332696c4c57374f446f4e373531723731784a536b2b4a477356566b4c354a6379423131773166416952726f6c5748426677305550566f70423236454c707646694c476462656d74705751634a336574387575714f363656665662534a4674316d4d6945527463596359567553727a436b72546b59383941733368317841644a556f3035667551366b6e34377a6f684b6b764a2f46555275422b6c4e634e73734e615746584c6f4247794b787148454f7251473357715a5659784436634b446a6267786e7736485331645a5a716c5653376356525a5246645551373357346b5a48554167614d5a6644692b454b79615a47567a366f655744395548564e4b73573957663072654b2f6169516e3538306a554b73384f57515a49506d50577651724c4563457477656964414a316e6236554c586a42705463467968326e4c62666772786c783557776a7a42423536544b4c4b75436954307a71584265447a53736f6461655154386772365930387074705855326b3772586d3966393074722f785a315254364858554b5066573755736a6d4349707750793530585a32397261685161587231795256716d7346757a703961452b4b6b353735464c697156652f706b564d53665358456c7737567670696e4f302b336d427931394b786145656e734d4d3039675963543679556a4f56654a30547a493152594237796d5455486e7956476453435079367249375532652f3650465170627175666370536f75455a38456a6d543035415a30623043434f776f4156306a4172484e786d36544138556e304e56644b735a696d334e446b4f5130702b3637306b7079464c482f33545436746930362f657a4b3249395353694b306b4c57787941563463774f7571473175446c7879647379767a6e615130564168687451636b712f57356c44663752396730336542466f794b7659746472374d3931325442717455684d754f4c793470746c395347776f67444f41414f6d6c6432676f4b5668556d5931627a37566838577847305a6341746e744d7067546f354450655a387376476c6a564f7a4455335a37727262376145724955456a6f4d67616d6c526333465074486d344b67452f616a5355534674705178474a624153646f326e79774e54526f766c523835504556746d7350786374706d356231447672306b754b68757a6c62464168744a35344858565854626152456b39365153333077644735717352557352547455534f6574657145494f4732676c7363383653343477794c6478316f796f64316545572b4a76706244476f476875354655656e55682b66557054454f4a47527664666455456f6254356b2b2f534275446a3977306f72796b52716a4d71482f5377316c4a39785874476e39557130696e526c7a68446c5330746b457378577734366f5a3537556b6a50757a3839615536364f46396362534b324b63316e6c33646170336f3548686a3735414831316e2f737955585957743446554855464165784e4673336239714e464a3139346e33465548424b36503834316e546139547148554955564d347832765457384b654357306b7253426e3166577838446f75657063314f6378786f507644673559643155643258624d5555326170494c55366954335746444854426157452f54536e686348654e464f6b42716c396f4f2b5944514f4d4f535579646f397a79566131616e6d576a6f41464932626565766c544a6d785a766b4b754f73517261436d4f454b4f5843756748496232514447504c79787255646a4c7a67734c483463365662396739716545796c647564704e696572626a7571786238636e503679452f77304f54367a323962634b763572596479495366306b557a6170513979485166326445705132344a5334504f52366755765662614a6a54482f41463741307a4c327130793357364b354369783356564f745261577444374a787364335a494949777231655855657a566f494e4e6c4e376a466133456377526a42317972784237533361447055713332654976422b6778584b585757617245626a6d5848394e656a6f5753327276456b4a51417663564a7a6a41384e5a732f79694536416f47342b7a302b456b396166634c53382b344c534d367462773935306e51415550416a36305a64734a61745743434e4a51555472456a5349477344754e64507532375233427a694e6644477175735733544b664845365045434864345146593641357a2b375377745874735778647533485a2f346c785165526456466a6c6b6631696c4a4247694b36654e6a56646f3763537a65484e5a46514c365366745231694f77684f3038793468537963484751426e7931557131444b345741443555456c6934576d5152483979667257394b6361596237353161554e4e2b7374617a674249366e50674e4a5779653062483453634e326d336b71662b32704d326f4e744e703575642f496357446e7067676a5176787a6a33363952594659726c396437496b31756d5149314467786b6f70376a6b6955687659357579743462536f2b746a4f504454447537674e496a4c674d584446516d4f3038677449536a41617763415938426f4c4644624a5a535831646d5a796b66435038413154504330576a61314975544a797934367546624e4a34724e56696e4d565256714f6b795539356e5950452b3355305173384c6165303068744d315141486e71613832586857424c5556647250784e50546a535a79534f6631702f555774525545535a6176583853665056302f634d53655734696433726e42775044536d657139754d484c397855354b636c51534a616457644f3470323946556d504863703070535474436d35714f767831754a66563244415474327a574d6673644e576d6b456e68544b6c30366b4e7259615535734b694d447a317a3378683472335254726871646c563677544d70634a375930694a4b5335486652674b537453566f475659497944304f6365656d4a574f4c4e4a516d504c646f6a3835525564766f436a4b325947637237704b696b652f7271766d306c2f694842526473576d4b57696f44656c4b416f45625355594b56414b423958784131773968384d72636251416b6b616a6e7132674765555662673931314f2b4348306b6b4a6d5641774449314b3154357a72726d365663746e4b2b3968384f72676f6b6e6e393753356e6f7842382f756c704830316c54754c563455425761506674394d6f484a4c4e53697356467344385a332f7461636332774a724b6c6236504a547a38577a2f654e5644396e375351714173653973667730436934645a79436c4164306b6a675a46625934693038495730685869524a347a4e4473487461586e536b70465570744c7253556a6d6f3036524363503553744f6445464b3761316a76766f6a3132793768684f754b434e3052763070475430354142583031587962516a6339304250786147682b565a73466834764e77454963546770576c737049506d43447950753057336970487a457a793949394b577632746b2b4f79316f48394a503769614c4c7637514843576465435a45797574787168533254536f444d794f74436f346b374679333145704b456b70513279426e4977356e47375772784c34686343364a4c706c774b72316e74534a455653524a5a4c4b336c6b4b4849643243736e346156567a634f4b564a6255343145434645457178754850323657465273314e4d654b32576b702f356b35422f646f2b3164596637524a6d4f3863737375644133544a4d4a526b6c4f51322b2f666d64575a4e465638647169795770436d36444172315a576e6b4378546c744e6e3862323339326c394e375466455761564a74327a594e4f5352367274526b4b66555062735274543964574d474732567151367453674d64585034364a366251364d72615834795641347953704f6d4a76574c5a4d427164356e36446c566c7331624835345572636f4a2f61547a7170344656532b2b4b66486e687046346d567456597041754255316d6d734e4a6a782f5349636479513276434f617469306f504d6b6452353639476279534b6770633263306b374545684a484948586e7a51754b316d38464f50746f585463464f6d50774c6661714c7934394d5a624c6756496a715a52684b6c4a53426c5255546e6f4f687a726f6546327875475045317952523646397378706b70437977334d68686f6e43636b425155556b675a4f4d394164412f615331766279315134793253334759534d686d6153332f56786670444b64484c55544a7a4a6a506159696c35656c7931526d366169314371386c706c44754549517337553868794770716d4642715a4b3153707352783153314b4b753855633555535044797871614462772b31434143675670512b68493063737137444e79506f79484c627439536765716e775044702f712b65766b35585831712b387443676b45416b69536a502f414939626b32712f6143514761533230366e3174364a6f43766d6c4931576871356d583545677a61684d616347576f705a616351306335774659436a385366646f6f754f62467a35436b53576b625578356d747146494e5263646a693349454649527637794936467255636a6c6a616e6c7a382b7568757457426138754e4c4c644c596853487371553879795748436f2b4a556b6466626e56725534377379416d4e49584a674f4a57485337466b684c716941655242536f45632b61543561444b6c564f496c4b5a6352534c69596c746f47454e31614b6e4a38687661566b652f62726a5362576b644b73412b4d2b7739617362637562645a36756b782b6b6a33493554534c76753375497474545671742b2f4c68517943647147367338636644666f5154653348714f765a483468584f6a6e6a3170616c442b304230773773346c582f4142485852632f444f6b7a47776f3466703959516f7139794845425130487463586250626b62717a61397930636b38797145586b44385452554438744674734b576d516c4b7478535477426e6c544c373363412f454b6876436f3478484f742b6d562f744b5642515246347154456a6c2f53494d57515071337a2b656a694a542b306157554c2f79386f6b3559546c586655694f30542f5a6e392b745331754c664371633668694c66464b5136726f334d576c687a506c68304a4f6e4a526131446d4d4a56416b527062524836624467576b2f6c4a47673352634d4b6c62595350464139784e4472766b5841305731676e7749704e564637744152304553615a537067364574556d4f373945506f50303042584855754b625353716f5766537750465474446d736a356f6355427272414c6a7263335052746968304a35667641316d6c4d525356667065304450393264537a647441397468422f32486f72326f4e33726b66687671482b44523957796564634653726d75644d6e6171306264636455516b4a626d50744b5566494a5543632b7a566c514c3175796373434c777a67755230724b46796c564a6157515231414a623959676735436336374575656955617055536f4e7947497a773947634a5338326c5743456b35353838363579716b364b30734d4d705535335451327053416c73416b3944384f67476d4b72697a75476f5262674876306c45634d7172744f766f644a66664330393352705365492b677057314b786f6c5475425666755250326a4c6d757155707474776f6a736a484a4b6334557641487335445730704d614c65566f514973614f4766544a5341776c49533242364d76794247666e7235336e6539456f4c6e2b6c707266704179576f6241334f6b6e72366f356a7979534f576c5655377a716c78564a6d556163597a454d714d6474446733677147436f6b48726a5457335a754830417548736745436457594979465263767472634a514f32534a6a776a57647731563165696c773149436c5579466b6a2f6a482f72314e63752f627455385861686e32537a6a2f75314e442f6468372f3578717a706a58714e4b7648674c436151572b4a5675764c504e5331566443646f382b61686e574474386344483971334f4b46764f484f3059724951456a38324471616d68437933453649726b4a5550367a78725565756a67473874436d654a4e76765958393654587941506b7242314463505a30586e76754946764b774d6637634a412b5a4f7071616a6f4767666848437539466635316361726c75646d35536c7672762b335a61464864746471544a783742304a3138586a325958554c4b626a7431436965374b6b7a32534d6e334538766271616d713173744a487769724564496f77566e6a565737616e5a59716946706c5372646b6b63763665796f4566716e6c6a5137493450396b74557266426c55794974514a372b6d3137305261542f4146536b38395455315530367476355a30647849714862644c75546e6133353159302b7a65454e4552736f7647713534777a366f46334c664879645373664456676c326d734a497033485a74395354684b616c4169537766784e70615639645455315337634c555a584233696657705259744a454a6b62737653716d703175354732483245585277377151646255336879544d674b566b593641764a3864632f3176686a78517262366d6e4c7a74656c512b36516e2b59564d4631306b657345754b54367152346367645455305462766441417043524a327837617556567259424d46526a756e2b486e514c542b7a2f41476375644952497270656c744f62486c656e4b55437632714b664836353061774f7a505a4c5a5158716b386c5a414a61453947556a7a79553839545530586358397954385a726f577a5459415349713462374f56674b51434a737849386936306638414471616d706f58726a2f35716e6f30312f396b3d);
INSERT INTO `profileinfo` (`uid`, `name`, `image`) VALUES

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `qid` int(11) NOT NULL,
  `ques` text NOT NULL,
  `category` varchar(250) NOT NULL,
  `views` int(11) DEFAULT NULL,
  `time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `author` varchar(250) NOT NULL,
  `area` varchar(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`qid`, `ques`, `category`, `views`, `time`, `author`, `area`) VALUES
(1, 'what is debugging?', 'programming', 2, '2019-04-27 20:12:55', 'Moksh ', 'open'),
(2, 'Why Does the Moon Appear in the Daytime?', 'science', 0, '0000-00-00 00:00:00', 'Moksh', 'open'),
(3, 'why is sky blue?', 'science', 0, '2018-09-30 00:32:47', 'Moksh ', 'open'),
(4, 'How Much Does the Sky Weigh?', 'science', 0, '0000-00-00 00:00:00', 'Moksh', 'open'),
(5, 'How Do Airplanes Stay in the Air?', 'science', 0, '0000-00-00 00:00:00', 'Moksh', 'open'),
(6, 'Why Don\'t Birds Get Electrocuted When They Land on Electric Wires?', 'science', 0, '0000-00-00 00:00:00', 'Moksh', 'open'),
(7, ' Why Is the Ocean Blue?', 'science', 0, '0000-00-00 00:00:00', 'Moksh', 'open'),
(8, 'What are the key features in C programming language?', 'programming', 0, '0000-00-00 00:00:00', 'Moksh', 'open'),
(9, 'What is the description for syntax errors?', 'programming', 0, '0000-00-00 00:00:00', 'Moksh', 'open'),
(10, 'What is the difference between abs() and fabs() functions?', 'programming', 0, '0000-00-00 00:00:00', 'Moksh', 'open'),
(11, 'What is the explanation for cyclic nature of data types in C?', 'programming', 0, '0000-00-00 00:00:00', 'Moksh', 'open'),
(12, 'There is a practice in coding to keep some code blocks in comment symbols than delete it when debugging. How this affect when debugging?', 'programming', 0, '0000-00-00 00:00:00', 'Moksh', 'open'),
(13, 'What is the method to save data in stack data structure type?', 'programming', 0, '0000-00-00 00:00:00', 'Moksh', 'open'),
(14, 'What are some must read books for people in their 20s?', 'books', 0, '0000-00-00 00:00:00', 'Moksh', 'open'),
(15, 'What\'s the saddest line from literature?', 'books', 0, '0000-00-00 00:00:00', 'Moksh', 'open'),
(16, 'Why is India\'s economy growing so quickly?', 'economics', 0, '0000-00-00 00:00:00', 'Moksh', 'open'),
(17, 'Is it a good time to invest in mutual fund, since market is going down now?', 'economics', 0, '0000-00-00 00:00:00', 'Moksh', 'open'),
(18, 'What country has the most unused potential?', 'economics', 0, '0000-00-00 00:00:00', 'Moksh', 'open'),
(19, 'Is banking in secondary or tertiary sector?', 'economics', 0, '0000-00-00 00:00:00', 'Moksh', 'open'),
(20, 'What is the best spoken line in any movie?', 'movies', 0, '0000-00-00 00:00:00', 'Moksh', 'open'),
(21, 'What is your favourite book that got ruined once it was made into a film?', 'movies', 0, '0000-00-00 00:00:00', 'Moksh', 'open'),
(22, 'What is the greatest rock album that hardly ever gets mentioned any more?', 'movies', 0, '0000-00-00 00:00:00', 'Moksh', 'open'),
(23, 'Who are the worst music artists today?', 'music', 0, '0000-00-00 00:00:00', 'Moksh', 'open'),
(24, 'Does a full stack developer need to be an expert with HTML and CSS?', 'programming', 0, '0000-00-00 00:00:00', 'Nilesh8451', 'open'),
(25, 'What is the most successful programming languagae?', 'programming', 0, '0000-00-00 00:00:00', 'adithya', 'open'),
(26, 'What are the requirements for web development after HTML and CSS?', 'programming', 0, '0000-00-00 00:00:00', 'Nilesh8451', 'open'),
(27, 'Should I learn C++ or Python?', 'programming', 0, '2018-10-02 21:06:56', 'pooja', 'open'),
(28, 'What are the technologies used during cricket matches?', 'science', 0, '0000-00-00 00:00:00', 'adithya', 'open'),
(29, 'Which technology of big data has more number of jobs in the market?', 'science', 0, '0000-00-00 00:00:00', 'Moksh', 'open'),
(30, 'What is node.js used for in simple terms?', 'science', 0, '0000-00-00 00:00:00', 'Nilesh8451', 'open'),
(31, 'Does the IT job really meet the quality of life for the people?', 'science', 0, '0000-00-00 00:00:00', 'nilesh', 'open'),
(32, 'What are some high tech weapons?', 'science', 0, '0000-00-00 00:00:00', 'adithya', 'open'),
(33, 'What are some great engineering marvels?', 'science', 0, '0000-00-00 00:00:00', 'john', 'open'),
(34, 'What is the most advanced handheld gun ever used?', 'science', 0, '0000-00-00 00:00:00', 'mahesh', 'open'),
(35, 'How does ultra edge technology work in cricket?', 'science', 0, '2018-10-02 21:06:56', 'pooja', 'open'),
(36, 'How does the impossible trinity in economics work?', 'economics', 0, '0000-00-00 00:00:00', 'keval', 'open'),
(37, 'How much do stock traders make?', 'economics', 0, '0000-00-00 00:00:00', 'Nilesh8451', 'open'),
(38, 'What is an investment that has earned you a lot of money?', 'economics', 0, '0000-00-00 00:00:00', 'adithya', 'open'),
(39, 'What is the relationship between interest rates and bonds?', 'economics', 0, '0000-00-00 00:00:00', 'hesha', 'open'),
(40, 'Why can?t a country print unlimited amount of money?', 'economics', 0, '0000-00-00 00:00:00', 'arjun', 'open'),
(41, 'What is the best bank for personal loans?', 'economics', 0, '0000-00-00 00:00:00', 'ayushi', 'open'),
(42, 'How I can start my own business in India?', 'economics', 0, '0000-00-00 00:00:00', 'piyush', 'open'),
(43, 'What are the types of foreign direct investments?', 'economics', 0, '0000-00-00 00:00:00', 'nidhi', 'open'),
(44, 'Why has the rupee fallen against the dollar, but slightly risen up against the euro?', 'economics', 0, '0000-00-00 00:00:00', 'ayushi', 'open'),
(45, 'who wrote the famous book  \'we the people\'?', 'books', 0, '0000-00-00 00:00:00', 'adithya', 'open'),
(46, 'Who is the author of the book \'Nineteen Eighty Four\'?', 'books', 0, '0000-00-00 00:00:00', 'Nilesh8451', 'open'),
(47, 'Who wrote the line: \' A thing of beauty is a joy forever\'?', 'books', 0, '0000-00-00 00:00:00', 'keval', 'open'),
(48, 'Which is the worst movie scene in a bollywood movie you have ever watched?', 'movies', 0, '0000-00-00 00:00:00', 'adithya', 'open'),
(49, 'Why hasn\'t nepotism in Hollywood been very successful like it has been in the Indian film industry?', 'movies', 0, '0000-00-00 00:00:00', 'piyush', 'open'),
(50, 'Is there a movie that you feel describes love right?', 'movies', 0, '0000-00-00 00:00:00', 'Nilesh8451', 'open'),
(51, 'What are some interesting facts about the Bollywood movie Sholay?', 'movies', 0, '0000-00-00 00:00:00', 'arjun', 'open'),
(52, 'What are the best scenes from ?Sacred Games??', 'movies', 0, '2018-10-02 21:06:56', 'pooja', 'open'),
(53, 'What are some interesting examples of movie mistakes in Bollywood?', 'movies', 0, '0000-00-00 00:00:00', 'hesha', 'open'),
(54, 'What was the strongest emotion that you felt when you watched a film?', 'movies', 0, '0000-00-00 00:00:00', 'keval', 'open'),
(55, 'What movie dialogues have changed/influenced your life?', 'movies', 0, '0000-00-00 00:00:00', 'nilesh', 'open'),
(56, 'What did you notice in Baahubali which nobody else noticed?', 'movies', 0, '0000-00-00 00:00:00', 'mahesh', 'open'),
(57, 'What part of Harry Potter goes unappreciated?', 'movies', 0, '0000-00-00 00:00:00', 'Nilesh8451', 'open'),
(58, 'Which countries watch bollywood movies besides India?', 'movies', 0, '0000-00-00 00:00:00', 'john', 'open'),
(59, 'How exactly do movies make money?', 'movies', 0, '0000-00-00 00:00:00', 'adithya', 'open'),
(60, 'Who is the best actor in Bollywood between Rajesh Khanna and Amitabh Bachchan?', 'movies', 0, '0000-00-00 00:00:00', 'nilesh', 'open'),
(61, 'Which BTS song gave you goosebumps/tears?', 'music', 0, '0000-00-00 00:00:00', 'john', 'open'),
(62, 'What\'s your favorite misheard lyrics which you think are better than the original?', 'music', 0, '2018-10-02 21:06:56', 'pooja', 'open'),
(63, 'What album do you play when you want to feel sad?', 'music', 0, '0000-00-00 00:00:00', 'arjun', 'open'),
(64, 'What is the meaning of this Malayalam song ?Udurajamukhi Mrigarajakadi??', 'music', 0, '0000-00-00 00:00:00', 'adithya', 'open'),
(65, 'I\'m an OK guitar player, but I have difficulty remembering full songs. How do you remember them?', 'music', 0, '0000-00-00 00:00:00', 'Nilesh8451', 'open'),
(66, 'Who is the greatest classical piano composer of our generation?', 'music', 0, '0000-00-00 00:00:00', 'ayushi', 'open'),
(67, 'What are the most beautiful lyrics you have ever heard?', 'music', 0, '0000-00-00 00:00:00', 'keval', 'open'),
(68, 'Is it hard to learn guitar on your own?', 'music', 0, '0000-00-00 00:00:00', 'mahesh', 'open'),
(69, 'What is the list of Bollywood female dance songs on a wedding?', 'music', 0, '2018-10-02 21:06:56', 'pooja', 'open'),
(70, 'What are the best old Hindi female songs to sing on stage?', 'music', 0, '0000-00-00 00:00:00', 'ayushi', 'open'),
(71, 'What is your favorite thing about playing multiple instruments in a band?', 'music', 0, '0000-00-00 00:00:00', 'nilesh ', 'open'),
(72, 'Who is the luckiest cricketer ever and why?', 'sports', 0, '0000-00-00 00:00:00', 'arjun', 'open'),
(73, 'What is the difference between old and present cricket?', 'sports', 0, '0000-00-00 00:00:00', 'keval', 'open'),
(74, 'Why do soccer players hold their groin area during a free kick?', 'sports', 0, '0000-00-00 00:00:00', 'ayushi', 'open'),
(75, 'Who is the greatest tennis player to miss out on Grand Slams because of his generation?', 'sports', 0, '0000-00-00 00:00:00', 'adithya', 'open'),
(76, 'Who is the unluckiest player in the history of sport?', 'sports', 0, '2018-10-02 21:06:56', 'pooja', 'open'),
(77, 'What are some of the most unbelievable and amazing cricket facts?', 'sports', 0, '0000-00-00 00:00:00', 'Nilesh8451', 'open'),
(78, 'What are some famous gestures of respect in sports?', 'sports', 0, '0000-00-00 00:00:00', 'nilesh', 'open'),
(79, 'In which sport are the best players the least physically fit?', 'sports', 0, '0000-00-00 00:00:00', 'john', 'open'),
(80, 'What is the length of court in Pro Kabaddi?', 'sports', 0, '0000-00-00 00:00:00', 'hesha', 'open'),
(81, 'How is it possible to recognise someone who takes steroids?', 'sports', 0, '0000-00-00 00:00:00', 'mahesh', 'open'),
(82, 'Did any team in cricket history lose a test match after declaring both the innings?', 'sports', 0, '0000-00-00 00:00:00', 'Nilesh8451', 'open'),
(83, 'Why is China\'s performance in Asian Games way better than India?', 'sports', 0, '0000-00-00 00:00:00', 'arjun', 'open'),
(84, 'What do soccer players do with the jerseys exchanged after a game?', 'sports', 0, '2018-10-02 21:06:56', 'pooja', 'open'),
(85, 'Which sport is safer, judo or wrestling?', 'sports', 0, '0000-00-00 00:00:00', 'keval', 'open'),
(86, 'Which professional sports are still better to watch live than on TV for die hard fans?', 'sports', 0, '0000-00-00 00:00:00', 'adithya', 'open'),
(87, 'What is the real meaning of the umpire\'s call in cricket?', 'sports', 0, '0000-00-00 00:00:00', 'mahesh', 'open'),
(88, 'What are some mind-blowing facts about Viswanathan Anand?', 'sports', 0, '0000-00-00 00:00:00', 'Nilesh8451', 'open'),
(89, 'What is one sport you won\'t ever try?', 'sports', 0, '0000-00-00 00:00:00', 'john', 'open'),
(90, 'Why India don\'t focus on other games apart from cricket?', 'sports', 0, '0000-00-00 00:00:00', 'nilesh', 'open'),
(91, 'How much do you care about trophies when you play video games?', 'gaming', 0, '0000-00-00 00:00:00', 'nilesh', 'open'),
(92, 'What can be some good names for an online treasure hunt event?', 'gaming', 0, '0000-00-00 00:00:00', 'arjun', 'open'),
(93, 'What are some gun misconceptions that have been popularized by video games?', 'gaming', 0, '2018-10-02 21:06:56', 'pooja', 'open'),
(94, 'What are the aspects of a Minecraft build that makes it good or bad?', 'gaming', 0, '0000-00-00 00:00:00', 'hesha', 'open'),
(95, 'What is one video game everyone should play?', 'gaming', 0, '0000-00-00 00:00:00', 'john', 'open'),
(96, 'What is the best strategy in PUBG? Should you hide or stay with your team or just run on those wide fields?', 'gaming', 0, '0000-00-00 00:00:00', 'Nilesh8451', 'open'),
(97, 'What is one item/weapon from a video game you would love to have?', 'gaming', 0, '0000-00-00 00:00:00', 'keval', 'open'),
(98, 'Has anyone actually been killed because of a video game?', 'gaming', 0, '0000-00-00 00:00:00', 'adithya', 'open'),
(99, 'Is python a viable language to learn for a beginner when going to game design?', 'gaming', 0, '0000-00-00 00:00:00', 'mahesh', 'open'),
(100, 'Can we play WWE games on a Jio phone?', 'gaming', 0, '0000-00-00 00:00:00', 'Nilesh8451', 'open'),
(101, 'What are some really nice, lesser known games for a mobile device?', 'gaming', 0, '0000-00-00 00:00:00', 'adithya', 'open'),
(102, 'What things are normal in video games but would be weird if you did them in public?', 'gaming', 0, '0000-00-00 00:00:00', 'nilesh', 'open'),
(103, 'Which is your favourite game mission from any video game?', 'gaming', 0, '0000-00-00 00:00:00', 'adithya', 'open'),
(104, 'Is it possible to hack diamonds in a free Fire game?', 'gaming', 0, '2018-10-02 21:06:56', 'pooja', 'open'),
(105, 'What video game enemy would you be terrified to meet in real life?', 'gaming', 0, '0000-00-00 00:00:00', 'piyush', 'open'),
(106, 'What do you like about gamer culture?', 'gaming', 0, '0000-00-00 00:00:00', 'arjun', 'open'),
(107, 'You only have $5 to buy breakfast, lunch and dinner for the entire day, what would you get?', 'food', 0, '0000-00-00 00:00:00', 'keval', 'open'),
(108, 'If you are from India, what are some unique or special foods from your hometown?', 'food', 0, '0000-00-00 00:00:00', 'ayushi', 'open'),
(109, 'What are some good cooking life hacks?', 'food', 0, '2018-10-02 21:06:56', 'pooja', 'open'),
(110, 'What are some foods that you no longer eat because they made you sick one time?', 'food', 0, '0000-00-00 00:00:00', 'adithya', 'open'),
(111, 'Why isn\'t Indian food more popular in the US?', 'food', 0, '0000-00-00 00:00:00', 'nilesh', 'open'),
(112, 'As a pizza delivery guy, has anyone ever invited you into their house?', 'food', 0, '0000-00-00 00:00:00', 'Nilesh8451', 'open'),
(113, 'What is E635 in Maggi Masala?', 'food', 0, '0000-00-00 00:00:00', 'piyush', 'open'),
(114, 'What are some delicious desserts in India?', 'food', 0, '0000-00-00 00:00:00', 'keval', 'open'),
(115, 'Why do astronauts have to eat raw/dry food?', 'food', 0, '0000-00-00 00:00:00', 'mahesh', 'open'),
(116, 'What is the best vegetarian diet plan for weight loss?', 'food', 0, '0000-00-00 00:00:00', 'ayushi', 'open'),
(117, 'What are some mind-blowing facts about food?', 'food', 0, '0000-00-00 00:00:00', 'arjun', 'open'),
(118, 'What American foods do Indians find disgusting?', 'food', 0, '0000-00-00 00:00:00', 'nilesh', 'open'),
(119, 'What is the worst Russian food for vegetarians?', 'food', 0, '0000-00-00 00:00:00', 'adithya', 'open'),
(120, 'Is eating regular rice day and night harmful for your health?', 'food', 0, '0000-00-00 00:00:00', 'piyush', 'open'),
(121, 'How often do you take your kids to McDonalds for a meal?', 'food', 0, '0000-00-00 00:00:00', 'keval', 'open'),
(122, 'What are the best street foods in India?', 'food', 0, '2018-10-02 21:06:56', 'pooja', 'open'),
(123, 'What type of meals were served during the great depression?', 'food', 0, '0000-00-00 00:00:00', 'Nilesh8451', 'open');

-- --------------------------------------------------------

--
-- Table structure for table `upvotes`
--

CREATE TABLE `upvotes` (
  `uid` int(11) NOT NULL,
  `aid` varchar(30000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upvotes`
--

INSERT INTO `upvotes` (`uid`, `aid`) VALUES
(1, ''),
(2, '\r\n\r\n\r\n\r\n\r\n,,,9,,8,,'),
(3, ''),
(4, ''),
(5, ''),
(6, ''),
(7, ''),
(8, ''),
(9, ''),
(10, ''),
(11, ''),
(12, ''),
(13, ''),
(14, '');

-- --------------------------------------------------------

--
-- Table structure for table `userlogin`
--

CREATE TABLE `userlogin` (
  `ID` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `lastactivity` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userlogin`
--

INSERT INTO `userlogin` (`ID`, `firstname`, `lastname`, `username`, `email`, `password`, `lastactivity`) VALUES
(1, 'admin', 'admin', 'admin', 'admin@gmail.com', '$2y$10$emRHDu69fQGiHLcZ8uBT..iRenuXt26ZFwBj/euFtrQ4O.EGKQkAG', '2018-09-27 13:48:32'),
(2, 'moksh', 'jain', 'Moksh ', 'mokshjain112@gmail.com', '$2y$10$hxjisKmcQ9KFucQY1cbE..cpu3v.8ZrRj4DQAjF3vsRXmJy6iCcii', '2018-10-10 14:44:24'),
(3, 'nilesh', 'chavan', 'nilesh', 'nilesh@gmail.com', '$2y$10$Jo1tEdo/Xdesf2YQI0Bp.emW6gqlZDFUr.br5BBNbChknr1T5YCB6', '2018-10-01 09:19:48'),
(4, 'adithya', 'bijur', 'adithya', 'adithya@gmail.com', '$2y$10$bqFh9kqd5lVoHbz47Jzqf.TT4xeP0ETLzkT0C0gogtlcFiYQ7Q7NS', '2018-10-01 09:18:33'),
(5, 'john', 'd\'costa', 'john', 'john@gmail.com', '$2y$10$.VRJyj5HdJyBPWbYgToNvuTFAgaoDcDjmkitxhn.QnxkXdtcV2zuq', '2018-09-26 22:40:40'),
(6, 'arjun', 'kumar', 'arjun', 'arjun@gmail.com', '$2y$10$EiZOl9tQzTq6k3FQeoCuo.YmksntvTsyy9vHAr5W5jZmTh7TXKqoS', '2018-10-01 09:22:18'),
(7, 'ayushi', 'khotari', 'ayushi', 'ayushi@gmail.com', '$2y$10$Bs.WqZD5piWpXiJsJExJTuCpTsG0.uRdKDhxs2ty3h1hyF4Mof7Tm', '2018-09-27 13:45:57'),
(8, 'hesha', 'kothari', 'hesha', 'hesha@gmail.com', '$2y$10$iTbZDq0kTlTYA1al3fdrf.sxr2wwlMBqs5DbH2pRwvWRvMPK8ht4a', '2018-09-26 22:49:02'),
(9, 'piyush', 'maru', 'piyush', 'piyush@gmail.com', '$2y$10$nyKXcjP2sMuoS9uclo/dOeVhty97E8KXtcyxZHCFJI5E9cctCFNZi', '2018-09-26 22:52:06'),
(10, 'nidhi', 'maru', 'nidhi', 'nidhi@gmail.com', '$2y$10$mWg9NvAzcgVlQjnFTCHCTO/0AN0cuUc7nRDZjvsnEzvK5AdLq16QG', '2018-09-30 00:37:06'),
(11, 'keval', 'patel', 'keval', 'keval@gmail.com', '$2y$10$phhy.9BqqpcOLq4MU9hus.23m6w2DCF8k8acw6pEKTg0jKZDeVZLG', '2018-09-26 22:57:21'),
(12, 'mahesh', 'jakar', 'mahesh', 'mahesh@gmail.com', '$2y$10$tENbot/bh5iC/EQU.w1CB.FwKOVnHNiEq3nB1aKyb4wb8QUmk3Zoa', '2018-09-27 13:43:27'),
(13, 'pooja ', 'parikh', 'pooja', 'mokshjain112@gmail.com', '$2y$10$e/W4kcdqi/.l06P8Gy6jsuvuht00jwUau5f/5onyo6m3rXaBgUbPe', '2018-09-27 14:50:10'),
(14, 'Rohit', 'Chavan', 'Nil8', 'rohitpractice01@gmail.cokm', '$2y$10$8XlzcnICFs9vRh0ZJZMHUetLUieKklLjZVlAuleV4mUUUYU8cIUwq', '2019-01-15 21:41:45'),
(15, 'Nilesh', 'Chavan', 'Nilesh8451', 'chavannilu01@gmail.com', '$2y$10$SdcgsP0kadktYETadXQ4PO9vOKc4O0tVViBzwiUXam4HRkGIJKrJG', '2019-04-27 20:13:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `a_o_s`
--
ALTER TABLE `a_o_s`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `c_d`
--
ALTER TABLE `c_d`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `descri`
--
ALTER TABLE `descri`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `empinfo`
--
ALTER TABLE `empinfo`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `interest`
--
ALTER TABLE `interest`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profileinfo`
--
ALTER TABLE `profileinfo`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `upvotes`
--
ALTER TABLE `upvotes`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `userlogin`
--
ALTER TABLE `userlogin`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `qid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT for table `userlogin`
--
ALTER TABLE `userlogin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;