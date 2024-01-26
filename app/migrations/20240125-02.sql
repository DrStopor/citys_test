DROP TABLE IF EXISTS `country`;
CREATE TABLE `country`
(
    `id`             smallint(5) unsigned NOT NULL auto_increment,
    `glob_region_id` smallint(5) unsigned NOT NULL,
    `c_name_rus`     varchar(20) NOT NULL default '',
    `c_name_eng`     varchar(20) NOT NULL default '',
    `c_name_ger`     varchar(20) NOT NULL default '',
    `c_descr_rus`    varchar(50) NOT NULL default '',
    `c_descr_eng`    varchar(50) NOT NULL default '',
    `c_descr_ger`    varchar(50) NOT NULL default '',
    UNIQUE KEY `id` (`id`),
    KEY              `glob_region_id` (`glob_region_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251;

INSERT INTO `country` VALUES(1, 1, 'Украина ID1', 'Ukraina eng ID1', 'Ukraina ger ID1', 'УКРАИНА', 'UKRAINA ENG', 'UKRAINA GER');
INSERT INTO `country` VALUES(2, 1, 'Россия ID2', 'Russia eng ID2', 'Rusland ger ID2', 'РОССИЯ', 'RUSSIA ENG', 'RUSLAND GER');
INSERT INTO `country` VALUES(3, 1, 'Белорусь ID3', 'Belorus eng ID3', 'Belorus ger ID3', 'БЕЛОРУСЬ', 'BELORUS ENG', 'BELORUS GER');
INSERT INTO `country` VALUES(4, 3, 'США ID4', 'USA eng ID4', 'USA ger ID4', 'СОЕД.ШТАТЫ АМЕРИКИ', 'USA ENG', 'USA GER');