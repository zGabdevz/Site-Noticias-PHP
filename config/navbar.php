<?php
#classes
include('classes/classes.php');
#conexao com banco de dados
include('conexao.php'); 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>WebNews</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <div id="navbar">
        <p><a href="index.php">LOGO</a></p>
        <ul>
            <li><a href='operations/cadastrar.php'>Cadastrar Notícias</a></li>
            <li><a href='index.php'>Exibir Notícias</a></li>
            <li>
                <form action='../operations/buscar.php' method='POST'>
                    <input type='search' name="busca" placeholder='Recentes..' />
                    <input type='submit' value='Pesquisar' />
                </form>
            </li>
        </ul>
    </div>