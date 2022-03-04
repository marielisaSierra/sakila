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
                        <input type="text" name="email" class="form-control">

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
                            <th scope="col">direccion_id</th>
                            <th scope="col">foto</th>
                            <th scope="col">tienda_id</th>
                            <th scope="col">active</th>
                            <th scope="col">nombre_usuario</th>
                            <th scope="col">contraseña</th>





                            <th scope="col">fecha de actualizacion</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        $query = "SELECT * FROM staff";
                        $buscador = $_GET['buscador'] ?? "";
                        if ($buscador != "") {
                            $query = "SELECT * FROM staff WHERE username ='$buscador'";
                        }

                        $resultado = mysqli_query($conexion, $query);
                        if ($resultado) {
                            while ($fila = mysqli_fetch_assoc($resultado)) {
                                echo '<img src="data:image/jpeg;base64,' . base64_encode($row['image']) . '"/>';
                                echo "
<tr>
<td>${fila['adress_id']}</td>
<td>${fila['picture']}</td>
<td>${fila['email']}</td>
<td>${fila['store_id']}</td>
<td>${fila['active']}</td>
<td>${fila['username']}</td>
<td>${fila['password']}</td>








<td>${fila['last_update']}</td>
</tr>
";
                            }
                        }

                        ?>







                        <?php require_once "parte_footer.php"; ?>


</body>

</html>