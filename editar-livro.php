<h1>Editar Livro</h1>
<?php
    $sql = "SELECT * FROM livro WHERE id_livro=".$_REQUEST['id_livro'];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>
<form action="?page=salvar-livro" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id_livro" value="<?php print $row->id_livro;?>">
    <select class="form-select" name="categoria_id_categoria">
        <option selected>Selecione a categoria</option>
        <?php
            $sql = "SELECT * FROM categoria";
            $res = $conn->query($sql);
            $qtd = $res->num_rows;

            if($qtd > 0){
                while($categoria_row = $res->fetch_object()){
                    if($categoria_row->id_categoria == $row->categoria_id_categoria){
                        print "<option selected value='".$categoria_row->id_categoria."'>".$categoria_row->nome_categoria."</option>";
                    }else{
                        print "<option value='".$categoria_row->id_categoria."'>".$categoria_row->nome_categoria."</option>";
                    }
                }
            }
        ?>
    </select>
    <div class="mb-3">
        <label>Título do livro</label>
        <input type="text" name="titulo_livro" class="form-control" value="<?php print "$row->titulo_livro";?>">
    </div>
    <div class="mb-3">
        <label>Autor do livro</label>
        <input type="text" name="autor_livro" class="form-control" value="<?php print "$row->autor_livro";?>">
    </div>
    <div class="mb-3">
        <label>Editora do livro</label>
        <input type="text" name="editora_livro" class="form-control" value="<?php print "$row->editora_livro";?>">
    </div>
    <div class="mb-3">
        <label>Edição do livro</label>
        <input type="number" name="edicao_livro" class="form-control" value="<?php print "$row->edicao_livro";?>">
    </div>
    <div class="mb-3">
        <label>Localidade do livro</label>
        <input type="text" name="localidade_livro" class="form-control" value="<?php print "$row->localidade_livro";?>">
    </div>
    <div class="mb-3">
        <label>Ano do livro</label>
        <input type="year" name="ano_livro" class="form-control" value="<?php print "$row->ano_livro";?>">
    </div>
    <button type="submit" class="btn btn-success">Enviar</button>
</form>