<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
</head>
<body>
    <h1>Panel de Administrador</h1>
    <?php if ($_SESSION['role'] == 'admin' || $_SESSION['role'] == 'user') { ?>
        <form action="add_product.php" method="POST">
            <h2>Añadir Producto</h2>
            <input type="text" name="nombre" placeholder="Nombre del producto" required>
            <input type="text" name="categoria" placeholder="Categoría" required>
            <input type="number" name="precio" placeholder="Precio" required>
            <input type="text" name="imagen" placeholder="URL de la imagen" required>
            <button type="submit">Añadir Producto</button>
        </form>

        <form action="remove_product.php" method="POST">
            <h2>Retirar Producto</h2>
            <input type="text" name="nombre" placeholder="Nombre del producto" required>
            <button type="submit">Retirar Producto</button>
        </form>
    <?php } else { ?>
        <p>No tienes permisos para acceder a esta página.</p>
    <?php } ?>
</body>
</html>