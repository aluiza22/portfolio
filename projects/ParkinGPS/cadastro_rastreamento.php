<?php $page_title = 'Cadastro de Rastreamento'; ?>
<html>
	<head>
		<?php include('head.php'); ?>
	</head>
	<body>
		<?php include('header.php'); ?>

		<main class="container">
			<section><h1>Cadastre um novo rastreamento.</h1></section>
			<section class="col-lg-6">
				<form action="cadastra_rastreamento.php" method="POST">
					<fieldset>
						<select name="veiculo">
							<option value="" disabled selected>Placa do Carro</option>
							<option value="1">Placa do Carro 1</option>
							<option value="2">Placa do Carro 2</option>
							<option value="3">Placa do Carro 1</option>
						</select>
					</fieldset>
					<fieldset><input type="text" name="data" placeholder="Data"/></fieldset>
					<div id="vertices">
						<fieldset class="vertice">
							<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> 
							<input class="verticeL lat" type="text" name="Latitude" placeholder="Latitude"/>
							<input class="verticeL lon" type="text" name="Longitude" placeholder="Longitude"/>
						</fieldset>
					</div>
					<fieldset><input type="submit" value="Cadastrar"/></fieldset>
				</form>
			</section>
			<section class="col-lg-6">
				<a class="act new" href="cadastro_veiculo.php">
					<span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Novo Veículo
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
		<script type="text/javascript">
			function addVertice() {
				var next = $('#vertices').children('fieldset').length + 1;

			    $('#vertices').append('<fieldset class="vertice"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> ' + 
			        '<input class="verticeL lat" type="text" name="Latitude' + next + '" placeholder="Latitude"/>' + 
			        '<input class="verticeL lon" type="text" name="Longitude' + next + '" placeholder="Longitude"/><a onclick="addVertice(); $(this).hide();">' +
			    '<span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a></fieldset>');
			     
			    $(':hidden').val(next);
			     
			    return false;
			}
		</script>
	</body>
</html>