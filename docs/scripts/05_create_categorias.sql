CREATE TABLE `categorias` ( `catecod` BIGINT(10) NOT NULL AUTO_INCREMENT , `catenom` VARCHAR(128) NULL , `cateest` CHAR(3) NULL , PRIMARY KEY (`catecod`)) ENGINE = InnoDB;
INSERT INTO `categorias` (`catecod`, `catenom`, `cateest`) VALUES (NULL, 'producto', 'ACT');
