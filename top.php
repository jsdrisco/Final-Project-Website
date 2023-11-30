<?php
    $phpSelf = htmlspecialchars($_SERVER['PHP_SELF']);
    $pathParts = pathinfo($phpSelf);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Bruins 2011 Stanley Cup Goats</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Andrew Subach, John Driscoll, John Lackey">
        <!-- link stylesheets here-->
        <meta name="description" content="A feature dedicated to a few notable players from the 2011 NHL Stanley Cup Champion Boston Bruins">
        <!--Head with meta elements and title-->
    </head>
    <body>
        <?php
            include 'nav.php';
            include 'header.php';
        ?>
        <main>
<?php
/**
print '<body class ="' .$pathParts['filename'] .'">';
include 'database-connect.php';
include 'header.php';
include 'nav.php';*/
?>