<h1>Listar Livro</h1>
<?php
    $sql = "SELECT * FROM livro";
    $res = $conn->query($sql);
    $qtd = $res->num_rows;

    if($qtd > 0){
        print "<p>Encontrei <b>$qtd</b> resultado(s)</p>";
		print "<table class='table table-bordered table-striped table-hover'>";
		print "<tr>";
		print "<th>#</th>";
		print "<th>Categoria</th>";
		print "<th>Titulo</th>";
		print "<th>Autor</th>";
		print "<th>Editora</th>";
		print "<th>Edicao</th>";
		print "<th>Localidade</th>";
		print "<th>Ano</th>";
		print "<th>Ação</th>";
		print "</tr>";
		while($row = $res->fetch_object()){
			$sql = "SELECT * FROM categoria WHERE id_categoria =".$row->categoria_id_categoria;
			$res_categoria = $conn->query($sql);
			$row_categoria = $res_categoria->fetch_object();

			print "<tr>";
			print "<td>".$row->id_livro."</td>";
			print "<td>".$row_categoria->nome_categoria."</td>";
			print "<td>".$row->titulo_livro."</td>";
			print "<td>".$row->autor_livro."</td>";
			print "<td>".$row->editora_livro."</td>";
			print "<td>".$row->edicao_livro."</td>";
			print "<td>".$row->localidade_livro."</td>";
			print "<td>".$row->ano_livro."</td>";
			print "<td>
						<button onclick=\"location.href='?page=editar-livro&id_livro=".$row->id_livro."';\" class='btn btn-primary'>Editar</button>

						<button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar-livro&acao=excluir&id_livro=".$row->id_livro."';}else{false;}\" class='btn btn-danger'>Excluir</button>
			       </td>";
			print "</tr>";
		}
		print "</table>";
    }else{
        print "<p>Não foram encontrados livros</p>";
    }
?>