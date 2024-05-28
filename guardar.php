<?php
include("database.php");

if (isset($_POST["guardar"])) {
   $nombre = $_POST['nombre'];
   $descripcion = $_POST['descripcion'];
   $precio = $_POST['precio'];

   $query = "INSERT INTO productos(nombre, descripcion, precio) VALUES('$nombre','$descripcion','$precio')";
   // echo $query; //* COMPROBAR CUAL ES EL FALLO
   $result = mysqli_query($con, $query);

   if (!$result) {
      die("ERROR EN LA BASE DE DATOS");
   } else {
      # code...
      // echo "EL REGISTRO SE AH GUARDO";
      echo '<script type="text/javascript">alert("Registro agregado");window.location.href="index.php";</script>';
   }
}