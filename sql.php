<?php
include 'top.php';
?>

<main>
    <p>Create Table SQL </p>
    <pre>
        CREATE TABLE tblChara(
    recordId INT AUTO_INCREMENT PRIMARY KEY,
    fldSeason VARCHAR(9),
    fldTeam VARCHAR(20),
    fldGamesPlayed INT,
    fldGoals INT,
    fldAssists INT,
    fldPoints INT
    )

        CREATE TABLE tblBergeron(
    recordId INT AUTO_INCREMENT PRIMARY KEY,
    fldSeason VARCHAR(9),
    fldTeam VARCHAR(20),
    fldGamesPlayed INT,
    fldGoals INT,
    fldAssists INT,
    fldPoints INT
    )


    </pre>

</main>

<?php
    include 'footer.php';
    ?>