<?php session_start(); 

$userID = $_SESSION["id"];
if (isset($_GET['cod'])) {
	$perfilID = $_GET['cod'];
} else {
	$perfilID = "$userID";
}
include('conexao.php');
$perfil = $baldeUsuarios->findOne(array('_id' => new MongoId($perfilID)));
$page_title = $perfil["nome"];
$scrapsArray = $baldeScraps->find(array('user' => $perfilID));
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

	<section id="top-user">
		<div class='row'>
			<div class="scraper large-12 columns">
				<div class="large-3 medium-6 small-12 columns"><img src="<?= ($perfil['imagem'] != '') ? $perfil['imagem']:'img/placeholder.jpg' ?>"></div>
				<div class="large-9 medium-6 small-12  columns">
					<h3><?php echo $perfil['nome']; ?></h3>
					<?php if (isset($perfil['descricao']) && $perfil['descricao'] != "") {echo $perfil['descricao']."<br/>";}?>
					<?php if (isset($perfil['idade']) && $perfil['idade'] != "") {echo $perfil['idade']."<br/>";}?>
					<?php if (isset($perfil['relacionamento']) && $perfil['relacionamento'] != "") {echo $perfil['relacionamento'];}?>
				</div>
			</div>
		</div>
	</section>

	<section id="feed">
		<div class="row">
	      	<div class="large-12 columns">
	      		<?php if ($perfilID == $userID) { ?>
	      		<article>
					<div class="scraper">						
						<form name="FormScrap" action="postaScrap.php" method="POST" data-abide>
							<input type='hidden' value='<?php echo $userID;?>' name='user'/>
							<input type='hidden' value='perfil' name='url'/>
							<fieldset class="ibs"><textarea name="scrap" placeholder="Escreva seu scrap" required></textarea></fieldset>
							<input type='submit' class="posta" value=''>
							<div class="clearfix"></div>
						</form>
				</article>
				<?php }
				foreach ($scraps as $scrap) { 
					$gostou = $baldeScraps->findOne(array('gostou' => "$userID", '_id' => new MongoId($scrap['_id'])));
					$lixou = $baldeScraps->findOne(array('lixou' => "$userID", '_id' => new MongoId($scrap['_id'])));
				?>
					<article>
						<div class="scraper">
							<div class="large-1 columns"><img src="<?= ($perfil['imagem'] != '') ? $perfil['imagem']:'img/placeholder.jpg' ?>"></div>
							<div class="large-10 columns"><a href="perfil.php?cod=<?php echo $scrap["user"]; ?>"><?php echo $perfil["nome"]; ?></a> <span class='data'><?php echo date('d/m/Y H:i:s',$scrap["date"]); ?></span></div>
							<div class="large-1 columns actions"><a title="Gostar" <?= ($gostou)?"class='opinou'":""?> href="gostar.php?scrap=<?php echo $scrap["_id"]; ?>&user=<?php echo $userID; ?>"><span aria-hidden="true" class="li_heart"></span></a> <a title="Lixar" <?= ($lixou)?"class='opinou'":""?> href="lixar.php?scrap=<?php echo $scrap["_id"]; ?>&user=<?php echo $userID; ?>"><span aria-hidden="true" class="li_trash"></span></a></div>
						</div>
						<div class="scrap">
							<?php echo $scrap["scrap"]; ?>	
						</div>
						<div class="clearfix"></div>
						<div class="coments">
							<hr/>
							<?php 
							$scrapID =  $scrap["_id"];
							$comentarios = $baldeComentarios->find(array('scrap' => "$scrapID"));;							
							foreach ($comentarios as $comentario) { 
								$comenter = $baldeUsuarios->findOne(array('_id' => new MongoId($comentario['user'])));
								?>
								<div class="coment-box">
									<div class="comenter">
										<div class="large-1 columns"><img src="img/fotoPerfil1.jpg"></div>
										<div class="large-11 columns"><a href="paginadapessoa.php?cod=<?php echo $comenter['id']?>"><?php echo $comenter['nome']?></a></div>
										<!-- <div class="large-1 columns actions"><span aria-hidden="true" class="li_heart"></span> <span aria-hidden="true" class="li_trash"></span></div> -->
									</div>
									<div class="coment">
										<?php echo $comentario['comentario'];?>
									</div>
								</div>
								<hr/>
							<?php }
							?>
							<form name="FormComentario" action="postaComentario.php" method="POST" data-abide>
								<input type='hidden' name='scrap' value='<?php echo $scrap["_id"]; ?>' />
								<input type='hidden' name='user' value='<?php echo $userID; ?>' />							
								<input type='hidden' value='perfil' name='url'/>
								<fieldset class="ibs"><textarea name="comentario" placeholder="Deixe seu comentário" required></textarea></fieldset>
								<input type='submit' value='' class='posta' />
								<div class="clearfix"></div>
							</form>
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

</body>
</html>