<?php $page_title = 'Home'; ?>
<html>
	<head>
		<?php include('head.php'); ?>
	</head>
	<body>
		<?php include('header.php'); ?>

		<main class="container">
			<section><h1>Comodidade para seus clientes e facilidade para você! Controle automatizado de cobrança baseado na localização do veículo.</h1></section>
			<section class="col-lg-6">
				<a class="act new" href="cadastro_veiculo.php">
					<span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Novo Veículo
				</a>
				<a class="act new" href="cadastro_estacionamento.php">
					<span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Novo Estacionamento
				</a>
				<a  class="act new" href="cadastro_rastreamento.php">
					<span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Novo Rastreamento de Veículo
				</a>
			</section>
			<section class="col-lg-6">
				<a class="act exp" href="exporta_veiculos.php">
					<span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span> Exportar KML dos Veículos
				</a>
				<a  class="act exp" href="exporta_estacionamentos.php">
					<span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span> Exportar KML dos Estacionamentos
				</a>
			</section>
		</main>

		<?php include('footer.php'); ?>
	</body>
</html>