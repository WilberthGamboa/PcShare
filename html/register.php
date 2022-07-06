<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "usuarios";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}


//Validamos que hayan llegado estas variables, y que no esten vacias:
if (isset($_POST["usuario"], $_POST["contrasena"]) and $_POST["usuario"] !="" and $_POST["contrasena"]!=""){

  //traspasamos a variables locales, para evitar complicaciones con las comillas:
  $usuario = $_POST["usuario"];
  $contrasena = $_POST["contrasena"];

  echo $usuario;
  //Preparamos la orden SQL
  $sql = "INSERT INTO usuarios
  (id,nombre,pass) VALUES (NULL,'$usuario','$contrasena')";
  
  //Aqui ejecutaremos esa orden
  if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";

    //SI ES CORRECTO 
    header('Location: login.html');
    
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

  } else {
  
  echo '<p>Por favor, complete el <a href="formulario.html">formulario</a></p>';
  }

  mysqli_close($conn);
?>





<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>Register</title>
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
              <a href="#home">
                Principal
              </a>
            </li>
            <li>
              <a href="#">
                Pc's
              </a>
            </li>
            <li>
              <a href="#pricing">
                Agregar Pc
              </a>
            </li>
          </ul>
          <ul>
            <li>
              <a href="#signup">
                Salir
              </a>
            </li>
          </ul>
        </div>
      </nav>


    </header>

    <main>
      <div class="container">
        <div class="wrapper">
          <div class="title"><span>Registro</span></div>
          <form action="register.php" method="POST" name="form">
            <div class="row">
              <input type="text" placeholder="Usuario" name="usuario" id="usuario" required>
            </div>
            <div class="row">

              <input type="password" placeholder="Contraseña" name="contrasena" id="contrasena"  required>
            </div>

            <div class="row button">
              <input type="button" value="Registrar" id="registro">
            </div>
            <div class="signup-link"> <a href="/html/login.html">Iniciar Sesión</a></div>
          </form>
        </div>
      </div>

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
  <link rel="stylesheet" href="../css/normalize.css">
  <link rel="stylesheet" href="../css/styleLogin.css">
  <link rel="stylesheet" href="../css/nav.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../css/footer.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!--   SCRIPTS -->
  <script src="../js/registro.js"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>

