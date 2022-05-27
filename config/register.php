<?php

    session_start();

    if (!isset($_SESSION['usuario'])) {
        // se estiver não estiver na sessão, pode fazer cadastro.
        if (isset($_POST['Nome'])) {
            require_once "config.php";
            $connect = new ConnectionMySql;
            $connect -> executeConnection();

            $selectData = "SELECT nomeUsuario, email from cadastro_dashboard where nomeUsuario = '".$_POST['NomeUsuario']."' or email = '".$_POST['Email']."'";

            $insertData = "INSERT INTO cadastro_dashboard (nome, sobrenome, nomeUsuario, email, senha) values ('".$_POST['Nome']."','".$_POST['Sobrenome']."','".$_POST['NomeUsuario']."','".$_POST['Email']."','".md5($_POST['Senha'])."')";


            $verificaSeExiste = $connect -> execute($selectData) -> fetchALL(PDO::FETCH_ASSOC);

            if (!count($verificaSeExiste)) {
                $dados = $connect -> execute($insertData);
                unset($_POST);
                header("Location:../index.php");
                exit();
            } else {
                echo "não foi possível fazer o cadastro, email ou nome de usuario já cadastrado";
                unset($_POST);
            }       
        }
    } else {
        // caso esteja logado, redireciona para index.
        header("Location:../index.php");
        exit();
    }

?>