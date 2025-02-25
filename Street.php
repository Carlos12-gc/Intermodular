<?php
    include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="StyleStreet.css">
</head>
<body>
    <header>
        <div class="logo">Para el día a día</div>
        <nav>
            <ul>
                <li><img src="/ProyectoIntermodular/Images/Off-White-Symbol.png" alt="Off-white"></li>
                <li><img src="/ProyectoIntermodular/Images/Carhartt_logo.png" alt="Carhartt"></li>
                <li><img src="/ProyectoIntermodular/Images/fakegods.webp" alt="fakegods"></li>
            </ul>
        </nav>
    </header>
    <section class="Parrafo1">
        <p>Bienvenido a nuestra página de moda urbana.</p>
    </section>
    <section class="Parrafo2">
        <ul>

        <?php
    $sql = "SELECT * FROM productos WHERE categoria = 'Streetwear'";
    $result = $conn->query($sql);
    ?>


        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) { ?>
                <li class="Parrafo2li">
                    <img src="<?= htmlspecialchars($row['Imagen']) ?>" alt="">
                    <p><?= htmlspecialchars($row['nombre']) ?></p>
                    <p class="precio"><?= htmlspecialchars($row['Precio']) ?>€</p>
                    <button class="btn comprar">Comprar</button>
                </li>
            <?php }
        } ?>
        </ul>
    </section>



    <section class="contenedor-productos">
        <ul>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) { ?>
                <li class="Parrafo2li">
                    <img src="<?= htmlspecialchars($row['Imagen']) ?>" alt="">
                    <p><?= htmlspecialchars($row['nombre']) ?></p>
                    <p class="precio"><?= htmlspecialchars($row['Precio']) ?>€</p>
                    <button class="btn comprar">Comprar</button>
                </li>
            <?php }
        } ?>
        </ul>
    </section>
</body>
</html>
