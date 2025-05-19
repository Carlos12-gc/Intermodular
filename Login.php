<?php
session_start();
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // REGISTRO
    if (isset($_POST['register'])) {
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $correo = $_POST['correoElectronico'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        // Verifica si ya existe el correo
        $checkQuery = "SELECT * FROM formulario WHERE correoElectronico = '$correo'";
        $result = $conn->query($checkQuery);

        if ($result->num_rows > 0) {
            echo "Este correo ya está registrado. Inicia sesión.";
        } else {
            $sql = "INSERT INTO formulario (nombre, apellido, correoElectronico, password) 
                    VALUES ($nombre, $apellido, $correo, $password)";
            if ($conn->query($sql) === TRUE) {
                echo $sql;
          
                $_SESSION['nombre'] = $nombre;
                header("Location: index.php");
                exit();
            } else {
                echo "Error al registrar: " . $conn->error;
            }
        }

    // LOGIN
    } elseif (isset($_POST['login'])) {
        $nombre = $_POST['nombre'];  // asegurate de usar el mismo input que en el formulario
        $password = $_POST['password'];

        $sql = "SELECT * FROM formulario WHERE nombre = '$nombre'";
        $result = $conn->query($sql);

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            if (password_verify($password, $row['password'])) {
                $_SESSION['nombre'] = $row['nombre'];
                header("Location: index.php");
                exit();
            } else {
                echo "Contraseña incorrecta.";
            }
        } else {
            echo "Usuario no encontrado.";
        }
    }
}

$conn->close();
?>
<?php
session_start();
session_destroy();
header("Location: index.php");
exit();
