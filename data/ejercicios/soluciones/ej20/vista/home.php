<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style= <?php
//comprobar si existe una sesion 
    if(isset($_SESSION['color'])){
        //poner un color de fonde a la página, cogiéndolo de la sesion
        echo "background-color:".$_SESSION['color'].";";
    }
   ?> >
    <h2>Hola bienvenido</h2>

</body>
</html>