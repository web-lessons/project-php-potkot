CREATE TABLE IF NOT EXISTS `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `slug` varchar(50) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `products` (`id`, `name`, `slug`, `img`, `description`, `price`) VALUES
	(1, 'Твар 1', 'product1', '/img//product1.jpg', 'Хороший товар', 2500),
	(2, 'Твар 2', 'product2', '/img//product1.jpg', 'Хороший товар', 2500),
	(3, 'Твар 3', 'product3', '/img//product1.jpg', 'Хороший товар', 2500),
	(4, 'Твар 4', 'product4', '/img//product1.jpg', 'Хороший товар', 2500),
	(5, 'Твар 5', 'product5', '/img//product1.jpg', 'Хороший товар', 2500),
	(6, 'Твар 6', 'product6', '/img//product1.jpg', 'Хороший товар', 2500),
	(7, 'Твар 7', 'product7', '/img//product1.jpg', 'Хороший товар', 2500),
	(8, 'Товар 8', 'product8', '/img//product1.jpg', 'Хороший товар', 2500);

