<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $edad = $_POST["edad"];
    $nombre = $_POST["nombre"];
    $estatura = $_POST["estatura"];
    $estadocivil = $_POST["estadocivil"];

    echo "El perfil de Nombre: " . $nombre . ", con Edad: " . $edad . " años tiene una estatura de: "
        . $estatura . "m y es: " . $estadocivil . ".";
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" required><br>

    <label for="edad">Edad:</label>
    <input type="number" name="edad" required><br>

    <label for="estatura">Estatura:</label>
    <input type="text" name="estatura" required><br>

    <label for="estadocivil">Estado Civil:</label>
    <select name="estadocivil" required>
        <option value="soltero">Soltero</option>
        <option value="casado">Casado</option>
        <option value="otro">Otro</option>
    </select><br>

    <input type="submit" value="Enviar">
</form>

</body>
</html>