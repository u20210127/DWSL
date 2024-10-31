<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios de validaciones</title>
</head>
<body>
<form id="validationForm">
        <label for="nombre">Digite un nombre y evalue si inicia con M, O, P ó S</label><br>
        <input type="text" id="nombre" required><br>
        <hr>

        <label for="direccion">Digite una direccion e identifique si existe la palabra casa o apartamento al inicio de la cadena</label><br>
        <input type="text" id="direccion" required><br>
        <hr>

        <label for="correo">Identifique al final de la cadena si el correo escrito es gmail.com</label><br>
        <input type="email" id="correo" required><br>
        <hr>

        <label for="texto">Escriba un texto cualquiera e identifique cuántas palabras finalizan con "as"</label><br>
        <input type="text" id="texto" required><br>
        <hr>

        <label for="telefono">Identificar si el número de teléfono es de casa iniciando con 2 o celular iniciando con 7</label><br>
        <input type="text" id="telefono" required><br>
        <hr>

        <label for="compania">Identificar la compañía de celular suponiendo que 79 ó 72 es Tigo, 77 ó 75 es Movistar y 71 ó 73 es Digicel</label><br>
        <input type="text" id="compania" required><br>
        <hr>

        <label for="genero">Identificar el patrón de género digitado en mayúsculas o minúsculas, masculino =1, femenino=2</label><br>
        <input type="text" id="genero" required><br>
        <hr>

        <input type="submit" value="Evaluar">
    </form>
</body>
</html>
<script src="script.js"></script>