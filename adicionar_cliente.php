<?php

// Header
include_once 'includes/header.php';
?>

<div class="row">
	<div class="col s12 m6 push-m3">
		<h3 class="light"> Novo Cliente </h3>
		<form action="php_acao/insert_cliente.php" method="POST">
			<div class="input-field col s12">
				<input type="text" name="nome" id="nome">
				<label for="nome">Nome</label>
			</div>

			<div class="input-field col s12">
				<input type="number" name="cpf" id="cpf">
				<label for="cpf" id="cpf">CPF</label>
			</div>

			<div class="input-field col s12">
				<input type="text" name="endereco" id="endereco">
				<label for="endereco">Endereco</label>
			</div>

			

			<button type="submit" name="btn-cadastrar-cliente" class="btn"> Cadastrar </button>
			<a href="indexcliente.php" class="btn green"> Lista de clientes </a>
		</form>
		
	</div>
</div>

<?php
// Footer
include_once 'includes/footer.php';
?>
