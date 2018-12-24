-- ----------------------------
-- 日期 2018-05-15 09:44:24
-- MySQL Databaseblog
-- Create By 1
-- ----------------------------

-- ----------------------------
-- Table structure for `blog_admin`
-- ----------------------------

DROP TABLE IF EXISTS `blog_admin`;

CREATE TABLE `blog_admin` (
  `id` tinyint(5) NOT NULL AUTO_INCREMENT COMMENT '管理员ID',
  `admin_name` varchar(60) DEFAULT NULL COMMENT '管理员名字',
  `password` char(32) DEFAULT NULL COMMENT '管理员密码',
  `add_time` int(11) NOT NULL COMMENT '添加时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Data for the table `blog_admin`
-- ----------------------------

INSERT INTO `blog_admin` VALUES ('1', 'xiaomo', '3650e8f6ffdaf52b84644ed97868cc19', '1526289367');
-- ----------------------------
-- End
-- ----------------------------

-- ----------------------------
-- Table structure for `blog_article`
-- ----------------------------

DROP TABLE IF EXISTS `blog_article`;

CREATE TABLE `blog_article` (
  `id` mediumint(9) NOT NULL DEFAULT '0' COMMENT '文章ID',
  `title` varchar(60) DEFAULT NULL COMMENT '文章标题',
  `desc` varchar(255) DEFAULT NULL COMMENT '文章描述',
  `pic` varchar(100) DEFAULT NULL COMMENT '文章图片',
  `content` text COMMENT '文章内容',
  `cateid` mediumint(9) DEFAULT NULL COMMENT '所属栏目',
  `time` int(13) DEFAULT NULL COMMENT '发布时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Data for the table `blog_article`
-- ----------------------------

INSERT INTO `blog_article` VALUES ('0', '', '', '', '', '0', '0');
-- ----------------------------
-- End
-- ----------------------------

-- ----------------------------
-- Table structure for `blog_cate`
-- ----------------------------

DROP TABLE IF EXISTS `blog_cate`;

CREATE TABLE `blog_cate` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT COMMENT '栏目ID',
  `catename` varchar(60) NOT NULL COMMENT '栏目名',
  `catedesc` varchar(50) NOT NULL COMMENT '描述',
  `sort` mediumint(9) NOT NULL DEFAULT '20' COMMENT '栏目排序',
  `show_in_nav` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否导航栏显示',
  `add_time` int(11) NOT NULL COMMENT '添加时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Data for the table `blog_cate`
-- ----------------------------

INSERT INTO `blog_cate` VALUES ('1', '心情文章', '栏目啊', '3', '0', '1551006313');
INSERT INTO `blog_cate` VALUES ('6', '我的日常1', '栏目啊1', '10', '1', '1551006313');
INSERT INTO `blog_cate` VALUES ('3', 'test', '栏目啊', '1', '0', '1551006313');
INSERT INTO `blog_cate` VALUES ('7', '心情文章2', '', '2', '1', '0');
INSERT INTO `blog_cate` VALUES ('8', '我的栏目', '1', '30', '0', '0');
INSERT INTO `blog_cate` VALUES ('11', '数据库', '不想写备注', '50', '0', '0');
-- ----------------------------
-- End
-- ----------------------------

-- ----------------------------
-- Table structure for `blog_database`
-- ----------------------------

DROP TABLE IF EXISTS `blog_database`;

CREATE TABLE `blog_database` (
  `database_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `database_name` varchar(255) NOT NULL COMMENT '名字',
  `path` varchar(255) NOT NULL COMMENT '路径',
  `remark` varchar(255) NOT NULL COMMENT '备注',
  `admin_id` int(11) NOT NULL COMMENT '管理员id',
  `add_time` int(11) NOT NULL COMMENT '添加时间',
  PRIMARY KEY (`database_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=gbk;

-- ----------------------------
-- Data for the table `blog_database`
-- ----------------------------

-- ----------------------------
-- Table structure for `blog_link`
-- ----------------------------

DROP TABLE IF EXISTS `blog_link`;

CREATE TABLE `blog_link` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT COMMENT '链接ID',
  `title` varchar(50) DEFAULT NULL COMMENT '链接标题',
  `url` varchar(100) DEFAULT NULL COMMENT '链接标题',
  `desc` varchar(255) DEFAULT NULL COMMENT '链接描述',
  `sort` int(11) DEFAULT '20' COMMENT '排序',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Data for the table `blog_link`
-- ----------------------------

INSERT INTO `blog_link` VALUES ('1', 'PHP中文网', 'www.php.com', 'PHP中文网12', '3');
INSERT INTO `blog_link` VALUES ('5', '百度', 'https://www.baidu.com', '这是百度', '2');
-- ----------------------------
-- End
-- ----------------------------

