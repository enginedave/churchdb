

DROP DATABASE IF EXISTS `churchdb_dev`;
CREATE DATABASE `churchdb_dev`;
USE `churchdb_dev`;
-- ---
-- Globals
-- ---

-- SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
-- SET FOREIGN_KEY_CHECKS=0;

-- ---
-- Table 'tbl_family'
-- 
-- ---

DROP TABLE IF EXISTS `tbl_family`;
		
CREATE TABLE `tbl_family` (
  `id` INTEGER NOT NULL AUTO_INCREMENT,
  `family_name` VARCHAR(100) NOT NULL,
  `house_name` VARCHAR(100) NULL DEFAULT NULL,
  `house_number` VARCHAR(10) NULL DEFAULT NULL,
  `address_line1` VARCHAR(100) NULL DEFAULT NULL,
  `address_line2` VARCHAR(100) NULL DEFAULT NULL,
  `city` VARCHAR(100) NULL DEFAULT NULL,
  `region` VARCHAR(100) NULL DEFAULT NULL,
  `postcode` VARCHAR(20) NULL DEFAULT NULL,
  `country` VARCHAR(100) NULL DEFAULT NULL,
  `telephone` VARCHAR(25) NULL DEFAULT NULL,
  `district_id` INTEGER NOT NULL,
  `create_time` DATETIME NULL DEFAULT NULL,
  `create_user_id` INTEGER NULL DEFAULT NULL,
  `update_time` DATETIME NULL DEFAULT NULL,
  `update_user_id` INTEGER NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
);

-- ---
-- Table 'tbl_people'
-- 
-- ---

DROP TABLE IF EXISTS `tbl_people`;
		
CREATE TABLE `tbl_people` (
  `id` INTEGER NOT NULL AUTO_INCREMENT,
  `family_id` INTEGER NOT NULL,
  `salutation_id` INTEGER NOT NULL,
  `first_name` VARCHAR(100) NOT NULL,
  `middle_name` VARCHAR(100) NULL DEFAULT NULL,
  `last_name` VARCHAR(100) NULL DEFAULT NULL,
  `maiden_name` VARCHAR(100) NULL DEFAULT NULL,
  `suffix_id` INTEGER NULL DEFAULT NULL,
  `nick_name` VARCHAR(100) NULL DEFAULT NULL,
  `mobile_number` VARCHAR(30) NULL DEFAULT NULL,
  `work_number` VARCHAR(30) NULL DEFAULT NULL,
  `email_address1` VARCHAR(100) NULL DEFAULT NULL,
  `email_address2` VARCHAR(100) NULL DEFAULT NULL,
  `gender` INTEGER NOT NULL,
  `head_of_house` INTEGER NOT NULL,
  `date_of_birth` DATE NULL DEFAULT NULL,
  `date_of_baptism` DATE NULL DEFAULT NULL,
  `previous_church_id` INTEGER NULL DEFAULT NULL,
  `date_of_joining` DATE NULL DEFAULT NULL,
  `membership_status_id` INTEGER NULL DEFAULT NULL,
  `date_of_membership` DATE NULL DEFAULT NULL,
  `next_church_id` INTEGER NULL DEFAULT NULL,
  `date_of_leaving` DATE NULL DEFAULT NULL,
  `marital_status_id` INTEGER NOT NULL,
  `date_of_wedding` DATE NULL DEFAULT NULL,
  `date_of_death` DATE NULL DEFAULT NULL,
  `grave_plot` VARCHAR(100) NULL DEFAULT NULL,
  `notes` MEDIUMTEXT NULL DEFAULT NULL,
  `gift_aid` INTEGER NOT NULL,
  `create_time` DATETIME NULL DEFAULT NULL,
  `create_user_id` INTEGER NULL DEFAULT NULL,
  `update_time` DATETIME NULL DEFAULT NULL,
  `update_user_id` INTEGER NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
);

-- ---
-- Table 'tbl_group'
-- 
-- ---

DROP TABLE IF EXISTS `tbl_team`;
		
CREATE TABLE `tbl_team` (
  `id` INTEGER NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(100) NOT NULL,
  `leader_id` INTEGER NULL DEFAULT NULL,
  `create_time` DATETIME NULL DEFAULT NULL,
  `create_user_id` INTEGER NULL DEFAULT NULL,
  `update_time` DATETIME NULL DEFAULT NULL,
  `update_user_id` INTEGER NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
);

-- ---
-- Table 'tbl_user'
-- 
-- ---

DROP TABLE IF EXISTS `tbl_user`;
		
CREATE TABLE `tbl_user` (
  `id` INTEGER NOT NULL AUTO_INCREMENT,
  `email` VARCHAR(100) NOT NULL,
  `username` VARCHAR(100) NOT NULL,
  `password` VARCHAR(128) NOT NULL,
  `last_login_time` DATETIME NULL DEFAULT NULL,
  `create_time` DATETIME NULL DEFAULT NULL,
  `create_user_id` INTEGER NULL DEFAULT NULL,
  `update_time` DATETIME NULL DEFAULT NULL,
  `update_user_id` INTEGER NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
);

-- ---
-- Table 'tbl_membership_status'
-- 
-- ---

DROP TABLE IF EXISTS `tbl_membership_status`;
		
CREATE TABLE `tbl_membership_status` (
  `id` INTEGER NOT NULL AUTO_INCREMENT,
  `membership_type` VARCHAR(50) NOT NULL,
  `create_time` DATETIME NULL DEFAULT NULL,
  `create_user_id` INTEGER NULL DEFAULT NULL,
  `update_time` DATETIME NULL DEFAULT NULL,
  `update_user_id` INTEGER NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
);

