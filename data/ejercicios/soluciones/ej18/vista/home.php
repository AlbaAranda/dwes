<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <form name="formulariodeseos" action="?method=new" method="post">
    <h2>Lista de Deseos: </h2>
        <p>
            <select name="lista" id="lista" required>
                <option value="movil">Movil</option>
                <option value="tv">Tv</option>
                <option value="coche">Coche</option>
                <option value="ordenador">Portatil</option>
                <option value="auriculares">Auriculares</option>
                <option value="videoconsola">Videoconsola</option>
            </select>
        </p>
        <input type="submit" name="envio" id="envio" value="Agregar Deseo">
        <br><br>
    </form>
    <form name="borrar" action="?method=delete" method="post">
        <h3>Borar un deseo</h3>
        <label for="deseo">Indice</label>
        <input type="text" name="indice"> 
        <input type="submit" name="borrar" id="borrar" value="Borrar deseo">
        <br><br>
    </form >
    <form name="vaciar" action="?method=empty" method="post">
        <h3>Vaciar lista</h3>
        <input type="submit" name="vaciar" id="vaciar" value= "Vaciar lista">
        <br><br>
    </form>
    <form name="logout" action="?method=close" method="post">
        <h3>Cerrar la sesion</h3>
        <input type="submit" name="close" id="close" value= "Cerrar Sesión">
    </form>
</body>
</html>
