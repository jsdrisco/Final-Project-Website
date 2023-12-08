<?php
include 'top.php';
?>

<main>
    <p>Create Table SQL </p>
    <pre>
        CREATE TABLE tblChara(
    pmkRecordId INT AUTO_INCREMENT PRIMARY KEY,
    fldSeason VARCHAR(9),
    fldTeam VARCHAR(20),
    fldGamesPlayed INT,
    fldGoals INT,
    fldAssists INT,
    fldPoints INT
    )

        CREATE TABLE tblBergeron(
    ho
    fldSeason VARCHAR(9),
    fldTeam VARCHAR(20),
    fldGamesPlayed INT,
    fldGoals INT,
    fldAssists INT,
    fldPoints INT
    )

        CREATE TABLE tblThomas(
    pmkRecordId INT AUTO_INCREMENT PRIMARY KEY,
    fldSeason VARCHAR(9),
    fldTeam VARCHAR(20),
    fldWins INT,
    fldLosses INT,
    fldSavePercent DOUBLE,
    fldGAA DOUBLE)

    INSERT INTO tblBergeron
    (fldSeason,fldTeam,fldGamesPlayed,fldGoals,fldAssists,fldPoints)
    VALUES
    ('2003-04','Boston Bruins',71,16,23,39);


        CREATE TABLE tblBruinsSurvey(
    pmkSubmission INT AUTO_INCREMENT PRIMARY KEY,
        fldFirstName VARCHAR(20)
        fldLastName VARCHAR(30),
        fldEmail VAR(400),
        fldMarchand INT,
        fldLucic INT,
        fldKrejci INT,
        fldOther INT,
        fldMemory VARCHAR(500)
    )

        INSERT INTO tblBergeron(fldSeason, fldTeam, fldGamesPlayed, fldGoals, fldAssists, fldPoints)
    VALUES
    ('2003-04', 'Boston Bruins', 71, 16, 23, 39),
    ('2005-06', 'Boston Bruins', 81, 31, 42, 73),
    ('2006-07', 'Boston Bruins', 77, 22, 48, 70),
    ('2007-08', 'Boston Bruins', 10, 3, 4, 7),
    ('2008-09', 'Boston Bruins', 64, 8, 31, 39),
    ('2009-10', 'Boston Bruins', 73, 19, 33, 52),
    ('2010-11', 'Boston Bruins', 80, 22, 35, 57),
    ('2011-12', 'Boston Bruins', 81, 22, 42, 64),
    ('2012-13', 'Boston Bruins', 42, 10, 22, 32),
    ('2013-14', 'Boston Bruins', 80, 30, 32, 62),
    ('2014-15', 'Boston Bruins', 81, 23, 32, 55),
    ('2015-16', 'Boston Bruins', 80, 32, 36, 68),
    ('2016-17', 'Boston Bruins', 79, 21, 32, 53),
    ('2017-18', 'Boston Bruins', 64, 30, 33, 63),
    ('2018-19', 'Boston Bruins', 65, 32, 47, 79),
    ('2019-20', 'Boston Bruins', 61, 31, 25, 56),
    ('2020-21', 'Boston Bruins', 54, 23, 25, 48),
    ('2021-22', 'Boston Bruins', 73, 25, 40, 65),
    ('2022-23', 'Boston Bruins', 78, 27, 31, 58);

    INSERT INTO tblChara(fldSeason, fldTeam, fldGamesPlayed, fldGoals, fldAssists, fldPoints)
    VALUES
    ('1997-98', 'New York Islanders', 25, 0, 1, 1),
    ('1998-99', 'New York Islanders', 59, 2, 6, 8),
    ('1999-00', 'New York Islanders', 65, 2, 9, 11),
    ('2000-01', 'New York Islanders', 82, 2, 7, 9),
    ('2001-02', 'Ottawa Senators', 75, 10, 13, 23),
    ('2002-03', 'Ottawa Senators', 74, 9, 30, 39),
    ('2003-04', 'Ottawa Senators', 79, 16, 25, 41),
    ('2005-06', 'Ottawa Senators', 71, 16, 27, 43),
    ('2006-07', 'Boston Bruins', 80, 11, 32, 43),
    ('2007-08', 'Boston Bruins', 77, 17, 34, 51),
    ('2008-09', 'Boston Bruins', 80, 19, 31, 50),
    ('2009-10', 'Boston Bruins', 80, 7, 37, 44),
    ('2010-11', 'Boston Bruins', 81, 14, 30, 44),
    ('2011-12', 'Boston Bruins', 79, 12, 40, 52),
    ('2012-13', 'Boston Bruins', 48, 7, 12, 19),
    ('2013-14', 'Boston Bruins', 77, 17, 23, 40),
    ('2014-15', 'Boston Bruins', 63, 8, 12, 20),
    ('2015-16', 'Boston Bruins', 80, 9, 28, 37),
    ('2016-17', 'Boston Bruins', 75, 10, 19, 29),
    ('2017-18', 'Boston Bruins', 73, 7, 17, 24),
    ('2018-19', 'Boston Bruins', 62, 5, 9, 14),
    ('2019-20', 'Boston Bruins', 68, 5, 9, 14),
    ('2020-21', 'Washington Capitals', 55, 2, 8, 10),
    ('2021-22', 'New York Islanders', 72, 2, 12, 14);


        INSERT INTO tblThomas(fldSeason, fldTeam, fldWins, fldLosses, fldSavePercent, fldGAA)
    VALUES
    ('2002-03', 'Boston Bruins', 3, 1, 0.907, 3.01),
    ('2005-06', 'Boston Bruins', 12, 13, 0.917, 2.77),
    ('2006-07', 'Boston Bruins', 30, 29, 0.905, 3.13),
    ('2007-08', 'Boston Bruins', 28, 19, 0.921, 2.44),
    ('2008-09', 'Boston Bruins', 36, 11, 0.933, 2.10),
    ('2009-10', 'Boston Bruins', 17, 18, 0.915, 2.56),
    ('2010-11', 'Boston Bruins', 35, 11, 0.938, 2.00),
    ('2011-12', 'Boston Bruins', 35, 19, 0.920, 2.36),
    ('2013-14', 'Florida Panthers', 16, 20, 0.909, 2.87),
    ('2013-14', 'Dallas Stars', 2, 4, 0.902, 2.97);

        CREATE TABLE tblGameStats(
    pmkGame INT AUTO_INCREMENT PRIMARY KEY,
    fldRecord VARCHAR(10),
    fldBruinsScore INT,
    fldVancouverScore INT
    )


        INSERT INTO tblGameStats(pmkGame, fldRecord,fldBruinsScore,fldVancouverScore)
    VALUES
    (1,'0-1',0,1),
    (2,'0-2',2,3),
    (3,'1-2',8,1),
    (4,'2-2',4,0),
    (5,'2-3',0,1),
    (6,'3-3',5,2),
    (7,'4-3',4,0)

    </pre>

</main>

<?php
    include 'footer.php';
    ?>
