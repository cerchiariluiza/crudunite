<?php

// Header
include_once 'includes/header.php';
?>

<div class="row">
	<div class="col s12 m6 push-m3">
		<h3 class="light"> Nova locação </h3>
		<form action="php_acao/insert_locacao.php" method="POST">
		
			<div class="input-field col s12">
				<input type="text" name="codigo">
				<label for="nome">Codigo</label>
			</div>
			
			<div class="input-field col s12">
				<input type="text" name="dataInicio" >
				<label for="nome">Data do Início</label>
			</div>
			<div class="input-field col s12">
				<input type="text" name="dataTermino" >
				<label for="nome">Data do Término</label>
			</div>

			<div class="input-field col s12">
				<input type="text" name="precoTotal" >
				<label for="cpf">Preço Total</label>
			</div>

			<div class="input-field col s12">
				<input type="text" name="placaVeiculo">
				<label for="endereco">Placa do veículo</label>
			</div>
			<div class="input-field col s12">
				<input type="text" name="statusLocacao" >
				<label for="endereco">Status da locação</label>
			</div>

			

			<button type="submit" name="btn-cadastrar-locacao" class="btn"> Efetuar locação </button>
			<a href="indexlocacao.php" class="btn green"> Lista de locações </a>
		</form>
		
	</div>
</div>

<?php
// Footer
include_once 'includes/footer.php';
?>
