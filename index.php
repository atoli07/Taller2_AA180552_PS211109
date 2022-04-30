<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio - Gasolinera</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body>
    <div id="ascensor">
        <div id="tanques" class="w-100 vh-100d-flex justify-content-center align-items-center">
            <div class="row">
                <div class="tanque col-4">
                    <h5>Regular</h5>
                    <strong>$3.05/galón</strong>
                    <p>Galones disponibles:</p>
                </div>
                <div class="tanque col-4">
                <h5>Especial</h5>
                    <strong>$3.27/galón</strong>
                    <p>Galones disponibles:</p>
                </div>
                <div class="tanque col-4">
                <h5>Diesel</h5>
                    <strong>$2.96/galón</strong>
                    <p>Galones disponibles:</p>
                </div>
            </div>
        </div>
        <div id="mantenimientos" class="w-100 vh-100">

        </div>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.ascensor.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script>
        $(function() {
            var ascensor = $('#ascensor').ascensor(); // Init ascensor
            var ascensorInstance = ascensor.data('ascensor'); // Access instance
        });
    </script>
</body>

</html>