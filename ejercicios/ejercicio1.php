<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<?php
$hostname = "localhost";
$username = "root";
$password = "";
$databasename = "sakila";

// Create connection
$conexion= mysqli_connect($hostname, $username, $password, $databasename);

or die ("no se pudo conectar a la base de datos:" . mysqli_connect_error())

;

<body>


    <div class="container w-50">
        <h5>Ejercicio 1</h5>
        <form action="" method="get">
            <div class="mb-3">
                <label for="">base</label>
                <input type="text" name="base" class="form-control">
            </div>

            <div class="mb-3">
                <label for="">altura</label>
                <input type="text" name="altura" class="form-control">
            </div>

            <div class="mb-3">
                <button class="btn btn-primary"> resultado </button>
            </div>
        </form>
        <?php

        print_r($_GET);

        $altura = $_GET["altura"];
        $base = $_GET["base"];

        $resultado = ($base * $base) + ($altura * $altura);
        $resultado = sqrt($resultado);
        echo "la hipotenusa es  ($resultado)";

        ?>
</div>
</body>

</html>