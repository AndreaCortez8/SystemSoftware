<?php

  require 'database.php';

  $message = '';
  $message1 = '';
  $message2 = '';
  $message3 = '';
  $message4 = '';

  //Función para buscar email's repetidos
  function buscaRepetido($email,$conn){
    $sql = "SELECT * FROM tdirector where email = '$email'";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
      return 1;
    }else{
      return 0;
    }
  }

  function evitarDuplicados($email,$conn){
    $sql = "SELECT * FROM registro_director where email = '$email'";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
      return 1;
    }else{
      return 0;
    }
  }

  
  if (!empty($_POST['email_director']) && !empty($_POST['password']) && !empty($_POST['confirm_password'])) {
    if(evitarDuplicados($_POST["email_director"],$conn) == 0){
      if(buscaRepetido($_POST["email_director"],$conn) == 1){
        if($_POST['password'] == $_POST['confirm_password']){
          $email = $_POST['email_director'];
          $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
          $query = "INSERT INTO registro_director (email,password) VALUES ('$email','$password')";
          $ejecutar = mysqli_query($conn,$query);
          if ($ejecutar) {
            $message2 = 'Cuenta creada con éxito';
          }else {
            $message = 'Error';
          }
        }else {
          $message = 'Las contraseñas no coinciden, vuelva a intentarlo';
        }
      }else{
        $message3 = 'Este correo no esta autorizado para el sistema';
      }
    }else{
      $message4 = 'Este correo ya está registrado, intenta con otro diferente';
    }
  }else{
    //echo "<script>alert('Sorry, those credentials do not match')</script>";
    $message1 = 'Es obligatorio llenar todos los campos';
   
  }

?>

<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="../Estilo_imagenes/style.css">
    <title>Registro de directores</title>
    <link rel="icon" href="../Estilo_imagenes/LOGOINFO.png">
  </head>
  <body>

    <?php require '../partials/header.php' ?>

    <div class="container">
        <div class="my-container">
          <div class="form2">
            <form action="registro_director.php" method="POST">
              <h2>Crear cuenta nueva</h2>

              <font color="#FBA312"><?php if(!empty($message1)): ?>
                <p> <?= $message1 ?></p>
              <?php endif; ?></font>
              
              <font color="#FB071D"><?php if(!empty($message)): ?>
              <p> <?= $message ?></p>
              <?php endif; ?></font>

              <font color="#FEDC00"><?php if(!empty($message2)): ?>
              <p> <?= $message2 ?></p>
              <?php endif; ?></font>

              <font color="#FB071D"><?php if(!empty($message3)): ?>
              <p> <?= $message3 ?></p>
              <?php endif; ?></font>

              <font color="#FB071D"><?php if(!empty($message4)): ?>
              <p> <?= $message4 ?></p>
              <?php endif; ?></font>

              <input name="email_director" type=text placeholder="Ingrese su correo:" value = "<?php if(isset($_POST['email_director']) && !$message2) echo $_POST['email_director'] ?>">
              <input name="password" type="password" placeholder="Ingrese su contraseña:">
              <input name="confirm_password" type="password" placeholder="Confirme su contraseña:"><br><br>
              <button class="btnn" type="submit" value="Acceder">Registrar<a href="#"></a></button><br><br>

              <p class="link">Si usted ya tiene una cuenta<br>
              <a href="login_director.php">Inicie sesión </a> aqui</p>
            </form>
          </div>
              
        </div>
    </div>

    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <script type="text/javascript" src="evitar_reenvio.js"></script>

  </body>
</html>

