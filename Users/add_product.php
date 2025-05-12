<?php
session_start();
if (!isset($_SESSION['username']) || ($_SESSION['role'] != 'admin' && $_SESSION['role'] != 'user')) {
    header('Location: login.php');
    exit();
}

include 'connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $categoria = $_POST['categoria'];
    $precio = $_POST['precio'];
    $imagen = $_POST['imagen'];

    $sql = "INSERT INTO productos (nombre, categoria, precio, imagen) VALUES ('$nombre', '$categoria', '$precio', '$imagen')";
    if ($conn->query($sql) === TRUE) {
        echo "Producto añadido correctamente";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<?php
session_start();
if (!isset($_SESSION['username']) || ($_SESSION['role'] != 'admin' && $_SESSION['role'] != 'user')) {
    header('Location: login.php');
    exit();
}

include 'connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];

    $sql = "DELETE FROM productos WHERE nombre = '$nombre'";
    if ($conn->query($sql) === TRUE) {
        echo "Producto retirado correctamente";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>