-- ---
-- Table 'tbl_marital_status'
-- 
-- ---

DROP TABLE IF EXISTS `tbl_marital_status`;
		
CREATE TABLE `tbl_marital_status` (
  `id` INTEGER NOT NULL AUTO_INCREMENT,
  `marital_status_type` VARCHAR(100) NOT NULL,
  `create_time` DATETIME NULL DEFAULT NULL,
  `create_user_id` INTEGER NULL DEFAULT NULL,
  `update_time` DATETIME NULL DEFAULT NULL,
  `update_user_id` INTEGER NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
);

-- ---
-- Table 'tbl_salutation'
-- 
-- ---

DROP TABLE IF EXISTS `tbl_salutation`;
		
CREATE TABLE `tbl_salutation` (
  `id` INTEGER NOT NULL AUTO_INCREMENT,
  `salutation` VARCHAR(20) NOT NULL,
  `create_time` DATETIME NULL DEFAULT NULL,
  `create_user_id` INTEGER NULL DEFAULT NULL,
  `update_time` DATETIME NULL DEFAULT NULL,
  `update_user_id` INTEGER NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
);

-- ---
-- Table 'tbl_suffix'
-- 
-- ---

DROP TABLE IF EXISTS `tbl_suffix`;
		
CREATE TABLE `tbl_suffix` (
  `id` INTEGER NOT NULL AUTO_INCREMENT,
  `suffix` VARCHAR(20) NULL DEFAULT NULL,
  `create_time` DATETIME NULL DEFAULT NULL,
  `create_user_id` INTEGER NULL DEFAULT NULL,
  `update_time` DATETIME NULL DEFAULT NULL,
  `update_user_id` INTEGER NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
);

-- ---
-- Table 'tbl_previous_church'
-- 
-- ---

DROP TABLE IF EXISTS `tbl_previous_church`;
		
CREATE TABLE `tbl_previous_church` (
  `id` INTEGER NOT NULL AUTO_INCREMENT,
  `church_name` VARCHAR(100) NULL DEFAULT NULL,
  `create_time` DATETIME NULL DEFAULT NULL,
  `create_user_id` INTEGER NULL DEFAULT NULL,
  `update_time` DATETIME NULL DEFAULT NULL,
  `update_user_id` INTEGER NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
);

-- ---
-- Table 'tbl_next_church'
-- 
-- ---

DROP TABLE IF EXISTS `tbl_next_church`;
		
CREATE TABLE `tbl_next_church` (
  `id` INTEGER NOT NULL AUTO_INCREMENT,
  `church_name` VARCHAR(100) NULL DEFAULT NULL,
  `create_time` DATETIME NULL DEFAULT NULL,
  `create_user_id` INTEGER NULL DEFAULT NULL,
  `update_time` DATETIME NULL DEFAULT NULL,
  `update_user_id` INTEGER NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
);

-- ---
-- Table 'tbl_district'
-- 
-- ---

DROP TABLE IF EXISTS `tbl_district`;
		
CREATE TABLE `tbl_district` (
  `id` INTEGER NOT NULL AUTO_INCREMENT,
  `district_name` VARCHAR(100) NOT NULL,
  `district_leaders_id` INTEGER NOT NULL,
  `notes` MEDIUMTEXT NULL DEFAULT NULL,
  `create_time` DATETIME NULL DEFAULT NULL,
  `create_user_id` INTEGER NULL DEFAULT NULL,
  `update_time` DATETIME NULL DEFAULT NULL,
  `update_user_id` INTEGER NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
);

-- ---
-- Table 'tbl_district_leader'
-- 
-- ---

DROP TABLE IF EXISTS `tbl_district_leader`;
		
CREATE TABLE `tbl_district_leader` (
  `id` INTEGER NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(100) NOT NULL,
  `create_time` DATETIME NULL DEFAULT NULL,
  `create_user_id` INTEGER NULL DEFAULT NULL,
  `update_time` DATETIME NULL DEFAULT NULL,
  `update_user_id` INTEGER NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
);

-- ---
-- Table 'tbl_people_group_assignment'
-- 
-- ---

DROP TABLE IF EXISTS `tbl_people_team_assignment`;
		
CREATE TABLE `tbl_people_team_assignment` (
  `people_id` INTEGER NOT NULL,
  `team_id` INTEGER NOT NULL,
  `create_time` DATETIME NULL DEFAULT NULL,
  `create_user_id` INTEGER NULL DEFAULT NULL,
  `update_time` DATETIME NULL DEFAULT NULL,
  `update_user_id` INTEGER NULL DEFAULT NULL,
  PRIMARY KEY (`people_id`, `team_id`)
);

-- ---
-- Foreign Keys 
-- ---

