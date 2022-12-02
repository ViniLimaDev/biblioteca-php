<?php
    switch ($_REQUEST['acao']) {
        case 'cadastrar':
            $sql = "INSERT INTO usuario(
                    nome_usuario,
                    cpf_usuario,
                    end_usuario,
                    email_usuario,
                    fone_usuario,
                    dt_nasc_usuario,
                    genero_usuario
                    ) VALUES (
                        '".$_POST['nome_usuario']."',
                        '".$_POST['cpf_usuario']."',
                        '".$_POST['end_usuario']."',
                        '".$_POST['email_usuario']."',
                        '".$_POST['fone_usuario']."',
                        '".$_POST['dt_nasc_usuario']."',
                        '".$_POST['genero_usuario']."'
                    )";

                $res = $conn->query($sql);

                if($res == true){
                    print "<script>alert('Cadastrado com sucesso');</script>";
                    print "<script>location.href='?page=listar-usuario'</script>";
                }else{
                    print "<script>alert('Falha ao cadastrar');</script>";
                    print "<script>location.href='?page=listar-usuario'</script>";
                }
            break;
        
        case 'editar':
            $sql = "UPDATE usuario SET
            nome_usuario = '".$_POST['nome_usuario']."',
            cpf_usuario = '".$_POST['cpf_usuario']."',
            end_usuario = '".$_POST['end_usuario']."',
            email_usuario = '".$_POST['email_usuario']."',
            fone_usuario = '".$_POST['fone_usuario']."',
            dt_nasc_usuario = '".$_POST['dt_nasc_usuario']."',
            genero_usuario = '".$_POST['genero_usuario']."'
            WHERE 
            id_usuario = ".$_POST['id_usuario'];

            $res = $conn->query($sql);

            if ($res == true) {
                print "<script>alert('Usuario editado com sucesso');</script>";
                print "<script>location.href='?page=listar-usuario';</script>";
            }
            else{
                print "<script>alert('Não foi possível editar');</script>";
                print "<script>location.href='?page=listar-usuario';</script>";
            }
        break;

        case 'excluir':
            $sql = "DELETE FROM usuario WHERE id_usuario='".$_REQUEST['id_usuario']."'";
            $res = $conn->query($sql);

            if ($res == true) {
                print "<script>alert('Usuario excluido com sucesso');</script>";
                print "<script>location.href='?page=listar-usuario';</script>";
            }
            else{
                print "<script>alert('Não foi possível excluir');</script>";
                print "<script>location.href='?page=listar-usuario';</script>";
            }
        break;
    }

?>