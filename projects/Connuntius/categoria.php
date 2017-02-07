<!DOCTYPE html>
<html>
	<head>
		<?php include("head.php"); ?>
	</head>
	<body>
        <?php include("header.php"); ?>
        
        <div class="main box oneCol">
            <?php 
                if (isset($_GET['cat'])) {
                    echo "<div class='forn-list'>";
                    if (logado()) {
                        echo "<a class='addCat' href='addCat.php?cat=".$_GET['cat']."'>Add Categoria</a>";
                    }
                    listaForns($_GET['cat'], $_GET['catn']);
                    echo "</div>";

                } else {
                   include("error.php");
                }
            

            ?>
                   
            
            
        </div>

	</body>
	
</html>