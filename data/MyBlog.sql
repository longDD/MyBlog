-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2013 年 06 月 02 日 08:03
-- 服务器版本: 5.5.8
-- PHP 版本: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- 数据库: `myblog`
--

-- --------------------------------------------------------

--
-- 表的结构 `mylog_admin`
--

CREATE TABLE IF NOT EXISTS `mylog_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `password` char(32) NOT NULL,
  `createtime` int(11) NOT NULL,
  `lasttime` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `mylog_admin`
--

INSERT INTO `mylog_admin` (`id`, `name`, `password`, `createtime`, `lasttime`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1365143027, 1365912752);

-- --------------------------------------------------------

--
-- 表的结构 `mylog_albums`
--

CREATE TABLE IF NOT EXISTS `mylog_albums` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `descript` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `mylog_albums`
--

INSERT INTO `mylog_albums` (`id`, `title`, `descript`) VALUES
(1, 'test', 'test'),
(2, 'Default', '默认相册');

-- --------------------------------------------------------

--
-- 表的结构 `mylog_blog`
--

CREATE TABLE IF NOT EXISTS `mylog_blog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `published` int(11) NOT NULL,
  `visits` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=30 ;

--
-- 转存表中的数据 `mylog_blog`
--

INSERT INTO `mylog_blog` (`id`, `title`, `content`, `published`, `visits`, `type`, `status`) VALUES
(18, '新开博客', '<p>\n	&nbsp; &nbsp;跌跌撞撞一个月，总算是把博客简历起来了，虽然还有很多问题，虽然很不如意，虽然中间放弃过好多次，重写过好多次，但结果是好的，总算是完成了~！\n</p>\n<p>\n	&nbsp; 接下就是不断努力的完善博客，不管如何，Just do it ！！\n</p>\n<p>\n	&nbsp; &nbsp;以此自勉，龙，于2013.4.27 22:02\n</p>\n<p>\n	<br />\n</p>', 1367071331, 6, 8, 1),
(19, '圆角属性', '<h3 style="font-weight:bold;color:#000000;font-size:14px;background-color:#FFFFFF;font-family:Tahoma, Arial, 宋体, sans-serif;font-style:normal;text-align:start;text-indent:0px;">\n	前缀\n</h3>\n<ul style="color:#333333;font-family:Tahoma, Arial, 宋体, sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;text-indent:0px;background-color:#FFFFFF;">\n	<li>\n		-moz(例如 -moz-border-radius)用于Firefox\n	</li>\n	<li>\n		-webkit(例如：-webkit-border-radius)用于Safari和Chrome。\n	</li>\n</ul>\n<a href="http://www.cnblogs.com/rainman/archive/2011/06/21/2085800.html#" name="m1"></a>\n<h3 style="font-weight:bold;color:#000000;font-size:14px;background-color:#FFFFFF;font-family:Tahoma, Arial, 宋体, sans-serif;font-style:normal;text-align:start;text-indent:0px;">\n	例1\n</h3>\n<div class="rainman-code" style="margin:10px 0px 10px 25px;padding:0px;color:#333333;font-family:Tahoma, Arial, 宋体, sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;background-color:#FFFFFF;">\n<pre>&lt;div id="round"&gt;&lt;/div&gt;\n#round {\n    padding:10px; width:300px; height:50px;\n    border: 5px solid #dedede;\n    -moz-border-radius: 15px;      /* Gecko browsers */\n    -webkit-border-radius: 15px;   /* Webkit browsers */\n    border-radius:15px;            /* W3C syntax */\n}</pre>\n</div>\n<p style="text-indent:0px;color:#333333;font-family:Tahoma, Arial, 宋体, sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;background-color:#FFFFFF;">\n	效果：<br />\n<img alt="CSS圆角" src="http://images.cnblogs.com/cnblogs_com/rainman/139529/r_border_radius1.png" style="border:0px;" />\n</p>\n<a href="http://www.cnblogs.com/rainman/archive/2011/06/21/2085800.html#" name="m2"></a>\n<h3 style="font-weight:bold;color:#000000;font-size:14px;background-color:#FFFFFF;font-family:Tahoma, Arial, 宋体, sans-serif;font-style:normal;text-align:start;text-indent:0px;">\n	例2：无边框\n</h3>\n<div class="rainman-code" style="margin:10px 0px 10px 25px;padding:0px;color:#333333;font-family:Tahoma, Arial, 宋体, sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;background-color:#FFFFFF;">\n<pre>&lt;div id="round"&gt;&lt;/div&gt;  \n#round {\n    padding:10px; width:300px; height:50px;\n    background:#FC9; \n    -moz-border-radius: 15px;\n    -webkit-border-radius: 15px;\n    border-radius:15px;\n}</pre>\n</div>\n<p style="text-indent:0px;color:#333333;font-family:Tahoma, Arial, 宋体, sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;background-color:#FFFFFF;">\n	效果：<br />\n<img alt="CSS圆角" src="http://images.cnblogs.com/cnblogs_com/rainman/139529/r_border_radius2.png" style="border:0px;" />\n</p>\n<a href="http://www.cnblogs.com/rainman/archive/2011/06/21/2085800.html#" name="m3"></a>\n<h3 style="font-weight:bold;color:#000000;font-size:14px;background-color:#FFFFFF;font-family:Tahoma, Arial, 宋体, sans-serif;font-style:normal;text-align:start;text-indent:0px;">\n	书写顺序\n</h3>\n<div class="rainman-code" style="margin:10px 0px 10px 25px;padding:0px;color:#333333;font-family:Tahoma, Arial, 宋体, sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;background-color:#FFFFFF;">\n<pre>/* Gecko browsers */\n-moz-border-radius: 5px; \n/* Webkit browsers */\n-webkit-border-radius: 5px; \n/* W3C syntax - likely to be standard so use for future proofing */\nborder-radius:10px;</pre>\n</div>\n<a href="http://www.cnblogs.com/rainman/archive/2011/06/21/2085800.html#" name="m4"></a>\n<h3 style="font-weight:bold;color:#000000;font-size:14px;background-color:#FFFFFF;font-family:Tahoma, Arial, 宋体, sans-serif;font-style:normal;text-align:start;text-indent:0px;">\n	其它\n</h3>\n<p style="text-indent:0px;color:#333333;font-family:Tahoma, Arial, 宋体, sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;background-color:#FFFFFF;">\n	支持上、右、下、左\n</p>\n<div class="rainman-code" style="margin:10px 0px 10px 25px;padding:0px;color:#333333;font-family:Tahoma, Arial, 宋体, sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;background-color:#FFFFFF;">\n<pre>border-radius:5px 15px 20px 25px;</pre>\n</div>\n<p style="text-indent:0px;color:#333333;font-family:Tahoma, Arial, 宋体, sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;background-color:#FFFFFF;">\n	支持拆分书写\n</p>\n<div class="rainman-code" style="margin:10px 0px 10px 25px;padding:0px;color:#333333;font-family:Tahoma, Arial, 宋体, sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;background-color:#FFFFFF;">\n<pre>/* Gecko browsers */\n-moz-border-radius-topleft: 20px;\n-moz-border-radius-topright: 0;\n-moz-border-radius-bottomleft: 0;\n-moz-border-radius-bottomright: 20px;\n \n/* Webkit browsers */\n-webkit-border-top-left-radius: 20px;\n-webkit-border-top-right-radius: 0;\n-webkit-border-bottom-left-radius: 0;\n-webkit-border-bottom-right-radius: 20px;\n \n/* W3C syntax */\nborder-top-left-radius: 20px;\nborder-top-right-radius: 0;\nborder-bottom-right-radius: 0;\nborder-bottom-left-radius:  20px;</pre>\n</div>\n<a href="http://www.cnblogs.com/rainman/archive/2011/06/21/2085800.html#" name="m5"></a>\n<h3 style="font-weight:bold;color:#000000;font-size:14px;background-color:#FFFFFF;font-family:Tahoma, Arial, 宋体, sans-serif;font-style:normal;text-align:start;text-indent:0px;">\n	支持性\n</h3>\n<table class="border" style="margin:10px 0px 10px 10px;padding:0px;border-collapse:collapse;border:1px solid #C0C0C0;color:#333333;font-family:Tahoma, Arial, 宋体, sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;background-color:#FFFFFF;">\n	<tbody>\n		<tr>\n			<th style="font-weight:bold;color:#000000;border:1px solid #C0C0C0;text-align:left;background-color:#DEE7EC;">\n				浏览器\n			</th>\n			<th style="font-weight:bold;color:#000000;border:1px solid #C0C0C0;text-align:left;background-color:#DEE7EC;">\n				支持性\n			</th>\n		</tr>\n		<tr>\n			<td style="border:1px solid #C0C0C0;">\n				Firefox(2、3+)\n			</td>\n			<td style="border:1px solid #C0C0C0;">\n				√\n			</td>\n		</tr>\n		<tr>\n			<td style="border:1px solid #C0C0C0;">\n				Google Chrome(1.0.154+…)\n			</td>\n			<td style="border:1px solid #C0C0C0;">\n				√\n			</td>\n		</tr>\n		<tr>\n			<td style="border:1px solid #C0C0C0;">\n				Google Chrome(2.0.156+…)\n			</td>\n			<td style="border:1px solid #C0C0C0;">\n				√\n			</td>\n		</tr>\n		<tr>\n			<td style="border:1px solid #C0C0C0;">\n				Safari(3.2.1+ windows)\n			</td>\n			<td style="border:1px solid #C0C0C0;">\n				√\n			</td>\n		</tr>\n		<tr>\n			<td style="border:1px solid #C0C0C0;">\n				Internet Explorer(IE7, IE8)\n			</td>\n			<td style="border:1px solid #C0C0C0;">\n				×\n			</td>\n		</tr>\n		<tr>\n			<td style="border:1px solid #C0C0C0;">\n				Opera 9.6\n			</td>\n			<td style="border:1px solid #C0C0C0;">\n				×\n			</td>\n		</tr>\n	</tbody>\n</table>', 1367210080, 187, 1, 1),
(20, 'test1', 'test1test1test1test1test1test1test1', 1369141746, 0, 1, 1),
(21, 'test2', 'test2test2test2test2test2test2test2test2', 1369141824, 0, 1, 1),
(22, 'test3', 'test3test3test3test3test3test3test3test3test3test3', 1369142033, 0, 1, 1),
(23, 'test4', 'test4test4test4test4test4', 1369142678, 0, 1, 1),
(24, 'test5', 'test5test5test5test5test5test5test5test5test5', 1369142879, 0, 1, 1),
(25, 'test6', 'test6test6test6test6test6test6test6test6test6test6test6test6test6test6test6test6test6test6test6test6test6', 1369142939, 0, 1, 1),
(26, 'test9', 'test9test9test9test9test9test9', 1369311842, 0, 1, 1),
(27, 'test10', 'test10test10test10test10test10', 1369311968, 0, 1, 1),
(28, 'test11', 'test11test11test11test11test11test11test11test11test11test11test11test11test11test11test11', 1369312011, 1, 1, 1),
(29, 'test12', 'test12test12test12test12test12test12test12', 1369312082, 0, 1, 1);

