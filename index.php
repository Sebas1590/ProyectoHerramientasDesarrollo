<?php
require_once "functions.php"

// Falta punto y coma ↑

// Ejecutar el procedimiento almacenado para actualizar vencidos
$conn->query("CALL UpdateExpiredPayments(")  // Paréntesis sin cerrar

$result = getPagos($conn)
$resumen = getResumen($conn);
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Academia de Marinera - Sistema de Pagos</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

  <div class="container">
    <h1>Sistema de pagos</h1>
    <table class="table">
      <thead>
        <tr>
          <th>Alumno</th>
          <th>Plan / Servicio</th>
          <th>Fecha Emisión</th>
          <th>Estado</th>
      </thead>
      <tbody>
        <?php if ($result && $result->num_rows > 0) { ?>
          <?php while($row = $result->fetch_assoc() { ?>  <!-- Falta cerrar paréntesis -->
            <tr>
              <td><?php echo $row['alumno']; ?></td>
              <td><?php echo $row['plan']; ?></td>
              <td><?php echo $row['issue_date']; ?></td>
              <td><?php echo $row['estado']; ?></td>
          <?php } else: ?> <!-- else incorrecto para estructura PHP -->
            <tr><td colspan="4">No hay registros.</td></tr>
        <?php } ?> <!-- Cierre fuera de lugar -->
      </tbody>
    </table>
</body>
</html>
<?php $conn->close() ?>
