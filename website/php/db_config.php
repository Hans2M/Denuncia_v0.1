<?php
// db_config.php
$servername = "localhost";
$username = "root"; // Usuario predeterminado en XAMPP
$password = ""; // Contraseña por defecto, generalmente vacía en XAMPP
$dbname = "denuncia";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
