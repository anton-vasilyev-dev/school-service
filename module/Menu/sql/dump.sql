CREATE TABLE `menu` (
  id INT(11) NOT NULL AUTO_INCREMENT,
  parentId INT(11),
  `level` INT(11),
  title VARCHAR(255) NOT NULL,
  href VARCHAR(1024) NOT NULL,
  PRIMARY KEY (id)
) ENGINE = INNODB CHARSET = utf8;

ALTER TABLE menuItem ADD `type` ENUM ('any', 'home');