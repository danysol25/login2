<?php
//Parametros de conexión
$host = 'localhost';
$user = 'root';
$db = 'users';

//variable de conexión

$conection = mysqli_connect ($host, $user, '', $db);

$err = 'Ha ocurrido un error con la BD';

if($conection != true) {
    mysqli_error($conection);
}