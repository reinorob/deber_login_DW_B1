<?php
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'login_db';

$conexion = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
    exit('Fallo en la conexión: ' . mysqli_connect_error());
}


if (!isset($_POST['name'], $_POST['username'], $_POST['password'], $_POST['email'])) {
    exit('Error: Completa el formulario de registro.');
}

$name = $_POST['name'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];


if (strlen($name) < 2) {
    exit('Error: El nombre es demasiado corto.');
}
if (strlen($password) < 6) {
    exit('Error: La contraseña debe contener más de 6 caracteres.');
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    exit('Error: No es un correo válido.');
}

if (!preg_match('/^[a-zA-Z0-9]+$/', $username)) {
    exit('Error: El nombre de usuario solo puede contener letras y números.');
}

if ($stmt = $conexion->prepare('SELECT id FROM cuentas WHERE username = ? OR email = ?')) {
    $stmt->bind_param('ss', $username, $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        exit('Error: Este usuario o correo electrónico ya están registrados.');
    } else {
        
        if ($stmt = $conexion->prepare('INSERT INTO cuentas (name, username, password, email) VALUES (?, ?, ?, ?)')) {
            $password_hash = password_hash($password, PASSWORD_DEFAULT);
            $stmt->bind_param('ssss', $name, $username, $password_hash, $email);
            
            if ($stmt->execute()) {
                header('Location: index.php?registro=exito'); 
                exit;
            } else {
                exit('Error al insertar el usuario: Inténtalo más tarde.');
            }
        } else {
            exit('Error: Fallo en la preparación de la inserción.');
        }
    }
    $stmt->close();
} else {
    exit('Error: Fallo en la preparación de la consulta de verificación.');
}
$conexion->close();
?>