<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php
        $colores = ["red","blue","yellow","green"];
        foreach($colores as $color) {
        ?>
        <!-- mostrar en una lista todos los colores que hay en el array-->
        <li><?= $color ?> <a href="?method=cambio&color=<?= $color ?>">Cambiar</a> </li>
        <?php
        }
        ?>

    </ul>
</body>
</html>