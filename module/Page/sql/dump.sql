CREATE TABLE `page` (
  id int(11) NOT NULL auto_increment,
  title varchar(255) NOT NULL,
  description varchar(255),
  alias varchar(255) NOT NULL,
  keywords varchar(255),
  text TEXT NOT NULL,
  PRIMARY KEY (id)
) ENGINE = INNODB charset=utf8;