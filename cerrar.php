<?php
    session_start();

    session_destroy();//con esto eliminamos los registros de sesión que se guardan en la carpeta "tmp"
    header("Location:index.php");
?>

