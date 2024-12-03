<?php
$host = 'localhost';  // Confirmado como válido
$usuario = 'root';
$contrasena = 'mimisasa';     // Tu contraseña para el usuario root
$base_de_datos = 'rrendic';

// Intentar conexión
$conexion = mysqli_connect($host, $usuario, $contrasena, $base_de_datos);

// Verificar conexión
if (!$conexion) {
    die('Error de conexión: ' . mysqli_connect_error());
}
echo 'Conexión exitosa';
?>