ALTER TABLE `tbl_family` ADD FOREIGN KEY (district_id) REFERENCES `tbl_district` (`id`) ON UPDATE RESTRICT;
ALTER TABLE `tbl_people` ADD FOREIGN KEY (family_id) REFERENCES `tbl_family` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT;
ALTER TABLE `tbl_people` ADD FOREIGN KEY (salutation_id) REFERENCES `tbl_salutation` (`id`) ON UPDATE RESTRICT;
ALTER TABLE `tbl_people` ADD FOREIGN KEY (suffix_id) REFERENCES `tbl_suffix` (`id`) ON UPDATE RESTRICT;
ALTER TABLE `tbl_people` ADD FOREIGN KEY (previous_church_id) REFERENCES `tbl_previous_church` (`id`) ON UPDATE RESTRICT;
ALTER TABLE `tbl_people` ADD FOREIGN KEY (membership_status_id) REFERENCES `tbl_membership_status` (`id`) ON UPDATE RESTRICT;
ALTER TABLE `tbl_people` ADD FOREIGN KEY (next_church_id) REFERENCES `tbl_next_church` (`id`) ON UPDATE RESTRICT;
ALTER TABLE `tbl_people` ADD FOREIGN KEY (marital_status_id) REFERENCES `tbl_marital_status` (`id`) ON UPDATE RESTRICT;
ALTER TABLE `tbl_district` ADD FOREIGN KEY (district_leaders_id) REFERENCES `tbl_district_leader` (`id`) ON UPDATE RESTRICT;
ALTER TABLE `tbl_people_team_assignment` ADD FOREIGN KEY (people_id) REFERENCES `tbl_people` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT;
ALTER TABLE `tbl_people_team_assignment` ADD FOREIGN KEY (team_id) REFERENCES `tbl_team` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT;

-- ---
-- Table Properties
-- ---

-- ALTER TABLE `tbl_family` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `tbl_people` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `tbl_team` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `tbl_user` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `tbl_membership_status` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `tbl_marital_status` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `tbl_salutation` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `tbl_suffix` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `tbl_previous_church` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `tbl_next_church` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `tbl_district` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `tbl_district_leader` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `tbl_people_team_assignment` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ---
-- Test Data
-- ---
-- the list of district leaders
INSERT INTO `tbl_district_leader` (`name`,`create_time`,`create_user_id`,`update_time`,`update_user_id`) VALUES ('Griffin Foley','','','','');
INSERT INTO `tbl_district_leader` (`name`,`create_time`,`create_user_id`,`update_time`,`update_user_id`) VALUES ('Kennedy Gay','','','','');
INSERT INTO `tbl_district_leader` (`name`,`create_time`,`create_user_id`,`update_time`,`update_user_id`) VALUES ('Berk Oliver','','','','');
INSERT INTO `tbl_district_leader` (`name`,`create_time`,`create_user_id`,`update_time`,`update_user_id`) VALUES ('Kuame Charles','','','','');
INSERT INTO `tbl_district_leader` (`name`,`create_time`,`create_user_id`,`update_time`,`update_user_id`) VALUES ('Branden Hutchinson','','','','');
INSERT INTO `tbl_district_leader` (`name`,`create_time`,`create_user_id`,`update_time`,`update_user_id`) VALUES ('Ethan Petersen','','','','');
INSERT INTO `tbl_district_leader` (`name`,`create_time`,`create_user_id`,`update_time`,`update_user_id`) VALUES ('Nicholas Bean','','','','');
INSERT INTO `tbl_district_leader` (`name`,`create_time`,`create_user_id`,`update_time`,`update_user_id`) VALUES ('August Pittman','','','','');
INSERT INTO `tbl_district_leader` (`name`,`create_time`,`create_user_id`,`update_time`,`update_user_id`) VALUES ('Kamal Pollard','','','','');
INSERT INTO `tbl_district_leader` (`name`,`create_time`,`create_user_id`,`update_time`,`update_user_id`) VALUES ('Ryder Espinoza','','','','');
INSERT INTO `tbl_district_leader` (`name`,`create_time`,`create_user_id`,`update_time`,`update_user_id`) VALUES ('Ahmed Dudley','','','','');
INSERT INTO `tbl_district_leader` (`name`,`create_time`,`create_user_id`,`update_time`,`update_user_id`) VALUES ('Keaton Barrett','','','','');
INSERT INTO `tbl_district_leader` (`name`,`create_time`,`create_user_id`,`update_time`,`update_user_id`) VALUES ('Howard Newman','','','','');
INSERT INTO `tbl_district_leader` (`name`,`create_time`,`create_user_id`,`update_time`,`update_user_id`) VALUES ('Elvis Weeks','','','','');
INSERT INTO `tbl_district_leader` (`name`,`create_time`,`create_user_id`,`update_time`,`update_user_id`) VALUES ('Josiah Todd','','','','');
INSERT INTO `tbl_district_leader` (`name`,`create_time`,`create_user_id`,`update_time`,`update_user_id`) VALUES ('Conan Booth','','','','');
INSERT INTO `tbl_district_leader` (`name`,`create_time`,`create_user_id`,`update_time`,`update_user_id`) VALUES ('Reece Shaffer','','','','');
INSERT INTO `tbl_district_leader` (`name`,`create_time`,`create_user_id`,`update_time`,`update_user_id`) VALUES ('Dalton Villarreal','','','','');
INSERT INTO `tbl_district_leader` (`name`,`create_time`,`create_user_id`,`update_time`,`update_user_id`) VALUES ('Dominic Flynn','','','','');
INSERT INTO `tbl_district_leader` (`name`,`create_time`,`create_user_id`,`update_time`,`update_user_id`) VALUES ('Ronan Richard','','','','');

