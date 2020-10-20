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
        'nombre' => 'Robers',
        'apellido' => 'Cardenas',
        'edad' => 19,
        'email' => 'sadsd@gmail.com'
    ];
    // Insertar.
    $estudiante->create($alumno);

    /* Mostrar datos estudiantes.

    $resultados = $estudiante->consultar();
    var_dump($resultados);

    // Si queremos mostrar datos en particular.

    foreach ($resultados as $estudiante) {
        echo $estudiante['nombre'];
    } 
    */

    // Actualizar
    //$estudiante->actualizar($alumno);

    // Eliminar
    //$alumno = ['email' => 'sadsd@gmail.com'];
    //$estudiante->eliminar('', $alumno); // Agregando todos en el string vacio eliminaremos todos los datos de la BD.
    ?>
</body>

</html>