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
        <h5>ejercicio9</h5>
        <form action="" method="get">
            <div class="mb-3">
                <label for="">digite un numero</label>
                <input type="text" name="numero" class="form-control">

            </div>

            <div class="mb-3">
                <button class="btn btn-primary"> resultado </button>
            </div>
        </form>
        <?php

        print_r($_GET);
        $numero = $_GET["numero"];



        if (($numero % 2) == 0) {
            echo "este numero es par";
        } else {
            echo "este numero es inpar";
        }




        ?>
</body>

</html>