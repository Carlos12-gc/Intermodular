<?php
include 'connection.php';
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda Online - AreaStyle</title>
    <link rel="stylesheet" href="Style.css">
</head>
<body>
<header>
    <nav class="logo">
        AreaStyle
        <ul>
            <li><a href="Cart.php">Carrito</a></li>
            <li><a href="Deporte.php">Deporte</a></li>
            <li><a href="Formal.php">Formal</a></li>
            <li><a href="Street.php">Streetwear</a></li>
            <li><a href="Formulario.php">Únete a la familia</a></li>

            <?php if (isset($_SESSION['nombre'])): ?>
                <li>Bienvenido, <?= htmlspecialchars($_SESSION['nombre']) ?>!</li>
                <li><a href="logout.php">Cerrar sesión</a></li>
            <?php endif; ?>
        </ul>
    </nav>

    <form action="buscar.php" method="GET">
        <input type="text" name="query" placeholder="Buscar productos...">
        <button type="submit">Buscar</button>
    </form>
</header>

<section class="Seccion1">
    <main>
        <p class="Parrafo1">
            En AreaStyle tenemos una gran variedad de selección de estilos para vestir tanto formal como casual o deportivo.
            Nuestro objetivo ha sido enfocarnos en el sector masculino para que cada vez que necesites comprar ropa
            sepas qué es lo que buscas o, si deseas cambiar de estilo o empezar, que sepas que esta es tu tienda de 
            confianza y que en todas tus compras estaremos dispuestos a ayudarte para cumplir tus expectativas.
        </p>
    </main>
</section>

<section class="Seccion2">
    <ul class="Parrafo2">
        <li>
            <p>FORMAL</p>
            <a href="./Formal.php"><img src="Images/formal.jpg" alt="formal"></a>
        </li>
        <li>
            <p>Casual</p>
            <a href="Street.php"><img src="Images/street.png" alt="Street"></a>
        </li>
        <li>
            <p>Deportivo dominguero</p>
            <a href="Deporte.php"><img src="Images/deporte.png" alt="Deporte"></a>
        </li>
    </ul>
</section>
</body>
</html>
