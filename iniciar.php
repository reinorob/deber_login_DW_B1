<?php
session_start();
if(!isset($_SESSION['loguear'])){
    header('location: index.php');
    exit;
}
$userName = $_SESSION['name'] ?? 'Usuario Desconocido';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KINGDOM</title>
    <link rel="stylesheet" href="estilo-perfil.css" />
</head>
<body class="loguear">
    <nav class="navegador-inciar">
        <h1>Bienvenido a KINGDOM <br>!<?=htmlspecialchars($userName) ?>!</h1>
        <div>
        <a href="perfil.php">Mi Perfil</a> 
        <a href="salida.php"> Cerrar Sesion</a>
        </div>
    </nav>
    
</body>
</html>