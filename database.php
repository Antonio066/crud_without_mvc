<?php
$u = "INGRESE NOMBRE DE SU USUARIO ENTRE COMILLAS";
$p = "NOMBRE DE SU CONTRASEÑA EN MAYUSCULAS O MINUSCULAS COMO LO HAY DEFEINIDO, ENTRE COMILLAS";
$base = "NOMBRE DE LA BASE DE DATOS, IGUAL EN COMILLAS";
$con = mysqli_connect("localhost", $u, $p, $base);
// if (isset($con)) {
//    echo "conexión exitosa";
// }
