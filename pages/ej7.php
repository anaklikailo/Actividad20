<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
</head>
<body>
    <?php 
    $num = rand(1, 3);
    echo "<p>El numero generado aleatoriamente es: </p>";
    if ($num == 1) {
        echo "<p>uno</p>";
    } else if ($num == 2) {
        echo "<p>dos</p>";
        } else {
            echo "<p>tres</p>";
        }
    ?>
</body>
</html>