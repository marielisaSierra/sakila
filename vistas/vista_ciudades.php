<?php require_once "parte_head.php"; ?>

<body>




    <?php require_once "parte_menu.php"; ?>



    <div class="container">
        <h3> <?php echo $pagina; ?> </h3>

        <div class="row">
            <form method="post">
                <div class="col-6">
                    <div class="mb3">
                        <label for="">sakila</label>
                        <input type="text" name="city" class="form-control">

                    </div>

                    <div class="mb-3">
                        <button name="boton-guardar" class="btn btn-primary">guardar</button>

                    </div>
            </form>

            <?php if (!empty($error)) : ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <?php echo $error; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php endif; ?>
        </div>
    </div>


    <div class="row">
        <div class="col-4">
            <form class="input-group mb-3">
                <input type="text" name="buscador" class="form-control" placeholder="Buscador">
                <button class="btn btn-outline-secondary" type="submit" name="boton_buscar" id="boton-buscar"><i
                        class="bi bi-search"></i>Buscar</button>
            </form>



        </div>


    </div>
    <div class="row">
        <div class="col-12">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">ciudad</th>
                        <th scope="col">ciudad_id</th>
                        <th scope="col">country_id</th>
                        <th scope="col">fecha de actualizacion</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = "SELECT * FROM city";
                    $buscador = $_GET['buscador'] ?? "";
                    if ($buscador != "") {
                        $query = "SELECT * FROM city WHERE city ='$buscador'";
                    }

                    $resultado = mysqli_query($conexion, $query);
                    if ($resultado) {
                        while ($fila = mysqli_fetch_assoc($resultado)) {
                            echo "

<tr>    
<td>${fila['city_id']}</td>
<td>${fila['city']}</td>
<td>${fila['city']}</td>
<td>${fila['country_id']}</td>





<td>${fila['last_update']}</td>
</tr>
";
                        }
                    }

                    ?>

                    <th scope="row"></th>
                    <td colspan="2"></td>
                    <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>


    </div>







    <?php require_once "parte_footer.php"; ?>


</body>

</html>