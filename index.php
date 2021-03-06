<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio - Gasolinera</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body>
    <?php
    spl_autoload_register(function ($class_name) {
        require("class/" . $class_name . ".class.php");
    });
    if (isset($_GET['llenos']) || $_GET['llenos'] != null) {
        $regular = new tanque("Regular", 3.05);
        $especial = new tanque("Especial", 3.27);
        $diesel = new tanque("Diesel", 2.96);
    } else {
        $regular = new tanque("Regular", 3.05);
        $especial = new tanque("Especial", 3.27);
        $diesel = new tanque("Diesel", 2.96);
    }
    ?>
    <div id="ascensor">
        <div id="tanques" class="w-100 vh-100d-flex justify-content-center align-items-center">
            <div class="row p-3">
                <div class="col-4">
                    <div class="tanque col-4 p-4 mx">
                        <h5>Regular</h5>
                        <strong>$3.05/galón</strong>
                        <p>Galones disponibles:</p>
                        <p class="text-center"><?php echo $regular->cantidad ?></p>
                    </div>
                </div>
                <div class="col-4">
                    <div class="tanque col-4 p-4 mx">
                        <h5>Especial</h5>
                        <strong>$3.27/galón</strong>
                        <p>Galones disponibles:</p>
                        <p class="text-center"><?php echo $especial->cantidad ?></p>
                    </div>
                </div>
                <div class="col-4">
                    <div class="tanque col-4 p-4 mx">
                        <h5>Diesel</h5>
                        <strong>$2.96/galón</strong>
                        <p>Galones disponibles:</p>
                        <p class="text-center"><?php echo $diesel->cantidad ?></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 my-3">
                    <center><a href="index.php?llenos=<?php echo $regular->rellenarTanques($regular, $especial, $diesel)?>" class="btn btn-secondary">Rellenar tanques</a></center>
                </div>
            </div>
            <div class="row container-fluid">
                <h3 class="text-white text-center pt-1">Ventas</h3>
                <table class="table table-dark">
                    <thead>
                        <th>ID</th>
                        <th>Tipo Combustible</th>
                        <th>Galones vendidos</th>
                        <th>Monto total</th>
                        <th>Fecha</th>
                        <th>Acciones</th>
                    </thead>
                    <tbody>
                        <td>1</td>
                        <td>Regular</td>
                        <td>3.000</td>
                        <td>$9.15</td>
                        <td>22-04-2022 18:39</td>
                        <td>
                            <button type="button" class="btn btn-light">Modificar</button>
                            <button type="button" class="btn btn-danger">Eliminar</button>
                        </td>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div id="mantenimientos" class="w-100 vh-100 d-flex justify-content-center align-items-center">
        <form action="" class="frm-mantenimientos p-4" method="post">
            <div class="input-group mb-3">
                <label class="input-group-text" for="inputGroupSelect01">Tipo de combustible</label>
                <select name="tipo_combustible" class="form-select" id="inputGroupSelect01">
                    <option value="0">Regular</option>
                    <option value="1">Especial</option>
                    <option value="2">Diesel</option>
                </select>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Galones vendidos</span>
                <input type="number" class="form-control" name="galones">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Monto total</span>
                <input type="number" class="form-control" name="total_dinero">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Fecha</span>
                <input type="datetime-local" name="fecha" id="">
            </div>
            <center><button type="submit" class="btn btn-primary">Realizar acción</button></center>
        </form>
    </div>
</body>

</html>