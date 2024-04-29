<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}

$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Bienvenido, <?php echo $_SESSION['username']; ?></h1>
    <p>¡Aquí puedes acceder al formulario para ingresar los datos del agente secreto!</p>
    <!-- Agrega un enlace al formulario de ingreso de datos del agente secreto -->
    <a href="agent_form.php">Ingresar datos del agente secreto</a>
    <!-- Aquí podrías mostrar cualquier otro contenido del dashboard -->
</body>
</html>