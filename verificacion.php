<?php
 session_start();
 $DATABASE_HOST = 'localhost';
 $DATABASE_USER = 'root';
 $DATABASE_PASS = '';
 $DATABASE_NAME = 'login_db';
 $conexion = mysqli_connect($DATABASE_HOST,$DATABASE_USER,$DATABASE_PASS,$DATABASE_NAME);

 if(mysqli_connect_error()){
    exit('No se encuentra registrado');

    if (!isset($_SESSION['captcha_respuesta'], $_POST['captcha_respuesta'])) {
    exit('Error de seguridad. Por favor, recarga la página de inicio.');
}

$respuesta_esperada = $_SESSION['captcha_respuesta'];
$respuesta_usuario = (int)$_POST['captcha_respuesta'];

if ($respuesta_usuario !== $respuesta_esperada) {
    unset($_SESSION['captcha_respuesta']);
    exit('Error: La respuesta de la verificación de seguridad es incorrecta.');
}

unset($_SESSION['captcha_respuesta']);
 }
 if(!isset($_POST['username'], $_POST['password'])){
    header('location: index.php');
    exit;
 }
 if($stmt = $conexion->prepare('SELECT id, password, name, email FROM cuentas WHERE username = ?')){
    $stmt->bind_param('s', $_POST['username']);
    $stmt->execute();
 }

 $stmt->store_result();
 if($stmt->num_rows > 0){
$stmt->bind_result($id, $hashed_password, $nombre_completo, $correo_electronico); 
$stmt->fetch();

if(password_verify($_POST['password'], $hashed_password)){
    session_regenerate_id();
    $_SESSION['loguear'] = TRUE;
    $_SESSION['name'] = $nombre_completo; 
    $_SESSION['email'] = $correo_electronico; 
    $_SESSION['id'] = $id; 
    header('location: iniciar.php');
    exit;
}
   
 }else{
    header('location: index.php');
    exit;
    }
$stmt->close();
?>