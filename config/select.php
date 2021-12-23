<?php
include('conexao.php');

#variaveis
  $i = 0;
  $title = [];
  $descricao = [];
  $conteudo = [];
  $id_code=[];

#consulta ao banco na index.php
$consult="SELECT * FROM noticias";
$result_query=mysqli_query($conexao, $consult);

#while
while($rows = mysqli_fetch_array($result_query)){

					$id[$i]=$rows["id"];
                    $title[$i] = $rows["titulo"];
                    $descricao[$i] = $rows["descricao"];
                    $conteudo[$i] = $rows["conteudo"];

                    echo '<div class="content"><div class="title"><h3>';

                    echo $title[$i];

                    echo '</h3></div><div class="desc"><p>';

                    echo $descricao[$i];

                    echo '</p></div>
                        <div class="btnn"><button><a href="content.php?id='.$id[$i].'">Acessar</a></button></div> </div>';

                  $i++;
	}

?>