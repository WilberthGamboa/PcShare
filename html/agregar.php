<?php
  session_start();

  require '../php/database.php';

  if (isset($_SESSION['user_id'])) {
  // echo "<script> alert('verificar');
   
   //echo $_FILES['foto']['name'];
 //  </script>";
 // echo $_POST["nombre"], $_POST["placaMadre"], $_POST["procesador"], $_POST["tarjetaDeVideo"], $_POST["fuenteDePoder"], $_POST["almacenamiento"], $_POST["ram"], $_POST["gabinete"];
    if (isset($_POST["nombre"],$_FILES['foto']['name'], $_POST["placaMadre"], $_POST["procesador"], $_POST["tarjetaDeVideo"], $_POST["fuenteDePoder"], $_POST["almacenamiento"], $_POST["ram"], $_POST["gabinete"])and $_POST["nombre"]!="" and $_POST["procesador"]!="" and $_POST["placaMadre"]!="" and $_POST["tarjetaDeVideo"]!="" and $_POST["fuenteDePoder"]!="" and $_POST["almacenamiento"]!="" and $_POST["ram"]!="" and $_POST["gabinete"]!="" ){
   //   echo "<script> alert('dentro sql') </script>";
      //traspasamos a variables locales, para evitar complicaciones con las comillas:
     // $usuario = $_POST["usuario"];
      //$contrasena = $_POST["contrasena"];
      $nombre_archivo = $_FILES['foto']['name']; //Obteniendo el nombre del archivo
      $ruta_destino = "../fotospc/";
      
      //$_SERVER['DOCUMENT_ROOT'] = la carpeta raiz donde esta el proyecto
      $carpeta_destino=$_SERVER['../fotospc/'] . $ruta_destino;
      
      //Movemos el archivo al directorio temp al directorio deseado.
      
      move_uploaded_file($_FILES['foto']['tmp_name'], $carpeta_destino . $nombre_archivo);

      $sql = "INSERT INTO computadoras (nombre,procesador,placaMadre,tarjetaDeVideo,fuenteDePoder,almacenamiento,ram,gabinete,imagen) VALUES (:nombre, :proce,:placaMadre,:tarjetaDeVideo,:fuenteDePoder,:almacenamiento,:ram,:gabinete,:imagen)";
      $stmt = $conn->prepare($sql);
      $stmt->bindParam(':nombre', $_POST['nombre']);
      $stmt->bindParam(':proce', $_POST['procesador']);
      $stmt->bindParam(':placaMadre', $_POST['placaMadre']);
      $stmt->bindParam(':tarjetaDeVideo', $_POST['tarjetaDeVideo']);
      $stmt->bindParam(':fuenteDePoder', $_POST['fuenteDePoder']);
      $stmt->bindParam(':almacenamiento', $_POST['almacenamiento']);
      $stmt->bindParam(':ram', $_POST['ram']);
      $stmt->bindParam(':gabinete', $_POST['gabinete']);

      //fotografia
      /*
      $tipoArchivo = $_FILES['foto']['type'];
      $nombreArchivo = $_FILES['foto']['name'];
      $tamanoArchivo = $_FILES['foto']['size'];
      $imagenSubida = fopen($_FILES['foto']['tmp_name'], 'r');
      $binariosImagen = fread($imagenSubida, $tamanoArchivo);
      $stmt->send_long_data(1, file_get_contents($_FILES['foto']['tmp_name']));
     
      
    */
    
   // $nombre=$_POST['nombre'];
    $cargarAvatar=($_FILES['foto']['tmp_name']);//carga el archivo
    $avatar=fopen($cargarAvatar, 'rb');//leer el archivo como binario
   // $cargarPoder=($_FILES['poder']['tmp_name']);//cargar/obtener el archivo
    //$poder=fopen($cargarPoder, 'rb');//leer como binario
    //$pais=$_POST['pais'];
    $stmt->bindParam(':imagen', $avatar, PDO::PARAM_LOB);
    
      if ($stmt->execute()) {

      
      
    //  $message = 'Successfully created new user';
  //    header('Location: login.php');

    } else {
      
   // echo "<script> alert('fuerasql') </script>";
     // $message = 'Sorry there must have been an issue creating your account';
     // header('Location: register.html');
    }
 
  }else{
  //  echo "alert('no paso')";
  }
  

  }else{
    header('Location: login.php');
  }
