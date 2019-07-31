-- Valentina Studio --
-- MySQL dump --
-- ---------------------------------------------------------


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
-- ---------------------------------------------------------


-- CREATE TABLE "activity_log" ---------------------------------
CREATE TABLE `activity_log` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL,
	`log_name` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
	`description` Text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
	`subject_id` Int( 11 ) NULL,
	`subject_type` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
	`causer_id` Int( 11 ) NULL,
	`causer_type` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
	`properties` Text CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
	`created_at` Timestamp NULL,
	`updated_at` Timestamp NULL,
	PRIMARY KEY ( `id` ) )
CHARACTER SET = utf8
COLLATE = utf8_unicode_ci
ENGINE = InnoDB
AUTO_INCREMENT = 1;
-- -------------------------------------------------------------


-- CREATE TABLE "branches" -------------------------------------
CREATE TABLE `branches` ( 
	`id` BigInt( 20 ) UNSIGNED AUTO_INCREMENT NOT NULL,
	`created_at` Timestamp NULL,
	`updated_at` Timestamp NULL,
	PRIMARY KEY ( `id` ) )
CHARACTER SET = utf8
COLLATE = utf8_unicode_ci
ENGINE = InnoDB
AUTO_INCREMENT = 1;
-- -------------------------------------------------------------


-- CREATE TABLE "categories" -----------------------------------
CREATE TABLE `categories` ( 
	`id` BigInt( 20 ) UNSIGNED AUTO_INCREMENT NOT NULL,
	`title` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
	`description` Text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
	`image` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
	`created_at` Timestamp NULL,
	`updated_at` Timestamp NULL,
	PRIMARY KEY ( `id` ) )
CHARACTER SET = utf8
COLLATE = utf8_unicode_ci
ENGINE = InnoDB
AUTO_INCREMENT = 1;
-- -------------------------------------------------------------


-- CREATE TABLE "clients" --------------------------------------
CREATE TABLE `clients` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL,
	`code` Int( 11 ) NULL,
	`isVerified` TinyInt( 1 ) NOT NULL DEFAULT 0,
	`created_at` Timestamp NULL,
	`updated_at` Timestamp NULL,
	PRIMARY KEY ( `id` ) )
CHARACTER SET = utf8
COLLATE = utf8_unicode_ci
ENGINE = InnoDB
AUTO_INCREMENT = 1;
-- -------------------------------------------------------------


-- CREATE TABLE "contrats" -------------------------------------
CREATE TABLE `contrats` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL,
	`numero_police` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
	`type_contrat` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
	`date_effet` Date NOT NULL,
	`date_echeance` Date NOT NULL,
	`prix` Int( 11 ) NOT NULL,
	`client_id` Int( 11 ) NOT NULL,
	`partenaire_id` Int( 11 ) NULL,
	`product_id` Int( 11 ) NOT NULL,
	`created_at` Timestamp NULL,
	`updated_at` Timestamp NULL,
	PRIMARY KEY ( `id` ),
	CONSTRAINT `contrats_numero_police_unique` UNIQUE( `numero_police` ) )
CHARACTER SET = utf8
COLLATE = utf8_unicode_ci
ENGINE = InnoDB
AUTO_INCREMENT = 12;
-- -------------------------------------------------------------


-- CREATE TABLE "formules" -------------------------------------
CREATE TABLE `formules` ( 
	`id` BigInt( 20 ) UNSIGNED AUTO_INCREMENT NOT NULL,
	`created_at` Timestamp NULL,
	`updated_at` Timestamp NULL,
	PRIMARY KEY ( `id` ) )
CHARACTER SET = utf8
COLLATE = utf8_unicode_ci
ENGINE = InnoDB
AUTO_INCREMENT = 1;
-- -------------------------------------------------------------


-- CREATE TABLE "migrations" -----------------------------------
CREATE TABLE `migrations` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL,
	`migration` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
	`batch` Int( 11 ) NOT NULL,
	PRIMARY KEY ( `id` ) )
CHARACTER SET = utf8
COLLATE = utf8_unicode_ci
ENGINE = InnoDB
AUTO_INCREMENT = 15;
-- -------------------------------------------------------------


