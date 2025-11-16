<?php
session_start();
if(!isset($_SESSION['loguear'])){
    header('location: index.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class ="loguear">
    <nav class ="navegador">
        <a href="salida.php"> Cerrar session</a>
    </nav>
    
</body>
</html>