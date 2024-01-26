DROP TABLE IF EXISTS `glob_region`;
CREATE TABLE `glob_region`
(
    `id`           smallint(5) unsigned NOT NULL auto_increment,
    `gr_name_rus`  varchar(255) NOT NULL,
    `gr_name_eng`  varchar(255) NOT NULL,
    `gr_name_ger`  varchar(255) NOT NULL,
    `gr_descr_rus` varchar(255) NOT NULL,
    `gr_descr_eng` varchar(255) NOT NULL,
    `gr_descr_ger` varchar(255) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251;

INSERT INTO `glob_region` VALUES(1, 'Европа', 'Europe eng', 'Europe ger', 'ЕВРОПА', 'EUROPE ENG', 'EUROPE GER');
INSERT INTO `glob_region` VALUES(2, 'Азия', 'Asia eng', 'Asia ger', 'АЗИЯ', 'ASIA ENG', 'ASIA GER');
INSERT INTO `glob_region` VALUES(3, 'Северная Америка', 'Noth America eng', 'Noth America ger', 'СЕВЕРНАЯ АМЕРИКА', 'NOTH AMERICA ENG', 'NOTH AMERICA GER');