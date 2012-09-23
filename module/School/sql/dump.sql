CREATE TABLE `class` (
  id int(11) NOT NULL auto_increment,
  `number` varchar(255) NOT NULL,
  description varchar(255),
  PRIMARY KEY (id)
) ENGINE = INNODB charset=utf8;

CREATE TABLE `subject` (
  id int(11) NOT NULL auto_increment,
  `title` varchar(255) NOT NULL,
  description varchar(255),
  text TEXT not NULL,
  PRIMARY KEY (id)
) ENGINE = INNODB charset=utf8;

create table `dictionary` (
  id int(11) NOT NULL auto_increment,
  parentId int(11) NOT NULL,
  alias varchar(255) NOT NULL,
  title varchar(255) NOT NULL,
  description TEXT not NULL,
  PRIMARY KEY (id)
) ENGINE = INNODB charset=utf8;

CREATE TABLE `schelude` (
  id int(11) NOT NULL auto_increment,
  classId int(11) NOT NULL,
  teachedId int(11) NOT NULL,
  weekdayId int(11) not null,
  lessonId int(11) NOT NULL,
  PRIMARY KEY (id)
) ENGINE = INNODB charset=utf8;