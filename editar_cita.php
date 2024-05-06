<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Procesar formulario de edición de cita
    // ...
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Consultar cita por ID
    $sql = "SELECT * FROM citas WHERE id=$id";
    $result = $conexion->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $lugar = $row["lugar"];
        $persona = $row["persona"];
        $dia = $row["dia"];
        $hora = $row["hora"];
    } else {
        echo "Cita no encontrada";
    }

    $conexion->close();
} else {
    echo "ID de cita no especificado";
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Cita</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Editar Cita</h1>
        <form method="POST" action="">
            <label for="lugar">Lugar:</label>
            <input type="text" id="lugar" name="lugar" value="<?php echo $lugar; ?>">
            <br>
            <label for="persona">Persona:</label>
            <input type="text" id="persona" name="persona" value="<?php echo $persona; ?>">
            <br>
            <label for="dia">Día:</label>
            <input type="date" id="dia" name="dia" value="<?php echo $dia; ?>">
            <br>
            <label for="hora">Hora:</label>
            <input type="time" id="hora" name="hora" value="<?php echo $hora; ?>">
            <br>
            <input type="submit" value="Guardar">
        </form>
    </div>
</body>
</html>
