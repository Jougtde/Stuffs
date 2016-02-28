SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE DATABASE IF NOT EXISTS `supertest3` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `supertest3` ;

-- -----------------------------------------------------
-- Table `supertest`.`users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `supertest3`.`users` (
  `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(45) NOT NULL,
  `email` VARCHAR(255) NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  `avatar` VARCHAR(255) NOT NULL,
  `group` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `username_UNIQUE` (`username` ASC),
  UNIQUE INDEX `email_UNIQUE` (`email` ASC),
  UNIQUE INDEX `password_UNIQUE` (`password` ASC),
  UNIQUE INDEX `avatar_UNIQUE` (`avatar` ASC),
  UNIQUE INDEX `group_UNIQUE` (`group` ASC))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `supertest`.`articles`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `supertest3`.`articles` (
  `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(255) NOT NULL,
  `content` TEXT NOT NULL,
  `author` VARCHAR(45) NOT NULL,
  `created_at` DATE NOT NULL,
  `posted_at` DATE NOT NULL,
  `status` VARCHAR(255) NOT NULL,
  `last_update` DATE NOT NULL,
  `visibility` VARCHAR(255) NOT NULL,
  `users_id` INT(11) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `name_UNIQUE` (`title` ASC),
  UNIQUE INDEX `category_id_UNIQUE` (`status` ASC),
  UNIQUE INDEX `created_at_UNIQUE` (`created_at` ASC),
  UNIQUE INDEX `author_UNIQUE` (`author` ASC),
  INDEX `fk_articles_users1_idx` (`users_id` ASC),
  CONSTRAINT `fk_articles_users1`
    FOREIGN KEY (`users_id`)
    REFERENCES `supertest`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `supertest`.`categories`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `supertest3`.`categories` (
  `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `name_UNIQUE` (`name` ASC))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `supertest`.`comments`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `supertest3`.`comments` (
  `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `content` VARCHAR(255) NOT NULL,
  `created_at` DATE NOT NULL,
  `author` VARCHAR(45) NOT NULL,
  `articles_id` INT(11) UNSIGNED NOT NULL,
  `users_id` INT(11) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `content_UNIQUE` (`content` ASC),
  UNIQUE INDEX `created_at_UNIQUE` (`created_at` ASC),
  UNIQUE INDEX `author_UNIQUE` (`author` ASC),
  INDEX `fk_comments_articles1_idx` (`articles_id` ASC),
  INDEX `fk_comments_users1_idx` (`users_id` ASC),
  CONSTRAINT `fk_comments_articles1`
    FOREIGN KEY (`articles_id`)
    REFERENCES `supertest`.`articles` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_comments_users1`
    FOREIGN KEY (`users_id`)
    REFERENCES `supertest`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `supertest`.`articles_has_categories`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `supertest3`.`articles_has_categories` (
  `articles_id` INT(11) UNSIGNED NOT NULL,
  `categories_id` INT(11) UNSIGNED NOT NULL,
  PRIMARY KEY (`articles_id`, `categories_id`),
  INDEX `fk_articles_has_categories_categories1_idx` (`categories_id` ASC),
  INDEX `fk_articles_has_categories_articles_idx` (`articles_id` ASC),
  CONSTRAINT `fk_articles_has_categories_articles`
    FOREIGN KEY (`articles_id`)
    REFERENCES `supertest`.`articles` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_articles_has_categories_categories1`
    FOREIGN KEY (`categories_id`)
    REFERENCES `supertest`.`categories` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `supertest`.`tags`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `supertest3`.`tags` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `supertest`.`article_has_tags`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `supertest3`.`article_has_tags` (
  `articles_id` INT(11) UNSIGNED NOT NULL,
  `tags_id` INT NOT NULL,
  PRIMARY KEY (`articles_id`, `tags_id`),
  INDEX `fk_articles_has_tags_tags1_idx` (`tags_id` ASC),
  INDEX `fk_articles_has_tags_articles1_idx` (`articles_id` ASC),
  CONSTRAINT `fk_articles_has_tags_articles1`
    FOREIGN KEY (`articles_id`)
    REFERENCES `supertest`.`articles` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_articles_has_tags_tags1`
    FOREIGN KEY (`tags_id`)
    REFERENCES `supertest`.`tags` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
