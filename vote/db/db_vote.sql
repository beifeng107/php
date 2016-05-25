# Host: localhost  (Version 5.5.5-10.1.9-MariaDB)
# Date: 2016-05-25 21:33:20
# Generator: MySQL-Front 5.3  (Build 5.33)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "admin"
#

DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL DEFAULT '',
  `password` varchar(20) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Data for table "admin"
#


#
# Structure for table "ve_gong"
#

DROP TABLE IF EXISTS `ve_gong`;
CREATE TABLE `ve_gong` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL DEFAULT '',
  `content` text,
  `createtime` datetime DEFAULT NULL,
  `createuser` varchar(20) DEFAULT NULL,
  `isuse` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Data for table "ve_gong"
#


#
# Structure for table "ve_ip"
#

DROP TABLE IF EXISTS `ve_ip`;
CREATE TABLE `ve_ip` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip` varchar(15) DEFAULT NULL,
  `vote_title` varchar(255) DEFAULT NULL,
  `votes` int(11) DEFAULT NULL,
  `option_createtime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Data for table "ve_ip"
#


#
# Structure for table "ve_liu"
#

DROP TABLE IF EXISTS `ve_liu`;
CREATE TABLE `ve_liu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL DEFAULT '',
  `content` text,
  `createtime` datetime DEFAULT NULL,
  `userip` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Data for table "ve_liu"
#


#
# Structure for table "ve_vote"
#

DROP TABLE IF EXISTS `ve_vote`;
CREATE TABLE `ve_vote` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL DEFAULT '',
  `createtime` datetime DEFAULT NULL,
  `createuser` varchar(20) DEFAULT NULL,
  `options` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Data for table "ve_vote"
#


#
# Structure for table "ve_xvote"
#

DROP TABLE IF EXISTS `ve_xvote`;
CREATE TABLE `ve_xvote` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `option` varchar(255) NOT NULL DEFAULT '',
  `vote_title` varchar(255) DEFAULT NULL,
  `vote_id` int(11) NOT NULL DEFAULT '0',
  `votes` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Data for table "ve_xvote"
#

