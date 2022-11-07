<?php
// used to connect to the database
$host = "localhost";
$db_name = "techRent";
$username = "tech";
$password = "x4nJa763Hn))Lbu9";
  
try {
    $con = new PDO("mysql:host={$host};dbname={$db_name}", $username, $password);
}
  
// show error
catch(PDOException $exception){
    echo "Connection error: " . $exception->getMessage();
}
?>
