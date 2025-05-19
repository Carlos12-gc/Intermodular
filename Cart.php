<?php
    include 'connection.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de la compra</title>
    <link rel="stylesheet" href="StyleCarrito.css">
    <script defer src="Script.js"></script>
</head>
<body>
    <div class="carrito">
        <h2>Carrito de Compras</h2>
        <ul id="lista-carrito"></ul>
        <p>Total: €<span id="Total">0</span></p>
        <button onclick="procederCompra()">Proceder al formulario de compra</button>
    </div>

    <div id="formulario-compra" style="display: none;">
        <h2>Formulario de compra</h2>
        <form action="compra.html" method="post">
            <button type="submit">Realizar compra</button>
            <button type="delete">Eliminar compra</button>
        </form>
    </div>

</body>
</html>
