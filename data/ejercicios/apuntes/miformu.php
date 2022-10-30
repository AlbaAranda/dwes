<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width>, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form name="miformu" action="autoriza.php" method="get">
        <p>
            <label for="nombre">Introduce Nombre: </label>
            <input type="text" name="nombreusu" id="nombreusu">
        </p>
        <p>
            <label for="password">Introduce la contraseña</label>
            <input type="password" name="passwd" id="passwd">
        </p>
        <p>
            <p>Elige tu asignatura preferida</p>
            <label for="asignatura1">PHP</label>
            <input type="checkbox" name="asignaturas[]" id="asignatura1" value="PHP" checked>
            <label for="asignatura2">Javascript</label>
            <input type="checkbox" name="asignaturas[]" id="asignatura2" value="Javascript">
            <label for="asignatura3">Phyton</label>
            <input type="checkbox" name="asignaturas[]" id="asignatura3" value="Phyton" checked>
            <label for="asignatura4">SQL</label>
            <input type="checkbox" name="asignaturas[]" id="asignatura4" value="SQL">
            
            
        </p>
        <p>Elige tu equipo de basket favorito: </p>
        <p>
            <label for="equipo1">Casademont Zaragoza</label>
            <input type="radio" name="equipo" id="equipo1" value="Casademont" checked>
            <label for="equipo2">San Pablo Burgos</label>
            <input type="radio" name="equipo" id="equipo2" value="Burgos">
            <label for="equipo3">Obradoiro</label>
            <input type="radio" name="equipo" id="equipo3" value="Obradoiro">
        </p>
        <p>Elige tu plato favorito: </p>
        <p>
            <select name="menus" id="menus">
                <option value="codillo">Codillo Asado</option>
                <option value="ensalda">Ensalada Cesar</option>
                <option value="macarrones">Macarrones con tomate</option>
                <option value="brocoli">Brocoli</option>
            </select>
        </p>
        <p>Elige tus platos favorito: </p>
        <p>
            <select name="menusm[]" id="menus" multiple="5" required>
                <option value="codillo">Codillo Asado</option>
                <option value="ensalda">Ensalada Cesar</option>
                <option value="macarrones">Macarrones con tomate</option>
                <option value="brocoli">Brocoli</option>
            </select>
        </p>


        <input type="hidden" name="ip" value="<?= $_SERVER['SERVER_ADDR']?>">
        <input type="submit" name="envio" id="envio" value="Enviar Datos">
    </form>
</body>
</html>