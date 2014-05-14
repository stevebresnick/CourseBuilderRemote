-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 14, 2014 at 12:40 PM
-- Server version: 5.5.35
-- PHP Version: 5.3.10-1ubuntu3.11

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `texashhb`
--

-- --------------------------------------------------------

--
-- Table structure for table `acos`
--

CREATE TABLE IF NOT EXISTS `acos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=101 ;

--
-- Dumping data for table `acos`
--

INSERT INTO `acos` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, NULL, NULL, 'controllers', 1, 200),
(2, 1, NULL, NULL, 'Activities', 2, 15),
(3, 2, NULL, NULL, 'index', 3, 4),
(4, 2, NULL, NULL, 'view', 5, 6),
(5, 2, NULL, NULL, 'add', 7, 8),
(6, 2, NULL, NULL, 'edit', 9, 10),
(7, 2, NULL, NULL, 'delete', 11, 12),
(8, 2, NULL, NULL, 'preview', 13, 14),
(9, 1, NULL, NULL, 'ActivitiesResources', 16, 27),
(10, 9, NULL, NULL, 'index', 17, 18),
(11, 9, NULL, NULL, 'view', 19, 20),
(12, 9, NULL, NULL, 'add', 21, 22),
(13, 9, NULL, NULL, 'edit', 23, 24),
(14, 9, NULL, NULL, 'delete', 25, 26),
(15, 1, NULL, NULL, 'ActivityTypes', 28, 29),
(16, 1, NULL, NULL, 'Courses', 30, 49),
(17, 16, NULL, NULL, 'index', 31, 32),
(18, 16, NULL, NULL, 'view', 33, 34),
(19, 16, NULL, NULL, 'add', 35, 36),
(20, 16, NULL, NULL, 'edit', 37, 38),
(21, 16, NULL, NULL, 'delete', 39, 40),
(22, 16, NULL, NULL, 'isAuthorized', 41, 42),
(23, 16, NULL, NULL, 'outline', 43, 44),
(24, 16, NULL, NULL, 'duplicate', 45, 46),
(25, 1, NULL, NULL, 'Discussions', 50, 61),
(26, 25, NULL, NULL, 'index', 51, 52),
(27, 25, NULL, NULL, 'view', 53, 54),
(28, 25, NULL, NULL, 'add', 55, 56),
(29, 25, NULL, NULL, 'edit', 57, 58),
(30, 25, NULL, NULL, 'delete', 59, 60),
(31, 1, NULL, NULL, 'EssentialQuestions', 62, 73),
(32, 31, NULL, NULL, 'index', 63, 64),
(33, 31, NULL, NULL, 'view', 65, 66),
(34, 31, NULL, NULL, 'add', 67, 68),
(35, 31, NULL, NULL, 'edit', 69, 70),
(36, 31, NULL, NULL, 'delete', 71, 72),
(37, 1, NULL, NULL, 'Goals', 74, 85),
(38, 37, NULL, NULL, 'index', 75, 76),
(39, 37, NULL, NULL, 'view', 77, 78),
(40, 37, NULL, NULL, 'add', 79, 80),
(41, 37, NULL, NULL, 'edit', 81, 82),
(42, 37, NULL, NULL, 'delete', 83, 84),
(43, 1, NULL, NULL, 'Groups', 86, 97),
(44, 43, NULL, NULL, 'index', 87, 88),
(45, 43, NULL, NULL, 'view', 89, 90),
(46, 43, NULL, NULL, 'add', 91, 92),
(47, 43, NULL, NULL, 'edit', 93, 94),
(48, 43, NULL, NULL, 'delete', 95, 96),
(49, 1, NULL, NULL, 'Overviews', 98, 109),
(50, 49, NULL, NULL, 'index', 99, 100),
(51, 49, NULL, NULL, 'view', 101, 102),
(52, 49, NULL, NULL, 'add', 103, 104),
(53, 49, NULL, NULL, 'edit', 105, 106),
(54, 49, NULL, NULL, 'delete', 107, 108),
(55, 1, NULL, NULL, 'Pages', 110, 113),
(56, 55, NULL, NULL, 'display', 111, 112),
(57, 1, NULL, NULL, 'Resources', 114, 129),
(58, 57, NULL, NULL, 'index', 115, 116),
(59, 57, NULL, NULL, 'view', 117, 118),
(60, 57, NULL, NULL, 'add', 119, 120),
(61, 57, NULL, NULL, 'edit', 121, 122),
(62, 57, NULL, NULL, 'delete', 123, 124),
(63, 1, NULL, NULL, 'ResourcesSections', 130, 141),
(64, 63, NULL, NULL, 'index', 131, 132),
(65, 63, NULL, NULL, 'view', 133, 134),
(66, 63, NULL, NULL, 'add', 135, 136),
(67, 63, NULL, NULL, 'edit', 137, 138),
(68, 63, NULL, NULL, 'delete', 139, 140),
(69, 1, NULL, NULL, 'ResourcesTypes', 142, 143),
(70, 1, NULL, NULL, 'Scopes', 144, 145),
(71, 1, NULL, NULL, 'Sections', 146, 163),
(72, 71, NULL, NULL, 'index', 147, 148),
(73, 71, NULL, NULL, 'view', 149, 150),
(74, 71, NULL, NULL, 'add', 151, 152),
(75, 71, NULL, NULL, 'edit', 153, 154),
(76, 71, NULL, NULL, 'delete', 155, 156),
(77, 71, NULL, NULL, 'outline', 157, 158),
(78, 71, NULL, NULL, 'preview', 159, 160),
(79, 71, NULL, NULL, 'duplicate', 161, 162),
(80, 1, NULL, NULL, 'Steps', 164, 177),
(81, 80, NULL, NULL, 'index', 165, 166),
(82, 80, NULL, NULL, 'view', 167, 168),
(83, 80, NULL, NULL, 'add', 169, 170),
(84, 80, NULL, NULL, 'edit', 171, 172),
(85, 80, NULL, NULL, 'delete', 173, 174),
(86, 80, NULL, NULL, 'duplicate', 175, 176),
(87, 1, NULL, NULL, 'Users', 178, 197),
(88, 87, NULL, NULL, 'initDB', 179, 180),
(89, 87, NULL, NULL, 'index', 181, 182),
(90, 87, NULL, NULL, 'view', 183, 184),
(91, 87, NULL, NULL, 'add', 185, 186),
(92, 87, NULL, NULL, 'edit', 187, 188),
(93, 87, NULL, NULL, 'delete', 189, 190),
(94, 87, NULL, NULL, 'login', 191, 192),
(95, 87, NULL, NULL, 'logout', 193, 194),
(96, 87, NULL, NULL, 'dashboard', 195, 196),
(97, 1, NULL, NULL, 'AclExtras', 198, 199),
(98, 16, NULL, NULL, 'master', 47, 48),
(99, 57, NULL, NULL, 'addto', 125, 126),
(100, 57, NULL, NULL, 'removefrom', 127, 128);

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE IF NOT EXISTS `activities` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `section_id` int(10) DEFAULT NULL,
  `required` tinyint(1) DEFAULT NULL,
  `title` varchar(155) DEFAULT NULL,
  `introbrief` varchar(600) DEFAULT NULL,
  `introdetailed` text,
  `type_id` int(10) NOT NULL,
  `image` varchar(300) DEFAULT NULL,
  `url` varchar(300) DEFAULT NULL,
  `html` text,
  PRIMARY KEY (`id`),
  KEY `section_id` (`section_id`),
  KEY `type_id` (`type_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`id`, `section_id`, `required`, `title`, `introbrief`, `introdetailed`, `type_id`, `image`, `url`, `html`) VALUES
