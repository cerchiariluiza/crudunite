<?php
// Conexão
include_once 'php_acao/conexao.php';
// Header
include_once 'includes/header.php';
// Select
if(isset($_GET['id'])):
	$id = mysqli_escape_string($conecta, $_GET['id']);
	$sql = "SELECT * FROM veiculo WHERE id = '$id'";
	$resultado = mysqli_query($conecta, $sql);
	$dados = mysqli_fetch_array($resultado);
endif;
?>

<div class="row">
	<div class="col s12 m6 push-m3">
		<h3 class="light"> Editar Locação </h3>
		<form action="php_acao/update-veiculo.php" method="POST">
			<input type="hidden" name="id" value="<?php echo $dados['id'];?>">
			<div class="input-field col s12">
				<input type="text" name="placa" id="Codigo" value="<?php echo $dados['codigo'];?>">
				<label for="nome">Placa</label>
			</div>
			<div class="input-field col s12">
				<input type="text" name="modelo" value="<?php echo $dados['modelo'];?>" >
				<label for="modelo">Modelo</label>
			</div>
			<div class="input-field col s12">
				<input type="text" value="<?php echo $dados['ano'];?>" name="ano" >
				<label for="ano">Ano</label>
			</div>
			<div class="input-field col s12">
				<input type="text" value="<?php echo $dados['cor'];?>" name="cor" >
				<label for="cor">Cor</label>
			</div>
			
			<div class="input-field col s12">
				<input type="text" value="<?php echo $dados['precoTotal'];?>" name="precoTotal" >
				<label for="precoTotal">Preço Total</label>
			</div>
			<div class="input-field col s12">
				<input type="text" value="<?php echo $dados['placaVeiculo'];?>" name="placaVeiculo" >
				<label for="placa">Placa Veículo</label>
			</div>
			<div class="input-field col s12">
				<input type="text" value="<?php echo $dados['statusAluguel'];?>" name="statusAluguel" >
				<label for="placa">Status Aluguel</label>
			</div>
			<button type="submit" name="btn-editar-veiculo" class="btn"> Atualizar</button>
			<a href="indexveiculo.php" class="btn green"> Lista de clientes </a>
		</form>
		
	</div>
</div>

<?php
// Footer
include_once 'includes/footer.php';
?>
