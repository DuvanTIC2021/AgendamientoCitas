<?php
include 'conexion.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Eliminar cita por ID
    $sql = "DELETE FROM citas WHERE id=$id";
    if ($conexion->query($sql) === TRUE) {
        echo "Cita eliminada correctamente";
    } else {
        echo "Error al eliminar cita: " . $conexion->error;
    }

    $conexion->close();
} else {
    echo "ID de cita no especificado";
}
?>
