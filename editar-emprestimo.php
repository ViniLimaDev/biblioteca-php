<h1>Editar Empréstimo</h1>
<?php
     $sql = "SELECT * FROM emprestimo WHERE (
            usuario_id_usuario=".$_REQUEST['usuario_id_usuario']." AND
            livro_id_livro=".$_REQUEST['livro_id_livro'].")";
     $res = $conn->query($sql);
     $row = $res->fetch_object();
?>
<form action="?page=salvar-emprestimo" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="usuario_id_usuario" value="<?php print $row->usuario_id_usuario;?>">
    <input type="hidden" name="livro_id_livro" value="<?php print $row->livro_id_livro;?>">
    <div class="mb-3">
    <select class="form-select" name="atendente_id_atendente">
        <option selected>Selecione o atendente</option>
        <?php
            $sql = "SELECT * FROM atendente";
            $res_atendente = $conn->query($sql);
            $qtd = $res_atendente->num_rows;

            if($qtd > 0){
                while($row_atendente = $res_atendente->fetch_object()){
                    if($row_atendente->id_atendente == $row->atendente_id_atendente){
                        print "<option selected value='".$row_atendente->id_atendente."'>".$row_atendente->nome_atendente."</option>";
                    }else{
                        print "<option value='".$row_atendente->id_atendente."'>".$row_atendente->nome_atendente."</option>";
                    }
                }
            }
        ?>
    </select>
    </div>
    <div class="mb-3">
        <select class="form-select" name="livro_id_livro">
        <option selected>Selecione o livro</option>
        <?php
            $sql = "SELECT * FROM livro";
            $res_livro = $conn->query($sql);
            $qtd = $res_livro->num_rows;

            if($qtd > 0){
                while($row_livro = $res_livro->fetch_object()){
                    if($row_livro->id_livro == $row->livro_id_livro){
                        print "<option selected value='".$row_livro->id_livro."'>".$row_livro->titulo_livro."</option>";
                    }else {
                        print "<option value='".$row_livro->id_livro."'>".$row_livro->titulo_livro."</option>";
                    }
                }
            }
        ?>
        </select>
    </div>
    <div class="mb-3">
        <select class="form-select" name="usuario_id_usuario">
        <option selected>Selecione o usuário</option>
        <?php
            $sql = "SELECT * FROM usuario";
            $res_usuario = $conn->query($sql);
            $qtd = $res_usuario->num_rows;

            if($qtd > 0){
                while($row_usuario = $res_usuario->fetch_object()){
                    if($row_usuario->id_usuario == $row->usuario_id_usuario){
                        print "<option selected value='".$row_usuario->id_usuario."'>".$row_usuario->nome_usuario."</option>";
                    }else{
                        print "<option value='".$row_usuario->id_usuario."'>".$row_usuario->nome_usuario."</option>";
                    }
                }
            }
        ?>
    </select>
    </div>
    <div class="mb-3">
        <label>Data do empréstimo</label>
        <input type="date" name="data_emprestimo" class="form-control" value="<?php print $row->data_emprestimo?>">
    </div>
    <div class="mb-3">
        <label>Data da devolução</label>
        <input type="date" name="devolucao_emprestimo" class="form-control" value="<?php print $row->devolucao_emprestimo?>">
    </div>
    <button type="submit" class="btn btn-success">Enviar</button>
</form>