<h1>Listar Biblioteca</h1>
<?php
	$sql = "SELECT * FROM biblioteca";
	$res = $conn->query($sql);
	$qtd = $res->num_rows;

	if($qtd > 0){
		print "<p>Encontrei <b>$qtd</b> resultado(s)</p>";
		print "<table class='table table-bordered table-striped table-hover'>";
		print "<tr>";
		print "<th>#</th>";
		print "<th>Nome da Biblioteca</th>";
		print "<th>Endereço</th>";
		print "<th>Ações</th>";
		print "</tr>";
		while($row = $res->fetch_object()){
			print "<tr>";
			print "<td>".$row->id_biblioteca."</td>";
			print "<td>".$row->nome_biblioteca."</td>";
			print "<td>".$row->end_biblioteca."</td>";
			print "<td>
						<button onclick=\"location.href='?page=editar-biblioteca&id_biblioteca=".$row->id_biblioteca."';\" class='btn btn-primary'>Editar</button>

						<button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar-biblioteca&acao=excluir&id_biblioteca=".$row->id_biblioteca."';}else{false;}\" class='btn btn-danger'>Excluir</button>
			       </td>";
			print "</tr>";
		}
		print "</table>";
	}else{
		print "<p>Não há resultados</p>";
	}
