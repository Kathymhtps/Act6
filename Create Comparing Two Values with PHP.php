<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparison Form</title>
</head>
<body>

<form method="post" action="process_form.php">
    <label for="valorA">Valor A:</label>
    <input type="number" name="valorA" required>
    <br>
    <label for="valorB">Valor B:</label>
    <input type="number" name="valorB" required>
    <br>
    <input type="submit" value="Comparar">
</form>

</body>
</html>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $valorA = $_POST["valorA"];
    $valorB = $_POST["valorB"];


    if ($valorA > $valorB && $valorA != $valorB) {
        $message = "El valor de A es mayor y diferente que B";
    } elseif ($valorA < $valorB && $valorA != $valorB) {
        $message = "El valor de A es menor y diferente que B";
    } else {
        $message = "Los valores de A y B son iguales o no se pueden comparar";
    }


    echo $message;
}
?>