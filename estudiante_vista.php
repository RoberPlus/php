<?php
require_once __DIR__ . '/estudiante.php';
$estudiante = new estudiante_model();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php


    $alumno = [
        'nombre' => 'Rober',
        'apellido' => 'Cardenas',
        'edad' => 19,
        'email' => 'rober@gmail.com'
    ];

    $estudiante->create($alumno);

    ?>
</body>

</html>