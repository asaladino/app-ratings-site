-- MySQL dump 10.13  Distrib 5.6.21, for osx10.8 (x86_64)
--
-- Host: 127.0.0.1    Database: app_ratings
-- ------------------------------------------------------
-- Server version	5.6.21

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `applications`
--

DROP TABLE IF EXISTS `applications`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `applications` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `description` text,
  `itunes_url` varchar(1000) DEFAULT NULL,
  `google_play_url` varchar(1000) DEFAULT NULL,
  `cost` float DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `audio` int(11) DEFAULT NULL,
  `text` int(11) DEFAULT NULL,
  `video` int(11) DEFAULT NULL,
  `images` int(11) DEFAULT NULL,
  `no_task_cap` int(11) DEFAULT NULL,
  `instructions_available` int(11) DEFAULT NULL,
  `quick_to_upload_task` int(11) DEFAULT NULL,
  `extra_features_for_various_populations` int(11) DEFAULT NULL,
  `app_easy_to_use_and_does_not_crash` int(11) DEFAULT NULL,
  `content_appropriate` int(11) DEFAULT NULL,
  `ads_or_in_app_purchases` int(11) DEFAULT NULL,
  `app_be_customized_for_different_users` int(11) DEFAULT NULL,
  `in_app_data_collection` int(11) DEFAULT NULL,
  `content_be_exported` int(11) DEFAULT NULL,
  `appealing_design_graphics` int(11) DEFAULT NULL,
  `app_motivating_for_user` int(11) DEFAULT NULL,
  `app_promote_creativity_and_imagination` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `applications`
--

