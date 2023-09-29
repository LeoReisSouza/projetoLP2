<?php
include 'conexao.php';
include 'Usuario.php';

if (($_SERVER["REQUEST_METHOD"] == "POST")) {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $confirmarsenha = $_POST["confirmarsenha"];

    if ($senha === $confirmarsenha) {

        $usuario = new Usuario($conn);

        if ($usuario->cadastrar($nome, $email, $senha)) {

            header("Location: cadastrar-usuario-sucesso.php");
            exit();
        } else {
            echo "erro! tente novamente!";
        }
    }else{
            header("Erro de conexão com o banco de dados: " . $conn->connect_error);

    } 
}
