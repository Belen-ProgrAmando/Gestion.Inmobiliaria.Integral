<?php

$nombre_form=$_POST['nombre'];
$correo_form=$_POST['email'];
$telefono_form=$_POST['telefono'];
$mensaje_form=$_POST['mensaje'];


include("conection.php");

mysqli_query($datos_bd, "INSERT INTO GI_Contacto VALUES (DEFAULT, '$nombre_form', '$correo_form', $telefono_form, '$mensaje_form')");


header("Location: index.php?e=ok#Contacto");

?>