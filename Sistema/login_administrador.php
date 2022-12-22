<?php

  session_start();

  if (isset($_SESSION['user_id'])) {
    header('Location: /sistema-informatica1');
  }
  require 'database.php';

  $message = '';
  $message1 = '';

  //$email = $_POST["email"];
  function buscaRepetido($email,$conn){
    $sql = "SELECT * FROM registro_administrador where email = '$email'";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
      return 1;
    }else{
      return 0;
    }
  }

  if (!empty($_POST['email_administrador']) && !empty($_POST['password'])) {

    $email = $_POST['email_administrador'];
    $password = $_POST['password'];
    $query = mysqli_query($conn,"SELECT * FROM registro_administrador WHERE email = '$email'");
    $filas = mysqli_num_rows($query);
    $buscar_contraseña = mysqli_fetch_array($query);
    

    if(buscaRepetido($email,$conn) == 1){
      if (($filas == 1) && (password_verify($password, $buscar_contraseña['password']))) {
        header("Location: /sistema-informatica1/Sistema/funciones_administrador.php");
      } else {
        $message = '⚠ Contraseña incorrecta';
      }
    }else{
      $message1 = 'El correo ingresado no se encuentra registrado';
    }
    
  }

?>

<!DOCTYPE html>
<html>
  <head>
  <link rel="stylesheet" href="../Estilo_imagenes/style.css">
    <title>Login Docente</title>
    <link rel="icon" href="../Estilo_imagenes/Imagenes/LOGOINFO.png">
  </head>

  <body>
    <?php require '../partials/header.php' ?>

    <div class="container">
        
        <div class="my-container">
          <div class="form">
            <form action="login_administrador.php" method="POST">
              <br><br>
              <h2>Login Docente</h2>
              <input name="email_administrador" type=text placeholder="Ingrese su correo:" value = "<?php if(isset($_POST['email'])) echo $_POST['email'] ?>">
              <input name="password" type="password" placeholder="Ingrese su contraseña:"><br><br>

              <font color="#FB071D"><?php if(!empty($message)): ?>
                <p> <?= $message ?></p>
              <?php endif; ?></font>

              <font color="#FB071D"><?php if(!empty($message1)): ?>
                <p> <?= $message1 ?></p>
              <?php endif; ?></font>
              
              <button class="btnn" type="submit" value="Acceder">Acceder<a href="#"></a></button><br><br><br>
             
            </form>
          </div>
              
        </div>
    </div>

    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
  </body>
</html>