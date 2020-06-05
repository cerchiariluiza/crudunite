# Luiza - Sistema de Locadora de Veículos em PHP

## Tecnologias utilizadas

- Linguagem PHP
- Banco de dados MySQL
- Framework Materize CSS

## Estrutura do projeto

`\pastas---------------------------------------------------------------------------`
	`\raiz`: Nesta pasta tem os comandos de select e filtros:
	
	 index.php: Arquivo principal que contém três botões para as páginas de listagem:
	 indexcliente.php: Listagem de clientes
	 indexveiculo.php: Listagem de veiculos
	 indexlocacao.php: listagem de locacao
	 adicionarcliente.php: formulario para adicionar cliente
	 adicionarveiculo.php: formulario para adicionar veiculo
	 adicionarlocacao.php: formulario para adicionar locacao
	 editarcliente.php: formulario para editar cliente
	 editarveiculo.php: formulario para editar veiculo
	 editarlocacao.php: formulario para editar locacao
	 table.css: Responsividade aplicada a tabela da pagina locação
	 crud: BD em sql, com tabelas criadas
	 

	 
	`\php_acao`: Nesta pasta está o arquivo `conexao.php`, responsável por acessar o banco de dados, nela também tem os DMLS, updtade e delete das páginas:
	
	insert-cliente.php: Insere dados no banco;
	update-cliente.php: Altera os dados no banco;
	delete-cliente.php: Altera os dados no banco;
	insert-veiculo.php: Insere dados no banco;
	update-veiculo.php: Altera os dados no banco;
	delete-veiculo.php: Altera os dados no banco;
	insert-locacao.php: Insere dados no banco;
	update-locacao.php: Altera os dados no banco;
	delete-locacao.php: Altera os dados no banco;
	
	`\include`: Nesta página os links para Materialize.css ocorrem.
	header.php: css do Materialize;
	footer.php: js do Materialize;
	
