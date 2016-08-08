Database Name: graduatesOfDemocracy

CREATE TABLE `User` ( 
		`UserId` INT NOT NULL AUTO_INCREMENT , 
		`Email` VARCHAR(64) NOT NULL , 
		`Name` VARCHAR(128) NOT NULL,
		`Code` VARCHAR(64) NOT NULL , 
		`HasVoted` TINYINT NOT NULL , 
		PRIMARY KEY (`UserId`)) ENGINE = InnoDB;

CREATE TABLE `Presidency` ( 
		`UserId` INT NOT NULL AUTO_INCREMENT , 
		`Name` VARCHAR(64) NOT NULL , 
		`Votes` INT NOT NULL , 
		PRIMARY KEY (`UserId`)) ENGINE = InnoDB;

CREATE TABLE `ExternalVicePresidency` ( 
		`UserId` INT NOT NULL AUTO_INCREMENT , 
		`Name` VARCHAR(64) NOT NULL , 
		`Votes` INT NOT NULL , 
		PRIMARY KEY (`UserId`)) ENGINE = InnoDB;

CREATE TABLE `InternalVicePresidency` ( 
		`UserId` INT NOT NULL AUTO_INCREMENT , 
		`Name` VARCHAR(64) NOT NULL , 
		`Votes` INT NOT NULL , 
		PRIMARY KEY (`UserId`)) ENGINE = InnoDB;

CREATE TABLE `StructVicePresidency` ( 
		`UserId` INT NOT NULL AUTO_INCREMENT , 
		`Name` VARCHAR(64) NOT NULL , 
		`Votes` INT NOT NULL , 
		PRIMARY KEY (`UserId`)) ENGINE = InnoDB;


CREATE TABLE `EditorInChief` ( 
		`UserId` INT NOT NULL AUTO_INCREMENT , 
		`Name` VARCHAR(64) NOT NULL , 
		`Votes` INT NOT NULL , 
		PRIMARY KEY (`UserId`)) ENGINE = InnoDB;

CREATE TABLE `DirectorOfCommunications` ( 
		`UserId` INT NOT NULL AUTO_INCREMENT , 
		`Name` VARCHAR(64) NOT NULL , 
		`Votes` INT NOT NULL , 
		PRIMARY KEY (`UserId`)) ENGINE = InnoDB;

CREATE TABLE `Treasurer` ( 
		`UserId` INT NOT NULL AUTO_INCREMENT , 
		`Name` VARCHAR(64) NOT NULL , 
		`Votes` INT NOT NULL , 
		PRIMARY KEY (`UserId`)) ENGINE = InnoDB;

INSERT INTO `Presidency` (`UserId`, `Name`, `Votes`) VALUES ('1', 'Mu-hamid Pathan', '0'), ('2', 'Ido Nathaniel', '0'), ('3', 'Robert Zielonka', '0');

INSERT INTO `ExternalVicePresidency` (`UserId`, `Name`, `Votes`) VALUES ('1', 'Cecilia Passaniti', '0'), ('2', 'Margaux Vidal', '0'),('3', 'Dearbhla Hone', '0');

INSERT INTO `InternalVicePresidency` (`UserId`, `Name`, `Votes`) VALUES ('1', 'Eva Amalija Oreskovic', '0'), ('2', 'Kristjan Kalve', '0'), ('3', 'Patrik Bole', '0'), ('4', 'Alexander Kuye', '0');

INSERT INTO `StructVicePresidency` (`UserId`, `Name`, `Votes`) VALUES ('1', 'Kuba Sta', '0');

INSERT INTO `EditorInChief` (`UserId`, `Name`, `Votes`) VALUES ('1', 'Tjeerd Ritmeester', '0'), ('2', 'Lauren Davies', '0');

INSERT INTO `DirectorOfCommunications` (`UserId`, `Name`, `Votes`) VALUES ('1', 'Hugo Decis', '0');

INSERT INTO `Treasurer` (`UserId`, `Name`, `Votes`) VALUES ('1', 'Pavlos Zoubouloglou', '0'), ('2', 'Luís Carvalho', '0');





