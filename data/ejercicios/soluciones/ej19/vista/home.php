<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style= <?php
//comprobar si existe una cookie 
    if(isset($_COOKIE['color'])){
        //poner un color de fonde a la página, cogiéndolo de la cookie
        echo "background-color:".$_COOKIE['color'].";";
    }
   ?> >
    <h2>Hola bienvenido</h2>

</body>
</html>