<?php
  session_start();

  require '../php/database.php';
 // require '../php/database2.php';

  $stmt=$conn->prepare("SELECT * FROM componentes");
  $stmt->execute();

  if (isset($_SESSION['user_id'])) {
  
    if (isset($_POST["nombre"], $_POST["placaMadre"],$_FILES['foto']['name'], $_POST["procesador"], $_POST["tarjetaDeVideo"], $_POST["fuenteDePoder"], $_POST["almacenamiento"], $_POST["ram"], $_POST["gabinete"])and $_POST["nombre"]!="" and $_POST["procesador"]!="" and $_POST["placaMadre"]!="" and $_POST["tarjetaDeVideo"]!="" and $_POST["fuenteDePoder"]!="" and $_POST["almacenamiento"]!="" and $_POST["ram"]!="" and $_POST["gabinete"]!="" ){


      $stmt=$conn->prepare("INSERT INTO computadoras (nombre, placaMadre,procesador, tarjetaDeVideo, fuenteDePoder,almacenamiento,ram,gabinete,imagen)values(:a,:b,:c,:d,:e,:f,:g,:h,:i)");
      $stmt->bindParam(':a', $_POST['nombre']);
      $stmt->bindParam(':b', $_POST['placaMadre']);
      $stmt->bindParam(':c', $_POST['procesador']);
      $stmt->bindParam(':d', $_POST['tarjetaDeVideo']);
      $stmt->bindParam(':e', $_POST['fuenteDePoder']);
      $stmt->bindParam(':f', $_POST['almacenamiento']);
      $stmt->bindParam(':g', $_POST['ram']);
      $stmt->bindParam(':h', $_POST['gabinete']);
      //NOMBRE ARCHIVO
      $nombre_archivo = $_FILES['foto']['name']; //Obteniendo el nombre del archivo
      $ruta_destino = "../fotospc/";
      
      //$_SERVER['DOCUMENT_ROOT'] = la carpeta raiz donde esta el proyecto
      $carpeta_destino=$_SERVER['../fotospc/'] . $ruta_destino;
      
      //Movemos el archivo al directorio temp al directorio deseado.
      
      move_uploaded_file($_FILES['foto']['tmp_name'], $carpeta_destino . $nombre_archivo);
         $cargarAvatar=($_FILES['foto']['tmp_name']);//carga el archivo

        echo  "$nombre_archivo";




      $stmt->bindParam(':i',$nombre_archivo);

      
   

      $stmt->execute();
        //NUEVO CODIGO
      $nombre =$_POST["nombre"];
      //$nombre=mysql_real_escape_string($nombre);
     // SELECT `id` FROM `computadoras` WHERE nombre LIKE 'loren';
     /*

     $stmt = $pdo->query("SELECT * FROM users ORDER BY id DESC LIMIT 1");
     $user = $stmt->fetch();
     */
      $stmt=$conn->prepare("SELECT * FROM `computadoras` WHERE `nombre` LIKE '$nombre'");
      $stmt->execute();

      while ($row = $stmt->fetch()) {
        $idComputadora= $row['id'];
    }
     // $idComputadora = $stmt;
      $idUsuario = $_SESSION['user_id'];

     // INSERT INTO `propiedad`(`idUsuario`, `idPc`) VALUES ('[value-1]','[value-2]')

     $stmt=$conn->prepare("INSERT INTO propiedad (idUsuario,idPc) VALUES ($idUsuario,$idComputadora)");
     $stmt->execute();
      //AQUI CREAMOS CONSULTA 

      header('Location: agregar.php');


    } else {
      
   
    }
  
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
        <input placeholder="Nombre" id="nombre" type="text" name="nombre">
        <input placeholder="Placa Madre" id="placaMadre" type="text" name="placaMadre">
        <input placeholder="Procesador" id="procesador" type="text" name="procesador">
        <select name="tarjetaDeVideo" id="tarjetaDeVideo">
        <p><?php foreach($stmt as $r) {
            echo "<option value=".$r[0].">".$r[0]."</option>";
          } ?>
        </select></p>
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