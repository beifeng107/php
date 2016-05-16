# Host: localhost  (Version 5.5.5-10.1.9-MariaDB)
# Date: 2016-05-16 22:51:31
# Generator: MySQL-Front 5.3  (Build 5.33)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "tb_adm"
#

DROP TABLE IF EXISTS `tb_adm`;
CREATE TABLE `tb_adm` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userName` varchar(20) DEFAULT NULL,
  `userPwd` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `ip` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Data for table "tb_adm"
#


#
# Structure for table "tb_leaveword"
#

DROP TABLE IF EXISTS `tb_leaveword`;
CREATE TABLE `tb_leaveword` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userId` int(8) DEFAULT NULL,
  `createTime` datetime DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

#
# Data for table "tb_leaveword"
#

INSERT INTO `tb_leaveword` VALUES (1,1,'2016-05-10 15:08:37','测试一下','mysql_fetch_array() 函数从结果集中取得一行作为关联数组，或数字数组，或二者兼有\r\n返回根据从结果集取得的行生成的数组，如果没有更多行则返回 false。'),(2,1,'2016-05-11 16:39:20','国务院总理李克强5月11日主持召开国务院常务会议','会议指出，持续推进简政放权、放管结合、优化服务，进一步简化投资项目报建审批，有利于降低制度性交易成本，激发社会投资活力。会议决定，将投资项目开工前的报建审批事项由65项减至42项，其中规划许可、市政设施建设等24项审批整合为8项，并保留涉及环保等方面的法定审批事项。对保留的审批事项，各地要全部纳入政务服务大厅或在线平台，简化流程、缩短时限，便利企业办事。'),(3,1,'2016-05-11 16:44:46','没有剧情的《愤怒的小鸟》适合被拍成电影吗','在 2009 年，一家名为“Rovio”的芬兰公司发布了第 52 款电子游戏。这款游戏的设定非常简单：玩家可以通过智能手机的触摸屏（当时第一代 iPhone 的发布仅过去 2 年，触屏手机还是一件新鲜的事物）来控制一个弹弓。当时猪流感正处于爆发期，因此游戏把猪设置为敌人，而攻击的弹药则是愤怒的小鸟。'),(4,1,'2016-05-11 16:58:58','和肯德基看过肯德基公开的公开','看感觉到了加共和国加空格键了第三个会计师的拉开飞机拉屎及来看过了圣诞节了刚看见了卡萨丁g\r\n哈哈哈\r\n\r\n哈哈哈'),(5,1,'2016-05-11 22:59:51','tttt','eeeeeeeeeeeeeeee'),(6,2,'2016-05-11 23:01:54','什么鬼吗。。。。。。','噜啦啦啦啦啦啦乱阿拉了啦啦啦'),(7,2,'2016-05-12 20:32:41','hello world','hellohellohellohellohellohellholehhhehellohelloheehehhhellohellohellohellohelllo'),(8,2,'2016-05-16 19:36:43','gfgdf','fdsfsdfsf');

#
# Structure for table "tb_replyword"
#

DROP TABLE IF EXISTS `tb_replyword`;
CREATE TABLE `tb_replyword` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userId` int(8) DEFAULT NULL,
  `createTime` datetime DEFAULT NULL,
  `content` text,
  `leaveId` int(8) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

#
# Data for table "tb_replyword"
#

INSERT INTO `tb_replyword` VALUES (1,2,'2016-05-12 20:30:16','haohaohao',2),(2,2,'2016-05-12 20:32:58','顶！！！',7),(3,2,'2016-05-12 20:34:02','自己顶！！！',7),(4,2,'2016-05-12 20:39:51','哈哈哈哈',4),(5,2,'2016-05-12 20:41:12','oooooo',5),(6,2,'2016-05-12 20:44:09','节课倒计时了',3),(7,2,'2016-05-12 20:50:17','是吗',3),(8,4,'2016-05-16 20:14:24','这是个逗逼哈哈哈哈',8);

#
# Structure for table "tb_user"
#

DROP TABLE IF EXISTS `tb_user`;
CREATE TABLE `tb_user` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `userName` varchar(50) DEFAULT NULL,
  `userPwd` varchar(50) DEFAULT NULL,
  `realName` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `qq` varchar(20) DEFAULT NULL,
  `tel` varchar(20) DEFAULT NULL,
  `ip` varchar(2) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `face` varchar(50) DEFAULT NULL,
  `regTime` datetime DEFAULT NULL,
  `sex` varchar(2) DEFAULT NULL,
  `userType` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

#
# Data for table "tb_user"
#

INSERT INTO `tb_user` VALUES (1,'flc','123','hehe','wer@a.com','214324234','212343223','12','中国','1.jpg','2016-05-10 20:01:19','男',0),(2,'test','test','fngd','adkgklasdjlg','235243','1233543','12','jdkjkdsjgg','2.png','2016-05-11 23:01:18','男',0),(4,'二货','123456','二货','dkkdkdk','4543665464','34353656','12','fd','2343','2016-05-16 20:13:59','女',0);
