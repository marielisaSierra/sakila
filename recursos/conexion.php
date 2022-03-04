<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "sakila";

// Create connection
$conexion = mysqli_connect($hostname, $username, $password, $database)
    or die("no se pudo conectar a la base de datos:" . mysqli_connect_error());