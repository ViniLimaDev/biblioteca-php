<h1>Editar Usuário</h1>
<?php
	$sql = "SELECT * FROM usuario 
			WHERE id_usuario=".$_REQUEST['id_usuario'];
	$res = $conn->query($sql);
	$row = $res->fetch_object();
?>
<h1>Cadastrar Usuário</h1>
<form action="?page=salvar-usuario" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id_usuario" value=<?php print $row->id_usuario;?>>
    <div class="mb-3">
        <label>Nome do usuário</label>
        <input type="text" name="nome_usuario" class="form-control" value=<?php print $row->nome_usuario;?>>
    </div>
    <div class="mb-3">
        <label>CPF do usuário</label>
        <input type="text" name="cpf_usuario" class="form-control" value=<?php print $row->cpf_usuario;?>>
    </div>
    <div class="mb-3">
        <label>Endereço</label>
        <input type="text" name="end_usuario" class="form-control" value=<?php print $row->end_usuario;?>>
    </div>
    <div class="mb-3">
        <label>E-mail</label>
        <input type="email" name="email_usuario" class="form-control" value=<?php print $row->email_usuario;?>>
    </div>
    <div class="mb-3">
        <label>Telefone</label>
        <input type="text" name="fone_usuario" class="form-control" value=<?php print $row->fone_usuario;?>>
    </div>
    <div class="mb-3">
        <label>Data de Nascimento</label>
        <input type="date" name="dt_nasc_usuario" class="form-control" value=<?php print $row->dt_nasc_usuario;?>>
    </div>
    <div class="mb-3">
        <p>Gênero:</p>
        <div class="form-check-inline">
            <input class="form-check-input" type="radio" name="genero_usuario" value="m">
            <label class="form-check-label" for="flexRadioDefault1">
            Masculino
            </label>
        </div>
        <div class="form-check-inline">
            <input class="form-check-input" type="radio" name="genero_usuario" value="f">
            <label class="form-check-label" for="flexRadioDefault1">
            Feminino
            </label>
        </div>
        <div class="form-check-inline">
            <input class="form-check-input" type="radio" name="genero_usuario" value="n">
            <label class="form-check-label" for="flexRadioDefault1">
            Não-Binário
            </label>
        </div>
        <div class="form-check-inline">
            <input class="form-check-input" type="radio" name="genero_usuario" value="o">
            <label class="form-check-label" for="flexRadioDefault1">
            Outro
            </label>
        </div>
    </div>
    <div class="mb-3">
        <button action="submit" class="btn btn-success">Enviar</button>
    </div>
</form>