<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="container w-50">
        <h5>idiomas</h5>
        <form action="" method="get">
            <div class="mb-3">
                <label for="">nombre</label>
                <input type="text" name="nombre" class="form-control">

            </div>

            <div class="mb-3">
                <button class="btn btn-primary"> guardar </button>
            </div>






            <table>
                <tbody>

                    </tr>
                    <h6>listado de idiomas</h6>

                    <tr>

                        <th scope="row">id</th>
                        <td colspan="id" class="tabla-idiomas">nombre</td>
                    </tr>


                    <tr>

                        <th scope="row">1</th>
                        <td colspan="id" class="tabla-idiomas">...</td>

                    </tr>

                    <tr>

                        <th scope="row">2</th>
                        <td colspan="id" class="tabla-idiomas"> ...</td>

                    </tr>

                    <tr>

                        <th scope="row">3</th>
                        <td colspan="id" class="tabla-idiomas">...</td>

                    </tr>

                    <tr>

                        <th scope="row">4</th>
                        <td colspan="id" class="tabla-idiomas">...</td>

                    </tr>

                </tbody>
            </table>










</body>

</html>

<?php
$servername = "localhost";
$database = "sakila";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

//mysqli_close($conn);

print_r($_GET);
$nombre = $_GET["nombre"];

$sql = "SELECT  language_id, name FROM language";
$resultado = $conn->query($sql);


$sql = "INSERT INTO language (name) VALUES ( '$nombre');";

if (($conn->query($sql) === TRUE)) {
    echo "nueva fila insertada";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

//$conn->close();



?>