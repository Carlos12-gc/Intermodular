<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "intermodular";
$conn = new mysqli($servername, $username,$password,$dbname);
if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}
?>

<?php 
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $Nombre = $_POST["nombre"];
    $Apellido = $_POST["apellido"];
    $correoElectronico = $_POST["correoElectronico"];
    
    $sql = "INSERT INTO formulario(nombre,apellido,correoElectronico) VALUES('$Nombre','$Apellido','$correoElectronico')";

    if ($conn->query($sql) === TRUE) {
        echo "Nuevo registro creado con éxito";
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
       }

?>