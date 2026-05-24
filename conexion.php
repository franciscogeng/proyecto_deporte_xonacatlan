<?php

$conexion = mysqli_connect(
    "localhost",
    "root",
    "",
    "deportes_xonacatlan"
);

if(!$conexion){
    die("Error de conexión: " . mysqli_connect_error());
}

?>