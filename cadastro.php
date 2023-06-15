<?php
include_once "conexao.php";

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$usuaro = $_POST['usuario'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$senhaCRIP = sha1($senha);

$slq = mysqli_query($mysql,"SELECT * FROM usuarios WHERE usuario = '$usuaro'");

if ($slq->num_rows > 0){
    echo "ja existe este usuario";
}else{
    $slq2 = mysqli_query($mysql, "INSERT INTO usuarios(nome, sobrenome, usuario, email, senha) VALUES ('$nome', '$sobrenome', '$usuaro', '$email', '$senhaCRIP')");
    echo "cadastro realizado com sucesso";
}

header("cadastro.html");

mysqli_close($mysql);