<h1>Listar Empréstimo</h1>
<?php
    $sql = "SELECT * FROM emprestimo";
    $res = $conn->query($sql);
    $qtd = $res->num_rows;

    if($qtd >0){
        print "<p>Encontrei <b>$qtd</b> resultado(s)</p>";
		print "<table class='table table-bordered table-striped table-hover'>";
		print "<tr>";
		print "<th>Usuario</th>";
		print "<th>Livro</th>";
		print "<th>Atendente</th>";
		print "<th>Data</th>";
		print "<th>Data de Devolução</th>";
		print "<th>Ações</th>";
		print "</tr>";
		while($row = $res->fetch_object()){
            $sql = "SELECT * FROM usuario WHERE id_usuario =".$row->usuario_id_usuario;
			$res_usuario = $conn->query($sql);
			$row_usuario = $res_usuario->fetch_object();

            $sql = "SELECT * FROM livro WHERE id_livro =".$row->livro_id_livro;
			$res_livro = $conn->query($sql);
			$row_livro = $res_livro->fetch_object();

            $sql = "SELECT * FROM atendente WHERE id_atendente =".$row->atendente_id_atendente;
			$res_atendente = $conn->query($sql);
			$row_atendente = $res_atendente->fetch_object();

			print "<tr>";
			print "<td>".$row_usuario->nome_usuario."</td>";
			print "<td>".$row_livro->titulo_livro."</td>";
			print "<td>".$row_atendente->nome_atendente."</td>";
			print "<td>".$row->data_emprestimo."</td>";
			print "<td>".$row->devolucao_emprestimo."</td>";
			
			print "<td>
						<button onclick=\"location.href='?page=editar-emprestimo&usuario_id_usuario=".$row->usuario_id_usuario."&livro_id_livro=".$row->livro_id_livro."';\" class='btn btn-primary'>Editar</button>

						<button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar-emprestimo&acao=excluir&usuario_id_usuario=".$row->usuario_id_usuario."&livro_id_livro=".$row->livro_id_livro."';}else{false;}\" class='btn btn-danger'>Excluir</button>
			       </td>";
			print "</tr>";
		}
		print "</table>";
    }else{
        print "<p>Não há nenhuma emprestimo cadastrada<p>";
    }

?>