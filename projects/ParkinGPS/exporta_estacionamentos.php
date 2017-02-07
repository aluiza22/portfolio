<?php $page_title = 'Exportar Estacionamentos'; ?>
<html>
	<head>
		<?php include('head.php'); ?>
	</head>
	<body>
		<?php include('header.php'); ?>

		<main class="container">
			<section><h1>Exportar Estacionamentos</h1></section>
			<section class="col-lg-6">
				<ul>
					<li>Estacionamento 1 <a href="#"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a></li>
					<li>Estacionamento 2 <a href="#"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a></li>
					<li>Estacionamento 3 <a href="#"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a></li>
					<li>Estacionamento 4 <a href="#"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a></li>
					<li>Estacionamento 5 <a href="#"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a></li>
					<li>Estacionamento 6 <a href="#"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a></li>
					<li>Estacionamento 7 <a href="#"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a></li>
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