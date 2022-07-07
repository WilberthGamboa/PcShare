<?php
  session_start();

  require '../php/database.php';

  if (isset($_SESSION['user_id'])) {
    /*
    $records = $conn->prepare('SELECT id, nombre, pass FROM usuarios WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;
    
    if (count($results) > 0) {
      $user = $results;
      
    }
    */
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
      <form action="">
        <input placeholder="nombre" id="nombre" type="text">

        <input placeholder="Placa Madre" id="placaMadre" type="text">


        <input placeholder="Procesador" id="procesador" type="text">


        <input placeholder="Tarjeta de video" id="tarjetaDeVideo" type="text">


        <input placeholder="Fuente de poder" id="fuenteDePoder" type="text">

        <input placeholder="Almacenamiento" id="almacenamiento" type="text">


        <input placeholder="Ram" id="ram" type="text">


        <input placeholder="Gabinete" id="gabinete" type="text">

        <input id="file" type="file" accept=".jpg,.png,.gif">
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
  <script src="/js/scriptAgregar.js"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>


</html>