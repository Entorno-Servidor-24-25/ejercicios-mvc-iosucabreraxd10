<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lista de los usuarios</h1>
        <?php
        foreach ($users as $user) {
            echo "$user, ";
        }
        ?>
        <br>
    <a href="index.php">Create Another User</a>
</body>
</html>