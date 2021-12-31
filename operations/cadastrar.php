    <?php
        include("../config/navbar.php");

        $titulo = addslashes($_POST["title"]);
        $descricao = addslashes($_POST["desc"]);
        $conteudo = addslashes($_POST["content"]);
        $conn->postarNoticia($titulo, $descricao, $conteudo);
    ?>

    <div class="container">
      <form class="form-news" action="" method="POST">
            
         <label>Titulo da Noticia: </label><br>
         <input type="name" name="title" placeholder="Digite.." />
         <br>
         <label>Descricao: </label><br>
         <input type="name" name="desc" placeholder="Digite.." />
         <br>
         <label>Texto da notícia: </label><br>
         <textarea type="text" name="content" placeholder="Digite.."></textarea>
         <br>
         <input type="submit" value="Postar"/>
      </form>
    </div>

    <?php include("footer"); ?>
</body>
</html>