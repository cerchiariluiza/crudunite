<?php
// Conexão
include_once 'php_acao/conexao.php';

// Header
include_once 'includes/header.php';
// Message
include_once 'includes/message.php';
// final query

$parametro = (string) !empty($_GET['parametro']) ? $_GET['parametro'] : '';
$sql ="select * from locacao ";
if(isset($parametro)){
$sql .= "where codigo like '$parametro%'";}
$dados = mysqli_query($conecta, $sql);
$linha = mysqli_fetch_assoc($dados);
$total = mysqli_num_rows($dados);

?>
<link rel="stylesheet" type="text/css" href="table.css" />
<div class="row">
	<div class="col s12 m8 push-m2">
		<h3 class="light"> Locações </h3>
		<p> 
		<form method="GET" action="<?php echo $_SERVER['PHP_SELF'];?>">
		<input type="text" name="parametro">
		<input type="submit" value="Procure pelo CPF">
		</form> 
		 
		</p>
	<div id="no-more-tables">
		<table class="striped" class="striped col-md-12 table-bordered table-striped table-condensed cf">
        	<thead class="cf">
			<thead>
				<tr>
					<th>Codigo:</th>
					<th>Cpf do Cliente:</th>
					<th>Data do Inicio:</th>
					<th>Data do Termino:</th>
					<th>Preço Total:</th>
					<th>Placa do veículo:</th>
					<th>Status do aluguel:</th>
				</tr>
			</thead>

			<tbody>
				<?php
				
				$resultado = mysqli_query($conecta, $sql);               
                if(mysqli_num_rows($resultado) > 0):
				while($dados = mysqli_fetch_array($resultado)):
				?>
				<tr>
					<td data-title="Codigo"><?php echo $dados['codigo']; ?></td>
					<td data-title="CPF"><?php echo $dados['cpfCliente']; ?></td>
					<td data-title="Data Inicio"><?php echo $dados['dataInicio']; ?></td>
					<td data-title="Data Termino"><?php echo $dados['dataTermino']; ?></td>
					<td data-title="Data Termino"><?php echo $dados['precoTotal']; ?></td>
					<td data-title="Data Termino"><?php echo $dados['placaVeiculo']; ?></td>
					<td data-title="Data Termino"><?php echo $dados['statusAluguel']; ?></td>
					
					<td><a href="editarlocacao.php?id=<?php echo $dados['id']; ?>" class="btn-floating orange"><i class="material-icons">edit</i></a></td>

					<td><a href="#modal<?php echo $dados['id']; ?>" class="btn-floating red modal-trigger"><i class="material-icons">delete</i></a></td>

					<!-- Modal Structure -->
					  <div id="modal<?php echo $dados['id']; ?>" class="modal">
					    <div class="modal-content">
					      <h4>Opa!</h4>
					      <p>Tem certeza que deseja excluir esse cliente?</p>
					    </div>
					    <div class="modal-footer">					     

					      <form action="php_acao/delete-locacao.php" method="POST">
					      	<input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
					      	<button type="submit" name="btn-deletar-locacao" class="btn red">Sim, quero deletar</button>

					      	 <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Cancelar</a>

					      </form>

					    </div>
					  </div>


				</tr>
			   <?php 
				endwhile;
				else: ?>

				<tr>
					<td>-</td>
					<td>-</td>
					<td>-</td>
					<td>-</td>
					<td>-</td>
					<td>-</td>
					<td>-</td>
				</tr>

			   <?php 
				endif;
			   ?>

			</tbody>
		</table>
	</div>
		<br>
		<a href="adicionar_locacao.php" class="btn">Fazer locação</a>
	</div>
</div>

<?php
// Footer
include_once 'includes/footer.php';
?>

