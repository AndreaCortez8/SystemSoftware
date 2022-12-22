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
      <header>Menú Director</header>

      <div id="profile">
        <div id="photo" ALIGN=center><img src="../../Estilo_imagenes/director.png" width="330"lt=""></div>
      </div>
      
      <a href="carga_academica.php" class="selected">
        <div class="option">
            <i class="fa fa-table" title="Reporte"></i>
            <span>Carga Académica</span>
        </div>
      </a>

      <a href="#" class="selected">
        <div class="option">
            <i class="fa fa-users" title="Reporte"></i>
            <span>Plana Docente</span>
        </div>
      </a>

      <a href="#" class="selected">
        <div class="option">
            <i class="fa fa-graduation-cap" title="Reporte"></i>
            <span>Reportes Académicos</span>
        </div>
      </a>

      <a href="#" class="selected">
        <div class="option">
            <i class="fa fa-briefcase" title="Reporte"></i>
            <span>Reportes Administrativos</span>
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