<?php

// Header
include_once 'includes/header.php';
?>


<div class="row">
	<div class="col s12 m6 push-m3">
		<h3 class="light"> Novo Veículo </h3>
		<form action="php_acao/insert_veiculo.php" method="POST">
			<div class="input-field col s12">
				<input type="text" name="placa" >
				<label for="placa">Placa</label>
			</div>

			<div class="input-field col s12">
				<input type="text" name="modelo" >
				<label for="cpf">Modelo</label>
			</div>

			<div class="input-field col s12">
				<input type="text" name="ano" >
				<label for="endereco">Ano</label>
			</div>
			<div class="input-field col s12">
				<input type="text" name="cor" >
				<label for="endereco">Cor</label>
			</div>
			<div class="input-field col s12">
				<input type="text" name="precoDiaria" >
				<label for="endereco">Preço Diária</label>
			</div>

			

			<button type="submit" name="btn-cadastrar-veiculo" class="btn"> Cadastrar </button>
			<a href="indexveiculo.php" class="btn green"> Lista de veículos </a>
		</form>
		
	</div>
</div>

<?php
// Footer
include_once 'includes/footer.php';
?>
