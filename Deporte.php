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
        <div class="logo">El momento del entreno a llegado</div>
        <nav>
            <ul>
                <li><img src="/ProyectoIntermodular/Images/nikey.png" alt="nikey"></li>
                <li><img src="/ProyectoIntermodular/Images/adidas.webp" alt="adidas"></li>
                <li><img src="" alt=""></li>
            </ul>
        </nav>
    </header>
    <section class="Parrafo1">
        <p>Dalo todo con en tus entrenamientos</p>
    </section>
    <?php
    $sql = "SELECT * FROM productos WHERE categoria = 'deporte'";
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

    <section class="Parrafo4">
        <center>
            <p>Coach lukas mueller te muestra las zapatillas en accion desde alemania mostrando como es una perparacion
                para un iroman
            </p>
        </center>
        
        <center>
            <video width="640" height="360" controls>
                <source src="/ProyectoIntermodular/Video/videoplayback.mp4" type="video/mp4">
            </video>
        </center>
    </section>
</body>
</html>
