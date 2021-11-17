<?php

if(isset($_POST["enviar"])){
$nombre = $_POST['usuario'];
$password = $_POST['contraseña'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="contLogin">
          <form action="<?php echo
              htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post"> 
            <img src="" alt="">
              <div class="formulario">
                <h1>Login</h1>
                <div class="input-group">
                  <label for="">User: <br>
                      <input type="text" placeholder="Ingrese su nombre" name="usuario" autocomplete="off"><br>
                  </label>
                  <label for="">Password: <br>
                      <input type="password" placeholder="Ingrese su contraseña" name="contraseña" autocomplete="off"><br>
                  </label>
                </div>
                <div class="botonLogin">
                  <input type="submit" name="enviar">
                  <?php
                    include("validarLogin.php"); //esto nos trae el código del archivo formulario.php
                  ?> 
                </div>
                <div class="parrafo">
                    <p>¿Eres nuevo?<a href="formularioRegistro.php"> Regístrate</a></p>
                </div>
              </div>
        </form>
    </div>


</body>
</html>