-- the list of districts
INSERT INTO `tbl_district` (`district_name`,`district_leaders_id`,`notes`,`create_time`,`create_user_id`,`update_time`,`update_user_id`) VALUES ('Lobortis','3','This is a note','','','','');
INSERT INTO `tbl_district` (`district_name`,`district_leaders_id`,`notes`,`create_time`,`create_user_id`,`update_time`,`update_user_id`) VALUES ('Rutrum','5','This is a note','','','','');
INSERT INTO `tbl_district` (`district_name`,`district_leaders_id`,`notes`,`create_time`,`create_user_id`,`update_time`,`update_user_id`) VALUES ('Consectetuer','8','This is a note','','','','');
INSERT INTO `tbl_district` (`district_name`,`district_leaders_id`,`notes`,`create_time`,`create_user_id`,`update_time`,`update_user_id`) VALUES ('Phasellus','10','This is a note','','','','');
INSERT INTO `tbl_district` (`district_name`,`district_leaders_id`,`notes`,`create_time`,`create_user_id`,`update_time`,`update_user_id`) VALUES ('Vulputate','2','This is a note','','','','');
INSERT INTO `tbl_district` (`district_name`,`district_leaders_id`,`notes`,`create_time`,`create_user_id`,`update_time`,`update_user_id`) VALUES ('Inceptos','1','This is a note','','','','');
INSERT INTO `tbl_district` (`district_name`,`district_leaders_id`,`notes`,`create_time`,`create_user_id`,`update_time`,`update_user_id`) VALUES ('Interdum','6','This is a note','','','','');
INSERT INTO `tbl_district` (`district_name`,`district_leaders_id`,`notes`,`create_time`,`create_user_id`,`update_time`,`update_user_id`) VALUES ('Sodales','4','This is a note','','','','');
INSERT INTO `tbl_district` (`district_name`,`district_leaders_id`,`notes`,`create_time`,`create_user_id`,`update_time`,`update_user_id`) VALUES ('Augue','7','This is a note','','','','');
INSERT INTO `tbl_district` (`district_name`,`district_leaders_id`,`notes`,`create_time`,`create_user_id`,`update_time`,`update_user_id`) VALUES ('Gravida','13','This is a note','','','','');





