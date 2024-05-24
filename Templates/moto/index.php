<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>add moto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<?php
//Affichage pour chaque motos

include("navbar.html");
if (isset($motos)){
    foreach ($motos as $moto)
    {
        echo("$motos->getAll()");
    }
}
?>
</body>
