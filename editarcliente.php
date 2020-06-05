<?php
// Conexão
include_once 'php_acao/conexao.php';
// Header
include_once 'includes/header.php';
// Select
if(isset($_GET['id'])):
	$id = mysqli_escape_string($conecta, $_GET['id']);

	$sql = "SELECT * FROM cliente WHERE id = '$id'";
	$resultado = mysqli_query($conecta, $sql);
	$dados = mysqli_fetch_array($resultado);
endif;
?>

<div class="row">
	<div class="col s12 m6 push-m3">
		<h3 class="light"> Editar Cliente </h3>
		<form action="php_acao/update-cliente.php" method="POST">
			<input type="hidden" name="id" value="<?php echo $dados['id'];?>">
			<div class="input-field col s12">
				<input type="text" name="nome" id="nome" value="<?php echo $dados['nome'];?>">
				<label for="nome">Nome</label>
			</div>

			<div class="input-field col s12">
				<input type="text" name="cpf" value="<?php echo $dados['cpf'];?>" >
				<label for="sobrenome">CPF</label>
			</div>

			<div class="input-field col s12">
				<input type="text" value="<?php echo $dados['endereco'];?>" name="endereco" >
				<label for="endereco">Endereço</label>
			</div>

			<button type="submit" name="btn-editar-cliente" class="btn"> Atualizar</button>
			<a href="indexcliente.php" class="btn green"> Lista de clientes </a>
		</form>
		
	</div>
</div>

<?php
// Footer
include_once 'includes/footer.php';
?>
