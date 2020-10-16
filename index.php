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
    <h1>Admin Panel</h1>
    <a href="/views/estudiante.php">Estudiantes</a>
    <a href="#">Profesores</a>
    <a href="#">Cursos</a>
</body>

</html>