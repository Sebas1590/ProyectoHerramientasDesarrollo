<?php
require_once "functions.php"   // ❌ ERROR 1: Falta punto y coma

// Ejecutar procedimiento almacenado (corregido)
$conn->query("CALL UpdateExpiredPayments()");

// Llamadas correctas
$result = getPagos($conn);
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
        </tr>
      </thead>
      <tbody>
        <?php if ($result && $result->num_rows > 0) { ?>
          
          <?php while ($row = $result->fetch_assoc() { ?>   <!-- ❌ ERROR 2: Falta cerrar el paréntesis del while -->

            <tr>
              <td><?= $row['alumno']; ?></td>
              <td><?= $row['plan']; ?></td>
              <td><?= $row['issue_date']; ?></td>
              <td><?= $row['estado']; ?></td>
            </tr>

          <?php } ?>

        <?php } else { ?>
          <tr><td colspan="4">No hay registros.</td></tr>
        <?php } ?>
      </tbody>
    </table>
</body>
</html>

<?php $conn->close(); ?>
