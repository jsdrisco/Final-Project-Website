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

    </pre>

</main>

<?php
    include 'footer.php';
    ?>
