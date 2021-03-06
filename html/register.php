

<?php
//PERMITE REGISTRO USUARIOS
require '../php/database.php';

$message = '';


//Validamos que hayan llegado estas variables, y que no esten vacias:
if (isset($_POST["usuario"], $_POST["contrasena"]) and $_POST["usuario"] !="" and $_POST["contrasena"]!=""){

  

  $sql = "INSERT INTO usuarios (nombre, pass) VALUES (:nombre, :pass)";
  $stmt = $conn->prepare($sql);
  $stmt->bindParam(':nombre', $_POST['usuario']);
  $password = password_hash($_POST['contrasena'], PASSWORD_BCRYPT);
  $stmt->bindParam(':pass', $password);

  

 if ($stmt->execute()) {
  
  header('Location: login.php');
} else {

  header('Location: register.html');
}
  } else {
  
  
  }

 
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
                  <a href="index.php">
                    Principal
                  </a>
                </li>
                <li>
                  <a href="misPc.php">
                    Mis Pc
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
      <div class="container">
        <div class="wrapper">
          <div class="title"><span>Registro</span></div>
          <form action="register.php" method="POST" name="form">
            <div class="row">
              <input type="text" placeholder="Usuario" name="usuario" id="usuario" required>
            </div>
            <div class="row">

              <input type="password" placeholder="Contrase??a" name="contrasena" id="contrasena"  required>
            </div>

            <div class="row button">
              <input type="button" value="Registrar" id="registro">
            </div>
            <div class="signup-link"> <a href="login.php">Iniciar Sesi??n</a></div>
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

