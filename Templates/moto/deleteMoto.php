<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>delete moto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<?php
include("navbar.html")
?>
<div class="container">
    <h1>Delete moto</h1>
    <form action="" method="POST">
        <div class="form-group">
            <label for="ID">ID:</label>
            <input type="number" class="form-control" id="id" name="id" placeholder="id" required>
        </div>
        <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>

</body>
</html>