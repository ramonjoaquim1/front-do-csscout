<?php
// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Obtém os dados do formulário
    $login = $_POST["login"];
    $senha = $_POST["senha"];

    // Validação básica dos dados (pode ser necessário adicionar validações mais robustas)
    if (empty($login) || empty($senha)) {
        echo "Por favor, preencha todos os campos.";
    } else {
        // Conexão com o banco de dados (substitua com suas configurações)
        $servername = "seu_servidor";
        $username = "seu_usuario";
        $password = "sua_senha";
        $dbname = "seu_banco_de_dados";

        $conn = new mysqli($servername, $username, $password, $dbname);

        // Verifica a conexão
        if ($conn->connect_error) {
            die("Falha na conexão com o banco de dados: " . $conn->connect_error);
        }

        // Insere os dados no banco de dados (substitua com a estrutura real do seu banco)
        $sql = "INSERT INTO tabela_usuarios (login, senha) VALUES ('$login', '$senha')";

        if ($conn->query($sql) === TRUE) {
            echo "Cadastro realizado com sucesso!";
        } else {
            echo "Erro ao cadastrar: " . $conn->error;
        }

        // Fecha a conexão com o banco de dados
        $conn->close();
    }
} else {
    // Se alguém acessar diretamente o arquivo, redirecione ou trate conforme necessário
    echo "Acesso não permitido.";
}
?>
