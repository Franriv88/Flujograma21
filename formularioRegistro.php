<?php

if(isset($_POST["enviar"])){
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirmacionPass = $_POST['confirmacionPass'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="formulario">
      <h1>Formulario de Registro</h1>
        <form action="<?php echo
        htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post"> 
            <div class="input-group">
                <input class="input" type="text" placeholder="First Name" name="nombre" autocomplete="off">
                <input class="input" type="text" placeholder="Last Name" name="apellido" autocomplete="off"><br>
                <input class="input" type="email" placeholder="nombre@flujograma.com" name="email" autocomplete="off"><br>
                <input class="input" type="password" placeholder="Set a Password" name="password" autocomplete="off">
                <input class="input" type="password" placeholder="Confirm Password" name="confirmacionPass" autocomplete="off"><br>
            </div>
            <div>
                <p><input type="submit" name="enviar"></p>  
                <?php
                    include("validarFormulario.php"); //esto nos trae el código del archivo formulario.php
                ?>  
                    <div class="parrafo2">
                        <p>¿Ya estás registrado? <a href="index.php"> Iniciar Sesión</a></p>
                    </div>
            </div>
            
            
        </form>
    </div>

   

</body>
</html>
