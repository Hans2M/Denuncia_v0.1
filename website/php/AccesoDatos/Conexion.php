<?php
// db_config.php
$servername = "localhost";
$username = "hans"; // Usuario predeterminado en XAMPP
$password = "holahans"; // Contraseña por defecto, generalmente vacía en XAMPP
$dbname = "admi";
$port = 3306;

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
