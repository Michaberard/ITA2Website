CREATE TABLE IF NOT EXISTS `tblproduct` (
  
`id` int(8) NOT NULL AUTO_INCREMENT,
  
`name` varchar(255) NOT NULL,
  
`code` varchar(255) NOT NULL,
  
`image` text NOT NULL,
  
`price` double(10,2) NOT NULL,

PRIMARY KEY (`id`),
  
UNIQUE KEY `product_code` (`code`)
)



INSERT INTO `tblproduct` (`id`, `name`, `code`, `image`, `price`) VALUES
(1, 'Ball', 'Ball01', 'Pic/ball.jpg', 5.00),
(2, 'Jersey', 'Jersey03', 'Pic/Jersey3.jpg', 15.00),
(3, 'Scarf', 'Scarf01', 'Pic/Foulard.jpg', 2.00),(4, 'Jersey', 'Jersey02', 'Pic/Jersey2.jpg', 15.00),(5, 'Shorts', 'Shorts01', 'Pic/shorts.jpg', 4.00),(6, 'Hat', 'Hat01', 'Pic/Hat.jpg', 5.00;
