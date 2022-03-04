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
        <h5>ejercicio4</h5>
        <form action="" method="get">
            <div class="mb-3">
                <label for="">cateto a</label>
                <input type="text" name="cateto_a" class="form-control">
            </div>
            <div class="mb-3">
                <label for="">cateto b</label>
                <input type="text" name="cateto_b" class="form-control">
            </div>

            <div class="mb-3">
                <button class="btn btn-primary"> resultado </button>
            </div>
        </form>
        <?php

        print_r($_GET);
        $cateto_a = $_GET["cateto_a"];
        $cateto_b = $_GET["cateto_b"];

        $resultado = ($cateto_a * $cateto_a) + ($cateto_b * $cateto_b);
        $resultato = sqrt($resultado);
        echo "la hipotenusa es  ($resultado)";



        ?>
</body>

</html>