CREATE TABLE `online notice board`.`admin` (
  `admin_id` INT NOT NULL AUTO_INCREMENT ,
  `username` VARCHAR(255) NOT NULL ,
  `password` VARCHAR(255) NOT NULL ,
  PRIMARY KEY (`admin_id`)) ENGINE = InnoDB;
);

CREATE TABLE `online notice board`.`user`
( `user_id` INT NOT NULL AUTO_INCREMENT ,
  `username` VARCHAR(255) NOT NULL ,
  `password` VARCHAR(255) NOT NULL ,
  PRIMARY KEY (`user_id`)) ENGINE = InnoDB;
);

CREATE TABLE `online notice board`.`notice`
(
  `notice_id` INT NOT NULL AUTO_INCREMENT ,
  `user` VARCHAR(255) NOT NULL ,
  `subject` TEXT NOT NULL ,
 `desc` TEXT NOT NULL ,
 `date` TIMESTAMP NOT NULL ,
 PRIMARY KEY (`notice_id`)) ENGINE = InnoDB;
);