-- --------------------------------------------------------

--
-- 表的结构 `mylog_blog_type`
--

CREATE TABLE IF NOT EXISTS `mylog_blog_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `descript` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- 转存表中的数据 `mylog_blog_type`
--

INSERT INTO `mylog_blog_type` (`id`, `pid`, `title`, `descript`) VALUES
(1, 0, 'html', 'html'),
(2, 0, 'javascript', 'javascript'),
(3, 0, 'php', 'php'),
(8, 0, '杂谈', '');

-- --------------------------------------------------------

--
-- 表的结构 `mylog_comment`
--

CREATE TABLE IF NOT EXISTS `mylog_comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text NOT NULL,
  `time` int(11) NOT NULL,
  `author` varchar(255) NOT NULL,
  `pid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- 转存表中的数据 `mylog_comment`
--

INSERT INTO `mylog_comment` (`id`, `content`, `time`, `author`, `pid`) VALUES
(6, '4444444446666666666666', 1368275508, '33333333', 19),
(5, '4444444446666666666666', 1368275216, '33333333', 19),
(4, '4444444446666666666666', 1368275102, '33333333', 19),
(7, '4444444446666666666666', 1368275800, '33333333', 19),
(8, '22222', 1368360267, '111111', 19),
(9, 'aaaaa', 1368360278, 'aaaaaa', 19);

-- --------------------------------------------------------

--
-- 表的结构 `mylog_link`
--

CREATE TABLE IF NOT EXISTS `mylog_link` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- 转存表中的数据 `mylog_link`
--


-- --------------------------------------------------------

--
-- 表的结构 `mylog_photo`
--

CREATE TABLE IF NOT EXISTS `mylog_photo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `descript` varchar(255) NOT NULL,
  `type` int(11) NOT NULL,
  `uploadtime` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `mylog_photo`