LOCK TABLES `applications` WRITE;
/*!40000 ALTER TABLE `applications` DISABLE KEYS */;
INSERT INTO `applications` VALUES (1,'Visual Impact','Visual Impact provides easy step-by-step multimedia instructions for use by anyone needing a simple support to perform daily tasks of all kinds. Users can select tasks from the growing task library or upload their own. The updated version has an option to send an email or text message to remote caregivers when the user begins a task and then when the task is completed. Completion messages also calculate the total time it took for the user to complete the task and displays the result in hours, minutes and seconds.','https://itunes.apple.com/us/app/visual-impact/id467471614?mt=8 ','',4,10,4,6,10,3,6,1,9,4,5,9,0,7,8,0,10,5,8,'2013-12-05 23:13:42','2013-12-06 18:08:20'),(2,'Little Story Maker','Little Story Maker is a free iOS app compatible with both iPhone and iPad. It is a simple bookmaker that allows adding photos, text and recording your own speech with text highlighting. It will read your recorded speech with highlighting using a slider that you assign manually during the creation. You can also add to the word bank to have individual recordings for words. You can choose for the story to be read back to you, with auto play (where the pages are turned) or you can read it yourself and select each word and have it highlighted.','https://itunes.apple.com/us/app/little-story-maker/id508287659?mt=8&ign-mpt=uo%3D4','',0,7,8,9,7,8,6,8,9,10,9,9,9,9,10,8,7,6,5,'2013-12-06 19:43:49','2013-12-06 19:43:49'),(3,'Work System','Designed for both iPhone and iPad, this app is a strategy that addresses independence as an essential outcome for students with ASD. Work System assists in organizing a student with ASD by providing a systematic work routineâ€”working from left-to-right or top-to-bottom. Students do not have to plan where to begin or how to proceed. Work systems can be used with any type of task or activity (e.g., academic, self-help, leisure), across settings (e.g., independent work area, cafeteria, place of employment), and for individuals at all functioning levels (e.g., systems can range from concrete to abstract).','https://itunes.apple.com/us/app/work-system-autism/id502219251?mt=8','',0.99,7,0,0,2,6,0,7,8,9,10,3,4,5,7,8,6,6,6,'2013-12-06 19:50:59','2013-12-06 19:50:59'),(4,'Step by Snap','This app allows you to snap a sequence of photos and use that as the basis to create the instruction for doing a task. You can further describe the steps in words if your wish. You can easily reorder the steps. You can share the step with others. The steps can be saved into a file in PDF format as well.','https://itunes.apple.com/us/app/step-by-snap/id510845297?mt=8','',1.99,8,0,1,7,8,7,8,7,8,7,6,7,6,7,8,9,10,5,'2013-12-06 19:56:02','2013-12-06 19:56:02'),(5,'My Life Skills Box','The application will allow your child to learn how to deal with three very important areas.â€¨ Everyday life skills â€“ showering, getting dressed, brushing their teeth, and appropriate behavior in public and school environments.â€¨ Social skills - your child will learn techniques to cope with different social situations and problem solving. Functional play â€“ the child will learn how to use objects for play. The screen displays pictures, sound, and text. Each step is described in a separate screen numbered in chronological order. When the child touches the screen the child will hear and see the action he is being asked to perform. â€¨Once the action is performed a check will be placed in the task box thereby allowing the child to understand that the task was performed and what the next action will be. â€¨The final screen will show that the entire task was completed successfully, providing positive feedback to the child.','https://itunes.apple.com/us/app/mylifeskillsbox/id534918056?mt=8','',0,9,8,9,8,9,8,9,8,9,9,8,7,8,7,7,7,6,6,'2013-12-09 19:40:16','2013-12-09 19:40:16'),(6,'Photo Story','Photo Story is compatible with iPhone and IPad. This app provides a variety of photo templates to create your own stories and uses powerful Aviary Image Editor that allows editing the pictures (you can enhance, brighten, add text, crop, flip, rotate, blur, draw, whiten, blemish, redeye feature, etc). You can create custom templates, save to the photo album, send to a friend via email, or share on Facebook, Twitter (iOS5.) or later), and on Instagram.','https://itunes.apple.com/us/app/photo-story-create-your-own/id551635235?mt=8','',0.99,7,9,10,9,9,9,9,10,9,9,9,9,9,1,10,9,7,2,'2013-12-09 19:43:57','2013-12-09 19:43:57');
/*!40000 ALTER TABLE `applications` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comments` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `application_id` int(11) DEFAULT NULL,
  `comment` text,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comments`
--

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
INSERT INTO `comments` VALUES (1,1,'Customized tasks could only include audio, text and images; created tasks with video are available to upload from Visual Impact Pro; detailed instructions available only online','2013-12-06 16:37:53','2013-12-06 16:37:53'),(2,1,'Customized tasks could only include audio, text and images; created tasks with video are  available to upload from Visual Impact Pro; detailed instructions available only online','2013-12-06 16:45:05','2013-12-06 16:45:05'),(3,1,'Content is not available for sharing in any format','2013-12-06 16:45:16','2013-12-06 16:45:16'),(4,1,'Attractive design with customization options to modify the user interface to meet the needs of the user.','2013-12-06 16:45:40','2013-12-06 16:45:40'),(5,2,'Little Story Maker is a free iOS app compatible with both iPhone and iPad. It is a simple bookmaker that allows adding photos, text and recording your own speech with text highlighting. It will read your recorded speech with highlighting using a slider that you assign manually during the creation. You can also add to the word bank to have individual recordings for words. You can choose for the story to be read back to you, with auto play (where the pages are turned) or you can read it yourself and select each word and have it highlighted.','2013-12-06 19:45:35','2013-12-06 19:45:35'),(6,2,'App is designed as an educational app for younger students; detailed instructions in the app and customer support online are available to adjust settings for sound, word, story or picture highlights;','2013-12-06 19:45:45','2013-12-06 19:45:45'),(7,2,'App is user friendly and easy to use; the user can choose from three playback modes - read to me, read by myself, and auto-play which automatically turns from page to page; ','2013-12-06 19:45:57','2013-12-06 19:45:57'),(8,2,'Sharing or exporting content is not available','2013-12-06 19:46:08','2013-12-06 19:46:08'),(9,2,'App design is attractive and simple enough to create and encourage users to create stories on their own','2013-12-06 19:46:18','2013-12-06 19:46:18'),(10,3,'Only very short and simple text; longer instructions can be read by sliding the text only when editing; very easy to enter the editing mode and remove tasks and steps','2013-12-06 19:51:52','2013-12-06 19:51:52'),(11,3,'Extra features difficult to access by user','2013-12-06 19:52:03','2013-12-06 19:52:03'),(12,3,'Timer is available to set task end; boxes to mark finished task','2013-12-06 19:52:12','2013-12-06 19:52:12'),(13,3,'very simple design difficult to set up and access by user','2013-12-06 19:52:19','2013-12-06 19:52:19'),(14,4,'App allows you to choose photo from iPad photo library and by linking with  Dropbox in addition to taking a picture with the camera; additional Re-order Steps feature; photos could be uploaded only one by one;','2013-12-06 19:57:19','2013-12-06 19:57:19'),(15,4,'Small font of the text describing task and steps','2013-12-06 19:57:28','2013-12-06 19:57:28'),(16,4,'Export PDF feature allows you to convert the task to PDF format and open it in Google Drive, send it by email, or Print','2013-12-06 19:57:35','2013-12-06 19:57:35'),(17,4,'Clear and simple appearance is an advantage of the app, and the app design makes the app easy to use.','2013-12-06 19:57:42','2013-12-06 19:57:42'),(18,5,'Adding content through the catalog only; the free trial version allows users to experiment with the app;','2013-12-09 19:41:17','2013-12-09 19:41:17'),(19,5,'Adding new sequences and stories from the catalogue is 0.99$ each; detailed suggestions for the use of the application, manuals and recommendations are available in the app and online;','2013-12-09 19:41:27','2013-12-09 19:41:27'),(20,5,'The age range recommendation for the use of the app is 3-12; the catalog allows adapting content according to the childâ€™s needs;','2013-12-09 19:41:35','2013-12-09 19:41:35'),(21,5,'Each step of the task is described in a separate screen; the child can hear and see the action he is being asked to perform; the task box allow the child to place a check mark after the task was performed; the final screen will show that the entire task was completed successfully','2013-12-09 19:41:44','2013-12-09 19:41:44'),(24,6,'User is unable to access data from the App, data is stored on the iPad in Photo Album','2013-12-09 19:53:44','2013-12-09 19:53:44'),(25,6,'App provides photo templates that are appropriate only for simple tasks with 4-5 steps only; available for short text, but difficult to type; photos can be customized by very good picture editing option that include rotating, flipping, color enhancing, multiple effects;','2013-12-09 19:53:59','2013-12-09 19:53:59'),(26,6,'Data can be exported and saved to Photo Album on the iPad, shared by email, shared on Facebook and Twitter; unable to save data in app','2013-12-09 19:54:11','2013-12-09 19:54:11'),(27,6,'App design is simple, but contains extensive photo editing feature','2013-12-09 19:54:19','2013-12-09 19:54:19');
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `images` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `application_id` int(11) DEFAULT NULL,
  `caption` text,
  `order` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `images`
--

LOCK TABLES `images` WRITE;
/*!40000 ALTER TABLE `images` DISABLE KEYS */;
INSERT INTO `images` VALUES (1,1,'Page 1',0,'2013-12-06 16:55:35','2013-12-06 16:55:35'),(2,1,'Next step',1,'2013-12-06 16:59:56','2013-12-06 16:59:56'),(3,1,'Refill the pills',2,'2013-12-06 17:00:26','2013-12-06 17:00:26'),(4,1,'Upgrade to pro',3,'2013-12-06 17:00:53','2013-12-06 17:00:53'),(5,1,'Settings',4,'2013-12-06 17:01:17','2013-12-06 17:01:17'),(6,2,'something',0,'2013-12-06 19:44:44','2013-12-06 19:44:44'),(7,2,'another',1,'2013-12-06 19:45:00','2013-12-06 19:45:00'),(8,2,'caption 3',2,'2013-12-06 19:45:15','2013-12-06 19:45:15'),(9,2,'caption 4',3,'2013-12-06 19:45:26','2013-12-06 19:45:26'),(10,3,'checklist 1',0,'2013-12-06 19:51:14','2013-12-06 19:51:14'),(11,3,'something',1,'2013-12-06 19:51:24','2013-12-06 19:51:24'),(12,3,'something',2,'2013-12-06 19:51:32','2013-12-06 19:51:32'),(13,3,'here',3,'2013-12-06 19:51:40','2013-12-06 19:51:40'),(14,4,'',0,'2013-12-06 19:56:34','2013-12-06 19:56:34'),(15,4,'',1,'2013-12-06 19:56:41','2013-12-06 19:56:41'),(16,4,'',2,'2013-12-06 19:56:50','2013-12-06 19:56:50'),(17,4,'',3,'2013-12-06 19:56:57','2013-12-06 19:56:57'),(18,4,'',4,'2013-12-06 19:57:06','2013-12-06 19:57:06'),(19,5,'',0,'2013-12-09 19:40:30','2013-12-09 19:40:30'),(20,5,'',1,'2013-12-09 19:40:38','2013-12-09 19:40:38'),(21,5,'',2,'2013-12-09 19:40:49','2013-12-09 19:40:49'),(22,5,'',3,'2013-12-09 19:40:57','2013-12-09 19:40:57'),(23,5,'',4,'2013-12-09 19:41:05','2013-12-09 19:41:05'),(24,6,'',0,'2013-12-09 19:44:08','2013-12-09 19:44:08'),(25,6,'',1,'2013-12-09 19:44:15','2013-12-09 19:44:15'),(26,6,'',2,'2013-12-09 19:44:22','2013-12-09 19:44:22'),(27,6,'',3,'2013-12-09 19:44:32','2013-12-09 19:44:32'),(28,6,'',4,'2013-12-09 19:44:39','2013-12-09 19:44:39');
/*!40000 ALTER TABLE `images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (2,'admin','d531a9c6e9a5e8cb9ada099cf6fa813ac3764a3e','2013-12-05 22:40:04','2013-12-05 22:40:04');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-10-25  7:26:40
