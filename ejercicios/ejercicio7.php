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
        <h5>ejercicio7</h5>
        <form action="" method="get">
            <div class="mb-3">
                <label for="">numero_de_dia_de_la_semana</label>
                <input type="text" name="numero_semana" class="form-control">

            </div>
            <div class="mb-3">
                <button class="btn btn-primary"> resultado </button>
            </div>



        </form>


        <?php

        print_r($_GET);
        $numero_semana = $_GET["numero_semana"];

        if (($numero_semana == 1))
            echo "lunes";

        if (($numero_semana == 2))
            echo "martes";

        if (($numero_semana == 3))
            echo "miercoles";

        if (($numero_semana == 4))
            echo "jueves";

        if (($numero_semana == 5))
            echo "viernes";

        if (($numero_semana == 6))
            echo "sabado";

        if (($numero_semana == 7))
            echo "domingo";


        ?>
</body>

</html>