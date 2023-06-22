<?php
if(isset($_POST)){
    $data = file_get_contents("php://input");
    $pedido = json_decode($data, true);
    $id = (int)$pedido['id'];

    var_dump($pedido);
    $db = mysqli_connect("localhost", "root", "", "phpintermedio", 3307);
    $stmt = mysqli_stmt_init($db);
    mysqli_stmt_prepare($stmt, "UPDATE pedidos SET estado = 'Finalizado' WHERE id = ?");
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
}