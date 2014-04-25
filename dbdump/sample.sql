
/* CREATE DATABASE sampfra DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci; */
/* GRANT ALL PRIVILEGES ON sampfra.* TO matsumoto@localhost IDENTIFIED BY 'password' WITH GRANT OPTION */


DROP TABLE IF EXISTS `mtb_language`;

CREATE TABLE `mtb_language`(
    id smallint(6) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name varchar(20) default NULL,
    rank smallint(6) default 0
) DEFAULT CHARSET=utf8 ;


INSERT INTO `mtb_language` VALUES (1,'C',1),(2,'Java',2),(3,'C++',3),(4,'PHP',4),(5,'Perl',5),(6,'Ruby',6),(7,'JavaScript',7),(8,'Python',8);

DROP TABLE IF EXISTS `mtb_sex`;

CREATE TABLE mtb_sex (
    id smallint(6)  NOT NULL AUTO_INCREMENT PRIMARY KEY ,
    name varchar(11) default NULL,
    rank smallint(6) default 0
) DEFAULT CHARSET=utf8 ;
 
INSERT INTO `mtb_sex` VALUES (1,'男性',1),(2,'女性',2);
 

DROP TABLE IF EXISTS `mtb_pref`;

CREATE TABLE mtb_pref (
    id smallint(6)  NOT NULL AUTO_INCREMENT PRIMARY KEY ,
    name varchar(11) default NULL ,
    rank smallint(6) default 0
) DEFAULT CHARSET=utf8 ;

 INSERT INTO `mtb_pref` VALUES (1,'北海道',1),(2,'青森県',2),(3,'岩手県',3),(4,'宮城県',4),(5,'秋田県',5),(6,'山形県',6),(7,'福島県',7),(8,'茨城県',8),(9,'栃木県',9),(10,'群馬 県',10),(11,'埼玉県',11),(12,'千葉県',12),(13,'東京都',13),(14,'神奈川県',14),(15,'新潟県',15),(16,'富山県',16),(17,'石川県',17),(18,'福井県',18),(19,'山梨県',19),(20,'長野県',20),(21,'岐阜県',21),(22,'静岡県',22),(23,'愛知県',23),(24,'三重県',24),(25,'滋賀県',25),(26,'京都府',26),(27,'大阪府',27),(28,'兵庫県',28),(29,'奈良県',29),(30,'和歌山県',30),(31,'鳥取県',31),(32,'島根県',32),(33,'岡山県',33),(34,'広島県',34),(35,'山口県',35),(36,'徳島県',36),(37,'香川県',37),(38,'愛媛県',38),(39,'高知県',39),(40,'福岡県',40),(41,'佐賀県',41),(42,'長崎県',42),(43,'熊本県',43),(44,'大分県',44),(45,'宮崎県',45),(46,'鹿児島県',46),(47,'沖縄県',47);
