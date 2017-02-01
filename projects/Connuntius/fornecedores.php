<!DOCTYPE html>
<html>
	<head>
		<?php include("head.php"); ?>
	</head>
	<body>
        <?php include("header.php"); ?>
        
        <div class="main box oneCol">
            <?php 
                if (isset($_GET['forn'])) {
                    listaNews($_GET['forn']);
                } 
            ?>    
                
            
                
            
        </div>

	</body>
	
</html>