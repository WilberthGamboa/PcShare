<?php
  session_start();

  require '../php/database.php';

  if (isset($_SESSION['user_id'])) {
    
  }else{
    header('Location: login.php');
  }
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=}, initial-scale=1.0">
  <link rel="stylesheet" href="../css/nav.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../css/footer.css">
  <link rel="stylesheet" href="../css/styleInfo.css">

  <title>PC1</title>
</head>

<body>
  <div>
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
    <h2 id="nombre">Pc#1 by WilberthGamboa</h2>

    <main>
      <div class="fichaTecnica">
        <div class="foto">
          <img  alt="PC1" id="imagen">
        </div>
        
        <section class="section">
          <table>
            <tr>
              <th>Procesador</th>
              <td id="procesador">Ryzen5</td>
            </tr>
            <tr>
              <th>Memoria RAM</th>
              <td id="ram">8 Gb</td>
            </tr>
            <tr>
              <th>Almacenamiento</th>
              <td id="almacenamiento">500 Gb</td>
            </tr>
            <tr>
              <th>Placa Madre</th>
              <td id="placaMadre">No sepo</td>
            </tr>
            <tr>
              <th>Tarjeta de Video</th>
              <td id="tarjetaDeVideo">GTX 3060 Ti</td>
            </tr>
            <tr>
              <th>Fuente de Poder</th>
              <td id="fuenteDePoder">No sepo</td>
            </tr>
            <tr>
              <th>Gabinete</th>
              <td id="gabinete">No sepo</td>
            </tr>
          </table>
        </section>
        
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
<script src="../js/info.js"></script>
</html>