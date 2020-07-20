CREATE TABLE IF NOT EXISTS `tbl_comment` (
  `comment_id` int(11) NOT NULL auto_increment,
  `star_rate` varchar(10) not NULL,
  `parent_comment_id` int(11) NOT NULL,
  `comment` varchar(200) NOT NULL,
  `comment_sender_name` varchar(40) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY(`comment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;