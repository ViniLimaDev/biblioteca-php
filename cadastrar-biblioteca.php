<h1>Cadastrar Biblioteca</h1>
<form action="?page=salvar-biblioteca" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="mb-3">
		<label>Nome da Biblioteca</label>
		<input type="text" name="nome_biblioteca" class="form-control">
	</div>
	<div class="mb-3">
		<label>Endereço</label>
		<textarea name="end_biblioteca" class="form-control"></textarea>
	</div>
	<div class="mb-3">
		<button type="submit" class="btn btn-success">Enviar</button>
	</div>
</form>