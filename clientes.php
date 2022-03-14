<?php

require_once "recursos/conexion.php";
require_once "recursos/funciones.php";


$pagina = "clientes";

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
        $store_id = $_POST[("store_id")];
        $address_id = $_POST[("address_id")];

        //validaciones
        if (empty($store_id)) {
            throw new Exception("el tienda_id no puede estar vacio");
            if (empty($address_id)) {
                throw new Exception("la direccion_id no puede estar vacio");
            }
        }
        //guadar
        $query = "INSERT INTO customer (store_id, address_id) VALUES ('$store_id', '$address_id')";
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


require_once "vistas/vista_clientes.php";