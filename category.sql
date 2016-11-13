 grant all on qanda.* to 'user_qanda'@'localhost' identified by 'bob';

 drop table  if exists category ;

CREATE TABLE `category` (
  `category_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_title` varchar(64) NOT NULL DEFAULT '',
  `sort` int(10) unsigned NOT NULL DEFAULT '0',
  `parent_id` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 

 insert into category values 
	(1, '未分类', 0, 0),
 	(23, 'PHP', 0, 0), 
 	(18, 'PHP框架', 0, 23),
 	(19, '核心语法', 0, 23),
 	(9, '前端', 0, 0),
 	(10, 'JavaScript', 0, 9),
 	(11, 'React', 0, 9),
 	(42, 'OOP', 0, 19);

CREATE TABLE `topic` (
  `topic_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `topic_title` varchar(64) NOT NULL DEFAULT '',
  `topic_desc` varchar(255) NOT NULL DEFAULT '',
  `topic_img` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`topic_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 |


create table `question`(
`question_id` int unsigned auto_increment primary key,
`category_id` int unsigned not null default 0,
`question_detail` text,
`add_time`  int not null default 0,
`update_time` int not null default 0,
`user_id` int unsigned not null default 0,
 `view_count` int unsigned not null default 0
)charset = utf8;


create table topic_question(
`tp_id`int unsigned auto_increment primary key,
`topic_id` int unsigned not null default 0,
`question_id` int unsigned not null default 0
)charset = utf8;


create table answer(
`answer_id`int unsigned auto_increment primary key,
`question_id` int unsigned not null default 0,
`user_id` int unsigned not null default 0,
`answer_content` text,
`add_time` int not null default 0
)charset = utf8;

create table role(
role_id int unsigned auto_increment primary key,
role_name varchar(64) not null default ''
)charset = utf8;

create table user
(
 user_id int unsigned auto_increment primary key,
 user_name varchar(64) not null default '',
 user_password varchar(64) not null default '',
 user_salt varchar(16) not null default '',
 user_nickname varchar(32) not null default  '',
 user_email varchar(255) not null default  '',
 role_id int unsigned not null default 0
)charset=utf8;
alter table user add cloumn is_active tinyint not null default 0