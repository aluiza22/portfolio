<?php $page_title = 'Exportar Veículos'; ?>
<html>
	<head>
		<?php include('head.php'); ?>
	</head>
	<body>
		<?php include('header.php'); ?>

		<main class="container">
			<section><h1>Exportar Veículos</h1></section>
			<section class="col-lg-6">
				<ul>
					<li>Placa do Veículo 1 <a href="#"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a></li>
					<li>Placa do Veículo 2 <a href="#"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a></li>
					<li>Placa do Veículo 3 <a href="#"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a></li>
					<li>Placa do Veículo 4 <a href="#"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a></li>
					<li>Placa do Veículo 5 <a href="#"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a></li>
					<li>Placa do Veículo 6 <a href="#"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a></li>
					<li>Placa do Veículo 7 <a href="#"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a></li>
				</ul>
			</section>
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