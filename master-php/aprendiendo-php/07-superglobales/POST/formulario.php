<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulario en PHP</title>
</head>
<body>
    <h1>Formulario en PHP</h1>
    <form method="POST" action="recibir.php">
       
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" />
        
        <label for="apellidos">Apellidos</label>
        <input type="text" name="apellidos" />
        
        <input type="submit" value="Enviar" />
        
    </form>
</body>
</html>