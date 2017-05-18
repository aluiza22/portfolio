<?php session_start(); 
include('conexao.php');
$page_title = 'Feed';
$scrapsArray = $baldeScraps->find();
$scraps = $scrapsArray->sort(array("date" => -1));
?>
<!doctype html>
<html>
<head>
	<?php include('head.php'); ?>
</head>
<body style="background:<?php echo $bg;?>">
	<header>
		<?php include('header.php'); ?>
	</header>

	<section id="feed">
		<div class="row">
	      	<div class="large-12 columns">	 
	      		<?php if ($logado) { ?>
	      		<article>
					<div class="scraper">						
						<form id="FormScrap" name="FormScrap" action="postaScrap.php" method="POST" data-abide>
							<input type='hidden' value='<?php echo $userID;?>' name='user'/>							
							<input type='hidden' value='feed' name='url'/>
							<fieldset class="ibs"><textarea name="scrap" id="scrap" placeholder="Escreva seu scrap" required></textarea></fieldset>
							<input type='submit' class="posta" value=''>
							<div class="clearfix"></div>
						</form>
				</article>		      		    		
				<?php } 
				foreach ($scraps as $scrap) { 
					if ($logado) {
						$gostou = $baldeScraps->findOne(array('gostou' => "$userID", '_id' => new MongoId($scrap['_id'])));
						$lixou = $baldeScraps->findOne(array('lixou' => "$userID", '_id' => new MongoId($scrap['_id'])));
					}
					$usuario = $baldeUsuarios->findOne(array('_id' => new MongoId($scrap["user"])));
				?>
					<article>
						<div class="scraper">
							<div class="large-1 columns"><img src="<?= ($usuario['imagem'] != '') ? $usuario['imagem']:'img/placeholder.jpg' ?>"></div>
							<?php if ($logado) { ?>
							<div class="large-10 columns"><a href="perfil.php?cod=<?php echo $scrap["user"]; ?>"><?php echo $usuario["nome"]; ?></a> <span class='data'><?php echo date('d/m/Y H:i:s',$scrap["date"]); ?></span></div>
							<div class="large-1 columns actions"><a title="Gostar" <?= ($gostou)?"class='opinou'":""?> href="gostar.php?scrap=<?php echo $scrap["_id"]; ?>&user=<?php echo $userID; ?>"><span aria-hidden="true" class="li_heart"></span></a> <a title="Lixar" <?= ($lixou)?"class='opinou'":""?> href="lixar.php?scrap=<?php echo $scrap["_id"]; ?>&user=<?php echo $userID; ?>"><span aria-hidden="true" class="li_trash"></span></a></div>
							<?php } else {?>
							<div class="large-11 columns"><a href="perfil.php?cod=<?php echo $scrap["user"]; ?>"><?php echo $usuario["nome"]; ?></a> <span class='data'><?php echo date('d/m/Y H:i:s',$scrap["date"]); ?></span></div>
							<?php } ?>
						</div>
						<div class="scrap">
							<?php echo $scrap["scrap"]; ?>	
						</div>
						<div class="clearfix"></div>
						<div class="coments">
							<?php 
							$scrapID =  $scrap["_id"];
							$comentarios = $baldeComentarios->find(array('scrap' => "$scrapID"));;							
							foreach ($comentarios as $comentario) { 
								$comenter = $baldeUsuarios->findOne(array('_id' => new MongoId($comentario['user'])));
								?>
								<hr/>
								<div class="coment-box">
									<div class="comenter">
										<div class="large-1 columns"><img src="<?= ($comenter['imagem'] != '') ? $comenter['imagem']:'img/placeholder.jpg' ?>"></div>
										<div class="large-11 columns"><a href="paginadapessoa.php?cod=<?php echo $comenter['id']?>"><?php echo $comenter['nome']?></a></div>
										<!-- <div class="large-1 columns actions"><span aria-hidden="true" class="li_heart"></span> <span aria-hidden="true" class="li_trash"></span></div> -->
									</div>
									<div class="coment">
										<?php echo $comentario['comentario'];?>
									</div>
								</div>
							<?php }
							?>
							<?php if ($logado) { ?>
							<hr/>
							<form name="FormComentario" id="FormComentario" action="postaComentario.php" method="POST" data-abide>
								<input type='hidden' name='scrap' value='<?php echo $scrap["_id"]; ?>' />
								<input type='hidden' name='user' value='<?php echo $userID; ?>' />							
								<input type='hidden' value='feed' name='url'/>
								<fieldset class="ibs"><textarea name="comentario" required placeholder="Deixe seu comentário"></textarea></fieldset>
								<input type='submit' value='' class='posta' />
								<div class="clearfix"></div>
							</form>
							<?php } ?>
						</div>
					</article>
				<?php }	
				?>
			</div>
    	</div>
	</section>

	
		<!-- <span aria-hidden="true" class="li_bubble"></span>
		<span aria-hidden="true" class="li_heart"></span>
		<span aria-hidden="true" class="li_star"></span>
		<span aria-hidden="true" class="li_trash"></span>
		<span aria-hidden="true" class="li_camera"></span>
		<span aria-hidden="true" class="li_pen"></span>
		<span aria-hidden="true" class="li_location"></span>
		<span aria-hidden="true" class="li_like"></span>
		<span aria-hidden="true" class="li_photo"></span>
		<span aria-hidden="true" class="li_paperplane"></span> -->

	<footer>
		<?php include('footer.php'); ?>
	</footer>

	<script type="text/javascript">
        $(document).ready(function() {
          $("#cadastroForm").validate({
            // Define as regras
            rules:{
                nome:{required: true},
                email:{required: true, email: true},
                senha:{required: true, minlength: 6}
            },
            // Define as mensagens de erro para cada regra
            messages:{
                nome:{
                    required: "Campo obrigatório"
                },
                email:{
                    required: "Campo obrigatório",
                    email: "E-mail inválido"
                },
                senha:{
                    required: "Campo obrigatório",
                    minlength: "Mínimo 6 dígitos"
                }
            }
          });  
          $("#loginForm").validate({
            // Define as regras
            rules:{
                email:{required: true, email: true},
                senha:{required: true}
            },
            // Define as mensagens de erro para cada regra
            messages:{                
                email:{
                    required: "Campo obrigatório",
                    email: "E-mail inválido"
                },
                senha:{
                    required: "Campo obrigatório"
                }
            }
          });           
              
          
        });  
      </script> 

</body>
</html>