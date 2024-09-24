<?php
 $dsn = 'mysql:dbname=tb260047db;host=localhost';
    $user = 'tb-260047';
    $password = 'Tma6WSdybd';
    $pdo = new PDO($dsn, $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
 
    $sql = 'DROP TABLE mission5_4';
    $stmt = $pdo->query($sql);
    ?>
