<?php
session_start();
function generar_captcha_pregunta() {
    $num1 = rand(1, 9);
    $num2 = rand(1, 9);
    $operador = ['+', '-'][rand(0, 1)];
    if ($operador == '-' && $num1 < $num2) {
        [$num1, $num2] = [$num2, $num1];
    }
    
    $pregunta = "$num1 $operador $num2 = ?";
    $respuesta = ($operador == '+') ? ($num1 + $num2) : ($num1 - $num2);
    
    $_SESSION['captcha_respuesta'] = $respuesta;

    return $pregunta;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>KINGDOM</title> 
    <link rel="stylesheet" href="estilo-pag.css" /> 
</head>
<body>

<div class="login">
    
    <?php
    if (isset($_GET['registro']) && $_GET['registro'] == 'exito') {
        echo '<div class="mensaje-exito">
                  <p class="texto-bienvenida">Ahora eres parte de nosotros. Inicia sesión.</p>
              </div>';
    }
    ?>
    
    <h1>Bienvenido a Kingdom</h1>
    
    <form action="verificacion.php" method="post">
        
        <input type="text" name="name" id="nombre" placeholder="Inserte su nombre" />
        
        <input type="text" name ="username" id="Usuario" placeholder="Ingrese su Usuario o correo" required />
        
        <input type="password" name = "password" id="Contraseña" placeholder="Ingrese su Contraseña" required />
        
        <div class="captcha-group">
            <label for="captcha">Resuelve el ejercicio:</label>
            <input type="text" id="captcha" name="captcha_respuesta" 
                   placeholder="<?php echo generar_captcha_pregunta(); ?>" required />
        </div>
        
        <button type="submit">Iniciar sesión</button>
        
        <p> ¿No existes aún?</p>
        <a href="nuevo_us.html">Sé un usuario nuevo</a>
    </form>
</div>

</body>
</html>