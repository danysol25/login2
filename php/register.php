<?php
include_once('conection.php');

//extraer datos del form:
$Nombre = $_POST('name');
$Apellido = $_POST('lastName');
$Email = $_POST('email');
$Clave = $_POST('clave');

$registro = "INSERT INTO users (FirstName, LastName, Email, Pasword) VALUES ('$Nombre', '$Apellido', '$Email', '$Clave')";

$validacion = mysqli_query($conection, $register);

//verificar errores
if($validacion != false) {
    header('Location:../public/inicio.html');
} else {
    echo "Error inesperado. No se guardaron los datos.";
}