-- the family table information
INSERT INTO `tbl_family` (`family_name`,`house_name`,`house_number`,`address_line1`,`address_line2`,`city`,`region`,`postcode`,`country`,`telephone`,`district_id`,`create_time`,`create_user_id`,`update_time`,`update_user_id`) VALUES ('Maldonado','','56','Euismod Ave','Rhoncus. Road','Thomasville','Saskatchewan','F1Y 8R6','United Kingdom','+44 28 1569 3658','5','','','','');
INSERT INTO `tbl_family` (`family_name`,`house_name`,`house_number`,`address_line1`,`address_line2`,`city`,`region`,`postcode`,`country`,`telephone`,`district_id`,`create_time`,`create_user_id`,`update_time`,`update_user_id`) VALUES ('Clay','','15','Hendrerit Road','Rutrum Rd.','Muskogee','Yukon','G8X 9E9','United Kingdom','+44 28 1687 6598','5','','','','');
INSERT INTO `tbl_family` (`family_name`,`house_name`,`house_number`,`address_line1`,`address_line2`,`city`,`region`,`postcode`,`country`,`telephone`,`district_id`,`create_time`,`create_user_id`,`update_time`,`update_user_id`) VALUES ('Hubbard','aliquet','89','Adipiscing Street','','Honolulu','New Brunswick','N3Z 3R4','United Kingdom','+44 28 6598 2364','4','','','','');
INSERT INTO `tbl_family` (`family_name`,`house_name`,`house_number`,`address_line1`,`address_line2`,`city`,`region`,`postcode`,`country`,`telephone`,`district_id`,`create_time`,`create_user_id`,`update_time`,`update_user_id`) VALUES ('Kirby','','156','Sodales Rd','','Martinsburg','Nova Scotia','P7E 8K7','United Kingdom','+44 28 8961 3487','6','','','','');
INSERT INTO `tbl_family` (`family_name`,`house_name`,`house_number`,`address_line1`,`address_line2`,`city`,`region`,`postcode`,`country`,`telephone`,`district_id`,`create_time`,`create_user_id`,`update_time`,`update_user_id`) VALUES ('Hughes','','14','Quam Rd','','Dickinson','Alberta','S2Y 9G8','United Kingdom','+44 28 4569 3266','2','','','','');
INSERT INTO `tbl_family` (`family_name`,`house_name`,`house_number`,`address_line1`,`address_line2`,`city`,`region`,`postcode`,`country`,`telephone`,`district_id`,`create_time`,`create_user_id`,`update_time`,`update_user_id`) VALUES ('Maddox','','18','Ut Avenue','Quis Road','Atwater','Prince Edward Island','X5F 2J1','United Kingdom','+44 28 6458 9555','6','','','','');
INSERT INTO `tbl_family` (`family_name`,`house_name`,`house_number`,`address_line1`,`address_line2`,`city`,`region`,`postcode`,`country`,`telephone`,`district_id`,`create_time`,`create_user_id`,`update_time`,`update_user_id`) VALUES ('Middleton','semper','54','Libero Street','','Carrollton','Newfoundland and Labrador','O2P 1L5','United Kingdom','+44 28 1288 4592','1','','','','');
INSERT INTO `tbl_family` (`family_name`,`house_name`,`house_number`,`address_line1`,`address_line2`,`city`,`region`,`postcode`,`country`,`telephone`,`district_id`,`create_time`,`create_user_id`,`update_time`,`update_user_id`) VALUES ('Floyd','','96','Interdum Road','','Lake Charles','Nova Scotia','C9D 7S3','United Kingdom','+44 28 1552 9662','4','','','','');
INSERT INTO `tbl_family` (`family_name`,`house_name`,`house_number`,`address_line1`,`address_line2`,`city`,`region`,`postcode`,`country`,`telephone`,`district_id`,`create_time`,`create_user_id`,`update_time`,`update_user_id`) VALUES ('Holloway','','569','Tincidunt Road','','Merizo','Nunavut','D1O 8F4','United Kingdom','+44 28 4163 9512','3','','','','');
INSERT INTO `tbl_family` (`family_name`,`house_name`,`house_number`,`address_line1`,`address_line2`,`city`,`region`,`postcode`,`country`,`telephone`,`district_id`,`create_time`,`create_user_id`,`update_time`,`update_user_id`) VALUES ('Skinner','','24a','Mauris Avenue','','Cranston','Saskatchewan','L4M 4W6','United Kingdom','+44 28 7158 2222','8','','','','');
INSERT INTO `tbl_family` (`family_name`,`house_name`,`house_number`,`address_line1`,`address_line2`,`city`,`region`,`postcode`,`country`,`telephone`,`district_id`,`create_time`,`create_user_id`,`update_time`,`update_user_id`) VALUES ('Simon','','Flat 6','Dolor Street','','Orem','Ontario','G8O 8X1','United Kingdom','+44 28 7163 2599','9','','','','');
INSERT INTO `tbl_family` (`family_name`,`house_name`,`house_number`,`address_line1`,`address_line2`,`city`,`region`,`postcode`,`country`,`telephone`,`district_id`,`create_time`,`create_user_id`,`update_time`,`update_user_id`) VALUES ('Smith','','Adj 45','Fermentum Street','','Naperville','Manitoba','J7E 5R3','United Kingdom','+44 28 7163 8225','1','','','','');
INSERT INTO `tbl_family` (`family_name`,`house_name`,`house_number`,`address_line1`,`address_line2`,`city`,`region`,`postcode`,`country`,`telephone`,`district_id`,`create_time`,`create_user_id`,`update_time`,`update_user_id`) VALUES ('Rogers','','961','Lacinia Ave','','Santa Fe Springs','New Brunswick','J6R 5R2','United Kingdom','0287130568','9','','','','');
INSERT INTO `tbl_family` (`family_name`,`house_name`,`house_number`,`address_line1`,`address_line2`,`city`,`region`,`postcode`,`country`,`telephone`,`district_id`,`create_time`,`create_user_id`,`update_time`,`update_user_id`) VALUES ('Carson','','22','Orci Avenue','','Indio','Northwest Territories','W7B 3C5','United Kingdom','078 6328 9555','8','','','','');
INSERT INTO `tbl_family` (`family_name`,`house_name`,`house_number`,`address_line1`,`address_line2`,`city`,`region`,`postcode`,`country`,`telephone`,`district_id`,`create_time`,`create_user_id`,`update_time`,`update_user_id`) VALUES ('Clemons','magna','12','Vulputate Ave','','Boulder City','Manitoba','Z2E 2A7','United Kingdom','028 7148 3668','4','','','','');
INSERT INTO `tbl_family` (`family_name`,`house_name`,`house_number`,`address_line1`,`address_line2`,`city`,`region`,`postcode`,`country`,`telephone`,`district_id`,`create_time`,`create_user_id`,`update_time`,`update_user_id`) VALUES ('Donovan','','1','Dictum Road','','East Hartford','New Brunswick','Y9V 3P9','United Kingdom','028 7771 8661','3','','','','');
INSERT INTO `tbl_family` (`family_name`,`house_name`,`house_number`,`address_line1`,`address_line2`,`city`,`region`,`postcode`,`country`,`telephone`,`district_id`,`create_time`,`create_user_id`,`update_time`,`update_user_id`) VALUES ('McDaniel','','45','Arcu Street','','Columbia','Saskatchewan','G3X 6Y5','United Kingdom','+44 28 7419 3337','1','','','','');
INSERT INTO `tbl_family` (`family_name`,`house_name`,`house_number`,`address_line1`,`address_line2`,`city`,`region`,`postcode`,`country`,`telephone`,`district_id`,`create_time`,`create_user_id`,`update_time`,`update_user_id`) VALUES ('Cotton','','site 4b','Consectetuer, Av.','','West Valley City','Saskatchewan','P8L 5N5','United Kingdom','028 75841699','2','','','','');
INSERT INTO `tbl_family` (`family_name`,`house_name`,`house_number`,`address_line1`,`address_line2`,`city`,`region`,`postcode`,`country`,`telephone`,`district_id`,`create_time`,`create_user_id`,`update_time`,`update_user_id`) VALUES ('Orr','','88','Fusce Road','','Dalton','Nova Scotia','Q1L 6G6','United Kingdom','+44 28 1888 2777','3','','','','');
INSERT INTO `tbl_family` (`family_name`,`house_name`,`house_number`,`address_line1`,`address_line2`,`city`,`region`,`postcode`,`country`,`telephone`,`district_id`,`create_time`,`create_user_id`,`update_time`,`update_user_id`) VALUES ('Underwood','','3c','Nunc Avenue','','Gold Beach','Nova Scotia','G4V 2H6','United Kingdom','+44 28 1995 7336','4','','','','');



