<?php

include('conexion.php');
$stmt = mysqli_stmt_init($db);

$query = "INSERT INTO pedidos (codigo, descripcion, total, cantidad, estado, usuario_id, imagen_recibo) VALUES (?, ?, ?, ?, 'En Progreso', 1, ?)";

mysqli_stmt_prepare($stmt, $query);

$codigo = $_POST['codigo'];
$descripcion = $_POST['descripcion'];
$total = $_POST['total'];
$cantidad = $_POST['cantidad'];

$temp = $_FILES['reciboimagen']['tmp_name'];
$img_nombre = $_FILES['reciboimagen']['name'];


if ($_FILES['reciboimagen']['type'] == 'image/jpeg'){
    $original = imagecreatefromjpeg($temp);
} else if ($_FILES['reciboimagen']['type'] == 'image/png'){
    $original = imagecreatefrompng($temp);
} else {
    die("No se pudo crear la imagen");
}

$ancho_orig = imagesx($original);
$alto_orig = imagesy($original);


$anchonuevo = 500;
$altonuevo = round($anchonuevo * $alto_orig / $ancho_orig);


$copia = imagecreatetruecolor($anchonuevo, $altonuevo);

imagecopyresampled($copia, $original, 0, 0, 0, 0, $anchonuevo, $altonuevo, $ancho_orig, $alto_orig);

imagejpeg($copia, "assets/img/".$img_nombre, 100);

imagedestroy($original);
imagedestroy($copia);

$path = "assets/img/$img_nombre";

mysqli_stmt_bind_param($stmt, "ssdis", $codigo, $descripcion, $total, $cantidad, $path);

$ins = mysqli_stmt_execute($stmt);

header("Location: mostrar_contenido.php");