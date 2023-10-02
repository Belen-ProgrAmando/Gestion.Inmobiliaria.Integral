<?php

$nombre_form=$_POST['nombre'];
$telefono_form=$_POST['telefono'];
$correo_form=$_POST['email'];
$mensaje_form=$_POST['mensaje'];


include("conection.php");

mysqli_query($datos_bd, "INSERT INTO GI_informacion VALUES (DEFAULT, '$nombre_form', '$telefono_form', '$correo_form','$mensaje_form')");



header("Location: Alquileres.php?e=ok#Informacion");

?>