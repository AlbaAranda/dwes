<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <form name="formulariodeseos" action="?method=new" method="post">
    <h1>Lista de Deseos: </h1>
    <h3>Hoy me apetece comporar...</h3>
        <p>
            <select name="lista" id="lista" required>
                <option value="vaqueros">Vaqueros</option>
                <option value="movil">Telefono movil</option>
                <option value="coche">Coche</option>
                <option value="collar">Collar</option>
                <option value="cd">Cd</option>
            </select>
        </p>
        <input type="submit" name="envio" id="envio" value="Agregar Deseo">
    </form>
    <form name="borrar" action="?method=delete" method="post">
        <h3>Borar un deseo</h3>
        <label for="deseo">Indice</label>
        <input type="text" name="indice"> 
        <input type="submit" name="borrar" id="borrar" value="Borrar deseo">
    </form >
    <form name="vaciar" action="?method=empty" method="post">
        <input type="submit" name="vaciar" id="vaciar" value= "Vaciar lista">
    </form>
    <form name="logout" action="?method=close" method="post">
        <input type="submit" name="close" id="close" value= "Cerrar Sesión">
    </form>
</body>
</html>
