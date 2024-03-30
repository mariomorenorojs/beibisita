<?php
// Establecer el nuevo nombre de usuario y contraseña
$usuarioCorrecto = "Dianis30";
$contrasenaCorrecta = "30/08/2022";

// Verificar si se enviaron datos de inicio de sesión
if (isset($_POST['username']) && isset($_POST['password'])) {
    // Obtener los datos enviados por el formulario de inicio de sesión
    $usuario = $_POST['username'];
    $contrasena = $_POST['password'];

    // Verificar si los datos de inicio de sesión son válidos
    if ($usuario === $usuarioCorrecto && $contrasena === $contrasenaCorrecta) {
        // Credenciales válidas, redirigir a la página indicada
        header("Location: https://mariomorenorojs.github.io/princes.github.io/");
        exit();
    } else {
        // Credenciales inválidas, mostrar mensaje de error
        echo "Usuario o contraseña incorrectos";
    }
}
?>
