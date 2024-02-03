<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtenha as credenciais do formulário
    $login = $_POST["login"];
    $senha = $_POST["senha"];

    // Faça a validação (substitua com a lógica real de validação)
    if ($login == "usuario" && $senha == "senha") {
        // Credenciais corretas, inicia a sessão
        $_SESSION["usuario_logado"] = true;

        // Redireciona para a página inicial
        header("Location: pagina_inicial.php");
        exit();
    } else {
        // Credenciais inválidas, responda com uma mensagem de erro
        $mensagem_erro = "Credenciais inválidas. Tente novamente.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

    <?php
    if (isset($mensagem_erro)) {
        echo "<p>$mensagem_erro</p>";
    }
    ?>

    <form method="POST" action="login.php">
        <label for="login">Login:</label>
        <input type="text" name="login" id="login" required>

        <br>

        <label for="senha">Senha:</label>
        <input type="password" name="senha" id="senha" required>

        <br>

        <input type="submit" value="Entrar">
    </form>

</body>
</html>
    