<?php require_once "parte_head.php"; ?>

<body>



    <?php require_once "parte_menu.php"; ?>



    <div class="container">
        <h3> <?php echo $pagina; ?> </h3>

        <div class="row">
            <form method="post">
                <div class="col-6">
                    <div class="mb3">
                        <label for="">tienda_id</label>
                        <select class="form-select" name="address_id">
                            <option value="" selected>seleccione</option>

                            <?php
                            $query = "SELECT * FROM customer";

                            $resultado = mysqli_query($conexion, $query);
                            if ($resultado) {
                                while ($fila = mysqli_fetch_object($resultado)) {
                                    echo "<option value='$fila->customer'>$fila->store_id</option>";
                                }
                            }
                            ?>
                        </select>

                        <label for="">direccion_id</label>
                        <select class="form-select" name="address_id">
                            <option value="" selected>seleccione</option>

                            <?php
                            $query = "SELECT * FROM address";

                            $resultado = mysqli_query($conexion, $query);
                            if ($resultado) {
                                while ($fila = mysqli_fetch_object($resultado)) {
                                    echo "<option value='$fila->address'>$fila->address_id</option>";
                                }
                            }
                            ?>
                        </select>


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
                        <th scope="col">tienda_id</th>
                        <th scope="col">nombre</th>
                        <th scope="col">apellido</th>
                        <th scope="col">email</th>

                        <th scope="col">fecha de actualizacion</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    $query = "SELECT * FROM customer";
                    $buscador = $_GET['buscador'] ?? "";
                    if ($buscador != "") {
                        $query = "SELECT * FROM customer WHERE first_name ='$buscador'";
                    }

                    $resultado = mysqli_query($conexion, $query);
                    if ($resultado) {
                        while ($fila = mysqli_fetch_assoc($resultado)) {
                            echo "
<tr>
<td>${fila['customer_id']}</td>
<td>${fila['store_id']}</td>
<td>${fila['first_name']}</td>
<td>${fila['last_name']}</td>
<td>${fila['email']}</td>




<td>${fila['last_update']}</td>
</tr>
";
                        }
                    }

                    ?>







                    <?php require_once "parte_footer.php"; ?>


</body>

</html>