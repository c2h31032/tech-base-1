<?php
 $dsn = 'mysql:データベース名;host=localhost';
    $user = 'ユーザー名';
    $password = 'パスワード';
    $pdo = new PDO($dsn, $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
    
    $sql = "CREATE TABLE IF NOT EXISTS mission6"
    ." ("
    . "id INT AUTO_INCREMENT PRIMARY KEY,"
    . "name CHAR(32),"
    . "comment TEXT,"
    . "date DATETIME,"
    . "password VARCHAR(255),"
    . "image BLOB"
    .");"; 

    $stmt = $pdo->query($sql);
    // データベース名・ユーザー名・パスワードは、各自の情報で置き換えること
    ?>