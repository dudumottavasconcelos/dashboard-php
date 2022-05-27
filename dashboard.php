<?php

    session_start();
    if (!isset($_SESSION['usuario'])) {
        header("Location:index.php");
        exit();
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Dashboard</title>
</head>
<body>
    <div class="header">
        <nav class="menu">
            <ul>
                <li><a href="index.php" class="btn-inicio">Início</a></li>
                <li><a href="dashboard.php" class="btn-cadastro">Dashboard</a></li>
                <li><a href="config/disconnect.php" class="btn-desconectar">Desconectar</a></li>
            </ul>
        </nav> 
    </div>
</body>
</html>