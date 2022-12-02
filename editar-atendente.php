<h1>Editar Atendente</h1>
<?php
    $sql = "SELECT * FROM atendente
            WHERE id_atendente=".$_REQUEST['id_atendente'];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>

<form action="?page=salvar-atendente" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id_atendente" value="<?php print $row->id_atendente;?>">
    <div class="mb-3">
        <label>Nome do atendente</label>
        <input type="text" name="nome_atendente" class="form-control" value="<?php print $row->nome_atendente;?>">
    </div>
    <div class="mb-3">
        <label>CPF do atendente</label>
        <input type="text" name="cpf_atendente" class="form-control" value="<?php print $row->cpf_atendente;?>">
    </div>
    <div class="mb-3">
    <select class="form-select" name="biblioteca_id_biblioteca" aria-label="Selecione a biblioteca">
        <?php
            $sql = "SELECT * FROM biblioteca";
            $res = $conn->query($sql);
            $qtd = $res->num_rows;

            if($qtd > 0){
                while($biblioteca_row = $res->fetch_object()){
                    if($biblioteca_row->id_biblioteca == $row->biblioteca_id_biblioteca){
                        print "<option selected value='".$biblioteca_row->id_biblioteca."'>".$biblioteca_row->nome_biblioteca."</option>";
                    }else{
                        print "<option value='".$biblioteca_row->id_biblioteca."'>".$biblioteca_row->nome_biblioteca."</option>";
                    }
                }
            }
        ?>
    </select>
    </div>
    <button type="submit" class="btn btn-success">Enviar</button>
</form>