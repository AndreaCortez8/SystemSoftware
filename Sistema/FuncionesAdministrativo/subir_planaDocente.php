<?php
  require('../database.php');
  $tipo       = $_FILES['subir_planaDocente']['type'];
  $tamanio    = $_FILES['subir_planaDocente']['size'];
  $archivotmp = $_FILES['subir_planaDocente']['tmp_name'];
  $lineas     = file($archivotmp);

  $i = 0;
  
  foreach ($lineas as $linea) {
      $cantidad_registros = count($lineas);
      $cantidad_regist_agregados =  ($cantidad_registros - 1);

      if ($i != 0) {
          $datos                        = explode(";", $linea);
          $codigo_docente               = !empty($datos[0])  ? ($datos[0]) : '';
          $nombres_apellidos_docente    = !empty($datos[1])  ? ($datos[1]) : '';
          $email                        = !empty($datos[2])  ? ($datos[2]) : '';
          $dni                          = !empty($datos[3])  ? ($datos[3]) : '';
          
        
  if( !empty($dni) ){
      $check_duplicidad = ("SELECT dni FROM tdocentes WHERE dni ='".($dni )."' ");
        $ca_dupli = mysqli_query($conn, $check_duplicidad);
        $cant_duplicidad = mysqli_num_rows($ca_dupli);
    }   

  //Si No existe Registros Duplicados
  if ( $cant_duplicidad == 0 ) { 

    $insertarData = "INSERT INTO tdocentes(
      codigo_docente,
      nombres_apellidos_docente,
      email,
      dni
    ) VALUES(
      '$codigo_docente',
      '$nombres_apellidos_docente',
      '$email',
      '$dni'
    )";
    mysqli_query($conn, $insertarData);
  } 
  
  /**Caso Contrario actualizo el o los Registros ya existentes*/
  else{
      $updateData =  ("UPDATE tdocentes SET 
          codigo_docente                ='" .$codigo_docente. "',
          nombres_apellidos_docente     ='" .$nombres_apellidos_docente. "',
          email                         ='" .$email. "',
          dni                           ='" .$dni. "' 
          WHERE dni                     ='".$dni."'
      ");
      $result_update = mysqli_query($conn, $updateData);
      }
    }

  $i++;
  }
  echo '<p style="text-aling:center; color:#333;">Total de Registros: '. $cantidad_regist_agregados .'</p>';

?>

<a href="interfaz_subir_planaDocente.php">Atras</a>