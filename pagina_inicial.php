<?php
session_start();

// Verifica se o usuário está logado
if (!isset($_SESSION["usuario_logado"]) || $_SESSION["usuario_logado"] !== true) {
    // Se não estiver logado, redireciona para a página de login
    header("Location: login.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CS Scout - Página Inicial</title>
    <!-- Seus estilos e links para CSS aqui -->
</head>
<body>

    <h1>Bem-vindo à Página Inicial do CS Scout</h1>

    <!-- Conteúdo da Página Inicial aqui -->

</body>
</html>