(3, 12, 1, 'New Activity', 'This is the brief intro.', 'This is the detailed intro.', 7, NULL, NULL, NULL),
(4, 10, 1, 'Choices 1 Activity 1', 'This is the brief intro. It is a really brief intro to tell you what the activity is about.', 'This is the detailed intro. This is a more detailed intro and it will have more information about the activity. ', 6, NULL, NULL, NULL),
(7, 10, 1, 'A DD Activity for Session 1', 'This activity is a great activity. I am going to tell you why in the detailed introduction. But first, I''m going to type another sentence.', 'This activity is a great activity. I am going to tell you why in the detailed introduction.This activity is a great activity. I am going to tell you why in the detailed introduction.This activity is a great activity. I am going to tell you why in the detailed introduction.This activity is a great activity. I am going to tell you why in the detailed introduction.This activity is a great activity. I am going to tell you why in the detailed introduction.This activity is a great activity. I am going to tell you why in the detailed introduction.This activity is a great activity. I am going to tell you why in the detailed introduction.This activity is a great activity. I am going to tell you why in the detailed introduction.This activity is a great activity. I am going to tell you why in the detailed introduction.', 7, NULL, NULL, NULL),
(9, 12, 1, 'Watch Anthony Appiah', 'Watch the video clip below with Professor Kwame Anthony Appiah, chair of the Facing History and Ourselves Scholars Board and author of numerous works, including Color Conscious: The Political Morality of Race and The Ethics of Identity.', 'Kwame Anthony Appiah discusses how and why humans create a â€œwe and theyâ€ distinction. Reflect on your personal experiences. If you have decided to keep a journal for this workshop (which we recommend), you may record your reflections in there. How did you learn which differences mattered and which did not?\r\n', 3, NULL, NULL, NULL),
(11, 35, 1, 'Activity for Adding Resources', 'Activity for Adding ResourcesActivity for Adding ResourcesActivity for Adding ResourcesActivity for Adding Resources', 'Activity for Adding ResourcesActivity for Adding ResourcesActivity for Adding ResourcesActivity for Adding ResourcesActivity for Adding ResourcesActivity for Adding ResourcesActivity for Adding ResourcesActivity for Adding ResourcesActivity for Adding ResourcesActivity for Adding ResourcesActivity for Adding ResourcesActivity for Adding ResourcesActivity for Adding Resources', 6, NULL, NULL, NULL),
(12, 40, 1, 'The Choices Students Made', 'How do the choices people make, individually and collectively, shape a society? Why did the people of Little Rock and others involved in this history do what they did, and what impact did their actions have? Our first two activities will explore these questions. Let''s first look at the choices made by students, both the Little Rock Nine and their classmates. ', 'Each and every student at Central High School in September 1957 made choices. As Elizabeth Eckford would later recall, most white students chose to remain "silent witnesses." The vast majority attended school each day and tried to avoid getting into trouble. Yet these students also made decisions that had important consequences. Only a small percentage of the white students at Central High School taunted or physically harassed African American students. Still other students chose to offer small gestures of kindness, a smile or a word of encouragement. The Little Rock Nine made the most difficult choice of allâ€”choosing to enter the menacing hallways of a school that did not want them, and in so doing, putting themselves at great risk. In this activity, we will explore this range of choices, and then as a group we will discuss their implications. After reading, watching, and exploring information about choices made by students in Little Rock, you will discuss your thoughts through three discussion prompts (you may combine your response into one that addresses all three questions).', 3, NULL, NULL, NULL),
(13, 40, 1, 'Jigsaw: Other Choices in Little Rock', 'Now that we have looked at the choices students made in 1957â€“1958 at Central High School, let''s turn to the choices other individuals and groups made that year. We will do this using a jigsaw, a teaching strategy commonly used in many Facing History classrooms.', 'Some of you may be familiar with this strategy. Jigsaws allow students to concentrate on a specific text or primary source, share that learning with other students, and then place that primary source in a larger context by learning about related texts from other students.\r\n\r\nFirst, students are placed in groups (called "expert groups"), each given a different document. Students work together to ensure that each member of the group knows the material equally well. Next, members of groups are "jigsawed," or mixed, so that new groups are formed (called "core learning groups"), each containing members representing all of the original expert groups. Each "expert" teaches fellow students his/her content. From core groups students report out, create a group project, or develop individual projects or other assessment measures (essay, timeline, visual).\r\n\r\nIn this activity, we will use an abridged version of the jigsaw to explore choices made by leaders, the media, and Little Rock citizens during the first year of desegregation at Central High School.\r\n\r\nBoth your expert group and your core group assignments for this activity can be found in the table at the bottom of this activity.', 13, NULL, NULL, NULL),
(15, 44, 1, 'Timeline 1933-1938', 'How did Hitler and the Nazi Party dismantle democracy and turn Germany into a totalitarian and "racial" state? In this activity, you will look at a timeline of critical events during the first five years of Hitler''s Third Reich.', 'How did Hitler and the Nazi Party dismantle democracy and turn Germany into a totalitarian and "racial" state? In this activity, you will look at a timeline of critical events during the first five years of Hitler''s Third Reich. The original source of this timeline is http://www.holocaustchronicle.org/. Follow the following steps:', 6, NULL, NULL, NULL),
(16, 42, 1, 'What Is Facing History and Ourselves?', 'French philosopher Alexis de Tocqueville stated that democracy must be "an apprenticeship in liberty." Facing History and Ourselves is based on the belief that education in a democracy must support the delivery of this promise. Facing History helps students find meaning in the past and recognize the need for participation and responsible decision-making. In this activity, you will listen to voices from the Facing History and Ourselves community and find out what makes the organization unique.', '<p>For more than 30 years, Facing History has believed that education is the key to combating bigotry and nurturing democracy. Through a rigorous investigation of the events that led to the Holocaust, as well as other recent examples of genocide and mass violence, students in a Facing History class learn to combat prejudice with compassion, indifference with participation, and myth and misinformation with knowledge.</p>\r\n<p>We work with educators throughout their careers to improve their effectiveness in the classroom, as well as their students'' academic performance and civic learning.</p>', 4, '', '', '<table style="width: 100%;" border="0">\r\n<tbody>\r\n<tr>\r\n<td>\r\n<h1 style="text-align: left;"><img src="http://facing.mrooms3.net/draftfile.php/89/user/draft/376616696/logo.png" style="vertical-align: middle;" height="61" width="150" /></h1>\r\n</td>\r\n<td>\r\n<h1 style="text-align: left;">What Is Facing History and Ourselves?</h1>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p></p>\r\n<table class="choicesshadow" style="width: 210px; margin: 10px 15px;" cellpadding="10" cellspacing="10" align="right" border="0">\r\n<tbody>\r\n<tr>\r\n<td style="background: #58a796;">\r\n<h3><img src="http://facing.mrooms3.net/draftfile.php/89/user/draft/376616696/video%202.png" style="float: left; margin-right: 5px;" height="21" width="20" /><span style="font-size: x-small; color: #ffffff;">Facing History and Ourselves<br /></span></h3>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td><!-- Start of Brightcove Player -->\r\n<div style="display: none;"></div>\r\n<!--\r\nBy use of this code snippet, I agree to the Brightcove Publisher T and C \r\nfound at https://accounts.brightcove.com/en/terms-and-conditions/. \r\n-->\r\n<script src="http://admin.brightcove.com/js/BrightcoveExperiences.js" type="text/javascript"></script>\r\n<object id="myExperience3067126507001" class="BrightcoveExperience"><param name="bgcolor" value="#FFFFFF" /><param name="width" value="560" /><param name="height" value="315" /><param name="playerID" value="2083241027001" /><param name="playerKey" value="AQ~~,AAABYEdBaAk~,1dGnVytVBSw9Y4yoko71XnFgkvpqea1-" /><param name="isVid" value="true" /><param name="isUI" value="true" /><param name="dynamicStreaming" value="true" /><param name="@videoPlayer" value="3067126507001" /></object> <!-- \r\nThis script tag will cause the Brightcove Players defined above it to be created as soon\r\nas the line is read by the browser. If you wish to have the player instantiated only after\r\nthe rest of the HTML is processed and the page load is complete, remove the line.\r\n-->\r\n<script type="text/javascript">// <![CDATA[\r\nbrightcove.createExperiences();\r\n// ]]></script>\r\n<!-- End of Brightcove Player --></td>\r\n</tr>\r\n<tr>\r\n<td style="background: #fffbd9;">\r\n<p>Curious about what other video clips may be available for use in your classroom? For more voices from the Facing History community, check out our <a target="_blank" href="http://www.facing.org/video"><b>video clip library</b></a> on the Facing History website.</p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p><span style="font-size: small;">Facing History and Ourselves is based on the belief that education in a democracy must be "an apprenticeship in liberty," as stated by French philosopher Alexis de Tocqueville. Facing History helps students find meaning in the past and recognize the need for participation and responsible decision-making.</span></p>\r\n<p><span style="font-size: small;">For more than 30 years, Facing History has believed that education is the key to combating bigotry and nurturing democracy. Through a rigorous investigation of the events that led to the Holocaust, as well as other recent examples of genocide and mass violence, students in a Facing History class learn to combat prejudice with compassion, indifference with participation, and myth and misinformation with knowledge.</span></p>\r\n<p><span style="font-size: small;">We work with educators throughout their careers to improve their effectiveness in the <span style="line-height: 1.231;">classroom, as well as their students'' academic performance and civic learning.</span></span></p>\r\n<hr />\r\n<h2><span style="font-size: x-large;">Activity: Voices from the Facing History Community</span></h2>\r\n<p>For this activity, we would like you to browse some online videos and readings and deepen your understanding of Facing History.<br /><br /></p>\r\n<ol>\r\n<li>Select at least three of the following voices to explore.<span size="2"> </span>As you watch, <a target="_blank" href="http://padlet.com/wall/hhb_os2014nat2">open up our class Padlet wall</a> and share some words or phrases that spoke to you or stood out. Write down your thoughts on any connections or disconnections you see between the voices in these videos and your current teaching experience. What are some of the common elements you heard expressed about Facing <span size="2">History</span> and Ourselves?<span></span></li>\r\n</ol>\r\n<p></p>\r\n<meta charset="utf-8" />\r\n<title>jQuery UI Tabs - Default functionality</title>\r\n<p><link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" /></p>\r\n<script src="http://code.jquery.com/jquery-1.9.1.js" type="text/javascript"></script>\r\n<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js" type="text/javascript"></script>\r\n<p><link rel="stylesheet" href="http://facing.mrooms3.net/resources/demos/style.css" /></p>\r\n<script type="text/javascript">// <![CDATA[\r\n$(function() {\r\n$( "#tabs" ).tabs();\r\n});\r\n// ]]></script>\r\n<div id="tabs">\r\n<ul>\r\n<li><a href="#tabs-1">Alumnus Voice</a></li>\r\n<li><a href="#tabs-2">Student Voice</a></li>\r\n<li><a href="#tabs-3">Educator Voice</a></li>\r\n<li><a href="#tabs-4">Scholar Voice</a></li>\r\n<li><a href="#tabs-5">Survivor Voice</a></li>\r\n<li><a href="#tabs-6">FH Staff Voice</a></li>\r\n</ul>\r\n<div id="tabs-1">\r\n<table style="width: 95%;" cellpadding="10" cellspacing="10" align="center" border="0">\r\n<tbody>\r\n<tr>\r\n<td width="&quot;30%">\r\n<ul>\r\n<li style="background: #fffbd9;">\r\n<h3><span style="font-size: small;">Alumnus Voice<br /></span></h3>\r\n</li>\r\n<li>\r\n<h3><span style="font-size: small;">Student Voice</span></h3>\r\n</li>\r\n<li>\r\n<h3><span style="font-size: small;">Educator Voice</span></h3>\r\n</li>\r\n<li>\r\n<h3><span style="font-size: small;">Scholar Voice</span></h3>\r\n</li>\r\n<li>\r\n<h3><span style="font-size: small;">Survivor Voice</span></h3>\r\n</li>\r\n<li>\r\n<h3><span style="font-size: small;">Facing History Staff Voice</span></h3>\r\n</li>\r\n</ul>\r\n</td>\r\n<td width="40%"><!-- Start of Brightcove Player -->\r\n<div style="display: none;"></div>\r\n<!--\r\nBy use of this code snippet, I agree to the Brightcove Publisher T and C \r\nfound at https://accounts.brightcove.com/en/terms-and-conditions/. \r\n-->\r\n<script src="http://admin.brightcove.com/js/BrightcoveExperiences.js" type="text/javascript"></script>\r\n<object id="myExperience3024550184001" class="BrightcoveExperience"><param name="bgcolor" value="#FFFFFF" /><param name="width" value="560" /><param name="height" value="315" /><param name="playerID" value="2083241027001" /><param name="playerKey" value="AQ~~,AAABYEdBaAk~,1dGnVytVBSw9Y4yoko71XnFgkvpqea1-" /><param name="isVid" value="true" /><param name="isUI" value="true" /><param name="dynamicStreaming" value="true" /><param name="@videoPlayer" value="3024550184001" /></object> <!-- \r\nThis script tag will cause the Brightcove Players defined above it to be created as soon\r\nas the line is read by the browser. If you wish to have the player instantiated only after\r\nthe rest of the HTML is processed and the page load is complete, remove the line.\r\n-->\r\n<script type="text/javascript">// <![CDATA[\r\nbrightcove.createExperiences();\r\n// ]]></script>\r\n<!-- End of Brightcove Player --></td>\r\n<td width="30%">\r\n<h3><span style="font-size: medium;">Margot Stern-Strom,</span></h3>\r\n<h3><span style="font-size: medium;">Founder of Facing History and Ourselves</span></h3>\r\n<h3><span style="font-size: medium;">&amp;</span></h3>\r\n<h3><span style="font-size: medium;">Matt Damon,</span></h3>\r\n<h3><span style="font-size: medium;">Facing History Alumnus</span></h3>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</div>\r\n<div id="tabs-2">\r\n<table style="width: 95%;" cellpadding="10" cellspacing="10" align="center" border="0">\r\n<tbody>\r\n<tr>\r\n<td width="30%">\r\n<ul>\r\n<li>\r\n<h3><span style="font-size: small;">Alumnus Voice<br /></span></h3>\r\n</li>\r\n<li style="background: #fffbd9;">\r\n<h3><span style="font-size: small;">Student Voice</span></h3>\r\n</li>\r\n<li>\r\n<h3><span style="font-size: small;">Educator Voice</span></h3>\r\n</li>\r\n<li>\r\n<h3><span style="font-size: small;">Scholar Voice</span></h3>\r\n</li>\r\n<li>\r\n<h3><span style="font-size: small;">Survivor Voice</span></h3>\r\n</li>\r\n<li>\r\n<h3><span style="font-size: small;">Facing History Staff Voice</span></h3>\r\n</li>\r\n</ul>\r\n</td>\r\n<td width="40%"><!-- Start of Brightcove Player -->\r\n<div style="display: none;"></div>\r\n<!--\r\nBy use of this code snippet, I agree to the Brightcove Publisher T and C \r\nfound at https://accounts.brightcove.com/en/terms-and-conditions/. \r\n-->\r\n<script src="http://admin.brightcove.com/js/BrightcoveExperiences.js" type="text/javascript"></script>\r\n<object id="myExperience3024552493001" class="BrightcoveExperience"><param name="bgcolor" value="#FFFFFF" /><param name="width" value="560" /><param name="height" value="315" /><param name="playerID" value="2083241027001" /><param name="playerKey" value="AQ~~,AAABYEdBaAk~,1dGnVytVBSw9Y4yoko71XnFgkvpqea1-" /><param name="isVid" value="true" /><param name="isUI" value="true" /><param name="dynamicStreaming" value="true" /><param name="@videoPlayer" value="3024552493001" /></object> <!-- \r\nThis script tag will cause the Brightcove Players defined above it to be created as soon\r\nas the line is read by the browser. If you wish to have the player instantiated only after\r\nthe rest of the HTML is processed and the page load is complete, remove the line.\r\n-->\r\n<script type="text/javascript">// <![CDATA[\r\nbrightcove.createExperiences();\r\n// ]]></script>\r\n<!-- End of Brightcove Player --></td>\r\n<td width="30%">\r\n<h3><span style="font-size: medium;">Jonathan Lykes, </span></h3>\r\n<h3><span style="font-size: medium;">Facing History Student</span></h3>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</div>\r\n<div id="tabs-3">\r\n<table style="width: 95%;" cellpadding="10" cellspacing="10" align="center" border="0">\r\n<tbody>\r\n<tr>\r\n<td width="30%">\r\n<ul>\r\n<li>\r\n<h3><span style="font-size: small;">Alumnus Voice<br /></span></h3>\r\n</li>\r\n<li>\r\n<h3><span style="font-size: small;">Student Voice</span></h3>\r\n</li>\r\n<li style="background: #fffbd9;">\r\n<h3><span style="font-size: small;">Educator Voice</span></h3>\r\n</li>\r\n<li>\r\n<h3><span style="font-size: small;">Scholar Voice</span></h3>\r\n</li>\r\n<li>\r\n<h3><span style="font-size: small;">Survivor Voice</span></h3>\r\n</li>\r\n<li>\r\n<h3><span style="font-size: small;">Facing History Staff Voice</span></h3>\r\n</li>\r\n</ul>\r\n</td>\r\n<td width="40%"><!-- Start of Brightcove Player -->\r\n<div style="display: none;"></div>\r\n<!--\r\nBy use of this code snippet, I agree to the Brightcove Publisher T and C \r\nfound at https://accounts.brightcove.com/en/terms-and-conditions/. \r\n-->\r\n<script src="http://admin.brightcove.com/js/BrightcoveExperiences.js" type="text/javascript"></script>\r\n<object id="myExperience2839175471001" class="BrightcoveExperience"><param name="bgcolor" value="#FFFFFF" /><param name="width" value="560" /><param name="height" value="315" /><param name="playerID" value="2083241027001" /><param name="playerKey" value="AQ~~,AAABYEdBaAk~,1dGnVytVBSw9Y4yoko71XnFgkvpqea1-" /><param name="isVid" value="true" /><param name="isUI" value="true" /><param name="dynamicStreaming" value="true" /><param name="@videoPlayer" value="2839175471001" /></object> <!-- \r\nThis script tag will cause the Brightcove Players defined above it to be created as soon\r\nas the line is read by the browser. If you wish to have the player instantiated only after\r\nthe rest of the HTML is processed and the page load is complete, remove the line.\r\n-->\r\n<script type="text/javascript">// <![CDATA[\r\nbrightcove.createExperiences();\r\n// ]]></script>\r\n<!-- End of Brightcove Player -->\r\n<p><a href="http://vimeo.com/41582406">Changing the World One Student at a Time: Principal Jose Navarro</a> from <a href="http://vimeo.com/facinghistory">Facing History and Ourselves</a> on <a href="https://vimeo.com">Vimeo</a>.</p>\r\n</td>\r\n<td width="30%">\r\n<h3><span style="font-size: medium;">Jose Navarro, </span></h3>\r\n<h3><span style="font-size: medium;">Principal at Social Justice Humanitas Academy in San Fernando, California</span></h3>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</div>\r\n<div id="tabs-4">\r\n<table style="width: 95%;" cellpadding="10" cellspacing="10" align="center" border="0">\r\n<tbody>\r\n<tr>\r\n<td width="30%">\r\n<ul>\r\n<li>\r\n<h3><span style="font-size: small;">Alumnus Voice<br /></span></h3>\r\n</li>\r\n<li>\r\n<h3><span style="font-size: small;">Student Voice</span></h3>\r\n</li>\r\n<li>\r\n<h3><span style="font-size: small;">Educator Voice</span></h3>\r\n</li>\r\n<li style="background: #fffbd9;">\r\n<h3><span style="font-size: small;">Scholar Voice</span></h3>\r\n</li>\r\n<li>\r\n<h3><span style="font-size: small;">Survivor Voice</span></h3>\r\n</li>\r\n<li>\r\n<h3><span style="font-size: small;">Facing History Staff Voice</span></h3>\r\n</li>\r\n</ul>\r\n</td>\r\n<td width="40%"><!-- Start of Brightcove Player -->\r\n<div style="display: none;"></div>\r\n<!--\r\nBy use of this code snippet, I agree to the Brightcove Publisher T and C \r\nfound at https://accounts.brightcove.com/en/terms-and-conditions/. \r\n-->\r\n<script src="http://admin.brightcove.com/js/BrightcoveExperiences.js" type="text/javascript"></script>\r\n<object id="myExperience2816509145001" class="BrightcoveExperience"><param name="bgcolor" value="#FFFFFF" /><param name="width" value="560" /><param name="height" value="315" /><param name="playerID" value="2083241027001" /><param name="playerKey" value="AQ~~,AAABYEdBaAk~,1dGnVytVBSw9Y4yoko71XnFgkvpqea1-" /><param name="isVid" value="true" /><param name="isUI" value="true" /><param name="dynamicStreaming" value="true" /><param name="@videoPlayer" value="2816509145001" /></object> <!-- \r\nThis script tag will cause the Brightcove Players defined above it to be created as soon\r\nas the line is read by the browser. If you wish to have the player instantiated only after\r\nthe rest of the HTML is processed and the page load is complete, remove the line.\r\n-->\r\n<script type="text/javascript">// <![CDATA[\r\nbrightcove.createExperiences();\r\n// ]]></script>\r\n<!-- End of Brightcove Player --></td>\r\n<td width="30%">\r\n<h3><span style="font-size: medium;">Martha Minow, Jeremiah Smith, Jr., Professor of Law, Harvard Law School</span></h3>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</div>\r\n<div id="tabs-5">\r\n<div id="survivorvoice">\r\n<table style="width: 95%;" cellpadding="10" cellspacing="10" align="center" border="0">\r\n<tbody>\r\n<tr>\r\n<td width="30%">\r\n<ul>\r\n<li>\r\n<h3><span style="font-size: small;">Alumnus Voice<br /></span></h3>\r\n</li>\r\n<li>\r\n<h3><span style="font-size: small;">Student Voice</span></h3>\r\n</li>\r\n<li>\r\n<h3><span style="font-size: small;">Educator Voice</span></h3>\r\n</li>\r\n<li>\r\n<h3><span style="font-size: small;">Scholar Voice</span></h3>\r\n</li>\r\n<li style="background: #fffbd9;">\r\n<h3><span style="font-size: small;">Survivor Voice</span></h3>\r\n</li>\r\n<li>\r\n<h3><span style="font-size: small;">Facing History Staff Voice</span></h3>\r\n</li>\r\n</ul>\r\n</td>\r\n<td width="40%"><iframe src="http://www.youtube.com/embed/35uNdU2t_fQ" allowfullscreen="" frameborder="0" height="315" width="420"></iframe></td>\r\n<td width="30%">\r\n<h3><span style="font-size: medium;">Dr. Maurice Vanderpol, from a middle-class Jewish family, went into hiding when the Nazis invaded and occupied his native Holland in 1940.</span></h3>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</div>\r\n</div>\r\n<div id="tabs-6">\r\n<table style="width: 95%;" cellpadding="10" cellspacing="10" align="center" border="0">\r\n<tbody>\r\n<tr>\r\n<td width="30%">\r\n<ul>\r\n<li>\r\n<h3><span style="font-size: small;">Alumnus Voice<br /></span></h3>\r\n</li>\r\n<li>\r\n<h3><span style="font-size: small;">Student Voice</span></h3>\r\n</li>\r\n<li>\r\n<h3><span style="font-size: small;">Educator Voice</span></h3>\r\n</li>\r\n<li>\r\n<h3><span style="font-size: small;">Scholar Voice</span></h3>\r\n</li>\r\n<li>\r\n<h3><span style="font-size: small;">Survivor Voice</span></h3>\r\n</li>\r\n<li style="background: #fffbd9;">\r\n<h3><span style="font-size: small;">Facing History Staff Voice</span></h3>\r\n</li>\r\n</ul>\r\n</td>\r\n<td width="40%"><!-- Start of Brightcove Player -->\r\n<div style="display: none;"></div>\r\n<!--\r\nBy use of this code snippet, I agree to the Brightcove Publisher T and C \r\nfound at https://accounts.brightcove.com/en/terms-and-conditions/. \r\n-->\r\n<script src="http://admin.brightcove.com/js/BrightcoveExperiences.js" type="text/javascript"></script>\r\n<object id="myExperience2814744646001" class="BrightcoveExperience"><param name="bgcolor" value="#FFFFFF" /><param name="width" value="560" /><param name="height" value="315" /><param name="playerID" value="2083241027001" /><param name="playerKey" value="AQ~~,AAABYEdBaAk~,1dGnVytVBSw9Y4yoko71XnFgkvpqea1-" /><param name="isVid" value="true" /><param name="isUI" value="true" /><param name="dynamicStreaming" value="true" /><param name="@videoPlayer" value="2814744646001" /></object> <!-- \r\nThis script tag will cause the Brightcove Players defined above it to be created as soon\r\nas the line is read by the browser. If you wish to have the player instantiated only after\r\nthe rest of the HTML is processed and the page load is complete, remove the line.\r\n-->\r\n<script type="text/javascript">// <![CDATA[\r\nbrightcove.createExperiences();\r\n// ]]></script>\r\n<!-- End of Brightcove Player --></td>\r\n<td width="30%">\r\n<h3><span style="font-size: medium;">Margot Stern-Strom,</span></h3>\r\n<h3><span style="font-size: medium;">Executive Director of Facing History and Ourselves</span></h3>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</div>\r\n</div>'),
(17, 16, 1, 'Overview: The Desegregation of Central High:', 'For Little Rock, Arkansas, in September of 1957, the hope and promise of Brown v. Board of Educationâ€”decided three years earlierâ€”would finally be realized. Little Rock would be in the spotlight of an entire nation, as the struggle toward equal rights for African American students would face its largest test to date. No one would confront that test more directly than nine courageous students and their families.', '', 6, 'http://upload.wikimedia.org/wikipedia/commons/a/a6/LTC_Marion_Johnson_turns_students_away.jpg', 'http://facing.mrooms3.net/course/view.php?id=58&pageid=1737', NULL),
(18, 16, 1, 'Book Group Discussion: Warriors Don''t Cry', 'As a requirement for this online course, you have read Warriors Don''t Cry, a memoir by Little Rock Niner Melba Pattillo Beals. A major component of this week''s session is participation in an online group book discussion of this work. Your course facilitator will provide you with more details.', '', 3, 'http://www.rainbowresource.com/products/009582.jpg', 'http://facing.mrooms3.net/course/view.php?id=58&pageid=1740', NULL),
(19, 16, 1, 'Deconstructing an Image: Will Counts''s Photo of Elizabeth Eckford', 'In this activity, we will deconstruct this photo as we try to make meaning out of a painful episode in U.S. history. We will be looking at Will Counts''s famous image of Elizabeth Eckford. ', 'For many of us and our students, visual images can bring meaning and illuminate history in ways that words alone might not.\r\n\r\nOn that fateful first day of school in September 1957, photographer Will Counts captured a startling image of Elizabeth Eckford and the angry mob behind her. This photograph would take its place among some of the most iconic photos of the civil rights era.\r\n\r\nIn this activity, we will deconstruct this photo as we try to make meaning out of a painful episode in U.S. history. We will be looking at Will Counts''s famous image of Elizabeth Eckford. In the photograph, Eckford is being followed by an angry mob on the day she first attempts to enter Central High School in Little Rock, Arkansas. We will be using a variation of a teaching strategy called analyzing visual images that can be found in the Educator Resources section of Facing History''s website.', 1, 'http://fedora.dlib.indiana.edu/fedora/get/iudl:703665/LARGE', 'http://facing.mrooms3.net/course/view.php?id=58&pageid=1739', NULL),
(20, 16, 1, 'Discussion: Pedagogy', 'In this session, you learned about the desegregation of Central High School in 1957. The history was presented through text, video, a timeline of key events, and the voices and personal testimony of Elizabeth Eckford, Melba Pattillo Beals, and Terrence Roberts of the Little Rock Nine.    For our final discussion, let''s put on our "teacher hats" to have a conversation about effective ways to teach history.', '', 3, 'http://upload.wikimedia.org/wikipedia/commons/thumb/2/27/Teacher.jpg/320px-Teacher.jpg', 'http://facing.mrooms3.net/course/view.php?id=58&pageid=1738', NULL),
(21, 43, 1, 'Exploring Primary Sources', 'The history of the Weimar Republic (1919-1933) illuminates one of the most creative and crucial periods in the twentieth century and serves as a significant case study of the critical issues of our own time.  This activity will have you explore some of the artifacts that came from this fascinating time period.', 'Many of the questions asked about the Weimar Republic are relevant to problems that individuals and societies face in the twenty-first century. To explore these issues, Facing History created an online module titled The Weimar Republic: The Fragility of Democracy, for students and educators that we will use in the following activities.\r\n\r\nWe will use this online module to learn more about certain individuals who lived during the Weimar period. You will examine some documents from the Weimar Republic as you consider each individual''s point of view. Through examination of these documents, you will start to develop a portrait of Weimar society and raise critical questions about the power of choices made by individuals to preserve and strengthen democracy, or to put democracy at risk.\r\n', 2, 'http://upload.wikimedia.org/wikipedia/commons/thumb/2/24/Stamps_of_Germany_%28Berlin%29_1977%2C_MiNr_551.jpg/375px-Stamps_of_Germany_%28Berlin%29_1977%2C_MiNr_551.jpg', 'http://facing.mrooms3.net/course/view.php?id=58&pageid=1744', NULL),
(22, 43, 1, 'Deconstructing Images', 'Analyzing visual images is a great way for students to think deeper about history. It is a great way to develop awareness of historical context, develop critical thinking skills, enhance observational and interpretive skills, and develop conceptual learning techniques. ', 'In this particular activity, we will be deconstructing a painting by George Grosz, a German artist whose work was popular during the interwar years of the Weimar Republic. According to art historian Ivo Kranzfelder, "The career of George Grosz is the perfect example of an artist''s life tied inseparably to the historical, social and political movements of the age." Where words often fall short, art can succeed in capturing the politics, emotions and undercurrents of a time in history. Grosz had a unique ability to communicate through his canvasses. In this activity, we will examine one of Grosz''s most famous paintings, "The Agitator."', 2, 'http://www.artchive.com/web_gallery/reproductions//209501-210000/209856/size1.jpg', 'http://facing.mrooms3.net/course/view.php?id=58&pageid=1743', NULL),
(23, 43, 1, 'Exploring Jewish Life in Europe: 1918-1933', 'IWitness (iwitness.usc.edu) is an educational website developed by the USC Shoah Foundation (The Institute for Visual History and Education). IWitness brings the human stories of the Instituteâ€™s Visual History Archive to secondary school teachers and their students via engaging multimedia learning activities that address educational standards (Common Core, ISTE). IWitness provides access to more than 1,300 full life histories, testimonies of survivors and other witnesses to the Holocaust and other genocides for guided exploration.', 'For this activity, we will register you for this amazing resource. You will recieve an email on Friday from IWitness confirming your registration and another email inviting you to joint the "Facing History Educators'' Group" on IWitness.\r\n\r\nThe IWitness site is vast and there are many ways it can be used. We invite you to explore the site on your own and reference the webinar in the "additional resource" tab or any of the help tutorials under the "educator" tab on IWitness.  For this session we will go the Activity titled "Information Quest: Life Before the War- Rena Finder". When looking at these questions through the lens of the Jewish experience, we gain a deeper understanding of the complexity and variety of what it meant to be Jewish at that time, the multiple paths Jews took as they negotiated their surrounding secular worlds, and to what extent the world around them welcomed them in.\r\n\r\nThe particular experience of one survivor, Rena Finder, will personalize the general experience. Rena is also the survivor you will speak with later in the course when we study the Holocaust. This lesson will not only help us think about what was lost, but will allow you to get to know more about Rena before our conversation with her. ', 7, 'http://notanotherhistoryteacher.edublogs.org/files/2012/08/Screen-Shot-2012-08-04-at-9.36.01-PM-ncg97l.png', 'http://facing.mrooms3.net/course/view.php?id=58&pageid=1742', NULL),
(24, 42, 1, 'Journals and Introductions', 'In so many Facing History and Ourselves classrooms, the journal is a crucial tool that allows both teacher and student the setting for a "silent dialogue with the self," while the classroom becomes the setting for group interactions. Likewise, in this course, you will be using your journal extensively to collect your own ideas, reflect on your learning, and write down questions or ideas that are sparked by the interactions with content and fellow course participants.', 'For the first part of this activity, you will access your journal by clicking this link. For this journal prompt, please reflect on your name.\r\n\r\n*Note: In the Moodle Learning Management System (the course platform upon which this course is built), journals are referred to as "blogs." We will provide direct links to the "blogs" section of the course during each activity where journal is required.\r\n\r\nHowever, at any time, you can create a new journal entry under the Navigation panel on the left side of this screen. Go to NAVIGATION -> My Profile -> Blogs -> Add a new entry. ', 4, '', '', '<h1 style="text-align: center;">Journals and Introductions</h1>\r\n<hr />\r\n<p><img src="http://facing.mrooms3.net/draftfile.php/89/user/draft/90307125/journal.png" style="margin-left: 15px; margin-right: 15px; float: left;" height="173" width="200" />In so many Facing History and Ourselves classrooms, the journal is a crucial tool that allows both teacher and student the setting for a "silent dialogue with the self," while the classroom becomes the setting for group interactions. Likewise, in this course, you will be using your journal extensively to collect your own ideas, reflect on your learning, and write down questions or ideas that are sparked by the interactions with content and fellow course participants.</p>\r\n<p>For the first part of this activity, you will access your journal by clicking <a onclick="window.open(''http://facing.mrooms3.net/blog/edit.php?action=add/#region-main'','''',''scrollbars=yes,resizable=yes,width=700,height=800'');return false;" href="http://facing.mrooms3.net/blog/edit.php?action=add/#region-main">this link</a>. For this journal prompt, please reflect on your name.</p>\r\n<p style="margin-left: 30px;">*<em>Note: In the Moodle Learning Management System (the course platform upon which this course is built), journals are referred to as "blogs." We will provide direct links to the "blogs" section of the course during each activity where journal is required. </em></p>\r\n<p style="margin-left: 30px;"><em>However, at any time, you can create a new journal entry under the Navigation panel on the left side of this screen. Go to <span style="color: #58a796;"><strong>NAVIGATION</strong> <strong>-&gt; My Profile -&gt; Blogs -&gt;</strong> <strong>Add a new entry</strong></span>. </em></p>\r\n<table style="background-color: #fffbd9; width: 90%; border: 5px solid #58a796;" class="choicesshadow" cellpadding="10" cellspacing="10" align="center">\r\n<tbody>\r\n<tr>\r\n<td>\r\n<p style="margin-left: 30px;"><em>** PLEASE NOTE: Journal entries are meant to be private reflective spaces in the Facing History and Ourselves classroom. While students are encouraged to share their ideas to the extent they are comfortable, journals are used primarily as private spaces where students can reflect. For this reason, we encourage you to make your blog entries private (so that only you can see them) by doing the following:</em></p>\r\n<p style="margin-left: 30px;"><em>1. Once your blog window pops up, scroll down until you see the following:</em></p>\r\n<p style="margin-left: 30px;"><em><img style="display: block; margin-left: auto; margin-right: auto;" src="http://facing.mrooms3.net/draftfile.php/89/user/draft/90307125/blogs_publishto.png" height="84" width="294" /></em></p>\r\n<p style="margin-left: 30px;"><em>2. Select "Yourself (draft)" as your selection. This way, your blog posts will only be visible to you.</em></p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p style="margin-left: 30px;"><em>Additionally, you can access all of your prior journal posts by visiting the Navigation panel on the left side of this screen. Go to <span style="color: #58a796;"><strong>NAVIGATION -&gt; My Profile</strong> </span><strong><span style="color: #58a796;">-&gt; Blogs -&gt;</span> </strong><em><span style="color: #58a796;"><strong>View all of my entries</strong></span>.</em></em></p>\r\n<p></p>\r\n<hr />\r\n<h2 style="text-align: center;"><img src="http://facing.mrooms3.net/draftfile.php/89/user/draft/90307125/discussion-draft.png" style="float: left; margin-left: 20px; margin-right: 20px;" height="60" width="58" />Online Discussions</h2>\r\n<hr />\r\n<p style="text-align: left; margin-left: 30px;"><span style="font-style: normal; font-variant: normal; font-weight: normal; font-size: small; line-height: normal; font-size-adjust: none; font-stretch: normal; -moz-font-feature-settings: normal; -moz-font-language-override: normal;">Online discussion is perhaps the most important aspect of this course. It is through this discussion that we will deepen our thinking about the course themes, wrestle with the complexity of the material, and as a community make connections between the history we study, our own lives, and the decisions we make every day.</span></p>\r\n<p style="margin-left: 30px;"><span style="font: small arial,helvetica,sans-serif;"> </span></p>'),
(25, 42, 1, 'Fostering a Reflective Community', 'A Facing History classroom seeks to foster: <ul><li>Studentsâ€™ critical thinking and inquiry</li><li>Studentsâ€™ historical understanding and their capacity to connect history to contemporary events and their own lives</li><li>Studentsâ€™ active participation in civic life.</li></ul>  It takes a special kind of learning environment to achieve these objectives. We conceive of these environments as â€œreflective classroom communities.â€', '', 3, NULL, '', '<h1 style="text-align: center;">Fostering a Reflective Community</h1>\r\n<p><span style="font-size: small;">The philosopher <a href="http://www.jewishvirtuallibrary.org/jsource/biography/arendt.html" target="_blank"><b>Hannah Arendt</b></a> has said that the essence of being human is participating in moral discourse with others:</span></p>\r\n<div align="left"><span style="font-size: small;" size="2"><span style="font-size: small;" size="2"></span></span>\r\n<table style="width: 90%; margin: 10px 0px 15px 30px;" cellpadding="10" cellspacing="10" align="center" border="0">\r\n<tbody>\r\n<tr>\r\n<td><img src="http://facing.mrooms3.net/draftfile.php/89/user/draft/276140142/arendt.jpg" style="float: left; margin-right: 25px;" class="choicesshadow" height="113" width="100" /></td>\r\n<td><i><span style="font-size: small;" size="2">"The things of the world become human for us only when we can discuss them with our fellows. We humanize what is going on in the world and in ourselves only by speaking of it, and in the course of speaking of it we learn to be human.â€<sup>1</sup></span></i></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p><i><span style="font-size: small;" size="2"><sup></sup></span></i><span style="font-size: small;" size="2"><br />Arendtâ€™s beliefs inform the distinctive teaching philosophy of Facing History and Ourselves, a program which relies on the moral discourse of history to deepen adolescentsâ€™ understanding of humanity. In working toward this goal, Facing History teachers have three specific objectives:</span></p>\r\n<p></p>\r\n<table class="choicesshadow" style="width: 80%; margin: 10px 0px 15px 60px; background-color: #fffbd9; border-color: #58a796; border-width: 4px; border-style: solid;" cellpadding="10" cellspacing="10" align="center" border="4">\r\n<tbody>\r\n<tr>\r\n<td><i><i><span style="font-size: small;" size="2"></span></i></i>\r\n<blockquote>\r\n<ul>\r\n<li>\r\n<p><strong><span style="color: #58a796;"><span style="font-size: small;" size="2">To foster studentsâ€™ critical thinking and inquiry</span><span style="font-size: small;" size="2"><span style="font-size: small;" size="2"> <br /></span></span></span></strong></p>\r\n</li>\r\n<li>\r\n<p><strong><span style="font-size: small; color: #58a796;" size="2">To foster studentsâ€™ historical understanding and their capacity to connect history to contemporary events and their own lives<br /></span></strong></p>\r\n</li>\r\n<li>\r\n<p><strong><span style="font-size: small;" size="2"><span style="color: #58a796;">To foster studentsâ€™ active participation in civic life.</span> </span></strong></p>\r\n</li>\r\n</ul>\r\n</blockquote>\r\n<i><span style="font-size: small;" size="2"></span></i></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p></p>\r\n<blockquote></blockquote>\r\n<p><span style="font-size: small;" size="2"><br />It takes a special kind of learning environment to achieve these objectives. We conceive of these environments as â€œreflective classroom communities.â€<br /><br />In reflective classrooms, studentsâ€™ knowledge is constructed rather than passively absorbed. Students are prompted to join with teachers in posing problems to foster â€œcritical consciousness.â€<sup>2</sup> They are encouraged to engage in dialogue within a community of learners, to look deeply, to question underlying assumptions, and to discern underlying values being presented. <br /><br />In reflective classrooms focused on historical understanding, students are encouraged to view history as a human construction rather than an inevitable event--a dynamic process in which individuals and groups shape their destiny by the choices they make. Students study how and why events unfolded as they did, looking at how citizens can be active moral agents who can make a difference in society. Students are encouraged to view themselves as historical actors, thereby exploring how any particular case study is relevant to their own lives today.<br /><br />Finally, in reflective classrooms, teaching and learning is conceived as a social endeavor where a healthy exchange of ideas is welcome. Students are treated as thoughtful participants, encouraged to voice their own opinions and to actively listen to others; to treat different students and different perspectives with patience and respect; and to recognize that there are always more perspectives and more to learn.</span></p>\r\n<p></p>\r\n<hr />\r\n<h1 style="text-align: center;"><span size="2">Activity: Fostering a Reflective Classroom Community</span></h1>\r\n</div>\r\n<div align="left"><span style="font-size: small;" size="2"><span style="font-size: small;" size="2"></span></span>\r\n<table style="width: 95%; margin: 20px 0px;" cellpadding="10" cellspacing="10" align="center" border="0">\r\n<tbody>\r\n<tr>\r\n<td>\r\n<table cellpadding="10" cellspacing="10" border="0">\r\n<tbody>\r\n<tr>\r\n<td>\r\n<p><span style="font-size: small;" size="2">1. Please view the video to the right of this text by Facing History''s own Doc Miller.</span></p>\r\n<p></p>\r\n<p></p>\r\n<p></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>2. <span style="font-size: small;"><span size="2"><a target="_blank" href="http://facing.mrooms3.net/pluginfile.php/13897/mod_page/content/30/Reflective%20Class%20Brief.pdf"><b>Read more</b></a> about Facing Historyâ€™s thinking on reflective classroom practice.</span></span></p>\r\n<p></p>\r\n<p></p>\r\n<p></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>3. <span style="font-size: small;">Please read the discussion prompts <a href="#discuss">below</a>.<br /></span></p>\r\n<p></p>\r\n<p></p>\r\n<p></p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</td>\r\n<td style="text-align: center;"><!-- Start of Brightcove Player -->\r\n<div style="display: none;"></div>\r\n<!--\r\nBy use of this code snippet, I agree to the Brightcove Publisher T and C \r\nfound at https://accounts.brightcove.com/en/terms-and-conditions/. \r\n-->\r\n<script src="http://admin.brightcove.com/js/BrightcoveExperiences.js" type="text/javascript"></script>\r\n<object id="myExperience2589528788001" class="BrightcoveExperience"><param name="bgcolor" value="#FFFFFF" /><param name="width" value="560" /><param name="height" value="315" /><param name="playerID" value="2083241027001" /><param name="playerKey" value="AQ~~,AAABYEdBaAk~,1dGnVytVBSw9Y4yoko71XnFgkvpqea1-" /><param name="isVid" value="true" /><param name="isUI" value="true" /><param name="dynamicStreaming" value="true" /><param name="@videoPlayer" value="2589528788001" /></object> <!-- \r\nThis script tag will cause the Brightcove Players defined above it to be created as soon\r\nas the line is read by the browser. If you wish to have the player instantiated only after\r\nthe rest of the HTML is processed and the page load is complete, remove the line.\r\n-->\r\n<script type="text/javascript">// <![CDATA[\r\nbrightcove.createExperiences();\r\n// ]]></script>\r\n<!-- End of Brightcove Player --></td>\r\n<td></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</div>\r\n<hr />\r\n<div id="discuss">\r\n<h2 style="text-align: center;">Online Discussion: A Community of Learners</h2>\r\n</div>\r\n<div align="left"></div>\r\n<div align="left">\r\n<p><span style="font-size: small;" size="2">Our reflective classroom community has the same aspirations you just read about but takes place online. For some of you this may be your first online course, and for others one of many. To begin, please take a few minutes to read some best practice <a target="_blank" href="http://facing.mrooms3.net/course/view.php?id=57&amp;pageid=1368"><b>Guidelines for Communicating Online</b></a>, and share your thoughts in our first <a href="#discuss_reflect"><b>online discussion</b></a>. </span></p>\r\n<ul>\r\n<li>\r\n<p><em><span style="font-size: small;" size="2">What feels similar or different about an online reflective classroom? And what do you think is the most important aspect to make our online conversations successful?</span></em></p>\r\n</li>\r\n</ul>\r\n<br /><hr /><span style="font-size: xx-small;" size="1"><sup>1</sup>Originally referenced in Margot Strom, Moral Education Forum, Summer 1981, p. 13. <br /><br /><sup>2</sup> Paulo Freire, <em>Pedagogy of the Oppressed</em> (New York, New York: Continuum Press, 1994).</span></div>\r\n<div align="left"></div>');
INSERT INTO `activities` (`id`, `section_id`, `required`, `title`, `introbrief`, `introdetailed`, `type_id`, `image`, `url`, `html`) VALUES
(26, 42, 1, 'Creating Your Profile', 'Creating your profile for this online seminar is key to helping create a community as we learn together over the next seven weeks.', '', 4, NULL, '', '<p><em><span style="font-family: arial,helvetica,sans-serif; font-variant: normal; font-weight: normal; font-size: small; line-height: normal; font-size-adjust: none; font-stretch: normal; -moz-font-feature-settings: normal; -moz-font-language-override: normal;">Creating your profile for this online course is key to helping create a community as we learn together over the next eight weeks.</span></em></p>\r\n<p></p>\r\n<h2>Steps for Creating/Editing Your Profile</h2>\r\n<ol>\r\n<li>\r\n<p>To your left, you will see a block titled <span style="font-size: medium;"><strong><span style="color: #ffffff; background-color: #58a796;"> Settings </span></strong></span>.</p>\r\n</li>\r\n<li>\r\n<p>Under the <span style="background-color: #fffbd9;"><span style="font-size: small; line-height: 1.2em;"> <img style="vertical-align: middle;" src="http://facing.mrooms3.net/draftfile.php/89/user/draft/877719022/bluearrow.png" height="17" width="17" /> My profile settings </span> </span> tab, click  <span style="background-color: #fffbd9;"><img style="vertical-align: bottom;" src="http://facing.mrooms3.net/draftfile.php/89/user/draft/877719022/graysquare.png" height="21" width="21" /> <a onclick="window.open(''http://facing.mrooms3.net/user/editadvanced.php?id=2&amp;course=38/#region-main'','''',''scrollbars=yes,resizable=yes,width=1000,height=600,left=''+(screen.availWidth/2-500)+'',top=''+(screen.availHeight/2-300)+'''');return false;" href="http://facing.mrooms3.net/user/editadvanced.php?id=2&amp;course=38/#region-main"><span style="text-decoration: underline; color: #58a796;">Edit profile</span></a><span style="background-color: #ffffff;">. </span> </span></p>\r\n</li>\r\n<li>\r\n<p><span style="background-color: #fffbd9;"></span>In the "Description" section, please write a little about where you teach, including the grades and subjects you teach.</p>\r\n</li>\r\n<li>\r\n<p>Next, upload a photo of yourself. Photos are extremely important to help us build community in our online seminar. Your photo will also show up next to your posts in the discussion forums.</p>\r\n</li>\r\n<li>\r\n<p>Lastly, please add a list of a few of your interests and hobbies.</p>\r\n</li>\r\n</ol>\r\n<h2>Steps for Changing Your Password</h2>\r\n<ol>\r\n<li>\r\n<p>In the <span style="font-size: medium;"><strong><span style="color: #ffffff; background-color: #58a796;"> Settings </span></strong></span> block, go to the <span style="background-color: #fffbd9;"><span style="font-size: small; line-height: 1.2em;"> <img style="vertical-align: middle;" src="http://facing.mrooms3.net/draftfile.php/89/user/draft/877719022/bluearrow.png" height="17" width="17" /> My profile settings </span> </span> tab, then click  <span style="background-color: #fffbd9;"><img style="vertical-align: bottom;" src="http://facing.mrooms3.net/draftfile.php/89/user/draft/877719022/graysquare.png" height="21" width="21" /> <a onclick="window.open(''http://facing.mrooms3.net/login/change_password.php?id=38/#region-main'','''',''scrollbars=yes,resizable=yes,width=1000,height=600,left=''+(screen.availWidth/2-500)+'',top=''+(screen.availHeight/2-300)+'''');return false;" href="http://facing.mrooms3.net/login/change_password.php?id=38/#region-main"><span style="text-decoration: underline; color: #58a796;">Change password</span></a><span style="background-color: #ffffff;">.  </span></span></p>\r\n</li>\r\n<li>\r\n<p>Enter your current password (supplied by Facing History and Ourselves when you were enrolled in the course), and create a new password that only you know. Re-enter your new password and click "Save Changes."</p>\r\n</li>\r\n<li>\r\n<p>The next time you log in to the course, you will use this new password. Therefore, you should make sure that you write it down somewhere so that you won''t forget it!</p>\r\n</li>\r\n</ol>\r\n<p></p>\r\n<p>For further instructions on creating a user profile, please watch the following video explaining the process (please note that the course in the video might vary from the current course in its look and feel):</p>\r\n<table class="choicesshadow" style="background-color: #fffbd9; border-radius: 15px 15px 15px 15px;" cellpadding="15" align="center" border="0">\r\n<tbody>\r\n<tr>\r\n<td><img src="http://facing.mrooms3.net/draftfile.php/89/user/draft/877719022/video%202.png" style="vertical-align: text-top; margin-top: 0px; margin-bottom: 0px;" height="84" width="89" /></td>\r\n<td><iframe src="http://player.vimeo.com/video/75602029?title=0&amp;byline=0&amp;portrait=0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen="" frameborder="0" height="400" width="500"></iframe></td>\r\n<td style="text-align: center;"></td>\r\n</tr>\r\n</tbody>\r\n</table>'),
(27, 42, 1, 'Creating an Identity Chart', 'â€œWho am I?â€ is a question that each of us asks at some time in our life. It is an especially critical question for adolescents. As we search for the answer, we begin to define ourselves. Identity charts are used in Facing History and Ourselves classrooms to help teachers and students think about labels they use to define themselves and others. ', 'An identity chart is a graphic tool that helps students consider the many factors that shape who they are as individuals and as communities. Identity charts can be used to deepen studentsâ€™ understanding of themselves, groups, nations, and historical and literary figures. Sharing their own identity charts with peers can help students build relationships and break down stereotypes. In this way, identity charts can be utilized as an effective classroom community-building tool.', 5, '', '', '<h2 style="text-align: center;">Identity Charts</h2>\r\n<p><br /> <span style="font: 13.0px Arial;"></span><br /> <img src="http://upload.wikimedia.org/wikipedia/commons/b/bf/Fingerprint_picture.svg" style="float: left; margin: 15px;" height="131" width="90" /><span style="font: 13.0px Arial;">â€œWho am I?â€ is a question that each of us asks at some time in our life. It is an especially critical question for adolescents. As we search for the answer, we begin to define ourselves. Identity charts are used in Facing History and Ourselves classrooms to help teachers and students think about labels they use to define themselves and others. </span></p>\r\n<p></p>\r\n<p><span style="font: 13.0px Arial;">An identity chart is a graphic tool that helps students consider the many factors that shape who they are as individuals and as communities. Identity charts can be used to deepen studentsâ€™ understanding of themselves, groups, nations, and historical and literary figures. Sharing their own identity charts with peers can help students build relationships and break down stereotypes. In this way, identity charts can be utilized as an effective classroom community-building tool.</span></p>\r\n<p></p>\r\n<h2 style="text-align: center;">Create your own identity chart:</h2>\r\n<p></p>\r\n<p><span style="font: 13.0px Arial;">On a piece of paper, create your identity chart that represents your brainstorming of your ideas when thinking about the question, â€œWho am I?â€ Your responses can address your role in a family (e.g., daughter, sister, mother, etc.), your hobbies and interests (e.g., guitar player, football fan, etc.), your background (e.g., religion, race, nationality, hometown, or place of birth), and/or your physical characteristics.</span></p>\r\n<p></p>\r\n<p><img style="display: block; margin-left: auto; margin-right: auto;" src="http://facing.mrooms3.net/draftfile.php/89/user/draft/533449347/identchart.png" height="216" width="394" /></p>\r\n<h2 style="text-align: center;"></h2>\r\n<h2 style="text-align: center;">Tools for Creating Your Identity Chart</h2>\r\n<p></p>\r\n<p><span style="font: 13.0px Arial;">There are countless ways to create identity charts with your students. These can range from "no-tech" solutions, like drawing on a piece of graph paper with a pencil, to "high-tech" solutions like using Microsoft PowerPoint or Bubbl.us to build colorful personal maps. Since we are completing this course as online learners, it is recommended that the identity charts are created in a way that allows for them to be shared with the other members of the course. We will do this through an online discussion forum.</span><br /><br /><span style="font: 13.0px Arial;">Here are a few ways you can create your identity chart:</span><br /><br /></p>\r\n<ol>\r\n<li><span style="font: 13.0px Arial;">Paper and Photo: Draw your identity chart on a piece of paper. Snap a picture of your chart with a smartphone. Upload your photo to your computer and submit it to the discussion forum, or email the image to your course facilitator, who can post it to the discussion forum.</span><span style="font: 13.0px Arial;"></span></li>\r\n<li><span style="font: 13.0px Arial;"><a target="_blank" href="http://bubbl.us">Bubbl.us</a>: This tool allows for the creation and export of mind maps. You can create an identity chart on Bubbl.us, then export it as a .jpg or a .png file.</span></li>\r\n<li><span style="font: 13.0px Arial;"><a target="_blank" href="http://www.wordle.net">Wordle.net</a>: Create your identity chart as a word cloud! Word clouds give greater prominence to words that appear more often within a text selection. Here''s a suggestion: compose a short biography of yourself, then paste it into the Wordle and see what comes up!</span></li>\r\n<li><span style="font: 13.0px Arial;"><a target="_blank" href="http://www.prezi.com">Prezi</a>: Prezis are great alternatives to traditional slideshows. The site has some useful tutorials on how to best create a Prezi. Keep in mind that you will need to create an account with a login for this option.</span></li>\r\n<li><span style="font: 13.0px Arial;">PowerPoint: Using Microsoft PowerPoint, create your identity chart with a slide, or create a full slideshow that you can share with your classmates.</span></li>\r\n<li><span style="font: 13.0px Arial;">A completely different option of your choice!</span></li>\r\n</ol>\r\n<p><br /><span style="font: 13.0px Arial;">When you have finished creating your identity chart, export the chart as an image file (.jpg or .png are best) and add it to the <a href="http://facing.mrooms3.net/course/view.php?id=55&amp;pageid=1377">class discussion forum for sharing identity charts</a>. </span></p>\r\n<p></p>\r\n<p><span style="font: 13.0px Arial;">When you have completed the activity, <a onclick="window.open(''http://facing.mrooms3.net/blog/edit.php?action=add/#region-main'','''',''scrollbars=yes,resizable=yes,width=700,height=800'');return false;" href="http://facing.mrooms3.net/blog/edit.php?action=add/#region-main">reflect in your journal</a> on the following question:</span></p>\r\n<p><span style="font: 13.0px Arial;"><i>How would your identity chart be different if you were writing it when you were an adolescent?</i></span></p>'),
(28, 42, 1, 'Visit the Educator Resources Area of the Facing History Website', 'Your Facing History username and password give you access to all of the content in our Educator Resources section, including our publications, lessons, teaching strategies, and more. In addition, by logging in to the Facing History and Ourselves website, you can update your profile, borrow from the lending library, and create your own "educator paths" to share with students or use for planning.', 'Throughout the course we will be including direct links to resources found in the Educator Resources section within our discussion posts. However, this will only scratch the surface of what is available to you there. The Educator Resources area houses a large collection of resources designed to assist you in implementing Facing History content and pedagogy into your classroom. To conclude our orientation session, we would like to make sure you are familiar with the Facing History website by completing the following:', 2, '', '', '<div id="activity">\r\n<table style="width: 100%;" cellpadding="10" cellspacing="10" align="center" border="0">\r\n<tbody>\r\n<tr>\r\n<td style="background: #58a796;">\r\n<h1 style="text-align: center;"><span style="color: #ffffff;">Activity: Visit the Educator Resources Area of the Facing History Website<br /></span></h1>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style="background: #fffbd9;">\r\n<p><span><span style="font-size: small;"><img src="http://facing.mrooms3.net/draftfile.php/89/user/draft/773913450/student_behind_laptop.jpg" style="float: left; margin: 10px 20px;" height="173" width="231" /></span><span style="font-size: small;">Your Facing History username and password give you access to all of the content in our Educator Resources section, including our publications, lessons, teaching strategies, and more. In addition, by logging in to the Facing History and Ourselves website, you can update your profile, borrow from the lending library, and create your own "educator paths" to share with students or use for planning.<br /></span></span></p>\r\n<p><span><span style="font-size: small;">Throughout the course we will be including direct links to resources found in the Educator Resources section within our discussion posts. However, this will only scratch the surface of what is available to you there. The Educator Resources area houses a large collection of resources designed to assist you in implementing Facing History content and pedagogy into your classroom. To conclude our orientation session, we would like to make sure you are familiar with the Facing History website by completing the following:</span></span></p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<table style="border-color: #58a796; border-width: 6px; border-style: solid;" cellpadding="10" cellspacing="10" align="center">\r\n<tbody>\r\n<tr style="background: #ffffff;">\r\n<td><img style="vertical-align: text-top;" src="http://facing.mrooms3.net/draftfile.php/89/user/draft/773913450/checkbox.png" height="67" width="40" /></td>\r\n<td>\r\n<h2><span style="font-size: medium;">1. Make sure you know your Facing History username and password:</span></h2>\r\n</td>\r\n</tr>\r\n<tr style="background: #fffbd9;">\r\n<td></td>\r\n<td>\r\n<p style="margin-left: 30px;"><span style="font-size: small;">Your Facing History username is the email address through which we have been communicating with you. If you do not have a customized password already, please visit the Facing History website at <a onclick="window.open(''http://www.facinghistory.org'','''',''scrollbars=yes,resizable=yes,width=1000,height=800,left=''+(screen.availWidth/2-500)+'',top=''+(screen.availHeight/2-400)+'''');return false;" href="http://www.facinghistory.org">www.facinghistory.org</a> and click "log in" on the top right-hand corner. Fill out your username information and then click "request password" and one will be emailed to you. <em>Please note that your facinghistory.org username and password are on a separate system from your online course username and password. View your Facing History profile on the main website.</em></span></p>\r\n</td>\r\n</tr>\r\n<tr style="background: #ffffff;">\r\n<td><img src="http://facing.mrooms3.net/draftfile.php/89/user/draft/773913450/checkbox.png" style="vertical-align: text-top;" height="67" width="40" /></td>\r\n<td>\r\n<h2><span style="font-size: medium;">2. Update your Facing History and Ourselves website profile:</span></h2>\r\n</td>\r\n</tr>\r\n<tr style="background: #fffbd9;">\r\n<td></td>\r\n<td>\r\n<p style="margin-left: 30px;"><span style="font-size: small;">When you are logged in to the Facing History website, you will see a link to "My Profile" on the top right-hand corner of each page. You can verify and edit the contact information we have on file for you and also add a photo of yourself. Again, this information and photo will be in a separate system from this online course.</span></p>\r\n</td>\r\n</tr>\r\n<tr style="background: #ffffff;">\r\n<td><img src="http://facing.mrooms3.net/draftfile.php/89/user/draft/773913450/checkbox.png" style="vertical-align: text-top;" height="67" width="40" /></td>\r\n<td>\r\n<h2><span style="font-size: medium;">3. Familiarize yourself with Educator Resources:</span></h2>\r\n</td>\r\n</tr>\r\n<tr style="background: #fffbd9;">\r\n<td></td>\r\n<td>\r\n<p><span style="font-size: small;">Familiarize yourself with the Educator Resources area of the website by completing the following tasks on the Facing History and Ourselves website. When you have completed the tasks, complete the short quiz that follows:</span></p>\r\n<ol>\r\n<li style="list-style-type: none;"><ol>\r\n<li>\r\n<p><span style="font-size: small;">Find the title of a Facing History resource that is available as a free downloadable PDF.</span></p>\r\n</li>\r\n<li>\r\n<p><span style="font-size: small;">Find the Facing History office that is closest to where you live.</span></p>\r\n</li>\r\n<li>\r\n<p><span style="font-size: small;">Check out upcoming free webinars, and register if you would like! (Hint: professional development/online learning).</span></p>\r\n</li>\r\n<li>\r\n<p><span style="font-size: small;">Explore our Resource Collections. How many are there now? (Hint: resource collections).</span></p>\r\n</li>\r\n<li>\r\n<p><span style="font-size: small;">Find audio readings of some of the HHB readings. (Hint: audio &amp; podcasts).</span></p>\r\n</li>\r\n</ol></li>\r\n</ol></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<table>\r\n<tbody>\r\n<tr>\r\n<td>\r\n<p style="margin-left: 30px;"><em><strong><span style="font-size: medium;">Once you have familiarized yourself with the Educator Resources page, click on the link below to complete the Scavenger Hunt activity.</span></strong></em></p>\r\n</td>\r\n<td><iframe src="http://player.vimeo.com/video/86609495?title=0&amp;byline=0&amp;portrait=0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen="" frameborder="0" height="400" width="500"></iframe></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</div>\r\n<hr />'),
(29, 45, 1, 'Course Level Activity', 'asdfasdf', 'asdfasdf', 1, '', '', NULL),
(30, 46, 0, 'Coursebuilder''s New Activity', '', '', 1, NULL, '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `activities_resources`
--

CREATE TABLE IF NOT EXISTS `activities_resources` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `activity_id` int(10) NOT NULL,
  `resource_id` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `resource_id` (`resource_id`),
  KEY `activity_id` (`activity_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=60 ;

--
-- Dumping data for table `activities_resources`
--

INSERT INTO `activities_resources` (`id`, `activity_id`, `resource_id`) VALUES
(10, 9, 23),
(12, 7, 26),
(13, 3, 27),
(14, 12, 28),
(15, 13, 29),
(17, 13, 31),
(18, 16, 37),
(19, 16, 38),
(23, 17, 43),
(24, 17, 44),
(27, 19, 47),
(28, 19, 48),
(29, 21, 50),
(30, 21, 51),
(31, 21, 52),
(32, 21, 53),
(33, 22, 54),
(34, 22, 55),
(35, 22, 56),
(36, 23, 57),
(37, 16, 59),
(38, 16, 60),
(39, 16, 61),
(40, 16, 62),
(41, 25, 63),
(42, 25, 64),
(43, 25, 65),
(44, 26, 66),
(45, 27, 67),
(46, 27, 68),
(47, 27, 69),
(48, 27, 70),
(49, 28, 71),
(50, 28, 72),
(51, 20, 73),
(56, 12, 82),
(57, 29, 19),
(58, 29, 27),
(59, 29, 32);

-- --------------------------------------------------------

--
-- Table structure for table `activities_types`
--

CREATE TABLE IF NOT EXISTS `activities_types` (
  `id` int(10) NOT NULL,
  `activity_id` int(10) NOT NULL,
  `type_id` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `activity_id` (`activity_id`),
  KEY `type_id` (`type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `aros`
--

CREATE TABLE IF NOT EXISTS `aros` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `aros`
--

INSERT INTO `aros` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, 'Group', 3, NULL, 1, 2),
(2, NULL, 'Group', 4, NULL, 3, 4),
(4, NULL, 'Group', 6, NULL, 5, 6);

-- --------------------------------------------------------

--
-- Table structure for table `aros_acos`
--

CREATE TABLE IF NOT EXISTS `aros_acos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `aro_id` int(10) NOT NULL,
  `aco_id` int(10) NOT NULL,
  `_create` varchar(2) NOT NULL DEFAULT '0',
  `_read` varchar(2) NOT NULL DEFAULT '0',
  `_update` varchar(2) NOT NULL DEFAULT '0',
  `_delete` varchar(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `ARO_ACO_KEY` (`aro_id`,`aco_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=89 ;

--
-- Dumping data for table `aros_acos`
--

INSERT INTO `aros_acos` (`id`, `aro_id`, `aco_id`, `_create`, `_read`, `_update`, `_delete`) VALUES
(1, 1, 1, '1', '1', '1', '1'),
(2, 2, 1, '-1', '-1', '-1', '-1'),
(3, 2, 5, '1', '1', '1', '1'),
(4, 2, 3, '-1', '-1', '-1', '-1'),
(5, 2, 6, '1', '1', '1', '1'),
(6, 2, 8, '1', '1', '1', '1'),
(7, 2, 4, '1', '1', '1', '1'),
(8, 2, 19, '1', '1', '1', '1'),
(9, 2, 24, '-1', '-1', '-1', '-1'),
(10, 2, 20, '1', '1', '1', '1'),
(11, 2, 17, '1', '1', '1', '1'),
(12, 2, 23, '1', '1', '1', '1'),
(13, 2, 18, '1', '1', '1', '1'),
(14, 2, 28, '1', '1', '1', '1'),
(15, 2, 29, '1', '1', '1', '1'),
(16, 2, 26, '-1', '-1', '-1', '-1'),
(17, 2, 27, '1', '1', '1', '1'),
(18, 2, 34, '1', '1', '1', '1'),
(19, 2, 35, '1', '1', '1', '1'),
(20, 2, 32, '-1', '-1', '-1', '-1'),
(21, 2, 33, '1', '1', '1', '1'),
(22, 2, 40, '1', '1', '1', '1'),
(23, 2, 41, '1', '1', '1', '1'),
(24, 2, 38, '-1', '-1', '-1', '-1'),
(25, 2, 39, '1', '1', '1', '1'),
(26, 2, 52, '1', '1', '1', '1'),
(27, 2, 53, '1', '1', '1', '1'),
(28, 2, 50, '-1', '-1', '-1', '-1'),
(29, 2, 51, '1', '1', '1', '1'),
(30, 2, 57, '1', '1', '1', '1'),
(31, 2, 74, '1', '1', '1', '1'),
(32, 2, 75, '1', '1', '1', '1'),
(33, 2, 72, '-1', '-1', '-1', '-1'),
(34, 2, 77, '1', '1', '1', '1'),
(35, 2, 78, '1', '1', '1', '1'),
(36, 2, 73, '1', '1', '1', '1'),
(37, 2, 91, '-1', '-1', '-1', '-1'),
(38, 2, 92, '-1', '-1', '-1', '-1'),
(39, 2, 89, '-1', '-1', '-1', '-1'),
(40, 2, 96, '1', '1', '1', '1'),
(41, 2, 94, '1', '1', '1', '1'),
(42, 2, 90, '-1', '-1', '-1', '-1'),
(43, 4, 1, '-1', '-1', '-1', '-1'),
(44, 4, 5, '-1', '-1', '-1', '-1'),
(45, 4, 3, '-1', '-1', '-1', '-1'),
(46, 4, 6, '-1', '-1', '-1', '-1'),
(47, 4, 8, '1', '1', '1', '1'),
(48, 4, 4, '1', '1', '1', '1'),
(49, 4, 19, '-1', '-1', '-1', '-1'),
(50, 4, 24, '-1', '-1', '-1', '-1'),
(51, 4, 20, '-1', '-1', '-1', '-1'),
(52, 4, 17, '1', '1', '1', '1'),
(53, 4, 23, '1', '1', '1', '1'),
(54, 4, 18, '1', '1', '1', '1'),
(55, 4, 28, '-1', '-1', '-1', '-1'),
(56, 4, 29, '-1', '-1', '-1', '-1'),
(57, 4, 26, '-1', '-1', '-1', '-1'),
(58, 4, 27, '1', '1', '1', '1'),
(59, 4, 34, '-1', '-1', '-1', '-1'),
(60, 4, 35, '-1', '-1', '-1', '-1'),
(61, 4, 32, '-1', '-1', '-1', '-1'),
(62, 4, 33, '1', '1', '1', '1'),
(63, 4, 40, '-1', '-1', '-1', '-1'),
(64, 4, 41, '-1', '-1', '-1', '-1'),
(65, 4, 38, '-1', '-1', '-1', '-1'),
(66, 4, 39, '1', '1', '1', '1'),
(67, 4, 52, '-1', '-1', '-1', '-1'),
(68, 4, 53, '-1', '-1', '-1', '-1'),
(69, 4, 50, '-1', '-1', '-1', '-1'),
(70, 4, 51, '1', '1', '1', '1'),
(71, 4, 60, '-1', '-1', '-1', '-1'),
(72, 4, 61, '-1', '-1', '-1', '-1'),
(73, 4, 58, '1', '1', '1', '1'),
(74, 4, 59, '1', '1', '1', '1'),
(75, 4, 74, '-1', '-1', '-1', '-1'),
(76, 4, 75, '-1', '-1', '-1', '-1'),
(77, 4, 72, '-1', '-1', '-1', '-1'),
(78, 4, 77, '1', '1', '1', '1'),
(79, 4, 78, '1', '1', '1', '1'),
(80, 4, 73, '1', '1', '1', '1'),
(81, 4, 91, '-1', '-1', '-1', '-1'),
(82, 4, 92, '-1', '-1', '-1', '-1'),
(83, 4, 89, '-1', '-1', '-1', '-1'),
(84, 4, 96, '-1', '-1', '-1', '-1'),
(85, 4, 94, '1', '1', '1', '1'),
(86, 4, 90, '-1', '-1', '-1', '-1'),
(87, 4, 95, '1', '1', '1', '1'),
(88, 2, 95, '1', '1', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `intro` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `callnumber` varchar(10) NOT NULL,
  `master` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `title`, `intro`, `created`, `modified`, `callnumber`, `master`) VALUES
(5, 'The Universal Declaration of Human Rights', 'The Universal Declaration of Human Rights was composed in the years following World War II, a cataclysmic event marking the culmination of an era where over 90 million people perished in two world wars, two genocides, and two atomic bombings. The nations of the world had come face to face with the reality that human actions could now lead to the destruction of mankind, and this spurred the leaders of the United Nations to act. Elearnor Roosevelt, former First Lady of the United States, helped lead the initiative. In this online workshop, we will learn about the text of the UDHR as well as the ways to teach this document to your students. This was just added.', '2014-03-17 20:30:36', '2014-05-09 13:35:53', 'OS2013NAT5', 1),
(12, 'Holocaust and Human Behavior', 'The twentieth century will forever be marked by the Nazisâ€™ attempt to murder the Jews of Europe solely because of their ancestry. The events that led to the Holocaust raise profound moral questions about the consequences of our actions and our beliefs. While the Holocaust was unique, the questions remain universal. \r\n\r\nThis online workshop for educators provides content and some teaching strategies that will help students connect history to the moral questions inherent in a study not only of violence, racism, and antisemitism but also of courage, caring, and compassion. This online workshop is comprised of six one-hour sessions.  It meets the content requirements of the Holocaust and genocide-related TEKS standards.\r\n', '2014-04-15 11:25:49', '2014-05-09 14:10:55', 'OS2014NAT1', 1),
(27, 'Choices In Little Rock is fun', 'Choices in Little Rock explores the 1957 desegregation of Central High School in Little Rock, Arkansas. The online course traces the legal and personal struggles of African Americans from Jim Crow America through Brown v. Board of Education, and ultimately, to the courageous actions of nine young men and women determined to make desegregation a reality.', '2014-03-11 21:56:04', '2014-05-13 15:11:09', 'asdfadsf', 1),
(31, 'Course Level Course', 'This is the intro', '2014-05-09 12:37:23', '2014-05-13 15:20:18', 'asdfasdf', NULL),
(34, 'Texas HHB', '', '2014-05-09 14:15:44', '2014-05-09 14:15:44', 'OSTEX2014', NULL),
(35, 'Coursebuilder''s New Course', '', '2014-05-13 13:00:01', '2014-05-13 13:00:01', 'asdf', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `courses_resources`
--

CREATE TABLE IF NOT EXISTS `courses_resources` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `course_id` int(10) unsigned NOT NULL,
  `resource_id` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `course_id` (`course_id`),
  KEY `resource_id` (`resource_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `courses_users`
--

CREATE TABLE IF NOT EXISTS `courses_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course_id` int(11) unsigned NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `course_id` (`course_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `courses_users`
--

INSERT INTO `courses_users` (`id`, `course_id`, `user_id`) VALUES
(1, 27, 1),
(2, 12, 2),
(6, 31, 3),
(7, 35, 3);

-- --------------------------------------------------------

--
-- Table structure for table `discussions`
--

CREATE TABLE IF NOT EXISTS `discussions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `intro` text,
  `prompt` text,
  `activity_id` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `activity_id` (`activity_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=43 ;

--
-- Dumping data for table `discussions`
--

INSERT INTO `discussions` (`id`, `title`, `intro`, `prompt`, `activity_id`) VALUES
(6, 'New Discussion Booyah', 'This is my intro', 'This is my prompt', 3),
(11, 'A Discussion for a New Activity', 'There are many discussion questions that you can ask about. However, when it comes to asking really good discussion questions, there are a lot of things that can go wrong.', 'In your opinion, why is it so difficult to ask discussion questions that are really provocative and which get people''s attention?', 3),
(20, 'This is my discussion for this activity.', '$this->redirect(array(''controller''=>''activities'', ''action'' => $sectionid));$this->redirect(array(''controller''=>''activities'', ''action'' => $sectionid));$this->redirect(array(''controller''=>''activities'', ''action'' => $sectionid));$this->redirect(array(''controller''=>''activities'', ''action'' => $sectionid));$this->redirect(array(''controller''=>''activities'', ''action'' => $sectionid));', '$this->redirect(array(''controller''=>''activities'', ''action'' => $sectionid));$this->redirect(array(''controller''=>''activities'', ''action'' => $sectionid));$this->redirect(array(''controller''=>''activities'', ''action'' => $sectionid));$this->redirect(array(''controller''=>''activities'', ''action'' => $sectionid));$this->redirect(array(''controller''=>''activities'', ''action'' => $sectionid));', 7),
(21, 'This is another discussion for this activity', '$this->redirect(array(''controller''=>''activities'', ''action'' => $sectionid));$this->redirect(array(''controller''=>''activities'', ''action'' => $sectionid));$this->redirect(array(''controller''=>''activities'', ''action'' => $sectionid));$this->redirect(array(''controller''=>''activities'', ''action'' => $sectionid));$this->redirect(array(''controller''=>''activities'', ''action'' => $sectionid));$this->redirect(array(''controller''=>''activities'', ''action'' => $sectionid));', '$this->redirect(array(''controller''=>''activities'', ''action'' => $sectionid));$this->redirect(array(''controller''=>''activities'', ''action'' => $sectionid));$this->redirect(array(''controller''=>''activities'', ''action'' => $sectionid));$this->redirect(array(''controller''=>''activities'', ''action'' => $sectionid));$this->redirect(array(''controller''=>''activities'', ''action'' => $sectionid));$this->redirect(array(''controller''=>''activities'', ''action'' => $sectionid));', 7),
(22, 'This Discussion was added from the Session page', '$this->redirect(array(''controller''=>''activities'', ''action'' => $sectionid));$this->redirect(array(''controller''=>''activities'', ''action'' => $sectionid));$this->redirect(array(''controller''=>''activities'', ''action'' => $sectionid));$this->redirect(array(''controller''=>''activities'', ''action'' => $sectionid));$this->redirect(array(''controller''=>''activities'', ''action'' => $sectionid));$this->redirect(array(''controller''=>''activities'', ''action'' => $sectionid));', '$this->redirect(array(''controller''=>''activities'', ''action'' => $sectionid));$this->redirect(array(''controller''=>''activities'', ''action'' => $sectionid));$this->redirect(array(''controller''=>''activities'', ''action'' => $sectionid));$this->redirect(array(''controller''=>''activities'', ''action'' => $sectionid));$this->redirect(array(''controller''=>''activities'', ''action'' => $sectionid));$this->redirect(array(''controller''=>''activities'', ''action'' => $sectionid));', 7),
(23, '"What Do We Do With a Variation?"', 'Finally, enter the discussion about "What Do We Do with a Variation?" In this discussion forum, you will think about the differences you experience on a daily basis and why they matter.', 'What differences matter in your classroom, in your school, or at your own dinner table? How do the tensions of creating a community play out in your classroom or other educational environments?', 9),
(24, 'The Second Discussion', 'This is the second discussion for this activity. It''s really great and I really hope you like it.', 'This is the second discussion for this activity. It''s really great and I really hope you like it.This is the second discussion for this activity. It''s really great and I really hope you like it.This is the second discussion for this activity. It''s really great and I really hope you like it.This is the second discussion for this activity. It''s really great and I really hope you like it.This is the second discussion for this activity. It''s really great and I really hope you like it.This is the second discussion for this activity. It''s really great and I really hope you like it.', 4),
(28, 'The First DIscussion', 'asd;flkajs;dflkajsf;dlkasjdf;laksjf', 'as;dlfkja;slfdkja;sflkjas;dlfkjas;dflkjas;fldkajs;fdlkjas;fdlkajsd;f', 4),
(29, 'Discussion on Choices Students Made', 'Please share one of the words, phrases, or sentences you wrote down from either the video clip, readings, or web pages, and answer the following questions:', '\r\n    What does this word or phrase say about the choices students made? Why do you think the student(s) made those choices? What were the consequences of those choices? ', 12),
(30, 'Core Group 1 Discussion', 'In a few sentences, give one example of the choices made by one of the individuals highlighted in your expert group. (Keep this description brief.)', 'Why do you think he or she made that choice?\r\nWhat impact did it have? \r\nWhat were the consequences of that choice?\r\n', 13),
(31, 'Core Group 2 Discussion', 'In a few sentences, give one example of the choices made by one of the individuals highlighted in your expert group. (Keep this description brief.)', 'Why do you think he or she made that choice?\r\nWhat impact did it have? \r\nWhat were the consequences of that choice?', 13),
(32, 'Core Group 3 Discussion', 'In a few sentences, give one example of the choices made by one of the individuals highlighted in your expert group. (Keep this description brief.)', 'Why do you think he or she made that choice? What impact did it have? What were the consequences of that choice?', 13),
(34, 'Most Influential Factor in Hitler''s Rise', 'For this brief discussion forum, you will answer the following question:', 'What was the most important or influential factor that helped Hitler and the Nazi Party dismantle democracy and turn Germany into a totalitarian and "racial" state? Explain your selection.\r\n', 15),
(35, 'Discussion: Warriors Don''t Cry', 'Melba Pattillo Beals''s award-winning account of her experiences as one of the Little Rock Nine is a wonderful resource for the classroom. Just as the personal recollections of Elizabeth Eckford help bring this history to life, reading Beals''s perspective is especially powerful for our students who are around the same age as she was in 1957.', 'Having read Warriors Don''t Cry, please respond to the following prompts:\r\n\r\n    As you read this book, which passages illuminate the range of choices people made that had an impact on Beals''s experience?\r\n\r\n    If you have previously taught this book, which passages and aspects have been most effective and engaging for your students, and why?\r\n', 18),
(36, 'Deconstructing an Image', 'In the subject line of your post, write a headline that a newspaper might have used to go along with your interpretations. Then, answer the following questions:\r\n', 'This is an editorial image by the photographer. He has a point of view and is trying to tell you something through this photograph. What is he trying to tell you?\r\n    Please add some of your interpretations of the image as a whole: What do you think is happening in this photo? What visual clues from the photo give you this impression?', 19),
(37, 'Discussion on Pedagogy', 'In this session, you learned about the desegregation of Central High School in 1957. The history was presented through text, video, a timeline of key events, and the voices and personal testimony of Elizabeth Eckford, Melba Pattillo Beals, and Terrence Roberts of the Little Rock Nine. ', 'For our final discussion, let''s put on our "teacher hats" to have a conversation about effective ways to teach history:\r\n\r\n    Pedagogically, what is the benefit of taking the time to go deeper into a particular moment in history?\r\n\r\n    What is the benefit of using primary source documents?\r\n\r\n    And what is the benefit of using personal testimonies to teach history?\r\n', 20),
(38, 'Weimar Republic and the Failure of Democracy', 'Please take a moment to respond to the following questions and review some of the responses of other participants.', '\r\n    What portrait of Weimar society emerges from these documents?\r\n\r\n    What questions are raised for you about the failure of democracy?\r\n', 21),
(39, 'Deconstructing Images in the Classroom', 'Deconstructing images is a great strategy for helping students develop awareness of historical context, hone their critical thinking skills (particularly in regards to visual images), and enhance their observation and interpretive skills\r\n    Develop conceptual learning techniques\r\n', 'In this discussion forum, comment on the strategy of using image deconstruction in the classroom. Have you used this technique in the past, and if so, how? If not, how might you use visual images in your own classroom setting? Explain.', 22),
(40, 'Discussion: Introductions', 'Now youâ€™re ready to familiarize yourself with the Group Discussion area by posting a message and responding to at least two of the other course participants. You will be responding to the following question to get us started:', '<a target="_blank" href="http://facing.mrooms3.net/blog/index.php?userid=2/#region-main">From your journal entry</a>, please share with the group something about your name.', 24),
(41, 'Fostering a Reflective Classroom', 'In this activity, you have learned about the challenges and rewards of building a reflective community in your classroom.', 'What feels similar or different about an online reflective classroom? And, what do you think is the most important aspect to make our online conversations successful?', 25),
(42, 'Sharing of Identity Charts', 'In this forum, you will share your identity charts with the other participants in the course.', 'There are several ways to share:\r\n<ul>\r\n<li>Uploading the images of their identity charts that they have created</li>\r\n<li>Creating links to third party tools you have used to create identity charts</li>\r\n<li>Creating Text-Only Identity Charts</li>\r\n</ul>\r\n**Please feel free to be as adventurous or as non-adventurous as you would like for this activity. In other words, use the method that you feel most comfortable with. Don''t worry if you aren''t sure how to "Upload a File" !\r\n\r\n**Note: For guidelines about communicating in our online discussion forums, please look at the resource, "Guidelines for Online Discussions"', 27);

-- --------------------------------------------------------

--
-- Table structure for table `essentialQuestions`
--

CREATE TABLE IF NOT EXISTS `essentialQuestions` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `section_id` int(10) NOT NULL,
  `question` varchar(400) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `section_id` (`section_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Dumping data for table `essentialQuestions`
--

INSERT INTO `essentialQuestions` (`id`, `section_id`, `question`) VALUES
(2, 10, 'Why is the sky blue? What if it were green instead?'),
(4, 10, 'Why are the children in the yard screaming bloody murder?'),
(5, 16, 'What happened at Central High School in Little Rock, Arkansas, in 1957?'),
(6, 16, 'What can we learn from the actions taken by the Little Rock Nine that inform us about the challenges of maintaining and preserving a democracy?'),
(25, 10, 'What is the answer to this question?'),
(28, 12, 'What will be the first essentail question for session 2?'),
(29, 12, 'What will be the second essentail question for session 2?'),
(30, 12, 'What will be the first essential question for session 2?'),
(31, 40, 'How do the choices people make, individually and collectively, shape a society?'),
(32, 40, 'How did the people of Little Rock determine what was at stake, and how did that shape the choices they made?'),
(33, 40, 'What are the challenges and opportunities we face as educators when we bring discussions about race into our classrooms?'),
(34, 42, 'What is Facing History and Ourselves?'),
(35, 42, 'How will this course connect me to the larger Facing History community?'),
(36, 42, 'How will we build a community of learners within the course?'),
(37, 16, 'Pedagogically, what is the benefit of taking the time to go deeper into a particular moment in history? And what is the benefit of using personal testimonies to teach history?'),
(38, 16, 'What is the benefit of using personal testimonies to teach history? (Twitter)'),
(39, 43, 'What were the conditions under which the Weimar democracy came about after the German defeat in World War I (1914-1918)?'),
(40, 43, 'Which factors influenced the choices individuals and groups made during the Weimar Republic?'),
(41, 43, 'What are some of the factors and events in a society that put democracy at risk?'),
(42, 42, 'What is the Facing History Scope and Sequence, and how is it taught in this course?');

-- --------------------------------------------------------

--
-- Table structure for table `goals`
--

CREATE TABLE IF NOT EXISTS `goals` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `activity_id` int(10) NOT NULL,
  `goal` varchar(155) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `activity_id` (`activity_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `goals`
--

INSERT INTO `goals` (`id`, `activity_id`, `goal`) VALUES
(1, 3, 'The first goal is to figure out what the other goals should be.'),
(2, 3, 'The second goal is to figure out how to implement this goal in the first place.'),
(12, 4, 'Third Goal is really great. It really is.'),
(16, 3, 'The third goal is to figure out why I''m creating a third goal in the first place.'),
(17, 9, 'To learn about Professor Appiah and some of his views'),
(18, 9, 'To learn more about Facing History and Ourselves'),
(19, 9, 'To become aquainted with the type of videos we will watch in this course.'),
(26, 4, 'The fourth goal is even better.'),
(27, 12, 'You will better understand the students'' points of view by considering the choices they made during the 1957-1958 school year'),
(28, 13, 'To work together to figure out the jigsaw'),
(29, 13, 'To avoid getting snipped in half by the jigsaw'),
(32, 15, ' To learn  about nazi propaganda'),
(33, 15, 'To learn about nazi propaganda '),
(34, 22, 'Explore the teaching strategy of deconstructing images as a means of helping students develop awareness of historical context'),
(35, 22, 'Apply image deconstruction as a means of building critical thinking skills and enhancing observational and interpretive skills'),
(36, 22, 'Develop conceptual learning and teaching techniques');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `created`, `modified`) VALUES
(3, 'Admin', '2014-05-09 08:49:28', '2014-05-09 08:49:28'),
(4, 'Coursebuilders', '2014-05-09 08:49:34', '2014-05-09 08:49:34'),
(6, 'Reviewers', '2014-05-09 08:49:43', '2014-05-09 08:49:43');

-- --------------------------------------------------------

--
-- Table structure for table `overviews`
--

CREATE TABLE IF NOT EXISTS `overviews` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `section_id` int(10) DEFAULT NULL,
  `paragraph` text,
  PRIMARY KEY (`id`),
  KEY `section_id` (`section_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `overviews`
--

INSERT INTO `overviews` (`id`, `section_id`, `paragraph`) VALUES
(2, 12, 'A Facing History and Ourselves journey begins with an examination of individual identity: what are the forces and influences that shape who we are and how we think about ourselves? In Session 2, we focus on how an individual''s identity impacts the choices one may or may not make.'),
(4, 12, 'This is paragraph 2. I really like this as well. It was a great paragraph and it was very short, but now I have added some new words to the paragraph and it''s much longer. This is a bit long than it was even before this.'),
(6, 10, 'Romeo and Juliet is a tragedy written by William Shakespeare early in his career about two young star-crossed lovers whose deaths ultimately reconcile their feuding families. It was among Shakespeare''s most popular plays during his lifetime and, along with Hamlet, is one of his most frequently performed plays. Today, the title characters are regarded as archetypal young lovers. They are great.'),
(14, 10, 'The first session of Choices in Little Rock will provide an orientation for you as an online learner. In this session, you will begin by setting up your user profile on the Facing History and Ourselves website and familiarizing yourself with the treasure trove of educational resources that are now available to you as a Facing History educator. You will then create and share an identity chart about yourself and read two short selections that explore key ideas of identity, race, and community. Finally, you will interact with your fellow course participants through the discussion forum.'),
(15, 12, 'I really like this paragraph. It starts with a topic sentence, which is a compound sentence. Next, it goes to the first supporting detail of the paragraph, which supports the topic sentence. Finally, it resolves to tell you what is the final important detail of the paragraph. I really like it very very much.'),
(16, 40, 'History is not inevitable, and whether we are bystanders or upstanders, we are all players in history. In this session, we will consider and discuss the choices made by different groups and individuals who played a part in the desegregation of Little Rock Central High School. The knowledge we have gained thus far in this seminar concerning the history of race and racism in America will provide crucial context as we consider the historical factors and influences that led to those choices.'),
(17, 40, 'How do the choices people make, individually and collectively, shape a society? Why did the people of Little Rock and others involved in this history do what they did, and what impact did their actions have? Our first two activities will explore these questions. We will first look at the choices made by students of Central High School, both black and white. Of course, the players in this history include not only the Little Rock Nine and their classmates but also the citizens of Little Rock, teachers, elected officials, and many others. In the jigsaw activity, we will explore choices made by three different groups: leaders, the media, and community members.'),
(18, 40, 'At this point in our course, we have explored the history of Jim Crow America, the desegregation of Central High School, and the choices made by individuals and groups who played a role in that history. For many of us, talking about raceâ€”even among our peersâ€”can be challenging and emotionally charged. This should not surprise us, given the deep-rooted history of race and racism in the United States that we have been studying. Confronting this history, as individuals and as a nation, is the right thing to do. And yet, if such a task feels daunting on a personal level, it may feel even more so to bring these discussions into our classrooms.'),
(19, 40, 'In the final assignments this week, we will step back from that history and pause to consider the challenges and opportunities we face as educators when we bring discussions about race and difficult histories into our classrooms.\r\n\r\n'),
(20, 40, 'For more activities and further exploration of the themes covered in this session, see Choices in Little Rock: A Facing History and Ourselves Teaching Guide, "Part 3: Choices in Little Rock."'),
(24, 16, 'In previous sessions, we looked at the intersection between identity and race. We explored the history of Jim Crow America, when U.S. federal and state laws supported the subordination of African Americans. And we considered hard-fought efforts and well-considered strategies to bring down this oppressive system, efforts that would eventually lead to Brown v. Board of Education. That decision would overturn fifty years of "separate but equal" (Plessy v. Ferguson) as it applied to public schools.'),
(25, 16, 'In this session, we will jump ahead three years after the Brown decision, to September, 1957, when nine courageous African American students attempted to desegregate Central High School in Little Rock, Arkansas, and found themselves in the spotlight of an entire nation. These studentsâ€”along with their familiesâ€”made difficult choices not to stand by in the face of injusticeâ€”choices that put them and their loved ones at risk of verbal and physical attacks.'),
(26, 16, 'This session will first present a historical overview through readings, video clips, and a timeline. We will then move to personal testimonies from some of the Little Rock Nine. Although it is crucial to investigate primary source documents and study the facts, figures, and images of historical events, it is also important to look at personal stories and testimonies of those who played a part, as this brings to life this history in a powerful way. When we study oppression on such a large scale, it can be difficult to connect with literally generations of victims. But when we (and our students) look deeply into the story of just one human being who played a part in that historyâ€”her passions, despairs, struggles, relationshipsâ€”we begin to "connect the dots" between the history we are studying, what that history meant to real human beings, and our own lives. Keep this in mind as we hear from three of the Little Rock Nine: Elizabeth Eckford, Melba Pattillo Beals and Terrence Roberts.'),
(27, 16, 'We will end the session with a conversation about classroom applications of the materials we have expored, reflecting on our roles as educators and the challenges and opportunities that are implicit in that role. Together, we will consider ways to most effectively present this history to our students.\r\n\r\n'),
(28, 16, 'For more activities and further exploration of the themes covered in this session, see Choices in Little Rock: A Facing History and Ourselves Teaching Guide--Part 3: Choices in Little Rock.'),
(29, 43, 'The case study of the Weimar Republic in post-World War I Germany (1919-1933) and the rise of the Nazis illuminates basic issues in 20th-century history that are integral to the Facing History program. To study Weimar is to examine societal conditions that put democracy at risk and contributed to its failure. It is critical to examine how decisions by individuals at every level were being made; how everyday choices were being presented and confronted; and how messages of hatred, racism, and antisemitism that were initially put forth by fringe groups eventually penetrated and dominated mainstream thinking.'),
(30, 43, 'Yet just as the divisions between we and they were increasing and democracy was failing, at the same time the Weimar Republic was bursting with new intellectual and artistic creativity and innovation. This session will use a variety of materials to illustrate this vibrancy and also build historical skills of examining a range of sources to evaluate evidence and acquire understandings. Facing History teachers further utilize this case study to explore parallels to nations in the world today and warning signs that should be noted for the building and sustaining of current and future democracies. Although no two historical events are ever identical, and making simple and superficial comparisons is always a risky endeavor, it is important to identify and analyze the echoes and legacies of this history that are evident today.'),
(31, 43, '(For a more extensive examination of these issues, see our resource book, <em>Facing History and Ourselves: Holocaust and Human Behavior</em>, Chapter 3.)'),
(32, 43, '<hr/>\r\n<small>Helen Fein, <em>Accounting for Genocide</em> (Free Press), 1979, p. 4.</small>'),
(33, 42, '<p>Welcome to the first session of Facing History and Ourselves'' <em>Holocaust and Human Behavior</em> online course. This course is based around our core work, <em>Facing History and Ourselves: Holocaust and Human Behavior (576 pages)</em>, which provides an interdisciplinary approach to citizenship education. Students move from thought to judgment to participation as they confront the moral questions inherent in a study of violence, racism, antisemitism and bigotry. The readings and activities explore the consequences of discrimination, racism, and antisemitism by holding up "the tarnished mirror of history" to one of the most violent times in world history -- the 1930s and 1940s.</p>'),
(34, 42, '<p>As students read and reflect, they investigate the forces that undermined democracy in Germany, betrayed a generation of young people, and ultimately led to the Holocaust. In doing so, students discover that many of those forces threaten our own society today. The book then helps students discover how their decisions can make a positive difference in their community, nation and the world. </p>\r\n'),
(35, 42, '<p>This first session will focus around the conventions of learning online in the context of a Facing History seminar. The online environment presents many interesting strengths and challenges when compared to the face-to-face learning environment, and this first session will serve to get you acclimated to this environment. In subsequent sessions, we will delve more deeply into the content of the seminar.</p>'),
(36, 16, 'I have added a paragraph');

-- --------------------------------------------------------

--
-- Table structure for table `resources`
--

CREATE TABLE IF NOT EXISTS `resources` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `type_id` int(10) DEFAULT NULL,
  `path` varchar(1300) DEFAULT NULL,
  `brightcove` int(13) DEFAULT NULL,
  `description` text,
  `note` text,
  `html` text,
  PRIMARY KEY (`id`),
  KEY `type_id` (`type_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=83 ;

--
-- Dumping data for table `resources`
--

INSERT INTO `resources` (`id`, `title`, `type_id`, `path`, `brightcove`, `description`, `note`, `html`) VALUES
(19, 'Resource For Session 10', 1, 'http://www.espn.go.com', NULL, 'Section 10', 'Section 10', NULL),
(20, 'Section 10 Activity 4', 2, 'Section 10 Activity 4', NULL, 'Section 10 Activity 4', 'Section 10 Activity 4', NULL),
(21, 'Section 10 Activity 7', 4, 'Section 10 Activity 7', NULL, 'Section 10 Activity 7 is great', 'Section 10 Activity 7', NULL),
(23, 'CNN Homepage', 12, 'http://www.cnn.com', NULL, 'If you want to find out information on the disappearance of Malaysian Airlines Flight 370, this is the place you want to go. A very good, full-service news site that has been accused of being left-wing biased.', 'This is just a placeholder for a real resource. I wouldn''t put the CNN homepage as a normal resource in a course or an activity.', NULL),
(25, 'Session Level Resource', 8, 'http://www.facinghistory.org', NULL, 'asfdasdfasdf', 'asdfasdfasdf', NULL),
(26, 'A Pivotal Moment in the Civil Rights Movement Lesson 1', 6, '8760947-A-Pivotal-Moment-in-the-Civil-Rights-Movement-The-Murder-of-Emmett-Till-Lesson-1.pdf', NULL, 'A rich understanding of ourselves and history includes understanding why certain events carry special significance as "pivotal" moments-moments that change the direction of attitudes, customs, and actions. In this lesson, students begin to explore how Emmett Till''s murder became a pivotal moment in civil rights history through understanding the choices made by individuals and groups and the consequences of those choices. This lesson also helps students think about the pivotal moments in their own lives and to consider the different ways people respond to violence and injustice today.', 'This lesson is part of the following unit:\r\nA Pivotal Moment in the Civil Rights Movement: The Murder of Emmett Till  (https://www.facinghistory.org/resources/units/a-pivotal-moment-civil-rights-move)', NULL),
(27, 'Union College Website', 12, 'http://www.union.edu', NULL, 'This is the homepage for union college. Right now, Union is in the NCAA Frozen Four facing Boston College in the semi-final game. The score right now is 1-0 BC, but the game is still early. It looks like we''re being outplayed right now, but we still have a chance to come back', 'This is a placeholder resource for this activity and will be replaced.', NULL),
(28, 'Choices in Little Rock: A Facing History and Ourselves Teaching Guide', 10, 'https://www.facinghistory.org/for-educators/educator-resources/resources/choices-little-rock', NULL, 'In Part 3, Lesson 4: "The Choices the Students Made," read the following student accounts: Georgia Dortch and Jane Emery (bottom of p. 103), Jim Eison (p. 108â€“110), Link (p. 115â€“116), and Jane Emery (p. 116).', '', NULL),
(29, 'The Choices Leaders Made', 10, 'http://facing.mrooms3.net/course/view.php?id=49&pageid=941', NULL, 'For 17 days, the Arkansas National Guard kept the Little Rock Nine from entering Central High. During that period, a number of people tried to resolve the crisis. Both those who favored integration and those who opposed it saw the crisis as a constitutional issueâ€”a question of federalism. Does a governor or any other state official have the right to disobey a decision issued by the U.S. Supreme Court?', '', NULL),
(31, 'Choices Citizens Made', 10, 'http://facing.mrooms3.net/course/view.php?id=49&pageid=939', NULL, 'Little Rock was considered a moderate Southern city. Libraries, parks, and public buses had all been integrated without a fight. Yet, throughout the 1950s, life in the city was becoming more and more separate. The new neighborhoods that sprang up west of the downtown area after World War II were all-white communities. African Americans lived mainly in the east and southeast parts of the city. As the population on the west side grew, a new high school was built there. Hall High School opened as an all-white school the same year Central High School was desegregated. That decision angered many white families who lived in the Central High School district. They saw the new school as a way of protecting the wealthiest families in Little Rock from integration, while forcing it on middle-class and working-class white families.', '', NULL),
(32, 'Oprah: The Little Rock Nine Forgive Their Tormentors', 11, 'https://www.youtube.com/watch?v=SAsh_PDr1cc&feature=youtu.be', NULL, 'In the late ''50s at Little Rock Central High School, the first group of African-American students integrated into the school faced torment from many of their white classmates. Nearly 40 years later, members of the Little Rock Nine came face-to-face with some of their bullies. Watch as one of those bullies asks forgiveness on Oprah''s stage. Plus, see why Oprah says that moment took courage and reflected one of the main messages of "The Oprah Winfrey Show."', '', NULL),
(33, '"Choices People Made: Elected Leaders"', 6, 'https://www.facinghistory.org/for-educators/educator-resources/resource-collections/choosing-to-participate/choices-people-made-elected-lead', NULL, 'This timeline describes the stand taken by Arkansas Governor Orval Faubus in September, 1957. According to Faubus, Arkansas was to be considered "an occupied territory."', '', NULL),
(34, 'Choices People Made: White Citizens of Little Rock', 6, 'https://www.facinghistory.org/for-educators/educator-resources/resource-collections/choosing-to-participate/choices-people-made-white-citize', NULL, 'This timeline describes choices made by the white citizens of Little Rock, including religious leaders and ordinary citizens.', '', NULL),
(35, 'Choices People Made: Public Servants ', 10, 'https://www.facinghistory.org/for-educators/educator-resources/resource-collections/choosing-to-participate/choices-people-made-public-serva', NULL, 'When Governor Faubus withdrew the Arkansas National Guard from Central High, Woodrow Mann, the mayor of Little Rock, asked the fire chief to use fire trucks and high-pressure hoses to control the mob. The chief refused. Mann then called the chief of police for help. He told the mayor he was ill and could not get involved. Next Mann turned to Eugene Smith, the assistant police chief. He said he would personally head the police force the next morning.', '', NULL),
(37, 'Student Voice: Jonathan Lykes, Facing History Student', 11, 'http://bcove.me/s81z9cke', 2147483647, 'Student and Poet Jonathan Lykes gives a poetic accont of Facing History and Ourselves'' meaning for him.', '', '<object id="flashObj" width="486" height="537" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,47,0"><param name="movie" value="http://c.brightcove.com/services/viewer/federated_f9?isVid=1&isUI=1" /><param name="bgcolor" value="#FFFFFF" /><param name="flashVars" value="videoId=3024552493001&playerID=1618550244001&playerKey=AQ~~,AAABYEdBaAk~,1dGnVytVBSxfjd3-9uew3O6eYAhpizaC&domain=embed&dynamicStreaming=true" /><param name="base" value="http://admin.brightcove.com" /><param name="seamlesstabbing" value="false" /><param name="allowFullScreen" value="true" /><param name="swLiveConnect" value="true" /><param name="allowScriptAccess" value="always" /><embed src="http://c.brightcove.com/services/viewer/federated_f9?isVid=1&isUI=1" bgcolor="#FFFFFF" flashVars="videoId=3024552493001&playerID=1618550244001&playerKey=AQ~~,AAABYEdBaAk~,1dGnVytVBSxfjd3-9uew3O6eYAhpizaC&domain=embed&dynamicStreaming=true" base="http://admin.brightcove.com" name="flashObj" width="486" height="537" seamlesstabbing="false" type="application/x-shockwave-flash" allowFullScreen="true" allowScriptAccess="always" swLiveConnect="true" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash"></embed></object>'),
(38, '"Any Questions?" How Facing History and Ourselves Works', 11, 'http://bcove.me/9dq8o4pd', 2147483647, 'Facing History and Ourselves teaches students to think for themselves and widen their perspectives. This video tells the story of what we do, how we do it, and the many ways that you can take part.', 'This is a Brightcove Resource. The Embed Code is in the Description (click Edit then copy and paste)', '<!-- Start of Brightcove Player --> <div style="display: none;"></div> <!-- By use of this code snippet, I agree to the Brightcove Publisher T and C  found at https://accounts.brightcove.com/en/terms-and-conditions/.  --> <script src="http://admin.brightcove.com/js/BrightcoveExperiences.js" type="text/javascript"></script> <object id="myExperience3067126507001" class="BrightcoveExperience"><param name="bgcolor" value="#FFFFFF" /><param name="width" value="560" /><param name="height" value="315" /><param name="playerID" value="2083241027001" /><param name="playerKey" value="AQ~~,AAABYEdBaAk~,1dGnVytVBSw9Y4yoko71XnFgkvpqea1-" /><param name="isVid" value="true" /><param name="isUI" value="true" /><param name="dynamicStreaming" value="true" /><param name="@videoPlayer" value="3067126507001" /></object> <!--  This script tag will cause the Brightcove Players defined above it to be created as soon as the line is read by the browser. If you wish to have the player instantiated only after the rest of the HTML is processed and the page load is complete, remove the line. --> <script type="text/javascript">// <![CDATA[ brightcove.createExperiences(); // ]]></script><!-- End of Brightcove Player -->'),
(40, 'Choices in Little Rock: A Facing History and Ourselves Teaching Guide--Part 3: Choices in Little Rock.', 10, 'https://www.facinghistory.org/for-educators/educator-resources/resources/choices-little-rock', NULL, 'Choices in Little Rock  is a teaching unit that focuses on efforts to desegregate Central High School in Little Rock, Arkansas, in 1957â€”efforts that resulted in a crisis that historian Taylor Branch once described as "the most severe test of the Constitution since the Civil War."\r\n\r\nThe unit explores civic choicesâ€”the decisions people make as citizens in a democracy. Those decisions, both then and now, reveal that democracy is not a product but a work in progress, a work that is shaped by the choices that we make about ourselves and others. Although those choices may not seem important at the time, little by little, they define an individual, delineate a community, and ultimately distinguish a nation. Those choices build on the work of earlier generations and leave legacies for those to come.\r\n', '', NULL),
(43, 'U.S. National Park Service: Oral History: LIttle Rock Central High School National Historic Site', 11, 'http://www.nps.gov/chsc/historyculture/oral-history.htm', NULL, '', 'Watch the second clip: "State and Federal Involvement"', NULL),
(44, 'Timeline: Little Rock 1957', 6, 'http://www.stevebresnick.com/choices/', NULL, 'As an overview of the developments of this period in history, you will review a timeline of the events from 1957, the year schools were desegregated in Little Rock.', '', NULL),
(47, 'Elizabeth Eckford Attempts To Enter Central High School ', 12, 'http://fedora.dlib.indiana.edu/fedora/get/iudl:703665/LARGE', NULL, 'This image shows an angry mob surrounding Elizabeth Eckford, a member of the Little Rock Nine, as she attempts to enter Little Rock Central High School as a student for the first time in 1957. This photo is part of the Will Counts Collection at Indiana University.', '', NULL),
(48, 'Will Counts Collection: Indiana University Archives', 12, 'http://webapp1.dlib.indiana.edu/archivesphotos/counts.jsp', NULL, '', '', NULL),
(49, 'Ben Gross Intro Video', 11, 'http://youtu.be/j_oyzDdBqdY', NULL, 'Ben''s intro video', 'Privte notes', NULL),
(50, 'Facing History''s Weimar Republic Online Module', 12, 'https://www.facinghistory.org/weimar', NULL, 'A rich collection of history, artwork, primary documents, and biographies documents the creativity and catastrophe of Germanyâ€™s Weimar Republic (1919-1933). How did individual choices shape the events that led to the rise of the Third Reich and collapse of democracy?', '<div id="explore_weimar">\r\n<h1 style="text-align: center;">Exploration of Facing History''s Weimar Republic online module</h1>\r\n<table align="center" border="0">\r\n<tbody>\r\n<tr>\r\n<td>\r\n<p><span style="font-size: small;">1. Go to <a target="_blank" onclick="window.open(''http://weimar.facinghistory.org/'','''',''scrollbars=yes,resizable=yes,width=1000,height=600,left=''+(screen.availWidth/2-500)+'',top=''+(screen.availHeight/2-300)+'''');return false;" href="http://weimar.facinghistory.org/">Facing History''s Weimar Republic website</a>. </span></p>\r\n<p><img src="http://facing.mrooms3.net/draftfile.php/89/user/draft/66077608/weimar_microsite.png" style="margin: 20px auto; display: block;" height="407" width="721" /></p>\r\n</td>\r\n<td></td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p><span style="font-size: small;">2. Click on the "Weimar Personalities" tab and select one person from the following list to read about:</span></p>\r\n<p><img src="http://facing.mrooms3.net/draftfile.php/89/user/draft/66077608/arbieter-Hitler.png" style="float: right;" class="choicesshadow" height="306" width="200" /></p>\r\n<ul>\r\n<li style="list-style-type: none;">\r\n<ul>\r\n<li>\r\n<p><a href="https://www.facinghistory.org/weimar-republic-fragility-democracy/personalities/adolf-hitler-1889-1945-personalities" target="_blank"><span><b>Adolf Hitler (1889-1945)</b></span></a></p>\r\n</li>\r\n<li>\r\n<p><a href="https://www.facinghistory.org/weimar-republic-fragility-democracy/personalities/bernard-lichtenberg-1875-1943-personalities" target="_blank"><span><b>Bernard Lichtenberg (1875-1943)</b></span></a></p>\r\n</li>\r\n<li>\r\n<p><a href="https://www.facinghistory.org/weimar-republic-fragility-democracy/personalities/bertha-pappenheim-1859-1936-personalities" target="_blank"><span><b>Bertha Pappenheim (1859-1936)</b></span></a></p>\r\n</li>\r\n<li>\r\n<p><a href="https://www.facinghistory.org/weimar-republic-fragility-democracy/personalities/friedrich-ebert-1871-1925-personalities" target="_blank"><span><b>Friedrich Ebert (1871-1925)</b></span></a></p>\r\n</li>\r\n<li>\r\n<p><a href="https://www.facinghistory.org/weimar-republic-fragility-democracy/personalities/fritz-lang-1890-1976-personalities" target="_blank"><span><b>Fritz Lang (1890-1976)</b></span></a></p>\r\n</li>\r\n<li>\r\n<p><a href="https://www.facinghistory.org/weimar-republic-fragility-democracy/personalities/george-grosz-1893-1959-personalities" target="_blank"><span><b>George Grosz (1893-1959)</b></span></a></p>\r\n</li>\r\n<li>\r\n<p><a href="https://www.facinghistory.org/weimar-republic-fragility-democracy/personalities/gustav-stresemann-1878-1929-personalities" target="_blank"><span><b>Gustav Stresemann (1878-1929)</b></span></a></p>\r\n</li>\r\n<li>\r\n<p><a href="https://www.facinghistory.org/weimar-republic-fragility-democracy/personalities/julius-streicher-1885-1946-personalities" target="_blank"><span><b>Julius Streicher (1885-1946)</b></span></a></p>\r\n</li>\r\n<li>\r\n<p><a href="https://www.facinghistory.org/weimar-republic-fragility-democracy/personalities/k%C3%A4the-kollwitz-1867-1945-personalities" target="_blank"><span><b>KÃ¤the Kollwitz (1867-1945)</b></span></a></p>\r\n</li>\r\n<li>\r\n<p><a href="https://www.facinghistory.org/weimar-republic-fragility-democracy/personalities/kurt-tucholsky-1890-1935-personalities" target="_blank"><span><b>Kurt Tucholsky (1890-1935)</b></span></a></p>\r\n</li>\r\n<li>\r\n<p><a href="https://www.facinghistory.org/weimar-republic-fragility-democracy/personalities/maximilian-harden-1861-1927-personalities" target="_blank"><span><b>Maximilian Harden (1861-1927)</b></span></a></p>\r\n</li>\r\n<li>\r\n<p><a href="https://www.facinghistory.org/weimar-republic-fragility-democracy/personalities/ruth-fischer-1895-1961-personalities" target="_blank"><span><b>Ruth Fischer (1895-1961)</b></span></a></p>\r\n</li>\r\n</ul>\r\n</li>\r\n</ul>\r\n</td>\r\n<td></td>\r\n<td></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</div>\r\n<hr />\r\n<div id="journal">\r\n<h1 style="text-align: center;">Journal: Create Identity Chart</h1>\r\n<p><span style="font-size: small;">Now that you have learned a bit about some of <span class="nolink"></span>the historical figures who mattered during the years of the Weimar Republic, you will create an identity chart <span>of that figure </span>in your journal in preparation for the next part of the activity.</span></p>\r\n<table cellpadding="10" cellspacing="30" align="center" border="0">\r\n<tbody>\r\n<tr>\r\n<td><button onclick="window.open(''http://facing.mrooms3.net/blog/edit.php?action=add/#region-main'','''',''scrollbars=yes,resizable=yes,width=700,height=800'');return false;">CREATE NEW JOURNAL ENTRY</button></td>\r\n<td><a href="http://facing.mrooms3.net/course/view.php?id=57&amp;pageid=1363"><button onclick="window.open(''http://facing.mrooms3.net/course/view.php?id=57&amp;pageid=1363'','''',''scrollbars=yes,resizable=yes,width=700,height=800, left=''+(screen.availWidth/2-61.5)+'',top=''+(screen.availHeight/2-61.5)+'''');return false;">WHAT''S AN IDENTITY CHART?</button></a></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p></p>\r\n</div>\r\n<hr />', '<div id="explore_weimar">\r\n<h1 style="text-align: center;">Exploration of Facing History''s Weimar Republic online module</h1>\r\n<table align="center" border="0">\r\n<tbody>\r\n<tr>\r\n<td>\r\n<p><span style="font-size: small;">1. Go to <a target="_blank" onclick="window.open(''http://weimar.facinghistory.org/'','''',''scrollbars=yes,resizable=yes,width=1000,height=600,left=''+(screen.availWidth/2-500)+'',top=''+(screen.availHeight/2-300)+'''');return false;" href="http://weimar.facinghistory.org/">Facing History''s Weimar Republic website</a>. </span></p>\r\n<p><img src="http://facing.mrooms3.net/draftfile.php/89/user/draft/66077608/weimar_microsite.png" style="margin: 20px auto; display: block;" height="407" width="721" /></p>\r\n</td>\r\n<td></td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p><span style="font-size: small;">2. Click on the "Weimar Personalities" tab and select one person from the following list to read about:</span></p>\r\n<p><img src="http://facing.mrooms3.net/draftfile.php/89/user/draft/66077608/arbieter-Hitler.png" style="float: right;" class="choicesshadow" height="306" width="200" /></p>\r\n<ul>\r\n<li style="list-style-type: none;">\r\n<ul>\r\n<li>\r\n<p><a href="https://www.facinghistory.org/weimar-republic-fragility-democracy/personalities/adolf-hitler-1889-1945-personalities" target="_blank"><span><b>Adolf Hitler (1889-1945)</b></span></a></p>\r\n</li>\r\n<li>\r\n<p><a href="https://www.facinghistory.org/weimar-republic-fragility-democracy/personalities/bernard-lichtenberg-1875-1943-personalities" target="_blank"><span><b>Bernard Lichtenberg (1875-1943)</b></span></a></p>\r\n</li>\r\n<li>\r\n<p><a href="https://www.facinghistory.org/weimar-republic-fragility-democracy/personalities/bertha-pappenheim-1859-1936-personalities" target="_blank"><span><b>Bertha Pappenheim (1859-1936)</b></span></a></p>\r\n</li>\r\n<li>\r\n<p><a href="https://www.facinghistory.org/weimar-republic-fragility-democracy/personalities/friedrich-ebert-1871-1925-personalities" target="_blank"><span><b>Friedrich Ebert (1871-1925)</b></span></a></p>\r\n</li>\r\n<li>\r\n<p><a href="https://www.facinghistory.org/weimar-republic-fragility-democracy/personalities/fritz-lang-1890-1976-personalities" target="_blank"><span><b>Fritz Lang (1890-1976)</b></span></a></p>\r\n</li>\r\n<li>\r\n<p><a href="https://www.facinghistory.org/weimar-republic-fragility-democracy/personalities/george-grosz-1893-1959-personalities" target="_blank"><span><b>George Grosz (1893-1959)</b></span></a></p>\r\n</li>\r\n<li>\r\n<p><a href="https://www.facinghistory.org/weimar-republic-fragility-democracy/personalities/gustav-stresemann-1878-1929-personalities" target="_blank"><span><b>Gustav Stresemann (1878-1929)</b></span></a></p>\r\n</li>\r\n<li>\r\n<p><a href="https://www.facinghistory.org/weimar-republic-fragility-democracy/personalities/julius-streicher-1885-1946-personalities" target="_blank"><span><b>Julius Streicher (1885-1946)</b></span></a></p>\r\n</li>\r\n<li>\r\n<p><a href="https://www.facinghistory.org/weimar-republic-fragility-democracy/personalities/k%C3%A4the-kollwitz-1867-1945-personalities" target="_blank"><span><b>KÃ¤the Kollwitz (1867-1945)</b></span></a></p>\r\n</li>\r\n<li>\r\n<p><a href="https://www.facinghistory.org/weimar-republic-fragility-democracy/personalities/kurt-tucholsky-1890-1935-personalities" target="_blank"><span><b>Kurt Tucholsky (1890-1935)</b></span></a></p>\r\n</li>\r\n<li>\r\n<p><a href="https://www.facinghistory.org/weimar-republic-fragility-democracy/personalities/maximilian-harden-1861-1927-personalities" target="_blank"><span><b>Maximilian Harden (1861-1927)</b></span></a></p>\r\n</li>\r\n<li>\r\n<p><a href="https://www.facinghistory.org/weimar-republic-fragility-democracy/personalities/ruth-fischer-1895-1961-personalities" target="_blank"><span><b>Ruth Fischer (1895-1961)</b></span></a></p>\r\n</li>\r\n</ul>\r\n</li>\r\n</ul>\r\n</td>\r\n<td></td>\r\n<td></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</div>\r\n<hr />\r\n<div id="journal">\r\n<h1 style="text-align: center;">Journal: Create Identity Chart</h1>\r\n<p><span style="font-size: small;">Now that you have learned a bit about some of <span class="nolink"></span>the historical figures who mattered during the years of the Weimar Republic, you will create an identity chart <span>of that figure </span>in your journal in preparation for the next part of the activity.</span></p>\r\n<table cellpadding="10" cellspacing="30" align="center" border="0">\r\n<tbody>\r\n<tr>\r\n<td><button onclick="window.open(''http://facing.mrooms3.net/blog/edit.php?action=add/#region-main'','''',''scrollbars=yes,resizable=yes,width=700,height=800'');return false;">CREATE NEW JOURNAL ENTRY</button></td>\r\n<td><a href="http://facing.mrooms3.net/course/view.php?id=57&amp;pageid=1363"><button onclick="window.open(''http://facing.mrooms3.net/course/view.php?id=57&amp;pageid=1363'','''',''scrollbars=yes,resizable=yes,width=700,height=800, left=''+(screen.availWidth/2-61.5)+'',top=''+(screen.availHeight/2-61.5)+'''');return false;">WHAT''S AN IDENTITY CHART?</button></a></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p></p>\r\n</div>\r\n<hr />'),
(51, 'Teaching Strategy: Identity Charts', 14, 'https://www.facinghistory.org/for-educators/educator-resources/teaching-strategies/identity-charts', NULL, 'Identity charts are a graphic tool that helps students consider the many factors that shape who we are as individuals and as communities. They can be used to deepen studentsâ€™ understanding of themselves, groups, nations and historical and literary figures. Sharing their own Identity charts with peers can help students build relationships and breakdown stereotypes. In this way, identity charts can be utilized as an effective classroom community-building tool.', 'This will need to be updated as a "teaching strategy" resource type.', NULL),
(52, 'Weimar Virtual Museum', 2, 'http://facing.mrooms3.net/course/view.php?id=58&pageid=1746', NULL, 'This is a database for participants of Holocaust and Human Behavior to share resources with one another by creating a virtual class museum exploring primary sources from the Weimar Republic.\r\n\r\n    To get started, click on the activity link above, then select the "Add Entry" tab.\r\n\r\n    To view entries, click on the activity link above, then select the "View List" tab.\r\n    PLEASE NOTE: For resources and primary sources that you would like to use, you will need to keep track of the URL (web browser address). The easiest way to do this is to highlight the URL of the primary source, then copy and paste it into the database.\r\n', '<div id="weimar_museum">\r\n<h1 style="text-align: center;"><span style="font: 16px arial,helvetica,sans-serif;"></span>Populating the Class Museum</h1>\r\n<p style="text-align: center;">(Curation of Primary Source Documents)</p>\r\n<p><span style="font-style: normal; font-variant: normal; font-weight: normal; font-size: small; line-height: normal; font-size-adjust: none; font-stretch: normal; -moz-font-feature-settings: normal; -moz-font-language-override: normal;">We will now be collectively populating a database with entries that will form a class "online museum" of sorts. Follow the directions below:</span></p>\r\n<table style="width: 95%;" cellpadding="10" cellspacing="10" align="center" border="0">\r\n<tbody>\r\n<tr>\r\n<td>\r\n<p><span style="font-size: small;">1. Go to the "Primary Source Documents" tab of the <a target="_blank" href="http://weimar.facinghistory.org">Facing History Weimar website</a>. Go to each of the categories (culture, economics, politics, society)  and browse a few of the resources there. </span></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p><span style="font: 16px arial,helvetica,sans-serif;"><img src="http://facing.mrooms3.net/draftfile.php/89/user/draft/472471169/WeimarPrimarySources.PNG" style="margin: 15px auto; display: block;" height="300" width="442" /></span></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p><span style="font-size: small;">2. Select one document or piece of information from each section that <span style="font-size: small;">that really stood out to you, and think about what these resources communicate about the nature (and fragility) of democracy.</span> Think about this in preparation for the next part of the activity, where you will select one of your documents and present it to the class Weimar online museum (see next step).</span></p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p></p>\r\n<hr /></div>', '<div id="weimar_museum">\r\n<h1 style="text-align: center;"><span style="font: 16px arial,helvetica,sans-serif;"></span>Populating the Class Museum</h1>\r\n<p style="text-align: center;">(Curation of Primary Source Documents)</p>\r\n<p><span style="font-style: normal; font-variant: normal; font-weight: normal; font-size: small; line-height: normal; font-size-adjust: none; font-stretch: normal; -moz-font-feature-settings: normal; -moz-font-language-override: normal;">We will now be collectively populating a database with entries that will form a class "online museum" of sorts. Follow the directions below:</span></p>\r\n<table style="width: 95%;" cellpadding="10" cellspacing="10" align="center" border="0">\r\n<tbody>\r\n<tr>\r\n<td>\r\n<p><span style="font-size: small;">1. Go to the "Primary Source Documents" tab of the <a target="_blank" href="http://weimar.facinghistory.org">Facing History Weimar website</a>. Go to each of the categories (culture, economics, politics, society)  and browse a few of the resources there. </span></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p><span style="font: 16px arial,helvetica,sans-serif;"><img src="http://facing.mrooms3.net/draftfile.php/89/user/draft/472471169/WeimarPrimarySources.PNG" style="margin: 15px auto; display: block;" height="300" width="442" /></span></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p><span style="font-size: small;">2. Select one document or piece of information from each section that <span style="font-size: small;">that really stood out to you, and think about what these resources communicate about the nature (and fragility) of democracy.</span> Think about this in preparation for the next part of the activity, where you will select one of your documents and present it to the class Weimar online museum (see next step).</span></p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p></p>\r\n<hr /></div>'),
(53, 'Paul Bookbinder: Choices and Consequences in Weimar Germany', 10, 'https://www.facinghistory.org/weimar-republic-fragility-democracy/choices-and-consequences-weimar-germany', NULL, 'The failure of Germanyâ€™s first true democracy was the result of choices made by Weimar Germans during its brief life. In every historical period major developments such as wars, peace treaties and economic crisis limit the freedom of individual action. The fate of the Weimar Republic was in the hands of its leaders and its citizens. The following are some examples of some choices and decisions that shaped the history of Weimar Germany.', '<p><meta http-equiv="content-type" content="text/html; charset=utf-8" />\r\n<title>Choices and Consequences in Weimar Germany -- By Paul Bookbinder</title>\r\n<meta charset="utf-8" />\r\n<title>jQuery UI Accordion - No auto height</title>\r\n<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />\r\n<script src="http://code.jquery.com/jquery-1.9.1.js" type="text/javascript"></script>\r\n<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js" type="text/javascript"></script>\r\n<link rel="stylesheet" href="http://facing.mrooms3.net/resources/demos/style.css" />\r\n<script type="text/javascript">// <![CDATA[\r\n$(function() {\r\n    $( "#accordion" ).accordion({\r\n      heightStyle: "content"\r\n    });\r\n  });\r\n// ]]></script>\r\n</p>\r\n<div id="dig_deeper">\r\n<p><em><strong>Dig Deeper (Optional)</strong></em></p>\r\n<hr />\r\n<h2 style="text-align: center;">Choices and Consequences in Weimar Germany</h2>\r\n<h3 style="text-align: center;">By Paul Bookbinder</h3>\r\n<hr />\r\n<p><img src="http://facing.mrooms3.net/draftfile.php/89/user/draft/52502140/3222_1_section.png" style="float: left; margin: 10px 15px 10px 5px;" class="choicesshadow" height="109" width="126" />The failure of Germanyâ€™s first true democracy was the result of choices made by Weimar Germans during the Republic''s brief life. In every historical period, major developments such as wars, peace treaties, and economic crises limit the freedom of individual action. Certainly for Weimar Germany defeat in World War I, the Versailles Treaty, inflation, and depression made the development and survival of democracy difficult. Yet while these factors were important, they did not doom the Republic to inevitable failure. Within the limits imposed by these major factors, numerous courses of action and results were possible and were determined by decisions and choices that individuals made. The fate of the Weimar Republic was in the hands of its leaders and its citizens. The following are some examples of some choices and decisions that shaped the history of Weimar Germany.</p>\r\n<div id="accordion">\r\n<h3>January 1919</h3>\r\n<div>\r\n<p>Friedrich Ebert decided to call in the army to put down radical workers demonstrating in the streets of Berlin, thus crushing what became known as the Spartacist Revolution. Ebertâ€™s critics argued that his actions split the left and made the Republic much more vulnerable to right-wing forces and ultimately to a Nazi takeover. His supporters argued that his action saved the Republic, kept the English, French, and Americans from occupying Germany, and gave life to coalitions between moderate socialists and pro-republican members of the middle class.</p>\r\n</div>\r\n<h3>December 1923</h3>\r\n<div>\r\n<p>Bavarian and Austrian officials made a decision that Adolf Hitler should not be declared an Austrian citizen and be deported to Austria after his arrest for trying to overthrow the German government by force in the November Munich Beer Hall Putsch. Had the bureaucrats decided for deportation, before his trial or after his release from a brief imprisonment the history of the Weimar Republic and that of much of the twentieth century might have been very different indeed.</p>\r\n</div>\r\n<h3>October 1928</h3>\r\n<div>\r\n<p>The executive committee of the German Nationalist Peopleâ€™s Party (DNVP) voted by a three-vote margin to appoint Alfred Hugenbrg as party chairman. Hugenberg, who controlled a media empire including newspapers that about 50% of Germans read, was an enemy of the Weimar Republic. Hugenberg wished to become the ruler of Germany, but his strategy called for an alliance with Hitler and the Nazis. The former Nationalist Party leader and Hugenbergâ€™s opponent Count Westarp opposed this alliance with the Nazis. Hugenberg provided Hitler with positive media coverage in â€œrespectableâ€ conservative newspapers and an introduction to industrialists and financiers who had money to spend supporting political candidates. Hitlerâ€™s alliance with Hugenberg was a necessary step on his way to power.</p>\r\n</div>\r\n<h3>October 1928 (part 2)</h3>\r\n<div>\r\n<p>The executive committee of the Catholic Center Party chose Monsignor Ludwig Kaas to replace Wilhelm Marx as party leader. Marx was a dedicated republican and a skilled politician. Monsignor Kaas was neither. Kaas favored a more authoritarian form of government and moved the party away from its position as of strong support for the Republic. Kaas was close ally of Cardinal Eugenio Pacelli, the future Pope Pius XII. He supported Cardinal Pacelliâ€™s desire to weaken independent national Catholic political parties and have Catholics look more directly to Rome for guidance in shaping their society. The decision of the executive committee of the Catholic Center party to appoint Kaas and change the direction of the party contributed to the failure of Weimar Democracy.</p>\r\n</div>\r\n<h3>March 1930</h3>\r\n<div>\r\n<p>Hermann MÃ¼ller the leader of the Social Democratic Party announced that his party had decided to refuse to join a new government and would prefer to be in opposition. The Social Democratic Party had been the strongest supporter of the Republic and German democracy. Unwilling to confront the challenge of dealing with the great depression the Social Democrats stayed out of the government. Their decision allowed the erosion of legislative government to take place in the period from 1930-1932 seriously weakening the Weimar Republic and contributing to its failure.</p>\r\n</div>\r\n<h3>July 20,1932</h3>\r\n<div>\r\n<p>Otto Braun, the Minister President of Prussia accepted an order suspending his Prussian State government and turning power over to the national government of Chancellor Papen and President Von Papen. Braun, a Social Democratic and the most able Weimar republican politician had headed stable coalition governments of Prussia since 1920. Under his rule Prussia had become the bulwark of the Weimar Republic. In the summer of 1932 there was street fighting between Communists and Nazis in the streets of Prussiaâ€™s capital Berlin. Using this violence, which the Prussian police were controlling, as an excuse Papen and Hindenburg decided to remove the government of Prussia claiming it could not fulfill its constitutional provision to maintain law and order. The real reason for Papen and Hindenburgâ€™s decision was to weaken the Republic and strengthen conservative and right wing forces. Otto Braun considered refusing to give up his power and calling upon his police and the workers to support his action. Deciding not to risk civil war he surrendered his government and took his case to the courts, a futile course of action. The fall of the Prussian State government is seen by many as the death bell for the Weimar Republic.</p>\r\n</div>\r\n<h3>July 31,1932</h3>\r\n<div>\r\n<p>Over thirty-seven percent of the German people cast their secret ballots for the National Socialist Party from an election list which showed 30 parties. This vote made the Nazis the most successful Party in Weimarâ€™s thirteen years. It made Hitler, who was committed to destroy the Republic and German democracy, the most popular Weimar leader. By voting for Hitler, Germans endorsed a party whose leader, in his autobiography, Mein Kampf made clear his fanatical hatred for Jews, and his desire for an expansionist aggressive foreign policy in the east.</p>\r\n</div>\r\n<h3>January 31, 1933</h3>\r\n<div>\r\n<p>President Paul Von Hindenburg appointed Adolf Hitler Chancellor of Germany. In three months, armed with emergency dictatorial powers, Hitler would announce the death of the Weimar Republic</p>\r\n</div>\r\n</div>\r\n</div>', NULL),
(54, 'George Grosz: The Agitator', 12, 'http://paletaworld.org/images.asp?id=3219', NULL, 'This is an iconic painting from the Weimar Republic in Germany. Painter George Grosz painted this in 1928.', 'This will need to be changed to an "image" resource', NULL),
(55, 'Database: Deconstructing Images', 2, 'http://facing.mrooms3.net/course/view.php?id=58&pageid=1745', NULL, 'In this databse, you will record some of your thoughts as you deconstruct the image of George Grosz''s famous painting, "The Agitator".', '', '<div id="database">\r\n<h1 style="text-align: center;"><img src="http://upload.wikimedia.org/wikipedia/commons/thumb/f/fc/AWS_Simple_Icons_Database_Amazon_RDS.svg/200px-AWS_Simple_Icons_Database_Amazon_RDS.svg.png" style="float: left; margin-left: 15px; margin-right: 15px;" height="100" width="100" /></h1>\r\n<h1 style="text-align: center;">Database: Deconstructing Images</h1>\r\n<p>In this databse, you will record some of your thoughts as you deconstruct the image of George Grosz''s famous painting, "The Agitator". To view the painting, see the link in the activity panel at the top of this page. As you view the painting, you will consider the following questions:</p>\r\n<ol>\r\n<li style="list-style-type: none;"><ol>\r\n<li style="list-style-type: none;"><ol>\r\n<li style="list-style-type: none;"><ol>\r\n<li style="list-style-type: none;"><ol>\r\n<li style="list-style-type: none;"><ol>\r\n<li>What do you see?</li>\r\n<li>What do you want to know? What are you wondering?</li>\r\n<li>What do you think the artist is saying?</li>\r\n<li>In your opinion, who is the intended audience?</li>\r\n</ol></li>\r\n</ol></li>\r\n</ol></li>\r\n</ol></li>\r\n</ol></li>\r\n</ol>\r\n<p>Finally, enter the database. To get started, click on the activity link, then select the "Add Entry" tab. To view entries, click on the activity link, then select the "View List" tab.</p>\r\n</div>'),
(56, 'Analyzing Visual Images and Stereotyping', 14, 'https://www.facinghistory.org/for-educators/educator-resources/teaching-strategies/analyzing-visual-images-stere', NULL, 'Deconstructing images is a great strategy for helping students develop awareness of historical context, hone their critical thinking skills (particularly in regards to visual images), and enhance their observation and interpretive skills Develop conceptual learning techniques ', '', NULL),
(57, 'USC Shoah Foundation Institute: IWitness', 12, 'http://iwitness.usc.edu', NULL, 'IWitness is an educational website developed by the USC Shoah Foundation (The Institute for Visual History and Education). IWitness brings the human stories of the Instituteâ€™s Visual History Archive to secondary school teachers and their students via engaging multimedia learning activities that address educational standards (Common Core, ISTE). IWitness provides access to more than 1,300 full life histories, testimonies of survivors and other witnesses to the Holocaust and other genocides for guided exploration.', '', '<object id="flashObj" width="486" height="537" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,47,0"><param name="movie" value="http://c.brightcove.com/services/viewer/federated_f9?isVid=1&isUI=1" /><param name="bgcolor" value="#FFFFFF" /><param name="flashVars" value="videoId=2726660438001&playerID=1618550244001&playerKey=AQ~~,AAABYEdBaAk~,1dGnVytVBSxfjd3-9uew3O6eYAhpizaC&domain=embed&dynamicStreaming=true" /><param name="base" value="http://admin.brightcove.com" /><param name="seamlesstabbing" value="false" /><param name="allowFullScreen" value="true" /><param name="swLiveConnect" value="true" /><param name="allowScriptAccess" value="always" /><embed src="http://c.brightcove.com/services/viewer/federated_f9?isVid=1&isUI=1" bgcolor="#FFFFFF" flashVars="videoId=2726660438001&playerID=1618550244001&playerKey=AQ~~,AAABYEdBaAk~,1dGnVytVBSxfjd3-9uew3O6eYAhpizaC&domain=embed&dynamicStreaming=true" base="http://admin.brightcove.com" name="flashObj" width="486" height="537" seamlesstabbing="false" type="application/x-shockwave-flash" allowFullScreen="true" allowScriptAccess="always" swLiveConnect="true" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash"></embed></object>'),
(58, 'Facing History and Ourselves Online Courses', 11, '<iframe src="//player.vimeo.com/video/86603258" width="500" height="400" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>', NULL, 'This is an online video from Facing History and Ourselves about navigating our Course Site', '', NULL),
(59, 'Educator Voice: Changing the World One Student at a Time: Principal Jose Navarro ', 11, 'http://bcove.me/gb0n54i1', NULL, 'Jose Navarro, Principal at Social Justice Humanitas Academy in San Fernando, CA, discusses the impact that Facing History has had on the students at his school.', '<object id="flashObj" width="486" height="537" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,47,0"><param name="movie" value="http://c.brightcove.com/services/viewer/federated_f9?isVid=1&isUI=1" /><param name="bgcolor" value="#FFFFFF" /><param name="flashVars" value="videoId=2839175471001&playerID=1618550244001&playerKey=AQ~~,AAABYEdBaAk~,1dGnVytVBSxfjd3-9uew3O6eYAhpizaC&domain=embed&dynamicStreaming=true" /><param name="base" value="http://admin.brightcove.com" /><param name="seamlesstabbing" value="false" /><param name="allowFullScreen" value="true" /><param name="swLiveConnect" value="true" /><param name="allowScriptAccess" value="always" /><embed src="http://c.brightcove.com/services/viewer/federated_f9?isVid=1&isUI=1" bgcolor="#FFFFFF" flashVars="videoId=2839175471001&playerID=1618550244001&playerKey=AQ~~,AAABYEdBaAk~,1dGnVytVBSxfjd3-9uew3O6eYAhpizaC&domain=embed&dynamicStreaming=true" base="http://admin.brightcove.com" name="flashObj" width="486" height="537" seamlesstabbing="false" type="application/x-shockwave-flash" allowFullScreen="true" allowScriptAccess="always" swLiveConnect="true" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash"></embed></object>', '<object id="flashObj" width="486" height="537" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,47,0"><param name="movie" value="http://c.brightcove.com/services/viewer/federated_f9?isVid=1&isUI=1" /><param name="bgcolor" value="#FFFFFF" /><param name="flashVars" value="videoId=2839175471001&playerID=1618550244001&playerKey=AQ~~,AAABYEdBaAk~,1dGnVytVBSxfjd3-9uew3O6eYAhpizaC&domain=embed&dynamicStreaming=true" /><param name="base" value="http://admin.brightcove.com" /><param name="seamlesstabbing" value="false" /><param name="allowFullScreen" value="true" /><param name="swLiveConnect" value="true" /><param name="allowScriptAccess" value="always" /><embed src="http://c.brightcove.com/services/viewer/federated_f9?isVid=1&isUI=1" bgcolor="#FFFFFF" flashVars="videoId=2839175471001&playerID=1618550244001&playerKey=AQ~~,AAABYEdBaAk~,1dGnVytVBSxfjd3-9uew3O6eYAhpizaC&domain=embed&dynamicStreaming=true" base="http://admin.brightcove.com" name="flashObj" width="486" height="537" seamlesstabbing="false" type="application/x-shockwave-flash" allowFullScreen="true" allowScriptAccess="always" swLiveConnect="true" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash"></embed></object>'),
(60, 'Scholar Voice: Martha Minow, Professor at Harvard Law School', 11, 'http://bcove.me/evvfhanx', NULL, 'Martha Minow, Jeremiah Smith, Jr., Professor of Law, Harvard Law School, discusses Facing History and Ourselves.', '<object id="flashObj" width="486" height="537" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,47,0"><param name="movie" value="http://c.brightcove.com/services/viewer/federated_f9?isVid=1&isUI=1" /><param name="bgcolor" value="#FFFFFF" /><param name="flashVars" value="videoId=2816509145001&playerID=1618550244001&playerKey=AQ~~,AAABYEdBaAk~,1dGnVytVBSxfjd3-9uew3O6eYAhpizaC&domain=embed&dynamicStreaming=true" /><param name="base" value="http://admin.brightcove.com" /><param name="seamlesstabbing" value="false" /><param name="allowFullScreen" value="true" /><param name="swLiveConnect" value="true" /><param name="allowScriptAccess" value="always" /><embed src="http://c.brightcove.com/services/viewer/federated_f9?isVid=1&isUI=1" bgcolor="#FFFFFF" flashVars="videoId=2816509145001&playerID=1618550244001&playerKey=AQ~~,AAABYEdBaAk~,1dGnVytVBSxfjd3-9uew3O6eYAhpizaC&domain=embed&dynamicStreaming=true" base="http://admin.brightcove.com" name="flashObj" width="486" height="537" seamlesstabbing="false" type="application/x-shockwave-flash" allowFullScreen="true" allowScriptAccess="always" swLiveConnect="true" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash"></embed></object>', '<object id="flashObj" width="486" height="537" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,47,0"><param name="movie" value="http://c.brightcove.com/services/viewer/federated_f9?isVid=1&isUI=1" /><param name="bgcolor" value="#FFFFFF" /><param name="flashVars" value="videoId=2816509145001&playerID=1618550244001&playerKey=AQ~~,AAABYEdBaAk~,1dGnVytVBSxfjd3-9uew3O6eYAhpizaC&domain=embed&dynamicStreaming=true" /><param name="base" value="http://admin.brightcove.com" /><param name="seamlesstabbing" value="false" /><param name="allowFullScreen" value="true" /><param name="swLiveConnect" value="true" /><param name="allowScriptAccess" value="always" /><embed src="http://c.brightcove.com/services/viewer/federated_f9?isVid=1&isUI=1" bgcolor="#FFFFFF" flashVars="videoId=2816509145001&playerID=1618550244001&playerKey=AQ~~,AAABYEdBaAk~,1dGnVytVBSxfjd3-9uew3O6eYAhpizaC&domain=embed&dynamicStreaming=true" base="http://admin.brightcove.com" name="flashObj" width="486" height="537" seamlesstabbing="false" type="application/x-shockwave-flash" allowFullScreen="true" allowScriptAccess="always" swLiveConnect="true" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash"></embed></object>'),
(61, 'Survivor Voice: Dr. Maurice Vanderpol', 11, 'http://youtu.be/35uNdU2t_fQ', NULL, 'Dr. Maurice Vanderpol, from a middle-class Jewish family, went into hiding when the Nazis invaded and occupied his native Holland in 1940.', 'Can we find this on Brightcove?', ''),
(62, 'Facing History Staff Voice: Margot Stern-Strom', 11, 'http://bcove.me/2hjq3lo0', NULL, '', '', '<object id="flashObj" width="486" height="537" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,47,0"><param name="movie" value="http://c.brightcove.com/services/viewer/federated_f9?isVid=1&isUI=1" /><param name="bgcolor" value="#FFFFFF" /><param name="flashVars" value="videoId=2814744646001&playerID=1618550244001&playerKey=AQ~~,AAABYEdBaAk~,1dGnVytVBSxfjd3-9uew3O6eYAhpizaC&domain=embed&dynamicStreaming=true" /><param name="base" value="http://admin.brightcove.com" /><param name="seamlesstabbing" value="false" /><param name="allowFullScreen" value="true" /><param name="swLiveConnect" value="true" /><param name="allowScriptAccess" value="always" /><embed src="http://c.brightcove.com/services/viewer/federated_f9?isVid=1&isUI=1" bgcolor="#FFFFFF" flashVars="videoId=2814744646001&playerID=1618550244001&playerKey=AQ~~,AAABYEdBaAk~,1dGnVytVBSxfjd3-9uew3O6eYAhpizaC&domain=embed&dynamicStreaming=true" base="http://admin.brightcove.com" name="flashObj" width="486" height="537" seamlesstabbing="false" type="application/x-shockwave-flash" allowFullScreen="true" allowScriptAccess="always" swLiveConnect="true" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash"></embed></object>'),
(63, 'Creating a Reflective Classroom Community', 11, 'http://bcove.me/9x2bg8fn', NULL, 'Doc Miller explains the importance of creating a reflective classroom.', '', '<object id="flashObj" width="486" height="537" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,47,0"><param name="movie" value="http://c.brightcove.com/services/viewer/federated_f9?isVid=1&isUI=1" /><param name="bgcolor" value="#FFFFFF" /><param name="flashVars" value="videoId=2589528788001&playerID=1618550244001&playerKey=AQ~~,AAABYEdBaAk~,1dGnVytVBSxfjd3-9uew3O6eYAhpizaC&domain=embed&dynamicStreaming=true" /><param name="base" value="http://admin.brightcove.com" /><param name="seamlesstabbing" value="false" /><param name="allowFullScreen" value="true" /><param name="swLiveConnect" value="true" /><param name="allowScriptAccess" value="always" /><embed src="http://c.brightcove.com/services/viewer/federated_f9?isVid=1&isUI=1" bgcolor="#FFFFFF" flashVars="videoId=2589528788001&playerID=1618550244001&playerKey=AQ~~,AAABYEdBaAk~,1dGnVytVBSxfjd3-9uew3O6eYAhpizaC&domain=embed&dynamicStreaming=true" base="http://admin.brightcove.com" name="flashObj" width="486" height="537" seamlesstabbing="false" type="application/x-shockwave-flash" allowFullScreen="true" allowScriptAccess="always" swLiveConnect="true" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash"></embed></object>');
INSERT INTO `resources` (`id`, `title`, `type_id`, `path`, `brightcove`, `description`, `note`, `html`) VALUES
(64, 'Facing History and Ourselves: Creating a Reflective Classroom Community', 10, 'https://drive.google.com/file/d/0B9E6hxuwgtz-Y2M5QXowUzl4U2s/edit?usp=sharing', NULL, 'This paper is one of a series of pedagogical briefs written to illuminate the work of Facing History and Ourselves from theory to practice. This resource focuses on the process of creating a reflective classroom community.', '', ''),
(65, 'Communicating Online: Discussion Guidelines', 10, '', NULL, 'Discussions may be difficult, but they also present opportunities for us and our students to more deeply develop self-awareness and consider different perspectives about race and identity. Having these discussions online, rather than face to face, adds another layer of complexity that we must consider together.', '', '<h2>Communicating Online</h2>\r\n<p>Discussions may be difficult, but they also present opportunities for us and our students to more deeply develop self-awareness and consider different perspectives about race and identity. Having these discussions online, rather than face to face, adds another layer of complexity that we must consider together.</p>\r\n<hr />\r\n<p>Here are some tips and guidelines for communicating in online discussions:</p>\r\n<p></p>\r\n<p></p>\r\n<h3>The Way You Communicate Affects All Participants:</h3>\r\n<p>As a participant, you are a member of an online community. Your postings can help push the group to think in new directions and create a sense of community, or they can be divisive. Try to be thoughtful and sensitive in your tone. Be cautious with sarcasm and humor online, as they often don''t come across as intended. As in a face-to-face group conversation, please make a special effort to â€œlistenâ€ carefully to other participants, and as a "critical friend," post your responses kindly and thoughtfully.</p>\r\n<p></p>\r\n<hr />\r\n<p></p>\r\n<h3>Let Yourself Be Heard:</h3>\r\n<p>Don''t be afraid to speak your thoughts. Your perspective, whether it is similar to that of others in the group or different, is important.</p>\r\n<p></p>\r\n<hr />\r\n<p></p>\r\n<h3>Join the conversation.</h3>\r\n<p>Remember, the facilitator and other participants can''t read body language online to know if you''re engaged in the conversation and thinking about the content. We need to "hear" you.</p>\r\n<p></p>\r\n<hr />\r\n<p></p>\r\n<h3>Be Careful Not to Dominate the Discussion:</h3>\r\n<p>Every online group has leaders, and leaders are great. But try to be cautious about overwhelming the conversation. Share your thoughts and responses, but make sure you give room for others to respond, and that you''re letting the facilitator do his/her job as well.</p>\r\n<p></p>\r\n<hr />\r\n<p></p>\r\n<h3>Encouragement Goes a Long Way:</h3>\r\n<p>Comments in the discussion can be either substantial, thought-provoking reflections or simple words of encouragement to other participants. They can push other participants to think further, or simply just say "Nicely put," or "I agree."</p>\r\n<p></p>\r\n<hr />\r\n<p></p>\r\n<h3>Brevity!</h3>\r\n<p>Everyone already has a lot to read. As you''re writing your messages, remember that we want to hear what you have to say but if it takes you too long to say it, other participants might not be able to read the whole thing.</p>\r\n<p></p>\r\n<hr />\r\n<p></p>\r\n<h3>Patience:</h3>\r\n<p>Online asynchronous (i.e., not at the same time) discussion is a new mode of communication for most of us. There will be times when you post to a discussion and no one responds to that post, or a response comes many hours or even days later. This is the nature of an online discussion. Know that even though your post may not get a response, you can rest assured that many participants have read the post.</p>\r\n<p></p>\r\n<hr />\r\n<p></p>\r\n<h3>Email vs. Discussion Board:</h3>\r\n<p>As a general rule, use the Discussions for all workshop communication. Email should only be used to share an issue of concern or private matter with the workshop facilitators or another participant. Email should also be used to communicate about issues unrelated to specific workshop content.</p>'),
(66, 'Facing History and Ourselves Online Courses: Updating Your Profile', 11, 'http://vimeo.com/75602029', NULL, 'This video will walk you through the steps to creating and updating your user profile on the Moodle Learning Management System (LMS), the learning platform used by Facing History and Ourselves for online courses.', '', '<iframe src="//player.vimeo.com/video/75602029" width="500" height="400" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>'),
(67, 'Bubbl.us', 12, 'http://bubbl.us', NULL, 'This tool allows for the creation and export of mind maps. You can create an identity chart on Bubbl.us, then export it as a .jpg or a .png file.', '', ''),
(68, 'Wordle.net', 12, 'http://wordle.net', NULL, 'Create your identity chart as a word cloud! Word clouds give greater prominence to words that appear more often within a text selection. Here''s a suggestion: compose a short biography of yourself, then paste it into the Wordle and see what comes up!', '', ''),
(69, 'Prezi', 12, 'http://www.prezi.com', NULL, 'Prezis are great alternatives to traditional slideshows. The site has some useful tutorials on how to best create a Prezi. Keep in mind that you will need to create an account with a login for this option.\r\nPowerPoint: Using Microsoft PowerPoint, create your identity chart with a slide, or create a full slideshow that you can share with your classmates.', '', ''),
(70, 'Teaching Strategy: Identity Charts', 14, 'https://www.facinghistory.org/for-educators/educator-resources/teaching-strategies/identity-charts', NULL, 'Identity charts are a graphic tool that helps students consider the many factors that shape who we are as individuals and as communities. They can be used to deepen studentsâ€™ understanding of themselves, groups, nations and historical and literary figures. Sharing their own Identity charts with peers can help students build relationships and breakdown stereotypes. In this way, identity charts can be utilized as an effective classroom community-building tool.', '', ''),
(71, 'Facing History and Ourselves Online Courses: Educatory Resources Page', 11, 'http://vimeo.com/86609495', NULL, 'This video will show you how to negotiate your way around the Educator Resources section of the Facing History and Ourselves website.', '', '<iframe src="//player.vimeo.com/video/86609495" width="500" height="400" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>'),
(72, 'Scavenger Hunt: Facing History''s Educator Resources', 2, 'http://facing.mrooms3.net/mod/data/view.php?id=9124', NULL, 'For this short scavenger hunt, you will be visiting the Educator Resources area of the Facing History and Ourselves website. ', '', 'Scavenger Hunt: Facing History''s Educator Resources\r\n\r\nFor this short scavenger hunt, you will be visiting the Educator Resources area of the Facing History and Ourselves website.\r\n\r\n    Click here to open the Facing History Educator Resources page in a new tab.\r\n\r\n    To Create Entry: Click on the "Add Entry" tab below. Then fill in the required fields.\r\n\r\n    To View Entries: Click on the "View List" tab below.'),
(73, 'Facing History: Teaching Strategies Page', 12, 'https://www.facinghistory.org/for-educators/educator-resources/teaching-strategies', NULL, 'Strategies that empower students as they connect the dots between the ethical choices theyâ€™ll face in life, and the positive outcomes they can create in their community and the world.', '', ''),
(82, 'resources/add/40/12', 1, '', NULL, '', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `resources_sections`
--

CREATE TABLE IF NOT EXISTS `resources_sections` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `section_id` int(10) NOT NULL,
  `resource_id` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `section_id` (`section_id`),
  KEY `resource_id` (`resource_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `resources_sections`
--

INSERT INTO `resources_sections` (`id`, `section_id`, `resource_id`) VALUES
(12, 40, 32),
(13, 40, 33),
(14, 40, 34),
(15, 40, 35),
(17, 16, 40),
(18, 42, 58),
(26, 12, 19),
(27, 12, 35),
(28, 10, 20),
(30, 46, 19),
(31, 16, 38);

-- --------------------------------------------------------

--
-- Table structure for table `resources_types`
--

CREATE TABLE IF NOT EXISTS `resources_types` (
  `id` int(10) NOT NULL,
  `type_id` int(10) NOT NULL,
  `resource_id` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `type_id` (`type_id`),
  KEY `resource_id` (`resource_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `scopes`
--

CREATE TABLE IF NOT EXISTS `scopes` (
  `id` int(10) NOT NULL,
  `name` varchar(155) NOT NULL,
  `icon` varchar(155) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scopes`
--

INSERT INTO `scopes` (`id`, `name`, `icon`) VALUES
(1, 'The Individual and Society', 'http://www.bresnickenglish.net/images/icons/common-core.png'),
(2, 'We and They', 'http://www.bresnickenglish.net/images/icons/common-core.png'),
(3, 'History', 'http://www.bresnickenglish.net/images/icons/common-core.png'),
(4, 'Judgment, Memory & Legacy', 'http://www.bresnickenglish.net/images/icons/common-core.png'),
(5, 'Choosing To Participate', 'http://www.bresnickenglish.net/images/icons/common-core.png'),
(6, 'ALL', 'http://www.bresnickenglish.net/images/icons/common-core.png');

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE IF NOT EXISTS `sections` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `number` int(11) NOT NULL,
  `course_id` int(10) unsigned NOT NULL,
  `scope_id` int(10) NOT NULL,
  `title` varchar(45) DEFAULT NULL,
  `intro` text,
  `quote` text,
  `speaker` varchar(155) DEFAULT NULL,
  `year` varchar(11) DEFAULT NULL,
  `video` text,
  PRIMARY KEY (`id`),
  KEY `course_id` (`course_id`),
  KEY `scope_id` (`scope_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=48 ;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`id`, `number`, `course_id`, `scope_id`, `title`, `intro`, `quote`, `speaker`, `year`, `video`) VALUES
(10, 1, 27, 1, 'Orientation', 'The first session of Choices in Little Rock will provide an orientation for you as an online learner. In this session, you will begin by setting up your user profile on the Facing History and Ourselves website and familiarizing yourself with the treasure trove of educational resources that are now available to you as a Facing History educator. You will then create and share an identity chart about yourself and read two short selections that explore key ideas of identity, race, and community. Finally, you will interact with your fellow course participants through the discussion forum.', ' "History, despite its wrenching pain, cannot be unlived, and if faced with courage, need not be lived again." ', 'Maya Angelou, American poet ', '', 'http://vimeo.com/75602029'),
(12, 2, 27, 1, 'Individual and Society', 'A Facing History and Ourselves journey begins with an examination of individual identity: what are the forces and influences that shape who we are and how we think about ourselves? In Session 2, we focus on how an individual''s identity impacts the choices one may or may not make.', '"All the people like us are we, and everyone else is they."', 'Rudyard Kipling, Indian-born British Writer', '', 'http://www.espn.go.com'),
(16, 4, 27, 3, 'The Desegregation of Central High', 'Welcome to Session 4! In this session, we will jump ahead three years after the Brown decision to September 1957, when nine courageous African American students attempted to desegregate Central High School in Little Rock, Arkansas, and found themselves in the spotlight of an entire nation. This session will first present a historical overview through readings, video clips, and a timeline. We will then move to personal testimonies from some of the Little Rock Nine. As a group of educators, we will end the session in conversation about classroom applications of the materials we''ve explored. Together, we will consider ways to most effectively present this history to our students. Also in this session, we will conduct a book group discussion on the required text for the course, Warriors Don''t Cry.', '"Safety to me meant getting to that bus stop. It seemed like I sat there for a long time before the bus came. In the meantime, people were screaming behind me. What I would have described as a crowd before, to my ears sounded like a mob."', 'Elizabeth Eckford of the Little Rock Nine', '', '<!-- Start of Brightcove Player -->\r\n\r\n<div style="display:none">\r\n\r\n</div>\r\n\r\n<!--\r\nBy use of this code snippet, I agree to the Brightcove Publisher T and C \r\nfound at https://accounts.brightcove.com/en/terms-and-conditions/. \r\n-->\r\n\r\n<script language="JavaScript" type="text/javascript" src="http://admin.brightcove.com/js/BrightcoveExperiences.js"></script>\r\n\r\n<object id="myExperience2522784467001" class="BrightcoveExperience">\r\n  <param name="bgcolor" value="#FFFFFF" />\r\n  <param name="width" value="560" />\r\n  <param name="height" value="315" />\r\n  <param name="playerID" value="2083241027001" />\r\n  <param name="playerKey" value="AQ~~,AAABYEdBaAk~,1dGnVytVBSw9Y4yoko71XnFgkvpqea1-" />\r\n  <param name="isVid" value="true" />\r\n  <param name="isUI" value="true" />\r\n  <param name="dynamicStreaming" value="true" />\r\n  \r\n  <param name="@videoPlayer" value="2522784467001" />\r\n</object>\r\n\r\n<!-- \r\nThis script tag will cause the Brightcove Players defined above it to be created as soon\r\nas the line is read by the browser. If you wish to have the player instantiated only after\r\nthe rest of the HTML is processed and the page load is complete, remove the line.\r\n-->\r\n<script type="text/javascript">brightcove.createExperiences();</script>\r\n\r\n<!-- End of Brightcove Player -->'),
(35, 3, 27, 5, 'Dividing a Nation', 'Welcome to Session 3! In this session, we will begin to examine the history leading up to the segregation of schools in the South and eventually to the integration of Little Rock Central High School. We will concentrate on the consequences of the U.S. Supreme Court''s "separate but equal" decision in the case of Plessy v. Ferguson (1896), which led to the establishment of racial barriers in almost every aspect of American life. We will then learn about some of the ramifications of the so-called "Jim Crow laws." Let''s begin!', 'When I was growing up in Louisiana in the 1950s and 1960s, the color lines were very clearly drawn. I followed my mother to the back entrance of the doctorâ€™s office, marked ''colored.'' I knew which water fountain I was supposed to drink from. On the bus ride to my all-black school, I watched white children walk to schools just two or three blocks from my house.', 'Lisa Delpit, educator and writer', '', 'http://www.pbslearningmedia.org/resource/iml04.soc.ush.civil.brown1/the-road-to-brown/'),
(40, 5, 27, 3, 'Choices in Little Rock', 'Welcome to Session 5! In this session we will continue to study the events in Little Rock, Arkansas, in 1957 and 1958, but we will concentrate specifically on the concepts of choices and choice-making. History is a product of choicesâ€”both large and smallâ€”made by individuals, groups, and nations. We will examine the choices made by Central High students, their families, and their teachers. We will examine the choices made by members of the Little Rock community, politicians and other leaders, and members of the media. Finally, we will reflect on ourselves as educators, exploring the challenges and opportunities we face as we guide our students through the process of grappling with the inequities of the past.\r\n', '"The shocking thing to me in 1957 was the number of whites who didn''t participate in the aggression, who wouldn''t do anything but look. Neighbors would express dismay, but wouldn''t do anything, wouldn''t speak out against it, would go ahead and close their doors to it."', 'Perlesta Hollingsworth, African American who lived in Little Rock, Arkansas', '', ''),
(42, 1, 12, 1, 'Orientation', 'Welcome to the first session of Holocaust and Human Behavior, Facing History and Ourselvesâ€™ flagship online course. During this orientation session, you will become familiar with the course environment and the structure of this online experience. The session will also begin to explore the issue of identity.', '"It cannot be repeated too often that nothing is more fertile in prodigies than the art of being free; but there is nothing more arduous than the apprenticeship of liberty." ', 'Alexis de Tocqueville, French philosopher', '', '<object id="flashObj" width="486" height="537" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,47,0"><param name="movie" value="http://c.brightcove.com/services/viewer/federated_f9?isVid=1&isUI=1" /><param name="bgcolor" value="#FFFFFF" /><param name="flashVars" value="videoId=2589528788001&playerID=1618550244001&playerKey=AQ~~,AAABYEdBaAk~,1dGnVytVBSxfjd3-9uew3O6eYAhpizaC&domain=embed&dynamicStreaming=true" /><param name="base" value="http://admin.brightcove.com" /><param name="seamlesstabbing" value="false" /><param name="allowFullScreen" value="true" /><param name="swLiveConnect" value="true" /><param name="allowScriptAccess" value="always" /><embed src="http://c.brightcove.com/services/viewer/federated_f9?isVid=1&isUI=1" bgcolor="#FFFFFF" flashVars="videoId=2589528788001&playerID=1618550244001&playerKey=AQ~~,AAABYEdBaAk~,1dGnVytVBSxfjd3-9uew3O6eYAhpizaC&domain=embed&dynamicStreaming=true" base="http://admin.brightcove.com" name="flashObj" width="486" height="537" seamlesstabbing="false" type="application/x-shockwave-flash" allowFullScreen="true" allowScriptAccess="always" swLiveConnect="true" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash"></embed></object>'),
(43, 3, 12, 3, 'Weimar Germany: The Fragility of Democracy', 'Welcome to Session 3. The case study of the Weimar Republic in postâ€“World War I Germany (1919-1933) and the rise of the Nazis highlights basic issues in 20th-century history that are integral to the Facing History program. In this session, we will explore primary resources from the Weimar Republic, practice the teaching technique of deconstructing images, and explore Jewish life through a web information quest.', 'Democracy is becoming rather than being. It can easily be lost, but never is fully won. Its essence is eternal struggle.', 'William H. Hastie', '', '<object id="flashObj" width="486" height="537" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,47,0"><param name="movie" value="http://c.brightcove.com/services'),
(44, 4, 12, 3, 'Choices: The Nazis in Power (1933-1938)', '', '', '', '', ''),
(45, 1, 31, 2, 'Course Level Session', 'asdfasdf', 'asdfasdf', 'asdfasdfasdf', 'dfs', ''),
(46, 1, 35, 1, 'Coursebuilder''s New Session', '', '', '', '', ''),
(47, 10, 31, 3, 'The second session', 'This is the activity intro', '"my quote"', 'Quote speaker', '', 'http://www.video.com');

-- --------------------------------------------------------

--
-- Table structure for table `steps`
--

CREATE TABLE IF NOT EXISTS `steps` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `activity_id` int(10) DEFAULT NULL,
  `procedureStep` varchar(400) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `activity_id` (`activity_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=73 ;

--
-- Dumping data for table `steps`
--

INSERT INTO `steps` (`id`, `activity_id`, `procedureStep`) VALUES
(1, 3, 'Step 1: We can have lots of fun.'),
(2, 3, 'Step two: There''s so much we can do.'),
(3, 3, 'Step three: it''s just you and me.'),
(5, 4, 'Step 1 is really great.'),
(7, 4, 'Step 2 is also really great.'),
(11, 4, 'Step 3 is even better, because it just is.'),
(12, 9, 'First, you watch the video. It is really great.'),
(13, 12, 'Watch the video clip below in which the Little Rock Nine are able to reconnect with their former classmates as guests on the Oprah Winfrey Show. One classmate recounts his experiences dealing with the Little Rock Nine at Central High and reflects on the pain he caused.'),
(14, 12, 'As you watch the clip, create a new journal entry to write down words, phrases, or sentences that resonate with you.'),
(15, 12, 'Read some personal accounts from studentsâ€”both the Little Rock Nine and white students. There are four sources you will use to access these personal reflections. Please see the activity resources for more information.'),
(16, 12, 'As you read the reflections, write in your journal words, phrases, or sentences that resonate with you. '),
(17, 12, '    Then, in the discussion area, please share one of the words, phrases, or sentences you wrote down from either the video clip or readings and answer the following questions:  What does this word or phrase say about the choices students made?  Why do you think the student(s) made those choices? What were the consequences of those choices?  Reply to at least two other people''s posts.'),
(18, 13, 'Discussion with Expert Groups: Based on your expert group (A, B, or C), click on the link below and complete the readings. When you have finished the readings, please email at least one other member of your expert group to discuss what you have read and share your thoughts on the content.'),
(20, 13, 'Jigsaw with Core Groups: After you have discussed the material with another member of your "expert group," try to find connections and continue the conversation in your "core group." '),
(23, 15, 'View the timeline of the rise of the Nazis. Pay special attention to the following: "Prologue" and 1933 through 1938. We will be focusing on these years, since this is the time period when Hitler''s Nazis first ruled Germany.  '),
(24, 15, 'Read "No Time to Think": Next, read the article "No Time to Think," in which a college professor living in Germany at the time of the rise of the Nazis reflects upon the impact of these events on his own life.'),
(25, 15, 'Complete brief discussion. When you have finished the reading, complete the brief discussion post in which you respond to the following question: What do you feel was most important or influential in the rise of the Nazi Party? Why? '),
(26, 16, 'For this activity, we would like you to browse some online videos and readings and deepen your understanding of Facing History.'),
(27, 16, 'Select at least three of the following voices to explore. '),
(28, 16, 'As you watch, open up our class Padlet wall and share some words or phrases that spoke to you or stood out. '),
(29, 16, 'Write down your thoughts on any connections or disconnections you see between the voices in these videos and your current teaching experience. What are some of the common elements you heard expressed about Facing History and Ourselves?'),
(30, 17, 'Read a brief overview of how events unfolded leading up to the first day of school (see resource "The Desegregation of Central High")'),
(31, 17, 'View a short video clip narrated by Jefferson Thomas and Elizabeth Eckford, from American Experience''s "Eyes on the Prize" website.'),
(32, 17, 'Learn the history from interview clips with the Little Rock Nine (Watch the second clip: "State and Federal Involvement"). The National Park Service has an oral history webpage on the desegregation of Central High. The page has three video clips that present the history through recent interviews with the Little Rock Nine. '),
(33, 17, '    Review a timeline of the events of 1957 in Little Rock, Arkansas.'),
(34, 18, 'Complete the discussion forum prompt relating to the course required reading, Warriors Don''t Cry. This is a book group-style discussion prompt, so you will be expected to complete an initial post as well as posting substantial responses to several of your classmates. Please ask your facilitator for more information about requirements.'),
(35, 19, 'Observe.  Observe the photograph of Elizabeth Eckford as she attempts to enter Little Rock Central High School (see Resources for this activity), and in your journal, describe what you see. This should be a list (e.g., Elizabeth holds a notebook, she wears sunglasses, etc.). At this point, do not try to make meaning of what you see, simply create the list. '),
(36, 19, 'Analyze.  Now analyze the meaning of items on your list by considering the historical context in which the photo was taken. Create a list of questions on some of the list items and pose some possible answers to your questions (for example, "Why did the photographer choose this camera angle?" or "Why did Elizabeth choose to wear that dress this particular morning?").'),
(37, 19, 'Interpret. In the final stage of this activity, as a full group, we will move from analyzing particular aspects of the photograph to interpreting the entire scene. This is an editorial image by the photographer. He has a point of view and is trying to tell you something through this photograph. What is he trying to tell you?'),
(38, 19, 'Discuss.     Go to the discussion area to add some of your interpretations of the image as a whole. What do you think is happening in this photo? In the subject line of your post, write a headline that a newspaper might have used to go along with your interpretations. '),
(41, 20, 'Join the discussion forum to discuss the challenges of teaching history from several viewpoints.'),
(42, 21, 'Exploration of Weimar Personalities: Learn about a Weimar Republic-era historical figure by exploring Facing History''s Weimar Republic online module.'),
(43, 21, 'Create an identity chart in your journal for your historical figure.'),
(44, 21, '  Curation of Primary Source Documents: Return to the Weimar Republic online module and explore cultural, economic, political, and societal resources, then reflect on your historical figure''s preferences and personalities and share the resources in our own course "online museum" about Weimar.'),
(45, 21, '  Discuss: Portraits of Weimar Society: Finally, you will contribute to the discussion forum by reflecting on reasons for failed democracy.'),
(46, 21, '  Choices and Consequences in Weimar Germany (Optional): If you are interested in digging deeper into the history of the Weimar Republic, read this excellent detailed timeline written by Weimar scholar Paul Bookbinder.'),
(47, 22, 'Explore the painting for a good long time. Observe shapes, colors, textures, the position of people and/or objects, etc. [<a href="http://www.abcgallery.com/G/grosz/grosz19.JPG" target=''_blank''>CLICK HERE</a> to view a larger pop-up version of this painting]'),
(48, 22, '  Enter the class database on desconstructing images (**not available in sampler course). Then fill in the fields provided, answering the following questions: <ul><li> What do you see in the picture? </li>        <li> What do you want to know/ What are you wondering? </li>         <li>What do you think the artist is saying?</li>         <li> In your opinion, who is the intended audience?</li></ul>'),
(49, 22, 'Enter the Discussion Forum and comment on the strategy of using image deconstruction in the classroom. Have you used this technique in the past, and if so, how? If not, how might you use visual images in your own classroom setting? Explain.'),
(50, 23, 'Go to: <a href="http://iwitness.usc.edu">http://iwitness.usc.edu</a> .'),
(51, 23, 'Log in with your email used for this course and the password facinghistory (one word). If you wish, you can change that password on your "Dashboard" on your profile once logged in. (You will be able to log in after Friday).'),
(52, 23, 'You will also receive an email invitation prompting you to join the Facing History and Ourselves Educators Group. Once you have accepted that invitation, you will see group listed under your "Students & Groups" tab.  In the "Assignments" column you will see "Information Quest: Life Before the War-Rena Finder".'),
(53, 23, 'Click that the text "Information Question: Life Before the War: Rena Finder" and begin.'),
(54, 23, 'The activity will appear. Click "Begin Activity" in the lower right and navigate through the activity.'),
(55, 23, 'Do not hesitate to contact Brandon Haas if you have any questions about the site or activity.'),
(56, 24, 'For the first part of this activity, you will access your journal by clicking <a href="http://facing.mrooms3.net/blog/edit.php?action=add/#region-main">this link</a>. For this journal prompt, please reflect on your name.'),
(58, 24, 'Now you''re ready to familiarize yourself with the Group Discussion area by posting a message and responding to at least two of the other course participants. Enter the discussion forum, and tell the group about your name.'),
(59, 25, 'Please view the video on fostering a reflective community by Facing History''s own Doc Miller.'),
(60, 25, 'Next, <a href="https://drive.google.com/file/d/0B9E6hxuwgtz-Y2M5QXowUzl4U2s/edit?usp=sharing" target="_blank">read more about Facing History''s thinking on reflective classroom practice</a>'),
(61, 25, 'Thirdly, read the guidelines for online discussion, found in the activity resources.'),
(62, 25, 'Finally, enter the discussion forum on fostering a reflective classroom. '),
(63, 26, 'Follow the steps for creating and editing your user profile.'),
(64, 26, 'You will now need to change your password. Please follow the steps for changing your password.'),
(65, 27, 'On a piece of paper, create your identity chart that represents your brainstorming of your ideas when thinking about the question, â€œWho am I?â€ '),
(66, 27, 'Your responses can address your role in a family (e.g., daughter, sister, mother, etc.), your hobbies and interests (e.g., guitar player, football fan, etc.), your background (e.g., religion, race, nationality, hometown, or place of birth), and/or your physical characteristics.'),
(67, 27, 'When you have finished creating your identity chart, export the chart as an image file (.jpg or .png are best) and add it to the class discussion forum for sharing identity charts. '),
(68, 27, 'When you have completed the activity, <a onclick="window.open(''http://facing.mrooms3.net/blog/edit.php?action=add/#region-main'','''',''scrollbars=yes,resizable=yes,width=700,height=800'');return false;" href="http://facing.mrooms3.net/blog/edit.php?action=add/#region-main">reflect in your journal</a> on how would your identity chart be different if you were writing it when you were an adolescent.'),
(69, 28, 'Make sure you know your Facing History username and password.'),
(70, 28, 'Update your Facing History and Ourselves website profile.'),
(71, 28, 'Familiarize yourself with the Educator Resources section of the Facing History and Ourselves website.'),
(72, 28, 'Once you have familiarized yourself with the Educator Resources page, complete the Scavenger Hunt activity at the end of this page.');

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE IF NOT EXISTS `types` (
  `id` int(11) NOT NULL,
  `type` varchar(45) DEFAULT NULL,
  `imgpath` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`id`, `type`, `imgpath`) VALUES
(1, 'Common Core', 'http://www.bresnickenglish.net/images/icons/common-core.png'),
(2, 'Database', 'http://www.bresnickenglish.net/images/icons/database.png'),
(3, 'Discussion', 'http://www.bresnickenglish.net/images/icons/database.png'),
(4, 'Interactive', 'http://www.bresnickenglish.net/images/icons/interactive.png'),
(5, 'Offline Activity', 'http://www.bresnickenglish.net/images/icons/offline-activity.png'),
(6, 'Timeline', 'http://www.bresnickenglish.net/images/icons/timeline.png'),
(7, 'Dig Deeper', 'http://www.bresnickenglish.net/images/icons/dig-deeper.png'),
(8, 'Audio', 'http://www.bresnickenglish.net/images/icons/audio.png'),
(9, 'PDF', 'http://www.bresnickenglish.net/images/icons/pdf.png'),
(10, 'Reading', 'http://www.bresnickenglish.net/images/icons/reading.png'),
(11, 'Video', 'http://www.bresnickenglish.net/images/icons/video.png'),
(12, 'Webpage', 'http://www.bresnickenglish.net/images/icons/webpage.png'),
(13, 'Jigsaw', 'http://www.bresnickenglish.net/images/icons/jigsaw.png'),
(14, 'Teaching Strategy', 'http://www.bresnickenglish.net/images/icons/teaching-strategy.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` char(40) NOT NULL,
  `group_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `group_id`, `created`, `modified`) VALUES
(1, 'stevebresnick', 'bbfefeeddf52e7a605f7a53f03b454f6b42a6e8f', 3, '2014-05-09 08:49:54', '2014-05-09 08:49:54'),
(2, 'admin', 'bbfefeeddf52e7a605f7a53f03b454f6b42a6e8f', 3, '2014-05-09 08:50:04', '2014-05-09 08:50:04'),
(3, 'facinghistory', 'bbfefeeddf52e7a605f7a53f03b454f6b42a6e8f', 4, '2014-05-09 08:50:19', '2014-05-13 00:21:27'),
(4, 'texashhb', 'b0b43108de8286de82409f3997a7dd5bbaefb0de', 6, '2014-05-09 08:50:41', '2014-05-09 08:50:41');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `activities`
--
ALTER TABLE `activities`
  ADD CONSTRAINT `activities_ibfk_1` FOREIGN KEY (`section_id`) REFERENCES `sections` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `activities_resources`
--
ALTER TABLE `activities_resources`
  ADD CONSTRAINT `activities_resources_ibfk_4` FOREIGN KEY (`resource_id`) REFERENCES `resources` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `activities_resources_ibfk_6` FOREIGN KEY (`activity_id`) REFERENCES `activities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `activities_types`
--
ALTER TABLE `activities_types`
  ADD CONSTRAINT `activities_types_ibfk_3` FOREIGN KEY (`activity_id`) REFERENCES `activities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `activities_types_ibfk_4` FOREIGN KEY (`type_id`) REFERENCES `types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `courses_resources`
--
ALTER TABLE `courses_resources`
  ADD CONSTRAINT `courses_resources_ibfk_3` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `courses_resources_ibfk_4` FOREIGN KEY (`resource_id`) REFERENCES `resources` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `courses_users`
--
ALTER TABLE `courses_users`
  ADD CONSTRAINT `courses_users_ibfk_2` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `courses_users_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `discussions`
--
ALTER TABLE `discussions`
  ADD CONSTRAINT `discussions_ibfk_4` FOREIGN KEY (`activity_id`) REFERENCES `activities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `essentialQuestions`
--
ALTER TABLE `essentialQuestions`
  ADD CONSTRAINT `essentialQuestions_ibfk_1` FOREIGN KEY (`section_id`) REFERENCES `sections` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `goals`
--
ALTER TABLE `goals`
  ADD CONSTRAINT `goals_ibfk_2` FOREIGN KEY (`activity_id`) REFERENCES `activities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `overviews`
--
ALTER TABLE `overviews`
  ADD CONSTRAINT `overviews_ibfk_3` FOREIGN KEY (`section_id`) REFERENCES `sections` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `resources_sections`
--
ALTER TABLE `resources_sections`
  ADD CONSTRAINT `resources_sections_ibfk_1` FOREIGN KEY (`resource_id`) REFERENCES `resources` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `resources_sections_ibfk_2` FOREIGN KEY (`section_id`) REFERENCES `sections` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `resources_types`
--
ALTER TABLE `resources_types`
  ADD CONSTRAINT `resources_types_ibfk_1` FOREIGN KEY (`type_id`) REFERENCES `types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `resources_types_ibfk_2` FOREIGN KEY (`resource_id`) REFERENCES `resources` (`type_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sections`
--
ALTER TABLE `sections`
  ADD CONSTRAINT `sections_ibfk_3` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sections_ibfk_4` FOREIGN KEY (`scope_id`) REFERENCES `scopes` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `steps`
--
ALTER TABLE `steps`
  ADD CONSTRAINT `steps_ibfk_2` FOREIGN KEY (`activity_id`) REFERENCES `activities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
