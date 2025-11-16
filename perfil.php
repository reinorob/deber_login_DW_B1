<?php
session_start();
if(!isset($_SESSION['loguear'])){
    header('location: index.php');
    exit;
}
$userName = $_SESSION['name'] ?? 'Usuario Desconocido';
$userEmail = $_SESSION['email'] ?? 'No disponible';
$userId = $_SESSION['id'] ?? 'N/A';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Perfil</title>
    <link rel="stylesheet" href="estilo-perfil.css" /> 
</head>
<body class="loguear">
    <nav class="navegador">
        <h1>Mi Perfil</h1>
       
    </nav>
    
    <div class="contenido">
        <h2>Informacion de la Cuenta de: "<?=htmlspecialchars($userName) ?>"</h2>
        <hr>
        
        <table>
            <tr>
                <th>Informacion</th>
                <th>Datos</th>
            </tr>
            <tr>
                <td>Nombre del Usuario: </td>
                <td>"<?=htmlspecialchars($userName) ?>"</td>
            </tr>
            <tr>
                <td>Correo Electrónico: </td>
                <td>"<?=htmlspecialchars($userEmail) ?>"</td>
            </tr>
            <tr>
                <td>Numero de ID: </td>
                <td>"<?=htmlspecialchars($userId) ?>"</td>
            </tr>
        </table>
        
        <p class="notaP">Actualice su perfil, si quieres ue los demas sepan de ti</p>
         <a href="iniciar.php">Inicio</a>
        <a href="salida.php">Cerrar Sesion</a>
        
    </div>
</body>
</html>