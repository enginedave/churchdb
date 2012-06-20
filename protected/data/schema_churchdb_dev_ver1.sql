



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
  `id_tbl_district` INTEGER NOT NULL,
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
  `id_tbl_family` INTEGER NOT NULL,
  `id_tbl_salutation` INTEGER NOT NULL,
  `first_name` VARCHAR(100) NOT NULL DEFAULT 'NULL',
  `middle_name` VARCHAR(100) NULL DEFAULT NULL,
  `last_name` VARCHAR(100) NULL DEFAULT NULL,
  `maiden_name` VARCHAR(100) NULL DEFAULT NULL,
  `id_tbl_suffix` INTEGER NOT NULL,
  `nick_name` VARCHAR(100) NULL DEFAULT NULL,
  `mobile_number` VARCHAR(30) NULL DEFAULT NULL,
  `work_number` VARCHAR(30) NULL DEFAULT NULL,
  `email_address1` VARCHAR(100) NULL DEFAULT NULL,
  `email_address2` VARCHAR(100) NULL DEFAULT NULL,
  `gender` bit NOT NULL DEFAULT 1,
  `head_of_house` bit NOT NULL DEFAULT 0,
  `date_of_birth` DATE NULL DEFAULT NULL,
  `date_of_baptism` DATE NULL DEFAULT NULL,
  `id_tbl_previous_church` INTEGER NULL DEFAULT NULL,
  `date_of_joining` DATE NULL DEFAULT NULL,
  `id_tbl_membership_status` INTEGER NULL DEFAULT NULL,
  `date_of_membership` DATE NULL DEFAULT NULL,
  `id_tbl_next_church` INTEGER NULL DEFAULT NULL,
  `date_of_leaving` DATE NULL DEFAULT NULL,
  `id_tbl_marital_status` INTEGER NOT NULL,
  `date_of_wedding` DATE NULL DEFAULT NULL,
  `date_of_death` DATE NULL DEFAULT NULL,
  `grave_plot` VARCHAR(100) NULL DEFAULT NULL,
  `notes` MEDIUMTEXT NULL DEFAULT NULL,
  `gift_aid` bit NOT NULL DEFAULT 0,
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

DROP TABLE IF EXISTS `tbl_group`;
		
