<?php
// Conexão
include_once 'php_acao/conexao.php';
// Header
include_once 'includes/header.php';
// Message
include_once 'includes/message.php';
// final query

$parametro = (string) !empty($_GET['parametro']) ? $_GET['parametro'] : '';
$sql ="select * from cliente ";
if(isset($parametro)){
$sql .= "where cpf like '$parametro%'";}
$dados = mysqli_query($conecta, $sql);
$linha = mysqli_fetch_assoc($dados);
$total = mysqli_num_rows($dados);

?>
<link rel="stylesheet" type="text/css" href="table.css" />		
<div class="row">
	<div class="col s12 m8 push-m2">
		<h3 class="light"> Clientes </h3>
		<p> 
		<form method="GET" action="<?php echo $_SERVER['PHP_SELF'];?>">
		<input type="text" name="parametro">
		<input type="submit" value="Procure pelo CPF">
		</form> 
		 
		</p>
		 <table class="striped col-md-12 table-bordered table-striped table-condensed cf">
        	<thead class="cf">
		
			<thead>	
			<tr><th>Nome:</th> 	
			<th>CPF :</th> 	
			<th>Endereco:</th>	
			</tr>	
			</thead>

			<tbody>
				<?php
				
				$resultado = mysqli_query($conecta, $sql);               
                if(mysqli_num_rows($resultado) > 0):
				while($dados = mysqli_fetch_array($resultado)):
				?>
				<tr>
					<td><?php echo $dados['nome']; ?></td>
					<td><?php echo $dados['cpf']; ?></td>
					<td><?php echo $dados['endereco']; ?></td>
					
					<td><a href="editarcliente.php?id=<?php echo $dados['id']; ?>" class="btn-floating orange"><i class="material-icons">edit</i></a></td>

					<td><a href="#modal<?php echo $dados['id']; ?>" class="btn-floating red modal-trigger"><i class="material-icons">delete</i></a></td>

					<!-- Modal Structure -->
					  <div id="modal<?php echo $dados['id']; ?>" class="modal">
					    <div class="modal-content">
					      <h4>Opa!</h4>
					      <p>Tem certeza que deseja excluir esse cliente?</p>
					    </div>
					    <div class="modal-footer">					     

					      <form action="php_acao/delete-cliente.php" method="POST">
					      	<input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
					      	<button type="submit" name="btn-deletar-cliente" class="btn red">Sim, quero deletar</button>

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
					
				</tr>

			   <?php 
				endif;
			   ?>

			</tbody>
		</table>
		<br>
		<a href="adicionar_cliente.php" class="btn">Adicionar cliente</a>
	</div>
</div>

<?php
// Footer
include_once 'includes/footer.php';
?>

