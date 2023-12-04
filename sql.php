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


    </pre>

</main>

<?php
    include 'footer.php';
    ?>
