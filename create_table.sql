
CREATE TABLE `short_urls` (
  `id` varchar(12) NOT NULL,
  `url` varchar(200) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1