-- CREATE TABLE "model_has_permissions" ------------------------
CREATE TABLE `model_has_permissions` ( 
	`permission_id` Int( 10 ) UNSIGNED NOT NULL,
	`model_type` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
	`model_id` BigInt( 20 ) UNSIGNED NOT NULL,
	PRIMARY KEY ( `permission_id`, `model_id`, `model_type` ) )
CHARACTER SET = utf8
COLLATE = utf8_unicode_ci
ENGINE = InnoDB;
-- -------------------------------------------------------------


-- CREATE TABLE "model_has_roles" ------------------------------
CREATE TABLE `model_has_roles` ( 
	`role_id` Int( 10 ) UNSIGNED NOT NULL,
	`model_type` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
	`model_id` BigInt( 20 ) UNSIGNED NOT NULL,
	PRIMARY KEY ( `role_id`, `model_id`, `model_type` ) )
CHARACTER SET = utf8
COLLATE = utf8_unicode_ci
ENGINE = InnoDB;
-- -------------------------------------------------------------


-- CREATE TABLE "password_resets" ------------------------------
CREATE TABLE `password_resets` ( 
	`email` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
	`token` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
	`created_at` Timestamp NULL )
CHARACTER SET = utf8
COLLATE = utf8_unicode_ci
ENGINE = InnoDB;
-- -------------------------------------------------------------


-- CREATE TABLE "patenaires" -----------------------------------
CREATE TABLE `patenaires` ( 
	`id` BigInt( 20 ) UNSIGNED AUTO_INCREMENT NOT NULL,
	`created_at` Timestamp NULL,
	`updated_at` Timestamp NULL,
	PRIMARY KEY ( `id` ) )
CHARACTER SET = utf8
COLLATE = utf8_unicode_ci
ENGINE = InnoDB
AUTO_INCREMENT = 1;
-- -------------------------------------------------------------


-- CREATE TABLE "payments" -------------------------------------
CREATE TABLE `payments` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL,
	`site_id` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
	`signature` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
	`amount` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
	`trans_id` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
	`custom` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
	`currency` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
	`payid` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
	`payment_date` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
	`payment_time` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
	`error_message` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
	`payment_method` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
	`phone_prefixe` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
	`cel_phone_num` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
	`ipn_ack` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
	`created` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
	`updated` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
	`result` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
	`trans_status` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
	`designation` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
	`buyer_name` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
	`client_id` Int( 11 ) NOT NULL,
	`created_at` Timestamp NULL,
	`updated_at` Timestamp NULL,
	PRIMARY KEY ( `id` ) )
CHARACTER SET = utf8
COLLATE = utf8_unicode_ci
ENGINE = InnoDB
AUTO_INCREMENT = 1;
-- -------------------------------------------------------------


-- CREATE TABLE "permissions" ----------------------------------
CREATE TABLE `permissions` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL,
	`name` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
	`display_name` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
	`guard_name` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
	`created_at` Timestamp NULL,
	`updated_at` Timestamp NULL,
	PRIMARY KEY ( `id` ) )
CHARACTER SET = utf8
COLLATE = utf8_unicode_ci
ENGINE = InnoDB
AUTO_INCREMENT = 17;
-- -------------------------------------------------------------


-- CREATE TABLE "products" -------------------------------------
CREATE TABLE `products` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL,
	`title` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
	`description` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
	`image` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
	`prix` Int( 10 ) UNSIGNED NOT NULL,
	`category_id` Int( 10 ) UNSIGNED NOT NULL,
	`created_at` Timestamp NULL,
	`updated_at` Timestamp NULL,
	PRIMARY KEY ( `id` ) )
CHARACTER SET = utf8
COLLATE = utf8_unicode_ci
ENGINE = InnoDB
AUTO_INCREMENT = 1;
-- -------------------------------------------------------------


-- CREATE TABLE "role_has_permissions" -------------------------
CREATE TABLE `role_has_permissions` ( 
	`permission_id` Int( 10 ) UNSIGNED NOT NULL,
	`role_id` Int( 10 ) UNSIGNED NOT NULL,
	PRIMARY KEY ( `permission_id`, `role_id` ) )
