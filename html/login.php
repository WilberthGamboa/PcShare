<?php

  session_start();

  if (isset($_SESSION['user_id'])) {
    header('Location: login.php');
  }
  require '../php/database.php';

  if (!empty($_POST['usuario']) && !empty($_POST['contrasena'])) {
    $records = $conn->prepare('SELECT id, nombre, pass FROM usuarios WHERE nombre = :usuario');
    $records->bindParam(':usuario', $_POST['usuario']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $message = '';

    if (count($results) > 0 && password_verify($_POST['contrasena'], $results['pass'])) {
      $_SESSION['user_id'] = $results['id'];
      header("Location: index.html");
    } else {
      $message = 'Sorry, those credentials do not match';
    }
  }

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/normalize.css">
  <link rel="stylesheet" href="../css/nav.css">
  <link rel="stylesheet" href="../css/styleLogin.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../css/footer.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Login</title>
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
          <div class="title"><span>Iniciar Sesión</span></div>
          <form action="login.php" method="POST">
            <div class="row">
              <input type="text" placeholder="Usuario" id="usuario"  name="usuario" required>
            </div>
            <div class="row">

              <input type="password" placeholder="Constraseña" id="contrasena" name="contrasena" required>
            </div>

            <div class="row button">
              <input type="submit" value="Iniciar Sesión">
            </div>
            <div class="signup-link"> <a href="register.php">Registrase</a></div>
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
</body>

</html>