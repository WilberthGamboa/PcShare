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
  <link rel="stylesheet" href="../css/carrusel.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../css/index.css">
  <link rel="stylesheet" href="../css/footer.css">
  <title>PCSHARE-PaginaPrincipal</title>
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
    <h1 align="center"> Hola <b><?php echo $_SESSION["usuario"]; ?></b> has ingresado <?php echo $_COOKIE[$_SESSION["usuario"]]; ?> veces en la ultima hora</h1>
    <div class="buscador">
      <form class="flex-form">
        <label for="from">
          <i class="ion:location"></i>
        </label>
        <input type="search" placeholder="Busca en la pagina">
        <input type="submit" value="Search">
      </form>
      <br>
      <br>
    </div>
    <main>
      <div class="slide">
        <div class="slide-inner">
          <input class="slide-open" type="radio" id="slide-1" name="slide" aria-hidden="true" hidden="" checked="checked">
          <div class="slide-item">
            <img
              src="https://elektra.vtexassets.com/arquivos/ids/3283641-500-auto?v=637745121354570000&width=500&height=auto&aspect=true">
          </div>
          <input class="slide-open" type="radio" id="slide-2" name="slide" aria-hidden="true" hidden="">
          <div class="slide-item">
            <img src="https://www.cyberpuerta.mx/img/product/L/CP-XTREMEPCGAMING-XTAER516GB2060SM-c4d7bd.jpg">
          </div>
          <input class="slide-open" type="radio" id="slide-3" name="slide" aria-hidden="true" hidden="">
          <div class="slide-item">
            <img src="https://www.cyberpuerta.mx/img/product/L/CP-XTREMEPCGAMING-PGCM-045-1.jpg">
          </div>
          <label for="slide-3" class="slide-control prev control-1">‹</label>
          <label for="slide-2" class="slide-control next control-1">›</label>
          <label for="slide-1" class="slide-control prev control-2">‹</label>
          <label for="slide-3" class="slide-control next control-2">›</label>
          <label for="slide-2" class="slide-control prev control-3">‹</label>
          <label for="slide-1" class="slide-control next control-3">›</label>
          <ol class="slide-indicador">
            <li>
              <label for="slide-1" class="slide-circulo">•</label>
            </li>
            <li>
              <label for="slide-2" class="slide-circulo">•</label>
            </li>
            <li>
              <label for="slide-3" class="slide-circulo">•</label>
            </li>
          </ol>
        </div>
      </div>
    </main>

    <div class="hola">
      <h2>Sobre nosotros</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto totam odio rerum iure? Reprehenderit sint
        quod deserunt assumenda accusamus saepe omnis suscipit excepturi hic, ea libero harum provident, blanditiis
        recusandae.
        Fuga illo recusandae sequi molestias quisquam quis harum, cumque dolorum consequatur distinctio labore
        assumenda, consequuntur dolores cupiditate quaerat minima explicabo alias a doloremque maiores nesciunt
        blanditiis optio qui. Illo, odit.
        Quam vero molestiae tempora voluptate consequatur dolores doloremque, est cupiditate mollitia officia, deserunt
        corporis commodi aut, expedita deleniti itaque iure! Neque odit, ipsum inventore nulla amet pariatur at
        voluptatem voluptatibus!
        Culpa incidunt nesciunt at veritatis natus sunt quo. Consequatur quam eos pariatur deleniti sed in assumenda
        exercitationem, at dolor nulla id, tenetur repellat amet aliquam dicta fugiat debitis error tempora!
        Consectetur, ad consequuntur? Hic ad rerum deleniti quaerat quis ipsam itaque, possimus aliquid officia
        accusamus. Ullam nesciunt vitae modi cum necessitatibus, eum eveniet quas rem, dolore obcaecati ab quis
        doloribus?</p>
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugiat illum facere consequuntur quaerat, repellendus
        eius ut dolorem, reiciendis, voluptates aspernatur animi. Consequatur rerum impedit aliquid veritatis obcaecati
        molestiae repudiandae neque.
        Corrupti consequuntur, autem delectus ea labore vitae illum tenetur. Ducimus fugit debitis nemo accusamus
        deleniti modi nostrum excepturi fuga facilis laborum cum, consectetur non maxime illum officiis similique. In,
        vitae.
        Unde aliquam maxime placeat voluptatem exercitationem eaque dolores ipsum, non nemo voluptate sint, laudantium
        sed. Repudiandae consequuntur est voluptas mollitia nostrum reiciendis velit illo minima porro nam, iusto
        recusandae voluptate!</p>
    </div>

    <div class="contenedor">
      <div class="pcs">
        <img src="https://doto.vtexassets.com/arquivos/ids/204998-300-300?v=637897230662670000&width=300&height=300&aspect=true" alt="pc1">
        <a href="">Ver Pc...</a>
      </div>
    
      <div class="pcs">
        <img src="https://doto.vtexassets.com/arquivos/ids/204998-300-300?v=637897230662670000&width=300&height=300&aspect=true" alt="pc2">
        <a href="">Ver Pc...</a>
      </div>
    
      <div class="pcs">
        <img src="https://doto.vtexassets.com/arquivos/ids/204998-300-300?v=637897230662670000&width=300&height=300&aspect=true" alt="pc3">
        <a href="">Ver Pc...</a>
      </div>   
    </div>

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
