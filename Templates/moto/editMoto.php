<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>edit moto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<?php
include("navbar.html")
?>

<div class="container">
    <h1>Edit de moto</h1>
    <form action="" method="POST">
        <div class="form-group">
            <label for="id">Brand:</label>
            <input type="number" class="form-control" id="id" name="id" placeholder="id" required>
        </div>
        <div class="form-group">
            <label for="brand">Brand:</label>
            <input type="text" class="form-control" id="brand" name="brand" placeholder="brand" required>
        </div>
        <div class="form-group">
            <label for="model">Model:</label>
            <input type="text" class="form-control" id="model" name="model" placeholder="model" required>
        </div>
        <div class="form-group">
            <label for="type">Type:</label>
            <input type="text" class="form-control" id="type" name="type" placeholder="Enduro, Custom, Sportive, Roadster" required>
        </div>
        <div class="form-group">
            <label for="price">Price:</label>
            <input type="number" class="form-control" id="price" name="price" placeholder="price" required>
        </div>
        <div class="form-group">
            <label for="image">Image:</label>
            <textarea class="form-control" id="image" name="image" rows="3" placeholder="image url" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>

</body>
</html>