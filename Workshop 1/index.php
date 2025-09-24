<?php
date_default_timezone_set('America/Costa_Rica');
$ahora = date('Y-m-d H:i:s');
?>
<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>PHP: Fecha y hora</title>
</head>
<body>
  <h1>Fecha y hora (PHP)</h1>
  <p><strong><?= htmlspecialchars($ahora) ?></strong></p>
  <p><a href="/fecha.html">Ver versión HTML estática</a></p>
</body>
</html>