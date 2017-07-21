create database logistic;
use logistic;
DROP TABLE IF EXISTS `goods`;

CREATE TABLE　`goods`(
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL comment '姓名',
  `phone`  varchar(15)  NOT NULL comment '手机号',
  `deliver` varchar(32) NOT NULL comment '发货地址',
  `receipt` varchar(32) NOT NULL comment '到达地址',
  `goods_type` varchar(20) NOT NULL comment '货物类型',
  `goods_name` varchar(32) NOT NULL comment '货物名称',
  `goods_weight` char(20) NOT NULL  comment '货物重量',
  `pai_id` int(10),
  PRIMARY KEY (`id`)
)ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;


CREATE TABLE `logistic`.`goods` ( 
`id` INT(10) UNSIGNED NULL AUTO_INCREMENT COMMENT 'ID' , 
`username` VARCHAR(255) NULL COMMENT '名字' , 
`iphone` VARCHAR(26) NULL COMMENT '电话号码' ,
`deliver` VARCHAR(255) NULL COMMENT '出发地点' , 
`receipt` VARCHAR(255) NULL COMMENT '收货地点' , 
`goods_type` VARCHAR(255) NULL , 
`goods_name` VARCHAR(255) NULL , 
`goods_weight` VARCHAR(255) NULL , 
`date` DATE NULL COMMENT '添加时间' , 
PRIMARY KEY (`id`)
) ENGINE = InnoDB CHARACTER SET utf8 COLLATE utf8_general_ci;

insert into goods values (1,'李东东',15012345634,'汉中市汉台区','汉中市洋县','建材','水泥',100000,'2017-7-13');




/*管理员表*/
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` mediumint(6) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL DEFAULT '',
  `password` varchar(32) NOT NULL DEFAULT '',
  `email` varchar(40) DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

insert into admin values (1,'hanmeimei','hanmeimei','1531630636@qq.com');


--Driver 司机表
DROP TABLE IF EXISTS `driver`;
Create TAble `driver`(
	`driver_id` mediumint(6) unsigned Not NULL AUTO_INCREMENT,
	`username` VARCHAR(255) NULL COMMENT '名字' , 
	 `thumb` varchar(100) NOT NULL DEFAULT '' COMMENT '头像',
	`iphone` VARCHAR(26) NULL COMMENT '电话号码' ,
	 `deliver` varchar(32) NOT NULL comment '地址',
	 `driver_type` varchar(32) NOT NULL comment '车型',
	 `date` DATE NULL COMMENT '添加时间' , 
	PRIMARY KEY (`driver_id`)
)ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

Create TAble `carousel`(
	`id` mediumint(6) unsigned Not NULL AUTO_INCREMENT,
	 `thumb` varchar(100) NOT NULL DEFAULT '' COMMENT '头像',
	 `list` varchar(32) NOT NULL DEFAULT '',
	PRIMARY KEY (`id`)
)ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
insert into carousel values (2,'/upload/2017-07-18/596df33377305.jpg','');