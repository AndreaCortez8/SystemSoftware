<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Responsive Sidebar Menu</title> -->
    <link rel="stylesheet" href="../../Estilo_imagenes/style_menu_lateral.css">
    <link rel="stylesheet" href="../../Estilo_imagenes/style.css">
  </head>

<body>
<input type="checkbox" id="check">
    <label for="check">
      <i class="fas fa-bars" id="btn"></i>
      <i class="fas fa-times" id="cancel"></i>
    </label>
    <div class="sidebar">
      <header>Menú Administrador</header>

      <div id="profile">
        <div id="photo" ALIGN=center><img src="../../Estilo_imagenes/Imagenes/director.png" width="330"lt=""></div>
      </div>
      
      <a href="interfaz_subir_planaDocente.php" class="selected">
        <div class="option">
            <i class="fa fa-table" title="Reporte"></i>
            <span>Plana Docente</span>
        </div>
      </a>

      <a href="interfaz_subir_planaDirectiva.php" class="selected">
        <div class="option">
            <i class="fa fa-users" title="Reporte"></i>
            <span>Plana Directiva</span>
        </div>
      </a>


      <a href="#" class="selected">
        <div class="option">
            <i class="fa fa-right-from-bracket" title="Reporte"></i>
            <span>Cerrar sesión</span>
        </div>
      </a>
    </div>
    
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>
</html>