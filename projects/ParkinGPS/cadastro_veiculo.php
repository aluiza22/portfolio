<?php $page_title = 'Cadastra Veículo'; ?>
<html>
	<head>
		<?php include('head.php'); ?>
	</head>
	<body>
		<?php include('header.php'); ?>

		<main class="container">
			<section><h1>Cadastre um novo veículo.</h1></section>
			<section class="col-lg-6">
				<form action="cadastra_veiculo.php" method="POST">
					<fieldset><input type="text" name="placa" placeholder="Placa"/></fieldset>
					<fieldset><input type="submit" value="Cadastrar"/></fieldset>
				</form>
			</section>
			<section class="col-lg-6">
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