<?php

require_once "recursos/conexion.php";
require_once "recursos/funciones.php";

echo "<h1>$pagina</h1>";



$pagina = "staff";

echo $pagina;
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
        $name = $_POST[("email")];

        //validaciones
        if (empty($name)) {
            throw new Exception("el email");
        }
        //guadar

        //refrezcar


    }
} catch (Throwable $ex) {
    $error = $ex->getMessage();
}


require_once "vistas/vista_staff.php";