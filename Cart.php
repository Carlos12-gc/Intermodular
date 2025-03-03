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
    
    <h1>AreaStyle</h1>

    <div id="registro">
        <div class="registro">
            <h3>Introduce tu nombre</h3>
            <input type="text" id="Nombre" placeholder="Tu nombre" required>

            <h3>Introduce tu Email</h3>
            <input type="email" id="Email" placeholder="Tu email" required>

            <h3>Introduce tu dirección de envío</h3>
            <input type="text" id="direccion" placeholder="Dirección" required>

            <h3>Introduce tu número de teléfono</h3>
            <input type="text" id="telefono" placeholder="Teléfono" required>

            <h3>Notas adicionales (opcional)</h3>
            <input type="text" id="Notas" placeholder="Notas">
        </div>
    </div>

  
  

    <div class="carrito">
        <h2>Carrito de Compras</h2>
        <ul id="lista-carrito"></ul>
        <p>Total: €<span id="Total">0</span></p>
        <button onclick="procederCompra()">Proceder al formulario de compra</button>
    </div>

    <div id="formulario-compra" style="display: none;">
        <h2>Formulario de compra</h2>
        <form action="compra.html" method="post">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" required>
            
            <label for="direccion">Dirección:</label>
            <input type="text" id="direccion" name="direccion" required>

            <button type="submit">Realizar compra</button>
            <button type="delete">Eliminar compra</button>
        </form>
    </div>

</body>
</html>
