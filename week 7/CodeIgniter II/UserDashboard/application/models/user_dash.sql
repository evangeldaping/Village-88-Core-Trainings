SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `user_dash` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `user_dash` ;

-- -----------------------------------------------------
-- Table `user_dash`.`users`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `user_dash`.`users` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `first_name` VARCHAR(21) NOT NULL ,
  `last_name` VARCHAR(45) NOT NULL ,
  `email` VARCHAR(45) NOT NULL ,
  `password` TEXT NOT NULL ,
  `user_level` INT(11) NOT NULL ,
  `created_at` DATETIME NOT NULL ,
  `updated_at` DATETIME NOT NULL ,
  `description` VARCHAR(255) NULL ,
  PRIMARY KEY (`id`) ,
  UNIQUE INDEX `email_UNIQUE` (`email` ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `user_dash`.`messages`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `user_dash`.`messages` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `author_id` INT NOT NULL ,
  `profile_id` INT NOT NULL ,
  `message_txt` VARCHAR(255) NOT NULL ,
  `created_at` DATETIME NOT NULL ,
  `updated_at` DATETIME NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_messages_users1_idx` (`author_id` ASC) ,
  INDEX `fk_messages_users2_idx` (`profile_id` ASC) ,
  CONSTRAINT `fk_messages_users1`
    FOREIGN KEY (`author_id` )
    REFERENCES `user_dash`.`users` (`id` )
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_messages_users2`
    FOREIGN KEY (`profile_id` )
    REFERENCES `user_dash`.`users` (`id` )
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `user_dash`.`comments`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `user_dash`.`comments` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `author_id` INT NOT NULL ,
  `message_id` INT NOT NULL ,
  `comment_txt` VARCHAR(255) NOT NULL ,
  `created_at` DATETIME NOT NULL ,
  `updated_at` DATETIME NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_comments_users_idx` (`author_id` ASC) ,
  INDEX `fk_comments_messages1_idx` (`message_id` ASC) ,
  CONSTRAINT `fk_comments_users`
    FOREIGN KEY (`author_id` )
    REFERENCES `user_dash`.`users` (`id` )
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_comments_messages1`
    FOREIGN KEY (`message_id` )
    REFERENCES `user_dash`.`messages` (`id` )
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;

USE `user_dash` ;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
