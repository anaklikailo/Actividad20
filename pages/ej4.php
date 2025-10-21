<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    <?php 
    $num = rand(1, 100);
    echo "<p>Numero generado aleatoramiento: $num</br></p>";
    if ($num <= 50) {
        echo "<p>El número es menor o igual a 50.</p>";
    } else {
        echo "<p>El número mayor a 50.</p>";
    }
    ?>   
</body>
</html>