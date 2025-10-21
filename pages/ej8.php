<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
</head>
<body>
    <?php
    echo "<p>Tabla de 2.</p>";
    echo "<p>Usando for: </p>";
    for ($i=2; $i<=20; $i=$i+2) {
        echo "<p>$i</p>";
    }
    echo "<p>Usando while: </p>";
    $w=0;
    while ($w<=20) {
        echo "<p>$w</p>";
        $w=$w+2;
    }

    echo "<p>Usando do-while: </p>";
    $d=0;
    do {
        echo "<p>$d</p>";
        $d=$d+2;
    } while ($d<=20);
    ?>
</body>
</html>