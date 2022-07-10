

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "newusuarios";
try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname;", $username, $password);
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}

?>




