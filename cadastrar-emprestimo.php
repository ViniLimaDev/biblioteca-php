<h1>Cadastrar Empréstimo</h1>
<form action="?page=salvar-emprestimo" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
    <select class="form-select" name="atendente_id_atendente">
        <option selected>Selecione o atendente</option>
        <?php
            $sql = "SELECT * FROM atendente";
            $res = $conn->query($sql);
            $qtd = $res->num_rows;

            if($qtd > 0){
                while($row = $res->fetch_object()){
                    print "<option value='".$row->id_atendente."'>".$row->nome_atendente."</option>";
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
            $res = $conn->query($sql);
            $qtd = $res->num_rows;

            if($qtd > 0){
                while($row = $res->fetch_object()){
                    print "<option value='".$row->id_livro."'>".$row->titulo_livro."</option>";
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
            $res = $conn->query($sql);
            $qtd = $res->num_rows;

            if($qtd > 0){
                while($row = $res->fetch_object()){
                    print "<option value='".$row->id_usuario."'>".$row->nome_usuario."</option>";
                }
            }
        ?>
    </select>
    </div>
    <div class="mb-3">
        <label>Data do empréstimo</label>
        <input type="date" name="data_emprestimo" class="form-control">
    </div>
    <div class="mb-3">
        <label>Data da devolução</label>
        <input type="date" name="devolucao_emprestimo" class="form-control">
    </div>
    <button type="submit" class="btn btn-success">Enviar</button>
</form>