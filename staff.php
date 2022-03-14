<?php

require_once "recursos/conexion.php";
require_once "recursos/funciones.php";

$pagina = "staff";

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
        $first_name = $_POST[("first_name")];
        $last_name = $_POST[("last_name")];
        $address_id = $_POST[("address_id")];
        $email = $_POST[("email")];
        $address_id = $_POST[("store_id")];
        $username = $_POST[("username")];
        $password = $_POST[("password")];


        //validaciones
        if (empty($first_name)) {

            throw new Exception("el nombre no puede estar vacio");
        }

        if (empty($last_name)) {

            throw new Exception("el apellido no puede estar vacio");
        }

        if (empty($address_id)) {

            throw new Exception("la direccion no puede estar vacio");
        }
        if (empty($email)) {

            throw new Exception("el email no puede estar vacio");
        }
        if (empty($store_id)) {

            throw new Exception("la tienda no puede estar vacio");
        }
        if (empty($username)) {

            throw new Exception("el usuario no puede estar vacio");
        }
        if (empty($password)) {

            throw new Exception("el contraseña no puede estar vacia");
        }
        //guadar
        $query = "INSERT INTO staff (first_name, last_name, address_id,email,store_id,username,password) VALUES ('$first_nam', '$last_name', '$address_id', '$email', '$store_id', '$username', '$password')";
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


require_once "vistas/vista_staff.php";