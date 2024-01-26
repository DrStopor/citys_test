DROP TABLE IF EXISTS `region`;
CREATE TABLE `region`
(
    `id`           smallint(5) unsigned NOT NULL auto_increment,
    `r_country_id` smallint(5) unsigned NOT NULL default '0',
    `r_name_rus`   varchar(255) NOT NULL,
    `r_name_eng`   varchar(255) NOT NULL,
    `r_name_ger`   varchar(255) NOT NULL,
    `r_descr_rus`  varchar(255) NOT NULL,
    `r_descr_eng`  varchar(255) NOT NULL,
    `r_descr_ger`  varchar(255) NOT NULL,
    UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251;

INSERT INTO `region` VALUES(1, 3, 'Центральные области ID1', 'Central Region ID1', 'Central Region ID1', 'ЦЕНТРАЛЬНЫЕ ОБЛАСТИ', 'CENTRAL REGION ENG', 'CENTRAL REGION GER');
INSERT INTO `region` VALUES(2, 2, 'Центральная Россия ID2', 'Central Russia eng ID2', 'Central Russia ger ID2', 'ЦЕНТРАЛЬНАЯ РОССИЯ', 'CENTRAL RUSSIA ENG', 'CENTRAL RUSSIA GER');
INSERT INTO `region` VALUES(3, 1, 'Крым ID3', 'Creamea ID3', 'Creamea ID3', 'КРЫМ', 'CREAMEA ENG', 'CREAMEA GER');
INSERT INTO `region` VALUES(4, 2, 'Дальний восток ID4', 'Far East ID4', 'Far East ID4', 'ДАЛЬНИЙ ВОСТОК', 'FAR EAST ENG', 'FAR EAST GER');
INSERT INTO `region` VALUES(5, 4, 'Техас ID5', 'Texas ID5', 'Texas ID5', 'ТЕХАС', 'TEXAS ENG', 'TEXAS GER');
INSERT INTO `region` VALUES(6, 2, 'Урал ID6', 'Ural eng ID6', 'Ural ger ID6', 'УРАЛ', 'Ural ENG', 'Ural GER');
INSERT INTO `region` VALUES(7, 1, 'Донбас ID7', 'Donbas ID7', 'Donbas ID7', 'Донбас', 'DONBAS ENG', 'DONBAS GER');