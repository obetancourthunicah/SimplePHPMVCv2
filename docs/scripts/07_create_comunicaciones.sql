CREATE TABLE `comunicaciones` (
  `cmnid` BIGINT(18) UNSIGNED NOT NULL AUTO_INCREMENT,
  `clientid` BIGINT(15) NULL,
  `cmnnotas` VARCHAR(5000) NULL,
  `cmntags` VARCHAR(255) NULL,
  `cmnfching` DATETIME NULL,
  `cmnusring` BIGINT(10) NULL,
  `cmntipo` VARCHAR(45) NULL,
  PRIMARY KEY (`cmnid`));

ALTER TABLE `comunicaciones` 
ADD INDEX `FK_CLIENTS_CMN_idx` (`clientid` ASC),
ADD INDEX `FK_USUARIOS_CMN_idx` (`cmnusring` ASC);
;
ALTER TABLE `comunicaciones` 
ADD CONSTRAINT `FK_CLIENTS_CMN`
  FOREIGN KEY (`clientid`)
  REFERENCES `clients` (`clientid`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION,
ADD CONSTRAINT `FK_USUARIOS_CMN`
  FOREIGN KEY (`cmnusring`)
  REFERENCES `usuario` (`usercod`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;
