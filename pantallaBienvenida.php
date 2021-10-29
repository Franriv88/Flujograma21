
<?php
        /*es recomendable colocar el session_start();
        al inicio del código, y lugo recibir las
        variables (en este caso con $_POST)*/
    session_start();
    $usuario = $_POST["usuario"];
    $contraseña = $_POST["contraseña"];


    if(isset($_REQUEST["Login"]) && empty($usuario)){
        echo "Debe ingresar un nombre antes de enviar";
        header("Location:index.html");
        die();
        }else if($usuario == "Francisco" && $contraseña == 123){
            $_SESSION["usuario"] = $usuario; //estoy creando una variable de sesión que contiene el nombre del/los usuario(s)
            }else if($usuario == "Hernan" && $contraseña == 456){
                $_SESSION["usuario"] = $usuario;
                }else{
                    echo "Alguna o ambas credenciales son incorrectas";
                    echo "<br>";
                    echo "¿Quiere intentarlo de nuevo?";
                 // header("Location:formularioRegistro.html"); //si las credenciales son inválidas nos redirige al formulario de registro
                die(); //usamos die(); para que la acción finalice acá
                }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="texte/css" href="style.css">
    <title>Document</title>
</head>
<body>
    <h1>BIENVENDIDO! <?php echo $_SESSION["usuario"] ?> </h1>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Qui iste repellendus doloribus dignissimos sapiente.
        Non, cum itaque obcaecati dolorum cupiditate blanditiis voluptate ad sit commodi sed dicta tempore numquam laboriosam.</p>

<a href="cerrar.php">Carrar sesión</a>

</body>
</html>
