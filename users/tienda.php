<?php
  session_start();
  include("../con_bd.php");
  $nombre;

  if(isset($_SESSION['id'])){
      $id_usuario = $_SESSION['id'];
      $consulta = "SELECT * FROM registros WHERE id_user = '$id_usuario'";
      $resultado = mysqli_query($conex, $consulta);

            if ($resultado) {
                while ($row = $resultado -> fetch_array()) {
                    //Obtenemos el nombre del usuario que ha iniciado sesion
                    $nombre = $row['nombre'];
                }
            }
  }else{
    header("Location: ../vista.php");
  }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda - Benja Lazarte</title>
    <link rel="icon" href="img/tienda/navaja.jpg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
</head>
<body class="bg-dark">
<!--HEADER / LOGO / NAVEGADOR-->
    <header>
          <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
           <div class="container-fluid">

              <a class="navbar-brand logo__a" href="index.php">
                <img src="img/logo.png" alt="Logo"  class="d-inline-block align-text-top logo">
              </a>

              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse header__item" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="tienda.php">Tienda</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="sobremi.php">Sobre mí</a>
                  </li>
                   <li class="nav-item">
                    <a class="nav-link" href="contacto.php">Contacto</a>
                  </li>

                  <li class="nav-item dropdown" id="dropdown-list">
                      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Yo
                      </a>
                      <ul class="dropdown-menu dropdown-menu-dark">
                        <li><a href="perfil.php"><i class="fa-regular fa-user"></i> Perfil</a></li>
                        <li><a href="#"><i class="fa-solid fa-circle-info"></i> Ayuda</a></li>
                        <li><a href="../cerrarsesion.php"><i class="fa-solid fa-circle-xmark"></i> Cerrar sesión</a></li>
                      </ul>
                  </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                    <button class="btn btn-outline-light" type="submit">Search</button>
                </form>
              </div>
            </div>
          </nav>
    </header>
<!-- SECTION / CAROUSEL / TIENDA -->
  <section class="container">
    <div id="carouselExampleDark" class="carousel carousel-dark slide " data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner carrusel-tienda carusel-border">
        <div class="carousel-item active" data-bs-interval="5000">
          <img src="img/tienda/carusel.webp" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>¡Aprovecha nuestros super descuentos hasta el 50%!</h5>
          </div>
        </div>
        <div class="carousel-item" data-bs-interval="5000">
          <img src="img/tienda/gorras-carusel.webp" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Venta de gorras Adidas, Nike y Billabong</h5>
            <p>Gorra Billabong<span> $5.200</span> Ahora $4.100</p>
          </div>
        </div>
        <div class="carousel-item" data-bs-interval="5000">
          <img src="img/tienda/curso.webp" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Curso Profesional de Barbero</h5>
            <p>2 Meses<span> $8.200</span> ahora con el 70% de descuento $2.460</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>

  <!-- SECCION / TIENDA -->
  <section class="tienda bg-dark" id="tienda-online"></section>

<!--FOOTER / REDES SOCIALES-->
<footer class="bg-dark footer-redes">
  <div class="footer__div--redes">
      <ul>
        <li><a href="https://api.whatsapp.com/send?phone=541127088361"><i class="fa-brands fa-whatsapp"></i><span> Whatsapp</span></a></li>
        <li><a href="https://www.facebook.com/BenjaCARP2"><i class="fa-brands fa-facebook-square"></i><span> Facebook</span></a></li>
        <li><a href="https://www.instagram.com/benja_laza"><i class="fa-brands fa-instagram"></i><span> Instagram</span></a></li>
        <li><a href="https://twitter.com/BenjaLaza1"><i class="fa-brands fa-twitter"></i><span> Twitter</span></a></li>
      </ul>
  </div>
  <div class="footer-copy">
    <p><i class="fa-solid fa-copyright"></i> Todos los derechos estan reservados 2022</p>
  </div>
  </footer>

    <script src="js/stock.js"></script>
    <script src="js/main.js"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/ffb39b6180.js" crossorigin="anonymous"></script>
  </body>
</html>