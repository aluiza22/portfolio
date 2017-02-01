<?php 
$placa = $_POST['placa'];
?>
<?php $page_title = 'Veículo Cadastrado'; ?>
<html>
	<head>
		<?php include('head.php'); ?>
	</head>
	<body>
		<?php include('header.php'); ?>

		<main class="container">
			<section>
				<h1>Veículo <?php echo $placa; ?></h1>
			</section>
		</main>

		<?php include('footer.php'); ?>
	</body>
</html>