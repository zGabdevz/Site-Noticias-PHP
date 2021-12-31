<?php 
 include("../config/navbar.php");

 #pega id da URL e identifica a notícia à ser exibida.
 $id = addslashes($_GET["id"]); 

 #funcao para buscar dados da notícia.
 $conn->visualizarNoticia($id);

 include("footer.php");
?>
</body>
</html>