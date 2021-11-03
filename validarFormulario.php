<?php

//validamos que todas las variables estén llenas
if(isset($_POST["enviar"])){
    if(empty($nombre)){
        echo "<p class='error'>* Agrega tu nombre </p>";
    }
}
if(isset($_POST["enviar"])){
    if(empty($apellido)){
        echo "<p class='error'>* Agrega tu apellido </p>";
    }
}
if(isset($_POST["enviar"])){
    if(empty($email)){
        echo "<p class='error'>* Agrega tu e-mail </p>";
    }
}
if(isset($_POST["enviar"])){
    if(empty($password)){
        echo "<p class='error'>* Agrega tu contraseña </p>";
    }
}
if(isset($_POST["enviar"])){
    if(empty($confirmacionPass)){
        echo "<p class='error'>* Debes confirmar tu contraseña </p>";
    }else if($password==$confirmacionPass){
        echo "Las claves coinciden";
        echo "<h2>información recibida desde PHP</h2>";
        header("Location:index.php");
    }else{
        echo "Las claves NO coinciden!";
        echo "<br>";
        echo "Por favor, verifica tu contraseña";
        echo "<br>";
    }
}

?>
