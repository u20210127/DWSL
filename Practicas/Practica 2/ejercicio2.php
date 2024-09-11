<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex II</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="card m-auto mt-5 p-4">
            <form action="ejercicio2.php" method="POST">
                <div class="row justify-content-center mb-4">
                    <div class="col-md-4">
                        <h5 style="text-align: center;">Generador de tablas de multiplicar.</h5>
                        <label for="N1">Ingresa el número base de tu tabla:</label>
                        <input type="number" class="form-control" name="txtBase" id="txtBase">
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-4 text-center">
                        <button type="submit" class="btn btn-success">Generar</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="card m-auto mt-3 p-4">
            <div class="row justify-content-center">
                <div class="col-md-6" style="text-align: center;">
                    <?php
                        $numBase = 1;
                        $numBase = $_POST["txtBase"];

                        echo "<br><br>";
                        echo "Tabla del $numBase";
                        echo "<br><br>";
                        for ($i = 1; $i < 21; $i++) {
                            echo $numBase. " x ". $i. " = ". ($numBase * $i)  . "<br>";
                        }

                    ?>
                </div>
            </div>
        </div>            
    </div>
</body>
</html>