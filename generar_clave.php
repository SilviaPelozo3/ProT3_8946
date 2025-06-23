<?php
// Archivo temporal para generar un hash de contraseña

$clave_plana = 'admin123'; // Cambiá esto si querés otra clave
$hash = password_hash($clave_plana, PASSWORD_DEFAULT);

echo "<h3>Hash generado para la clave '$clave_plana':</h3>";
echo "<pre>$hash</pre>";
