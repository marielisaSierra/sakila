
<!DOCTYPE html>
<html lang="en">
<head>

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="continer">
        <h5>ejermplo</h5>

        <form action="" method="get">
            <div class="mb-3">
                <label for="">correo</label>
                <input type="text" name="correo" class="form-control">
                <div class="mb-3">
                    <label for="">nombre</label>
                    <input type="text" name="nombre" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">apelido</label>
                    <input type="text" name="apellido" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="">edad</label>
                        <input type="text" name="edad" class="form-control">
                        </div>

                            <div class="mb-3">
                                <label for="">pais</label>
                                <input type="text" nam="edad"class="form-control">

                            </div>
                            <div class="mb-3">
                                <button class="btn-primary"> enviar </button>

                            </div>

            </div>

        </form>

        <?php
        
        print_r($_GET);
        
        
        

        ?>
    </div>
</body>
</html>