-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2017-07-12 03:08:35
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `w1701`
--

-- --------------------------------------------------------

--
-- 表的结构 `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `cname` varchar(100) CHARACTER SET utf8 NOT NULL,
  `isshow` int(11) NOT NULL DEFAULT '0',
  `catimg` varchar(200) CHARACTER SET utf8 NOT NULL,
  `english` varchar(50) NOT NULL,
  `pid` int(11) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `category`
--

INSERT INTO `category` (`cid`, `cname`, `isshow`, `catimg`, `english`, `pid`) VALUES
(1, '周边旅行', 0, '', 'ZHOUBIANXING', 0),
(2, '门票消费', 0, '', 'TRAVEL SHOPING', 0),
(3, '出行机票', 0, '', 'TRAVEL TICKET', 0),
(4, '酒店住宿', 0, '', 'JIUDIANZHUSU', 0);

-- --------------------------------------------------------

--
-- 表的结构 `lists`
--

CREATE TABLE IF NOT EXISTS `lists` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) CHARACTER SET utf8 NOT NULL,
  `container` mediumtext CHARACTER SET utf8 NOT NULL,
  `imgurl` varchar(255) NOT NULL,
  `listtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `jianjie` varchar(2000) CHARACTER SET utf8 NOT NULL,
  `price` int(200) NOT NULL,
  `people` int(50) NOT NULL,
  `popular` int(11) NOT NULL,
  `posid` char(255) NOT NULL DEFAULT '0',
  `keywords` varchar(255) CHARACTER SET utf8 NOT NULL,
  `cid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `mid` int(11) NOT NULL AUTO_INCREMENT,
  `nicheng` varchar(20) CHARACTER SET utf8 NOT NULL,
  `mname` varchar(20) CHARACTER SET utf8 NOT NULL,
  `mpass` varchar(32) CHARACTER SET utf8 NOT NULL,
  `mphone` varchar(20) NOT NULL,
  `mphoto` varchar(255) NOT NULL,
  `mrole` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`mid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- 转存表中的数据 `member`
--

INSERT INTO `member` (`mid`, `nicheng`, `mname`, `mpass`, `mphone`, `mphoto`, `mrole`) VALUES
(7, '华', 'hua', '4297f44b13955235245b2497399d7a93', '0', 'upload/17-07-11/e73ca74ce96e3dc598d785759126b2532012100413195471481.jpg', 0),
(8, '杨', 'yang', '57cb5a26334a6c1d5e27c49def4a0f0d', '0', 'upload/17-07-11/88cf35195f2dec2bb8cfc7c40d6708a52012100413195471481.jpg', 0),
(9, '得到', 'de', 'b5f3729e5418905ad2b21ce186b1c01d', '0', 'upload/17-07-11/99e2d819308dcb235126210e0cf3113a2012100413195471481.jpg', 0),
(10, '33', 'rer', 'eccbc87e4b5ce2fe28308fd9f2a7baf3', '0', 'upload/17-07-11/5633aecbac9e58f400c6e85709e173e92012100413195471481.jpg', 0),
(15, '', 'yangyang', 'f854b68c6f8b2195704f76e05aaa65a1', '12345678901', '', 0),
(16, '', 'yhua', 'f854b68c6f8b2195704f76e05aaa65a1', '2147483647', '', 0),
(17, '', 'haha', '4297f44b13955235245b2497399d7a93', '12345678901', '', 0);

-- --------------------------------------------------------

--
-- 表的结构 `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lid` int(200) NOT NULL,
  `mid` int(200) NOT NULL,
  `con` varchar(255) CHARACTER SET utf8 NOT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `position`
--

CREATE TABLE IF NOT EXISTS `position` (
  `posid` int(11) NOT NULL AUTO_INCREMENT,
  `posname` varchar(200) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`posid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `position`
--

INSERT INTO `position` (`posid`, `posname`) VALUES
(1, '轮播图'),
(2, '热门'),
(3, '推荐');

-- --------------------------------------------------------

--
-- 表的结构 `role`
--

CREATE TABLE IF NOT EXISTS `role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rname` varchar(225) NOT NULL,
  `rid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `role`
--

INSERT INTO `role` (`id`, `rname`, `rid`) VALUES
(1, '超级管理员', 1),
(2, '普通管理员', 2);

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(255) NOT NULL,
  `upass` varchar(32) NOT NULL,
  `rid` int(11) NOT NULL DEFAULT '2',
  `nicheng` tinytext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `uname`, `upass`, `rid`, `nicheng`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1, '杨'),
(2, 'hua', 'f854b68c6f8b2195704f76e05aaa65a1', 2, '华');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
