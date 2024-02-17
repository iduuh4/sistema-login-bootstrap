<?php
require('config.php');

session_start();

//verificação caso tenha enviado algo
if (empty($_POST) or (empty($_POST["usuario"]) or (empty($_POST["senha"])))) {
    header("Location: index.php");
    exit;
}

$usuario = $_POST["usuario"];
$senha = $_POST["senha"];

//verificação se existem algo no banco de dados, campo usuario e senha
$sql = "SELECT * FROM usuarios
    WHERE usuario = '{$usuario}'
    AND senha = '{$senha}' ";

$res = $conn->query($sql) or exit($conn->error);

$row = $res->fetch_object();

$qtd = $res->num_rows;

if ($qtd > 0) {
    $_SESSION["usuario"] = $usuario;
    $_SESSION["nome"] = $row->nome;
    $_SESSION["tipo"] = $row->tipo;

    header("Location: dashboard.php");
    exit();
} else {
    header("Location: dashboard.php");
    print  "<script>alert('usuario e/ou senha incorreto(s)!);</script>";
    exit();
}
