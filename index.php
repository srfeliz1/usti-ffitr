<?php
include("db.php"); // Inclui o arquivo de conexão com o banco de dados

if($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coleta os dados do formulário
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Prepara a consulta SQL para inserir os dados na tabela
    $sql = "INSERT INTO usuarios (username, password) VALUES ('$username', '$password')";

    // Executa a consulta SQL
    if ($conn->query($sql) === TRUE) {
        echo "Cadastro realizado com sucesso!";
    } else {
        echo "Erro ao cadastrar usuário: " . $conn->error;
    }
}
?>

<html>
<head>
    <title>Login Page</title>
</head>
<body>
    <div>
        <h2>Login</h2>
        <form action="" method="post">
            <label>Usuário:</label><br>
            <input type="text" name="username"><br>
            <label>Senha:</label><br>
            <input type="password" name="password"><br>
            <input type="submit" value="Login">
            <span><?php echo isset($error) ? $error : ''; ?></span>
        </form>
    </div>
</body>
</html>
