//PERMITE EDITAR UN REGISTRO EN LA BD
<?php
  session_start();

  require '../php/database.php';


  $stmt=$conn->prepare("SELECT * FROM componentes");
  $stmt->execute();

  if (isset($_SESSION['user_id'])) {


  
    if (isset($_POST["nombre"], $_POST["placaMadre"],$_FILES['foto']['name'], $_POST["procesador"], $_POST["tarjetaDeVideo"], $_POST["fuenteDePoder"], $_POST["almacenamiento"], $_POST["ram"], $_POST["gabinete"])and $_POST["nombre"]!="" and $_POST["procesador"]!="" and $_POST["placaMadre"]!="" and $_POST["tarjetaDeVideo"]!="" and $_POST["fuenteDePoder"]!="" and $_POST["almacenamiento"]!="" and $_POST["ram"]!="" and $_POST["gabinete"]!="" ){
     $computadora = $_POST['id'];

      $stmt = $conn->prepare("UPDATE computadoras SET  `nombre`=:nombre, `placaMadre`=:placaMadre, `procesador`=:procesador,`tarjetaDeVideo`=:tarjetaDeVideo, `fuenteDePoder`=:fuenteDePoder, `almacenamiento`=:almacenamiento,`ram`=:ram,`gabinete`=:gabinete,`imagen`=:imagen WHERE id=$computadora" );
      $stmt->bindParam(':nombre', $_POST['nombre']);
      $stmt->bindParam(':placaMadre', $_POST['placaMadre']);
      $stmt->bindParam(':procesador', $_POST['procesador']);
      $stmt->bindParam(':tarjetaDeVideo', $_POST['tarjetaDeVideo']);
      $stmt->bindParam(':fuenteDePoder', $_POST['fuenteDePoder']);
      $stmt->bindParam(':almacenamiento', $_POST['almacenamiento']);
      $stmt->bindParam(':ram', $_POST['ram']);
      $stmt->bindParam(':gabinete', $_POST['gabinete']);


      $nombre_archivo = $_FILES['foto']['name']; //Obteniendo el nombre del archivo
      $ruta_destino = "../fotospc/";
      
      //$_SERVER['DOCUMENT_ROOT'] = la carpeta raiz donde esta el proyecto
      $carpeta_destino=$_SERVER['../fotospc/'] . $ruta_destino;
      
      //Movemos el archivo al directorio temp al directorio deseado.
      move_uploaded_file($_FILES['foto']['tmp_name'], $carpeta_destino . $nombre_archivo);
      $cargarAvatar=($_FILES['foto']['tmp_name']);//carga el archivo
      $stmt->bindParam(':imagen',$nombre_archivo);
      $stmt->execute();
      echo "<script languaje='javascript' type='text/javascript'>window.close();</script>";

    } else {
      
   
    }
  
  }else{
    header('Location: editar.php');
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

  <script>
window.onload = function() {
    text = localStorage.getItem("json");
     hola =JSON.parse(text);
     
     const id = document.createElement("input");
     id.type="hidden";
     id.value=hola;
     id.name="id";

     const form = document.getElementById("form");
     form.appendChild(id);

};
  </script>
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
    <form action="editar.php" method="POST" id="form" enctype="multipart/form-data">
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