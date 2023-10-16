<!DOCTYPE html>
<html>
<head>
    <title>Activity 6 - 4</title>
</head>
<body>
    <?php
    $buttonPressed = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["boton1"])) {

            $buttonPressed = "Botón 1";

        } elseif (isset($_POST["boton2"])) {

            $buttonPressed = "Botón 2";

        } elseif (isset($_POST["boton3"])) {

            $buttonPressed = "Botón 3";
        }
    }
    ?>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

        <input type="submit" name="boton1" value="Botón 1">
        <input type="submit" name="boton2" value="Botón 2">
        <input type="submit" name="boton3" value="Botón 3">

    </form>

    <p>Botón presionado: <?php echo $buttonPressed; ?></p>
</body>
</html>
