<!-- Connecting -->
<?php
    $databaseName = 'JLACKEY_final';
    $dsn = 'mysql:host=webdb.uvm.edu;dbname='. $databaseName;
    $username = 'jlackey_writer';
    $password = ')/6R[P%vyn0R6q,zE0+f';

    $pdo = new PDO($dsn, $username, $password);
    if($pdo)
        print '<!-- Connection complete -->';
?>