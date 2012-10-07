DROP TABLE `wall`;
CREATE TABLE `wall` (
  id INT(11) NOT NULL AUTO_INCREMENT,
  userId INT(11),
  deteTime TIMESTAMP NOT NULL,
  message VARCHAR(1024) NOT NULL,
  `name` varchar(255) not null,
  `image` VARCHAR(1024) NOT NULL,
  PRIMARY KEY (id)
) ENGINE = INNODB CHARSET = utf8;