-- the salutation information
INSERT INTO `tbl_salutation` (`salutation`,`create_time`,`create_user_id`,`update_time`,`update_user_id`) VALUES ('Mr','','','','');
INSERT INTO `tbl_salutation` (`salutation`,`create_time`,`create_user_id`,`update_time`,`update_user_id`) VALUES ('Mrs','','','','');
INSERT INTO `tbl_salutation` (`salutation`,`create_time`,`create_user_id`,`update_time`,`update_user_id`) VALUES ('Ms','','','','');
INSERT INTO `tbl_salutation` (`salutation`,`create_time`,`create_user_id`,`update_time`,`update_user_id`) VALUES ('Miss','','','','');
INSERT INTO `tbl_salutation` (`salutation`,`create_time`,`create_user_id`,`update_time`,`update_user_id`) VALUES ('Master','','','','');
INSERT INTO `tbl_salutation` (`salutation`,`create_time`,`create_user_id`,`update_time`,`update_user_id`) VALUES ('Dr','','','','');
INSERT INTO `tbl_salutation` (`salutation`,`create_time`,`create_user_id`,`update_time`,`update_user_id`) VALUES ('Rev','','','','');
INSERT INTO `tbl_salutation` (`salutation`,`create_time`,`create_user_id`,`update_time`,`update_user_id`) VALUES ('Prof','','','','');

-- the suffix information
INSERT INTO `tbl_suffix` (`suffix`,`create_time`,`create_user_id`,`update_time`,`update_user_id`) VALUES (NULL,'','','','');
INSERT INTO `tbl_suffix` (`suffix`,`create_time`,`create_user_id`,`update_time`,`update_user_id`) VALUES ('Snr','','','','');
INSERT INTO `tbl_suffix` (`suffix`,`create_time`,`create_user_id`,`update_time`,`update_user_id`) VALUES ('Jnr','','','','');

-- the marital status information
INSERT INTO `tbl_marital_status` (`marital_status_type`,`create_time`,`create_user_id`,`update_time`,`update_user_id`) VALUES ('Unknown','','','','');
INSERT INTO `tbl_marital_status` (`marital_status_type`,`create_time`,`create_user_id`,`update_time`,`update_user_id`) VALUES ('Single','','','','');
INSERT INTO `tbl_marital_status` (`marital_status_type`,`create_time`,`create_user_id`,`update_time`,`update_user_id`) VALUES ('Married','','','','');
INSERT INTO `tbl_marital_status` (`marital_status_type`,`create_time`,`create_user_id`,`update_time`,`update_user_id`) VALUES ('Widow','','','','');
INSERT INTO `tbl_marital_status` (`marital_status_type`,`create_time`,`create_user_id`,`update_time`,`update_user_id`) VALUES ('Widower','','','','');
INSERT INTO `tbl_marital_status` (`marital_status_type`,`create_time`,`create_user_id`,`update_time`,`update_user_id`) VALUES ('Divorced','','','','');
INSERT INTO `tbl_marital_status` (`marital_status_type`,`create_time`,`create_user_id`,`update_time`,`update_user_id`) VALUES ('Cohabitating','','','','');
INSERT INTO `tbl_marital_status` (`marital_status_type`,`create_time`,`create_user_id`,`update_time`,`update_user_id`) VALUES ('Separated','','','','');
INSERT INTO `tbl_marital_status` (`marital_status_type`,`create_time`,`create_user_id`,`update_time`,`update_user_id`) VALUES ('Re-Married','','','','');

-- the membership status
INSERT INTO `tbl_membership_status` (`membership_type`,`create_time`,`create_user_id`,`update_time`,`update_user_id`) VALUES ('Unassigned','','','','');
INSERT INTO `tbl_membership_status` (`membership_type`,`create_time`,`create_user_id`,`update_time`,`update_user_id`) VALUES ('Visitor','','','','');
INSERT INTO `tbl_membership_status` (`membership_type`,`create_time`,`create_user_id`,`update_time`,`update_user_id`) VALUES ('Adherent','','','','');
INSERT INTO `tbl_membership_status` (`membership_type`,`create_time`,`create_user_id`,`update_time`,`update_user_id`) VALUES ('Member','','','','');
INSERT INTO `tbl_membership_status` (`membership_type`,`create_time`,`create_user_id`,`update_time`,`update_user_id`) VALUES ('Child','','','','');


-- previous churches
INSERT INTO `tbl_previous_church` (`church_name`,`create_time`,`create_user_id`,`update_time`,`update_user_id`) VALUES (NULL,'','','','');
INSERT INTO `tbl_previous_church` (`church_name`,`create_time`,`create_user_id`,`update_time`,`update_user_id`) VALUES ('First Baptist of Newtown','','','','');
INSERT INTO `tbl_previous_church` (`church_name`,`create_time`,`create_user_id`,`update_time`,`update_user_id`) VALUES ('Cornerstone','','','','');
INSERT INTO `tbl_previous_church` (`church_name`,`create_time`,`create_user_id`,`update_time`,`update_user_id`) VALUES ('Bethlehem Baptist','','','','');
INSERT INTO `tbl_previous_church` (`church_name`,`create_time`,`create_user_id`,`update_time`,`update_user_id`) VALUES ('Strand Presbyterian Church','','','','');

-- next churches
INSERT INTO `tbl_next_church` (`church_name`,`create_time`,`create_user_id`,`update_time`,`update_user_id`) VALUES (NULL,'','','','');
INSERT INTO `tbl_next_church` (`church_name`,`create_time`,`create_user_id`,`update_time`,`update_user_id`) VALUES ('First Baptist of Newtown','','','','');
INSERT INTO `tbl_next_church` (`church_name`,`create_time`,`create_user_id`,`update_time`,`update_user_id`) VALUES ('Cornerstone','','','','');
INSERT INTO `tbl_next_church` (`church_name`,`create_time`,`create_user_id`,`update_time`,`update_user_id`) VALUES ('Bethlehem Baptist','','','','');
INSERT INTO `tbl_next_church` (`church_name`,`create_time`,`create_user_id`,`update_time`,`update_user_id`) VALUES ('Strand Presbyterian Church','','','','');

