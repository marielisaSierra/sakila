<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "sakila";


//conexion para 000webshost

if ($_SERVER['HTTP_HOST'] == 'xstudioply.000webhostapp.com') {
    $username = "id18475181_root";
    $password = "B-358PveqOFlzn|W";
    $database = "id18475181_sakila";
}


// Create connection
$conexion = mysqli_connect($hostname, $username, $password, $database)
    or die("no se pudo conectar a la base de datos:" . mysqli_connect_error());