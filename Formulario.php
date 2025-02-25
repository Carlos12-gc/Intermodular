<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="ropa para hombres, moda masculina, streetwear, ropa de diseñador, ropa deportiva, marcas de lujo, tendencias de moda, outfits hombre">
    <meta name="robots" content="index, follow">
    <link rel="stylesheet" href="StyleFormulario.css">
    <title>Te damos la bienvenida</title>
</head>
<body>
    <form action="login.php" method="post">
        <div id="formulario">
            <center>       
                <h1>Registro de usuarios</h1>
            </center>
            <label for="nombre"></label>
            <input type="text" name="nombre" placeholder="Introduce tu nombre" required>

            <label for="apellido"></label>
            <input type="text" name="apellido" placeholder="Introduce tu apellido" required>

            <label for="correoElectronico"></label>
            <input type="email" name="correoElectronico" placeholder="Introduce tu Email" required>

            <label for="password"></label>
            <input type="password" name="password" placeholder="Introduce tu contraseña" required>

            <button type="submit" name="register">Enviar</button>
        </div>
    </form>
    <form action="login.php" method="post">
        <div id="sesion">
            <center>
                <h1>Inicio de sesion</h1>
            </center>
            <label for="username"></label>
            <input type="text" name="username" placeholder="Introduce tu nombre" required>

            <label for="password"></label>
            <input type="password" name="password" placeholder="Introduce tu contraseña" required>

            <button type="submit" name="login">Iniciar sesion</button>
        </div>
    </form>
</body>
</html>