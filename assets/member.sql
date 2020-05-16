CREATE TABLE `member` (
  `id` int(11) PRIMARY KEY,
  `member_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telp` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(225) NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `member` (`id`, `member_name`, `email`, `telp`, `address`, `username`, `password`) VALUES
(1, 'test', 'test@gmail.com', '2323232', 'jakrta barat', 'irwan', '098f6bcd4621d373cade4e832627b4f6'); 

--Username = test Passwrd = test

ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;
