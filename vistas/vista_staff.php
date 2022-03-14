<?php require_once "parte_head.php"; ?>

<body>


    <?php require_once "parte_menu.php"; ?>
    <div class="container">
        <h3> <?php echo $pagina; ?> </h3>

        <div class="row">
            <form method="post">
                <div class="col-6">
                    <div class="mb3">

                        <label for="">nombre</label>
                        <input type="text" name="first_name" id="" class="form-control">
                        <br>

                        <label for="">apellido</label>
                        <input type="text" name="last_name" id="" class="form-control">
                        <br>


                        </select> <label for="">direccion</label>
                        <select class="form-select" name="address_id">
                            <option value="" selected>seleccione</option>

                            <?php
                            $query = "SELECT * FROM address";

                            $resultado = mysqli_query($conexion, $query);
                            if ($resultado) {
                                while ($fila = mysqli_fetch_object($resultado)) {
                                    echo "<option value='$fila->address_id'>$fila->address</option>";
                                }
                            }
                            ?>
                        </select>
                        <br>

                        <label for="">correo</label>
                        <input type="text" name="email" id="" class="form-control">
                        <br>


                        </select> <label for="">tienda</label>
                        <select class="form-select" name="address_id">
                            <option value="" selected>seleccione</option>

                            <?php
                            $query = "SELECT * FROM store";

                            $resultado = mysqli_query($conexion, $query);
                            if ($resultado) {
                                while ($fila = mysqli_fetch_object($resultado)) {
                                    echo "<option value='$fila->store_id'>$fila->manager_staff_id</option>";
                                }
                            }
                            ?>
                        </select>
                        <br>


                        <label for="">usuario</label>
                        <input type="text" name="username" id="" class="form-control">
                        <br>

                        <label for="">contraseña</label>
                        <input type="text" name="password" id="" class="form-control">
                        <br>



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
                                $imagen  = '<img src="data:image/jpeg;base64,' . base64_encode($fila['picture']) . '"/>';

                                echo "
<tr>
<td>${fila['address_id']}</td>
<td>$imagen</td>
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