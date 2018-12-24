-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2018 �?12 �?24 �?12:47
-- 服务器版本: 5.5.53
-- PHP 版本: 7.0.12

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `blog`
--

-- --------------------------------------------------------

--
-- 表的结构 `blog_admin`
--

CREATE TABLE IF NOT EXISTS `blog_admin` (
  `id` tinyint(5) NOT NULL AUTO_INCREMENT COMMENT '管理员ID',
  `admin_name` varchar(60) DEFAULT NULL COMMENT '管理员名字',
  `password` char(32) DEFAULT NULL COMMENT '管理员密码',
  `add_time` int(11) NOT NULL COMMENT '添加时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `blog_admin`
--

INSERT INTO `blog_admin` (`id`, `admin_name`, `password`, `add_time`) VALUES
(1, 'xiaomo', 'cfd7051b921756c29c854ca6037dffcb', 1526289367);

-- --------------------------------------------------------

--
-- 表的结构 `blog_article`
--

CREATE TABLE IF NOT EXISTS `blog_article` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT COMMENT '文章ID',
  `author` varchar(100) NOT NULL COMMENT '作者',
  `title` varchar(60) DEFAULT NULL COMMENT '文章标题',
  `desc` varchar(255) DEFAULT NULL COMMENT '文章描述',
  `pic` varchar(100) DEFAULT NULL COMMENT '文章图片',
  `content` text COMMENT '文章内容',
  `is_show` int(11) NOT NULL,
  `visitor` int(255) DEFAULT '0' COMMENT '游客量',
  `cate` varchar(9) DEFAULT NULL COMMENT '所属栏目',
  `time` int(13) DEFAULT NULL COMMENT '发布时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- 转存表中的数据 `blog_article`
--

INSERT INTO `blog_article` (`id`, `author`, `title`, `desc`, `pic`, `content`, `is_show`, `visitor`, `cate`, `time`) VALUES
(17, '转自little_rabbit_baby', 'php中的serialize(),unserialize();', '早前曾经遇到过jquery中serialize()，serialize() 方法通过序列化表单值创建 URL 编码文本字符串。而PHP中也有这个方法', '', '<p style="box-sizing: border-box; outline: 0px; padding: 0px; margin-top: 0px; margin-bottom: 16px; color: rgb(79, 79, 79); line-height: 26px; text-align: justify; word-break: break-all; font-family: -apple-system, &quot;SF UI Text&quot;, Arial, &quot;PingFang SC&quot;, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei&quot;, &quot;WenQuanYi Micro Hei&quot;, sans-serif, SimHei, SimSun; white-space: normal; background-color: rgb(255, 255, 255);">序列化serialize()与反序列化unserialize()：</p><p style="box-sizing: border-box; outline: 0px; padding: 0px; margin-top: 0px; margin-bottom: 16px; color: rgb(79, 79, 79); line-height: 26px; text-align: justify; word-break: break-all; font-family: -apple-system, &quot;SF UI Text&quot;, Arial, &quot;PingFang SC&quot;, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei&quot;, &quot;WenQuanYi Micro Hei&quot;, sans-serif, SimHei, SimSun; white-space: normal; background-color: rgb(255, 255, 255);"><span style="box-sizing: border-box; outline: 0px; word-break: break-all;">序列化serialize()</span>：就是将一个变量所代表的 “内存数据”转换为“字符串”的形式，并持久保存在硬盘（写入文件中保存）上的一种做法，即，把“内存数据”转换为“字符串”然后保存到文件中；</p><p style="box-sizing: border-box; outline: 0px; padding: 0px; margin-top: 0px; margin-bottom: 16px; color: rgb(79, 79, 79); line-height: 26px; text-align: justify; word-break: break-all; font-family: -apple-system, &quot;SF UI Text&quot;, Arial, &quot;PingFang SC&quot;, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei&quot;, &quot;WenQuanYi Micro Hei&quot;, sans-serif, SimHei, SimSun; white-space: normal; background-color: rgb(255, 255, 255);"><span style="box-sizing: border-box; outline: 0px; word-break: break-all;"></span>反序列化unserialize()：就是将序列化之后保存在硬盘（文件）上的“字符串数据”恢复为其原来的内存形式的变量数据的一种做法，即，把文件中保存的序列化后的“字符串数据”恢复为“内存数据”；</p><p style="box-sizing: border-box; outline: 0px; padding: 0px; margin-top: 0px; margin-bottom: 16px; color: rgb(79, 79, 79); line-height: 26px; text-align: justify; word-break: break-all; font-family: -apple-system, &quot;SF UI Text&quot;, Arial, &quot;PingFang SC&quot;, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei&quot;, &quot;WenQuanYi Micro Hei&quot;, sans-serif, SimHei, SimSun; white-space: normal; background-color: rgb(255, 255, 255);"><br/></p><p style="box-sizing: border-box; outline: 0px; padding: 0px; margin-top: 0px; margin-bottom: 16px; color: rgb(79, 79, 79); line-height: 26px; text-align: justify; word-break: break-all; font-family: -apple-system, &quot;SF UI Text&quot;, Arial, &quot;PingFang SC&quot;, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei&quot;, &quot;WenQuanYi Micro Hei&quot;, sans-serif, SimHei, SimSun; white-space: normal; background-color: rgb(255, 255, 255);">对象的序列化：1.对一个对象进行序列化，只能将其属性数据“保存起来”，而方法被忽略（方法不是数据），但是类名也能被保存起来，因此反序列化的位置只要有该类文件，就仍然可以将对象还原，即该对象的属性和方法依然可以使用；<br/></p><p style="box-sizing: border-box; outline: 0px; padding: 0px; margin-top: 0px; margin-bottom: 16px; color: rgb(79, 79, 79); line-height: 26px; text-align: justify; word-break: break-all; font-family: -apple-system, &quot;SF UI Text&quot;, Arial, &quot;PingFang SC&quot;, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei&quot;, &quot;WenQuanYi Micro Hei&quot;, sans-serif, SimHei, SimSun; white-space: normal; background-color: rgb(255, 255, 255);"><span style="box-sizing: border-box; outline: 0px; word-break: break-all;"></span>&nbsp; &nbsp; 2.对象序列化的时候，会自动调用该对象所属类的__sleep()魔术方法；</p><p style="box-sizing: border-box; outline: 0px; padding: 0px; margin-top: 0px; margin-bottom: 16px; color: rgb(79, 79, 79); line-height: 26px; text-align: justify; word-break: break-all; font-family: -apple-system, &quot;SF UI Text&quot;, Arial, &quot;PingFang SC&quot;, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei&quot;, &quot;WenQuanYi Micro Hei&quot;, sans-serif, SimHei, SimSun; white-space: normal; background-color: rgb(255, 255, 255);"><span style="box-sizing: border-box; outline: 0px; word-break: break-all;"></span>对象的反序列化：1.对一个对象进行反序列化，其实是恢复原来保存起来的属性数据，而且，此时必须需要依赖该对象原来的所属类；</p><p style="box-sizing: border-box; outline: 0px; padding: 0px; margin-top: 0px; margin-bottom: 16px; color: rgb(79, 79, 79); line-height: 26px; text-align: justify; word-break: break-all; font-family: -apple-system, &quot;SF UI Text&quot;, Arial, &quot;PingFang SC&quot;, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei&quot;, &quot;WenQuanYi Micro Hei&quot;, sans-serif, SimHei, SimSun; white-space: normal; background-color: rgb(255, 255, 255);"><span style="box-sizing: border-box; outline: 0px; word-break: break-all;"></span>2.对象反序列化的时候，会自动调用该对象所属类的__wakeup()魔术方法；</p><p style="box-sizing: border-box; outline: 0px; padding: 0px; margin-top: 0px; margin-bottom: 16px; color: rgb(79, 79, 79); line-height: 26px; text-align: justify; word-break: break-all; font-family: -apple-system, &quot;SF UI Text&quot;, Arial, &quot;PingFang SC&quot;, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei&quot;, &quot;WenQuanYi Micro Hei&quot;, sans-serif, SimHei, SimSun; white-space: normal; background-color: rgb(255, 255, 255);">总结：一般当我们需要将数据保存到文件中时会用到序列化，保存到数据库中一般不这样用，因为序列化和反序列化的过程其实很耗时；</p><p><img src="/blog/Uploads/ueditor/20180903/5b8c1f70e0dfb.png" style=""/></p><p><img src="/blog/Uploads/ueditor/20180903/5b8c1f71c6021.png" style=""/></p><p><br/></p><p>转自https://blog.csdn.net/little_rabbit_baby/article/details/53840543</p><p><br/></p>', 0, 20, 'PHP', 1535910410);

-- --------------------------------------------------------

--
-- 表的结构 `blog_carousel`
--

CREATE TABLE IF NOT EXISTS `blog_carousel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `author` varchar(20) DEFAULT NULL,
  `title` varchar(20) DEFAULT NULL,
  `content` varchar(100) DEFAULT NULL,
  `picture` varchar(100) DEFAULT NULL,
  `add_time` int(13) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `blog_carousel`
--

INSERT INTO `blog_carousel` (`id`, `author`, `title`, `content`, `picture`, `add_time`) VALUES
(2, 'mofung1', '总在思考一句积极的话', '那时候刚好下着雨，柏油路面湿冷冷的，还闪烁着青、黄、红颜色的灯火。', '/Uploads/carousel/20180609/5b1bf96b2cdc6.jpg', 1528559979),
(3, 'mofung1', '总在思考一句积极的话', '那时候刚好下着雨，柏油路面湿冷冷的，还闪烁着青、黄、红颜色的灯火。', '/Uploads/carousel/20180610/5b1bfc175de14.jpg', 1528560663);

-- --------------------------------------------------------

--
-- 表的结构 `blog_cate`
--

CREATE TABLE IF NOT EXISTS `blog_cate` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT COMMENT '栏目ID',
  `catename` varchar(60) NOT NULL COMMENT '栏目名',
  `catedesc` varchar(50) NOT NULL COMMENT '描述',
  `sort` mediumint(9) NOT NULL DEFAULT '20' COMMENT '栏目排序',
  `show_in_nav` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否导航栏显示',
  `add_time` int(11) NOT NULL COMMENT '添加时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- 转存表中的数据 `blog_cate`
--

INSERT INTO `blog_cate` (`id`, `catename`, `catedesc`, `sort`, `show_in_nav`, `add_time`) VALUES
(14, '留言板', '对我活着该小项目的留言', 4, 1, 1528007880),
(12, 'PHP', '关于PHP的一些知识内容', 1, 1, 1527960600),
(13, '小相册', '一点点好看的图片', 3, 1, 1528007888),
(15, '美文鉴赏', '好的文章', 2, 1, 1528007932);

-- --------------------------------------------------------

--
-- 表的结构 `blog_comment`
--

CREATE TABLE IF NOT EXISTS `blog_comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL COMMENT '名字',
  `comment` varchar(255) DEFAULT NULL COMMENT '留言',
  `contact` varchar(100) DEFAULT NULL COMMENT '联系方式',
  `time` int(11) DEFAULT NULL COMMENT '添加日期',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- 转存表中的数据 `blog_comment`
--

INSERT INTO `blog_comment` (`id`, `name`, `comment`, `contact`, `time`) VALUES
(2, '小明', '留言要写点什么呢？', NULL, NULL),
(3, '小花', '我是小明同学', '123456@11.com', 1528212345),
(4, '小白', '小白到此一游', '123456@qq.com', 1534857382),
(5, '明日飞花', '看看留言列表样式问题。AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA\r\n', 'GGGG@qq.com', 1535092939),
(6, '周星星', '这个留言板样式不好看啊！！！！', 'xingxing@qq.com', 1535099453),
(7, '不知名网友', '我问：“你知道涌泉穴在哪吗？”一个同事说：“不就是脚心吗？”忽然一位在玩手机的哥们抬起头说道：“古人说的‘涌泉相报’是踹他一脚？还是泼他一脸洗脚水？？？”', '1111@qq.com', 1535099794),
(8, '陌生网友', '今天吴老二终于睡到自然醒，他伸了伸懒腰，看了看旁边的女人，微笑着说：“嗨！我还不知道你叫什么。”“我也不知道你叫什么，不过我知道你这科肯定挂了。”监考老师说完收走了他的白卷。', 'qq@qq.com', 1535099831),
(9, '月光', '他和她经常组队打怪，一起升级，可是有一天，她忽然不上线了。他再也找不到她，专情的他执着地带着自己的宠物开始单练。很久以后，他机缘巧合发现，原来她的角色是卡在一个副本里出不来了，帮她解决了这个问题后，两人又重新过上了组队升级的快乐生活。好了，朋友们，这就是神雕侠侣的故事。', '22@qq.com', 1535099862),
(10, '我的明天', '达芬奇学幼时学画，老师让他画鸡蛋。他画了一天，有些厌倦。老师抚摸着他的头说：一千个鸡蛋中，没有哪两个完全相同，你看这是柴鸡蛋，这是普通鸡蛋，相比之下，柴鸡蛋个头小，蛋清粘稠度高，打蛋时不容易散，和番茄拌炒色泽鲜艳，口感纯正，而且富含免疫因子，营养价值更高...', '53@qq.com', 1535099888);

-- --------------------------------------------------------

--
-- 表的结构 `blog_database`
--

CREATE TABLE IF NOT EXISTS `blog_database` (
  `database_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `database_name` varchar(255) NOT NULL COMMENT '名字',
  `path` varchar(255) NOT NULL COMMENT '路径',
  `remark` varchar(255) NOT NULL COMMENT '备注',
  `admin_id` int(11) NOT NULL COMMENT '管理员id',
  `add_time` int(11) NOT NULL COMMENT '添加时间',
  PRIMARY KEY (`database_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `blog_database`
--

INSERT INTO `blog_database` (`database_id`, `database_name`, `path`, `remark`, `admin_id`, `add_time`) VALUES
(2, '6月1号备份', './database/20180601231138.sql', '没啥备注', 1, 1527865898);

-- --------------------------------------------------------

--
-- 表的结构 `blog_link`
--

CREATE TABLE IF NOT EXISTS `blog_link` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT COMMENT '链接ID',
  `title` varchar(50) DEFAULT NULL COMMENT '链接标题',
  `url` varchar(100) DEFAULT NULL COMMENT '链接标题',
  `desc` varchar(255) DEFAULT NULL COMMENT '链接描述',
  `sort` int(11) DEFAULT '20' COMMENT '排序',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- 转存表中的数据 `blog_link`
--

INSERT INTO `blog_link` (`id`, `title`, `url`, `desc`, `sort`) VALUES
(1, 'jquery', 'http://www.jq22.com/', 'jquery', 3),
(5, '不懂就百度', 'https://www.baidu.com', '这是百度', 2),
(8, 'Bootstrap中文网', 'http://v3.bootcss.com/', 'bootstrap中文网', 5),
(9, '百度翻译', 'http://fanyi.baidu.com/translate?aldtype=16047&amp;query=&amp;keyfrom=baidu&amp;smartresult=dict&amp', '', 5);

-- --------------------------------------------------------

--
-- 表的结构 `blog_photo`
--

CREATE TABLE IF NOT EXISTS `blog_photo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `photo` varchar(100) DEFAULT NULL,
  `content` varchar(150) DEFAULT NULL,
  `add_time` int(13) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- 转存表中的数据 `blog_photo`
--

INSERT INTO `blog_photo` (`id`, `photo`, `content`, `add_time`) VALUES
(6, '/Uploads/photo/20180609/5b1be5ad40aaa.jpg', '黑白', 1528554925),
(5, '/Uploads/photo/20180609/5b1be58eea8de.jpg', '复古镜头', 1528554895),
(12, '/Uploads/photo/20180609/5b1be69cafd00.jpg', '动物', 1528555164),
(8, '/Uploads/photo/20180609/5b1be5e0ac934.jpg', '笔记', 1528554976),
(9, '/Uploads/photo/20180609/5b1be6056e455.jpg', '杯子', 1528555013),
(10, '/Uploads/photo/20180609/5b1be63dee1db.jpg', '老鹰', 1528555070),
(11, '/Uploads/photo/20180609/5b1be65c6f6a7.jpg', '黑白杯子', 1528555100),
(13, '/Uploads/photo/20180609/5b1be6b7ea88f.jpg', '火柴', 1528555192),
(15, '/Uploads/photo/20180831/5b895a067ddc8.jpg', '不知道什么', 1535728134);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
