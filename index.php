<?php

    session_start();
    require_once "config/config.php";
    $connect = new ConnectionMySql;
    $connect -> executeConnection();

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <?php
        if (!isset($_SESSION['usuario'])) {
            ?>
            <a href="cadastro.php">Cadastrar</a>
            <a href="login.php">Logar</a>
            <?php
        } else {
            $selectData = "SELECT * from cadastro_dashboard where nomeUsuario = '".$_SESSION['usuario']."'";

            $showUserData = $connect -> execute($selectData) -> fetchALL(PDO::FETCH_ASSOC);

            ?>

            <a href="dashboard.php">Dashboard</a>
            <a href="config/disconnect.php">Desconectar</a>
            <div>
                <p>Bem vindo (a) <?= $showUserData[0]['nome'];?> <?= $showUserData[0]['sobrenome'];?></p>
                <p>Nome de Usuário: <?= $showUserData[0]['nomeUsuario'];?></p>
                <p>Email: <?= $showUserData[0]['email'];?></p>
            </div>
            <?php
        }
    ?>

    <hr>
    <p>Desenvolvido por Eduardo Vasconcelos &copy</p>
</body>
</html>