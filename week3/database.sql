
CREATE DATABASE IF NOT EXISTS `LoginReg` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `LoginReg`;

CREATE TABLE IF NOT EXISTS `table2` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `brand` VARCHAR(100) NOT NULL,        
  `model` VARCHAR(150) NOT NULL,        
  `price` DECIMAL(15,2) NOT NULL,       
  `origin` VARCHAR(100) NOT NULL,       
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
INSERT INTO `table2` (`brand`, `model`, `price`, `origin`) VALUES
('Dell', 'GAMING', 15000000, 'USA'),
('HP', 'ZRox 14', 17000000, 'USA'),
('Asus', 'ZenBook UX425', 22000000, 'Taiwan'),
('Apple', 'MacBook Air M1', 28000000, 'USA'),
('Lenovo', 'Legion5', 32000000, 'China');
