<?php
    switch (@$_REQUEST['acao']) {
        case 'cadastrar':
            $sql = "INSERT into categoria (nome_categoria)
                    VALUES ('".$_POST['nome_categoria']."')";
            
            $res = $conn->query($sql);

            if ($res == true) {
                print "<script>alert('Categoria cadastrada com sucesso');</script>";
                print "<script>location.href='?page=listar-categoria';</script>";
            }
            else{
                print "<script>alert('Não foi possível cadastrar');</script>";
                print "<script>location.href='?page=listar-categoria';</script>";
            }
            break;
        
        case 'editar':
            $sql = "UPDATE categoria
                    SET nome_categoria='".$_REQUEST['nome_categoria']."'
                    WHERE id_categoria='".$_REQUEST['id_categoria']."'";

            $res = $conn->query($sql);

            if ($res == true) {
                print "<script>alert('Categoria editada com sucesso');</script>";
                print "<script>location.href='?page=listar-categoria';</script>";
            }
            else{
                print "<script>alert('Não foi possível editar');</script>";
                print "<script>location.href='?page=listar-categoria';</script>";
            }

            break;

        case 'excluir':
            $sql = "DELETE FROM categoria WHERE id_categoria='".$_REQUEST['id_categoria']."'";
            $res = $conn->query($sql);
            
            if ($res == true) {
                print "<script>alert('Categoria excluída com sucesso');</script>";
                print "<script>location.href='?page=listar-categoria';</script>";
            }
            else{
                print "<script>alert('Não foi possível excluir');</script>";
                print "<script>location.href='?page=listar-categoria';</script>";
            }


            break;
    }

?>