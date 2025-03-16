<?php
include 'config.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = trim($_POST['nombre']);
    $email = trim($_POST['email']);
    $telefono = trim($_POST['telefono']);

    if (empty($nombre) || empty($email) || empty($telefono)) {
        echo "<script>alert('Todos los campos son obligatorios.'); window.location.href='index.html';</script>";
        exit;
    }

    $nombre = $conn->real_escape_string($nombre);
    $email = $conn->real_escape_string($email);
    $telefono = $conn->real_escape_string($telefono);

    $sql = "INSERT INTO clientes (nombre, email, telefono) VALUES ('$nombre', '$email', '$telefono')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Registro exitoso. ¡Bienvenido, $nombre!'); window.location.href='index.html';</script>";
    } else {
        echo "<script>alert('Error: " . $conn->error . "'); window.location.href='index.html';</script>";
    }
    $conn->close();
}
?>
