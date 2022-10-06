<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Página de chequeo de credenciales</h1>
    <h2>Si has has llegado aqui eres un heroes</h2>

    <?php

    if (isset($_GET['envio'])) {
        if (!empty($_GET['nombreusu'])) {
            $usuario = $_GET['nombreusu'];
            echo "<br> Usuario introducido: " . $usuario;
        } else {
            echo "<br> <h3>No has introducido ningun usuario</h3>";
        }
        if (!empty($_GET['passwd'])) {
            $password = $_GET['passwd'];
            echo "<br> Contraseña introducida: " . $password;
        } else {
            echo "<br> <h3>No has introducido ninguna contraseña</h3>";
        }
    }

    /*echo "<br> El nombre de usuario introducido es: " . $_GET['nombreusu'];*/

    /*echo "<br> La contraseña es: " . $_GET['passwd'];*/

    if (isset($_GET['envio'])) {
        if (!empty($_GET['asignaturas'])) {
            $asignaturas = $_GET['asignaturas'];
            foreach ($asignaturas as $asignatura) {
                echo "<br> Te encanta el lenguaje de programacion : " . $asignatura;
            }
        } else {
            echo "<br> NO te gusta la programacion !";
        }
    }

    //Recoger datos de checkbox
    if (isset($_GET["envio"])) {
        $equipobasket = $_GET["equipo"];
        if (!empty($equipobasket)) {

            echo "<br>Tu equipo de basket preferido es: " . $equipobasket;
        } else {
            echo "<br>No has elegido ningún equipo";
        }
    }

    //Recoger datos de select(lista desplegable)
    if (isset($_GET["envio"])) {
        $menupreferido = $_GET["menus"];
        if (!empty($menupreferido)) {

            echo "<br>Tu menu preferido es: " . $menupreferido;
        } else {
            echo "<br>No has elegido ningún menu";
        }
    }

    if (isset($_GET["envio"])) {
        $menupreferidos = $_GET["menusm"];
        if (!empty($menupreferidos)) {
            foreach ($menupreferidos as $menu)
                echo "<br>Tu menu preferido es: " . $menu;
        } else {
            echo "<br>No has elegido ningún menu";
        }
    }



    if (isset($_GET["envio"])) {
        $ip = $_GET["ip"];
        if (!empty($ip)) {

            echo "<br>La ip del servidor es: " . $ip;
        } else {
            echo "<br>No se ha podido averiguSar la ip del servidor";
        }
    }
    ?>
</body>

</html>