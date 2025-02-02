<?php
include 'db_config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Datos del formulario
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $departamento = $_POST['departamento'];
    $ciudad = $_POST['ciudad'];
    $direccion = $_POST['direccion'];
    $correo = $_POST['correoelectronico'];
    $telefono = $_POST['telefono'];
    $identificacion = $_POST['identificacion'];
    $iddelito = $_POST['iddelito'];
    $direccionafectado = $_POST['direccionafectado'];
    $nombreimplicado = $_POST['nombreimplicado'];
    $denuncia = $_POST['denuncia'];
    
    // Manejo de archivos
    if (isset($_FILES['archivos']) && $_FILES['archivos']['error'] === UPLOAD_ERR_OK) {
        $archivoNombre = $_FILES['archivos']['name'];
        $archivoTemp = $_FILES['archivos']['tmp_name'];
        $archivoContenido = file_get_contents($archivoTemp); // Leer archivo en formato binario
    } else {
        $archivoContenido = null;
    }

    // Inserción en la base de datos
    $stmt = $conn->prepare("INSERT INTO denuncias (nombre, apellido, departamento, ciudad, direccion, correoelectronico, telefono, identificacion, iddelito, direccionafectado, nombreimplicado, denuncia, archivos) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssssisssb", $nombre, $apellido, $departamento, $ciudad, $direccion, $correo, $telefono, $identificacion, $iddelito, $direccionafectado, $nombreimplicado, $denuncia, $archivoContenido);

    if ($stmt->execute()) {
        echo "Denuncia registrada con éxito.";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Método de solicitud no válido.";
}
?>

