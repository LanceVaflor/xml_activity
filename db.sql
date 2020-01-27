CREATE DATABASE db_1820680;

CREATE TABLE `tbl_articles` (
  `article_id` int(5) unsigned NOT NULL auto_increment, 
  `article_title` VARCHAR(64) NOT NULL DEFAULT '',
  `description` VARCHAR(64) NOT NULL DEFAULT '',
  `author` VARCHAR(64) NOT NULL DEFAULT '',
  `date_created` DATETIME NULL,
  PRIMARY KEY  (`article_id`)
) ENGINE=MyISAM AUTO_INCREMENT=41000;

INSERT INTO tbl_articles (article_title, description, author, date_created)
VALUES ('Coronavirus Infections—More Than Just the Common Cold','Hello World','Catharine I. Paules, MD',NOW());
