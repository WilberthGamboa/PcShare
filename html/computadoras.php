<?php
  session_start();

  require '../php/database.php';

  if (isset($_SESSION['user_id'])) {
 //   $sql= SELECT nombre,placaMadre,procesador,tarjetaDeVideo,fuenteDePoder,almacenamiento,ram,gabinete,imagen FROM computadoras;

 $query = "SELECT * FROM computadoras";
 
 $stmt = $conn->prepare($query);
 $stmt->execute();
 
 $userData = array();
 
 while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
  
  $userData['id'][] = $row;
 }
 
 echo json_encode($userData);
 echo $userData;



  }else{
    header('Location: login.php');
  }


?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/nav.css">
  <link rel="stylesheet" href="../css/styleAgregar.css">
  <link rel="stylesheet" href="../css/botones.css">
  <link rel="stylesheet" href="../css/footer.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <title>Nueva Pc</title>
</head>
<body>
    

  -->
  <script src="../js/scriptAgregar.js"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>


</html>