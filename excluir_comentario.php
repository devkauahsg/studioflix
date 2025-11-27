<?php
include "conexao.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $id = $_POST['id'];

    $stmt = $conn->prepare("DELETE FROM comentarios WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();

    $voltar = $_SERVER['HTTP_REFERER'] . (str_contains($_SERVER['HTTP_REFERER'], '?') ? '&msg=excluido' : '?msg=excluido');
    
    header("Location: $voltar");
    exit();
}

?>