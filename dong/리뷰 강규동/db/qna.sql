CREATE TABLE IF NOT EXISTS `qnacomment` (
  `comment_id` int(11) NOT NULL auto_increment,
  
  `parent_comment_id` int(11) NOT NULL,
  `comment` varchar(200) NOT NULL,
  `comment_sender_name` varchar(40) NOT NULL,
<<<<<<< HEAD
  `comment_nick` VARCHAR(50) not null,
  `comment_pname` VARCHAR(50) not null,
=======
>>>>>>> f35a68d35cf0307c189f1e8c88bac15c6c282942
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY(`comment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;