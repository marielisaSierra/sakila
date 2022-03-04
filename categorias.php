<?php

require_once "recursos/conexion.php";
require_once "recursos/funciones.php";


$pagina = "categorias";

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
        $name = $_POST["name"];

        //validaciones
        if (empty($name)) {

            throw new Exception("el nombre no puede estar vacio");
        }

        //guadar
        $query = "INSERT INTO category (name) VALUES ('$name')";
        $resultado = $conexion->query($query) or die("Error en query");

        if ($resultado) {
            $_SESSION['mensaje'] = "Datos insertados correctamente";
        } else {
            throw new Exception("no se pudo insertar los datos");
        }
    }
    //refrezcar
    refrezcar("categorias.php");
} catch (Throwable $ex) {
    $error = $ex->getMessage();
}

echo $pagina;

require_once "vistas/vista_categorias.php";