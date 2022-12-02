<h1>Cadastrar Atendente</h1>
<form action="?page=salvar-atendente" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Nome do atendente</label>
        <input type="text" name="nome_atendente" class="form-control">
    </div>
    <div class="mb-3">
        <label>CPF do atendente</label>
        <input type="text" name="cpf_atendente" class="form-control">
    </div>
    <div class="mb-3">
    <select class="form-select" name="biblioteca_id_biblioteca">
        <option selected>Biblioteca do atendente</option>
        <?php
            $sql = "SELECT * FROM biblioteca";
            $res = $conn->query($sql);
            $qtd = $res->num_rows;

            if($qtd > 0){
                while($row = $res->fetch_object()){
                    print "<option value='".$row->id_biblioteca."'>".$row->nome_biblioteca."</option>";
                }
            }
        ?>
    </select>
    </div>
    <button type="submit" class="btn btn-success">Enviar</button>
</form>