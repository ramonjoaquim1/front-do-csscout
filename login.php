<?php
session_start(); // Inicia a sessão (se ainda não estiver iniciada)

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém os dados do formulário
    $login = $_POST["login"];
    $senha = $_POST["senha"];

    // Conecta ao banco de dados (substitua com suas configurações)
    $servername = "seu_servidor";
    $username = "seu_usuario";
    $password = "sua_senha";
    $dbname = "seu_banco_de_dados";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verifica a conexão
    if ($conn->connect_error) {
        die("Falha na conexão com o banco de dados: " . $conn->connect_error);
    }

    // Prepara a instrução SQL para verificar as credenciais (substitua com a tabela e colunas reais)
    $sql = "SELECT * FROM tabela_usuarios WHERE login = ? AND senha = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $login, $senha);
    $stmt->execute();

    // Verifica se as credenciais são válidas
    $result = $stmt->get_result();
    if ($result->num_rows == 1) {
        // Credenciais corretas, inicia a sessão e redireciona para a página de tela inicial
        $_SESSION["usuario_logado"] = true; // Você pode armazenar mais informações da sessão conforme necessário
        header("Location: tela_inicial.php");
        exit();
    } else {
        // Credenciais inválidas, exibe mensagem de erro
        echo "Credenciais inválidas. Tente novamente.";
    }

    // Fecha a conexão com o banco de dados
    $stmt->close();
    $conn->close();
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
