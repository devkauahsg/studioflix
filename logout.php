<?php
    session_start();

    $nome_usuario = $_SESSION['nome'] ?? "Usuário";
    $msg = "$nome_usuario você foi desconectado!";

    session_destroy();

    header("Location: index.php?msg=" . urlencode($msg));
    exit;
?>