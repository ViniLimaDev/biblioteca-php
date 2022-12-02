<?php
    switch($_REQUEST['acao']){
        case 'cadastrar':    
            $sql = "INSERT INTO livro(
                    categoria_id_categoria,
                    titulo_livro,
                    autor_livro,
                    editora_livro,
                    edicao_livro,
                    localidade_livro,
                    ano_livro
                    ) VALUES(
                        '".$_REQUEST['categoria_id_categoria']."',
                        '".$_REQUEST['titulo_livro']."',
                        '".$_REQUEST['autor_livro']."',
                        '".$_REQUEST['editora_livro']."',
                        '".$_REQUEST['edicao_livro']."',
                        '".$_REQUEST['localidade_livro']."',
                        '".$_REQUEST['ano_livro']."'
                    )";
            $res = $conn->query($sql);

            if ($res == true) {
                print "<script>alert('Livro cadastrado com sucesso');</script>";
                print "<script>location.href='?page=listar-livro';</script>";
            }
            else{
                print "<script>alert('Não foi possível cadastrar');</script>";
                print "<script>location.href='?page=listar-livro';</script>";
            }
            break;

        case 'editar':
            $sql = "UPDATE livro SET
                    categoria_id_categoria = '".$_POST['categoria_id_categoria']."',
                    titulo_livro = '".$_POST['titulo_livro']."',
                    autor_livro = '".$_POST['autor_livro']."',
                    editora_livro = '".$_POST['editora_livro']."',
                    edicao_livro = '".$_POST['edicao_livro']."',
                    localidade_livro = '".$_POST['localidade_livro']."',
                    ano_livro = '".$_POST['ano_livro']."'
                    WHERE 
                    id_livro = ".$_POST['id_livro'];

            $res = $conn->query($sql);

            if ($res == true) {
                print "<script>alert('Livro editado com sucesso');</script>";
                print "<script>location.href='?page=listar-livro';</script>";
            }
            else{
                print "<script>alert('Não foi possível editar');</script>";
                print "<script>location.href='?page=listar-livro';</script>";
            }
            break;

        case 'excluir':
            $sql = "DELETE FROM livro WHERE id_livro='".$_REQUEST['id_livro']."'";
            $res = $conn->query($sql);

            if ($res == true) {
                print "<script>alert('Livro excluido com sucesso');</script>";
                print "<script>location.href='?page=listar-livro';</script>";
            }
            else{
                print "<script>alert('Não foi possível excluir');</script>";
                print "<script>location.href='?page=listar-livro';</script>";
            }
            break;
}
?>