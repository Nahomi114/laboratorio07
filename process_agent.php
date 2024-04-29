<?php
session_start();

function validateInput($data) {
    $data = trim($data);
    $data = htmlspecialchars($data);
    return $data;
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = validateInput($_POST['nombre']);
    $agente_id = validateInput($_POST['agente_id']);
    $departamento_id = validateInput($_POST['departamento_id']);
    $num_misiones = validateInput($_POST['num_misiones']);
    $descripcion_mision = validateInput($_POST['descripcion_mision']);


    header("Location: dashboard.php");
    exit();
}
?>
