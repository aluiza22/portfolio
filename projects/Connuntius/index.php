<!DOCTYPE html>
<?php $page_title="Home"; ?>
<html>
	<head>
		<?php include("head.php"); ?>
	</head>
	<body>
        <?php include("header.php"); ?>
        
        <div class="main box">
            <?php $logado=logado(); 

            if (!$logado) { ?>
               
            <div class="col2 cadastre">
                <h2>Não conhece o Connuntius?!</h2>
                <p>Aqui você fica atualizado nos seus assuntos preferidos<br> e ainda escolhe como ver suas notícias!<br>Faça seu cadastro e veja o mundo do seu jeito</p>
                <a onclick="document.getElementById('cadForm').style.display = 'block'; document.getElementById('cadFormO').style.display = 'block';">CADASTRE-SE JÁ!</a>
                

                <?php

                if (isset($_GET['cadastrou'])) {  

                    if ($_GET['cadastrou'] == yes) {
                        echo "<p style='color:#5A966E;'>Cadastro efetuado com sucesso!</p>";
                    } else if ($_GET['cadastrou'] == no) {
                        echo "<p style='color:#BF4A40;'>Erro ao efetuar cadastro!</p>"; 
                    }
                }
                ?>

            </div>

            <div class="col2 login-form">
                <h2>Acesse sua conta!</h2>
                <form method="POST" onsubmit="return validaFormLI();" action="loga.php">
                    <fieldset>
                        <label for="email">Email:</label>
                        <input type="text" id="emailli" name="email"/>
                    </fieldset>
                    <fieldset>
                        <label for="senha">Senha:</label>
                        <input type="password" id="senhali" name="senha"/>
                    </fieldset>

                    <input type="submit" value="Entrar" />
                    <div id="erroli"><?php if ($_GET['login'] === 'no') {echo '<p>Login incorreto!</p>';}?></div>
                </form>
            </div>

            <div class="clear"></div>
            <?php } ?>
            <div class="latest icons">
                
                <h2>Você conectado no que interessa</h2>
                <h3>Escolha uma categoria</h3>
                <ul><?php listaCats(); ?></ul>
                
            </div>
        </div>

    

	</body>
	
</html>