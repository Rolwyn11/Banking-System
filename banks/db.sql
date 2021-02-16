CREATE TABLE IF NOT EXISTS `bank`(
    `name` varchar(40) NOT NULL,
    `email` varchar(45) NOT NULL,
    `credit` int(20) NOT NULL

);
INSERT INTO `bank`(`Name`,`email`, `credit`) VALUES
('Rolwyn Raju','rol123@gmail.com','500000'),
('Arpan Sadhu','arp.an@gmail.com','300000'),
('Astle Pinto','astlenoob@gmail.com','40000'),
('Gladden Rumao','gladden99@gmail.com','50000'),
('Tijo Thomas','tijo@gmail.com','60000'),
('Divyanshu Slathia','div07@gmail.com','70000'),
('Ann Zachariah','annzach@gmail.com','77000'),
('Joan Zachariah','joanz99@gmail.com','4000'),
('Elon Musk','xae12@gmail.com','184000'),
('Anush Anil','anush99@gmail.com','200000');


CREATE TABLE IF NOT EXISTS `transfers`(
    `from_user` varchar(40) NOT NULL,
    `to_user` varchar(40) NOT NULL,
    `Credit` varchar(40) NOT NULL
);