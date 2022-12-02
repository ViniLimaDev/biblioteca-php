<?php

    switch ($_REQUEST['acao']) {
        case 'cadastrar':
            $sql = "INSERT INTO emprestimo(
                    usuario_id_usuario,
                    livro_id_livro,
                    atendente_id_atendente,
                    data_emprestimo,
                    devolucao_emprestimo
                    ) VALUES (
                        '".$_POST['usuario_id_usuario']."',
                        '".$_POST['livro_id_livro']."',
                        '".$_POST['atendente_id_atendente']."',
                        '".$_POST['data_emprestimo']."',
                        '".$_POST['devolucao_emprestimo']."'
                    )";
            $res = $conn->query($sql);
            
            if($res==true){
				print "<script>alert('Cadastrou com sucesso');</script>";
				print "<script>location.href='?page=listar-emprestimo';</script>";
			}else{
				print "<script>alert('Não foi possível cadastrar');</script>";
				print "<script>location.href='?page=listar-emprestimo';</script>";
			}
            break;
        


        case 'editar':
            $sql = "UPDATE emprestimo SET
                    usuario_id_usuario='".$_POST['usuario_id_usuario']."',
                    livro_id_livro='".$_POST['livro_id_livro']."',
                    atendente_id_atendente='".$_POST['atendente_id_atendente']."',
                    data_emprestimo='".$_POST['data_emprestimo']."',
                    devolucao_emprestimo='".$_POST['devolucao_emprestimo']."'
                    WHERE (
                        usuario_id_usuario='".$_REQUEST['usuario_id_usuario']."' AND
                        livro_id_livro='".$_REQUEST['livro_id_livro']."'
                        )";

            $res = $conn->query($sql);

            if($res==true){
				print "<script>alert('Editou com sucesso');</script>";
				print "<script>location.href='?page=listar-emprestimo';</script>";
			}else{
				print "<script>alert('Não foi possível editar');</script>";
				print "<script>location.href='?page=listar-emprestimo';</script>";
			}
            break;
        
        
        case 'excluir':
            $sql = "DELETE FROM emprestimo WHERE (
            usuario_id_usuario='".$_REQUEST['usuario_id_usuario']."' AND
            livro_id_livro='".$_REQUEST['livro_id_livro']."'
            )";
            $res = $conn->query($sql);

            if($res==true){
				print "<script>alert('Deletou com sucesso');</script>";
				print "<script>location.href='?page=listar-emprestimo';</script>";
			}else{
				print "<script>alert('Não foi possível deletar');</script>";
				print "<script>location.href='?page=listar-emprestimo';</script>";
			}
            break;
    }
?>