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
        <h5>ejercicio8</h5>
        <form action="" method="get">
            <div class="mb-3">
                <label for="">dia del mes</label>
                <input type="text" name="numero_mes" class="form-control">

            </div>
            <div class="mb-3">
                <button class="btn btn-primary"> resultado </button>
            </div>

        </form>
        <?php

print_r($_GET);
$numero_mes = $_GET["numero_mes"];

if (($numero_mes == 1))
            echo "enero";

            if (($numero_mes == 2))
            echo "febrero";

            if (($numero_mes == 3))
            echo "marzo";
            
            if (($numero_mes == 4))
            echo "abril";

            if (($numero_mes == 5))
            echo "mayo";

            if (($numero_mes == 6))
            echo "junio";

            if (($numero_mes == 7))
            echo "julio";

            if (($numero_mes == 8))
            echo "agosto";

            if (($numero_mes == 9))
            echo "septiembre";

            if (($numero_mes == 10))
            echo "octubre";

            if (($numero_mes == 11))
            echo "noviembre";

            if (($numero_mes == 12))
            echo "diciembre";
            



?>
</body>

</html>