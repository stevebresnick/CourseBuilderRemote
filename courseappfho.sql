-- phpMyAdmin SQL Dump
-- version 2.11.11.3
-- http://www.phpmyadmin.net
--
-- Host: 68.178.216.191
-- Generation Time: Apr 30, 2014 at 08:38 AM
-- Server version: 5.0.96
-- PHP Version: 5.1.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `courseappfho`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `id` int(10) NOT NULL auto_increment,
  `section_id` int(10) default NULL,
  `required` tinyint(1) default NULL,
  `title` varchar(155) default NULL,
  `introbrief` varchar(600) default NULL,
  `introdetailed` text,
  `type_id` int(10) NOT NULL,
  `image` varchar(300) default NULL,
  `url` varchar(300) default NULL,
  PRIMARY KEY  (`id`),
  KEY `section_id` (`section_id`),
  KEY `type_id` (`type_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` VALUES(3, 12, 1, 'New Activity', 'This is the brief intro.', 'This is the detailed intro.', 7, NULL, NULL);
INSERT INTO `activities` VALUES(4, 10, 1, 'Choices 1 Activity 1', 'This is the brief intro. It is a really brief intro to tell you what the activity is about.', 'This is the detailed intro. This is a more detailed intro and it will have more information about the activity. ', 6, NULL, NULL);
INSERT INTO `activities` VALUES(7, 10, 1, 'A DD Activity for Session 1', 'This activity is a great activity. I am going to tell you why in the detailed introduction. But first, I''m going to type another sentence.', 'This activity is a great activity. I am going to tell you why in the detailed introduction.This activity is a great activity. I am going to tell you why in the detailed introduction.This activity is a great activity. I am going to tell you why in the detailed introduction.This activity is a great activity. I am going to tell you why in the detailed introduction.This activity is a great activity. I am going to tell you why in the detailed introduction.This activity is a great activity. I am going to tell you why in the detailed introduction.This activity is a great activity. I am going to tell you why in the detailed introduction.This activity is a great activity. I am going to tell you why in the detailed introduction.This activity is a great activity. I am going to tell you why in the detailed introduction.', 7, NULL, NULL);
INSERT INTO `activities` VALUES(9, 12, 1, 'Watch Anthony Appiah', 'Watch the video clip below with Professor Kwame Anthony Appiah, chair of the Facing History and Ourselves Scholars Board and author of numerous works, including Color Conscious: The Political Morality of Race and The Ethics of Identity.', 'Kwame Anthony Appiah discusses how and why humans create a â€œwe and theyâ€ distinction. Reflect on your personal experiences. If you have decided to keep a journal for this workshop (which we recommend), you may record your reflections in there. How did you learn which differences mattered and which did not?\r\n', 3, NULL, NULL);
INSERT INTO `activities` VALUES(11, 35, 1, 'Activity for Adding Resources', 'Activity for Adding ResourcesActivity for Adding ResourcesActivity for Adding ResourcesActivity for Adding Resources', 'Activity for Adding ResourcesActivity for Adding ResourcesActivity for Adding ResourcesActivity for Adding ResourcesActivity for Adding ResourcesActivity for Adding ResourcesActivity for Adding ResourcesActivity for Adding ResourcesActivity for Adding ResourcesActivity for Adding ResourcesActivity for Adding ResourcesActivity for Adding ResourcesActivity for Adding Resources', 6, NULL, NULL);
INSERT INTO `activities` VALUES(12, 40, 1, 'The Choices Students Made', 'How do the choices people make, individually and collectively, shape a society? Why did the people of Little Rock and others involved in this history do what they did, and what impact did their actions have? Our first two activities will explore these questions. Let''s first look at the choices made by students, both the Little Rock Nine and their classmates. ', 'Each and every student at Central High School in September 1957 made choices. As Elizabeth Eckford would later recall, most white students chose to remain "silent witnesses." The vast majority attended school each day and tried to avoid getting into trouble. Yet these students also made decisions that had important consequences. Only a small percentage of the white students at Central High School taunted or physically harassed African American students. Still other students chose to offer small gestures of kindness, a smile or a word of encouragement. The Little Rock Nine made the most difficult choice of allâ€”choosing to enter the menacing hallways of a school that did not want them, and in so doing, putting themselves at great risk. In this activity, we will explore this range of choices, and then as a group we will discuss their implications. After reading, watching, and exploring information about choices made by students in Little Rock, you will discuss your thoughts through three discussion prompts (you may combine your response into one that addresses all three questions).', 3, NULL, NULL);
INSERT INTO `activities` VALUES(13, 40, 1, 'Jigsaw: Other Choices in Little Rock', 'Now that we have looked at the choices students made in 1957â€“1958 at Central High School, let''s turn to the choices other individuals and groups made that year. We will do this using a jigsaw, a teaching strategy commonly used in many Facing History classrooms.', 'Some of you may be familiar with this strategy. Jigsaws allow students to concentrate on a specific text or primary source, share that learning with other students, and then place that primary source in a larger context by learning about related texts from other students.\r\n\r\nFirst, students are placed in groups (called "expert groups"), each given a different document. Students work together to ensure that each member of the group knows the material equally well. Next, members of groups are "jigsawed," or mixed, so that new groups are formed (called "core learning groups"), each containing members representing all of the original expert groups. Each "expert" teaches fellow students his/her content. From core groups students report out, create a group project, or develop individual projects or other assessment measures (essay, timeline, visual).\r\n\r\nIn this activity, we will use an abridged version of the jigsaw to explore choices made by leaders, the media, and Little Rock citizens during the first year of desegregation at Central High School.\r\n\r\nBoth your expert group and your core group assignments for this activity can be found in the table at the bottom of this activity.', 13, NULL, NULL);
INSERT INTO `activities` VALUES(15, 42, 1, 'Timeline 1933-1938', 'How did Hitler and the Nazi Party dismantle democracy and turn Germany into a totalitarian and "racial" state? In this activity, you will look at a timeline of critical events during the first five years of Hitler''s Third Reich.', 'How did Hitler and the Nazi Party dismantle democracy and turn Germany into a totalitarian and "racial" state? In this activity, you will look at a timeline of critical events during the first five years of Hitler''s Third Reich. The original source of this timeline is http://www.holocaustchronicle.org/. Follow the following steps:', 6, NULL, NULL);
INSERT INTO `activities` VALUES(16, 42, 1, 'What Is Facing History and Ourselves?', 'French philosopher Alexis de Tocqueville stated that democracy must be "an apprenticeship in liberty." Facing History and Ourselves is based on the belief that education in a democracy must support the delivery of this promise. Facing History helps students find meaning in the past and recognize the need for participation and responsible decision-making. In this activity, you will listen to voices from the Facing History and Ourselves community and find out what makes the organization unique.', 'For more than 30 years, Facing History has believed that education is the key to combating bigotry and nurturing democracy. Through a rigorous investigation of the events that led to the Holocaust, as well as other recent examples of genocide and mass violence, students in a Facing History class learn to combat prejudice with compassion, indifference with participation, and myth and misinformation with knowledge.\r\n\r\nWe work with educators throughout their careers to improve their effectiveness in the classroom, as well as their students'' academic performance and civic learning.', 4, NULL, NULL);
INSERT INTO `activities` VALUES(17, 16, 1, 'Overview: The Desegregation of Central High:', 'For Little Rock, Arkansas, in September of 1957, the hope and promise of Brown v. Board of Educationâ€”decided three years earlierâ€”would finally be realized. Little Rock would be in the spotlight of an entire nation, as the struggle toward equal rights for African American students would face its largest test to date. No one would confront that test more directly than nine courageous students and their families.', '', 6, 'http://upload.wikimedia.org/wikipedia/commons/a/a6/LTC_Marion_Johnson_turns_students_away.jpg', 'http://facing.mrooms3.net/course/view.php?id=58&pageid=1737');
INSERT INTO `activities` VALUES(18, 16, 1, 'Book Group Discussion: Warriors Don''t Cry', 'As a requirement for this online course, you have read Warriors Don''t Cry, a memoir by Little Rock Niner Melba Pattillo Beals. A major component of this week''s session is participation in an online group book discussion of this work. Your course facilitator will provide you with more details.', '', 3, 'http://www.rainbowresource.com/products/009582.jpg', 'http://facing.mrooms3.net/course/view.php?id=58&pageid=1740');
INSERT INTO `activities` VALUES(19, 16, 1, 'Deconstructing an Image: Will Counts''s Photo of Elizabeth Eckford', 'In this activity, we will deconstruct this photo as we try to make meaning out of a painful episode in U.S. history. We will be looking at Will Counts''s famous image of Elizabeth Eckford. ', 'For many of us and our students, visual images can bring meaning and illuminate history in ways that words alone might not.\r\n\r\nOn that fateful first day of school in September 1957, photographer Will Counts captured a startling image of Elizabeth Eckford and the angry mob behind her. This photograph would take its place among some of the most iconic photos of the civil rights era.\r\n\r\nIn this activity, we will deconstruct this photo as we try to make meaning out of a painful episode in U.S. history. We will be looking at Will Counts''s famous image of Elizabeth Eckford. In the photograph, Eckford is being followed by an angry mob on the day she first attempts to enter Central High School in Little Rock, Arkansas. We will be using a variation of a teaching strategy called analyzing visual images that can be found in the Educator Resources section of Facing History''s website.', 1, 'http://fedora.dlib.indiana.edu/fedora/get/iudl:703665/LARGE', 'http://facing.mrooms3.net/course/view.php?id=58&pageid=1739');
INSERT INTO `activities` VALUES(20, 16, 1, 'Discussion: Pedagogy', 'In this session, you learned about the desegregation of Central High School in 1957. The history was presented through text, video, a timeline of key events, and the voices and personal testimony of Elizabeth Eckford, Melba Pattillo Beals, and Terrence Roberts of the Little Rock Nine.    For our final discussion, let''s put on our "teacher hats" to have a conversation about effective ways to teach history.', '', 3, 'http://upload.wikimedia.org/wikipedia/commons/thumb/2/27/Teacher.jpg/320px-Teacher.jpg', 'http://facing.mrooms3.net/course/view.php?id=58&pageid=1738');

-- --------------------------------------------------------

--
-- Table structure for table `activities_resources`
--

CREATE TABLE `activities_resources` (
  `id` int(10) NOT NULL auto_increment,
  `activity_id` int(10) NOT NULL,
  `resource_id` int(10) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `resource_id` (`resource_id`),
  KEY `activity_id` (`activity_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `activities_resources`
--

INSERT INTO `activities_resources` VALUES(8, 4, 20);
INSERT INTO `activities_resources` VALUES(9, 7, 21);
INSERT INTO `activities_resources` VALUES(10, 9, 23);
INSERT INTO `activities_resources` VALUES(11, 3, 24);
INSERT INTO `activities_resources` VALUES(12, 7, 26);
INSERT INTO `activities_resources` VALUES(13, 3, 27);
INSERT INTO `activities_resources` VALUES(14, 12, 28);
INSERT INTO `activities_resources` VALUES(15, 13, 29);
INSERT INTO `activities_resources` VALUES(16, 13, 30);
INSERT INTO `activities_resources` VALUES(17, 13, 31);
INSERT INTO `activities_resources` VALUES(18, 15, 37);
INSERT INTO `activities_resources` VALUES(19, 16, 38);
INSERT INTO `activities_resources` VALUES(20, 16, 39);
INSERT INTO `activities_resources` VALUES(21, 17, 41);
INSERT INTO `activities_resources` VALUES(22, 17, 42);
INSERT INTO `activities_resources` VALUES(23, 17, 43);
INSERT INTO `activities_resources` VALUES(24, 17, 44);
INSERT INTO `activities_resources` VALUES(25, 18, 45);
INSERT INTO `activities_resources` VALUES(26, 19, 46);
INSERT INTO `activities_resources` VALUES(27, 19, 47);
INSERT INTO `activities_resources` VALUES(28, 19, 48);

-- --------------------------------------------------------

--
-- Table structure for table `activities_types`
--

CREATE TABLE `activities_types` (
  `id` int(10) NOT NULL,
  `activity_id` int(10) NOT NULL,
  `type_id` int(10) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `activity_id` (`activity_id`),
  KEY `type_id` (`type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activities_types`
--


-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `title` varchar(50) default NULL,
  `intro` text,
  `created` datetime default NULL,
  `modified` datetime default NULL,
  `callnumber` varchar(10) NOT NULL,
  `master` tinyint(1) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` VALUES(5, 'The Universal Declaration of Human Rights', 'The Universal Declaration of Human Rights was composed in the years following World War II, a cataclysmic event marking the culmination of an era where over 90 million people perished in two world wars, two genocides, and two atomic bombings. The nations of the world had come face to face with the reality that human actions could now lead to the destruction of mankind, and this spurred the leaders of the United Nations to act. Elearnor Roosevelt, former First Lady of the United States, helped lead the initiative. In this online workshop, we will learn about the text of the UDHR as well as the ways to teach this document to your students. This was just added.', '2014-03-17 20:30:36', '2014-03-27 21:51:30', 'OS2013NAT5', NULL);
INSERT INTO `courses` VALUES(12, 'Holocaust and Human Behavior', 'The twentieth century will forever be marked by the Nazisâ€™ attempt to murder the Jews of Europe solely because of their ancestry. The events that led to the Holocaust raise profound moral questions about the consequences of our actions and our beliefs. While the Holocaust was unique, the questions remain universal.\r\nFacing History and Ourselves is proud to offer Holocaust and Human Behavior, an online course for educators providing content and methodology to help students connect history to the moral questions inherent in a study not only of violence, racism, and antisemitism but also of courage, caring, and compassion. This online course will take place over eight week-long facilitated sessions. \r\n', '2014-04-15 11:25:49', '2014-04-15 11:25:49', 'OS2014NAT1', NULL);
INSERT INTO `courses` VALUES(27, 'Choices In Little Rock', 'Choices in Little Rock explores the 1957 desegregation of Central High School in Little Rock, Arkansas. The online course traces the legal and personal struggles of African Americans from Jim Crow America through Brown v. Board of Education, and ultimately, to the courageous actions of nine young men and women determined to make desegregation a reality.', '2014-03-11 21:56:04', '2014-04-17 09:31:46', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `discussions`
--

CREATE TABLE `discussions` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(255) default NULL,
  `intro` text,
  `prompt` text,
  `activity_id` int(10) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `activity_id` (`activity_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `discussions`
--

INSERT INTO `discussions` VALUES(6, 'New Discussion Booyah', 'This is my intro', 'This is my prompt', 3);
INSERT INTO `discussions` VALUES(11, 'A Discussion for a New Activity', 'There are many discussion questions that you can ask about. However, when it comes to asking really good discussion questions, there are a lot of things that can go wrong.', 'In your opinion, why is it so difficult to ask discussion questions that are really provocative and which get people''s attention?', 3);
INSERT INTO `discussions` VALUES(20, 'This is my discussion for this activity.', '$this->redirect(array(''controller''=>''activities'', ''action'' => $sectionid));$this->redirect(array(''controller''=>''activities'', ''action'' => $sectionid));$this->redirect(array(''controller''=>''activities'', ''action'' => $sectionid));$this->redirect(array(''controller''=>''activities'', ''action'' => $sectionid));$this->redirect(array(''controller''=>''activities'', ''action'' => $sectionid));', '$this->redirect(array(''controller''=>''activities'', ''action'' => $sectionid));$this->redirect(array(''controller''=>''activities'', ''action'' => $sectionid));$this->redirect(array(''controller''=>''activities'', ''action'' => $sectionid));$this->redirect(array(''controller''=>''activities'', ''action'' => $sectionid));$this->redirect(array(''controller''=>''activities'', ''action'' => $sectionid));', 7);
INSERT INTO `discussions` VALUES(21, 'This is another discussion for this activity', '$this->redirect(array(''controller''=>''activities'', ''action'' => $sectionid));$this->redirect(array(''controller''=>''activities'', ''action'' => $sectionid));$this->redirect(array(''controller''=>''activities'', ''action'' => $sectionid));$this->redirect(array(''controller''=>''activities'', ''action'' => $sectionid));$this->redirect(array(''controller''=>''activities'', ''action'' => $sectionid));$this->redirect(array(''controller''=>''activities'', ''action'' => $sectionid));', '$this->redirect(array(''controller''=>''activities'', ''action'' => $sectionid));$this->redirect(array(''controller''=>''activities'', ''action'' => $sectionid));$this->redirect(array(''controller''=>''activities'', ''action'' => $sectionid));$this->redirect(array(''controller''=>''activities'', ''action'' => $sectionid));$this->redirect(array(''controller''=>''activities'', ''action'' => $sectionid));$this->redirect(array(''controller''=>''activities'', ''action'' => $sectionid));', 7);
INSERT INTO `discussions` VALUES(22, 'This Discussion was added from the Session page', '$this->redirect(array(''controller''=>''activities'', ''action'' => $sectionid));$this->redirect(array(''controller''=>''activities'', ''action'' => $sectionid));$this->redirect(array(''controller''=>''activities'', ''action'' => $sectionid));$this->redirect(array(''controller''=>''activities'', ''action'' => $sectionid));$this->redirect(array(''controller''=>''activities'', ''action'' => $sectionid));$this->redirect(array(''controller''=>''activities'', ''action'' => $sectionid));', '$this->redirect(array(''controller''=>''activities'', ''action'' => $sectionid));$this->redirect(array(''controller''=>''activities'', ''action'' => $sectionid));$this->redirect(array(''controller''=>''activities'', ''action'' => $sectionid));$this->redirect(array(''controller''=>''activities'', ''action'' => $sectionid));$this->redirect(array(''controller''=>''activities'', ''action'' => $sectionid));$this->redirect(array(''controller''=>''activities'', ''action'' => $sectionid));', 7);
INSERT INTO `discussions` VALUES(23, '"What Do We Do With a Variation?"', 'Finally, enter the discussion about "What Do We Do with a Variation?" In this discussion forum, you will think about the differences you experience on a daily basis and why they matter.', 'What differences matter in your classroom, in your school, or at your own dinner table? How do the tensions of creating a community play out in your classroom or other educational environments?', 9);
INSERT INTO `discussions` VALUES(24, 'The Second Discussion', 'This is the second discussion for this activity. It''s really great and I really hope you like it.', 'This is the second discussion for this activity. It''s really great and I really hope you like it.This is the second discussion for this activity. It''s really great and I really hope you like it.This is the second discussion for this activity. It''s really great and I really hope you like it.This is the second discussion for this activity. It''s really great and I really hope you like it.This is the second discussion for this activity. It''s really great and I really hope you like it.This is the second discussion for this activity. It''s really great and I really hope you like it.', 4);
INSERT INTO `discussions` VALUES(28, 'The First DIscussion', 'asd;flkajs;dflkajsf;dlkasjdf;laksjf', 'as;dlfkja;slfdkja;sflkjas;dlfkjas;dflkjas;fldkajs;fdlkjas;fdlkajsd;f', 4);
INSERT INTO `discussions` VALUES(29, 'Discussion on Choices Students Made', 'Please share one of the words, phrases, or sentences you wrote down from either the video clip, readings, or web pages, and answer the following questions:', '\r\n    What does this word or phrase say about the choices students made? Why do you think the student(s) made those choices? What were the consequences of those choices? ', 12);
INSERT INTO `discussions` VALUES(30, 'Core Group 1 Discussion', 'In a few sentences, give one example of the choices made by one of the individuals highlighted in your expert group. (Keep this description brief.)', 'Why do you think he or she made that choice?\r\nWhat impact did it have? \r\nWhat were the consequences of that choice?\r\n', 13);
INSERT INTO `discussions` VALUES(31, 'Core Group 2 Discussion', 'In a few sentences, give one example of the choices made by one of the individuals highlighted in your expert group. (Keep this description brief.)', 'Why do you think he or she made that choice?\r\nWhat impact did it have? \r\nWhat were the consequences of that choice?', 13);
INSERT INTO `discussions` VALUES(32, 'Core Group 3 Discussion', 'In a few sentences, give one example of the choices made by one of the individuals highlighted in your expert group. (Keep this description brief.)', 'Why do you think he or she made that choice? What impact did it have? What were the consequences of that choice?', 13);
INSERT INTO `discussions` VALUES(34, 'Most Influential Factor in Hitler''s Rise', 'For this brief discussion forum, you will answer the following question:', 'What was the most important or influential factor that helped Hitler and the Nazi Party dismantle democracy and turn Germany into a totalitarian and "racial" state? Explain your selection.\r\n', 15);
INSERT INTO `discussions` VALUES(35, 'Discussion: Warriors Don''t Cry', 'Melba Pattillo Beals''s award-winning account of her experiences as one of the Little Rock Nine is a wonderful resource for the classroom. Just as the personal recollections of Elizabeth Eckford help bring this history to life, reading Beals''s perspective is especially powerful for our students who are around the same age as she was in 1957.', 'Having read Warriors Don''t Cry, please respond to the following prompts:\r\n\r\n    As you read this book, which passages illuminate the range of choices people made that had an impact on Beals''s experience?\r\n\r\n    If you have previously taught this book, which passages and aspects have been most effective and engaging for your students, and why?\r\n', 18);
INSERT INTO `discussions` VALUES(36, 'Deconstructing an Image', 'In the subject line of your post, write a headline that a newspaper might have used to go along with your interpretations. Then, answer the following questions:\r\n', 'This is an editorial image by the photographer. He has a point of view and is trying to tell you something through this photograph. What is he trying to tell you?\r\n    Please add some of your interpretations of the image as a whole: What do you think is happening in this photo? What visual clues from the photo give you this impression?', 19);
INSERT INTO `discussions` VALUES(37, 'Discussion on Pedagogy', 'In this session, you learned about the desegregation of Central High School in 1957. The history was presented through text, video, a timeline of key events, and the voices and personal testimony of Elizabeth Eckford, Melba Pattillo Beals, and Terrence Roberts of the Little Rock Nine. ', 'For our final discussion, let''s put on our "teacher hats" to have a conversation about effective ways to teach history:\r\n\r\n    Pedagogically, what is the benefit of taking the time to go deeper into a particular moment in history?\r\n\r\n    What is the benefit of using primary source documents?\r\n\r\n    And what is the benefit of using personal testimonies to teach history?\r\n', 20);

-- --------------------------------------------------------

--
-- Table structure for table `essentialQuestions`
--

CREATE TABLE `essentialQuestions` (
  `id` int(10) NOT NULL auto_increment,
  `section_id` int(10) NOT NULL,
  `question` varchar(400) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `section_id` (`section_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `essentialQuestions`
--

INSERT INTO `essentialQuestions` VALUES(2, 10, 'Why is the sky blue? What if it were green instead?');
INSERT INTO `essentialQuestions` VALUES(4, 10, 'Why are the children in the yard screaming bloody murder?');
INSERT INTO `essentialQuestions` VALUES(5, 16, 'What happened at Central High School in Little Rock, Arkansas, in 1957?');
INSERT INTO `essentialQuestions` VALUES(6, 16, 'What can we learn from the actions taken by the Little Rock Nine that inform us about the challenges of maintaining and preserving a democracy?');
INSERT INTO `essentialQuestions` VALUES(25, 10, 'What is the answer to this question?');
INSERT INTO `essentialQuestions` VALUES(28, 12, 'What will be the first essentail question for session 2?');
INSERT INTO `essentialQuestions` VALUES(29, 12, 'What will be the second essentail question for session 2?');
INSERT INTO `essentialQuestions` VALUES(30, 12, 'What will be the first essential question for session 2?');
INSERT INTO `essentialQuestions` VALUES(31, 40, 'How do the choices people make, individually and collectively, shape a society?');
INSERT INTO `essentialQuestions` VALUES(32, 40, 'How did the people of Little Rock determine what was at stake, and how did that shape the choices they made?');
INSERT INTO `essentialQuestions` VALUES(33, 40, 'What are the challenges and opportunities we face as educators when we bring discussions about race into our classrooms?');
INSERT INTO `essentialQuestions` VALUES(34, 42, 'Who or what shapes the values of a society?');
INSERT INTO `essentialQuestions` VALUES(35, 42, 'What role do leaders play in shaping societal values? ');
INSERT INTO `essentialQuestions` VALUES(36, 42, 'What role do laws play in shaping societal values?');
INSERT INTO `essentialQuestions` VALUES(37, 16, 'Pedagogically, what is the benefit of taking the time to go deeper into a particular moment in history? And what is the benefit of using personal testimonies to teach history?');
INSERT INTO `essentialQuestions` VALUES(38, 16, 'What is the benefit of using personal testimonies to teach history? (Twitter)');

-- --------------------------------------------------------

--
-- Table structure for table `goals`
--

CREATE TABLE `goals` (
  `id` int(11) NOT NULL auto_increment,
  `activity_id` int(10) NOT NULL,
  `goal` varchar(155) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `activity_id` (`activity_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `goals`
--

INSERT INTO `goals` VALUES(1, 3, 'The first goal is to figure out what the other goals should be.');
INSERT INTO `goals` VALUES(2, 3, 'The second goal is to figure out how to implement this goal in the first place.');
INSERT INTO `goals` VALUES(12, 4, 'Third Goal is really great. It really is.');
INSERT INTO `goals` VALUES(16, 3, 'The third goal is to figure out why I''m creating a third goal in the first place.');
INSERT INTO `goals` VALUES(17, 9, 'To learn about Professor Appiah and some of his views');
INSERT INTO `goals` VALUES(18, 9, 'To learn more about Facing History and Ourselves');
INSERT INTO `goals` VALUES(19, 9, 'To become aquainted with the type of videos we will watch in this course.');
INSERT INTO `goals` VALUES(26, 4, 'The fourth goal is even better.');
INSERT INTO `goals` VALUES(27, 12, 'You will better understand the students'' points of view by considering the choices they made during the 1957-1958 school year');
INSERT INTO `goals` VALUES(28, 13, 'To work together to figure out the jigsaw');
INSERT INTO `goals` VALUES(29, 13, 'To avoid getting snipped in half by the jigsaw');
INSERT INTO `goals` VALUES(32, 15, ' To learn  about nazi propaganda');
INSERT INTO `goals` VALUES(33, 15, 'To learn about nazi propaganda ');

-- --------------------------------------------------------

--
-- Table structure for table `overviews`
--

CREATE TABLE `overviews` (
  `id` int(11) NOT NULL auto_increment,
  `section_id` int(10) default NULL,
  `paragraph` text,
  PRIMARY KEY  (`id`),
  KEY `section_id` (`section_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `overviews`
--

INSERT INTO `overviews` VALUES(2, 12, 'A Facing History and Ourselves journey begins with an examination of individual identity: what are the forces and influences that shape who we are and how we think about ourselves? In Session 2, we focus on how an individual''s identity impacts the choices one may or may not make.');
INSERT INTO `overviews` VALUES(4, 12, 'This is paragraph 2. I really like this as well. It was a great paragraph and it was very short, but now I have added some new words to the paragraph and it''s much longer. This is a bit long than it was even before this.');
INSERT INTO `overviews` VALUES(6, 10, 'Romeo and Juliet is a tragedy written by William Shakespeare early in his career about two young star-crossed lovers whose deaths ultimately reconcile their feuding families. It was among Shakespeare''s most popular plays during his lifetime and, along with Hamlet, is one of his most frequently performed plays. Today, the title characters are regarded as archetypal young lovers. They are great.');
INSERT INTO `overviews` VALUES(14, 10, 'The first session of Choices in Little Rock will provide an orientation for you as an online learner. In this session, you will begin by setting up your user profile on the Facing History and Ourselves website and familiarizing yourself with the treasure trove of educational resources that are now available to you as a Facing History educator. You will then create and share an identity chart about yourself and read two short selections that explore key ideas of identity, race, and community. Finally, you will interact with your fellow course participants through the discussion forum.');
INSERT INTO `overviews` VALUES(15, 12, 'I really like this paragraph. It starts with a topic sentence, which is a compound sentence. Next, it goes to the first supporting detail of the paragraph, which supports the topic sentence. Finally, it resolves to tell you what is the final important detail of the paragraph. I really like it very very much.');
INSERT INTO `overviews` VALUES(16, 40, 'History is not inevitable, and whether we are bystanders or upstanders, we are all players in history. In this session, we will consider and discuss the choices made by different groups and individuals who played a part in the desegregation of Little Rock Central High School. The knowledge we have gained thus far in this seminar concerning the history of race and racism in America will provide crucial context as we consider the historical factors and influences that led to those choices.');
INSERT INTO `overviews` VALUES(17, 40, 'How do the choices people make, individually and collectively, shape a society? Why did the people of Little Rock and others involved in this history do what they did, and what impact did their actions have? Our first two activities will explore these questions. We will first look at the choices made by students of Central High School, both black and white. Of course, the players in this history include not only the Little Rock Nine and their classmates but also the citizens of Little Rock, teachers, elected officials, and many others. In the jigsaw activity, we will explore choices made by three different groups: leaders, the media, and community members.');
INSERT INTO `overviews` VALUES(18, 40, 'At this point in our course, we have explored the history of Jim Crow America, the desegregation of Central High School, and the choices made by individuals and groups who played a role in that history. For many of us, talking about raceâ€”even among our peersâ€”can be challenging and emotionally charged. This should not surprise us, given the deep-rooted history of race and racism in the United States that we have been studying. Confronting this history, as individuals and as a nation, is the right thing to do. And yet, if such a task feels daunting on a personal level, it may feel even more so to bring these discussions into our classrooms.');
INSERT INTO `overviews` VALUES(19, 40, 'In the final assignments this week, we will step back from that history and pause to consider the challenges and opportunities we face as educators when we bring discussions about race and difficult histories into our classrooms.\r\n\r\n');
INSERT INTO `overviews` VALUES(20, 40, 'For more activities and further exploration of the themes covered in this session, see Choices in Little Rock: A Facing History and Ourselves Teaching Guide, "Part 3: Choices in Little Rock."');
INSERT INTO `overviews` VALUES(22, 42, 'In January of 1933, Adolf Hitler became chancellor of Germany. Within weeks of taking office, he began to destroy the Weimar Republic and replace it with a totalitarian government. Many people have pointed out that he did not destroy democracy all at once. Instead, he moved gradually, with one seemingly small compromise leading to another and yet another. By the time many were aware of what was happening, they were isolated and alone. \r\n');
INSERT INTO `overviews` VALUES(23, 42, 'This session will examine the steps that led to the dismantling of democracy. It also explores why few Germans protested the loss of their freedom and many even applauded the changes the Nazis brought.\r\n(For a more extensive examination of these issues, see our resource book, Facing History and Ourselves: Holocaust and Human Behavior, Chapters 4 and 5.)\r\n');
INSERT INTO `overviews` VALUES(24, 16, 'In previous sessions, we looked at the intersection between identity and race. We explored the history of Jim Crow America, when U.S. federal and state laws supported the subordination of African Americans. And we considered hard-fought efforts and well-considered strategies to bring down this oppressive system, efforts that would eventually lead to Brown v. Board of Education. That decision would overturn fifty years of "separate but equal" (Plessy v. Ferguson) as it applied to public schools.');
INSERT INTO `overviews` VALUES(25, 16, 'In this session, we will jump ahead three years after the Brown decision, to September, 1957, when nine courageous African American students attempted to desegregate Central High School in Little Rock, Arkansas, and found themselves in the spotlight of an entire nation. These studentsâ€”along with their familiesâ€”made difficult choices not to stand by in the face of injusticeâ€”choices that put them and their loved ones at risk of verbal and physical attacks.');
INSERT INTO `overviews` VALUES(26, 16, 'This session will first present a historical overview through readings, video clips, and a timeline. We will then move to personal testimonies from some of the Little Rock Nine. Although it is crucial to investigate primary source documents and study the facts, figures, and images of historical events, it is also important to look at personal stories and testimonies of those who played a part, as this brings to life this history in a powerful way. When we study oppression on such a large scale, it can be difficult to connect with literally generations of victims. But when we (and our students) look deeply into the story of just one human being who played a part in that historyâ€”her passions, despairs, struggles, relationshipsâ€”we begin to "connect the dots" between the history we are studying, what that history meant to real human beings, and our own lives. Keep this in mind as we hear from three of the Little Rock Nine: Elizabeth Eckford, Melba Pattillo Beals and Terrence Roberts.');
INSERT INTO `overviews` VALUES(27, 16, 'We will end the session with a conversation about classroom applications of the materials we have expored, reflecting on our roles as educators and the challenges and opportunities that are implicit in that role. Together, we will consider ways to most effectively present this history to our students.\r\n\r\n');
INSERT INTO `overviews` VALUES(28, 16, 'For more activities and further exploration of the themes covered in this session, see Choices in Little Rock: A Facing History and Ourselves Teaching Guide--Part 3: Choices in Little Rock.');

-- --------------------------------------------------------

--
-- Table structure for table `resources`
--

CREATE TABLE `resources` (
  `id` int(10) NOT NULL auto_increment,
  `title` varchar(255) default NULL,
  `type_id` int(10) default NULL,
  `path` varchar(1300) default NULL,
  `brightcove` int(13) default NULL,
  `description` text,
  `note` text,
  PRIMARY KEY  (`id`),
  KEY `type_id` (`type_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=50 ;

--
-- Dumping data for table `resources`
--

INSERT INTO `resources` VALUES(19, 'Section 10', 1, 'Section 10', NULL, 'Section 10', 'Section 10');
INSERT INTO `resources` VALUES(20, 'Section 10 Activity 4', 2, 'Section 10 Activity 4', NULL, 'Section 10 Activity 4', 'Section 10 Activity 4');
INSERT INTO `resources` VALUES(21, 'Section 10 Activity 7', 1, 'Section 10 Activity 7', NULL, 'Section 10 Activity 7', 'Section 10 Activity 7');
INSERT INTO `resources` VALUES(22, 'Another Session Level Resource', 9, 'asdfasldfkjh', NULL, 'asdflkajshflkjshf', 'asdlfkjahslfdkjh');
INSERT INTO `resources` VALUES(23, 'CNN Homepage', 12, 'http://www.cnn.com', NULL, 'If you want to find out information on the disappearance of Malaysian Airlines Flight 370, this is the place you want to go. A very good, full-service news site that has been accused of being left-wing biased.', 'This is just a placeholder for a real resource. I wouldn''t put the CNN homepage as a normal resource in a course or an activity.');
INSERT INTO `resources` VALUES(24, 'A new Activity Level Resource', 2, 'asfdaslkdfj', NULL, 'asdflkjasflaksjhfdlkasjhfd', 'asdlfkjahsdflkajshdflkajshfdlkajshf');
INSERT INTO `resources` VALUES(25, 'Session Level Resource', 8, 'http://www.facinghistory.org', NULL, 'asfdasdfasdf', 'asdfasdfasdf');
INSERT INTO `resources` VALUES(26, 'A Pivotal Moment in the Civil Rights Movement Lesson 1', 6, '8760947-A-Pivotal-Moment-in-the-Civil-Rights-Movement-The-Murder-of-Emmett-Till-Lesson-1.pdf', NULL, 'A rich understanding of ourselves and history includes understanding why certain events carry special significance as "pivotal" moments-moments that change the direction of attitudes, customs, and actions. In this lesson, students begin to explore how Emmett Till''s murder became a pivotal moment in civil rights history through understanding the choices made by individuals and groups and the consequences of those choices. This lesson also helps students think about the pivotal moments in their own lives and to consider the different ways people respond to violence and injustice today.', 'This lesson is part of the following unit:\r\nA Pivotal Moment in the Civil Rights Movement: The Murder of Emmett Till  (https://www.facinghistory.org/resources/units/a-pivotal-moment-civil-rights-move)');
INSERT INTO `resources` VALUES(27, 'Union College Website', 12, 'http://www.union.edu', NULL, 'This is the homepage for union college. Right now, Union is in the NCAA Frozen Four facing Boston College in the semi-final game. The score right now is 1-0 BC, but the game is still early. It looks like we''re being outplayed right now, but we still have a chance to come back', 'This is a placeholder resource for this activity and will be replaced.');
INSERT INTO `resources` VALUES(28, 'Choices in Little Rock: A Facing History and Ourselves Teaching Guide', 10, 'https://www.facinghistory.org/for-educators/educator-resources/resources/choices-little-rock', NULL, 'In Part 3, Lesson 4: "The Choices the Students Made," read the following student accounts: Georgia Dortch and Jane Emery (bottom of p. 103), Jim Eison (p. 108â€“110), Link (p. 115â€“116), and Jane Emery (p. 116).', '');
INSERT INTO `resources` VALUES(29, 'The Choices Leaders Made', 10, 'http://facing.mrooms3.net/course/view.php?id=49&pageid=941', NULL, 'For 17 days, the Arkansas National Guard kept the Little Rock Nine from entering Central High. During that period, a number of people tried to resolve the crisis. Both those who favored integration and those who opposed it saw the crisis as a constitutional issueâ€”a question of federalism. Does a governor or any other state official have the right to disobey a decision issued by the U.S. Supreme Court?', '');
INSERT INTO `resources` VALUES(30, 'The Choices the Media Made', 10, 'http://facing.mrooms3.net/course/view.php?id=49&pageid=940', NULL, 'Journalists from every part of the United States and countries around the world came to Little Rock to report on events at Central High School. Among them were newspaper reporters, photographers, TV and radio correspondents, and camera crews. They too made decisions, and their choices helped shape the outcome.', '');
INSERT INTO `resources` VALUES(31, 'Choices Citizens Made', 10, 'http://facing.mrooms3.net/course/view.php?id=49&pageid=939', NULL, 'Little Rock was considered a moderate Southern city. Libraries, parks, and public buses had all been integrated without a fight. Yet, throughout the 1950s, life in the city was becoming more and more separate. The new neighborhoods that sprang up west of the downtown area after World War II were all-white communities. African Americans lived mainly in the east and southeast parts of the city. As the population on the west side grew, a new high school was built there. Hall High School opened as an all-white school the same year Central High School was desegregated. That decision angered many white families who lived in the Central High School district. They saw the new school as a way of protecting the wealthiest families in Little Rock from integration, while forcing it on middle-class and working-class white families.', '');
INSERT INTO `resources` VALUES(32, 'Oprah: The Little Rock Nine Forgive Their Tormentors', 11, 'https://www.youtube.com/watch?v=SAsh_PDr1cc&feature=youtu.be', NULL, 'In the late ''50s at Little Rock Central High School, the first group of African-American students integrated into the school faced torment from many of their white classmates. Nearly 40 years later, members of the Little Rock Nine came face-to-face with some of their bullies. Watch as one of those bullies asks forgiveness on Oprah''s stage. Plus, see why Oprah says that moment took courage and reflected one of the main messages of "The Oprah Winfrey Show."', '');
INSERT INTO `resources` VALUES(33, '"Choices People Made: Elected Leaders"', 6, 'https://www.facinghistory.org/for-educators/educator-resources/resource-collections/choosing-to-participate/choices-people-made-elected-lead', NULL, 'This timeline describes the stand taken by Arkansas Governor Orval Faubus in September, 1957. According to Faubus, Arkansas was to be considered "an occupied territory."', '');
INSERT INTO `resources` VALUES(34, 'Choices People Made: White Citizens of Little Rock', 6, 'https://www.facinghistory.org/for-educators/educator-resources/resource-collections/choosing-to-participate/choices-people-made-white-citize', NULL, 'This timeline describes choices made by the white citizens of Little Rock, including religious leaders and ordinary citizens.', '');
INSERT INTO `resources` VALUES(35, 'Choices People Made: Public Servants ', 10, 'https://www.facinghistory.org/for-educators/educator-resources/resource-collections/choosing-to-participate/choices-people-made-public-serva', NULL, 'When Governor Faubus withdrew the Arkansas National Guard from Central High, Woodrow Mann, the mayor of Little Rock, asked the fire chief to use fire trucks and high-pressure hoses to control the mob. The chief refused. Mann then called the chief of police for help. He told the mayor he was ill and could not get involved. Next Mann turned to Eugene Smith, the assistant police chief. He said he would personally head the police force the next morning.', '');
INSERT INTO `resources` VALUES(36, 'Session Resource 1', 12, 'http://www.facinghistory.org', NULL, 'Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description ', 'Note NoteNoteNoteNoteNoteNoteNoteNoteNoteNoteNoteNoteNoteNoteNote ');
INSERT INTO `resources` VALUES(37, 'How the Nazis Came to Power', 11, 'http://www.cnn.com', 2147483647, 'Description DescriptionDescriptionDescriptionDescriptionDescriptionDescriptionDescriptionDescriptionDescriptionDescriptionDescriptionDescriptionDescriptionDescriptionDescriptionDescriptionDescriptionDescriptionDescriptionDescriptionDescriptionDescriptionDescription ', 'Note NoteNoteNoteNoteNoteNoteNoteNoteNoteNoteNoteNoteNoteNoteNoteNoteNoteNoteNoteNoteNoteNoteNoteNoteNoteNoteNote ');
INSERT INTO `resources` VALUES(38, '"Any Questions?" How Facing History and Ourselves Works', 11, 'http://bcove.me/9dq8o4pd', 2147483647, '<!-- Start of Brightcove Player --> <div style="display: none;"></div> <!-- By use of this code snippet, I agree to the Brightcove Publisher T and C  found at https://accounts.brightcove.com/en/terms-and-conditions/.  --> <script src="http://admin.brightcove.com/js/BrightcoveExperiences.js" type="text/javascript"></script> <object id="myExperience3067126507001" class="BrightcoveExperience"><param name="bgcolor" value="#FFFFFF" /><param name="width" value="560" /><param name="height" value="315" /><param name="playerID" value="2083241027001" /><param name="playerKey" value="AQ~~,AAABYEdBaAk~,1dGnVytVBSw9Y4yoko71XnFgkvpqea1-" /><param name="isVid" value="true" /><param name="isUI" value="true" /><param name="dynamicStreaming" value="true" /><param name="@videoPlayer" value="3067126507001" /></object> <!--  This script tag will cause the Brightcove Players defined above it to be created as soon as the line is read by the browser. If you wish to have the player instantiated only after the rest of the HTML is processed and the page load is complete, remove the line. --> <script type="text/javascript">// <![CDATA[ brightcove.createExperiences(); // ]]></script><!-- End of Brightcove Player -->\r\n\r\nFacing History and Ourselves teaches students to think for themselves and widen their perspectives. This video tells the story of what we do, how we do it, and the many ways that you can take part.', 'This is a Brightcove Resource. The Embed Code is in the Description (click Edit then copy and paste)');
INSERT INTO `resources` VALUES(39, 'Alumni Voice: An Interview with Matt Damon', 11, 'http://bcove.me/19od3z6e', NULL, '<!-- Start of Brightcove Player -->\r\n<div style="display: none;"></div>\r\n<!--\r\nBy use of this code snippet, I agree to the Brightcove Publisher T and C \r\nfound at https://accounts.brightcove.com/en/terms-and-conditions/. \r\n-->\r\n<script src="http://admin.brightcove.com/js/BrightcoveExperiences.js" type="text/javascript"></script>\r\n<object id="myExperience3024550184001" class="BrightcoveExperience"><param name="bgcolor" value="#FFFFFF" /><param name="width" value="560" /><param name="height" value="315" /><param name="playerID" value="2083241027001" /><param name="playerKey" value="AQ~~,AAABYEdBaAk~,1dGnVytVBSw9Y4yoko71XnFgkvpqea1-" /><param name="isVid" value="true" /><param name="isUI" value="true" /><param name="dynamicStreaming" value="true" /><param name="@videoPlayer" value="3024550184001" /></object> <!-- \r\nThis script tag will cause the Brightcove Players defined above it to be created as soon\r\nas the line is read by the browser. If you wish to have the player instantiated only after\r\nthe rest of the HTML is processed and the page load is complete, remove the line.\r\n-->\r\n<script type="text/javascript">// <![CDATA[\r\nbrightcove.createExperiences();\r\n// ]]></script>\r\n<!-- End of Brightcove Player -->\r\n\r\nMatt Damon recalls when a Holocaust survivor spoke to his Facing History class.', 'Brightcove video. Caption: Margot Stern-Strom,\r\nFounder of Facing History and Ourselves\r\n&\r\nMatt Damon,\r\nFacing History Alumnus');
INSERT INTO `resources` VALUES(40, 'Choices in Little Rock: A Facing History and Ourselves Teaching Guide--Part 3: Choices in Little Rock.', 10, 'https://www.facinghistory.org/for-educators/educator-resources/resources/choices-little-rock', NULL, 'Choices in Little Rock  is a teaching unit that focuses on efforts to desegregate Central High School in Little Rock, Arkansas, in 1957â€”efforts that resulted in a crisis that historian Taylor Branch once described as "the most severe test of the Constitution since the Civil War."\r\n\r\nThe unit explores civic choicesâ€”the decisions people make as citizens in a democracy. Those decisions, both then and now, reveal that democracy is not a product but a work in progress, a work that is shaped by the choices that we make about ourselves and others. Although those choices may not seem important at the time, little by little, they define an individual, delineate a community, and ultimately distinguish a nation. Those choices build on the work of earlier generations and leave legacies for those to come.\r\n', '');
INSERT INTO `resources` VALUES(41, 'The Desegregation of Central High School', 10, 'http://facing.mrooms3.net/course/view.php?id=56&pageid=1542', NULL, ' In 1955, Virgil Blossom, the superintendent of schools in Little Rock, announced a plan to integrate the schools gradually beginning in 1957 with Central High, one of three high schools in the city.', 'Full Text: \r\n\r\nIn 1955, Virgil Blossom, the superintendent of schools in Little Rock, announced a plan to integrate the schools gradually beginning in 1957 with Central High, one of three high schools in the city. The other two were Horace Mann, a high school for African American students, and Hall, a new all-white school located in a well-to-do section of the city. Neither Horace Mann nor Hall was scheduled for immediate integration.\r\n\r\nAs required by law, the school board sent Blossomâ€™s plan to a federal district court for approval. Despite challenges from African Americans who wanted to speed up the process and white Americans who wanted to stop it, the court approved the plan, and by the summer of 1957, school officials had selected 17 African American students from over 200 applicants for enrollment at Central High.\r\n\r\nSchool officials rejected many of the applicants because their grades were not high enough. Others were rejected because officials did not think they could handle the pressures of being a small minority in a school that was overwhelmingly white. (The plan called for the enrollment of fewer than 17 African American students in a school attended by about 2,000 white students.) Still other African American students dropped out on their own after the superintendent told them that they would not be allowed to participate in sports or any other extracurricular activity. As resistance to integration became more vocal in the summer of 1957 in Little Rock and elsewhere, a number of parents withdrew their children out of fear for their safety.\r\n\r\nBy the time school opened, only nine African American students were prepared to attend Central High Schoolâ€”Minnijean Brown, Elizabeth Eckford, Ernest Green, Thelma Mothershed, Melba Pattillo, Gloria Ray, Terrence Roberts, Jefferson Thomas, and Carlotta Walls. Despite the talk on TV and the radio and in the newspapers, the â€œLittle Rock Nineâ€ did not believe that integration would lead to violence in Little Rock. Ernest Green recalls:\r\n\r\n    There hadnâ€™t been any trouble expected, given the fact that there had been other schools in Arkansas that had been integratedâ€”Fort Smith, Arkansas, and some others. The buses in Little Rock had been desegregated without any problem. The library was integrated; the medical school and the law school at the University had admitted some blacks. So there was an expectation that there would be minimal problems, but nothing major that would put Little Rock on the map. The first indication that I had of it was the night before we were to go to school, the Labor Day Monday night. [Governor] Orval Faubus came on TV and indicated that he was calling out the [Arkansas] National Guard to prevent our entrance into Central because of what he thought were threats to our lives. He was doing it for our own â€œprotection.â€ Even at that time that was his line. He said that the troops would be out in front of the school and they would bar our entrance to Centralâ€”for our protection as well as for the protection and tranquility of the city.1\r\n\r\nAfter hearing Governor Faubus on television, Blossom asked the â€œLittle Rock Nineâ€ to stay home Tuesday morning, while he sought guidance from U.S. District Judge Ronald N. Davies. The judge ordered the school board to proceed with integration as planned. The â€œLittle Rock Nineâ€ were to report to Central High the next dayâ€”Wednesday, September 4. Fearful for their safety, Daisy Bates, the president of the Arkansas NAACP, suggested that they come to school as a group. She planned to ask religious leaders in the city to accompany them. \r\n\r\nFifteen-year-old Elizabeth Eckford knew nothing of the plan. In her haste, Daisy Bates had forgotten to get word to her. So early Wednesday morning, Eckford ironed the dress she made for her first day at Central High, said good-bye to her worried parents, and set off for school, alone.\r\n\r\nWhen Eckford reached Central High, she found herself surrounded by an angry crowd that taunted and threatened her as she tried to enter the building. The soldiers that guarded the building turned her away. Unsure of what to do and terrified of the mob, Eckford quickly headed for a bus stop even as the crowd continued to scream and jeer.*\r\n\r\n\r\n*This reading is taken from Choices in Little Rock: A Facing History and Ourselves Teaching Guide (Facing History and Ourselves National Foundation, Inc., 2005), p. 57-58.\r\n\r\n\r\n1 Quoted in Henry Hampton and Steve Fayer, Voices of Freedom: An Oral History of the Civil Rights Movement from the 1950s through the 1980s (Vintage, 1990), p. 39.');
INSERT INTO `resources` VALUES(42, 'PBS American Experience: Eyes on the Prize: The Story of the Movement', 11, 'http://www.pbs.org/wgbh/amex/eyesontheprize/story/03_schools.html#video', NULL, 'You will watch a short video clip narrated by Jefferson Thomas and Elizabeth Eckford from the "Eyes on the Prize" website and watch an interview clip from the National Park Service oral history webpage.', '');
INSERT INTO `resources` VALUES(43, 'U.S. National Park Service: Oral History: LIttle Rock Central High School National Historic Site', 11, 'http://www.nps.gov/chsc/historyculture/oral-history.htm', NULL, '', 'Watch the second clip: "State and Federal Involvement"');
INSERT INTO `resources` VALUES(44, 'Timeline: Little Rock 1957', 6, 'http://www.stevebresnick.com/choices/', NULL, 'As an overview of the developments of this period in history, you will review a timeline of the events from 1957, the year schools were desegregated in Little Rock.', '');
INSERT INTO `resources` VALUES(45, 'Warriors Don''t Cry', 10, 'http://www.amazon.com/Warriors-Dont-Cry-Searing-Integrate/dp/1416948821/ref=sr_1_1?s=books&ie=UTF8&qid=1398379315&sr=1-1&keywords=warriors+don%27t+cry', NULL, 'In 1957, Melba Pattillo turned sixteen. That was also the year she became a warrior on the front lines of a civil rights firestorm. Following the landmark 1954 Supreme Court ruling, Brown v. Board of Education, Melba was one of nine teenagers chosen to integrate Little Rock''s Central High School.\r\n\r\nThroughout her harrowing ordeal, Melba was taunted by her schoolmates and their parents, threatened by a lynch mob''s rope, attacked with lighted sticks of dynamite, and injured by acid sprayed in her eyes. But through it all, she acted with dignity and courage, and refused to back down.\r\n\r\nThis is her remarkable story.', '');
INSERT INTO `resources` VALUES(46, 'Analyzing Visual Images and Stereotyping', 1, 'https://www.facinghistory.org/for-educators/educator-resources/teaching-strategies/analyzing-visual-images-stere', NULL, 'In this strategy students will:\r\n\r\n    Develop awareness of historical context\r\n    Develop critical thinking skills, particularly in regards to visual images\r\n    Enhance their observation and interpretive skills\r\n    Develop conceptual learning techniques\r\n\r\n', 'This will need to be changed to resource type "Teaching Strategy"');
INSERT INTO `resources` VALUES(47, 'Elizabeth Eckford Attempts To Enter Central High School ', 12, 'http://fedora.dlib.indiana.edu/fedora/get/iudl:703665/LARGE', NULL, 'This image shows an angry mob surrounding Elizabeth Eckford, a member of the Little Rock Nine, as she attempts to enter Little Rock Central High School as a student for the first time in 1957. This photo is part of the Will Counts Collection at Indiana University.', '');
INSERT INTO `resources` VALUES(48, 'Will Counts Collection: Indiana University Archives', 12, 'http://webapp1.dlib.indiana.edu/archivesphotos/counts.jsp', NULL, '', '');
INSERT INTO `resources` VALUES(49, 'Ben Gross Intro Video', 11, 'http://youtu.be/j_oyzDdBqdY', NULL, 'Ben''s intro video', 'Privte notes');

-- --------------------------------------------------------

--
-- Table structure for table `resources_sections`
--

CREATE TABLE `resources_sections` (
  `id` int(10) NOT NULL auto_increment,
  `section_id` int(10) NOT NULL,
  `resource_id` int(10) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `section_id` (`section_id`),
  KEY `resource_id` (`resource_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `resources_sections`
--

INSERT INTO `resources_sections` VALUES(9, 10, 19);
INSERT INTO `resources_sections` VALUES(10, 10, 22);
INSERT INTO `resources_sections` VALUES(11, 12, 25);
INSERT INTO `resources_sections` VALUES(12, 40, 32);
INSERT INTO `resources_sections` VALUES(13, 40, 33);
INSERT INTO `resources_sections` VALUES(14, 40, 34);
INSERT INTO `resources_sections` VALUES(15, 40, 35);
INSERT INTO `resources_sections` VALUES(16, 42, 36);
INSERT INTO `resources_sections` VALUES(17, 16, 40);

-- --------------------------------------------------------

--
-- Table structure for table `resources_types`
--

CREATE TABLE `resources_types` (
  `id` int(10) NOT NULL,
  `type_id` int(10) NOT NULL,
  `resource_id` int(10) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `type_id` (`type_id`),
  KEY `resource_id` (`resource_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `resources_types`
--


-- --------------------------------------------------------

--
-- Table structure for table `scopes`
--

CREATE TABLE `scopes` (
  `id` int(10) NOT NULL,
  `name` varchar(155) NOT NULL,
  `icon` varchar(155) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scopes`
--

INSERT INTO `scopes` VALUES(1, 'The Individual and Society', 'http://www.bresnickenglish.net/images/icons/common-core.png');
INSERT INTO `scopes` VALUES(2, 'We and They', 'http://www.bresnickenglish.net/images/icons/common-core.png');
INSERT INTO `scopes` VALUES(3, 'History', 'http://www.bresnickenglish.net/images/icons/common-core.png');
INSERT INTO `scopes` VALUES(4, 'Judgment, Memory & Legacy', 'http://www.bresnickenglish.net/images/icons/common-core.png');
INSERT INTO `scopes` VALUES(5, 'Choosing To Participate', 'http://www.bresnickenglish.net/images/icons/common-core.png');
INSERT INTO `scopes` VALUES(6, 'ALL', 'http://www.bresnickenglish.net/images/icons/common-core.png');

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `id` int(10) NOT NULL auto_increment,
  `number` int(11) NOT NULL,
  `course_id` int(10) unsigned NOT NULL,
  `scope_id` int(10) NOT NULL,
  `title` varchar(45) default NULL,
  `intro` text,
  `quote` text,
  `speaker` varchar(155) default NULL,
  `year` varchar(11) default NULL,
  `video` varchar(255) default NULL,
  PRIMARY KEY  (`id`),
  KEY `course_id` (`course_id`),
  KEY `scope_id` (`scope_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=44 ;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` VALUES(10, 1, 27, 1, 'Orientation', 'The first session of Choices in Little Rock will provide an orientation for you as an online learner. In this session, you will begin by setting up your user profile on the Facing History and Ourselves website and familiarizing yourself with the treasure trove of educational resources that are now available to you as a Facing History educator. You will then create and share an identity chart about yourself and read two short selections that explore key ideas of identity, race, and community. Finally, you will interact with your fellow course participants through the discussion forum.', ' "History, despite its wrenching pain, cannot be unlived, and if faced with courage, need not be lived again." ', 'Maya Angelou, American poet ', '', 'http://vimeo.com/75602029');
INSERT INTO `sections` VALUES(12, 2, 27, 1, 'Individual and Society', 'A Facing History and Ourselves journey begins with an examination of individual identity: what are the forces and influences that shape who we are and how we think about ourselves? In Session 2, we focus on how an individual''s identity impacts the choices one may or may not make.', '"All the people like us are we, and everyone else is they."', 'Rudyard Kipling, Indian-born British Writer', '', 'http://www.espn.go.com');
INSERT INTO `sections` VALUES(16, 4, 27, 3, 'The Desegregation of Central High', 'Welcome to Session 4! In this session, we will jump ahead three years after the Brown decision to September 1957, when nine courageous African American students attempted to desegregate Central High School in Little Rock, Arkansas, and found themselves in the spotlight of an entire nation. This session will first present a historical overview through readings, video clips, and a timeline. We will then move to personal testimonies from some of the Little Rock Nine. As a group of educators, we will end the session in conversation about classroom applications of the materials we''ve explored. Together, we will consider ways to most effectively present this history to our students. Also in this session, we will conduct a book group discussion on the required text for the course, Warriors Don''t Cry.', '"Safety to me meant getting to that bus stop. It seemed like I sat there for a long time before the bus came. In the meantime, people were screaming behind me. What I would have described as a crowd before, to my ears sounded like a mob."', 'Elizabeth Eckford of the Little Rock Nine', '', 'http://vimeo.com/75602029');
INSERT INTO `sections` VALUES(35, 3, 27, 5, 'Dividing a Nation', 'Welcome to Session 3! In this session, we will begin to examine the history leading up to the segregation of schools in the South and eventually to the integration of Little Rock Central High School. We will concentrate on the consequences of the U.S. Supreme Court''s "separate but equal" decision in the case of Plessy v. Ferguson (1896), which led to the establishment of racial barriers in almost every aspect of American life. We will then learn about some of the ramifications of the so-called "Jim Crow laws." Let''s begin!', 'When I was growing up in Louisiana in the 1950s and 1960s, the color lines were very clearly drawn. I followed my mother to the back entrance of the doctorâ€™s office, marked ''colored.'' I knew which water fountain I was supposed to drink from. On the bus ride to my all-black school, I watched white children walk to schools just two or three blocks from my house.', 'Lisa Delpit, educator and writer', '', 'http://www.pbslearningmedia.org/resource/iml04.soc.ush.civil.brown1/the-road-to-brown/');
INSERT INTO `sections` VALUES(40, 5, 27, 3, 'Choices in Little Rock', 'Welcome to Session 5! In this session we will continue to study the events in Little Rock, Arkansas, in 1957 and 1958, but we will concentrate specifically on the concepts of choices and choice-making. History is a product of choicesâ€”both large and smallâ€”made by individuals, groups, and nations. We will examine the choices made by Central High students, their families, and their teachers. We will examine the choices made by members of the Little Rock community, politicians and other leaders, and members of the media. Finally, we will reflect on ourselves as educators, exploring the challenges and opportunities we face as we guide our students through the process of grappling with the inequities of the past.\r\n', '"The shocking thing to me in 1957 was the number of whites who didn''t participate in the aggression, who wouldn''t do anything but look. Neighbors would express dismay, but wouldn''t do anything, wouldn''t speak out against it, would go ahead and close their doors to it."', 'Perlesta Hollingsworth, African American who lived in Little Rock, Arkansas', '', '');
INSERT INTO `sections` VALUES(42, 1, 12, 6, 'Orientation', 'Welcome to the first session of Holocaust and Human Behavior, Facing History and Ourselvesâ€™ flagship online course. During this orientation session, you will become familiar with the course environment and the structure of this online experience. The session will also begin to explore the issue of identity.', '"It cannot be repeated too often that nothing is more fertile in prodigies than the art of being free; but there is nothing more arduous than the apprenticeship of liberty." ', 'Alexis de Tocqueville, French philosopher', '', 'Video: <object id="flashObj" width="486" height="537" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,47,0"><param name="movie" value="http://c.brightcove.com/s');

-- --------------------------------------------------------

--
-- Table structure for table `steps`
--

CREATE TABLE `steps` (
  `id` int(11) NOT NULL auto_increment,
  `activity_id` int(10) default NULL,
  `procedureStep` varchar(400) default NULL,
  PRIMARY KEY  (`id`),
  KEY `activity_id` (`activity_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=42 ;

--
-- Dumping data for table `steps`
--

INSERT INTO `steps` VALUES(1, 3, 'Step 1: We can have lots of fun.');
INSERT INTO `steps` VALUES(2, 3, 'Step two: There''s so much we can do.');
INSERT INTO `steps` VALUES(3, 3, 'Step three: it''s just you and me.');
INSERT INTO `steps` VALUES(5, 4, 'Step 1 is really great.');
INSERT INTO `steps` VALUES(7, 4, 'Step 2 is also really great.');
INSERT INTO `steps` VALUES(11, 4, 'Step 3 is even better, because it just is.');
INSERT INTO `steps` VALUES(12, 9, 'First, you watch the video. It is really great.');
INSERT INTO `steps` VALUES(13, 12, 'Watch the video clip below in which the Little Rock Nine are able to reconnect with their former classmates as guests on the Oprah Winfrey Show. One classmate recounts his experiences dealing with the Little Rock Nine at Central High and reflects on the pain he caused.');
INSERT INTO `steps` VALUES(14, 12, 'As you watch the clip, create a new journal entry to write down words, phrases, or sentences that resonate with you.');
INSERT INTO `steps` VALUES(15, 12, 'Read some personal accounts from studentsâ€”both the Little Rock Nine and white students. There are four sources you will use to access these personal reflections. Please see the activity resources for more information.');
INSERT INTO `steps` VALUES(16, 12, 'As you read the reflections, write in your journal words, phrases, or sentences that resonate with you. ');
INSERT INTO `steps` VALUES(17, 12, '    Then, in the discussion area, please share one of the words, phrases, or sentences you wrote down from either the video clip or readings and answer the following questions:  What does this word or phrase say about the choices students made?  Why do you think the student(s) made those choices? What were the consequences of those choices?  Reply to at least two other people''s posts.');
INSERT INTO `steps` VALUES(18, 13, 'Discussion with Expert Groups: Based on your expert group (A, B, or C), click on the link below and complete the readings. When you have finished the readings, please email at least one other member of your expert group to discuss what you have read and share your thoughts on the content.');
INSERT INTO `steps` VALUES(20, 13, 'Jigsaw with Core Groups: After you have discussed the material with another member of your "expert group," try to find connections and continue the conversation in your "core group." ');
INSERT INTO `steps` VALUES(23, 15, 'View the timeline of the rise of the Nazis. Pay special attention to the following: "Prologue" and 1933 through 1938. We will be focusing on these years, since this is the time period when Hitler''s Nazis first ruled Germany.  ');
INSERT INTO `steps` VALUES(24, 15, 'Read "No Time to Think": Next, read the article "No Time to Think," in which a college professor living in Germany at the time of the rise of the Nazis reflects upon the impact of these events on his own life.');
INSERT INTO `steps` VALUES(25, 15, 'Complete brief discussion. When you have finished the reading, complete the brief discussion post in which you respond to the following question: What do you feel was most important or influential in the rise of the Nazi Party? Why? ');
INSERT INTO `steps` VALUES(26, 16, 'For this activity, we would like you to browse some online videos and readings and deepen your understanding of Facing History.');
INSERT INTO `steps` VALUES(27, 16, 'Select at least three of the following voices to explore. ');
INSERT INTO `steps` VALUES(28, 16, 'As you watch, open up our class Padlet wall and share some words or phrases that spoke to you or stood out. ');
INSERT INTO `steps` VALUES(29, 16, 'Write down your thoughts on any connections or disconnections you see between the voices in these videos and your current teaching experience. What are some of the common elements you heard expressed about Facing History and Ourselves?');
INSERT INTO `steps` VALUES(30, 17, 'Read a brief overview of how events unfolded leading up to the first day of school (see resource "The Desegregation of Central High")');
INSERT INTO `steps` VALUES(31, 17, 'View a short video clip narrated by Jefferson Thomas and Elizabeth Eckford, from American Experience''s "Eyes on the Prize" website.');
INSERT INTO `steps` VALUES(32, 17, 'Learn the history from interview clips with the Little Rock Nine (Watch the second clip: "State and Federal Involvement"). The National Park Service has an oral history webpage on the desegregation of Central High. The page has three video clips that present the history through recent interviews with the Little Rock Nine. ');
INSERT INTO `steps` VALUES(33, 17, '    Review a timeline of the events of 1957 in Little Rock, Arkansas.  Last modified: Thursday, 27 February 2014, 11:44 AM');
INSERT INTO `steps` VALUES(34, 18, 'Complete the discussion forum prompt relating to the course required reading, Warriors Don''t Cry. This is a book group-style discussion prompt, so you will be expected to complete an initial post as well as posting substantial responses to several of your classmates. Please ask your facilitator for more information about requirements.');
INSERT INTO `steps` VALUES(35, 19, 'Observe.  Observe the photograph of Elizabeth Eckford as she attempts to enter Little Rock Central High School (see Resources for this activity), and in your journal, describe what you see. This should be a list (e.g., Elizabeth holds a notebook, she wears sunglasses, etc.). At this point, do not try to make meaning of what you see, simply create the list. ');
INSERT INTO `steps` VALUES(36, 19, 'Analyze.  Now analyze the meaning of items on your list by considering the historical context in which the photo was taken. Create a list of questions on some of the list items and pose some possible answers to your questions (for example, "Why did the photographer choose this camera angle?" or "Why did Elizabeth choose to wear that dress this particular morning?").');
INSERT INTO `steps` VALUES(37, 19, 'Interpret. In the final stage of this activity, as a full group, we will move from analyzing particular aspects of the photograph to interpreting the entire scene. This is an editorial image by the photographer. He has a point of view and is trying to tell you something through this photograph. What is he trying to tell you?');
INSERT INTO `steps` VALUES(38, 19, 'Discuss.     Go to the discussion area to add some of your interpretations of the image as a whole. What do you think is happening in this photo? In the subject line of your post, write a headline that a newspaper might have used to go along with your interpretations. ');
INSERT INTO `steps` VALUES(41, 20, 'Join the discussion forum to discuss the challenges of teaching history from several viewpoints.');

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `id` int(11) NOT NULL,
  `type` varchar(45) default NULL,
  `imgpath` varchar(255) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `types`
--

INSERT INTO `types` VALUES(1, 'Common Core', 'http://www.bresnickenglish.net/images/icons/common-core.png');
INSERT INTO `types` VALUES(2, 'Database', 'http://www.bresnickenglish.net/images/icons/database.png');
INSERT INTO `types` VALUES(3, 'Discussion', 'http://www.bresnickenglish.net/images/icons/database.png');
INSERT INTO `types` VALUES(4, 'Interactive', 'http://www.bresnickenglish.net/images/icons/interactive.png');
INSERT INTO `types` VALUES(5, 'Offline Activity', 'http://www.bresnickenglish.net/images/icons/offline-activity.png');
INSERT INTO `types` VALUES(6, 'Timeline', 'http://www.bresnickenglish.net/images/icons/timeline.png');
INSERT INTO `types` VALUES(7, 'Dig Deeper', 'http://www.bresnickenglish.net/images/icons/dig-deeper.png');
INSERT INTO `types` VALUES(8, 'Audio', 'http://www.bresnickenglish.net/images/icons/audio.png');
INSERT INTO `types` VALUES(9, 'PDF', 'http://www.bresnickenglish.net/images/icons/pdf.png');
INSERT INTO `types` VALUES(10, 'Reading', 'http://www.bresnickenglish.net/images/icons/reading.png');
INSERT INTO `types` VALUES(11, 'Video', 'http://www.bresnickenglish.net/images/icons/video.png');
INSERT INTO `types` VALUES(12, 'Webpage', 'http://www.bresnickenglish.net/images/icons/webpage.png');
INSERT INTO `types` VALUES(13, 'Jigsaw', 'http://www.bresnickenglish.net/images/icons/jigsaw.png');

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