--

INSERT INTO `mylog_photo` (`id`, `title`, `url`, `descript`, `type`, `uploadtime`) VALUES
(1, 'test1', 'http://www.myblog.com/Upload/40f3c323dae433a40a9d1c568c6d5ac1.jpg', '', 1, 1370139924);

-- --------------------------------------------------------

--
-- 表的结构 `mylog_single_page`
--

CREATE TABLE IF NOT EXISTS `mylog_single_page` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(127) NOT NULL,
  `content` text NOT NULL,
  `time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- 转存表中的数据 `mylog_single_page`
--


-- --------------------------------------------------------

--
-- 表的结构 `mylog_tag`
--

CREATE TABLE IF NOT EXISTS `mylog_tag` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(127) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `mylog_tag`
--

INSERT INTO `mylog_tag` (`id`, `title`) VALUES
(1, 'test5'),
(2, 'test6'),
(3, 'test'),
(4, 'test11'),
(5, 'test12');

-- --------------------------------------------------------

--
-- 表的结构 `mylog_tag_blog`
--

CREATE TABLE IF NOT EXISTS `mylog_tag_blog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tid` int(11) NOT NULL,
  `bid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `mylog_tag_blog`
--

INSERT INTO `mylog_tag_blog` (`id`, `tid`, `bid`) VALUES
(1, 2, 25),
(2, 3, 25),
(3, 4, 28),
(4, 4, 28),
(5, 5, 29),
(6, 3, 29);
