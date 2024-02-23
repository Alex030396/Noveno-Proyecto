<?php

$db = mysqli_connect('localhost','root','25706096','proyecto'); 
if (!$db) {
    echo "Error en la conexion";
}   else {
    echo "Conexion exitosa";
}