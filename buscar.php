<?php
include 'connection.php';

$query = $_GET['query'];
$query = htmlspecialchars($query);
$query = $conn->real_escape_string($query);

$sql = "SELECT * FROM productos WHERE nombre LIKE '%$query%' AND (categoria = 'deporte' OR categoria = 'formal' OR categoria = 'streetwear')";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados de búsqueda</title>
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
                <li><a href="PreColaboracion.html">Colaboraciones</a></li>
                <li><a href="Formulario.php">Únete a la familia</a></li>
            </ul>
        </nav>
    </header>

    <section class="Seccion1">
        <main>
            <h1>Resultados de búsqueda para "<?php echo $query; ?>"</h1>
            <ul class="Parrafo2">
                <?php
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) { ?>
                        <li class="Parrafo2li">
                            <img src="<?= htmlspecialchars($row['Imagen']) ?>" alt="">
                            <p><?= htmlspecialchars($row['nombre']) ?></p>
                            <p class="precio"><?= htmlspecialchars($row['Precio']) ?>€</p>
                            <button class="btn comprar" onclick="agregarAlCarrito(<?= $row['id'] ?>, '<?= htmlspecialchars($row['nombre']) ?>', <?= $row['Precio'] ?>)">Comprar</button>
                        </li>
                    <?php }
                } else {
                    echo "<p>No se encontraron productos.</p>";
                }
                ?>
            </ul>
        </main>
    </section>
</body>
</html>