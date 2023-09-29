<?php

$nombre_form=$_POST['nombre'];
$correo_form=$_POST['email'];
$telefono_form=$_POST['telefono'];
$mensaje_form=$_POST['mensaje'];

$cuerpo="Nombre: ".$nombre_form."\r\n"."email: ".$correo_form."\r\n"."Telefono: ".$telefono_form."\r\n"."Mensaje: ".$mensaje_form;

@mail("belenbarrientos.0706@gmail.com", "Mensaje de Gestion Inmobiliaria Integral ", $cuerpo);

include("conection.php");

mysqli_query($datos_bd, "INSERT INTO GI_Contacto VALUES (DEFAULT, '$nombre_form', '$correo_form', $telefono_form, '$mensaje_form')");


header("Location: index.php?e=ok#contacto");

?>

<?php

$correo_newslatters=$_POST['correo'];
$cuerpo="correo: ".$correo_newslatter;

@mail("belenbarrientos.0706@gmail.com", "Mensaje de Gestion Inmobiliaria Integral ", $cuerpo);
include("conection.php");

mysqli_query($datos_bd, "INSERT INTO Newslatter VALUES (DEFAULT, '$correo_newslatter')");


?>