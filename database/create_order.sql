CREATE TABLE `orders` (
	`id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
	`user_id` INT(10) UNSIGNED NOT NULL,
	`date` DATETIME NOT NULL,
	`comment` TEXT(65535) NULL DEFAULT NULL COLLATE 'utf8_general_ci',
	PRIMARY KEY (`id`) USING BTREE,
	INDEX `FK_orders_users` (`user_id`) USING BTREE,
	CONSTRAINT `FK_orders_users` FOREIGN KEY (`user_id`) REFERENCES `shop`.`users` (`id`) ON UPDATE RESTRICT ON DELETE CASCADE
)
COLLATE='utf8_general_ci'
ENGINE=InnoDB;

CREATE TABLE `order_positions` (
	`id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
	`order_id` INT(10) UNSIGNED NOT NULL,
	`product_id` INT(10) UNSIGNED NOT NULL,
	`quantity` INT(11) NOT NULL DEFAULT '1',
	`price` INT(11) NULL DEFAULT NULL,
	PRIMARY KEY (`id`) USING BTREE,
	INDEX `FK_order_positions_orders` (`order_id`) USING BTREE,
	INDEX `FK_order_positions_products` (`product_id`) USING BTREE,
	CONSTRAINT `FK_order_positions_orders` FOREIGN KEY (`order_id`) REFERENCES `shop`.`orders` (`id`) ON UPDATE RESTRICT ON DELETE CASCADE,
	CONSTRAINT `FK_order_positions_products` FOREIGN KEY (`product_id`) REFERENCES `shop`.`products` (`id`) ON UPDATE RESTRICT ON DELETE CASCADE
)
COLLATE='utf8_general_ci'
ENGINE=InnoDB
;
