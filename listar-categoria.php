<h1>Listar Categoria</h1>
<?php
    $sql = "SELECT * FROM categoria";
    $res = $conn->query($sql);
    $qtd = $res->num_rows;

    if($qtd >0){
        print "<p>Encontrei <b>$qtd</b> resultado(s)</p>";
		print "<table class='table table-bordered table-striped table-hover'>";
		print "<tr>";
		print "<th>#</th>";
		print "<th>Nome da Categoria</th>";
		print "<th>Ações</th>";
		print "</tr>";
		while($row = $res->fetch_object()){
			print "<tr>";
			print "<td>".$row->id_categoria."</td>";
			print "<td>".$row->nome_categoria."</td>";
			print "<td>
						<button onclick=\"location.href='?page=editar-categoria&id_categoria=".$row->id_categoria."';\" class='btn btn-primary'>Editar</button>

						<button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar-categoria&acao=excluir&id_categoria=".$row->id_categoria."';}else{false;}\" class='btn btn-danger'>Excluir</button>
			       </td>";
			print "</tr>";
		}
		print "</table>";
    }else{
        print "<p>Não há nenhuma categoria cadastrada<p>";
    }

?>