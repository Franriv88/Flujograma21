<?php

if(isset($_POST["enviar"])){
    if(empty($nombre)){
        echo "<p class='error'>* Agrega tu nombre </p>"; /* mensajes de error */
    }
}

if(isset($_POST["enviar"])){
    if(empty($password)){
        echo "<p class='error'>* Agrega tu contraseña </p>"; /* mensajes de error */
    }
}

if(isset($_POST["enviar"])){
    if($nombre == "Francisco" && $password == 123){
        session_start();
        $_SESSION["usuario"] = $nombre;//estoy creando una variable de sesión que contiene el nombre del/los usuario(s)
        header("Location:pantallaBienvenida.php");
        }else if($nombre == "Hernan" && $password == 456){
            session_start();
            $_SESSION["usuario"] = $nombre;
            header("Location:pantallaBienvenida.php");
            }else{
                echo "<br>";
                echo "Alguna o ambas credenciales son incorrectas";
                echo "<br>";
                echo "Por favor, intente de nuevo"; //aca quiero tener un boton que diga Si y redireccione a indes.php y otro que diga No y redireccione a cerrar.php
                 
                die(); //usamos die(); para que la acción finalice acá
            }

            
}    


    
?>