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
    <title>Cadastro</title>
</head>
<body>
<form action="config/register.php" method="POST">
        <fieldset>
            <p>
                <label for="txtNome">Nome</label>
                <input type="text" name="Nome" id="txtNome" placeholder="Nome" require>
            </p>

            <p>
                <label for="txtSobrenome">Sobrenome</label>
                <input type="text" name="Sobrenome" id="txtSobrenome" placeholder="Sobrenome" require>
            </p>

            <p>
                <label for="txtNomeUsuario">Nome de Usuário</label>
                <input type="text" name="NomeUsuario" id="txtNomeUsuario" placeholder="Nome de Usuário" require>
            </p>

            <p>
                <label for="txtEmail">Email</label>
                <input type="email" name="Email" id="txtEmail" placeholder="Email" require>
            </p>
            
            <p>
                <label for="txtSenha">Senha</label>
                <input type="password" name="Senha" id="txtSenha" placeholder="Senha" require>
            </p>
            
            <p>
                <input type="submit" value="Enviar">
                <button><a href="index.php">Voltar</a></button>
            </p>
        </fieldset>
    </form>
</body>
</html>