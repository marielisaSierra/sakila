<?php

require_once "recursos/conexion.php";
require_once "recursos/funciones.php";



$pagina = "ciudades";

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

        $name = $_POST[("city")];

        //validaciones
        if (empty($name)) {
            throw new Exception("cuidad no puede estar vacio");
        }

        //guadar

        $query = "INSERT INTO city (city) VALUES ('$name')";
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


require_once "vistas/vista_ciudades.php";