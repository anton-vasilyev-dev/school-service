CREATE TABLE `user` (
  id INT(11) NOT NULL AUTO_INCREMENT,
  login VARCHAR(255) NOT NULL,
  PASSWORD VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL,
  firstName VARCHAR(255) NOT NULL,
  lastName VARCHAR(255) NOT NULL,
  middleName VARCHAR(255),
  role ENUM('guest', 'student', 'parent', 'teacher', 'admin') NOT NULL DEFAULT 'guest',
  PRIMARY KEY (id)
) ENGINE = INNODB CHARSET = utf8;