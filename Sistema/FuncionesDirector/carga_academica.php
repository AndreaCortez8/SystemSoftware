<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Responsive Sidebar Menu</title> -->
    
    <link rel="stylesheet" href="../../Estilo_imagenes/style.css">
    <link rel="stylesheet" href="../../Carga/bootstrap.css">
    
    <script src="https://kit.fontawesome.com/cb9682479c.js" crossorigin="anonymous"></script>
    <title>Funciones de Directores</title>
    <link rel="icon" href="../../Estilo_imagenes/LOGOINFO.png">
  </head>

<header class="header">
        <div class="header__superior">
            <div class="logo">
                <img src="../../Estilo_imagenes/UNSAAC.png" alt="">
            </div>
            <div class="content">
                <center> <h1>Departamento Academico de: <br><span>Ingeniería Informática y de Sistemas</span> <br>  <br><h4> Acreditado por ICACIT</h4>  </center></h1>
            </div>
            <div class="logo2">
                <img src="../../Estilo_imagenes/LOGOINFO.png" alt="">
            </div>
        </div>
</header>

<body>

<?php  include('menu_funciones_director.php');  ?>
<section>
<div class="container">
<br>


 <div class="row">
 <div class="col-md-7">
      <form action="carga.php" method="POST" enctype="multipart/form-data"/>
        <div class="file-input text-center">
            <input  type="file" name="carga_academica" id="file-input" class="file-input__input"/>
            <label class="file-input__label" for="file-input">
              <i class="zmdi zmdi-upload zmdi-hc-2x"></i>
              <span>Elegir Archivo Excel</span></label
            >
          </div>
      <br>
      <div class="text-center mt-5">
          <input type="submit" name="subir" class="btn-enviar" value="Subir Excel"/>
      </div>
      </form>
    </div>

    <div class="col-md-5">
  <?php
  
  include('../database.php');
  $sqlCarga = ("SELECT A.codigo_curso, B.nombres_asignatura, B.creditos, A.tipo, B.grupo, A.dia, A.hora_inicio, A.hora_fin, A.id_aula, C.capacidad, A.docente FROM tcarga_academica A LEFT JOIN tasignaturas B ON A.codigo_curso = B.codigo_curso LEFT JOIN taulas C ON A.id_aula = C.cod_aula ORDER BY id ASC");
  $queryData   = mysqli_query($conn, $sqlCarga);
  $total_client = mysqli_num_rows($queryData);
  ?>
      <div class="outer-wrapper">
      <div class="table-wrapper">
        <table>
          <thead>
            <tr>
              <th>Nº</th>
               <th>Codigo</th>
              <th>Asignatura</th>
              <th>Cred.</th>
              <th>Tipo</th>
              <th>Grupo</th>
              <th>Día</th>
              <th>HR/Inicio</th>
              <th>HR/Fin</th>
              <th>Aula</th>
              <th>Aforo</th>
              <th>Docente</th>
            </tr>
          </thead>
          <tbody>
            <?php 
            $i = 1;
            while ($data = mysqli_fetch_array($queryData)) { ?>
            <tr>
              <td scope="row"><?php echo $i++; ?></td>
              <td><?php echo $data['codigo_curso']; ?></td>
              <td><?php echo $data['nombres_asignatura']; ?></td>
              <td><?php echo $data['creditos']; ?></td>
              <td><?php echo $data['tipo']; ?></td>
              <td><?php echo $data['grupo']; ?></td>
              <td><?php echo $data['dia']; ?></td>
              <td><?php echo $data['hora_inicio']; ?></td>
              <td><?php echo $data['hora_fin']; ?></td>
              <td><?php echo $data['id_aula']; ?></td>
              <td><?php echo $data['capacidad']; ?></td>
              <td><?php echo $data['docente']; ?></td>
            </tr>
          <?php } ?>
          </tbody>
        </table>

    </div>
  </div>

</div>
</section>
<script src="js/jquery.min.js"></script>
<script src="'js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $(window).load(function() {
            $(".cargando").fadeOut(1000);
        });      
});
</script>
</body>
</html>
