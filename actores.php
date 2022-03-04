<?php

require_once "recursos/conexion.php";
require_once "recursos/funciones.php";


$pagina = "actores";

echo $pagina;
$error = "";

try {

    #borrar esto despues 
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    //verificar si le da click al boton
    if (isset($_POST["boton-guardar"])) {
        echo "guardando...";

        //variables
        $first_name;
        $last_name = $_POST["name"];

        //validaciones
        if (empty($first_name)) {

            throw new Exception("el nombre no puede estar vacio");
        }

        if (empty($first_name)) {

            throw new Exception("el nombre no puede estar vacio");
        }
        //guadar
        $query = "INSERT INTO actor (first_name, last_name) VALUES ('$first_name','$last_name')";
        $resultado = $conexion->query($query) or die("Error en query");

        if ($resultado) {
            $_SESSION['mensaje'] = "Datos insertados correctamente";
        } else {
            throw new Exception("no se pudo insertar los datos");
        }
    }
    //refrezcar


} catch (Throwable $ex) {
    $error = $ex->getMessage();
}


require_once "vistas/vista_actores.php";