<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Citas</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Lista de Citas</h1>
        <a href="agregar_cita.php">Agendar Nueva Cita</a>
        <table>
            <thead>
                <tr>
                    <th>Lugar</th>
                    <th>Persona</th>
                    <th>Día</th>
                    <th>Hora</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'conexion.php';

                // Consultar citas
                $sql = "SELECT * FROM citas";
                $result = $conexion->query($sql);

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>" . $row["lugar"] . "</td>
                                <td>" . $row["persona"] . "</td>
                                <td>" . $row["dia"] . "</td>
                                <td>" . $row["hora"] . "</td>
                                <td>
                                    <a href='editar_cita.php?id=" . $row["id"] . "'>Editar</a>
                                    <a href='eliminar_cita.php?id=" . $row["id"] . "' onclick='return confirm(\"¿Estás seguro de querer eliminar esta cita?\")'>Eliminar</a>
                                </td>
                            </tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>No hay citas agendadas</td></tr>";
                }
                $conexion->close();
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
