-- 
-- Table structure for table `products`
-- 

CREATE TABLE `products` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `product` text NOT NULL,
  `price` float(5,2) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- 
-- Dumping data for table `products`
-- 

INSERT INTO `products` VALUES (1, 'Product # 1', 70.54, '2014-01-06 03:20:23', 1);
INSERT INTO `products` VALUES (2, 'Product # 2', 300.00, '2014-01-06 03:20:23', 1);
INSERT INTO `products` VALUES (3, 'Product # 3', 805.88, '2014-01-06 03:20:42', 1);