<?php

require_once "recursos/conexion.php";
require_once "recursos/funciones.php";



$pagina = "peliculas";

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
        $name = $_POST[("title")];

        //validaciones
        if (empty($name)) {

            throw new Exception("el titulo no puede estar vacio");
        }
        //guadar

        //refrezcar


    }
} catch (Throwable $ex) {
    $error = $ex->getMessage();
}


require_once "vistas/vista_peliculas.php";