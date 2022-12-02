<h1>Listar Usuários</h1>
<?php
    $sql = "SELECT * FROM usuario";
    $res = $conn->query($sql);
    $qtd = $res->num_rows;

    if($qtd > 0){
        print "<p>Foram encontrados ".$qtd." usuários";
        print "<table class='table table-bordered table-striped table-hover'>";
		print "<tr>";
		print "<th>#</th>";
		print "<th>Nome</th>";
		print "<th>CPF</th>";
		print "<th>Endereço</th>";
		print "<th>Email</th>";
		print "<th>Telefone</th>";
		print "<th>Data de Nascimento</th>";
		print "<th>Gênero</th>";
		print "<th>Ações</th>";
		print "</tr>";
        while($row = $res->fetch_object()){
            print "<td>".$row->id_usuario."</td>";
			print "<td>".$row->nome_usuario."</td>";
			print "<td>".$row->cpf_usuario."</td>";
			print "<td>".$row->end_usuario."</td>";
			print "<td>".$row->email_usuario."</td>";
			print "<td>".$row->fone_usuario."</td>";
			print "<td>".$row->dt_nasc_usuario."</td>";
			switch ($row->genero_usuario) {
                case 'm':
                    print "<td>Masculino</td>";
                    break;
                case 'f':
                    print "<td>Feminino</td>";
                    break;
                case 'n':
                    print "<td>Não-Binário</td>";
                    break;
                case 'o':
                    print "<td>Outro</td>";
                    break;                
            }
			print "<td>
						<button onclick=\"location.href='?page=editar-usuario&id_usuario=".$row->id_usuario."';\" class='btn btn-primary'>Editar</button>

						<button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar-usuario&acao=excluir&id_usuario=".$row->id_usuario."';}else{false;}\" class='btn btn-danger'>Excluir</button>
			       </td>";
			print "</tr>";
        }

        print "</table>";
    }else{
        print '<p>Nenhum usuário cadastrado</p>';
    }
?>