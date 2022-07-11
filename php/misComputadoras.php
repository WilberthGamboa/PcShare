<?php

// DEVUELVE JSON COMPUTADORAS DE CADA USUARIO CON UNA BUSQUEDA 
  session_start();

  require '../php/database.php';
  
  if (isset($_SESSION['user_id'])) {

$condicion= $_GET['busca'];
$usuario =$_SESSION['user_id'];
 
$query = "SELECT computadoras.* FROM computadoras,usuarios,propiedad WHERE propiedad.idUsuario= usuarios.id AND computadoras.id = propiedad.idPc and propiedad.idUsuario=$usuario and computadoras.nombre like '%$condicion%'" ;


 $stmt = $conn->prepare($query);
 $stmt->execute();
 
 $userData = array();
 
 while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
  
  $userData[][] = $row;
 }
 

 header('Content-Type: application/json');
echo json_encode($userData);

}else{
    header('Location: login.php');
  }
 ?>