<?php
// Configurações de conexão
$host = 'localhost';
$usuario = 'root';
$senha = ''; // Sua senha do MySQL
$banco_de_dados = 'login'; // Nome do seu banco de dados

// Conexão com o banco de dados
$conexao = new mysqli($host, $usuario, $senha, $banco_de_dados);

// Verifica se há erros na conexão
if ($conexao->connect_error) {
    die("Erro de conexão: " . $conexao->connect_error);
}

// Defina o conjunto de caracteres para UTF-8
$conexao->set_charset("utf8");

// Agora você está conectado ao banco de dados e pronto para executar consultas.

// Lembre-se de fechar a conexão quando terminar de usá-la:
// $conexao->close();
?>
