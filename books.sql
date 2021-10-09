SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


CREATE TABLE `books` (
  `BookID` int(20) NOT NULL,
  `BookName` text NOT NULL,
  `BookDetials` text NOT NULL,
  `Coursecode` varchar(20) NOT NULL,
  `DateTimeCreate` date NOT NULL,
  `DateTimeUpdate` date NOT NULL,
  `Remarks` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE `staffs` (
  `StaffID` int(20) NOT NULL,
  `Username` text NOT NULL,
  `Password` text NOT NULL,
  `Fname` text NOT NULL,
  `Lname` text NOT NULL,
  `DateTimeCreate` date NOT NULL,
  `DateTimeUpdate` date NOT NULL,
  `Remarks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE `stocks` (
  `StockID` int(20) NOT NULL,
  `BookID` int(20) NOT NULL,
  `StaffID` int(20) NOT NULL,
  `Stocks` varchar(50) NOT NULL,
  `DateTimeCreate` int(11) NOT NULL,
  `DateTimeUpdate` int(11) NOT NULL,
  `Remarks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


ALTER TABLE `books`
  ADD PRIMARY KEY (`BookID`),
  ADD UNIQUE KEY `Remarks` (`Remarks`),
  ADD KEY `Coursecode` (`Coursecode`),
  ADD KEY `Remarks_2` (`Remarks`),
  ADD KEY `Remarks_3` (`Remarks`);
ALTER TABLE `books` ADD FULLTEXT KEY `BookName` (`BookName`);
ALTER TABLE `books` ADD FULLTEXT KEY `BookDetials` (`BookDetials`);


ALTER TABLE `staffs`
  ADD PRIMARY KEY (`StaffID`),
  ADD UNIQUE KEY `Remarks` (`Remarks`);
ALTER TABLE `staffs` ADD FULLTEXT KEY `Username` (`Username`);
ALTER TABLE `staffs` ADD FULLTEXT KEY `Fname` (`Fname`);
ALTER TABLE `staffs` ADD FULLTEXT KEY `Lname` (`Lname`);
ALTER TABLE `staffs` ADD FULLTEXT KEY `Password` (`Password`);


ALTER TABLE `stocks`
  ADD PRIMARY KEY (`StockID`),
  ADD UNIQUE KEY `Remarks` (`Remarks`),
  ADD UNIQUE KEY `BookID` (`BookID`),
  ADD UNIQUE KEY `StaffID` (`StaffID`),
  ADD KEY `Stocks` (`Stocks`);


ALTER TABLE `books`
  ADD CONSTRAINT `books_ibfk_1` FOREIGN KEY (`BookID`) REFERENCES `stocks` (`BookID`) ON DELETE CASCADE ON UPDATE CASCADE;


ALTER TABLE `stocks`
  ADD CONSTRAINT `stocks_ibfk_1` FOREIGN KEY (`StaffID`) REFERENCES `staffs` (`StaffID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;


