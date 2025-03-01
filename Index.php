<?php
session_start();
include 'connection.php';

// Cerrar sesión si el usuario hace clic en "Cerrar sesión"
if (isset($_GET['logout'])) {
    session_destroy(); // Elimina la sesión
    header("Location: index.php"); // Redirige a la página principal
    exit();
}

// Verificar si el usuario ha iniciado sesión
$usuario = isset($_SESSION['nombre']) ? $_SESSION['nombre'] : 'Invitado';
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
         <span>AreaStyle</span>
         <ul>
            <li><a href="Cart.php">Carrito</a></li>
            <li><a href="Deporte.php">Deporte</a></li>
            <li><a href="Formal.php">Formal</a></li>
            <li><a href="Street.php">Streetwear</a></li>
            <li><a href="PreColaboracion.html">Colaboraciones</a></li>
            <li><a href="Formulario.php">Únete a la familia</a></li>
            <li>
                Bienvenido, <?php echo $usuario; ?> 
                <?php if(isset($_SESSION['nombre'])): ?>
                    | <a href="index.php?logout=true">Cerrar sesión</a>
                <?php endif; ?>
            </li>
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

   <!-- Sección de Imágenes -->
   <section class="Seccion2">
      <ul class="Parrafo2">
         <li>
            <p>FORMAL</p>
            <a href="./Formal.php"><img src="Images/formal.jpg" alt="Estilo Formal" onerror="this.onerror=null; this.src='Images/default.jpg';"></a>
         </li>
         <li>
            <p>Casual</p>
            <a href="Street.php"><img src="Images/street.png" alt="Streetwear" onerror="this.onerror=null; this.src='Images/default.jpg';"></a>
         </li>
         <li>
            <p>Deportivo</p>
            <a href="Deporte.php"><img src="Images/deporte.png" alt="Ropa Deportiva" onerror="this.onerror=null; this.src='Images/default.jpg';"></a>
         </li>
      </ul>
   </section>

</body>
</html>
