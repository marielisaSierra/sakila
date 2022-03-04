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
                        <input type="text" name="title" class="form-control">

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
                            <th scope="col">film_id</th>
                            <th scope="col">title</th>
                            <th scope="col">description</th>
                            <th scope="col">release_year</th>
                            <th scope="col">language_id</th>
                            <th scope="col">original_language_id</th>
                            <th scope="col">rental_duration</th>
                            <th scope="col">rental_rate</th>
                            <th scope="col">length</th>
                            <th scope="col">replacement_cost</th>
                            <th scope="col">rating</th>
                            <th scope="col">special_features</th>






                            <th scope="col">fecha de actualizacion</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        $query = "SELECT * FROM film";
                        $buscador = $_GET['buscador'] ?? "";
                        if ($buscador != "") {
                            $query = "SELECT * FROM film WHERE title ='$buscador'";
                        }

                        $resultado = mysqli_query($conexion, $query);
                        if ($resultado) {
                            while ($fila = mysqli_fetch_assoc($resultado)) {
                                echo "
<tr>
<td>${fila['film_id']}</td>
<td>${fila['title']}</td>
<td>${fila['description']}</td>
<td>${fila['release_year']}</td>
<td>${fila['language_id']}</td>
<td>${fila['original_language_id']}</td>
<td>${fila['rental_duration']}</td>
<td>${fila['rental_rate']}</td>
<td>${fila['length']}</td>
<td>${fila['replacement_cost']}</td>
<td>${fila['special_features']}</td>
<td>${fila['special_features']}</td>






<td>${fila['last_update']}</td>
</tr>
";
                            }
                        }

                        ?>






                        <?php require_once "parte_footer.php"; ?>


</body>

</html>