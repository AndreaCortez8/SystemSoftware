<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Responsive Sidebar Menu</title> -->
    <link rel="stylesheet" href="../Estilo_imagenes/style_menu_lateral.css">
    <link rel="stylesheet" href="../Estilo_imagenes/style.css">
    <link rel="stylesheet" href="../Carga/bootstrap.css">
    
    <script src="https://kit.fontawesome.com/cb9682479c.js" crossorigin="anonymous"></script>
    <title>Funciones de Docentes</title>
    <link rel="icon" href="../Estilo_imagenes/LOGOINFO.png">
  </head>

  <header class="header">
        <div class="header__superior">
            <div class="logo">
                <img src="../Estilo_imagenes/UNSAAC.png" alt="">
            </div>
            <div class="content">
                <center> <h1>Departamento Academico de: <br><span>Ingeniería Informática y de Sistemas</span> <br>  <br><h4> Acreditado por ICACIT</h4>  </center></h1>
            </div>
            <div class="logo2">
                <img src="../Estilo_imagenes/LOGOINFO.png" alt="">
            </div>
        </div>
    </header>
  
  <body>
  
    <input type="checkbox" id="check">
    <label for="check">
      <i class="fas fa-bars" id="btn"></i>
      <i class="fas fa-times" id="cancel"></i>
    </label>
    <div class="sidebar">
      <header>Menú Docentes</header>

      <div id="profile">
        <div id="photo" ALIGN=center><img src="../Estilo_imagenes/Imagenes/docente.png" width="330"lt=""></div>
      </div>
      
      <a href="#" class="selected">
        <div class="option">
            <i class="fa fa-table" title="Reporte"></i>
            <span>Sílabos</span>
        </div>
      </a>
      
      <a href="#" class="selected">
        <div class="option">
            <i class="fa fa-book" title="Reporte"></i>
            <span>Cursos</span>
        </div>
      </a>

      <a href="#" class="selected">
        <div class="option">
            <i class="fa fa-id-card" title="Reporte"></i>
            <span>Registro de Asistencia</span>
        </div>
      </a>

      <a href="#" class="selected">
        <div class="option">
            <i class="fa fa-clipboard-user" title="Reporte"></i>
            <span>Asistencia de Alumnos</span>
        </div>
      </a>

      <a href="#" class="selected">
        <div class="option">
            <i class="fa fa-right-from-bracket" title="Reporte"></i>
            <span>Cerrar sesión</span>
        </div>
      </a>
    </div>
    <section></section>
    
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>
</html>