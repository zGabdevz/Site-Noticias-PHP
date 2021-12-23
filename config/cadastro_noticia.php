<?php
include('conexao.php');

$titulo=$_POST["title"];
$descricao=$_POST["desc"];
$conteudo=$_POST["content"];

$sql="INSERT INTO noticias(titulo,descricao,conteudo) VALUES('$titulo','$descricao','$conteudo')";
$query=mysqli_query($conexao,$sql);

	if($query){
		echo '<p>Usuario Cadastrado com sucesso</p>';
		header('Location: ../cadastrar.php');
		exit();
	}else{
		echo '<p>Erro ao efetuar o cadastro</p>'. mysql_connect_error();
	}

mysql_close($conexao);
exit();


