<?php
  session_start();

  require '../php/database.php';
 
  if (isset($_SESSION['user_id'])) {
 
$condicion= $_GET['busca'];
 $query = "SELECT id,nombre,placaMadre,procesador,tarjetaDeVideo,fuenteDePoder,almacenamiento,ram,gabinete FROM computadoras WHERE computadoras.nombre like '%$condicion%'";
 
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


  




