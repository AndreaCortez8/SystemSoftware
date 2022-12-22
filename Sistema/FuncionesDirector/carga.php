<?php
  require('../database.php');
  $tipo       = $_FILES['carga_academica']['type'];
  $tamanio    = $_FILES['carga_academica']['size'];
  $archivotmp = $_FILES['carga_academica']['tmp_name'];
  $lineas     = file($archivotmp);

  $i = 0;
  
  foreach ($lineas as $linea) {
      $cantidad_registros = count($lineas);
      $cantidad_regist_agregados =  ($cantidad_registros - 1);

      if ($i != 0) {
          $datos          = explode(";", $linea);
          $codigo_carga   = !empty($datos[0])  ? ($datos[0]) : '';
          $codigo_curso   = !empty($datos[1])  ? ($datos[1]) : '';
          $tipo           = !empty($datos[2])  ? ($datos[2]) : '';
          $dia            = !empty($datos[3])  ? ($datos[3]) : '';
          $hora_inicio    = !empty($datos[4])  ? ($datos[4]) : '';
          $hora_fin       = !empty($datos[5])  ? ($datos[5]) : '';
          $id_aula        = !empty($datos[6])  ? ($datos[6]) : '';
          $docente        = !empty($datos[7])  ? ($datos[7]) : '';
        
  if( !empty($codigo_carga) ){
      $check_duplicidad = ("SELECT codigo_carga FROM tcarga_academica WHERE codigo_carga ='".($codigo_carga)."' ");
        $ca_dupli = mysqli_query($conn, $check_duplicidad);
        $cant_duplicidad = mysqli_num_rows($ca_dupli);
    }   

  //No existe Registros Duplicados
  if ( $cant_duplicidad == 0 ) { 

    $insertarData = "INSERT INTO tcarga_academica(
      codigo_carga,
      codigo_curso,
      tipo,
      dia,
      hora_inicio,
      hora_fin,
      id_aula,
      docente
    ) VALUES(
      '$codigo_carga',
      '$codigo_curso',
      '$tipo',
      '$dia',
      '$hora_inicio',
      '$hora_fin',
      '$id_aula',
      '$docente'
    )";
    mysqli_query($conn, $insertarData);
  } 
  
  /**Caso Contrario actualizo el o los Registros ya existentes*/
  else{
      $updateData =  ("UPDATE tcarga_academica SET 
          codigo_carga  ='" .$codigo_carga. "',
          codigo_curso  ='" .$codigo_curso. "',
          tipo          ='" .$tipo. "',
          dia           ='" .$dia. "',
          hora_inicio   ='" .$hora_inicio. "',
          hora_fin      ='" .$hora_fin. "',
          id_aula       ='" .$id_aula. "',
          docente       ='" .$docente. "'  
          WHERE codigo_carga='".$codigo_carga."'
      ");
      $result_update = mysqli_query($conn, $updateData);
      }
    }

  $i++;
  }
  echo '<p style="text-aling:center; color:#333;">Total de Registros: '. $cantidad_regist_agregados .'</p>';

?>

<a href="carga_academica.php">Atras</a>