CREATE TABLE `referencedata` (
 `ID` int(11) NOT NULL AUTO_INCREMENT,
 `type` varchar(15) NOT NULL,
 `value` varchar(50) NOT NULL,
 PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1

CREATE TABLE `EMPLOYEEMASTER` (
 `ID` int(11) NOT NULL AUTO_INCREMENT,
 `BusNumber` varchar(20) NOT NULL,
 `Driver1` varchar(30) NOT NULL,
 `Driver2` varchar(30) NOT NULL,
 `Cleaner` varchar(30) NOT NULL,
 `Date` date NOT NULL,
 PRIMARY KEY (`ID`),
 UNIQUE KEY `CK_BN_Date_Unique` (`BusNumber`,`Date`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=latin1

CREATE TABLE `ticketdetails` (
 `ID` int(11) NOT NULL AUTO_INCREMENT,
 `TicketID` int(11) NOT NULL,
 `BoardingPoint` varchar(25) NOT NULL,
 `Tickets` int(11) NOT NULL,
 `Rate` int(11) NOT NULL,
 `Commision` int(11) NOT NULL,
 `GrandTotal` int(11) NOT NULL,
 `Total` int(11) NOT NULL,
 PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1

CREATE TABLE `expendituremaster` (
 `ID` int(11) NOT NULL AUTO_INCREMENT,
 `BusNumber` varchar(20) NOT NULL,
 `Driver1` varchar(30) NOT NULL,
 `Driver2` varchar(30) NOT NULL,
 `Cleaner` varchar(30) NOT NULL,
 `Date` date NOT NULL,
 PRIMARY KEY (`ID`),
 UNIQUE KEY `CK_BN_Date_Unique` (`BusNumber`,`Date`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=latin1

CREATE TABLE `expendituredetails` (
 `ID` int(11) NOT NULL AUTO_INCREMENT,
 `ExpType` varchar(30) NOT NULL,
 `Name` varchar(30) NOT NULL,
 `Expenditure` int(11) NOT NULL
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1

CREATE TABLE `luggagedetails` (
 `ID` int(11) NOT NULL AUTO_INCREMENT,
 `TripID` int(11) NOT NULL,
 `Direction` CHAR(1) NOT NULL,
 `Paid` int(11) NOT NULL,
 `Topay` int(11) NOT NULL,
 `Coolie` int(11) NOT NULL,
 `unload` int(11) NOT NULL,
  `doordelivery` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1

CREATE TABLE `tripmaster` (
 `ID` int(11) NOT NULL AUTO_INCREMENT,
 `BusNumber` varchar(20) NOT NULL,
 `Driver1` varchar(30) NOT NULL,
 `Driver2` varchar(30) NOT NULL,
 `Cleaner` varchar(30) NOT NULL,
 `Date` date NOT NULL,
 PRIMARY KEY (`ID`),
 UNIQUE KEY `CK_BN_Date_Unique` (`BusNumber`,`Date`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=latin1

