<?php
if (!function_exists('file_get_contents')) {
    die('PHP is not properly configured. Please check XAMPP installation.');
}
$json = file_get_contents('usuarios.json');
$usuarios = json_decode($json, true);

foreach ($usuarios as $usuario) {
    echo "Nome: " . $usuario['nome'] . "<br>";
    echo "Email: " . $usuario['email'] . "<br><br>";
}
?>