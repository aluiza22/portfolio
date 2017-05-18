		<div class="row">
	      	<div class="large-12 columns">
	      		<?php if ($logado) { ?>
				<span class="large-3 columns">
					<a title='Feed' href='feed.php'><img src="img/logoM.png"></a>
				</span>
				<span class="large-3 columns">
					<a title='Perfil' href='perfil.php?cod=<?php echo $_SESSION['id'] ?>'><span aria-hidden="true" class="li_user"></span></a>
				</span>
				<span class="large-3 columns">
					<a title='Configurações' href='editar_perfil.php'><span aria-hidden="true" class="li_settings"></span></a>
				</span>
				<span class="large-3 columns">
					<a title='Sair' href='logout.php'><span aria-hidden="true" class="li_key"></span></a>
				</span>
				<?php } else { ?>
				<span class="large-6 columns">
					<img src="img/logoM.png"> Plugged
				</span> 
				<span class="large-6 columns">
					<a onclick="$('#login').slideToggle('slow');"><span aria-hidden="true" class="li_key"></span></a>
				</span> 
				<div class="clearfix"></div>
				<section id="login" style="display:none;">
					<div class="row">
				      	<div class="large-12 columns">
							<form  class="large-6 columns" action="cadastra.php" method="POST" id="cadastroForm">
								<h3 class='formTitle'>Cadastre-se já!</h3>
								<input type='text' name='nome' id='nome' placeholder='Nome' />
								<input type='text' name='email' id='email' placeholder='Email' />
								<input type='password' name='senha' id='senha' placeholder='Senha' />
								<input type='submit' value='Cadastrar'>
							</form>
							<form  class="large-6 columns" action='loga.php' method='POST' id="loginForm">
								<h3 class='formTitle'>Já tem conta? Faça seu login!</h3>
								<input type='text' name='email' id='email' placeholder='Email' />
								<input type='password' name='senha' id='senha' placeholder='Senha' />
								<input type='submit' value='Logar'>
							</form>
						</div>
			    	</div>
				</section>
			<?php } ?>
			</div>
    	</div>