CHARACTER SET = utf8
COLLATE = utf8_unicode_ci
ENGINE = InnoDB;
-- -------------------------------------------------------------


-- CREATE TABLE "roles" ----------------------------------------
CREATE TABLE `roles` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL,
	`name` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
	`display_name` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
	`guard_name` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
	`created_at` Timestamp NULL,
	`updated_at` Timestamp NULL,
	PRIMARY KEY ( `id` ) )
CHARACTER SET = utf8
COLLATE = utf8_unicode_ci
ENGINE = InnoDB
AUTO_INCREMENT = 3;
-- -------------------------------------------------------------


-- CREATE TABLE "sessions" -------------------------------------
CREATE TABLE `sessions` ( 
	`id` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
	`user_id` BigInt( 20 ) UNSIGNED NULL,
	`ip_address` VarChar( 45 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
	`user_agent` Text CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
	`payload` Text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
	`last_activity` Int( 11 ) NOT NULL,
	CONSTRAINT `sessions_id_unique` UNIQUE( `id` ) )
CHARACTER SET = utf8
COLLATE = utf8_unicode_ci
ENGINE = InnoDB;
-- -------------------------------------------------------------


-- CREATE TABLE "sinistres" ------------------------------------
CREATE TABLE `sinistres` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL,
	`date_ouverture` Date NOT NULL,
	`date_fermetture` Date NOT NULL,
	`contrat_id` Int( 11 ) NOT NULL,
	`created_at` Timestamp NULL,
	`updated_at` Timestamp NULL,
	PRIMARY KEY ( `id` ) )
CHARACTER SET = utf8
COLLATE = utf8_unicode_ci
ENGINE = InnoDB
AUTO_INCREMENT = 1;
-- -------------------------------------------------------------