/*
  session_start();

  require '../php/database.php';

  if (isset($_SESSION['user_id'])) {
    header('Location: login.php');
    /*
    $records = $conn->prepare('SELECT id, nombre, pass FROM usuarios WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;
    
    if (count($results) > 0) {
      $user = $results;
      
    }
    
// INSERTAR SQL
//and $_POST["usuario"] !="" and $_POST["contrasena"]!=""


    
  
  }else{
    if (isset($_POST["nombre"], $_POST["placamadre"], $_POST["procesador"], $_POST["tarjetaDeVideo"], $_POST["fuenteDePoder"], $_POST["almacenamiento"], $_POST["ram"], $_POST["gabinete"]) ){

      //traspasamos a variables locales, para evitar complicaciones con las comillas:
     // $usuario = $_POST["usuario"];
      //$contrasena = $_POST["contrasena"];
    
      $sql = "INSERT INTO computadoras (nombre, procesador,tarjetaDeVideo,fuenteDePoder,almacenamiento,ram,gabinete) VALUES (:nombre, :proce,:tarjetaDeVideo,:fuenteDePoder,:almacenamiento,:ram,:gabinete)";
      $stmt = $conn->prepare($sql);
      $stmt->bindParam(':nombre', $_POST['nombre']);
      $stmt->bindParam(':proce', $_POST['procesador']);
      $stmt->bindParam(':tarjetaDeVideo', $_POST['tarjetaDeVideo']);
      $stmt->bindParam(':fuenteDePoder', $_POST['fuenteDePoder']);
      $stmt->bindParam(':almacenamiento', $_POST['almacenamiento']);
      $stmt->bindParam(':ram', $_POST['ram']);
      $stmt->bindParam(':gabinete', $_POST['gabinete']);

      
    
      
    
     if ($stmt->execute()) {
    //  $message = 'Successfully created new user';
  //    header('Location: login.php');
    } else {
     // $message = 'Sorry there must have been an issue creating your account';
     // header('Location: register.html');
    }
 
  }



}

*/

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
  <div class="grilla">
    <header>
      <nav class="menu-container">
        <!-- burger menu -->
        <input type="checkbox" aria-label="Toggle menu" />
        <span></span>
        <span></span>
        <span></span>


        <!-- menu items -->
        <div class="menu">
          <ul>
            <li>
              <a href="index.php">
                Principal
              </a>
            </li>
            <li>
              <a href="#">
                Pc's
              </a>
            </li>
            <li>
              <a href="agregar.php">
                Agregar Pc
              </a>
            </li>
          </ul>
          <ul>
            <li>
            <a href="../php/logout.php">
                Salir
              </a>
            </li>
          </ul>
        </div>
      </nav>



    </header>
    <main>
      <form action="agregar.php" method="POST" id="form" enctype="multipart/form-data">
        <input placeholder="nombre" id="nombre" type="text" name="nombre">

        <input placeholder="Placa Madre" id="placaMadre" type="text" name="placaMadre">


        <input placeholder="Procesador" id="procesador" type="text" name="procesador">


        <input placeholder="Tarjeta de video" id="tarjetaDeVideo" type="text" name="tarjetaDeVideo">


        <input placeholder="Fuente de poder" id="fuenteDePoder" type="text" name="fuenteDePoder">

        <input placeholder="Almacenamiento" id="almacenamiento" type="text" name="almacenamiento">


        <input placeholder="Ram" id="ram" type="text" name="ram">


        <input placeholder="Gabinete" id="gabinete" type="text" name="gabinete">

        <input id="file" type="file" accept=".jpg,.png,.gif" name="foto">
        <div class="botonera">
          <input id="add" class="add" type="button" value="Agregar">

          <input class="deny" type="reset" value="Eliminar">
        </div>



      </form>


    </main>

    <footer class="footer-distributed">

      <div class="footer-right">

        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-linkedin"></i></a>
        <a href="#"><i class="fa fa-github"></i></a>

      </div>

      <div class="footer-left">

        <p class="footer-links">
          <a class="link-1" href="#">Inicio</a>

          <a href="#">Nosotros</a>

          <a href="#">Perfil</a>

          <a href="#">Contacto</a>

          <a href="#">Ayuda</a>
        </p>

        <p>PcShare &copy; 2022</p>
      </div>

    </footer>

  </div>
  <script src="../js/scriptAgregar.js"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>


</html>