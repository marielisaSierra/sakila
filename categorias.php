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

            $script_alert = alert("procesado", "datos procesados correctamente", "success");
        } else {
            $script_alert = alert("Error", "no se pudo insertar", "error");
            throw new Exception("no se pudo procesar los datos");
        }
    }

    //actualizar
    $id = $_POST['id'] ?? '';

    if (!empty($id)) {
        $query = "UPDATE category SET name = '$name' WHERE  category_id = '$id' ";
    }

    if (isset(($_GET['editar']))) {


        $category_id = $_GET['editar'];
        $query = "SELECT * FROM category WHERE category_id = 'category_id' ";

        $resultado = mysqli_query($conexion, $query);
        if ($resultado) {
            while ($fila = mysqli_fetch_object($resultado)) {
                $category_id = $fila->category_id;
                $name = $fila->name;
            }
        }
    }
    if (isset(($_GET['eliminar']))) {
        $category_id = $_GET['eliminar'];
        
        $query = "DELETE FROM category WHERE 'categoty_id'";
        $resultado = $conexion->query($query) or die("Error en query");
        if ($resultado) {
            
            $script_alerta = alerta("Elimidado", "datos imsertados", "success");
        } else {
            $script_alert = alerta("Error", "No se pudo eliminar", "error");

            throw new Exception("no se pudo eliminar los datos");
        }
    }
} catch (Throwable $ex) {
    $error = $ex->getMessage();
}

echo $pagina;

require_once "vistas/vista_categorias.php";