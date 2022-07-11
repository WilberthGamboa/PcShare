

<?php
//PC DE CADA USUARIO (TODA);
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

        <div class="buscador">
            <form class="flex-form">
              <label for="from">
                <i class="ion:location"></i>
              </label>
              <input type="search" placeholder="Busca en la pagina" id="texto">
              <input type="button" value="Search" id="prueba">
            </form>
            <br>
            <br>
          </div>
        <main>
         <div  class="container">
            <div class="row">
                <div class="col">
                    <table id="table" class="table">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Procesador</th>
                                <th>Placa Madre</th>
                                <th>Tarjeta de Video</th>
                                <th>Fuente de Poder</th>
                                <th>Almacenamiento</th>
                                <th>Ram</th>
                                <th>Gabinete</th>
                                <th>Imagen</th>
                                <th>Editar</th>
                                <th>Borrar</th>

                            </tr>
                        </thead>
                        <tbody id="body">

                        </tbody>
                    </table>
                               

                </div>

            </div>

         </div>
            <div id="contenido">
               
     
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
    <!--
    <input type="button" id="prueba" value="xdxdxd">
    <input type="text" name="" id="texto">
-->

</body>
<script src="../js/ajaxMiPc.js"></script>
<link rel="stylesheet" href="../css/nav.css">
  <link rel="stylesheet" href="../css/carrusel.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../css/index.css">
  <link rel="stylesheet" href="../css/footer.css">
  <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</html>