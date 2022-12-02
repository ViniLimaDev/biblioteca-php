<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Biblioteca</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	<nav class="navbar navbar-expand-lg bg-light">
	  <div class="container-fluid">
	    
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarNavDropdown">
	      <ul class="navbar-nav">
	        <li class="nav-item">
	          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
	        </li>
	        
	        <li class="nav-item dropdown">
	          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
	            Biblioteca
	          </a>
	          <ul class="dropdown-menu">
	            <li><a class="dropdown-item" href="?page=cadastrar-biblioteca">Cadastrar</a></li>
	            <li><a class="dropdown-item" href="?page=listar-biblioteca">Listar</a></li>
	          </ul>
	        </li>

	        <li class="nav-item dropdown">
	          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
	            Atendente
	          </a>
	          <ul class="dropdown-menu">
	            <li><a class="dropdown-item" href="?page=cadastrar-atendente">Cadastrar</a></li>
	            <li><a class="dropdown-item" href="?page=listar-atendente">Listar</a></li>
	          </ul>
	        </li>

	        <li class="nav-item dropdown">
	          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
	            Categoria
	          </a>
	          <ul class="dropdown-menu">
	            <li><a class="dropdown-item" href="?page=cadastrar-categoria">Cadastrar</a></li>
	            <li><a class="dropdown-item" href="?page=listar-categoria">Listar</a></li>
	          </ul>
	        </li>

	        <li class="nav-item dropdown">
	          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
	            Livro
	          </a>
	          <ul class="dropdown-menu">
	            <li><a class="dropdown-item" href="?page=cadastrar-livro">Cadastrar</a></li>
	            <li><a class="dropdown-item" href="?page=listar-livro">Listar</a></li>
	          </ul>
	        </li>

	        <li class="nav-item dropdown">
	          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
	            Usuário
	          </a>
	          <ul class="dropdown-menu">
	            <li><a class="dropdown-item" href="?page=cadastrar-usuario">Cadastrar</a></li>
	            <li><a class="dropdown-item" href="?page=listar-usuario">Listar</a></li>
	          </ul>
	        </li>

	        <li class="nav-item dropdown">
	          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
	            Empréstimo
	          </a>
	          <ul class="dropdown-menu">
	            <li><a class="dropdown-item" href="?page=cadastrar-emprestimo">Cadastrar</a></li>
	            <li><a class="dropdown-item" href="?page=listar-emprestimo">Listar</a></li>
	          </ul>
	        </li>

	      </ul>
	    </div>
	  </div>
	</nav>
	<div class="container">
		<div class="row">
			<div class="col-lg-12 mt-5">
				<?php
					//conexao com o banco
					include('config.php');
					
					switch (@$_REQUEST['page']) {
						//biblioteca
						case 'cadastrar-biblioteca':
							include('cadastrar-biblioteca.php');
							break;
						case 'listar-biblioteca':
							include('listar-biblioteca.php');
							break;
						case 'editar-biblioteca':
							include('editar-biblioteca.php');
							break;
						case 'salvar-biblioteca':
							include('salvar-biblioteca.php');
							break;

						//atendente
						case 'cadastrar-atendente':
							include('cadastrar-atendente.php');
							break;
						case 'listar-atendente':
							include('listar-atendente.php');
							break;
						case 'editar-atendente':
							include('editar-atendente.php');
							break;
						case 'salvar-atendente':
							include('salvar-atendente.php');
							break;

						//categoria
						case 'cadastrar-categoria':
							include('cadastrar-categoria.php');
							break;
						case 'listar-categoria':
							include('listar-categoria.php');
							break;
						case 'editar-categoria':
							include('editar-categoria.php');
							break;
						case 'salvar-categoria':
							include('salvar-categoria.php');
							break;

						//livro
						case 'cadastrar-livro':
							include('cadastrar-livro.php');
							break;
						case 'listar-livro':
							include('listar-livro.php');
							break;
						case 'editar-livro':
							include('editar-livro.php');
							break;
						case 'salvar-livro':
							include('salvar-livro.php');
							break;

						//usuario
						case 'cadastrar-usuario':
							include('cadastrar-usuario.php');
							break;
						case 'listar-usuario':
							include('listar-usuario.php');
							break;
						case 'editar-usuario':
							include('editar-usuario.php');
							break;
						case 'salvar-usuario':
							include('salvar-usuario.php');
							break;

						//emprestimo
						case 'cadastrar-emprestimo':
							include('cadastrar-emprestimo.php');
							break;
						case 'listar-emprestimo':
							include('listar-emprestimo.php');
							break;
						case 'editar-emprestimo':
							include('editar-emprestimo.php');
							break;
						case 'salvar-emprestimo':
							include('salvar-emprestimo.php');
							break;
						
						default:
							print "<h1>Bem vindo a nossa Biblioteca</h1>";
					}
				?>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
</body>
</html>