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
                        <input type="text" name="country" class="form-control">

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



        <div class="container">
            <h3> <?php echo $pagina; ?> </h3>
        </div>

        <div class="row">
            <div class="col-12">

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">pais_id</th>
                            <th scope="col">pais</th>


                            <th scope="col">fecha de actualizacion</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        $query = "SELECT * FROM country";
                        $buscador = $_GET['buscador'] ?? "";
                        if ($buscador != "") {
                            $query = "SELECT * FROM country WHERE country ='$buscador'";
                        }

                        $resultado = mysqli_query($conexion, $query);
                        if ($resultado) {
                            while ($fila = mysqli_fetch_assoc($resultado)) {
                                echo "
<tr>
<td>${fila['country_id']}</td>
<td>${fila['country']}</td>





<td>${fila['last_update']}</td>
</tr>
";
                            }
                        }

                        ?>






                        <?php require_once "parte_footer.php"; ?>


</body>

</html>