-- the teams
INSERT INTO `tbl_team` (`name`,`leader_id`,`create_time`,`create_user_id`,`update_time`,`update_user_id`) VALUES ('Elders','','','','','');
INSERT INTO `tbl_team` (`name`,`leader_id`,`create_time`,`create_user_id`,`update_time`,`update_user_id`) VALUES ('Committee','','','','','');
INSERT INTO `tbl_team` (`name`,`leader_id`,`create_time`,`create_user_id`,`update_time`,`update_user_id`) VALUES ('Admin Team','','','','','');
INSERT INTO `tbl_team` (`name`,`leader_id`,`create_time`,`create_user_id`,`update_time`,`update_user_id`) VALUES ('Girls Brigade','','','','','');
INSERT INTO `tbl_team` (`name`,`leader_id`,`create_time`,`create_user_id`,`update_time`,`update_user_id`) VALUES ('Boys Brigade','','','','','');
INSERT INTO `tbl_team` (`name`,`leader_id`,`create_time`,`create_user_id`,`update_time`,`update_user_id`) VALUES ('Youth Group','','','','','');

-- the people information
INSERT INTO `tbl_people` (`family_id`,`salutation_id`,`first_name`,`middle_name`,`last_name`,`maiden_name`,`suffix_id`,`nick_name`,`mobile_number`,`work_number`,`email_address1`,`email_address2`,`gender`,`head_of_house`,`date_of_birth`,`date_of_baptism`,`previous_church_id`,`date_of_joining`,`membership_status_id`,`date_of_membership`,`next_church_id`,`date_of_leaving`,`marital_status_id`,`date_of_wedding`,`date_of_death`,`grave_plot`,`notes`,`gift_aid`,`create_time`,`create_user_id`,`update_time`,`update_user_id`) VALUES ('1','1','Damian','','','','2','','292-140-1759','204-827-3777','torquent@nibh.com','dapibus@eu.com','1','1','1965-09-17','1966-11-02','1','1993-08-03','3','1978-11-18','1','','3','1998-11-22','','','','1','','','','');
INSERT INTO `tbl_people` (`family_id`,`salutation_id`,`first_name`,`middle_name`,`last_name`,`maiden_name`,`suffix_id`,`nick_name`,`mobile_number`,`work_number`,`email_address1`,`email_address2`,`gender`,`head_of_house`,`date_of_birth`,`date_of_baptism`,`previous_church_id`,`date_of_joining`,`membership_status_id`,`date_of_membership`,`next_church_id`,`date_of_leaving`,`marital_status_id`,`date_of_wedding`,`date_of_death`,`grave_plot`,`notes`,`gift_aid`,`create_time`,`create_user_id`,`update_time`,`update_user_id`) VALUES ('1','2','Dora','','','','1','','165-255-9178','204-827-3777','leo@mauris.org','dapibus@eu.com','0','0','1947-10-03','1961-01-09','2','1991-04-16','3','1979-11-16','1','','3','1998-11-22','','','','1','','','','');
INSERT INTO `tbl_people` (`family_id`,`salutation_id`,`first_name`,`middle_name`,`last_name`,`maiden_name`,`suffix_id`,`nick_name`,`mobile_number`,`work_number`,`email_address1`,`email_address2`,`gender`,`head_of_house`,`date_of_birth`,`date_of_baptism`,`previous_church_id`,`date_of_joining`,`membership_status_id`,`date_of_membership`,`next_church_id`,`date_of_leaving`,`marital_status_id`,`date_of_wedding`,`date_of_death`,`grave_plot`,`notes`,`gift_aid`,`create_time`,`create_user_id`,`update_time`,`update_user_id`) VALUES ('2','1','Duncan','','','','1','','165-255-9178','204-827-3777','leo@mauris.org','dapibus@eu.com','1','1','1967-08-16','1947-10-03','3','1978-07-02','3','1992-06-19','1','','3','1999-06-08','','','','0','','','','');
INSERT INTO `tbl_people` (`family_id`,`salutation_id`,`first_name`,`middle_name`,`last_name`,`maiden_name`,`suffix_id`,`nick_name`,`mobile_number`,`work_number`,`email_address1`,`email_address2`,`gender`,`head_of_house`,`date_of_birth`,`date_of_baptism`,`previous_church_id`,`date_of_joining`,`membership_status_id`,`date_of_membership`,`next_church_id`,`date_of_leaving`,`marital_status_id`,`date_of_wedding`,`date_of_death`,`grave_plot`,`notes`,`gift_aid`,`create_time`,`create_user_id`,`update_time`,`update_user_id`) VALUES ('2','2','Vera','','','','1','','165-255-9178','204-827-3777','leo@mauris.org','dapibus@eu.com','0','0','1952-09-02','1954-12-15','4','1992-09-01','2','1996-08-15','1','','3','1999-06-08','','','','0','','','','');
INSERT INTO `tbl_people` (`family_id`,`salutation_id`,`first_name`,`middle_name`,`last_name`,`maiden_name`,`suffix_id`,`nick_name`,`mobile_number`,`work_number`,`email_address1`,`email_address2`,`gender`,`head_of_house`,`date_of_birth`,`date_of_baptism`,`previous_church_id`,`date_of_joining`,`membership_status_id`,`date_of_membership`,`next_church_id`,`date_of_leaving`,`marital_status_id`,`date_of_wedding`,`date_of_death`,`grave_plot`,`notes`,`gift_aid`,`create_time`,`create_user_id`,`update_time`,`update_user_id`) VALUES ('2','3','Judah','','','','1','','165-255-9178','204-827-3777','leo@mauris.org','dapibus@eu.com','1','0','1965-03-01','1962-03-15','4','1996-06-15','4','1993-01-29','1','','2','','','','','0','','','','');
INSERT INTO `tbl_people` (`family_id`,`salutation_id`,`first_name`,`middle_name`,`last_name`,`maiden_name`,`suffix_id`,`nick_name`,`mobile_number`,`work_number`,`email_address1`,`email_address2`,`gender`,`head_of_house`,`date_of_birth`,`date_of_baptism`,`previous_church_id`,`date_of_joining`,`membership_status_id`,`date_of_membership`,`next_church_id`,`date_of_leaving`,`marital_status_id`,`date_of_wedding`,`date_of_death`,`grave_plot`,`notes`,`gift_aid`,`create_time`,`create_user_id`,`update_time`,`update_user_id`) VALUES ('3','1','Lee','','','','3','','165-255-9178','204-827-3777','leo@mauris.org','dapibus@eu.com','1','1','1956-04-09','1953-08-20','2','1982-04-11','2','1991-04-16','1','','2','','','','','1','','','','');
INSERT INTO `tbl_people` (`family_id`,`salutation_id`,`first_name`,`middle_name`,`last_name`,`maiden_name`,`suffix_id`,`nick_name`,`mobile_number`,`work_number`,`email_address1`,`email_address2`,`gender`,`head_of_house`,`date_of_birth`,`date_of_baptism`,`previous_church_id`,`date_of_joining`,`membership_status_id`,`date_of_membership`,`next_church_id`,`date_of_leaving`,`marital_status_id`,`date_of_wedding`,`date_of_death`,`grave_plot`,`notes`,`gift_aid`,`create_time`,`create_user_id`,`update_time`,`update_user_id`) VALUES ('4','2','Kylynn','','','','1','','165-255-9178','204-827-3777','leo@mauris.org','dapibus@eu.com','1','1','1967-07-06','1945-01-22','1','1975-11-25','3','1991-12-10','1','','4','','','','','0','','','','');

