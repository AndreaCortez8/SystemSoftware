<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Responsive Sidebar Menu</title> -->
    <link rel="stylesheet" href="../../Estilo_imagenes/style_menu_lateral.css">
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

<?php  include('menu_funciones_administrativo.php');  ?>

<section>
<div class="container">

<br>


 <div class="row">
 <div class="col-md-7">
      <form action="subir_planaDirectiva.php" method="POST" enctype="multipart/form-data"/>
        <div class="file-input text-center">
            <input  type="file" name="subir_planaDirectiva" id="file-input" class="file-input__input"/>
            <label class="file-input__label" for="file-input">
              <i class="zmdi zmdi-upload zmdi-hc-2x"></i>
              <span>Elegir Archivo Excel</span></label>
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
  $sqlCarga = ("SELECT nombres_apellidos_director,email,dni FROM tdirector ORDER BY id ASC");
  $queryData   = mysqli_query($conn, $sqlCarga);
  $total_client = mysqli_num_rows($queryData);
  ?>

      <div class="outer-wrapper">
      <div class="table-wrapper">
      <table>
          <thead>
            <tr>
              <th>Nº</th>
               <th>Nombre Director</th>
              <th>Correo Institucional</th>
              <th>DNI</th>
            </tr>
          </thead>
          <tbody>
            <?php 
            $i = 1;
            while ($data = mysqli_fetch_array($queryData)) { ?>
            <tr>
              <td scope="row"><?php echo $i++; ?></td>
              <td><?php echo $data['nombres_apellidos_director']; ?></td>
              <td><?php echo $data['email']; ?></td>
              <td><?php echo $data['dni']; ?></td>
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