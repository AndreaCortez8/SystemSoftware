<?php
/* Metodo para conectar a la Base de Datos */
  define('DB_SERVER', 'localhost');
  define('DB_USERNAME', 'root');
  define('DB_PASSWORD', '');
  define('DB_NAME', 'bdprueba');

  $conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

  if($conn === false){
      die("ERROR EN LA CONEXION" . mysqli_connect_error());
  }
?>
