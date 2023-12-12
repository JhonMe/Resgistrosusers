<?php
session_start();
$servername = "localhost"; // Nombre del servidor MySQL (generalmente "localhost" en entorno local)
$username = "root"; // Tu nombre de usuario de MySQL
$password = ""; // Tu contraseña de MySQL
$database = "registro_empleados"; // Nombre de la base de datos

// Crear una conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $database); // Cambia $database a $dbname

// Verificar la conexión
if ($conn->connect_error) {
    die("Error en la conexión a la base de datos: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["usuario"];
    $contrasena = $_POST["contrasena"];

    // Consulta SQL para verificar las credenciales
    $sql = "SELECT id FROM usuarios WHERE usuario = '$usuario' AND contrasena = '$contrasena'";
    $resultado = $conn->query($sql);

    if ($resultado->num_rows == 1) {
        // Inicio de sesión exitoso
        $_SESSION["usuario"] = $usuario;
        header("Location: inicio.php"); // Redirige a la página de inicio después del inicio de sesión
        exit();
    } else {
        // Credenciales incorrectas
        echo "Usuario o contraseña incorrectos.";
    }
}

// Cierra la conexión
$conn->close();
?>