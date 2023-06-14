<?php
include './conexao.php';
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$data_servico = $_POST['data_servico'];
$situacao = $_POST['situacao'];

$inserir = $conn->query("INSERT INTO ordem_servico VALUES
      (0,'$nome','$cpf','$data_servico')");

if ($inserir) {
    echo 'Cadastro REALIZADO';
    echo '<a href="cadastro.php"><p><br><hr>voltar<hr></a></p>';
} else {
    echo 'Cadastro Não REALIZADO';
    echo '<a href="cadastro.php"><p><br><hr>voltar<hr></a></p>';
}

