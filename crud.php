<?php
  // CRUD = Creat, Read, Update, Delete
  
  //--- MySQL --- 
  //Servidor = localhost
  //Usuario = root
  //Contraseña = " "
  //Base de Datos = estudiantes

  // array Asociativo: $datos_conexion = array("servidor" => "localhost", "usuario" => "root", "clave" => "", "basededatos" => "estudiantes");
  //$concexion = mysqli_connect($datos_conexion["servidor], $datos_conexion["root], $datos_conexion["clave"], $datos_conexion["basededatos"] );

  // forma sencilla:
  $conexion = mysqli_connect("localhost", "root", "", "estudiantes");

  if(!$conexion){
      die("Error al conectar la base de datos");
      
  }else{
      echo "Base de Datos conectada";
  }

    
?>