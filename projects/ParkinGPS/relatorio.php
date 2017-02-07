<?php $page_title = 'Relatório'; ?>
<html>
	<head>
		<?php include('head.php'); ?>
	</head>
	<body>
		<?php include('header.php'); ?>

		<main class="container">
			<section><h1>Relatório</h1></section>
			<section>
				<table class="table">
			        <thead>
			          <tr>
			            <th>Estacionamento</th>
			            <th>Placa do Veículo</th>
			            <th>Data de Entrada</th>
			            <th>Data de Saída</th>
			            <th>Valor Cobrado</th>
			          </tr>
			        </thead>
			        <tbody>
			          <tr>
			            <td>Estacionamento 1</td>
			            <td>Placa do Veículo 2</td>
			            <td>15/04/2015 18:00</td>
			            <td>15/04/2015 19:43</td>
			            <td>R$ 8,00</td>
			          </tr>
			          <tr>
			            <td>Estacionemento 3</td>
			            <td>Placa do Veículo 3</td>
			            <td>10/04/2015 08:00</td>
			            <td>10/04/2015 09:25</td>
			            <td>R$ 5,00</td>
			          </tr>
			          <tr>
			            <td>Estacionamento 1</td>
			            <td>Placa do Veículo 1</td>
			            <td>05/04/2015 15:00</td>
			            <td>05/04/2015 15:43</td>
			            <td>R$ 4,00</td>
			          </tr>
			        </tbody>
			    </table>
			</section>
		</main>

		<?php include('footer.php'); ?>
	</body>
</html>