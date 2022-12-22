<?php
  session_start();

  require 'Sistema/database.php';

  if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT id, email, password FROM users WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    ///if (count($results) > 0) {
      //$user = $results;
    ///}
    //session_destroy();
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="Estilo_imagenes/style.css">
    <title>Departamento de Informática</title>
    <link rel="icon" href="Estilo_imagenes/Imagenes/LOGOINFO.png">
    <div class="linea"></div>
  </head>
  <body>
    <header class="header">
          <div class="header__superior">
              <div class="logo">
                  <img src="Estilo_imagenes/UNSAAC.png" alt="">
              </div>
              <div class="content">
                  <center> <h1>Departamento Academico de: <br><span>Ingeniería Informática y de Sistemas</span> <br>  <br><h4> Acreditado por ICACIT</h4>  </center></h1>
              </div>
              <div class="logo2">
                  <img src="Estilo_imagenes/LOGOINFO.png" alt="">
              </div>
          </div>
          <div class="container__menu">
              <div class="menu">
                  <nav>
                      <ul>
                          <li><a href="#">Información</a>
                              <ul>
                                  <li><a href="#">Diseño Web</a></li>
                                  <li><a href="#">Diseño Gráfico</a></li>
                                  <li><a href="#">Ordenadores</a></li>
                                  <li><a href="#">Servidores</a></li>
                                  <li><a href="#">Analista</a></li>
                              </ul>
                          </li>
                          <li><a href="#">Nosotros</a></li>
                          <li><a href="#">Cursos</a></li>
                          <li><a href="#">Contactos</a></li>
                      </ul>
                  </nav>
              </div>
          </div>
    </header>
    <div class="container">
        <div class="row">
        <div class="col-md-8 col-md-offset-2">
          
        <div class="my-container">
          <h1>
          
                <h1 > Sistema Academico Docentes </h1>
                    <ul1>
                        <li><a href="Sistema/login_docente.php">• Registro de Asistencia Docentes</a></li>  
                        <li><a href="Sistema/login_docente.php">• Registro de Asistencia Alumnos </a></li>
                        <li><a href="Sistema/login_docente.php">• Realizar y Subir Silabo</a></li>
                    </ul1>
                    
                <h1 >Sistema Academico Directores </h1>
                    
                    <ul1>
                        <li><a href="Sistema/login_director.php">• Generar Reporte Academico</a></li>
                        <li><a href="Sistema/login_director.php">• Generar Reporte Administrativo</a></li>
                        <li><a href="Sistema/login_director.php">• Realizar y Subir Carga Academica</a></li>
            
                    </ul1>

                <h1 >Sistema del Administrador </h1>
                    
                    <ul1>
                        <li><a href="Sistema/login_administrador.php">• Gestionar Plana Docente</a></li>
                        <li><a href="Sistema/login_administrador.php">• Gestionar Plana Directiva</a></li>
            
                    </ul1>
          </h1>
                

            </div>  
        </div>
        </div>
        </div>
    
  </body>
</html>
