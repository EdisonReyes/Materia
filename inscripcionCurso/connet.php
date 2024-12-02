<?php
// Configuración de conexión
$servidor = "localhost"; // Dirección del servidor
$usuario = "tu_usuario"; // Usuario de la base de datos
$contraseña = "tu_contraseña"; // Contraseña del usuario
$base_datos = "nombre_base_datos"; // Nombre de la base de datos

// Crear conexión
$conn = new mysqli($servidor, $usuario, $contraseña, $base_datos);

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Confirmación de conexión exitosa
echo "Conexión exitosa a la base de datos";
?>

 