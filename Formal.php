<?php
    include 'connection.php';
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formal</title>
    <link rel="stylesheet" href="StyleFormal.css">
</head>
<body>
    <header>
        <div class="logo">Para ocasiones importantes </div>
        <nav>
            <ul>
                <li><img src="/ProyectoIntermodular/Images/mssd.jpg" alt="MasimoDutti"></li>
               <li><img src="/ProyectoIntermodular//Images/pik.webp" alt="Pikolinos"></li>
                <li><img src="/ProyectoIntermodular/Images/TommyHlfg.png" alt="TommyHlfg"></li>
            </ul>
        </nav>
    </header>
    <section class="Parrafo1">
        <p></p>
    </section>
    <?php
    $sql = "SELECT * FROM productos WHERE categoria = 'formal'";
    $result = $conn->query($sql);
    ?>

    <section class="Parrafo2">
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
