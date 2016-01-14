

CREATE TABLE `tblproduct` (
  `ItemId` int(8) NOT NULL,
  `ItemName` varchar(255) NOT NULL,
  `ItemCode` varchar(255) NOT NULL,
  `ItemImage` text NOT NULL,
  `ItemPrice` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblproduct`
--

INSERT INTO `tblproduct` (`ItemId`, `ItemName`, `ItemCode`, `ItemImage`, `ItemPrice`) VALUES
(1, 'Ball', 'Ball01', 'Pic/ball.jpg', 5.00),
(2, 'Jersey', 'Jersey03', 'Pic/Jersey3.jpg', 15.00),
(3, 'Scarf', 'Scarf01', 'Pic/Foulard.jpg', 2.00),
(4, 'Jersey', 'Jersey02', 'Pic/Jersey2.jpg', 15.00),
(5, 'Shorts', 'Shorts01', 'Pic/shorts.jpg', 4.00),
(6, 'Hat', 'Hat01', 'Pic/Hat.jpg', 5.00);