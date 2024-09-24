<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>mission6-1</title>
</head>

<body>
     
   <style>
        body {
            font-family: Arial;
            background-color: #3498DB;
            padding: 50px;
            color: #FFF;
            text-align: center;
        }
        .form-container {
            background-color: #FFF;
            padding: 20px;
            border-radius: 5px;
            max-width: 400px;
            margin: 0 auto;
            color: #333;
        }
        input {
            width: 50%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #CCC;
            border-radius: 3px;
        }
        
        
        
    </style>
    
    </form>
    <?php
$dsn = 'mysql:dbname=tb260047db;host=localhost';
    $user = 'tb-260047';
    $password = 'Tma6WSdybd';
    $pdo = new PDO($dsn, $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
    
    $sql = 'SELECT * FROM mission6';
    $stmt = $pdo->query($sql);
    $results = $stmt->fetchAll();
    
      foreach ($results as $row){
       echo $row['id'].',';
        echo $row['name'].'<br>';
        echo nl2br($row['comment']).'<br>';
        echo $row['date'].'<br>';
         echo "<hr>"; 
      }


?>
