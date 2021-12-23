    <?php 
         include('conexao.php');
         $id = [];
         $id = $_GET["id"];

         #consulta ao banco na content.php
         $consult_id="SELECT * FROM noticias WHERE id = $id";
         $result_query_id=mysqli_query($conexao, $consult_id);

         while($rows = mysqli_fetch_array($result_query_id)){

                if($rows["id"]){
      
                    echo '<div class="container">';
                           #titulo 
                    echo  '<div class="title"><h2>'.$rows["titulo"].'</h2></div>';

                    echo '<br><div class="content-news"><p>';
                            #conteudo
                    echo  $rows["conteudo"];

                    echo '</p></div></div>'; 

                  break;

                 }else{
                    echo ' error ';
                 }
            }
    ?>