<?php
    include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de la compra</title>
    <link rel="stylesheet" href="StyleCarrito.css">
    <script src="Script.js"></script>
</head>
<body>
    
    <h1>AreaStyle</h1>

    <div id="registro">
        <div class="registro">
            <h3>Introduce tu nombre</h3>
            <label for="Nombre"></label>
            <input type="text" id="Nombre" placeholder="" required>

            <div class="Email">
                <h3>Introduce tu Email</h3>
                <label for="Email"></label>
                <input type="email" id="Email" placeholder="" required>
            </div>

            <div class="direccion">
                <h3>Introduce tu direccion de envio</h3>
                <label for="direccion"></label>
                <input type="text" id="direccion" placeholder="" required>
            </div>

            <div class="telefono">
                <h3>Introudce tu numero de telefono</h3>
                <label for="telefono"></label>
                <input type="text" id="telefono" placeholder="" required>
            </div>

            <div class="Notas">
                <h3>Notas adicionales (opcional)</h3>
                <label for="Notas"></label>
                <input type="text" id="Notas" placeholder="" required>
            </div>
        </div>
    </div>
    <div id="productos">
        <div class="producto" data-id="1" data-nombre="Producto 1" data-precio="10">
            <h3>Producto 1</h3>
            <p>Precio:</p>
            <button onclick="agregarAlCarrito(1,'Producto 1',10)">Añadir al carrito</button>
        </div>

        <div class="producto" data-id="2" data-nombre="Producto 2" data-precio="20">
            <h3>Producto 2</h3>
            <p>Precio:</p>
            <button onclick="agregarAlCarrito(2,'Producto 2',20)">Añadir al carrito</button>
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
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre">
            <br>
            <label for="direccion">Direccion</label>
            <input type="text" id="direccion" name="direccion" required>
            <br>
            <button type="submit">Realizar compra</button>
        </form>
    </div>
</body>
</html>