<?php
//Declarar las variables en donde se guardaran los valores de la conexion
$servidor ="localhost";
$usuario ="root";
$password ="";
$bd ="musica";
$conecta =mysqli_connect($servidor, $usuario, $password, $bd);
if($conecta->connect_error){
    die("Error al conectar la base de datos de la pag".$conecta->connect_error);
}
else{
    echo "Conexion exitosa";
}
?>