-- CREATE TABLE "users" ----------------------------------------
CREATE TABLE `users` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL,
	`nom` VarChar( 191 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
	`prenoms` VarChar( 191 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
	`contact_1` VarChar( 191 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
	`contact_2` VarChar( 191 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
	`email` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
	`code` Int( 11 ) NULL,
	`genre` TinyInt( 1 ) NULL,
	`date_de_naissance` Date NULL,
	`isVerified` TinyInt( 1 ) NOT NULL DEFAULT 0,
	`terms` TinyInt( 1 ) NOT NULL DEFAULT 0,
	`token` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
	`deleted_at` Timestamp NULL,
	`email_verified_at` Timestamp NULL,
	`password` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
	`remember_token` VarChar( 100 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
	`created_at` Timestamp NULL,
	`updated_at` Timestamp NULL,
	PRIMARY KEY ( `id` ),
	CONSTRAINT `users_email_unique` UNIQUE( `email` ) )
CHARACTER SET = utf8
COLLATE = utf8_unicode_ci
ENGINE = InnoDB
AUTO_INCREMENT = 6;
-- -------------------------------------------------------------


-- Dump data of "activity_log" -----------------------------
-- ---------------------------------------------------------


-- Dump data of "branches" ---------------------------------
-- ---------------------------------------------------------


-- Dump data of "categories" -------------------------------
-- ---------------------------------------------------------


-- Dump data of "clients" ----------------------------------
-- ---------------------------------------------------------


-- Dump data of "contrats" ---------------------------------
INSERT INTO `contrats`(`id`,`numero_police`,`type_contrat`,`date_effet`,`date_echeance`,`prix`,`client_id`,`partenaire_id`,`product_id`,`created_at`,`updated_at`) VALUES 
( '1', 'py-TE5IXGF-F', NULL, '2019-07-12', '2019-07-26', '12000', '2', NULL, '1', '2019-07-10 12:40:21', '2019-07-10 12:40:21' ),
( '2', 'py-WR49Y31-F', NULL, '2019-07-11', '2019-07-19', '12000', '3', NULL, '1', '2019-07-10 12:47:28', '2019-07-10 12:47:28' ),
( '3', 'py-DG713Z3-F', NULL, '2019-07-20', '2019-07-28', '12000', '4', NULL, '1', '2019-07-10 13:49:07', '2019-07-10 13:49:07' ),
( '4', 'py-SZ8CDBH-F', NULL, '2019-07-11', '2019-07-27', '12000', '4', NULL, '1', '2019-07-10 14:00:59', '2019-07-10 14:00:59' ),
( '5', 'py-QW6JS54-F', NULL, '2019-07-17', '2019-07-18', '12000', '28', NULL, '1', '2019-07-10 14:53:25', '2019-07-10 14:53:25' ),
( '6', 'py-2D6SHP5-F', NULL, '2019-07-17', '2019-07-18', '12000', '28', NULL, '1', '2019-07-10 14:55:32', '2019-07-10 14:55:32' ),
( '7', 'py-Y0IXT4J-F', NULL, '2019-07-17', '2019-07-18', '12000', '28', NULL, '1', '2019-07-10 14:57:45', '2019-07-10 14:57:45' ),
( '8', 'py-1IV7G6B-F', NULL, '2019-07-17', '2019-07-18', '12000', '28', NULL, '1', '2019-07-10 15:00:21', '2019-07-10 15:00:21' ),
( '9', 'py-4B7LBK6-F', NULL, '2019-07-17', '2019-07-18', '12000', '28', NULL, '1', '2019-07-10 15:00:44', '2019-07-10 15:00:44' ),
( '10', 'py-XHO1P81-F', NULL, '2019-07-17', '2019-07-18', '12000', '28', NULL, '1', '2019-07-10 15:01:31', '2019-07-10 15:01:31' ),
( '11', 'py-S163QLU-F', NULL, '2019-07-05', '2019-07-18', '12000', '5', NULL, '1', '2019-07-11 10:11:42', '2019-07-11 10:11:42' );
-- ---------------------------------------------------------


-- Dump data of "formules" ---------------------------------
-- ---------------------------------------------------------


-- Dump data of "migrations" -------------------------------
INSERT INTO `migrations`(`id`,`migration`,`batch`) VALUES 
( '1', '2014_10_12_000000_create_users_table', '1' ),
( '2', '2014_10_12_100000_create_password_resets_table', '1' ),
( '3', '2018_11_19_130042_create_permission_tables', '1' ),
( '4', '2018_11_22_160105_create_activity_log_table', '1' ),
( '5', '2019_06_15_220448_create_categories_table', '1' ),
( '6', '2019_06_17_161154_create_products_table', '1' ),
( '7', '2019_06_19_101607_create_clients_table', '1' ),
( '8', '2019_06_27_083024_create_payments_table', '1' ),
( '9', '2019_07_02_062647_create_sessions_table', '1' ),
( '10', '2019_07_06_052743_create_contrats_table', '1' ),
( '11', '2019_07_06_094709_create_patenaires_table', '1' ),
( '12', '2019_07_06_094727_create_sinistres_table', '1' ),
( '13', '2019_07_06_094741_create_formules_table', '1' ),
( '14', '2019_07_06_094801_create_branches_table', '1' );
-- ---------------------------------------------------------


-- Dump data of "model_has_permissions" --------------------
-- ---------------------------------------------------------


-- Dump data of "model_has_roles" --------------------------
INSERT INTO `model_has_roles`(`role_id`,`model_type`,`model_id`) VALUES 
( '1', 'App\\Models\\User', '1' ),
( '2', 'App\\Models\\User', '2' ),
( '2', 'App\\Models\\User', '3' ),
( '2', 'App\\Models\\User', '4' ),
( '2', 'App\\Models\\User', '5' ),
( '2', 'App\\Models\\User', '28' );
-- ---------------------------------------------------------


-- Dump data of "password_resets" --------------------------
-- ---------------------------------------------------------


-- Dump data of "patenaires" -------------------------------
-- ---------------------------------------------------------


-- Dump data of "payments" ---------------------------------
-- ---------------------------------------------------------


-- Dump data of "permissions" ------------------------------
INSERT INTO `permissions`(`id`,`name`,`display_name`,`guard_name`,`created_at`,`updated_at`) VALUES 
( '1', 'view_users', 'view_users', 'web', '2019-07-09 18:04:55', '2019-07-09 18:04:55' ),
( '2', 'add_users', 'add_users', 'web', '2019-07-09 18:04:56', '2019-07-09 18:04:56' ),
( '3', 'edit_users', 'edit_users', 'web', '2019-07-09 18:04:57', '2019-07-09 18:04:57' ),
( '4', 'delete_users', 'delete_users', 'web', '2019-07-09 18:04:58', '2019-07-09 18:04:58' ),
( '5', 'view_roles', 'view_roles', 'web', '2019-07-09 18:04:58', '2019-07-09 18:04:58' ),
( '6', 'add_roles', 'add_roles', 'web', '2019-07-09 18:05:00', '2019-07-09 18:05:00' ),
( '7', 'edit_roles', 'edit_roles', 'web', '2019-07-09 18:05:00', '2019-07-09 18:05:00' ),
( '8', 'delete_roles', 'delete_roles', 'web', '2019-07-09 18:05:01', '2019-07-09 18:05:01' ),
( '9', 'view_products', 'view_products', 'web', '2019-07-09 18:05:02', '2019-07-09 18:05:02' ),
( '10', 'add_products', 'add_products', 'web', '2019-07-09 18:05:02', '2019-07-09 18:05:02' ),
( '11', 'edit_products', 'edit_products', 'web', '2019-07-09 18:05:03', '2019-07-09 18:05:03' ),
( '12', 'delete_products', 'delete_products', 'web', '2019-07-09 18:05:04', '2019-07-09 18:05:04' ),
( '13', 'view_categories', 'view_categories', 'web', '2019-07-09 18:05:05', '2019-07-09 18:05:05' ),
( '14', 'add_categories', 'add_categories', 'web', '2019-07-09 18:05:06', '2019-07-09 18:05:06' ),
( '15', 'edit_categories', 'edit_categories', 'web', '2019-07-09 18:05:07', '2019-07-09 18:05:07' ),
( '16', 'delete_categories', 'delete_categories', 'web', '2019-07-09 18:05:07', '2019-07-09 18:05:07' );
-- ---------------------------------------------------------


-- Dump data of "products" ---------------------------------
-- ---------------------------------------------------------


-- Dump data of "role_has_permissions" ---------------------
INSERT INTO `role_has_permissions`(`permission_id`,`role_id`) VALUES 
( '1', '1' ),
( '2', '1' ),
( '3', '1' ),
( '4', '1' ),
( '5', '1' ),
( '6', '1' ),
( '7', '1' ),
( '8', '1' ),
( '9', '1' ),
( '10', '1' ),
( '11', '1' ),
( '12', '1' ),
( '13', '1' ),
( '14', '1' ),
( '15', '1' ),
( '16', '1' ),
( '12', '2' );
-- ---------------------------------------------------------


-- Dump data of "roles" ------------------------------------
INSERT INTO `roles`(`id`,`name`,`display_name`,`guard_name`,`created_at`,`updated_at`) VALUES 
( '1', 'admin', 'Admin', 'web', '2019-07-09 18:05:08', '2019-07-09 18:05:08' ),
( '2', 'client', 'client', 'web', '2019-07-10 12:39:03', '2019-07-10 12:39:03' );
-- ---------------------------------------------------------


-- Dump data of "sessions" ---------------------------------
-- ---------------------------------------------------------


-- Dump data of "sinistres" --------------------------------
-- ---------------------------------------------------------


-- Dump data of "users" ------------------------------------
INSERT INTO `users`(`id`,`nom`,`prenoms`,`contact_1`,`contact_2`,`email`,`code`,`genre`,`date_de_naissance`,`isVerified`,`terms`,`token`,`deleted_at`,`email_verified_at`,`password`,`remember_token`,`created_at`,`updated_at`) VALUES 
( '1', 'CISSE', 'Ibrahim khalil', '+225 58 09 33 06', '+225 05 30 49 75', 'ibrahim.kalil.cisse.92@gmail.com', NULL, NULL, NULL, '0', '0', NULL, NULL, '2019-07-09 18:05:17', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'Y7fH5YIG1heYlg29rqy2UzFifSyKIuMqTIrW38unoUjwWpVAfb575k9ejzq9', '2019-07-09 18:05:17', '2019-07-09 18:05:17' ),
( '2', 'Adelise', 'Konan', '+225 58 09 33 06', NULL, 'cisse.ibrahim.kalil1@huawei.com', NULL, '1', '0093-12-22', '0', '1', 'P0abJAikj8G10QhH9z', NULL, NULL, '$2y$10$HYRVH4sVv6Vi2FokchKggOrWU3SAmjmyGngwZQ2C9IGaeuFWYXnIC', NULL, '2019-07-10 12:40:21', '2019-07-10 12:40:21' ),
( '3', 'Timite', 'Konan', '+225 05 30 49 75', NULL, 'ibrahimkhalilcisse92@gmail.com', NULL, '0', '2019-07-11', '0', '1', 'iz26jrKzN5EWLy6rgB', NULL, NULL, '$2y$10$eBYAHdQeRnzl4f12y.zuf.cmWlC7Ybcoh8xP5Z.bXJTxulAYXPmja', NULL, '2019-07-10 12:47:28', '2019-07-10 12:47:28' ),
( '4', 'djeba', 'Ismael', '+225 58 09 33 06', NULL, 'agillysarl19@gmail.com', NULL, '0', '2019-07-06', '0', '1', '4Thbj0bq70mOFf96fU', NULL, NULL, '$2y$10$SpIV1OVZ/aCcRuZ./KGgveC7G4mQL64QIuPSNWbIWPrzmzXurJFHi', NULL, '2019-07-10 13:49:07', '2019-07-10 14:00:59' ),
( '5', 'djegba', 'kokora', '+225 57 74 00 07', NULL, 'kokora.djegba@codesprt.com', NULL, '0', '2000-12-12', '1', '1', NULL, NULL, NULL, '$2y$10$mqID2j65wh0WnZ1pf7qXqODbyjeCB6qW1FD6.njFV1eOL5Nonkw.e', NULL, '2019-07-11 10:11:42', '2019-07-11 10:14:08' );
-- ---------------------------------------------------------


-- CREATE INDEX "activity_log_log_name_index" ------------------
CREATE INDEX `activity_log_log_name_index` USING BTREE ON `activity_log`( `log_name` );
-- -------------------------------------------------------------


-- CREATE INDEX "model_has_permissions_model_id_model_type_index" 
CREATE INDEX `model_has_permissions_model_id_model_type_index` USING BTREE ON `model_has_permissions`( `model_id`, `model_type` );
-- -------------------------------------------------------------


-- CREATE INDEX "model_has_roles_model_id_model_type_index" ----
CREATE INDEX `model_has_roles_model_id_model_type_index` USING BTREE ON `model_has_roles`( `model_id`, `model_type` );
-- -------------------------------------------------------------


-- CREATE INDEX "password_resets_email_index" ------------------
CREATE INDEX `password_resets_email_index` USING BTREE ON `password_resets`( `email` );
-- -------------------------------------------------------------


-- CREATE INDEX "role_has_permissions_role_id_foreign" ---------
CREATE INDEX `role_has_permissions_role_id_foreign` USING BTREE ON `role_has_permissions`( `role_id` );
-- -------------------------------------------------------------


-- CREATE LINK "model_has_permissions_permission_id_foreign" ---
ALTER TABLE `model_has_permissions`
	ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY ( `permission_id` )
	REFERENCES `permissions`( `id` )
	ON DELETE Cascade
	ON UPDATE Restrict;
-- -------------------------------------------------------------


-- CREATE LINK "model_has_roles_role_id_foreign" ---------------
ALTER TABLE `model_has_roles`
	ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY ( `role_id` )
	REFERENCES `roles`( `id` )
	ON DELETE Cascade
	ON UPDATE Restrict;
-- -------------------------------------------------------------


-- CREATE LINK "role_has_permissions_permission_id_foreign" ----
ALTER TABLE `role_has_permissions`
	ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY ( `permission_id` )
	REFERENCES `permissions`( `id` )
	ON DELETE Cascade
	ON UPDATE Restrict;
-- -------------------------------------------------------------


-- CREATE LINK "role_has_permissions_role_id_foreign" ----------
ALTER TABLE `role_has_permissions`
	ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY ( `role_id` )
	REFERENCES `roles`( `id` )
	ON DELETE Cascade
	ON UPDATE Restrict;
-- -------------------------------------------------------------


/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
-- ---------------------------------------------------------


