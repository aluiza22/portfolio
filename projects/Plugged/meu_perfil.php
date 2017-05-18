<?php session_start(); 
$page_title = $_SESSION["nome"];
$userID = $_SESSION["id"];

include('conexao.php');

$scrapsArray = $baldeScraps->find();
$scraps = $scrapsArray->sort(array("date" => -1));
?>
<!doctype html>
<html>
<head>
	<?php include('head.php'); ?>
</head>
<body>
	<header>
		<?php include('header.php'); ?>
	</header>

	<section id="top-user">
		<div class='row'>
			<div class="large-12 columns">

			</div>
		</div>
	</section>

	<section id="feed">
		<div class="row">
	      	<div class="large-12 columns">
	      		<article>
					<div class="scraper">						
						<form name="FormScrap" action="postaScrap.php" method="POST">
							<input type='hidden' value='<?php echo $userID;?>' name='user'/>
							<textarea name="scrap" placeholder="Escreva seu scrap"></textarea>
							<input type='submit' class="posta" value='Postar'>
						</form>
				</article>
				<?php 
				foreach ($scraps as $scrap) { ?>
					<article>
						<div class="scraper">
							<div class="large-2 columns"><img src="img/fotoPerfil1.jpg"></div>
							<div class="large-9 columns"><a href="paginadapessoa.php?cod=<?php echo $userID; ?>"><?php echo $_SESSION["nome"]; ?></a> <span class='data'><?php echo date('d/m/Y H:i:s',$scrap["date"]); ?></span></div>
							<div class="large-1 columns actions"><span aria-hidden="true" class="li_heart"></span> <span aria-hidden="true" class="li_trash"></span></div>
						</div>
						<div class="scrap">
							<?php echo $scrap["scrap"]; ?>	
						</div>
						<div class="clearfix"></div>
						<div class="coments">
							<form name="FormComentario" action="postaComentario.php" method="POST">
								<input type='hidden' name='scrap' value='<?php echo $scrap["_id"]; ?>' />
								<textarea name="comentario" placeholder="Deixe seu comentário"></textarea>
								<a class="button" href="postaComentario.php"><span aria-hidden="true" class="li_paperplane"></span></a>
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