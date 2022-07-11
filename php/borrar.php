//PERMITE BORRAR UN REGISTRO 
<?php 

session_start();

  require '../php/database.php';

  if (isset($_SESSION['user_id'])) {

  $condicion= $_GET['busca'];

  $query = "DELETE FROM computadoras WHERE id=$condicion";
  $stmt = $conn->prepare($query);
  $stmt->execute();
 
}else{
    header('Location: login.php');
  }

?>