-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2017 at 12:04 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_chantryisland`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_about`
--

CREATE TABLE `tbl_about` (
  `about_id` smallint(6) UNSIGNED NOT NULL,
  `about_title` varchar(50) NOT NULL,
  `about_p1` varchar(600) NOT NULL,
  `about_p2` varchar(600) NOT NULL,
  `about_p3` varchar(600) NOT NULL,
  `about_img1` varchar(600) NOT NULL,
  `about_img2` varchar(50) NOT NULL,
  `about_p4` varchar(600) NOT NULL,
  `about_p5` varchar(600) NOT NULL,
  `about_title2` varchar(50) NOT NULL,
  `about_img3` varchar(50) NOT NULL,
  `about_p6` varchar(600) NOT NULL,
  `about_p7` varchar(600) NOT NULL,
  `about_p8` varchar(600) NOT NULL,
  `about_p9` varchar(600) NOT NULL,
  `about_title3` varchar(50) NOT NULL,
  `about_p10` varchar(600) NOT NULL,
  `about_sub1` varchar(50) NOT NULL,
  `about_img4` varchar(50) NOT NULL,
  `about_img_4_mobile` varchar(50) NOT NULL,
  `about_p11` varchar(600) NOT NULL,
  `about_sub2` varchar(50) NOT NULL,
  `about_p12` varchar(600) NOT NULL,
  `about_p13` varchar(600) NOT NULL,
  `about_p14` varchar(600) NOT NULL,
  `about_img5` varchar(50) NOT NULL,
  `about_img_5_mobile` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_about`
--

INSERT INTO `tbl_about` (`about_id`, `about_title`, `about_p1`, `about_p2`, `about_p3`, `about_img1`, `about_img2`, `about_p4`, `about_p5`, `about_title2`, `about_img3`, `about_p6`, `about_p7`, `about_p8`, `about_p9`, `about_title3`, `about_p10`, `about_sub1`, `about_img4`, `about_img_4_mobile`, `about_p11`, `about_sub2`, `about_p12`, `about_p13`, `about_p14`, `about_img5`, `about_img_5_mobile`) VALUES
(1, 'Chantry Island', 'Chantry Island is a glacial moraine and consists of stone above the water and beneath extending a mile north and a mile south of the island. These underwater shoals of massive granite boulders have made this area one of the most treacherous in the Great Lakes.', 'There are over 50 known shipwrecks around the island and there are many accounts from the 1800â€™s and early â€“ mid 1900â€™s of these disasters and lost lives. Today, buoys and modern navigational tools safely guide boats through the area.', 'The island varies in size depending on the level of Lake Huron. Today, with a low lake level Chantry Island is about 68 acres. In 1986 when the water level was at the highest of the century, the island was only about 10 acres, causing trees on the west, north and south sides to drown.', 'about_aerial_1.jpg', 'about_aerial_2.jpg', 'During the mid 1800â€™s water traffic on the Great Lakes had substantially increased and the colonial government called for improved navigational tools for the mariners on the Lake Huron. John Brown of Thorold was contracted to build the lighthouse on Chantry Island, as well as 10 other lighthouses to help sailors navigate the Lake. Because of the expense and difficulty of building, only six were completed. The Chantry Island Lighthouse was one of these completed and it was lit on April 1, 1859. ', 'The lighthouse stands 86 ft. above water level and is 80 ft. high from its base to the lightâ€™s center. The lantern room of the lighthouse was fitted with a Fresnel lens built and transported from Paris, France. The first fuel used was sperm whale oil and the first light was a fixed light, not the familiar flashing one. Other fuels used have been colza oil, coal oil, kerosene, acetylene and electricity. Its present-day flashing light is solar powered. ', 'Federal Bird Sanctuary', 'about_bird.jpg', 'In 1957 the Canadian Wildlife Service declared Chantry Island a Federal Migratory Bird Sanctuary to protect the migratory and nesting birds of the island. It is the largest Federal Migratory Bird Sanctuary between James Bay and Point Pelee.', 'There are approximately fifty thousand birds (including chicks) on the island during the breeding season. It is home to nesting colonies of Great Blue Heron, Great Egret, Black-crowned Night- Heron, Herring Gull, Ring-billed Gull and Double-crested Cormorant.', 'Water fowl such as Mallard, American Black Duck, Gadwall, Blue-winged Teal, Green-winged Teal, Northern Pintail, and American Wigeon are also known nesters on the island.', 'Because the island is a migratory bird sanctuary, the number of people on the island on any given day is strictly limited and tours must be booked through the Chantry Island Tour Base.', 'Restoration', 'For almost 100 years (1859 - 1954), light keepers lived on the island to keep the light burning for mariners on the lake. When the lighthouse lamp was converted to electricity in 1954, a light keeper was no longer needed. The buildings were left neglected and suffered at the hands of vandals. The lighthouse still stood intact, but little was left of the light keeperâ€™s quarters. The roof had fallen in and the walls and floors had crumbled into a pile of rubble in the basement.', 'Light Keeper\'s Cottage Before Restoration', 'about_restoration_large.png', 'about_before_restoration_mobile.jpg', 'In 1997 the local Marine Heritage Society established specific goals for the island\'s restoration. The project was to be funded by donations and fundraising efforts, and the majority of the work was to be done by volunteers.', 'Light Keeper\'s Cottage After Restoration', 'The Light Keeper\'s Cottage restoration was completed in 2001. Over 250 volunteers put in more than 300,000 hours of labor to finish the restoration and ready the boat for tours. Since 2001 volunteers have restored the staircase of the lighthouse, built a boathouse on the island, constructed a replica of the original boat (which sits in the boathouse) and reconstructed the privy.', 'Today the tour is operated with over 125 volunteers, whose jobs include island housekeepers, gardeners, tour boat captains, crew and tour guides, and gift shop sales and service personnel. Volunteers also install the portable walkways and docks every spring and remove them every fall. To date, there have been over 20,538 visitors to the island.', 'Partners in the restoration, island maintenance, Chantry Island Tour operation and other Marine Heritage endeavors include the Town of Saugeen Shores, Bruce County Museum and Cultural Centre, Southampton Propeller Club, Chantry Island Chambettes and Saugeen Shores Chamber of Commerce. Their continuous support contributes to the success of the Marine Heritage Society goal to preserve the local marine history.', 'after_restoration_desktop.jpg', 'after_restoration_mobile.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_donate`
--

CREATE TABLE `tbl_donate` (
  `donate_id` smallint(5) UNSIGNED NOT NULL,
  `donate_title` varchar(50) NOT NULL,
  `donate_p1` varchar(600) NOT NULL,
  `donate_p2` varchar(600) NOT NULL,
  `donate_p3` varchar(600) NOT NULL,
  `donate_p4` varchar(600) NOT NULL,
  `donate_sub1` varchar(50) NOT NULL,
  `donate_level_1` varchar(50) NOT NULL,
  `donate_level_2` varchar(50) NOT NULL,
  `donate_level_3` varchar(50) NOT NULL,
  `donate_level_4` varchar(50) NOT NULL,
  `donate_level_5` varchar(50) NOT NULL,
  `donate_level_6` varchar(50) NOT NULL,
  `donate_amount_1` varchar(50) NOT NULL,
  `donate_amount_2` varchar(50) NOT NULL,
  `donate_amount_3` varchar(50) NOT NULL,
  `donate_amount_4` varchar(50) NOT NULL,
  `donate_amount_5` varchar(50) NOT NULL,
  `donate_amount_6` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_donate`
--

INSERT INTO `tbl_donate` (`donate_id`, `donate_title`, `donate_p1`, `donate_p2`, `donate_p3`, `donate_p4`, `donate_sub1`, `donate_level_1`, `donate_level_2`, `donate_level_3`, `donate_level_4`, `donate_level_5`, `donate_level_6`, `donate_amount_1`, `donate_amount_2`, `donate_amount_3`, `donate_amount_4`, `donate_amount_5`, `donate_amount_6`) VALUES
(1, 'Donate', 'Since 1997 we have had a tremendous amount of support by donations. We are currently engaged in Fund Raising to support our New Boat, Dock Improvements, and Marine Heritage Projects. If you would like to be included please send a cheque or money order to:', 'Marine Heritage Society Box 421 Southampton, Ontario Canada, N0H 2L0', 'Please specify your Donation Preference: Chantry Island and/or New Tour Boat ', 'We will send a tax receipt for all donations $20 and more.', 'Donation Categories', 'Shipmate', 'Lifesaving Crew', 'Assistant Lighthouse Crew', 'Lighthouse Keepers', 'Captain Lambert\'s Crew', 'Queen Victoria\'s Crew', '$1.00 - 199.00', '$200.00 - 999.00', '$1,000.00 - 4,999.00', '$5,000.00 - 9,999.00', '$10,000.00 - 25,000.00', '$25,000.00 plus');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_galleryimg`
--

CREATE TABLE `tbl_galleryimg` (
  `galleryimg_id` smallint(5) UNSIGNED NOT NULL,
  `galleryimg_path` varchar(75) NOT NULL DEFAULT 'defaultlarge',
  `galleryimg_title` varchar(50) NOT NULL DEFAULT 'Untitled',
  `galleryimg_desc` varchar(140) NOT NULL DEFAULT 'No description available.'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_galleryimg`
--

INSERT INTO `tbl_galleryimg` (`galleryimg_id`, `galleryimg_path`, `galleryimg_title`, `galleryimg_desc`) VALUES
(1, 'chantryisland1.jpg', 'A Hatchling on Chantry Island', 'Photo by Nancy Calder'),
(2, 'chantryisland2.jpg', 'Nest', 'Photo by Nancy Calder'),
(3, 'chantryisland3.jpg', 'Hatchling 2', 'Photo by Nancy Calder'),
(4, 'chantryisland4.jpg', 'Birds on Chantry Island', 'Photo by Nancy Calder'),
(5, 'chantryisland5.jpg', 'Chantry Birds', 'Photo by Carol Walberg'),
(6, 'chantryisland6.jpg', 'Chantry Birds 2', 'Photo by Carol Walberg'),
(7, 'chantryisland7.jpg', 'Lightkeeper\'s Cottage Interior', 'Photo by James C. Scwartz'),
(8, 'chantryisland8.jpg', 'Lightkeeper\'s Cottage Interior 2', 'Photo by James C. Scwartz'),
(9, 'chantryisland9.jpg', 'Lightkeeper\'s Cottage Interior 3', 'Photo by James C. Scwartz'),
(10, 'chantryisland10.jpg', 'Lighthouse at Sunset', 'Photo by Carol Walberg'),
(11, 'chantryisland11.jpg', 'Lighthouse in Winter', 'Photo by Carol Walberg'),
(12, 'chantryisland12.jpg', 'Lighthouse 1', 'Photo by Vicki Tomori'),
(13, 'chantryisland13.jpg', 'Lighthouse 2', 'Photo by Vicki Tomori'),
(14, 'chantryisland14.jpg', 'Lighthouse 3', 'Photo by Vicki Tomori'),
(15, 'chantryisland15.jpg', 'Lighthouse 4', 'Photo by Vicki Tomori'),
(16, 'chantryisland16.jpg', 'Lighthouse 5', 'Photo by Vicki Tomori'),
(17, 'chantryisland17.jpg', 'Lighthouse 6', 'Photo by Vicki Tomori'),
(18, 'chantryisland18.jpg', 'Chantry Island from Above', 'Photo by Karen Smith'),
(19, 'chantryisland19.jpg', 'Chantry Island Aerial View 2', 'Photo by Karen Smith'),
(20, 'chantryisland20.jpg', 'Chantry Island Aerial 3', 'Photo by Karen Smith'),
(21, 'chantryisland21.jpg', 'Chantry Island Aerial 4', 'Photo by Karen Smith'),
(22, 'chantryisland22.jpg', 'Island Flowers', 'Photo by Vicki Tomori'),
(23, 'chantryisland23.jpg', 'Lighthouse Rear View', 'Photo by Vicki Tomori'),
(24, 'chantryisland24.jpg', 'Lighthouse at Dusk', 'Photo by Vicki Tomori'),
(25, 'chantryisland25.jpg', 'Lightkeeper\'s Interior', 'Photo by Vicki Tomori'),
(27, 'chantryisland27.jpg', 'Lightkeeper\'s Interior 3', 'Photo by Vicki Tomori'),
(28, 'chantryisland28.jpg', 'Chantry Island Tour Base', 'Photo by Vicki Tomori'),
(29, 'chantryisland29.jpg', 'Lighthouse and Gulls', 'Photo by Vicki Tomori'),
(30, 'chantryisland30.jpg', 'Chantry Island from Above', 'Photo by James C. Schwartz.'),
(31, 'chantryisland37.jpg', 'Peerless II Tour Boat', 'Photo by Gale Douglass'),
(32, 'chantryisland45.jpg', 'Chantry Island Post Card', 'Photo by James C. Swartz'),
(33, 'chantryisland47.jpg', 'Chantry Sunset', 'Photo by Terry Thomas');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_headerabout`
--

CREATE TABLE `tbl_headerabout` (
  `headerabout_id` smallint(5) UNSIGNED NOT NULL,
  `headerabout_path` varchar(50) NOT NULL,
  `headerabout_name` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_headerabout`
--

INSERT INTO `tbl_headerabout` (`headerabout_id`, `headerabout_path`, `headerabout_name`) VALUES
(1, 'aboutheader.jpg', 'ABOUT CHANTRY ISLAND');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_headercontact`
--

CREATE TABLE `tbl_headercontact` (
  `headercontact_id` smallint(5) UNSIGNED NOT NULL,
  `headercontact_path` varchar(50) NOT NULL,
  `headercontact_name` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_headercontact`
--

INSERT INTO `tbl_headercontact` (`headercontact_id`, `headercontact_path`, `headercontact_name`) VALUES
(1, 'contactheader.jpg', 'CONTACT US');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_headergallery`
--

CREATE TABLE `tbl_headergallery` (
  `headergallery_id` smallint(5) UNSIGNED NOT NULL,
  `headergallery_path` varchar(50) NOT NULL,
  `headergallery_name` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_headergallery`
--

INSERT INTO `tbl_headergallery` (`headergallery_id`, `headergallery_path`, `headergallery_name`) VALUES
(1, 'galleryheader.jpg', 'PHOTO GALLERY');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_headerhome`
--

CREATE TABLE `tbl_headerhome` (
  `headerhome_id` smallint(5) UNSIGNED NOT NULL,
  `headerhome_path` varchar(50) NOT NULL,
  `headerhome_name` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_headerhome`
--

INSERT INTO `tbl_headerhome` (`headerhome_id`, `headerhome_path`, `headerhome_name`) VALUES
(1, 'mainheader.jpg', 'EXPLORE CHANTRY ISLAND');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_headertours`
--

CREATE TABLE `tbl_headertours` (
  `headertours_id` smallint(5) UNSIGNED NOT NULL,
  `headertours_path` varchar(50) NOT NULL,
  `headertours_name` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_headertours`
--

INSERT INTO `tbl_headertours` (`headertours_id`, `headertours_path`, `headertours_name`) VALUES
(1, 'tourheader.jpg', 'ISLAND TOURS');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_home`
--

CREATE TABLE `tbl_home` (
  `home_id` smallint(5) UNSIGNED NOT NULL,
  `home_title` varchar(50) NOT NULL,
  `home_intro` varchar(700) NOT NULL,
  `home_img1` varchar(50) NOT NULL,
  `home_title1` varchar(500) NOT NULL,
  `home_p1` varchar(700) NOT NULL,
  `home_img2` varchar(700) NOT NULL,
  `home_title2` varchar(700) NOT NULL,
  `home_img3` varchar(700) NOT NULL,
  `home_p2` varchar(700) NOT NULL,
  `home_p3` varchar(700) NOT NULL,
  `home_subtitle1` varchar(700) NOT NULL,
  `home_p4` varchar(700) NOT NULL,
  `home_p5` varchar(700) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_home`
--

INSERT INTO `tbl_home` (`home_id`, `home_title`, `home_intro`, `home_img1`, `home_title1`, `home_p1`, `home_img2`, `home_title2`, `home_img3`, `home_p2`, `home_p3`, `home_subtitle1`, `home_p4`, `home_p5`) VALUES
(1, '', 'Chantry Island is located on Lake Huron, just over a mile southwest of the Saugeen River mouth in Southampton, Ontario. On the island is a majestic Imperial Lighthouse built in the mid 1800s, as well as the Keepers quarters and a boat house. In 1822, during a hydrographic survey, Captain Henry Bayfield of the Royal Navy christened the island and named it after his friend and British sculptor Sir Francis Chantry. ', 'intro-img.jpg', 'The Marine Heritage Society', 'The Marine Heritage Society is a not-for-profit group of volunteers dedicated to the preservation and enhancement of our communitys marine history. The goal of the Society is to identify, preserve and restore material items of marine historical significance and to raise sufficient funds to support these endeavors.', 'logocolored.png', 'Touring Chantry Island', 'ci_aerial_view.jpg', 'As you take the 15 minute boat ride to the island you will enjoy the outstanding views of the sandy beach shoreline and the deep blue waters of Lake Huron. During your two hour guided visit on Chantry Island, you have the opportunity to climb to the top of the Imperial Lighthouse for extraordinary views of the island.', 'Stroll back in time while visiting the Light Keepers Cottage as it existed in the late 1800â€™s, decorated with period furnishings from private donors and the Bruce County Museum and Cultural Centre. You will also see the surrounding gardens and many species of birds.', 'Book a Tour', 'We offer tours throughout the summer season from late May to mid-September. During June and July, we offer the tour daily, check Booking Info for the exact schedule.', 'Since the Chantry Island is also Federal Bird Sanctuary we are only able to bring 12 persons per tour. Therefore, call ahead to ensure your place on the boat.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_interviews`
--

CREATE TABLE `tbl_interviews` (
  `interview_id` smallint(5) UNSIGNED NOT NULL,
  `interview_embed_link` varchar(200) NOT NULL,
  `interview_name` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_interviews`
--

INSERT INTO `tbl_interviews` (`interview_id`, `interview_embed_link`, `interview_name`) VALUES
(1, '<iframe width="560" height="315" src="https://www.youtube.com/embed/BkZWHmX8HY0" frameborder="0" allowfullscreen></iframe>', 'Jane Kramer'),
(2, '<iframe width="560" height="315" src="https://www.youtube.com/embed/hbGffSYF5LU" frameborder="0" allowfullscreen></iframe>', 'Bob Trelford'),
(3, '<iframe width="560" height="315" src="https://www.youtube.com/embed/N27M4OmubxI" frameborder="0" allowfullscreen></iframe>', 'Mike Sterling');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_logo`
--

CREATE TABLE `tbl_logo` (
  `logo_id` smallint(5) UNSIGNED NOT NULL,
  `logo_path` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_logo`
--

INSERT INTO `tbl_logo` (`logo_id`, `logo_path`) VALUES
(1, 'mhs-logo.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_news`
--

CREATE TABLE `tbl_news` (
  `news_id` smallint(6) UNSIGNED NOT NULL,
  `news_date` varchar(20) NOT NULL,
  `news_title` varchar(50) NOT NULL,
  `news_img` varchar(50) NOT NULL,
  `news_text` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_news`
--

INSERT INTO `tbl_news` (`news_id`, `news_date`, `news_title`, `news_img`, `news_text`) VALUES
(1, '2017-01-10', 'Doug Johnson\'s 91st Birthday', 'images/newspic1.png', 'Wishing a happy birthday to one of our strongest supporters.'),
(2, '2017-01-08', 'Chantry Island Tour Base Reopening in June', 'images/newspic2.png', ''),
(3, '2016-12-02', 'Southampton Christmas Parade', 'images/newspic3.png', 'The Marine Heritage Society and Propeller Club Float or I mean boat was well received Friday Night at the annual Christmas Parade. Towing the Boat was a Saugeen Shores Fire pick up truck driven by Phil Eagleson our Fire Chief.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_partners`
--

CREATE TABLE `tbl_partners` (
  `partner_id` smallint(5) UNSIGNED NOT NULL,
  `partner_img` varchar(50) NOT NULL,
  `partner_name` varchar(50) NOT NULL,
  `partner_link` varchar(100) NOT NULL,
  `partner_info` varchar(300) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_partners`
--

INSERT INTO `tbl_partners` (`partner_id`, `partner_img`, `partner_name`, `partner_link`, `partner_info`) VALUES
(1, 'tourslogo1.jpg', 'Saugeen Shores', 'http://www.saugeenshores.ca/en/index.asp', 'The Saugeen Shores website is shared between the municipality and the local Chamber of Commerce. Let this website help you plan your visit when you come to tour Chantry Island.'),
(2, 'tourslogo2.jpg', 'Bruce County Museum & Cultural Centre', 'http://www.brucemuseum.ca/', 'The Bruce County Museum and Cultural Centre offers a journey through thousands of years of natural and human history. Check out their awesome Marine Gallery.'),
(3, 'tourslogo3.jpg', 'Bruce Coast Lighthouse Tour', 'http://www.brucecoastlighthouses.com/', 'Enjoy the Bruce Coast Lighthouse tour.'),
(4, 'tourslogo4.jpg', 'Explore the Bruce', 'http://explorethebruce.com/', 'Explore the Bruce is the Official Travel web site of Bruce County, one of the most spectacular all season destinations in Ontario. Check out this link for more Lighthouse Destinations.'),
(5, 'tourslogo5.jpg', 'Southampton Tennis Club', 'http://www.southamptontennisclub.ca/', 'The Southampton Tennis Club is a thriving seasonal tennis club on the sunny shores of Lake Huron. Visit our website for more information.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tours`
--

CREATE TABLE `tbl_tours` (
  `tours_id` smallint(5) UNSIGNED NOT NULL,
  `tours_title1` varchar(50) NOT NULL,
  `tours_p1` varchar(600) NOT NULL,
  `tours_p2` varchar(600) NOT NULL,
  `tours_p3` varchar(600) NOT NULL,
  `tours_img1` varchar(50) NOT NULL,
  `tours_img2` varchar(50) NOT NULL,
  `tours_img3` varchar(50) NOT NULL,
  `tours_title2` varchar(50) NOT NULL,
  `tours_p4` varchar(600) NOT NULL,
  `tours_p5` varchar(600) NOT NULL,
  `tours_p6` varchar(600) NOT NULL,
  `tours_img4` varchar(50) NOT NULL,
  `tours_p7` varchar(600) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_tours`
--

INSERT INTO `tbl_tours` (`tours_id`, `tours_title1`, `tours_p1`, `tours_p2`, `tours_p3`, `tours_img1`, `tours_img2`, `tours_img3`, `tours_title2`, `tours_p4`, `tours_p5`, `tours_p6`, `tours_img4`, `tours_p7`) VALUES
(1, 'Rates', 'We offer tours throughout the summer season from late May to mid-September. During June and July, we offer the tour daily, check above for the exact schedule. Note, it does change on a yearly basis. Please call before May 1st to book your tour.', 'Since Chantry Island is also a Federal Bird Sanctuary we are only able to bring 12 persons per tour. Therefore, call ahead to ensure your place on the boat.', '$30.00 per person (includes HST). Same price for children and adults. **Special group rates available. We accept the following payment methods:', 'mastercard.png', 'visa.png', 'interac.gif', 'Tour Information', 'The tour is much like a medium hike and requires a degree of agility and fitness. You can enjoy the tour without climbing the 106 steps in the Lighthouse tower. However, when you do reach the light room, you will always remember the view.', 'For safety, children must be a minimum of 4 feet tall and must be accompanied by an Adult.', 'Footwear suitable for hiking is mandatory. For safety reasons, Flip-Flops are not allowed.', 'tourboat.jpg', 'The 2 hour tour must be pre-booked and prepaid. There are 9 seats on the boat. The cost is $30.00 per person (includes HST). For refunds, cancellation must be received 24 hours before the scheduled departure. Chantry Island is a Federal Migratory Bird Sanctuary and No Pets allowed on the island. Cancellation can be caused by weather conditions but light rain is fine.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` smallint(4) UNSIGNED NOT NULL,
  `user_fname` varchar(50) NOT NULL,
  `user_lname` varchar(50) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_email` varchar(35) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `user_ip` varchar(100) NOT NULL,
  `user_lastlogin` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_logins` smallint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_fname`, `user_lname`, `user_name`, `user_email`, `user_pass`, `user_ip`, `user_lastlogin`, `user_logins`) VALUES
(1, 'test', 'account', 'chantryadmin', 'chantryisland@bmts.com', 'chantryisland', '::1', '2017-04-05 15:04:41', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_video`
--

CREATE TABLE `tbl_video` (
  `video_id` smallint(5) UNSIGNED NOT NULL,
  `video_path` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_video`
--

INSERT INTO `tbl_video` (`video_id`, `video_path`) VALUES
(1, 'introvid.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_volunteer`
--

CREATE TABLE `tbl_volunteer` (
  `volunteer_id` smallint(5) UNSIGNED NOT NULL,
  `volunteer_imgpath` varchar(50) NOT NULL DEFAULT 'images/default.jpg',
  `volunteer_name` varchar(50) NOT NULL,
  `volunteer_position` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_volunteer`
--

INSERT INTO `tbl_volunteer` (`volunteer_id`, `volunteer_imgpath`, `volunteer_name`, `volunteer_position`) VALUES
(1, 'images/thumb2.jpg', 'Don Nicholson', 'Chairman'),
(2, 'images/thumb4.jpg', 'Pat O\'Connor', 'Vice Chairman'),
(3, 'images/thumb6.jpg', 'John Rigby', 'Treasurer'),
(4, 'images/thumb11.jpg', 'Stan Young', 'Secretary'),
(5, 'images/thumb9.jpg', 'Rick Smith', 'Past Chairman'),
(6, 'images/thumb5.jpg', 'Peter Williamson', 'Observer'),
(7, 'images/thumb7.jpg', 'Jane Kramer', ''),
(8, 'images/thumb8.jpg', 'Vicki Tomori', ''),
(9, 'images/thumb1.jpg', 'Dan Holmes', ''),
(10, 'images/thumb10.jpg', 'Ed Braun', ''),
(11, 'images/thumb12.jpg', 'John Willetts', ''),
(12, 'images/thumb13.jpg', 'Ali Kelly', ''),
(13, 'images/default.jpg', 'Dave Wenn', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_about`
--
ALTER TABLE `tbl_about`
  ADD PRIMARY KEY (`about_id`);

--
-- Indexes for table `tbl_donate`
--
ALTER TABLE `tbl_donate`
  ADD PRIMARY KEY (`donate_id`);

--
-- Indexes for table `tbl_galleryimg`
--
ALTER TABLE `tbl_galleryimg`
  ADD PRIMARY KEY (`galleryimg_id`);

--
-- Indexes for table `tbl_headerabout`
--
ALTER TABLE `tbl_headerabout`
  ADD PRIMARY KEY (`headerabout_id`);

--
-- Indexes for table `tbl_headercontact`
--
ALTER TABLE `tbl_headercontact`
  ADD PRIMARY KEY (`headercontact_id`);

--
-- Indexes for table `tbl_headergallery`
--
ALTER TABLE `tbl_headergallery`
  ADD PRIMARY KEY (`headergallery_id`);

--
-- Indexes for table `tbl_headerhome`
--
ALTER TABLE `tbl_headerhome`
  ADD PRIMARY KEY (`headerhome_id`);

--
-- Indexes for table `tbl_headertours`
--
ALTER TABLE `tbl_headertours`
  ADD PRIMARY KEY (`headertours_id`);

--
-- Indexes for table `tbl_home`
--
ALTER TABLE `tbl_home`
  ADD PRIMARY KEY (`home_id`);

--
-- Indexes for table `tbl_interviews`
--
ALTER TABLE `tbl_interviews`
  ADD PRIMARY KEY (`interview_id`);

--
-- Indexes for table `tbl_logo`
--
ALTER TABLE `tbl_logo`
  ADD PRIMARY KEY (`logo_id`);

--
-- Indexes for table `tbl_news`
--
ALTER TABLE `tbl_news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `tbl_partners`
--
ALTER TABLE `tbl_partners`
  ADD PRIMARY KEY (`partner_id`);

--
-- Indexes for table `tbl_tours`
--
ALTER TABLE `tbl_tours`
  ADD PRIMARY KEY (`tours_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tbl_video`
--
ALTER TABLE `tbl_video`
  ADD PRIMARY KEY (`video_id`);

--
-- Indexes for table `tbl_volunteer`
--
ALTER TABLE `tbl_volunteer`
  ADD PRIMARY KEY (`volunteer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_about`
--
ALTER TABLE `tbl_about`
  MODIFY `about_id` smallint(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_donate`
--
ALTER TABLE `tbl_donate`
  MODIFY `donate_id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_galleryimg`
--
ALTER TABLE `tbl_galleryimg`
  MODIFY `galleryimg_id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `tbl_headerabout`
--
ALTER TABLE `tbl_headerabout`
  MODIFY `headerabout_id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_headercontact`
--
ALTER TABLE `tbl_headercontact`
  MODIFY `headercontact_id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_headergallery`
--
ALTER TABLE `tbl_headergallery`
  MODIFY `headergallery_id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_headerhome`
--
ALTER TABLE `tbl_headerhome`
  MODIFY `headerhome_id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_headertours`
--
ALTER TABLE `tbl_headertours`
  MODIFY `headertours_id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_home`
--
ALTER TABLE `tbl_home`
  MODIFY `home_id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_interviews`
--
ALTER TABLE `tbl_interviews`
  MODIFY `interview_id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_logo`
--
ALTER TABLE `tbl_logo`
  MODIFY `logo_id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_news`
--
ALTER TABLE `tbl_news`
  MODIFY `news_id` smallint(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_partners`
--
ALTER TABLE `tbl_partners`
  MODIFY `partner_id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_tours`
--
ALTER TABLE `tbl_tours`
  MODIFY `tours_id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` smallint(4) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_video`
--
ALTER TABLE `tbl_video`
  MODIFY `video_id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_volunteer`
--
ALTER TABLE `tbl_volunteer`
  MODIFY `volunteer_id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
