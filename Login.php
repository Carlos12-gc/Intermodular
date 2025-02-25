<?php
session_start();
include 'connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['register'])) {
        // Registro de usuario
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $correoElectronico = $_POST['correoElectronico'];
        $password = $_POST['password'];

        // Asignar rol de usuario por defecto
        $role = 'user';

        $sql = "INSERT INTO users (username, apellido, email, password, role) VALUES ('$nombre', '$apellido', '$correoElectronico', '$password', '$role')";
        if ($conn->query($sql) === TRUE) {
            echo "Registro exitoso. Ahora puedes iniciar sesión.";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } elseif (isset($_POST['login'])) {
        // Inicio de sesión
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            $_SESSION['username'] = $user['username'];
            $_SESSION['role'] = $user['role']; // 'admin' or 'user'
            header('Location: administrador.php');
        } else {
            echo "Invalid username or password";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="login.php" method="POST">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit" name="login">Login</button>
    </form>
</body>
</html>