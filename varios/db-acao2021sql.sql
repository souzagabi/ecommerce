CREATE DATABASE  IF NOT EXISTS `db_acao` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `db_acao`;

DROP TABLE IF EXISTS `db_acao`.`tb_persons`;

CREATE TABLE `db_acao`.`tb_persons` (
  `idperson` int(11) NOT NULL AUTO_INCREMENT,
  `desperson` varchar(64) NOT NULL,
  `descpfcnpj` varchar(11) DEFAULT NULL,
  `dtregister` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idperson`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

INSERT INTO `db_acao`.`tb_persons` VALUES (1,'Gabriel Alves', 14573057803,'2021-03-01 03:00:00'),(2,'Suporte', 12354865202,'2021-03-15 16:10:27');

DROP TABLE IF EXISTS `db_acao`.`tb_users`;

CREATE TABLE `db_acao`.`tb_users` (
  `iduser` int(11) NOT NULL AUTO_INCREMENT,
  `idperson` int(11) NOT NULL,
  `deslogin` varchar(64) NOT NULL,
  `despassword` varchar(256) NOT NULL,
  `inadmin` tinyint(4) NOT NULL DEFAULT '0',
  `dtregister` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`iduser`),
  KEY `FK_users_persons_idx` (`idperson`),
  CONSTRAINT `fk_users_persons` FOREIGN KEY (`idperson`) REFERENCES `tb_persons` (`idperson`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

INSERT INTO `db_acao`.`tb_users` VALUES (1,1,'admin','$2y$12$YlooCyNvyTji8bPRcrfNfOKnVMmZA9ViM2A3IpFjmrpIbp5ovNmga',1,'2021-03-13 03:00:00'),(2,2,'suporte','$2y$12$HFjgUm/mk1RzTy4ZkJaZBe0Mc/BA2hQyoUckvm.lFa6TesjtNpiMe',1,'2021-03-15 16:10:27');

DROP TABLE IF EXISTS `db_acao`.`tb_investiments`;

CREATE TABLE `db_acao`.`tb_investiments` (
  `idinvestiment` int(11) NOT NULL AUTO_INCREMENT,
  `iduser` int(11) NOT NULL,
  `descompnany` varchar(64),
  `sgcompany` varchar(20) NOT NULL,
  `dtbuy` date,
  `dtsell` date,
  `qtdebuy` int(11),
  `qtdesell` int(11),
  `prcbuy` decimal(10,2),
  `prcsell` decimal(10,2),
  `tlbuy` decimal(10,2),
  `tlsell` decimal(10,2),
  `tax` decimal(10,2),
  `lucre` decimal(10,2),
  `type` char(1),
  `dtregister` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idinvestiment`),
  KEY `FK_investiments_users_idx` (`iduser`),
  CONSTRAINT `fk_investiments_users` FOREIGN KEY (`iduser`) REFERENCES `tb_users` (`iduser`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

INSERT INTO `db_acao`.`tb_investiments` VALUES (1, 1, 'TAESA', 'TAEE3', '2021-03-25', NULL, '10', NULL, '10.25', NULL, NULL, NULL, NULL, NULL, '1', '2021-03-25 15:13:22'), (2, 1, 'TAESA', 'TAEE4', '2021-03-25', NULL, '10', NULL, '10.22', NULL, NULL, NULL, NULL, NULL, '1', '2021-03-25 15:13:22')
