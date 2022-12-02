<h1>Cadastrar Livro</h1>
<form action="?page=salvar-livro" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <select class="form-select" name="categoria_id_categoria">
        <option selected>Selecione a categoria</option>
        <?php
            $sql = "SELECT * FROM categoria";
            $res = $conn->query($sql);
            $qtd = $res->num_rows;

            if($qtd > 0){
                while($row = $res->fetch_object()){
                    print "<option value='".$row->id_categoria."'>".$row->nome_categoria."</option>";
                }
            }
        ?>
    </select>
    <div class="mb-3">
        <label>Título do livro</label>
        <input type="text" name="titulo_livro" class="form-control">
    </div>
    <div class="mb-3">
        <label>Autor do livro</label>
        <input type="text" name="autor_livro" class="form-control">
    </div>
    <div class="mb-3">
        <label>Editora do livro</label>
        <input type="text" name="editora_livro" class="form-control">
    </div>
    <div class="mb-3">
        <label>Edição do livro</label>
        <input type="number" name="edicao_livro" class="form-control">
    </div>
    <div class="mb-3">
        <label>Localidade do livro</label>
        <input type="text" name="localidade_livro" class="form-control">
    </div>
    <div class="mb-3">
        <label>Ano do livro</label>
        <input type="year" name="ano_livro" class="form-control">
    </div>
    <button type="submit" class="btn btn-success">Enviar</button>
</form>