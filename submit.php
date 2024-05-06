<?php
include 'conexion.php';

// Validar datos
if (empty($_POST['location']) || empty($_POST['person']) || empty($_POST['date']) || empty($_POST['time'])) {
    echo '<script>alert("Todos los campos son obligatorios"); window.location= "index.php";</script>';
    exit();
}

// Recibir los datos del formulario
$lugar = $_POST['location'];
$persona = $_POST['person'];
$dia = $_POST['date'];
$hora = $_POST['time'];

// Preparar la sentencia SQL
$sql = "INSERT INTO citas (lugar, persona, dia, hora) VALUES (?, ?, ?, ?)";

// Preparar la sentencia preparada
$stmt = $conexion->prepare($sql);

if (!$stmt) {
    echo '<script>alert("Error en la preparación de la consulta"); window.location= "index.php";</script>';
    exit();
}

// Vincular parámetros
$stmt->bind_param("ssss", $lugar, $persona, $dia, $hora);

// Ejecutar la sentencia
if ($stmt->execute()) {
    echo '<script>alert("Cita agendada correctamente"); window.location= "citas.php";</script>';
} else {
    echo '<script>alert("Error al agendar cita"); window.location= "index.php";</script>';
}

// Cerrar la sentencia y la conexión
$stmt->close();
$conexion->close();
?>
