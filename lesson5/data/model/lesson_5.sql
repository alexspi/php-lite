
SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema lesson_5
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema lesson_5
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `lesson_5` ;
USE `lesson_5` ;

-- -----------------------------------------------------
-- Table `lesson_5`.`product`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `lesson_5`.`product` ;

CREATE TABLE IF NOT EXISTS `lesson_5`.`product` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `url` VARCHAR(45) NOT NULL,
  `count` VARCHAR(45) NOT NULL,
  `count_view` INT NULL,
  `price` INT NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `lesson_5`.`comment`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `lesson_5`.`comment` ;

CREATE TABLE IF NOT EXISTS `lesson_5`.`comment` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `comment` VARCHAR(128) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
