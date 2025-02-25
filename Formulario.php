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
    <form action="form.php" method="post">
       

        <div id="formulario">
            <center>       
                <h1>Registro de usuarios</h1>
            </center>
                <label for="nombre"></label>
                 <input type="text" name="nombre" placeholder="Introduce tu nombre" required>

           

            
                <label for="apellido"></label>
                <input type="text" name="apellido" placeholder="Introduce tu apellido" required>
           

            
                <label for="correoElectronico"></label>
                <input type="text" name="correoElectronico" placeholder="Introduce tu Email" required>
            
                <button type="submit">Enviar</button>
        </div>


        <div id= "sesion">
            <center>
                <h1>Inicio de sesion</h1>
            </center>
            <label for="nombre"></label>
            <input type="text" placeholder="Introduce tu nombre">

            <label for="correoElectronico"></label>
            <input type="text" placeholder="Introduce tu Email">

            <button type="submit">Inciar sesion</button>
        </div>
    </form>
</body>
</html>