CREATE TABLE `navsingh_rp`.`users` ( `id` INT(20) NOT NULL AUTO_INCREMENT , `name` VARCHAR(50) NOT NULL , `email` VARCHAR(240) NOT NULL , `password` VARCHAR(240) NOT NULL , `token` VARCHAR(240) , PRIMARY KEY (`id`)) ENGINE = MyISAM;


INSERT INTO `users` (`id`, `name`, `email`, `password`, `token`) VALUES ('1', 'Nav', 'virksaabnavjot@gmail.com', 'password', NULL), ('2', 'Jot', 'info@gymandnutrition.com', 'password', NULL);
