数据库语法
==========
创建表
------
CREATE TABLE `message` (
  `id` tinyint(1) NOT NULL auto_increment,
  `user` varchar(25) NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` tinytext NOT NULL,
  `lastdate` date NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=gbk AUTO_INCREMENT=1 ;