-- user table
INSERT INTO `tbl_user` (`email`,`username`,`password`,`last_login_time`,`create_time`,`create_user_id`,`update_time`,`update_user_id`) VALUES ('test1@notanaddress.com','Test_User_One',md5('test1'),'','','','','');
INSERT INTO `tbl_user` (`email`,`username`,`password`,`last_login_time`,`create_time`,`create_user_id`,`update_time`,`update_user_id`) VALUES ('test2@notanaddress.com','Test_User_Two',md5('test2'),'','','','','');
INSERT INTO `tbl_user` (`email`,`username`,`password`,`last_login_time`,`create_time`,`create_user_id`,`update_time`,`update_user_id`) VALUES ('test3@notanaddress.com','Test_User_Three',md5('test3'),'','','','','');
INSERT INTO `tbl_user` (`email`,`username`,`password`,`last_login_time`,`create_time`,`create_user_id`,`update_time`,`update_user_id`) VALUES ('test4@notanaddress.com','Test_User_Four',md5('test4'),'','','','','');

-- the people team assignment table
INSERT INTO `tbl_people_team_assignment` (`people_id`,`team_id`,`create_time`,`create_user_id`,`update_time`,`update_user_id`) VALUES ('6','1','','','','');
INSERT INTO `tbl_people_team_assignment` (`people_id`,`team_id`,`create_time`,`create_user_id`,`update_time`,`update_user_id`) VALUES ('3','1','','','','');
INSERT INTO `tbl_people_team_assignment` (`people_id`,`team_id`,`create_time`,`create_user_id`,`update_time`,`update_user_id`) VALUES ('5','1','','','','');
INSERT INTO `tbl_people_team_assignment` (`people_id`,`team_id`,`create_time`,`create_user_id`,`update_time`,`update_user_id`) VALUES ('2','2','','','','');
INSERT INTO `tbl_people_team_assignment` (`people_id`,`team_id`,`create_time`,`create_user_id`,`update_time`,`update_user_id`) VALUES ('1','2','','','','');
INSERT INTO `tbl_people_team_assignment` (`people_id`,`team_id`,`create_time`,`create_user_id`,`update_time`,`update_user_id`) VALUES ('4','2','','','','');


/**
 * Database schema required by CDbAuthManager.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @link http://www.yiiframework.com/
 * @copyright Copyright &copy; 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 * @since 1.0
 */

drop table if exists `AuthAssignment`;
drop table if exists `AuthItemChild`;
drop table if exists `AuthItem`;

create table `AuthItem`
(
   `name`                 varchar(64) not null,
   `type`                 integer not null,
   `description`          text,
   `bizrule`              text,
   `data`                 text,
   primary key (`name`)
) engine InnoDB;

create table `AuthItemChild`
(
   `parent`               varchar(64) not null,
   `child`                varchar(64) not null,
   primary key (`parent`,`child`),
   foreign key (`parent`) references `AuthItem` (`name`) on delete cascade on update cascade,
   foreign key (`child`) references `AuthItem` (`name`) on delete cascade on update cascade
) engine InnoDB;

create table `AuthAssignment`
(
   `itemname`             varchar(64) not null,
   `userid`               varchar(64) not null,
   `bizrule`              text,
   `data`                 text,
   primary key (`itemname`,`userid`),
   foreign key (`itemname`) references `AuthItem` (`name`) on delete cascade on update cascade
) engine InnoDB;





