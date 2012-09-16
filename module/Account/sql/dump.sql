CREATE TABLE `user` (
  id int(11) NOT NULL auto_increment,
  login varchar(255) NOT NULL,
  password varchar(255) NOT NULL,
  email varchar(255) NOT NULL,
  firstName varchar(255) NOT NULL,
  lastName varchar(255) NOT NULL,
  middleName varchar(255),
  role ENUM('guest', 'student', 'parent', 'teacher', 'admin') NOT NULL DEFAULT 'guest',
  PRIMARY KEY (id)
) ENGINE = INNODB;