<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  
  // Create connection
  $conn = new mysqli($servername, $username, $password);
  
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected successfully";
    

  // consulta a la BD
  $qery = "SELECT * FROM usuarios"; //esta no es una buena práctica
  var_dump($qery);





  //------- comentarios y recordatorios --------
  // CRUD = Creat, Read, Update, Delete
  
  //--- MySQL --- 
  //Servidor = localhost
  //Usuario = root
  //Contraseña = " "
  //Base de Datos = estudiantes

  // array Asociativo: $datos_conexion = array("servidor" => "localhost", "usuario" => "root", "clave" => "", "basededatos" => "estudiantes");
  //$concexion = mysqli_connect($datos_conexion["servidor], $datos_conexion["root], $datos_conexion["clave"], $datos_conexion["basededatos"] );
  
  //método aprendido del manual de PHP https://www.php.net/function.mysqli-connect
?>

