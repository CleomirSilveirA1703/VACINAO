<?php
include_once '../ProjetoVacina/conexao.php';

if(isset($_POST['usuario']) || isset($_POST['senha'])){

    $user = $mysql->real_escape_string($_POST['usuario']);
    $senha = $mysql->real_escape_string($_POST['senha']);
    $senhacrip = sha1($senha);

    $sql_code = "SELECT * FROM usuarios WHERE usuario = '$user' AND senha = '$senhacrip';";
    $sql_query = $mysql->query($sql_code) or die("Flha na execução: " . $mysql->error);

    $quantidade = $sql_query->num_rows;

    if($quantidade > 0){
        $usuario = $sql_query->fetch_assoc();

        if(!isset($_SESSION)){
            session_start();
        }
        $_SESSION['id'] = $usuario['id'];
        $_SESSION['usuario'] = $usuario['usuario'];

        header('Location: painel.html');

    }else{
        echo "Falha ao logar! usuario ou senha incorretos";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../projetoVacina/login.css">
    <title>Login</title>
</head>
<body>
    <form action="painel.html" method="post" class="formulario">
        <div name="formLogin" id="formLogin">
                <div class="divForm">
<!--                    <label for="usuario">Usuário:</label>-->
                    <input type="text" id="usuario" name="usuario" placeholder="usuário">
                </div>

                <div class="divForm">
<!--                    <label for="senha">Senha:</label>-->
                    <input type="password" id="senha" name="senha" placeholder="senha">
                </div> 

                <div class="divForm">
                    <input type="submit" id="entrar"  name="ecao" value="Entrar">
                </div>
        </div>
    </form>
    <nav>
        <a class="logo" href="">Login</a>
        <div class="mobile-menu">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
        <ul class="nav-list">
            <!--            <li><a href="cadastro_vacinas.php">Cadastra Vacina</a></li>-->
            <li><a href="">Sobre</a></li>
            <!--            <li><a href="">Contato</a></li>-->
            <li><a href="cadastro.html">Cadastre-se</a></li>
        </ul>
    </nav>
    <main></main>
    <script src="../projetoVacina/login.js"></script>

</body>
</html>