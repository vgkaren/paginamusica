<?php 
error_reporting (0);
//Lamar a la conexion de base de datos
include 'includes/conecta.php';
if(isset($_POST['entrar'])){
$user ='akaren';
$contra='12345';
$ruser= $_POST['usuario'];
$rpass= $_POST['pass'];
if($user == $ruser && $contra == $rpass){
$mensaje.="<div class='alert alert-success alert-dismissible fade show' role='alert'>
  <strong>Tu muy bien</strong> Tus datos son correctos
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'>
      <span aria-hidden=''true'>&times;</span>
  </button>
</div>";
}
else{
    $mensaje.="<div class='alert alert-danger alert-dismissible fade show' role='alert'>
  <strong>Tu muy mal</strong> Tus datos son incorrectos
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'>
      <span aria-hidden=''true'>&times;</span>
  </button>
</div>";
}
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/fontello.css">
    <link rel="stylesheet" type="text/css" href="css/preloader.css"> 
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <script src="js/bootstrap.js"></script>
    <title>Login de Usuario</title>
</head>
<body>
    <div class="container py-4">
      <div class="row justify-content-center h-199 py-4">
        <div class="card col-sm-6 col-md-6 col-lg-6 shadow-lg p-3 mb-5 bg-white rounded">
            <article class="card-body">
                <h4 class="card-title text-center">Login del sistema</h4>
                <hr>
                <p class="text-succes text-center">Digita tu credencial</p>
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <div class="form-group">
                        <div class="input-group">
                            <input type="text" name="usuario" placeholder="Usuario" class="form-control">
                        </div>
                        <div class="input-group py-2">
                            <input type="password" name="pass" placeholder="Password" class="form-control">
                        </div>
                        <div class="input-group">
                            <input type="submit" name="entrar" value="Entrar" class="btn btm-ms btn-success btn-block">
                        </div>
                    </div>
                </form>
            </article>
        </div>
        <?php echo $mensaje ?>
      </div>
    </div>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/preloader.js"></script>
    <script src="js/main.js"></script>
</body>
</html>