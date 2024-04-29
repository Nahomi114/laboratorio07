<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agente Secreto</title>
    <link rel="stylesheet" href="styles.css"> <!-- Agrega tus estilos aquí -->
</head>
<body>
    <h2>Formulario de Agente Secreto</h2>
    <form method="post" action="process_agent.php">
        <label for="nombre">Nombre:</label><br>
        <input type="text" id="nombre" name="nombre" required><br><br>
        
        <label for="agente_id">Agente ID:</label><br>
        <input type="text" id="agente_id" name="agente_id" required><br><br>
        
        <label for="departamento_id">Departamento ID:</label><br>
        <input type="text" id="departamento_id" name="departamento_id" required><br><br>
        
        <label for="num_misiones">Número de Misiones:</label><br>
        <input type="number" id="num_misiones" name="num_misiones" required><br><br>
        
        <label for="descripcion_mision">Descripción de la nueva misión:</label><br>
        <textarea id="descripcion_mision" name="descripcion_mision" rows="4" cols="50"></textarea><br><br>
        
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
