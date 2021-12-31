<?php

class Pessoa{

	private $pdo;

	public function __construct($dbname,$host,$user,$pass)
	{

		try{
		 $this->pdo = new PDO("mysql:dbname=".$dbname.";host=".$host,$user,$pass);
		}

		catch(PDOexception $e)
		{
			echo "ERRO COM O BANCO DE DADOS: ".$e->getMessage();
		}

	}

	public function buscarDados()
	{

		$listagem = $this->pdo->prepare("SELECT * FROM noticias ORDER BY id DESC");
		$listagem->execute();

		while($lista = $listagem->fetch(PDO::FETCH_ASSOC))
		{
			$id = $lista["id"]; #variavel recebe id do row
            echo '<div class="content"><div class="title"><h3>';
            echo $lista["titulo"]; #titulo
            echo '</h3></div><div class="desc"><p>';
            echo $lista["categoria"]; #categoria
            echo '</p></div><div class="btnn"><button><a href="operations/conteudo.php?id='.$id.'">Acessar</a></button></div> </div>';
		}
	
	}

	public function postarNoticia($titulo, $categoria, $conteudo)
    {
        $cmd = $this->pdo->prepare("INSERT INTO noticias(titulo, categoria,conteudo) VALUES(:t, :d, :c)");
        $cmd->bindValue(":t",$titulo);
        $cmd->bindValue(":d",$categoria);
        $cmd->bindValue(":c",$conteudo);
        $cmd->execute();
    }

	public function visualizarNoticia($id)
	{	

		$listagem = $this->pdo->prepare("SELECT * FROM noticias WHERE id = $id");
		$listagem->execute();

		while($lista = $listagem->fetch(PDO::FETCH_ASSOC))
		{
			echo '<div class="container">';                
            echo  '<div class="title"><h2>'.$lista["titulo"].'</h2></div>'; #titulo 
            echo '<br><div class="content-news"><p>';                
            echo  $lista["conteudo"]; #conteudo
            echo '</p></div></div>';
		}

	}

	public function pesquisaNoticia($busca)
	{
	
		$listagem = $this->pdo->prepare("SELECT * FROM noticias WHERE titulo or conteudo LIKE '%$busca%'");
		$listagem->execute();

		while($lista = $listagem->fetch(PDO::FETCH_ASSOC))
		{
			$id = $lista["id"]; #variavel recebe id do row
            echo '<div class="content"><div class="title"><h3>';
            echo $lista["titulo"]; #titulo
            echo '</h3></div><div class="desc"><p>';
            echo $lista["categoria"]; #categoria
            echo '</p></div><div class="btnn"><button><a href="operations/conteudo.php?id='.$id.'">Acessar</a></button></div> </div>';
		}
		
	}

}

