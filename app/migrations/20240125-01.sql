DROP TABLE IF EXISTS `city`;
CREATE TABLE `city`
(
    `id`           smallint(5) unsigned NOT NULL auto_increment,
    `c_country_id` smallint(5) unsigned NOT NULL default '0',
    `c_region_id`  smallint(5) unsigned NOT NULL default '0',
    `c_name_rus`   varchar(20) NOT NULL default '',
    `c_name_eng`   varchar(20) NOT NULL default '',
    `c_name_ger`   varchar(20) NOT NULL default '',
    `c_descr_rus`  varchar(50) NOT NULL default '',
    `c_descr_eng`  varchar(50) NOT NULL default '',
    `c_descr_ger`  varchar(50) NOT NULL default '',
    UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251;

INSERT INTO `city` VALUES(1,  3, 0, 'Город 3_0_2', 'City 3_0_2 eng', 'City 3_0_2 ger', 'ГОРОД 3_0_2', 'CITY 3_0_2 ENG', 'CITY 3_0_2  GER');
INSERT INTO `city` VALUES(2,  2, 0, 'Город 2_0_1', 'City 2_0_1 eng', 'City 2_0_1 ger', 'ГОРОД 2_0_1', 'CITY 2_0_1 ENG', 'CITY 2_0_1  GER');
INSERT INTO `city` VALUES(3,  1, 0, 'Город 1_0_1', 'City 1_0_1 eng', 'City 1_0_1 ger', 'ГОРОД 1_0_1', 'CITY 1_0_1 ENG', 'CITY 1_0_1 GER');
INSERT INTO `city` VALUES(4,  4, 5, 'Город 4_5_2', 'City 4_5_2 eng', 'City 4_5_2 ger', 'ГОРОД 4_5_2', 'CITY 4_5_2 ENG', 'CITY 4_5_2 GER');
INSERT INTO `city` VALUES(5,  2, 0, 'Город 2_0_2', 'City 2_0_2 eng', 'City 2_0_2 ger', 'ГОРОД 2_0_2', 'CITY 2_0_2 ENG', 'CITY 2_0_2  GER');
INSERT INTO `city` VALUES(6,  4, 0, 'Город 4_0_2', 'City 4_0_2 eng', 'City 4_0_2 ger', 'ГОРОД 4_0_2', 'CITY 4_0_2 ENG', 'CITY 4_0_2 GER');
INSERT INTO `city` VALUES(7,  1, 3, 'Город 1_3_2', 'City 1_3_2 eng', 'City 1_3_2 ger', 'ГОРОД 1_3_2', 'CITY 1_3_2 ENG', 'CITY 1_3_2  GER');
INSERT INTO `city` VALUES(8,  2, 4, 'Город 2_4_3', 'City 2_4_3 eng', 'City 2_4_3 ger', 'ГОРОД 2_4_3', 'CITY 2_4_3 ENG', 'CITY 2_4_3  GER');
INSERT INTO `city` VALUES(9,  4, 5, 'Город 4_5_1', 'City 4_5_1 eng', 'City 4_5_1 ger', 'ГОРОД 4_5_1', 'CITY 4_5_1 ENG', 'CITY 4_5_1 GER');
INSERT INTO `city` VALUES(10, 3, 1, 'Город 3_1_2', 'City 3_1_2 eng', 'City 3_1_2 ger', 'ГОРОД 3_1_2', 'CITY 3_1_2 ENG', 'CITY 3_1_2  GER');
INSERT INTO `city` VALUES(11, 2, 2, 'Город 2_2_2', 'City 2_2_2 eng', 'City 2_2_2 ger', 'ГОРОД 2_2_2', 'CITY 2_2_2 ENG', 'CITY 2_2_2 GER');
INSERT INTO `city` VALUES(12, 2, 4, 'Город 2_4_1', 'City 2_4_1 eng', 'City 2_4_1 ger', 'ГОРОД 2_4_1', 'CITY 2_4_1 ENG', 'CITY 2_4_1  GER');
INSERT INTO `city` VALUES(13, 3, 0, 'Город 3_0_1', 'City 3_0_1 eng', 'City 3_0_1 ger', 'ГОРОД 3_0_1', 'CITY 3_0_1 ENG', 'CITY 3_0_1  GER');
INSERT INTO `city` VALUES(14, 1, 3, 'Город 1_3_1', 'City 1_3_1 eng', 'City 1_3_1 ger', 'ГОРОД 1_3_1', 'CITY 1_3_1 ENG', 'CITY 1_3_1  GER');
INSERT INTO `city` VALUES(15, 3, 1, 'Город 3_1_1', 'City 3_1_1 eng', 'City 3_1_1 ger', 'ГОРОД 3_1_1', 'CITY 3_1_1 ENG', 'CITY 3_1_1  GER');
INSERT INTO `city` VALUES(16, 2, 4, 'Город 2_4_2', 'City 2_4_2 eng', 'City 2_4_2 ger', 'ГОРОД 2_4_2', 'CITY 2_4_2 ENG', 'CITY 2_4_2  GER');
INSERT INTO `city` VALUES(17, 2, 2, 'Город 2_2_1', 'City 2_2_1 eng', 'City 2_2_1 ger', 'ГОРОД 2_2_1', 'CITY 2_2_1 ENG', 'CITY 2_2_1  GER');
INSERT INTO `city` VALUES(18, 3, 1, 'Город 3_1_5', 'City 3_1_5 eng', 'City 3_1_5 ger', 'ГОРОД 3_1_5', 'CITY 3_1_5 ENG', 'CITY 3_1_5  GER');
INSERT INTO `city` VALUES(19, 4, 0, 'Город 4_0_1', 'City 4_0_1 eng', 'City 4_0_1 ger', 'ГОРОД 4_0_1', 'CITY 4_0_1 ENG', 'CITY 4_0_1 GER');
INSERT INTO `city` VALUES(20, 1, 0, 'Город 1_0_2', 'City 1_0_2 eng', 'City 1_0_2 ger', 'ГОРОД 1_0_2', 'CITY 1_0_2 ENG', 'CITY 1_0_2  GER');
INSERT INTO `city` VALUES(21, 4, 0, 'Город 4_0_3', 'City 4_0_3 eng', 'City 4_0_3 ger', 'ГОРОД 4_0_3', 'CITY 4_0_3 ENG', 'CITY 4_0_3 GER');
INSERT INTO `city` VALUES(22, 3, 1, 'Город 3_1_4', 'City 3_1_4 eng', 'City 3_1_4 ger', 'ГОРОД 3_1_4', 'CITY 3_1_4 ENG', 'CITY 3_1_4  GER');
INSERT INTO `city` VALUES(23, 3, 1, 'Город 3_1_3', 'City 3_1_3 eng', 'City 3_1_3 ger', 'ГОРОД 3_1_3', 'CITY 3_1_3 ENG', 'CITY 3_1_3  GER');