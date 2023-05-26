<?php
   $host = '127.0.0.1';
   $db = 'attendee_db';
   $user = 'root';
   $pass = ' ';
   $charset = 'utf8mb4';

   $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

   try{
      $pdo = new PDO($dsn, $user, $pass);
      $pdo->setAttribute(PDO::ATTR_ERRMORE, PDO::ERRMORE_EXCEPTION);
      

   } catch(PDOExeption $e){
        throw new PDOExeption($e->getMessage());
   }
?>

<?php
  require_once 'crud.php';
  require_once 'user.php';
  $crud = new crud($pdo);
  $user = new user($pdo);

  $user->insertUser("admin","password");
  
  ?>