<?php

    session_start();

    if (!isset($_SESSION['usuario'])) {
        if (isset($_POST['NomeUsuario']) and isset($_POST['Senha'])) {
            require_once "config.php";
            $connect = new ConnectionMySql;
            $connect -> executeConnection();

            $selectData = "SELECT nomeUsuario, senha from cadastro_dashboard where nomeUsuario = '".$_POST['NomeUsuario']."' and senha = '".md5($_POST['Senha'])."'";
            
            $verificaSeExiste = $connect -> execute($selectData) -> fetchALL(PDO::FETCH_ASSOC);

            if ($verificaSeExiste) {
                unset($_POST);
                $_SESSION['usuario'] = $verificaSeExiste[0]["nomeUsuario"];
                header("Location:../index.php");
                exit();
            } else {       
                $_SESSION['error'] = '<span class="messageError">* Usuario ou senha inválido.</span>';       
                unset($_POST);
                header("Location:../login.php");
                exit();
            }
        }
    } else {
        // caso esteja logado, redireciona para index.
        header("Location:../index.php");
        exit();
    }

?>