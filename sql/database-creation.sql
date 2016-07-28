Database Name: graduatesOfDemocracy

CREATE TABLE `graduatesOfDemocracy`.`User` ( 
		`UserId` INT NOT NULL AUTO_INCREMENT , 
		`Email` VARCHAR(64) NOT NULL , 
		`Name` VARCHAR(128) NOT NULL,
		`Code` VARCHAR(16) NOT NULL , 
		`HasVoted` TINYINT NOT NULL , 
		PRIMARY KEY (`UserId`)) ENGINE = InnoDB;

CREATE TABLE `graduatesOfDemocracy`.`Presidency` ( 
		`UserId` INT NOT NULL AUTO_INCREMENT , 
		`Name` VARCHAR(64) NOT NULL , 
		`Votes` INT NOT NULL , 
		PRIMARY KEY (`UserId`)) ENGINE = InnoDB;

CREATE TABLE `graduatesOfDemocracy`.`ExternalVicePresidency` ( 
		`UserId` INT NOT NULL AUTO_INCREMENT , 
		`Name` VARCHAR(64) NOT NULL , 
		`Votes` INT NOT NULL , 
		PRIMARY KEY (`UserId`)) ENGINE = InnoDB;

CREATE TABLE `graduatesOfDemocracy`.`InternalVicePresidency` ( 
		`UserId` INT NOT NULL AUTO_INCREMENT , 
		`Name` VARCHAR(64) NOT NULL , 
		`Votes` INT NOT NULL , 
		PRIMARY KEY (`UserId`)) ENGINE = InnoDB;

CREATE TABLE `graduatesOfDemocracy`.`EditorInChief` ( 
		`UserId` INT NOT NULL AUTO_INCREMENT , 
		`Name` VARCHAR(64) NOT NULL , 
		`Votes` INT NOT NULL , 
		PRIMARY KEY (`UserId`)) ENGINE = InnoDB;

CREATE TABLE `graduatesOfDemocracy`.`DirectorOfCommunications` ( 
		`UserId` INT NOT NULL AUTO_INCREMENT , 
		`Name` VARCHAR(64) NOT NULL , 
		`Votes` INT NOT NULL , 
		PRIMARY KEY (`UserId`)) ENGINE = InnoDB;

CREATE TABLE `graduatesOfDemocracy`.`Treasurer` ( 
		`UserId` INT NOT NULL AUTO_INCREMENT , 
		`Name` VARCHAR(64) NOT NULL , 
		`Votes` INT NOT NULL , 
		PRIMARY KEY (`UserId`)) ENGINE = InnoDB;

INSERT INTO `Presidency` (`UserId`, `Name`, `Votes`) VALUES ('1', 'Mu-hamid Pathan', '0'), ('2', 'Kuba Sta', '0'), ('3', 'Robert Zielonka', '0');

INSERT INTO `ExternalVicePresidency` (`UserId`, `Name`, `Votes`) VALUES ('1', 'Cecilia Passaniti', '0'), ('2', 'Margaux Vidal', '0');

INSERT INTO `InternalVicePresidency` (`UserId`, `Name`, `Votes`) VALUES ('1', 'Eva Amalija Oreskovic', '0'), ('2', 'Kritjan Kalve', '0'), ('3', 'Patrik Bole', '0');

INSERT INTO `EditorInChief` (`UserId`, `Name`, `Votes`) VALUES ('1', 'Tjeerd Ritmeester', '0'), ('2', 'Lauren Davies', '0');

INSERT INTO `DirectorOfCommunications` (`UserId`, `Name`, `Votes`) VALUES ('1', 'Hugo Decis', '0');

INSERT INTO `Treasurer` (`UserId`, `Name`, `Votes`) VALUES ('1', 'Pavlos Zoubouloglou', '0'), ('2', 'Luís Carvalho', '0');




