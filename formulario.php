<?php
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirmacionPass = $_POST['confirmacionPass'];

//var_dump($nombre); //debugueamos con este var_dump solo por probar
//var_dump($apellido);

//acá compara el password y la confirmación del password
if($password==$confirmacionPass){
    echo "Las claves coinciden";
    echo "<h2>información recibida desde PHP</h2>";
    echo "El nombre es: " . $nombre . "<br/>";
    echo "El apellido es: " . $apellido . "<br/>";
    echo "El e-mail es: " . $email . "<br/>";
}else{
    echo "Las claves NO coinciden!";
    echo "<br>";
    echo "Por favor, verifica tu contraseña";
}



?>
