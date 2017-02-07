<?php 
$veiculo = $_POST['veiculo'];
$data = $_POST['data'];
$coordenada['latitude'] = $_POST['Latitude'];
$coordenada['longitude'] = $_POST['Longitude'];

?>
<?php $page_title = 'Rastreamento Cadastrado'; ?>
<html>
	<head>
		<?php include('head.php'); ?>
	</head>
	<body>
		<?php include('header.php'); ?>

		<main class="container">
			<section>
				<h1>Rastreamento do Veículo <?php echo $veiculo; ?> | <?php echo $data; ?></h1>
				<h2>Coordenada: <?php echo $coordenada['latitude']; ?>, <?php echo $coordenada['longitude']; ?></h2>
			</section>
		</main>

		<?php include('footer.php'); ?>
	</body>
</html>