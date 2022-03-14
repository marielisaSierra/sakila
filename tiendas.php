<?php

require_once "recursos/conexion.php";
require_once "recursos/funciones.php";




$pagina = "tiendas";

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
        $store1 = $_POST[("manager_staff_id")];
        $store2 = $_POST[("address_id")];

        //validaciones
        if (empty($store1)) {
            throw new Exception("manager no puede estar vacio");
        }
        if (empty($store2)) {
            throw new Exception("direcion  no puede estar vacio");
        }
        //guadar
        $query = "INSERT INTO store (manager_staff_id, address_id) VALUES ('$store1', '$store2')";
        $resultado = $conexion->query($query) or die("Error en query");

        if ($resultado) {
            $_SESSION['mensaje'] = "Datos insertados correctamente";

            $script_alert = alert("Insertado", "datos insertados correctamente", "success");
        } else {
            $script_alert = alert("Error", "no se pudo insertar", "error");
            throw new Exception("no se pudo insertar los datos");
        }
    }

    
    //refrezcar


} catch (Throwable $ex) {
    $error = $ex->getMessage();
}


require_once "vistas/vista_tiendas.php";