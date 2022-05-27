<?php

    session_start();
    if (isset($_SESSION['usuario'])) {
        header("Location:index.php");
        exit();
    }

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
<form action="config/login.php" method="POST">
        <fieldset>
            <legend>Login</legend>        
            <div class="input-text">
                <input type="text" name="NomeUsuario" id="txtNomeUsuario" placeholder=" " required>
                <label for="txtNomeUsuario">Nome de Usuário</label>
            </div>
            
            <div class="input-text">
                <input type="password" name="Senha" id="txtSenha" placeholder=" " required>
                <label for="txtSenha">Senha</label>
            </div>
            
            <div class="buttons">
                <input type="submit" value="Entrar">
                <a href="index.php" class="btn-voltar">Voltar</a>
            </div>
        </fieldset>
    </form>

    <footer> 
        <p>Desenvolvido por Eduardo Vasconcelos &copy</p>
    </footer>
</body>
</html>