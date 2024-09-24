
<html lang="ja">
     <head>
   <meta charset="UTF-8">
   <title>mission6</title>
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
        input[type="submit"] {
            background-color: blue;
            border: none;
            color: #FFF;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #2980B9;
        }
        px{
  padding: 0.5em 1em;
    margin: 2em 0;
    color: #474747;
    background: whitesmoke;/*背景色*/
    border-left: double 7px #4ec4d3;/*左線*/
    border-right: double 7px #4ec4d3;/*右線*/

}
        
        
        
    </style>
    
 </head>
 

 
 <body> 
 <span style="font-size: 50px;">入力画面</span>
 
      <form action="" method="post">
         <input type="text" name="name" placeholder="名前"  class = "px"><br>
          <textarea  name="comment" cols="100" rows="5" placeholder="コメント"></textarea><br>
         
         <input type="submit" name="submit" value = '投稿'><br>
         
         
    <?php 
       $dsn = 'mysql:dbname=tb260047db;host=localhost';
    $user = 'tb-260047';
    $password = 'Tma6WSdybd';
    $pdo = new PDO($dsn, $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
    
    
     if( !empty( $_POST["name"]) && !empty($_POST["comment"] ) && !empty($_POST['submit']))
     {{
            
             $name = $_POST["name"];
             $comment = $_POST["comment"];
             
              $date = date("Y/m/d/ H:i:s");
            
     
    $sql = "INSERT INTO mission6 (name, comment, date) VALUES (:name, :comment ,:date)";
    $stmt = $pdo->prepare($sql);
    
    $stmt->bindParam(':name', $name, PDO::PARAM_STR);
    $stmt->bindParam(':comment', $comment, PDO::PARAM_STR); 
    $stmt->bindParam(':date', $date, PDO::PARAM_STR);
    
      $stmt->execute();
    }
    }
     
    
    if( !empty( $_POST["name"]) && !empty($_POST["comment"] ) && !empty($_POST['submit'])){
           header("Location: m6-1.php");
exit;
      }
   
?>
    
    </html>