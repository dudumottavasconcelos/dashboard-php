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
    <link rel="stylesheet" href="style/style.css">
    <title>Dashboard</title>
</head>
<body>
    <?php
        if (!isset($_SESSION['usuario'])) {
            ?>
            <header>
                <nav class="menu">
                    <ul>
                        <li><a href="index.php" class="btn-inicio">Início</a></li>
                        <li><a href="cadastro.php" class="btn-cadastro">Cadastrar</a></li>
                        <li><a href="login.php" class="btn-login">Logar</a></li>
                    </ul>
                </nav>
            </header>
            <?php
        } else {
            $selectData = "SELECT * from cadastro_dashboard where nomeUsuario = '".$_SESSION['usuario']."'";

            $showUserData = $connect -> execute($selectData) -> fetchALL(PDO::FETCH_ASSOC);

            ?>
            
            <div class="header">
                <nav class="menu">
                    <ul>
                        <li><a href="index.php" class="btn-inicio">Início</a></li>
                        <li><a href="dashboard.php" class="btn-cadastro">Dashboard</a></li>
                        <li><a href="config/disconnect.php" class="btn-desconectar">Desconectar</a></li>
                    </ul>                    
                </nav>            
                
                <div class="informacoes">
                    <p class="bem-vindo">Bem vindo (a) <?= $showUserData[0]['nome'];?> <?= $showUserData[0]['sobrenome'];?></p>
                    <p>Nome de Usuário: <?= $showUserData[0]['nomeUsuario'];?></p>
                    <p>Email: <?= $showUserData[0]['email'];?></p>
                </div>
                
            </div>
            <?php
        }
    ?>

    <footer> 
        <p>Desenvolvido por XXX &copy</p>
    </footer>
</body>
</html>