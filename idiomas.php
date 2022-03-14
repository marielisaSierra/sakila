<?php

require_once "recursos/conexion.php";
require_once "recursos/funciones.php";


$pagina = "idiomas";

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
        $name = $_POST[("name")];

        //validaciones
        if (empty($name)) {
            throw new Exception("el idioma no puede estatar vacio");
        }
        //guadar
        $query = "INSERT INTO language (name) VALUES ('$name')";
        $resultado = $conexion->query($query) or die("Error en query");

        if ($resultado) {
            $_SESSION['mensaje'] = "Datos insertados correctamente";
            $script_alert = alert("Insertado", "datos insertados correctamente", "success");
        } else {
            $script_alert = alert("Insertado", "datos insertados correctamente", "error");
            throw new Exception("no se pudo insertar los datos");
        }
    }
} catch (Throwable $ex) {
    $error = $ex->getMessage();
}


require_once "vistas/vista_idiomas.php";