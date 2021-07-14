<?php
session_start();
include('conexao.php');

if(empty($_GET['usuario']) || empty($_GET['senha'])) {
    header('location: http://localhost/Projeto_S%C3%ADmiosWeb/SimiosWeb/PHP/index.php');
    exit();
}

$usuario = mysqli_real_escape_string($conexao, $_GET['usuario']);
$senha = mysqli_real_escape_string($conexao, $_GET['senha']);

$query = "select usuario_id, usuario from usuario where usuario = '{$usuario}' and senha = md5('{$senha}')";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if ($row == 1) {
    $_SESSION['usuario'] = $usuario;
    header('location: painel.php');
    exit();
} else {
    $_SESSION['nao_autenticado'] = true;
    header('location: http://localhost/Projeto_S%C3%ADmiosWeb/SimiosWeb/PHP/index.php');
    exit();
}

?>
