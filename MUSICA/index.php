<?php
//solicitar el arcivo de conexion a la base de datos
include 'includes/conecta.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/fontello.css">
    <link rel="stylesheet" type="text/css" href="css/preloader.css"> 
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <script src="js/bootstrap.js"></script>
    <title>Inicio Miusic Consulta tus canciones favoritas</title>
</head>
<body>
    <!--Inicia el preloader de la pagina web-->
    
    <div id="loader">
       <div class="dot"></div>
       <div class="dot"></div>
       <div class="dot"></div>
   </div>
    <!--Termina el preloader de la pagina web-->
    <!--Inicia el contenido de la web-->

 <div id="contenido">
    <!--Inicia la barra de navegacion-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top" id="menu">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#inicio" aria-controls="inicio" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="inicio">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Somos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Listas</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#Musica Recomendada" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Musica Recomendada
                </a>
                <div class="dropdown-menu" aria-labelledby="Musica Recomendada">
                    <a class="dropdown-item" href="#">Sax</a>
                    <a class="dropdown-item" href="#">Pop</a>
                    <a class="dropdown-item" href="#">Clasica</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Quieres saber mas?</a>
              </li>
              <ul class="navbar-nav ml-auto nav-flex-icons">
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="icon-music"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="icon-share"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="icon-youtube-1"></i>
                    </a>
                </li>
              </ul>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Enterate de mas" aria-label="Search">
              <button class="btn btn-outline-success" type="submit" src="login.php">Inicia Sesion</button>
            </form>
          </div>
        </div>
      </nav>
      <!--Termina barra de navegacion-->
      <div class="container">
    <p class="py-4">La música es una forma de arte y expresión que utiliza sonidos organizados en el tiempo para crear 
      experiencias auditivas que transmiten emociones, ideas y sensaciones. Se compone de elementos fundamentales como 
      el ritmo, la melodía, la armonía y el timbre, y puede ser interpretada a través de instrumentos, la voz humana 
      o tecnologías digitales.</p>
      <img src="img/IMAGENESNEON.avif" alt="">
    <p class="py-4">La música está presente en todas las culturas y épocas de la historia, adaptándose y evolucionando 
      según el contexto social, cultural y tecnológico de cada sociedad. A través de la música, los seres humanos pueden 
      expresar emociones profundas, celebrar, contar historias, establecer conexiones y experimentar el mundo de maneras
      muy personales y universales al mismo tiempo.</p>
      <img src="img/LOGO.avif" alt="Logo">
 </div>
</div>
 <!--Termina el contenido de la web-->
 <script src="js/bootstrap.min.js"></script>
 <script src="js/preloader.js"></script>
 <script src="js/main.js"></script>
</body>
</html>
