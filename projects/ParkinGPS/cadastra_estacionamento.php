<?php 
$nome = $_POST['nome'];
$valor_hora = $_POST['valor_hora'];
$quantidade_vertices = $_POST['quantidade_vertices'];
for	($i = 1; $i <= $quantidade_vertices; $i++) {
	$vertices[$i]['latitude'] = $_POST['Latitude'.$i];
	$vertices[$i]['longitude'] = $_POST['Longitude'.$i];
}


?>
<?php $page_title = 'Estacionamento Cadastrado'; ?>
<html>
	<head>
		<?php include('head.php'); ?>
	</head>
	<body>
		<?php include('header.php'); ?>

		<main class="container">
			<section>
				<h1>Estacionamento <?php echo $nome; ?> | R$ <?php echo $valor_hora; ?> por hora</h1>
				<?php foreach ($vertices as $id => $vertice): ?>
					<h2>Vertice <?php echo $id; ?>: <?php echo $vertice['latitude']; ?>, <?php echo $vertice['longitude']; ?></h2>
				<?php endforeach ?>
			</section>
		</main>

		<?php include('footer.php'); ?>
	</body>
</html>