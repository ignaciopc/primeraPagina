
<?php
session_start();

// Comprueba si no existe ninguna sesión con usuario
if (!isset($_SESSION['usuario'])) {
    // La función session_destroy() se utiliza para destruir toda la información registrada en una sesión.
    session_destroy();
    // Muestra el alert en JavaScript para notificar al usuario
    echo '<script>alert("No has iniciado sesión, inicia y vuelve a intentarlo");</script>';
    // Redirige al usuario a index.php después del alert
    die(); // Termina el script después de la redirección
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Bienvenido</h1>
    <a href="php/cerrar_sesion.php">Cerrar Sesion</a>
</body>
</html>