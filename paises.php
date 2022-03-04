<?php

require_once "recursos/conexion.php";
require_once "recursos/funciones.php";


$pagina = "paises";

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
        //variable
        $name = $_POST[("country")];

        //validaciones
        if (empty($name)) {
            throw new Exception("el pais no pued estar vacio");
        }
        //guadar
        $query = "INSERT INTO country (country) VALUES ('$name')";
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


require_once "vistas/vista_paises.php";