CREATE TABLE `tbl_group` (
  `id` INTEGER NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(100) NOT NULL,
  `id_tbl_people` INTEGER NOT NULL,
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
  `password` VARCHAR(20) NOT NULL,
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
  `suffix` VARCHAR(20) NOT NULL,
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
  `church_name` VARCHAR(100) NOT NULL,
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
  `church_name` VARCHAR(100) NOT NULL,
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
  `id_tbl_district_leaders` INTEGER NOT NULL,
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

DROP TABLE IF EXISTS `tbl_people_group_assignment`;
		
CREATE TABLE `tbl_people_group_assignment` (
  `id` INTEGER NOT NULL AUTO_INCREMENT,
  `id_tbl_people` INTEGER NOT NULL,
  `id_tbl_group` INTEGER NOT NULL,
  `create_time` DATETIME NULL DEFAULT NULL,
  `create_user_id` INTEGER NULL DEFAULT NULL,
  `update_time` DATETIME NULL DEFAULT NULL,
  `update_user_id` INTEGER NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
);

-- ---
-- Foreign Keys 
-- ---

ALTER TABLE `tbl_family` ADD FOREIGN KEY (id_tbl_district) REFERENCES `tbl_district` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT;
ALTER TABLE `tbl_people` ADD FOREIGN KEY (id_tbl_family) REFERENCES `tbl_family` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT;
ALTER TABLE `tbl_people` ADD FOREIGN KEY (id_tbl_salutation) REFERENCES `tbl_salutation` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT;
ALTER TABLE `tbl_people` ADD FOREIGN KEY (id_tbl_suffix) REFERENCES `tbl_suffix` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT;
ALTER TABLE `tbl_people` ADD FOREIGN KEY (id_tbl_previous_church) REFERENCES `tbl_previous_church` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT;
ALTER TABLE `tbl_people` ADD FOREIGN KEY (id_tbl_membership_status) REFERENCES `tbl_membership_status` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT;
ALTER TABLE `tbl_people` ADD FOREIGN KEY (id_tbl_next_church) REFERENCES `tbl_next_church` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT;
ALTER TABLE `tbl_people` ADD FOREIGN KEY (id_tbl_marital_status) REFERENCES `tbl_marital_status` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT;
ALTER TABLE `tbl_group` ADD FOREIGN KEY (id_tbl_people) REFERENCES `tbl_people` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT;
ALTER TABLE `tbl_district` ADD FOREIGN KEY (id_tbl_district_leaders) REFERENCES `tbl_district_leader` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT;
ALTER TABLE `tbl_people_group_assignment` ADD FOREIGN KEY (id_tbl_people) REFERENCES `tbl_people` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT;
ALTER TABLE `tbl_people_group_assignment` ADD FOREIGN KEY (id_tbl_group) REFERENCES `tbl_group` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT;

-- ---
-- Table Properties
-- ---

-- ALTER TABLE `tbl_family` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `tbl_people` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `tbl_group` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `tbl_user` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `tbl_membership_status` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `tbl_marital_status` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `tbl_salutation` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `tbl_suffix` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `tbl_previous_church` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `tbl_next_church` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `tbl_district` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `tbl_district_leader` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `tbl_people_group_assignment` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ---
-- Test Data
-- ---

-- INSERT INTO `tbl_family` (`id`,`family_name`,`house_name`,`house_number`,`address_line1`,`address_line2`,`city`,`region`,`postcode`,`country`,`telephone`,`id_tbl_district`,`create_time`,`create_user_id`,`update_time`,`update_user_id`) VALUES
-- ('','','','','','','','','','','','','','','','');
-- INSERT INTO `tbl_people` (`id`,`id_tbl_family`,`id_tbl_salutation`,`first_name`,`middle_name`,`last_name`,`maiden_name`,`id_tbl_suffix`,`nick_name`,`mobile_number`,`work_number`,`email_address1`,`email_address2`,`gender`,`head_of_house`,`date_of_birth`,`date_of_baptism`,`id_tbl_previous_church`,`date_of_joining`,`id_tbl_membership_status`,`date_of_membership`,`id_tbl_next_church`,`date_of_leaving`,`id_tbl_marital_status`,`date_of_wedding`,`date_of_death`,`grave_plot`,`notes`,`gift_aid`,`create_time`,`create_user_id`,`update_time`,`update_user_id`) VALUES
-- ('','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','');
-- INSERT INTO `tbl_group` (`id`,`name`,`id_tbl_people`,`create_time`,`create_user_id`,`update_time`,`update_user_id`) VALUES
-- ('','','','','','','');
-- INSERT INTO `tbl_user` (`id`,`email`,`username`,`password`,`last_login_time`,`create_time`,`create_user_id`,`update_time`,`update_user_id`) VALUES
-- ('','','','','','','','','');
-- INSERT INTO `tbl_membership_status` (`id`,`membership_type`,`create_time`,`create_user_id`,`update_time`,`update_user_id`) VALUES
-- ('','','','','','');
-- INSERT INTO `tbl_marital_status` (`id`,`marital_status_type`,`create_time`,`create_user_id`,`update_time`,`update_user_id`) VALUES
-- ('','','','','','');
-- INSERT INTO `tbl_salutation` (`id`,`salutation`,`create_time`,`create_user_id`,`update_time`,`update_user_id`) VALUES
-- ('','','','','','');
-- INSERT INTO `tbl_suffix` (`id`,`suffix`,`create_time`,`create_user_id`,`update_time`,`update_user_id`) VALUES
-- ('','','','','','');
-- INSERT INTO `tbl_previous_church` (`id`,`church_name`,`create_time`,`create_user_id`,`update_time`,`update_user_id`) VALUES
-- ('','','','','','');
-- INSERT INTO `tbl_next_church` (`id`,`church_name`,`create_time`,`create_user_id`,`update_time`,`update_user_id`) VALUES
-- ('','','','','','');
-- INSERT INTO `tbl_district` (`id`,`district_name`,`id_tbl_district_leaders`,`notes`,`create_time`,`create_user_id`,`update_time`,`update_user_id`) VALUES
-- ('','','','','','','','');
-- INSERT INTO `tbl_district_leader` (`id`,`name`,`create_time`,`create_user_id`,`update_time`,`update_user_id`) VALUES
-- ('','','','','','');
-- INSERT INTO `tbl_people_group_assignment` (`id`,`id_tbl_people`,`id_tbl_group`,`create_time`,`create_user_id`,`update_time`,`update_user_id`) VALUES
-- ('','','','','','','');


