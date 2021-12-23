<?php
$host='localhost';
$user='root';
$pass='';
$db_name='site_noticia_db';

$conexao = mysqli_connect($host,$user,$pass,$db_name);

if(!$conexao){
	echo 'erro'.mysqli_connect_error();
}