

CREATE TABLE `tbl_cat` (
  `id_cat` int(20) NOT NULL AUTO_INCREMENT,
  `name_cat` varchar(100) NOT NULL,
  `cat_date` date NOT NULL,
  `cat_other` varchar(200) NOT NULL,
  PRIMARY KEY (`id_cat`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO tbl_cat VALUES("13","district","2020-12-30","No other ");
INSERT INTO tbl_cat VALUES("15","High Court of Sindh","2020-12-31","Chal Nikal");
INSERT INTO tbl_cat VALUES("16","Supreme Court","2020-02-22","No inf");





CREATE TABLE `tbladmin` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `AdminName` varchar(120) DEFAULT NULL,
  `UserName` varchar(120) DEFAULT NULL,
  `MobileNumber` bigint(11) DEFAULT NULL,
  `Email` varchar(120) DEFAULT NULL,
  `Password` varchar(120) DEFAULT NULL,
  `AdminRegdate` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO tbladmin VALUES("1","SJA","admin","3350232450","2304530@gmail.com","0192023a7bbd73250516f069df18b500","2019-03-10 21:30:00");





CREATE TABLE `tbldirectory` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `Status` varchar(120) NOT NULL,
  `FullName` varchar(120) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `BolumDept` varchar(120) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `DahiliNo` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=102 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO tbldirectory VALUES("100","1","Ahmet Yaşar","IT","2205");
INSERT INTO tbldirectory VALUES("101","0","Murat Yılmaz","IT Director","2201");



