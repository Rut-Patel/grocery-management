CREATE TABLE IF NOT EXISTS `items` (
  `itemId` int(8) NOT NULL AUTO_INCREMENT,
  `itemName` varchar(55) NOT NULL,
  `quantity` int NOT NULL,
  `maxquantity` int,
  `description` varchar(255),
  `updated` date NOT NULL,
  PRIMARY KEY (`itemId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `users`
--

INSERT INTO `items` (`itemId`, `itemName`, `quantity`,`maxquantity`, `description`, `updated`) VALUES
(1, 'Milk', 1,2, 'per 1 bag(3L)', '2021-05-05'),
(2, 'Bread', 2,3, '1 - white', '2021-05-05'),
(3, 'onion', 1,2, 'big pack', '2021-05-05');