<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generador de Imágenes de Carros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Generador de Imágenes</h1>
        <form method="post" class="mb-4">
            <div class="mb-3">
                <label for="imageCount" class="form-label">Selecciona la cantidad de imágenes:</label>
                <select name="imageCount" id="imageCount" class="form-select">
                    <?php
                    $i = 1;
                    while ($i <= 10) {
                        echo "<option value='$i'>$i</option>";
                        $i++;
                    }
                    ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Generar Imágenes</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $imageCount = isset($_POST['imageCount']) ? intval($_POST['imageCount']) : 0;
            $images = [
                'img/img1.jpg',
                'img/img2.jpg',
                'img/img3.jpg',
                'img/img4.jpg',
                'img/img5.jpg',
                'img/img6.jpg',
                'img/img7.jpg',
                'img/img8.jpg',
                'img/img9.jpg',
                'img/img10.jpg'
            ];

            echo "<div class='row'>";
            $i = 0;
            while ($i < $imageCount && !empty($images)) {
                $randomIndex = array_rand($images);  // Obtiene un índice aleatorio
                $randomImage = $images[$randomIndex]; // Selecciona la imagen correspondiente
                unset($images[$randomIndex]);         // Elimina la imagen seleccionada para evitar repeticiones

                echo "<div class='col-md-2 col-sm-3 col-4 mb-3'>";
                echo "<div class='card'>";
                echo "<div class='card-body text-center'>";
                echo "<img src='$randomImage' class='img-fluid' style='width: 10rem; height: 10rem;' alt='Imagen generada'>";
                echo "</div>";
                echo "</div>";
                echo "</div>";

                $i++;
            }
            echo "</div>";
        }
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>