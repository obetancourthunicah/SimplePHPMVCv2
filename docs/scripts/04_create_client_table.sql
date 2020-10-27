CREATE TABLE `nw202003`.`clients` (
  `clientid` BIGINT(15) NOT NULL AUTO_INCREMENT,
  `clientname` VARCHAR(128) NULL,
  `clientgender` CHAR(3) NULL,
  `clientphone1` VARCHAR(255) NULL,
  `clientphone2` VARCHAR(255) NULL,
  `clientemail` VARCHAR(255) NULL,
  `clientIdnumber` VARCHAR(45) NULL,
  `clientbio` VARCHAR(5000) NULL,
  `clientstatus` CHAR(3) NULL,
  `clientdatecrt` DATETIME NULL,
  `clientusercreates` BIGINT(10) NULL,
  PRIMARY KEY (`clientid`));

INSERT INTO `nw202003`.`clients` (`clientname`, `clientgender`, `clientphone1`, `clientphone2`, `clientemail`, `clientIdnumber`, `clientbio`, `clientstatus`, `clientdatecrt`, `clientusercreates`) VALUES ('Orlando José Betancourth', 'M', '99999999', '99999999', 'obetancourthunicah@gmail.com', '0801198412349', 'Docente de Negocios Web SCJ UNICAH Honduras', 'ACT', '2020-10-26 19:47:00', '1');
