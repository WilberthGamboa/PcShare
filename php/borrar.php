<?php 

session_start();

  require '../php/database.php';
  // $xd = valor js
  if (isset($_SESSION['user_id'])) {
 //   $sql= SELECT nombre,placaMadre,procesador,tarjetaDeVideo,fuenteDePoder,almacenamiento,ram,gabinete,imagen FROM computadoras;

 //   echo "<H1>  {$_GET['busca']} </H1> ";
 //NO MOVER XD
$condicion= $_GET['busca'];

 $query = "DELETE FROM computadoras WHERE id=$condicion";
//$query = "SELECT computadoras.* FROM computadoras,usuarios,propiedad WHERE propiedad.idUsuario= usuarios.id AND computadoras.id = propiedad.idPc and propiedad.idUsuario=$usuario and computadoras.nombre like '%$condicion%'" ;

//$query = "SELECT id,nombre,placaMadre,procesador,tarjetaDeVideo,fuenteDePoder,almacenamiento,ram,gabinete,imagen FROM computadoras WHERE computadoras.nombre like '%$condicion%'";
 //SELECT computadoras.* FROM computadoras,usuarios,propiedad WHERE propiedad.idUsuario= usuarios.id AND computadoras.id = propiedad.idPc and propiedad.idUsuario=1;
 $stmt = $conn->prepare($query);
 $stmt->execute();
 


 
/*

 $sql = "SELECT nombre FROM computadoras"; 
 $query = $conn -> prepare($sql); 
 $query -> execute(); 
 $results = $query -> fetchAll(PDO::FETCH_OBJ); 
  json_encode($results);
 /*
 if($query -> rowCount() > 0)   { 
    foreach($results as $result) { 
        $hola = $result -> nombre;
    echo $hola ;
    
       }
     }
*/
}else{
    header('Location: login.php');
  }

?>