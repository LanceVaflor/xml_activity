CREATE DATABASE db_1820680;

CREATE TABLE `tbl_articles` (
  `article_id` int(5) unsigned NOT NULL auto_increment, 
  `article_title` VARCHAR(100) NOT NULL DEFAULT '',
  `description` VARCHAR(60000) NOT NULL DEFAULT '',
  `author` VARCHAR(64) NOT NULL DEFAULT '',
  `date_created` DATETIME NULL,
  PRIMARY KEY  (`article_id`)
) ENGINE=MyISAM AUTO_INCREMENT=41000;

INSERT INTO tbl_articles (article_title, description, author, date_created)
VALUES ('Coronavirus Infections—More Than Just the Common Cold','Hello World','Catharine I. Paules, MD',NOW());
INSERT INTO tbl_articles (article_title, description, author, date_created)
VALUES ('Coronavirus death toll jumps above 80, five US cases confirmed: Everything we know',
		  'The new coronavirus, which has now claimed more than 80 lives in China, has now been identified in Arizona, California, Illinois and Washington state.',
		  'Jackson Ryan',NOW());
INSERT INTO tbl_articles (article_title, description, author, date_created)
VALUES ('How the new coronavirus stacks up against SARS and MERS',
		  'Coronaviruses, one of a variety of viruses that cause colds, have been making people cough and sneeze seemingly forever. But occasionally, a new version infects people and causes serious illness and deaths.',
		  'Tina Hesman Saey',NOW());
INSERT INTO tbl_articles (article_title, description, author, date_created)
VALUES ('Snakes Could Be the Original Source of the New Coronavirus Outbreak in China',
		  'A study of the virus’s genetic sequence suggests similarities to that seen in snakes, but the origin must still be verified.',
		  'Haitao Guo',NOW());
