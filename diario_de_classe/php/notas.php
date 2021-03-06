<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../css/diarioDeClasse.css">
	<link rel="stylesheet" type="text/css" href="../css/nota.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>
<body>
	<div class="container-geral col-11 row">
		<header>
			<div class="cabecalho col-12 row">
				<h1>diário de classe</h1>
				<a href="../index.html"><i class="fas fa-sign-out-alt" title="sair"></i></a>
			</div>
		</header>
		<nav>
			<div onclick="botaoMenu()" class="menu-para-celular col-12 row">
				<h2>menu</h2>
				<div class="menu-bar" onclick="transformarIcone()">
					<div class="barra-superior" id="superior"></div>
					<div class="barra-central"  id="centro"></div>
					<div class="barra-inferior" id="inferior"></div>	
				</div>
			</div>
			<div class="menu col-12 row" id="menu-cel">
				<ul>
					<li class="filho1"><a href="notas.php">notas</a></li>
					<li><a href="turmas.php">turmas</a></li>
					<li><a href="anotacoes.php">anotações</a></li>
					<li><a href="planoDeAula.php">plano de aula</a></li>
					<li><a href="chamada.php">chamada</a></li>
				</ul>
			</div>
		</nav>
		<section class="col-12 row">
			<div class="container-conteudo col-12 row">
				<div class="botao col-12 row" onclick="botaoNotas()">
					<i class="fas fa-pencil-alt" title="Lançar Nota."></i>
					<h3 title="Lançar Nota." id="tituloNotas">Lançar nota</h3>
				</div>
				<div class="notas col-12 row" id="id-nota">
					<form action="../dao/tbNota.php" method="post">
						<label for="turma" title="Selecione a Turma">turma:</label>
						<select name="tb_nota_turma" id="turma" required>
							<option value=""></option>
							<option value="turma">turma-A</option>
							<option value="turma">turma-B</option>
							<option value="turma">turma-C</option>
						</select>

						<label for="aluno" title="Selecione o Aluno">aluno:</label>
						<select name="tb_nota_id_aluno" id="aluno" required>
							<option value=""></option>
							<option value="aluno">aluno-1</option>
							<option value="aluno">aluno-2</option>
							<option value="aluno">aluno-3</option>
						</select>
						<label for="id_periodo">periodo:</label>
						<input type="text" name="tb_nota_periodo" id="id_periodo">
						<label for="nota" title="Insira a Nota do Aluno">nota:</label>
						<input type="text" name="tb_nota_nota" placeholder="Preencha aqui" required>						
						<button type="submit" title="Salvar Nota.">salvar</button>
					</form>
					
				</div>
			</div>
		</section>
		<footer>
			<div class="rodape col-12 row">
				<p>Desenvolvido por: Robson Alves Moreira Pires.</p>
				<p>robson.amp@outlook.com</p>
			</div>
		</footer>
	</div>
	<script type="text/javascript" src="../js/diario_de_classe.js"></script>
</body>
</html>