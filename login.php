<?php
session_start();

$usuario = $_POST['usuario'];
$password = $_POST['password'];

$encrypted_password = md5($password);

include('conexion.php');

$stmt = mysqli_stmt_init($db);
mysqli_stmt_prepare($stmt, "SELECT username FROM usuarios WHERE username = ? AND password = ?");

mysqli_stmt_bind_param($stmt, "ss", $usuario, $encrypted_password);
mysqli_stmt_execute($stmt);
mysqli_stmt_bind_result($stmt, $user);

mysqli_stmt_fetch($stmt);

if ($user === $usuario){
    $_SESSION['user'] = $user;
    header('Location: mostrar_contenido.php');
} else{
    header('Location: index.php?error');
}

?>