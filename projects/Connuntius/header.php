
<?php require('functions.php');
include("cadForm.php");
include("logForm.php");
 ?>

<div id="header">
    <div id="header-int">
        <a href="index.php"><img src="img/logo.png" id="logo" /></a>
        <h1 style="display:none;">Connuntius</h1>
        <ul class="menu">
            <?php $logado=logado();

             if ($logado){ ?>
                <li><a href="">Deck</a></li>
                <li id="l_cat"><a>Categorias
                    <div id="categorias"><?php listaCats(); ?></div>
                </a></li>
                <li><a href="">Conta</a></li>
                <li><a href="logout.php">Logout</a></li>
            <?php } else { ?>
                
                <li id="l_cat"><a>Categorias
                    <div id="categorias"><?php listaCats(); ?></div>
                </a></li>
                <li><a onclick="document.getElementById('cadForm').style.display = 'block'; document.getElementById('cadFormO').style.display = 'block';">Cadastre-se</a></li>
                <li><a onclick="document.getElementById('logForm').style.display = 'block'; document.getElementById('logFormO').style.display = 'block';">Login</a></li>
            <?php } ?>
        </ul>
        <div class="clear"></div>
    </div>
</div>