<?php 
include("config/navbar.php");

?>
<div class="container">
        <div class="row">
			<?php
                $conn->buscarDados();
			?>
        </div>
    </div>

    <?php include("config/footer"); ?>
</body>
<html>