
<html lang="ja">
     <head>
   <meta charset="UTF-8">
   <title>mission5-4</title>
 </head>
 <?php
 $dsn = 'mysql:dbname=tb260047db;host=localhost';
    $user = 'tb-260047';
    $password = 'Tma6WSdybd';
    $pdo = new PDO($dsn, $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
    $update_num = '';
    $update_name = '';
    $update_comment = '';
    $update_password = '';
 
    if(!empty($_POST['update_num']) && !empty($_POST['update_password'])){
    $update_num = $_POST['update_num'];
    $update_password = $_POST['update_password'];
    $sql = 'SELECT * FROM mission5_4 WHERE id=:id ';
    $stmt = $pdo->prepare($sql);                  
    $stmt->bindParam(':id', $update_num, PDO::PARAM_INT);
    $stmt->execute();                             
   
    $results = $stmt->fetchAll(); 
          foreach ($results as $row){
              if($update_password = $row['password'])
             $update_id = $row['id'];
             $update_name = $row['name'];
             $update_comment = $row['comment'];
             
         }}

 ?>
 <body>
      <form action="" method="post">
         <input type="text" name="name" placeholder="名前" value= "<?php echo $update_name; ?>">
         <input type="text" name="comment" placeholder="コメント" value= "<?php echo $update_comment; ?>">
         <input type="hidden" name="update_id" value= "<?php echo $update_num; ?>">
         <input type="password" name="password" placeholder="パスワード入力欄" value= "<?php echo $update_password; ?>">
         <input type="submit" name="submit" value = '投稿'><br>
         
         <input type="number" name="delete_num" placeholder="削除対象番号">
         <input type="password" name="delete_password" placeholder="パスワード入力欄">
         <input type="submit" name="delete_button" value = "削除"><br>
         
          <input type="number" name="update_num" placeholder="編集対象番号">
          <input type="password" name="update_password" placeholder="パスワード入力欄">
         <input type="submit" name="update_button" value = "編集"><br>
    <?php 
       
    
     if( !empty( $_POST["name"]) && !empty($_POST["comment"] ) && !empty($_POST['password']))
     {{
            
             $name = $_POST["name"];
             $comment = $_POST["comment"];
             $password = $_POST['password'];
              $date = date("Y/m/d/ H:i:s");
            
     if(!empty($_POST['update_id']) && !empty($_POST['password'])){
    $update_id = $_POST['update_id'];  
    $update_password2 = $_POST['password'];
    $sql = 'UPDATE mission5_4 SET name=:name,comment=:comment WHERE id=:id AND password=:password';
    $stmt = $pdo->prepare($sql);
    
    $stmt->bindParam(':name', $name, PDO::PARAM_STR);
    $stmt->bindParam(':comment', $comment, PDO::PARAM_STR);
    $stmt->bindParam(':id', $update_id, PDO::PARAM_INT);
    $stmt->bindParam(':password', $update_password2, PDO::PARAM_STR);
    $stmt->execute();
    
    }else{
       $sql = "INSERT INTO mission5_4 (name, comment, date, password) VALUES (:name, :comment ,:date, :password)";
    $stmt = $pdo->prepare($sql);
    
    $stmt->bindParam(':name', $name, PDO::PARAM_STR);
    $stmt->bindParam(':comment', $comment, PDO::PARAM_STR); 
    $stmt->bindParam(':date', $date, PDO::PARAM_STR);
    $stmt->bindParam(':password', $password, PDO::PARAM_STR);
      $stmt->execute();
    }}
    }
     
     if( !empty($_POST["delete_num"]) && !empty($_POST['delete_password'])){
         $delete_password = $_POST['delete_password'];
        
        $delete_num = $_POST["delete_num"];
        $delete_button = $_POST["delete_button"];
        $id = $delete_num;
        $sql = 'delete from mission5_4 where id=:id AND password=:password';
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);  
    $stmt->bindParam(':password', $delete_password, PDO::PARAM_STR);
    $stmt->execute();
                 }
     
    
$sql = 'SELECT * FROM mission5_4';
    $stmt = $pdo->query($sql);
    $results = $stmt->fetchAll();
    
      foreach ($results as $row){
        echo $row['id'].',';
        echo $row['name'].',';
        echo $row['comment'].',';
        echo $row['date']. '<br>';
         echo "<hr>"; 
      }
?>
    
    </html>